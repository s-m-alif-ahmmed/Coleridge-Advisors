<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SystemSetting\SystemSettingController;
use App\Http\Controllers\API\DynamicPage\DynamicPageController;
use App\Http\Controllers\API\CMS\HomePage\HeroSectionController;
use App\Http\Controllers\API\CMS\HomePage\PlaceSliderController;
use App\Http\Controllers\API\CMS\BottomBannerController;
use App\Http\Controllers\API\CMS\About\AboutUsController;
use App\Http\Controllers\API\CMS\Team\OurTeamController;
use App\Http\Controllers\API\CMS\ServiceController;
use App\Http\Controllers\API\CMS\ContactController;


// Common routes
Route::get('/system-setting', [SystemSettingController::class, 'systemSetting']);

// Dynamic Pages routes
Route::get('/dynamic-page/list', [DynamicPageController::class, 'index']);
Route::get('/dynamic-page/show/{slug}', [DynamicPageController::class, 'show']);

// Hero Section routes
Route::get('/hero-section/list', [HeroSectionController::class, 'index']);
Route::get('/hero-section/show/{id}', [HeroSectionController::class, 'show']);

// Place Slider routes
Route::get('/place-slider/list', [PlaceSliderController::class, 'index']);
Route::get('/place-slider/show/{id}', [PlaceSliderController::class, 'show']);

// Bottom Banner routes
Route::get('/bottom-banner/list', [BottomBannerController::class, 'index']);
Route::get('/bottom-banner/show/{id}', [BottomBannerController::class, 'show']);

// About Us routes
Route::get('/about-us/list', [AboutUsController::class, 'index']);
Route::get('/about-us/show/{id}', [AboutUsController::class, 'show']);

// Our Team routes
Route::get('/our-team/list', [OurTeamController::class, 'index']);
Route::get('/our-team/show/{id}', [OurTeamController::class, 'show']);

// Service routes
Route::get('/service/list', [ServiceController::class, 'index']);
Route::get('/service/show/{id}', [ServiceController::class, 'show']);

// Contact routes
Route::post('/contact/send', [ContactController::class, 'send']);
