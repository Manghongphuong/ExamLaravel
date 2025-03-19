<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function register(Request $request) {
        //Validation xác thực lỗi
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        // tạo người dùng mới
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // tạo token xác thực
        $token = $user->createToken('auth_token')->plainTextToken;
        // trả về response json API
        return response()->json([
            'message' => 'Đăng ký thành công! Chào ' . $user->name,
            'access_token' => $token,
            'token_type' => 'Bearer',
        ], 201);
    }

    public function login(Request $request) {
        // !Auth::attempt: Kiểm tra email, password có khớp với database không
        // $request->only('email', 'password'): chỉ kiểm tra email và password (only)
        if (!Auth::attempt($request->only('email', 'password'))){
           return response()->json(['message' => 'Unauthorized'], 401);
        }
        // tìm kiếm dữ liệu ở database và lưu vào biến user
        $user= User::where('email', $request['email'])->firstOrFail();
        // tạo token xác thực
        $token= $user->createToken('auth_token')->plainTextToken;
        // trả về response kiểu json
        return response()->json([
            'message' => 'Chào '.$user->name.'! Chúc an lành',
            'access_token' => $token, 
            'token_type' => 'Bearer',
        ]);
    }

    public function logout()  {
        // kiểm tra người dùng đã đăng nhập chưa
        // nếu chưa thì trả về true chạy lệnh trong if
        // nếu rồi thì trả về false không dủ điều kiện chạy if và bị lược bỏ khối lệnh if
        if (!auth()->check()) {
            return response()->json(['message' => 'Chưa đăng nhập'], 401);
        }
        // xử lý đăng xuất
        Auth::user()->tokens()->delete();
        //phản hồi thành công trả về response kiểu json
        return response()->json(['message' => 'Bạn đã thoát và token đã xóa'], 200);
    }
}
