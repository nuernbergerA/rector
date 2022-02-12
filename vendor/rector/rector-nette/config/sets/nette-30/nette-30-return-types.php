<?php

declare (strict_types=1);
namespace RectorPrefix20220212;

use PHPStan\Type\ArrayType;
use PHPStan\Type\BooleanType;
use PHPStan\Type\IntegerType;
use PHPStan\Type\MixedType;
use PHPStan\Type\NullType;
use PHPStan\Type\ObjectType;
use PHPStan\Type\StringType;
use PHPStan\Type\UnionType;
use PHPStan\Type\VoidType;
use Rector\TypeDeclaration\Rector\ClassMethod\AddReturnTypeDeclarationRector;
use Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    # scalar type hints, see https://github.com/nette/security/commit/84024f612fb3f55f5d6e3e3e28eef1ad0388fa56
    $arrayType = new \PHPStan\Type\ArrayType(new \PHPStan\Type\MixedType(), new \PHPStan\Type\MixedType());
    $services->set(\Rector\TypeDeclaration\Rector\ClassMethod\AddReturnTypeDeclarationRector::class)->configure([new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Mail\\Mailer', 'send', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Forms\\Rendering\\DefaultFormRenderer', 'renderControl', new \PHPStan\Type\ObjectType('Nette\\Utils\\Html')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Forms\\Container', 'addContainer', new \PHPStan\Type\ObjectType('Nette\\Forms\\Container')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Forms\\Container', 'addSelect', new \PHPStan\Type\ObjectType('Nette\\Forms\\Controls\\SelectBox')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Forms\\Container', 'addMultiSelect', new \PHPStan\Type\ObjectType('Nette\\Forms\\Controls\\MultiSelectBox')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Forms\\IFormRenderer', 'render', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Forms\\Controls\\TextBase', 'getControl', new \PHPStan\Type\ObjectType('Nette\\Utils\\Html')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('RadekDostal\\NetteComponents\\DateTimePicker\\DateTimePicker', 'register', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Caching\\Cache', 'generateKey', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Localization\\ITranslator', 'translate', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\IResource', 'getResourceId', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\IAuthenticator', 'authenticate', new \PHPStan\Type\ObjectType('Nette\\Security\\IIdentity')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\IAuthorizator', 'isAllowed', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\Identity', 'getData', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\IIdentity', 'getRoles', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\User', 'getStorage', new \PHPStan\Type\ObjectType('Nette\\Security\\IUserStorage')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\User', 'login', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\User', 'logout', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\User', 'isLoggedIn', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\User', 'getIdentity', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\Security\\IIdentity'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\User', 'getAuthenticator', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\Security\\IAuthenticator'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\User', 'getAuthorizator', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\Security\\IAuthorizator'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\User', 'getLogoutReason', new \PHPStan\Type\UnionType([new \PHPStan\Type\IntegerType(), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\User', 'getRoles', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\User', 'isInRole', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\User', 'isAllowed', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\IUserStorage', 'isAuthenticated', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\IUserStorage', 'getIdentity', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\Security\\IIdentity'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Security\\IUserStorage', 'getLogoutReason', new \PHPStan\Type\UnionType([new \PHPStan\Type\IntegerType(), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\Component', 'lookup', new \PHPStan\Type\ObjectType('Nette\\ComponentModel\\IComponent')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\Component', 'lookupPath', new \PHPStan\Type\UnionType([new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\Component', 'monitor', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\Component', 'unmonitor', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\Component', 'attached', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\Component', 'detached', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\Component', 'getName', new \PHPStan\Type\UnionType([new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\IComponent', 'getName', new \PHPStan\Type\UnionType([new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\IComponent', 'getParent', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\ComponentModel\\IContainer'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\Container', 'removeComponent', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\Container', 'getComponent', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\ComponentModel\\IComponent'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\Container', 'createComponent', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\ComponentModel\\IComponent'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\Container', 'getComponents', new \PHPStan\Type\ObjectType('Iterator')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\Container', 'validateChildComponent', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\Container', '_isCloning', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\ComponentModel\\IComponent'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\IContainer', 'removeComponent', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\IContainer', 'getComponent', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\ComponentModel\\IContainer'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\ComponentModel\\IContainer', 'getComponents', new \PHPStan\Type\ObjectType('Iterator')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Application', 'run', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Application', 'createInitialRequest', new \PHPStan\Type\ObjectType('Nette\\Application\\Request')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Application', 'processRequest', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Application', 'processException', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Application', 'getRequests', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Application', 'getPresenter', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\Application\\IPresenter'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Application', 'getRouter', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\Application\\IRouter'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Application', 'getPresenterFactory', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\Application\\IPresenterFactory'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Helpers', 'splitName', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\IPresenter', 'run', new \PHPStan\Type\ObjectType('Nette\\Application\\IResponse')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\IPresenterFactory', 'getPresenterClass', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\IPresenterFactory', 'createPresenter', new \PHPStan\Type\ObjectType('Nette\\Application\\IPresenter')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\PresenterFactory', 'formatPresenterClass', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\PresenterFactory', 'unformatPresenterClass', new \PHPStan\Type\UnionType([new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\IResponse', 'send', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Responses\\FileResponse', 'getFile', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Responses\\FileResponse', 'getName', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Responses\\FileResponse', 'getContentType', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Responses\\ForwardResponse', 'getRequest', new \PHPStan\Type\ObjectType('Nette\\Application\\Request')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Request', 'getPresenterName', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Request', 'getParameters', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Request', 'getFiles', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Request', 'getMethod', new \PHPStan\Type\UnionType([new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Request', 'isMethod', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Request', 'hasFlag', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\RedirectResponse', 'getUrl', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\RedirectResponse', 'getCode', new \PHPStan\Type\IntegerType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\JsonResponse', 'getContentType', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\IRouter', 'match', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\Application\\Request'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\IRouter', 'constructUrl', new \PHPStan\Type\UnionType([new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Routers\\Route', 'getMask', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Routers\\Route', 'getDefaults', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Routers\\Route', 'getFlags', new \PHPStan\Type\IntegerType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Routers\\Route', 'getTargetPresenters', new \PHPStan\Type\UnionType([$arrayType, new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Routers\\RouteList', 'warmupCache', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Routers\\RouteList', 'offsetSet', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Routers\\RouteList', 'getModule', new \PHPStan\Type\UnionType([new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Routers\\CliRouter', 'getDefaults', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'getPresenter', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\Application\\UI\\Presenter'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'getUniqueId', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'tryCall', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'checkRequirements', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'getReflection', new \PHPStan\Type\ObjectType('Nette\\Application\\UI\\ComponentReflection')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'loadState', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'saveState', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'getParameters', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'getParameterId', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'getPersistentParams', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'signalReceived', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'formatSignalMethod', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'link', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'lazyLink', new \PHPStan\Type\ObjectType('Nette\\Application\\UI\\Link')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'isLinkCurrent', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'redirect', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'redirectPermanent', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'offsetSet', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'offsetGet', new \PHPStan\Type\ObjectType('Nette\\ComponentModel\\IComponent')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'offsetExists', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Component', 'offsetUnset', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getRequest', new \PHPStan\Type\ObjectType('Nette\\Application\\Request')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getPresenter', new \PHPStan\Type\ObjectType('Nette\\Application\\UI\\Presenter')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getUniqueId', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'checkRequirements', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'processSignal', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getSignal', new \PHPStan\Type\UnionType([$arrayType, new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'isSignalReceiver', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getAction', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'changeAction', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getView', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'sendTemplate', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'findLayoutTemplateFile', new \PHPStan\Type\UnionType([new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'formatLayoutTemplateFiles', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'formatTemplateFiles', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'formatActionMethod', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'formatRenderMethod', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'createTemplate', new \PHPStan\Type\ObjectType('Nette\\Application\\UI\\ITemplate')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getPayload', new \PHPStan\Type\ObjectType('stdClass')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'isAjax', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'sendPayload', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'sendJson', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'sendResponse', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'terminate', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'forward', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'redirectUrl', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'error', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getLastCreatedRequest', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\Application\\Request'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getLastCreatedRequestFlag', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'canonicalize', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'lastModified', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'createRequest', new \PHPStan\Type\UnionType([new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'argsToParams', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'handleInvalidLink', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'storeRequest', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'restoreRequest', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getPersistentComponents', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getGlobalState', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'saveGlobalState', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'initGlobalParameters', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'popGlobalParameters', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getFlashKey', new \PHPStan\Type\UnionType([new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'hasFlashSession', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getFlashSession', new \PHPStan\Type\ObjectType('Nette\\Http\\SessionSection')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getContext', new \PHPStan\Type\ObjectType('Nette\\DI\\Container')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getHttpRequest', new \PHPStan\Type\ObjectType('Nette\\Http\\IRequest')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getHttpResponse', new \PHPStan\Type\ObjectType('Nette\\Http\\IResponse')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getUser', new \PHPStan\Type\ObjectType('Nette\\Security\\User')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Presenter', 'getTemplateFactory', new \PHPStan\Type\ObjectType('Nette\\Application\\UI\\ITemplateFactory')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Exception\\BadRequestException', 'getHttpCode', new \PHPStan\Type\IntegerType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Bridges\\ApplicationDI\\LatteExtension', 'addMacro', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Bridges\\ApplicationDI\\PresenterFactoryCallback', '__invoke', new \PHPStan\Type\ObjectType('Nette\\Application\\IPresenter')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Bridges\\ApplicationLatte\\ILatteFactory', 'create', new \PHPStan\Type\ObjectType('Latte\\Engine')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Bridges\\ApplicationLatte\\Template', 'getLatte', new \PHPStan\Type\ObjectType('Latte\\Engine')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Bridges\\ApplicationLatte\\Template', 'render', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Bridges\\ApplicationLatte\\Template', '__toString', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Bridges\\ApplicationLatte\\Template', 'getFile', new \PHPStan\Type\UnionType([new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Bridges\\ApplicationLatte\\Template', 'getParameters', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Bridges\\ApplicationLatte\\Template', '__set', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Bridges\\ApplicationLatte\\Template', '__unset', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Bridges\\ApplicationLatte\\TemplateFactory', 'createTemplate', new \PHPStan\Type\ObjectType('Nette\\Application\\UI\\ITemplate')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Bridges\\ApplicationLatte\\UIMacros', 'initialize', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Bridges\\ApplicationTracy\\RoutingPanel', 'initializePanel', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Bridges\\ApplicationTracy\\RoutingPanel', 'getTab', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Bridges\\ApplicationTracy\\RoutingPanel', 'getPanel', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Bridges\\ApplicationLatte\\UIRuntime', 'initialize', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\ComponentReflection', 'getPersistentParams', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\ComponentReflection', 'getPersistentComponents', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\ComponentReflection', 'hasCallableMethod', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\ComponentReflection', 'combineArgs', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\ComponentReflection', 'convertType', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\ComponentReflection', 'parseAnnotation', new \PHPStan\Type\UnionType([$arrayType, new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\ComponentReflection', 'getParameterType', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\ComponentReflection', 'hasAnnotation', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\ComponentReflection', 'getMethods', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Control', 'getTemplate', new \PHPStan\Type\ObjectType('Nette\\Application\\UI\\ITemplate')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Control', 'createTemplate', new \PHPStan\Type\ObjectType('Nette\\Application\\UI\\ITemplate')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Control', 'templatePrepareFilters', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Control', 'flashMessage', new \PHPStan\Type\ObjectType('stdClass')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Control', 'redrawControl', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Control', 'isControlInvalid', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Control', 'getSnippetId', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Form', 'getPresenter', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\Application\\UI\\Presenter'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Form', 'signalReceived', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\IRenderable', 'redrawControl', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\IRenderable', 'isControlInvalid', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\ITemplate', 'render', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\ITemplate', 'getFile', new \PHPStan\Type\UnionType([new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\ITemplateFactory', 'createTemplate', new \PHPStan\Type\ObjectType('Nette\\Application\\UI\\ITemplate')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Link', 'getDestination', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Link', 'getParameters', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\Link', '__toString', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\MethodReflection', 'hasAnnotation', new \PHPStan\Type\BooleanType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\IStatePersistent', 'loadState', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\IStatePersistent', 'saveState', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\UI\\ISignalReceiver', 'signalReceived', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Routers\\SimpleRouter', 'match', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\Application\\Request'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Routers\\SimpleRouter', 'getDefaults', $arrayType), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\Routers\\SimpleRouter', 'getFlags', new \PHPStan\Type\IntegerType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\LinkGenerator', 'link', new \PHPStan\Type\StringType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\MicroPresenter', 'getContext', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\DI\\Container'), new \PHPStan\Type\NullType()])), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\MicroPresenter', 'createTemplate', new \PHPStan\Type\ObjectType('Nette\\Application\\UI\\ITemplate')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\MicroPresenter', 'redirectUrl', new \PHPStan\Type\ObjectType('Nette\\Application\\Responses\\RedirectResponse')), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\MicroPresenter', 'error', new \PHPStan\Type\VoidType()), new \Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration('Nette\\Application\\MicroPresenter', 'getRequest', new \PHPStan\Type\UnionType([new \PHPStan\Type\ObjectType('Nette\\Application\\Request'), new \PHPStan\Type\NullType()]))]);
};
