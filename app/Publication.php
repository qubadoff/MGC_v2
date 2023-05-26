<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Publication extends Model
{
    protected $guarded = [];
    protected $table = 'publications';
    protected $fillable = ['name', 'description', 'slug', 'file'];
}
