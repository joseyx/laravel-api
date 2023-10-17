<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class CustomResetPassword extends ResetPassword
{
    protected function buildMailMessage($url)
    {
        return (new MailMessage)
            ->subject(Lang::get('Reestablecer contraseña'))
            ->line(Lang::get('Recibiste este correo porque solicitaste restablecer tu contraseña. Haz clic en el siguiente enlace para continuar:'))
            ->action(Lang::get('Restablecer contraseña'), $url)
            ->line(Lang::get('Si no solicitaste restablecer tu contraseña, puedes ignorar este correo.'));
    }
}
