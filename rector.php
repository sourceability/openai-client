<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\Class_\PropertyTypeFromStrictSetterGetterRector;
use Rector\TypeDeclaration\Rector\ClassMethod\AddMethodCallBasedStrictParamTypeRector;
use Rector\TypeDeclaration\Rector\ClassMethod\AddParamTypeFromPropertyTypeRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ArrayShapeFromConstantArrayReturnRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ParamAnnotationIncorrectNullableRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ParamTypeByMethodCallTypeRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromReturnDirectArrayRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromReturnNewRector;
use Rector\TypeDeclaration\Rector\Param\ParamTypeFromStrictTypedPropertyRector;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromAssignsRector;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictGetterMethodReturnTypeRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->importNames(true);
    $rectorConfig->paths([
        __DIR__ . '/build',
        __DIR__ . '/generated',
        __DIR__ . '/src',
    ]);

    $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);
    $rectorConfig->rule(AddMethodCallBasedStrictParamTypeRector::class);
    $rectorConfig->rule(AddParamTypeFromPropertyTypeRector::class);
    $rectorConfig->rule(ArrayShapeFromConstantArrayReturnRector::class);
    $rectorConfig->rule(ParamTypeByMethodCallTypeRector::class);
    $rectorConfig->rule(ParamTypeFromStrictTypedPropertyRector::class);
    $rectorConfig->rule(PropertyTypeFromStrictSetterGetterRector::class);
    $rectorConfig->rule(ReturnTypeFromReturnDirectArrayRector::class);
    $rectorConfig->rule(ReturnTypeFromReturnNewRector::class);
    $rectorConfig->rule(TypedPropertyFromStrictConstructorRector::class);
    $rectorConfig->rule(TypedPropertyFromStrictGetterMethodReturnTypeRector::class);
    $rectorConfig->ruleWithConfiguration(TypedPropertyFromAssignsRector::class, [
        TypedPropertyFromAssignsRector::INLINE_PUBLIC => true,
    ]);
    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_80,
        SetList::TYPE_DECLARATION,
    ]);
    $rectorConfig->skip([
        ClassPropertyAssignToConstructorPromotionRector::class => [
            __DIR__ . '/generated/Model'
        ],
    ]);
};
