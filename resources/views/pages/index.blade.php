@extends('layouts.app')
@section('content')
<br>
<h2 class="display-4">Task System All Task List</h2>
<hr>

@if(count($tasks) > 0)
@foreach($tasks as $task)


<div class="card bg-light text-white">
<div class="card-body">
<div class="row">
<div class="col-md-3 col-lg-3">
<img src="/storage/images/img_avatar3.png" class="rounded-circle img-fluid" alt="Task Image">
</div>
<div class="col-md-9 col-lg-9">
<div class="alert alert-info">
  <strong>Task Title!</strong>
  <h4><p> <a href="tasks/{{$task->id}}">{{$task->title}}</a> </p></h4>
</div>

<div class="alert alert-success">
<strong>Task Details</strong>
<p class="text-justify">{{$task->details}}</p>
</div>

<div class="alert alert-warning">
<strong>Due Date!</strong> <h5><p>{{$task->due}}</p></h5>
</div>
<br>

</div>
</div>
</div>
</div>
<br>
@endforeach
@endif
@endsection
