<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::redirect('/', '/admin/dashboard');

    Route::get('/dashboard', function () {
        return view('admin/index');
    })->name('dashboard');

    Route::get('/add-category', function () {
        return view('admin/add-category');
    })->name('addCategory');

    Route::get('/add-product', function () {
        return view('admin/add-product');
    })->name('addProduct');
    
    Route::get('/products', function () {
        return view('admin/products');
    })->name('products');

    Route::get('/orders', function () {
        return view('admin/order');
    })->name('orders');

     
    Route::get('/users', function () {
        return view('admin/users');
    })->name('users');

});

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/men', function () {
    return view('men');
});