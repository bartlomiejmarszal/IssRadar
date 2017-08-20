<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 18/08/2017
 * Time: 22:25
 */

namespace IssLocalizator\ApiClient;

use IssRadar\ApiClient\IssApiClient;
use PHPUnit\Framework\TestCase;

class IssApiClientTest extends TestCase
{
    public function test_get_response_return_response()
    {
        //Prepare
        $issApiClient = new IssApiClient();
        //Act
        $response = $issApiClient->getResponse();
        //Assert
        $this->assertEquals('iss', $response->getResultDecoded()->name);
    }

}
