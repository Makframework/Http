<?php

namespace Makframework\Http;

use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

/**
 * Class Request
 */
class Request extends SymfonyRequest
{
    public static function capture(): Request
    {
        return self::createFromGlobals();
    }

    /**
     * Return PathInfo
     * @return string
     */
    public function getPath(): string
    {
        return $this->getPathInfo();
    }
}