<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvisController extends Controller
{
	public function index(){
		//inserer co base de donnée pour fetch les dernieravis + info agences .
		return view('index');
	}

	public function show_resultats(){

		return view('resultat');
	}

	public function show_agence($agence) {
		return view('agence',compact('agence'));
	}
}
