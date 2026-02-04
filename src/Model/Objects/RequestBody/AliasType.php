<?php

namespace Tpay\OpenApi\Model\Objects\RequestBody;

use Tpay\OpenApi\Model\Fields\Alias\AliasType as AliasTypeField;
use Tpay\OpenApi\Model\Objects\Objects;

class AliasType extends Objects
{
    const OBJECT_FIELDS = [
        'aliasType' => AliasTypeField::class,
    ];

    /** @var AliasTypeField */
    public $aliasType;

    public function getRequiredFields()
    {
        return [
            $this->aliasType,
        ];
    }
}
