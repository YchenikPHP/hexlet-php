<?php

define('DIR', __DIR__);

require_once DIR . '/vendor/autoload.php';

// Файл не включается напрямую
// Он загрузится автоматически благодаря автозагрузке
use Hexlet\Php\Runner;

print_r(Runner::run());
