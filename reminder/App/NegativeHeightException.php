<?php

namespace App;
use Exception;

class NegativeHeightException extends Exception
{
    protected $message = "Height can't be negative !";

}