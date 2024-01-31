<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/welcome', function () {
    return view('welcome');
});
