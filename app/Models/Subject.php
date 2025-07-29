<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subject extends Model
{
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }
     public function grades(): BelongsToMany
    {
        return $this->belongsToMany(Grade::class);
    }
}
