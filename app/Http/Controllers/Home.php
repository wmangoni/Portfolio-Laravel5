<?php

namespace demo\Http\Controllers;

use Illuminate\Http\Request;

use demo\Http\Requests;
use demo\Http\Controllers\Controller;

class Home extends Controller
{
    /**
    *
    * Class Home
    *
    */

    public function index()
    {
    	$data = array(
    		'title' => 'Meu Título',
    		'content' => 'Esse é meu contexto'
    	);
    	return view('home')->with($data);
    }
}
