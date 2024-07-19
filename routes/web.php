<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\Admin\ModuleStepController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\TailController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/quiz', [HomeController::class, 'quiz'])->name('home.quiz.index');
Route::get('/tails', [HomeController::class, 'tails'])->name('home.tails.index');
Route::get('/preschool', [HomeController::class, 'preschool'])->name('home.preschool.index');





Route::group(['namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/admin', [IndexController::class, 'index'])->name('admin.index');

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::patch('/categories/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');

    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/regions', [RegionController::class, 'index'])->name('admin.regions.index');
        Route::get('/regions/create', [RegionController::class, 'create'])->name('admin.regions.create');
        Route::post('/regions/store', [RegionController::class, 'store'])->name('admin.regions.store');
        Route::get('/regions/{region}/edit', [RegionController::class, 'edit'])->name('admin.regions.edit');
        Route::patch('/regions/{region}', [RegionController::class, 'update'])->name('admin.regions.update');

    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/tails', [TailController::class, 'index'])->name('admin.tails.index');
        Route::get('/tails/create', [TailController::class, 'create'])->name('admin.tails.create');
        Route::post('/tails/store', [TailController::class, 'store'])->name('admin.tails.store');
        Route::get('/tails/{tail}/edit', [TailController::class, 'edit'])->name('admin.tails.edit');
        Route::patch('/tails/{tail}', [TailController::class, 'update'])->name('admin.tails.update');

    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/modules', [ModuleController::class, 'index'])->name('admin.modules.index');
        Route::get('/modules/create', [ModuleController::class, 'create'])->name('admin.modules.create');
        Route::post('/modules/store', [ModuleController::class, 'store'])->name('admin.modules.store');
        Route::get('/modules/{module}', [ModuleController::class, 'show'])->name('admin.modules.show');
        Route::get('/modules/{module}/edit', [ModuleController::class, 'edit'])->name('admin.modules.edit');
        Route::patch('/modules/{module}', [ModuleController::class, 'update'])->name('admin.modules.update');

    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/module-steps', [ModuleStepController::class, 'index'])->name('admin.modules-step.index');
        Route::get('/module-steps/create', [ModuleStepController::class, 'create'])->name('admin.modules-step.create');
        Route::post('/module-steps/store', [ModuleStepController::class, 'store'])->name('admin.modules-step.store');
        Route::get('/module-steps/{moduleStep}', [ModuleStepController::class, 'show'])->name('admin.modules-step.show');
        Route::get('/module-steps/{moduleStep}/edit', [ModuleStepController::class, 'edit'])->name('admin.modules-step.edit');
        Route::patch('/module-steps/{moduleStep}', [ModuleStepController::class, 'update'])->name('admin.modules-step.update');

    });

});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
