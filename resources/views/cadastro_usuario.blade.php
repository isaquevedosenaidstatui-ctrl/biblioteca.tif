<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro - Biblioteca SESI-024</title>

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

        .container {
            width: 92%;
            max-width: 520px;
            margin: 35px auto;
        }

        .topo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 85px;
            height: 55px;
            object-fit: contain;
            margin-right: 15px;
        }

        .titulo {
            margin: 0;
        }

        .titulo h1 {
            font-size: 27px;
            margin-bottom: 5px;
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
            font-size: 19px;
            margin-bottom: 20px;
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

        .campo input {
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            font-size: 14px;
            outline: none;
        }

        .campo input:focus {
            border-color: #b00000;
        }

        .btn {
            width: 100%;
            border: none;
            background: #b00000;
            color: white;
            padding: 11px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 5px;
        }

        .btn:hover {
            background: #8e0000;
        }

        .login {
            text-align: center;
            margin-top: 16px;
            font-size: 13px;
            color: #777;
        }

        .login a {
            color: #b00000;
            text-decoration: none;
            font-weight: bold;
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

            .container {
                width: 94%;
                margin: 25px auto;
            }

            .logo {
                width: 75px;
                height: 50px;
                margin-right: 12px;
            }

            .titulo h1 {
                font-size: 23px;
            }

            .card {
                padding: 20px;
            }
        }
    </style>

</head>

<body>

    <main class="container">

        <div class="topo">

            <img
                src="https://www.sesisp.org.br/images/Sesi-SP.jpg"
                alt="SESI"
                class="logo"
            >

            <div class="titulo">

                <h1>
                    Criar conta
                </h1>

                <p>
                    Cadastre seus dados para acessar o sistema.
                </p>

            </div>

        </div>


        <div class="card">

            <h2>
                Dados do usuário
            </h2>


            <form>

                <div class="campo">

                    <label for="nome">
                        Nome completo
                    </label>

                    <input
                        type="text"
                        id="nome"
                        placeholder="Digite seu nome completo"
                    >

                </div>


                <div class="campo">

                    <label for="email">
                        E-mail
                    </label>

                    <input
                        type="email"
                        id="email"
                        placeholder="Digite seu e-mail"
                    >

                </div>


                <div class="campo">

                    <label for="senha">
                        Senha
                    </label>

                    <input
                        type="password"
                        id="senha"
                        placeholder="Digite sua senha"
                    >

                </div>


                <div class="campo">

                    <label for="data_nascimento">
                        Data de nascimento
                    </label>

                    <input
                        type="date"
                        id="data_nascimento"
                    >

                </div>


                <div class="campo">

                    <label for="cpf">
                        CPF
                    </label>

                    <input
                        type="text"
                        id="cpf"
                        placeholder="Digite seu CPF"
                    >

                </div>


                <button
                    type="button"
                    id="cadastro_usuario"
                    class="btn"
                >
                    Criar conta
                </button>


                <div class="login">

                    Já possui uma conta?

                    <a href="/login">
                        Fazer login
                    </a>

                </div>

            </form>

        </div>

    </main>


    <footer>
        SESI-024 • Sistema de Reserva da Biblioteca
    </footer>


    @vite('resources/js/cadastro_usuario.js')

</body>

</html>