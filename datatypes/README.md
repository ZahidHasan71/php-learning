<p align="center" style="font-size:40px; font-weight:bold;">
    <br/>
    <br/>
    <a href="#" target="_blank">
        <img src="../logo.png">
    </a>
    <br/> 
    <br/> 
</p>
<br/>

## PHP Data Types

Variables can store data of different types, and different data types can do different things. PHP is a dynamically typed language. , which means that by default there is no need to specify the type of a variable, as this will be determined at runtime.

### PHP supports the following data types:

1. String
2. Integer
3. Float (floating point numbers - also called double)
4. Boolean
5. Array
6. Object
7. NULL
8. Resource
9. callable

## Details of Datatype

### 1. PHP String
A string is a sequence of characters, like "Hello world!". string can be any text inside quotes. You can use single or double quotes.

    Exemple: "Hello World!" / 'Hello World!'

### 2. PHP Integer
Integer means numeric data with a negative or positive sign. An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647. If any number or single digit is increased or decreased then it will be converted  integer number to a floating number.

##### Rules for integers:

1. An integer must have at least one digit
2. An integer must not have a decimal point
3. An integer can be either positive or negative
4. Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation.

In the following example $x is an integer. The PHP var_dump() function returns the data type and value: 

    Example:
            <?php
            $x = 5985;
            var_dump($x); //output is int(5985)
            ?>

### 3. PHP Float
A floating-point number is a number with a decimal point. Unlike integer, it can hold numbers with a fractional or decimal point, including a negative or positive sign.

    Example:
            <?php   
            $n1 = 19.34;  
            $n2 = 54.472;  
            $sum = $n1 + $n2;  
            echo "Addition of floating numbers: " .$sum;  
            ?> 

### 3. PHP Boolean
A Boolean represents two possible states: TRUE or FALSE. Booleans are often used in conditional testing. It holds only two values: TRUE (1) or FALSE (0).it is the simplest data type works like switch. 

    Example:
            <?php   
                $x = true;
                $y = false; 
            ?>
## Refrences 
    1. php.net
    2. w3school
    3. StackOverflow 

##
Tutorial By [Zahid Hasan](https://github.com/ZahidHasan71)