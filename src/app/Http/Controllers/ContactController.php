<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
  {
    return view('index');
  }
  public function confirm(Request $request){
    $contact = $request->only(['last-name','address', 'email', 'tel-first','tel-second','tel-third', 'detail','first-name','building','gender','content']);
    return view('confirm', ['contact' => $contact]);
  }
  public function store()
  {
    $contact = $request->only(['last-name','first-name', 'email', 'tel-first','tel-second','tel-third', 'detail','building','gender','content','address']);
 
  }
}
