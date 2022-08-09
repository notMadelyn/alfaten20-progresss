<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(UserRole::class);
    }

    public function role()
    {
        return $this->belongsTo(UserRole::class);
    }
}   
