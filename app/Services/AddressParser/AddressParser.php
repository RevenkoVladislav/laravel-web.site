<?php

namespace App\Services\AddressParser;

use Dadata\DadataClient;

class AddressParser implements AddressParserInterface
{
    protected DadataClient $dadataClient;
    public function __construct(string $token, string $key)
    {
        $this->dadataClient = new DadataClient($token, $key);
    }

    public function parse(string $address): array
    {
        return $this->dadataClient->clean('address', $address);
    }
}
