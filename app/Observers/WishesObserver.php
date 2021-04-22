<?php

namespace App\Observers;

use App\Mail\WishesRegister;
use App\Models\Wishes;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class WishesObserver
{
    /**
     * Handle the wishes "created" event.
     *
     * @param  \App\Wishes  $wishes
     * @return void
     */
    public function created(Wishes $wishes)

    {
        Log::info($wishes);

        $typo = array(
            (object)array("name" => ""),
            (object)array("name" => "O que quero ver na minha freguesia."),
            (object)array("name" => "O que não quero ver na minha freguesia."),
            (object)array("name" => "O que te move?")
        );

        $tipo_descricao = $typo[$wishes->tipo]->name;

        // O formulário junte-se a nós envia para:
        // novosmembros@unidosportorresvedras.pt

        // O formulário " o que quero ver na minha freguesia" deve enviar para:
        // contributos@unidosportorresvedras.pt

        //$to_email = $wishes->tipo < 3 ? "contributos@unidosportorresvedras.pt" : "novosmembros@unidosportorresvedras.pt";
        $to_email = $wishes->tipo < 3 ? "jnashvs@gmail.com" : "jorge.silva@slingshot.pt";

        Mail::to($to_email)->send(new WishesRegister($wishes, $tipo_descricao));
    }


    /**
     * Handle the wishes "updated" event.
     *
     * @param  \App\Wishes  $wishes
     * @return void
     */
    public function updated(Wishes $wishes)
    {
        //
    }

    /**
     * Handle the wishes "deleted" event.
     *
     * @param  \App\Wishes  $wishes
     * @return void
     */
    public function deleted(Wishes $wishes)
    {
        //
    }

    /**
     * Handle the wishes "restored" event.
     *
     * @param  \App\Wishes  $wishes
     * @return void
     */
    public function restored(Wishes $wishes)
    {
        //
    }

    /**
     * Handle the wishes "force deleted" event.
     *
     * @param  \App\Wishes  $wishes
     * @return void
     */
    public function forceDeleted(Wishes $wishes)
    {
        //
    }
}
