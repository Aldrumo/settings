<?php

namespace Aldrumo\Settings\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'slug',
        'setting_data',
    ];
}
