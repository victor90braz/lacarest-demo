<?php

$storeData = [
    "categories" => [
        "electronics" => "Electronics",
        "clothing" => "Clothing",
        "home_appliances" => "Home Appliances",
        "sports_outdoors" => "Sports & Outdoors",
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
            "category" => "home_appliances",
            "price" => 799.99,
            "description" => "Large capacity refrigerator for your kitchen.",
        ],
        [
            "id" => 5,
            "name" => "Running Shoes",
            "category" => "sports_outdoors",
            "price" => 59.99,
            "description" => "High-quality running shoes for athletes.",
        ],
    ],
    "users" => [
        [
            "id" => 1,
            "username" => "user123",
            "email" => "user123@example.com",
            "password" => "hashed_password_here", // Password should be hashed in a real system
            "name" => "John Doe",
            "address" => "123 Main St",
            "city" => "Anytown",
            "country" => "USA",
        ],
        [
            "id" => 2,
            "username" => "jane_doe",
            "email" => "jane_doe@example.com",
            "password" => "hashed_password_here",
            "name" => "Jane Doe",
            "address" => "456 Elm St",
            "city" => "Another City",
            "country" => "Canada",
        ],
    ],
    "orderData" => [
        [
            "order_id" => 101,
            "user_id" => 1,
            "products" => [
                ["product_id" => 1, "quantity" => 2],
                ["product_id" => 3, "quantity" => 1],
            ],
            "total_price" => 539.97,
            "order_date" => "2023-09-10",
        ],
        [
            "order_id" => 102,
            "user_id" => 2,
            "products" => [
                ["product_id" => 2, "quantity" => 1],
                ["product_id" => 4, "quantity" => 1],
            ],
            "total_price" => 1699.98,
            "order_date" => "2023-09-11",
        ],
    ]
];

return $storeData;