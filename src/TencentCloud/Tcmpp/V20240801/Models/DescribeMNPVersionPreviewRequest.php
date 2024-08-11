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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMNPVersionPreview request structure.
 *
 * @method string getMNPId() Obtain Mini program ID
 * @method void setMNPId(string $MNPId) Set Mini program ID
 * @method integer getMNPVersionId() Obtain Mini program version ID
 * @method void setMNPVersionId(integer $MNPVersionId) Set Mini program version ID
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 */
class DescribeMNPVersionPreviewRequest extends AbstractModel
{
    /**
     * @var string Mini program ID
     */
    public $MNPId;

    /**
     * @var integer Mini program version ID
     */
    public $MNPVersionId;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @param string $MNPId Mini program ID
     * @param integer $MNPVersionId Mini program version ID
     * @param string $PlatformId Platform ID
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
        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("MNPVersionId",$param) and $param["MNPVersionId"] !== null) {
            $this->MNPVersionId = $param["MNPVersionId"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }
    }
}
