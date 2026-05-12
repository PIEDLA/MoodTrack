<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emocion extends Model
{

    protected $table = 'emociones';

    protected $fillable = [

        'user_id',
        'emocion',
        'comentario'

    ];

}