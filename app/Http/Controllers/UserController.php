<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Doctor;
class UserController extends Controller
{
    public function dashboard(){
        if(Auth::check()&& Auth::user()->role==='user'){
            return view('dashboard');
        }
        else if(Auth::check()&& Auth::user()->role==='admin'){
            return view('admin.admin-dashboard');
        }
        else{
            return abort(403,'Unauthorized');
        }
    }

   public function home(){
       
        
    $doctors = Doctor::latest()->get();
    return view('main', compact('doctors'));
    }

    public function DoctorIndex(){
         // Fetch the data needed for the entire homepage
        $doctors = Doctor::latest()->get();
        return view('pages.doctor-index',compact('doctors'));
    }
    public function doctorShow(Doctor $doctor){
        return view('pages.doctor-show',compact('doctor'));
    }
    public function aboutUs(){
        return view('pages.about-us');
    }

    public function doctorList(){
        $doctors = Doctor::latest()->paginate(10);
        return view('pages.doctor-list',compact('doctors'));
    }
   

    public function Appointment(Request $request)
{
    $attr = $request->validate([
        'full_name'      => 'required|string|max:255',
        'email_address'  => 'required|email|max:255',
        'date'           => 'required|date|after_or_equal:today',
        'speciality'     => 'required|string|max:255',
        'number'         => 'required|string|max:20',
        'message'        => 'nullable|string|max:500',
        'status'         => 'nullable|string'
    ]);

    Appointment::create($attr);

    return back()->with('success', 'Appointment request submitted successfully!');
}
}
