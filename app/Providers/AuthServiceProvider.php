<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
        Gate::define('nobody', fn (User $user) => count($user->roles) === 0
            ? Response::allow() : Response::denyWithStatus(403));
        Gate::define('superadmin', fn (User $user) => $user->roles->pluck('level')->contains(0)
            ? Response::allow() : Response::denyWithStatus(403));
        Gate::define('admin', fn (User $user) => $user->roles->pluck('level')->contains(1)
            ? Response::allow() : Response::denyWithStatus(403));
        Gate::define('assessor', fn (User $user) => $user->roles->pluck('level')->contains(2)
            ? Response::allow() : Response::denyWithStatus(403));
    }
}
