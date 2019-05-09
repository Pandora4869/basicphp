<?php
$score = 200;

if ($score >= 80 && $score <= 100)
{
    echo "Grade A";
}
elseif ($score >= 60 && $score <= 79)
{
    echo "Grade B";
}
elseif ($score >= 50 && $score <= 59)
{
    echo "Grade C";
}
elseif ($score >= 40 && $score <= 49)
{
    echo "Grade D";
}
elseif ($score > 100 || $score < 0)
{
    echo "Invalid";
}
else
{
    echo "Grade F";
}
