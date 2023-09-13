<?php

namespace App\Http\Controllers;
use App\Models\TermsCondition;
use Illuminate\Http\Request;

class TermsConditionController extends Controller
{
    public function index()
    {
        $termsAndConditions = TermsCondition::firstOrCreate([]);
        return view('admin.SyaratdanKetentuan.index', compact('termsAndConditions'));
    }

    public function update(Request $request)
    {
        $termsAndConditions = TermsCondition::firstOrCreate([]);
        $termsAndConditions->isi = $request->isi;
        $termsAndConditions->save();

    return redirect()->back()->with('success', 'Syarat dan ketentuan berhasil diupdate');
    }
}
