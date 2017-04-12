<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;
use Intervention\Image\ImageManagerStatic as Image;

class UploadImage extends Model
{
    private
    static
        $path = 'img/anime/',
        $name,
        $mimeType;
    public static function uploadAnimeImage($data)
    {
        self::$path = $data['path'];
        self::$mimeType = $data['img']->getClientMimeType();
        self::$name = $data['img']->getClientOriginalName();

        if ($data['img']->getMimeType() !== 'image/jpeg') {
            return false;
        }

        $uplod = Image::make($data['img']->getRealPath())
                        ->resize(600, 300)
                        ->save(public_path(self::$path . self::$name));

        if ($data['is_update']) {
            return  DB::table($data['table'])
                        ->where('id', '=', $data['id'])
                        ->update(['img' => self::$name]);
        }
        return true;
    }
}
