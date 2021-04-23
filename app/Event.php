<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'title_image', 'description', 'content', 'created_by', 'keywords', 'type', 'iscarousel'];
}
