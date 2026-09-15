<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Início - Biblioteca SESI-024</title>

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

        /* NAVBAR */

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

        /* CONTAINER */

        .container {
            width: 92%;
            max-width: 1150px;
            margin: 30px auto;
        }

        .header {
            margin-bottom: 25px;
        }

        .header h1 {
            font-size: 27px;
            margin-bottom: 5px;
            color: #252525;
        }

        .header p {
            color: #777;
            font-size: 14px;
        }

        /* CALENDÁRIO */

        .calendario-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 9px;
            padding: 22px;
            margin-bottom: 28px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, .04);
        }

        .calendario-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
        }

        .calendario-header h2 {
            font-size: 19px;
            color: #333;
        }

        .mes {
            font-size: 15px;
            font-weight: bold;
            color: #666;
            text-transform: capitalize;
        }

        .dias-semana {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 6px;
            margin-bottom: 6px;
        }

        .dia-semana {
            text-align: center;
            font-size: 12px;
            font-weight: bold;
            color: #777;
            padding: 7px 0;
        }

        .dias {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 6px;
        }

        .dia {
            min-height: 55px;
            border: 1px solid #eeeeee;
            border-radius: 6px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 14px;
            background: #fafafa;
        }

        .dia.vazio {
            background: transparent;
            border: none;
        }

        .dia.reservado {
            background: #b00000;
            color: white;
            border-color: #b00000;
            font-weight: bold;
        }

        .dia.hoje {
            border: 2px solid #555;
            font-weight: bold;
        }

        .legenda {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 15px;
            font-size: 12px;
            color: #777;
        }

        .legenda-cor {
            width: 13px;
            height: 13px;
            background: #b00000;
            border-radius: 3px;
        }

        /* RESERVAS */

        .titulo-secao {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 14px;
        }

        .reservas {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .reserva {
            background: white;
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            padding: 17px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .04);
        }

        .reserva-topo {
            display: flex;
            justify-content: space-between;
            align-items: center;

            padding-bottom: 11px;
            margin-bottom: 12px;

            border-bottom: 1px solid #eee;
        }

        .data {
            font-weight: bold;
            font-size: 15px;
        }

        .horario {
            background: #eee;
            padding: 5px 8px;
            border-radius: 4px;
            font-size: 12px;
        }

        .info {
            font-size: 13px;
            color: #555;
            margin-bottom: 8px;
        }

        .info strong {
            color: #333;
        }

        .finalidade {
            background: #f6f6f6;
            padding: 9px;
            border-radius: 5px;
            font-size: 13px;
            margin-top: 10px;
            line-height: 1.4;
        }

        .vazio {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            color: #777;
        }

        /* FOOTER */

        footer {
            border-top: 1px solid #ddd;
            text-align: center;
            padding: 17px;
            color: #888;
            font-size: 12px;
            margin-top: 30px;
        }

        /* RESPONSIVO */

        @media (max-width: 900px) {

            .reservas {
                grid-template-columns: repeat(2, 1fr);
            }

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

            .header h1 {
                font-size: 22px;
            }

            .reservas {
                grid-template-columns: 1fr;
            }

            .dia {
                min-height: 43px;
                font-size: 12px;
            }

            .calendario-card {
                padding: 15px;
            }

        }

    </style>

</head>

<body>


    <!-- NAVBAR -->

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


        <!-- CABEÇALHO -->

        <div class="header">

            <div>

                <h1>
                    Reservas da Biblioteca
                </h1>

                <p>
                    Consulte os horários e dias reservados pelos professores.
                </p>

            </div>

        </div>


        <!-- CALENDÁRIO -->

        <div class="calendario-card">

            <div class="calendario-header">

                <h2>
                    Calendário de reservas
                </h2>

                <div class="mes">
                    {{ \Carbon\Carbon::now()->translatedFormat('F Y') }}
                </div>

            </div>


            <div class="dias-semana">

                <div class="dia-semana">Dom</div>
                <div class="dia-semana">Seg</div>
                <div class="dia-semana">Ter</div>
                <div class="dia-semana">Qua</div>
                <div class="dia-semana">Qui</div>
                <div class="dia-semana">Sex</div>
                <div class="dia-semana">Sáb</div>

            </div>


            @php

                $hoje = \Carbon\Carbon::now();

                $inicioMes = $hoje->copy()->startOfMonth();

                $fimMes = $hoje->copy()->endOfMonth();

                $diasReservados = $reservas->map(function ($reserva) {
                    return \Carbon\Carbon::parse($reserva->data)->format('Y-m-d');
                })->toArray();

            @endphp


            <div class="dias">

                @for($i = 0; $i < $inicioMes->dayOfWeek; $i++)

                    <div class="dia vazio"></div>

                @endfor


                @for($dia = 1; $dia <= $fimMes->day; $dia++)

                    @php

                        $dataAtual = $hoje->copy()
                            ->startOfMonth()
                            ->day($dia);

                        $dataFormatada = $dataAtual->format('Y-m-d');

                        $reservado = in_array(
                            $dataFormatada,
                            $diasReservados
                        );

                        $ehHoje = $dataAtual->isToday();

                    @endphp


                    <div
                        class="dia
                        {{ $reservado ? 'reservado' : '' }}
                        {{ $ehHoje ? 'hoje' : '' }}"
                        title="{{ $reservado ? 'Dia reservado' : 'Dia disponível' }}"
                    >

                        {{ $dia }}

                    </div>

                @endfor

            </div>


            <div class="legenda">

                <div class="legenda-cor"></div>

                <span>
                    Dia com reserva
                </span>

            </div>

        </div>


        <!-- LISTA DE RESERVAS -->

        <div class="titulo-secao">
            Reservas cadastradas
        </div>


        @if($reservas->count() > 0)

            <div class="reservas">

                @foreach($reservas as $reserva)

                    <div class="reserva">


                        <div class="reserva-topo">

                            <div class="data">

                                {{ \Carbon\Carbon::parse($reserva->data)->format('d/m/Y') }}

                            </div>


                            <div class="horario">

                                {{ $reserva->hora_inicio }}
                                -
                                {{ $reserva->hora_fim }}

                            </div>

                        </div>


                        <div class="info">

                            <strong>
                                Professor:
                            </strong>

                            {{ $reserva->professor }}

                        </div>


                        <div class="info">

                            <strong>
                                Turma:
                            </strong>

                            {{ $reserva->turma }}

                        </div>


                        <div class="finalidade">

                            <strong>
                                Finalidade:
                            </strong>

                            <br>

                            {{ $reserva->finalidade }}

                        </div>


                    </div>

                @endforeach

            </div>

        @else

            <div class="vazio">

                Nenhuma reserva cadastrada.

            </div>

        @endif


    </main>


    <footer>

        SESI-024 • Sistema de Reserva da Biblioteca

    </footer>


</body>

</html>