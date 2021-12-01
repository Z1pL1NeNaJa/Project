<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AdminindexController extends Controller
{
    public function showadmin(){
        $users = User::all();
        return view('admin.adminindextotal.adminindex.admin',compact('users'));
    }
    public function edit($id){
        $users = User::find($id);
        return view('admin.Editadmintotal.editadmin.editadmin',compact('users'));
    }
    public function update(Request $request,$id){
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ],
        [
            'name.required' => 'กรุณาป้อนข้อมูลประเภทสิ้นค้าก่อน',
            'name.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลเเล้ว',
            'name.max'=> 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $users = User::find($id);
        $users->name = $request->name;
        $users->save();
        return redirect('admin.Editadmintotal.editadmin.editadmin');
    }
}
