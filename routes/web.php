<?php
use App\Task;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/tasks/new/{name}', function($name){
$task = Task::all();
$task = new Task;
$task->name = $name;
$task->status = 0;
$task->save();
echo "{\"state\" = \"OK\"}";
});





