<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', '!=', auth()->user()->id);
        $data = $user->orderBy('id', 'asc')->get();
        // $data = User::orderBy('id', 'asc')->get();

        return view('user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|max:150',
            'username'  => 'required|max:100',
            'email'     => 'required|max:100|unique:users',
            'password'  => 'required|min:8',
            'level'     => 'required'
        ], 
        [
            'name.required'     => 'Mohon isikan nama',
            'name.max'          => 'Nama maksimal 150 karakter',
            'username.required' => 'Mohon isikan username',
            'username.max'      => 'Username maksimal 100 karakter',
            'email.required'    => 'Mohon isikan email',
            'email.max'         => 'Email maksimal 100 karakter',
            'email.unique'      => 'Email sudah dipakai',
            'password.required' => 'Mohon Isikan password',
            'password.min'      => 'Password minimal 8 karakter',
            'level.required'    => 'Mohon pilih level'
        ]);

        User::create([
            'name'      => $request->name,
            'username'  => $request->username,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'level'     => $request->level,
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $athar = $request->validate([
            'name'      => 'max:150',
            'username'  => 'max:100|',
            'email'     => 'max:100|unique:users',
            'password'  => 'min:8',
            'level'     => 'max:20'
        ], 
        [
            'name.max'          => 'Nama maksimal 150 karakter',
            'username.max'      => 'Username maksimal 100 karakter',
            'email.max'         => 'Email maksimal 100 karakter',
            'email.unique'      => 'Email sudah dipakai',
            'password.min'      => 'Password minimal 8 karakter',
        ]);

        if (auth()->user()->level == 'Admin') {
                $user->update([
                'name'      => $athar['name'],
                'username'  => $athar['username'],
                'level'     => $athar['level'],
            ]);
            } else {
                $user->update([
                    'name'      => $athar['name'],
                    'username'  => $athar['username'],
                ]);
            }

        // return $user;

        if (auth()->user()->level == 'Admin') {
            # code...
            return redirect()->route('user.index');
        } else {
            # code...
            return redirect()->route('profil.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Post deleted successfully.');
    }
}
