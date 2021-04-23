<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['banner_image', 'banner_title', 'banner_subtitle', 'banner_description', 'banner_type'];
}
