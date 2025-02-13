<?php 
// merubah variable menjadi null
$name = "Deden";
$name = null;
$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null ? : ";
var_dump(is_null($name));
echo "\n";

// mengapus variable
$contoh = "deden";
unset($contoh);

$contoh = 10;
var_dump(isset($contoh));

?>