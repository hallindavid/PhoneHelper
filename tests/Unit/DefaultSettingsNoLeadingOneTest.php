<?php

namespace Hallindavid\PhoneHelper\Tests;

use Orchestra\Testbench\TestCase;

class DefaultSettingsNoLeadingOneTest extends TestCase
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
        $this->assertEquals(PhoneHelper::format(''), '');
    }

    public function test_1_digits()
    {
        $this->assertEquals(PhoneHelper::format('2'), '2');
    }

    public function test_2_digits()
    {
        $this->assertEquals(PhoneHelper::format('23'), '23');
    }

    public function test_3_digits()
    {
        $this->assertEquals(PhoneHelper::format('234'), '234');
    }

    public function test_4_digits()
    {
        $this->assertEquals(PhoneHelper::format('2345'), '234-5');
    }

    public function test_5_digits()
    {
        $this->assertEquals(PhoneHelper::format('23456'), '234-56');
    }

    public function test_6_digits()
    {
        $this->assertEquals(PhoneHelper::format('234567'), '234-567');
    }

    public function test_7_digits()
    {
        $this->assertEquals(PhoneHelper::format('2345678'), '234-567-8');
    }

    public function test_8_digits()
    {
        $this->assertEquals(PhoneHelper::format('23456789'), '234-567-89');
    }

    public function test_9_digits()
    {
        $this->assertEquals(PhoneHelper::format('234567891'), '234-567-891');
    }

    public function test_10_digits()
    {
        $this->assertEquals(PhoneHelper::format('2345678912'), '234-567-8912');
    }

    public function test_11_digits()
    {
        $this->assertEquals(PhoneHelper::format('23456789123'), '234-567-8912');
    }

    public function test_12_digits()
    {
        $this->assertEquals(PhoneHelper::format('234567891234'), '234-567-8912');
    }

    public function test_13_digits()
    {
        $this->assertEquals(PhoneHelper::format('2345678912345'), '234-567-8912');
    }

    public function test_14_digits()
    {
        $this->assertEquals(PhoneHelper::format('23456789123456'), '234-567-8912');
    }

    /**
     * Format text into phone number digit partial number, and default settings.
     * @return void
     */
    public function test_corrupt_string()
    {
        $this->assertEquals(PhoneHelper::format('hi there what is going on tooday? I was hoping you could help me with 1 thing today?'), '');
    }
}
