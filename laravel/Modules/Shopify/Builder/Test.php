<?php

namespace Modules\Shopify\Builder;

class Test
{
    public function __call($name, $arguments)
    {
        if ($name == 'haha') {
            return (new self())->default();
        } else {
            // throw new \Exception('bad method');
            if (!empty($arguments)) {
                return 'sakajkls'. $arguments[0];
            } else {
                return 'simple';
            }
            
        }
    }

    public function default()
    {
        return 'super haha';
    }

    public function init($a = null, $b = null, $c = null)
    {
        return 'abc'. $a;
    }

    public function da(...$parameters)
    {
        // 回调调用使用
        // $parameters must be array
        // call_user_func $parameters must be string
        
        return call_user_func_array([$this, 'init'], $parameters);
    }
}