<?php

$age = 20;

if ($age >= 18) {
    echo "Adult" . PHP_EOL;
} else {
    echo "Minor" . PHP_EOL;
}
$user = [
    "name" => "Mery",
    "age" => 20,
    "role" => "Developer",
];
foreach ($user as $key => $value) {
    echo "$key: $value" . PHP_EOL;
}