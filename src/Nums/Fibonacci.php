<?php

namespace Algo\Nums;

class Fibonacci {
    protected $ret = [];

    public function calc(int $n): int {
        if ($n < 0) {
            throw new \InvalidArgumentException("Must be positive int");
        }

        $this->ret = [ 0, 1 ];

        if ($n > 1) {
            for ($i = 2; $i <= $n; $i++) {
                $this->ret[$i] = $this->ret[$i - 1] + $this->ret[ $i - 2 ];
            }
        }

        return $this->ret[$n];
    }

    function getLog(): array {
        return $this->ret;
    }
}
