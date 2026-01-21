<?php

/*

- Data types
PHP supports the following data types:

string (text values)
int (whole numbers)
float (decimal numbers)
bool (true or false)
array (multiple values)
object (stores data as objects)
null (empty variable)
resource (references external resources)

To get the data type and the value of a variable, use the var_dump() function.

---------------------------------------------------------------------------------

- Variables
Rules for PHP variables:

A variable must start with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)


*/


$firstName = "Christian Jay";
$lastName = "Mandani";
$fullName = $firstName . " " . $lastName;

echo "My name is {$firstName} {$lastName}";
echo "My name is {$fullName}";



?>