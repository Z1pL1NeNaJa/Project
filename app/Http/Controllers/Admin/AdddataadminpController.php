<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;


class AdddataadminpController extends Controller
{
    public function showaddadmin()
    {
        return view('admin.addadmintotal.adddataadminp.adddataadminp')->with('categories',Category::all());
    }


}
