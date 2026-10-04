//Assignment 1
<br>
<?php

$num1 = 25;
$num2 = 10;
$num3 = 18;

$greatest = $num1;
$smallest = $num1;

// Find greatest
if ($num2 > $greatest) {
    $greatest = $num2;
}

if ($num3 > $greatest) {
    $greatest = $num3;
}

// Find smallest
if ($num2 < $smallest) {
    $smallest = $num2;
}

if ($num3 < $smallest) {
    $smallest = $num3;
}

echo " <h1>Greatest number = " . $greatest . "</h1>";
echo " <h1>Smallest number = " . $smallest . "</h1>";

?>
</br>


//Assignment 2
<br>



<?php
$num = 15;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo " <h1> $num is divisible by both 3 and 5</h1>";
} elseif ($num % 3 == 0) {
    echo " <h1> $num is divisible by 3</h1>";
} elseif ($num % 5 == 0) {
    echo " <h1> $num is divisible by 5</h1>";
} else {
    echo " <h1> $num is divisible by neither 3 nor 5</h1>";
}
?>

</br>

//Assignment 3
<br>

<?php
echo " <h1>Odd numbers from 2 to 20:</h1><br>";

for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo " <h1>Even numbers from 35 to 7:</h1><br>";

for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>
</br>


//Assignment 4
<br>


<?php
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}
?>
</br>

//Assignment 5

<br>

<?php
$num = 12345;
$reverse = 0;

while ($num > 0) {
    $digit = $num % 10;
    $reverse = ($reverse * 10) + $digit;
    $num = (int)($num / 10);
}

echo " <h1>Reversed number: $reverse</h1>";
?>
</br>

//Assignment 6
<br>
<?php
$a = 8;
$b = 12;

$max = ($a > $b) ? $a : $b;

while (true) {
    if ($max % $a == 0 && $max % $b == 0) {
        break;
    }
    $max++;
}

echo " <h1>LCM of $a and $b is: $max</h1>";
?>

</br>

//Assignment 7
<br>

<?php
$a = 18;
$b = 24;

$hcf = 1;

for ($i = 1; $i <= $a && $i <= $b; $i++) {
    if ($a % $i == 0 && $b % $i == 0) {
        $hcf = $i;
    }
}

echo " <h1>HCF of $a and $b is: $hcf</h1>";
?>
</br>

//Assignment 8
<br>

<?php

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";

echo "<title>Multiplication Table</title>";

echo "<style>
    table {
        border-collapse: collapse;
        margin: 20px auto;
    }

    th, td {
        border: 1px solid black;
        padding: 6px 10px;
        text-align: center;
    }

    th {
        background-color: #eeeeee;
    }

    h2 {
        text-align: center;
    }
</style>";

echo "</head>";
echo "<body>";

echo "<h2>Multiplication Table</h2>";

echo "<table>";

for ($i = 1; $i <= 12; $i++) {

    echo "<tr>";

    for ($j = 1; $j <= 12; $j++) {

        echo "<td>" . ($i * $j) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";

echo "</body>";
echo "</html>";

?>  
</br>


//Assignment 9
<br>

<?php

$num = 17;
$isPrime = true;

if ($num <= 1) {
    $isPrime = false;
}

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $isPrime = false;
        break;
    }
}

if ($isPrime) {
    echo " <h1> $num is a prime number.</h1>";
} else {
    echo " <h1> $num is a non-prime number.</h1>";
}

?>
</br>

//Assignment 10
<br>


<?php

echo " <h1>Prime numbers from 10 to 50:</h1><br>";

for ($num = 10; $num <= 50; $num++) {

    $isPrime = true;

    for ($i = 2; $i < $num; $i++) {

        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo " <h1>" . $num . "</h1> ";
    }
}

?>
</br>