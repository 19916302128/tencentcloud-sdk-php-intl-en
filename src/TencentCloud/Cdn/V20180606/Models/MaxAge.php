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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Browser cache rule configuration. This is used to set the MaxAge default value and is disabled by default. (This feature is in beta and not generally available yet.)
 *
 * @method string getSwitch() Obtain Browser cache configuration switch
on: enabled
off: disabled
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Browser cache configuration switch
on: enabled
off: disabled
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getMaxAgeRules() Obtain MaxAge rule
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxAgeRules(array $MaxAgeRules) Set MaxAge rule
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MaxAge extends AbstractModel
{
    /**
     * @var string Browser cache configuration switch
on: enabled
off: disabled
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var array MaxAge rule
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxAgeRules;

    /**
     * @param string $Switch Browser cache configuration switch
on: enabled
off: disabled
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $MaxAgeRules MaxAge rule
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("MaxAgeRules",$param) and $param["MaxAgeRules"] !== null) {
            $this->MaxAgeRules = [];
            foreach ($param["MaxAgeRules"] as $key => $value){
                $obj = new MaxAgeRule();
                $obj->deserialize($value);
                array_push($this->MaxAgeRules, $obj);
            }
        }
    }
}
