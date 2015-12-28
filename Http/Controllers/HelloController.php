<?php namespace Modules\Hello\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class HelloController extends Controller {
	
	public function index()
	{
		return view('hello::index');
	}
	
}