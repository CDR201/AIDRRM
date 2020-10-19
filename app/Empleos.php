<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Empleos extends Model
{
    use Notifiable;
    protected $fillable = [
        'Ide','Cateoria','Sueldo','Requisitos','Idem',
            ];
}
