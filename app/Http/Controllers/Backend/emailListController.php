<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactmail;

class emailListController extends Controller
{

  public function index()
  {
    $contactmails = Contactmail::orderBy('id', 'DESC')->get();
    return view('backend.pages.email.index', compact('contactmails'));
  }

  public function destroy(Request $request, $id)
  {
    $contactmails = Contactmail::findOrFail($id);
    $contactmails->delete();
    return back();
  }
}
