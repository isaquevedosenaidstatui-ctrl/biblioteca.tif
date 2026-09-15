<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function cadastro_usuario_html()
    {
        return view('cadastro_usuario');
    }

    public function cadastro_usuario(Request $request)
    {
        try {

            $usuario = new Usuario();

            $usuario->nome = $request->nome;
            $usuario->email = $request->email;
            $usuario->senha = Hash::make($request->senha);
            $usuario->data_nascimento = $request->data_nascimento;
            $usuario->cpf = $request->cpf;

            $usuario->save();

            return response()->json([
                "erro" => "n",
                "mensagem" => "Cadastro realizado com sucesso!"
            ]);

        } catch (\Exception $e) {

            return response()->json([
                "erro" => "s",
                "mensagem" => $e->getMessage()
            ]);
        }
    }

    public function login_novo(Request $request)
    {
        try {

            $usuario = Usuario::where(
                "email",
                $request->email
            )->first();

            if (!$usuario) {

                return response()->json([
                    "erro" => "s",
                    "message" => "E-mail ou senha incorretos."
                ], 401);
            }

            if (!Hash::check($request->senha, $usuario->senha)) {

                return response()->json([
                    "erro" => "s",
                    "message" => "E-mail ou senha incorretos."
                ], 401);
            }

            return response()->json([
                "erro" => "n",
                "message" => "Login realizado com sucesso!",
                "usuario" => [
                    "id" => $usuario->id,
                    "nome" => $usuario->nome,
                    "email" => $usuario->email
                ]
            ]);

        } catch (\Exception $e) {

            return response()->json([
                "erro" => "s",
                "message" => $e->getMessage()
            ], 500);
        }
    }
}