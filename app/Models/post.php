<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Model\tag','post_tags');
    }

}
