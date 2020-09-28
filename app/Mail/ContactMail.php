<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->name = $this->data['name'];
        $this->email = $this->data['email'];
        $this->message = $this->data['message'];
        $this->test = $this->data['message'];
        $this->subject = "New Contact from " . $this->name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $log = public_path() . "/download/log.txt";
        file_put_contents($log, $this->message);

        return $this->from("me@nathaniel-david.tech")
                    ->subject($this->subject)
                    ->view('emails.contact')
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'test' => $this->test,
                        'message' => $this->message,
                    ]);
    }
}