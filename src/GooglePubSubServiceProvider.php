<?php namespace IoDigital\GooglePubSub;

use IoDigital\GooglePubSub\PubSub\GoogleClient;
use IoDigital\GooglePubSub\PubSub\PubSubHandler;

use Illuminate\Support\ServiceProvider;

class GooglePubSubServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $config_file = __DIR__.'/config/config.php';

        $this->publishes([
            $config_file => config_path('google_pub_sub.php'),
        ], 'config');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->singleton(PubSubHandler::class, function ($app) {
//            return new PubSubHandler(new GoogleClient());
//        });
        $this->app->bind('PubSubHandler', function ($app) {
            return new PubSubHandler(new GoogleClient());
        });

        $this->app->alias('PubSubHandler',PubSubHandler::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['PubSubHandler'];
    }
}