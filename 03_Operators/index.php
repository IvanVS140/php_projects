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
define("EMPTY_LINE", "<br/><br/>");

$num1 = 8;
$num2 = 6;

// Addition
echo $num1 + $num2;
echo NEW_LINE;

// Subtraction
echo $num1 - $num2;
echo NEW_LINE;

// Multiplication
echo $num1 * $num2;
echo NEW_LINE;

// Division
echo $num1 / $num2;
echo NEW_LINE;

// Modulo division
$x = 14;
$y = 3;
echo $x % $y;
/* If you use floating point numbers with the modulus operator, they
 * will be converted to integers before the operation
 */

// Increment & Decrement
$x++; // equivalent to $x = $x+1;
$x--; // equivalent to $x = $x-1;

$x++; // post-increment
$x--; // post-decrement
++$x; // pre-increment
--$x; // pre-decrement

$a = 2;
$b = $a++; // $a=3,  $b=2

$a = 2;
$b = ++$a; // $a=3,  $b=3

$a = 2;
$b = $a--; // $a=1,  $b=2

$a = 2;
$b = --$a; // $a=1,  $b=1

/* Assignment Operators
 *
 * x += y -> x = x + y
 * x -= y -> x = x - y
 * x *= y -> x = x * y
 * x /= y -> x = x / y
 * x %= y -> x = x % y
 */

/* Comparison Operators
 *
 * ==   Equal           $x == $y    Returns True if $x is equal to $y
 * ===  Identical       $x === $y   Returns True if $x is equal to $y
 *                                  and they are the same type
 * !=   Not equal       $x != $y    Returns True if $x is not equal
 *                                  to $y
 * <>   Not equal       $x <> $y    Returns True if $x is not equal
 *                                  to $y
 * !==  Not identical   $x !== $y   Returns True if $x is not equal
 *                                  to $y and they are not of the same
 *                                  type
 * >    Grater than     $x > $y     Returns True if $x is grater than $y
 * <    Less than       $x < $y     Returns True if $x is less than $y
 * >=   Grater than or
 *      equal to        $x >= $y    Returns True if $x is grater than or
 *                                  equal to $y
 * <=   Less than or
 *      equal to        $x <= $y    Returns True if $x is less than or
 *                                  equal to $y
 */

/* Logical Operators
 *
 * and      And     $x and $y   True if both $x and $y are true
 * or       Or      $x or $y    True if either $x or $y is true
 * xor      Xor     $x xor $y   True if either $x or $y is true, but not
 *                              both
 * &&       And     $x && $y    True if both $x and $y are true
 * ||       Or      $x || $y    True if either $x or $y is true
 * !        Not     !$x         True if $x is not true
 *
 * You can combine as many terms as you want. Use parentheses () for
 * precedence
 */

// phpcs:ignore PSR2.Files.ClosingTag.NotAllowed
?>
