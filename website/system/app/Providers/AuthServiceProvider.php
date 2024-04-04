<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('edit-user', function ($user){
            return $user->hasRole('Super-admin');
        });
        Gate::define('delete-user', function ($user){
            return $user->hasRole('Super-admin');
        });
        Gate::define('manage-user', function ($user){
            return $user->hasAnyRoles(['Super-admin','editor']);
        });
        Gate::define('post-Covid19', function ($user){
            return $user->hasRole(['Covid19']);
        });
    }
}
