<h1>Data Types</h1>

<?php
$x = 5985;
var_dump($x);
?>


//An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
 <?php
    $y = -2147483648;
    var_dump($y);
    $y = -2147483649;
    var_dump($y);    //increase one number then it goes on float same as posative number.
 ?>
<h3>Hexadecimal value print system</h3>
<p>// syntex is -  hexdec(hex_string);</p>
<?php
    echo hexdec("1e") . "<br>";
    echo hexdec("c2") . "<br>";
?>

<?php
    echo dechex(12) . "<br>";
    echo dechex(47);
?>