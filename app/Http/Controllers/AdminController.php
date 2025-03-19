<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Tạo tài khoản
    public function register(){
        return view('register');
    }
    public function store(Request $request){
       $validated = $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
       ],
        [
            'name.required' => 'Tên không được để trống.',
            'email.required' => 'Email không được để trống.',
            'password.required' => 'Mật khẩu không được để trống.',
        ]);

        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->save();

        return  redirect()->back()->with('success', 'Đăng ký tài khoản thành công!');

    }
    public function login(){
        return view('login');
    }
    public function checklogin(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ],
        [
            'email.required' => 'Vui lòng nhập email.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
        ]);
            // Kiểm tra đăng nhập
        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            return redirect()->route('dashboard');
        }
        return back()->withErrors([
            'login' => 'Email hoặc mật khẩu không chính xác.',
        ])->withInput(['email']);

    }
    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('pagelogin');
    }

    // User
    public function listuser(Request $request){
        $keyword = $request->input('keyword');
        $users = User::search($keyword)->paginate(5);
        return view('users.listuser', compact('users'));
    }

    public function destroyuser(string $id)
    {
        $desuser = User::find($id);
        $desuser->delete();
        return redirect()->route('list_user');
    }

}
