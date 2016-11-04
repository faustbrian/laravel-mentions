<?php

namespace BrianFaust\Mentions;

use BrianFaust\Mentions\Builder\MentionBuilder;

class ServiceProvider extends \BrianFaust\ServiceProvider\ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishConfig();

        $this->publishViews();

        $this->publishAssets();

        $this->loadViews();

        $this->loadRoutes();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        parent::register();

        $this->mergeConfig();

        $this->app->singleton('mentionBuilder', function ($app) {
            $form = new MentionBuilder($app['html'], $app['url'], $app['session.store']->getToken());

            return $form->setSessionStore($app['session.store']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array_merge(parent::provides(), ['mentionBuilder']);
    }

    /**
     * Get the default package name.
     *
     * @return string
     */
    public function getPackageName()
    {
        return 'mentions';
    }
}
