<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Songs;

class SongController extends Controller {

	public function index(Songs $songs){

		$title = "Song Lists";
		$name = "<em>Samuel</em>";
		// $songs = DB::table('songs')->get();

		//$songs = Songs::get();
		//dd($songs);
		
		$songs = $songs->get();
		
		$data['name'] = $name;
		$data['songs'] = $songs->where('slug','let_it_be');

		//return view('songs.index', $data);

		//return view('songs.index', ['songs'=>$songs , 'name'=>$name] );

		//return view('songs.index')->with('songs',$songs)->with('name',$name );

		//return view('songs.index')->withSongs($songs)->withName($name);

		return view('songs.index', compact('title','songs','name') );

	}

	public function show(Songs $song){

	/*	$songs = $this->getSongs();

		foreach ($songs as $key => $song) {
			
			if( $song['id'] == urldecode($id) ): 
				return view('songs.show',compact('song'));
			endif;
			continue;

		}
	*/

		// $song = DB::table('songs')->find( urldecode($id) );
		// $song = Songs::find( urldecode($id) );

		//$song = Songs::whereSlug($songs)->first();
		
		$title = $song->title;

		return view('songs.show', compact('song','title'));

	}


	public function edit(Songs $song){

		return 'Edit the song that song title is '.$song->title;
	
	}


	public function getSongs(){

		return [
				[ 'id'   => '1',
				'name' => 'Twist'],
				[ 'id'   => '2',
				'name' => 'Perry Manson'],
				[ 'id'   => '3',
				'name' => 'Mr Crowdly']
		];

		//['Twist','Perry Manson','Mr Crowdly'];
	}

}
