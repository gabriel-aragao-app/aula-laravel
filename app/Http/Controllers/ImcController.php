<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function index()
    {
        $resultado = [
            "imc" => "Aguardando Valores",
            "faixa" => "Aguardando Valores"
        ];

        return view('imc.index')->with('resultado', $resultado);
    }

    public function calcularimc(Request $request)
    {
        $post = $request->all();//pega todos os names;

        $resultado["nome"] = $post['nome'];// name="nome"
        $resultado["peso"] = $post['peso'];// name="peso"
        $resultado["altura"] = $post['altura'];// name = "altura"

        $imc = $resultado["peso"] / ($resultado["altura"] ** 2);

        $resultado["imc"] = round($imc, 2);


        switch (true) {
            case($imc < 18.5):

                $resultado["faixa"] = "Abaixo";
            break;

            case($imc >= 18.5 && $imc < 25):

                $resultado["faixa"] = "Normal";
            break;

            case($imc >= 25 && $imc < 30):

                $resultado["faixa"] = "Obesidade Grau I";
            break;

            default:
                $resultado["faixa"] = "Obesidade Grau II";

        };
    
        return view('imc.index')-> with('resultado', $resultado);

    }
}
