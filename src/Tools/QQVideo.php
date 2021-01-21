<?php
declare (strict_types=1);

namespace dobest2048\VideoTools\Tools;

use dobest2048\VideoTools\Interfaces\IVideo;

/**
 * Created By 1
 * Author：dobest2048
 * Email：dobest20480098@gmail.com
 * Date：2020/7/17 - 16:11
 **/
class QQVideo extends Base implements IVideo
{


    public function start(string $url): array
    {
        $this->make();
        $this->logic->setOriginalUrl($url);
        $this->logic->checkUrlHasTrue();
        $this->logic->setVid();
        $this->logic->setContents();
        return $this->exportData();
    }

}