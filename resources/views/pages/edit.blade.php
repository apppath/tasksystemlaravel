@extends('layouts.app')
@section('content')
<br>
<h2>Edit Your Task Form</h2>
<hr>
<div class="card bg-light text-dark">
<div class="card-body">

{!! Form::open(['action' => ['TaskController@update' , $task->id] , 'method' =>'POST']) !!}

 <div class="form-group">
  {{Form::label('title', 'Task Title')}}
  {{Form::text('title', $task->title , ['class' => 'form-control'])}}
 </div>

 <div class="form-group">
  {{Form::label('details', 'Task Details')}}
  {{Form::textArea('details', $task->details , ['class' => 'form-control'])}}
 </div>

 <div class="form-group">
  {{Form::label('due', 'Due Date')}}
  {{Form::text('due', $task->due , ['class' => 'form-control'])}}
 </div>
 {{ Form::hidden('_method' , 'PUT')}}
 {{
   Form::submit('Edit Task' , ['class' => 'btn btn-success float-right'])
 }}
{!! Form::close() !!}

</div>
</div>
@endsection
