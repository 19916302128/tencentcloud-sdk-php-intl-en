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
 * DescribeSSLStatus response structure.
 *
 * @method string getCertDownloadUrl() Obtain Download address for SSL certificate
 * @method void setCertDownloadUrl(string $CertDownloadUrl) Set Download address for SSL certificate
 * @method string getUrlExpiredTime() Obtain Expiration time of the certificate download address
 * @method void setUrlExpiredTime(string $UrlExpiredTime) Set Expiration time of the certificate download address
 * @method boolean getSSLConfig() Obtain Whether the SSL is enabled for the identified instance.
- `true`: Enabled
- `false`: Disabled
 * @method void setSSLConfig(boolean $SSLConfig) Set Whether the SSL is enabled for the identified instance.
- `true`: Enabled
- `false`: Disabled
 * @method boolean getFeatureSupport() Obtain Whether SSL is supported for the identified instance.
-`true`: Supported
-`false`: Not supported
 * @method void setFeatureSupport(boolean $FeatureSupport) Set Whether SSL is supported for the identified instance.
-`true`: Supported
-`false`: Not supported
 * @method integer getStatus() Obtain Status of SSL configuration
- `1`: Configuring
- `2`: Configured successfully
 * @method void setStatus(integer $Status) Set Status of SSL configuration
- `1`: Configuring
- `2`: Configured successfully
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSSLStatusResponse extends AbstractModel
{
    /**
     * @var string Download address for SSL certificate
     */
    public $CertDownloadUrl;

    /**
     * @var string Expiration time of the certificate download address
     */
    public $UrlExpiredTime;

    /**
     * @var boolean Whether the SSL is enabled for the identified instance.
- `true`: Enabled
- `false`: Disabled
     */
    public $SSLConfig;

    /**
     * @var boolean Whether SSL is supported for the identified instance.
-`true`: Supported
-`false`: Not supported
     */
    public $FeatureSupport;

    /**
     * @var integer Status of SSL configuration
- `1`: Configuring
- `2`: Configured successfully
     */
    public $Status;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $CertDownloadUrl Download address for SSL certificate
     * @param string $UrlExpiredTime Expiration time of the certificate download address
     * @param boolean $SSLConfig Whether the SSL is enabled for the identified instance.
- `true`: Enabled
- `false`: Disabled
     * @param boolean $FeatureSupport Whether SSL is supported for the identified instance.
-`true`: Supported
-`false`: Not supported
     * @param integer $Status Status of SSL configuration
- `1`: Configuring
- `2`: Configured successfully
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
        if (array_key_exists("CertDownloadUrl",$param) and $param["CertDownloadUrl"] !== null) {
            $this->CertDownloadUrl = $param["CertDownloadUrl"];
        }

        if (array_key_exists("UrlExpiredTime",$param) and $param["UrlExpiredTime"] !== null) {
            $this->UrlExpiredTime = $param["UrlExpiredTime"];
        }

        if (array_key_exists("SSLConfig",$param) and $param["SSLConfig"] !== null) {
            $this->SSLConfig = $param["SSLConfig"];
        }

        if (array_key_exists("FeatureSupport",$param) and $param["FeatureSupport"] !== null) {
            $this->FeatureSupport = $param["FeatureSupport"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
