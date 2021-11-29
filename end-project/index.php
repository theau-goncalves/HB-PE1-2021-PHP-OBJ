<?php

require 'vendor/autoload.php';

if(empty($_GET['page'])) {
    (new \App\Controller\HomeController())();
} else {
    if($_GET['page'] == 'mentions-legales') {
        (new \App\Controller\LegalNoticeController())();
    } else {
        (new \App\Controller\NotFoundController())();
    }
}



