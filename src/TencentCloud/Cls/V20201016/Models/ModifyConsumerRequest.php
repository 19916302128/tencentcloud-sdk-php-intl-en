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
 * ModifyConsumer request structure.
 *
 * @method string getTopicId() Obtain Log topic ID bound to the task
 * @method void setTopicId(string $TopicId) Set Log topic ID bound to the task
 * @method boolean getEffective() Obtain Whether the shipping task takes effect (default: no)
 * @method void setEffective(boolean $Effective) Set Whether the shipping task takes effect (default: no)
 * @method boolean getNeedContent() Obtain Whether to ship metadata. Default value: `false`
 * @method void setNeedContent(boolean $NeedContent) Set Whether to ship metadata. Default value: `false`
 * @method ConsumerContent getContent() Obtain Metadata to ship if `NeedContent` is `true`
 * @method void setContent(ConsumerContent $Content) Set Metadata to ship if `NeedContent` is `true`
 * @method Ckafka getCkafka() Obtain CKafka information
 * @method void setCkafka(Ckafka $Ckafka) Set CKafka information
 */
class ModifyConsumerRequest extends AbstractModel
{
    /**
     * @var string Log topic ID bound to the task
     */
    public $TopicId;

    /**
     * @var boolean Whether the shipping task takes effect (default: no)
     */
    public $Effective;

    /**
     * @var boolean Whether to ship metadata. Default value: `false`
     */
    public $NeedContent;

    /**
     * @var ConsumerContent Metadata to ship if `NeedContent` is `true`
     */
    public $Content;

    /**
     * @var Ckafka CKafka information
     */
    public $Ckafka;

    /**
     * @param string $TopicId Log topic ID bound to the task
     * @param boolean $Effective Whether the shipping task takes effect (default: no)
     * @param boolean $NeedContent Whether to ship metadata. Default value: `false`
     * @param ConsumerContent $Content Metadata to ship if `NeedContent` is `true`
     * @param Ckafka $Ckafka CKafka information
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Effective",$param) and $param["Effective"] !== null) {
            $this->Effective = $param["Effective"];
        }

        if (array_key_exists("NeedContent",$param) and $param["NeedContent"] !== null) {
            $this->NeedContent = $param["NeedContent"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new ConsumerContent();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("Ckafka",$param) and $param["Ckafka"] !== null) {
            $this->Ckafka = new Ckafka();
            $this->Ckafka->deserialize($param["Ckafka"]);
        }
    }
}
