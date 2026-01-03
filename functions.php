<?php
// Trả về số lớn hơn
function max2($a, $b) {
    return ($a > $b) ? $a : $b;
}

// Trả về số nhỏ hơn
function min2($a, $b) {
    return ($a < $b) ? $a : $b;
}

// Kiểm tra số nguyên tố
function isPrime(int $n): bool {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

// Giai thừa
function factorial(int $n) {
    if ($n < 0) return null;
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }
    return $fact;
}

// Ước chung lớn nhất (Euclid)
function gcd(int $a, int $b): int {
    $a = abs($a);
    $b = abs($b);
    while ($b != 0) {
        $r = $a % $b;
        $a = $b;
        $b = $r;
    }
    return $a;
}
?>
