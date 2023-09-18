<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataAdmin;

class DataAdminController extends Controller
{
    public function index() {
        $data = array('Admin' => 'DataAdmin');
        return view('admin.DataAdmin.index', compact("phone", "alamat", "email"));
    }
    public function updata(Request $request)
    {
        Info::query()->update([
            'phone' => $request->phone,
            'alamat'=>$request->alamat,
            'email'=>$request->email]);
        return redirect()->back()->with('success','Data berhasil di edit');
}

}