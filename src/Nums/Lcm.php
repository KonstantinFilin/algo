<?php

namespace Algo\Nums;

class Lcm {
    private $log = [
        [ 'Formula', 'Calculations']
    ];

    public function calc(int $a, int $b): int {
        $gcdCalculator = new Gcd();
        $gcd = $gcdCalculator->calc($a, $b);

        $this->log[] = [ 'gcd(a, b)', $gcd ];

        if ($gcd == 0) {
            return 0;
        }

        $multiple = abs($a * $b);
        $this->log[] = [ '|a * b|', $multiple ];

        $ans = $multiple / $gcd;
        $this->log[] = [ '|a * b| / gcd(a, b)', $ans ];

        return $ans;
    }

    function getLog(): array {
        return $this->log;
    }
}
