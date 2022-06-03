<?php

namespace Pimtestcore\RandomBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;

class RandomBundle extends AbstractPimcoreBundle
{
    use PackageVersionTrait;
    const PACKAGE_NAME = 'nemanjavx/random-test';

    public function getJsPaths()
    {
        return [
            '/bundles/random/js/pimcore/startup.js',
            '/bundles/random/js/test/random.js'
        ];
    }

    public function getCssPaths()
    {
        return [
            '/bundles/random/css/main.css'
        ];
    }

    protected function getComposerPackageName(): string
    {
        return self::PACKAGE_NAME;
    }
}
