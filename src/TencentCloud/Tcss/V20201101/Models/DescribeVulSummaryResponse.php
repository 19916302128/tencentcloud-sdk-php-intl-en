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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulSummary response structure.
 *
 * @method integer getVulTotalCount() Obtain Total number of vulnerabilities
 * @method void setVulTotalCount(integer $VulTotalCount) Set Total number of vulnerabilities
 * @method integer getSeriousVulCount() Obtain Number of critical and high-risk vulnerabilities
 * @method void setSeriousVulCount(integer $SeriousVulCount) Set Number of critical and high-risk vulnerabilities
 * @method integer getSuggestVulCount() Obtain Number of high-priority vulnerabilities
 * @method void setSuggestVulCount(integer $SuggestVulCount) Set Number of high-priority vulnerabilities
 * @method integer getPocExpLevelVulCount() Obtain Number of vulnerabilities with POC or EXP
 * @method void setPocExpLevelVulCount(integer $PocExpLevelVulCount) Set Number of vulnerabilities with POC or EXP
 * @method integer getRemoteExpLevelVulCount() Obtain Number of vulnerabilities with remote EXP
 * @method void setRemoteExpLevelVulCount(integer $RemoteExpLevelVulCount) Set Number of vulnerabilities with remote EXP
 * @method integer getSeriousVulNewestImageCount() Obtain Number of images on the latest version affected by critical or high-risk vulnerabilities
 * @method void setSeriousVulNewestImageCount(integer $SeriousVulNewestImageCount) Set Number of images on the latest version affected by critical or high-risk vulnerabilities
 * @method integer getSystemVulnerabilityFocusCount() Obtain Number of high-priority system vulnerabilities
 * @method void setSystemVulnerabilityFocusCount(integer $SystemVulnerabilityFocusCount) Set Number of high-priority system vulnerabilities
 * @method integer getWebVulnerabilityFocusCount() Obtain Number of high-priority web vulnerabilities
 * @method void setWebVulnerabilityFocusCount(integer $WebVulnerabilityFocusCount) Set Number of high-priority web vulnerabilities
 * @method integer getSeriousVulnerabilityLocalImageCount() Obtain Number of affected local images
 * @method void setSeriousVulnerabilityLocalImageCount(integer $SeriousVulnerabilityLocalImageCount) Set Number of affected local images
 * @method integer getSeriousVulnerabilityRegistryImageCount() Obtain Number of affected repository images
 * @method void setSeriousVulnerabilityRegistryImageCount(integer $SeriousVulnerabilityRegistryImageCount) Set Number of affected repository images
 * @method integer getEmergencyVulnerabilityCount() Obtain Number of emergency vulnerabilities
 * @method void setEmergencyVulnerabilityCount(integer $EmergencyVulnerabilityCount) Set Number of emergency vulnerabilities
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVulSummaryResponse extends AbstractModel
{
    /**
     * @var integer Total number of vulnerabilities
     */
    public $VulTotalCount;

    /**
     * @var integer Number of critical and high-risk vulnerabilities
     */
    public $SeriousVulCount;

    /**
     * @var integer Number of high-priority vulnerabilities
     */
    public $SuggestVulCount;

    /**
     * @var integer Number of vulnerabilities with POC or EXP
     */
    public $PocExpLevelVulCount;

    /**
     * @var integer Number of vulnerabilities with remote EXP
     */
    public $RemoteExpLevelVulCount;

    /**
     * @var integer Number of images on the latest version affected by critical or high-risk vulnerabilities
     */
    public $SeriousVulNewestImageCount;

    /**
     * @var integer Number of high-priority system vulnerabilities
     */
    public $SystemVulnerabilityFocusCount;

    /**
     * @var integer Number of high-priority web vulnerabilities
     */
    public $WebVulnerabilityFocusCount;

    /**
     * @var integer Number of affected local images
     */
    public $SeriousVulnerabilityLocalImageCount;

    /**
     * @var integer Number of affected repository images
     */
    public $SeriousVulnerabilityRegistryImageCount;

    /**
     * @var integer Number of emergency vulnerabilities
     */
    public $EmergencyVulnerabilityCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $VulTotalCount Total number of vulnerabilities
     * @param integer $SeriousVulCount Number of critical and high-risk vulnerabilities
     * @param integer $SuggestVulCount Number of high-priority vulnerabilities
     * @param integer $PocExpLevelVulCount Number of vulnerabilities with POC or EXP
     * @param integer $RemoteExpLevelVulCount Number of vulnerabilities with remote EXP
     * @param integer $SeriousVulNewestImageCount Number of images on the latest version affected by critical or high-risk vulnerabilities
     * @param integer $SystemVulnerabilityFocusCount Number of high-priority system vulnerabilities
     * @param integer $WebVulnerabilityFocusCount Number of high-priority web vulnerabilities
     * @param integer $SeriousVulnerabilityLocalImageCount Number of affected local images
     * @param integer $SeriousVulnerabilityRegistryImageCount Number of affected repository images
     * @param integer $EmergencyVulnerabilityCount Number of emergency vulnerabilities
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
        if (array_key_exists("VulTotalCount",$param) and $param["VulTotalCount"] !== null) {
            $this->VulTotalCount = $param["VulTotalCount"];
        }

        if (array_key_exists("SeriousVulCount",$param) and $param["SeriousVulCount"] !== null) {
            $this->SeriousVulCount = $param["SeriousVulCount"];
        }

        if (array_key_exists("SuggestVulCount",$param) and $param["SuggestVulCount"] !== null) {
            $this->SuggestVulCount = $param["SuggestVulCount"];
        }

        if (array_key_exists("PocExpLevelVulCount",$param) and $param["PocExpLevelVulCount"] !== null) {
            $this->PocExpLevelVulCount = $param["PocExpLevelVulCount"];
        }

        if (array_key_exists("RemoteExpLevelVulCount",$param) and $param["RemoteExpLevelVulCount"] !== null) {
            $this->RemoteExpLevelVulCount = $param["RemoteExpLevelVulCount"];
        }

        if (array_key_exists("SeriousVulNewestImageCount",$param) and $param["SeriousVulNewestImageCount"] !== null) {
            $this->SeriousVulNewestImageCount = $param["SeriousVulNewestImageCount"];
        }

        if (array_key_exists("SystemVulnerabilityFocusCount",$param) and $param["SystemVulnerabilityFocusCount"] !== null) {
            $this->SystemVulnerabilityFocusCount = $param["SystemVulnerabilityFocusCount"];
        }

        if (array_key_exists("WebVulnerabilityFocusCount",$param) and $param["WebVulnerabilityFocusCount"] !== null) {
            $this->WebVulnerabilityFocusCount = $param["WebVulnerabilityFocusCount"];
        }

        if (array_key_exists("SeriousVulnerabilityLocalImageCount",$param) and $param["SeriousVulnerabilityLocalImageCount"] !== null) {
            $this->SeriousVulnerabilityLocalImageCount = $param["SeriousVulnerabilityLocalImageCount"];
        }

        if (array_key_exists("SeriousVulnerabilityRegistryImageCount",$param) and $param["SeriousVulnerabilityRegistryImageCount"] !== null) {
            $this->SeriousVulnerabilityRegistryImageCount = $param["SeriousVulnerabilityRegistryImageCount"];
        }

        if (array_key_exists("EmergencyVulnerabilityCount",$param) and $param["EmergencyVulnerabilityCount"] !== null) {
            $this->EmergencyVulnerabilityCount = $param["EmergencyVulnerabilityCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
