<?php

require 'vendor/autoload.php';

if(empty($_GET['page'])) {
    (new \App\Controller\HomeController())();
}

if(!empty($_GET)) {
    if($_GET['page'] == 'mentions-legales') {
        (new \App\Controller\HomeController())();
    }
}

