<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AccountCreatedNotification extends Notification
{
    protected $role;
    protected $tempPassword;

    public function __construct($role, $tempPassword)
    {
        $this->role = $role;
        $this->tempPassword = $tempPassword;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $roleLabel = $this->role === 'client' ? 'client' : 'collaborateur';
        $loginUrl = $this->role === 'client'
            ? url('/votre-espace-client')
            : url('/espace-collaborateurs');

        return (new MailMessage)
            ->from('contact@agape-nantes.fr', 'AGAPÉ')
            ->subject('Votre compte a été créé sur agape-nantes.fr')
            ->greeting('Bonjour ' . $notifiable->name . ',')
            ->line("Vous disposez désormais d’un compte {$roleLabel} sur notre plateforme agape-nantes.fr.")
            ->line('Vous pouvez vous connecter avec votre adresse e-mail et le mot de passe provisoire suivant :')
            ->line('🔑 Mot de passe : **' . $this->tempPassword . '**')
            ->line('Ce mot de passe est temporaire et devra être modifié lors de votre première connexion (ou via la fonction "mot de passe oublié").')
            ->action('Accédez à votre espace', $loginUrl)
            ->line('Vous y trouverez toutes vos informations personnelles et les outils mis à votre disposition.')
            ->line('Pour toute question, n’hésitez pas à nous contacter par e-mail à contact@agape-nantes.fr ou par téléphone au 06 71 67 31 68.')
            ->salutation('Cordialement, L’équipe AGAPÉ');
    }
}
