<?php

declare (strict_types=1);
namespace RectorPrefix20220611;

use Rector\Config\RectorConfig;
use Rector\Laravel\Set\LaravelLevelSetList;
use Rector\Laravel\Set\LaravelSetList;
return static function (RectorConfig $rectorConfig) : void {
    $rectorConfig->sets([LaravelSetList::LARAVEL_54, LaravelLevelSetList::UP_TO_LARAVEL_53]);
};
