<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Replyback extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $comment;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($name, $comment)
    {
        $this->name = $name;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        return $this->from('info@sabaytraining.com')->view('emails.contact');
    }
}
