<?php

use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudyController;
use App\Http\Controllers\AppEjemplo;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;


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

//RUTAS CON NOMBRE

Route::resource('products', ProductController::class);


//EJERCICIO 1

/*Route::get('/', [HomeController::class, 'getHome']);

Route::get('/login', [HomeController::class, 'getLogin']);

Route::get('/logout',);

Route::get('/catalog',[CatalogController::class, 'getIndex']);

Route::get('/catalog/show/{id}',[CatalogController::class, 'getShow']);

Route::get('/catalog/create',[CatalogController::class, 'getCreate']);

Route::get('catalog/edit/{id}',[CatalogController::class, 'getEdit']);*/


//Route::get('/informacion-asignatura', [AppEjemplo::class,'mostrarinformacion']
//)->name('infoasig');

Route::get('/', function () {

    return view('welcome');
    
});

Route::resource('asignaturas', AsignaturaController::class);

/*Route::get('/serverinfo', function () {
    
    return $_SERVER;

});

//Saludara el nombre de la variable que pases
Route::get('/hola/{nombre}', function ($nombre) {
    
    print "Hola " . $nombre;

});

//Si no envia ninguna variable saludara a Mundo
Route::get('/saludo/{nombre?}', function ($nombre = "Mundo") {
    
    print "Hola " . $nombre;

});

Route::get('prueba2/{name}', [PruebaController::class, 'saludoCompleto']);

//Route::get('studies', [StudyController::class, 'index']);

//Route::get('studies/create', [StudyController::class, 'create']);


/*Route::get('studies/{id}', function($id){

    print "el modulo con id: $id";

})->where('id', '[0-9]');*/


//Route::get('studies/{id}/edit', [StudyController::class, 'edit']);


//Route::delete('studies/{id}', [StudyController::class, 'destroy']);
//Route::put('studies/{id}', [StudyController::class, 'update']);
//Route::post('studies', [StudyController::class, 'store']);

//Route::resource('studies', StudyController::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
