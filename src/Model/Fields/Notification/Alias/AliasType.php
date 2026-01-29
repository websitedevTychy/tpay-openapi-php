<?php

namespace Tpay\OpenApi\Model\Fields\Notification\Alias;

use Tpay\OpenApi\Model\Fields\Field;

class AliasType extends Field
{
    protected $name = 'type';
    protected $type = self::STRING;
    protected $enum = ['PAYID', 'UID'];
}
