<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(ActionController::class)->group(function () {
    Route::get('/','allPost');


    Route::get('/postData', 'postData');
    Route::get('/categoryPost/{category_id}', 'categoryPost');
    Route::get('/posts/{id}/delete', 'softDelete');
    Route::get('/softData', 'softData');
    Route::get('/allPost', 'allPost');

    Route::get('/categories/{id}/posts', 'specificCatPost');
    Route::get('/categories/{id}/latestpost',  'latestPost');
    Route::get('/categories',  'CategoriesLatestPosts');

});





