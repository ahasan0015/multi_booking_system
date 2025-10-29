<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index()
    {
        // $users = User::all();
       $users = User::from('users as u')
                ->select('u.id', 'u.name', 'u.email',  'r.name as role')
                ->join('roles as r', 'u.id', '=', 'r.id')
                ->orderBy('u.id', 'desc')
                // ->skip(2)
                // ->take(10)
                // ->get();
                ->paginate(5);
                
        // dd($users);
        return view('admin.pages.users.index', compact('users'));
    }
    public function show($id)
    {
        // $users = User::find($id);
        $user = User::select('u.id', 'u.name', 'u.email',  'r.name as role')
                ->from('users as u')
                ->join('roles as r', 'u.role_id', '=', 'r.id')
                ->where('u.id', $id)
                ->first();
        // dd($users);
        return view('admin.pages.users.show', compact('user'));
    }
}
