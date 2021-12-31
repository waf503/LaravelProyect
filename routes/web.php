<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\CursoController;
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

//Pasar datos por las rutas


Route::get('/cursos', [CursoController::class, 'index']);

Route::get('/cursos/create', [CursoController::class, 'create']);

Route::get('/cursos/{curso?}', [CursoController::class, 'show']);


// // Route::get('/contact', function(){
// //     return view('contact');
// // });

// // short sintax
// Route::view("contact", 'contact');

// Route::get("/miRuta",Users::class);

// Route::get('/{name?}', function ($name='Wilmer') {
//     return view('home',['name'=>$name]);
//     //return "<h1>Hola $name</h1>";
// });





