@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mt-5">Add New Users</h3>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" />

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" />

                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" />

                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" />
            </div>

            <div class="form-group">
                <label for="tc">TC</label>
                <input type="text" name="tc" class="form-control" />
            </div>

            <div class="form-group">
                <label for="roles">Roles</label>

                <select class="form-control" multiple name="roles[]">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>

                @error('roles')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-dark px-4 mt-2">Create User</button>
        </form>
    </div>
@endsection
