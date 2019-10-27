<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cert extends Model
{
    protected $fillable = ['name', 'photo_url', 'alt-text', 'description', 'completed_at'];
}
