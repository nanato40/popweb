<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
     public function shows($id){

// Atribui o conteúdo do arquivo para variável $arquivo
$arquivo = file_get_contents("https://tv-v2.api-fetch.website/shows/".$id);
 
// Decodifica o formato JSON e retorna um Objeto
$json = json_decode($arquivo);

    	return view('show')->with('lista',$json);
    }

     public function buscar($id){

// Atribui o conteúdo do arquivo para variável $arquivo
$arquivo = file_get_contents("https://tv-v2.api-fetch.website/show/".$id);
 
// Decodifica o formato JSON e retorna um Objeto
$json = json_decode($arquivo);

    	return view('detalhesShow')->with('item',$json);
    }

}
