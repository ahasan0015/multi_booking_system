<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;


class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.pages.roles.index', compact('roles'));
    }
    public function show($id)
    {
        $roles = Role::find($id);
        return view('admin.pages.roles.show', compact('roles'));
    }
}
