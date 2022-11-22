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

namespace Google\Service\MyBusinessAccountManagement;

class AcceptInvitationRequest extends \Google\Model
{
}

class Account extends \Google\Model
{
  /** @var string */
  public $accountName;
  /** @var string */
  public $accountNumber;
  /** @var string */
  public $name;
  /** @var OrganizationInfo */
  public $organizationInfo;
  /** @var string */
  public $permissionLevel;
  /** @var string */
  public $primaryOwner;
  /** @var string */
  public $role;
  /** @var string */
  public $type;
  /** @var string */
  public $verificationState;
  /** @var string */
  public $vettedState;
  protected $organizationInfoType = OrganizationInfo::class;
  protected $organizationInfoDataType = '';
  /** @param string */
  public function setAccountName($accountName)
  {
    $this->accountName = $accountName;
  }
  /** @return string */
  public function getAccountName()
  {
    return $this->accountName;
  }
  /** @param string */
  public function setAccountNumber($accountNumber)
  {
    $this->accountNumber = $accountNumber;
  }
  /** @return string */
  public function getAccountNumber()
  {
    return $this->accountNumber;
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
  /** @param OrganizationInfo */
  public function setOrganizationInfo(OrganizationInfo $organizationInfo)
  {
    $this->organizationInfo = $organizationInfo;
  }
  /** @return OrganizationInfo */
  public function getOrganizationInfo()
  {
    return $this->organizationInfo;
  }
  /** @param string */
  public function setPermissionLevel($permissionLevel)
  {
    $this->permissionLevel = $permissionLevel;
  }
  /** @return string */
  public function getPermissionLevel()
  {
    return $this->permissionLevel;
  }
  /** @param string */
  public function setPrimaryOwner($primaryOwner)
  {
    $this->primaryOwner = $primaryOwner;
  }
  /** @return string */
  public function getPrimaryOwner()
  {
    return $this->primaryOwner;
  }
  /** @param string */
  public function setRole($role)
  {
    $this->role = $role;
  }
  /** @return string */
  public function getRole()
  {
    return $this->role;
  }
  /** @param string */
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return string */
  public function getType()
  {
    return $this->type;
  }
  /** @param string */
  public function setVerificationState($verificationState)
  {
    $this->verificationState = $verificationState;
  }
  /** @return string */
  public function getVerificationState()
  {
    return $this->verificationState;
  }
  /** @param string */
  public function setVettedState($vettedState)
  {
    $this->vettedState = $vettedState;
  }
  /** @return string */
  public function getVettedState()
  {
    return $this->vettedState;
  }
}

class Admin extends \Google\Model
{
  /** @var string */
  public $account;
  /** @var string */
  public $admin;
  /** @var string */
  public $name;
  /** @var bool */
  public $pendingInvitation;
  /** @var string */
  public $role;

  /** @param string */
  public function setAccount($account)
  {
    $this->account = $account;
  }
  /** @return string */
  public function getAccount()
  {
    return $this->account;
  }
  /** @param string */
  public function setAdmin($admin)
  {
    $this->admin = $admin;
  }
  /** @return string */
  public function getAdmin()
  {
    return $this->admin;
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
  /** @param bool */
  public function setPendingInvitation($pendingInvitation)
  {
    $this->pendingInvitation = $pendingInvitation;
  }
  /** @return bool */
  public function getPendingInvitation()
  {
    return $this->pendingInvitation;
  }
  /** @param string */
  public function setRole($role)
  {
    $this->role = $role;
  }
  /** @return string */
  public function getRole()
  {
    return $this->role;
  }
}

class DeclineInvitationRequest extends \Google\Model
{
}

class Invitation extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $role;
  /** @var Account */
  public $targetAccount;
  /** @var TargetLocation */
  public $targetLocation;
  /** @var string */
  public $targetType;
  protected $targetAccountType = Account::class;
  protected $targetAccountDataType = '';
  protected $targetLocationType = TargetLocation::class;
  protected $targetLocationDataType = '';
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
  public function setRole($role)
  {
    $this->role = $role;
  }
  /** @return string */
  public function getRole()
  {
    return $this->role;
  }
  /** @param Account */
  public function setTargetAccount(Account $targetAccount)
  {
    $this->targetAccount = $targetAccount;
  }
  /** @return Account */
  public function getTargetAccount()
  {
    return $this->targetAccount;
  }
  /** @param TargetLocation */
  public function setTargetLocation(TargetLocation $targetLocation)
  {
    $this->targetLocation = $targetLocation;
  }
  /** @return TargetLocation */
  public function getTargetLocation()
  {
    return $this->targetLocation;
  }
  /** @param string */
  public function setTargetType($targetType)
  {
    $this->targetType = $targetType;
  }
  /** @return string */
  public function getTargetType()
  {
    return $this->targetType;
  }
}

class ListAccountAdminsResponse extends \Google\Collection
{
  /** @var Admin[] */
  public $accountAdmins;
  protected $collection_key = 'accountAdmins';
  protected $accountAdminsType = Admin::class;
  protected $accountAdminsDataType = 'array';
  /** @param Admin[] */
  public function setAccountAdmins($accountAdmins)
  {
    $this->accountAdmins = $accountAdmins;
  }
  /** @return Admin[] */
  public function getAccountAdmins()
  {
    return $this->accountAdmins;
  }
}

class ListAccountsResponse extends \Google\Collection
{
  /** @var Account[] */
  public $accounts;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'accounts';
  protected $accountsType = Account::class;
  protected $accountsDataType = 'array';
  /** @param Account[] */
  public function setAccounts($accounts)
  {
    $this->accounts = $accounts;
  }
  /** @return Account[] */
  public function getAccounts()
  {
    return $this->accounts;
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

class ListInvitationsResponse extends \Google\Collection
{
  /** @var Invitation[] */
  public $invitations;
  protected $collection_key = 'invitations';
  protected $invitationsType = Invitation::class;
  protected $invitationsDataType = 'array';
  /** @param Invitation[] */
  public function setInvitations($invitations)
  {
    $this->invitations = $invitations;
  }
  /** @return Invitation[] */
  public function getInvitations()
  {
    return $this->invitations;
  }
}

class ListLocationAdminsResponse extends \Google\Collection
{
  /** @var Admin[] */
  public $admins;
  protected $collection_key = 'admins';
  protected $adminsType = Admin::class;
  protected $adminsDataType = 'array';
  /** @param Admin[] */
  public function setAdmins($admins)
  {
    $this->admins = $admins;
  }
  /** @return Admin[] */
  public function getAdmins()
  {
    return $this->admins;
  }
}

class MybusinessaccountmanagementEmpty extends \Google\Model
{
}

class OrganizationInfo extends \Google\Model
{
  /** @var PostalAddress */
  public $address;
  /** @var string */
  public $phoneNumber;
  /** @var string */
  public $registeredDomain;
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
  public function setRegisteredDomain($registeredDomain)
  {
    $this->registeredDomain = $registeredDomain;
  }
  /** @return string */
  public function getRegisteredDomain()
  {
    return $this->registeredDomain;
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

class TargetLocation extends \Google\Model
{
  /** @var string */
  public $address;
  /** @var string */
  public $locationName;

  /** @param string */
  public function setAddress($address)
  {
    $this->address = $address;
  }
  /** @return string */
  public function getAddress()
  {
    return $this->address;
  }
  /** @param string */
  public function setLocationName($locationName)
  {
    $this->locationName = $locationName;
  }
  /** @return string */
  public function getLocationName()
  {
    return $this->locationName;
  }
}

class TransferLocationRequest extends \Google\Model
{
  /** @var string */
  public $destinationAccount;

  /** @param string */
  public function setDestinationAccount($destinationAccount)
  {
    $this->destinationAccount = $destinationAccount;
  }
  /** @return string */
  public function getDestinationAccount()
  {
    return $this->destinationAccount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AcceptInvitationRequest::class, 'Google_Service_MyBusinessAccountManagement_AcceptInvitationRequest');
class_alias(Account::class, 'Google_Service_MyBusinessAccountManagement_Account');
class_alias(Admin::class, 'Google_Service_MyBusinessAccountManagement_Admin');
class_alias(DeclineInvitationRequest::class, 'Google_Service_MyBusinessAccountManagement_DeclineInvitationRequest');
class_alias(Invitation::class, 'Google_Service_MyBusinessAccountManagement_Invitation');
class_alias(ListAccountAdminsResponse::class, 'Google_Service_MyBusinessAccountManagement_ListAccountAdminsResponse');
class_alias(ListAccountsResponse::class, 'Google_Service_MyBusinessAccountManagement_ListAccountsResponse');
class_alias(ListInvitationsResponse::class, 'Google_Service_MyBusinessAccountManagement_ListInvitationsResponse');
class_alias(ListLocationAdminsResponse::class, 'Google_Service_MyBusinessAccountManagement_ListLocationAdminsResponse');
class_alias(MybusinessaccountmanagementEmpty::class, 'Google_Service_MyBusinessAccountManagement_MybusinessaccountmanagementEmpty');
class_alias(OrganizationInfo::class, 'Google_Service_MyBusinessAccountManagement_OrganizationInfo');
class_alias(PostalAddress::class, 'Google_Service_MyBusinessAccountManagement_PostalAddress');
class_alias(TargetLocation::class, 'Google_Service_MyBusinessAccountManagement_TargetLocation');
class_alias(TransferLocationRequest::class, 'Google_Service_MyBusinessAccountManagement_TransferLocationRequest');
