<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataAdminController extends Controller
{
    public function index() {
        $data = array('title' => 'Dashboard');
        return view('admin.DataAdmin.index', $data);
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