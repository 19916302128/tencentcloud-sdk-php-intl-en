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
 * @method string getAutoSnapshotPolicyId() 获取ID of scheduled snapshot policy to be bound.
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) 设置ID of scheduled snapshot policy to be bound.
 * @method array getDiskIds() 获取List of cloud disk IDs to be bound. Maximum of 80 cloud disks can be bound per request.
 * @method void setDiskIds(array $DiskIds) 设置List of cloud disk IDs to be bound. Maximum of 80 cloud disks can be bound per request.
 */

/**
 *BindAutoSnapshotPolicy request structure.
 */
class BindAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var string ID of scheduled snapshot policy to be bound.
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var array List of cloud disk IDs to be bound. Maximum of 80 cloud disks can be bound per request.
     */
    public $DiskIds;
    /**
     * @param string $AutoSnapshotPolicyId ID of scheduled snapshot policy to be bound.
     * @param array $DiskIds List of cloud disk IDs to be bound. Maximum of 80 cloud disks can be bound per request.
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
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }
    }
}
