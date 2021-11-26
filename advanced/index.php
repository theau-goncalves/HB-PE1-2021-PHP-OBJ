<?php

require 'vendor/autoload.php';
use App\Post;


$post = new Post("Les iterfaces c'est cool");
$post->setContent('Vraiment je vous assure');

dump($post);

echo $post->getMetaTitle();
echo '<hr>';
echo $post->getMetaDescription();

