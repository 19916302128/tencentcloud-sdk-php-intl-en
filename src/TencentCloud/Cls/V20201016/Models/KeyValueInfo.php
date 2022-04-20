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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Field information of key value or metafield index
 *
 * @method string getKey() Obtain When a key value or metafield index needs to be configured for a field, the metafield `Key` does not need to be prefixed with `__TAG__.` and is consistent with the one when logs are uploaded. `__TAG__.` will be prefixed automatically for display in the console.
 * @method void setKey(string $Key) Set When a key value or metafield index needs to be configured for a field, the metafield `Key` does not need to be prefixed with `__TAG__.` and is consistent with the one when logs are uploaded. `__TAG__.` will be prefixed automatically for display in the console.
 * @method ValueInfo getValue() Obtain Field index description information
 * @method void setValue(ValueInfo $Value) Set Field index description information
 */
class KeyValueInfo extends AbstractModel
{
    /**
     * @var string When a key value or metafield index needs to be configured for a field, the metafield `Key` does not need to be prefixed with `__TAG__.` and is consistent with the one when logs are uploaded. `__TAG__.` will be prefixed automatically for display in the console.
     */
    public $Key;

    /**
     * @var ValueInfo Field index description information
     */
    public $Value;

    /**
     * @param string $Key When a key value or metafield index needs to be configured for a field, the metafield `Key` does not need to be prefixed with `__TAG__.` and is consistent with the one when logs are uploaded. `__TAG__.` will be prefixed automatically for display in the console.
     * @param ValueInfo $Value Field index description information
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new ValueInfo();
            $this->Value->deserialize($param["Value"]);
        }
    }
}
