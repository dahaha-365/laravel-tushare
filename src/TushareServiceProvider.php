<?php
namespace Tushare;

use Illuminate\Contracts\Support\DeferrableProvider;

class TushareServiceProvider extends \Illuminate\Support\ServiceProvider implements DeferrableProvider
{
    protected $defer = true;

    public function boot()
    {
        $this->publishes(
            [
                __DIR__.DIRECTORY_SEPARATOR.'config.php' => config_path('tushare.php')
            ],
            'laravel-tushare'
        );
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.DIRECTORY_SEPARATOR.'config.php', 'tushare');
        $this->app->singleton(
            \Tushare::class,
            function ($app) {
                return \Tushare::init(config('tushare.token', ''));
            }
        );
        $this->app->alias(\Tushare::class, 'tushare');
    }

    public function provides()
    {
        return ['tushare'];
    }
}
