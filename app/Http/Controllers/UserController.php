<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('role', 'asc')
            ->orderBy('name', 'asc')
            ->get();


        return view('pages.user', compact('user'));
    }

    public function usertambah()
    {
        return view('pages.tambah_user');
    }

    public function useredit($id)
    {
        $user = User::findOrFail($id);

        return view('pages.edit_user', compact('user'));
    }

    public function userstore(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users',
        ];

        if ($request->filled('password')) {
            $rules['password'] = 'required|string';
        }
    
        $request->validate($rules);
    
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        
        if ($request->filled('password')) {
            $userData['password'] = Hash::make($request->password);
        }

        User::create($userData);
    
        return redirect()->route('user.data')->with('success', 'User berhasil disimpan.');
    }    

    public function userupdate(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users',
        ];
    
        if ($request->filled('password')) {
            $rules['password'] = 'required|string';
        }
    
        $request->validate($rules);
    
        $user->name = $request->name;
        $user->email = $request->email;
    
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();
    
        return redirect()->route('user.data')->with('success', 'User berhasil disimpan.');
    }
    

    public function userdestroy($id)
    {
        $user = User::findOrFail($id);

        // Hapus file cover dari storage jika ada
        if ($user->cover) {
            Storage::disk('public')->delete($user->cover);
        }

        // Hapus data user dari database
        $user->delete();

        return redirect()->back()->with('success', 'User berhasil dihapus.');
    }
}