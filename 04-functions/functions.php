<?php

function sayHello($name)
{
    echo "Hello " . $name . "\n";
}

sayHello("Mery");
sayHello("Sarah");
sayHello("John");

function getSkills(){
    return ["mery", 'danu'];
}
$skills = getSkills();
print_r($skills);