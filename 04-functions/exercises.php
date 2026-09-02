<?php

declare(strict_types=1);

function calculateArea(float $width, float $height): float
{
    return $width * $height;
}

$area = calculateArea(10, 5);

echo "Area: " . $area . "\n";