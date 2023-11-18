<?php
// 1
echo "1. Write a program to count 5 to 15 using PHP loop";
for ($i = 5; $i <= 15; $i++) {
    echo $i . "<br>";
}

// 2
echo "<br> 2. Write a factorial program using for loop in php";
function factorial($n)
{
    if ($n < 2) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo "<br>" . factorial(5) . "<br>";

// 3
echo "<br> 3. Write a PHP program to print alphabet pattern 'P'.<br>";
//  ****
//  *   *
//  *   *
//  ****
//  *
//  *
//  *

$r = 7;
$c = 7;

for ($i = 0; $i < $r; $i++) {
    for ($j = 0; $j < $c; $j++) {
        if ($j == 1 || (($i == 0 || $i == 3) && $j > 0 && $j < 5) || (($j == 5 || $j == 1) && ($i == 1 || $i == 2))) {
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "<br>";
}
?>


<table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
    // 4
    echo "<br> 4. Write a program to create Chess board in PHP using for loop";
    for ($i = 1; $i <= 8; $i++) {
        echo "<tr>";
        $j = 1;
        while ($j <= 8) {
            $total = $i + $j;
            if ($total % 2 == 0) {
                echo "<td height=40px width=40px bgcolor=#fff></td>";
            } else {
                echo "<td height=40px width=40px bgcolor=#000></td>";
            }

            $j++;
        }
        echo "</tr>";
    }

    ?>
</table>

<table width="400px" cellspacing="0px" cellpadding="3px" border="1px">
    <?php

    // 5
    echo "<br> 5. Write a PHP script that creates the following table using for loops. Add cellpadding=3px and cellspacing=0px to the table tag.";

    for ($row = 1; $row <= 6; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 5; $col++) {
            $total = $row * $col;
            echo "<td>";
            echo "$row * $col = $total";
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>