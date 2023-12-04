<?php

declare(strict_types=1);

namespace SBUERK\LegacyParamGuard\Tests\Functional;

use SBUERK\LegacyParamGuard\SimpleService;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

final class SimpleServiceTest extends FunctionalTestCase
{
    protected array $testExtensionsToLoad = [
        'sbuerk/t3e-legacy-param-guard',
    ];

    /**
     * @test
     */
    public function methodTextReturnsExpectedValue(): void
    {
        self::assertSame('simpleservice::text(1)', $this->get(SimpleService::class)->text(1));
    }
}
