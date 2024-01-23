<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CepController extends Controller
{
    public function consultarCep(Request $request)
    {
        $cep = $request->input('cep');

        $client = new Client([
            'verify' => false, // Desabilita a verificação do certificado SSL
        ]);

        try {
            $response = $client->get("https://viacep.com.br/ws/{$cep}/json/");
            $data = json_decode($response->getBody(), true);
            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}