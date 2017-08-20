<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 19/08/2017
 * Time: 01:31
 */

namespace IssRadar\Helper;

use IssRadar\DAO\CurlResponseDAO;
use PHPUnit\Framework\TestCase;

class curlWrapperTest extends TestCase
{
    public function test_is_wraper_return_string()
    {
        //Prepare
        $curlWrapper = new CurlWrapper();
        //Act
        $response = $curlWrapper->getResponseFromCurl("example.com");
        //Assert

        $this->assertInstanceOf(CurlResponseDAO::class, $response);
    }
}
