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
namespace TencentCloud\Organization\V20181225\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetOrganizationMember response structure.
 *
 * @method integer getUin() Obtain Organization member UIN
 * @method void setUin(integer $Uin) Set Organization member UIN
 * @method string getName() Obtain Organization member name
 * @method void setName(string $Name) Set Organization member name
 * @method string getRemark() Obtain Notes
 * @method void setRemark(string $Remark) Set Notes
 * @method string getJoinTime() Obtain Joining time 
 * @method void setJoinTime(string $JoinTime) Set Joining time 
 * @method integer getNodeId() Obtain Organizational unit ID
 * @method void setNodeId(integer $NodeId) Set Organizational unit ID
 * @method string getNodeName() Obtain Organizational unit name
 * @method void setNodeName(string $NodeName) Set Organizational unit name
 * @method integer getParentNodeId() Obtain Parent organizational unit ID
 * @method void setParentNodeId(integer $ParentNodeId) Set Parent organizational unit ID
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetOrganizationMemberResponse extends AbstractModel
{
    /**
     * @var integer Organization member UIN
     */
    public $Uin;

    /**
     * @var string Organization member name
     */
    public $Name;

    /**
     * @var string Notes
     */
    public $Remark;

    /**
     * @var string Joining time 
     */
    public $JoinTime;

    /**
     * @var integer Organizational unit ID
     */
    public $NodeId;

    /**
     * @var string Organizational unit name
     */
    public $NodeName;

    /**
     * @var integer Parent organizational unit ID
     */
    public $ParentNodeId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Uin Organization member UIN
     * @param string $Name Organization member name
     * @param string $Remark Notes
     * @param string $JoinTime Joining time 
     * @param integer $NodeId Organizational unit ID
     * @param string $NodeName Organizational unit name
     * @param integer $ParentNodeId Parent organizational unit ID
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("JoinTime",$param) and $param["JoinTime"] !== null) {
            $this->JoinTime = $param["JoinTime"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("ParentNodeId",$param) and $param["ParentNodeId"] !== null) {
            $this->ParentNodeId = $param["ParentNodeId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
