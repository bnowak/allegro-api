<?php

namespace Ircykk\AllegroApi\Rest;

/**
 * Class Order.
 *
 * @package Ircykk\AllegroApi\Rest
 */
class Order extends AbstractRestResource
{
    /**
     * @return Order\Events
     */
    public function events()
    {
        return new Order\Events($this->client);
    }
}