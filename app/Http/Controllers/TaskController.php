<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $tasks = Task::orderBy('created_at' , 'desc')->get();
      return view('pages.index')->with('tasks' , $tasks);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validate($request , [
        'title'=> 'required',
        'details' => 'required',
        'due' => 'required'
     ]);

      $task = new Task;

       $task->title = $request->input('title');
       $task->details = $request->input('details');
       $task->due = $request->input('due');

       $task->save();
       return redirect('/')->with('success' , 'Task Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        return view('pages.show')->with('task' , $task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $task = Task::find($id);
      return view('pages.edit')->with('task' , $task);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $task = Task::find($id);
      $task->title = $request->input('title');
      $task->details = $request->input('details');
      $task->due = $request->input('due');

      $task->save();
      return redirect('/')->with('success' , 'Task Edit Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $task = Task::find($id);
      $task->delete();
      return redirect('/')->with('success' , 'Task Removed Successfully');
    }

    public function getContact(){
      return view('pages.contact');
    }
}
