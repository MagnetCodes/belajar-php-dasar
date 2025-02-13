<?php
// manual
$names = ["Deden", "Sutisna", "Santosa"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

// foreach

// tidak perlu index
foreach ($names as $name) {
    echo "Data = $name" . PHP_EOL;
}

// butuh index
foreach ($names as $a => $name) {
    echo "Data ke $a = $name" . PHP_EOL;
}

// contoh lain
$person = [
    "first_name" => "Sutisna",
    "middle_name" => "Deden",
    "last_name" => "Santosa"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
