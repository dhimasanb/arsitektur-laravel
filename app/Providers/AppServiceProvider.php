<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind(
          'Illuminate\Contracts\Auth\Registrar',
          'App\Services\Registrar'
      );

      $this->app->when('App\Customer')
                ->needs('App\PaymentMethod')
                ->give('App\RekeningPonsel');

      $this->app->when('App\Seller')
                ->needs('App\PaymentMethod')
                ->give('App\KartuKredit');

      $this->app->singleton('App\KartuKredit', function($app)
      {
        return new \App\KartuKredit;
      });

      // $this->app->bind(
      //     'App\PaymentMethod',
      //     'App\KartuKredit'
      // );
    }
}
