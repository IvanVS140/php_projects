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
function createTrapeze(array $a = array(1, 2, 3, 4, 5, 6, 7, 8, 9)): array
{
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
            $i_ind = array_values($i);
            $i["s"] = 0.5 * ($i_ind[0] + $i_ind[1]) * $i_ind[2];
        }
    );
}

$my_trapeze = createTrapeze();
squareTrapeze($my_trapeze);
print_r($my_trapeze);

// phpcs:ignore PSR2.Files.ClosingTag.NotAllowed
?>
