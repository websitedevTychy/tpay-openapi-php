<?php

namespace Tpay\OpenApi\Model\Objects\Transactions;

use Tpay\OpenApi\Model\Fields\Alias\Key;
use Tpay\OpenApi\Model\Fields\Alias\Label;
use Tpay\OpenApi\Model\Fields\Alias\Type;
use Tpay\OpenApi\Model\Fields\Alias\Value;
use Tpay\OpenApi\Model\Fields\Boolean;
use Tpay\OpenApi\Model\Objects\Objects;
use Tpay\OpenApi\Model\Objects\Transactions\Alias\Autopayment;
use Tpay\OpenApi\Model\Fields\Alias\RecommendedAuthLevel;

class Alias extends Objects
{
    const OBJECT_FIELDS = [
        'value' => Value::class,
        'type' => Type::class,
        'label' => Label::class,
        'key' => Key::class,
        'autopayment' => Autopayment::class,
        'noDelay' => Boolean::class,
        'recommendedAuthLevel' => RecommendedAuthLevel::class,
    ];

    /** @var Value */
    public $value;

    /** @var Type */
    public $type;

    /** @var Label */
    public $label;

    /** @var Key */
    public $key;

    /** @var Autopayment */
    public $autopayment;

    /** @var \Tpay\OpenApi\Model\Fields\Boolean */
    public $noDelay;

    /** @var RecommendedAuthLevel */
    public $recommendedAuthLevel;

    public function getRequiredFields()
    {
        return [
            $this->value,
            $this->type,
        ];
    }
}
