@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mt-5">Edit Users</h3>

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" name="f_name" class="form-control" value="{{ $user->f_name }}" />

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">Last Name</label>
                <input type="text" name="l_name" class="form-control" value="{{ $user->l_name }}" />

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}" />

                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>



            <div class="form-group">
                <label for="roles">Roles</label>

                <select class="form-control" multiple name="roles[]">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" @if (in_array($role->id, $user->roles->pluck('id')->toArray())) selected @endif>
                            {{ $role->name }}</option>
                    @endforeach
                </select>

                @error('roles')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-dark px-4 mt-2">Update User</button>
        </form>
    </div>
@endsection
