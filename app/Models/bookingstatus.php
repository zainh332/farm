<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookingstatus extends Model
{
    use HasFactory;
    public function booking()
    {
        $this->hasMany(booking::class);
    }
}
