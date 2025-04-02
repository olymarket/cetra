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
    LoginController,
    RegisterController,
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

    Route::get('iniciar', [LoginController::class, 'index'])->name('public.login.index');
    Route::post('iniciar', [LoginController::class, 'store'])->name('public.login.store');
    Route::get('cerrar', [LoginController::class, 'logout'])->name('public.logout');
    //Route::get('crear', [RegisterController::class, 'index'])->name('public.register.index');
    //Route::post('crear', [RegisterController::class, 'store'])->name('public.register.store');
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
    return 'Cleanup Completed';
});

Route::get('/local', function () {
    Artisan::call('storage:link');
    return 'Location Successfully Created';
});

Route::get('/server', function () {
    if (file_exists(public_path('storage'))) {
        return "The folder already exists";
    }
    app('files')->link(
        storage_path('app/public'),
        public_path('storage')
    );
    return 'Server Successfully Created.';
});
