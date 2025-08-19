<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;


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
        
        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            $request->session()->regenerate();
    
            $user = Auth::user();
    
            if ($user->role === 'admin') {
                return redirect()->route('dashboard');
            }
    
            return redirect()->route('pagelogin')->with('success', ' Bạn không có quyền truy cập trang quản trị.');
        }
        return back()->withErrors([
            'login' => 'Email hoặc mật khẩu không chính xác.',
        ])->withInput(['email']);

    }
    // Quên mật khẩu
    public function forgotpassword(){
        return view('forgotpassword');
    }
    public function sendResetLinkEmail(Request $request){
        $request->validate(
            rules: [
                'email' => 'required|email|exists:users,email',
            ],
            messages: [
                'email.required' => 'Vui lòng nhập email.',
                'email.email' => 'Email không hợp lệ.',
                'email.exists' => 'Email không tồn tại trong hệ thống.',
            ]   
            );
        
        $status = Password::sendResetLink(
            ['email' => $request->email]
        );

        if($status === Password::RESET_LINK_SENT){
            return back()->with('status', 'Liên kết đặt lại mật khẩu đã được gửi đến email của bạn.');
        } else {
            return back()->withErrors(['email' => 'Không thể gửi liên kết đặt lại mật khẩu.']);
        }
    }

    public function showResetForm($token){
        return view('resetpassword', ['token' => $token]);
    }
    public function resetPassword(Request $request){
        $request->validate(
            rules: [
                'email' => 'required|email|exists:users,email',
                'password' => 'required|min:8|confirmed',
                'token' => 'required',
            ],
            messages: [
                'email.required' => 'Vui lòng nhập email.',
                'email.email' => 'Email không hợp lệ.',
                'email.exists' => 'Email không tồn tại trong hệ thống.',
                'password.required' => 'Vui lòng nhập mật khẩu.',
                'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
                'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
            ]     
        );

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->save();
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('pagelogin')->with('status', 'Mật khẩu đã được đặt lại thành công.');
        } else {
            return back()->withErrors(['email' => 'Không thể đặt lại mật khẩu.']);
        }
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
    // Xóa user
    public function destroyuser(string $id)
    {
        $desuser = User::find($id);
        $desuser->delete();
        return redirect()->route('list_user');
    }

}
