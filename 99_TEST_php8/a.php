<?php // phpcs:ignore

echo "<pre>";

/**
 * Foo
 *
 * @param mixed $str Comment here
 *
 * @return void
 */
function foo($str)
{
    echo "\nПривет, $str\n";
    var_dump(debug_backtrace());
}

foo('друг');
