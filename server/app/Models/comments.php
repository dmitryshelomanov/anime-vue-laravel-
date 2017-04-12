<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $fillable = [
        'text', 'user_id', 'anime_id',
    ];
    /**
     * user belongs to comments
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user () {
        return $this->belongsTo('App\Models\User');
    }
}
