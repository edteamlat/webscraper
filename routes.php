<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\SearchController;

SimpleRouter::get('/', [HomeController::class, 'show']);
SimpleRouter::get('search', [SearchController::class, 'show']);
SimpleRouter::get('my-searches', [SearchController::class, 'index']);
SimpleRouter::post('search', [SearchController::class, 'store']);
SimpleRouter::get('login', [LoginController::class, 'show']);
SimpleRouter::post('login', [LoginController::class, 'login']);
SimpleRouter::post('logout', [LoginController::class, 'logout']);

SimpleRouter::start();
