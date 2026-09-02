<?php

declare(strict_types=1);

function calculateDiscount(float $price, float $discountPercentage): float
{
    // calculate and return the discounted price
    $discountAmount = $price * $discountPercentage / 100;
    return $discountAmount;
}

$finalPrice = calculateDiscount(1000, 20);

echo "Final price: " . $finalPrice . "\n";