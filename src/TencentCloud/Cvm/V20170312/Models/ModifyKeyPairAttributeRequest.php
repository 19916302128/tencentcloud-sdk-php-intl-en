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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getKeyId() 获取Key pair ID in the format of `skey-xxxxxxxx`. <br><br>You can obtain the available key pair IDs in two ways: <br><li>Log in to the [console](https://console.cloud.tencent.com/cvm/sshkey) to query the key pair IDs. <br><li>Call [DescribeKeyPairs](https://cloud.tencent.com/document/api/213/15699) and look for `KeyId` in the response.
 * @method void setKeyId(string $KeyId) 设置Key pair ID in the format of `skey-xxxxxxxx`. <br><br>You can obtain the available key pair IDs in two ways: <br><li>Log in to the [console](https://console.cloud.tencent.com/cvm/sshkey) to query the key pair IDs. <br><li>Call [DescribeKeyPairs](https://cloud.tencent.com/document/api/213/15699) and look for `KeyId` in the response.
 * @method string getKeyName() 获取New key pair name, which can contain numbers, letters, and underscores, with a maximum length of 25 characters.
 * @method void setKeyName(string $KeyName) 设置New key pair name, which can contain numbers, letters, and underscores, with a maximum length of 25 characters.
 * @method string getDescription() 获取New key pair description. You can specify any name you like, but its length cannot exceed 60 characters.
 * @method void setDescription(string $Description) 设置New key pair description. You can specify any name you like, but its length cannot exceed 60 characters.
 */

/**
 *ModifyKeyPairAttribute request structure.
 */
class ModifyKeyPairAttributeRequest extends AbstractModel
{
    /**
     * @var string Key pair ID in the format of `skey-xxxxxxxx`. <br><br>You can obtain the available key pair IDs in two ways: <br><li>Log in to the [console](https://console.cloud.tencent.com/cvm/sshkey) to query the key pair IDs. <br><li>Call [DescribeKeyPairs](https://cloud.tencent.com/document/api/213/15699) and look for `KeyId` in the response.
     */
    public $KeyId;

    /**
     * @var string New key pair name, which can contain numbers, letters, and underscores, with a maximum length of 25 characters.
     */
    public $KeyName;

    /**
     * @var string New key pair description. You can specify any name you like, but its length cannot exceed 60 characters.
     */
    public $Description;
    /**
     * @param string $KeyId Key pair ID in the format of `skey-xxxxxxxx`. <br><br>You can obtain the available key pair IDs in two ways: <br><li>Log in to the [console](https://console.cloud.tencent.com/cvm/sshkey) to query the key pair IDs. <br><li>Call [DescribeKeyPairs](https://cloud.tencent.com/document/api/213/15699) and look for `KeyId` in the response.
     * @param string $KeyName New key pair name, which can contain numbers, letters, and underscores, with a maximum length of 25 characters.
     * @param string $Description New key pair description. You can specify any name you like, but its length cannot exceed 60 characters.
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
