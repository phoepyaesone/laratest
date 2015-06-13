@extends('default')

@section('content')
	
	<div class="container">

		<h2>My Favourite Songs List </h2>	
		<h3>{{ $song->title }}</h3>
		<p>{{ $song->lyric }}</p>
	</div>
	
@stop
