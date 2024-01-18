<?php

declare(strict_types=1);

namespace Kanakhin\OtusComposerPackage;

class FibonacciCalculator
{
    public function calculate(int $length): int {
        if ($length == 0 ) return 0;
        if ($length == 1 || $length == 2) {
            return 1;
        } else {
            return $this->calculate($length - 1) + $this->calculate($length - 2);
        }
    }
}