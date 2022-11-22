<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\PlayIntegrity;

class AccountActivity extends \Google\Model
{
  /** @var string */
  public $activityLevel;

  /** @param string */
  public function setActivityLevel($activityLevel)
  {
    $this->activityLevel = $activityLevel;
  }
  /** @return string */
  public function getActivityLevel()
  {
    return $this->activityLevel;
  }
}

class AccountDetails extends \Google\Model
{
  /** @var AccountActivity */
  public $accountActivity;
  /** @var string */
  public $appLicensingVerdict;
  protected $accountActivityType = AccountActivity::class;
  protected $accountActivityDataType = '';
  /** @param AccountActivity */
  public function setAccountActivity(AccountActivity $accountActivity)
  {
    $this->accountActivity = $accountActivity;
  }
  /** @return AccountActivity */
  public function getAccountActivity()
  {
    return $this->accountActivity;
  }
  /** @param string */
  public function setAppLicensingVerdict($appLicensingVerdict)
  {
    $this->appLicensingVerdict = $appLicensingVerdict;
  }
  /** @return string */
  public function getAppLicensingVerdict()
  {
    return $this->appLicensingVerdict;
  }
}

class AppIntegrity extends \Google\Collection
{
  /** @var string */
  public $appRecognitionVerdict;
  /** @var string[] */
  public $certificateSha256Digest;
  /** @var string */
  public $packageName;
  /** @var string */
  public $versionCode;
  protected $collection_key = 'certificateSha256Digest';
  /** @param string */
  public function setAppRecognitionVerdict($appRecognitionVerdict)
  {
    $this->appRecognitionVerdict = $appRecognitionVerdict;
  }
  /** @return string */
  public function getAppRecognitionVerdict()
  {
    return $this->appRecognitionVerdict;
  }
  /** @param string[] */
  public function setCertificateSha256Digest($certificateSha256Digest)
  {
    $this->certificateSha256Digest = $certificateSha256Digest;
  }
  /** @return string[] */
  public function getCertificateSha256Digest()
  {
    return $this->certificateSha256Digest;
  }
  /** @param string */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
  /** @param string */
  public function setVersionCode($versionCode)
  {
    $this->versionCode = $versionCode;
  }
  /** @return string */
  public function getVersionCode()
  {
    return $this->versionCode;
  }
}

class DecodeIntegrityTokenRequest extends \Google\Model
{
  /** @var string */
  public $integrityToken;

  /** @param string */
  public function setIntegrityToken($integrityToken)
  {
    $this->integrityToken = $integrityToken;
  }
  /** @return string */
  public function getIntegrityToken()
  {
    return $this->integrityToken;
  }
}

class DecodeIntegrityTokenResponse extends \Google\Model
{
  /** @var TokenPayloadExternal */
  public $tokenPayloadExternal;
  protected $tokenPayloadExternalType = TokenPayloadExternal::class;
  protected $tokenPayloadExternalDataType = '';
  /** @param TokenPayloadExternal */
  public function setTokenPayloadExternal(TokenPayloadExternal $tokenPayloadExternal)
  {
    $this->tokenPayloadExternal = $tokenPayloadExternal;
  }
  /** @return TokenPayloadExternal */
  public function getTokenPayloadExternal()
  {
    return $this->tokenPayloadExternal;
  }
}

class DeviceIntegrity extends \Google\Collection
{
  /** @var string[] */
  public $deviceRecognitionVerdict;
  protected $collection_key = 'deviceRecognitionVerdict';
  /** @param string[] */
  public function setDeviceRecognitionVerdict($deviceRecognitionVerdict)
  {
    $this->deviceRecognitionVerdict = $deviceRecognitionVerdict;
  }
  /** @return string[] */
  public function getDeviceRecognitionVerdict()
  {
    return $this->deviceRecognitionVerdict;
  }
}

class RequestDetails extends \Google\Model
{
  /** @var string */
  public $nonce;
  /** @var string */
  public $requestPackageName;
  /** @var string */
  public $timestampMillis;

  /** @param string */
  public function setNonce($nonce)
  {
    $this->nonce = $nonce;
  }
  /** @return string */
  public function getNonce()
  {
    return $this->nonce;
  }
  /** @param string */
  public function setRequestPackageName($requestPackageName)
  {
    $this->requestPackageName = $requestPackageName;
  }
  /** @return string */
  public function getRequestPackageName()
  {
    return $this->requestPackageName;
  }
  /** @param string */
  public function setTimestampMillis($timestampMillis)
  {
    $this->timestampMillis = $timestampMillis;
  }
  /** @return string */
  public function getTimestampMillis()
  {
    return $this->timestampMillis;
  }
}

class TestingDetails extends \Google\Model
{
  /** @var bool */
  public $isTestingResponse;

  /** @param bool */
  public function setIsTestingResponse($isTestingResponse)
  {
    $this->isTestingResponse = $isTestingResponse;
  }
  /** @return bool */
  public function getIsTestingResponse()
  {
    return $this->isTestingResponse;
  }
}

class TokenPayloadExternal extends \Google\Model
{
  /** @var AccountDetails */
  public $accountDetails;
  /** @var AppIntegrity */
  public $appIntegrity;
  /** @var DeviceIntegrity */
  public $deviceIntegrity;
  /** @var RequestDetails */
  public $requestDetails;
  /** @var TestingDetails */
  public $testingDetails;
  protected $accountDetailsType = AccountDetails::class;
  protected $accountDetailsDataType = '';
  protected $appIntegrityType = AppIntegrity::class;
  protected $appIntegrityDataType = '';
  protected $deviceIntegrityType = DeviceIntegrity::class;
  protected $deviceIntegrityDataType = '';
  protected $requestDetailsType = RequestDetails::class;
  protected $requestDetailsDataType = '';
  protected $testingDetailsType = TestingDetails::class;
  protected $testingDetailsDataType = '';
  /** @param AccountDetails */
  public function setAccountDetails(AccountDetails $accountDetails)
  {
    $this->accountDetails = $accountDetails;
  }
  /** @return AccountDetails */
  public function getAccountDetails()
  {
    return $this->accountDetails;
  }
  /** @param AppIntegrity */
  public function setAppIntegrity(AppIntegrity $appIntegrity)
  {
    $this->appIntegrity = $appIntegrity;
  }
  /** @return AppIntegrity */
  public function getAppIntegrity()
  {
    return $this->appIntegrity;
  }
  /** @param DeviceIntegrity */
  public function setDeviceIntegrity(DeviceIntegrity $deviceIntegrity)
  {
    $this->deviceIntegrity = $deviceIntegrity;
  }
  /** @return DeviceIntegrity */
  public function getDeviceIntegrity()
  {
    return $this->deviceIntegrity;
  }
  /** @param RequestDetails */
  public function setRequestDetails(RequestDetails $requestDetails)
  {
    $this->requestDetails = $requestDetails;
  }
  /** @return RequestDetails */
  public function getRequestDetails()
  {
    return $this->requestDetails;
  }
  /** @param TestingDetails */
  public function setTestingDetails(TestingDetails $testingDetails)
  {
    $this->testingDetails = $testingDetails;
  }
  /** @return TestingDetails */
  public function getTestingDetails()
  {
    return $this->testingDetails;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountActivity::class, 'Google_Service_PlayIntegrity_AccountActivity');
class_alias(AccountDetails::class, 'Google_Service_PlayIntegrity_AccountDetails');
class_alias(AppIntegrity::class, 'Google_Service_PlayIntegrity_AppIntegrity');
class_alias(DecodeIntegrityTokenRequest::class, 'Google_Service_PlayIntegrity_DecodeIntegrityTokenRequest');
class_alias(DecodeIntegrityTokenResponse::class, 'Google_Service_PlayIntegrity_DecodeIntegrityTokenResponse');
class_alias(DeviceIntegrity::class, 'Google_Service_PlayIntegrity_DeviceIntegrity');
class_alias(RequestDetails::class, 'Google_Service_PlayIntegrity_RequestDetails');
class_alias(TestingDetails::class, 'Google_Service_PlayIntegrity_TestingDetails');
class_alias(TokenPayloadExternal::class, 'Google_Service_PlayIntegrity_TokenPayloadExternal');
