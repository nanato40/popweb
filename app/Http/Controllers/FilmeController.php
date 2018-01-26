<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmeController extends Controller
{




    public function filmes($pg){



$arquivo = file_get_contents("https://tv-v2.api-fetch.website/movies/".$pg);
$json = json_decode($arquivo);

    	return view('filme')->with('lista',$json);
    }



     public function buscar($id){

// Atribui o conteúdo do arquivo para variável $arquivo
$arquivo = file_get_contents("https://tv-v2.api-fetch.website/movie/".$id);
 
// Decodifica o formato JSON e retorna um Objeto
$json = json_decode($arquivo);

    	return view('detalhesFilme')->with('item',$json);
    }


    }

   
    		
    

