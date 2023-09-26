<?php

namespace App\Http\Controllers;

use App\Models\AddEmployee;
use Illuminate\Http\Request;
use Image;

class AddEmployeeController extends Controller
{
    //
    public function index()
    {
        $employee = AddEmployee::latest()->get();
        echo ($employee);
        return view('users.index', ['employee' => $employee]);
    }

    public function create()
    {
        $employee = AddEmployee::all();
        return view('users.addEmployee', ['employee' => $employee]);
    }


    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'fbLink' => 'required',
            'emailLink' => 'required',
            'profile' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules for the profile image as needed
        ]);

        // Upload and store the profile image (if provided)
        // if ($request->hasFile('profile')) {
        //     $imagePath = $request->file('profile')->store('profile_images', 'public');
        //     $validatedData['profile'] = $imagePath;
        // }

         //image upload
         if($request->profile){
            $image = $request->profile;
            $imageName =  rand().'.'.$image->getClientOriginalName();
            //$image->move('upload/blog_images/',$imageName);
            $image = Image::make($image)->resize(150, 150)->save('upload/profile_images/'.$imageName);
            $imageUrl = 'upload/profile_images/'.$imageName;
        }

        // Create a new user using the validated data
        AddEmployee::insert([
            'name' => $request->name,
            'designation' => $request->designation,
            'fbLink' => $request->fbLink,
            'emailLink' => $request->emailLink,
            'profile' => $imageUrl,
        ]);

        // Redirect to a relevant page (e.g., the user index)
        return redirect()->route('users.index')->with('success', 'Employee created successfully');
    }


    public function show()
    {

        return view('component.teamMember');
    }
}
