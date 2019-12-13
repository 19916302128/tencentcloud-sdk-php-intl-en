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
 * @method integer getPhone() 获取Mobile phone
 * @method void setPhone(integer $Phone) 设置Mobile phone
 * @method integer getToken() 获取Hard token
 * @method void setToken(integer $Token) 设置Hard token
 * @method integer getStoken() 获取Soft token
 * @method void setStoken(integer $Stoken) 设置Soft token
 * @method integer getWechat() 获取WeChat
 * @method void setWechat(integer $Wechat) 设置WeChat
 * @method integer getCustom() 获取Custom
 * @method void setCustom(integer $Custom) 设置Custom
 */

/**
 *Login and sensitive operation flag
 */
class LoginActionFlag extends AbstractModel
{
    /**
     * @var integer Mobile phone
     */
    public $Phone;

    /**
     * @var integer Hard token
     */
    public $Token;

    /**
     * @var integer Soft token
     */
    public $Stoken;

    /**
     * @var integer WeChat
     */
    public $Wechat;

    /**
     * @var integer Custom
     */
    public $Custom;
    /**
     * @param integer $Phone Mobile phone
     * @param integer $Token Hard token
     * @param integer $Stoken Soft token
     * @param integer $Wechat WeChat
     * @param integer $Custom Custom
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
        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Stoken",$param) and $param["Stoken"] !== null) {
            $this->Stoken = $param["Stoken"];
        }

        if (array_key_exists("Wechat",$param) and $param["Wechat"] !== null) {
            $this->Wechat = $param["Wechat"];
        }

        if (array_key_exists("Custom",$param) and $param["Custom"] !== null) {
            $this->Custom = $param["Custom"];
        }
    }
}
