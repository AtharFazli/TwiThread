<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Alert;

class ProfilePictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('user.profil', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh validasi file gambar
        ]);

        $path = $request->file('profile_picture')->store('Gambar');

        User::create([
            "image" => $path
        ]);

        return redirect()->route('profil.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh validasi file gambar
        ]);

        if ($user->profile_picture) {
            Storage::delete($user->profile_picture);
        }
        
        $path = $request->file('profile_picture')->store('Gambar');

        $user->update([
            "profile_picture" => $path
        ]);

        alert()->success('Edit Berhasil', 'Foto sudah diupdate');
        
        return redirect()->route('profil.index');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        Storage::delete($user->profile_picture);

        $user->update([
            'profile_picture' => null
        ]);
        
        alert()->success('Berhasil', 'Foto sudah dihapus');
        return redirect()->route('profil.index')->with('success');
    }
}
