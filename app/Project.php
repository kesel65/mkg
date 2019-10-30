<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create($verifyInput)
 */
class Project extends Model
{
    protected $fillable = ['name', 'url', 'photo_url', 'short_description', 'description', 'demo', 'published_at'];
}
