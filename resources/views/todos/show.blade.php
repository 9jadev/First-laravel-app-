@extends('layouts.app')
@section('title')
	Show todo {{$todo->id}}
@endsection
@section('content')
	<p style="height: 10px; "> </p>
	<a href="/" class="btn btn-info">GO BACK </a>
	<h1>{{$todo->text}}</h1>
	<div class="card">
		<div class="card-header">
		 	  {{$todo->text}}
		</div>
		<div class="card-body">
			<h5 class="card-title">{{$todo->text}}</h5>
				<p class="card-text">{{$todo->body}}</p>
				<br><hr>
				<a href="{{$todo->id}}/edit" class="btn btn-info"> Edit </a>
				<br> <hr>
				<p style="height: 1px;"> </p>
				<form action="{{ route('todo.destroy', $todo->id) }}"  method="POST">
				 	@csrf
				 	{{method_field('DELETE')}}
				  <button type="submit" class="btn btn-danger">Delete </button>
				</form>		 
		</div>
	</div>
@endsection
 