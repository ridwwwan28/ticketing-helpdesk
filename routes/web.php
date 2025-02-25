<?php

use App\Http\Controllers\TicketController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::resource('/ticket', \App\Http\Controllers\TicketController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/ticket', [TicketController::class, 'tampil'])->name('ticket.tampil');
// Route::get('/ticket/add', [TicketController::class, 'tambah'])->name('ticket.tambah');

Route::post('ticket/submit', [TicketController::class, 'submit'])->name('ticket.submit');

Route::get('/users', function () {
    return view('users');
});
