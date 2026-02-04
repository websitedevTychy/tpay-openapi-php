<?php

namespace Tpay\OpenApi\Api\Transactions;

use Tpay\OpenApi\Api\ApiAction;
use Tpay\OpenApi\Model\Objects\RequestBody\AliasType;

class TransactionsApi extends ApiAction
{
    /**
     * @param string $token
     * @param string $type
     */
    public function getAlias($token, $type = 'PAYID')
    {
        $requestUrl = $this->addQueryFields(sprintf('/blik/alias/%s', $token), ['aliasType' => $type]);

        return $this->run(static::GET, $requestUrl);
    }

    /**
     * @param string $token
     * @param string $type
     */
    public function deleteAlias($token, $type = 'PAYID')
    {
        $requestUrl = sprintf('/blik/alias/%s', $token);

        return $this->run(static::DELETE, $requestUrl, ['aliasType' => $type], new AliasType());
    }
}
