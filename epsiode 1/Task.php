<?php

class Task
{
    public $title;
    public $description;
    public $completed = false;

    public function __construct($title, $description)
    {
        $this->title       = $title;
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Learn OOP', 'Here comes the Description');
var_dump($task->title);
var_dump($task->description);
var_dump($task->completed);
$task->complete();
var_dump($task->completed);

$task2 = new Task('Here is the second Task', 'with another Content in it');
var_dump($task2->title);
var_dump($task2->description);
var_dump($task2->completed);
$task2->complete();
var_dump($task2->completed);
