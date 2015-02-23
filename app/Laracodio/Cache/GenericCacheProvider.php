<?php
namespace Laracodio\Cache;

use Illuminate\Support\ServiceProvider;

class GenericCacheProvider extends ServiceProvider{
    
    public function register() {
        $this->app->bind('Laracodio\Cache\GenericCache', function($app){
            return new GenericCacheImpl($app['cache'], "_LARAVEL_CACHE_", 20);
        });
    }
    
}