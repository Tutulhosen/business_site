<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class backendController extends Controller
{
    //show index page
    public function index(){
        return view('backend.index');
    }
}
