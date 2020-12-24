<?php

namespace Algo\Nums;

class Gcd {
    /**
     *
     * @var int
     */
    public $a;

    /**
     *
     * @var int
     */
    public $b;

    private $log = [
        [ 'a', 'b', 'calculation']
    ];

    public function __construct(int $a, int $b) {
        $this->a = $a;
        $this->b = $b;
    }

    private function calc(int $a, int $b): int {

        if ($a == $b) {
            $this->log[] = [
                $a, $b, "Stop"
            ];
            return $a;
        }

        if ($a > $b) {
            $this->log[] = [
                $a, $b, "a = a - b (" . $a . " - " . $b . " = " . ( $a - $b ) . ")"
            ];
            return $this->calc($a - $b, $b);
        }
            $this->log[] = [
                $a, $b, "b = b - a (" . $b . " - " . $a . " = " . ( $b - $a ) . ")"
            ];
        return $this->calc($a, $b - $a);
    }

    public function get(): int {
        return $this->calc($this->a, $this->b);
    }

    function getLog(): array {
        return $this->log;
    }
}
