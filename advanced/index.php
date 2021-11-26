<?php

require 'vendor/autoload.php';
use App\Post;
use App\Config;
use App\Portfolio;


$post = new Post("Les iterfaces c'est cool");



//echo $post->getMetaTitle();
//echo '<hr>';
//echo $post->getMetaDescription();

$config = new Config();

$config->setMode(Config::MODE_PROD);

$config['admin_email'] = 'theau@drosalys.fr';

$portfolio = new Portfolio();

//Ecriture simple
$r = new ReflectionClass(Portfolio::class);
dump($r->getProperties());

//Ecriture compacte
dump((new ReflectionClass(Portfolio::class))->getProperties());

dump((new Post("coucou c'est théau"))->getTitle());