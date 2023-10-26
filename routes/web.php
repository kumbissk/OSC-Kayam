<?php

use App\Http\Controllers\BoarderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index'])->name('index');

Auth::routes();

Route::controller(DashboardController::class)->group(function () {

    Route::get('/dashboard/home', 'index')->name('dashboard');
    
    Route::get('/dashboard/pensionnaires', [BoarderController::class, 'create'])->name('pensionnaires');
    Route::post('/dashboard/pensionnaires', [BoarderController::class, 'store'])->name('pensionnaires');
    Route::get('/dashboard/listPensionnaires', [BoarderController::class, 'index'])->name('listPensionnaires');

    Route::get('/dashboard/showPensionnaires/{boarder}', [BoarderController::class, 'show'])->name('showPensionnaires');
    Route::put('/dashboard/updatePensionnaires/{boarder}', [BoarderController::class, 'update'])->name('updatePensionnaires');
    Route::delete('/dashboard/deletePensionnaires/{boarder}', [BoarderController::class, 'delete'])->name('deletePensionnaires');

}); 
