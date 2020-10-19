<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Empresas extends Model
{
    use Notifiable;
    protected $fillable = [
        'Idem','Nombre','Tipo','Calle','Estado','CP', ];
}
