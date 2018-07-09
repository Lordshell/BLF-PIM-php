<?php
/*
 * AKKBLFPIM23Lib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace AKKBLFPIM23Lib\Tests;

use AKKBLFPIM23Lib\APIException;
use AKKBLFPIM23Lib\Exceptions;
use AKKBLFPIM23Lib\APIHelper;
use AKKBLFPIM23Lib\Models;

class AttributeOptionControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \AKKBLFPIM23Lib\Controllers\AttributeOptionController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass()
    {
        $client = new \AKKBLFPIM23Lib\AKKBLFPIM23Client();
        self::$controller = $client->getAttributeOption();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Assuming that the given codes are respectively the code of an existing attribute and an existing option of this attribute
     */
    public function testAttributeOption()
    {

        // Set callback and perform API call
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            self::$controller->getAttributeOption();
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * TODO: Add Description
     */
    public function testAttributeOptions()
    {

        // Set callback and perform API call
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            self::$controller->getAttributeOptions();
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }
}
