<?php
// 1. Defining Constants
define("TAX_RATE", 0.15); // 15% fixed sales tax
define("DATABASE_URL", "https://mywebsite.com");

// 2. Using Constants in Code
$product_price = 100; // Product ki basic price
$tax_amount = $product_price * TAX_RATE; // Tax calculate kiya
$total_price = $product_price + $tax_amount;

echo "Total Price with Tax is: " . $total_price;

// Agar aap isko change karne ki koshish karenge toh ERROR aayega:
// TAX_RATE = 0.20; // Error! Constant change nahi ho sakta.
