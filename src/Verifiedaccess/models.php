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

namespace Google\Service\Verifiedaccess;

class Challenge extends \Google\Model
{
  /** @var string */
  public $alternativeChallenge;
  /** @var string */
  public $challenge;

  /** @param string */
  public function setAlternativeChallenge($alternativeChallenge)
  {
    $this->alternativeChallenge = $alternativeChallenge;
  }
  /** @return string */
  public function getAlternativeChallenge()
  {
    return $this->alternativeChallenge;
  }
  /** @param string */
  public function setChallenge($challenge)
  {
    $this->challenge = $challenge;
  }
  /** @return string */
  public function getChallenge()
  {
    return $this->challenge;
  }
}

class VerifiedaccessEmpty extends \Google\Model
{
}

class VerifyChallengeResponseRequest extends \Google\Model
{
  /** @var string */
  public $challengeResponse;
  /** @var string */
  public $expectedIdentity;

  /** @param string */
  public function setChallengeResponse($challengeResponse)
  {
    $this->challengeResponse = $challengeResponse;
  }
  /** @return string */
  public function getChallengeResponse()
  {
    return $this->challengeResponse;
  }
  /** @param string */
  public function setExpectedIdentity($expectedIdentity)
  {
    $this->expectedIdentity = $expectedIdentity;
  }
  /** @return string */
  public function getExpectedIdentity()
  {
    return $this->expectedIdentity;
  }
}

class VerifyChallengeResponseResult extends \Google\Model
{
  /** @var string */
  public $customerId;
  /** @var string */
  public $devicePermanentId;
  /** @var string */
  public $deviceSignal;
  /** @var string */
  public $keyTrustLevel;
  /** @var string */
  public $signedPublicKeyAndChallenge;
  /** @var string */
  public $virtualDeviceId;

  /** @param string */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /** @return string */
  public function getCustomerId()
  {
    return $this->customerId;
  }
  /** @param string */
  public function setDevicePermanentId($devicePermanentId)
  {
    $this->devicePermanentId = $devicePermanentId;
  }
  /** @return string */
  public function getDevicePermanentId()
  {
    return $this->devicePermanentId;
  }
  /** @param string */
  public function setDeviceSignal($deviceSignal)
  {
    $this->deviceSignal = $deviceSignal;
  }
  /** @return string */
  public function getDeviceSignal()
  {
    return $this->deviceSignal;
  }
  /** @param string */
  public function setKeyTrustLevel($keyTrustLevel)
  {
    $this->keyTrustLevel = $keyTrustLevel;
  }
  /** @return string */
  public function getKeyTrustLevel()
  {
    return $this->keyTrustLevel;
  }
  /** @param string */
  public function setSignedPublicKeyAndChallenge($signedPublicKeyAndChallenge)
  {
    $this->signedPublicKeyAndChallenge = $signedPublicKeyAndChallenge;
  }
  /** @return string */
  public function getSignedPublicKeyAndChallenge()
  {
    return $this->signedPublicKeyAndChallenge;
  }
  /** @param string */
  public function setVirtualDeviceId($virtualDeviceId)
  {
    $this->virtualDeviceId = $virtualDeviceId;
  }
  /** @return string */
  public function getVirtualDeviceId()
  {
    return $this->virtualDeviceId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Challenge::class, 'Google_Service_Verifiedaccess_Challenge');
class_alias(VerifiedaccessEmpty::class, 'Google_Service_Verifiedaccess_VerifiedaccessEmpty');
class_alias(VerifyChallengeResponseRequest::class, 'Google_Service_Verifiedaccess_VerifyChallengeResponseRequest');
class_alias(VerifyChallengeResponseResult::class, 'Google_Service_Verifiedaccess_VerifyChallengeResponseResult');
