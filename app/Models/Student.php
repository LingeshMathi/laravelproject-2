<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Student extends Model
{
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

     public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class);
    }
}
