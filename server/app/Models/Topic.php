<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    /**
     * topic messages relationship one-to-many
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function message () {
        return $this->hasMany('App\Models\Message');
    }

    /**
     * topic belongs to user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user () {
        return $this->belongsTo('App\Models\User');
    }
}
