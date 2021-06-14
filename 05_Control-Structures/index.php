<?php // phpcs:ignore PSR1.Files.SideEffects.FoundWithSymbols
include 'header.php'; // phpcs:ignore PEAR.Files.IncludingFile.UseRequire

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

$x = 10;
$y = 20;
if ($x >= $y) {
    echo $x;
} else {
    echo $y;
}

echo EMPTY_LINE;

if ($x > $y) {
    echo "Grater";
} elseif ($x == $y) {
    echo "Equal";
} else {
    echo "Less";
}

echo NEW_LINE; // one more example

$age = 21;
if ($age <= 13) {
    echo "Child.";
} elseif ($age > 13 && $age < 19) {
    echo "Teenager";
} else {
    echo "Adult";
}

/* The curly braces can be omitted if there only one statement after the
 * "if", "elseif", "else".
 * For example:
 *
 * if($age<=13)
 * echo "Child";
 * else
 * echo "Adult";
 */

echo EMPTY_LINE;

// while
$i = 1;
while ($i < 7) {
    echo "The value is $i <br />";
    $i++;
}

echo NEW_LINE;

/* do .. while
 *
 * the condition is tested AFTER executing the statements within the
 * loop
 */

/* do {
 *  code to be executed;
 * } while (condition is true);
 *
 * Regardless of whether the condition is true or false, the code will
 * be executed at least once
 */
$i = 1;
do {
    echo "Hello" . NEW_LINE;
    $i++;
} while ($i < 5);

echo NEW_LINE;

$i = 5;
do {
    echo "The number is " . $i . NEW_LINE;
    $i++;
} while ($i <= 7);

echo NEW_LINE;

// for
for ($a = 0; $a < 6; $a++) {
    echo "Value of a : " . $a . NEW_LINE;
}

echo NEW_LINE;

//foreach - for arrays only
$names = array("John", "David", "Amy");
foreach ($names as $value) {
    echo $value . NEW_LINE;
}

echo NEW_LINE;

foreach ($names as $index => $value) {
    echo $index . " " . $value . NEW_LINE;
}

echo NEW_LINE;

// switch
$today = 'Tue';
switch ($today) {
    case "Mon": // phpcs:disable
        echo "Today is Monday.";
        break;
    case "Tue":
        echo "Today is Tuesday.";
        break;
    case "Wed":
        echo "Today is Wednesday.";
        break;
    case "Thu":
        echo "Today is Thursday.";
        break;
    case "Fri":
        echo "Today is Friday.";
        break;
    case "Sat":
        echo "Today is Saturday.";
        break;
    case "Sun":
        echo "Today is Sunday.";
        break;
    default:
        echo "Invalid day."; // phpcs:enable
}

echo EMPTY_LINE;

// default in switch
$x = 5;
switch ($x) {
    case 1: // phpcs:disable
        echo "One";
        break;
    case 2:
        echo "Two";
        break;
    default:
        echo "No match"; // phpcs:enable
}

echo EMPTY_LINE;

// switch without break
$day = 'Wed';
switch ($day) {
    case 'Mon': //phpcs:disable
        echo 'First day of the week';
        break;
    case 'Tue':
    case 'Wed':
    case 'Thu':
        echo 'Working day';
        break;
    case 'Fri':
        echo 'Friday!';
        break;
    default:
        echo 'Weekend!'; //phpcs:enable
}

echo EMPTY_LINE;

// break - If the break is absent, the code keeps running
$x = 1;
switch ($x) {
    case 1: //phpcs:disable
        echo "One";
    case 2:
        echo "Two";
    case 3:
        echo "Three";
    default:
        echo "No match"; //phpcs:enable
}

echo EMPTY_LINE;

// continue
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo $i . ' ';
}

echo EMPTY_LINE;

// include
/* The include and require statements allow for the insertion of the
 * content of one PHP file into another PHP file
 */

// require
/* The require statement is identical to include, the exception being
 * that, upon failure, it produces a fatal error. When a file is
 * included using the include statement, but PHP is unable to find it,
 * the script continues to execute. In the case of require, the script
 * will cease execution and produce an error.
 *
 * Use require when the file is required for the application to run.
 * Use include when the file is not required. The application should
 * continue, even when the file is not found.
 */
// phpcs:ignore PSR2.Files.ClosingTag.NotAllowed
?>
