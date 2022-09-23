<?php
namespace App;

use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardServiceController;

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

Route::get('/', [ServiceController::class, 'index']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
});

Route::resource('/dashboard/service', DashboardServiceController::class);