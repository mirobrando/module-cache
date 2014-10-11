<?php

namespace mirolabs\phalcon\modules\cache\services;

use Phalcon\Cache\Frontend\Data;
use Phalcon\Cache\Frontend\Output;

class FrontendFactory
{
    public function getData($lifeTime)
    {
        return new Data(['lifetime' => $lifeTime]);
    }

    public function getOutput($lifeTime)
    {
        return new Output(['lifetime' => $lifeTime]);
    }

}