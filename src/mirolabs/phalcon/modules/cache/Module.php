<?php

namespace mirolabs\phalcon\modules\cache;


class Module extends \mirolabs\phalcon\Framework\Module
{
    public function __construct()
    {
        $this->moduleNamespace =  __NAMESPACE__;
        $this->modulePath = __DIR__;
    }
} 