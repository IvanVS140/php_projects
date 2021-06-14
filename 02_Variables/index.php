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

define("EMPTY_LINE", "<br/><br/>");

$name = 'John';
$age = 25;
echo $name;

echo EMPTY_LINE;

define("MSG", "Hi SoloLearners!");
echo MSG;

echo EMPTY_LINE;

$string1 = "Hello world! - 1"; //double quotes
$string2 = 'Hello world! - 2';  //single quotes

echo $string1 . $string2; //dot ( .) is concatenation operator

$int1 = 42; // positive number
$int2 = -42; // negative number

$x = 42.168;

$y = true;
$z = false;

echo EMPTY_LINE;

$str = "10";
$int = 20;
$sum = $str + $int;
echo $sum;

echo EMPTY_LINE;

/* global keyword is used to access a global variable from within a
 * function
 */
$name = 'David';
/**
 * Get name
 *
 * @return string
 */
function getName()
{
    global $name;
    return $name;
}
echo getName();

echo EMPTY_LINE;

$a = "hello";
$hello = "hi";
$hi = "greet";
// echo $$$a; -> greet

/*
 * $name = 'ivan';
 * $Ivan = 'boy';
 * $boy = 'cool';
 *
 * so we get:
 *
 * $name -> ivan
 * $$name -> boy
 * $$$name -> cool
 *  and so on..
 */

echo EMPTY_LINE;

$hello = "world";
$a = "hello";
// echo $$a; -> world
// phpcs:ignore PSR2.Files.ClosingTag.NotAllowed
?>
