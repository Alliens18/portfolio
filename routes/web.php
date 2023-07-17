<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('portofolio');
});

Route::get('/project_fs', function () {
    return view('project_fs');
});

Route::get('/project_ptm', function () {
    return view('project_ptm');
});

Route::get('/project_ta', function () {
    return view('project_ta');
});

Route::get('/project_freelance', function () {
    return view('project_freelance');
});