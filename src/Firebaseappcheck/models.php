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

namespace Google\Service\Firebaseappcheck;

class GoogleFirebaseAppcheckV1AppAttestConfig extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $tokenTtl;

  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setTokenTtl($tokenTtl)
  {
    $this->tokenTtl = $tokenTtl;
  }
  /** @return string */
  public function getTokenTtl()
  {
    return $this->tokenTtl;
  }
}

class GoogleFirebaseAppcheckV1AppCheckToken extends \Google\Model
{
  /** @var string */
  public $token;
  /** @var string */
  public $ttl;

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
  /** @param string */
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /** @return string */
  public function getTtl()
  {
    return $this->ttl;
  }
}

class GoogleFirebaseAppcheckV1BatchGetAppAttestConfigsResponse extends \Google\Collection
{
  /** @var GoogleFirebaseAppcheckV1AppAttestConfig[] */
  public $configs;
  protected $collection_key = 'configs';
  protected $configsType = GoogleFirebaseAppcheckV1AppAttestConfig::class;
  protected $configsDataType = 'array';
  /** @param GoogleFirebaseAppcheckV1AppAttestConfig[] */
  public function setConfigs($configs)
  {
    $this->configs = $configs;
  }
  /** @return GoogleFirebaseAppcheckV1AppAttestConfig[] */
  public function getConfigs()
  {
    return $this->configs;
  }
}

class GoogleFirebaseAppcheckV1BatchGetDeviceCheckConfigsResponse extends \Google\Collection
{
  /** @var GoogleFirebaseAppcheckV1DeviceCheckConfig[] */
  public $configs;
  protected $collection_key = 'configs';
  protected $configsType = GoogleFirebaseAppcheckV1DeviceCheckConfig::class;
  protected $configsDataType = 'array';
  /** @param GoogleFirebaseAppcheckV1DeviceCheckConfig[] */
  public function setConfigs($configs)
  {
    $this->configs = $configs;
  }
  /** @return GoogleFirebaseAppcheckV1DeviceCheckConfig[] */
  public function getConfigs()
  {
    return $this->configs;
  }
}

class GoogleFirebaseAppcheckV1BatchGetPlayIntegrityConfigsResponse extends \Google\Collection
{
  /** @var GoogleFirebaseAppcheckV1PlayIntegrityConfig[] */
  public $configs;
  protected $collection_key = 'configs';
  protected $configsType = GoogleFirebaseAppcheckV1PlayIntegrityConfig::class;
  protected $configsDataType = 'array';
  /** @param GoogleFirebaseAppcheckV1PlayIntegrityConfig[] */
  public function setConfigs($configs)
  {
    $this->configs = $configs;
  }
  /** @return GoogleFirebaseAppcheckV1PlayIntegrityConfig[] */
  public function getConfigs()
  {
    return $this->configs;
  }
}

class GoogleFirebaseAppcheckV1BatchGetRecaptchaEnterpriseConfigsResponse extends \Google\Collection
{
  /** @var GoogleFirebaseAppcheckV1RecaptchaEnterpriseConfig[] */
  public $configs;
  protected $collection_key = 'configs';
  protected $configsType = GoogleFirebaseAppcheckV1RecaptchaEnterpriseConfig::class;
  protected $configsDataType = 'array';
  /** @param GoogleFirebaseAppcheckV1RecaptchaEnterpriseConfig[] */
  public function setConfigs($configs)
  {
    $this->configs = $configs;
  }
  /** @return GoogleFirebaseAppcheckV1RecaptchaEnterpriseConfig[] */
  public function getConfigs()
  {
    return $this->configs;
  }
}

class GoogleFirebaseAppcheckV1BatchGetRecaptchaV3ConfigsResponse extends \Google\Collection
{
  /** @var GoogleFirebaseAppcheckV1RecaptchaV3Config[] */
  public $configs;
  protected $collection_key = 'configs';
  protected $configsType = GoogleFirebaseAppcheckV1RecaptchaV3Config::class;
  protected $configsDataType = 'array';
  /** @param GoogleFirebaseAppcheckV1RecaptchaV3Config[] */
  public function setConfigs($configs)
  {
    $this->configs = $configs;
  }
  /** @return GoogleFirebaseAppcheckV1RecaptchaV3Config[] */
  public function getConfigs()
  {
    return $this->configs;
  }
}

class GoogleFirebaseAppcheckV1BatchGetSafetyNetConfigsResponse extends \Google\Collection
{
  /** @var GoogleFirebaseAppcheckV1SafetyNetConfig[] */
  public $configs;
  protected $collection_key = 'configs';
  protected $configsType = GoogleFirebaseAppcheckV1SafetyNetConfig::class;
  protected $configsDataType = 'array';
  /** @param GoogleFirebaseAppcheckV1SafetyNetConfig[] */
  public function setConfigs($configs)
  {
    $this->configs = $configs;
  }
  /** @return GoogleFirebaseAppcheckV1SafetyNetConfig[] */
  public function getConfigs()
  {
    return $this->configs;
  }
}

class GoogleFirebaseAppcheckV1BatchUpdateServicesRequest extends \Google\Collection
{
  /** @var GoogleFirebaseAppcheckV1UpdateServiceRequest[] */
  public $requests;
  /** @var string */
  public $updateMask;
  protected $collection_key = 'requests';
  protected $requestsType = GoogleFirebaseAppcheckV1UpdateServiceRequest::class;
  protected $requestsDataType = 'array';
  /** @param GoogleFirebaseAppcheckV1UpdateServiceRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return GoogleFirebaseAppcheckV1UpdateServiceRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
  /** @param string */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /** @return string */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

class GoogleFirebaseAppcheckV1BatchUpdateServicesResponse extends \Google\Collection
{
  /** @var GoogleFirebaseAppcheckV1Service[] */
  public $services;
  protected $collection_key = 'services';
  protected $servicesType = GoogleFirebaseAppcheckV1Service::class;
  protected $servicesDataType = 'array';
  /** @param GoogleFirebaseAppcheckV1Service[] */
  public function setServices($services)
  {
    $this->services = $services;
  }
  /** @return GoogleFirebaseAppcheckV1Service[] */
  public function getServices()
  {
    return $this->services;
  }
}

class GoogleFirebaseAppcheckV1DebugToken extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $token;

  /** @param string */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /** @return string */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
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

class GoogleFirebaseAppcheckV1DeviceCheckConfig extends \Google\Model
{
  /** @var string */
  public $keyId;
  /** @var string */
  public $name;
  /** @var string */
  public $privateKey;
  /** @var bool */
  public $privateKeySet;
  /** @var string */
  public $tokenTtl;

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
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setPrivateKey($privateKey)
  {
    $this->privateKey = $privateKey;
  }
  /** @return string */
  public function getPrivateKey()
  {
    return $this->privateKey;
  }
  /** @param bool */
  public function setPrivateKeySet($privateKeySet)
  {
    $this->privateKeySet = $privateKeySet;
  }
  /** @return bool */
  public function getPrivateKeySet()
  {
    return $this->privateKeySet;
  }
  /** @param string */
  public function setTokenTtl($tokenTtl)
  {
    $this->tokenTtl = $tokenTtl;
  }
  /** @return string */
  public function getTokenTtl()
  {
    return $this->tokenTtl;
  }
}

class GoogleFirebaseAppcheckV1ExchangeAppAttestAssertionRequest extends \Google\Model
{
  /** @var string */
  public $artifact;
  /** @var string */
  public $assertion;
  /** @var string */
  public $challenge;

  /** @param string */
  public function setArtifact($artifact)
  {
    $this->artifact = $artifact;
  }
  /** @return string */
  public function getArtifact()
  {
    return $this->artifact;
  }
  /** @param string */
  public function setAssertion($assertion)
  {
    $this->assertion = $assertion;
  }
  /** @return string */
  public function getAssertion()
  {
    return $this->assertion;
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

class GoogleFirebaseAppcheckV1ExchangeAppAttestAttestationRequest extends \Google\Model
{
  /** @var string */
  public $attestationStatement;
  /** @var string */
  public $challenge;
  /** @var string */
  public $keyId;

  /** @param string */
  public function setAttestationStatement($attestationStatement)
  {
    $this->attestationStatement = $attestationStatement;
  }
  /** @return string */
  public function getAttestationStatement()
  {
    return $this->attestationStatement;
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
}

class GoogleFirebaseAppcheckV1ExchangeAppAttestAttestationResponse extends \Google\Model
{
  /** @var GoogleFirebaseAppcheckV1AppCheckToken */
  public $appCheckToken;
  /** @var string */
  public $artifact;
  protected $appCheckTokenType = GoogleFirebaseAppcheckV1AppCheckToken::class;
  protected $appCheckTokenDataType = '';
  /** @param GoogleFirebaseAppcheckV1AppCheckToken */
  public function setAppCheckToken(GoogleFirebaseAppcheckV1AppCheckToken $appCheckToken)
  {
    $this->appCheckToken = $appCheckToken;
  }
  /** @return GoogleFirebaseAppcheckV1AppCheckToken */
  public function getAppCheckToken()
  {
    return $this->appCheckToken;
  }
  /** @param string */
  public function setArtifact($artifact)
  {
    $this->artifact = $artifact;
  }
  /** @return string */
  public function getArtifact()
  {
    return $this->artifact;
  }
}

class GoogleFirebaseAppcheckV1ExchangeCustomTokenRequest extends \Google\Model
{
  /** @var string */
  public $customToken;

  /** @param string */
  public function setCustomToken($customToken)
  {
    $this->customToken = $customToken;
  }
  /** @return string */
  public function getCustomToken()
  {
    return $this->customToken;
  }
}

class GoogleFirebaseAppcheckV1ExchangeDebugTokenRequest extends \Google\Model
{
  /** @var string */
  public $debugToken;

  /** @param string */
  public function setDebugToken($debugToken)
  {
    $this->debugToken = $debugToken;
  }
  /** @return string */
  public function getDebugToken()
  {
    return $this->debugToken;
  }
}

class GoogleFirebaseAppcheckV1ExchangeDeviceCheckTokenRequest extends \Google\Model
{
  /** @var string */
  public $deviceToken;

  /** @param string */
  public function setDeviceToken($deviceToken)
  {
    $this->deviceToken = $deviceToken;
  }
  /** @return string */
  public function getDeviceToken()
  {
    return $this->deviceToken;
  }
}

class GoogleFirebaseAppcheckV1ExchangePlayIntegrityTokenRequest extends \Google\Model
{
  /** @var string */
  public $playIntegrityToken;

  /** @param string */
  public function setPlayIntegrityToken($playIntegrityToken)
  {
    $this->playIntegrityToken = $playIntegrityToken;
  }
  /** @return string */
  public function getPlayIntegrityToken()
  {
    return $this->playIntegrityToken;
  }
}

class GoogleFirebaseAppcheckV1ExchangeRecaptchaEnterpriseTokenRequest extends \Google\Model
{
  /** @var string */
  public $recaptchaEnterpriseToken;

  /** @param string */
  public function setRecaptchaEnterpriseToken($recaptchaEnterpriseToken)
  {
    $this->recaptchaEnterpriseToken = $recaptchaEnterpriseToken;
  }
  /** @return string */
  public function getRecaptchaEnterpriseToken()
  {
    return $this->recaptchaEnterpriseToken;
  }
}

class GoogleFirebaseAppcheckV1ExchangeRecaptchaV3TokenRequest extends \Google\Model
{
  /** @var string */
  public $recaptchaV3Token;

  /** @param string */
  public function setRecaptchaV3Token($recaptchaV3Token)
  {
    $this->recaptchaV3Token = $recaptchaV3Token;
  }
  /** @return string */
  public function getRecaptchaV3Token()
  {
    return $this->recaptchaV3Token;
  }
}

class GoogleFirebaseAppcheckV1ExchangeSafetyNetTokenRequest extends \Google\Model
{
  /** @var string */
  public $safetyNetToken;

  /** @param string */
  public function setSafetyNetToken($safetyNetToken)
  {
    $this->safetyNetToken = $safetyNetToken;
  }
  /** @return string */
  public function getSafetyNetToken()
  {
    return $this->safetyNetToken;
  }
}

class GoogleFirebaseAppcheckV1GenerateAppAttestChallengeRequest extends \Google\Model
{
}

class GoogleFirebaseAppcheckV1GenerateAppAttestChallengeResponse extends \Google\Model
{
  /** @var string */
  public $challenge;
  /** @var string */
  public $ttl;

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
  /** @param string */
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /** @return string */
  public function getTtl()
  {
    return $this->ttl;
  }
}

class GoogleFirebaseAppcheckV1GeneratePlayIntegrityChallengeRequest extends \Google\Model
{
}

class GoogleFirebaseAppcheckV1GeneratePlayIntegrityChallengeResponse extends \Google\Model
{
  /** @var string */
  public $challenge;
  /** @var string */
  public $ttl;

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
  /** @param string */
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /** @return string */
  public function getTtl()
  {
    return $this->ttl;
  }
}

class GoogleFirebaseAppcheckV1ListDebugTokensResponse extends \Google\Collection
{
  /** @var GoogleFirebaseAppcheckV1DebugToken[] */
  public $debugTokens;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'debugTokens';
  protected $debugTokensType = GoogleFirebaseAppcheckV1DebugToken::class;
  protected $debugTokensDataType = 'array';
  /** @param GoogleFirebaseAppcheckV1DebugToken[] */
  public function setDebugTokens($debugTokens)
  {
    $this->debugTokens = $debugTokens;
  }
  /** @return GoogleFirebaseAppcheckV1DebugToken[] */
  public function getDebugTokens()
  {
    return $this->debugTokens;
  }
  /** @param string */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class GoogleFirebaseAppcheckV1ListServicesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleFirebaseAppcheckV1Service[] */
  public $services;
  protected $collection_key = 'services';
  protected $servicesType = GoogleFirebaseAppcheckV1Service::class;
  protected $servicesDataType = 'array';
  /** @param string */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /** @return string */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /** @param GoogleFirebaseAppcheckV1Service[] */
  public function setServices($services)
  {
    $this->services = $services;
  }
  /** @return GoogleFirebaseAppcheckV1Service[] */
  public function getServices()
  {
    return $this->services;
  }
}

class GoogleFirebaseAppcheckV1PlayIntegrityConfig extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $tokenTtl;

  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setTokenTtl($tokenTtl)
  {
    $this->tokenTtl = $tokenTtl;
  }
  /** @return string */
  public function getTokenTtl()
  {
    return $this->tokenTtl;
  }
}

class GoogleFirebaseAppcheckV1PublicJwk extends \Google\Model
{
  /** @var string */
  public $alg;
  /** @var string */
  public $e;
  /** @var string */
  public $kid;
  /** @var string */
  public $kty;
  /** @var string */
  public $n;
  /** @var string */
  public $use;

  /** @param string */
  public function setAlg($alg)
  {
    $this->alg = $alg;
  }
  /** @return string */
  public function getAlg()
  {
    return $this->alg;
  }
  /** @param string */
  public function setE($e)
  {
    $this->e = $e;
  }
  /** @return string */
  public function getE()
  {
    return $this->e;
  }
  /** @param string */
  public function setKid($kid)
  {
    $this->kid = $kid;
  }
  /** @return string */
  public function getKid()
  {
    return $this->kid;
  }
  /** @param string */
  public function setKty($kty)
  {
    $this->kty = $kty;
  }
  /** @return string */
  public function getKty()
  {
    return $this->kty;
  }
  /** @param string */
  public function setN($n)
  {
    $this->n = $n;
  }
  /** @return string */
  public function getN()
  {
    return $this->n;
  }
  /** @param string */
  public function setUse($use)
  {
    $this->use = $use;
  }
  /** @return string */
  public function getUse()
  {
    return $this->use;
  }
}

class GoogleFirebaseAppcheckV1PublicJwkSet extends \Google\Collection
{
  /** @var GoogleFirebaseAppcheckV1PublicJwk[] */
  public $keys;
  protected $collection_key = 'keys';
  protected $keysType = GoogleFirebaseAppcheckV1PublicJwk::class;
  protected $keysDataType = 'array';
  /** @param GoogleFirebaseAppcheckV1PublicJwk[] */
  public function setKeys($keys)
  {
    $this->keys = $keys;
  }
  /** @return GoogleFirebaseAppcheckV1PublicJwk[] */
  public function getKeys()
  {
    return $this->keys;
  }
}

class GoogleFirebaseAppcheckV1RecaptchaEnterpriseConfig extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $siteKey;
  /** @var string */
  public $tokenTtl;

  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setSiteKey($siteKey)
  {
    $this->siteKey = $siteKey;
  }
  /** @return string */
  public function getSiteKey()
  {
    return $this->siteKey;
  }
  /** @param string */
  public function setTokenTtl($tokenTtl)
  {
    $this->tokenTtl = $tokenTtl;
  }
  /** @return string */
  public function getTokenTtl()
  {
    return $this->tokenTtl;
  }
}

class GoogleFirebaseAppcheckV1RecaptchaV3Config extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $siteSecret;
  /** @var bool */
  public $siteSecretSet;
  /** @var string */
  public $tokenTtl;

  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setSiteSecret($siteSecret)
  {
    $this->siteSecret = $siteSecret;
  }
  /** @return string */
  public function getSiteSecret()
  {
    return $this->siteSecret;
  }
  /** @param bool */
  public function setSiteSecretSet($siteSecretSet)
  {
    $this->siteSecretSet = $siteSecretSet;
  }
  /** @return bool */
  public function getSiteSecretSet()
  {
    return $this->siteSecretSet;
  }
  /** @param string */
  public function setTokenTtl($tokenTtl)
  {
    $this->tokenTtl = $tokenTtl;
  }
  /** @return string */
  public function getTokenTtl()
  {
    return $this->tokenTtl;
  }
}

class GoogleFirebaseAppcheckV1SafetyNetConfig extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $tokenTtl;

  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setTokenTtl($tokenTtl)
  {
    $this->tokenTtl = $tokenTtl;
  }
  /** @return string */
  public function getTokenTtl()
  {
    return $this->tokenTtl;
  }
}

class GoogleFirebaseAppcheckV1Service extends \Google\Model
{
  /** @var string */
  public $enforcementMode;
  /** @var string */
  public $name;

  /** @param string */
  public function setEnforcementMode($enforcementMode)
  {
    $this->enforcementMode = $enforcementMode;
  }
  /** @return string */
  public function getEnforcementMode()
  {
    return $this->enforcementMode;
  }
  /** @param string */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return string */
  public function getName()
  {
    return $this->name;
  }
}

class GoogleFirebaseAppcheckV1UpdateServiceRequest extends \Google\Model
{
  /** @var GoogleFirebaseAppcheckV1Service */
  public $service;
  /** @var string */
  public $updateMask;
  protected $serviceType = GoogleFirebaseAppcheckV1Service::class;
  protected $serviceDataType = '';
  /** @param GoogleFirebaseAppcheckV1Service */
  public function setService(GoogleFirebaseAppcheckV1Service $service)
  {
    $this->service = $service;
  }
  /** @return GoogleFirebaseAppcheckV1Service */
  public function getService()
  {
    return $this->service;
  }
  /** @param string */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /** @return string */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

class GoogleProtobufEmpty extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleFirebaseAppcheckV1AppAttestConfig::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1AppAttestConfig');
class_alias(GoogleFirebaseAppcheckV1AppCheckToken::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1AppCheckToken');
class_alias(GoogleFirebaseAppcheckV1BatchGetAppAttestConfigsResponse::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1BatchGetAppAttestConfigsResponse');
class_alias(GoogleFirebaseAppcheckV1BatchGetDeviceCheckConfigsResponse::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1BatchGetDeviceCheckConfigsResponse');
class_alias(GoogleFirebaseAppcheckV1BatchGetPlayIntegrityConfigsResponse::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1BatchGetPlayIntegrityConfigsResponse');
class_alias(GoogleFirebaseAppcheckV1BatchGetRecaptchaEnterpriseConfigsResponse::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1BatchGetRecaptchaEnterpriseConfigsResponse');
class_alias(GoogleFirebaseAppcheckV1BatchGetRecaptchaV3ConfigsResponse::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1BatchGetRecaptchaV3ConfigsResponse');
class_alias(GoogleFirebaseAppcheckV1BatchGetSafetyNetConfigsResponse::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1BatchGetSafetyNetConfigsResponse');
class_alias(GoogleFirebaseAppcheckV1BatchUpdateServicesRequest::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1BatchUpdateServicesRequest');
class_alias(GoogleFirebaseAppcheckV1BatchUpdateServicesResponse::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1BatchUpdateServicesResponse');
class_alias(GoogleFirebaseAppcheckV1DebugToken::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1DebugToken');
class_alias(GoogleFirebaseAppcheckV1DeviceCheckConfig::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1DeviceCheckConfig');
class_alias(GoogleFirebaseAppcheckV1ExchangeAppAttestAssertionRequest::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1ExchangeAppAttestAssertionRequest');
class_alias(GoogleFirebaseAppcheckV1ExchangeAppAttestAttestationRequest::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1ExchangeAppAttestAttestationRequest');
class_alias(GoogleFirebaseAppcheckV1ExchangeAppAttestAttestationResponse::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1ExchangeAppAttestAttestationResponse');
class_alias(GoogleFirebaseAppcheckV1ExchangeCustomTokenRequest::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1ExchangeCustomTokenRequest');
class_alias(GoogleFirebaseAppcheckV1ExchangeDebugTokenRequest::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1ExchangeDebugTokenRequest');
class_alias(GoogleFirebaseAppcheckV1ExchangeDeviceCheckTokenRequest::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1ExchangeDeviceCheckTokenRequest');
class_alias(GoogleFirebaseAppcheckV1ExchangePlayIntegrityTokenRequest::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1ExchangePlayIntegrityTokenRequest');
class_alias(GoogleFirebaseAppcheckV1ExchangeRecaptchaEnterpriseTokenRequest::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1ExchangeRecaptchaEnterpriseTokenRequest');
class_alias(GoogleFirebaseAppcheckV1ExchangeRecaptchaV3TokenRequest::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1ExchangeRecaptchaV3TokenRequest');
class_alias(GoogleFirebaseAppcheckV1ExchangeSafetyNetTokenRequest::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1ExchangeSafetyNetTokenRequest');
class_alias(GoogleFirebaseAppcheckV1GenerateAppAttestChallengeRequest::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1GenerateAppAttestChallengeRequest');
class_alias(GoogleFirebaseAppcheckV1GenerateAppAttestChallengeResponse::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1GenerateAppAttestChallengeResponse');
class_alias(GoogleFirebaseAppcheckV1GeneratePlayIntegrityChallengeRequest::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1GeneratePlayIntegrityChallengeRequest');
class_alias(GoogleFirebaseAppcheckV1GeneratePlayIntegrityChallengeResponse::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1GeneratePlayIntegrityChallengeResponse');
class_alias(GoogleFirebaseAppcheckV1ListDebugTokensResponse::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1ListDebugTokensResponse');
class_alias(GoogleFirebaseAppcheckV1ListServicesResponse::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1ListServicesResponse');
class_alias(GoogleFirebaseAppcheckV1PlayIntegrityConfig::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1PlayIntegrityConfig');
class_alias(GoogleFirebaseAppcheckV1PublicJwk::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1PublicJwk');
class_alias(GoogleFirebaseAppcheckV1PublicJwkSet::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1PublicJwkSet');
class_alias(GoogleFirebaseAppcheckV1RecaptchaEnterpriseConfig::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1RecaptchaEnterpriseConfig');
class_alias(GoogleFirebaseAppcheckV1RecaptchaV3Config::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1RecaptchaV3Config');
class_alias(GoogleFirebaseAppcheckV1SafetyNetConfig::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1SafetyNetConfig');
class_alias(GoogleFirebaseAppcheckV1Service::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1Service');
class_alias(GoogleFirebaseAppcheckV1UpdateServiceRequest::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1UpdateServiceRequest');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_Firebaseappcheck_GoogleProtobufEmpty');
