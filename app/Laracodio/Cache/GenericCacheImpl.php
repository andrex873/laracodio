<?php 
namespace Laracodio\Cache;

class GenericCacheImpl implements GenericCache {
    
    private $cache;
    
    private $tag;
    
    private $minutes;
    
    private $userRepo;
    
    public function __construct(\Illuminate\Cache\CacheManager $cache, $tag, $minutes) { 
        $this->cache = $cache; 
        $this->tag = $tag; 
        $this->minutes = $minutes; 
    }
    
    public function get($key) {
        return $this->cache->tags($this->tag)->get($key);
    }
    
    public function has($key) {
        return $this->cache->tags($this->tag)->has($key);
    }
    
    public function put($key, $value, $minutes = null) {
        if(is_null($minutes)){
            $minutes = $this->minutes;
        }
        return $this->cache->tags($this->tag)->put($key, $value, $minutes);
    }
    
    public function setUserRepo(\Laracodio\Repo\UserRepo $userRepo){
        $this->userRepo = $userRepo;
    }
}