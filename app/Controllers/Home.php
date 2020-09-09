<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
	public function handle404()
	{
		echo "My Custom 404!";
		return;
	}
}
