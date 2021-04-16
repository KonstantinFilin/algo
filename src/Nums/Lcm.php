<?php

namespace Algo\Nums;

class Lcm {
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

}
