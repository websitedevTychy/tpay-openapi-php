<?php

namespace Tpay\OpenApi\Api\Tokens;

use Tpay\OpenApi\Api\ApiAction;
use Tpay\OpenApi\Model\Objects\RequestBody\Token;

class TokensApi extends ApiAction
{
    /**
     * @param string $token
     */
    public function createToken($token)
    {
        $requestUrl = sprintf('/tokens');

        return $this->run(static::POST, $requestUrl, [], new Token());
    }

    /**
     * @param string $token
     */
    public function getToken($token)
    {
        $requestUrl = $this->addQueryFields(sprintf('/tokens/%s', $token));

        return $this->run(static::GET, $requestUrl);
    }

    /**
     * @param string $token
     */
    public function deleteToken($token)
    {
        $requestUrl = sprintf('/tokens/%s', $token);

        return $this->run(static::DELETE, $requestUrl);
    }
}
