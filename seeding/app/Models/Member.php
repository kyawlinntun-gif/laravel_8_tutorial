<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Accessor
    public function getNameAttribute($value)
    {
        return 'Mr. '.ucwords($value);
    }

    // Mutator
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = 'Mr. '. $value;
    }
}
