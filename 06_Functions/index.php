<?php // phpcs:ignore PSR12.Files.FileHeader.HeaderPosition

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
define("EMPTY_LINE", "<br/><br/>");

/**
 * Say Hello
 *
 * @param string $x Comment here
 *
 * @return string
 */
function sayHello($x = "Hello!"): string
{
    return $x;
}
echo sayHello(); //call the function

echo EMPTY_LINE;

// return
/**
 * Multiply
 *
 * @param int $num1 Comment here
 * @param int $num2 Comment here
 *
 * @return int
 */
function multiply($num1, $num2): int
{
    return $num1 * $num2;
}
echo multiply(3, 6);

echo EMPTY_LINE;

// default arguments
/**
 * Set Counter
 *
 * @param int $num Comment here
 *
 * @return string
 */
function setCounter($num = 10): string
{
    return "Counter is " . $num . "<br/>";
}
echo setCounter(42);  //Counter is 42
echo setCounter();  //Counter is 10
// phpcs:ignore PSR2.Files.ClosingTag.NotAllowed
?>
