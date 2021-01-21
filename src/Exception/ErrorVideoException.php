<?php
declare (strict_types=1);

namespace dobest2048\VideoTools\Exception;

/**
 * Created By 1
 * Author：dobest2048
 * Email：dobest20480098@gmail.com
 * Date：2020/4/26 - 22:39
 **/
class ErrorVideoException extends Exception
{

    public function __construct($message = "")
    {
        parent::__construct("ErrorVideo : " . $message, self::ERROR_VIDEO_CODE, null);
    }

}