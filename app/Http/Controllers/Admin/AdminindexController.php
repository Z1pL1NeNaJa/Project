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
        return view('admin.Editadmintotal.editadmin.editadmin',compact('editusers'));
    }
}
