<?php

class User
{
    public string $name;
}
$user = new User();


$user ->name = "mery";
//-> is used to access properties and methods belonging to an object.
echo $user -> name ."\n";