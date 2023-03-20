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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResultDownload response structure.
 *
 * @method string getPath() Obtain The file save path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set The file save path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain The task status. Valid values: `init`, `queue`, `format`, `compress`, `success`, `timeout`, and `error`.
 * @method void setStatus(string $Status) Set The task status. Valid values: `init`, `queue`, `format`, `compress`, `success`, `timeout`, and `error`.
 * @method string getReason() Obtain The task exception cause.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReason(string $Reason) Set The task exception cause.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSecretId() Obtain The temporary secret ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecretId(string $SecretId) Set The temporary secret ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSecretKey() Obtain The temporary secret key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecretKey(string $SecretKey) Set The temporary secret key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getToken() Obtain The temporary token.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setToken(string $Token) Set The temporary token.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeResultDownloadResponse extends AbstractModel
{
    /**
     * @var string The file save path.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var string The task status. Valid values: `init`, `queue`, `format`, `compress`, `success`, `timeout`, and `error`.
     */
    public $Status;

    /**
     * @var string The task exception cause.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Reason;

    /**
     * @var string The temporary secret ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecretId;

    /**
     * @var string The temporary secret key.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecretKey;

    /**
     * @var string The temporary token.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Token;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Path The file save path.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status The task status. Valid values: `init`, `queue`, `format`, `compress`, `success`, `timeout`, and `error`.
     * @param string $Reason The task exception cause.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SecretId The temporary secret ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SecretKey The temporary secret key.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Token The temporary token.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
