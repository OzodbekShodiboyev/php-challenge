<?php 
// Faylga yozish
$fayl = fopen("text.txt", "w");
fwrite($fayl, "Salom dunyo!");
fclose($fayl);
echo "Fayl yozildi!";


//faylga yozilgan matnni o'qish
$fayl = fopen("text.txt", "r");
$text = fread($fayl, filesize("text.txt"));
fclose($fayl);
echo "<br> Yozilgan matn: $text";
?>