<?php
namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('users.index', compact('users'));
    }

    public function show($id = null)
    {
        $user = User::find($id);
        if (! $user) {
            return redirect()->route('admin.users.index')->with('error', 'کاربر مورد نظر یافت نشد.');
        }
        return view('users.show', compact('user'));
    }
}
