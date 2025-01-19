<?php

namespace App\Providers;

use App\Http\Admin\Inserts\Insert\Policies\InsertPolicy;
use Domain\Inserts\Insert\Models\Insert;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Gate::policy(Insert::class, InsertPolicy::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
