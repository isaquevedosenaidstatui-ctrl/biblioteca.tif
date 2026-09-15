$(document).ready(function () {

    $("#login_usuario").click(function () {

        let email = $("#email").val().trim();
        let senha = $("#senha").val().trim();

        if (email === "" || senha === "") {

            Swal.fire({
                icon: "warning",
                title: "Atenção",
                text: "Preencha o e-mail e a senha."
            });

            return;
        }

        $.ajax({

            url: "/api/login_novo",

            type: "POST",

            data: {
                email: email,
                senha: senha
            },

            success: function (resposta) {

                console.log("RESPOSTA DO LOGIN:", resposta);

                Swal.fire({
                    icon: "success",
                    title: "Login realizado!",
                    text: "Entrando no sistema..."
                }).then(function () {

                    window.location.assign("/inicio");

                });

            },

            error: function (erro) {

                console.log("STATUS:", erro.status);
                console.log("RESPOSTA:", erro.responseText);
                console.log("ERRO COMPLETO:", erro);

                let mensagem = "Erro ao realizar login.";

                if (
                    erro.responseJSON &&
                    erro.responseJSON.message
                ) {
                    mensagem = erro.responseJSON.message;
                }

                Swal.fire({
                    icon: "error",
                    title: "Erro no login",
                    text: mensagem
                });

            }

        });

    });

});
