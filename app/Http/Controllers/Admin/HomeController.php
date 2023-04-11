<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function contact(){
        return view('admin.contacts');
    }
    public function photo(){
        return view('admin.photos');
    }
}
