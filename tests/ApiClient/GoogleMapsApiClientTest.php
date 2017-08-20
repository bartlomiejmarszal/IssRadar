<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 20/08/2017
 * Time: 12:32
 */

namespace IssRadar\ApiClient;

use IssRadar\DAO\CurlResponseDAO;
use PHPUnit\Framework\TestCase;

class GoogleMapsApiClientTest extends TestCase
{
    public function test_getResponse_return_curlResponseDAO()
    {
        //Prepare
        $googleApiClient = new GoogleMapsApiClient();
        //Act
        $response = $googleApiClient->getResponse();
        //Assert
        $this->assertInstanceOf(CurlResponseDAO::class, $response);
    }
}