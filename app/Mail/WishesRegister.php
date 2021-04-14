<?php

namespace App\Mail;

use App\Models\Wishes;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WishesRegister extends Mailable
{
    use Queueable, SerializesModels;

    public $wishes, $tipo_descricao;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Wishes $wishes, $tipo_descricao)
    {
        $this->wishes = $wishes;
        $this->tipo_descricao = $tipo_descricao;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('front.emails.wishes');
    }
}
