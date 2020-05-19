<?php
//coded by Syahrul R.
system("clear");
echo "----------------------------\n";
echo "|- Tools name : CalcuSimple|\n";
echo "|- Author     : Syahrul R. |\n";
echo "|- version    : 1.0        |\n";
echo "----------------------------\n";
echo "Support by : https://bocah-programmer.xyz\n";
echo "\nMenu :\n";
echo "1. addtion\n";
echo "2. Subtraction\n";
echo "3. Multiplication\n";
echo "4. Division\n";
echo "5. Modulus\n";
echo "6. Exponential\n";
echo "Input Your Choice : ";
switch(trim(fgets(STDIN)))
{
case 1:
echo "Input number 1 : ";
$b1 = trim(fgets(STDIN));
echo "Input number 2 : ";
$b2 = trim(fgets(STDIN));
$hasil = $b1 + $b2;
echo "------------------\n";
echo "Result : ".$hasil."\n";
echo "------------------\n";
exit();

case 2:
echo "Input number 1 : ";
$b1 = trim(fgets(STDIN));
echo "Input number 2 : ";
$b2 = trim(fgets(STDIN));
$hasil = $b1 - $b2;
echo "---------------\n";
echo "Result : ".$hasil."\n";
echo "---------------\n";
exit();

case 3:
echo "Input number 1 : ";
$b1 = trim(fgets(STDIN));
echo "Input number 2 : ";
$b2 = trim(fgets(STDIN));
$hasil = $b1 * $b2;
echo "----------------\n";
echo "Result : ".$hasil."\n";
echo "----------------\n";
exit();

case 4:
echo "Input number 1 : ";
$b1 = trim(fgets(STDIN));
echo "Input number 2 : ";
$b2 = trim(fgets(STDIN));
$hasil = $b1 / $b2;
echo "----------------\n";
echo "Result  ".$hasil."\n";
echo "----------------\n";
exit();

case 5:
echo "Input number 1 : ";
$b1 = trim(fgets(STDIN));
echo "Input number 2 : ";
$b2 = trim(fgets(STDIN));
$hasil = $b1 % $b2;
echo "----------------\n";
echo "Result : ".$hasil."\n";
echo "----------------\n";
exit();

case 6:
echo "Input number 1 : ";
$b1 = trim(fgets(STDIN));
echo "Input number 2 : ";
$b2 = trim(fgets(STDIN));
$hasil = $b1 ** $b2;
echo "----------------\n";
echo "Result : ".$hasil."\n";
echo "----------------\n";
exit();

default:
echo "Input Not Valid.!\n";
exit();
}
?>
