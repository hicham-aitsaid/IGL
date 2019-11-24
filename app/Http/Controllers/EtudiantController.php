<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;

class EtudiantController extends Controller
{


	public function index(){
		return view('etudiant');

	}


    public function store(){

    }

}
