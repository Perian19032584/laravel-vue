<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('posts', 'Api\PostsController');