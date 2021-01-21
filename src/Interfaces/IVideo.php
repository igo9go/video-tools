<?php
declare (strict_types=1);

namespace dobest2048\VideoTools\Interfaces;
/**
 * Created By 1
 * Author：dobest2048
 * Email：dobest20480098@gmail.com
 * Date：2020/4/26 - 21:59
 **/
interface IVideo
{

    /**
     * @param string $url
     * @return array
     */
    public function start(string $url): array;

}