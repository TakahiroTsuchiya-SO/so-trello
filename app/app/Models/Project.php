<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    public function categories()
    {
        return $this->hasMany('App\Models\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    protected static function boot()
    {
        parent::boot();
        static::deleted(function ($project){
            $project
            ->categories()
            ->delete();
        });
    }
}
