<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addDoctor;
use App\Models\doc_sec_model;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');
    }

    // Fetch all doctor information
    public function doctors()
    {
        $doctor_info = addDoctor::all();
    
        return view('Doctors.doctors',compact('doctor_info'));
    }

    public function addDoctor()
    {
        $sec_data=doc_sec_model::all();
        return view('Doctors.add-doctor',compact('sec_data'));
    }

    public function storeDoctor(Request $request){

        $addDoctorVar = $request->all();
        addDoctor::create($addDoctorVar);
        return redirect('/doctors')->with('success','Doctor added to the database successfully !');

    }

    public function updateDoctor(){

    }

    // public function deleteDoctor(){
       
    //     return back()->with('danger','Doctor Deleted Successfully');

    // }

    public function editDoctor($id){
        $to_be_edited = addDoctor::find($id);
        $sec_data=doc_sec_model::all();
        return view('Doctors.edit',compact('to_be_edited','sec_data'));
    }

    public function deleteDoctor($id){

    $delete_doctor = addDoctor::find($id);
    $delete_doctor->delete();
    return back()->with('danger','Doctor Deleted Successfully');

    }

    public function view_doc_section(){
        $sec_data=doc_sec_model::all();
        return view('Doctors.sections',compact('sec_data'));

    }

    public function add_doc_section(Request $request){
        $add_doc_section = $request->all();
        doc_sec_model::create($add_doc_section);
        return back()-> with('success','Section added to the database');

    }

    public function doc_sec_view(){
        
    }

 
}
