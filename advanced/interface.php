<?php

require 'vendor/autoload.php';

use App\User;

$user = new User('Théau', 'Goncalves');

dump($user->getSlug());