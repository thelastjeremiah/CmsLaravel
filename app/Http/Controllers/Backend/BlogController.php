<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{

  public function index()
  {
    $blogs = Blog::orderBy('id', 'DESC')->get();
    return view('backend.pages.blog.index', compact('blogs'));
  }

  public function create()
  {
    return view('backend.pages.blog.create');
  }

  # insert logic
  public function store(Request $request)
  {
    #dd($request);

    $request->validate([
      'title' => 'required',
      'message' => 'required',
      'author' => 'required',
      'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5048'
    ]);

    $file = $request->image;
    $file_name = time().'.'.$file->getClientOriginalExtension();
    $destination = public_path().'/uploads/blogs';
    $file->move( $destination, $file_name );

    Blog::create([
      'title' => $request->title,
      'message' => $request->message,
      'author' => $request->author,
      'image' => $file_name
    ]);

    return redirect('blog/index');
  }

  #delete logic
  public function destroy(Request $request, $id)
  {
    $Blogs = Blog::findOrFail($id);
    $Blogs->delete();
    return back();
  }

  public function edit(Request $request, $id)
  {
    $blogs = Blog::findOrFail($id);
    return view('backend.pages.blog.edit', compact('blogs'));
  }

  #update logic
  public function update(Request $request, $id)
  {
    $blog = Blog::findOrFail($id);

    $request->validate([
      'title' => 'required',
      'message' => 'required',
      'author' => 'required',
    ]);

    if ($request->hasFile('image')) {
        $file = $request->image;
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $destination = public_path().'/uploads/blogs';
        $file->move( $destination, $file_name );

        $blog->update([
          'title' => 'required',
          'message' => 'required',
          'author' => 'required',
          'image' => $file_name
        ]);

        return redirect('blog/index');
    }

    $blog->update([
      'title' => $request->title,
      'message' => $request->message,
      'author' => $request->author,
    ]);

    return redirect('blog/index');
  }

}
