<?php

use App\Http\Controllers\bookingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieCate;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\seatsController;
use App\Http\Controllers\theaterController;
use App\Http\Controllers\ShowtimeController;

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


//route for website
Route::get('/',[HomeController::class,'main']);
Route::get('/news',[HomeController::class,'news']);
Route::get('/aboutus',[HomeController::class,'about']);
Route::get('/showes',[HomeController::class,'showes']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/ticket',[HomeController::class,'ticketes']);

Route::post('/settime',[HomeController::class,'settime'])->middleware('login');
Route::get('/seats',[HomeController::class,'seat'])->middleware('login');
Route::post('/seats/store',[HomeController::class,'store']);
Route::post('/tickbook/store',[HomeController::class,'tickets']);

Route::post('/bookingseat',[HomeController::class,'bookingseat']);
// Route::post('/bookingseat',[HomeController::class,'bookingseat']);

// Route::post('/setmovie',[HomeController::class,'']);


Route::get('/register',[HomeController::class,'register']);
Route::post('/register/store',[HomeController::class,'registerstore']);

Route::get('/login',[HomeController::class,'login']);
Route::post('/login/store',[HomeController::class,'loginstore']);
Route::get('/logout',[HomeController::class,'logout']);

Route::get('/admin/login',[HomeController::class,'adminlogin']);
Route::post('/admin/login/store',[HomeController::class,'adminstore']);
Route::get('/admin/logout',[HomeController::class,'adminlogout']);

Route::get('/allsession',function(){
    echo "<pre>";
    print_r(session()->all());  
});


Route::get('/dashboards/moviecate',[MovieCate::class,'index'])->middleware('login','role');
Route::get('/dashboards/moviecate/insart',[MovieCate::class,'insart'])->middleware('login','role');
Route::post('/dashboards/moviecate/store',[MovieCate::class,'store'])->middleware('login','role');
Route::get('/dashboards/moviecate/edit/{id}',[MovieCate::class,'edit'])->middleware('login','role');
Route::post('/dashboards/moviecate/update/{id}',[MovieCate::class,'update'])->middleware('login','role');
Route::get('/dashboards/moviecate/delect/{id}',[MovieCate::class,'delet'])->middleware('login','role');
  

Route::get('/dashboards/movie',[MovieController::class,'index'])->middleware('login','role');
Route::get('/dashboards/movie/insart',[MovieController::class,'insart'])->middleware('login','role');
Route::post('/dashboards/movie/store',[MovieController::class,'store'])->middleware('login','role');
Route::get('/dashboards/movie/edit/{id}',[MovieController::class,'edit'])->middleware('login','role');
Route::post('/dashboards/movie/update/{id}',[MovieController::class,'update'])->middleware('login','role');
Route::get('/dashboards/movie/delete/{id}',[MovieController::class,'delet'])->middleware('login','role');
Route::get('/dashboards/movie/trash',[MovieController::class,'trash'])->middleware('login','role');
Route::get('/dashboards/movie/restore/{id}',[MovieController::class,'restore'])->middleware('login','role');
Route::get('/dashboards/movie/forcedelet/{id}',[MovieController::class,'forcedelet'])->middleware('login','role');


Route::get('/dashboards/theater',[theaterController::class,'index'])->middleware('login','role');
Route::get('/dashboards/theater/insart',[theaterController::class,'insart'])->middleware('login','role');
Route::post('/dashboards/theater/store',[theaterController::class,'store'])->middleware('login','role');
Route::get('/dashboards/theater/edit/{id}',[theaterController::class,'edit'])->middleware('login','role');
Route::post('/dashboards/theater/update/{id}',[theaterController::class,'update'])->middleware('login','role');
Route::get('/dashboards/theater/delect/{id}',[theaterController::class,'delet']);

Route::get('/dashboards/showtime',[ShowtimeController::class,'index'])->middleware('login','role');
Route::get('/dashboards/showtime/insart',[ShowtimeController::class,'insart'])->middleware('login','role');
Route::post('/dashboards/showtime/store',[ShowtimeController::class,'store'])->middleware('login','role');
Route::get('/dashboards/showtime/edit/{id}',[ShowtimeController::class,'edit'])->middleware('login','role');
Route::post('/dashboards/showtime/update/{id}',[ShowtimeController::class,'update'])->middleware('login','role');
Route::get('/dashboards/showtime/delect/{id}',[ShowtimeController::class,'delet'])->middleware('login','role');


Route::get('/dashboards/client',[ClientController::class,'index'])->middleware('login','role');
Route::get('/dashboards/client/insart',[ClientController::class,'insart'])->middleware('login','role');
Route::post('/dashboards/client/store',[ClientController::class,'store'])->middleware('login','role');
Route::get('/dashboards/client/edit/{id}',[ClientController::class,'edit'])->middleware('login','role');
Route::post('/dashboards/client/update/{id}',[ClientController::class,'update'])->middleware('login','role');
Route::get('/dashboards/client/delect/{id}',[ClientController::class,'delet'])->middleware('login','role');


Route::get('/dashboards/mbooking',[bookingController::class,'index'])->middleware('login','role');
Route::get('/dashboards/mbooking/insart',[bookingController::class,'insart'])->middleware('login','role');
Route::post('/dashboards/mbooking/store',[bookingController::class,'store'])->middleware('login','role');
Route::get('/dashboards/mbooking/edit/{id}',[bookingController::class,'edit'])->middleware('login','role');
Route::post('/dashboards/mbooking/update/{id}',[bookingController::class,'update'])->middleware('login','role');
Route::get('/dashboards/mbooking/delect/{id}',[bookingController::class,'delet'])->middleware('login','role');

Route::get('/dashboards/seat',[seatsController::class,'index'])->middleware('login','role');
Route::get('/dashboards/seat/insart',[seatsController::class,'insart'])->middleware('login','role');
Route::post('/dashboards/seat/store',[seatsController::class,'store'])->middleware('login','role');
Route::get('/dashboards/seat/edit/{id}',[seatsController::class,'edit'])->middleware('login','role');
Route::post('/dashboards/seat/update/{id}',[seatsController::class,'update'])->middleware('login','role');
Route::get('/dashboards/seat/delect/{id}',[seatsController::class,'delet'])->middleware('login','role');


?>