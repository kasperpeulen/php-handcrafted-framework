<?php

class Task
{

    public static function all()
    {
        $pdo = Database::get(Config::DATABASE);
        $statement = $pdo->prepare('SELECT * FROM ' . static::class);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, static::class);
    }

    public static function add(Task $task)
    {
        $pdo = Database::get(Config::DATABASE);
        $statement = $pdo->prepare("INSERT INTO task (description, completed) VALUES ('$task->description', $task->completed)");
        $statement->execute();
    }

    public $description;
    public $completed;
}
