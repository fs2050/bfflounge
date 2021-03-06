$(() => {
    $("[name=agency]").mask("000000000000");
    $("[name=number].input-account-number").mask("000000000000");
    $("[name=request_value]").mask("#.##0,00", { reverse: true });

    $("[name=person_document]").mask("000.000.000-000", {
        onKeyPress: function (document, e, field, options) {
            var masks = ["000.000.000-000", "00.000.000/0000-00"];
            var mask = document.length > 14 ? masks[1] : masks[0];
            $("[name=person_document]").mask(mask, options);
        },
    });

    $(".btn-add-account").on("click", () => {
        $("#accountDialog").modal("show");
        resetAccountValues();
    });

    $(".btn-edit-banking-account").on("click", (btn) => {
        resetAccountValues();
        const record = JSON.parse(btn.target.dataset["record"]);
        $("[name=id]").val(record.id);
        $("[name=person_name]").val(record.person_name);
        $("[name=person_document]").val(record.person_document);
        $("[name=bank_id]").val(record.bank_id);
        $("[name=agency]").val(record.agency);
        $("[name=number]").val(record.number);
        $("#accountDialog").modal("show");
    });

    $("#accountDialog")
        .find(".btn-close")
        .on("click", () => {
            $("#accountDialog").modal("hide");
        });

    $("#accountDialog")
        .find(".btn-save")
        .on("click", () => {
            submit();
        });

    $(".btn-withdraw-request").on("click", () => {
        $("#withdrawRequestDialog").modal("show");
        $("#withdrawRequestDialog").find("[name=request_value]").val("");
        $("#withdrawRequestDialog")
            .find("[name=request_banking_account_id]")
            .val("");
    });

    $("#withdrawRequestDialog")
        .find(".btn-close")
        .on("click", () => {
            $("#withdrawRequestDialog").modal("hide");
        });

    $("#withdrawRequestDialog")
        .find(".btn-send-withdraw-request")
        .on("click", () => {
            sendWithdrawRequest();
        });

    loadBanks();
});

function loadBanks() {
    $.ajax({
        method: "GET",
        url: "banks",
        success: (data) => {
            $("[name=bank_id]").html("");
            _.sortBy(data, "code").forEach((item) => {
                if (item.code !== null) {
                    const newOption = $("<option>");
                    newOption.val(item.id);
                    newOption.html(`${item.code} - ${item.name}`);
                    $("[name=bank_id]").append(newOption);
                }
            });
        },
        error: (err) => {
            console.log(err);
            swal(
                "Ocorreu um erro!",
                "N??o foi poss??vel realzar a opera????o, verifique os dados.",
                "error"
            );
        },
    });
}

function getAccountValues() {
    const id = $("[name=id]").val();
    const profile_id = $("[name=profile_id]").val();
    const person_name = $("[name=person_name]").val();
    const person_document = $("[name=person_document]").val();
    const bank_id = $("[name=bank_id]").val();
    const agency = $("[name=agency]").val();
    const number = $("[name=number]").val();

    const accountData = {
        id,
        profile_id,
        person_name,
        person_document,
        bank_id,
        agency,
        number,
    };

    const notNullValues = Object.entries(accountData).filter(
        ([k, v]) => v !== null && v !== ""
    );

    if ($("[name=id]").val() !== "") {
        notNullValues.id = $("[name=id]").val();
    }

    return Object.fromEntries(notNullValues);
}

function resetAccountValues() {
    $("[name=person_name]").val("");
    $("[name=person_document]").val("");
    $("[name=bank_id]").val("");
    $("[name=agency]").val("");
    $("[name=number]").val("");
}

function sendWithdrawRequest() {
    const value = $("#withdrawRequestDialog")
        .find("[name=request_value]")
        .val()
        .replace(/\./g, "")
        .replace(/\,/g, ".");
    const banking_account_id = $("#withdrawRequestDialog")
        .find("[name=request_banking_account_id]")
        .val();
    if (value !== "" && banking_account_id !== "") {
        $.ajax({
            method: "POST",
            url: "withdraw-requests",
            data: {
                value,
                banking_account_id,
            },
            success: () => {
                $("#withdrawRequestDialog").modal("hide");
                swal("Sucesso!", "Solicita????o enviada com sucesso.", "success");
                setTimeout(() => {
                    window.location.reload();
                }, 3000);
            },
            error: () => {
                swal(
                    "Ocorreu um erro!",
                    "N??o foi poss??vel realzar a solicita????o, tente mais tarde.",
                    "error"
                );
            },
        });
    }
}

function submit() {
    const data = getAccountValues();
    let url = "banking-accounts";
    let method = "POST";

    if ($("[name=id]").val() !== "") {
        method = "PUT";
        const id = $("[name=id]").val();
        url = `banking-accounts/${id}`;
    }

    $.ajax({
        method,
        url,
        data,
        success: () => {
            $("#accountDialog").modal("hide");
            swal("Sucesso!", "Opera????o realizada com sucesso.", "success");
            resetAccountValues();
            setTimeout(() => {
                window.location.reload();
            }, 3000);
        },
        error: () => {
            swal(
                "Ocorreu um erro!",
                "N??o foi poss??vel realzar a opera????o, verifique os dados.",
                "error"
            );
        },
    });
}
