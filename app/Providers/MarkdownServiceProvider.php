<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use League\CommonMark\CommonMarkConverter;

class MarkdownServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->markdown = new CommonMarkConverter;
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('markdown', function() {
          return $this->markdown;
        });

        $this->app->bind('apa itu laravel?', function() {
        return 'Laravel adalah framework Laravel paling keren dan elegan.';
        });
    }
}
