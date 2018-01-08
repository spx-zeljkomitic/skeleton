<?php

namespace App\Decorator;

use Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Routing\RequestContext;

class CDNResolverDecorator extends WebPathResolver
{
    private $cdnHost;

    public function __construct(Filesystem $filesystem, RequestContext $requestContext, $webRootDir, $cachePrefix = 'media/cache', string $cdnBaseUrl = '')
    {
        parent::__construct($filesystem, $requestContext, $webRootDir, $cachePrefix);
        $this->cdnHost = $cdnBaseUrl;
    }

    protected function getBaseUrl(): string
    {
        return $this->cdnHost;
    }
}