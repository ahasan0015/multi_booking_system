<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        // Query Builder
        // $users = DB::table('users as u') 

        // Eloquent ORM
        // $users = User::from('users as u')
        //         ->select('u.id', 'u.first_name', 'u.last_name', 'u.email', 'r.name as role')
        //         ->join('roles as r', 'u.role_id', '=', 'r.id')
        //         ->where('u.role_id', 1)
        //         ->orderBy('u.id', 'desc')
        //         ->get();

        // $users = User::from('users as u')
        //         ->select('u.id', 'u.first_name', 'u.last_name', 'u.email', 'r.name as role')
        //         ->join('roles as r', 'u.role_id', '=', 'r.id')
        //         ->orderBy('u.id', 'desc')
        //         ->skip(4)
        //         ->take(PHP_INT_MAX)
        //         ->get();

        $users = User::from('users as u')
                ->select('u.id', 'u.first_name', 'u.last_name', 'u.phone','u.email', 'r.name as role')
                ->join('roles as r', 'u.role_id', '=', 'r.id')
                ->orderBy('u.id', )
                // ->skip(0)
                // ->take(10)
                // ->get();
                ->paginate(20);
        
        // $sl = ($users->currentPage() - 1) * $users->perPage() + 1;
                
        // dd($users);
        return view('admin.pages.users.index', compact('users'));
    }

    public function show($id)
    {
        // $user = User::find($id);
        $user = User::select('u.id', 'u.first_name', 'u.last_name', 'u.phone', 'u.email', 'r.name as role')
                ->from('users as u')
                ->join('roles as r', 'u.role_id', '=', 'r.id')
                ->where('u.id', $id)
                ->first();

        return view('admin.pages.users.show', compact('user'));
    }
}