<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 19/08/2017
 * Time: 10:40
 */

namespace IssRadar\DAO;

/**
 * Class CurlResponseDAO
 * @package IssRadar\DAO
 */
class CurlResponseDAO
{
    /**
     * url where request was sent
     * @var string
     *
     */
    private $result;

    /**
     * http code
     * @var string
     */
    private $httpCode;

    /**
     * @var string
     */
    private $url;

    /**
     * result from json decoded
     * @var \stdClass
     */
    private $resultDecoded;

    public function __toString()
    {
        return $this->result;
    }
    /**
     * response result
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getHttpCode()
    {
        return $this->httpCode;
    }

    /**
     * @param mixed $httpCode
     */
    public function setHttpCode($httpCode)
    {
        $this->httpCode = $httpCode;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return \stdClass
     */
    public function getResultDecoded(): \stdClass
    {
        return $this->resultDecoded;
    }

    /**
     * @param \stdClass $resultDecoded
     */
    public function setResultDecoded(\stdClass $resultDecoded)
    {
        $this->resultDecoded = $resultDecoded;
    }
}