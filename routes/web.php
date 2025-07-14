<?php

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\ComplainType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\DashboardController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\ComplaintypeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::middleware('guest')->group(function () {
    Route::get('/', fn() => view('auth.login'))->name('login');
    Route::post('/', [AuthController::class, 'login']);

    Route::get('/forgot-password', function () {
        return view('auth.forgot-password');
    })->name('password.request');

    Route::post('/forgot-password', function (Request $request) {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::ResetLinkSent
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    })->name('password.email');

    Route::get('/reset-password/{token}', function (string $token) {
        return view('auth.reset-password', ['token' => $token]);
    })->name('password.reset');

    Route::post('/reset-password', function (Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PasswordReset

            ? redirect()->route('login')->with('status', __($status))

            : back()->withErrors(['email' => [__($status)]]);
    })->name('password.update');
});




Route::group(['middleware' => ['auth', 'check_role:superadmin,admin,user']], function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::resource('/ticket', \App\Http\Controllers\TicketController::class);
    Route::get('/ticket', [TicketController::class, 'tampil'])->name('ticket.tampil');
});

Route::group(['middleware' => ['auth', 'check_role:superadmin,admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::post('ticket/submit', [TicketController::class, 'submit'])->name('ticket.submit');

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
