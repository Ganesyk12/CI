<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {	
        return view('welcome_message');
    }

    public function tes(){
	echo '<h1>ini adalah halaman test</h1>';
	}
	
	//---------------------------------------------------------
}
