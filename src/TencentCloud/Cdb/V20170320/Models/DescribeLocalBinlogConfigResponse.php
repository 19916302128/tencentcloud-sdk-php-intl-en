<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLocalBinlogConfig response structure.
 *
 * @method LocalBinlogConfig getLocalBinlogConfig() Obtain Binlog retention policy of the instance.
 * @method void setLocalBinlogConfig(LocalBinlogConfig $LocalBinlogConfig) Set Binlog retention policy of the instance.
 * @method LocalBinlogConfigDefault getLocalBinlogConfigDefault() Obtain Default binlog retention policy in the region.
 * @method void setLocalBinlogConfigDefault(LocalBinlogConfigDefault $LocalBinlogConfigDefault) Set Default binlog retention policy in the region.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeLocalBinlogConfigResponse extends AbstractModel
{
    /**
     * @var LocalBinlogConfig Binlog retention policy of the instance.
     */
    public $LocalBinlogConfig;

    /**
     * @var LocalBinlogConfigDefault Default binlog retention policy in the region.
     */
    public $LocalBinlogConfigDefault;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param LocalBinlogConfig $LocalBinlogConfig Binlog retention policy of the instance.
     * @param LocalBinlogConfigDefault $LocalBinlogConfigDefault Default binlog retention policy in the region.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LocalBinlogConfig",$param) and $param["LocalBinlogConfig"] !== null) {
            $this->LocalBinlogConfig = new LocalBinlogConfig();
            $this->LocalBinlogConfig->deserialize($param["LocalBinlogConfig"]);
        }

        if (array_key_exists("LocalBinlogConfigDefault",$param) and $param["LocalBinlogConfigDefault"] !== null) {
            $this->LocalBinlogConfigDefault = new LocalBinlogConfigDefault();
            $this->LocalBinlogConfigDefault->deserialize($param["LocalBinlogConfigDefault"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
