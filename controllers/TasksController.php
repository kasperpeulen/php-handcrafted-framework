<?php

class TasksController
{
    public static function index()
    {
        $tasks = Task::all();
        return view('tasks/index', compact('tasks'));
    }

    public static function create()
    {
        return view('tasks/create');
    }

    public static function store()
    {
        $task = new Task;
        $task->description = $_POST['description'];
        $task->completed = $_POST['completed'];
        Task::add($task);
        redirect('');
    }
}