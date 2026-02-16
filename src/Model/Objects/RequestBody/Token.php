<?php

namespace Tpay\OpenApi\Model\Objects\RequestBody;

use Tpay\OpenApi\Model\Fields\CardToken\CallbackUrl;
use Tpay\OpenApi\Model\Fields\CardToken\Card;
use Tpay\OpenApi\Model\Objects\Objects;
use Tpay\OpenApi\Model\Objects\Transactions\Payer;
use Tpay\OpenApi\Model\Objects\Transactions\CallbacksPayerUrls;

class Token extends Objects
{
    const OBJECT_FIELDS = [
        'payer' => Payer::class,
        'callbackUrl' => CallbackUrl::class,
        'redirectUrl' => CallbacksPayerUrls::class,
        'card' => Card::class,
    ];


    /** @var Payer */
    public $payer;

    /** @var CallbackUrl */
    public $callbackUrl;

    /** @var RedirectUrl */
    public $redirectUrl;

    /** @var Card */
    public $card;

    public function getRequiredFields()
    {
        return [
            $this->callbackUrl,
            $this->payer,
        ];
    }
}
