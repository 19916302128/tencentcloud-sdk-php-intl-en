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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstance request structure.
 *
 * @method integer getProductId() Obtain Product ID. Different product IDs represent different EMR product versions. Valid values:
<li>1: EMR v1.3.1.</li>
<li>2: EMR v2.0.1.</li>
<li>4: EMR v2.1.0.</li>
<li>7: EMR v3.0.0.</li>
 * @method void setProductId(integer $ProductId) Set Product ID. Different product IDs represent different EMR product versions. Valid values:
<li>1: EMR v1.3.1.</li>
<li>2: EMR v2.0.1.</li>
<li>4: EMR v2.1.0.</li>
<li>7: EMR v3.0.0.</li>
 * @method VPCSettings getVPCSettings() Obtain Configuration information of VPC. This parameter is used to specify the VPC ID, subnet ID, etc.
 * @method void setVPCSettings(VPCSettings $VPCSettings) Set Configuration information of VPC. This parameter is used to specify the VPC ID, subnet ID, etc.
 * @method array getSoftware() Obtain List of deployed components. Different required components need to be selected for different EMR product IDs (i.e., `ProductId`; for specific meanings, please see the `ProductId` field in the input parameter):
<li>When `ProductId` is 1, the required components include hadoop-2.7.3, knox-1.2.0, and zookeeper-3.4.9</li>
<li>When `ProductId` is 2, the required components include hadoop-2.7.3, knox-1.2.0, and zookeeper-3.4.9</li>
<li>When `ProductId` is 4, the required components include hadoop-2.8.4, knox-1.2.0, and zookeeper-3.4.9</li>
<li>When `ProductId` is 7, the required components include hadoop-3.1.2, knox-1.2.0, and zookeeper-3.4.9</li>
 * @method void setSoftware(array $Software) Set List of deployed components. Different required components need to be selected for different EMR product IDs (i.e., `ProductId`; for specific meanings, please see the `ProductId` field in the input parameter):
<li>When `ProductId` is 1, the required components include hadoop-2.7.3, knox-1.2.0, and zookeeper-3.4.9</li>
<li>When `ProductId` is 2, the required components include hadoop-2.7.3, knox-1.2.0, and zookeeper-3.4.9</li>
<li>When `ProductId` is 4, the required components include hadoop-2.8.4, knox-1.2.0, and zookeeper-3.4.9</li>
<li>When `ProductId` is 7, the required components include hadoop-3.1.2, knox-1.2.0, and zookeeper-3.4.9</li>
 * @method NewResourceSpec getResourceSpec() Obtain Node resource specification.
 * @method void setResourceSpec(NewResourceSpec $ResourceSpec) Set Node resource specification.
 * @method integer getSupportHA() Obtain Whether to enable high node availability. Valid values:
<li>0: does not enable high availability of node.</li>
<li>1: enables high availability of node.</li>
 * @method void setSupportHA(integer $SupportHA) Set Whether to enable high node availability. Valid values:
<li>0: does not enable high availability of node.</li>
<li>1: enables high availability of node.</li>
 * @method string getInstanceName() Obtain Instance name.
<li>Length limit: 6-36 characters.</li>
<li>Only letters, numbers, dashes (-), and underscores (_) are supported.</li>
 * @method void setInstanceName(string $InstanceName) Set Instance name.
<li>Length limit: 6-36 characters.</li>
<li>Only letters, numbers, dashes (-), and underscores (_) are supported.</li>
 * @method integer getPayMode() Obtain Instance billing mode. Valid values:
<li>0: pay-as-you-go.</li>
 * @method void setPayMode(integer $PayMode) Set Instance billing mode. Valid values:
<li>0: pay-as-you-go.</li>
 * @method Placement getPlacement() Obtain Instance location. This parameter is used to specify the AZ, project, and other attributes of the instance.
 * @method void setPlacement(Placement $Placement) Set Instance location. This parameter is used to specify the AZ, project, and other attributes of the instance.
 * @method integer getTimeSpan() Obtain Purchase duration of instance, which needs to be used together with `TimeUnit`.
<li>When `TimeUnit` is `s`, this parameter can only be filled with 3600, indicating a pay-as-you-go instance.</li>
<li>When `TimeUnit` is `m`, the number entered in this parameter indicates the purchase duration of the monthly-subscription instance; for example, 1 means one month</li>
 * @method void setTimeSpan(integer $TimeSpan) Set Purchase duration of instance, which needs to be used together with `TimeUnit`.
<li>When `TimeUnit` is `s`, this parameter can only be filled with 3600, indicating a pay-as-you-go instance.</li>
<li>When `TimeUnit` is `m`, the number entered in this parameter indicates the purchase duration of the monthly-subscription instance; for example, 1 means one month</li>
 * @method string getTimeUnit() Obtain Time unit of instance purchase duration. Valid values:
<li>s: seconds. When `PayMode` is 0, `TimeUnit` can only be `s`.</li>
<li>m: month. When `PayMode` is 1, `TimeUnit` can only be `m`.</li>
 * @method void setTimeUnit(string $TimeUnit) Set Time unit of instance purchase duration. Valid values:
<li>s: seconds. When `PayMode` is 0, `TimeUnit` can only be `s`.</li>
<li>m: month. When `PayMode` is 1, `TimeUnit` can only be `m`.</li>
 * @method LoginSettings getLoginSettings() Obtain Instance login settings. This parameter allows you to set the login password or key for your purchased node.
<li>If the key is set, the password will be only used for login to the native component WebUI.</li>
<li>If the key is not set, the password will be used for login to all purchased nodes and the native component WebUI.</li>
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set Instance login settings. This parameter allows you to set the login password or key for your purchased node.
<li>If the key is set, the password will be only used for login to the native component WebUI.</li>
<li>If the key is not set, the password will be used for login to all purchased nodes and the native component WebUI.</li>
 * @method COSSettings getCOSSettings() Obtain Parameter required for enabling COS access.
 * @method void setCOSSettings(COSSettings $COSSettings) Set Parameter required for enabling COS access.
 * @method string getSgId() Obtain Security group to which an instance belongs in the format of `sg-xxxxxxxx`. This parameter can be obtained from the `SecurityGroupId` field in the return value of the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) API.
 * @method void setSgId(string $SgId) Set Security group to which an instance belongs in the format of `sg-xxxxxxxx`. This parameter can be obtained from the `SecurityGroupId` field in the return value of the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) API.
 * @method array getPreExecutedFileSettings() Obtain Bootstrap script settings.
 * @method void setPreExecutedFileSettings(array $PreExecutedFileSettings) Set Bootstrap script settings.
 * @method integer getAutoRenew() Obtain Whether auto-renewal is enabled. Valid values:
<li>0: auto-renewal not enabled.</li>
<li>1: auto-renewal enabled.</li>
 * @method void setAutoRenew(integer $AutoRenew) Set Whether auto-renewal is enabled. Valid values:
<li>0: auto-renewal not enabled.</li>
<li>1: auto-renewal enabled.</li>
 * @method string getClientToken() Obtain Client token.
 * @method void setClientToken(string $ClientToken) Set Client token.
 * @method string getNeedMasterWan() Obtain Whether to enable public IP access for master node. Valid values:
<li>NEED_MASTER_WAN: enables public IP for master node.</li>
<li>NOT_NEED_MASTER_WAN: does not enable.</li>Public IP is enabled for master node by default.
 * @method void setNeedMasterWan(string $NeedMasterWan) Set Whether to enable public IP access for master node. Valid values:
<li>NEED_MASTER_WAN: enables public IP for master node.</li>
<li>NOT_NEED_MASTER_WAN: does not enable.</li>Public IP is enabled for master node by default.
 * @method integer getRemoteLoginAtCreate() Obtain Whether to enable remote public network login, i.e., port 22. When `SgId` is not empty, this parameter does not take effect.
 * @method void setRemoteLoginAtCreate(integer $RemoteLoginAtCreate) Set Whether to enable remote public network login, i.e., port 22. When `SgId` is not empty, this parameter does not take effect.
 * @method integer getCheckSecurity() Obtain Whether to enable secure cluster. 0: no; other values: yes.
 * @method void setCheckSecurity(integer $CheckSecurity) Set Whether to enable secure cluster. 0: no; other values: yes.
 * @method string getExtendFsField() Obtain Accesses to external file system.
 * @method void setExtendFsField(string $ExtendFsField) Set Accesses to external file system.
 * @method array getTags() Obtain Tag description list. This parameter is used to bind a tag to a resource instance.
 * @method void setTags(array $Tags) Set Tag description list. This parameter is used to bind a tag to a resource instance.
 * @method array getDisasterRecoverGroupIds() Obtain List of spread placement group IDs. Only one can be specified currently.
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set List of spread placement group IDs. Only one can be specified currently.
 * @method integer getCbsEncrypt() Obtain CBS disk encryption at the cluster level. 0: not encrypted, 1: encrypted
 * @method void setCbsEncrypt(integer $CbsEncrypt) Set CBS disk encryption at the cluster level. 0: not encrypted, 1: encrypted
 * @method string getMetaType() Obtain Hive-shared metadatabase type. Valid values:
<li>EMR_DEFAULT_META: the cluster creates one by default.</li>
<li>EMR_EXIST_META: the cluster uses the specified EMR-MetaDB instance.</li>
<li>USER_CUSTOM_META: the cluster uses a custom MetaDB instance.</li>
 * @method void setMetaType(string $MetaType) Set Hive-shared metadatabase type. Valid values:
<li>EMR_DEFAULT_META: the cluster creates one by default.</li>
<li>EMR_EXIST_META: the cluster uses the specified EMR-MetaDB instance.</li>
<li>USER_CUSTOM_META: the cluster uses a custom MetaDB instance.</li>
 * @method string getUnifyMetaInstanceId() Obtain EMR-MetaDB instance
 * @method void setUnifyMetaInstanceId(string $UnifyMetaInstanceId) Set EMR-MetaDB instance
 * @method CustomMetaInfo getMetaDBInfo() Obtain Custom MetaDB instance information
 * @method void setMetaDBInfo(CustomMetaInfo $MetaDBInfo) Set Custom MetaDB instance information
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var integer Product ID. Different product IDs represent different EMR product versions. Valid values:
<li>1: EMR v1.3.1.</li>
<li>2: EMR v2.0.1.</li>
<li>4: EMR v2.1.0.</li>
<li>7: EMR v3.0.0.</li>
     */
    public $ProductId;

    /**
     * @var VPCSettings Configuration information of VPC. This parameter is used to specify the VPC ID, subnet ID, etc.
     */
    public $VPCSettings;

    /**
     * @var array List of deployed components. Different required components need to be selected for different EMR product IDs (i.e., `ProductId`; for specific meanings, please see the `ProductId` field in the input parameter):
<li>When `ProductId` is 1, the required components include hadoop-2.7.3, knox-1.2.0, and zookeeper-3.4.9</li>
<li>When `ProductId` is 2, the required components include hadoop-2.7.3, knox-1.2.0, and zookeeper-3.4.9</li>
<li>When `ProductId` is 4, the required components include hadoop-2.8.4, knox-1.2.0, and zookeeper-3.4.9</li>
<li>When `ProductId` is 7, the required components include hadoop-3.1.2, knox-1.2.0, and zookeeper-3.4.9</li>
     */
    public $Software;

    /**
     * @var NewResourceSpec Node resource specification.
     */
    public $ResourceSpec;

    /**
     * @var integer Whether to enable high node availability. Valid values:
<li>0: does not enable high availability of node.</li>
<li>1: enables high availability of node.</li>
     */
    public $SupportHA;

    /**
     * @var string Instance name.
<li>Length limit: 6-36 characters.</li>
<li>Only letters, numbers, dashes (-), and underscores (_) are supported.</li>
     */
    public $InstanceName;

    /**
     * @var integer Instance billing mode. Valid values:
<li>0: pay-as-you-go.</li>
     */
    public $PayMode;

    /**
     * @var Placement Instance location. This parameter is used to specify the AZ, project, and other attributes of the instance.
     */
    public $Placement;

    /**
     * @var integer Purchase duration of instance, which needs to be used together with `TimeUnit`.
<li>When `TimeUnit` is `s`, this parameter can only be filled with 3600, indicating a pay-as-you-go instance.</li>
<li>When `TimeUnit` is `m`, the number entered in this parameter indicates the purchase duration of the monthly-subscription instance; for example, 1 means one month</li>
     */
    public $TimeSpan;

    /**
     * @var string Time unit of instance purchase duration. Valid values:
<li>s: seconds. When `PayMode` is 0, `TimeUnit` can only be `s`.</li>
<li>m: month. When `PayMode` is 1, `TimeUnit` can only be `m`.</li>
     */
    public $TimeUnit;

    /**
     * @var LoginSettings Instance login settings. This parameter allows you to set the login password or key for your purchased node.
<li>If the key is set, the password will be only used for login to the native component WebUI.</li>
<li>If the key is not set, the password will be used for login to all purchased nodes and the native component WebUI.</li>
     */
    public $LoginSettings;

    /**
     * @var COSSettings Parameter required for enabling COS access.
     */
    public $COSSettings;

    /**
     * @var string Security group to which an instance belongs in the format of `sg-xxxxxxxx`. This parameter can be obtained from the `SecurityGroupId` field in the return value of the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) API.
     */
    public $SgId;

    /**
     * @var array Bootstrap script settings.
     */
    public $PreExecutedFileSettings;

    /**
     * @var integer Whether auto-renewal is enabled. Valid values:
<li>0: auto-renewal not enabled.</li>
<li>1: auto-renewal enabled.</li>
     */
    public $AutoRenew;

    /**
     * @var string Client token.
     */
    public $ClientToken;

    /**
     * @var string Whether to enable public IP access for master node. Valid values:
<li>NEED_MASTER_WAN: enables public IP for master node.</li>
<li>NOT_NEED_MASTER_WAN: does not enable.</li>Public IP is enabled for master node by default.
     */
    public $NeedMasterWan;

    /**
     * @var integer Whether to enable remote public network login, i.e., port 22. When `SgId` is not empty, this parameter does not take effect.
     */
    public $RemoteLoginAtCreate;

    /**
     * @var integer Whether to enable secure cluster. 0: no; other values: yes.
     */
    public $CheckSecurity;

    /**
     * @var string Accesses to external file system.
     */
    public $ExtendFsField;

    /**
     * @var array Tag description list. This parameter is used to bind a tag to a resource instance.
     */
    public $Tags;

    /**
     * @var array List of spread placement group IDs. Only one can be specified currently.
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var integer CBS disk encryption at the cluster level. 0: not encrypted, 1: encrypted
     */
    public $CbsEncrypt;

    /**
     * @var string Hive-shared metadatabase type. Valid values:
<li>EMR_DEFAULT_META: the cluster creates one by default.</li>
<li>EMR_EXIST_META: the cluster uses the specified EMR-MetaDB instance.</li>
<li>USER_CUSTOM_META: the cluster uses a custom MetaDB instance.</li>
     */
    public $MetaType;

    /**
     * @var string EMR-MetaDB instance
     */
    public $UnifyMetaInstanceId;

    /**
     * @var CustomMetaInfo Custom MetaDB instance information
     */
    public $MetaDBInfo;

    /**
     * @param integer $ProductId Product ID. Different product IDs represent different EMR product versions. Valid values:
<li>1: EMR v1.3.1.</li>
<li>2: EMR v2.0.1.</li>
<li>4: EMR v2.1.0.</li>
<li>7: EMR v3.0.0.</li>
     * @param VPCSettings $VPCSettings Configuration information of VPC. This parameter is used to specify the VPC ID, subnet ID, etc.
     * @param array $Software List of deployed components. Different required components need to be selected for different EMR product IDs (i.e., `ProductId`; for specific meanings, please see the `ProductId` field in the input parameter):
<li>When `ProductId` is 1, the required components include hadoop-2.7.3, knox-1.2.0, and zookeeper-3.4.9</li>
<li>When `ProductId` is 2, the required components include hadoop-2.7.3, knox-1.2.0, and zookeeper-3.4.9</li>
<li>When `ProductId` is 4, the required components include hadoop-2.8.4, knox-1.2.0, and zookeeper-3.4.9</li>
<li>When `ProductId` is 7, the required components include hadoop-3.1.2, knox-1.2.0, and zookeeper-3.4.9</li>
     * @param NewResourceSpec $ResourceSpec Node resource specification.
     * @param integer $SupportHA Whether to enable high node availability. Valid values:
<li>0: does not enable high availability of node.</li>
<li>1: enables high availability of node.</li>
     * @param string $InstanceName Instance name.
<li>Length limit: 6-36 characters.</li>
<li>Only letters, numbers, dashes (-), and underscores (_) are supported.</li>
     * @param integer $PayMode Instance billing mode. Valid values:
<li>0: pay-as-you-go.</li>
     * @param Placement $Placement Instance location. This parameter is used to specify the AZ, project, and other attributes of the instance.
     * @param integer $TimeSpan Purchase duration of instance, which needs to be used together with `TimeUnit`.
<li>When `TimeUnit` is `s`, this parameter can only be filled with 3600, indicating a pay-as-you-go instance.</li>
<li>When `TimeUnit` is `m`, the number entered in this parameter indicates the purchase duration of the monthly-subscription instance; for example, 1 means one month</li>
     * @param string $TimeUnit Time unit of instance purchase duration. Valid values:
<li>s: seconds. When `PayMode` is 0, `TimeUnit` can only be `s`.</li>
<li>m: month. When `PayMode` is 1, `TimeUnit` can only be `m`.</li>
     * @param LoginSettings $LoginSettings Instance login settings. This parameter allows you to set the login password or key for your purchased node.
<li>If the key is set, the password will be only used for login to the native component WebUI.</li>
<li>If the key is not set, the password will be used for login to all purchased nodes and the native component WebUI.</li>
     * @param COSSettings $COSSettings Parameter required for enabling COS access.
     * @param string $SgId Security group to which an instance belongs in the format of `sg-xxxxxxxx`. This parameter can be obtained from the `SecurityGroupId` field in the return value of the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) API.
     * @param array $PreExecutedFileSettings Bootstrap script settings.
     * @param integer $AutoRenew Whether auto-renewal is enabled. Valid values:
<li>0: auto-renewal not enabled.</li>
<li>1: auto-renewal enabled.</li>
     * @param string $ClientToken Client token.
     * @param string $NeedMasterWan Whether to enable public IP access for master node. Valid values:
<li>NEED_MASTER_WAN: enables public IP for master node.</li>
<li>NOT_NEED_MASTER_WAN: does not enable.</li>Public IP is enabled for master node by default.
     * @param integer $RemoteLoginAtCreate Whether to enable remote public network login, i.e., port 22. When `SgId` is not empty, this parameter does not take effect.
     * @param integer $CheckSecurity Whether to enable secure cluster. 0: no; other values: yes.
     * @param string $ExtendFsField Accesses to external file system.
     * @param array $Tags Tag description list. This parameter is used to bind a tag to a resource instance.
     * @param array $DisasterRecoverGroupIds List of spread placement group IDs. Only one can be specified currently.
     * @param integer $CbsEncrypt CBS disk encryption at the cluster level. 0: not encrypted, 1: encrypted
     * @param string $MetaType Hive-shared metadatabase type. Valid values:
<li>EMR_DEFAULT_META: the cluster creates one by default.</li>
<li>EMR_EXIST_META: the cluster uses the specified EMR-MetaDB instance.</li>
<li>USER_CUSTOM_META: the cluster uses a custom MetaDB instance.</li>
     * @param string $UnifyMetaInstanceId EMR-MetaDB instance
     * @param CustomMetaInfo $MetaDBInfo Custom MetaDB instance information
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("VPCSettings",$param) and $param["VPCSettings"] !== null) {
            $this->VPCSettings = new VPCSettings();
            $this->VPCSettings->deserialize($param["VPCSettings"]);
        }

        if (array_key_exists("Software",$param) and $param["Software"] !== null) {
            $this->Software = $param["Software"];
        }

        if (array_key_exists("ResourceSpec",$param) and $param["ResourceSpec"] !== null) {
            $this->ResourceSpec = new NewResourceSpec();
            $this->ResourceSpec->deserialize($param["ResourceSpec"]);
        }

        if (array_key_exists("SupportHA",$param) and $param["SupportHA"] !== null) {
            $this->SupportHA = $param["SupportHA"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("COSSettings",$param) and $param["COSSettings"] !== null) {
            $this->COSSettings = new COSSettings();
            $this->COSSettings->deserialize($param["COSSettings"]);
        }

        if (array_key_exists("SgId",$param) and $param["SgId"] !== null) {
            $this->SgId = $param["SgId"];
        }

        if (array_key_exists("PreExecutedFileSettings",$param) and $param["PreExecutedFileSettings"] !== null) {
            $this->PreExecutedFileSettings = [];
            foreach ($param["PreExecutedFileSettings"] as $key => $value){
                $obj = new PreExecuteFileSettings();
                $obj->deserialize($value);
                array_push($this->PreExecutedFileSettings, $obj);
            }
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("NeedMasterWan",$param) and $param["NeedMasterWan"] !== null) {
            $this->NeedMasterWan = $param["NeedMasterWan"];
        }

        if (array_key_exists("RemoteLoginAtCreate",$param) and $param["RemoteLoginAtCreate"] !== null) {
            $this->RemoteLoginAtCreate = $param["RemoteLoginAtCreate"];
        }

        if (array_key_exists("CheckSecurity",$param) and $param["CheckSecurity"] !== null) {
            $this->CheckSecurity = $param["CheckSecurity"];
        }

        if (array_key_exists("ExtendFsField",$param) and $param["ExtendFsField"] !== null) {
            $this->ExtendFsField = $param["ExtendFsField"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("CbsEncrypt",$param) and $param["CbsEncrypt"] !== null) {
            $this->CbsEncrypt = $param["CbsEncrypt"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("UnifyMetaInstanceId",$param) and $param["UnifyMetaInstanceId"] !== null) {
            $this->UnifyMetaInstanceId = $param["UnifyMetaInstanceId"];
        }

        if (array_key_exists("MetaDBInfo",$param) and $param["MetaDBInfo"] !== null) {
            $this->MetaDBInfo = new CustomMetaInfo();
            $this->MetaDBInfo->deserialize($param["MetaDBInfo"]);
        }
    }
}
