<?php

/**
 * PostFinance Checkout Shopware
 *
 * This Shopware extension enables to process payments with PostFinance Checkout (https://www.postfinance.ch/checkout/).
 *
 * @package PostFinanceCheckout_Payment
 * @author customweb GmbH (http://www.customweb.com/)
 * @license http://www.apache.org/licenses/LICENSE-2.0  Apache Software License (ASL 2.0)
 */

namespace PostFinanceCheckoutPayment\Components\Webhook;

class Entity
{
    private $id;

    private $name;

    private $states;

    private $notifyEveryChange;

    public function __construct($id, $name, array $states, $notifyEveryChange = false)
    {
        $this->id = $id;
        $this->name = $name;
        $this->states = $states;
        $this->notifyEveryChange = $notifyEveryChange;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStates()
    {
        return $this->states;
    }

    public function isNotifyEveryChange()
    {
        return $this->notifyEveryChange;
    }
}
