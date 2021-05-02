<?php

namespace Algo\Nums;

class Fact {
    protected $log = [];

    public function calc(int $n): int {
        if ($n < 0) {
            throw new \InvalidArgumentException("Must be positive int");
        }

        if ($n <= 1) {
            return 1;
        }

        $step = 1;
        $this->log[] = [ $step, $n, $n ];
        $calcStr = $n;

        $ret = $n--;

        while ($n > 1) {
            $ret *= $n;
            $calcStr .= " * " . $n;
            $this->log[] = [ $step, $calcStr, $ret ];
            $n--;
        }

        return $ret;
    }

    function getLog(): array {
        return $this->log;
    }
}
