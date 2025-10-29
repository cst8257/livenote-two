<?php

use App\Http\Controllers\NoteController;
use App\Livewire\Livenote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', Livenote::class)->middleware('auth');
Route::get('/login', function () { return view('login'); })->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/', Livenote::class);
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/login');
    });
});