<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class TypeProductController extends Controller
{
    public function showTypeProduct()
    {
        $category = Category::all();
        return view('admin.adminindextotal.TypeProduct.TypeProductfrom',compact('category'));
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
        return redirect('/TypeProductfrom');
    }
    public function edit($category_id){
        $category = Category::find($category_id);
        //dd($category);      
        return view('admin.Editadmintotal.editadmint.editadmint',compact('category'));
    }
    public function update(Request $request,$category_id){
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ],
        [
            'name.required' => 'กรุณาป้อนข้อมูลประเภทสิ้นค้าก่อน',
            'name.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลเเล้ว',
            'name.max'=> 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $category = Category::find($category_id);
        $category->name = $request->name;
        $category->save();
        return redirect('/TypeProductfrom');
    }
    public function delete($category_id){
        Category::destroy($category_id);
        return redirect('/TypeProductfrom');
    }
}

