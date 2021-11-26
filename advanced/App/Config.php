<?php

namespace App;

use ArrayAccess;

class Config implements ArrayAccess
{
    private array $params = [
        'login' => 'root',
        'passwd' => 'f5dfknc@d5',
        'port' => 3306,
        'database_name' => 'H1_PE1'
    ];

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }


    public function offsetExists($offset): bool
    {
        return isset($this->params[$offset]);
    }

    public function offsetGet($offset)
    {
        if(isset($this->params[$offset])) {
            return $this->params[$offset];
        }
        return null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->params[] = $value;
        } else {
            $this->params[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->params[$offset]);
    }
}