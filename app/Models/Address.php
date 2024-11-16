<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['city','street','house','apartment','entrance','floor','intercom','user_id'];

}
