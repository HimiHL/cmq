<?php

namespace Cmq\Exception;
use Cmq\Exception\CMQExceptionBase;

class CMQClientException extends CMQExceptionBase
{
    public function __construct($message, $code=-1, $data=array())
    {
        parent::__construct($message, $code, $data);
    }

    public function __toString()
    {
        return "CMQClientException  " .  $this->get_info();
    }
}