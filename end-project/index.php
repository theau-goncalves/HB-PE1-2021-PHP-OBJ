<?php

require 'vendor/autoload.php';

if(empty($_GET['page'])) {
    (new \App\Controller\HomeController())();
} elseif (!empty($_GET) && !empty($_GET['page'])) {
    if($_GET['page'] == 'mentions-legales') {
        (new \App\Controller\LegalNoticeController())();
    } else {
        (new \App\Controller\NotFoundController())();
    }
} 



