<?php

namespace App\Models;
use App\Models\farmhouse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $guarded = []; 

    public function farmhouse()
    {
        return $this->belongsTo('App\Models\farmhouse');
        //return $this->belongsTo(farmhouse::class);
    }
}
