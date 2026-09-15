<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Nova Reserva - Biblioteca SESI-024</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f4f6;
            color: #333;
        }

        .navbar {
            height: 90px;
            background: #ffffff;
            border-bottom: 1px solid #ddd;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 55px;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .logo-area img {
            width: 75px;
            height: 55px;
            object-fit: contain;
        }

        .logo-text {
            border-left: 1px solid #ddd;
            padding-left: 17px;
        }

        .logo-text strong {
            display: block;
            font-size: 19px;
            color: #222;
        }

        .logo-text span {
            display: block;
            font-size: 13px;
            color: #777;
            margin-top: 4px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-links a {
            color: #444;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: #b00000;
        }

        .container {
            width: 92%;
            max-width: 850px;
            margin: 30px auto;
        }

        .titulo {
            margin-bottom: 20px;
        }

        .titulo h1 {
            font-size: 27px;
            margin-bottom: 5px;
            color: #252525;
        }

        .titulo p {
            color: #777;
            font-size: 14px;
        }

        .card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 9px;
            padding: 25px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, .04);
        }

        .card h2 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #333;
        }

        .linha {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 15px;
        }

        .campo {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        .campo label {
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .campo input,
        .campo select,
        .campo textarea {
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            outline: none;
            background: white;
        }

        .campo input:focus,
        .campo select:focus,
        .campo textarea:focus {
            border-color: #b00000;
        }

        .campo textarea {
            min-height: 90px;
            resize: vertical;
        }

        .acoes {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
            padding-top: 18px;
            border-top: 1px solid #eee;
        }

        .btn-voltar {
            text-decoration: none;
            color: #555;
            border: 1px solid #ccc;
            padding: 10px 18px;
            border-radius: 5px;
            font-size: 14px;
        }

        .btn-voltar:hover {
            background: #f2f2f2;
        }

        .btn-confirmar {
            border: none;
            background: #b00000;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-confirmar:hover {
            background: #8e0000;
        }

        footer {
            border-top: 1px solid #ddd;
            text-align: center;
            padding: 17px;
            color: #888;
            font-size: 12px;
            margin-top: 30px;
        }

        @media (max-width: 600px) {

            .navbar {
                height: 80px;
                padding: 0 18px;
            }

            .logo-area img {
                width: 60px;
                height: 45px;
            }

            .logo-text strong {
                font-size: 15px;
            }

            .logo-text span {
                font-size: 11px;
            }

            .nav-links {
                gap: 10px;
            }

            .nav-links a:first-child {
                display: none;
            }

            .container {
                width: 94%;
                margin: 22px auto;
            }

            .titulo h1 {
                font-size: 23px;
            }

            .card {
                padding: 18px;
            }

            .linha {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .acoes {
                flex-direction: column;
            }

            .btn-voltar,
            .btn-confirmar {
                width: 100%;
                text-align: center;
            }

        }

    </style>

</head>

<body>

    <nav class="navbar">

        <div class="logo-area">

            <img
                src="https://www.sesisp.org.br/images/Sesi-SP.jpg"
                alt="SESI"
            >

            <div class="logo-text">

                <strong>
                    Biblioteca SESI-024
                </strong>

                <span>
                    Sistema de reserva da biblioteca escolar
                </span>

            </div>

        </div>

        <div class="nav-links">

            <a href="/inicio">
                Início
            </a>

            <a href="/cadastro_reserva">
                Nova Reserva
            </a>

        </div>

    </nav>


    <main class="container">

        <div class="titulo">

            <h1>
                Nova Reserva
            </h1>

            <p>
                Preencha os dados abaixo para reservar a biblioteca.
            </p>

        </div>


        <div class="card">

            <h2>
                Dados da reserva
            </h2>


            <form id="formReserva">

                <div class="linha">

                    <div class="campo">

                        <label for="professor">
                            Professor
                        </label>

                        <input
                            type="text"
                            id="professor"
                            placeholder="Nome do professor"
                        >

                    </div>


                    <div class="campo">

                        <label for="turma">
                            Turma
                        </label>

                        <select id="turma">

                            <option value="">
                                Selecione a turma
                            </option>

                            <option value="1º Ano A">
                                1º Ano A
                            </option>

                            <option value="1º Ano B">
                                1º Ano B
                            </option>

                            <option value="2º Ano A">
                                2º Ano A
                            </option>

                            <option value="2º Ano B">
                                2º Ano B
                            </option>

                            <option value="3º Ano A">
                                3º Ano A
                            </option>

                            <option value="3º Ano B">
                                3º Ano B
                            </option>

                        </select>

                    </div>

                </div>


                <div class="linha">

                    <div class="campo">

                        <label for="data">
                            Data
                        </label>

                        <input
                            type="date"
                            id="data"
                        >

                    </div>


                    <div class="campo">

                        <label for="hora_inicio">
                            Hora de início
                        </label>

                        <input
                            type="time"
                            id="hora_inicio"
                        >

                    </div>

                </div>


                <div class="linha">

                    <div class="campo">

                        <label for="hora_fim">
                            Hora de término
                        </label>

                        <input
                            type="time"
                            id="hora_fim"
                        >

                    </div>

                    <div></div>

                </div>


                <div class="campo">

                    <label for="finalidade">
                        Finalidade da reserva
                    </label>

                    <textarea
                        id="finalidade"
                        placeholder="Informe o objetivo da utilização da biblioteca"
                    ></textarea>

                </div>


                <div class="acoes">

                    <a
                        href="/inicio"
                        class="btn-voltar"
                    >
                        Cancelar
                    </a>

                    <button
                        type="submit"
                        id="cadastro_reserva"
                        class="btn-confirmar"
                    >
                        Confirmar reserva
                    </button>

                </div>

            </form>

        </div>

    </main>


    <footer>

        SESI-024 • Sistema de Reserva da Biblioteca

    </footer>


    <script>

        $(document).ready(function () {

            let hoje = new Date();

            let ano = hoje.getFullYear();

            let mes = String(hoje.getMonth() + 1).padStart(2, "0");

            let dia = String(hoje.getDate()).padStart(2, "0");

            let dataHoje = ano + "-" + mes + "-" + dia;


            $("#data").attr("min", dataHoje);


            $("#formReserva").submit(function (event) {

                event.preventDefault();


                let professor = $("#professor").val().trim();

                let turma = $("#turma").val();

                let data = $("#data").val();

                let horaInicio = $("#hora_inicio").val();

                let horaFim = $("#hora_fim").val();

                let finalidade = $("#finalidade").val().trim();


                if (
                    professor === "" ||
                    turma === "" ||
                    data === "" ||
                    horaInicio === "" ||
                    horaFim === "" ||
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
                        text: "Não é possível fazer uma reserva para um dia que já passou."
                    });

                    return;
                }


                if (horaFim <= horaInicio) {

                    Swal.fire({
                        icon: "warning",
                        title: "Horário inválido",
                        text: "O horário de término deve ser depois do horário de início."
                    });

                    return;
                }


                let botao = $("#cadastro_reserva");

                botao.prop("disabled", true);

                botao.text("Salvando...");


                $.ajax({

                    url: "/cadastro_reserva",

                    type: "POST",

                    data: {
                        professor: professor,
                        turma: turma,
                        data: data,
                        hora_inicio: horaInicio,
                        hora_fim: horaFim,
                        finalidade: finalidade
                    },

                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    },

                    success: function (resposta) {

                        console.log("RESPOSTA DO LARAVEL:", resposta);


                        if (resposta.erro === "n") {

                            Swal.fire({
                                icon: "success",
                                title: "Reserva realizada!",
                                text: "A reserva foi salva no banco de dados.",
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

                        console.log("ERRO:", erro);

                        console.log(
                            "RESPOSTA:",
                            erro.responseText
                        );


                        let mensagem = "Não foi possível salvar a reserva.";


                        if (erro.responseJSON) {

                            if (erro.responseJSON.mensagem) {

                                mensagem = erro.responseJSON.mensagem;

                            } else if (erro.responseJSON.message) {

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

                        botao.prop("disabled", false);

                        botao.text("Confirmar reserva");

                    }

                });

            });

        });

    </script>

</body>

</html>
