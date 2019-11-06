<?php

namespace CFPP\Shipping\ShippingMethods\Handlers;

use CFPP\Shipping\Payload;
use CFPP\Shipping\ShippingMethods\Handler;

class WC_Shipping_Local_Pickup extends Handler
{
    /**
     * Receives a Request and calculates the shipping
     *
     * @param Payload $payload
     * @return mixed|void
     * @throws \CFPP\Exceptions\ResponseException
     */
    public function calculate(Payload $payload)
    {
        // Additional cost for local pickup?            
        $cost = is_numeric($this->shipping_method->cost) ? $this->shipping_method->cost : 0;
        $days = $this->shipping_method->instance_settings['days'];

        $this->response->setPrice($cost);
        $this->response->setDays($days);
    }
}
