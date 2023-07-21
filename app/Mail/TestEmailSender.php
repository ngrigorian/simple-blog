<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmailSender extends Mailable
{
    use Queueable, SerializesModels;

    private $emailParams;

    public function __construct($params)
    {
        $this->emailParams = $params;
    }

    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
            ->subject($this->emailParams->subject)
            ->view('enterCode.enterCode')
            ->with(['emailParams' => $this->emailParams]);
    }
}