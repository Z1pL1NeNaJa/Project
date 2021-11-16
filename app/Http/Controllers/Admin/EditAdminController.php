<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditadminController extends Controller
{
    public function showaddadmin(){
        return view('admin.Editadmintotal.editadmin.editadmin');
    }


}
