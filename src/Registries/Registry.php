<?php namespace Nwidart\LaravelBroadway\src\Registries;

interface Registry
{
    /**
     * @param array $handlers
     * @return void
     */
    public function add(array $handlers);
}