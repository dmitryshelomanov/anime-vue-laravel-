<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';
    public function anime() {
        return $this->belongsTo('App\Models\anime');
    }
}
