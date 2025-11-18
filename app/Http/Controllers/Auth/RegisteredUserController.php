<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegisterConfirmationMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
   public function store(Request $request): RedirectResponse
{
    $request->validate([
        'first_name' => 'required|min:2|max:20',
        'last_name' => 'required|min:2|max:20',
        'email' => 'required|email|unique:users',
        'phone' => 'required|regex:/^01[0-9]{9}$/|unique:users,phone',
        'password' => ['required', 'min:6', 'confirmed'],
        'role_id' => 'required|exists:roles,id'
    ]);

    $user = User::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'password' => Hash::make($request->password),
        'role_id' => $request->role_id
    ]);

    event(new Registered($user));

    $u = User::select('u.first_name', 'u.last_name', 'r.name as role')
        ->from('users as u')
        ->join('roles as r', 'u.role_id', '=', 'r.id')
        ->where('u.id', $user->id)
        ->first();

    Mail::to($user->email)->send(new RegisterConfirmationMail($u));

    Auth::login($user);

    return redirect()->route('dashboard');
}

}
