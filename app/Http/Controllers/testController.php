<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller

{
    public function test_list(){
        return view('Manage.test-list');
    }
}
