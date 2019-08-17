<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Eloquent é uma ORM ferramenta de mapeamento de um modelo orientado a objeto para um modelo relacional (do banco de dados), tbm traz de forma relacional do banco de dados e transforma em modelo orientado a objeto

class Desafio extends Model{
//para encontrar a tabela o laravel pega o nome desta classe, coloca em minúsculo e no plural, por isso essa linha abaixo não é necessária
	protected $table = 'desafios';
	public $timestamps = false; //criado para não armazenar a data de criação e data de atualização do campo
	protected $fillable = ['numero_casas', 'token', 'cifrado', 'decifrado' , 'resumo_criptografico']; //passa os atributos q são preenchidos pelo método create
}



