<?php
declare (strict_types=1);

namespace dobest2048\VideoTools\Exception;


/**
 * Created By 1
 * Author：dobest2048
 * Email：dobest20480098@gmail.com
 * Date：2020/4/26 - 22:25
 **/
class InvalidManagerException extends Exception
{

    public function __construct($message = "")
    {
        parent::__construct("InvalidManager : " . $message, self::INVALID_MANAGER_CODE, null);
    }

}