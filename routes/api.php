<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{
    Route,
    Artisan,
};
use App\Http\Controllers\Api\Admin\{
    BlogController,
};

use App\Http\Controllers\Api\Public\{
    ContactFormController,
    BlogsController,
};

Route::group(['prefix' => 'admin'], function () {
    Route::get('/blog-index', [BlogController::class, 'index'])->name('');
    Route::get('/blog-create', [BlogController::class, 'create'])->name('');
    Route::post('/blog-store', [BlogController::class, 'store'])->name('');
    Route::get('/blog-edit/{idPost}', [BlogController::class, 'edit'])->name('');
    Route::post('/blog-update/{idPost}', [BlogController::class, 'update'])->name('');
    Route::delete('/blog-delete/{idPost}', [BlogController::class, 'delete'])->name('');
});

Route::group(['prefix' => 'public'], function () {
    Route::get('blog-index', [BlogsController::class, 'index'])->name('');
    Route::get('blog-show/{idPost}', [BlogsController::class, 'show'])->name('');
    Route::post('email', [ContactFormController::class, 'index'])->name('public.contcat.email');
});
