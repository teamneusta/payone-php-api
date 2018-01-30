<?php

namespace ArvPayoneApi\Request\Authorization;

use ArvPayoneApi\Request\AuthorizationAbstract;
use ArvPayoneApi\Request\ClearingTypes;
use ArvPayoneApi\Request\Parts\Config;
use ArvPayoneApi\Request\Parts\Customer;
use ArvPayoneApi\Request\Parts\SystemInfo;
use ArvPayoneApi\Request\RequestDataContract;
use ArvPayoneApi\Request\Types;

/**
 * Class Invoice
 */
class Invoice extends AuthorizationAbstract implements RequestDataContract
{
    /**
     * Invoice constructor.
     *
     * @param Config $config
     * @param string $orderId
     * @param int $amount
     * @param string $currency
     * @param Customer $customer
     * @param SystemInfo $info
     */
    public function __construct(Config $config, $orderId, int $amount, $currency, Customer $customer, SystemInfo $info)
    {
        parent::__construct(
            $config,
            $customer,
            Types::AUTHORIZATION,
            ClearingTypes::REC,
            $info,
            $orderId,
            $amount,
            $currency
        );
    }
}
