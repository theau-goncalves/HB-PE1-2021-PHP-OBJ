<?php

require 'PaymentStatus.php';

$toto = PaymentStatus::PAYMENT_OK;

$paymentStatus = new PaymentStatus();
$titi = $paymentStatus->paymentOK;


