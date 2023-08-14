<?php
function minUniqueArraySum(array $arr) {
    sort($arr);
    $length = count($arr);

    for ($i = 1; $i < $length; $i++) {
        while ($arr[$i] <= $arr[$i - 1]) {
            $arr[$i]++;
        }
    }
    return array_sum($arr);
}

$arr = [3, 2, 1, 2, 7];
$result = minUniqueArraySum($arr);
echo $result;