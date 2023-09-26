@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mt-5">Show Users</h3>

        <div class="row">
            <div class="col-sm-4">
                <label>Name</label>
                <p>{{ $user->name }}</p>
            </div>
            <div class="col-sm-4">
                <label>Email</label>
                <p>{{ $user->email }}</p>
            </div>
            <div class="col-sm-4">
                <label>Roles</label>
                <p>
                    @foreach ($user->roles as $role)
                        {{ $role->name }}{{ !$loop->last ? ',' : '' }}
                    @endforeach
                </p>
            </div>
        </div>
    </div>
@endsection
