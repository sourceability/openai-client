<?php

declare(strict_types=1);

namespace Sourceability\OpenAIClient\Generated\Authentication;

use Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin;
use Psr\Http\Message\RequestInterface;

class ApiKeyAuthAuthentication implements AuthenticationPlugin
{
    private $token;

    public function __construct(string $token)
    {
        $this->{'token'} = $token;
    }

    public function authentication(RequestInterface $request): RequestInterface
    {
        $header = sprintf('Bearer %s', $this->{'token'});
        $request = $request->withHeader('Authorization', $header);
        return $request;
    }

    public function getScope(): string
    {
        return 'ApiKeyAuth';
    }
}
