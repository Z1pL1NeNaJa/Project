<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackgroundController extends Controller
{
    public function showBackground(){
        return view('admin.adminindextotal.Background.Background');
    }
    public function create(Request $request)
    {
        $validateDate = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'category'=>'required',
            'price'=>'required|numeric',
            'image'=>'mimes:jpeg,jpg,png,gif|file|max:12040',
        ],
        [
            'name.required'=> 'กรุณาป้อนชื่อสินค้า',
            'description.required'=> 'กรุณาป้อนรายละเอียดสินค้า',
            'category.required'=> 'กรุณาป้อนประเภทสินค้า',
            'price.required'=> 'กรุณาป้อนราคาสินค้า',
            'price.numeric'=> 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
            'image.mimes'=> 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
            'image.file'=> 'อัพโหลดได้เฉพาะไฟล์ภาพ',
            'image.max'=> 'อัพโหลดได้ไม่เกิน 10 MB',
        ]
    );
        //dd($request);
        $back = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category;

        if($request->hasFile('image')){
            $filemane =  Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filemane);
            Image::make(public_path().'/admin/images/'.$filemane);
            $product->image = $filemane;
        }else{
            $product->image = 'icon2.png';
        }
        $product->save();
        return redirect()->route('productfrom');
    }
}
