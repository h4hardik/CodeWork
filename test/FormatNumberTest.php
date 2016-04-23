<?php
require_once dirname(__FILE__) . '/../FormatNumber.php';

/**
 * Class FormatNumberTest
 */
class FormatNumberTest extends PHPUnit_Framework_TestCase
{
    /**
     *  Test Format the phone number function
     */
    public function testformatPhoneNumber()
    {
        $expectedResult = '(805)478-9580';
        $phoneNumber = '8054789580';
        $objNumber = new FormatNumber();
        $result = $objNumber->formatPhoneNumber($phoneNumber);
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * Test if string in invalid
     */
    public function testInvalidPhonenumber()
    {
        $phoneNumber = '80547895';
        $expectedResult = 'Invalid Phone-Numebr , it must be 10 digit';
        $objNumber = new FormatNumber();
        $result = $objNumber->formatPhoneNumber($phoneNumber);
        $this->assertEquals($expectedResult, $result);
    }
}