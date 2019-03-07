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

namespace rhoone\library\job;

use rhoone\library\targets\Target;
use \rhoone\spider\job\BatchDownloadToMongoDBJob as baseJob;
use yii\di\Instance;

/**
 * Class BatchDownloadToMongoDBJob
 * @package rhoone\library\job
 */
class BatchDownloadToMongoDBJob extends baseJob
{
    /**
     * @var null|array|Target
     */
    public $target;
}