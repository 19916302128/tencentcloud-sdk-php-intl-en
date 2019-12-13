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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getUid() 获取Sub-user UID
 * @method void setUid(integer $Uid) 设置Sub-user UID
 * @method integer getUin() 获取Sub-user UIN
 * @method void setUin(integer $Uin) 设置Sub-user UIN
 * @method string getName() 获取Sub-user name
 * @method void setName(string $Name) 设置Sub-user name
 * @method string getPhoneNum() 获取Mobile number
 * @method void setPhoneNum(string $PhoneNum) 设置Mobile number
 * @method string getCountryCode() 获取Mobile number country/area code
 * @method void setCountryCode(string $CountryCode) 设置Mobile number country/area code
 * @method integer getPhoneFlag() 获取If mobile number has been verified
 * @method void setPhoneFlag(integer $PhoneFlag) 设置If mobile number has been verified
 * @method string getEmail() 获取Email address
 * @method void setEmail(string $Email) 设置Email address
 * @method integer getEmailFlag() 获取If email has been verified
 * @method void setEmailFlag(integer $EmailFlag) 设置If email has been verified
 * @method integer getUserType() 获取User type
 * @method void setUserType(integer $UserType) 设置User type
 * @method string getCreateTime() 获取Time policy created
 * @method void setCreateTime(string $CreateTime) 设置Time policy created
 * @method integer getIsReceiverOwner() 获取If the user is the main message recipient
 * @method void setIsReceiverOwner(integer $IsReceiverOwner) 设置If the user is the main message recipient
 */

/**
 *User Group user information
 */
class GroupMemberInfo extends AbstractModel
{
    /**
     * @var integer Sub-user UID
     */
    public $Uid;

    /**
     * @var integer Sub-user UIN
     */
    public $Uin;

    /**
     * @var string Sub-user name
     */
    public $Name;

    /**
     * @var string Mobile number
     */
    public $PhoneNum;

    /**
     * @var string Mobile number country/area code
     */
    public $CountryCode;

    /**
     * @var integer If mobile number has been verified
     */
    public $PhoneFlag;

    /**
     * @var string Email address
     */
    public $Email;

    /**
     * @var integer If email has been verified
     */
    public $EmailFlag;

    /**
     * @var integer User type
     */
    public $UserType;

    /**
     * @var string Time policy created
     */
    public $CreateTime;

    /**
     * @var integer If the user is the main message recipient
     */
    public $IsReceiverOwner;
    /**
     * @param integer $Uid Sub-user UID
     * @param integer $Uin Sub-user UIN
     * @param string $Name Sub-user name
     * @param string $PhoneNum Mobile number
     * @param string $CountryCode Mobile number country/area code
     * @param integer $PhoneFlag If mobile number has been verified
     * @param string $Email Email address
     * @param integer $EmailFlag If email has been verified
     * @param integer $UserType User type
     * @param string $CreateTime Time policy created
     * @param integer $IsReceiverOwner If the user is the main message recipient
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
        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("PhoneFlag",$param) and $param["PhoneFlag"] !== null) {
            $this->PhoneFlag = $param["PhoneFlag"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("EmailFlag",$param) and $param["EmailFlag"] !== null) {
            $this->EmailFlag = $param["EmailFlag"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsReceiverOwner",$param) and $param["IsReceiverOwner"] !== null) {
            $this->IsReceiverOwner = $param["IsReceiverOwner"];
        }
    }
}
