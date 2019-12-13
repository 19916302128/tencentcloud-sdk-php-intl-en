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
 * @method integer getVerifyFlag() 获取Verification identifier
 * @method void setVerifyFlag(integer $VerifyFlag) 设置Verification identifier
 * @method integer getNotifyPhone() 获取Phone notification
 * @method void setNotifyPhone(integer $NotifyPhone) 设置Phone notification
 * @method integer getNotifyEmail() 获取Email notification
 * @method void setNotifyEmail(integer $NotifyEmail) 设置Email notification
 * @method integer getNotifyWechat() 获取WeChat notification
 * @method void setNotifyWechat(integer $NotifyWechat) 设置WeChat notification
 * @method integer getTips() 获取
 * @method void setTips(integer $Tips) 设置
 */

/**
 *Remote login settings
 */
class OffsiteFlag extends AbstractModel
{
    /**
     * @var integer Verification identifier
     */
    public $VerifyFlag;

    /**
     * @var integer Phone notification
     */
    public $NotifyPhone;

    /**
     * @var integer Email notification
     */
    public $NotifyEmail;

    /**
     * @var integer WeChat notification
     */
    public $NotifyWechat;

    /**
     * @var integer 
     */
    public $Tips;
    /**
     * @param integer $VerifyFlag Verification identifier
     * @param integer $NotifyPhone Phone notification
     * @param integer $NotifyEmail Email notification
     * @param integer $NotifyWechat WeChat notification
     * @param integer $Tips 
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
        if (array_key_exists("VerifyFlag",$param) and $param["VerifyFlag"] !== null) {
            $this->VerifyFlag = $param["VerifyFlag"];
        }

        if (array_key_exists("NotifyPhone",$param) and $param["NotifyPhone"] !== null) {
            $this->NotifyPhone = $param["NotifyPhone"];
        }

        if (array_key_exists("NotifyEmail",$param) and $param["NotifyEmail"] !== null) {
            $this->NotifyEmail = $param["NotifyEmail"];
        }

        if (array_key_exists("NotifyWechat",$param) and $param["NotifyWechat"] !== null) {
            $this->NotifyWechat = $param["NotifyWechat"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }
    }
}
