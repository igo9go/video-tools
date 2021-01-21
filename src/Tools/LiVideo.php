<?php
declare (strict_types=1);

namespace dobest2048\VideoTools\Tools;
/**
 * Created By 1
 * Author：dobest2048
 * Email：dobest20480098@gmail.com
 * Date：2020/4/26 - 21:57
 **/

use dobest2048\VideoTools\Interfaces\IVideo;

class LiVideo extends Base implements IVideo
{

    /**
     * 更新时间：2020/10/25
     * @param string $url
     * @return array
     */
    public function start(string $url): array
    {
        $this->make();
        $this->logic->setOriginalUrl($url);
        $this->logic->checkUrlHasTrue();
        $this->logic->setVideoId();
        $this->logic->setContents();
        return $this->exportData();
    }
}