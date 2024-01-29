<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MembroController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required|string|max:50',
            'data_nascimento' => 'required|date',
            'email' => 'nullable|email|max:50',
            'telefone' => 'nullable|string|max:17',
            'tipo' => 'required|in:MEMBRO,CONGREGADO',
            'cep' => 'nullable|string|max:10',
            'logradouro' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'numero' => 'nullable|string|max:10',
            'localidade' => 'required|string|max:255',
            'uf' => 'required|string|max:2',
            'complemento' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3048',
        ]);

        
        //Upload da imagem
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = $request->input('nome') . md5(strtotime('now')) . "." . $request->image->extension();
            $request->image->move(public_path('img/members'), $imageName);
        }else{
            $imageName = null;
        }

        // Inserir o membro na tabela 'membros'
        $membroId = DB::table('tb_membro')->insertGetId([
            'nome' => $request->input('nome'),
            'data_nascimento' => $request->input('data_nascimento') ,
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'tipo' => $request->input('tipo'),
            'src_foto' => $imageName,
        ]);

        // Usar o ID do membro para inserir o endereço na tabela 'enderecos'
        DB::table('tb_endereco')->insert([
            'membro_id' => $membroId,
            'cep' => $request->input('cep'),
            'logradouro' => $request->input('logradouro'),
            'bairro' => $request->input('bairro'),
            'numero' => $request->input('numero'),
            'localidade' => $request->input('localidade'),
            'uf' => $request->input('uf'),
            'complemento' => $request->input('complemento'),
        ]);

        return true;

    }
}