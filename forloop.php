<?php
//ใช้คำสั่ง for loop เพื่อให้แสดงผลตามจำนวนที่เราต้องการ
for ($a = 1; $a <= 100; $a++)
{
    if ($a % 2 == 1)
    {
        echo $a . "<font color=red>Hello PHP</font><br>";

    }
    else
    {
        echo $a . "Hello PHP<br>";
    }

}
