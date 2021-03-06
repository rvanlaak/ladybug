<?php

namespace Ladybug\Tests\Type;

use Ladybug\Type;

class NullTypeTest extends \PHPUnit_Framework_TestCase
{

    /** @var Type\NullType $type */
    protected $type;

    public function setUp()
    {
        $this->type = new Type\NullType();
    }

    public function testLoaderForValidValues()
    {
        $var = null;

        $this->type->load($var);
        $this->assertNull($this->type->getValue());
        $this->assertEquals('null', $this->type->getFormattedValue());
    }

    public function testLoaderForOtherType()
    {
        $this->setExpectedException('Ladybug\Type\Exception\InvalidVariableTypeException');

        $var = 'test';

        $this->type->load($var);
    }

}
