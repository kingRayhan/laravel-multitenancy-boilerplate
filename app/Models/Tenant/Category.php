<?php

namespace App\Models\Tenant;

use App\Tenant\Traits\ForTenants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, ForTenants;

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
