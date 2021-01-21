<?php
declare (strict_types=1);

namespace dobest2048\VideoTools\Tools;

use dobest2048\VideoTools\Interfaces\IVideo;

/**
 * Created By 1
 * Author：dobest2048
 * Email：dobest20480098@gmail.com
 * Date：2020/4/27 - 14:32
 **/
class TouTiao extends Base implements IVideo
{

    /**
     * 更新时间：2020/7/31
     * @param string $url
     * @return array
     */
    public function start(string $url): array
    {
        $this->make();
        $this->logic->setOriginalUrl($url);
        $this->logic->checkUrlHasTrue();
        $this->logic->setItemId();
        $this->logic->setContents();
        return $this->exportData();
    }

}