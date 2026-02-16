<?php

namespace Tpay\OpenApi\Model\Fields\CardToken;

use Tpay\OpenApi\Model\Fields\Field;

/**
 * @method getValue(): string
 */
class RedirectUrl extends Field
{
    protected $name = __CLASS__;
    protected $type = self::STRING;
}
