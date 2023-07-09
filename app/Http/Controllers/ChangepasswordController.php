<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangepasswordController extends Controller
{
    //
    public function updatepassword(Request $request, User $user)
    {



        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);




        $password = $request->password;
        $cpassword = $request->current_password;

        if (!Hash::check($cpassword, $user->password)) {
            return redirect('/dashboard/myprofile/user')->with('message', '<div class="alert alert-light-danger color-danger"><i class="bi bi-x-circle"></i> Password lama salah!</div>');
        } else {
            if ($cpassword == $password) {
                return redirect('/dashboard/myprofile/user')->with('message', '<div class="alert alert-light-danger color-danger"><i class="bi bi-x-circle"></i> Password baru tidak boleh sama dengan password lama!</div>');
            } else {
                $user->password = Hash::make($password);
                $user->save();

                return redirect('/dashboard/myprofile/user')->with('message', '<div class="alert alert-light-success color-success"><i class="bi bi-check-circle"></i> Password berhasil diubah!</div>');
            }
        }
    }
}
