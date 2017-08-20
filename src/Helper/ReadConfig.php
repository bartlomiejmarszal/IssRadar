<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 19/08/2017
 * Time: 11:36
 */

namespace IssRadar\Helper;

/**
 * Class ReadConfig
 * @package IssRadar
 */
class ReadConfig
{
    public function getParameters()
    {
        $yml = yaml_parse_file(__DIR__ . '/../../config/parameters.yml');
        return $yml;
    }
}