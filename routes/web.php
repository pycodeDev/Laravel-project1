<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//route langsung nampilin view
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = "Muhammad Anang Ramadhan";
//     return view('about', ['nama'=>$nama]);
// });

//route view di controller
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

// Route::get('/student', 'StudentController@index');
// Route::get('/student/create', 'StudentController@create');
// Route::get('/student/{student}', 'StudentController@show');
// Route::post('/student', 'StudentController@store');
// Route::delete('/student/{student}', 'StudentController@destroy');
// Route::get('/student/{student}/edit', 'StudentController@edit');
// Route::patch('/student/{student}', 'StudentController@update');

Route::resource('student', 'StudentController'); //berlaku jika membua controller dengan menggunakan fitur resource