<?php

/**
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link https://vistart.name/
 * @copyright Copyright (c) 2016-2018 vistart
 * @license https://vistart.name/license/
 */
namespace rhoone\library;

use yii\base\Component;
use yii\base\NotSupportedException;

/**
 * Class Library
 * @package rhoone\library
 */
abstract class Library extends Component
{
    public function crawl(array $config)
    {
        throw new NotSupportedException();
    }

    public function search($keywords, array $config = null)
    {
        throw new NotSupportedException();
    }

    public static function getId()
    {
        throw new NotSupportedException();
    }
}
