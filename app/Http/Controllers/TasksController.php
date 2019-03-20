<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\createTaskRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;


class TasksController extends Controller
{

    public function index()
    {
    	$tasks = Task::all();
    	return view("tasks.index", ["tasks" => $tasks]);
    }

    public function create()
    {
    	return view("tasks.create");
    }

    public function store(CreateTaskRequest $request)
    {
    	Task::create($request->all());
    	return redirect()->route("tasks.index");
    }

    public function edit($id)
    {
    	$myTask = Task::find($id);
    	return view("tasks.edit", ["task" => $myTask]);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
    		"title" => "required",
    		"description" => "required"
    	]);

    	$myTask = Task::find($id);
    	$myTask->fill($request->all());
    	$myTask->save();

    	return redirect()->route("tasks.index");
    }	

    public function view($id)
    {
    	$task = Task::find($id);

    	return view("tasks.view", ["task" => $task]);
    }

    public function delete($id)
    {
    	$tasks = Task::find($id)->delete();

    	return redirect()->route("tasks.index");
    }

}
