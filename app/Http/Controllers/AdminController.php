<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\File; // Import File facade for deleting files
class AdminController extends Controller
{
    public function dashboard(){
        $doctors = Doctor::latest()->get();
        return view('admin.admin-dashboard',compact('doctors'));
    }
    public function adminShowDoctor(Doctor $doctor){
        return view('admin.show-doctor',compact('doctor'));
    }
    public function adminCreateDoctor(){
        return view('admin.create-doctor');
    }

    public function adminStoreDoctor(Request $request)
    {
        // 1. Input Validation
        $validatedData = $request->validate([
            // Image Validation
           'pic' => 'required|image|mimetypes:image/jpeg,image/png|max:2048',
            // Basic Text Fields
            'name' => 'required|string|max:255',
            'speciality' => 'required|string|max:255',
            
            // Enum Field Validation (must be one of these values)
            'day_of_week' => 'required|in:monday,tuesday,wednesday,thursday,friday,saturday,sunday',
            
            // Time Validation
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time', // End time must be after start time

            // Phone Number (Using string as recommended, max length for international numbers)
            'phone_number' => 'nullable|string|max:20', 

            // Integer Validation
            'room' => 'required|integer|min:1|max:999',
        ]);

        if ($request->hasFile('pic')) {
            $imageFile = $request->file('pic');
            $imageName = time() . '.' . $imageFile->extension();
            $imageFile->move(public_path('doctor_images'), $imageName);
            $validatedData['pic'] = $imageName;
        } else {
            return redirect()->back()->withErrors(['pic' => 'Doctor photo is required']);
        }

        // 4. Save to Database
        Doctor::create($validatedData);

        // 5. Redirect with Success Message
        return redirect()->route('admin.dashboard')->with('success', 'Doctor added successfully!');
    }

    public function adminDoctorEdit(Doctor $doctor){
        return view('admin.edit-doctor',compact('doctor'));
    }



public function adminDoctorUpdate(Request $request, Doctor $doctor)
{
    // 1. Input Validation
    $validatedData = $request->validate([
        // 🛠️ FIX 1: Make 'pic' nullable for updates
        'pic' => 'nullable|image|mimetypes:image/jpeg,image/png|max:2048', 
        
        // Basic Text Fields
        'name' => 'required|string|max:255',
        'speciality' => 'required|string|max:255',
        
        // Enum Field Validation
        'day_of_week' => 'required|in:monday,tuesday,wednesday,thursday,friday,saturday,sunday',
        
        // Time Validation
        'start_time' => 'required|date_format:H:i',
        'end_time' => 'required|date_format:H:i|after:start_time',
        
        // Phone Number
        'phone_number' => 'nullable|string|max:20', 
        
        // Integer Validation
        'room' => 'required|integer|min:1|max:999',
    ]);

    // 2. Image Handling (Only process if a new file was uploaded)
    if ($request->hasFile('pic')) {
        
        // 🛠️ FIX 2: Delete the old image file first
        $oldImagePath = public_path('doctor_images/' . $doctor->pic);
        if ($doctor->pic && File::exists($oldImagePath)) {
            File::delete($oldImagePath);
        }
        
        // Store the new image
        $imageFile = $request->file('pic');
        $imageName = time() . '.' . $imageFile->extension();
        $imageFile->move(public_path('doctor_images'), $imageName);
        
        // Add the new image name to the data to be updated
        $validatedData['pic'] = $imageName;

    } 
    // 🛠️ Note: If $request->hasFile('pic') is false, we don't change $doctor->pic at all, 
    // so the existing value remains, which is the desired behavior for an update.

    // 3. Update the database record
    // We use the $validatedData which contains the new pic name (if uploaded) or 
    // just the other updated fields (if pic was not uploaded).
    $doctor->update($validatedData);

    // 4. Redirect
    return redirect()->route('admin.dashboard')->with('success', 'Doctor updated successfully!');
}

    public function viewRequest(){
        $appointments=Appointment::latest()->get();
        return view('admin.admin-appointments-list',compact('appointments'));
    }

    public function approve(Appointment $appointment){
        $appointment->update(['status'=>'approved']);
        return back()->with('success', 'Appointment approved successfully!');
    }
    public function cancel(Appointment $appointment){
        $appointment->update(['status'=>'canceled']);
        return back()->with('success', 'Appointment canceled');
    }
    
   
}
