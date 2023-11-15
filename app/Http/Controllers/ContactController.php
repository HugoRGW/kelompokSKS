<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

class ContactController extends Controller
{
    public function index()
    {
        $info = Info::all();

        return view('User/contact', compact('info'));
    }

    public function report(Request $request)
    {
        $user = Auth::user();

        Contact::create([
            'name' => $user->name,
            'email' => $user->email,
            'message' => $request->input('c_message'),
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim');
    }

    public function reportData()
    {
        $datas = Contact::orderBy('name', 'asc')
            ->paginate(10, ['*'], 'page');

        return view('admin.DataLaporan.index', compact('datas'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $datas = Contact::where(function ($query) use ($search) {
                $query->where('name', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%")
                    ->orWhere('message', 'like', "%$search%");;
            });

            $datas = $datas->paginate(10, ['*'], 'page');
            $message = null;
        } else {
            $datas = collect();
            $currentPage = LengthAwarePaginator::resolveCurrentPage();
            $perPage = 10;
            $currentPageSearchResults = $datas->slice(($currentPage - 1) * $perPage, $perPage)->all();
            $datas = new LengthAwarePaginator($currentPageSearchResults, count($datas), $perPage, $currentPage, ['path' => LengthAwarePaginator::resolveCurrentPath()]);
            $message = 'Masukkan kata kunci pencarian di atas';
        }

        return view('admin.DataLaporan.index', compact('datas', 'message'));
    }

    public function destroy($id)
    {
        $data = Contact::findOrFail($id);
        $data->delete();

        return redirect()->route('report-data')->with('success', 'User berhasil dihapus');
    }
}
