<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeProductController extends Controller
{
    public function showTypeProduct(){
        return view('admin.adminindextotal.TypeProduct.TypeProductfrom');
    }

}
