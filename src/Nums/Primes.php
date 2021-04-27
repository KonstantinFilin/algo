<?php

namespace Algo\Nums;

class Primes {
    public static function calc(int $n): int {
        if ($n <= 0) {
            return 0;
        }

        $ans = [2, 3];
        $ansCnt = count($ans);
        $start = $ans[$ansCnt - 1] + 1;

        while ($ansCnt < $n) {
            if (self::isPrimeFor($start, $ans)) {
                $ans[] = $start;
                $ansCnt = count($ans);
            }

            $start += 1;
        }

        return $ans[$n - 1];
    }

    public static function isPrimeFor(int $number, array $tryList): bool {
        foreach ($tryList as $try) {
            if ($number % $try === 0) {
                return false;
            }
        }

        return true;
    }
}
