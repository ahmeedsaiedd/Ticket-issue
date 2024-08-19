<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

// Tickets
// Route to show the form for creating a new ticket
// Route to show the form for creating a new ticket
Route::get('/create', [TicketController::class, 'create'])->name('ticket.create');

// Route to handle form submission for creating a new ticket
Route::post('/ticket', [TicketController::class, 'store'])->name('ticket.store');

// Route to list all tickets
// Route::get('/ticket/list', [TicketController::class, 'list'])->name('ticket.list');
Route::get('/list', [TicketController::class, 'list'])->name('ticket.list');
Route::get('/active', [TicketController::class, 'active'])->name('ticket.active');



// Route to list active tickets
// Route::get('/ticket/active', [TicketController::class, 'active'])->name('ticket.active');

Route::post('/tickets/{id}/status', [TicketController::class, 'updateStatus'])->name('tickets.updateStatus');
Route::post('/tickets/{id}/close', [TicketController::class, 'close'])->name('tickets.close');
Route::post('/tickets/{id}/update-status', [TicketController::class, 'updateStatus'])->name('tickets.updateStatus');


// Users
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user/list', [UserController::class, 'list'])->name('user.list'); // Changed from index to list