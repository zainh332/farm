<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $guarded = [];

    public function FunctionName()
    {
       
        $this->belongsTo(bookingstatus::class);
    }
}
