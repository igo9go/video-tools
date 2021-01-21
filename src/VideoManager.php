<?php
declare (strict_types=1);

namespace dobest2048\VideoTools;

use dobest2048\VideoTools\Exception\InvalidManagerException;
use dobest2048\VideoTools\Interfaces\IVideo;
use dobest2048\VideoTools\Tools\Bili;
use dobest2048\VideoTools\Tools\DouYin;
use dobest2048\VideoTools\Tools\HuoShan;
use dobest2048\VideoTools\Tools\KuaiShou;
use dobest2048\VideoTools\Tools\LiVideo;
use dobest2048\VideoTools\Tools\MeiPai;
use dobest2048\VideoTools\Tools\MiaoPai;
use dobest2048\VideoTools\Tools\MoMo;
use dobest2048\VideoTools\Tools\PiPiGaoXiao;
use dobest2048\VideoTools\Tools\PiPiXia;
use dobest2048\VideoTools\Tools\QQVideo;
use dobest2048\VideoTools\Tools\QuanMingGaoXiao;
use dobest2048\VideoTools\Tools\ShuaBao;
use dobest2048\VideoTools\Tools\TaoBao;
use dobest2048\VideoTools\Tools\TouTiao;
use dobest2048\VideoTools\Tools\WeiBo;
use dobest2048\VideoTools\Tools\WeiShi;
use dobest2048\VideoTools\Tools\XiaoKaXiu;
use dobest2048\VideoTools\Tools\XiGua;
use dobest2048\VideoTools\Tools\ZuiYou;

/**
 * Created By 1
 * Author：dobest2048
 * Email：dobest20480098@gmail.com
 * Date：2020/4/26 - 21:51
 **/

/**
 * @method static HuoShan HuoShan(...$params)
 * @method static DouYin DouYin(...$params)
 * @method static KuaiShou KuaiShou(...$params)
 * @method static TouTiao TouTiao(...$params)
 * @method static XiGua XiGua(...$params)
 * @method static WeiShi WeiShi(...$params)
 * @method static PiPiXia PiPiXia(...$params)
 * @method static ZuiYou ZuiYou(...$params)
 * @method static MeiPai MeiPai(...$params)
 * @method static LiVideo LiVideo(...$params)
 * @method static QuanMingGaoXiao QuanMingGaoXiao(...$params)
 * @method static PiPiGaoXiao PiPiGaoXiao(...$params)
 * @method static MoMo MoMo(...$params)
 * @method static ShuaBao ShuaBao(...$params)
 * @method static XiaoKaXiu XiaoKaXiu(...$params)
 * @method static Bili Bili(...$params)
 * @method static WeiBo WeiBo(...$params)
 * @method static MiaoPai MiaoPai(...$params)
 * @method static QQVideo QQVideo(...$params)
 * @method static TaoBao TaoBao(...$params)
 */
class VideoManager
{

    public function __construct()
    {
    }

    /**
     * @param $method
     * @param $params
     * @return mixed
     */
    public static function __callStatic($method, $params)
    {
        $app = new self();
        return $app->create($method, $params);
    }

    /**
     * @param string $method
     * @param array $params
     * @return mixed
     * @throws InvalidManagerException
     */
    private function create(string $method, array $params)
    {
        $className = __NAMESPACE__ . '\\Tools\\' . $method;
        if (!class_exists($className)) {
            throw new InvalidManagerException("the method name does not exist . method : {$method}");
        }
        return $this->make($className, $params);
    }

    /**
     * @param string $className
     * @param array $params
     * @return mixed
     * @throws InvalidManagerException
     */
    private function make(string $className, array $params)
    {
        $app = new $className($params);
        if ($app instanceof IVideo) {
            return $app;
        }
        throw new InvalidManagerException("this method does not integrate IVideo . namespace : {$className}");
    }
}