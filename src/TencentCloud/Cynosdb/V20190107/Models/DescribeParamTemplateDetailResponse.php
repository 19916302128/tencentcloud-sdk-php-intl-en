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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeParamTemplateDetail response structure.
 *
 * @method integer getTemplateId() Obtain Parameter template ID
 * @method void setTemplateId(integer $TemplateId) Set Parameter template ID
 * @method string getTemplateName() Obtain Parameter template name
 * @method void setTemplateName(string $TemplateName) Set Parameter template name
 * @method string getTemplateDescription() Obtain Parameter template description
 * @method void setTemplateDescription(string $TemplateDescription) Set Parameter template description
 * @method string getEngineVersion() Obtain Engine version
 * @method void setEngineVersion(string $EngineVersion) Set Engine version
 * @method integer getTotalCount() Obtain Total number of parameters
 * @method void setTotalCount(integer $TotalCount) Set Total number of parameters
 * @method array getItems() Obtain List of parameters
 * @method void setItems(array $Items) Set List of parameters
 * @method string getDbMode() Obtain Database type. Valid values:  `NORMAL`, `SERVERLESS`.
 * @method void setDbMode(string $DbMode) Set Database type. Valid values:  `NORMAL`, `SERVERLESS`.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeParamTemplateDetailResponse extends AbstractModel
{
    /**
     * @var integer Parameter template ID
     */
    public $TemplateId;

    /**
     * @var string Parameter template name
     */
    public $TemplateName;

    /**
     * @var string Parameter template description
     */
    public $TemplateDescription;

    /**
     * @var string Engine version
     */
    public $EngineVersion;

    /**
     * @var integer Total number of parameters
     */
    public $TotalCount;

    /**
     * @var array List of parameters
     */
    public $Items;

    /**
     * @var string Database type. Valid values:  `NORMAL`, `SERVERLESS`.
     */
    public $DbMode;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TemplateId Parameter template ID
     * @param string $TemplateName Parameter template name
     * @param string $TemplateDescription Parameter template description
     * @param string $EngineVersion Engine version
     * @param integer $TotalCount Total number of parameters
     * @param array $Items List of parameters
     * @param string $DbMode Database type. Valid values:  `NORMAL`, `SERVERLESS`.
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new ParamDetail();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
