<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Complete extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $name;
    protected $last_name;
    protected $code;


    public function __construct($name, $last_name, $code)
    {
        $this->name = $name;
        $this->last_name = $last_name;
        $this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('egresados@ucp.edu.co')
            ->markdown('emails.complete',['name' => $this->name, 'last_name' => $this->last_name, 'code' => $this->code])
            ->subject('Completar registro');
    }
}
