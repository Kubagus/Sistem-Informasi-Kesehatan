<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Tampilkan daftar pengguna (READ).
     */
    public function index()
    {
        // Ambil semua user dengan relasi role
        $users = User::with('role')->get();
       
        return view('admin.users.index', compact('users'));
    }

    /**
     * Tampilkan form untuk membuat user baru (CREATE - Show form).
     */
    public function create()
    {
        // Ambil semua role untuk dipilih
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Simpan data user baru ke dalam database (CREATE - Store).
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role_id' => 'required|exists:roles,id',
        ]);

        // Buat user baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
        ]);

        // Redirect ke halaman daftar user dengan pesan sukses
        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    /**
     * Tampilkan detail user (READ - Show).
     */
    public function show($id)
    {
        // Temukan user berdasarkan id
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }

    /**
     * Tampilkan form untuk edit user (UPDATE - Show form).
     */
    public function edit($id)
    {
        // Temukan user dan semua role
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update data user di database (UPDATE - Store).
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'role_id' => 'required|exists:roles,id',
        ]);

        // Temukan user berdasarkan id
        $user = User::findOrFail($id);

        // Update data user
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
        ]);

        // Jika password diinput, update password
        if ($request->filled('password')) {
            $user->update(['password' => Hash::make($request->password)]);
        }

        // Redirect ke halaman daftar user dengan pesan sukses
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Hapus user dari database (DELETE).
     */
    public function destroy($id)
    {
        // Temukan user berdasarkan id dan hapus
        $user = User::findOrFail($id);
        $user->delete();

        // Redirect ke halaman daftar user dengan pesan sukses
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }
}
