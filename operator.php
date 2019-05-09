<?php
$name         = "Satawat Naowarat";
$age          = "26";
$Weight       = "75";
$normal_price = "299";
$sale_price   = 299.00;

echo "<pre>";
var_dump($name, $age, $Weight);

echo "<pre>";
var_dump($normal_price == $sale_price); //เปรียบเทียบ 2 ค่า ใช้ == ไม่สนใจชนิดของตัวแปร
var_dump($normal_price === $sale_price); //เปรียบเทียบ 2 ค่า ใช้ === สนใจชนิดของตัวแปร
var_dump($normal_price != $sale_price); //เปรียบเทียบ 2 ค่า
