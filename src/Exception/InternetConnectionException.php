<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 20/08/2017
 * Time: 13:42
 */

namespace IssRadar\Exception;

use Throwable;

class InternetConnectionException extends \Exception
{
    public function __construct($message = "No Internet connection", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}