<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImcModel;
use App\Models\FaixaModel;

class DashboardController extends Controller
{
    public function index()
    {
        //$showImc = ImcModel::orderBy('id', 'asc')->get()

        $showImc = ImcModel::select('imc.*', 'faixas.categoria')
        ->join('faixas', 'imc.id_faixa', '=', 'faixas.id_faixa')
        ->orderBy('imc.id', 'asc')
        ->get();

        return view('imc.dashboard')->with('showImc', $showImc);
    }

    public function update(Request $request, $id) 
    {
        $updateImc = ImcModel::findOrFail($id);

        $updateImc->nome = $request->novo_nome;
        $updateImc->peso = $request->novo_peso;
        $updateImc->altura = $request->nova_altura;

        $updateImc->save();

        return redirect('/dashboard');
    }

    public function destroy(Request $request, $id)
    {
        $deleteImc = ImcModel::findOrFail($id);

        $deleteImc->delete();

        return redirect('/dashboard');
    }


}
