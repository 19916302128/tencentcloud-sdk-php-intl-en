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
 * @method array getSecurityGroupIds() 获取ID of the security group to be associated, such as `sg-efil73jd`. Only one security group can be associated.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置ID of the security group to be associated, such as `sg-efil73jd`. Only one security group can be associated.
 * @method array getInstanceIds() 获取ID(s) of the instance(s) to be associated，such as `ins-lesecurk`. You can specify multiple instances.
 * @method void setInstanceIds(array $InstanceIds) 设置ID(s) of the instance(s) to be associated，such as `ins-lesecurk`. You can specify multiple instances.
 */

/**
 *AssociateSecurityGroups request structure.
 */
class AssociateSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var array ID of the security group to be associated, such as `sg-efil73jd`. Only one security group can be associated.
     */
    public $SecurityGroupIds;

    /**
     * @var array ID(s) of the instance(s) to be associated，such as `ins-lesecurk`. You can specify multiple instances.
     */
    public $InstanceIds;
    /**
     * @param array $SecurityGroupIds ID of the security group to be associated, such as `sg-efil73jd`. Only one security group can be associated.
     * @param array $InstanceIds ID(s) of the instance(s) to be associated，such as `ins-lesecurk`. You can specify multiple instances.
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
        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
