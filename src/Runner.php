<?php

namespace Hexlet\Php;

class Runner
{
    public static function run(): array
    {
        $collection = collect(['taylor', 'abigail', 'ivan'])->map(function ($name) {
            return strtoupper($name);
        });

        return $collection->toArray(); // Возвращаем массив
    }
}
