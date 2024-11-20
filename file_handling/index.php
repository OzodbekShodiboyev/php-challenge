<?php
// Ma'lumotlarni o'qish

$fayl = fopen('text.txt', 'r');
$mazmun = fread($fayl, filesize('text.txt'));
fclose($fayl);
echo $mazmun;


?>