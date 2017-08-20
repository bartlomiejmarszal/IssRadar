<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 19/08/2017
 * Time: 01:22
 */

namespace IssRadar\Helper;

use IssRadar\DAO\CurlResponseDAO;
use IssRadar\Exception\InternetConnectionException;

/**
 * Wrap url into curl and return response
 * Class curlWrapper
 * @package IssRadar
 */
class CurlWrapper
{
    /**
     * @param string $url
     * @return CurlResponseDAO
     * @throws \Exception
     */
    public function getResponseFromCurl(string $url): CurlResponseDAO
    {
        if (!$this->is_connected()) {
            throw new InternetConnectionException();
        }
        $curlResponse = new CurlResponseDAO();
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Accept: application/json'
            ]
        ]);
        $curlExecResult = curl_exec($curl);
        $curlInfo = curl_getinfo($curl);
        $curlResponse->setResult($curlExecResult);
        $curlResponse->setHttpCode($curlInfo['http_code']);
        $curlResponse->setUrl($curlInfo['url']);
        $resultDecoded = json_decode($curlResponse->getResult());
        if (!empty($resultDecoded)) {
            $curlResponse->setResultDecoded($resultDecoded);
        }

        return $curlResponse;
    }

    /**
     * @return bool
     */
    function is_connected()
    {
        $connected = @fsockopen("www.example.com", 80);
        //website, port  (try 80 or 443)
        if ($connected){
            $is_conn = true; //action when connected
            fclose($connected);
        }else{
            $is_conn = false; //action in connection failure
        }
        return $is_conn;

    }
}