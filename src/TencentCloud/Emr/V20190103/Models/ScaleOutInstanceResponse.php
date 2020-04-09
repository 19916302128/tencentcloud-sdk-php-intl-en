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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleOutInstance response structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method array getDealNames() Obtain Order number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDealNames(array $DealNames) Set Order number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClientToken() Obtain Client token.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClientToken(string $ClientToken) Set Client token.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getFlowId() Obtain Scaling workflow ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFlowId(integer $FlowId) Set Scaling workflow ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getBillId() Obtain Big order number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBillId(string $BillId) Set Big order number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ScaleOutInstanceResponse extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var array Order number.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DealNames;

    /**
     * @var string Client token.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClientToken;

    /**
     * @var integer Scaling workflow ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FlowId;

    /**
     * @var string Big order number.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BillId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceId Instance ID.
     * @param array $DealNames Order number.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClientToken Client token.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $FlowId Scaling workflow ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $BillId Big order number.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("BillId",$param) and $param["BillId"] !== null) {
            $this->BillId = $param["BillId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
