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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster advanced configurations
 *
 * @method boolean getIPVS() Obtain Whether IPVS is enabled
 * @method void setIPVS(boolean $IPVS) Set Whether IPVS is enabled
 * @method boolean getAsEnabled() Obtain Whether auto-scaling is enabled for nodes in the cluster (Enabling this function is not supported when you create a cluster)
 * @method void setAsEnabled(boolean $AsEnabled) Set Whether auto-scaling is enabled for nodes in the cluster (Enabling this function is not supported when you create a cluster)
 * @method string getContainerRuntime() Obtain Type of runtime component used by the cluster. The types include "docker" and "containerd". Default value: docker
 * @method void setContainerRuntime(string $ContainerRuntime) Set Type of runtime component used by the cluster. The types include "docker" and "containerd". Default value: docker
 * @method string getNodeNameType() Obtain NodeName type for a node in a cluster (This includes the two forms of **hostname** and **lan-ip**, with the default as **lan-ip**. If **hostname** is used, you need to set the HostName parameter when creating a node, and the InstanceName needs to be the same as the HostName.)
 * @method void setNodeNameType(string $NodeNameType) Set NodeName type for a node in a cluster (This includes the two forms of **hostname** and **lan-ip**, with the default as **lan-ip**. If **hostname** is used, you need to set the HostName parameter when creating a node, and the InstanceName needs to be the same as the HostName.)
 * @method ClusterExtraArgs getExtraArgs() Obtain Cluster custom parameter
 * @method void setExtraArgs(ClusterExtraArgs $ExtraArgs) Set Cluster custom parameter
 * @method string getNetworkType() Obtain Cluster network type, which can be GR (Global Router) or VPC-CNI. The default value is GR.
 * @method void setNetworkType(string $NetworkType) Set Cluster network type, which can be GR (Global Router) or VPC-CNI. The default value is GR.
 * @method boolean getIsNonStaticIpMode() Obtain Whether a cluster in VPC-CNI mode uses dynamic IP addresses. The default value is FALSE, which indicates that static IP addresses are used.
 * @method void setIsNonStaticIpMode(boolean $IsNonStaticIpMode) Set Whether a cluster in VPC-CNI mode uses dynamic IP addresses. The default value is FALSE, which indicates that static IP addresses are used.
 * @method boolean getDeletionProtection() Obtain Indicates whether to enable cluster deletion protection.
 * @method void setDeletionProtection(boolean $DeletionProtection) Set Indicates whether to enable cluster deletion protection.
 * @method string getKubeProxyMode() Obtain Cluster network proxy model
 * @method void setKubeProxyMode(string $KubeProxyMode) Set Cluster network proxy model
 * @method boolean getAuditEnabled() Obtain Indicates whether to enable auditing
 * @method void setAuditEnabled(boolean $AuditEnabled) Set Indicates whether to enable auditing
 * @method string getAuditLogsetId() Obtain Specifies the ID of logset to which the audit logs are uploaded.
 * @method void setAuditLogsetId(string $AuditLogsetId) Set Specifies the ID of logset to which the audit logs are uploaded.
 * @method string getAuditLogTopicId() Obtain Specifies the ID of topic to which the audit logs are uploaded.
 * @method void setAuditLogTopicId(string $AuditLogTopicId) Set Specifies the ID of topic to which the audit logs are uploaded.
 * @method string getVpcCniType() Obtain Specifies whether the VPC CNI type is multi-IP ENI or or independent ENI.
 * @method void setVpcCniType(string $VpcCniType) Set Specifies whether the VPC CNI type is multi-IP ENI or or independent ENI.
 */
class ClusterAdvancedSettings extends AbstractModel
{
    /**
     * @var boolean Whether IPVS is enabled
     */
    public $IPVS;

    /**
     * @var boolean Whether auto-scaling is enabled for nodes in the cluster (Enabling this function is not supported when you create a cluster)
     */
    public $AsEnabled;

    /**
     * @var string Type of runtime component used by the cluster. The types include "docker" and "containerd". Default value: docker
     */
    public $ContainerRuntime;

    /**
     * @var string NodeName type for a node in a cluster (This includes the two forms of **hostname** and **lan-ip**, with the default as **lan-ip**. If **hostname** is used, you need to set the HostName parameter when creating a node, and the InstanceName needs to be the same as the HostName.)
     */
    public $NodeNameType;

    /**
     * @var ClusterExtraArgs Cluster custom parameter
     */
    public $ExtraArgs;

    /**
     * @var string Cluster network type, which can be GR (Global Router) or VPC-CNI. The default value is GR.
     */
    public $NetworkType;

    /**
     * @var boolean Whether a cluster in VPC-CNI mode uses dynamic IP addresses. The default value is FALSE, which indicates that static IP addresses are used.
     */
    public $IsNonStaticIpMode;

    /**
     * @var boolean Indicates whether to enable cluster deletion protection.
     */
    public $DeletionProtection;

    /**
     * @var string Cluster network proxy model
     */
    public $KubeProxyMode;

    /**
     * @var boolean Indicates whether to enable auditing
     */
    public $AuditEnabled;

    /**
     * @var string Specifies the ID of logset to which the audit logs are uploaded.
     */
    public $AuditLogsetId;

    /**
     * @var string Specifies the ID of topic to which the audit logs are uploaded.
     */
    public $AuditLogTopicId;

    /**
     * @var string Specifies whether the VPC CNI type is multi-IP ENI or or independent ENI.
     */
    public $VpcCniType;

    /**
     * @param boolean $IPVS Whether IPVS is enabled
     * @param boolean $AsEnabled Whether auto-scaling is enabled for nodes in the cluster (Enabling this function is not supported when you create a cluster)
     * @param string $ContainerRuntime Type of runtime component used by the cluster. The types include "docker" and "containerd". Default value: docker
     * @param string $NodeNameType NodeName type for a node in a cluster (This includes the two forms of **hostname** and **lan-ip**, with the default as **lan-ip**. If **hostname** is used, you need to set the HostName parameter when creating a node, and the InstanceName needs to be the same as the HostName.)
     * @param ClusterExtraArgs $ExtraArgs Cluster custom parameter
     * @param string $NetworkType Cluster network type, which can be GR (Global Router) or VPC-CNI. The default value is GR.
     * @param boolean $IsNonStaticIpMode Whether a cluster in VPC-CNI mode uses dynamic IP addresses. The default value is FALSE, which indicates that static IP addresses are used.
     * @param boolean $DeletionProtection Indicates whether to enable cluster deletion protection.
     * @param string $KubeProxyMode Cluster network proxy model
     * @param boolean $AuditEnabled Indicates whether to enable auditing
     * @param string $AuditLogsetId Specifies the ID of logset to which the audit logs are uploaded.
     * @param string $AuditLogTopicId Specifies the ID of topic to which the audit logs are uploaded.
     * @param string $VpcCniType Specifies whether the VPC CNI type is multi-IP ENI or or independent ENI.
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
        if (array_key_exists("IPVS",$param) and $param["IPVS"] !== null) {
            $this->IPVS = $param["IPVS"];
        }

        if (array_key_exists("AsEnabled",$param) and $param["AsEnabled"] !== null) {
            $this->AsEnabled = $param["AsEnabled"];
        }

        if (array_key_exists("ContainerRuntime",$param) and $param["ContainerRuntime"] !== null) {
            $this->ContainerRuntime = $param["ContainerRuntime"];
        }

        if (array_key_exists("NodeNameType",$param) and $param["NodeNameType"] !== null) {
            $this->NodeNameType = $param["NodeNameType"];
        }

        if (array_key_exists("ExtraArgs",$param) and $param["ExtraArgs"] !== null) {
            $this->ExtraArgs = new ClusterExtraArgs();
            $this->ExtraArgs->deserialize($param["ExtraArgs"]);
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("IsNonStaticIpMode",$param) and $param["IsNonStaticIpMode"] !== null) {
            $this->IsNonStaticIpMode = $param["IsNonStaticIpMode"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("KubeProxyMode",$param) and $param["KubeProxyMode"] !== null) {
            $this->KubeProxyMode = $param["KubeProxyMode"];
        }

        if (array_key_exists("AuditEnabled",$param) and $param["AuditEnabled"] !== null) {
            $this->AuditEnabled = $param["AuditEnabled"];
        }

        if (array_key_exists("AuditLogsetId",$param) and $param["AuditLogsetId"] !== null) {
            $this->AuditLogsetId = $param["AuditLogsetId"];
        }

        if (array_key_exists("AuditLogTopicId",$param) and $param["AuditLogTopicId"] !== null) {
            $this->AuditLogTopicId = $param["AuditLogTopicId"];
        }

        if (array_key_exists("VpcCniType",$param) and $param["VpcCniType"] !== null) {
            $this->VpcCniType = $param["VpcCniType"];
        }
    }
}
