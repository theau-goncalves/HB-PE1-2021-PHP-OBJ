<?php

require 'vendor/autoload.php';
use App\Post;
use App\Config;


$post = new Post("Les iterfaces c'est cool");
$post->setContent('Vraiment je vous assure');


//echo $post->getMetaTitle();
//echo '<hr>';
//echo $post->getMetaDescription();

$config = new Config();

$config->setMode(Config::MODE_PROD);

$config['admin_email'] = 'theau@drosalys.fr';

dump($config->getParams());