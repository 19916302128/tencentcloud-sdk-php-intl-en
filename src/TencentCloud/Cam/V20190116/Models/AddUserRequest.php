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
 * @method string getName() 获取Sub-user username
 * @method void setName(string $Name) 设置Sub-user username
 * @method string getRemark() 获取Sub-user remarks
 * @method void setRemark(string $Remark) 设置Sub-user remarks
 * @method integer getConsoleLogin() 获取Whether or not the sub-user is allowed to log in to the console. 0: No; 1: Yes.
 * @method void setConsoleLogin(integer $ConsoleLogin) 设置Whether or not the sub-user is allowed to log in to the console. 0: No; 1: Yes.
 * @method integer getUseApi() 获取Whether or not to generate keys for sub-users. 0: No; 1: Yes.
 * @method void setUseApi(integer $UseApi) 设置Whether or not to generate keys for sub-users. 0: No; 1: Yes.
 * @method string getPassword() 获取Sub-user’s console login password. If no password rules have been set, the default rules require the password to have at least 8 characters, at least one lowercase letter, one uppercase letter, one number, and one special character. This value is valid only when the sub-user is allowed to log in to the console. If no value is specified, and console login is allowed, the system will automatically generate a password. The automatically generated passwords are 32 characters long and contain letters (both upper and lower cases), numbers, and special characters. 
 * @method void setPassword(string $Password) 设置Sub-user’s console login password. If no password rules have been set, the default rules require the password to have at least 8 characters, at least one lowercase letter, one uppercase letter, one number, and one special character. This value is valid only when the sub-user is allowed to log in to the console. If no value is specified, and console login is allowed, the system will automatically generate a password. The automatically generated passwords are 32 characters long and contain letters (both upper and lower cases), numbers, and special characters. 
 * @method integer getNeedResetPassword() 获取If the sub-user needs to reset their password when they next log in to the console. 0: No; 1: Yes.
 * @method void setNeedResetPassword(integer $NeedResetPassword) 设置If the sub-user needs to reset their password when they next log in to the console. 0: No; 1: Yes.
 * @method string getPhoneNum() 获取Mobile number
 * @method void setPhoneNum(string $PhoneNum) 设置Mobile number
 * @method string getCountryCode() 获取Country/Area Code
 * @method void setCountryCode(string $CountryCode) 设置Country/Area Code
 * @method string getEmail() 获取Email
 * @method void setEmail(string $Email) 设置Email
 */

/**
 *AddUser request structure.
 */
class AddUserRequest extends AbstractModel
{
    /**
     * @var string Sub-user username
     */
    public $Name;

    /**
     * @var string Sub-user remarks
     */
    public $Remark;

    /**
     * @var integer Whether or not the sub-user is allowed to log in to the console. 0: No; 1: Yes.
     */
    public $ConsoleLogin;

    /**
     * @var integer Whether or not to generate keys for sub-users. 0: No; 1: Yes.
     */
    public $UseApi;

    /**
     * @var string Sub-user’s console login password. If no password rules have been set, the default rules require the password to have at least 8 characters, at least one lowercase letter, one uppercase letter, one number, and one special character. This value is valid only when the sub-user is allowed to log in to the console. If no value is specified, and console login is allowed, the system will automatically generate a password. The automatically generated passwords are 32 characters long and contain letters (both upper and lower cases), numbers, and special characters. 
     */
    public $Password;

    /**
     * @var integer If the sub-user needs to reset their password when they next log in to the console. 0: No; 1: Yes.
     */
    public $NeedResetPassword;

    /**
     * @var string Mobile number
     */
    public $PhoneNum;

    /**
     * @var string Country/Area Code
     */
    public $CountryCode;

    /**
     * @var string Email
     */
    public $Email;
    /**
     * @param string $Name Sub-user username
     * @param string $Remark Sub-user remarks
     * @param integer $ConsoleLogin Whether or not the sub-user is allowed to log in to the console. 0: No; 1: Yes.
     * @param integer $UseApi Whether or not to generate keys for sub-users. 0: No; 1: Yes.
     * @param string $Password Sub-user’s console login password. If no password rules have been set, the default rules require the password to have at least 8 characters, at least one lowercase letter, one uppercase letter, one number, and one special character. This value is valid only when the sub-user is allowed to log in to the console. If no value is specified, and console login is allowed, the system will automatically generate a password. The automatically generated passwords are 32 characters long and contain letters (both upper and lower cases), numbers, and special characters. 
     * @param integer $NeedResetPassword If the sub-user needs to reset their password when they next log in to the console. 0: No; 1: Yes.
     * @param string $PhoneNum Mobile number
     * @param string $CountryCode Country/Area Code
     * @param string $Email Email
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConsoleLogin",$param) and $param["ConsoleLogin"] !== null) {
            $this->ConsoleLogin = $param["ConsoleLogin"];
        }

        if (array_key_exists("UseApi",$param) and $param["UseApi"] !== null) {
            $this->UseApi = $param["UseApi"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("NeedResetPassword",$param) and $param["NeedResetPassword"] !== null) {
            $this->NeedResetPassword = $param["NeedResetPassword"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}
