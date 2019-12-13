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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getMaxPrice() 获取Bidding price such as "1.05"
 * @method void setMaxPrice(string $MaxPrice) 设置Bidding price such as "1.05"
 * @method string getSpotInstanceType() 获取Bid request type. Currently, only "one-time" type is supported. Default value: one-time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpotInstanceType(string $SpotInstanceType) 设置Bid request type. Currently, only "one-time" type is supported. Default value: one-time
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *Bidding-related options
 */
class SpotMarketOptions extends AbstractModel
{
    /**
     * @var string Bidding price such as "1.05"
     */
    public $MaxPrice;

    /**
     * @var string Bid request type. Currently, only "one-time" type is supported. Default value: one-time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpotInstanceType;
    /**
     * @param string $MaxPrice Bidding price such as "1.05"
     * @param string $SpotInstanceType Bid request type. Currently, only "one-time" type is supported. Default value: one-time
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("MaxPrice",$param) and $param["MaxPrice"] !== null) {
            $this->MaxPrice = $param["MaxPrice"];
        }

        if (array_key_exists("SpotInstanceType",$param) and $param["SpotInstanceType"] !== null) {
            $this->SpotInstanceType = $param["SpotInstanceType"];
        }
    }
}
