<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Pages extends BaseController
{
    public function index()
    {
        $model = new TaskModel();

        $tasks = $model
            ->where('task_date', date('Y-m-d'))
            ->where('is_archived', 0)
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