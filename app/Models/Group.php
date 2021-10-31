<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->belongsToMany('User::class')->withTimestamps();
        // return $this->belongsToMany('App\Models\User')->withTimestamps();
    }

}
