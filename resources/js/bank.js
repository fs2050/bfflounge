$(() => {
    $("[name=document]").mask("000.000.000-00", { reverse: true });
    $("[name=phone]").mask("+00(00)00000-0000");

    $(".btn-add-account").on("click", () => {
        $("#accountDialog").modal("show");
        resetAccountValues();
        hideAllFields();
    });

    $(".btn-edit-picpay").on("click", (btn) => {
        resetAccountValues();
        picPaySelected();
        const record = JSON.parse(btn.target.dataset["record"]);
        $("[name=id]").val(record.id);
        $("[name=first_name]").val(record.first_name);
        $("[name=last_name]").val(record.last_name);
        $("[name=document]").val(record.document);
        $("[name=phone]").val(record.phone);
        $("[name=type]").val("picpay");
        $("#accountDialog").modal("show");
    });

    $(".btn-edit-gerencianet").on("click", (btn) => {
        resetAccountValues();
        gerencianetSelected();
        const record = JSON.parse(btn.target.dataset["record"]);
        $("[name=id]").val(record.id);
        $("[name=first_name]").val(record.first_name);
        $("[name=last_name]").val(record.last_name);
        $("[name=document]").val(record.document);
        $("[name=phone]").val(record.phone);
        $("[name=birth]").val(record.birth);
        $("[name=state]").val(record.state);
        $("[name=city]").val(record.city);
        $("[name=street]").val(record.street);
        $("[name=number]").val(record.number);
        $("[name=neighborhood]").val(record.neighborhood);
        $("[name=zipcode]").val(record.zipcode);
        $("[name=type]").val("gerencianet");
        $("#accountDialog").modal("show");
    });

    $("#accountDialog")
        .find(".btn-close")
        .on("click", () => {
            $("#accountDialog").modal("hide");
        });

    $("#accountDialog")
        .find("[name=type]")
        .on("change", (el) => {
            if (el.target.value === "picpay") {
                picPaySelected();
            } else if (el.target.value === "gerencianet") {
                gerencianetSelected();
            } else {
                hideAllFields();
            }
        });

    $("#accountDialog")
        .find(".btn-save")
        .on("click", () => {
            submit();
        });
});

function picPaySelected() {
    $("[name=first_name]").parent().parent().show();
    $("[name=last_name]").parent().parent().show();
    $("[name=document]").parent().parent().show();
    $("[name=phone]").parent().parent().show();
    $("[name=birth]").parent().parent().hide();
    $("[name=state]").parent().parent().hide();
    $("[name=city]").parent().parent().hide();
    $("[name=street]").parent().parent().hide();
    $("[name=number]").parent().parent().hide();
    $("[name=neighborhood]").parent().parent().hide();
    $("[name=zipcode]").parent().parent().hide();
}

function gerencianetSelected() {
    $("[name=first_name]").parent().parent().show();
    $("[name=last_name]").parent().parent().show();
    $("[name=document]").parent().parent().show();
    $("[name=phone]").parent().parent().show();
    $("[name=birth]").parent().parent().show();
    $("[name=state]").parent().parent().show();
    $("[name=city]").parent().parent().show();
    $("[name=street]").parent().parent().show();
    $("[name=number]").parent().parent().show();
    $("[name=neighborhood]").parent().parent().show();
    $("[name=zipcode]").parent().parent().show();
}

function hideAllFields() {
    $("[name=first_name]").parent().parent().hide();
    $("[name=last_name]").parent().parent().hide();
    $("[name=document]").parent().parent().hide();
    $("[name=phone]").parent().parent().hide();
    $("[name=birth]").parent().parent().hide();
    $("[name=state]").parent().parent().hide();
    $("[name=city]").parent().parent().hide();
    $("[name=street]").parent().parent().hide();
    $("[name=number]").parent().parent().hide();
    $("[name=neighborhood]").parent().parent().hide();
    $("[name=zipcode]").parent().parent().hide();
}

function getAccountValues() {
    const first_name = $("[name=first_name]").val();
    const last_name = $("[name=last_name]").val();
    const document = $("[name=document]").val();
    const phone = $("[name=phone]").val();
    const birth = $("[name=birth]").val();
    const state = $("[name=state]").val();
    const city = $("[name=city]").val();
    const street = $("[name=street]").val();
    const number = $("[name=number]").val();
    const neighborhood = $("[name=neighborhood]").val();
    const zipcode = $("[name=zipcode]").val();

    const accountData = {
        first_name,
        last_name,
        document,
        phone,
        birth,
        state,
        city,
        street,
        number,
        neighborhood,
        zipcode,
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
    $("[name=type]").val("");
    $("[name=id]").val("");
    $("[name=first_name]").val("");
    $("[name=last_name]").val("");
    $("[name=document]").val("");
    $("[name=phone]").val("");
    $("[name=birth]").val("");
    $("[name=state]").val("");
    $("[name=city]").val("");
    $("[name=street]").val("");
    $("[name=number]").val("");
    $("[name=neighborhood]").val("");
    $("[name=zipcode]").val("");
}

function submit() {
    const data = getAccountValues();
    let url = "payments/picpay/buyer";
    let method = "POST";

    if ($("[name=type]").val() === "gerencianet") {
        url = "payments/gerencianet/buyer";
    }

    if ($("[name=id]").val() !== "") {
        method = "PUT";
    }

    $.ajax({
        method,
        url,
        data,
        success: () => {
            $("#accountDialog").modal("hide");
            swal("Sucesso!", "Operação realizada com sucesso.", "success");
            resetAccountValues();
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
