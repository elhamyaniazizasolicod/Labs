<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Models\Category;

Route::get('/categories', function () {
    $categories = Category::all();

    return view('categories', compact('categories'));
});