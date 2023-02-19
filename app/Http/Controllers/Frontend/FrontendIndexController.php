<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendEmail;
use App\Models\Contactmail;
use App\Models\Blog;
use Illuminate\Support\Facades\Mail;

class FrontendIndexController extends Controller
{
  
  public function index()
  {
    $Blogs = Blog::orderBy('id', 'DESC')->take(3)->get();
    return view('frontend.pages.index',compact('Blogs'));
  }

  public function contact()
  {
    return view('frontend.pages.contact');
  }

  public function contact_submit()
  {
    return view('frontend.pages.contact');
  }

  public function thankyou()
  {
    return view('frontend.pages.thankyou');
  }

  public function about_us()
  {
    return view('frontend.pages.about-us');
  }

  public function blogs()
  {
    $Blogs = Blog::orderBy('id', 'DESC')->get();
    return view('frontend.pages.blogs',compact('Blogs'));
  }

  public function sendEmail(Request $request)
  {

    $request->validate([
      'email' => 'required',
      'message' => 'required',
    ]);

    
    Contactmail::create([
      'email' => $request->email,
      'message' => $request->message
    ]);



    Mail::to(env('MAIL_FROM_ADDRESS'))->cc(env('MAIL_CC_ADDRESS'))->send(new SendEmail($request));

    return view('frontend.pages.thankyou');
  }

  #blog_single

  public function blog_single(Request $request,$id)
  {
    $Blogs = Blog::findOrFail($id);
    return view('frontend.pages.blog-single',compact('Blogs'));
  }
}
