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
 * RunInstances response structure.
 *
 * @method array getInstanceIdSet() Obtain If you use this API to create instance(s), this parameter will be returned, representing one or more instance `ID`s. Retuning the instance `ID` list does not necessarily mean that the instance(s) were created successfully. To check whether the instance(s) were created successfully, you can call [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) and check the states of the instances in `InstancesSet` in the response. If the state of an instance changes from "pending" to "running", it means that the instance has been created successfully.
 * @method void setInstanceIdSet(array $InstanceIdSet) Set If you use this API to create instance(s), this parameter will be returned, representing one or more instance `ID`s. Retuning the instance `ID` list does not necessarily mean that the instance(s) were created successfully. To check whether the instance(s) were created successfully, you can call [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) and check the states of the instances in `InstancesSet` in the response. If the state of an instance changes from "pending" to "running", it means that the instance has been created successfully.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class RunInstancesResponse extends AbstractModel
{
    /**
     * @var array If you use this API to create instance(s), this parameter will be returned, representing one or more instance `ID`s. Retuning the instance `ID` list does not necessarily mean that the instance(s) were created successfully. To check whether the instance(s) were created successfully, you can call [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) and check the states of the instances in `InstancesSet` in the response. If the state of an instance changes from "pending" to "running", it means that the instance has been created successfully.
     */
    public $InstanceIdSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $InstanceIdSet If you use this API to create instance(s), this parameter will be returned, representing one or more instance `ID`s. Retuning the instance `ID` list does not necessarily mean that the instance(s) were created successfully. To check whether the instance(s) were created successfully, you can call [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) and check the states of the instances in `InstancesSet` in the response. If the state of an instance changes from "pending" to "running", it means that the instance has been created successfully.
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
        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
