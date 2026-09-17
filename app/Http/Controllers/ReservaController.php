<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function inicio()
    {
        $reservas = Reserva::orderBy('data', 'asc')
            ->orderBy('hora_inicio', 'asc')
            ->get();

        return view('inicio', compact('reservas'));
    }

    public function cadastrar(Request $request)
    {
        try {

            $reserva = Reserva::create([
                'professor' => $request->professor,
                'turma' => $request->turma,
                'data' => $request->data,
                'hora_inicio' => $request->hora_inicio,
                'hora_fim' => $request->hora_fim,
                'finalidade' => $request->finalidade
            ]);

            return response()->json([
                "erro" => "n",
                "mensagem" => "Reserva realizada com sucesso!"
            ]);

        } catch (\Exception $e) {

            return response()->json([
                "erro" => "s",
                "mensagem" => $e->getMessage()
            ], 500);
        }
    }

    public function cancelarReserva($id)
    {
        try {

            $reserva = Reserva::find($id);

            if (!$reserva) {
                return response()->json([
                    "erro" => "s",
                    "mensagem" => "Reserva não encontrada."
                ], 404);
            }

            $reserva->delete();

            return response()->json([
                "erro" => "n",
                "mensagem" => "Reserva cancelada com sucesso!"
            ]);

        } catch (\Exception $e) {

            return response()->json([
                "erro" => "s",
                "mensagem" => $e->getMessage()
            ], 500);
        }
    }
}
