<?php

namespace App\Http\Controllers;

use App\Models\DataUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class DataUserController extends Controller
{
    public function index()
    {
        $users = DataUser::orderBy('role_id', 'desc')
            ->orderBy('name', 'asc')
            ->paginate(10, ['*'], 'page');

        return view('admin.DataUser.index', compact('users'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $users = DataUser::where(function ($query) use ($search) {
                $query->where('name', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%");
            });

            if (in_array($search, ['Siswa', 'Operator', 'Admin'])) {
                $users = $users->orWhere('role_id', '=', array_search($search, ['Siswa', 'Operator', 'Admin']) + 1);
            }

            $users = $users->paginate(10, ['*'], 'page');
            $message = null;
        } else {
            $users = collect();
            $currentPage = LengthAwarePaginator::resolveCurrentPage();
            $perPage = 10;
            $currentPageSearchResults = $users->slice(($currentPage - 1) * $perPage, $perPage)->all();
            $users = new LengthAwarePaginator($currentPageSearchResults, count($users), $perPage, $currentPage, ['path' => LengthAwarePaginator::resolveCurrentPath()]);
            $message = 'Masukkan kata kunci pencarian di atas';
        }

        return view('admin.DataUser.index', compact('users', 'message'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|in:1,2,3',
            'password' => 'sometimes|nullable|min:8|confirmed',
        ]);

        $user = DataUser::findOrFail($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role_id = $request->input('role');

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        return redirect()->route('data-user')->with('success', 'Data pengguna berhasil diperbarui');
    }

    public function destroy($id)
    {
        $user = DataUser::findOrFail($id);
        $user->delete();

        return redirect()->route('data-user')->with('success', 'User berhasil dihapus');
    }
}
