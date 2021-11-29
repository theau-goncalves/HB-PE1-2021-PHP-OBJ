<?php

require 'vendor/autoload.php';

if(empty($_GET['page'])) {
    (new \App\Controller\HomeController())();
} else {
    if($_GET['page'] == 'mentions-legales') {
        (new \App\Controller\LegalNoticeController())();
    } elseif($_GET['page'] == 'space-x-members-list') {
        (new \App\Controller\spaceX\Member\CrewMemberIndexController())();
    } else {
        (new \App\Controller\NotFoundController())();
    }
}



