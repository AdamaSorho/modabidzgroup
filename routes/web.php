<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, "index"])->name("home");
Route::get('/services', [\App\Http\Controllers\HomeController::class, "services"])->name("services");
Route::get('/contact', [\App\Http\Controllers\HomeController::class, "contact"])->name("contact");
Route::get('/videos', [\App\Http\Controllers\HomeController::class, "videos"])->name("videos");

Route::group(["prefix" => "/news"], function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, "news"])->name("news");
    Route::get('/detail/{id}', [\App\Http\Controllers\HomeController::class, "detail_news"])->name("news.detail");
});

Route::group(["prefix" => "/residence"], function () {
    Route::get("/", [\App\Http\Controllers\ResidenceController::class, "index"])->name("residence.home");
    Route::group(["prefix" => "/room"], function () {
        Route::get("/detail", [\App\Http\Controllers\ResidenceController::class, "room_detail"])->name("residence.room.detail");
    });
});

Route::group(["prefix" => "/blog"], function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, "blog"])->name("blog");
    Route::get('/detail/{id}', [\App\Http\Controllers\HomeController::class, "detail_blog"])->name("blog.detail");
    Route::post('/message', [\App\Http\Controllers\HomeController::class, "storeMessage"])->name("blog.message");
});

//change website locale
Route::get('/set-locale/{lang}', function ($lang) {
    //set user wanted locale to session
    Session::put('user_locale', $lang);
    return redirect()->back();
})->name('setLocale');

Auth::routes();

Route::middleware(["auth"])->group(function () {
    Route::prefix("/admin")->group(function () {
        Route::post("/ckeditor/upload", [\App\Http\Controllers\Admin\BlogController::class, "upload_image_cke"])->name("ckeditor.upload");
        Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');

        Route::prefix("/slide")->group(function () {
            Route::get("/list", [\App\Http\Controllers\Admin\CarouselController::class, "index"])->name("admin.carousel.index");
            Route::get("/create", [\App\Http\Controllers\Admin\CarouselController::class, "create"])->name("admin.carousel.create");
            Route::get("/update/{id}", [\App\Http\Controllers\Admin\CarouselController::class, "create"])->name("admin.carousel.update");
            Route::post("/store", [\App\Http\Controllers\Admin\CarouselController::class, "store"])->name("admin.carousel.store");
            Route::post("/delete/{carousel}", [\App\Http\Controllers\Admin\CarouselController::class, "destroy"])->name("admin.carousel.delete");
        });

        Route::prefix("/settings")->group(function () {
            Route::get("/create", [\App\Http\Controllers\Admin\SettingController::class, "create"])->name("admin.setting.create");
            Route::post("/store", [\App\Http\Controllers\Admin\SettingController::class, "store"])->name("admin.setting.store");
        });

        Route::prefix("/quality")->group(function () {
            Route::get("/list", [\App\Http\Controllers\Admin\QualityController::class, "index"])->name("admin.quality.index");
            Route::get("/create", [\App\Http\Controllers\Admin\QualityController::class, "create"])->name("admin.quality.create");
            Route::get("/update/{id}", [\App\Http\Controllers\Admin\QualityController::class, "create"])->name("admin.quality.update");
            Route::post("/store", [\App\Http\Controllers\Admin\QualityController::class, "store"])->name("admin.quality.store");
            Route::post("/delete/{quality}", [\App\Http\Controllers\Admin\QualityController::class, "destroy"])->name("admin.quality.delete");
        });

        Route::prefix("/experience")->group(function () {
            Route::get("/list", [\App\Http\Controllers\Admin\ExperienceController::class, "index"])->name("admin.experience.index");
            Route::get("/create", [\App\Http\Controllers\Admin\ExperienceController::class, "create"])->name("admin.experience.create");
            Route::get("/update/{id}", [\App\Http\Controllers\Admin\ExperienceController::class, "create"])->name("admin.experience.update");
            Route::post("/store", [\App\Http\Controllers\Admin\ExperienceController::class, "store"])->name("admin.experience.store");
            Route::post("/delete/{experience}", [\App\Http\Controllers\Admin\ExperienceController::class, "destroy"])->name("admin.experience.delete");
        });

        Route::prefix("/service")->group(function () {
            Route::get("/list", [\App\Http\Controllers\Admin\ServiceController::class, "index"])->name("admin.service.index");
            Route::get("/create", [\App\Http\Controllers\Admin\ServiceController::class, "create"])->name("admin.service.create");
            Route::get("/update/{id}", [\App\Http\Controllers\Admin\ServiceController::class, "create"])->name("admin.service.update");
            Route::post("/store", [\App\Http\Controllers\Admin\ServiceController::class, "store"])->name("admin.service.store");
            Route::post("/delete/{service}", [\App\Http\Controllers\Admin\ServiceController::class, "destroy"])->name("admin.service.delete");
        });

        Route::prefix("/blog")->group(function () {
            Route::get("/list", [\App\Http\Controllers\Admin\BlogController::class, "index"])->name("admin.blog.index");
            Route::get("/create", [\App\Http\Controllers\Admin\BlogController::class, "create"])->name("admin.blog.create");
            Route::get("/update/{id}", [\App\Http\Controllers\Admin\BlogController::class, "create"])->name("admin.blog.update");
            Route::post("/store", [\App\Http\Controllers\Admin\BlogController::class, "store"])->name("admin.blog.store");
            Route::post("/delete/{blog}", [\App\Http\Controllers\Admin\BlogController::class, "destroy"])->name("admin.blog.delete");
            Route::prefix("/category")->group(function () {
                Route::get("/list", [\App\Http\Controllers\Admin\BlogCategoryController::class, "index"])->name("admin.blog.category.index");
                Route::get("/create", [\App\Http\Controllers\Admin\BlogCategoryController::class, "create"])->name("admin.blog.category.create");
                Route::get("/update/{id}", [\App\Http\Controllers\Admin\BlogCategoryController::class, "create"])->name("admin.blog.category.update");
                Route::post("/store", [\App\Http\Controllers\Admin\BlogCategoryController::class, "store"])->name("admin.blog.category.store");
                Route::post("/delete/{category}", [\App\Http\Controllers\Admin\BlogCategoryController::class, "destroy"])->name("admin.blog.category.delete");
            });
        });

        Route::prefix("/testimony")->group(function () {
            Route::get("/list", [\App\Http\Controllers\Admin\TestimonyController::class, "index"])->name("admin.testimony.index");
            Route::get("/create", [\App\Http\Controllers\Admin\TestimonyController::class, "create"])->name("admin.testimony.create");
            Route::get("/update/{id}", [\App\Http\Controllers\Admin\TestimonyController::class, "create"])->name("admin.testimony.update");
            Route::post("/store", [\App\Http\Controllers\Admin\TestimonyController::class, "store"])->name("admin.testimony.store");
            Route::post("/delete/{testimony}", [\App\Http\Controllers\Admin\TestimonyController::class, "destroy"])->name("admin.testimony.delete");
        });

        Route::prefix("/video")->group(function () {
            Route::get("/list", [\App\Http\Controllers\Admin\VideoController::class, "index"])->name("admin.video.index");
            Route::get("/create", [\App\Http\Controllers\Admin\VideoController::class, "create"])->name("admin.video.create");
            Route::get("/update/{id}", [\App\Http\Controllers\Admin\VideoController::class, "create"])->name("admin.video.update");
            Route::post("/store", [\App\Http\Controllers\Admin\VideoController::class, "store"])->name("admin.video.store");
            Route::post("/delete/{video}", [\App\Http\Controllers\Admin\VideoController::class, "destroy"])->name("admin.video.delete");
            Route::prefix("/category")->group(function () {
                Route::get("/list", [\App\Http\Controllers\Admin\VideoCategoryController::class, "index"])->name("admin.video.category.index");
                Route::get("/create", [\App\Http\Controllers\Admin\VideoCategoryController::class, "create"])->name("admin.video.category.create");
                Route::get("/update/{id}", [\App\Http\Controllers\Admin\VideoCategoryController::class, "create"])->name("admin.video.category.update");
                Route::post("/store", [\App\Http\Controllers\Admin\VideoCategoryController::class, "store"])->name("admin.video.category.store");
                Route::post("/delete/{category}", [\App\Http\Controllers\Admin\VideoCategoryController::class, "destroy"])->name("admin.video.category.delete");
            });
        });
    });
});
