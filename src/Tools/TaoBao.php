<?php

namespace dobest2048\VideoTools\Tools;

use dobest2048\VideoTools\Interfaces\IVideo;

/**
 * 努力努力再努力！！！！！
 * Author：dobest2048
 * Github：https://github.com/dobest20480098
 * Email：dobest20480098@gmail.com
 * Date：2020/8/13 - 22:51
 **/
class TaoBao extends Base implements IVideo
{


    public function start(string $url): array
    {
        $this->make();
        $this->logic->setOriginalUrl($url);
        $this->logic->checkUrlHasTrue();
        $this->logic->setContents();
        return $this->exportData();
    }


}