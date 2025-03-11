<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TicketController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', fn() => view('auth.login'))->name('login');
Route::post('/', [AuthController::class, 'login']);

Route::resource('/ticket', \App\Http\Controllers\TicketController::class);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/ticket', [TicketController::class, 'tampil'])->name('ticket.tampil');
// Route::get('/ticket/add', [TicketController::class, 'tambah'])->name('ticket.tambah');

Route::post('ticket/submit', [TicketController::class, 'submit'])->name('ticket.submit');

Route::get('/users', function () {
    return view('users');
});
