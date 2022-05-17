<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonajesController extends Controller
{
    public function __invoke(){
    	return view('personajes');
    }
}
