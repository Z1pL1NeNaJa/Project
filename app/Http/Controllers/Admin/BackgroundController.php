<?php

namespace App\Http\Controllers\Admin;

use App\background;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class BackgroundController extends Controller
{
    public function showBackground()
    {
        return view('admin.adminindextotal.Background.Background');
    }
    public function create(Request $request)
    {
        $validateDate = $request->validate(
            [
                'name' => 'required',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'name.required' => 'ที่อยู่พื้นหลัง',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดได้ไม่เกิน 10 MB',
            ]
        );
        //dd($request);
        $background = new background();
        $background->name = $request->name;
        //if ($request->hasFile('image')) {
        //    $filemane =  Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
        //    $request->file('image')->move(public_path() . '/admin/images/', $filemane);
        //    Image::make(public_path() . '/admin/images/' . $filemane);
        //    $background->image = $filemane;
        // } else {
        //     $background->image = 'icon2.png';
        // }
        $background->save();
        //return redirect()->route('/Backgroundfrom');
    }
}
