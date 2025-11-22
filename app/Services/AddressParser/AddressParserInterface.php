<?php

namespace App\Services\AddressParser;

interface AddressParserInterface
{
    public function parse(string $address) : array;
}
