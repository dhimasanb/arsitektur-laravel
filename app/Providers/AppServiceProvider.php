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

      $cc = new \App\KartuKredit(2000, '42542353545');
      $this->app->instance('App\PaymentMethod', $cc);

      // $this->app->bind(
      //     'App\PaymentMethod',
      //     'App\KartuKredit'
      // );
    }
}
