<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\CalendarController;

use Illuminate\Support\Facades\Route;

Route::get('/', [CareerController::class, 'index']);

Route::get('/the-b2b-cfo-difference', [CareerController::class, 'people']);
Route::get('/the-b2b-cfo-difference/people-and-thought-leadership', [CareerController::class, 'people']);
Route::get('/the-b2b-cfo-difference/training-and-professional-development', [CareerController::class, 'training']);
Route::get('/the-b2b-cfo-difference/higher-fees-and-the-large-check', [CareerController::class, 'higher']);
Route::get('/the-b2b-cfo-difference/support-resources-and-tools', [CareerController::class, 'support']);
Route::get('/the-b2b-cfo-difference/career-change', [CareerController::class, 'career']);
Route::get('/the-b2b-cfo-difference/branding-and-marketing', [CareerController::class, 'branding']);
Route::get('/the-b2b-cfo-difference/our-locations', [CareerController::class, 'locations']);

Route::get('/5-needs-of-cfos', [CareerController::class, 'five']);
Route::get('/million-dollar-video', [CareerController::class, 'million']);
Route::get('/our-why', [CareerController::class, 'why']);

Route::get('/non-disclosure-agreement', [CareerController::class, 'nda']);
Route::get('/operating-agrement', [AccessController::class, 'oa']);

Route::get('/calendar', [CalendarController::class, 'denise']);
Route::get('/calendar/denise', [CalendarController::class, 'denise']);
// Route::get('/calendar/josh', [CalendarController::class, 'josh']);
