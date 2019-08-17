<?php
   
namespace App\Service\Desafio;
   
use App\Desafio;
use Maatwebsite\Excel\Concerns\ToModel;


    
class DesafioImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Desafio([
            'numero_casas' => $dados->'numero_casas',
            'token' => $dados->'token',
            'cifrado' => $dados->'cifrado',
            'decifrado' => $dados->'decifrado',
            'resumo_criptografico' => $dados->'resumo_criptografico',
        ]);
    }



}
