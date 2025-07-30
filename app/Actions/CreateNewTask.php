<?php

namespace App\Actions;

use App\Enums\TaskStatus;
use App\Models\Task;

class CreateNewTask
{
    public function handle(array $data): Task
    {
        return Task::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'status' => TaskStatus::InProgress,
        ]);
    }
}
