<?php

namespace App\Models\Tenant;

use App\Tenant\Traits\ForTenants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, ForTenants;

    protected $fillable = ['name'];
}
