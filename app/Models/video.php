<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\farmhouse;

class video extends Model
{
    use HasFactory;
    

    public function farmhouse()
    {
        return $this->belongsTo(farmhouse::class);
    }
}
