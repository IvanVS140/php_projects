<?php // phpcs:ignore PSR1.Files.SideEffects.FoundWithSymbols

/**
 * There must be some description
 *
 * PHP version 7.3
 *
 * @index.php
 *
 * @category Lang
 * @package  Mixed
 * @author   Display Name <username@example.com>
 * @license  MIT License (https://www.opensource.org/licenses/)
 * @link     https://www.example.com
 */

/**
 * Implements hook_help().
 */

define("NEW_LINE", "<br/>");
echo "<pre>";

/**
 * Is prime
 *
 * @param int $num Comment here
 *
 * @return bool Comment here
 */
function isPrime(int $num): bool
{
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

/**
 * Find simple
 *
 * @param int $a Comment here
 * @param int $b Comment here
 *
 * @return array
 */
function findSimple(int $a = 2, int $b = 20): array
{
    if ($a == 1) {
        $a++;
    }
    $result = array();
    foreach (range($a, $b) as $num) {
        if (isPrime($num)) {
            array_push($result, $num);
        }
    }
    return $result;
}

print_r(findSimple());
echo NEW_LINE;

/**
 * Create trapeze
 *
 * @param array $a Comment here
 *
 * @return array
 */
function createTrapeze(
    array $a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17,
    18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30)
): array {
    $a_split = array_chunk($a, 3);
    foreach ($a_split as $sub_array) {
        array_push($a_split, array_combine(array("a", "b", "c"), $sub_array));
    }
    return array_slice($a_split, count($a_split) / 2);
}

print_r(createTrapeze());
echo NEW_LINE;

/**
 * Square trapeze
 *
 * @param array $a Comment here
 *
 * @return void
 */
function squareTrapeze(&$a)
{
    array_walk(
        $a,
        function (&$i) {
            $i["s"] = 0.5 * (reset($i) + array_values($i)[1]) * end($i);
        }
    );
}

$my_trapeze = createTrapeze();
squareTrapeze($my_trapeze);
print_r($my_trapeze);

echo NEW_LINE;
echo NEW_LINE;
echo "-= NOW CODING =-";
echo NEW_LINE;

/**
 * Get size for limit
 *
 * @param array $a Comment here
 * @param mixed $b Comment here
 *
 * @return array
 */
function getSizeForLimit($a, $b): array
{
    foreach (array_reverse($a) as $sub_array) {
        if (end($sub_array) > $b) {
            continue;
        }
        return $sub_array;
    }
}

print_r(getSizeForLimit($my_trapeze, 28));

echo NEW_LINE;
echo "-= NOW CODING =-";
echo NEW_LINE;
echo NEW_LINE;

/**
 * Print trapeze
 *
 * @param array $a Comment here
 *
 * @return void
 */
function printTrspeze($a): void
{
    echo "
    <table width=200 border=1 bordercolor=darkgrey cellspacing=0 cellpadding=5>
    <th>";
    echo implode('<th>', array_keys(current($a)));
    foreach ($a as $row) {
        echo "<tr><td>";
        if (end($row) != intval(end($row)) || end($row) % 2 != 0) {
            echo "<i><b>" . implode('</td><td><i><b>', $row);
        } else {
            echo "<sub>" . implode('</td><td><sub>', $row);
        }
    }
}

printTrspeze($my_trapeze);

// phpcs:ignore PSR2.Files.ClosingTag.NotAllowed
?>
