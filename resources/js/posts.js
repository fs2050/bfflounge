const { head, isArray, cloneDeep, isNumber, has } = require("lodash");

let tip = {
    profile_id: "",
    value: 0,
    message: "",
    tip_id: "",
    payment_token: "",
};

let buyer = {};

$(() => {
    $(".btn-send-tip").on("click", (e) => {
        $("#sendTipDialog").modal("show");
        const { profile_id } = e.target.dataset;
        tip.profile_id = profile_id;
    });

    $(".btn-tip-value").on("click", (e) => {
        const { value } = e.target.dataset;
        setTipValue(value);
    });

    $("[name=tip_message]").on("keyup", (e) => {
        tip.message = e.target.value;
        console.log("tip", tip);
    });

    $(".btn-go-to-cards").on("click", goToCards);

    $(".btn-tip-next-step").on("click", () => {
        loadBuyers();
    });

    $(".btn-submit-tip").on("click", submitTip);
});

function goToCards() {
    window.location.href = "/cards";
}

function setTipValue(val) {
    tip.value = parseFloat(val);
    $(".btn-tip-show-value").html(`${val}*`);
}

function loadBuyers() {
    $.ajax({
        method: "GET",
        url: `payments/gerencianet/buyer`,
        success: (buyers) => {
            if (isArray(buyers) && buyers.length > 0) {
                const first = head(buyers);
                buyer = cloneDeep(first);

                $(".table-cards").find("tbody").html("");

                buyer.cards.forEach((c, i) => {
                    const tr = $("<tr>");

                    tr.data("id", c.id);

                    const typeColumn = $("<td>");
                    typeColumn.html(c.type);

                    const descriptionColumn = $("<td>");
                    descriptionColumn.html(c.description);

                    const radioColumn = $("<input>");
                    radioColumn.attr("type", "radio");
                    radioColumn.attr("name", "radio_card_item");
                    radioColumn.data("id", c.id);

                    if (c.main) {
                        radioColumn.prop("checked", true);
                    }

                    tr.append(typeColumn);
                    tr.append(descriptionColumn);
                    tr.append(radioColumn);

                    $(".table-cards").find("tbody").append(tr);
                });
            }
        },
        error: () => {
            swal(
                "Ocorreu um erro!",
                "Não foi possível realzar a operação.",
                "error"
            );
        },
    });
}

function pad(str, max) {
    str = str.toString();
    return str.length < max ? pad("0" + str, max) : str;
}

function prepareCardData(card) {
    return {
        brand: card.type,
        number: card.number.replace(/\ /, ""),
        cvv: card.cvv,
        expiration_year: card.year,
        expiration_month: pad(card.month, 2),
    };
}

function registerTip() {
    const tipData = {
        status: 1,
        price: tip.value,
        description: tip.message,
        profile_id: tip.profile_id,
    };
    $.ajax({
        method: "POST",
        url: `tips`,
        data: tipData,
        success: (data) => {
            swal(
                "Tip registrada!",
                "Operação realizada com sucesso",
                "success"
            );
            console.log("registerTip response", data);
            tip.tip_id = data.id;
            registerPayment();
        },
        error: () => {
            swal(
                "Ocorreu um erro!",
                "Não foi possível realzar a operação.",
                "error"
            );
        },
    });
}

function registerPayment() {
    const paymentData = {
        product: {
            type: "tip",
            id: tip.tip_id,
        },
        value: tip.value,
        token: tip.payment_token,
        installments: 1,
    };
    $.ajax({
        method: "POST",
        url: `payments/gerencianet/card-payments`,
        data: paymentData,
        success: (resp) => {
            swal(
                "Pagamento registrado!",
                "Operação realizada com sucesso",
                "success"
            );
            console.log(resp);
            tip = {
                profile_id: "",
                value: 0,
                message: "",
                tip_id: "",
                payment_token: "",
            };
        },
        error: () => {
            swal(
                "Ocorreu um erro!",
                "Não foi possível realzar a operação.",
                "error"
            );
        },
    });
}

function submitTip() {
    const cardId = $("[name=radio_card_item]:checked").data("id");
    if (isNumber(cardId)) {
        $.ajax({
            method: "GET",
            url: `payments/gerencianet/cards/${cardId}`,
            success: (resp) => {
                if (has(resp, "card.type")) {
                    $(".preload").show();
                    const cardData = prepareCardData(resp.card);
                    window.gerencianetCheckout.getPaymentToken(
                        cardData,
                        function (error, { data }) {
                            if (error) {
                                swal("Ocorreu um erro!", error, "error");
                                console.error(error);
                            } else {
                                tip.payment_token = data.payment_token;
                                // Trata a resposta
                                registerTip();
                                $(".preload").hide();
                            }
                        }
                    );
                }
            },
            error: () => {
                swal(
                    "Ocorreu um erro!",
                    "Não foi possível realzar a operação.",
                    "error"
                );
            },
        });
    }
}
