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

namespace Google\Service\MyBusinessVerifications;

class AddressVerificationData extends \Google\Model
{
  /** @var PostalAddress */
  public $address;
  /** @var string */
  public $business;
  /** @var int */
  public $expectedDeliveryDaysRegion;
  protected $addressType = PostalAddress::class;
  protected $addressDataType = '';
  /** @param PostalAddress */
  public function setAddress(PostalAddress $address)
  {
    $this->address = $address;
  }
  /** @return PostalAddress */
  public function getAddress()
  {
    return $this->address;
  }
  /** @param string */
  public function setBusiness($business)
  {
    $this->business = $business;
  }
  /** @return string */
  public function getBusiness()
  {
    return $this->business;
  }
  /** @param int */
  public function setExpectedDeliveryDaysRegion($expectedDeliveryDaysRegion)
  {
    $this->expectedDeliveryDaysRegion = $expectedDeliveryDaysRegion;
  }
  /** @return int */
  public function getExpectedDeliveryDaysRegion()
  {
    return $this->expectedDeliveryDaysRegion;
  }
}

class CompleteVerificationRequest extends \Google\Model
{
  /** @var string */
  public $pin;

  /** @param string */
  public function setPin($pin)
  {
    $this->pin = $pin;
  }
  /** @return string */
  public function getPin()
  {
    return $this->pin;
  }
}

class CompleteVerificationResponse extends \Google\Model
{
  /** @var Verification */
  public $verification;
  protected $verificationType = Verification::class;
  protected $verificationDataType = '';
  /** @param Verification */
  public function setVerification(Verification $verification)
  {
    $this->verification = $verification;
  }
  /** @return Verification */
  public function getVerification()
  {
    return $this->verification;
  }
}

class ComplyWithGuidelines extends \Google\Model
{
  /** @var string */
  public $recommendationReason;

  /** @param string */
  public function setRecommendationReason($recommendationReason)
  {
    $this->recommendationReason = $recommendationReason;
  }
  /** @return string */
  public function getRecommendationReason()
  {
    return $this->recommendationReason;
  }
}

class EmailVerificationData extends \Google\Model
{
  /** @var string */
  public $domain;
  /** @var bool */
  public $isUserNameEditable;
  /** @var string */
  public $user;

  /** @param string */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /** @return string */
  public function getDomain()
  {
    return $this->domain;
  }
  /** @param bool */
  public function setIsUserNameEditable($isUserNameEditable)
  {
    $this->isUserNameEditable = $isUserNameEditable;
  }
  /** @return bool */
  public function getIsUserNameEditable()
  {
    return $this->isUserNameEditable;
  }
  /** @param string */
  public function setUser($user)
  {
    $this->user = $user;
  }
  /** @return string */
  public function getUser()
  {
    return $this->user;
  }
}

class FetchVerificationOptionsRequest extends \Google\Model
{
  /** @var ServiceBusinessContext */
  public $context;
  /** @var string */
  public $languageCode;
  protected $contextType = ServiceBusinessContext::class;
  protected $contextDataType = '';
  /** @param ServiceBusinessContext */
  public function setContext(ServiceBusinessContext $context)
  {
    $this->context = $context;
  }
  /** @return ServiceBusinessContext */
  public function getContext()
  {
    return $this->context;
  }
  /** @param string */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class FetchVerificationOptionsResponse extends \Google\Collection
{
  /** @var VerificationOption[] */
  public $options;
  protected $collection_key = 'options';
  protected $optionsType = VerificationOption::class;
  protected $optionsDataType = 'array';
  /** @param VerificationOption[] */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /** @return VerificationOption[] */
  public function getOptions()
  {
    return $this->options;
  }
}

class GenerateVerificationTokenRequest extends \Google\Model
{
  /** @var Location */
  public $location;
  protected $locationType = Location::class;
  protected $locationDataType = '';
  /** @param Location */
  public function setLocation(Location $location)
  {
    $this->location = $location;
  }
  /** @return Location */
  public function getLocation()
  {
    return $this->location;
  }
}

class GenerateVerificationTokenResponse extends \Google\Model
{
  /** @var VerificationToken */
  public $token;
  protected $tokenType = VerificationToken::class;
  protected $tokenDataType = '';
  /** @param VerificationToken */
  public function setToken(VerificationToken $token)
  {
    $this->token = $token;
  }
  /** @return VerificationToken */
  public function getToken()
  {
    return $this->token;
  }
}

class ListVerificationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Verification[] */
  public $verifications;
  protected $collection_key = 'verifications';
  protected $verificationsType = Verification::class;
  protected $verificationsDataType = 'array';
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
  /** @param Verification[] */
  public function setVerifications($verifications)
  {
    $this->verifications = $verifications;
  }
  /** @return Verification[] */
  public function getVerifications()
  {
    return $this->verifications;
  }
}

class Location extends \Google\Model
{
  /** @var PostalAddress */
  public $address;
  /** @var string */
  public $name;
  /** @var string */
  public $primaryCategoryId;
  /** @var string */
  public $primaryPhone;
  /** @var string */
  public $websiteUri;
  protected $addressType = PostalAddress::class;
  protected $addressDataType = '';
  /** @param PostalAddress */
  public function setAddress(PostalAddress $address)
  {
    $this->address = $address;
  }
  /** @return PostalAddress */
  public function getAddress()
  {
    return $this->address;
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
  public function setPrimaryCategoryId($primaryCategoryId)
  {
    $this->primaryCategoryId = $primaryCategoryId;
  }
  /** @return string */
  public function getPrimaryCategoryId()
  {
    return $this->primaryCategoryId;
  }
  /** @param string */
  public function setPrimaryPhone($primaryPhone)
  {
    $this->primaryPhone = $primaryPhone;
  }
  /** @return string */
  public function getPrimaryPhone()
  {
    return $this->primaryPhone;
  }
  /** @param string */
  public function setWebsiteUri($websiteUri)
  {
    $this->websiteUri = $websiteUri;
  }
  /** @return string */
  public function getWebsiteUri()
  {
    return $this->websiteUri;
  }
}

class PostalAddress extends \Google\Collection
{
  /** @var string[] */
  public $addressLines;
  /** @var string */
  public $administrativeArea;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $locality;
  /** @var string */
  public $organization;
  /** @var string */
  public $postalCode;
  /** @var string[] */
  public $recipients;
  /** @var string */
  public $regionCode;
  /** @var int */
  public $revision;
  /** @var string */
  public $sortingCode;
  /** @var string */
  public $sublocality;
  protected $collection_key = 'recipients';
  /** @param string[] */
  public function setAddressLines($addressLines)
  {
    $this->addressLines = $addressLines;
  }
  /** @return string[] */
  public function getAddressLines()
  {
    return $this->addressLines;
  }
  /** @param string */
  public function setAdministrativeArea($administrativeArea)
  {
    $this->administrativeArea = $administrativeArea;
  }
  /** @return string */
  public function getAdministrativeArea()
  {
    return $this->administrativeArea;
  }
  /** @param string */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /** @param string */
  public function setLocality($locality)
  {
    $this->locality = $locality;
  }
  /** @return string */
  public function getLocality()
  {
    return $this->locality;
  }
  /** @param string */
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  /** @return string */
  public function getOrganization()
  {
    return $this->organization;
  }
  /** @param string */
  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }
  /** @return string */
  public function getPostalCode()
  {
    return $this->postalCode;
  }
  /** @param string[] */
  public function setRecipients($recipients)
  {
    $this->recipients = $recipients;
  }
  /** @return string[] */
  public function getRecipients()
  {
    return $this->recipients;
  }
  /** @param string */
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /** @return string */
  public function getRegionCode()
  {
    return $this->regionCode;
  }
  /** @param int */
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /** @return int */
  public function getRevision()
  {
    return $this->revision;
  }
  /** @param string */
  public function setSortingCode($sortingCode)
  {
    $this->sortingCode = $sortingCode;
  }
  /** @return string */
  public function getSortingCode()
  {
    return $this->sortingCode;
  }
  /** @param string */
  public function setSublocality($sublocality)
  {
    $this->sublocality = $sublocality;
  }
  /** @return string */
  public function getSublocality()
  {
    return $this->sublocality;
  }
}

class ResolveOwnershipConflict extends \Google\Model
{
}

class ServiceBusinessContext extends \Google\Model
{
  /** @var PostalAddress */
  public $address;
  protected $addressType = PostalAddress::class;
  protected $addressDataType = '';
  /** @param PostalAddress */
  public function setAddress(PostalAddress $address)
  {
    $this->address = $address;
  }
  /** @return PostalAddress */
  public function getAddress()
  {
    return $this->address;
  }
}

class Verification extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $method;
  /** @var string */
  public $name;
  /** @var string */
  public $state;

  /** @param string */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /** @return string */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
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
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return string */
  public function getState()
  {
    return $this->state;
  }
}

class VerificationOption extends \Google\Model
{
  /** @var AddressVerificationData */
  public $addressData;
  /** @var EmailVerificationData */
  public $emailData;
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $verificationMethod;
  protected $addressDataType = AddressVerificationData::class;
  protected $addressDataDataType = '';
  protected $emailDataType = EmailVerificationData::class;
  protected $emailDataDataType = '';
  /** @param AddressVerificationData */
  public function setAddressData(AddressVerificationData $addressData)
  {
    $this->addressData = $addressData;
  }
  /** @return AddressVerificationData */
  public function getAddressData()
  {
    return $this->addressData;
  }
  /** @param EmailVerificationData */
  public function setEmailData(EmailVerificationData $emailData)
  {
    $this->emailData = $emailData;
  }
  /** @return EmailVerificationData */
  public function getEmailData()
  {
    return $this->emailData;
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
  public function setVerificationMethod($verificationMethod)
  {
    $this->verificationMethod = $verificationMethod;
  }
  /** @return string */
  public function getVerificationMethod()
  {
    return $this->verificationMethod;
  }
}

class VerificationToken extends \Google\Model
{
  /** @var string */
  public $tokenString;

  /** @param string */
  public function setTokenString($tokenString)
  {
    $this->tokenString = $tokenString;
  }
  /** @return string */
  public function getTokenString()
  {
    return $this->tokenString;
  }
}

class Verify extends \Google\Model
{
  /** @var bool */
  public $hasPendingVerification;

  /** @param bool */
  public function setHasPendingVerification($hasPendingVerification)
  {
    $this->hasPendingVerification = $hasPendingVerification;
  }
  /** @return bool */
  public function getHasPendingVerification()
  {
    return $this->hasPendingVerification;
  }
}

class VerifyLocationRequest extends \Google\Model
{
  /** @var ServiceBusinessContext */
  public $context;
  /** @var string */
  public $emailAddress;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $mailerContact;
  /** @var string */
  public $method;
  /** @var string */
  public $phoneNumber;
  /** @var VerificationToken */
  public $token;
  protected $contextType = ServiceBusinessContext::class;
  protected $contextDataType = '';
  protected $tokenType = VerificationToken::class;
  protected $tokenDataType = '';
  /** @param ServiceBusinessContext */
  public function setContext(ServiceBusinessContext $context)
  {
    $this->context = $context;
  }
  /** @return ServiceBusinessContext */
  public function getContext()
  {
    return $this->context;
  }
  /** @param string */
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  /** @return string */
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
  /** @param string */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /** @param string */
  public function setMailerContact($mailerContact)
  {
    $this->mailerContact = $mailerContact;
  }
  /** @return string */
  public function getMailerContact()
  {
    return $this->mailerContact;
  }
  /** @param string */
  public function setMethod($method)
  {
    $this->method = $method;
  }
  /** @return string */
  public function getMethod()
  {
    return $this->method;
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
  /** @param VerificationToken */
  public function setToken(VerificationToken $token)
  {
    $this->token = $token;
  }
  /** @return VerificationToken */
  public function getToken()
  {
    return $this->token;
  }
}

class VerifyLocationResponse extends \Google\Model
{
  /** @var Verification */
  public $verification;
  protected $verificationType = Verification::class;
  protected $verificationDataType = '';
  /** @param Verification */
  public function setVerification(Verification $verification)
  {
    $this->verification = $verification;
  }
  /** @return Verification */
  public function getVerification()
  {
    return $this->verification;
  }
}

class VoiceOfMerchantState extends \Google\Model
{
  /** @var ComplyWithGuidelines */
  public $complyWithGuidelines;
  /** @var bool */
  public $hasBusinessAuthority;
  /** @var bool */
  public $hasVoiceOfMerchant;
  /** @var ResolveOwnershipConflict */
  public $resolveOwnershipConflict;
  /** @var Verify */
  public $verify;
  /** @var WaitForVoiceOfMerchant */
  public $waitForVoiceOfMerchant;
  protected $complyWithGuidelinesType = ComplyWithGuidelines::class;
  protected $complyWithGuidelinesDataType = '';
  protected $resolveOwnershipConflictType = ResolveOwnershipConflict::class;
  protected $resolveOwnershipConflictDataType = '';
  protected $verifyType = Verify::class;
  protected $verifyDataType = '';
  protected $waitForVoiceOfMerchantType = WaitForVoiceOfMerchant::class;
  protected $waitForVoiceOfMerchantDataType = '';
  /** @param ComplyWithGuidelines */
  public function setComplyWithGuidelines(ComplyWithGuidelines $complyWithGuidelines)
  {
    $this->complyWithGuidelines = $complyWithGuidelines;
  }
  /** @return ComplyWithGuidelines */
  public function getComplyWithGuidelines()
  {
    return $this->complyWithGuidelines;
  }
  /** @param bool */
  public function setHasBusinessAuthority($hasBusinessAuthority)
  {
    $this->hasBusinessAuthority = $hasBusinessAuthority;
  }
  /** @return bool */
  public function getHasBusinessAuthority()
  {
    return $this->hasBusinessAuthority;
  }
  /** @param bool */
  public function setHasVoiceOfMerchant($hasVoiceOfMerchant)
  {
    $this->hasVoiceOfMerchant = $hasVoiceOfMerchant;
  }
  /** @return bool */
  public function getHasVoiceOfMerchant()
  {
    return $this->hasVoiceOfMerchant;
  }
  /** @param ResolveOwnershipConflict */
  public function setResolveOwnershipConflict(ResolveOwnershipConflict $resolveOwnershipConflict)
  {
    $this->resolveOwnershipConflict = $resolveOwnershipConflict;
  }
  /** @return ResolveOwnershipConflict */
  public function getResolveOwnershipConflict()
  {
    return $this->resolveOwnershipConflict;
  }
  /** @param Verify */
  public function setVerify(Verify $verify)
  {
    $this->verify = $verify;
  }
  /** @return Verify */
  public function getVerify()
  {
    return $this->verify;
  }
  /** @param WaitForVoiceOfMerchant */
  public function setWaitForVoiceOfMerchant(WaitForVoiceOfMerchant $waitForVoiceOfMerchant)
  {
    $this->waitForVoiceOfMerchant = $waitForVoiceOfMerchant;
  }
  /** @return WaitForVoiceOfMerchant */
  public function getWaitForVoiceOfMerchant()
  {
    return $this->waitForVoiceOfMerchant;
  }
}

class WaitForVoiceOfMerchant extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AddressVerificationData::class, 'Google_Service_MyBusinessVerifications_AddressVerificationData');
class_alias(CompleteVerificationRequest::class, 'Google_Service_MyBusinessVerifications_CompleteVerificationRequest');
class_alias(CompleteVerificationResponse::class, 'Google_Service_MyBusinessVerifications_CompleteVerificationResponse');
class_alias(ComplyWithGuidelines::class, 'Google_Service_MyBusinessVerifications_ComplyWithGuidelines');
class_alias(EmailVerificationData::class, 'Google_Service_MyBusinessVerifications_EmailVerificationData');
class_alias(FetchVerificationOptionsRequest::class, 'Google_Service_MyBusinessVerifications_FetchVerificationOptionsRequest');
class_alias(FetchVerificationOptionsResponse::class, 'Google_Service_MyBusinessVerifications_FetchVerificationOptionsResponse');
class_alias(GenerateVerificationTokenRequest::class, 'Google_Service_MyBusinessVerifications_GenerateVerificationTokenRequest');
class_alias(GenerateVerificationTokenResponse::class, 'Google_Service_MyBusinessVerifications_GenerateVerificationTokenResponse');
class_alias(ListVerificationsResponse::class, 'Google_Service_MyBusinessVerifications_ListVerificationsResponse');
class_alias(Location::class, 'Google_Service_MyBusinessVerifications_Location');
class_alias(PostalAddress::class, 'Google_Service_MyBusinessVerifications_PostalAddress');
class_alias(ResolveOwnershipConflict::class, 'Google_Service_MyBusinessVerifications_ResolveOwnershipConflict');
class_alias(ServiceBusinessContext::class, 'Google_Service_MyBusinessVerifications_ServiceBusinessContext');
class_alias(Verification::class, 'Google_Service_MyBusinessVerifications_Verification');
class_alias(VerificationOption::class, 'Google_Service_MyBusinessVerifications_VerificationOption');
class_alias(VerificationToken::class, 'Google_Service_MyBusinessVerifications_VerificationToken');
class_alias(Verify::class, 'Google_Service_MyBusinessVerifications_Verify');
class_alias(VerifyLocationRequest::class, 'Google_Service_MyBusinessVerifications_VerifyLocationRequest');
class_alias(VerifyLocationResponse::class, 'Google_Service_MyBusinessVerifications_VerifyLocationResponse');
class_alias(VoiceOfMerchantState::class, 'Google_Service_MyBusinessVerifications_VoiceOfMerchantState');
class_alias(WaitForVoiceOfMerchant::class, 'Google_Service_MyBusinessVerifications_WaitForVoiceOfMerchant');
