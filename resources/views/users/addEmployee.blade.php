@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mt-5">Add Employee</h3>

        <form method="POST" action="{{ route('add_employees.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" />
            </div>

            <div class="form-group">
                <label for="designation">Employee Designation</label>
                <input type="text" name="designation" class="form-control" />
            </div>

            <div class="form-group">
                <label for="fbLink">Facebook Link</label>
                <input type="text" name="fbLink" class="form-control" placeholder="https://www.facebook.com" />
            </div>

            <div class="form-group">
                <label for="emailLink">Email Link</label>
                <input type="text" name="emailLink" class="form-control" placeholder="https://ww" />
            </div>

            <div class="form-group">
                <label for="employeeImage">Employee Image</label>
                <input type="file" name="profile" />
            </div>

            <button type="submit" class="btn btn-dark px-4 mt-2">Add Employee</button>
        </form>

    </div>
@endsection
