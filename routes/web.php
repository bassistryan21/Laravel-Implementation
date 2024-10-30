<?php

use App\Models\Information;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $data = Information::all();
    $data = $data[0];

    return view('welcome', ['data' => $data]);
});
