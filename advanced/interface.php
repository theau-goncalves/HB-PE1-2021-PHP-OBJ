<?php

require 'vendor/autoload.php';

use App\User;

$user = new User('Théau', 'Goncalves');

dump($user->getSlug());

$s = new \Cocur\Slugify\Slugify();
echo $s->slugify("J'aime les légumes / fruits");