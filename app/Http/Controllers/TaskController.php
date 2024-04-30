<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // Here you would fetch tasks from your data source (e.g., database)
        $tasks = [
            ['id' => 1, 'title' => 'Task 1', 'description' => 'Description for Task 1'],
            ['id' => 2, 'title' => 'Task 2', 'description' => 'Description for Task 2'],
            // Add more tasks as needed
        ];

        return response()->json(['data' => $tasks]);
    }

    public function store(Request $request)
    {
        // Here you would handle storing a new task in your data source
        // For example, if you're working with a database, you would insert a new record
        $task = $request->all();
        
        // Return a response indicating the successful creation of the task
        return response()->json(['data' => $task], 201);
    }

    public function show($id)
    {
        // Here you would fetch a specific task from your data source based on its ID
        $task = ['id' => $id, 'title' => 'Task ' . $id, 'description' => 'Description for Task ' . $id];

        return response()->json(['data' => $task]);
    }

    public function update(Request $request, $id)
    {
        // Here you would handle updating an existing task in your data source
        // For example, if you're working with a database, you would update the corresponding record
        $task = $request->all();
        
        // Return a response indicating the successful update of the task
        return response()->json(['data' => $task]);
    }

    public function destroy($id)
    {
        // Here you would handle deleting an existing task from your data source
        // For example, if you're working with a database, you would delete the corresponding record
        
        // Return a response indicating the successful deletion of the task
        return response()->json(['message' => 'Task deleted successfully']);
    }
}