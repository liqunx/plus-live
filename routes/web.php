<?php

use Illuminate\Support\Facades\Route;
use Slimkit\PlusLive\Web\Controllers as Web;
use Illuminate\Contracts\Routing\Registrar as RouteRegisterContract;

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

Route::group(['prefix' => 'plus-live'], function (RouteRegisterContract $route) {

    // Home Router.
    $route->get('/', Web\HomeController::class.'@index');
});
