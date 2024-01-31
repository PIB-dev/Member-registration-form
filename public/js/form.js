var stageCount = 1;

function advanceToStage() {
    document.getElementById(`stage${stageCount}`).classList.add("hidden");
    document
        .getElementById(`stage${stageCount + 1}`)
        .classList.remove("hidden");

    stageCount += 1;
    if (stageCount > 1) {
        document
            .getElementById(`button-return-stage`)
            .classList.remove("hidden");
    }

    if (stageCount == 4) {
        document.getElementById(`button-advance-stage`).classList.add("hidden");

        generatePreview();
    }
}

function returnToStage() {
    document.getElementById(`stage${stageCount}`).classList.add("hidden");
    document
        .getElementById(`stage${stageCount - 1}`)
        .classList.remove("hidden");

    stageCount -= 1;
    if (stageCount < 4) {
        document
            .getElementById(`button-advance-stage`)
            .classList.remove("hidden");
    }

    if (stageCount == 1) {
        document.getElementById(`button-return-stage`).classList.add("hidden");
    }
}

// var input_img = document.querySelector("#image");
// input_img.addEventListener("change", (e) => {
//     const tgt = e.target || window.event.srcElement;
//     const files = tgt.files;
//     const fr = new FileReader();

//     fr.onload = () => {
//         document.querySelector("#preview-imagem").src = fr.result;
//     };

//     fr.readAsDataURL(files[0]);
// });

function generatePreview() {
    var nome = $("#nome").val();
    var dataNascimento = $("#data_nascimento").val();
    var email = $("#email").val();
    var telefone = $("#telefone").val();
    var tipo = $("#tipo:checked").val();
    var cep = $("#cep").val();
    var logradouro = $("#logradouro").val();
    var numero = $("#numero").val();
    var complemento = $("#complemento").val();
    var bairro = $("#bairro").val();
    var localidade = $("#localidade").val();
    var uf = $("#uf").val();

    // Atualização do conteúdo do preview
    $("#preview-nome").text(nome);
    $("#preview-data_nascimento").text(dataNascimento);
    $("#preview-email").text(email);
    $("#preview-telefone").text(telefone);
    $("#preview-tipo").text(tipo);
    $("#preview-cep").text(cep);
    $("#preview-logradouro").text(logradouro);
    $("#preview-numero").text(numero);
    $("#preview-complemento").text(complemento);
    $("#preview-bairro").text(bairro);
    $("#preview-localidade").text(localidade);
    $("#preview-uf").text(uf);
}

document.getElementById("image").addEventListener("change", function () {
    // Obtém o arquivo selecionado
    var file = this.files[0];

    // Verifica se um arquivo foi selecionado
    if (file) {
        // Verifica o tamanho do arquivo em bytes
        var fileSize = file.size; // em bytes

        var maxSize = 4 * 1024 * 1024; // 4 MB em bytes

        // Verifica se o tamanho do arquivo é maior que o permitido
        if (fileSize > maxSize) {
            alert(
                "A imagem selecionada tem mais de 4mb. Por favor, escolha uma imagem menor."
            );
            // Limpa o campo de input de arquivo para que o usuário possa selecionar uma imagem menor
            this.value = "";
        } else {
            const tgt = this.target || window.event.srcElement;
            const files = tgt.files;
            const fr = new FileReader();

            fr.onload = () => {
                document.querySelector(
                    "#preview-imagem"
                ).style.backgroundImage = `url('${fr.result}')`;
            };

            fr.readAsDataURL(files[0]);
        }
    }
});

$(document).ready(function () {
    $("#telefone").inputmask("(99) 9 9999-9999", { placeholder: " " });
});

$(document).ready(function () {
    $("#cep").inputmask("99999-999", { placeholder: " " });
});

function checkInvalidFields() {
    // Verificar se há campos inválidos
    var camposInvalidos = document.querySelectorAll(":invalid");

    if (camposInvalidos.length > 0) {
        // Exibir um alerta personalizado
        alert("Por favor, preencha todos os campos obrigatórios.");
    }
}
