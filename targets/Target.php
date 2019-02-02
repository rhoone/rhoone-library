<?php

/**
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link https://vistart.name/
 * @copyright Copyright (c) 2016-2019 vistart
 * @license https://vistart.name/license/
 */

namespace rhoone\library\targets;

use yii\base\BaseObject;

/**
 * Class Target
 * @package rhoone\library\targets
 * @property-read string $absoluteUrl Absolute URL.
 * @author vistart <i@vistart.me>
 */
abstract class Target extends BaseObject
{
    /**
     * @var string
     */
    public $host = "localhost";

    /**
     * @var string
     */
    public $port = 80;

    /**
     * @var string
     */
    public $scheme = "http";

    /**
     * @var string
     */
    public $relativeUrl = "";

    /**
     * @var string
     */
    public $urlForamt = "{%scheme}://{%host}{%port}{%relativeUrl}";

    /**
     * Get Absolute URL.
     * @param null $params
     * @return mixed|string
     */
    public function getAbsoluteUrl($params = null)
    {
        $url = str_replace("{%host}", $this->host, $this->urlForamt);
        $url = str_replace("{%relativeUrl}", $this->relativeUrl, $url);
        $url = str_replace("{%scheme}", $this->scheme, $url);

        $port = (($this->scheme == "https" && (string)$this->port == "443") ||
                 ($this->scheme == "http" && (string)$this->port == "80"))
                 ? "" : $this->port;
        $url = str_replace("{%port}", $port, $url);

        if (!empty($params) && is_array($params)) {
            $url .= '?';
            foreach ($params as $key => $param) {
                if (!is_string($key)) {
                    continue;
                }
                $url .= $key . '=' . $param;
                if (end($params) !== $param) {
                    $url .= '&';
                }
            }
        }
        return $url;
    }
}
