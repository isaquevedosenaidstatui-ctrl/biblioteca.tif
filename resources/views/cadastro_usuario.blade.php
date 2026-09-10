<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cadastro de Usuário</title>

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

    @vite('resources/js/cadastro_usuario.js')
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
            Cadastro de Usuário
        </h3>

        <p class="text-center text-muted mb-4">
            Crie sua conta para acessar o sistema de reservas.
        </p>

        <!-- FORMULÁRIO -->
        <div class="row justify-content-center">

            <div class="col-lg-7 col-md-9 col-sm-12">

                <div class="bg-light p-4 rounded-4 shadow-sm">

                    <!-- NOME -->
                    <div class="mt-2">

                        <label for="nome" class="form-label fw-semibold">
                            Nome:
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            id="nome"
                            name="nome"
                            placeholder="Digite seu nome"
                        >

                    </div>

                    <!-- EMAIL -->
                    <div class="mt-3">

                        <label for="email" class="form-label fw-semibold">
                            Email:
                        </label>

                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            placeholder="Digite seu email"
                        >

                    </div>

                    <!-- SENHA -->
                    <div class="mt-3">

                        <label for="senha" class="form-label fw-semibold">
                            Senha:
                        </label>

                        <input
                            type="password"
                            class="form-control"
                            id="senha"
                            name="senha"
                            placeholder="Digite sua senha"
                        >

                    </div>

                    <!-- DATA DE NASCIMENTO -->
                    <div class="mt-3">

                        <label for="data_nascimento" class="form-label fw-semibold">
                            Data de Nascimento:
                        </label>

                        <input
                            type="date"
                            class="form-control"
                            id="data_nascimento"
                            name="data_nascimento"
                        >

                    </div>

                    <!-- CPF -->
                    <div class="mt-3">

                        <label for="cpf" class="form-label fw-semibold">
                            CPF:
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            id="cpf"
                            name="cpf"
                            placeholder="Digite seu CPF"
                        >

                    </div>

                    <!-- BOTÃO -->
                    <div class="text-center mt-4">

                        <button
                            id="cadastro_usuario"
                            type="button"
                            class="btn btn-danger px-5 py-2 rounded-3 fw-bold"
                        >
                            Cadastrar Usuário
                        </button>

                    </div>

                    <!-- LINK PARA LOGIN -->
                    <div class="text-center mt-4">

                        <span class="text-muted">
                            Já possui uma conta?
                        </span>

                        <a
                            href="/login"
                            class="text-danger fw-bold text-decoration-none"
                        >
                            Entrar
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>