<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller {
    //Retrieves all the data in the task table and then use 'return' to display the list of tasks
    public function index() {
        $tasks = Task::all(["id", "title", "description", "stakeholders", "due_date", "status"]);
        return view("task/index", ["tasks" => $tasks]);
    }

    //Displays a form for data entry and then use 'return' to fill in new task details
    public function create() {
        return view("task/form");
    }

    //Retrieves the task data based on the id and use 'return' to display a form to update the task
    public function update(string $id) {
        $task = Task::find($id);
        return view("task/form", [
            "task" => $task,
        ]);
    }

    // Store new data or update existing data and return the view to the list
    public function save(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'stakeholders' => 'required|string|max:255',
            'due_date' => 'required|date',
            'status' => 'required|in:Pending,On-Progress,Done',
        ]);
    
        if(isset($request->id)) { 
            $task = Task::find($request->id); // Find the task by ID to update
        } else {
            $task = new Task(); // Create a new task entry if data is not found by ID
        }
    
        $task->title = $validated['title'];
        $task->description = $validated['description'];
        $task->stakeholders = $validated['stakeholders'];
        $task->due_date = $validated['due_date'];
        $task->status = $validated['status'];
    
        $task->save();
    
        return redirect("/task")->with('success', 'Task saved successfully!');
    }

    //Delete tasks by id and return the view to the list
    public function delete(Request $request) {
        if($request->method() == "POST") {
            Task::find($request->id)->delete(); //Search for tasks by id and delete them using method 'POST'.
            return redirect("/task");
        } 
        else {
            $task = Task::find($request->id);
            return view("task/delete", ["task" => $task]); //Displays a deletion confirmation view with details of the task to be deleted
        }
    }
}