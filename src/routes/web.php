<?php

// Route::get('test', function() {
//     // return 'Hello from leewanvu/laravel-package-sample';
//     return view('laravel-package-sample::test');
// });

Route::group([
    'namespace' => 'Leewanvu\LaravelPackageSample\Http\Controllers',
    'middleware' => ['just-test']
], function () {
    Route::get('test', 'TestController@showTest');
});