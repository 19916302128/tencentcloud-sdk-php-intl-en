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
 * DescribeProxyCustomConf response structure.
 *
 * @method integer getCount() Obtain Number of queried proxy configurations
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setCount(integer $Count) Set Number of queried proxy configurations
Note: this field may return `null`, indicating that no valid value can be found.
 * @method CustomConfig getCustomConf() Obtain Proxy configuration details
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setCustomConf(CustomConfig $CustomConf) Set Proxy configuration details
Note: this field may return `null`, indicating that no valid value can be found.
 * @method Rule getWeightRule() Obtain Weight rule
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setWeightRule(Rule $WeightRule) Set Weight rule
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeProxyCustomConfResponse extends AbstractModel
{
    /**
     * @var integer Number of queried proxy configurations
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $Count;

    /**
     * @var CustomConfig Proxy configuration details
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $CustomConf;

    /**
     * @var Rule Weight rule
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $WeightRule;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Count Number of queried proxy configurations
Note: this field may return `null`, indicating that no valid value can be found.
     * @param CustomConfig $CustomConf Proxy configuration details
Note: this field may return `null`, indicating that no valid value can be found.
     * @param Rule $WeightRule Weight rule
Note: this field may return `null`, indicating that no valid value can be found.
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("CustomConf",$param) and $param["CustomConf"] !== null) {
            $this->CustomConf = new CustomConfig();
            $this->CustomConf->deserialize($param["CustomConf"]);
        }

        if (array_key_exists("WeightRule",$param) and $param["WeightRule"] !== null) {
            $this->WeightRule = new Rule();
            $this->WeightRule->deserialize($param["WeightRule"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
