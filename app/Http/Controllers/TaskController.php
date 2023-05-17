<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $project_data = Project::get();
        return view('task', compact('project_data'));
    }

    public function fetchtasks(Request $request)
    {
        $data = Task::where("project_id", $request->id)->orderBy('priority','asc')->get();
        return response()->json($data);
    }

    public function updatetaskorder(Request $request)
    {

        $tasks = Task::all();

        foreach ($tasks as $task) {
            $id = $task->id;
            foreach ($request->order as $order) {
                if ($order['id'] == $id) {
                    $task->update(['priority' => $order['position']]);
                }
            }
        }
        return response('Position updated successfully', 200);
    }
}
