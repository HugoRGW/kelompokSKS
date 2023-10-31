<?php

namespace App\Http\Controllers;
use App\Models\Info;
use Illuminate\Http\Request;
use App\Models\DataAdmin;

class DataAdminController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $data = Info::query()
        ->where('kota', 'LIKE', '%' . $keyword . '%')
        ->paginate(10);
       return view('admin.DataAdmin.index',compact('data'));
    }
    public function updata(Request $request)
    {
        Info::query()->update(['kota' => $request->kota, 
                              'no' => $request->no,
                            'alamat'=>$request->alamat,
                        'email'=>$request->email]);
        return redirect()->back()->with('success','Data berhasil di edit');
}

}