<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // Import the Hash facade


class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::latest()->get();
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        $roles = Role::all();
        return view('users.create', ['roles' => $roles]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users', // Use unique rule to check for existing email
            'password' => 'required|confirmed',
            'roles' => 'required|array',
        ]);

        $user = User::create($request->all());
        $user->roles()->attach($request->input('roles'));

        return redirect()->route('users.index')->with('success', 'user created successfully');
    }

    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    public function edit(User $user)
    {

        $roles = Role::all();
        return view('users.edit', ['user' => $user, 'roles' => $roles]);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id, // Use unique rule to check for existing email
            // 'password' => 'required|confirmed',
            'roles' => 'required|array',
        ]);

        // return $request->all();

        $user->update($request->all());
        // attach = add ids
        // detach = delete ids
        // sync = attach + detach
        $user->roles()->sync($request->input('roles'));

        return redirect()->route('users.index')->with('success', 'user Updated successfully');
    }

    public function destroy(User $user)
    {
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('users.index')->with('success', 'user updated successfully');
    }


    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users', // Use unique rule to check for existing email
            'password' => 'required|confirmed',
            'tc' => 'nullable', //'tc' is now validated as nullable
        ]);

        if (User::where('email', $request->email)->first()) {
            return response([
                'message' => 'Email Already Exists',
                'status' => 'failed'
            ], 200);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password
            'tc' => $request->tc,
        ]);

        $token = $user->createToken($request->email)
            ->plainTextToken;

        return response([
            'token' => $token,
            'message' => 'User registered successfully',
            'status' => 'success'
        ], 201);
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $token = $user->createToken($request->email)
                ->plainTextToken;

            return response([
                'token' => $token,
                'message' => 'User login Successfully',
                'status' => 'success'
            ], 200);
        }

        return response([
            'message' => 'The Provided Credentials are incorrect',
            'status' => 'failed',
        ], 401);
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response([
            'message' => 'Logout Successfull',
            'status' => 'success'
        ], 200);
    }


    public function logged_user()
    {
        $loggedUser = auth()->user();

        return response([
            'user' => $loggedUser,
            'message' => 'logged user data',
            'status' => 'success'
        ], 200);
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed',
        ]);
        $loggedUser = auth()->user();
        $loggedUser->password = Hash::make($request->password);
        $loggedUser->save();

        return response([
            'message' => 'Password Change Successfully',
            'status' => 'success'
        ], 200);
    }
}
