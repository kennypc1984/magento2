<?php declare(strict_types=1);

namespace Vendor\ModuleName\Api;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface ClientInterface
{
    public function doRequest(RequestInterface $request): ResponseInterface;
}
