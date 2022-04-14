const cardValidator = require("card-validator");
let selectedCardId = null;

$(() => {
    $("[name=cc_number]").mask("0000 0000 0000 0000");
    $("[name=cc_cvv]").mask("000");
    $("[name=phone]").mask("+00(00)00000-0000");
    $("[name=document]").mask("000.000.000-00", { reverse: true });
    $("[name=zipcode]").mask("00000-000");
    $("[name=number]").mask("000000");

    $(".btn-add-card").on("click", () => {
        $("#addCardDialog").modal("show");
    });

    $("[name=cc_number]").on("keyup", () => {
        cardNumberIsValid();
    });

    $(".btn-continue").on("click", submit);

    $(".btn-select-card").on("click", (e) => {
        if (Object.keys(e.target.dataset).length > 0) {
            const { cardId } = e.target.dataset;
            selectedCardId = cardId;
            enableCardOptions();
        }
    });

    $(".card-options")
        .find(".btn-delete")
        .on("click", () => {
            swal(
                {
                    title: "Confirmação",
                    text: "Deseja excluir este cartão?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Sim, excluir",
                    cancelButtonText: "Cancelar",
                    closeOnConfirm: false,
                },
                function () {
                    destroyCard();
                }
            );
        });

    $(".card-options")
        .find(".btn-card-main")
        .on("click", () => {
            swal(
                {
                    title: "Confirmação",
                    text: "Deseja tornar esse cartão principal?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-warning",
                    confirmButtonText: "Sim",
                    cancelButtonText: "Cancelar",
                    closeOnConfirm: false,
                },
                function () {
                    setMain();
                }
            );
        });

    loadCurrentBuyer();
});

function disableCardOptions() {
    $(".card-options")
        .find(".btn")
        .each((i, e) => {
            $(e).prop("disabled", true);
        });
}

function enableCardOptions() {
    $(".card-options")
        .find(".btn")
        .each((i, e) => {
            $(e).prop("disabled", false);
        });

    setTimeout(() => {
        disableCardOptions();
    }, 10000);
}

function getCardType() {
    const cardNumber = cardValidator.number($("[name=cc_number]").val());
    if (cardNumber.card) {
        return cardNumber.card.type;
    }
    return null;
}

function cardNumberIsValid() {
    const cardNumber = cardValidator.number($("[name=cc_number]").val());
    if (cardNumber.isPotentiallyValid && cardNumber.card) {
        const icon = $("<i>");
        icon.attr({ class: `fab fa-cc-${cardNumber.card.type}` });
        $(".box-card").html("");
        $(".box-card").append(icon);
    } else {
        $(".box-card").html(`<i class="fas fa-credit-card"></i>`);
    }
    return cardNumber.isValid;
}

function expirationIsValid() {
    const expiration = cardValidator.expirationDate({
        month: $("[name=cc_month]").val(),
        year: $("[name=cc_year]").val(),
    });
    return expiration.isValid;
}

function cvvIsValid() {
    const cvv = cardValidator.cvv($("[name=cc_cvv]").val());
    return cvv.isValid;
}

function validateDocument() {
    const _cpf = (cpf) => {
        cpf = cpf.replace(/[^\d]+/g, "");
        if (cpf === "") return false;
        if (
            cpf.length !== 11 ||
            cpf === "00000000000" ||
            cpf === "11111111111" ||
            cpf === "22222222222" ||
            cpf === "33333333333" ||
            cpf === "44444444444" ||
            cpf === "55555555555" ||
            cpf === "66666666666" ||
            cpf === "77777777777" ||
            cpf === "88888888888" ||
            cpf === "99999999999"
        ) {
            return false;
        }
        let add = 0;
        for (let i = 0; i < 9; i++) {
            add += parseInt(cpf.charAt(i)) * (10 - i);
        }
        let rev = 11 - (add % 11);
        if (rev === 10 || rev === 11) {
            rev = 0;
        }
        if (rev !== parseInt(cpf.charAt(9))) {
            return false;
        }
        add = 0;
        for (let i = 0; i < 10; i++) {
            add += parseInt(cpf.charAt(i)) * (11 - i);
        }
        rev = 11 - (add % 11);
        if (rev === 10 || rev === 11) {
            rev = 0;
        }
        if (rev !== parseInt(cpf.charAt(10))) {
            return false;
        }
        return true;
    };
    const val = $("[name=document]").val();
    return _cpf(val);
}

function getPersonData() {
    return {
        first_name: $("[name=first_name]").val(),
        last_name: $("[name=last_name]").val(),
        document: $("[name=document]").val(),
        birth: $("[name=birth]").val(),
        email: $("[name=email]").val(),
        phone: $("[name=phone]").val(),
        street: $("[name=street]").val(),
        number: $("[name=number]").val(),
        zipcode: $("[name=zipcode]").val(),
        neighborhood: $("[name=neighborhood]").val(),
        state: $("[name=state]").val(),
        city: $("[name=city]").val(),
        adult: $("[name=flexRadioDefault]").is(":checked"),
        card: {
            type: getCardType(),
            number: $("[name=cc_number]").val(),
            month: $("[name=cc_month]").val(),
            year: $("[name=cc_year]").val(),
            cvv: $("[name=cc_cvv]").val(),
        },
    };
}

function loadCurrentBuyer() {
    if ($("[name=buyer]").length) {
        const currentBuyer = JSON.parse($("[name=buyer]").val());
        if (typeof currentBuyer !== "object") {
            return;
        }

        $("[name=first_name]").val(currentBuyer.first_name);
        $("[name=last_name]").val(currentBuyer.last_name);
        $("[name=document]").val(currentBuyer.document);
        $("[name=birth]").val(currentBuyer.birth);
        $("[name=email]").val(currentBuyer.email);
        $("[name=phone]").val(currentBuyer.phone);
        $("[name=street]").val(currentBuyer.street);
        $("[name=number]").val(currentBuyer.number);
        $("[name=zipcode]").val(currentBuyer.zipcode);
        $("[name=neighborhood]").val(currentBuyer.neighborhood);
        $("[name=state]").val(currentBuyer.state);
        $("[name=city]").val(currentBuyer.city);

        $("[name=first_name]").prop("readonly", true);
        $("[name=last_name]").prop("readonly", true);
        $("[name=document]").prop("readonly", true);
        $("[name=birth]").prop("readonly", true);
        $("[name=email]").prop("readonly", true);
        $("[name=phone]").prop("readonly", true);

        $("[name=street]").prop("readonly", true);
        $("[name=number]").prop("readonly", true);
        $("[name=zipcode]").prop("readonly", true);
        $("[name=neighborhood]").prop("readonly", true);
        $("[name=state]").prop("readonly", true);
        $("[name=city]").prop("readonly", true);

        $("[name=flexRadioDefault]").prop("checked", true);
        $(".btn-reset").hide();
    } else {
        $("[name=first_name]").prop("readonly", false);
        $("[name=last_name]").prop("readonly", false);
        $("[name=document]").prop("readonly", false);
        $("[name=birth]").prop("readonly", false);
        $("[name=email]").prop("readonly", false);
        $("[name=phone]").prop("readonly", false);

        $("[name=street]").prop("readonly", false);
        $("[name=number]").prop("readonly", false);
        $("[name=zipcode]").prop("readonly", false);
        $("[name=neighborhood]").prop("readonly", false);
        $("[name=state]").prop("readonly", false);
        $("[name=city]").prop("readonly", false);

        $("[name=flexRadioDefault]").prop("checked", false);
        $(".btn-reset").show();
    }
}

function destroyCard() {
    $.ajax({
        method: "DELETE",
        url: `payments/gerencianet/cards/${selectedCardId}`,
        success: () => {
            swal("Sucesso!", "Operação realizada com sucesso.", "success");
            setTimeout(() => {
                window.location.reload();
            }, 3000);
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

function setMain() {
    $.ajax({
        method: "PUT",
        url: `payments/gerencianet/cards/${selectedCardId}/main`,
        success: () => {
            swal("Sucesso!", "Operação realizada com sucesso.", "success");
            setTimeout(() => {
                window.location.reload();
            }, 3000);
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

function submit() {
    const data = getPersonData();
    let nullables = 0;

    Object.entries(data).forEach(([k, v]) => {
        if (v === null || v === "") {
            nullables += 1;
        }
    });

    if (!validateDocument()) {
        swal("CPF Inválido!", "Insira um CPF válido.", "error");
        return;
    }

    if (nullables > 0) {
        swal(
            "Existem campos não preenchidos!",
            "Verifique os campos e tente novamente.",
            "error"
        );
        return;
    }

    if (!data.adult) {
        swal(
            "Menor de 18 anos!",
            "Você não tem permissão para acessar a plataforma.",
            "error"
        );
        return;
    }

    if (!cardNumberIsValid()) {
        swal("Cartão Inválido!", "Verifique o número do cartão.", "error");
        return;
    }

    if (!expirationIsValid()) {
        swal("Cartão Inválido!", "Verifique a data de validade.", "error");
        return;
    }

    if (!cvvIsValid()) {
        swal("Cartão Inválido!", "Verifique o código de segurança.", "error");
        return;
    }

    $.ajax({
        method: "POST",
        url: "payments/gerencianet/buyer",
        data,
        success: () => {
            swal("Sucesso!", "Operação realizada com sucesso.", "success");
            $("#addCardDialog").modal("hide");
            setTimeout(() => {
                window.location.reload();
            }, 3000);
        },
        error: () => {
            swal(
                "Ocorreu um erro!",
                "Não foi possível realzar a operação, verifique os dados.",
                "error"
            );
        },
    });
}
