<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
  public function index()
  {
    $Users = User::orderBy('id', 'DESC')->get();
    return view('backend.pages.admin.index', compact('Users'));
  }

  public function edit(Request $request, $id)
  {
    $Users = User::findOrFail($id);
    return view('backend.pages.admin.edit', compact('Users'));
  }

  public function update(Request $request, $id)
  {
    #dd($id);
    $Users = User::findOrFail($id);

    $request->validate([
        'name' => 'required',
        'email' => 'required',
    ]);

    $Users->update([
        'name' => $request->name,
        'email' => $request->email,
    ]);

    
    return Redirect::to('/admin/index');
    
    #return view('backend.pages.admin.index');
  }

  public function destroy(Request $request, $id)
  {
    #dd($id);
    $Users = User::findOrFail($id);
    $Users->delete();
    return back();
  }
}
