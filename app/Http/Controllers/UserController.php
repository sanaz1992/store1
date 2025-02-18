<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|max:255',
        ]);
        User::create($request->all());
        return redirect()->route('admin.users.index')->with('success', 'کاربر با موفقیت اضافه شد.');
    }

    public function show($id = null)
    {
        $user = User::find($id);
        if (! $user) {
            return redirect()->route('admin.users.index')->with('error', 'کاربر مورد نظر یافت نشد.');
        }
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);
        $user->update($request->all());
        return redirect()->route('admin.users.index')->with('success', 'اطلاعات کاربر با موفقیت ثبت شد.');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'کاربر با موفقیت حذف شد.');
    }
}
