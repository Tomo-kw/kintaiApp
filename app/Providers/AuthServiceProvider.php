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
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // システム管理者のみ許可
        Gate::define('system', function ($user) {
            return ($user->authority == 'system');
        });

        // 管理者のみ許可
        Gate::define('admin', function ($user) {
            return ($user->authority == 'admin');
        });

        // 一般ユーザーのみ許可
        Gate::define('user', function ($user) {
            return ($user->authority == 'user');
        });
    }
}
