<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Sugerencias extends Model
{
    use Notifiable;
    protected $fillable = [
        'Ids','Ide','Idu',
            ];
}
