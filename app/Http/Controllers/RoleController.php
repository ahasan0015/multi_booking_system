<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();

        // dd($roles);
        return view('admin.pages.roles.index', compact('roles'));
    }

    public function show($id)
    {
        $role = Role::find($id);

        return view('admin.pages.roles.show', compact('role'));
    }

    public function destroy($id)
    {
        Role::destroy($id);
        // $role->delete();

        // dd('Deleted');

        return redirect()->route('roles.index')->with('success', 'User Deleted Successfully');
    }
    public function create(){
        return view('admin.pages.roles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Role::create([
            'name' => $request->name, // নিশ্চিতভাবে value পাঠানো হচ্ছে
        ]);

        return redirect()->route('roles.index')->with('success', 'Role added successfully');
    }

    public function edit($id)
    {
       $role = Role::find($id);
        $page = request('page', 1);

        // dd($page);
        return view('admin.pages.roles.edit',compact('role','page'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:50',
    ]);

    $role = Role::findOrFail($id); // ডাটাবেস থেকে রেকর্ড খুঁজবে
    $role->update([
        'name' => $request->name,
    ]);

    return redirect()->route('roles.index')->with('success', 'Role updated successfully');
}

}
