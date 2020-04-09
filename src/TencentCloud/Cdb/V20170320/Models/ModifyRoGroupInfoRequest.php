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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRoGroupInfo request structure.
 *
 * @method string getRoGroupId() Obtain RO group ID.
 * @method void setRoGroupId(string $RoGroupId) Set RO group ID.
 * @method RoGroupAttr getRoGroupInfo() Obtain RO group details.
 * @method void setRoGroupInfo(RoGroupAttr $RoGroupInfo) Set RO group details.
 * @method array getRoWeightValues() Obtain Weights of instances in RO group. If the weighting mode of an RO group is changed to custom mode, this parameter must be set, and a weight value needs to be set for each RO instance.
 * @method void setRoWeightValues(array $RoWeightValues) Set Weights of instances in RO group. If the weighting mode of an RO group is changed to custom mode, this parameter must be set, and a weight value needs to be set for each RO instance.
 * @method integer getIsBalanceRoLoad() Obtain Whether to rebalance the loads of RO instances in the RO group. Supported values include `1` (yes) and `0` (no). The default value is `0`. Please note that if this value is set to `1`, connections to the RO instances in the RO group will be interrupted transiently; therefore, you should ensure that your application can reconnect to the databases.
 * @method void setIsBalanceRoLoad(integer $IsBalanceRoLoad) Set Whether to rebalance the loads of RO instances in the RO group. Supported values include `1` (yes) and `0` (no). The default value is `0`. Please note that if this value is set to `1`, connections to the RO instances in the RO group will be interrupted transiently; therefore, you should ensure that your application can reconnect to the databases.
 */
class ModifyRoGroupInfoRequest extends AbstractModel
{
    /**
     * @var string RO group ID.
     */
    public $RoGroupId;

    /**
     * @var RoGroupAttr RO group details.
     */
    public $RoGroupInfo;

    /**
     * @var array Weights of instances in RO group. If the weighting mode of an RO group is changed to custom mode, this parameter must be set, and a weight value needs to be set for each RO instance.
     */
    public $RoWeightValues;

    /**
     * @var integer Whether to rebalance the loads of RO instances in the RO group. Supported values include `1` (yes) and `0` (no). The default value is `0`. Please note that if this value is set to `1`, connections to the RO instances in the RO group will be interrupted transiently; therefore, you should ensure that your application can reconnect to the databases.
     */
    public $IsBalanceRoLoad;

    /**
     * @param string $RoGroupId RO group ID.
     * @param RoGroupAttr $RoGroupInfo RO group details.
     * @param array $RoWeightValues Weights of instances in RO group. If the weighting mode of an RO group is changed to custom mode, this parameter must be set, and a weight value needs to be set for each RO instance.
     * @param integer $IsBalanceRoLoad Whether to rebalance the loads of RO instances in the RO group. Supported values include `1` (yes) and `0` (no). The default value is `0`. Please note that if this value is set to `1`, connections to the RO instances in the RO group will be interrupted transiently; therefore, you should ensure that your application can reconnect to the databases.
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
        if (array_key_exists("RoGroupId",$param) and $param["RoGroupId"] !== null) {
            $this->RoGroupId = $param["RoGroupId"];
        }

        if (array_key_exists("RoGroupInfo",$param) and $param["RoGroupInfo"] !== null) {
            $this->RoGroupInfo = new RoGroupAttr();
            $this->RoGroupInfo->deserialize($param["RoGroupInfo"]);
        }

        if (array_key_exists("RoWeightValues",$param) and $param["RoWeightValues"] !== null) {
            $this->RoWeightValues = [];
            foreach ($param["RoWeightValues"] as $key => $value){
                $obj = new RoWeightValue();
                $obj->deserialize($value);
                array_push($this->RoWeightValues, $obj);
            }
        }

        if (array_key_exists("IsBalanceRoLoad",$param) and $param["IsBalanceRoLoad"] !== null) {
            $this->IsBalanceRoLoad = $param["IsBalanceRoLoad"];
        }
    }
}
