<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController; //to add our page into controller we need to add the direction of the controller that we wanna add our pages into it

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

/* Route::get('/about', function () {
         return view('about');
         //echo "This is an about page";
});*/


Route::controller(DemoController::class)->group(function() {
    /*
    Route::get('about',[DemoController::class, 'Index']); //then we go to our controller and create Index funtion and return it to about.blade.php page*
    Route::get('contect',[DemoController::class, 'contectMethod']);
    */
    Route::get('/about','Index')->name('about.page')->middleware('Check');
    Route::get('/contect','contectMethod')->name('contect.page');
});

