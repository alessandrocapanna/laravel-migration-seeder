<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable =[
      'nome',
      'cognome',
      'iban_carta'
    ];
}
