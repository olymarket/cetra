<?php
use Illuminate\Support\Facades\{
    Route,
    Artisan
};

use App\Http\Controllers\Public\{
    HomeController,
    ContactController,
    ServicesController,
    FamilyCornerController,
    PressRoomController,
    AboutController,
    BlogShowController,
};

use App\Http\Controllers\Admin\{
    BlogController,
};

Route::get('/', [HomeController::class, 'index'])->name('public.home.index');
Route::group(['prefix' => 'home'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('public.welcome.index');
    Route::get('about', [AboutController::class, 'index'])->name('public.about.index');
    Route::get('pressroom', [PressRoomController::class, 'index'])->name('public.pressroom.index');
    Route::get('familycorner', [FamilyCornerController::class, 'index'])->name('public.familycorner.index');
    Route::group(['prefix' => 'familycorner'], function () {
        Route::get('relocation-service', [FamilyCornerController::class, 'rs'])->name('public.familycorner.rs');
        Route::get('additional-services', [FamilyCornerController::class, 'as'])->name('public.familycorner.as');
        Route::get('move-management', [FamilyCornerController::class, 'mm'])->name('public.familycorner.mm');
        Route::get('corporate-services', [FamilyCornerController::class, 'cs'])->name('public.familycorner.cs');
    });
    Route::get('services', [ServicesController::class, 'index'])->name('public.services.index');
    Route::get('contact', [ContactController::class, 'index'])->name('public.contcat.index');
    Route::get('blog-show/{idPost}', [BlogShowController::class, 'index'])->name('public.blog.index');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('blog-index', [BlogController::class, 'index'])->name('admin.blog.index');
    Route::get('blog-create', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::get('blog-edit/{idPost}', [BlogController::class, 'edit'])->name('admin.blog.edit');
});

Route::get('/clear', function () {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('view:clear');
    $run = Artisan::call('route:clear');
    $run = Artisan::call('config:cache');
    $run = Artisan::call('optimize');
    return 'Limpieza del Sistema Terminada con exito';
});

Route::get('/local', function () {
    Artisan::call('storage:link');
    return 'La carpeta storage sea creado con exito';
});

Route::get('/server', function () {
    if (file_exists(public_path('storage'))) {
        return "La carpeta Storage ya existe";
    }
    app('files')->link(
        storage_path('app/public'),
        public_path('storage')
    );
    return 'La carpeta storage sea creado con exito.';
});
