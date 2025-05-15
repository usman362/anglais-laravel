<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends Notification
{
    public $token;
    public $isClient;

    public function __construct($token, $isClient = true)
    {
        $this->token = $token;
        $this->isClient = $isClient;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $roleLabel = $this->isClient ? 'client' : 'collaborateur';

        $resetUrl = url(route('password.reset', [
            'token' => $this->token,
            'email' => $notifiable->getEmailForPasswordReset(),
        ], false));

        return (new MailMessage)
            ->from('contact@agape-nantes.fr', 'AGAPÉ')
            ->subject('Réinitialisation de votre mot de passe – agape-nantes.fr')
            ->greeting('Bonjour ' . $notifiable->name . ',')
            ->line("Vous avez demandé la réinitialisation de votre mot de passe pour votre compte {$roleLabel} sur agape-nantes.fr.")
            ->line('Pour définir un nouveau mot de passe, cliquez sur le lien ci-dessous :')
            ->action('Réinitialiser mon mot de passe', $resetUrl)
            ->line('⚠ Ce lien est valable pendant une durée limitée. Si vous n’êtes pas à l’origine de cette demande, vous pouvez ignorer ce message — votre mot de passe actuel reste inchangé.')
            ->line('Pour toute question, notre équipe reste disponible par e-mail à contact@agape-nantes.fr ou par téléphone au [numéro de téléphone].')
            ->salutation('Cordialement, L’équipe AGAPÉ');
    }
}
