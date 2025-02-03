<?php

namespace App\Traits;
use App\Models\Scopes\TenantScope;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToTenantTrait
{
    /**
     * @return void
     */
    protected static function bootBelongsToTenantTrait()
    {
        static::addGlobalScope(new TenantScope);

        static::creating(function($model) {
            if(session()->has('tenant_id')) {
                $model->tenant_id = session()->get('tenant_id');
            }
        });
    }

    /**
     * @return BelongsTo
     */
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
