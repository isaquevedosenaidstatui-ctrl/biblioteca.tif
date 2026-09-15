$(document).ready(function () {

    let hoje = new Date();

    let ano = hoje.getFullYear();
    let mes = String(hoje.getMonth() + 1).padStart(2, "0");
    let dia = String(hoje.getDate()).padStart(2, "0");

    let dataHoje = ano + "-" + mes + "-" + dia;

    $("#data").attr("min", dataHoje);


    $("#cadastro_reserva").click(function (event) {

        event.preventDefault();

        let professor = $("#professor").val().trim();
        let turma = $("#turma").val();
        let data = $("#data").val();
        let hora_inicio = $("#hora_inicio").val();
        let hora_fim = $("#hora_fim").val();
        let finalidade = $("#finalidade").val().trim();


        if (
            professor === "" ||
            turma === "" ||
            data === "" ||
            hora_inicio === "" ||
            hora_fim === "" ||
            finalidade === ""
        ) {

            Swal.fire({
                icon: "warning",
                title: "Atenção",
                text: "Preencha todos os campos."
            });

            return;
        }


        if (data < dataHoje) {

            Swal.fire({
                icon: "warning",
                title: "Data inválida",
                text: "Não é possível reservar em uma data que já passou."
            });

            return;
        }


        if (hora_fim <= hora_inicio) {

            Swal.fire({
                icon: "warning",
                title: "Horário inválido",
                text: "O horário de término deve ser depois do horário de início."
            });

            return;
        }


        $.ajax({

            url: "/cadastro_reserva",

            type: "POST",

            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            },

            data: {
                professor: professor,
                turma: turma,
                data: data,
                hora_inicio: hora_inicio,
                hora_fim: hora_fim,
                finalidade: finalidade
            },

            beforeSend: function () {

                $("#cadastro_reserva").prop("disabled", true);

            },

            success: function (resposta) {

                console.log("RESPOSTA:", resposta);

                if (resposta.erro === "n") {

                    Swal.fire({
                        icon: "success",
                        title: "Reserva realizada!",
                        text: resposta.mensagem,
                        confirmButtonText: "OK"
                    }).then(function () {

                        window.location.href = "/inicio";

                    });

                } else {

                    Swal.fire({
                        icon: "error",
                        title: "Erro",
                        text: resposta.mensagem
                    });

                }

            },

            error: function (erro) {

                console.log("ERRO COMPLETO:", erro);
                console.log("STATUS:", erro.status);
                console.log("RESPOSTA DO SERVIDOR:", erro.responseText);

                let mensagem = "Não foi possível salvar a reserva.";

                if (erro.responseJSON) {

                    if (erro.responseJSON.mensagem) {
                        mensagem = erro.responseJSON.mensagem;
                    }

                    if (erro.responseJSON.message) {
                        mensagem = erro.responseJSON.message;
                    }

                }

                Swal.fire({
                    icon: "error",
                    title: "Erro ao salvar",
                    text: mensagem
                });

            },

            complete: function () {

                $("#cadastro_reserva").prop("disabled", false);

            }

        });

    });

});