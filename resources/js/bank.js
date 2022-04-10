$(() => {
    $(".btn-add-account").on("click", () => {
        $("#accountDialog").modal("show");
        hideAllFields();
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
});

function picPaySelected() {
    $("[name=firstname]").parent().parent().show();
    $("[name=lastname]").parent().parent().show();
    $("[name=document]").parent().parent().show();
    $("[name=phone]").parent().parent().show();
    $("[name=state]").parent().parent().hide();
    $("[name=city]").parent().parent().hide();
    $("[name=street]").parent().parent().hide();
    $("[name=number]").parent().parent().hide();
    $("[name=neighborhood]").parent().parent().hide();
    $("[name=cep]").parent().parent().hide();
}

function gerencianetSelected() {
    $("[name=firstname]").parent().parent().show();
    $("[name=lastname]").parent().parent().show();
    $("[name=document]").parent().parent().show();
    $("[name=phone]").parent().parent().show();
    $("[name=state]").parent().parent().show();
    $("[name=city]").parent().parent().show();
    $("[name=street]").parent().parent().show();
    $("[name=number]").parent().parent().show();
    $("[name=neighborhood]").parent().parent().show();
    $("[name=cep]").parent().parent().show();
}

function hideAllFields() {
    $("[name=firstname]").parent().parent().hide();
    $("[name=lastname]").parent().parent().hide();
    $("[name=document]").parent().parent().hide();
    $("[name=phone]").parent().parent().hide();
    $("[name=state]").parent().parent().hide();
    $("[name=city]").parent().parent().hide();
    $("[name=street]").parent().parent().hide();
    $("[name=number]").parent().parent().hide();
    $("[name=neighborhood]").parent().parent().hide();
    $("[name=cep]").parent().parent().hide();
}
