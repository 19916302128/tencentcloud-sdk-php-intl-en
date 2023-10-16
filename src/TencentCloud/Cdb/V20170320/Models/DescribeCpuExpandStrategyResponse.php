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
 * DescribeCpuExpandStrategy response structure.
 *
 * @method string getType() Obtain Policy type. Valid values: `auto`, `manual`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Policy type. Valid values: `auto`, `manual`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getExpandCpu() Obtain Manually expanded CPU, which is valid when `Type` is `manual`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setExpandCpu(string $ExpandCpu) Set Manually expanded CPU, which is valid when `Type` is `manual`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getAutoStrategy() Obtain Automatic expansion policy, which is valid when `Type` is `auto`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setAutoStrategy(string $AutoStrategy) Set Automatic expansion policy, which is valid when `Type` is `auto`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCpuExpandStrategyResponse extends AbstractModel
{
    /**
     * @var string Policy type. Valid values: `auto`, `manual`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Manually expanded CPU, which is valid when `Type` is `manual`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $ExpandCpu;

    /**
     * @var string Automatic expansion policy, which is valid when `Type` is `auto`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $AutoStrategy;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Type Policy type. Valid values: `auto`, `manual`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $ExpandCpu Manually expanded CPU, which is valid when `Type` is `manual`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $AutoStrategy Automatic expansion policy, which is valid when `Type` is `auto`.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ExpandCpu",$param) and $param["ExpandCpu"] !== null) {
            $this->ExpandCpu = $param["ExpandCpu"];
        }

        if (array_key_exists("AutoStrategy",$param) and $param["AutoStrategy"] !== null) {
            $this->AutoStrategy = $param["AutoStrategy"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
