<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobe extends Model
{
    use HasFactory;

    public function scopeOnline($query)
    {
        return $query->where('status' , 1);
    }

    public function user()
    {


        return $this->belongsTo(Role::class);
    }
}
