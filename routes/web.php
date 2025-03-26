<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/', function (): View {
    return view('web.homepage', ['title' => 'Homepage']);
});

Route::get('/products', function (): View {
    return view('web.products', ['title' => 'Products']);
});

Route::get('/product/{slug}', function (string $slug): View {
    return view('web.single_product', ['title' => 'Single Product', 'slug' => $slug]);
});

Route::get('/categories', function (): View {
    return view('web.categories', ['title' => 'Categories']);
});

Route::get('/category/{slug}', function (string $slug): View {
    return view('web.single_category', ['title' => 'Single Category', 'slug' => $slug]);
});

Route::get('/cart', function (): View {
    return view('web.cart', ['title' => 'Cart']);
});

Route::get('/checkout', function (): View {
    return view('web.checkout', ['title' => 'Checkout']);
});
