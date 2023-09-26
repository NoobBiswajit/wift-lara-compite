<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Image;

class BlogController extends Controller
{
    //
    public function index()
    {
        $Blogs = Blog::latest()->get();
        echo ($Blogs);
        return view('users.index', ['blogs' => $Blogs]);
    }

    public function create()
    {
        $Blogs = Blog::all();
        return view('users.addBlog', ['blogs' => $Blogs]);
    }


    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'author' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        //image upload
        if ($request->image) {
            $image = $request->image;
            $imageName =  rand() . '.' . $image->getClientOriginalName();
            //$image->move('upload/blog_images/',$imageName);
            $image = Image::make($image)->resize(580, 460)->save('upload/blog_images/' . $imageName);
            $imageUrl = 'upload/blog_images/' . $imageName;
        }

        // Create a new blog post using the validated data
        $blog = new Blog;
        $blog->author = $request->author;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->image = $imageUrl;
        $blog->save();

        // Redirect to a relevant page (e.g., the blog index)
        return redirect()->back()->with('success', 'user created successfully');
    }

    public function showBlogs()
    {

        return view('blog');
    } //end method


    //blog details
    public function detailsBlogs($id)
    {
        $blog = Blog::find($id);
        return view('blogDetails', compact('blog'));
    } //end method
}
