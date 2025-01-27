<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home');
});

Route::get('/article', function () {
    return inertia('Article');
});

Route::redirect('/order', '/order/voucher');

Route::get('/order/voucher', function () {
    return inertia('Order/Voucher');
});

Route::get('/order/biller', function () {
    return inertia('Order/Biller');
});

Route::get('/order/rewards', function () {
    return inertia('Order/Rewards');
});

Route::get('/order/pay-by-scan', function () {
    return inertia('Order/PayByScan');
});

Route::get('/account', function () {
    return inertia('Account');
});