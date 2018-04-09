<?php
use PHPUnit\Framework\TestCase;
class AccessoryTest extends TestCase
{
    private $CI;
    private $accessory;
    
    public function setUp()
    {
        // Load CI instance normally
        $this->CI = &get_instance();
        $this->CI->load->model('Accessory');
        $this->accessory = new Accessory;
    }
    
    public function testValidName()
    {
        $expected = "Justin";
        $this->accessory->setName($expected);
        $this->assertEquals($expected, $this->accessory->getName());
    }
    
    public function testInvalidNameLength()
    {
        $expected = "howcananameisincrediblelengthmorethanthirtyisitenough";
        $this->expectException(Exception::class);
        $this->accessory->setName($expected);
    }
    
    public function testInvalidNameLength()
    {
        $expected = "VafaVafaVafaVafa";
        $this->expectException(Exception::class);
        $this->accessory->setName($expected);
    }
    
    public function testInvalidProfessionalityAbsent()
    {
        $expected = "";
        $this->expectException(Exception::class);
        $this->accessory->setProfessionality($expected);
    }
    
    public function testInvalidWeightNegative()
    {
        $expected = -5;
        $this->expectException(Exception::class);
        $this->accessory->setWeight($expected);
    }
    
    public function testInvalidDamageNonNumeric()
    {
        $expected = "abc";
        $this->expectException(Exception::class);
        $this->accessory->setDamage($expected);
    }
    
      public function testValidWeight()
    {
        $expected = 5;
        $this->accessory->setWeight($expected);
        $this->assertEquals($expected, $this->accessory->getWeight());
    }
    
      public function testInvalidProtection()
    {
        $expected = 20000;
        $this->accessory->setProtection($expected);
        $this->assertEquals($expected, $this->accessory->getProtection());
    }
}