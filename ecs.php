<?php

declare(strict_types=1);

use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\FunctionSpacingSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\AlphabeticallySortedUsesSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\UnusedUsesSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\DeclareStrictTypesSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\UselessConstantTypeHintSniff;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->fileExtensions(['php']);

    $ecsConfig->indentation('spaces');

    $ecsConfig->lineEnding("\n");

    $ecsConfig->sets([
        SetList::PSR_12,
        SetList::CLEAN_CODE,
    ]);

    $ecsConfig->rules([
        AlphabeticallySortedUsesSniff::class,
        UselessConstantTypeHintSniff::class
    ]);

    $ecsConfig->rulesWithConfiguration([
        FunctionSpacingSniff::class => [
            'spacing' => 1,
            'spacingBeforeFirst' => 0,
            'spacingAfterLast' => 0
        ],
        DeclareStrictTypesSniff::class => [
            'spacesCountAroundEqualsSign' => 0
        ],
        UnusedUsesSniff::class => [
            'searchAnnotations' => true
        ]
    ]);
};
