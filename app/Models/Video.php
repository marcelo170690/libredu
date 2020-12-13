<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public static function rules ($video = true) {

        return [
            'video'       => [$video?'required':'nullable'],
            'name'        => ['required', 'string', 'min:2'],
            'description' => ['nullable', 'string', 'min:5'],
        ];
    }

}
