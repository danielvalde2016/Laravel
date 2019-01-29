@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-sm-4">
		{{$pelicula['poster']}}
	</div>
	<div class="col-sm-8">
		{{$pelicula['title']}}
	</div>
</div>

@stop

