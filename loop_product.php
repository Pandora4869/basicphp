<style>
  .product_box{
      float: left;
      width: 200px;
      height: 300px;
      background-color: blue;
      margin: 10px;
  }
.row {
    overflow:hidden;
}


</style>

<?php

for ($a = 1; $a <= 12; $a++)
{
    if ($a % 4 == 1)
    {   //ใช้ div row คร่อมไว้เพื่อแบ่ง row แถว 1 , 5 , 9
        echo "<div class='row'>";

    }
    if ($a % 4 == 0)
    {
        echo "<div class='product_box'>Product", $a, "</div>";
        echo "</div>";
    }
    else
    {
        echo "<div class='product_box'>Product", $a, "</div>";
    }

}
