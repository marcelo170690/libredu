<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public static function rules () {
        return [
            'name'        => ['required', 'string', 'min:2'],
            'description' => ['nullable', 'string', 'min:5'],
            'video'       => ['required']
        ];
    }
}
