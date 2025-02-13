<?php

$nilai = 90;
$absen = 20;

if ($nilai >= 80 && $absen >= 85) {
    echo "Nilai Kamu A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Kamu B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Kamu C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Kamu D" . PHP_EOL;
} else {
    echo "Nilai Kamu E" . PHP_EOL;
}

if ($nilai >= 80 && $absen >= 85) :
    echo "Nilai Kamu A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
    echo "Nilai Kamu B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
    echo "Nilai Kamu C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
    echo "Nilai Kamu D" . PHP_EOL;
else :
    echo "Nilai Kamu E" . PHP_EOL;
endif;
