<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Blogs; 
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ClientController extends Controller
{
    //home
    public function index(){
        $products = Products::inRandomOrder()->take(3)->get();
        $products_view = Products::orderBy('id', 'asc')->limit(3)->get();
        return view('layout_user.home', compact('products', 'products_view'));

    }
    //shop
    public function shop(){
        $products_shop = Products::all();
        return view('layout_user.shop', compact('products_shop'));
    }
    //about
    public function about(){
        return view('layout_user.about');
    }
    //services
    public function services(){
        return view('layout_user.services');
    }
    //blog
    public function blog(){
        return view('layout_user.blog');
    }
    //contact
    public function contact(){
        return view('layout_user.contact');
    }
    //cart
    public function cart(){
        return view('layout_user.cart');
    }
    //register
    public function register_user(){
        return view('layout_user.register');
    }
    //store user
    public function storeuser(Request $request){
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
    //login
    public function login_user(){
        return view('layout_user.login');
    }
    //check login user
     public function checkloginuser(Request $request){
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
    
            if ($user->role === 'user') {
                return redirect()->route('index');
            }
        }
        return back()->withErrors([
            'login' => 'Email hoặc mật khẩu không chính xác.',
        ])->withInput(['email']);

    }
    //logout user
    public function logoutuser(Request $request){
        Auth::logout();
        session()->flush();
        return redirect()->route('index');
    }

    //forgot password
    public function forgotpassworduser(){
        return view('layout_user.forgot_password');
    }
    //send reset link email user
    public function sendResetLinkEmailUser(Request $request){
        $request->validate(
            rules: [
                'email' => 'required|email|exists:users',
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
    //show reset form user
    public function showResetFormUser($token){
        return view('layout_user.resetpass', ['token' => $token]);
    }
    //reset password user
    public function resetPasswordUser(Request $request){
        $request->validate(
            rules: [
                'email' => 'required|email|exists:users',
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
            return redirect()->route('user_login')->with('status', 'Mật khẩu đã được đặt lại thành công.');
        } else {
            return back()->withErrors(['email' => 'Không thể đặt lại mật khẩu.']);
        }

    }
       

}
