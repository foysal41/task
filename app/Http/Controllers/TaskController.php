<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskCreateSlider;
use App\DataTables\taskDataTable;
use App\Models\task;
use Illuminate\Contracts\View\View;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index(TaskDataTable $dataTable)
    {

        return $dataTable->render('task.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskCreateSlider $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->save();
        return redirect()->route('task.index')->with('success', 'Task created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $task = Task::findorFail($id);
        return view('task.edit' , compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
