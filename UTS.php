<?php
// soal no 5
$date = new DateTime('2021-05-04');


for ($i = 1; $i <= 4; $i++) {
    echo 'Minggu ke-' . $i . ': ' . $date->format('Y-m-d') . '<br>';
    $date->modify('next tuesday'); 
}
?>
