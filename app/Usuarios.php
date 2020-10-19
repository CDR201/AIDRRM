<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Usuarios extends Model
{
    use Notifiable;
    protected $fillable = [
'Idu','Nombre','Apellido M','Apellido P','Edad','Calle','Estado','CP','CV'
    ];
}
