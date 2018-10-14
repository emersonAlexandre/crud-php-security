<?php

namespace App\Providers;

use App\Produto;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
        $this->registerProdutosPolicies();
    }

    public function registerProdutosPolicies()
    {
        Gate::define('create-produto', function ($user) {
            return $user->hasAccess(['create-produto']);
        });
        Gate::define('update-produto', function ($user, Produto $produto) {
            return $user->hasAccess(['update-produto']) or $user->id == $produto->user_id;
        });
        Gate::define('delete-produto', function ($user, Produto $produto) {
            return $user->hasAccess(['delete-produto']) or $user->id == $produto->user_id;
        });
        Gate::define('show-produto', function ($user) {
            return $user->hasAccess(['show-produto']);
        });
    }
}
