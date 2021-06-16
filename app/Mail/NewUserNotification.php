<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class NewUserNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), 'Mailtrap')
            ->subject('Mailtrap Confirmation')
            ->markdown('mails.exmpl')
            ->with([
                'name' => $this->user->name,
                'link' => URL::to('/') . '/api/verify-email/' . $this->user->email . '&' . $this->user->verifyHash
            ]);
    }
}
