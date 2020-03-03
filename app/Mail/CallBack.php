<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CallBack extends Mailable
{
    use Queueable, SerializesModels;
    public $array;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->array = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return  $this->from('notice@moorecrm.com','MooreCRM')->subject('Заказали обратный звонок!"
')->markdown('emails.call_back');
    }
}
