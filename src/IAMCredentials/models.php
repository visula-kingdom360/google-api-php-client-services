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

namespace Google\Service\IAMCredentials;

class GenerateAccessTokenRequest extends \Google\Collection
{
  /** @var string[] */
  public $delegates;
  /** @var string */
  public $lifetime;
  /** @var string[] */
  public $scope;
  protected $collection_key = 'scope';
  /** @param string[] */
  public function setDelegates($delegates)
  {
    $this->delegates = $delegates;
  }
  /** @return string[] */
  public function getDelegates()
  {
    return $this->delegates;
  }
  /** @param string */
  public function setLifetime($lifetime)
  {
    $this->lifetime = $lifetime;
  }
  /** @return string */
  public function getLifetime()
  {
    return $this->lifetime;
  }
  /** @param string[] */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string[] */
  public function getScope()
  {
    return $this->scope;
  }
}

class GenerateAccessTokenResponse extends \Google\Model
{
  /** @var string */
  public $accessToken;
  /** @var string */
  public $expireTime;

  /** @param string */
  public function setAccessToken($accessToken)
  {
    $this->accessToken = $accessToken;
  }
  /** @return string */
  public function getAccessToken()
  {
    return $this->accessToken;
  }
  /** @param string */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /** @return string */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
}

class GenerateIdTokenRequest extends \Google\Collection
{
  /** @var string */
  public $audience;
  /** @var string[] */
  public $delegates;
  /** @var bool */
  public $includeEmail;
  protected $collection_key = 'delegates';
  /** @param string */
  public function setAudience($audience)
  {
    $this->audience = $audience;
  }
  /** @return string */
  public function getAudience()
  {
    return $this->audience;
  }
  /** @param string[] */
  public function setDelegates($delegates)
  {
    $this->delegates = $delegates;
  }
  /** @return string[] */
  public function getDelegates()
  {
    return $this->delegates;
  }
  /** @param bool */
  public function setIncludeEmail($includeEmail)
  {
    $this->includeEmail = $includeEmail;
  }
  /** @return bool */
  public function getIncludeEmail()
  {
    return $this->includeEmail;
  }
}

class GenerateIdTokenResponse extends \Google\Model
{
  /** @var string */
  public $token;

  /** @param string */
  public function setToken($token)
  {
    $this->token = $token;
  }
  /** @return string */
  public function getToken()
  {
    return $this->token;
  }
}

class SignBlobRequest extends \Google\Collection
{
  /** @var string[] */
  public $delegates;
  /** @var string */
  public $payload;
  protected $collection_key = 'delegates';
  /** @param string[] */
  public function setDelegates($delegates)
  {
    $this->delegates = $delegates;
  }
  /** @return string[] */
  public function getDelegates()
  {
    return $this->delegates;
  }
  /** @param string */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return string */
  public function getPayload()
  {
    return $this->payload;
  }
}

class SignBlobResponse extends \Google\Model
{
  /** @var string */
  public $keyId;
  /** @var string */
  public $signedBlob;

  /** @param string */
  public function setKeyId($keyId)
  {
    $this->keyId = $keyId;
  }
  /** @return string */
  public function getKeyId()
  {
    return $this->keyId;
  }
  /** @param string */
  public function setSignedBlob($signedBlob)
  {
    $this->signedBlob = $signedBlob;
  }
  /** @return string */
  public function getSignedBlob()
  {
    return $this->signedBlob;
  }
}

class SignJwtRequest extends \Google\Collection
{
  /** @var string[] */
  public $delegates;
  /** @var string */
  public $payload;
  protected $collection_key = 'delegates';
  /** @param string[] */
  public function setDelegates($delegates)
  {
    $this->delegates = $delegates;
  }
  /** @return string[] */
  public function getDelegates()
  {
    return $this->delegates;
  }
  /** @param string */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return string */
  public function getPayload()
  {
    return $this->payload;
  }
}

class SignJwtResponse extends \Google\Model
{
  /** @var string */
  public $keyId;
  /** @var string */
  public $signedJwt;

  /** @param string */
  public function setKeyId($keyId)
  {
    $this->keyId = $keyId;
  }
  /** @return string */
  public function getKeyId()
  {
    return $this->keyId;
  }
  /** @param string */
  public function setSignedJwt($signedJwt)
  {
    $this->signedJwt = $signedJwt;
  }
  /** @return string */
  public function getSignedJwt()
  {
    return $this->signedJwt;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenerateAccessTokenRequest::class, 'Google_Service_IAMCredentials_GenerateAccessTokenRequest');
class_alias(GenerateAccessTokenResponse::class, 'Google_Service_IAMCredentials_GenerateAccessTokenResponse');
class_alias(GenerateIdTokenRequest::class, 'Google_Service_IAMCredentials_GenerateIdTokenRequest');
class_alias(GenerateIdTokenResponse::class, 'Google_Service_IAMCredentials_GenerateIdTokenResponse');
class_alias(SignBlobRequest::class, 'Google_Service_IAMCredentials_SignBlobRequest');
class_alias(SignBlobResponse::class, 'Google_Service_IAMCredentials_SignBlobResponse');
class_alias(SignJwtRequest::class, 'Google_Service_IAMCredentials_SignJwtRequest');
class_alias(SignJwtResponse::class, 'Google_Service_IAMCredentials_SignJwtResponse');
