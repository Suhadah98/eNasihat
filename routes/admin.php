<?php

use Illuminate\Support\Route;

Route::prefix('admin')->name('admin.')->group(function() {
    Route::view('/login','auth.login')->name('login');
});