<?php

declare(strict_types=1);

namespace Rector\PHPStanExtensions\Tests\Rule\PathsAreNotTooLongRule;

use Iterator;
use PHPStan\Rules\Rule;
use Rector\PHPStanExtensions\Rule\KeepRectorNamespaceForRectorRule;
use Rector\PHPStanExtensions\Rule\PathsAreNotTooLongRule;
use Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase;
use PhpParser\Node\Stmt\ClassLike;
use Symplify\SmartFileSystem\SmartFileInfo;
use Rector\PHPStanExtensions\Rule\KeepRectorNamespaceForRectorRule;

final class PathsAreNotTooLongRuleTest extends AbstractServiceAwareRuleTestCase
{
    /**
     * @dataProvider provideData()
     * @param array<string|string[]|int[]> $expectedErrorsWithLines
     */
    public function testRule(string $filePath, array $expectedErrorsWithLines): void
    {
        $this->analyse([$filePath], $expectedErrorsWithLines);
    }

    public function provideData(): Iterator
    {
        yield [__DIR__ . '/Fixture/Rector/ShortClassName.php.php', [[]]];

        $longFile = __DIR__ . '/Fixture/Rector/PrettyLongClassNameWaaaaayyyTooLongFileNameWithLoooootsOfCharacters.php.php';
        $errorMessage = sprintf(PathsAreNotTooLongRule::ERROR_MESSAGE, $longFile, '%s', '%s');
        yield [$longFile, [$errorMessage]];
    }

    protected function getRule(): Rule
    {
        return $this->getRuleFromConfig(
            PathsAreNotTooLongRule::class,
            __DIR__ . '/config/configured_rule.neon'
        );
    }
}
