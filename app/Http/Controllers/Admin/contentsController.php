<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contentsController extends Controller
{
    public function showcontents(){
        return view('admin.adminindextotal.contents.contents');
    }
}
