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

        Gate::define('adminPower',function($user){
            return $user->hasRole('admin');
        });

        Gate::define('SuperAdminPower',function($user){
            return $user->hasRole('superAdmin');
        });

        Gate::define('userPower',function($user){
            return $user->hasRole('user'); 
        });

        Gate::define('managePost',function($user){
            return $user->hasAnyRoles(['admin','superAdmin','PostManager']);
        });

        Gate::define('SuperAndAdmin',function($user){
            return $user->hasAnyRoles(['admin','superAdmin']);
        });
    }
}
