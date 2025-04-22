<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ComplaintypeController;
use App\Models\ComplainType;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', fn() => view('auth.login'))->name('login');
Route::post('/', [AuthController::class, 'login']);




Route::group(['middleware' => ['auth', 'check_role:superadmin,admin,user']], function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::resource('/ticket', \App\Http\Controllers\TicketController::class);
    Route::get('/ticket', [TicketController::class, 'tampil'])->name('ticket.tampil');
});

Route::group(['middleware' => ['auth', 'check_role:superadmin,admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/users', [AuthController::class, 'tampilUser'])->name('auth.users');
    Route::resource('/auth', \App\Http\Controllers\AuthController::class);
    Route::post('auth/submit', [AuthController::class, 'submit'])->name('auth.submit');

    Route::resource('/complaintype', \App\Http\Controllers\ComplaintypeController::class);
    Route::get('/complaintype', [ComplaintypeController::class, 'tampilListComplain'])->name('complaintype.list');
    Route::post('/complaintype/submit', [ComplaintypeController::class, 'submit'])->name('complaintype.submit');
});

Route::group(['middleware' => ['auth', 'check_role:user']], function () {
    Route::get('/home', [DashboardController::class, 'home']);
    Route::post('ticket/submit', [TicketController::class, 'submit'])->name('ticket.submit');
});
