<?php

namespace Core\Domain\Entity\Traits;

trait MethodsMagicsTrait
{
    public function __call($name, $arguments)
    {
        $method = substr($name, 0, 3);
        $property = lcfirst(substr($name, 3));

        if ($method === 'get') {
            return $this->$property;
        }

        if ($method === 'set') {
            $this->$property = $arguments[0];
        }

        throw new \BadMethodCallException("Method $name not found");
    }
}