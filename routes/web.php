<?php

use App\Http\Controllers\ValuesController;
use Illuminate\Support\Facades\Route;

Route::get('values/humanize/', [ValuesController::class, 'humanize']);
