<?php

namespace dobest2048\Tests\Tools;

use PHPUnit\Framework\TestCase;
use dobest2048\VideoTools\Enumerates\BiliQualityType;
use dobest2048\VideoTools\VideoManager;

class BiliTest extends TestCase
{

    public function testStart()
    {
        $res = VideoManager::Bili()->setUrl("https://b23.tv/av84665662")->setQuality(BiliQualityType::LEVEL_2)->execution();
        var_dump($res);
    }
}
