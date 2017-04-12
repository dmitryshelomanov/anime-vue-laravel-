<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\News;

class anime extends Model
{
    protected $table = 'anime';

    /**
 * relationship one-to-many
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
    public function comments () {
        return $this->hasMany('App\Models\comments');
    }
    /**
     * relationship one-to-many
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function series () {
        return $this->hasMany('App\Models\anime_series');
    }
    /**
     * relationship one-to-many
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function person () {
        return $this->hasMany('App\Models\Person');
    }
    public function getAnimeByFilter($type, $name)
    {
        return $this->where($type, 'LIKE', '%' . $name . '%')->simplePaginate(20);
    }
    /**
     * Поиск по базе
     * С параметром
     * @param $str
     * @return mixed
     */
    public static function search($str)
    {
        return  [
            'video' => anime::where('name', 'LIKE', '%' . $str . '%')->get(),
            'person' => Person::where('name', 'LIKE', '%' . $str . '%')->get(),
            'news' => News::where('name', 'LIKE', '%' . $str . '%')->get(),
        ];
    }
}
