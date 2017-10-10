<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('depok', function () use ($router) {
    return view('depok');
});

$router->get('garsa', function () use($router){
    return view('garsa');
});

$router->get('garsa/kuliah', function () use($router){
    return view('kuliah');
});

$router->get('garsa/kerja', function() use($router){
    return view('kerja');
});
