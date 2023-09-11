<?php

$storeData = include 'storeData.php';
$pathImages = [
    "menu" => "public/images/menu.png",
    "logo" => "public/images/logo.png",
    "info" => "public/images/info.png",
];
$menu = "menu";
$title = "privalia shop";
$aboutUs = "about us";
$register = "register";
$logged = false;
$greeting = !$logged ? "Please $register" : "Welcome to $title";

function filterData($dataArray, $filterKey, $filterValue) {
    $filteredData = [];

    foreach ($dataArray as $item) {
        if (isset($item[$filterKey]) && $item[$filterKey] === $filterValue) {
            $filteredData[] = $item;
        }
    }

    return $filteredData;
}

function filterProductsByPrice($products, $key) {
    return array_filter($products, function ($product) use ($key) {
        return ($product[$key] < 25) || ($product[$key] > 60);
    });
}

$filteredUsers = filterData($storeData["users"], "username", "user123");
$filteredPrices = filterProductsByPrice($storeData["products"], "price");

require "index.view.php";

