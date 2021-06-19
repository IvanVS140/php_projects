<?php // phpcs:ignore PSR1.Files.SideEffects.FoundWithSymbols
echo "<pre>";

$shop = array(
    array("a" => 1, "b" => 2, "c" => 3, "s" => 100),
    array("a" => 4, "b" => 5 , "c" => 6, "s" => 101),
    array("a" => 7, "b" => 8 , "c" => 9, "s" => 102.4),
    array("a" => 10, "b" => 11 , "c" => 12, "s" => 1024),
    array("a" => 13, "b" => 14 , "c" => 15, "s" => 104.4),
    array("a" => 16, "b" => 17 , "c" => 18, "s" => 105)
);

print_r($shop);

/**
 * Print trspeze
 *
 * @param array $a Comment here
 *
 * @return void
 */
function printTrspeze($a)
{
    echo "
    <table width=200 border=1 bordercolor=darkgrey cellspacing=0 cellpadding=5>
    <th>";
    echo implode('<th>', array_keys(current($a)));
    foreach ($a as $row) {
        echo "<tr><td>";
        if (end($row) != intval(end($row))) {
            echo "<i><b>" . implode('</td><td><i><b>', $row);
        } elseif (end($row) % 2 != 0) {
            echo "<i><b>" . implode('</td><td><i><b>', $row);
        } else {
            echo "<sub>" . implode('</td><td><sub>', $row);
        }
    }
}

printTrspeze($shop);

// phpcs:ignore PSR2.Files.ClosingTag.NotAllowed
