<?php

namespace App\Http\Controllers;

use App\Models\FaixaModel;
use App\Models\ImcModel;
use Illuminate\Support\Facades\Validator;
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

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome'   => 'required|string',
            'peso'   => 'required|numeric',
            'altura' => 'required|mumeric',
            'imc'    => 'required',
            'faixa'  => 'required|string',
        ]);

        $id_faixa = FaixaModel::where('categoria', $data['faixa'])->value('id_faixa');


        $imcModel = new ImcModel();

        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('imc.index')
                ->withErrors($validator)
                ->withInput(); 
        }

        if ($request->hasFile('image')) {
            $image = $request->fille('image');
            $imageName = $data['nome'].'_'. time() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('images/user', $imageName, 'local');

            //$image-> move(public_path('assets/images/'), $imageName);

            $imcModel->url = 'storage/app/private/images/user/' . $imageName;
        }else {

            return redirect()
                ->route('imc.index')
                ->with('error', 'Falha ao carregar a imagem.');
        }


        $imcModel->nome = $data['nome'];
        $imcModel->altura = $data['altura'];
        $imcModel->peso = $data['peso'];
        $imcModel->id_faixa = $id_faixa;
        $imcModel->save();

        return to_route('imc.index');
    }
}
