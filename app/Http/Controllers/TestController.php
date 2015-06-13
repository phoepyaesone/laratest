<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Songs;

class TestController extends Controller {

	//
	public function index(){

		$songs = Songs::get();

		return $songs;
	}


}
