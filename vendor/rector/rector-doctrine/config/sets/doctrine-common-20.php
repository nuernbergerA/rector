<?php

declare (strict_types=1);
namespace RectorPrefix20211205;

use Rector\Renaming\Rector\Name\RenameClassRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
# see https://github.com/doctrine/persistence/pull/71
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\Rector\Renaming\Rector\Name\RenameClassRector::class)->call('configure', [[\Rector\Renaming\Rector\Name\RenameClassRector::OLD_TO_NEW_CLASSES => ['Doctrine\\Common\\Persistence\\Event\\LifecycleEventArgs' => 'Doctrine\\Persistence\\Event\\LifecycleEventArgs', 'Doctrine\\Common\\Persistence\\Event\\LoadClassMetadataEventArgs' => 'Doctrine\\Persistence\\Event\\LoadClassMetadataEventArgs', 'Doctrine\\Common\\Persistence\\Event\\ManagerEventArgs' => 'Doctrine\\Persistence\\Event\\ManagerEventArgs', 'Doctrine\\Common\\Persistence\\Mapping\\AbstractClassMetadataFactory' => 'Doctrine\\Persistence\\Mapping\\AbstractClassMetadataFactory', 'Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata' => 'Doctrine\\Persistence\\Mapping\\ClassMetadata', 'Doctrine\\Common\\Persistence\\Mapping\\ClassMetadataFactory' => 'Doctrine\\Persistence\\Mapping\\ClassMetadataFactory', 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\FileDriver' => 'Doctrine\\Persistence\\Mapping\\Driver\\FileDriver', 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriver' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriver', 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain', 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\PHPDriver' => 'Doctrine\\Persistence\\Mapping\\Driver\\PHPDriver', 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\StaticPHPDriver' => 'Doctrine\\Persistence\\Mapping\\Driver\\StaticPHPDriver', 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\SymfonyFileLocator' => 'Doctrine\\Persistence\\Mapping\\Driver\\SymfonyFileLocator', 'Doctrine\\Common\\Persistence\\Mapping\\MappingException' => 'Doctrine\\Persistence\\Mapping\\MappingException', 'Doctrine\\Common\\Persistence\\Mapping\\ReflectionService' => 'Doctrine\\Persistence\\Mapping\\ReflectionService', 'Doctrine\\Common\\Persistence\\Mapping\\RuntimeReflectionService' => 'Doctrine\\Persistence\\Mapping\\RuntimeReflectionService', 'Doctrine\\Common\\Persistence\\Mapping\\StaticReflectionService' => 'Doctrine\\Persistence\\Mapping\\StaticReflectionService', 'Doctrine\\Common\\Persistence\\ObjectManager' => 'Doctrine\\Persistence\\ObjectManager', 'Doctrine\\Common\\Persistence\\ObjectManagerDecorator' => 'Doctrine\\Persistence\\ObjectManagerDecorator', 'Doctrine\\Common\\Persistence\\ObjectRepository' => 'Doctrine\\Persistence\\ObjectRepository', 'Doctrine\\Common\\Persistence\\Proxy' => 'Doctrine\\Persistence\\Proxy', 'Doctrine\\Common\\Persistence\\AbstractManagerRegistry' => 'Doctrine\\Persistence\\AbstractManagerRegistry', 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\DefaultFileLocator' => 'Doctrine\\Persistence\\Mapping\\Driver\\DefaultFileLocator', 'Doctrine\\Common\\Persistence\\ManagerRegistry' => 'Doctrine\\Persistence\\ManagerRegistry']]]);
};
