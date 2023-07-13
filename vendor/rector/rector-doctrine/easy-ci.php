<?php

declare (strict_types=1);
namespace RectorPrefix202307;

use Rector\Doctrine\Rector\Class_\ClassAnnotationToNamedArgumentConstructorRector;
use Rector\Doctrine\Rector\MethodCall\ChangeSetParametersArrayToArrayCollectionRector;
use Rector\Doctrine\Rector\MethodCall\EntityAliasToClassConstantReferenceRector;
use Rector\Doctrine\CodeQuality\Rector\Property\DoctrineTargetEntityStringToClassConstantRector;
use RectorPrefix202307\Symplify\EasyCI\Config\EasyCIConfig;
return static function (EasyCIConfig $easyCIConfig) : void {
    $easyCIConfig->paths([__DIR__ . '/config', __DIR__ . '/src', __DIR__ . '/rules']);
    $easyCIConfig->typesToSkip([\Rector\Core\Contract\Rector\RectorInterface::class]);
};
