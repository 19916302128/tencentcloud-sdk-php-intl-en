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
 * PostQuantumCryptoDecrypt response structure.
 *
 * @method string getKeyId() Obtain Globally unique CMK ID
 * @method void setKeyId(string $KeyId) Set Globally unique CMK ID
 * @method string getPlainText() Obtain If `EncryptionPublicKey` is left empty, a Base64-encoded ciphertext will be returned. To get the plaintext, you need to decode the ciphertext first.
If `EncryptionPublicKey` is passed in, this field u200dcontains the Base64-encoded ciphertext after asymmetric encryption by using the public key in `EncryptionPublicKey` To get the plaintext, you need to first decode the Base64 format, and then decrypwith the private key corresponding with the public key. The private key is uploaded by the user. 
 * @method void setPlainText(string $PlainText) Set If `EncryptionPublicKey` is left empty, a Base64-encoded ciphertext will be returned. To get the plaintext, you need to decode the ciphertext first.
If `EncryptionPublicKey` is passed in, this field u200dcontains the Base64-encoded ciphertext after asymmetric encryption by using the public key in `EncryptionPublicKey` To get the plaintext, you need to first decode the Base64 format, and then decrypwith the private key corresponding with the public key. The private key is uploaded by the user. 
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class PostQuantumCryptoDecryptResponse extends AbstractModel
{
    /**
     * @var string Globally unique CMK ID
     */
    public $KeyId;

    /**
     * @var string If `EncryptionPublicKey` is left empty, a Base64-encoded ciphertext will be returned. To get the plaintext, you need to decode the ciphertext first.
If `EncryptionPublicKey` is passed in, this field u200dcontains the Base64-encoded ciphertext after asymmetric encryption by using the public key in `EncryptionPublicKey` To get the plaintext, you need to first decode the Base64 format, and then decrypwith the private key corresponding with the public key. The private key is uploaded by the user. 
     */
    public $PlainText;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $KeyId Globally unique CMK ID
     * @param string $PlainText If `EncryptionPublicKey` is left empty, a Base64-encoded ciphertext will be returned. To get the plaintext, you need to decode the ciphertext first.
If `EncryptionPublicKey` is passed in, this field u200dcontains the Base64-encoded ciphertext after asymmetric encryption by using the public key in `EncryptionPublicKey` To get the plaintext, you need to first decode the Base64 format, and then decrypwith the private key corresponding with the public key. The private key is uploaded by the user. 
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("PlainText",$param) and $param["PlainText"] !== null) {
            $this->PlainText = $param["PlainText"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
