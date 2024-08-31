<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    // collegamento one to many di questo model al model "Day"
    public function days(){
        return $this->belongsTo(Day::class);
    }
}
