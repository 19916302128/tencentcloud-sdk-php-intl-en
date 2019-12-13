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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取Instance ID
 * @method void setInstanceId(string $InstanceId) 设置Instance ID
 * @method string getAccountName() 获取Sub-account name. If the root account is to be modified, enter `root`
 * @method void setAccountName(string $AccountName) 设置Sub-account name. If the root account is to be modified, enter `root`
 * @method string getAccountPassword() 获取Sub-account password
 * @method void setAccountPassword(string $AccountPassword) 设置Sub-account password
 * @method string getRemark() 获取Sub-account description information
 * @method void setRemark(string $Remark) 设置Sub-account description information
 * @method array getReadonlyPolicy() 获取Sub-account routing policy. Enter `master` to route to the master node or `slave` to route to the slave node
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) 设置Sub-account routing policy. Enter `master` to route to the master node or `slave` to route to the slave node
 * @method string getPrivilege() 获取Sub-account read/write policy. Enter `r` for read-only, `w` for write-only, or `rw` for read/write
 * @method void setPrivilege(string $Privilege) 设置Sub-account read/write policy. Enter `r` for read-only, `w` for write-only, or `rw` for read/write
 * @method boolean getNoAuth() 获取true: make the root account password-free. This is applicable to root accounts only; sub-accounts cannot be made password-free
 * @method void setNoAuth(boolean $NoAuth) 设置true: make the root account password-free. This is applicable to root accounts only; sub-accounts cannot be made password-free
 */

/**
 *ModifyInstanceAccount request structure.
 */
class ModifyInstanceAccountRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Sub-account name. If the root account is to be modified, enter `root`
     */
    public $AccountName;

    /**
     * @var string Sub-account password
     */
    public $AccountPassword;

    /**
     * @var string Sub-account description information
     */
    public $Remark;

    /**
     * @var array Sub-account routing policy. Enter `master` to route to the master node or `slave` to route to the slave node
     */
    public $ReadonlyPolicy;

    /**
     * @var string Sub-account read/write policy. Enter `r` for read-only, `w` for write-only, or `rw` for read/write
     */
    public $Privilege;

    /**
     * @var boolean true: make the root account password-free. This is applicable to root accounts only; sub-accounts cannot be made password-free
     */
    public $NoAuth;
    /**
     * @param string $InstanceId Instance ID
     * @param string $AccountName Sub-account name. If the root account is to be modified, enter `root`
     * @param string $AccountPassword Sub-account password
     * @param string $Remark Sub-account description information
     * @param array $ReadonlyPolicy Sub-account routing policy. Enter `master` to route to the master node or `slave` to route to the slave node
     * @param string $Privilege Sub-account read/write policy. Enter `r` for read-only, `w` for write-only, or `rw` for read/write
     * @param boolean $NoAuth true: make the root account password-free. This is applicable to root accounts only; sub-accounts cannot be made password-free
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("AccountPassword",$param) and $param["AccountPassword"] !== null) {
            $this->AccountPassword = $param["AccountPassword"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ReadonlyPolicy",$param) and $param["ReadonlyPolicy"] !== null) {
            $this->ReadonlyPolicy = $param["ReadonlyPolicy"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }
    }
}
