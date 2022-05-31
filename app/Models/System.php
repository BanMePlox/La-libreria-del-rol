<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    use HasFactory;
    /**
     * Get all of the comments for the System
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books()
    {
        return $this->hasMany(books::class, 'foreign_key', 'local_key');
    }

    public function sub() {
        return $this->hasOne(Sub::class);
    }
}
