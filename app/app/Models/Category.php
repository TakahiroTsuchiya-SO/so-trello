<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
}
