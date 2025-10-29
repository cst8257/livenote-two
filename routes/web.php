<?php

use App\Http\Controllers\NoteController;
use App\Livewire\Livenote;
use Illuminate\Support\Facades\Route;

Route::get('/', Livenote::class);
Route::get('/login', function () { return view('login'); })->name('login');