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

        return view('admin.TambahUser.index', compact('users'));
    }
    
}
