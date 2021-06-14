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

echo "Hello World!";

echo EMPTY_LINE;

echo "This is a <strong>bold</strong> word.";

// This is a single-line comment

/*
 * This is a multi-line comment block
 * that spans over
 * multiple lines
 */
// phpcs:ignore PSR2.Files.ClosingTag.NotAllowed
?>
