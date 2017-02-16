<?php

function doSomething() {

    echo "<h1>Something</h1>";
}

doSomething();
doSomething();

// Would print to screen twice

function doSomethingWith($name) {
    echo "Hello " . $name . "<br>";
}

doSomethingWith("Bill");
$myName
doSomethingWith($myName);

// Hello Chris
// Hello John

function doSomethingAndReturn($name) {
    return "Hello " . $name;
}

doSomethingAndReturn("Chris");

// Does not echo!!!

$result = doSomethingAndReturn("Chris");
echo $result;



?>