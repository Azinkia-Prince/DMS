<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addDoctor;

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
        return view('Doctors.add-doctor');
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
        return view('Doctors.edit',compact('to_be_edited'));
    }

    public function deleteDoctor($id){

    $delete_doctor = addDoctor::find($id);
    $delete_doctor->delete();
    return back()->with('danger','Doctor Deleted Successfully');

    }

 
}
