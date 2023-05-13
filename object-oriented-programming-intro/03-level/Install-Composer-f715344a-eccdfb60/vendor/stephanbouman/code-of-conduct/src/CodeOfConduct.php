<?php

namespace Stephanbouman\CodeOfConduct;

class CodeOfConduct
{
    protected array $codeOfConduct = [];

    public function __construct()
    {
        $this->codeOfConduct = $this->parseCodeOfConduct();
    }

    public function getRule()
    {
        return $this->codeOfConduct[array_rand($this->codeOfConduct)];
    }

    private function parseCodeOfConduct()
    {
        return json_decode(file_get_contents(__DIR__.'/../CodeOfConductRules.json'));
    }
}
