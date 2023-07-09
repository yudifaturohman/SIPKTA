<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('myprofile.index', [
            'title' => 'SIPKTA | My Profile'
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //



        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nohp' => 'required|string',
            'alamat' => 'required|string|max:500',
            'image' => 'image|file|max:2054'
        ]);

        if ($request->file('image')) {
            if ($user->image) {
                Storage::delete($user->image);
            }
            $validatedData['image'] = $request->file('image')->store('profile-user');
        }

        User::where('id', $user->id)->update($validatedData);
        return redirect('/dashboard/myprofile/user')->with('profile', '<div class="alert alert-light-success color-success"><i class="bi bi-check-circle"></i> Data diri berhasil diubah</div>');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
