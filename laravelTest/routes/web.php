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

Route::get('/', function () {
    return view('welcome');
});

Route::get('MyController', function () {
    return 'Hello World';
});

Route::get('testPost',function(){
    $csrf_token = csrf_token();
    $form = <<<FORM
        <form action="home" method="POST">
            <input type="hidden" name="_token" value="{$csrf_token}">
            <input type="submit" value="Submit"/>
        </form>
    FORM;
    return $form;
});

Route::post('home',function(){
    return "Hello World[POST]!";
});
