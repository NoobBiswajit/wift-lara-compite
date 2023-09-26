@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Session('success'))
            <span>{{ Session::get('success') }}</span>
        @endif
        <h3 class="mt-5">Add Blogs</h3>

        <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" />
            </div>

            <div class="form-group">
                <label for="title">Blog Title</label>
                <input type="text" name="title" class="form-control" />
            </div>

            <div class="form-group">
                <label for="title">Blog Image</label>
                <input type="file" name="image" class="form-control" />
            </div>

            <div class="form-group">
                <label for="description">Blog Description</label>
                <textarea type="text" name="description" class="form-control" rows="6"></textarea>
            </div>

            <button type="submit" class="btn btn-dark px-4 mt-2">Add Blogs</button>
        </form>

    </div>
@endsection
