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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetachRolePolicy request structure.
 *
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method string getDetachRoleId() Obtain Role ID, used to specify a role. Input either `AttachRoleId` or `AttachRoleName`
 * @method void setDetachRoleId(string $DetachRoleId) Set Role ID, used to specify a role. Input either `AttachRoleId` or `AttachRoleName`
 * @method string getDetachRoleName() Obtain Role name, used to specify a role. Input either `AttachRoleId` or `AttachRoleName`
 * @method void setDetachRoleName(string $DetachRoleName) Set Role name, used to specify a role. Input either `AttachRoleId` or `AttachRoleName`
 */
class DetachRolePolicyRequest extends AbstractModel
{
    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var string Role ID, used to specify a role. Input either `AttachRoleId` or `AttachRoleName`
     */
    public $DetachRoleId;

    /**
     * @var string Role name, used to specify a role. Input either `AttachRoleId` or `AttachRoleName`
     */
    public $DetachRoleName;

    /**
     * @param integer $PolicyId Policy ID
     * @param string $DetachRoleId Role ID, used to specify a role. Input either `AttachRoleId` or `AttachRoleName`
     * @param string $DetachRoleName Role name, used to specify a role. Input either `AttachRoleId` or `AttachRoleName`
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("DetachRoleId",$param) and $param["DetachRoleId"] !== null) {
            $this->DetachRoleId = $param["DetachRoleId"];
        }

        if (array_key_exists("DetachRoleName",$param) and $param["DetachRoleName"] !== null) {
            $this->DetachRoleName = $param["DetachRoleName"];
        }
    }
}
