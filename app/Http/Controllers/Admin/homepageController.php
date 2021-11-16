<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function showhomepage(){
        return view('admin.adminindextotal.homepage.homepage');
    }
}
