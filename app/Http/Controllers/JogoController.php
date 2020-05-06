<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogoController extends Controller
{
    public function index(){
    	return view('jogo');
    }

    public function sorteio(){
    	$numero = random_int(1, 36);
    	return $numero;
    }
}
