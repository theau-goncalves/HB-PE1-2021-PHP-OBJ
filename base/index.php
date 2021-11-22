<?php

include 'User.php';

$me = new User();

echo $me->firstName . '<br>';

$me->setAge();
echo $me->getAge();


//dump($me);