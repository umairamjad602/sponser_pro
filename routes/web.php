<?php

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



Route::get('jobs', function () {
    return view('dashboard.jobs');
});
Route::get('athelets', function () {
    return view('dashboard.athelets');
});
Route::get('post-job', function () {
    return view('dashboard.post-job');
});
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/applied-jobs', function () {
    return view('dashboard.applied-jobs');
});

Route::get('/disclosed-jobs', function () {
    return view('dashboard.disclosed-jobs');
});

Route::get('/manage-profile', function () {
    return view('dashboard.manage-profile');
});

Route::get('/my-payments', function () {
    return view('dashboard.my-payments');
});

Route::get('/payments-methods', function () {
    return view('dashboard.payments-methods');
});

Route::get('/sponsorpro-jobs', function () {
    return view('dashboard.sponsorpro-jobs');
});


Route::get('/anthelet-profile', function () {
    return view('dashboard.athelets-profile');
});

Route::get('/chat', function () {
    return view('dashboard.chat');
});

Route::get('/edit-profile', function () {
    return view('dashboard.edit-profile');
});

Route::get('/manage-athalets-profile', function () {
    return view('dashboard.manage-athalets-profile');
});

Route::get('/add-new-link', function () {
    return view('dashboard.add-new-link');
});

Route::get('/disclose-deal', function () {
    return view('dashboard.disclose-deal');
});

Route::get('/my-posted-jobs', function () {
    return view('dashboard.my-posted-jobs');
});

Route::get('/view-details', function () {
    return view('dashboard.view-details');
});

Route::get('/misc', function () {
    return view('dashboard.misc');
});

Route::get('/misc2', function () {
    return view('dashboard.misc2');
});

Route::get('/visibilty', function () {
    return view('dashboard.visibilty');
});

Route::get('/posted-job-revew', function () {
    return view('dashboard.posted-job-revew');
});

Route::get('/view-profile', function () {
    return view('dashboard.view-profile');
});

Route::get('/athelets-view-profile', function () {
    return view('dashboard.athelets-view-profile');
});


Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('dashboard.home');
});

Auth::routes(['verify' => true]);



Route::middleware(['isapproved'])->group(function () {
    // user dashboard
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/sponserpro', [App\Http\Controllers\HomeController::class, 'sponserpro'])->name('sponserpro');
    Route::get('job', [App\Http\Controllers\HomeController::class, 'jobs'])->name('jobs');
    Route::get('/athletes', [App\Http\Controllers\HomeController::class, 'athletes'])->name('athletes');
    Route::get('/resources', [App\Http\Controllers\HomeController::class, 'resources'])->name('resources');

    Route::get('/ali', function()
    {
        return 'Hello World';
    });

});

Route::prefix('/admin')->name('admin.')->group(function () {
    // logout
    Route::post('/logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');

    // login
    Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showAdminLoginForm'])->name('login.view');
    Route::post('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'adminLogin'])->name('login');

    // dashboard
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
        Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard');

        Route::prefix('/user')->name('user.')->group(function () {
            Route::get('/list', [App\Http\Controllers\Admin\UserController::class, 'list'])->name('list');
            Route::get('/approval/change/{id}/{status}', [App\Http\Controllers\Admin\UserController::class, 'approvalChange'])->name('approval.change');
            Route::delete('/delete/{id}', [App\Http\Controllers\Admin\UserController::class, 'deleteUser'])->name('delete');
        });

    });

});
