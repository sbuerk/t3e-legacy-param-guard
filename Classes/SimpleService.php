<?php

declare(strict_types=1);

namespace SBUERK\LegacyParamGuard;

final class SimpleService
{
    public function text(int $number): string
    {
        return sprintf('simpleservice::text(%s)', $number);
    }
}
