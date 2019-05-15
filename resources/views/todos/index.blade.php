@extends('layouts.app')

@section('content')
	<h1 class="page-header text-center"> Todos </h1>
	@if(count($todos) > 0)
		@foreach($todos as $todo)
			<div class="card">
			  <div class="card-header">
			    Featured
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">{{$todo->text}}</h5>
			    <p class="card-text">{{$todo->text}}</p>
			    <a href="todo/{{$todo->id}}" class="btn btn-primary">{{$todo->due}}</a>
			    <br> <hr>
				<p style="height: 1px;"> </p>
				<form action="{{ route('todo.destroy', $todo->id) }}"  method="POST">
				 	@csrf
				 	{{method_field('DELETE')}}
				  <button type="submit" class="btn btn-danger"> Delete </button>
				</form>	
			  </div>
			</div>
			
			<p style="height: 10px;"></p>
		@endforeach
	@endif
@endsection	