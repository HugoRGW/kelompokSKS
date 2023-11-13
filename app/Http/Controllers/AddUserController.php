<?php

namespace App\Http\Controllers;

use App\Models\AddUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class AddUserController extends Controller
{
    public function index()
    {
        return view('admin.TambahUser.index');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|in:1,2,3',
            'password' => 'required|min:8|confirmed',
        ]);

        $existingUser = AddUser::where('email', $request->input('email'))->first();
        if ($existingUser) {
            return redirect()->route('tambah-user');
        }

        if ($request->input('role') == 0) {
            return redirect()->route('tambah-user');
        }

        if ($request->input('password') !== $request->input('password_confirmation')) {
            return redirect()->route('tambah-user');
        }

        $user = new AddUser;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role_id = $request->input('role');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('data-user')->with('success', 'User berhasil ditambahkan');
    }
}
