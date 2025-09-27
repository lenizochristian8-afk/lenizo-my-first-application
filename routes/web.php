<?php 
 
use Illuminate\Support\Facades\Route; 
use App\Models\Job; 
use App\Http\Controllers\JobController;

Route::resource('jobs', JobController::class);
 
Route::get('/', function () { 
    return view('home'); 
}); 
