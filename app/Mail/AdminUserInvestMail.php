<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminUserInvestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $userInvest;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userInvest)
    {
        // 
        $this->userInvest = $userInvest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Investment Application!')->view('mail.admin_user_invest');
    }
}
