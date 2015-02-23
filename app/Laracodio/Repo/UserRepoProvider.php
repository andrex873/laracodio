<?php
namespace Laracodio\Repo;


use Illuminate\Support\ServiceProvider;

class UserRepoProvider extends ServiceProvider{
    
    public function register() {
        $this->app->bind('Laracodio\Repo\UserRepo', function(){
            return new UserRepoImpl();
        });
    }
    
}