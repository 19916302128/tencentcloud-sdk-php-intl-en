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
 * @method integer getCpuTotal() 获取Total number of CPU cores in the CDH instance
 * @method void setCpuTotal(integer $CpuTotal) 设置Total number of CPU cores in the CDH instance
 * @method integer getCpuAvailable() 获取Number of available CPU cores in the CDH instance
 * @method void setCpuAvailable(integer $CpuAvailable) 设置Number of available CPU cores in the CDH instance
 * @method float getMemTotal() 获取Total memory of the CDH instance; unit: GiB
 * @method void setMemTotal(float $MemTotal) 设置Total memory of the CDH instance; unit: GiB
 * @method float getMemAvailable() 获取Available memory of the CDH instance; unit: GiB
 * @method void setMemAvailable(float $MemAvailable) 设置Available memory of the CDH instance; unit: GiB
 * @method integer getDiskTotal() 获取Total disk size of the CDH instance; unit: GiB
 * @method void setDiskTotal(integer $DiskTotal) 设置Total disk size of the CDH instance; unit: GiB
 * @method integer getDiskAvailable() 获取Avilable disk size of the CDH instance; unit: GiB
 * @method void setDiskAvailable(integer $DiskAvailable) 设置Avilable disk size of the CDH instance; unit: GiB
 */

/**
 *Resource information of a CDH instance
 */
class HostResource extends AbstractModel
{
    /**
     * @var integer Total number of CPU cores in the CDH instance
     */
    public $CpuTotal;

    /**
     * @var integer Number of available CPU cores in the CDH instance
     */
    public $CpuAvailable;

    /**
     * @var float Total memory of the CDH instance; unit: GiB
     */
    public $MemTotal;

    /**
     * @var float Available memory of the CDH instance; unit: GiB
     */
    public $MemAvailable;

    /**
     * @var integer Total disk size of the CDH instance; unit: GiB
     */
    public $DiskTotal;

    /**
     * @var integer Avilable disk size of the CDH instance; unit: GiB
     */
    public $DiskAvailable;
    /**
     * @param integer $CpuTotal Total number of CPU cores in the CDH instance
     * @param integer $CpuAvailable Number of available CPU cores in the CDH instance
     * @param float $MemTotal Total memory of the CDH instance; unit: GiB
     * @param float $MemAvailable Available memory of the CDH instance; unit: GiB
     * @param integer $DiskTotal Total disk size of the CDH instance; unit: GiB
     * @param integer $DiskAvailable Avilable disk size of the CDH instance; unit: GiB
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
        if (array_key_exists("CpuTotal",$param) and $param["CpuTotal"] !== null) {
            $this->CpuTotal = $param["CpuTotal"];
        }

        if (array_key_exists("CpuAvailable",$param) and $param["CpuAvailable"] !== null) {
            $this->CpuAvailable = $param["CpuAvailable"];
        }

        if (array_key_exists("MemTotal",$param) and $param["MemTotal"] !== null) {
            $this->MemTotal = $param["MemTotal"];
        }

        if (array_key_exists("MemAvailable",$param) and $param["MemAvailable"] !== null) {
            $this->MemAvailable = $param["MemAvailable"];
        }

        if (array_key_exists("DiskTotal",$param) and $param["DiskTotal"] !== null) {
            $this->DiskTotal = $param["DiskTotal"];
        }

        if (array_key_exists("DiskAvailable",$param) and $param["DiskAvailable"] !== null) {
            $this->DiskAvailable = $param["DiskAvailable"];
        }
    }
}
