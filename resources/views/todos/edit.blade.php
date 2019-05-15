@extends('layouts.app')
@section('title')
	Edit todo {{$todo->id}}
@endsection
@section('content')
	 <h1> Edit Todo </h1>
	 <a href="/todo/{{$todo->id}}" class="btn btn-danger"> Back </a>
	 <form action="{{ route('todo.update', $todo->id)}}" method="POST">
	 	{{method_field('PATCH')}}
	 	@csrf <br>
	  <div class="form-group">
	    <label for="text">Text: </label>
	    <input type="text" name="text" value="{{$todo->text}}" placeholder="Text" class="form-control" id="text" />
	  </div>
	  	  <div class="form-group">
	    <label for="due">Due date: </label>
	    <input type="text" name="due" value="{{$todo->due}}" placeholder="Due date pls" class="form-control" id="due" />
	  </div>
	  <div class="form-group">
	    <label for="body"> Body: </label>
	    <textarea class="form-control"  placeholder="Body" name="body" id="body"> {{$todo->body}} </textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection