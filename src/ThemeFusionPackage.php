<?php

declare(strict_types=1);

namespace SzepeViktor\Composer\Envato;

use Composer\Package\Package;
use Composer\Package\Version\VersionParser;

class ThemeFusionPackage extends Package
{
    public const VENDOR_NAME = 'theme-fusion';

    public function __construct(string $slug, string $prettyVersion, string $distUrl)
    {
        $versionParser = new VersionParser();
        parent::__construct(self::VENDOR_NAME . '/' . \strtolower($slug), $versionParser->normalize($prettyVersion), $prettyVersion);

        $this->setType('wordpress-plugin');
        $this->setDistType('zip');
        $this->setDistUrl($distUrl);
    }

    /**
     * @return bool
     */
    public function isAbandoned()
    {
        return false;
    }
}
