<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdddataadmintController extends Controller
{
    public function showaddadmin(){
        return view('admin.addadmintotal.adddataadmint.adddataadmint');
    }

    public function create(Request $request){
        //dd($request);
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect('/adddataadmint/create');
    }

}
