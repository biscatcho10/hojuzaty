<?php

namespace Modules\Settings\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Laraeast\LaravelSettings\Facades\Settings;


class ContactsSpecialistMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $name;
    public $email;
    public $phone;
    public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content, $name, $email, $phone)
    {
        $this->subject = "New Message From : " . $name;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)
            ->view('mails.show');
    }
}
