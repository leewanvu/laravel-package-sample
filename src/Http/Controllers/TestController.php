<?php

namespace Leewanvu\LaravelPackageSample\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{   
    /**
     * Show test page
     * 
     * @return \Illuminate\Http\Response
     */
    public function showTest()
    {
        return view('laravel-package-sample::test');
    }    
}