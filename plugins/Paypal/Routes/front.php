<?php
/**
 * Copyright (c) Since 2024 InnoShop - All Rights Reserved
 *
 * @link       https://www.innoshop.com
 * @author     InnoShop <team@innoshop.com>
 * @license    https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

use Illuminate\Support\Facades\Route;
use Plugin\PayPal\Controllers\PayPalController;

Route::post('/pay_pal/create', [PayPalController::class, 'create'])->name('pay_pal.create');
Route::post('/pay_pal/capture', [PayPalController::class, 'capture'])->name('pay_pal.capture');
