<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    // collegamento one to many di questo model al model "Activity"
    public function activities(){
        return $this->hasMany(Activity::class);
    }

    // collegamento one to many di questo model al model "Destination"
    public function destinations(){
        return $this->belongsTo(Destination::class);
    }
}
