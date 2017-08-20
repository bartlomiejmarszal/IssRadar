<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 19/08/2017
 * Time: 01:22
 */

namespace IssRadar\ApiClient;

use IssRadar\DAO\CurlResponseDAO;
use IssRadar\Helper\CurlWrapper;
use IssRadar\Helper\ReadConfig;

/**
 * Class GoogleMapsApiClient
 * @package IssRadar\ApiClient
 */
class GoogleMapsApiClient implements ApiClient
{

    /**
     * @var string
     */
    private $urlGoogleMaps = 'https://maps.googleapis.com/maps/api/geocode/json?';


    /**
     * @return CurlResponseDAO
     */
    public function getResponse()
    {
        $curlWrapper = new CurlWrapper();
        $url = $this->prepareUrlForRequest();
        $response = $curlWrapper->getResponseFromCurl($url);
        return $response;
    }

    /**
     * @return string
     */
    private function prepareUrlForRequest()
    {
        $issApiClient = new IssApiClient();
        $config = new ReadConfig();

        $issApiResponse = $issApiClient->getResponse();
        $params = $config->getParameters();

        $resultDecoded = $issApiResponse->getResultDecoded();
        $latlngParams = $resultDecoded->latitude .','. $resultDecoded->longitude;

        $url = $this->urlGoogleMaps . 'latlng=' .$latlngParams . '&key=' . $params['google_api_key'];

        return $url;
    }
}