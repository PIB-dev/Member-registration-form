$(document).ready(function () {
    $("#cep").blur(function () {
        var cep = $(this).val();
        cep = cep.replace(new RegExp("-"), "");
        if (cep.length === 8 && $.isNumeric(cep)) {
            consultarCep(cep);
        }
    });

    function consultarCep(cep) {
        $.ajax({
            url: "/consultar-cep",
            type: "GET",
            data: { cep: cep },
            success: function (data) {
                preencherCampos(data);
            },
            error: function (error) {
                console.error("Erro ao consultar CEP:", error);
            },
        });
    }

    function preencherCampos(data) {
        $("#logradouro").val(data.logradouro);
        $("#bairro").val(data.bairro);
        $("#localidade").val(data.localidade);
        $("#uf").val(data.uf);
        $("#complemento").val(data.complemento);
    }
});
