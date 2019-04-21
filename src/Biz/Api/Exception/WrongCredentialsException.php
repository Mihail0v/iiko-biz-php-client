<?php

namespace Iiko\Biz\Api\Exception;

use Exception;

class WrongCredentialsException extends Exception
{
    public function __construct()
    {
        parent::__construct('Wrong credentials');
    }
}
