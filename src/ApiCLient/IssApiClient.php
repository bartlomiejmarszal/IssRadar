<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 18/08/2017
 * Time: 22:20
 */

namespace IssRadar\ApiClient;

use IssRadar\DAO\CurlResponseDAO;
use IssRadar\Helper\CurlWrapper;

class IssApiClient implements ApiClient
{
    public function getResponse(): CurlResponseDAO
    {
        $url = 'https://api.wheretheiss.at/v1/satellites/25544';
        $curlWrapper = new CurlWrapper();
        $curlResponseDAO = $curlWrapper->getResponseFromCurl($url);
        return $curlResponseDAO;
    }
}