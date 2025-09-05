<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as BaseResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends BaseResetPassword
{
    public function toMail($notifiable)
    {
        // Kiểm tra role để chọn link reset phù hợp
        if ($notifiable->role === 'admin') {
            $url = url('/admin/reset-password/' . $this->token . '?email=' . $notifiable->getEmailForPasswordReset());
        } else {
            $url = url('/reset-password-user/' . $this->token . '?email=' . $notifiable->getEmailForPasswordReset());
        }

        return (new MailMessage)
            ->subject('Đặt lại mật khẩu')
            ->line('Bạn nhận được email này vì đã yêu cầu đặt lại mật khẩu cho tài khoản.')
            ->action('Đặt lại mật khẩu', $url)
            ->line('Link sẽ hết hạn sau 60 phút.')
            ->line('Nếu bạn không yêu cầu, vui lòng bỏ qua email này.');
    }
}
