<?php

namespace App\Http\Controllers;

use App\Actions\CreateNewTask;
use App\Actions\DeleteTask;
use App\Actions\UpdateTask;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    public function store(StoreTaskRequest $request, CreateNewTask $createNewTask)
    {
        $task = $createNewTask->handle($request->validated());
        return response()->json([
            $task['id'] => [
                'title' => $task['title'],
                'description' => $task['description'],
                'status' => $task['status'],
            ],
        ]);
    }

    public function show(Task $task)
    {
        return response()->json([
            $task['id'] => [
                'title' => $task['title'],
                'description' => $task['description'],
                'status' => $task['status'],
            ],
        ]);
    }

    public function update(UpdateTaskRequest $request, Task $task, UpdateTask $updateTask)
    {
        $task = $updateTask->handle($task, $request->validated());
        return response()->json([
            $task['id'] => [
                'title' => $task['title'],
                'description' => $task['description'],
                'status' => $task['status'],
            ],
        ]);
    }

    public function destroy(Task $task, DeleteTask $deleteTask)
    {
        return response()->json([
            'Задача удалена: ' => $deleteTask->handle($task)
        ]);
    }
}
