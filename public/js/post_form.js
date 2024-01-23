$(document).ready(function () {
    // Adiciona um ouvinte de evento para o formulário
    $("#member-form").submit(function (e) {
        e.preventDefault(); // Impede o envio padrão do formulário

        // Cria um objeto FormData para os dados do formulário
        var formData = new FormData(this);

        // Chama a função AJAX para enviar os dados
        postDataForm(formData);
    });

    function postDataForm(formData) {
        $.ajax({
            url: "/members",
            type: "POST",
            data: formData,
            contentType: false, // Importante para o envio de arquivos
            processData: false, // Importante para o envio de arquivos
            success: function (data) {
                if (data) {
                    window.location.href = "/successful";
                }
            },
            error: function (error) {
                console.error("Erro ao enviar dados:", error);
                // Lógica adicional em caso de erro, se necessário
            },
        });
    }
});
