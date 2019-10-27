<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['title', 'youtube_url', 'youtube_embed_url', 'thumbnail_url', 'short_description', 'description'];
}
