<?php

/**
 * Moneris Fetch Charge Request.
 */
namespace Omnipay\Moneris\Message;

/**
 * Moneris Fetch Charge Request.
 *
 * @link https://stripe.com/docs/api#retrieve_charge
 */
class FetchChargeRequest extends AbstractRequest
{
    /**
     * Get the charge reference.
     *
     * @return string
     */
    public function getChargeReference()
    {
        return $this->getParameter('chargeReference');
    }

    /**
     * Set the charge reference.
     *
     * @param string
     * @return FetchChargeRequest provides a fluent interface.
     */
    public function setChargeReference($value)
    {
        return $this->setParameter('chargeReference', $value);
    }

    public function getData()
    {
        $this->validate('chargeReference');
    }

    public function getEndpoint()
    {
        return $this->endpoint.'/charges/'.$this->getChargeReference();
    }

    public function getHttpMethod()
    {
        return 'GET';
    }
}
