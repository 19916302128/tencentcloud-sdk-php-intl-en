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
 * @method string getInstanceId() 获取Instance ID
 * @method void setInstanceId(string $InstanceId) 设置Instance ID
 * @method integer getAttachedDiskCount() 获取The number of instances mounted to data disk.
 * @method void setAttachedDiskCount(integer $AttachedDiskCount) 设置The number of instances mounted to data disk.
 * @method integer getMaxAttachCount() 获取The maximum number of instances that can be mounted to data disk.
 * @method void setMaxAttachCount(integer $MaxAttachCount) 设置The maximum number of instances that can be mounted to data disk.
 */

/**
 *This describes the number of mounted and mountable data disks of an instance.
 */
class AttachDetail extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer The number of instances mounted to data disk.
     */
    public $AttachedDiskCount;

    /**
     * @var integer The maximum number of instances that can be mounted to data disk.
     */
    public $MaxAttachCount;
    /**
     * @param string $InstanceId Instance ID
     * @param integer $AttachedDiskCount The number of instances mounted to data disk.
     * @param integer $MaxAttachCount The maximum number of instances that can be mounted to data disk.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AttachedDiskCount",$param) and $param["AttachedDiskCount"] !== null) {
            $this->AttachedDiskCount = $param["AttachedDiskCount"];
        }

        if (array_key_exists("MaxAttachCount",$param) and $param["MaxAttachCount"] !== null) {
            $this->MaxAttachCount = $param["MaxAttachCount"];
        }
    }
}
