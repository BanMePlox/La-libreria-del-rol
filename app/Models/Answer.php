<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    public function Posts() {
        return $this->belongsTo(Posts::class);
    }
    public function User() {
        return $this->belongsTo(User::class);
    }

}
