<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
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

//9.1
Route::get('/user/{id?}', function ($id = 0) {
    return "Передан параметр $id";
});

//9.2
Route::get('/{year}/{month}/{day}', function ($year, $month, $day) {
    $date = $year . '-' . $month . '-' . $day;
    $wdays = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];
    $dayNumber = date('w', strtotime($date));
    return $wdays[$dayNumber];
})->where([
    'year' => '^[0-9]{4}$',
    'month' => "^[0-1][0-2]$",
    'day' => "^[0-3][0-9]$"
]);

//9.3
Route::get('/names/{name}', function ($name) {
    $users = [
        'user1' => 'city1',
        'user2' => 'city2',
        'user3' => 'city3',
        'user4' => 'city4',
        'user5' => 'city5'
    ];
    if (array_key_exists($name, $users)) {
        return $users[$name];
    } else {
        return "Неверное имя";
    }
});

//9.4
Route::get('/pages/show/{id}', [PageController::class, 'showOne']);
Route::get('/show', [PostController::class, 'index']);

Route::get('/', function () {
    return view('child',['arr'=>[1,2]]);
});

//10.1, 10.2, 10.3
Route::get('/method/{title}/{content}',[MyController::class,'method']);



Route::get('employees',[EmployeesController::class,'main']);
//13.1.2
Route::get('employees/2',[EmployeesController::class,'method2']);
//13.1.3
Route::get('employees/3',[EmployeesController::class,'method3']);
//13.1.4
Route::get('employees/4',[EmployeesController::class,'method4']);
//13.1.5
Route::get('employees/5',[EmployeesController::class,'method5']);
//13.1.6
Route::get('employees/6',[EmployeesController::class,'method6']);
//13.1.7
Route::get('employees/7',[EmployeesController::class,'method7']);
//13.1.8
Route::get('employees/8',[EmployeesController::class,'method8']);
//13.1.9
Route::get('employees/9',[EmployeesController::class,'method9']);
//13.1.10
Route::get('employees/10',[EmployeesController::class,'method10']);


//13.2.2
Route::get('users/2',[UsersController::class,'method2']);
//13.2.3
Route::get('users/3',[UsersController::class,'method3']);
//13.2.4
Route::get('users/4',[UsersController::class,'method4']);
//13.2.5
Route::get('users/5',[UsersController::class,'method5']);
//13.2.delete
Route::get('users/delete',[UsersController::class,'delete']);

//MyProducts
Route::get('/products',[ProductsController::class,'index']);
Route::get('/products/show',[ProductsController::class, 'showManufacturers']);
Route::get('/products/show/{id}',[ProductsController::class,'showProducts']);


Route::get('/list',[PostController::class,'show']);
