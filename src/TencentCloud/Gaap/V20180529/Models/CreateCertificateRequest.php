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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getCertificateType() 获取Certificate type. Where:
0: basic authentication configuration;
1: indicates client CA certificate;
2: server SSL certificate;
3: origin server CA certificate;
4: connection SSL certificate.
 * @method void setCertificateType(integer $CertificateType) 设置Certificate type. Where:
0: basic authentication configuration;
1: indicates client CA certificate;
2: server SSL certificate;
3: origin server CA certificate;
4: connection SSL certificate.
 * @method string getCertificateContent() 获取Certificate content. URL encoding. Where:
If the certificate type is basic authentication, enter username/password pair for this parameter. Format: “username:password”, for example, root:FSGdT. The password is `htpasswd` or `openssl`, for example, openssl passwd -crypt 123456.
When the certificate type is CA/SSL certificate, enter the certificate content for this parameter in the format of ‘pem’.
 * @method void setCertificateContent(string $CertificateContent) 设置Certificate content. URL encoding. Where:
If the certificate type is basic authentication, enter username/password pair for this parameter. Format: “username:password”, for example, root:FSGdT. The password is `htpasswd` or `openssl`, for example, openssl passwd -crypt 123456.
When the certificate type is CA/SSL certificate, enter the certificate content for this parameter in the format of ‘pem’.
 * @method string getCertificateAlias() 获取Certificate name
 * @method void setCertificateAlias(string $CertificateAlias) 设置Certificate name
 * @method string getCertificateKey() 获取Key content. URL encoding. This parameter is required only when the certificate type is SSL certificate. The format is ‘pem’.
 * @method void setCertificateKey(string $CertificateKey) 设置Key content. URL encoding. This parameter is required only when the certificate type is SSL certificate. The format is ‘pem’.
 */

/**
 *CreateCertificate request structure.
 */
class CreateCertificateRequest extends AbstractModel
{
    /**
     * @var integer Certificate type. Where:
0: basic authentication configuration;
1: indicates client CA certificate;
2: server SSL certificate;
3: origin server CA certificate;
4: connection SSL certificate.
     */
    public $CertificateType;

    /**
     * @var string Certificate content. URL encoding. Where:
If the certificate type is basic authentication, enter username/password pair for this parameter. Format: “username:password”, for example, root:FSGdT. The password is `htpasswd` or `openssl`, for example, openssl passwd -crypt 123456.
When the certificate type is CA/SSL certificate, enter the certificate content for this parameter in the format of ‘pem’.
     */
    public $CertificateContent;

    /**
     * @var string Certificate name
     */
    public $CertificateAlias;

    /**
     * @var string Key content. URL encoding. This parameter is required only when the certificate type is SSL certificate. The format is ‘pem’.
     */
    public $CertificateKey;
    /**
     * @param integer $CertificateType Certificate type. Where:
0: basic authentication configuration;
1: indicates client CA certificate;
2: server SSL certificate;
3: origin server CA certificate;
4: connection SSL certificate.
     * @param string $CertificateContent Certificate content. URL encoding. Where:
If the certificate type is basic authentication, enter username/password pair for this parameter. Format: “username:password”, for example, root:FSGdT. The password is `htpasswd` or `openssl`, for example, openssl passwd -crypt 123456.
When the certificate type is CA/SSL certificate, enter the certificate content for this parameter in the format of ‘pem’.
     * @param string $CertificateAlias Certificate name
     * @param string $CertificateKey Key content. URL encoding. This parameter is required only when the certificate type is SSL certificate. The format is ‘pem’.
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
        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("CertificateContent",$param) and $param["CertificateContent"] !== null) {
            $this->CertificateContent = $param["CertificateContent"];
        }

        if (array_key_exists("CertificateAlias",$param) and $param["CertificateAlias"] !== null) {
            $this->CertificateAlias = $param["CertificateAlias"];
        }

        if (array_key_exists("CertificateKey",$param) and $param["CertificateKey"] !== null) {
            $this->CertificateKey = $param["CertificateKey"];
        }
    }
}
