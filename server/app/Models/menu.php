<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = 'menu';

    /**
     * relationship one-to-many
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subMenu() {
        return $this->hasMany('App\Models\subMenu');
    }
}
