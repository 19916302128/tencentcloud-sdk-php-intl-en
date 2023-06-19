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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain https acceleration configuration, the default is off
 *
 * @method string getCertId() Obtain Server certificate ID, which is auto-generated when the certificate is being managed by the SSL Certificate Service
 * @method void setCertId(string $CertId) Set Server certificate ID, which is auto-generated when the certificate is being managed by the SSL Certificate Service
 * @method string getCertificate() Obtain Server certificate information.
 * @method void setCertificate(string $Certificate) Set Server certificate information.
 * @method string getPrivateKey() Obtain Server key information.
 * @method void setPrivateKey(string $PrivateKey) Set Server key information.
 * @method string getExpireTime() Obtain Time when the certificate expires;Can be left blank when used as an input parameter.
 * @method void setExpireTime(string $ExpireTime) Set Time when the certificate expires;Can be left blank when used as an input parameter.
 */
class CDNCertInfo extends AbstractModel
{
    /**
     * @var string Server certificate ID, which is auto-generated when the certificate is being managed by the SSL Certificate Service
     */
    public $CertId;

    /**
     * @var string Server certificate information.
     */
    public $Certificate;

    /**
     * @var string Server key information.
     */
    public $PrivateKey;

    /**
     * @var string Time when the certificate expires;Can be left blank when used as an input parameter.
     */
    public $ExpireTime;

    /**
     * @param string $CertId Server certificate ID, which is auto-generated when the certificate is being managed by the SSL Certificate Service
     * @param string $Certificate Server certificate information.
     * @param string $PrivateKey Server key information.
     * @param string $ExpireTime Time when the certificate expires;Can be left blank when used as an input parameter.
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = $param["Certificate"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
