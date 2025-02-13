<?php

$nilai = "A";

switch ($nilai) {
    case 'A':
        echo "Selamat Kamu lulus dengan baik" . PHP_EOL;
        break;
    case 'B':
    case 'C':
        echo "Selamat Kamu lulus" . PHP_EOL;
        break;
    case 'D':
        echo "Kamu tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin kamu salah jurusan" . PHP_EOL;
        break;
}

switch ($nilai):
    case 'A':
        echo "Selamat Kamu lulus dengan baik";
        break;
    case 'B':
    case 'C':
        echo "Selamat Kamu lulus";
        break;
    case 'D':
        echo "Kamu tidak lulus";
        break;
    default:
        echo "Mungkin kamu salah jurusan";
        break;
endswitch;
