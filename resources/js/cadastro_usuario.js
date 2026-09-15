$(document).ready(function () {

    $("#cadastro_usuario").click(function (event) {

        event.preventDefault();

        $.ajax({
            url: "/api/cadastro_usuario",
            type: "POST",

            data: {
                nome: $("#nome").val(),
                email: $("#email").val(),
                senha: $("#senha").val(),
                data_nascimento: $("#data_nascimento").val(),
                cpf: $("#cpf").val()
            },

            success: function (response) {

                console.log(response);

                if (response.erro == "n") {

                    Swal.fire({
                        icon: "success",
                        title: "Cadastro realizado!",
                        text: "Usuário cadastrado com sucesso!",
                        confirmButtonText: "Ir para o início"
                    }).then(function () {

                        window.location.href = "/inicio";

                    });

                } else {

                    Swal.fire({
                        icon: "error",
                        title: "Erro!",
                        text: response.mensagem
                    });
                }
            },

            error: function (xhr) {

                console.log(xhr.responseText);

                let mensagem = "Erro ao realizar o cadastro.";

                if (xhr.responseJSON && xhr.responseJSON.mensagem) {
                    mensagem = xhr.responseJSON.mensagem;
                }

                Swal.fire({
                    icon: "error",
                    title: "Erro!",
                    text: mensagem
                });
            }
        });
    });
});