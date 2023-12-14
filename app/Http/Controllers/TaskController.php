<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Filters\TaskFilter;
use App\Http\Resources\TaskCollection;
use App\Http\Resources\TaskResource;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $filter = new TaskFilter();
        $queryItems = $filter->transform($request);
        $tasks = Task::where($queryItems);
        return new TaskCollection($tasks->paginate()->appends($request->query()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        //
        $task = new Task;
        $task->customer_id = $request->customerId;
        $task->status = $request->status;
        $task->description = $request->description;
        $task->save();
        $data = [
            'message' => 'Task created succesfully',
            'task' => $task
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    //public function update(UpdateTaskRequest $request, Task $task)
    public function update(Request $request, Task $task)
    {
        //
        $task->update([        
        $task->customer_id = $request->customerId,
        $task->status = $request->status,
        $task->description = $request->description
        ]);
        $data = [
            'message' => 'Task updated succesfully',
            'task' => $task
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
        $task->delete();
        $data = [
            'message' => 'Customer deleted succesfully',
            'task' => $task 
        ];
        return response()->json($task);
    }
}
