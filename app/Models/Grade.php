<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
