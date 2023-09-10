<?php

$storeData = [
    "categories" => [
        "electronics" => "Electronics",
        "clothing" => "Clothing",
        "homeAppliances" => "Home Appliances",
        "sportsOutdoors" => "Sports & Outdoors",
    ],
    "products" => [
        [
            "id" => 1,
            "name" => "Smartphone",
            "category" => "electronics",
            "price" => 499.99,
            "description" => "The latest smartphone with advanced features.",
        ],
        [
            "id" => 2,
            "name" => "Laptop",
            "category" => "electronics",
            "price" => 899.99,
            "description" => "Powerful laptop for work and gaming.",
        ],
        [
            "id" => 3,
            "name" => "T-shirt",
            "category" => "clothing",
            "price" => 19.99,
            "description" => "Comfortable cotton T-shirt in various colors.",
        ],
        [
            "id" => 4,
            "name" => "Refrigerator",
            "category" => "homeAppliances",
            "price" => 799.99,
            "description" => "Large capacity refrigerator for your kitchen.",
        ],
        [
            "id" => 5,
            "name" => "Running Shoes",
            "category" => "sportsOutdoors",
            "price" => 59.99,
            "description" => "High-quality running shoes for athletes.",
        ],
    ],
    "users" => [
        [
            "id" => 1,
            "username" => "user123",
            "email" => "user123@example.com",
            "password" => "hashedPasswordHere", // Password should be hashed in a real system
            "name" => "John Doe",
            "address" => "123 Main St",
            "city" => "Anytown",
            "country" => "USA",
        ],
        [
            "id" => 2,
            "username" => "jane_doe",
            "email" => "jane_doe@example.com",
            "password" => "hashedPasswordHere",
            "name" => "Jane Doe",
            "address" => "456 Elm St",
            "city" => "Another City",
            "country" => "Canada",
        ],
    ],
    "orderData" => [
        [
            "orderId" => 101,
            "userId" => 1,
            "products" => [
                ["productId" => 1, "quantity" => 2],
                ["productId" => 3, "quantity" => 1],
            ],
            "totalPrice" => 539.97,
            "orderDate" => "2023-09-10",
        ],
        [
            "orderId" => 102,
            "userId" => 2,
            "products" => [
                ["productId" => 2, "quantity" => 1],
                ["productId" => 4, "quantity" => 1],
            ],
            "totalPrice" => 1699.98,
            "orderDate" => "2023-09-11",
        ],
    ]
];

return $storeData;