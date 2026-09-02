<?php

declare(strict_types=1);

$student = [
    "name" => "Mery",
    "skills" => [
        "PHP",
        "Laravel",
        "MariaDB"
    ],
    "projects" => 3
];
echo "Name:" . $student["name"].PHP_EOL;
echo "skills:\n" ;
foreach ($student["skills"] as $skill) {
    echo "$skill\n";
};
$projects = count($student["skills"]);
echo "projects: " . $projects . "\n";