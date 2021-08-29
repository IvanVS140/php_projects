<?php // phpcs:ignore PSR1.Files.SideEffects.FoundWithSymbols

echo "<pre>";
date_default_timezone_set('Europe/Moscow');
setlocale(LC_ALL, 'ru_RU');
$date_time = time();
$date_time_format = strftime("%A %e %B %Y - %H:%M:%S", $date_time);
echo "PHP version: " . PHP_VERSION . PHP_EOL;
echo strftime("%A %e %B %Y - %H:%M:%S", $date_time) . PHP_EOL;
echo str_repeat("_", iconv_strlen($date_time_format)) . str_repeat(PHP_EOL, 2);

// code here



// phpcs:ignore PSR2.Files.ClosingTag.NotAllowed
?>
