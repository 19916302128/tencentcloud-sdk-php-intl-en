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
 * CreateOrganization response structure.
 *
 * @method integer getOrgId() Obtain Organization ID
 * @method void setOrgId(integer $OrgId) Set Organization ID
 * @method string getNickname() Obtain Creator’s name
 * @method void setNickname(string $Nickname) Set Creator’s name
 * @method string getMail() Obtain Creator’s email address
 * @method void setMail(string $Mail) Set Creator’s email address
 * @method integer getOrgType() Obtain Organization type
 * @method void setOrgType(integer $OrgType) Set Organization type
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateOrganizationResponse extends AbstractModel
{
    /**
     * @var integer Organization ID
     */
    public $OrgId;

    /**
     * @var string Creator’s name
     */
    public $Nickname;

    /**
     * @var string Creator’s email address
     */
    public $Mail;

    /**
     * @var integer Organization type
     */
    public $OrgType;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $OrgId Organization ID
     * @param string $Nickname Creator’s name
     * @param string $Mail Creator’s email address
     * @param integer $OrgType Organization type
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
        if (array_key_exists("OrgId",$param) and $param["OrgId"] !== null) {
            $this->OrgId = $param["OrgId"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("OrgType",$param) and $param["OrgType"] !== null) {
            $this->OrgType = $param["OrgType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
