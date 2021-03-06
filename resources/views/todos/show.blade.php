@extends('layouts.app')

@section('content')
<a href = "/" class="btn btn-primary-sm"><strong><-Go Back</strong></a>
<a href="{{ $todo->id }}"><h1>{{$todo->text}}</h1></a>
<hr>
<p><strong>{{ $todo->body }}</strong></p>
<hr>
<a href = "/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
<form class = "delete_form" action="{{action('TodosController@destroy',$todo->id)}}" method="POST">
{{ csrf_field() }}
<input type="hidden" name = "_method" value="DELETE" />
<input type="submit" value="Delete" class="btn btn-danger">
</form>
@endsection
