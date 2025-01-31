<?php

use App\Models\Article;
use App\Models\Category;
use App\Models\PromoDetail;
use App\Models\HighlightDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categories = Category::all();
    $promoDetails = PromoDetail::all();
    $highlihtDetails = HighlightDetail::all();
    $articles = Article::all();
    return inertia('Home', ["categories" => $categories, "promoDetails" => $promoDetails, "highlihtDetails" => $highlihtDetails, "articles" => $articles]);
});

Route::get('/article', function () {
    return inertia('Article/Article');
});

Route::get('/article/{article:slug}', function (Article $article) {
    return inertia('Article/[slug]', ['article' => $article]);
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