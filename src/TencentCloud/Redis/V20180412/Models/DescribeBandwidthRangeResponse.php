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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBandwidthRange response structure.
 *
 * @method integer getBaseBandwidth() Obtain Standard bandwidth, which is the bandwidth allocated by the system to each node when an instance is purchased.
 * @method void setBaseBandwidth(integer $BaseBandwidth) Set Standard bandwidth, which is the bandwidth allocated by the system to each node when an instance is purchased.
 * @method integer getAddBandwidth() Obtain The additional bandwidth of the instance. If the standard bandwidth does not meet your needs, you can increase the bandwidth on your own. <ul><li>If read-only replica is enabled, the total instance bandwidth = additional bandwidth * shard quantity + standard bandwidth * shard quantity * Max ([read-only replica quantity, 1]). The shard quantity in the standard architecture is 1. </li><li>If read-only replica is not enabled, the total instance bandwidth = additional bandwidth * shard quantity + standard bandwidth * shard quantity. The shard quantity in the standard architecture is 1.</li></ul>
 * @method void setAddBandwidth(integer $AddBandwidth) Set The additional bandwidth of the instance. If the standard bandwidth does not meet your needs, you can increase the bandwidth on your own. <ul><li>If read-only replica is enabled, the total instance bandwidth = additional bandwidth * shard quantity + standard bandwidth * shard quantity * Max ([read-only replica quantity, 1]). The shard quantity in the standard architecture is 1. </li><li>If read-only replica is not enabled, the total instance bandwidth = additional bandwidth * shard quantity + standard bandwidth * shard quantity. The shard quantity in the standard architecture is 1.</li></ul>
 * @method integer getMinAddBandwidth() Obtain The lower limit for additional bandwidth
 * @method void setMinAddBandwidth(integer $MinAddBandwidth) Set The lower limit for additional bandwidth
 * @method integer getMaxAddBandwidth() Obtain The upper limit for additional bandwidth
 * @method void setMaxAddBandwidth(integer $MaxAddBandwidth) Set The upper limit for additional bandwidth
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBandwidthRangeResponse extends AbstractModel
{
    /**
     * @var integer Standard bandwidth, which is the bandwidth allocated by the system to each node when an instance is purchased.
     */
    public $BaseBandwidth;

    /**
     * @var integer The additional bandwidth of the instance. If the standard bandwidth does not meet your needs, you can increase the bandwidth on your own. <ul><li>If read-only replica is enabled, the total instance bandwidth = additional bandwidth * shard quantity + standard bandwidth * shard quantity * Max ([read-only replica quantity, 1]). The shard quantity in the standard architecture is 1. </li><li>If read-only replica is not enabled, the total instance bandwidth = additional bandwidth * shard quantity + standard bandwidth * shard quantity. The shard quantity in the standard architecture is 1.</li></ul>
     */
    public $AddBandwidth;

    /**
     * @var integer The lower limit for additional bandwidth
     */
    public $MinAddBandwidth;

    /**
     * @var integer The upper limit for additional bandwidth
     */
    public $MaxAddBandwidth;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $BaseBandwidth Standard bandwidth, which is the bandwidth allocated by the system to each node when an instance is purchased.
     * @param integer $AddBandwidth The additional bandwidth of the instance. If the standard bandwidth does not meet your needs, you can increase the bandwidth on your own. <ul><li>If read-only replica is enabled, the total instance bandwidth = additional bandwidth * shard quantity + standard bandwidth * shard quantity * Max ([read-only replica quantity, 1]). The shard quantity in the standard architecture is 1. </li><li>If read-only replica is not enabled, the total instance bandwidth = additional bandwidth * shard quantity + standard bandwidth * shard quantity. The shard quantity in the standard architecture is 1.</li></ul>
     * @param integer $MinAddBandwidth The lower limit for additional bandwidth
     * @param integer $MaxAddBandwidth The upper limit for additional bandwidth
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
        if (array_key_exists("BaseBandwidth",$param) and $param["BaseBandwidth"] !== null) {
            $this->BaseBandwidth = $param["BaseBandwidth"];
        }

        if (array_key_exists("AddBandwidth",$param) and $param["AddBandwidth"] !== null) {
            $this->AddBandwidth = $param["AddBandwidth"];
        }

        if (array_key_exists("MinAddBandwidth",$param) and $param["MinAddBandwidth"] !== null) {
            $this->MinAddBandwidth = $param["MinAddBandwidth"];
        }

        if (array_key_exists("MaxAddBandwidth",$param) and $param["MaxAddBandwidth"] !== null) {
            $this->MaxAddBandwidth = $param["MaxAddBandwidth"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
