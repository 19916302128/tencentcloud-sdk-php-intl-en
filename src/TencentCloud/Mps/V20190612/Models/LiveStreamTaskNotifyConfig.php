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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event notification configuration of a task.
 *
 * @method string getNotifyType() Obtain The notification type, `CMQ` by default. If this parameter is set to `URL`, HTTP callbacks are sent to the URL specified by `NotifyUrl`.

<font color="red">Note: If you do not pass this parameter or pass in an empty string, `CMQ` will be used. To use a different notification type, specify this parameter accordingly.</font>
 * @method void setNotifyType(string $NotifyType) Set The notification type, `CMQ` by default. If this parameter is set to `URL`, HTTP callbacks are sent to the URL specified by `NotifyUrl`.

<font color="red">Note: If you do not pass this parameter or pass in an empty string, `CMQ` will be used. To use a different notification type, specify this parameter accordingly.</font>
 * @method string getCmqModel() Obtain CMQ model. There are two types: `Queue` and `Topic`. Currently, only `Queue` is supported.
 * @method void setCmqModel(string $CmqModel) Set CMQ model. There are two types: `Queue` and `Topic`. Currently, only `Queue` is supported.
 * @method string getCmqRegion() Obtain CMQ region, such as `sh` and `bj`.
 * @method void setCmqRegion(string $CmqRegion) Set CMQ region, such as `sh` and `bj`.
 * @method string getQueueName() Obtain This parameter is valid when the model is `Queue`, indicating the name of the CMQ queue for receiving event notifications.
 * @method void setQueueName(string $QueueName) Set This parameter is valid when the model is `Queue`, indicating the name of the CMQ queue for receiving event notifications.
 * @method string getTopicName() Obtain This parameter is valid when the model is `Topic`, indicating the name of the CMQ topic for receiving event notifications.
 * @method void setTopicName(string $TopicName) Set This parameter is valid when the model is `Topic`, indicating the name of the CMQ topic for receiving event notifications.
 * @method string getNotifyUrl() Obtain HTTP callback URL, required if `NotifyType` is set to `URL`
 * @method void setNotifyUrl(string $NotifyUrl) Set HTTP callback URL, required if `NotifyType` is set to `URL`
 * @method string getNotifyKey() Obtain Key used to generate a callback signature.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNotifyKey(string $NotifyKey) Set Key used to generate a callback signature.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LiveStreamTaskNotifyConfig extends AbstractModel
{
    /**
     * @var string The notification type, `CMQ` by default. If this parameter is set to `URL`, HTTP callbacks are sent to the URL specified by `NotifyUrl`.

<font color="red">Note: If you do not pass this parameter or pass in an empty string, `CMQ` will be used. To use a different notification type, specify this parameter accordingly.</font>
     */
    public $NotifyType;

    /**
     * @var string CMQ model. There are two types: `Queue` and `Topic`. Currently, only `Queue` is supported.
     */
    public $CmqModel;

    /**
     * @var string CMQ region, such as `sh` and `bj`.
     */
    public $CmqRegion;

    /**
     * @var string This parameter is valid when the model is `Queue`, indicating the name of the CMQ queue for receiving event notifications.
     */
    public $QueueName;

    /**
     * @var string This parameter is valid when the model is `Topic`, indicating the name of the CMQ topic for receiving event notifications.
     */
    public $TopicName;

    /**
     * @var string HTTP callback URL, required if `NotifyType` is set to `URL`
     */
    public $NotifyUrl;

    /**
     * @var string Key used to generate a callback signature.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NotifyKey;

    /**
     * @param string $NotifyType The notification type, `CMQ` by default. If this parameter is set to `URL`, HTTP callbacks are sent to the URL specified by `NotifyUrl`.

<font color="red">Note: If you do not pass this parameter or pass in an empty string, `CMQ` will be used. To use a different notification type, specify this parameter accordingly.</font>
     * @param string $CmqModel CMQ model. There are two types: `Queue` and `Topic`. Currently, only `Queue` is supported.
     * @param string $CmqRegion CMQ region, such as `sh` and `bj`.
     * @param string $QueueName This parameter is valid when the model is `Queue`, indicating the name of the CMQ queue for receiving event notifications.
     * @param string $TopicName This parameter is valid when the model is `Topic`, indicating the name of the CMQ topic for receiving event notifications.
     * @param string $NotifyUrl HTTP callback URL, required if `NotifyType` is set to `URL`
     * @param string $NotifyKey Key used to generate a callback signature.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }

        if (array_key_exists("CmqModel",$param) and $param["CmqModel"] !== null) {
            $this->CmqModel = $param["CmqModel"];
        }

        if (array_key_exists("CmqRegion",$param) and $param["CmqRegion"] !== null) {
            $this->CmqRegion = $param["CmqRegion"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("NotifyKey",$param) and $param["NotifyKey"] !== null) {
            $this->NotifyKey = $param["NotifyKey"];
        }
    }
}
