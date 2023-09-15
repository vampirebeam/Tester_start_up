@include('layouts.app')
<?php
function primeAt($n) {
    if ($n <= 0) {
        return null;
    }

    $count = 0;
    for ($num = 2; $count < $n; $num++) {
        $isPrime = true;
        for ($i = 2; $i * $i <= $num; $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            $count++;
        }
    }

    return $num - 1;
}
?>
<?php echo primeAt(1) ?> <br>
<?php echo primeAt(2) ?> <br>
<?php echo primeAt(6) ?> <br>
<?php echo primeAt(100) ?> <br>


