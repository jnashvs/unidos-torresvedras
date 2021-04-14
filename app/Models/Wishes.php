<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishes extends Model
{
    protected $table = 'wishes';

    protected $fillable = ['nome', 'email', 'freguesia', 'msg', 'data_nascimento', 'tipo', 'tipo_descricao'];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y',
        'updated_at' => 'datetime:d/m/Y',
    ];

}
