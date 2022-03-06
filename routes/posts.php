<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts\postsController;


Route::resource('/post', postsController::class, ['names' => 'posts']);
