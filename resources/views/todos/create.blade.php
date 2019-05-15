@extends('layouts.app')
@section('title')
	Create todo {{$todo->id}}
@endsection
@section('content')
	 <h1> Create Todo </h1>
	 <form action=" {{ route('todo.store') }}" method="POST">
	 	@csrf
	  <div class="form-group">
	    <label for="text">Text: </label>
	    <input type="text" name="text" placeholder="Text" class="form-control" id="text" />
	  </div>
	  	  <div class="form-group">
	    <label for="due">Due date: </label>
	    <input type="text" name="due" placeholder="Due date pls" class="form-control" id="due" />
	  </div>
	  <div class="form-group">
	    <label for="body"> Body: </label>
	    <textarea class="form-control" placeholder="Body" name="body" id="body"> enter body here </textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection