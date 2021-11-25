<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdddataadmintController extends Controller
{
    public function showaddadmin()
    {
        $category = Category::all();
        return view('admin.addadmintotal.adddataadmint.adddataadmint',compact('Catrgory'));
    }

    public function create(Request $request){
        //dd($request);
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ],
        [
            'name.required' => 'กรุณาป้อนข้อมูลประเภทสิ้นค้าก่อน',
            'name.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลเเล้ว',
            'name.max'=> 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect('/adddataadmint');
    }

}
