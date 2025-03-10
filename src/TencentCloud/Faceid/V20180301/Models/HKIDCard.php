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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Hong Kong (China) ID card.
 *
 * @method string getCnName() Obtain Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
Example:  SAN, Nan
 * @method void setCnName(string $CnName) Set Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
Example:  SAN, Nan
 * @method string getEnName() Obtain English name
Note: This field may return null, indicating that no valid values can be obtained.
Example: SAN, Nan
 * @method void setEnName(string $EnName) Set English name
Note: This field may return null, indicating that no valid values can be obtained.
Example: SAN, Nan
 * @method string getTelexCode() Obtain Telex code correspondint to the Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTelexCode(string $TelexCode) Set Telex code correspondint to the Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSex() Obtain Gender: "Male-M" or "Female-F"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSex(string $Sex) Set Gender: "Male-M" or "Female-F"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthday() Obtain Birthday
Note: This field may return null, indicating that no valid values can be obtained.
Example: 01-01-2001
 * @method void setBirthday(string $Birthday) Set Birthday
Note: This field may return null, indicating that no valid values can be obtained.
Example: 01-01-2001
 * @method string getPermanent() Obtain Permanent resident ID card: 0-non-permanent; 1-permanent; -1-unknown
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPermanent(string $Permanent) Set Permanent resident ID card: 0-non-permanent; 1-permanent; -1-unknown
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIdNum() Obtain ID card number
Note: This field may return null, indicating that no valid values can be obtained.
Example: C000000(E)
 * @method void setIdNum(string $IdNum) Set ID card number
Note: This field may return null, indicating that no valid values can be obtained.
Example: C000000(E)
 * @method string getSymbol() Obtain Lisence symbol, which is the symbol below Birthday. Example: "***AZ"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSymbol(string $Symbol) Set Lisence symbol, which is the symbol below Birthday. Example: "***AZ"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstIssueDate() Obtain The first date of issue
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstIssueDate(string $FirstIssueDate) Set The first date of issue
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCurrentIssueDate() Obtain The current date of issue
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurrentIssueDate(string $CurrentIssueDate) Set The current date of issue
Note: This field may return null, indicating that no valid values can be obtained.
 */
class HKIDCard extends AbstractModel
{
    /**
     * @var string Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
Example:  SAN, Nan
     */
    public $CnName;

    /**
     * @var string English name
Note: This field may return null, indicating that no valid values can be obtained.
Example: SAN, Nan
     */
    public $EnName;

    /**
     * @var string Telex code correspondint to the Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TelexCode;

    /**
     * @var string Gender: "Male-M" or "Female-F"
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sex;

    /**
     * @var string Birthday
Note: This field may return null, indicating that no valid values can be obtained.
Example: 01-01-2001
     */
    public $Birthday;

    /**
     * @var string Permanent resident ID card: 0-non-permanent; 1-permanent; -1-unknown
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Permanent;

    /**
     * @var string ID card number
Note: This field may return null, indicating that no valid values can be obtained.
Example: C000000(E)
     */
    public $IdNum;

    /**
     * @var string Lisence symbol, which is the symbol below Birthday. Example: "***AZ"
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Symbol;

    /**
     * @var string The first date of issue
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstIssueDate;

    /**
     * @var string The current date of issue
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CurrentIssueDate;

    /**
     * @param string $CnName Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
Example:  SAN, Nan
     * @param string $EnName English name
Note: This field may return null, indicating that no valid values can be obtained.
Example: SAN, Nan
     * @param string $TelexCode Telex code correspondint to the Chinese name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sex Gender: "Male-M" or "Female-F"
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Birthday Birthday
Note: This field may return null, indicating that no valid values can be obtained.
Example: 01-01-2001
     * @param string $Permanent Permanent resident ID card: 0-non-permanent; 1-permanent; -1-unknown
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IdNum ID card number
Note: This field may return null, indicating that no valid values can be obtained.
Example: C000000(E)
     * @param string $Symbol Lisence symbol, which is the symbol below Birthday. Example: "***AZ"
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstIssueDate The first date of issue
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CurrentIssueDate The current date of issue
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
        if (array_key_exists("CnName",$param) and $param["CnName"] !== null) {
            $this->CnName = $param["CnName"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("TelexCode",$param) and $param["TelexCode"] !== null) {
            $this->TelexCode = $param["TelexCode"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Permanent",$param) and $param["Permanent"] !== null) {
            $this->Permanent = $param["Permanent"];
        }

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = $param["IdNum"];
        }

        if (array_key_exists("Symbol",$param) and $param["Symbol"] !== null) {
            $this->Symbol = $param["Symbol"];
        }

        if (array_key_exists("FirstIssueDate",$param) and $param["FirstIssueDate"] !== null) {
            $this->FirstIssueDate = $param["FirstIssueDate"];
        }

        if (array_key_exists("CurrentIssueDate",$param) and $param["CurrentIssueDate"] !== null) {
            $this->CurrentIssueDate = $param["CurrentIssueDate"];
        }
    }
}
