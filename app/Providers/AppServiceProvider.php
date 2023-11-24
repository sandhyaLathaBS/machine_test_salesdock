<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MainInjectionService;
use App\Services\LeadInjectionService;
use App\Services\CustomerInjectionService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MainInjectionService::class, function ($app) {
            $leadInjectionService = new LeadInjectionService();
            $customerInjectionService = new CustomerInjectionService();

            return new MainInjectionService([
                'lead' => $leadInjectionService,
                'customer' => $customerInjectionService,
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
