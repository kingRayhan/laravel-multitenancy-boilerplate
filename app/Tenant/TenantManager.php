<?php


namespace App\Tenant;


class TenantManager
{
    protected $tenant;

    /**
     * @return mixed
     */
    public function getTenant()
    {
        return $this->tenant;
    }

    /**
     * @param mixed $tenant
     */
    public function setTenant($tenant)
    {
        $this->tenant = $tenant;
    }

}
