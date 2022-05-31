<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    use HasFactory;
    public function System() {
        return $this->belongsTo(System::class);
    }

    public function Posts() {
        return $this->hasMany(Posts::class);
    }
}
