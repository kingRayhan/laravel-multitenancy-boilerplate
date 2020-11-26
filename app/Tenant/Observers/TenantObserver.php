<?php


namespace App\Tenant\Observers;

use Illuminate\Database\Eloquent\Model;

class TenantObserver
{
    protected $tenant;

    /**
     * TenantObserver constructor.
     * @param $tenant
     */
    public function __construct($tenant)
    {
        $this->tenant = $tenant;
    }

    public function creating(Model $model)
    {
        $foreignKey = $this->tenant->getForeignKey();

        if (!$model->{$foreignKey}) {
            $model->setAttribute($foreignKey, $this->tenant->id);
        }
    }
}
