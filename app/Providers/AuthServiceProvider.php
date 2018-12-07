<?php

namespace App\Providers;

use App\Models\Installment;
use App\Models\Order;
use App\Models\UserAddress;
use App\Policies\InstallmentPolicy;
use App\Policies\OrderPolicy;
use App\Policies\UserAddressPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model'        => 'App\Policies\ModelPolicy',
        UserAddress::class => UserAddressPolicy::class,
        Order::class       => OrderPolicy::class,
        Installment::class => InstallmentPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
