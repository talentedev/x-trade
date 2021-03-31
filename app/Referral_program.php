<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral_program extends Model
{
    // protected $guraded = ['_token'];
    protected $fillable = ['heading', 'description', 'thumbnail'];
}
