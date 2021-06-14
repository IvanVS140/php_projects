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
define("NEW_LINE", "<br/>");

$names = array("David", "Amy", "John");
echo $names[1];

echo NEW_LINE;

$names[1] = "David";
$names[2] = "Amy";
$names[3] = "John";
echo $names[1];

echo EMPTY_LINE;

$myArray[0] = "John";
$myArray[1] = "<strong>PHP</strong>";
$myArray[2] = 21;
echo "$myArray[0] is $myArray[2] and knows $myArray[1]";

echo EMPTY_LINE;

// Associative Arrays
$people = array("David" => "27", "Amy" => "21", "John" => "42");
echo $people["David"];

echo NEW_LINE;

// or
$people['David'] = "27";
$people['Amy'] = "21";
$people['John'] = "42";
echo $people["David"];

echo EMPTY_LINE;

// Multi-Dimensional Arrays
$people = array(
        'online' => array('David', 'Amy'),
        'offline' => array('John', 'Rob', 'Jack'),
        'away' => array('Arthur', 'Daniel')
);
echo $people['online'][0];

echo NEW_LINE;

echo $people['away'][1];
// phpcs:ignore PSR2.Files.ClosingTag.NotAllowed
?>
