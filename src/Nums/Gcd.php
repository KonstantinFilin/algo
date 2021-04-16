<?php

namespace Algo\Nums;

class Gcd {

    private $log = [
        [ 'a', 'b', 'Calculation digits', 'Calculation numbers' ]
    ];

    public function calc(int $a, int $b): int {
        if ($a == $b) {
            $this->log[] = [
                $a, $b, "Stop", ""
            ];
            return $a;
        }

        if ($a > $b) {
            $this->log[] = [
                $a, $b, "a = a - b", "a = "  . $a . " - " . $b . " = " . ( $a - $b )
            ];
            return $this->calc($a - $b, $b);
        }

        $this->log[] = [
            $a, $b, "b = b - a ", "b = " . $b . " - " . $a . " = " . ( $b - $a )
        ];

        return $this->calc($a, $b - $a);
    }

    function getLog(): array {
        return $this->log;
    }
}
