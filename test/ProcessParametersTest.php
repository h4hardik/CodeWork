<?php
require_once dirname(__FILE__) . '/../ProcessParameters.php';

/**
 * Class ProcessParametersTest
 */
class ProcessParametersTest extends PHPUnit_Framework_TestCase
{
    /**
     *  Test Merge URL
     */
    public function testMergeUrl()
    {
        $url1 = 'test.php?id=1&test=2';
        $url2 = 'yahoo.com?number=112&string=teststr';
        $objNumber = new ProcessParameters();
        $result = $objNumber->mergeUrlParameters($url1,$url2);
        $this->assertNotCount(0, $result);
        $this->assertArrayHasKey('number', $result);
        $this->assertArrayHasKey('string', $result);
        $this->assertArrayHasKey('id', $result);
        $this->assertArrayHasKey('test', $result);
    }
}