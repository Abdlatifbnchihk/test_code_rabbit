<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request)
    {
        if ($user = null) {
            return false;
        }
    }

    function test2(){
        Application::create($request->all());
    }
}
