<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::where('role', 2)
        ->orderByDesc('created_at')
        ->get();

        return view('user.index', [
            'title' => 'SIPKTA | Management User',
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('user.create', [
            'title' => 'SIPKTA | Buat User Baru',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required', 'string', 'max:60'],
            'email' => ['required', 'string', 'email', 'max:150', 'unique:' . User::class],
            'nik' => ['required', 'numeric', 'min:16' ,'unique:' . User::class],
            'nohp' => ['required', 'numeric', 'min:13'],
            'alamat' => ['required', 'string', 'max:150'],
            'password' => ['nullable', 'string'],
            'role' => ['nullable', 'integer'],

        ]);

        $validatedData['password'] = Hash::make('password');
        $validatedData['role'] = 2;

        User::create($validatedData);

        return redirect('/dashboard/management-user');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $user = User::where('id', $id)
        ->first();

        return view('user.edit', [
            'title' => 'SIPKTA | Edit User',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:60'],
            'email' => ['required', 'string', 'email', 'max:150'],
            'nik' => ['required', 'numeric', 'min:16', 'max:16'],
            'nohp' => ['required', 'numeric', 'max:13', 'min:13'],
            'alamat' => ['required', 'string', 'max:150'],
        ]);

        $data = User::find($id);
        $data->nama = $request['nama'];
        $data->email = $request['email'];
        $data->nik = $request['nik'];
        $data->nohp = $request['nohp'];
        $data->alamat = $request['alamat'];
        $data->update();
        
        return redirect('/dashboard/management-user')->with('message', '<div class="alert alert-light-success color-success"> <i class="bi bi-check-circle"></i> User berhasil diupdate!</div>');
    }

    public function destroy($id)
    {
        //
        $file = User::find($id);
        $file->delete();
        return redirect('/dashboard/management-user')->with('message', '<div class="alert alert-light-success color-success"> <i class="bi bi-check-circle"></i> User berhasil dihapus!</div>');
    }

    
}
