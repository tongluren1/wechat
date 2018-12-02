<?php

namespace Qmang\Wechat;

use Illuminate\Support\ServiceProvider;

class QmangServiceProvider extends ServiceProvider
{

    /**
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . 'views', 'qmang');
		$this->publishes([
			__DIR__.'/views' => base_path('resources/views/vendor/qmang'),
			__DIR__.'/config/qmang.php' => config_path('qmang.php'),
		]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('qmang', function($app) {
			return new Yiye($app['session'], $app['config']);
		});
    }

	public function provides()
	{
		return ['qmang'];
	}
}
