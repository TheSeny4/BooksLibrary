<?php

require_once 'Task.php';
require_once 'Project.php';


$task1 = new Task('Первая задача', 'Описание первой задачи');
$task2 = new Task('Вторая задача', 'Описание второй задачи');

$project = new Project('Новый проект');
$project->addTask($task1);
$project->addTask($task2);


echo $project;


unset($project);
