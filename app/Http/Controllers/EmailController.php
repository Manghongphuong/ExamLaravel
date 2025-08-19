<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ], 
        [
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'subject.required' => 'Vui lòng nhập tiêu đề.',
            'message.required' => 'Vui lòng nhập nội dung.',
        ]
    );

    
        // Tách các email nếu có nhiều email
        $emails = preg_split('/[,\s]+/', $data['email'], -1, PREG_SPLIT_NO_EMPTY);
        
        // Gửi email đến từng địa chỉ
        $successCount = 0;
        foreach ($emails as $email) {
            $email = trim($email);
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                Mail::to($email)->send(new SendMail($data));
                $successCount++;
            }
        }
    
        return back()->with('success', "Đã gửi thành công $successCount email!");
    }
}
