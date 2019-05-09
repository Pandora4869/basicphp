<?php
// สร้างตัวแปล
$size = "S";
// ใช้คำสั่ง strtolower คือเป็นการเปลี่ยนตัวใหญ่ไปเป็นตัวเล็ก
// ตัวอย่างการใช้คำสั่ง switch case สำหรับตัวเลือกหลายๆอย่าง
switch (strtolower($size))
{
    case "s";
        echo "small size";
        break;
    case "m";
        echo "medium size";
        break;
    case "l";
        echo "large size";
        break;
    default;
        echo "unkonw size";
        break;

}
