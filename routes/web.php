<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function(){
//     return view("welcome");
// });

Route::prefix('admin')->name('admin.')->group(function () {

    // ------- category ----------
    $prefixUrl = "category";
    $controllerName = "category";
    Route::prefix($prefixUrl)->name($prefixUrl . '.')->group(function () use($controllerName){
        $controller = ucfirst($controllerName) . "Controller@";
        Route::get('index', $controller . 'index')->name('index');
        // Route::get('save', $controller . 'save');
        // Route::post('savePost', $controller . 'savePost')->name('savePost');
        Route::get('form', $controller . 'form')->name('form');
        // Route::get('delete/{id}', $controller . 'delete')->name('delete')->where([ 'id' => '[0-9]+' ]);
    });
});
