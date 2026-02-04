<?php

namespace Tpay\OpenApi\Model\Fields\Payer;

use Tpay\OpenApi\Model\Fields\Field;

/**
 * @method getValue(): string
 */
class SkipSendingEmails extends Field
{
    protected $name = __CLASS__;
    protected $type = self::BOOLEAN;
}
