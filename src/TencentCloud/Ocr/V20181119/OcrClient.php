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

namespace TencentCloud\Ocr\V20181119;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ocr\V20181119\Models as Models;

/**
 * @method Models\BankCardOCRResponse BankCardOCR(Models\BankCardOCRRequest $req) This API is used to detect and recognize key fields such as the card number, bank information, and expiration date on mainstream bank cards in Mainland China.

This API is not fully available for the time being. For more information, please contact your [Tencent Cloud sales rep](https://intl.cloud.tencent.com/contact-sales).
 * @method Models\GeneralAccurateOCRResponse GeneralAccurateOCR(Models\GeneralAccurateOCRRequest $req) This API is used to detect and recognize characters in an image. It can recognize Chinese, English, Chinese-English, digits, and special symbols and return the text box positions and characters.

It is suitable for scenarios with a lot of characters in complex layouts and requiring high recognition accuracy, such as examination papers, online images, signboards, and legal documents.

Strengths: compared with general print recognition, it provides higher-precision character recognition services. Its accuracy and recall rate are higher in difficult scenarios such as a large number of characters, long strings of digits, small characters, blurry characters, and tilted text.

This API is not fully available for the time being. For more information, please contact your [Tencent Cloud sales rep](https://intl.cloud.tencent.com/contact-sales).
 * @method Models\GeneralBasicOCRResponse GeneralBasicOCR(Models\GeneralBasicOCRRequest $req) This API is used to detect and recognize characters in an image in the following 20 languages: Chinese, English, Japanese, Korean, Spanish, French, German, Portuguese, Vietnamese, Malay, Russian, Italian, Dutch, Swedish, Finnish, Danish, Norwegian, Hungarian, Thai, and Arabic. Mixed characters in English and each supported language can be recognized together.

It can recognize printed text in paper documents, online images, ads, signboards, menus, video titles, profile photos, etc.

Strengths: it can automatically recognize the text language, return the text box coordinate information, and automatically rotate tilted text to the upright direction.

This API is not fully available for the time being. For more information, please contact your [Tencent Cloud sales rep](https://intl.cloud.tencent.com/contact-sales).
 * @method Models\HKIDCardOCRResponse HKIDCardOCR(Models\HKIDCardOCRRequest $req) This API is used to recognize key fields on the photo side of a Hong Kong (China) identity card, including name in Chinese, name in English, telecode for name, date of birth, gender, document symbol, date of the first issue, date of the last receipt, identity card number, and permanent residency attribute. It can check for card authenticity and crop the identity photo.

This API is not fully available for the time being. For more information, please contact your [Tencent Cloud sales rep](https://intl.cloud.tencent.com/contact-sales).

 * @method Models\MLIDCardOCRResponse MLIDCardOCR(Models\MLIDCardOCRRequest $req) This API is used to recognize a Malaysian identity card, including identity card number, name, gender, and address. It is also used to crop identity photos and give alarms for photographed or photocopied certificates.

This API is not fully available for the time being. For more information, contact your [Tencent Cloud sales rep](https://intl.cloud.tencent.com/contact-sales).
 * @method Models\MLIDPassportOCRResponse MLIDPassportOCR(Models\MLIDPassportOCRRequest $req) This API is used to recognize a passport issued in Hong Kong/Macao/Taiwan (China) or other countries/regions. Recognizable fields include passport ID, name, date of birth, gender, expiration date, issuing country/region, and nationality. It has the features of cropping identity photos and alarming for photographed or photocopied documents.

This API is not fully available for the time being. For more information, please contact your [Tencent Cloud sales rep](https://intl.cloud.tencent.com/contact-sales).
 * @method Models\RecognizeIndonesiaIDCardOCRResponse RecognizeIndonesiaIDCardOCR(Models\RecognizeIndonesiaIDCardOCRRequest $req) This API is used to recognize an Indonesian identity card.

The API request rate is limited to 20 requests/sec by default.
 * @method Models\RecognizeKoreanDrivingLicenseOCRResponse RecognizeKoreanDrivingLicenseOCR(Models\RecognizeKoreanDrivingLicenseOCRRequest $req) This API is used to recognize a South Korean driver's license.
 * @method Models\RecognizeKoreanIDCardOCRResponse RecognizeKoreanIDCardOCR(Models\RecognizeKoreanIDCardOCRRequest $req) This API is used to recognize a South Korean ID card.
 * @method Models\RecognizePhilippinesDrivingLicenseOCRResponse RecognizePhilippinesDrivingLicenseOCR(Models\RecognizePhilippinesDrivingLicenseOCRRequest $req) This API is used to recognize a Philippine driver's license.
 * @method Models\RecognizePhilippinesSssIDOCRResponse RecognizePhilippinesSssIDOCR(Models\RecognizePhilippinesSssIDOCRRequest $req) This API is used to recognize a Philippine SSSID/UMID card.
 * @method Models\RecognizePhilippinesTinIDOCRResponse RecognizePhilippinesTinIDOCR(Models\RecognizePhilippinesTinIDOCRRequest $req) This API is used to recognize a Philippine TIN ID card.
 * @method Models\RecognizePhilippinesVoteIDOCRResponse RecognizePhilippinesVoteIDOCR(Models\RecognizePhilippinesVoteIDOCRRequest $req) This API is used to recognize a Philippine voters ID card. It can recognize fields such as first name, family name, date of birth, civil status, citizenship, address, precinct, and voter's identification number (VIN).

The API request rate is limited to 20 requests/sec by default.
 * @method Models\SmartStructuralOCRV2Response SmartStructuralOCRV2(Models\SmartStructuralOCRV2Request $req) This API is used to recognize fields from cards, documents, bills, forms, contracts, and other structured information. It is flexible and efficient to use, without any configuration required. This API is suitable for recognizing structured information.

A maximum of 10 requests can be initiated per second for this API.
 * @method Models\TableOCRResponse TableOCR(Models\TableOCRRequest $req) This API is used to detect and recognize Chinese and English forms in images. It can return the text content of each cell and save the recognition result as Excel.

This API is not fully available for the time being. For more information, please contact your [Tencent Cloud sales rep](https://intl.cloud.tencent.com/contact-sales).
 */

class OcrClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ocr.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ocr";

    /**
     * @var string
     */
    protected $version = "2018-11-19";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("ocr")."\\"."V20181119\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
