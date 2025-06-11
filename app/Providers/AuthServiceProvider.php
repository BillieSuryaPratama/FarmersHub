<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\EloquentUserProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        Auth::provider('plaintext', function ($app, array $config) {
        return new class($app['hash'], $config['model']) extends EloquentUserProvider {
            public function validateCredentials($user, array $credentials)
            {
                // Cek password TANPA hash
                return $credentials['password'] === $user->getAuthPassword();
            }
        };
    });
    }
}
