<?php // phpcs:ignore PSR1.Files.SideEffects.FoundWithSymbols
echo "<pre>";

$shop = array(
    array("a" => 1, "b" => 2, "c" => 3),
    array("a" => 4, "b" => 5 , "c" => 6),
    array("a" => 7, "b" => 8 , "c" => 9),
    array("a" => 10, "b" => 11 , "c" => 12),
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
    <table cellspacing=2 border=1 cellpadding=5 width=200 bordercolor=darkgrey>
        <tr>
            <th>";
                echo implode('</th><th>', array_keys(current($a)));
                echo "
            </th>
        </tr>";
    foreach ($a as $row) {
        if ($row['c'] % 2 == 0) {
            array_map('htmlentities', $row);
            echo "
            <tr>
                <td>";
                    echo "<i><b>" . implode('</td><td><i><b>', $row);
                    echo "
                </td>
            </tr>";
        } else {
            array_map('htmlentities', $row);
            echo "
            <tr>
                <td>";
                    echo  "<sub>" . implode('</td><td><sub>', $row);
                    echo "
                </td>
            </tr>";
        }
    }
}

printTrspeze($shop);

// phpcs:ignore PSR2.Files.ClosingTag.NotAllowed
