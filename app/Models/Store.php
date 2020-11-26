<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function owner()
    {
        return $this->belongsToMany(User::class);
    }
}
