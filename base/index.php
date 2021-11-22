<?php
function dump($var)
{
    echo "<pre>" . var_export($var, true) . "</pre>";
}

include 'User.php';

$me = new User();

echo $me->firstName . '<br>';

$me->setAge();
echo $me->getAge();


//dump($me);