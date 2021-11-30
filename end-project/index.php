<?php

require 'vendor/autoload.php';

if (empty($_GET['page'])) {
    (new \App\Controller\HomeController())();
} else {
    if ($_GET['page'] == 'mentions-legales') {
        (new \App\Controller\LegalNoticeController())();
    } elseif ($_GET['page'] == 'space-x-members-list') {
        (new \App\Controller\spaceX\Member\CrewMemberIndexController())();
    } elseif ($_GET['page'] == 'space-x-member-show') {
        if (!empty($_GET['id'])) {
            (new \App\Controller\spaceX\Member\CrewMemberShowController($_GET['id']))();
        } else {
            (new \App\Controller\NotFoundController())();
        }
    } elseif ($_GET['page'] == 'space-x-landpad-list') {
        (new \App\Controller\spaceX\Landpad\LandpadIndexController())();
    } elseif ($_GET['page'] == 'space-x-landpad-show') {
        if (!empty($_GET['id'])) {
            (new \App\Controller\spaceX\Landpad\LandpadShowController($_GET['id']))();
        } else {
            (new \App\Controller\NotFoundController())();
        }
    } else {
        (new \App\Controller\NotFoundController())();
    }
}



