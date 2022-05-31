<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    public function sub()
    {
        return $this->belongsTo(Sub::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Answer()
    {
        return $this->hasMany(Answer::class);
    }
}
