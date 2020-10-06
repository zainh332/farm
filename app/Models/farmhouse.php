<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farmhouse extends Model
{
    protected $guarded = []; 
    

    public function image()
    {
        return $this->hasMany(image::class);
    }

    public function video()
    {
        return $this->hasMany(video::class);
    }

    public function address()
    {
        return $this->hasMany(address::class);
    }
}
