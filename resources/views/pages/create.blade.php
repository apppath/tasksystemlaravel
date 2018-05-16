@extends('layouts.app')
@section('content')
<br>
<h2>New Task Create Form</h2>
<hr>
<div class="card bg-light text-dark">
<div class="card-body">

{!! Form::open(['action' => 'TaskController@store','method' => 'POST']) !!}

 <div class="form-group">
  {{Form::label('title', 'Task Title')}}
  {{Form::text('title', '' , ['class' => 'form-control' , 'placeholder' => 'Task Title'])}}
 </div>

 <div class="form-group">
  {{Form::label('details', 'Task Details')}}
  {{Form::textArea('details', '' , ['class' => 'form-control' , 'placeholder' => 'Task Title'])}}
 </div>

 <div class="form-group">
  {{Form::label('due', 'Due Date')}}
  {{Form::text('due', '' , ['class' => 'form-control' , 'placeholder' => 'Task Due Date'])}}
 </div>
 {{
   Form::submit('Task Create' , ['class' => 'btn btn-primary float-right'])

 }}
{!! Form::close() !!}

</div>
</div>
@endsection
