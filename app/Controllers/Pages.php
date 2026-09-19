<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Pages extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $tasks = $taskModel->findAll();

        return '<pre>' . print_r($tasks, true) . '</pre>';
    }

    public function about()
    {
        return view('about');
    }
}