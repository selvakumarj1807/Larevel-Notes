<!--
Creating Controller :
---------------------

    1. php artisan make:controller StudentController


    result :
    --------

        Controller [C:\Users\Selva\OneDrive\Desktop\Laravel_Project_01\student-reg\app\Http\Controllers\StudentController.php] created successfully.

Database Setup :
----------------

    Table Creation :
    ----------------

        1. php artisan make:migration create_students_table

    Table Migrate :
    ---------------

            Add the column in migrations file and run the below command for migration.

        1. php artisan migrate

    Table Migrate Refresh:
    ----------------------

        1. php artisan migrate:fresh

Insert into the table :
-----------------------

    Create Model file :
    -------------------

        1. php artisan make:model Student
-->

<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [StudentController::class, 'viewForm'])->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/cantact', function () {
    return view('cantact');
});

Route::post('/addStudent', [StudentController::class, 'addStudent']);
