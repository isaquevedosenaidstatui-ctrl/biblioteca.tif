$(document).ready(function () {

    $("#cadastro_reserva").click(function () {

        let professor = $("#professor").val();
        let turma = $("#turma").val();
        let data = $("#data").val();
        let horaInicio = $("#hora_inicio").val();
        let horaFim = $("#hora_fim").val();
        let finalidade = $("#finalidade").val();

        if (
            professor == "" ||
            turma == "" ||
            data == "" ||
            horaInicio == "" ||
            horaFim == "" ||
            finalidade == ""
        ) {

            Swal.fire({
                icon: "warning",
                title: "Atenção!",
                text: "Preencha todos os campos."
            });

            return;
        }

        if (horaInicio >= horaFim) {

            Swal.fire({
                icon: "warning",
                title: "Horário inválido!",
                text: "A hora de término deve ser maior que a hora de início."
            });

            return;
        }

        console.log({
            professor: professor,
            turma: turma,
            data: data,
            hora_inicio: horaInicio,
            hora_fim: horaFim,
            finalidade: finalidade
        });

        Swal.fire({
            icon: "success",
            title: "Reserva cadastrada!",
            text: "Sua reserva foi cadastrada com sucesso."
        });

    });

});