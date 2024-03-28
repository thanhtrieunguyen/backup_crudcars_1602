<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Gate;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::before(function ($user) {
            if ($user->idrole == 1) {
                return true;
            }
        });
        Gate::define('is_admin', function ($user) {
            return $user->idrole == 1;
        });
        Gate::define('is_user', function ($user) {
            return $user->idrole == 2;
        });
    }
}
