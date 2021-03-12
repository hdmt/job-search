<?php

use Illuminate\Support\Facades\Route;

Route::get('/mock01', function () {
    return view('mock01');
});

/**
 * ユーザ画面
 */
Route::get('/', function () {
    return view('home');
});

Route::get('/detail', function () {
    return view('detail');
});




/**
 * 管理画面
 */
Route::get('/dashboard', function () {

    $users = DB::table('users')->get();

    // dump($users);

    return view('admin.dashboard', ['users' => $users]);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
