<?php

namespace App\Providers;

// use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        \App\Models\Postjob::class => \App\Policies\JobPolicy::class,
    ];
    
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
