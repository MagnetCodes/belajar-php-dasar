<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Deden", "iboy", "Sutisna"];
var_dump($names);

// melihat isi array sesuai index
var_dump($names[0]);

// mengubah data array
$names[0] = "Santosa";
var_dump($names);

// menghapus data array
unset($names[1]);
var_dump($names);

// menambahkan data array
$names[] = "Junet";
var_dump($names);

// menghitung jumlah data array
var_dump(count($names));

// array map dan dalam array
$data = array(
    "id" => "Deden",
    "name" => "Iboy",
    "age" => 30,
    "address" => array(
        "city" => "Bekasi",
        "country" => "Indonesia"
    )
);
var_dump($data);

var_dump(($data["name"]));
var_dump($data["address"]["country"]);

// contoh 2 array map dan dalam array
$nama_orang = [
    "id" => "Deden",
    "name" => "Sutisna Santosa",
    "age" => 23,
    "address" => [
        "city" => "Bekasi",
        "country" => "Indonesia"
    ]
];

var_dump($nama_orang);
var_dump($nama_orang["name"]);
var_dump($nama_orang["address"]["country"]);
