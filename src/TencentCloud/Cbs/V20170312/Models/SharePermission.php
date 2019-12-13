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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getCreatedTime() 获取Snapshot sharing time
 * @method void setCreatedTime(string $CreatedTime) 设置Snapshot sharing time
 * @method string getAccountId() 获取ID of the shared account
 * @method void setAccountId(string $AccountId) 设置ID of the shared account
 */

/**
 *Snapshot sharing information set
 */
class SharePermission extends AbstractModel
{
    /**
     * @var string Snapshot sharing time
     */
    public $CreatedTime;

    /**
     * @var string ID of the shared account
     */
    public $AccountId;
    /**
     * @param string $CreatedTime Snapshot sharing time
     * @param string $AccountId ID of the shared account
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
        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }
    }
}
