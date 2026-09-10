<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cadastro de Reserva</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite('resources/js/cadastro_reserva.js')
</head>

<body style="background-color: #ffffff;">

    <div class="container">

        <!-- LOGO -->
        <div class="text-center mt-4 mb-3">

            <img
                src="https://www.sesisp.org.br/images/Sesi-SP.jpg"
                alt="SESI"
                style="
                    width: 180px;
                    height: 100px;
                    object-fit: contain;
                "
            >

        </div>

        <!-- TÍTULO -->
        <h3 class="text-center fw-bold mt-2">
            Cadastro de Reserva
        </h3>

        <p class="text-center text-muted mb-4">
            Preencha os dados para reservar a biblioteca.
        </p>

        <!-- FORMULÁRIO -->
        <div class="row justify-content-center">

            <div class="col-lg-7 col-md-9 col-sm-12">

                <div class="bg-light p-4 rounded-4 shadow-sm">

                    <!-- PROFESSOR -->
                    <div class="mt-2">

                        <label for="professor" class="form-label fw-semibold">
                            Professor:
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            id="professor"
                            name="professor"
                            placeholder="Digite o nome do professor"
                        >

                    </div>

                    <!-- TURMA -->
                    <div class="mt-3">

                        <label for="turma" class="form-label fw-semibold">
                            Turma:
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            id="turma"
                            name="turma"
                            placeholder="Digite a turma"
                        >

                    </div>

                    <!-- DATA -->
                    <div class="mt-3">

                        <label for="data" class="form-label fw-semibold">
                            Data:
                        </label>

                        <input
                            type="date"
                            class="form-control"
                            id="data"
                            name="data"
                        >

                    </div>

                    <!-- HORA DE INÍCIO -->
                    <div class="mt-3">

                        <label for="hora_inicio" class="form-label fw-semibold">
                            Hora de início:
                        </label>

                        <input
                            type="time"
                            class="form-control"
                            id="hora_inicio"
                            name="hora_inicio"
                        >

                    </div>

                    <!-- HORA DE FIM -->
                    <div class="mt-3">

                        <label for="hora_fim" class="form-label fw-semibold">
                            Hora de término:
                        </label>

                        <input
                            type="time"
                            class="form-control"
                            id="hora_fim"
                            name="hora_fim"
                        >

                    </div>

                    <!-- FINALIDADE -->
                    <div class="mt-3">

                        <label for="finalidade" class="form-label fw-semibold">
                            Finalidade:
                        </label>

                        <textarea
                            class="form-control"
                            id="finalidade"
                            name="finalidade"
                            rows="3"
                            placeholder="Digite a finalidade da reserva"
                        ></textarea>

                    </div>

                    <!-- BOTÃO -->
                    <div class="text-center mt-4">

                        <button
                            id="cadastro_reserva"
                            type="button"
                            class="btn btn-danger px-5 py-2 rounded-3 fw-bold"
                        >
                            Confirmar Reserva
                        </button>

                    </div>

                    <!-- VOLTAR -->
                    <div class="text-center mt-4">

                        <a
                            href="/"
                            class="text-danger fw-bold text-decoration-none"
                        >
                            Voltar para o início
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>