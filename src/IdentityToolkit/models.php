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

namespace Google\Service\IdentityToolkit;

class CreateAuthUriResponse extends \Google\Collection
{
  /** @var string[] */
  public $allProviders;
  /** @var string */
  public $authUri;
  /** @var bool */
  public $captchaRequired;
  /** @var bool */
  public $forExistingProvider;
  /** @var string */
  public $kind;
  /** @var string */
  public $providerId;
  /** @var bool */
  public $registered;
  /** @var string */
  public $sessionId;
  /** @var string[] */
  public $signinMethods;
  protected $collection_key = 'signinMethods';
  /** @param string[] */
  public function setAllProviders($allProviders)
  {
    $this->allProviders = $allProviders;
  }
  /** @return string[] */
  public function getAllProviders()
  {
    return $this->allProviders;
  }
  /** @param string */
  public function setAuthUri($authUri)
  {
    $this->authUri = $authUri;
  }
  /** @return string */
  public function getAuthUri()
  {
    return $this->authUri;
  }
  /** @param bool */
  public function setCaptchaRequired($captchaRequired)
  {
    $this->captchaRequired = $captchaRequired;
  }
  /** @return bool */
  public function getCaptchaRequired()
  {
    return $this->captchaRequired;
  }
  /** @param bool */
  public function setForExistingProvider($forExistingProvider)
  {
    $this->forExistingProvider = $forExistingProvider;
  }
  /** @return bool */
  public function getForExistingProvider()
  {
    return $this->forExistingProvider;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }
  /** @return string */
  public function getProviderId()
  {
    return $this->providerId;
  }
  /** @param bool */
  public function setRegistered($registered)
  {
    $this->registered = $registered;
  }
  /** @return bool */
  public function getRegistered()
  {
    return $this->registered;
  }
  /** @param string */
  public function setSessionId($sessionId)
  {
    $this->sessionId = $sessionId;
  }
  /** @return string */
  public function getSessionId()
  {
    return $this->sessionId;
  }
  /** @param string[] */
  public function setSigninMethods($signinMethods)
  {
    $this->signinMethods = $signinMethods;
  }
  /** @return string[] */
  public function getSigninMethods()
  {
    return $this->signinMethods;
  }
}

class DeleteAccountResponse extends \Google\Model
{
  /** @var string */
  public $kind;

  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
}

class DownloadAccountResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var string */
  public $nextPageToken;
  /** @var UserInfo[] */
  public $users;
  protected $collection_key = 'users';
  protected $usersType = UserInfo::class;
  protected $usersDataType = 'array';
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
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
  /** @param UserInfo[] */
  public function setUsers($users)
  {
    $this->users = $users;
  }
  /** @return UserInfo[] */
  public function getUsers()
  {
    return $this->users;
  }
}

class EmailLinkSigninResponse extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $expiresIn;
  /** @var string */
  public $idToken;
  /** @var bool */
  public $isNewUser;
  /** @var string */
  public $kind;
  /** @var string */
  public $localId;
  /** @var string */
  public $refreshToken;

  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param string */
  public function setExpiresIn($expiresIn)
  {
    $this->expiresIn = $expiresIn;
  }
  /** @return string */
  public function getExpiresIn()
  {
    return $this->expiresIn;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
  /** @param bool */
  public function setIsNewUser($isNewUser)
  {
    $this->isNewUser = $isNewUser;
  }
  /** @return bool */
  public function getIsNewUser()
  {
    return $this->isNewUser;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string */
  public function getLocalId()
  {
    return $this->localId;
  }
  /** @param string */
  public function setRefreshToken($refreshToken)
  {
    $this->refreshToken = $refreshToken;
  }
  /** @return string */
  public function getRefreshToken()
  {
    return $this->refreshToken;
  }
}

class EmailTemplate extends \Google\Model
{
  /** @var string */
  public $body;
  /** @var string */
  public $format;
  /** @var string */
  public $from;
  /** @var string */
  public $fromDisplayName;
  /** @var string */
  public $replyTo;
  /** @var string */
  public $subject;

  /** @param string */
  public function setBody($body)
  {
    $this->body = $body;
  }
  /** @return string */
  public function getBody()
  {
    return $this->body;
  }
  /** @param string */
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /** @return string */
  public function getFormat()
  {
    return $this->format;
  }
  /** @param string */
  public function setFrom($from)
  {
    $this->from = $from;
  }
  /** @return string */
  public function getFrom()
  {
    return $this->from;
  }
  /** @param string */
  public function setFromDisplayName($fromDisplayName)
  {
    $this->fromDisplayName = $fromDisplayName;
  }
  /** @return string */
  public function getFromDisplayName()
  {
    return $this->fromDisplayName;
  }
  /** @param string */
  public function setReplyTo($replyTo)
  {
    $this->replyTo = $replyTo;
  }
  /** @return string */
  public function getReplyTo()
  {
    return $this->replyTo;
  }
  /** @param string */
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  /** @return string */
  public function getSubject()
  {
    return $this->subject;
  }
}

class GetAccountInfoResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var UserInfo[] */
  public $users;
  protected $collection_key = 'users';
  protected $usersType = UserInfo::class;
  protected $usersDataType = 'array';
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param UserInfo[] */
  public function setUsers($users)
  {
    $this->users = $users;
  }
  /** @return UserInfo[] */
  public function getUsers()
  {
    return $this->users;
  }
}

class GetOobConfirmationCodeResponse extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $kind;
  /** @var string */
  public $oobCode;

  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setOobCode($oobCode)
  {
    $this->oobCode = $oobCode;
  }
  /** @return string */
  public function getOobCode()
  {
    return $this->oobCode;
  }
}

class GetRecaptchaParamResponse extends \Google\Model
{
  /** @var string */
  public $kind;
  /** @var string */
  public $recaptchaSiteKey;
  /** @var string */
  public $recaptchaStoken;

  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setRecaptchaSiteKey($recaptchaSiteKey)
  {
    $this->recaptchaSiteKey = $recaptchaSiteKey;
  }
  /** @return string */
  public function getRecaptchaSiteKey()
  {
    return $this->recaptchaSiteKey;
  }
  /** @param string */
  public function setRecaptchaStoken($recaptchaStoken)
  {
    $this->recaptchaStoken = $recaptchaStoken;
  }
  /** @return string */
  public function getRecaptchaStoken()
  {
    return $this->recaptchaStoken;
  }
}

class IdentitytoolkitRelyingpartyCreateAuthUriRequest extends \Google\Model
{
  /** @var string */
  public $appId;
  /** @var string */
  public $authFlowType;
  /** @var string */
  public $clientId;
  /** @var string */
  public $context;
  /** @var string */
  public $continueUri;
  /** @var string[] */
  public $customParameter;
  /** @var string */
  public $hostedDomain;
  /** @var string */
  public $identifier;
  /** @var string */
  public $oauthConsumerKey;
  /** @var string */
  public $oauthScope;
  /** @var string */
  public $openidRealm;
  /** @var string */
  public $otaApp;
  /** @var string */
  public $providerId;
  /** @var string */
  public $sessionId;
  /** @var string */
  public $tenantId;
  /** @var string */
  public $tenantProjectNumber;

  /** @param string */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /** @return string */
  public function getAppId()
  {
    return $this->appId;
  }
  /** @param string */
  public function setAuthFlowType($authFlowType)
  {
    $this->authFlowType = $authFlowType;
  }
  /** @return string */
  public function getAuthFlowType()
  {
    return $this->authFlowType;
  }
  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
  }
  /** @param string */
  public function setContext($context)
  {
    $this->context = $context;
  }
  /** @return string */
  public function getContext()
  {
    return $this->context;
  }
  /** @param string */
  public function setContinueUri($continueUri)
  {
    $this->continueUri = $continueUri;
  }
  /** @return string */
  public function getContinueUri()
  {
    return $this->continueUri;
  }
  /** @param string[] */
  public function setCustomParameter($customParameter)
  {
    $this->customParameter = $customParameter;
  }
  /** @return string[] */
  public function getCustomParameter()
  {
    return $this->customParameter;
  }
  /** @param string */
  public function setHostedDomain($hostedDomain)
  {
    $this->hostedDomain = $hostedDomain;
  }
  /** @return string */
  public function getHostedDomain()
  {
    return $this->hostedDomain;
  }
  /** @param string */
  public function setIdentifier($identifier)
  {
    $this->identifier = $identifier;
  }
  /** @return string */
  public function getIdentifier()
  {
    return $this->identifier;
  }
  /** @param string */
  public function setOauthConsumerKey($oauthConsumerKey)
  {
    $this->oauthConsumerKey = $oauthConsumerKey;
  }
  /** @return string */
  public function getOauthConsumerKey()
  {
    return $this->oauthConsumerKey;
  }
  /** @param string */
  public function setOauthScope($oauthScope)
  {
    $this->oauthScope = $oauthScope;
  }
  /** @return string */
  public function getOauthScope()
  {
    return $this->oauthScope;
  }
  /** @param string */
  public function setOpenidRealm($openidRealm)
  {
    $this->openidRealm = $openidRealm;
  }
  /** @return string */
  public function getOpenidRealm()
  {
    return $this->openidRealm;
  }
  /** @param string */
  public function setOtaApp($otaApp)
  {
    $this->otaApp = $otaApp;
  }
  /** @return string */
  public function getOtaApp()
  {
    return $this->otaApp;
  }
  /** @param string */
  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }
  /** @return string */
  public function getProviderId()
  {
    return $this->providerId;
  }
  /** @param string */
  public function setSessionId($sessionId)
  {
    $this->sessionId = $sessionId;
  }
  /** @return string */
  public function getSessionId()
  {
    return $this->sessionId;
  }
  /** @param string */
  public function setTenantId($tenantId)
  {
    $this->tenantId = $tenantId;
  }
  /** @return string */
  public function getTenantId()
  {
    return $this->tenantId;
  }
  /** @param string */
  public function setTenantProjectNumber($tenantProjectNumber)
  {
    $this->tenantProjectNumber = $tenantProjectNumber;
  }
  /** @return string */
  public function getTenantProjectNumber()
  {
    return $this->tenantProjectNumber;
  }
}

class IdentitytoolkitRelyingpartyDeleteAccountRequest extends \Google\Model
{
  /** @var string */
  public $delegatedProjectNumber;
  /** @var string */
  public $idToken;
  /** @var string */
  public $localId;

  /** @param string */
  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }
  /** @return string */
  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
  /** @param string */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string */
  public function getLocalId()
  {
    return $this->localId;
  }
}

class IdentitytoolkitRelyingpartyDownloadAccountRequest extends \Google\Model
{
  /** @var string */
  public $delegatedProjectNumber;
  /** @var string */
  public $maxResults;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $targetProjectId;

  /** @param string */
  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }
  /** @return string */
  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }
  /** @param string */
  public function setMaxResults($maxResults)
  {
    $this->maxResults = $maxResults;
  }
  /** @return string */
  public function getMaxResults()
  {
    return $this->maxResults;
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
  /** @param string */
  public function setTargetProjectId($targetProjectId)
  {
    $this->targetProjectId = $targetProjectId;
  }
  /** @return string */
  public function getTargetProjectId()
  {
    return $this->targetProjectId;
  }
}

class IdentitytoolkitRelyingpartyEmailLinkSigninRequest extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $idToken;
  /** @var string */
  public $oobCode;

  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
  /** @param string */
  public function setOobCode($oobCode)
  {
    $this->oobCode = $oobCode;
  }
  /** @return string */
  public function getOobCode()
  {
    return $this->oobCode;
  }
}

class IdentitytoolkitRelyingpartyGetAccountInfoRequest extends \Google\Collection
{
  /** @var string */
  public $delegatedProjectNumber;
  /** @var string[] */
  public $email;
  /** @var string */
  public $idToken;
  /** @var string[] */
  public $localId;
  /** @var string[] */
  public $phoneNumber;
  protected $collection_key = 'phoneNumber';
  /** @param string */
  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }
  /** @return string */
  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }
  /** @param string[] */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string[] */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
  /** @param string[] */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string[] */
  public function getLocalId()
  {
    return $this->localId;
  }
  /** @param string[] */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /** @return string[] */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
}

class IdentitytoolkitRelyingpartyGetProjectConfigResponse extends \Google\Collection
{
  /** @var bool */
  public $allowPasswordUser;
  /** @var string */
  public $apiKey;
  /** @var string[] */
  public $authorizedDomains;
  /** @var EmailTemplate */
  public $changeEmailTemplate;
  /** @var string */
  public $dynamicLinksDomain;
  /** @var bool */
  public $enableAnonymousUser;
  /** @var IdpConfig[] */
  public $idpConfig;
  /** @var EmailTemplate */
  public $legacyResetPasswordTemplate;
  /** @var string */
  public $projectId;
  /** @var EmailTemplate */
  public $resetPasswordTemplate;
  /** @var bool */
  public $useEmailSending;
  /** @var EmailTemplate */
  public $verifyEmailTemplate;
  protected $collection_key = 'idpConfig';
  protected $changeEmailTemplateType = EmailTemplate::class;
  protected $changeEmailTemplateDataType = '';
  protected $idpConfigType = IdpConfig::class;
  protected $idpConfigDataType = 'array';
  protected $legacyResetPasswordTemplateType = EmailTemplate::class;
  protected $legacyResetPasswordTemplateDataType = '';
  protected $resetPasswordTemplateType = EmailTemplate::class;
  protected $resetPasswordTemplateDataType = '';
  protected $verifyEmailTemplateType = EmailTemplate::class;
  protected $verifyEmailTemplateDataType = '';
  /** @param bool */
  public function setAllowPasswordUser($allowPasswordUser)
  {
    $this->allowPasswordUser = $allowPasswordUser;
  }
  /** @return bool */
  public function getAllowPasswordUser()
  {
    return $this->allowPasswordUser;
  }
  /** @param string */
  public function setApiKey($apiKey)
  {
    $this->apiKey = $apiKey;
  }
  /** @return string */
  public function getApiKey()
  {
    return $this->apiKey;
  }
  /** @param string[] */
  public function setAuthorizedDomains($authorizedDomains)
  {
    $this->authorizedDomains = $authorizedDomains;
  }
  /** @return string[] */
  public function getAuthorizedDomains()
  {
    return $this->authorizedDomains;
  }
  /** @param EmailTemplate */
  public function setChangeEmailTemplate(EmailTemplate $changeEmailTemplate)
  {
    $this->changeEmailTemplate = $changeEmailTemplate;
  }
  /** @return EmailTemplate */
  public function getChangeEmailTemplate()
  {
    return $this->changeEmailTemplate;
  }
  /** @param string */
  public function setDynamicLinksDomain($dynamicLinksDomain)
  {
    $this->dynamicLinksDomain = $dynamicLinksDomain;
  }
  /** @return string */
  public function getDynamicLinksDomain()
  {
    return $this->dynamicLinksDomain;
  }
  /** @param bool */
  public function setEnableAnonymousUser($enableAnonymousUser)
  {
    $this->enableAnonymousUser = $enableAnonymousUser;
  }
  /** @return bool */
  public function getEnableAnonymousUser()
  {
    return $this->enableAnonymousUser;
  }
  /** @param IdpConfig[] */
  public function setIdpConfig($idpConfig)
  {
    $this->idpConfig = $idpConfig;
  }
  /** @return IdpConfig[] */
  public function getIdpConfig()
  {
    return $this->idpConfig;
  }
  /** @param EmailTemplate */
  public function setLegacyResetPasswordTemplate(EmailTemplate $legacyResetPasswordTemplate)
  {
    $this->legacyResetPasswordTemplate = $legacyResetPasswordTemplate;
  }
  /** @return EmailTemplate */
  public function getLegacyResetPasswordTemplate()
  {
    return $this->legacyResetPasswordTemplate;
  }
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param EmailTemplate */
  public function setResetPasswordTemplate(EmailTemplate $resetPasswordTemplate)
  {
    $this->resetPasswordTemplate = $resetPasswordTemplate;
  }
  /** @return EmailTemplate */
  public function getResetPasswordTemplate()
  {
    return $this->resetPasswordTemplate;
  }
  /** @param bool */
  public function setUseEmailSending($useEmailSending)
  {
    $this->useEmailSending = $useEmailSending;
  }
  /** @return bool */
  public function getUseEmailSending()
  {
    return $this->useEmailSending;
  }
  /** @param EmailTemplate */
  public function setVerifyEmailTemplate(EmailTemplate $verifyEmailTemplate)
  {
    $this->verifyEmailTemplate = $verifyEmailTemplate;
  }
  /** @return EmailTemplate */
  public function getVerifyEmailTemplate()
  {
    return $this->verifyEmailTemplate;
  }
}

class IdentitytoolkitRelyingpartyResetPasswordRequest extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $newPassword;
  /** @var string */
  public $oldPassword;
  /** @var string */
  public $oobCode;

  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param string */
  public function setNewPassword($newPassword)
  {
    $this->newPassword = $newPassword;
  }
  /** @return string */
  public function getNewPassword()
  {
    return $this->newPassword;
  }
  /** @param string */
  public function setOldPassword($oldPassword)
  {
    $this->oldPassword = $oldPassword;
  }
  /** @return string */
  public function getOldPassword()
  {
    return $this->oldPassword;
  }
  /** @param string */
  public function setOobCode($oobCode)
  {
    $this->oobCode = $oobCode;
  }
  /** @return string */
  public function getOobCode()
  {
    return $this->oobCode;
  }
}

class IdentitytoolkitRelyingpartySendVerificationCodeRequest extends \Google\Model
{
  /** @var string */
  public $iosReceipt;
  /** @var string */
  public $iosSecret;
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $recaptchaToken;

  /** @param string */
  public function setIosReceipt($iosReceipt)
  {
    $this->iosReceipt = $iosReceipt;
  }
  /** @return string */
  public function getIosReceipt()
  {
    return $this->iosReceipt;
  }
  /** @param string */
  public function setIosSecret($iosSecret)
  {
    $this->iosSecret = $iosSecret;
  }
  /** @return string */
  public function getIosSecret()
  {
    return $this->iosSecret;
  }
  /** @param string */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /** @return string */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /** @param string */
  public function setRecaptchaToken($recaptchaToken)
  {
    $this->recaptchaToken = $recaptchaToken;
  }
  /** @return string */
  public function getRecaptchaToken()
  {
    return $this->recaptchaToken;
  }
}

class IdentitytoolkitRelyingpartySendVerificationCodeResponse extends \Google\Model
{
  /** @var string */
  public $sessionInfo;

  /** @param string */
  public function setSessionInfo($sessionInfo)
  {
    $this->sessionInfo = $sessionInfo;
  }
  /** @return string */
  public function getSessionInfo()
  {
    return $this->sessionInfo;
  }
}

class IdentitytoolkitRelyingpartySetAccountInfoRequest extends \Google\Collection
{
  /** @var string */
  public $captchaChallenge;
  /** @var string */
  public $captchaResponse;
  /** @var string */
  public $createdAt;
  /** @var string */
  public $customAttributes;
  /** @var string */
  public $delegatedProjectNumber;
  /** @var string[] */
  public $deleteAttribute;
  /** @var string[] */
  public $deleteProvider;
  /** @var bool */
  public $disableUser;
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;
  /** @var bool */
  public $emailVerified;
  /** @var string */
  public $idToken;
  /** @var string */
  public $instanceId;
  /** @var string */
  public $lastLoginAt;
  /** @var string */
  public $localId;
  /** @var string */
  public $oobCode;
  /** @var string */
  public $password;
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $photoUrl;
  /** @var string[] */
  public $provider;
  /** @var bool */
  public $returnSecureToken;
  /** @var bool */
  public $upgradeToFederatedLogin;
  /** @var string */
  public $validSince;
  protected $collection_key = 'provider';
  /** @param string */
  public function setCaptchaChallenge($captchaChallenge)
  {
    $this->captchaChallenge = $captchaChallenge;
  }
  /** @return string */
  public function getCaptchaChallenge()
  {
    return $this->captchaChallenge;
  }
  /** @param string */
  public function setCaptchaResponse($captchaResponse)
  {
    $this->captchaResponse = $captchaResponse;
  }
  /** @return string */
  public function getCaptchaResponse()
  {
    return $this->captchaResponse;
  }
  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
  /** @param string */
  public function setCustomAttributes($customAttributes)
  {
    $this->customAttributes = $customAttributes;
  }
  /** @return string */
  public function getCustomAttributes()
  {
    return $this->customAttributes;
  }
  /** @param string */
  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }
  /** @return string */
  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }
  /** @param string[] */
  public function setDeleteAttribute($deleteAttribute)
  {
    $this->deleteAttribute = $deleteAttribute;
  }
  /** @return string[] */
  public function getDeleteAttribute()
  {
    return $this->deleteAttribute;
  }
  /** @param string[] */
  public function setDeleteProvider($deleteProvider)
  {
    $this->deleteProvider = $deleteProvider;
  }
  /** @return string[] */
  public function getDeleteProvider()
  {
    return $this->deleteProvider;
  }
  /** @param bool */
  public function setDisableUser($disableUser)
  {
    $this->disableUser = $disableUser;
  }
  /** @return bool */
  public function getDisableUser()
  {
    return $this->disableUser;
  }
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
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param bool */
  public function setEmailVerified($emailVerified)
  {
    $this->emailVerified = $emailVerified;
  }
  /** @return bool */
  public function getEmailVerified()
  {
    return $this->emailVerified;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
  /** @param string */
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /** @return string */
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  /** @param string */
  public function setLastLoginAt($lastLoginAt)
  {
    $this->lastLoginAt = $lastLoginAt;
  }
  /** @return string */
  public function getLastLoginAt()
  {
    return $this->lastLoginAt;
  }
  /** @param string */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string */
  public function getLocalId()
  {
    return $this->localId;
  }
  /** @param string */
  public function setOobCode($oobCode)
  {
    $this->oobCode = $oobCode;
  }
  /** @return string */
  public function getOobCode()
  {
    return $this->oobCode;
  }
  /** @param string */
  public function setPassword($password)
  {
    $this->password = $password;
  }
  /** @return string */
  public function getPassword()
  {
    return $this->password;
  }
  /** @param string */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /** @return string */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /** @param string */
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  /** @return string */
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  /** @param string[] */
  public function setProvider($provider)
  {
    $this->provider = $provider;
  }
  /** @return string[] */
  public function getProvider()
  {
    return $this->provider;
  }
  /** @param bool */
  public function setReturnSecureToken($returnSecureToken)
  {
    $this->returnSecureToken = $returnSecureToken;
  }
  /** @return bool */
  public function getReturnSecureToken()
  {
    return $this->returnSecureToken;
  }
  /** @param bool */
  public function setUpgradeToFederatedLogin($upgradeToFederatedLogin)
  {
    $this->upgradeToFederatedLogin = $upgradeToFederatedLogin;
  }
  /** @return bool */
  public function getUpgradeToFederatedLogin()
  {
    return $this->upgradeToFederatedLogin;
  }
  /** @param string */
  public function setValidSince($validSince)
  {
    $this->validSince = $validSince;
  }
  /** @return string */
  public function getValidSince()
  {
    return $this->validSince;
  }
}

class IdentitytoolkitRelyingpartySetProjectConfigRequest extends \Google\Collection
{
  /** @var bool */
  public $allowPasswordUser;
  /** @var string */
  public $apiKey;
  /** @var string[] */
  public $authorizedDomains;
  /** @var EmailTemplate */
  public $changeEmailTemplate;
  /** @var string */
  public $delegatedProjectNumber;
  /** @var bool */
  public $enableAnonymousUser;
  /** @var IdpConfig[] */
  public $idpConfig;
  /** @var EmailTemplate */
  public $legacyResetPasswordTemplate;
  /** @var EmailTemplate */
  public $resetPasswordTemplate;
  /** @var bool */
  public $useEmailSending;
  /** @var EmailTemplate */
  public $verifyEmailTemplate;
  protected $collection_key = 'idpConfig';
  protected $changeEmailTemplateType = EmailTemplate::class;
  protected $changeEmailTemplateDataType = '';
  protected $idpConfigType = IdpConfig::class;
  protected $idpConfigDataType = 'array';
  protected $legacyResetPasswordTemplateType = EmailTemplate::class;
  protected $legacyResetPasswordTemplateDataType = '';
  protected $resetPasswordTemplateType = EmailTemplate::class;
  protected $resetPasswordTemplateDataType = '';
  protected $verifyEmailTemplateType = EmailTemplate::class;
  protected $verifyEmailTemplateDataType = '';
  /** @param bool */
  public function setAllowPasswordUser($allowPasswordUser)
  {
    $this->allowPasswordUser = $allowPasswordUser;
  }
  /** @return bool */
  public function getAllowPasswordUser()
  {
    return $this->allowPasswordUser;
  }
  /** @param string */
  public function setApiKey($apiKey)
  {
    $this->apiKey = $apiKey;
  }
  /** @return string */
  public function getApiKey()
  {
    return $this->apiKey;
  }
  /** @param string[] */
  public function setAuthorizedDomains($authorizedDomains)
  {
    $this->authorizedDomains = $authorizedDomains;
  }
  /** @return string[] */
  public function getAuthorizedDomains()
  {
    return $this->authorizedDomains;
  }
  /** @param EmailTemplate */
  public function setChangeEmailTemplate(EmailTemplate $changeEmailTemplate)
  {
    $this->changeEmailTemplate = $changeEmailTemplate;
  }
  /** @return EmailTemplate */
  public function getChangeEmailTemplate()
  {
    return $this->changeEmailTemplate;
  }
  /** @param string */
  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }
  /** @return string */
  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }
  /** @param bool */
  public function setEnableAnonymousUser($enableAnonymousUser)
  {
    $this->enableAnonymousUser = $enableAnonymousUser;
  }
  /** @return bool */
  public function getEnableAnonymousUser()
  {
    return $this->enableAnonymousUser;
  }
  /** @param IdpConfig[] */
  public function setIdpConfig($idpConfig)
  {
    $this->idpConfig = $idpConfig;
  }
  /** @return IdpConfig[] */
  public function getIdpConfig()
  {
    return $this->idpConfig;
  }
  /** @param EmailTemplate */
  public function setLegacyResetPasswordTemplate(EmailTemplate $legacyResetPasswordTemplate)
  {
    $this->legacyResetPasswordTemplate = $legacyResetPasswordTemplate;
  }
  /** @return EmailTemplate */
  public function getLegacyResetPasswordTemplate()
  {
    return $this->legacyResetPasswordTemplate;
  }
  /** @param EmailTemplate */
  public function setResetPasswordTemplate(EmailTemplate $resetPasswordTemplate)
  {
    $this->resetPasswordTemplate = $resetPasswordTemplate;
  }
  /** @return EmailTemplate */
  public function getResetPasswordTemplate()
  {
    return $this->resetPasswordTemplate;
  }
  /** @param bool */
  public function setUseEmailSending($useEmailSending)
  {
    $this->useEmailSending = $useEmailSending;
  }
  /** @return bool */
  public function getUseEmailSending()
  {
    return $this->useEmailSending;
  }
  /** @param EmailTemplate */
  public function setVerifyEmailTemplate(EmailTemplate $verifyEmailTemplate)
  {
    $this->verifyEmailTemplate = $verifyEmailTemplate;
  }
  /** @return EmailTemplate */
  public function getVerifyEmailTemplate()
  {
    return $this->verifyEmailTemplate;
  }
}

class IdentitytoolkitRelyingpartySetProjectConfigResponse extends \Google\Model
{
  /** @var string */
  public $projectId;

  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
}

class IdentitytoolkitRelyingpartySignOutUserRequest extends \Google\Model
{
  /** @var string */
  public $instanceId;
  /** @var string */
  public $localId;

  /** @param string */
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /** @return string */
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  /** @param string */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string */
  public function getLocalId()
  {
    return $this->localId;
  }
}

class IdentitytoolkitRelyingpartySignOutUserResponse extends \Google\Model
{
  /** @var string */
  public $localId;

  /** @param string */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string */
  public function getLocalId()
  {
    return $this->localId;
  }
}

class IdentitytoolkitRelyingpartySignupNewUserRequest extends \Google\Model
{
  /** @var string */
  public $captchaChallenge;
  /** @var string */
  public $captchaResponse;
  /** @var bool */
  public $disabled;
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;
  /** @var bool */
  public $emailVerified;
  /** @var string */
  public $idToken;
  /** @var string */
  public $instanceId;
  /** @var string */
  public $localId;
  /** @var string */
  public $password;
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $photoUrl;
  /** @var string */
  public $tenantId;
  /** @var string */
  public $tenantProjectNumber;

  /** @param string */
  public function setCaptchaChallenge($captchaChallenge)
  {
    $this->captchaChallenge = $captchaChallenge;
  }
  /** @return string */
  public function getCaptchaChallenge()
  {
    return $this->captchaChallenge;
  }
  /** @param string */
  public function setCaptchaResponse($captchaResponse)
  {
    $this->captchaResponse = $captchaResponse;
  }
  /** @return string */
  public function getCaptchaResponse()
  {
    return $this->captchaResponse;
  }
  /** @param bool */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /** @return bool */
  public function getDisabled()
  {
    return $this->disabled;
  }
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
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param bool */
  public function setEmailVerified($emailVerified)
  {
    $this->emailVerified = $emailVerified;
  }
  /** @return bool */
  public function getEmailVerified()
  {
    return $this->emailVerified;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
  /** @param string */
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /** @return string */
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  /** @param string */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string */
  public function getLocalId()
  {
    return $this->localId;
  }
  /** @param string */
  public function setPassword($password)
  {
    $this->password = $password;
  }
  /** @return string */
  public function getPassword()
  {
    return $this->password;
  }
  /** @param string */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /** @return string */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /** @param string */
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  /** @return string */
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  /** @param string */
  public function setTenantId($tenantId)
  {
    $this->tenantId = $tenantId;
  }
  /** @return string */
  public function getTenantId()
  {
    return $this->tenantId;
  }
  /** @param string */
  public function setTenantProjectNumber($tenantProjectNumber)
  {
    $this->tenantProjectNumber = $tenantProjectNumber;
  }
  /** @return string */
  public function getTenantProjectNumber()
  {
    return $this->tenantProjectNumber;
  }
}

class IdentitytoolkitRelyingpartyUploadAccountRequest extends \Google\Collection
{
  /** @var bool */
  public $allowOverwrite;
  /** @var int */
  public $blockSize;
  /** @var int */
  public $cpuMemCost;
  /** @var string */
  public $delegatedProjectNumber;
  /** @var int */
  public $dkLen;
  /** @var string */
  public $hashAlgorithm;
  /** @var int */
  public $memoryCost;
  /** @var int */
  public $parallelization;
  /** @var int */
  public $rounds;
  /** @var string */
  public $saltSeparator;
  /** @var bool */
  public $sanityCheck;
  /** @var string */
  public $signerKey;
  /** @var string */
  public $targetProjectId;
  /** @var UserInfo[] */
  public $users;
  protected $collection_key = 'users';
  protected $usersType = UserInfo::class;
  protected $usersDataType = 'array';
  /** @param bool */
  public function setAllowOverwrite($allowOverwrite)
  {
    $this->allowOverwrite = $allowOverwrite;
  }
  /** @return bool */
  public function getAllowOverwrite()
  {
    return $this->allowOverwrite;
  }
  /** @param int */
  public function setBlockSize($blockSize)
  {
    $this->blockSize = $blockSize;
  }
  /** @return int */
  public function getBlockSize()
  {
    return $this->blockSize;
  }
  /** @param int */
  public function setCpuMemCost($cpuMemCost)
  {
    $this->cpuMemCost = $cpuMemCost;
  }
  /** @return int */
  public function getCpuMemCost()
  {
    return $this->cpuMemCost;
  }
  /** @param string */
  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }
  /** @return string */
  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }
  /** @param int */
  public function setDkLen($dkLen)
  {
    $this->dkLen = $dkLen;
  }
  /** @return int */
  public function getDkLen()
  {
    return $this->dkLen;
  }
  /** @param string */
  public function setHashAlgorithm($hashAlgorithm)
  {
    $this->hashAlgorithm = $hashAlgorithm;
  }
  /** @return string */
  public function getHashAlgorithm()
  {
    return $this->hashAlgorithm;
  }
  /** @param int */
  public function setMemoryCost($memoryCost)
  {
    $this->memoryCost = $memoryCost;
  }
  /** @return int */
  public function getMemoryCost()
  {
    return $this->memoryCost;
  }
  /** @param int */
  public function setParallelization($parallelization)
  {
    $this->parallelization = $parallelization;
  }
  /** @return int */
  public function getParallelization()
  {
    return $this->parallelization;
  }
  /** @param int */
  public function setRounds($rounds)
  {
    $this->rounds = $rounds;
  }
  /** @return int */
  public function getRounds()
  {
    return $this->rounds;
  }
  /** @param string */
  public function setSaltSeparator($saltSeparator)
  {
    $this->saltSeparator = $saltSeparator;
  }
  /** @return string */
  public function getSaltSeparator()
  {
    return $this->saltSeparator;
  }
  /** @param bool */
  public function setSanityCheck($sanityCheck)
  {
    $this->sanityCheck = $sanityCheck;
  }
  /** @return bool */
  public function getSanityCheck()
  {
    return $this->sanityCheck;
  }
  /** @param string */
  public function setSignerKey($signerKey)
  {
    $this->signerKey = $signerKey;
  }
  /** @return string */
  public function getSignerKey()
  {
    return $this->signerKey;
  }
  /** @param string */
  public function setTargetProjectId($targetProjectId)
  {
    $this->targetProjectId = $targetProjectId;
  }
  /** @return string */
  public function getTargetProjectId()
  {
    return $this->targetProjectId;
  }
  /** @param UserInfo[] */
  public function setUsers($users)
  {
    $this->users = $users;
  }
  /** @return UserInfo[] */
  public function getUsers()
  {
    return $this->users;
  }
}

class IdentitytoolkitRelyingpartyVerifyAssertionRequest extends \Google\Model
{
  /** @var bool */
  public $autoCreate;
  /** @var string */
  public $delegatedProjectNumber;
  /** @var string */
  public $idToken;
  /** @var string */
  public $instanceId;
  /** @var string */
  public $pendingIdToken;
  /** @var string */
  public $postBody;
  /** @var string */
  public $requestUri;
  /** @var bool */
  public $returnIdpCredential;
  /** @var bool */
  public $returnRefreshToken;
  /** @var bool */
  public $returnSecureToken;
  /** @var string */
  public $sessionId;
  /** @var string */
  public $tenantId;
  /** @var string */
  public $tenantProjectNumber;

  /** @param bool */
  public function setAutoCreate($autoCreate)
  {
    $this->autoCreate = $autoCreate;
  }
  /** @return bool */
  public function getAutoCreate()
  {
    return $this->autoCreate;
  }
  /** @param string */
  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }
  /** @return string */
  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
  /** @param string */
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /** @return string */
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  /** @param string */
  public function setPendingIdToken($pendingIdToken)
  {
    $this->pendingIdToken = $pendingIdToken;
  }
  /** @return string */
  public function getPendingIdToken()
  {
    return $this->pendingIdToken;
  }
  /** @param string */
  public function setPostBody($postBody)
  {
    $this->postBody = $postBody;
  }
  /** @return string */
  public function getPostBody()
  {
    return $this->postBody;
  }
  /** @param string */
  public function setRequestUri($requestUri)
  {
    $this->requestUri = $requestUri;
  }
  /** @return string */
  public function getRequestUri()
  {
    return $this->requestUri;
  }
  /** @param bool */
  public function setReturnIdpCredential($returnIdpCredential)
  {
    $this->returnIdpCredential = $returnIdpCredential;
  }
  /** @return bool */
  public function getReturnIdpCredential()
  {
    return $this->returnIdpCredential;
  }
  /** @param bool */
  public function setReturnRefreshToken($returnRefreshToken)
  {
    $this->returnRefreshToken = $returnRefreshToken;
  }
  /** @return bool */
  public function getReturnRefreshToken()
  {
    return $this->returnRefreshToken;
  }
  /** @param bool */
  public function setReturnSecureToken($returnSecureToken)
  {
    $this->returnSecureToken = $returnSecureToken;
  }
  /** @return bool */
  public function getReturnSecureToken()
  {
    return $this->returnSecureToken;
  }
  /** @param string */
  public function setSessionId($sessionId)
  {
    $this->sessionId = $sessionId;
  }
  /** @return string */
  public function getSessionId()
  {
    return $this->sessionId;
  }
  /** @param string */
  public function setTenantId($tenantId)
  {
    $this->tenantId = $tenantId;
  }
  /** @return string */
  public function getTenantId()
  {
    return $this->tenantId;
  }
  /** @param string */
  public function setTenantProjectNumber($tenantProjectNumber)
  {
    $this->tenantProjectNumber = $tenantProjectNumber;
  }
  /** @return string */
  public function getTenantProjectNumber()
  {
    return $this->tenantProjectNumber;
  }
}

class IdentitytoolkitRelyingpartyVerifyCustomTokenRequest extends \Google\Model
{
  /** @var string */
  public $delegatedProjectNumber;
  /** @var string */
  public $instanceId;
  /** @var bool */
  public $returnSecureToken;
  /** @var string */
  public $token;

  /** @param string */
  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }
  /** @return string */
  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }
  /** @param string */
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /** @return string */
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  /** @param bool */
  public function setReturnSecureToken($returnSecureToken)
  {
    $this->returnSecureToken = $returnSecureToken;
  }
  /** @return bool */
  public function getReturnSecureToken()
  {
    return $this->returnSecureToken;
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

class IdentitytoolkitRelyingpartyVerifyPasswordRequest extends \Google\Model
{
  /** @var string */
  public $captchaChallenge;
  /** @var string */
  public $captchaResponse;
  /** @var string */
  public $delegatedProjectNumber;
  /** @var string */
  public $email;
  /** @var string */
  public $idToken;
  /** @var string */
  public $instanceId;
  /** @var string */
  public $password;
  /** @var string */
  public $pendingIdToken;
  /** @var bool */
  public $returnSecureToken;
  /** @var string */
  public $tenantId;
  /** @var string */
  public $tenantProjectNumber;

  /** @param string */
  public function setCaptchaChallenge($captchaChallenge)
  {
    $this->captchaChallenge = $captchaChallenge;
  }
  /** @return string */
  public function getCaptchaChallenge()
  {
    return $this->captchaChallenge;
  }
  /** @param string */
  public function setCaptchaResponse($captchaResponse)
  {
    $this->captchaResponse = $captchaResponse;
  }
  /** @return string */
  public function getCaptchaResponse()
  {
    return $this->captchaResponse;
  }
  /** @param string */
  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }
  /** @return string */
  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }
  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
  /** @param string */
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /** @return string */
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  /** @param string */
  public function setPassword($password)
  {
    $this->password = $password;
  }
  /** @return string */
  public function getPassword()
  {
    return $this->password;
  }
  /** @param string */
  public function setPendingIdToken($pendingIdToken)
  {
    $this->pendingIdToken = $pendingIdToken;
  }
  /** @return string */
  public function getPendingIdToken()
  {
    return $this->pendingIdToken;
  }
  /** @param bool */
  public function setReturnSecureToken($returnSecureToken)
  {
    $this->returnSecureToken = $returnSecureToken;
  }
  /** @return bool */
  public function getReturnSecureToken()
  {
    return $this->returnSecureToken;
  }
  /** @param string */
  public function setTenantId($tenantId)
  {
    $this->tenantId = $tenantId;
  }
  /** @return string */
  public function getTenantId()
  {
    return $this->tenantId;
  }
  /** @param string */
  public function setTenantProjectNumber($tenantProjectNumber)
  {
    $this->tenantProjectNumber = $tenantProjectNumber;
  }
  /** @return string */
  public function getTenantProjectNumber()
  {
    return $this->tenantProjectNumber;
  }
}

class IdentitytoolkitRelyingpartyVerifyPhoneNumberRequest extends \Google\Model
{
  /** @var string */
  public $code;
  /** @var string */
  public $idToken;
  /** @var string */
  public $operation;
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $sessionInfo;
  /** @var string */
  public $temporaryProof;
  /** @var string */
  public $verificationProof;

  /** @param string */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return string */
  public function getCode()
  {
    return $this->code;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
  /** @param string */
  public function setOperation($operation)
  {
    $this->operation = $operation;
  }
  /** @return string */
  public function getOperation()
  {
    return $this->operation;
  }
  /** @param string */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /** @return string */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /** @param string */
  public function setSessionInfo($sessionInfo)
  {
    $this->sessionInfo = $sessionInfo;
  }
  /** @return string */
  public function getSessionInfo()
  {
    return $this->sessionInfo;
  }
  /** @param string */
  public function setTemporaryProof($temporaryProof)
  {
    $this->temporaryProof = $temporaryProof;
  }
  /** @return string */
  public function getTemporaryProof()
  {
    return $this->temporaryProof;
  }
  /** @param string */
  public function setVerificationProof($verificationProof)
  {
    $this->verificationProof = $verificationProof;
  }
  /** @return string */
  public function getVerificationProof()
  {
    return $this->verificationProof;
  }
}

class IdentitytoolkitRelyingpartyVerifyPhoneNumberResponse extends \Google\Model
{
  /** @var string */
  public $expiresIn;
  /** @var string */
  public $idToken;
  /** @var bool */
  public $isNewUser;
  /** @var string */
  public $localId;
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $refreshToken;
  /** @var string */
  public $temporaryProof;
  /** @var string */
  public $temporaryProofExpiresIn;
  /** @var string */
  public $verificationProof;
  /** @var string */
  public $verificationProofExpiresIn;

  /** @param string */
  public function setExpiresIn($expiresIn)
  {
    $this->expiresIn = $expiresIn;
  }
  /** @return string */
  public function getExpiresIn()
  {
    return $this->expiresIn;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
  /** @param bool */
  public function setIsNewUser($isNewUser)
  {
    $this->isNewUser = $isNewUser;
  }
  /** @return bool */
  public function getIsNewUser()
  {
    return $this->isNewUser;
  }
  /** @param string */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string */
  public function getLocalId()
  {
    return $this->localId;
  }
  /** @param string */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /** @return string */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /** @param string */
  public function setRefreshToken($refreshToken)
  {
    $this->refreshToken = $refreshToken;
  }
  /** @return string */
  public function getRefreshToken()
  {
    return $this->refreshToken;
  }
  /** @param string */
  public function setTemporaryProof($temporaryProof)
  {
    $this->temporaryProof = $temporaryProof;
  }
  /** @return string */
  public function getTemporaryProof()
  {
    return $this->temporaryProof;
  }
  /** @param string */
  public function setTemporaryProofExpiresIn($temporaryProofExpiresIn)
  {
    $this->temporaryProofExpiresIn = $temporaryProofExpiresIn;
  }
  /** @return string */
  public function getTemporaryProofExpiresIn()
  {
    return $this->temporaryProofExpiresIn;
  }
  /** @param string */
  public function setVerificationProof($verificationProof)
  {
    $this->verificationProof = $verificationProof;
  }
  /** @return string */
  public function getVerificationProof()
  {
    return $this->verificationProof;
  }
  /** @param string */
  public function setVerificationProofExpiresIn($verificationProofExpiresIn)
  {
    $this->verificationProofExpiresIn = $verificationProofExpiresIn;
  }
  /** @return string */
  public function getVerificationProofExpiresIn()
  {
    return $this->verificationProofExpiresIn;
  }
}

class IdpConfig extends \Google\Collection
{
  /** @var string */
  public $clientId;
  /** @var bool */
  public $enabled;
  /** @var int */
  public $experimentPercent;
  /** @var string */
  public $provider;
  /** @var string */
  public $secret;
  /** @var string[] */
  public $whitelistedAudiences;
  protected $collection_key = 'whitelistedAudiences';
  /** @param string */
  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  /** @return string */
  public function getClientId()
  {
    return $this->clientId;
  }
  /** @param bool */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /** @return bool */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /** @param int */
  public function setExperimentPercent($experimentPercent)
  {
    $this->experimentPercent = $experimentPercent;
  }
  /** @return int */
  public function getExperimentPercent()
  {
    return $this->experimentPercent;
  }
  /** @param string */
  public function setProvider($provider)
  {
    $this->provider = $provider;
  }
  /** @return string */
  public function getProvider()
  {
    return $this->provider;
  }
  /** @param string */
  public function setSecret($secret)
  {
    $this->secret = $secret;
  }
  /** @return string */
  public function getSecret()
  {
    return $this->secret;
  }
  /** @param string[] */
  public function setWhitelistedAudiences($whitelistedAudiences)
  {
    $this->whitelistedAudiences = $whitelistedAudiences;
  }
  /** @return string[] */
  public function getWhitelistedAudiences()
  {
    return $this->whitelistedAudiences;
  }
}

class Relyingparty extends \Google\Model
{
  /** @var bool */
  public $androidInstallApp;
  /** @var string */
  public $androidMinimumVersion;
  /** @var string */
  public $androidPackageName;
  /** @var bool */
  public $canHandleCodeInApp;
  /** @var string */
  public $captchaResp;
  /** @var string */
  public $challenge;
  /** @var string */
  public $continueUrl;
  /** @var string */
  public $email;
  /** @var string */
  public $iOSAppStoreId;
  /** @var string */
  public $iOSBundleId;
  /** @var string */
  public $idToken;
  /** @var string */
  public $kind;
  /** @var string */
  public $newEmail;
  /** @var string */
  public $requestType;
  /** @var string */
  public $userIp;

  /** @param bool */
  public function setAndroidInstallApp($androidInstallApp)
  {
    $this->androidInstallApp = $androidInstallApp;
  }
  /** @return bool */
  public function getAndroidInstallApp()
  {
    return $this->androidInstallApp;
  }
  /** @param string */
  public function setAndroidMinimumVersion($androidMinimumVersion)
  {
    $this->androidMinimumVersion = $androidMinimumVersion;
  }
  /** @return string */
  public function getAndroidMinimumVersion()
  {
    return $this->androidMinimumVersion;
  }
  /** @param string */
  public function setAndroidPackageName($androidPackageName)
  {
    $this->androidPackageName = $androidPackageName;
  }
  /** @return string */
  public function getAndroidPackageName()
  {
    return $this->androidPackageName;
  }
  /** @param bool */
  public function setCanHandleCodeInApp($canHandleCodeInApp)
  {
    $this->canHandleCodeInApp = $canHandleCodeInApp;
  }
  /** @return bool */
  public function getCanHandleCodeInApp()
  {
    return $this->canHandleCodeInApp;
  }
  /** @param string */
  public function setCaptchaResp($captchaResp)
  {
    $this->captchaResp = $captchaResp;
  }
  /** @return string */
  public function getCaptchaResp()
  {
    return $this->captchaResp;
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
  public function setContinueUrl($continueUrl)
  {
    $this->continueUrl = $continueUrl;
  }
  /** @return string */
  public function getContinueUrl()
  {
    return $this->continueUrl;
  }
  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param string */
  public function setIOSAppStoreId($iOSAppStoreId)
  {
    $this->iOSAppStoreId = $iOSAppStoreId;
  }
  /** @return string */
  public function getIOSAppStoreId()
  {
    return $this->iOSAppStoreId;
  }
  /** @param string */
  public function setIOSBundleId($iOSBundleId)
  {
    $this->iOSBundleId = $iOSBundleId;
  }
  /** @return string */
  public function getIOSBundleId()
  {
    return $this->iOSBundleId;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setNewEmail($newEmail)
  {
    $this->newEmail = $newEmail;
  }
  /** @return string */
  public function getNewEmail()
  {
    return $this->newEmail;
  }
  /** @param string */
  public function setRequestType($requestType)
  {
    $this->requestType = $requestType;
  }
  /** @return string */
  public function getRequestType()
  {
    return $this->requestType;
  }
  /** @param string */
  public function setUserIp($userIp)
  {
    $this->userIp = $userIp;
  }
  /** @return string */
  public function getUserIp()
  {
    return $this->userIp;
  }
}

class ResetPasswordResponse extends \Google\Model
{
  /** @var string */
  public $email;
  /** @var string */
  public $kind;
  /** @var string */
  public $newEmail;
  /** @var string */
  public $requestType;

  /** @param string */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setNewEmail($newEmail)
  {
    $this->newEmail = $newEmail;
  }
  /** @return string */
  public function getNewEmail()
  {
    return $this->newEmail;
  }
  /** @param string */
  public function setRequestType($requestType)
  {
    $this->requestType = $requestType;
  }
  /** @return string */
  public function getRequestType()
  {
    return $this->requestType;
  }
}

class SetAccountInfoResponse extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;
  /** @var bool */
  public $emailVerified;
  /** @var string */
  public $expiresIn;
  /** @var string */
  public $idToken;
  /** @var string */
  public $kind;
  /** @var string */
  public $localId;
  /** @var string */
  public $newEmail;
  /** @var string */
  public $passwordHash;
  /** @var string */
  public $photoUrl;
  /** @var SetAccountInfoResponseProviderUserInfo[] */
  public $providerUserInfo;
  /** @var string */
  public $refreshToken;
  protected $collection_key = 'providerUserInfo';
  protected $providerUserInfoType = SetAccountInfoResponseProviderUserInfo::class;
  protected $providerUserInfoDataType = 'array';
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
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param bool */
  public function setEmailVerified($emailVerified)
  {
    $this->emailVerified = $emailVerified;
  }
  /** @return bool */
  public function getEmailVerified()
  {
    return $this->emailVerified;
  }
  /** @param string */
  public function setExpiresIn($expiresIn)
  {
    $this->expiresIn = $expiresIn;
  }
  /** @return string */
  public function getExpiresIn()
  {
    return $this->expiresIn;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string */
  public function getLocalId()
  {
    return $this->localId;
  }
  /** @param string */
  public function setNewEmail($newEmail)
  {
    $this->newEmail = $newEmail;
  }
  /** @return string */
  public function getNewEmail()
  {
    return $this->newEmail;
  }
  /** @param string */
  public function setPasswordHash($passwordHash)
  {
    $this->passwordHash = $passwordHash;
  }
  /** @return string */
  public function getPasswordHash()
  {
    return $this->passwordHash;
  }
  /** @param string */
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  /** @return string */
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  /** @param SetAccountInfoResponseProviderUserInfo[] */
  public function setProviderUserInfo($providerUserInfo)
  {
    $this->providerUserInfo = $providerUserInfo;
  }
  /** @return SetAccountInfoResponseProviderUserInfo[] */
  public function getProviderUserInfo()
  {
    return $this->providerUserInfo;
  }
  /** @param string */
  public function setRefreshToken($refreshToken)
  {
    $this->refreshToken = $refreshToken;
  }
  /** @return string */
  public function getRefreshToken()
  {
    return $this->refreshToken;
  }
}

class SetAccountInfoResponseProviderUserInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $federatedId;
  /** @var string */
  public $photoUrl;
  /** @var string */
  public $providerId;

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
  public function setFederatedId($federatedId)
  {
    $this->federatedId = $federatedId;
  }
  /** @return string */
  public function getFederatedId()
  {
    return $this->federatedId;
  }
  /** @param string */
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  /** @return string */
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  /** @param string */
  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }
  /** @return string */
  public function getProviderId()
  {
    return $this->providerId;
  }
}

class SignupNewUserResponse extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;
  /** @var string */
  public $expiresIn;
  /** @var string */
  public $idToken;
  /** @var string */
  public $kind;
  /** @var string */
  public $localId;
  /** @var string */
  public $refreshToken;

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
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param string */
  public function setExpiresIn($expiresIn)
  {
    $this->expiresIn = $expiresIn;
  }
  /** @return string */
  public function getExpiresIn()
  {
    return $this->expiresIn;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string */
  public function getLocalId()
  {
    return $this->localId;
  }
  /** @param string */
  public function setRefreshToken($refreshToken)
  {
    $this->refreshToken = $refreshToken;
  }
  /** @return string */
  public function getRefreshToken()
  {
    return $this->refreshToken;
  }
}

class UploadAccountResponse extends \Google\Collection
{
  /** @var UploadAccountResponseError[] */
  public $error;
  /** @var string */
  public $kind;
  protected $collection_key = 'error';
  protected $errorType = UploadAccountResponseError::class;
  protected $errorDataType = 'array';
  /** @param UploadAccountResponseError[] */
  public function setError($error)
  {
    $this->error = $error;
  }
  /** @return UploadAccountResponseError[] */
  public function getError()
  {
    return $this->error;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
}

class UploadAccountResponseError extends \Google\Model
{
  /** @var int */
  public $index;
  /** @var string */
  public $message;

  /** @param int */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return int */
  public function getIndex()
  {
    return $this->index;
  }
  /** @param string */
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /** @return string */
  public function getMessage()
  {
    return $this->message;
  }
}

class UserInfo extends \Google\Collection
{
  /** @var string */
  public $createdAt;
  /** @var string */
  public $customAttributes;
  /** @var bool */
  public $customAuth;
  /** @var bool */
  public $disabled;
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;
  /** @var bool */
  public $emailVerified;
  /** @var string */
  public $lastLoginAt;
  /** @var string */
  public $localId;
  /** @var string */
  public $passwordHash;
  public $passwordUpdatedAt;
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $photoUrl;
  /** @var UserInfoProviderUserInfo[] */
  public $providerUserInfo;
  /** @var string */
  public $rawPassword;
  /** @var string */
  public $salt;
  /** @var string */
  public $screenName;
  /** @var string */
  public $validSince;
  /** @var int */
  public $version;
  protected $collection_key = 'providerUserInfo';
  protected $providerUserInfoType = UserInfoProviderUserInfo::class;
  protected $providerUserInfoDataType = 'array';
  /** @param string */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /** @return string */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
  /** @param string */
  public function setCustomAttributes($customAttributes)
  {
    $this->customAttributes = $customAttributes;
  }
  /** @return string */
  public function getCustomAttributes()
  {
    return $this->customAttributes;
  }
  /** @param bool */
  public function setCustomAuth($customAuth)
  {
    $this->customAuth = $customAuth;
  }
  /** @return bool */
  public function getCustomAuth()
  {
    return $this->customAuth;
  }
  /** @param bool */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /** @return bool */
  public function getDisabled()
  {
    return $this->disabled;
  }
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
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param bool */
  public function setEmailVerified($emailVerified)
  {
    $this->emailVerified = $emailVerified;
  }
  /** @return bool */
  public function getEmailVerified()
  {
    return $this->emailVerified;
  }
  /** @param string */
  public function setLastLoginAt($lastLoginAt)
  {
    $this->lastLoginAt = $lastLoginAt;
  }
  /** @return string */
  public function getLastLoginAt()
  {
    return $this->lastLoginAt;
  }
  /** @param string */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string */
  public function getLocalId()
  {
    return $this->localId;
  }
  /** @param string */
  public function setPasswordHash($passwordHash)
  {
    $this->passwordHash = $passwordHash;
  }
  /** @return string */
  public function getPasswordHash()
  {
    return $this->passwordHash;
  }
  public function setPasswordUpdatedAt($passwordUpdatedAt)
  {
    $this->passwordUpdatedAt = $passwordUpdatedAt;
  }
  public function getPasswordUpdatedAt()
  {
    return $this->passwordUpdatedAt;
  }
  /** @param string */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /** @return string */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /** @param string */
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  /** @return string */
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  /** @param UserInfoProviderUserInfo[] */
  public function setProviderUserInfo($providerUserInfo)
  {
    $this->providerUserInfo = $providerUserInfo;
  }
  /** @return UserInfoProviderUserInfo[] */
  public function getProviderUserInfo()
  {
    return $this->providerUserInfo;
  }
  /** @param string */
  public function setRawPassword($rawPassword)
  {
    $this->rawPassword = $rawPassword;
  }
  /** @return string */
  public function getRawPassword()
  {
    return $this->rawPassword;
  }
  /** @param string */
  public function setSalt($salt)
  {
    $this->salt = $salt;
  }
  /** @return string */
  public function getSalt()
  {
    return $this->salt;
  }
  /** @param string */
  public function setScreenName($screenName)
  {
    $this->screenName = $screenName;
  }
  /** @return string */
  public function getScreenName()
  {
    return $this->screenName;
  }
  /** @param string */
  public function setValidSince($validSince)
  {
    $this->validSince = $validSince;
  }
  /** @return string */
  public function getValidSince()
  {
    return $this->validSince;
  }
  /** @param int */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return int */
  public function getVersion()
  {
    return $this->version;
  }
}

class UserInfoProviderUserInfo extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;
  /** @var string */
  public $federatedId;
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $photoUrl;
  /** @var string */
  public $providerId;
  /** @var string */
  public $rawId;
  /** @var string */
  public $screenName;

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
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param string */
  public function setFederatedId($federatedId)
  {
    $this->federatedId = $federatedId;
  }
  /** @return string */
  public function getFederatedId()
  {
    return $this->federatedId;
  }
  /** @param string */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /** @return string */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /** @param string */
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  /** @return string */
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  /** @param string */
  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }
  /** @return string */
  public function getProviderId()
  {
    return $this->providerId;
  }
  /** @param string */
  public function setRawId($rawId)
  {
    $this->rawId = $rawId;
  }
  /** @return string */
  public function getRawId()
  {
    return $this->rawId;
  }
  /** @param string */
  public function setScreenName($screenName)
  {
    $this->screenName = $screenName;
  }
  /** @return string */
  public function getScreenName()
  {
    return $this->screenName;
  }
}

class VerifyAssertionResponse extends \Google\Collection
{
  /** @var string */
  public $action;
  /** @var string */
  public $appInstallationUrl;
  /** @var string */
  public $appScheme;
  /** @var string */
  public $context;
  /** @var string */
  public $dateOfBirth;
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;
  /** @var bool */
  public $emailRecycled;
  /** @var bool */
  public $emailVerified;
  /** @var string */
  public $errorMessage;
  /** @var string */
  public $expiresIn;
  /** @var string */
  public $federatedId;
  /** @var string */
  public $firstName;
  /** @var string */
  public $fullName;
  /** @var string */
  public $idToken;
  /** @var string */
  public $inputEmail;
  /** @var bool */
  public $isNewUser;
  /** @var string */
  public $kind;
  /** @var string */
  public $language;
  /** @var string */
  public $lastName;
  /** @var string */
  public $localId;
  /** @var bool */
  public $needConfirmation;
  /** @var bool */
  public $needEmail;
  /** @var string */
  public $nickName;
  /** @var string */
  public $oauthAccessToken;
  /** @var string */
  public $oauthAuthorizationCode;
  /** @var int */
  public $oauthExpireIn;
  /** @var string */
  public $oauthIdToken;
  /** @var string */
  public $oauthRequestToken;
  /** @var string */
  public $oauthScope;
  /** @var string */
  public $oauthTokenSecret;
  /** @var string */
  public $originalEmail;
  /** @var string */
  public $photoUrl;
  /** @var string */
  public $providerId;
  /** @var string */
  public $rawUserInfo;
  /** @var string */
  public $refreshToken;
  /** @var string */
  public $screenName;
  /** @var string */
  public $timeZone;
  /** @var string[] */
  public $verifiedProvider;
  protected $collection_key = 'verifiedProvider';
  /** @param string */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /** @return string */
  public function getAction()
  {
    return $this->action;
  }
  /** @param string */
  public function setAppInstallationUrl($appInstallationUrl)
  {
    $this->appInstallationUrl = $appInstallationUrl;
  }
  /** @return string */
  public function getAppInstallationUrl()
  {
    return $this->appInstallationUrl;
  }
  /** @param string */
  public function setAppScheme($appScheme)
  {
    $this->appScheme = $appScheme;
  }
  /** @return string */
  public function getAppScheme()
  {
    return $this->appScheme;
  }
  /** @param string */
  public function setContext($context)
  {
    $this->context = $context;
  }
  /** @return string */
  public function getContext()
  {
    return $this->context;
  }
  /** @param string */
  public function setDateOfBirth($dateOfBirth)
  {
    $this->dateOfBirth = $dateOfBirth;
  }
  /** @return string */
  public function getDateOfBirth()
  {
    return $this->dateOfBirth;
  }
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
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param bool */
  public function setEmailRecycled($emailRecycled)
  {
    $this->emailRecycled = $emailRecycled;
  }
  /** @return bool */
  public function getEmailRecycled()
  {
    return $this->emailRecycled;
  }
  /** @param bool */
  public function setEmailVerified($emailVerified)
  {
    $this->emailVerified = $emailVerified;
  }
  /** @return bool */
  public function getEmailVerified()
  {
    return $this->emailVerified;
  }
  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /** @param string */
  public function setExpiresIn($expiresIn)
  {
    $this->expiresIn = $expiresIn;
  }
  /** @return string */
  public function getExpiresIn()
  {
    return $this->expiresIn;
  }
  /** @param string */
  public function setFederatedId($federatedId)
  {
    $this->federatedId = $federatedId;
  }
  /** @return string */
  public function getFederatedId()
  {
    return $this->federatedId;
  }
  /** @param string */
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
  }
  /** @return string */
  public function getFirstName()
  {
    return $this->firstName;
  }
  /** @param string */
  public function setFullName($fullName)
  {
    $this->fullName = $fullName;
  }
  /** @return string */
  public function getFullName()
  {
    return $this->fullName;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
  /** @param string */
  public function setInputEmail($inputEmail)
  {
    $this->inputEmail = $inputEmail;
  }
  /** @return string */
  public function getInputEmail()
  {
    return $this->inputEmail;
  }
  /** @param bool */
  public function setIsNewUser($isNewUser)
  {
    $this->isNewUser = $isNewUser;
  }
  /** @return bool */
  public function getIsNewUser()
  {
    return $this->isNewUser;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  /** @return string */
  public function getLanguage()
  {
    return $this->language;
  }
  /** @param string */
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }
  /** @return string */
  public function getLastName()
  {
    return $this->lastName;
  }
  /** @param string */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string */
  public function getLocalId()
  {
    return $this->localId;
  }
  /** @param bool */
  public function setNeedConfirmation($needConfirmation)
  {
    $this->needConfirmation = $needConfirmation;
  }
  /** @return bool */
  public function getNeedConfirmation()
  {
    return $this->needConfirmation;
  }
  /** @param bool */
  public function setNeedEmail($needEmail)
  {
    $this->needEmail = $needEmail;
  }
  /** @return bool */
  public function getNeedEmail()
  {
    return $this->needEmail;
  }
  /** @param string */
  public function setNickName($nickName)
  {
    $this->nickName = $nickName;
  }
  /** @return string */
  public function getNickName()
  {
    return $this->nickName;
  }
  /** @param string */
  public function setOauthAccessToken($oauthAccessToken)
  {
    $this->oauthAccessToken = $oauthAccessToken;
  }
  /** @return string */
  public function getOauthAccessToken()
  {
    return $this->oauthAccessToken;
  }
  /** @param string */
  public function setOauthAuthorizationCode($oauthAuthorizationCode)
  {
    $this->oauthAuthorizationCode = $oauthAuthorizationCode;
  }
  /** @return string */
  public function getOauthAuthorizationCode()
  {
    return $this->oauthAuthorizationCode;
  }
  /** @param int */
  public function setOauthExpireIn($oauthExpireIn)
  {
    $this->oauthExpireIn = $oauthExpireIn;
  }
  /** @return int */
  public function getOauthExpireIn()
  {
    return $this->oauthExpireIn;
  }
  /** @param string */
  public function setOauthIdToken($oauthIdToken)
  {
    $this->oauthIdToken = $oauthIdToken;
  }
  /** @return string */
  public function getOauthIdToken()
  {
    return $this->oauthIdToken;
  }
  /** @param string */
  public function setOauthRequestToken($oauthRequestToken)
  {
    $this->oauthRequestToken = $oauthRequestToken;
  }
  /** @return string */
  public function getOauthRequestToken()
  {
    return $this->oauthRequestToken;
  }
  /** @param string */
  public function setOauthScope($oauthScope)
  {
    $this->oauthScope = $oauthScope;
  }
  /** @return string */
  public function getOauthScope()
  {
    return $this->oauthScope;
  }
  /** @param string */
  public function setOauthTokenSecret($oauthTokenSecret)
  {
    $this->oauthTokenSecret = $oauthTokenSecret;
  }
  /** @return string */
  public function getOauthTokenSecret()
  {
    return $this->oauthTokenSecret;
  }
  /** @param string */
  public function setOriginalEmail($originalEmail)
  {
    $this->originalEmail = $originalEmail;
  }
  /** @return string */
  public function getOriginalEmail()
  {
    return $this->originalEmail;
  }
  /** @param string */
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  /** @return string */
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  /** @param string */
  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }
  /** @return string */
  public function getProviderId()
  {
    return $this->providerId;
  }
  /** @param string */
  public function setRawUserInfo($rawUserInfo)
  {
    $this->rawUserInfo = $rawUserInfo;
  }
  /** @return string */
  public function getRawUserInfo()
  {
    return $this->rawUserInfo;
  }
  /** @param string */
  public function setRefreshToken($refreshToken)
  {
    $this->refreshToken = $refreshToken;
  }
  /** @return string */
  public function getRefreshToken()
  {
    return $this->refreshToken;
  }
  /** @param string */
  public function setScreenName($screenName)
  {
    $this->screenName = $screenName;
  }
  /** @return string */
  public function getScreenName()
  {
    return $this->screenName;
  }
  /** @param string */
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /** @return string */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
  /** @param string[] */
  public function setVerifiedProvider($verifiedProvider)
  {
    $this->verifiedProvider = $verifiedProvider;
  }
  /** @return string[] */
  public function getVerifiedProvider()
  {
    return $this->verifiedProvider;
  }
}

class VerifyCustomTokenResponse extends \Google\Model
{
  /** @var string */
  public $expiresIn;
  /** @var string */
  public $idToken;
  /** @var bool */
  public $isNewUser;
  /** @var string */
  public $kind;
  /** @var string */
  public $refreshToken;

  /** @param string */
  public function setExpiresIn($expiresIn)
  {
    $this->expiresIn = $expiresIn;
  }
  /** @return string */
  public function getExpiresIn()
  {
    return $this->expiresIn;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
  /** @param bool */
  public function setIsNewUser($isNewUser)
  {
    $this->isNewUser = $isNewUser;
  }
  /** @return bool */
  public function getIsNewUser()
  {
    return $this->isNewUser;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setRefreshToken($refreshToken)
  {
    $this->refreshToken = $refreshToken;
  }
  /** @return string */
  public function getRefreshToken()
  {
    return $this->refreshToken;
  }
}

class VerifyPasswordResponse extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $email;
  /** @var string */
  public $expiresIn;
  /** @var string */
  public $idToken;
  /** @var string */
  public $kind;
  /** @var string */
  public $localId;
  /** @var string */
  public $oauthAccessToken;
  /** @var string */
  public $oauthAuthorizationCode;
  /** @var int */
  public $oauthExpireIn;
  /** @var string */
  public $photoUrl;
  /** @var string */
  public $refreshToken;
  /** @var bool */
  public $registered;

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
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /** @return string */
  public function getEmail()
  {
    return $this->email;
  }
  /** @param string */
  public function setExpiresIn($expiresIn)
  {
    $this->expiresIn = $expiresIn;
  }
  /** @return string */
  public function getExpiresIn()
  {
    return $this->expiresIn;
  }
  /** @param string */
  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }
  /** @return string */
  public function getIdToken()
  {
    return $this->idToken;
  }
  /** @param string */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /** @return string */
  public function getKind()
  {
    return $this->kind;
  }
  /** @param string */
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }
  /** @return string */
  public function getLocalId()
  {
    return $this->localId;
  }
  /** @param string */
  public function setOauthAccessToken($oauthAccessToken)
  {
    $this->oauthAccessToken = $oauthAccessToken;
  }
  /** @return string */
  public function getOauthAccessToken()
  {
    return $this->oauthAccessToken;
  }
  /** @param string */
  public function setOauthAuthorizationCode($oauthAuthorizationCode)
  {
    $this->oauthAuthorizationCode = $oauthAuthorizationCode;
  }
  /** @return string */
  public function getOauthAuthorizationCode()
  {
    return $this->oauthAuthorizationCode;
  }
  /** @param int */
  public function setOauthExpireIn($oauthExpireIn)
  {
    $this->oauthExpireIn = $oauthExpireIn;
  }
  /** @return int */
  public function getOauthExpireIn()
  {
    return $this->oauthExpireIn;
  }
  /** @param string */
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  /** @return string */
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  /** @param string */
  public function setRefreshToken($refreshToken)
  {
    $this->refreshToken = $refreshToken;
  }
  /** @return string */
  public function getRefreshToken()
  {
    return $this->refreshToken;
  }
  /** @param bool */
  public function setRegistered($registered)
  {
    $this->registered = $registered;
  }
  /** @return bool */
  public function getRegistered()
  {
    return $this->registered;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CreateAuthUriResponse::class, 'Google_Service_IdentityToolkit_CreateAuthUriResponse');
class_alias(DeleteAccountResponse::class, 'Google_Service_IdentityToolkit_DeleteAccountResponse');
class_alias(DownloadAccountResponse::class, 'Google_Service_IdentityToolkit_DownloadAccountResponse');
class_alias(EmailLinkSigninResponse::class, 'Google_Service_IdentityToolkit_EmailLinkSigninResponse');
class_alias(EmailTemplate::class, 'Google_Service_IdentityToolkit_EmailTemplate');
class_alias(GetAccountInfoResponse::class, 'Google_Service_IdentityToolkit_GetAccountInfoResponse');
class_alias(GetOobConfirmationCodeResponse::class, 'Google_Service_IdentityToolkit_GetOobConfirmationCodeResponse');
class_alias(GetRecaptchaParamResponse::class, 'Google_Service_IdentityToolkit_GetRecaptchaParamResponse');
class_alias(IdentitytoolkitRelyingpartyCreateAuthUriRequest::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyCreateAuthUriRequest');
class_alias(IdentitytoolkitRelyingpartyDeleteAccountRequest::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyDeleteAccountRequest');
class_alias(IdentitytoolkitRelyingpartyDownloadAccountRequest::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyDownloadAccountRequest');
class_alias(IdentitytoolkitRelyingpartyEmailLinkSigninRequest::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyEmailLinkSigninRequest');
class_alias(IdentitytoolkitRelyingpartyGetAccountInfoRequest::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetAccountInfoRequest');
class_alias(IdentitytoolkitRelyingpartyGetProjectConfigResponse::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetProjectConfigResponse');
class_alias(IdentitytoolkitRelyingpartyResetPasswordRequest::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyResetPasswordRequest');
class_alias(IdentitytoolkitRelyingpartySendVerificationCodeRequest::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartySendVerificationCodeRequest');
class_alias(IdentitytoolkitRelyingpartySendVerificationCodeResponse::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartySendVerificationCodeResponse');
class_alias(IdentitytoolkitRelyingpartySetAccountInfoRequest::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartySetAccountInfoRequest');
class_alias(IdentitytoolkitRelyingpartySetProjectConfigRequest::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartySetProjectConfigRequest');
class_alias(IdentitytoolkitRelyingpartySetProjectConfigResponse::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartySetProjectConfigResponse');
class_alias(IdentitytoolkitRelyingpartySignOutUserRequest::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartySignOutUserRequest');
class_alias(IdentitytoolkitRelyingpartySignOutUserResponse::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartySignOutUserResponse');
class_alias(IdentitytoolkitRelyingpartySignupNewUserRequest::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartySignupNewUserRequest');
class_alias(IdentitytoolkitRelyingpartyUploadAccountRequest::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyUploadAccountRequest');
class_alias(IdentitytoolkitRelyingpartyVerifyAssertionRequest::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyVerifyAssertionRequest');
class_alias(IdentitytoolkitRelyingpartyVerifyCustomTokenRequest::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyVerifyCustomTokenRequest');
class_alias(IdentitytoolkitRelyingpartyVerifyPasswordRequest::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyVerifyPasswordRequest');
class_alias(IdentitytoolkitRelyingpartyVerifyPhoneNumberRequest::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyVerifyPhoneNumberRequest');
class_alias(IdentitytoolkitRelyingpartyVerifyPhoneNumberResponse::class, 'Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyVerifyPhoneNumberResponse');
class_alias(IdpConfig::class, 'Google_Service_IdentityToolkit_IdpConfig');
class_alias(Relyingparty::class, 'Google_Service_IdentityToolkit_Relyingparty');
class_alias(ResetPasswordResponse::class, 'Google_Service_IdentityToolkit_ResetPasswordResponse');
class_alias(SetAccountInfoResponse::class, 'Google_Service_IdentityToolkit_SetAccountInfoResponse');
class_alias(SetAccountInfoResponseProviderUserInfo::class, 'Google_Service_IdentityToolkit_SetAccountInfoResponseProviderUserInfo');
class_alias(SignupNewUserResponse::class, 'Google_Service_IdentityToolkit_SignupNewUserResponse');
class_alias(UploadAccountResponse::class, 'Google_Service_IdentityToolkit_UploadAccountResponse');
class_alias(UploadAccountResponseError::class, 'Google_Service_IdentityToolkit_UploadAccountResponseError');
class_alias(UserInfo::class, 'Google_Service_IdentityToolkit_UserInfo');
class_alias(UserInfoProviderUserInfo::class, 'Google_Service_IdentityToolkit_UserInfoProviderUserInfo');
class_alias(VerifyAssertionResponse::class, 'Google_Service_IdentityToolkit_VerifyAssertionResponse');
class_alias(VerifyCustomTokenResponse::class, 'Google_Service_IdentityToolkit_VerifyCustomTokenResponse');
class_alias(VerifyPasswordResponse::class, 'Google_Service_IdentityToolkit_VerifyPasswordResponse');
