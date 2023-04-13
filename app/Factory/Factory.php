<?php

declare(strict_types=1);

namespace App\Factory;

class Factory
{
    public static function make(string $class, $data = [])
    {
        return app($class, compact('data'));
    }
}
