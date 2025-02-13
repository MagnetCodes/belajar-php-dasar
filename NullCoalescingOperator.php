<?php

// cara lamabt

$data = [
    "action" => "Create"
];

// if (isset($data["action"])) {
//     $action = $data["action"];
// } else {
//     $action = "Nothing";
// }

// cara cepat

$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;
