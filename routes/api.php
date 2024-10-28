<?php

use App\Actions\FireAction;
use App\Http\Requests\FireAPIRequest;
use Illuminate\Support\Facades\Route;

Route::get('/fire', function (FireAPIRequest $request, FireAction $action) {
    return $action($request->input('url'), $request->input('headers'), $request->input('body'), 'GET');
});

Route::post('/fire', function (FireAPIRequest $request, FireAction $action) {
    return $action($request->input('url'), $request->input('headers'), $request->input('body'), 'POST');
});
