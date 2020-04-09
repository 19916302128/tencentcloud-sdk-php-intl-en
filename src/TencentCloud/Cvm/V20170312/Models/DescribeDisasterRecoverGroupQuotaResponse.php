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
 * DescribeDisasterRecoverGroupQuota response structure.
 *
 * @method integer getGroupQuota() Obtain The maximum number of placement groups that can be created.
 * @method void setGroupQuota(integer $GroupQuota) Set The maximum number of placement groups that can be created.
 * @method integer getCurrentNum() Obtain The number of placement groups that have been created by the current user.
 * @method void setCurrentNum(integer $CurrentNum) Set The number of placement groups that have been created by the current user.
 * @method integer getCvmInHostGroupQuota() Obtain Quota on instances in a physical-machine-type disaster recovery group.
 * @method void setCvmInHostGroupQuota(integer $CvmInHostGroupQuota) Set Quota on instances in a physical-machine-type disaster recovery group.
 * @method integer getCvmInSwGroupQuota() Obtain Quota on instances in a switch-type disaster recovery group.
 * @method void setCvmInSwGroupQuota(integer $CvmInSwGroupQuota) Set Quota on instances in a switch-type disaster recovery group.
 * @method integer getCvmInRackGroupQuota() Obtain Quota on instances in a rack-type disaster recovery group.
 * @method void setCvmInRackGroupQuota(integer $CvmInRackGroupQuota) Set Quota on instances in a rack-type disaster recovery group.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDisasterRecoverGroupQuotaResponse extends AbstractModel
{
    /**
     * @var integer The maximum number of placement groups that can be created.
     */
    public $GroupQuota;

    /**
     * @var integer The number of placement groups that have been created by the current user.
     */
    public $CurrentNum;

    /**
     * @var integer Quota on instances in a physical-machine-type disaster recovery group.
     */
    public $CvmInHostGroupQuota;

    /**
     * @var integer Quota on instances in a switch-type disaster recovery group.
     */
    public $CvmInSwGroupQuota;

    /**
     * @var integer Quota on instances in a rack-type disaster recovery group.
     */
    public $CvmInRackGroupQuota;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $GroupQuota The maximum number of placement groups that can be created.
     * @param integer $CurrentNum The number of placement groups that have been created by the current user.
     * @param integer $CvmInHostGroupQuota Quota on instances in a physical-machine-type disaster recovery group.
     * @param integer $CvmInSwGroupQuota Quota on instances in a switch-type disaster recovery group.
     * @param integer $CvmInRackGroupQuota Quota on instances in a rack-type disaster recovery group.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("GroupQuota",$param) and $param["GroupQuota"] !== null) {
            $this->GroupQuota = $param["GroupQuota"];
        }

        if (array_key_exists("CurrentNum",$param) and $param["CurrentNum"] !== null) {
            $this->CurrentNum = $param["CurrentNum"];
        }

        if (array_key_exists("CvmInHostGroupQuota",$param) and $param["CvmInHostGroupQuota"] !== null) {
            $this->CvmInHostGroupQuota = $param["CvmInHostGroupQuota"];
        }

        if (array_key_exists("CvmInSwGroupQuota",$param) and $param["CvmInSwGroupQuota"] !== null) {
            $this->CvmInSwGroupQuota = $param["CvmInSwGroupQuota"];
        }

        if (array_key_exists("CvmInRackGroupQuota",$param) and $param["CvmInRackGroupQuota"] !== null) {
            $this->CvmInRackGroupQuota = $param["CvmInRackGroupQuota"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
