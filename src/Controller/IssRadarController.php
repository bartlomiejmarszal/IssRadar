<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 19/08/2017
 * Time: 11:42
 */

namespace IssRadar\Controller;

use IssRadar\ApiClient\GoogleMapsApiClient;
use IssRadar\DAO\CurlResponseDAO;

/**
 * Class IssRadarController
 * @package IssRadar\Controller
 */
class IssRadarController
{
    /**
     * @return \stdClass
     */
    public function indexAction()
    {
        $googleApiClient = new GoogleMapsApiClient();
        $response = $googleApiClient->getResponse()->getResultDecoded();
        return $response;
    }
}