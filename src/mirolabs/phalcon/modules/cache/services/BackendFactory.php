<?php

namespace mirolabs\phalcon\modules\cache\services;

use Phalcon\Cache\FrontendInterface;
use Phalcon\Cache\Backend\File;

class BackendFactory
{

    /**
     * @param FrontendInterface $frontend
     * @param string $cacheDir
     *
     * @return File
     */
    public function getFile(FrontendInterface $frontend, $cacheDir)
    {
        return new File($frontend, ['cacheDir' => $cacheDir]);
    }

} 