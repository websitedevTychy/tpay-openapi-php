<?php

namespace Tpay\OpenApi\Model\Objects\NotificationBody;

use Tpay\OpenApi\Model\Fields\Notification\Alias\AliasValue;
use Tpay\OpenApi\Model\Fields\Notification\Alias\AliasType; 
use Tpay\OpenApi\Model\Fields\Notification\Alias\AliasExpirationDate;
use Tpay\OpenApi\Model\Objects\Objects;

class AliasRegister extends Objects
{
    const OBJECT_FIELDS = [
        'value' => AliasValue::class,
        'type' => AliasType::class,
        'expirationDate' => AliasExpirationDate::class,
    ];

    /** @var AliasValue */
    public $value;

    /** @var AliasType */
    public $type;

    /** @var AliasExpirationDate */
    public $expirationDate;

    public function getRequiredFields()
    {
        return [
            $this->value,
            $this->type,
        ];
    }
}
