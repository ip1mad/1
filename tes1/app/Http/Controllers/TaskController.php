<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(Request $request){
        return response()->json($request->user()->tasks);
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|string',
            'description'=>'nullable|string'
        ]);

        $task = Task::create([
            'user_id' => $request->user()->id,
            'title'=>$request->title,
            'description'=>$request->description
        ]);

        return response()->json($task);
    }

    public function show($id){
        $task = Task::findOrFail($id);
        return response()->json($task);
    }

    public function update(Request $request, $id){
        $task = Task::findOrFail($id);
        $task->update($request->only(['title','description','is_completed']));
        return response()->json($task);
    }

    public function destroy($id){
        $task = Task::findOrFail($id);
        $task->delete();
        return response()->json(['message'=>'Task deleted']);
    }
}
