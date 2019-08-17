<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesafioController extends Controller
{
    public function index ()
    {
      $dados = file_get_contents('https://api.codenation.dev/v1/challenge/dev-ps/generate-data?token=d74d90b4a1adee40ff2c75237ffcc71544690bf5');
      

      $arquivo = 'answer.json'; 

      $file = fopen($arquivo, 'a');

      fwrite($file, $dados);
      fclose($file);


      //$textoCriptografado = base64_encode($dados->'cifrado');

      $cifrado = str_split($dados, ',');

      dd($cifrado);
    }
}
