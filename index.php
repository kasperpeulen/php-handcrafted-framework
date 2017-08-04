<?php

require 'vendor/autoload.php';

Router::get('', function() {
    return TasksController::index();
});

Router::get('tasks', function() {
    return TasksController::index();
});

Router::get('tasks/create', function() {
    return TasksController::create();
});

Router::post('tasks', function() {
    TasksController::store();
});

Router::loadRoute(Request::uri(), Request::method());
