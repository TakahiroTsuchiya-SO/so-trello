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
    // public function projectStore(Int $user_id, Array $data)
    // {
    //     if ($data['project_image'] == null){
    //         $this->user_id = $user_id;
    //         $this->title = $data['title'];
    //     } else {
    //         $this->user_id = $user_id;
    //         $this->title = $data['title'];
    //         $this->project_image = $data['project_image'];
    //     }

    //     $this->save();
    //     return;
    // }
}
