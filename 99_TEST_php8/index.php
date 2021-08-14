<?php // phpcs:ignore PSR1.Files.SideEffects.FoundWithSymbols

echo "<pre>";

$str = "qwertyuiop";
$str2 = chunk_split($str, 2);
var_dump($str2);

echo "Git test 6";
// phpcs:ignore PSR2.Files.ClosingTag.NotAllowed
?>
