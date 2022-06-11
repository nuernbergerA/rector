<?php

declare (strict_types=1);
namespace RectorPrefix20220611;

use Rector\Config\RectorConfig;
use Rector\Symfony\Set\SymfonySetList;
return static function (RectorConfig $rectorConfig) : void {
    $rectorConfig->sets([SymfonySetList::SYMFONY_26]);
};
