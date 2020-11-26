<?php


namespace App\Tenant\Scopes;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TenantScope implements Scope
{
    /**
     * @var Model $tenant
     */
    protected $tenant;

    /**
     * TenantScope constructor.
     * @param $tenant
     */
    public function __construct(Model $tenant)
    {
        $this->tenant = $tenant;
    }

    public function apply(Builder $builder, Model $model)
    {
        $builder->where($this->tenant->getForeignKey(), '=', $this->tenant->id);
    }
}
