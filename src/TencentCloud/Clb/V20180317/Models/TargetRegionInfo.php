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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getRegion() 获取Region of the target, such as ap-guangzhou
 * @method void setRegion(string $Region) 设置Region of the target, such as ap-guangzhou
 * @method string getVpcId() 获取Network of the target, which is in the format of vpc-abcd1234 for VPC or 0 for basic network
 * @method void setVpcId(string $VpcId) 设置Network of the target, which is in the format of vpc-abcd1234 for VPC or 0 for basic network
 */

/**
 *Information of the real server bound to a CLB instance, including region and network to which it belongs.
 */
class TargetRegionInfo extends AbstractModel
{
    /**
     * @var string Region of the target, such as ap-guangzhou
     */
    public $Region;

    /**
     * @var string Network of the target, which is in the format of vpc-abcd1234 for VPC or 0 for basic network
     */
    public $VpcId;
    /**
     * @param string $Region Region of the target, such as ap-guangzhou
     * @param string $VpcId Network of the target, which is in the format of vpc-abcd1234 for VPC or 0 for basic network
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
