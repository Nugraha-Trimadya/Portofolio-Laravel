<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortofolioController;

route::get('/', [PortofolioController::class, 'home']);
route::get('/about', [PortofolioController::class, 'about']);
route::get('/social_media', [PortofolioController::class, 'social_media']);
route::get('/sertifikat', [PortofolioController::class, 'sertifikat']);

