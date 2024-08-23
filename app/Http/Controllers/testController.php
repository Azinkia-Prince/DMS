<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testList;

class testController extends Controller

{
    public function test_list(){
        $test_list = testList::all();
        return view('Manage.test-list',compact('test_list'));
    }

    public function submit_test_list(Request $request){
        $submit_test_list = $request->all();
        testList::create($submit_test_list);
        return redirect('/test-list')->with('success','Test added to the database successfully !');
    }

    
}
