<?php

namespace DivineOmega\CachetPHP\Objects;

class Subscriber
{
    private $cachetInstance = null;

    public function __construct($cachetInstance, $row)
    {
        $this->cachetInstance = $cachetInstance;

        foreach ($row as $key => $value) {
            $this->$key = $value;
        }
    }

    public function delete()
    {
        $cachetInstance->guzzleClient->delete('subscribers/'.$this->id, ['headers' => $cachetInstance->getAuthHeaders()]);
    }
}
