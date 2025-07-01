<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\ClassMethod\AddReturnTypeDeclarationRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withPhpSets(php81: true)
    ->withTypeCoverageLevel(0)
    ->withDeadCodeLevel(0)
    ->withPreparedSets(
        codeQuality: true
    )
    ->withRules([
        AddReturnTypeDeclarationRector::class
    ]);
