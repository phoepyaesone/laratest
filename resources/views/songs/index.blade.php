@extends('default')

@section('content')

	<div class="container">

		<h2> {!! $name !!} 's Favourite Songs List </h2>
	
	</div>
	
	<div class='container'>
	
		@foreach($songs as $song)

			<li><a href="/song/{{ urlencode($song->slug) }}"> {{ $song->title }}</a> </li>
		
		@endforeach
	
	</div>

@stop