<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::get('/', function () {
   return view('welcome');
});

//all members 
Route::get('/members/index', [MemberController::class, 'index'])->name('members.index');

//create member
Route::get('/members/create', [MemberController::class, 'create'])->name('members.create');

//store member
Route::post('/members', [MemberController::class, 'store']);

//single member
Route::get('/members/{member}', [MemberController::class, 'show'])->name('members.show');





