<?php

namespace Stephanbouman\RandomAstley\Tests;

use PHPUnit\Framework\TestCase;
use Stephanbouman\CodeOfConduct\CodeOfConduct;

class CodeOfConductTest extends TestCase
{
    /** @test */
    public function returns_a_random_rule_from_the_code_of_conduct()
    {
        $service = new CodeOfConduct();
        $codeOfConduct = json_decode(file_get_contents(__DIR__.'/../CodeOfConductRules.json'));

        $rule = $service->getRule();

        $this->assertContains($rule, $codeOfConduct);
    }
}
