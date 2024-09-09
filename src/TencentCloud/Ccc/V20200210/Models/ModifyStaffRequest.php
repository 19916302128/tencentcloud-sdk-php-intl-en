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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyStaff request structure.
 *
 * @method integer getSdkAppId() Obtain Application ID
 * @method void setSdkAppId(integer $SdkAppId) Set Application ID
 * @method string getEmail() Obtain Agent account.
 * @method void setEmail(string $Email) Set Agent account.
 * @method string getName() Obtain Agent name.
 * @method void setName(string $Name) Set Agent name.
 * @method string getPhone() Obtain Agent phone number (preceded by 0086, example: 008618011111111).
 * @method void setPhone(string $Phone) Set Agent phone number (preceded by 0086, example: 008618011111111).
 * @method string getNick() Obtain Agent nickname.
 * @method void setNick(string $Nick) Set Agent nickname.
 * @method string getStaffNo() Obtain Agent ID
 * @method void setStaffNo(string $StaffNo) Set Agent ID
 * @method array getSkillGroupIds() Obtain Bind skill group ID list.
 * @method void setSkillGroupIds(array $SkillGroupIds) Set Bind skill group ID list.
 * @method boolean getUseMobileCallOut() Obtain Whether the cell phone outbound call switch is enabled or not.
 * @method void setUseMobileCallOut(boolean $UseMobileCallOut) Set Whether the cell phone outbound call switch is enabled or not.
 * @method integer getUseMobileAccept() Obtain Cell phone answering pattern: 0 - Off | 1 - Only when Offline | 2 - Always.
 * @method void setUseMobileAccept(integer $UseMobileAccept) Set Cell phone answering pattern: 0 - Off | 1 - Only when Offline | 2 - Always.
 */
class ModifyStaffRequest extends AbstractModel
{
    /**
     * @var integer Application ID
     */
    public $SdkAppId;

    /**
     * @var string Agent account.
     */
    public $Email;

    /**
     * @var string Agent name.
     */
    public $Name;

    /**
     * @var string Agent phone number (preceded by 0086, example: 008618011111111).
     */
    public $Phone;

    /**
     * @var string Agent nickname.
     */
    public $Nick;

    /**
     * @var string Agent ID
     */
    public $StaffNo;

    /**
     * @var array Bind skill group ID list.
     */
    public $SkillGroupIds;

    /**
     * @var boolean Whether the cell phone outbound call switch is enabled or not.
     */
    public $UseMobileCallOut;

    /**
     * @var integer Cell phone answering pattern: 0 - Off | 1 - Only when Offline | 2 - Always.
     */
    public $UseMobileAccept;

    /**
     * @param integer $SdkAppId Application ID
     * @param string $Email Agent account.
     * @param string $Name Agent name.
     * @param string $Phone Agent phone number (preceded by 0086, example: 008618011111111).
     * @param string $Nick Agent nickname.
     * @param string $StaffNo Agent ID
     * @param array $SkillGroupIds Bind skill group ID list.
     * @param boolean $UseMobileCallOut Whether the cell phone outbound call switch is enabled or not.
     * @param integer $UseMobileAccept Cell phone answering pattern: 0 - Off | 1 - Only when Offline | 2 - Always.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("StaffNo",$param) and $param["StaffNo"] !== null) {
            $this->StaffNo = $param["StaffNo"];
        }

        if (array_key_exists("SkillGroupIds",$param) and $param["SkillGroupIds"] !== null) {
            $this->SkillGroupIds = $param["SkillGroupIds"];
        }

        if (array_key_exists("UseMobileCallOut",$param) and $param["UseMobileCallOut"] !== null) {
            $this->UseMobileCallOut = $param["UseMobileCallOut"];
        }

        if (array_key_exists("UseMobileAccept",$param) and $param["UseMobileAccept"] !== null) {
            $this->UseMobileAccept = $param["UseMobileAccept"];
        }
    }
}
