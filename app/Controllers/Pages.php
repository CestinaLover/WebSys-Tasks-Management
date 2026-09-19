<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Pages extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $tasks = $taskModel
            ->where('task_date', date('Y-m-d'))
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('home', [
            'tasks' => $tasks
        ]);
    }

    public function about()
    {
        return view('about');
    }
}