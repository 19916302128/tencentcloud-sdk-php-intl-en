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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWhiteBoxKey response structure.
 *
 * @method string getEncryptKey() Obtain Base64-encoded encryption key
 * @method void setEncryptKey(string $EncryptKey) Set Base64-encoded encryption key
 * @method string getDecryptKey() Obtain Base64-encoded decryption key
 * @method void setDecryptKey(string $DecryptKey) Set Base64-encoded decryption key
 * @method string getKeyId() Obtain Globally unique white-box key ID
 * @method void setKeyId(string $KeyId) Set Globally unique white-box key ID
 * @method integer getTagCode() Obtain Tag operation return code. 0: success; 1: internal error; 2: business processing error
 * @method void setTagCode(integer $TagCode) Set Tag operation return code. 0: success; 1: internal error; 2: business processing error
 * @method string getTagMsg() Obtain Tag operation return message
 * @method void setTagMsg(string $TagMsg) Set Tag operation return message
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateWhiteBoxKeyResponse extends AbstractModel
{
    /**
     * @var string Base64-encoded encryption key
     */
    public $EncryptKey;

    /**
     * @var string Base64-encoded decryption key
     */
    public $DecryptKey;

    /**
     * @var string Globally unique white-box key ID
     */
    public $KeyId;

    /**
     * @var integer Tag operation return code. 0: success; 1: internal error; 2: business processing error
     */
    public $TagCode;

    /**
     * @var string Tag operation return message
     */
    public $TagMsg;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $EncryptKey Base64-encoded encryption key
     * @param string $DecryptKey Base64-encoded decryption key
     * @param string $KeyId Globally unique white-box key ID
     * @param integer $TagCode Tag operation return code. 0: success; 1: internal error; 2: business processing error
     * @param string $TagMsg Tag operation return message
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
        if (array_key_exists("EncryptKey",$param) and $param["EncryptKey"] !== null) {
            $this->EncryptKey = $param["EncryptKey"];
        }

        if (array_key_exists("DecryptKey",$param) and $param["DecryptKey"] !== null) {
            $this->DecryptKey = $param["DecryptKey"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("TagCode",$param) and $param["TagCode"] !== null) {
            $this->TagCode = $param["TagCode"];
        }

        if (array_key_exists("TagMsg",$param) and $param["TagMsg"] !== null) {
            $this->TagMsg = $param["TagMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
