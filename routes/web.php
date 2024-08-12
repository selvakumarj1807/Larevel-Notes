<!--
Creating Controller :
---------------------

    1. php artisan make:controller StudentController


    result :
    --------

        Controller [C:\Users\Selva\OneDrive\Desktop\Laravel_Project_01\student-reg\app\Http\Controllers\StudentController.php] created successfully.
-->

<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [StudentController::class, 'viewForm']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/cantact', function () {
    return view('cantact');
});