<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketOverviewController;
use App\Http\Controllers\MockMarketOverviewController;

// Real CoinMarketCap endpoint using free v1 API
Route::get('/market-overview', MarketOverviewController::class);

// Temporary mock endpoint for testing frontend (uncomment if needed)
// Route::get('/market-overview', MockMarketOverviewController::class);
