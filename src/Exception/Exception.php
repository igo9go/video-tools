<?php
declare (strict_types=1);

namespace dobest2048\VideoTools\Exception;

use Throwable;

/**
 * Created By 1
 * Author：dobest2048
 * Email：dobest20480098@gmail.com
 * Date：2020/4/26 - 22:26
 **/
class Exception extends \Exception
{


    const INVALID_MANAGER_CODE = 550;
    const ERROR_VIDEO_CODE = 551;

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}