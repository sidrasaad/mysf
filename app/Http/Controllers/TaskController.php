<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;
use App\Mail\TaskAssigned;
use Auth;
class TaskController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tasks = Task::where('user_id',Auth::user()->id)
                        ->orWhere('assigned_to', Auth::user()->id)
                        ->orderBy('created_at','desc')->paginate(5);
        return view('todo.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'assigned_to' => 'required',
            'description' => 'required',
            'due_date' => 'required'
        ], [
            'title.required' => 'Task Name is required!',
            'assigned_to.required' => 'Please select the person you want to assign task!',
            'description.required' => 'Task Description is required!',
            'due_date.required' => 'Due Date is required!',
        ]);

        $task = new Task();
        $task->title = $request->title;
        $task->assigned_to = $request->assigned_to;
        $task->description = $request->description;
        $task->due_date = $request->due_date;
        $task->user_id =Auth::user()->id;
        $task->save();
        Toastr::success('Task added successfully :)','Success');

            try {
                
                Mail::to($task->assigned_user->email)->send(new TaskAssigned($task));
            
            } catch (\Throwable $th) {
                Toastr::error('Some issue in sending email.', 'failed');

            }        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        try {
            $task->status = $request->status;
            $task->save();
            return response()->json(['message' => 'Status is updated.'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Status not updated.'], 400);
        }
     
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
