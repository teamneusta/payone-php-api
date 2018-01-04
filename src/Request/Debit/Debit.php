<?php

namespace ArvPayoneApi\Request\Debit;

use ArvPayoneApi\Request\Parts\Config;
use ArvPayoneApi\Request\Parts\SystemInfo;
use ArvPayoneApi\Request\RequestAbstract;
use ArvPayoneApi\Request\RequestDataContract;
use ArvPayoneApi\Request\Types;

class Debit extends RequestAbstract implements RequestDataContract
{
    private $txid;

    /**
     * Capture constructor.
     *
     * @param Config $config
     * @param string $txid
     * @param string $amount
     * @param string $currency
     * @param string $capturemode
     */
    public function __construct(Config $config, $txid, $amount, $currency, SystemInfo $info, $sequencenumber = null)
    {
        parent::__construct(
            $config,
            Types::DEBIT,
            -$amount,
            $currency,
            $info,
            $sequencenumber
        );
        $this->txid = $txid;
    }

    /**
     * Getter for Txid
     *
     * @return string
     */
    public function getTxid()
    {
        return $this->txid;
    }
}