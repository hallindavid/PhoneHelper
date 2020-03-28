<?php

namespace Hallindavid\PhoneHelper\Tests;

use Orchestra\Testbench\TestCase;

class Format10NoLeadingOneTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            \Hallindavid\PhoneHelper\PhoneHelperServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            PhoneHelper::class => \Hallindavid\PhoneHelper\PhoneHelperFacade::class,
        ];
    }

    public function test_0_digits()
    {
        $this->assertEquals('', PhoneHelper::format('', '10'));
    }

    public function test_1_digits()
    {
        $this->assertEquals('2', PhoneHelper::format('2', '10'));
    }

    public function test_2_digits()
    {
        $this->assertEquals('23', PhoneHelper::format('23', '10'));
    }

    public function test_3_digits()
    {
        $this->assertEquals('234', PhoneHelper::format('234', '10'));
    }

    public function test_4_digits()
    {
        $this->assertEquals('2345', PhoneHelper::format('2345', '10'));
    }

    public function test_5_digits()
    {
        $this->assertEquals('23456', PhoneHelper::format('23456', '10'));
    }

    public function test_6_digits()
    {
        $this->assertEquals('234567', PhoneHelper::format('234567', '10'));
    }

    public function test_7_digits()
    {
        $this->assertEquals('2345678', PhoneHelper::format('2345678', '10'));
    }

    public function test_8_digits()
    {
        $this->assertEquals('23456789', PhoneHelper::format('23456789', '10'));
    }

    public function test_9_digits()
    {
        $this->assertEquals('234567891', PhoneHelper::format('234567891', '10'));
    }

    public function test_10_digits()
    {
        $this->assertEquals('2345678912', PhoneHelper::format('2345678912', '10'));
    }

    public function test_11_digits()
    {
        $this->assertEquals('2345678912', PhoneHelper::format('23456789123', '10'));
    }

    public function test_12_digits()
    {
        $this->assertEquals('2345678912', PhoneHelper::format('234567891234', '10'));
    }

    public function test_13_digits()
    {
        $this->assertEquals('2345678912', PhoneHelper::format('2345678912345', '10'));
    }

    public function test_14_digits()
    {
        $this->assertEquals('2345678912', PhoneHelper::format('23456789123456', '10'));
    }
}
