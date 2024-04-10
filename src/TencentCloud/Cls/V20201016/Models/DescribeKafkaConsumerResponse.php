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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKafkaConsumer response structure.
 *
 * @method boolean getStatus() Obtain Whether Kafka Protocol Consumption is enabled
 * @method void setStatus(boolean $Status) Set Whether Kafka Protocol Consumption is enabled
 * @method string getTopicID() Obtain Topic Parameter used by KafkaConsumer during consumption
 * @method void setTopicID(string $TopicID) Set Topic Parameter used by KafkaConsumer during consumption
 * @method integer getCompression() Obtain Compression mode [0:NONE；2:SNAPPY；3:LZ4]
 * @method void setCompression(integer $Compression) Set Compression mode [0:NONE；2:SNAPPY；3:LZ4]
 * @method KafkaConsumerContent getConsumerContent() Obtain Kafka protocol consumer data format
 * @method void setConsumerContent(KafkaConsumerContent $ConsumerContent) Set Kafka protocol consumer data format
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeKafkaConsumerResponse extends AbstractModel
{
    /**
     * @var boolean Whether Kafka Protocol Consumption is enabled
     */
    public $Status;

    /**
     * @var string Topic Parameter used by KafkaConsumer during consumption
     */
    public $TopicID;

    /**
     * @var integer Compression mode [0:NONE；2:SNAPPY；3:LZ4]
     */
    public $Compression;

    /**
     * @var KafkaConsumerContent Kafka protocol consumer data format
     */
    public $ConsumerContent;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $Status Whether Kafka Protocol Consumption is enabled
     * @param string $TopicID Topic Parameter used by KafkaConsumer during consumption
     * @param integer $Compression Compression mode [0:NONE；2:SNAPPY；3:LZ4]
     * @param KafkaConsumerContent $ConsumerContent Kafka protocol consumer data format
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TopicID",$param) and $param["TopicID"] !== null) {
            $this->TopicID = $param["TopicID"];
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = $param["Compression"];
        }

        if (array_key_exists("ConsumerContent",$param) and $param["ConsumerContent"] !== null) {
            $this->ConsumerContent = new KafkaConsumerContent();
            $this->ConsumerContent->deserialize($param["ConsumerContent"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
