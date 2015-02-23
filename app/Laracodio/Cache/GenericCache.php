<?php
namespace Laracodio\Cache;

interface GenericCache{
    
    public function get($key); 
    
    public function has($key); 
    
    public function put($key, $value, $minutes = null); 
    
} 