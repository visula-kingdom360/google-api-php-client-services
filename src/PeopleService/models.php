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

namespace Google\Service\PeopleService;

class Address extends \Google\Model
{
  /** @var string */
  public $city;
  /** @var string */
  public $country;
  /** @var string */
  public $countryCode;
  /** @var string */
  public $extendedAddress;
  /** @var string */
  public $formattedType;
  /** @var string */
  public $formattedValue;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $poBox;
  /** @var string */
  public $postalCode;
  /** @var string */
  public $region;
  /** @var string */
  public $streetAddress;
  /** @var string */
  public $type;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setCity($city)
  {
    $this->city = $city;
  }
  /** @return string */
  public function getCity()
  {
    return $this->city;
  }
  /** @param string */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /** @return string */
  public function getCountry()
  {
    return $this->country;
  }
  /** @param string */
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  /** @return string */
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  /** @param string */
  public function setExtendedAddress($extendedAddress)
  {
    $this->extendedAddress = $extendedAddress;
  }
  /** @return string */
  public function getExtendedAddress()
  {
    return $this->extendedAddress;
  }
  /** @param string */
  public function setFormattedType($formattedType)
  {
    $this->formattedType = $formattedType;
  }
  /** @return string */
  public function getFormattedType()
  {
    return $this->formattedType;
  }
  /** @param string */
  public function setFormattedValue($formattedValue)
  {
    $this->formattedValue = $formattedValue;
  }
  /** @return string */
  public function getFormattedValue()
  {
    return $this->formattedValue;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setPoBox($poBox)
  {
    $this->poBox = $poBox;
  }
  /** @return string */
  public function getPoBox()
  {
    return $this->poBox;
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
  /** @param string */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /** @return string */
  public function getRegion()
  {
    return $this->region;
  }
  /** @param string */
  public function setStreetAddress($streetAddress)
  {
    $this->streetAddress = $streetAddress;
  }
  /** @return string */
  public function getStreetAddress()
  {
    return $this->streetAddress;
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
}

class AgeRangeType extends \Google\Model
{
  /** @var string */
  public $ageRange;
  /** @var FieldMetadata */
  public $metadata;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setAgeRange($ageRange)
  {
    $this->ageRange = $ageRange;
  }
  /** @return string */
  public function getAgeRange()
  {
    return $this->ageRange;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
}

class BatchCreateContactsRequest extends \Google\Collection
{
  /** @var ContactToCreate[] */
  public $contacts;
  /** @var string */
  public $readMask;
  /** @var string[] */
  public $sources;
  protected $collection_key = 'sources';
  protected $contactsType = ContactToCreate::class;
  protected $contactsDataType = 'array';
  /** @param ContactToCreate[] */
  public function setContacts($contacts)
  {
    $this->contacts = $contacts;
  }
  /** @return ContactToCreate[] */
  public function getContacts()
  {
    return $this->contacts;
  }
  /** @param string */
  public function setReadMask($readMask)
  {
    $this->readMask = $readMask;
  }
  /** @return string */
  public function getReadMask()
  {
    return $this->readMask;
  }
  /** @param string[] */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /** @return string[] */
  public function getSources()
  {
    return $this->sources;
  }
}

class BatchCreateContactsResponse extends \Google\Collection
{
  /** @var PersonResponse[] */
  public $createdPeople;
  protected $collection_key = 'createdPeople';
  protected $createdPeopleType = PersonResponse::class;
  protected $createdPeopleDataType = 'array';
  /** @param PersonResponse[] */
  public function setCreatedPeople($createdPeople)
  {
    $this->createdPeople = $createdPeople;
  }
  /** @return PersonResponse[] */
  public function getCreatedPeople()
  {
    return $this->createdPeople;
  }
}

class BatchDeleteContactsRequest extends \Google\Collection
{
  /** @var string[] */
  public $resourceNames;
  protected $collection_key = 'resourceNames';
  /** @param string[] */
  public function setResourceNames($resourceNames)
  {
    $this->resourceNames = $resourceNames;
  }
  /** @return string[] */
  public function getResourceNames()
  {
    return $this->resourceNames;
  }
}

class BatchGetContactGroupsResponse extends \Google\Collection
{
  /** @var ContactGroupResponse[] */
  public $responses;
  protected $collection_key = 'responses';
  protected $responsesType = ContactGroupResponse::class;
  protected $responsesDataType = 'array';
  /** @param ContactGroupResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return ContactGroupResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
}

class BatchUpdateContactsRequest extends \Google\Collection
{
  /** @var Person[] */
  public $contacts;
  /** @var string */
  public $readMask;
  /** @var string[] */
  public $sources;
  /** @var string */
  public $updateMask;
  protected $collection_key = 'sources';
  protected $contactsType = Person::class;
  protected $contactsDataType = 'map';
  /** @param Person[] */
  public function setContacts($contacts)
  {
    $this->contacts = $contacts;
  }
  /** @return Person[] */
  public function getContacts()
  {
    return $this->contacts;
  }
  /** @param string */
  public function setReadMask($readMask)
  {
    $this->readMask = $readMask;
  }
  /** @return string */
  public function getReadMask()
  {
    return $this->readMask;
  }
  /** @param string[] */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /** @return string[] */
  public function getSources()
  {
    return $this->sources;
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

class BatchUpdateContactsResponse extends \Google\Model
{
  /** @var PersonResponse[] */
  public $updateResult;
  protected $updateResultType = PersonResponse::class;
  protected $updateResultDataType = 'map';
  /** @param PersonResponse[] */
  public function setUpdateResult($updateResult)
  {
    $this->updateResult = $updateResult;
  }
  /** @return PersonResponse[] */
  public function getUpdateResult()
  {
    return $this->updateResult;
  }
}

class Biography extends \Google\Model
{
  /** @var string */
  public $contentType;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }
  /** @return string */
  public function getContentType()
  {
    return $this->contentType;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class Birthday extends \Google\Model
{
  /** @var Date */
  public $date;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $text;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param Date */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /** @return Date */
  public function getDate()
  {
    return $this->date;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setText($text)
  {
    $this->text = $text;
  }
  /** @return string */
  public function getText()
  {
    return $this->text;
  }
}

class BraggingRights extends \Google\Model
{
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class CalendarUrl extends \Google\Model
{
  /** @var string */
  public $formattedType;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $type;
  /** @var string */
  public $url;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setFormattedType($formattedType)
  {
    $this->formattedType = $formattedType;
  }
  /** @return string */
  public function getFormattedType()
  {
    return $this->formattedType;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class ClientData extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class ContactGroup extends \Google\Collection
{
  /** @var GroupClientData[] */
  public $clientData;
  /** @var string */
  public $etag;
  /** @var string */
  public $formattedName;
  /** @var string */
  public $groupType;
  /** @var int */
  public $memberCount;
  /** @var string[] */
  public $memberResourceNames;
  /** @var ContactGroupMetadata */
  public $metadata;
  /** @var string */
  public $name;
  /** @var string */
  public $resourceName;
  protected $collection_key = 'memberResourceNames';
  protected $clientDataType = GroupClientData::class;
  protected $clientDataDataType = 'array';
  protected $metadataType = ContactGroupMetadata::class;
  protected $metadataDataType = '';
  /** @param GroupClientData[] */
  public function setClientData($clientData)
  {
    $this->clientData = $clientData;
  }
  /** @return GroupClientData[] */
  public function getClientData()
  {
    return $this->clientData;
  }
  /** @param string */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param string */
  public function setFormattedName($formattedName)
  {
    $this->formattedName = $formattedName;
  }
  /** @return string */
  public function getFormattedName()
  {
    return $this->formattedName;
  }
  /** @param string */
  public function setGroupType($groupType)
  {
    $this->groupType = $groupType;
  }
  /** @return string */
  public function getGroupType()
  {
    return $this->groupType;
  }
  /** @param int */
  public function setMemberCount($memberCount)
  {
    $this->memberCount = $memberCount;
  }
  /** @return int */
  public function getMemberCount()
  {
    return $this->memberCount;
  }
  /** @param string[] */
  public function setMemberResourceNames($memberResourceNames)
  {
    $this->memberResourceNames = $memberResourceNames;
  }
  /** @return string[] */
  public function getMemberResourceNames()
  {
    return $this->memberResourceNames;
  }
  /** @param ContactGroupMetadata */
  public function setMetadata(ContactGroupMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return ContactGroupMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /** @return string */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

class ContactGroupMembership extends \Google\Model
{
  /** @var string */
  public $contactGroupId;
  /** @var string */
  public $contactGroupResourceName;

  /** @param string */
  public function setContactGroupId($contactGroupId)
  {
    $this->contactGroupId = $contactGroupId;
  }
  /** @return string */
  public function getContactGroupId()
  {
    return $this->contactGroupId;
  }
  /** @param string */
  public function setContactGroupResourceName($contactGroupResourceName)
  {
    $this->contactGroupResourceName = $contactGroupResourceName;
  }
  /** @return string */
  public function getContactGroupResourceName()
  {
    return $this->contactGroupResourceName;
  }
}

class ContactGroupMetadata extends \Google\Model
{
  /** @var bool */
  public $deleted;
  /** @var string */
  public $updateTime;

  /** @param bool */
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  /** @return bool */
  public function getDeleted()
  {
    return $this->deleted;
  }
  /** @param string */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

class ContactGroupResponse extends \Google\Model
{
  /** @var ContactGroup */
  public $contactGroup;
  /** @var string */
  public $requestedResourceName;
  /** @var Status */
  public $status;
  protected $contactGroupType = ContactGroup::class;
  protected $contactGroupDataType = '';
  protected $statusType = Status::class;
  protected $statusDataType = '';
  /** @param ContactGroup */
  public function setContactGroup(ContactGroup $contactGroup)
  {
    $this->contactGroup = $contactGroup;
  }
  /** @return ContactGroup */
  public function getContactGroup()
  {
    return $this->contactGroup;
  }
  /** @param string */
  public function setRequestedResourceName($requestedResourceName)
  {
    $this->requestedResourceName = $requestedResourceName;
  }
  /** @return string */
  public function getRequestedResourceName()
  {
    return $this->requestedResourceName;
  }
  /** @param Status */
  public function setStatus(Status $status)
  {
    $this->status = $status;
  }
  /** @return Status */
  public function getStatus()
  {
    return $this->status;
  }
}

class ContactToCreate extends \Google\Model
{
  /** @var Person */
  public $contactPerson;
  protected $contactPersonType = Person::class;
  protected $contactPersonDataType = '';
  /** @param Person */
  public function setContactPerson(Person $contactPerson)
  {
    $this->contactPerson = $contactPerson;
  }
  /** @return Person */
  public function getContactPerson()
  {
    return $this->contactPerson;
  }
}

class CopyOtherContactToMyContactsGroupRequest extends \Google\Collection
{
  /** @var string */
  public $copyMask;
  /** @var string */
  public $readMask;
  /** @var string[] */
  public $sources;
  protected $collection_key = 'sources';
  /** @param string */
  public function setCopyMask($copyMask)
  {
    $this->copyMask = $copyMask;
  }
  /** @return string */
  public function getCopyMask()
  {
    return $this->copyMask;
  }
  /** @param string */
  public function setReadMask($readMask)
  {
    $this->readMask = $readMask;
  }
  /** @return string */
  public function getReadMask()
  {
    return $this->readMask;
  }
  /** @param string[] */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /** @return string[] */
  public function getSources()
  {
    return $this->sources;
  }
}

class CoverPhoto extends \Google\Model
{
  /** @var bool */
  public $default;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $url;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param bool */
  public function setDefault($default)
  {
    $this->default = $default;
  }
  /** @return bool */
  public function getDefault()
  {
    return $this->default;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class CreateContactGroupRequest extends \Google\Model
{
  /** @var ContactGroup */
  public $contactGroup;
  /** @var string */
  public $readGroupFields;
  protected $contactGroupType = ContactGroup::class;
  protected $contactGroupDataType = '';
  /** @param ContactGroup */
  public function setContactGroup(ContactGroup $contactGroup)
  {
    $this->contactGroup = $contactGroup;
  }
  /** @return ContactGroup */
  public function getContactGroup()
  {
    return $this->contactGroup;
  }
  /** @param string */
  public function setReadGroupFields($readGroupFields)
  {
    $this->readGroupFields = $readGroupFields;
  }
  /** @return string */
  public function getReadGroupFields()
  {
    return $this->readGroupFields;
  }
}

class Date extends \Google\Model
{
  /** @var int */
  public $day;
  /** @var int */
  public $month;
  /** @var int */
  public $year;

  /** @param int */
  public function setDay($day)
  {
    $this->day = $day;
  }
  /** @return int */
  public function getDay()
  {
    return $this->day;
  }
  /** @param int */
  public function setMonth($month)
  {
    $this->month = $month;
  }
  /** @return int */
  public function getMonth()
  {
    return $this->month;
  }
  /** @param int */
  public function setYear($year)
  {
    $this->year = $year;
  }
  /** @return int */
  public function getYear()
  {
    return $this->year;
  }
}

class DeleteContactPhotoResponse extends \Google\Model
{
  /** @var Person */
  public $person;
  protected $personType = Person::class;
  protected $personDataType = '';
  /** @param Person */
  public function setPerson(Person $person)
  {
    $this->person = $person;
  }
  /** @return Person */
  public function getPerson()
  {
    return $this->person;
  }
}

class DomainMembership extends \Google\Model
{
  /** @var bool */
  public $inViewerDomain;

  /** @param bool */
  public function setInViewerDomain($inViewerDomain)
  {
    $this->inViewerDomain = $inViewerDomain;
  }
  /** @return bool */
  public function getInViewerDomain()
  {
    return $this->inViewerDomain;
  }
}

class EmailAddress extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $formattedType;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $type;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
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
  public function setFormattedType($formattedType)
  {
    $this->formattedType = $formattedType;
  }
  /** @return string */
  public function getFormattedType()
  {
    return $this->formattedType;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class Event extends \Google\Model
{
  /** @var Date */
  public $date;
  /** @var string */
  public $formattedType;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $type;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param Date */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /** @return Date */
  public function getDate()
  {
    return $this->date;
  }
  /** @param string */
  public function setFormattedType($formattedType)
  {
    $this->formattedType = $formattedType;
  }
  /** @return string */
  public function getFormattedType()
  {
    return $this->formattedType;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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
}

class ExternalId extends \Google\Model
{
  /** @var string */
  public $formattedType;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $type;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setFormattedType($formattedType)
  {
    $this->formattedType = $formattedType;
  }
  /** @return string */
  public function getFormattedType()
  {
    return $this->formattedType;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class FieldMetadata extends \Google\Model
{
  /** @var bool */
  public $primary;
  /** @var Source */
  public $source;
  /** @var bool */
  public $sourcePrimary;
  /** @var bool */
  public $verified;
  protected $sourceType = Source::class;
  protected $sourceDataType = '';
  /** @param bool */
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  /** @return bool */
  public function getPrimary()
  {
    return $this->primary;
  }
  /** @param Source */
  public function setSource(Source $source)
  {
    $this->source = $source;
  }
  /** @return Source */
  public function getSource()
  {
    return $this->source;
  }
  /** @param bool */
  public function setSourcePrimary($sourcePrimary)
  {
    $this->sourcePrimary = $sourcePrimary;
  }
  /** @return bool */
  public function getSourcePrimary()
  {
    return $this->sourcePrimary;
  }
  /** @param bool */
  public function setVerified($verified)
  {
    $this->verified = $verified;
  }
  /** @return bool */
  public function getVerified()
  {
    return $this->verified;
  }
}

class FileAs extends \Google\Model
{
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class Gender extends \Google\Model
{
  /** @var string */
  public $addressMeAs;
  /** @var string */
  public $formattedValue;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setAddressMeAs($addressMeAs)
  {
    $this->addressMeAs = $addressMeAs;
  }
  /** @return string */
  public function getAddressMeAs()
  {
    return $this->addressMeAs;
  }
  /** @param string */
  public function setFormattedValue($formattedValue)
  {
    $this->formattedValue = $formattedValue;
  }
  /** @return string */
  public function getFormattedValue()
  {
    return $this->formattedValue;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class GetPeopleResponse extends \Google\Collection
{
  /** @var PersonResponse[] */
  public $responses;
  protected $collection_key = 'responses';
  protected $responsesType = PersonResponse::class;
  protected $responsesDataType = 'array';
  /** @param PersonResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return PersonResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
}

class GroupClientData extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $value;

  /** @param string */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class ImClient extends \Google\Model
{
  /** @var string */
  public $formattedProtocol;
  /** @var string */
  public $formattedType;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $protocol;
  /** @var string */
  public $type;
  /** @var string */
  public $username;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setFormattedProtocol($formattedProtocol)
  {
    $this->formattedProtocol = $formattedProtocol;
  }
  /** @return string */
  public function getFormattedProtocol()
  {
    return $this->formattedProtocol;
  }
  /** @param string */
  public function setFormattedType($formattedType)
  {
    $this->formattedType = $formattedType;
  }
  /** @return string */
  public function getFormattedType()
  {
    return $this->formattedType;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
  }
  /** @return string */
  public function getProtocol()
  {
    return $this->protocol;
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
  public function setUsername($username)
  {
    $this->username = $username;
  }
  /** @return string */
  public function getUsername()
  {
    return $this->username;
  }
}

class Interest extends \Google\Model
{
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class ListConnectionsResponse extends \Google\Collection
{
  /** @var Person[] */
  public $connections;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $nextSyncToken;
  /** @var int */
  public $totalItems;
  /** @var int */
  public $totalPeople;
  protected $collection_key = 'connections';
  protected $connectionsType = Person::class;
  protected $connectionsDataType = 'array';
  /** @param Person[] */
  public function setConnections($connections)
  {
    $this->connections = $connections;
  }
  /** @return Person[] */
  public function getConnections()
  {
    return $this->connections;
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
  public function setNextSyncToken($nextSyncToken)
  {
    $this->nextSyncToken = $nextSyncToken;
  }
  /** @return string */
  public function getNextSyncToken()
  {
    return $this->nextSyncToken;
  }
  /** @param int */
  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }
  /** @return int */
  public function getTotalItems()
  {
    return $this->totalItems;
  }
  /** @param int */
  public function setTotalPeople($totalPeople)
  {
    $this->totalPeople = $totalPeople;
  }
  /** @return int */
  public function getTotalPeople()
  {
    return $this->totalPeople;
  }
}

class ListContactGroupsResponse extends \Google\Collection
{
  /** @var ContactGroup[] */
  public $contactGroups;
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $nextSyncToken;
  /** @var int */
  public $totalItems;
  protected $collection_key = 'contactGroups';
  protected $contactGroupsType = ContactGroup::class;
  protected $contactGroupsDataType = 'array';
  /** @param ContactGroup[] */
  public function setContactGroups($contactGroups)
  {
    $this->contactGroups = $contactGroups;
  }
  /** @return ContactGroup[] */
  public function getContactGroups()
  {
    return $this->contactGroups;
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
  public function setNextSyncToken($nextSyncToken)
  {
    $this->nextSyncToken = $nextSyncToken;
  }
  /** @return string */
  public function getNextSyncToken()
  {
    return $this->nextSyncToken;
  }
  /** @param int */
  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }
  /** @return int */
  public function getTotalItems()
  {
    return $this->totalItems;
  }
}

class ListDirectoryPeopleResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $nextSyncToken;
  /** @var Person[] */
  public $people;
  protected $collection_key = 'people';
  protected $peopleType = Person::class;
  protected $peopleDataType = 'array';
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
  public function setNextSyncToken($nextSyncToken)
  {
    $this->nextSyncToken = $nextSyncToken;
  }
  /** @return string */
  public function getNextSyncToken()
  {
    return $this->nextSyncToken;
  }
  /** @param Person[] */
  public function setPeople($people)
  {
    $this->people = $people;
  }
  /** @return Person[] */
  public function getPeople()
  {
    return $this->people;
  }
}

class ListOtherContactsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $nextSyncToken;
  /** @var Person[] */
  public $otherContacts;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'otherContacts';
  protected $otherContactsType = Person::class;
  protected $otherContactsDataType = 'array';
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
  public function setNextSyncToken($nextSyncToken)
  {
    $this->nextSyncToken = $nextSyncToken;
  }
  /** @return string */
  public function getNextSyncToken()
  {
    return $this->nextSyncToken;
  }
  /** @param Person[] */
  public function setOtherContacts($otherContacts)
  {
    $this->otherContacts = $otherContacts;
  }
  /** @return Person[] */
  public function getOtherContacts()
  {
    return $this->otherContacts;
  }
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class Locale extends \Google\Model
{
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class Location extends \Google\Model
{
  /** @var string */
  public $buildingId;
  /** @var bool */
  public $current;
  /** @var string */
  public $deskCode;
  /** @var string */
  public $floor;
  /** @var string */
  public $floorSection;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $type;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setBuildingId($buildingId)
  {
    $this->buildingId = $buildingId;
  }
  /** @return string */
  public function getBuildingId()
  {
    return $this->buildingId;
  }
  /** @param bool */
  public function setCurrent($current)
  {
    $this->current = $current;
  }
  /** @return bool */
  public function getCurrent()
  {
    return $this->current;
  }
  /** @param string */
  public function setDeskCode($deskCode)
  {
    $this->deskCode = $deskCode;
  }
  /** @return string */
  public function getDeskCode()
  {
    return $this->deskCode;
  }
  /** @param string */
  public function setFloor($floor)
  {
    $this->floor = $floor;
  }
  /** @return string */
  public function getFloor()
  {
    return $this->floor;
  }
  /** @param string */
  public function setFloorSection($floorSection)
  {
    $this->floorSection = $floorSection;
  }
  /** @return string */
  public function getFloorSection()
  {
    return $this->floorSection;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class Membership extends \Google\Model
{
  /** @var ContactGroupMembership */
  public $contactGroupMembership;
  /** @var DomainMembership */
  public $domainMembership;
  /** @var FieldMetadata */
  public $metadata;
  protected $contactGroupMembershipType = ContactGroupMembership::class;
  protected $contactGroupMembershipDataType = '';
  protected $domainMembershipType = DomainMembership::class;
  protected $domainMembershipDataType = '';
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param ContactGroupMembership */
  public function setContactGroupMembership(ContactGroupMembership $contactGroupMembership)
  {
    $this->contactGroupMembership = $contactGroupMembership;
  }
  /** @return ContactGroupMembership */
  public function getContactGroupMembership()
  {
    return $this->contactGroupMembership;
  }
  /** @param DomainMembership */
  public function setDomainMembership(DomainMembership $domainMembership)
  {
    $this->domainMembership = $domainMembership;
  }
  /** @return DomainMembership */
  public function getDomainMembership()
  {
    return $this->domainMembership;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
}

class MiscKeyword extends \Google\Model
{
  /** @var string */
  public $formattedType;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $type;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setFormattedType($formattedType)
  {
    $this->formattedType = $formattedType;
  }
  /** @return string */
  public function getFormattedType()
  {
    return $this->formattedType;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class ModifyContactGroupMembersRequest extends \Google\Collection
{
  /** @var string[] */
  public $resourceNamesToAdd;
  /** @var string[] */
  public $resourceNamesToRemove;
  protected $collection_key = 'resourceNamesToRemove';
  /** @param string[] */
  public function setResourceNamesToAdd($resourceNamesToAdd)
  {
    $this->resourceNamesToAdd = $resourceNamesToAdd;
  }
  /** @return string[] */
  public function getResourceNamesToAdd()
  {
    return $this->resourceNamesToAdd;
  }
  /** @param string[] */
  public function setResourceNamesToRemove($resourceNamesToRemove)
  {
    $this->resourceNamesToRemove = $resourceNamesToRemove;
  }
  /** @return string[] */
  public function getResourceNamesToRemove()
  {
    return $this->resourceNamesToRemove;
  }
}

class ModifyContactGroupMembersResponse extends \Google\Collection
{
  /** @var string[] */
  public $canNotRemoveLastContactGroupResourceNames;
  /** @var string[] */
  public $notFoundResourceNames;
  protected $collection_key = 'notFoundResourceNames';
  /** @param string[] */
  public function setCanNotRemoveLastContactGroupResourceNames($canNotRemoveLastContactGroupResourceNames)
  {
    $this->canNotRemoveLastContactGroupResourceNames = $canNotRemoveLastContactGroupResourceNames;
  }
  /** @return string[] */
  public function getCanNotRemoveLastContactGroupResourceNames()
  {
    return $this->canNotRemoveLastContactGroupResourceNames;
  }
  /** @param string[] */
  public function setNotFoundResourceNames($notFoundResourceNames)
  {
    $this->notFoundResourceNames = $notFoundResourceNames;
  }
  /** @return string[] */
  public function getNotFoundResourceNames()
  {
    return $this->notFoundResourceNames;
  }
}

class Name extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $displayNameLastFirst;
  /** @var string */
  public $familyName;
  /** @var string */
  public $givenName;
  /** @var string */
  public $honorificPrefix;
  /** @var string */
  public $honorificSuffix;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $middleName;
  /** @var string */
  public $phoneticFamilyName;
  /** @var string */
  public $phoneticFullName;
  /** @var string */
  public $phoneticGivenName;
  /** @var string */
  public $phoneticHonorificPrefix;
  /** @var string */
  public $phoneticHonorificSuffix;
  /** @var string */
  public $phoneticMiddleName;
  /** @var string */
  public $unstructuredName;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
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
  public function setDisplayNameLastFirst($displayNameLastFirst)
  {
    $this->displayNameLastFirst = $displayNameLastFirst;
  }
  /** @return string */
  public function getDisplayNameLastFirst()
  {
    return $this->displayNameLastFirst;
  }
  /** @param string */
  public function setFamilyName($familyName)
  {
    $this->familyName = $familyName;
  }
  /** @return string */
  public function getFamilyName()
  {
    return $this->familyName;
  }
  /** @param string */
  public function setGivenName($givenName)
  {
    $this->givenName = $givenName;
  }
  /** @return string */
  public function getGivenName()
  {
    return $this->givenName;
  }
  /** @param string */
  public function setHonorificPrefix($honorificPrefix)
  {
    $this->honorificPrefix = $honorificPrefix;
  }
  /** @return string */
  public function getHonorificPrefix()
  {
    return $this->honorificPrefix;
  }
  /** @param string */
  public function setHonorificSuffix($honorificSuffix)
  {
    $this->honorificSuffix = $honorificSuffix;
  }
  /** @return string */
  public function getHonorificSuffix()
  {
    return $this->honorificSuffix;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setMiddleName($middleName)
  {
    $this->middleName = $middleName;
  }
  /** @return string */
  public function getMiddleName()
  {
    return $this->middleName;
  }
  /** @param string */
  public function setPhoneticFamilyName($phoneticFamilyName)
  {
    $this->phoneticFamilyName = $phoneticFamilyName;
  }
  /** @return string */
  public function getPhoneticFamilyName()
  {
    return $this->phoneticFamilyName;
  }
  /** @param string */
  public function setPhoneticFullName($phoneticFullName)
  {
    $this->phoneticFullName = $phoneticFullName;
  }
  /** @return string */
  public function getPhoneticFullName()
  {
    return $this->phoneticFullName;
  }
  /** @param string */
  public function setPhoneticGivenName($phoneticGivenName)
  {
    $this->phoneticGivenName = $phoneticGivenName;
  }
  /** @return string */
  public function getPhoneticGivenName()
  {
    return $this->phoneticGivenName;
  }
  /** @param string */
  public function setPhoneticHonorificPrefix($phoneticHonorificPrefix)
  {
    $this->phoneticHonorificPrefix = $phoneticHonorificPrefix;
  }
  /** @return string */
  public function getPhoneticHonorificPrefix()
  {
    return $this->phoneticHonorificPrefix;
  }
  /** @param string */
  public function setPhoneticHonorificSuffix($phoneticHonorificSuffix)
  {
    $this->phoneticHonorificSuffix = $phoneticHonorificSuffix;
  }
  /** @return string */
  public function getPhoneticHonorificSuffix()
  {
    return $this->phoneticHonorificSuffix;
  }
  /** @param string */
  public function setPhoneticMiddleName($phoneticMiddleName)
  {
    $this->phoneticMiddleName = $phoneticMiddleName;
  }
  /** @return string */
  public function getPhoneticMiddleName()
  {
    return $this->phoneticMiddleName;
  }
  /** @param string */
  public function setUnstructuredName($unstructuredName)
  {
    $this->unstructuredName = $unstructuredName;
  }
  /** @return string */
  public function getUnstructuredName()
  {
    return $this->unstructuredName;
  }
}

class Nickname extends \Google\Model
{
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $type;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class Occupation extends \Google\Model
{
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class Organization extends \Google\Model
{
  /** @var string */
  public $costCenter;
  /** @var bool */
  public $current;
  /** @var string */
  public $department;
  /** @var string */
  public $domain;
  /** @var Date */
  public $endDate;
  /** @var string */
  public $formattedType;
  /** @var int */
  public $fullTimeEquivalentMillipercent;
  /** @var string */
  public $jobDescription;
  /** @var string */
  public $location;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $name;
  /** @var string */
  public $phoneticName;
  /** @var Date */
  public $startDate;
  /** @var string */
  public $symbol;
  /** @var string */
  public $title;
  /** @var string */
  public $type;
  protected $endDateType = Date::class;
  protected $endDateDataType = '';
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  protected $startDateType = Date::class;
  protected $startDateDataType = '';
  /** @param string */
  public function setCostCenter($costCenter)
  {
    $this->costCenter = $costCenter;
  }
  /** @return string */
  public function getCostCenter()
  {
    return $this->costCenter;
  }
  /** @param bool */
  public function setCurrent($current)
  {
    $this->current = $current;
  }
  /** @return bool */
  public function getCurrent()
  {
    return $this->current;
  }
  /** @param string */
  public function setDepartment($department)
  {
    $this->department = $department;
  }
  /** @return string */
  public function getDepartment()
  {
    return $this->department;
  }
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
  /** @param Date */
  public function setEndDate(Date $endDate)
  {
    $this->endDate = $endDate;
  }
  /** @return Date */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /** @param string */
  public function setFormattedType($formattedType)
  {
    $this->formattedType = $formattedType;
  }
  /** @return string */
  public function getFormattedType()
  {
    return $this->formattedType;
  }
  /** @param int */
  public function setFullTimeEquivalentMillipercent($fullTimeEquivalentMillipercent)
  {
    $this->fullTimeEquivalentMillipercent = $fullTimeEquivalentMillipercent;
  }
  /** @return int */
  public function getFullTimeEquivalentMillipercent()
  {
    return $this->fullTimeEquivalentMillipercent;
  }
  /** @param string */
  public function setJobDescription($jobDescription)
  {
    $this->jobDescription = $jobDescription;
  }
  /** @return string */
  public function getJobDescription()
  {
    return $this->jobDescription;
  }
  /** @param string */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /** @return string */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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
  public function setPhoneticName($phoneticName)
  {
    $this->phoneticName = $phoneticName;
  }
  /** @return string */
  public function getPhoneticName()
  {
    return $this->phoneticName;
  }
  /** @param Date */
  public function setStartDate(Date $startDate)
  {
    $this->startDate = $startDate;
  }
  /** @return Date */
  public function getStartDate()
  {
    return $this->startDate;
  }
  /** @param string */
  public function setSymbol($symbol)
  {
    $this->symbol = $symbol;
  }
  /** @return string */
  public function getSymbol()
  {
    return $this->symbol;
  }
  /** @param string */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /** @return string */
  public function getTitle()
  {
    return $this->title;
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
}

class PeopleEmpty extends \Google\Model
{
}

class Person extends \Google\Collection
{
  /** @var Address[] */
  public $addresses;
  /** @var string */
  public $ageRange;
  /** @var AgeRangeType[] */
  public $ageRanges;
  /** @var Biography[] */
  public $biographies;
  /** @var Birthday[] */
  public $birthdays;
  /** @var BraggingRights[] */
  public $braggingRights;
  /** @var CalendarUrl[] */
  public $calendarUrls;
  /** @var ClientData[] */
  public $clientData;
  /** @var CoverPhoto[] */
  public $coverPhotos;
  /** @var EmailAddress[] */
  public $emailAddresses;
  /** @var string */
  public $etag;
  /** @var Event[] */
  public $events;
  /** @var ExternalId[] */
  public $externalIds;
  /** @var FileAs[] */
  public $fileAses;
  /** @var Gender[] */
  public $genders;
  /** @var ImClient[] */
  public $imClients;
  /** @var Interest[] */
  public $interests;
  /** @var Locale[] */
  public $locales;
  /** @var Location[] */
  public $locations;
  /** @var Membership[] */
  public $memberships;
  /** @var PersonMetadata */
  public $metadata;
  /** @var MiscKeyword[] */
  public $miscKeywords;
  /** @var Name[] */
  public $names;
  /** @var Nickname[] */
  public $nicknames;
  /** @var Occupation[] */
  public $occupations;
  /** @var Organization[] */
  public $organizations;
  /** @var PhoneNumber[] */
  public $phoneNumbers;
  /** @var Photo[] */
  public $photos;
  /** @var Relation[] */
  public $relations;
  /** @var RelationshipInterest[] */
  public $relationshipInterests;
  /** @var RelationshipStatus[] */
  public $relationshipStatuses;
  /** @var Residence[] */
  public $residences;
  /** @var string */
  public $resourceName;
  /** @var SipAddress[] */
  public $sipAddresses;
  /** @var Skill[] */
  public $skills;
  /** @var Tagline[] */
  public $taglines;
  /** @var Url[] */
  public $urls;
  /** @var UserDefined[] */
  public $userDefined;
  protected $collection_key = 'userDefined';
  protected $addressesType = Address::class;
  protected $addressesDataType = 'array';
  protected $ageRangesType = AgeRangeType::class;
  protected $ageRangesDataType = 'array';
  protected $biographiesType = Biography::class;
  protected $biographiesDataType = 'array';
  protected $birthdaysType = Birthday::class;
  protected $birthdaysDataType = 'array';
  protected $braggingRightsType = BraggingRights::class;
  protected $braggingRightsDataType = 'array';
  protected $calendarUrlsType = CalendarUrl::class;
  protected $calendarUrlsDataType = 'array';
  protected $clientDataType = ClientData::class;
  protected $clientDataDataType = 'array';
  protected $coverPhotosType = CoverPhoto::class;
  protected $coverPhotosDataType = 'array';
  protected $emailAddressesType = EmailAddress::class;
  protected $emailAddressesDataType = 'array';
  protected $eventsType = Event::class;
  protected $eventsDataType = 'array';
  protected $externalIdsType = ExternalId::class;
  protected $externalIdsDataType = 'array';
  protected $fileAsesType = FileAs::class;
  protected $fileAsesDataType = 'array';
  protected $gendersType = Gender::class;
  protected $gendersDataType = 'array';
  protected $imClientsType = ImClient::class;
  protected $imClientsDataType = 'array';
  protected $interestsType = Interest::class;
  protected $interestsDataType = 'array';
  protected $localesType = Locale::class;
  protected $localesDataType = 'array';
  protected $locationsType = Location::class;
  protected $locationsDataType = 'array';
  protected $membershipsType = Membership::class;
  protected $membershipsDataType = 'array';
  protected $metadataType = PersonMetadata::class;
  protected $metadataDataType = '';
  protected $miscKeywordsType = MiscKeyword::class;
  protected $miscKeywordsDataType = 'array';
  protected $namesType = Name::class;
  protected $namesDataType = 'array';
  protected $nicknamesType = Nickname::class;
  protected $nicknamesDataType = 'array';
  protected $occupationsType = Occupation::class;
  protected $occupationsDataType = 'array';
  protected $organizationsType = Organization::class;
  protected $organizationsDataType = 'array';
  protected $phoneNumbersType = PhoneNumber::class;
  protected $phoneNumbersDataType = 'array';
  protected $photosType = Photo::class;
  protected $photosDataType = 'array';
  protected $relationsType = Relation::class;
  protected $relationsDataType = 'array';
  protected $relationshipInterestsType = RelationshipInterest::class;
  protected $relationshipInterestsDataType = 'array';
  protected $relationshipStatusesType = RelationshipStatus::class;
  protected $relationshipStatusesDataType = 'array';
  protected $residencesType = Residence::class;
  protected $residencesDataType = 'array';
  protected $sipAddressesType = SipAddress::class;
  protected $sipAddressesDataType = 'array';
  protected $skillsType = Skill::class;
  protected $skillsDataType = 'array';
  protected $taglinesType = Tagline::class;
  protected $taglinesDataType = 'array';
  protected $urlsType = Url::class;
  protected $urlsDataType = 'array';
  protected $userDefinedType = UserDefined::class;
  protected $userDefinedDataType = 'array';
  /** @param Address[] */
  public function setAddresses($addresses)
  {
    $this->addresses = $addresses;
  }
  /** @return Address[] */
  public function getAddresses()
  {
    return $this->addresses;
  }
  /** @param string */
  public function setAgeRange($ageRange)
  {
    $this->ageRange = $ageRange;
  }
  /** @return string */
  public function getAgeRange()
  {
    return $this->ageRange;
  }
  /** @param AgeRangeType[] */
  public function setAgeRanges($ageRanges)
  {
    $this->ageRanges = $ageRanges;
  }
  /** @return AgeRangeType[] */
  public function getAgeRanges()
  {
    return $this->ageRanges;
  }
  /** @param Biography[] */
  public function setBiographies($biographies)
  {
    $this->biographies = $biographies;
  }
  /** @return Biography[] */
  public function getBiographies()
  {
    return $this->biographies;
  }
  /** @param Birthday[] */
  public function setBirthdays($birthdays)
  {
    $this->birthdays = $birthdays;
  }
  /** @return Birthday[] */
  public function getBirthdays()
  {
    return $this->birthdays;
  }
  /** @param BraggingRights[] */
  public function setBraggingRights($braggingRights)
  {
    $this->braggingRights = $braggingRights;
  }
  /** @return BraggingRights[] */
  public function getBraggingRights()
  {
    return $this->braggingRights;
  }
  /** @param CalendarUrl[] */
  public function setCalendarUrls($calendarUrls)
  {
    $this->calendarUrls = $calendarUrls;
  }
  /** @return CalendarUrl[] */
  public function getCalendarUrls()
  {
    return $this->calendarUrls;
  }
  /** @param ClientData[] */
  public function setClientData($clientData)
  {
    $this->clientData = $clientData;
  }
  /** @return ClientData[] */
  public function getClientData()
  {
    return $this->clientData;
  }
  /** @param CoverPhoto[] */
  public function setCoverPhotos($coverPhotos)
  {
    $this->coverPhotos = $coverPhotos;
  }
  /** @return CoverPhoto[] */
  public function getCoverPhotos()
  {
    return $this->coverPhotos;
  }
  /** @param EmailAddress[] */
  public function setEmailAddresses($emailAddresses)
  {
    $this->emailAddresses = $emailAddresses;
  }
  /** @return EmailAddress[] */
  public function getEmailAddresses()
  {
    return $this->emailAddresses;
  }
  /** @param string */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param Event[] */
  public function setEvents($events)
  {
    $this->events = $events;
  }
  /** @return Event[] */
  public function getEvents()
  {
    return $this->events;
  }
  /** @param ExternalId[] */
  public function setExternalIds($externalIds)
  {
    $this->externalIds = $externalIds;
  }
  /** @return ExternalId[] */
  public function getExternalIds()
  {
    return $this->externalIds;
  }
  /** @param FileAs[] */
  public function setFileAses($fileAses)
  {
    $this->fileAses = $fileAses;
  }
  /** @return FileAs[] */
  public function getFileAses()
  {
    return $this->fileAses;
  }
  /** @param Gender[] */
  public function setGenders($genders)
  {
    $this->genders = $genders;
  }
  /** @return Gender[] */
  public function getGenders()
  {
    return $this->genders;
  }
  /** @param ImClient[] */
  public function setImClients($imClients)
  {
    $this->imClients = $imClients;
  }
  /** @return ImClient[] */
  public function getImClients()
  {
    return $this->imClients;
  }
  /** @param Interest[] */
  public function setInterests($interests)
  {
    $this->interests = $interests;
  }
  /** @return Interest[] */
  public function getInterests()
  {
    return $this->interests;
  }
  /** @param Locale[] */
  public function setLocales($locales)
  {
    $this->locales = $locales;
  }
  /** @return Locale[] */
  public function getLocales()
  {
    return $this->locales;
  }
  /** @param Location[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return Location[] */
  public function getLocations()
  {
    return $this->locations;
  }
  /** @param Membership[] */
  public function setMemberships($memberships)
  {
    $this->memberships = $memberships;
  }
  /** @return Membership[] */
  public function getMemberships()
  {
    return $this->memberships;
  }
  /** @param PersonMetadata */
  public function setMetadata(PersonMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return PersonMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param MiscKeyword[] */
  public function setMiscKeywords($miscKeywords)
  {
    $this->miscKeywords = $miscKeywords;
  }
  /** @return MiscKeyword[] */
  public function getMiscKeywords()
  {
    return $this->miscKeywords;
  }
  /** @param Name[] */
  public function setNames($names)
  {
    $this->names = $names;
  }
  /** @return Name[] */
  public function getNames()
  {
    return $this->names;
  }
  /** @param Nickname[] */
  public function setNicknames($nicknames)
  {
    $this->nicknames = $nicknames;
  }
  /** @return Nickname[] */
  public function getNicknames()
  {
    return $this->nicknames;
  }
  /** @param Occupation[] */
  public function setOccupations($occupations)
  {
    $this->occupations = $occupations;
  }
  /** @return Occupation[] */
  public function getOccupations()
  {
    return $this->occupations;
  }
  /** @param Organization[] */
  public function setOrganizations($organizations)
  {
    $this->organizations = $organizations;
  }
  /** @return Organization[] */
  public function getOrganizations()
  {
    return $this->organizations;
  }
  /** @param PhoneNumber[] */
  public function setPhoneNumbers($phoneNumbers)
  {
    $this->phoneNumbers = $phoneNumbers;
  }
  /** @return PhoneNumber[] */
  public function getPhoneNumbers()
  {
    return $this->phoneNumbers;
  }
  /** @param Photo[] */
  public function setPhotos($photos)
  {
    $this->photos = $photos;
  }
  /** @return Photo[] */
  public function getPhotos()
  {
    return $this->photos;
  }
  /** @param Relation[] */
  public function setRelations($relations)
  {
    $this->relations = $relations;
  }
  /** @return Relation[] */
  public function getRelations()
  {
    return $this->relations;
  }
  /** @param RelationshipInterest[] */
  public function setRelationshipInterests($relationshipInterests)
  {
    $this->relationshipInterests = $relationshipInterests;
  }
  /** @return RelationshipInterest[] */
  public function getRelationshipInterests()
  {
    return $this->relationshipInterests;
  }
  /** @param RelationshipStatus[] */
  public function setRelationshipStatuses($relationshipStatuses)
  {
    $this->relationshipStatuses = $relationshipStatuses;
  }
  /** @return RelationshipStatus[] */
  public function getRelationshipStatuses()
  {
    return $this->relationshipStatuses;
  }
  /** @param Residence[] */
  public function setResidences($residences)
  {
    $this->residences = $residences;
  }
  /** @return Residence[] */
  public function getResidences()
  {
    return $this->residences;
  }
  /** @param string */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /** @return string */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /** @param SipAddress[] */
  public function setSipAddresses($sipAddresses)
  {
    $this->sipAddresses = $sipAddresses;
  }
  /** @return SipAddress[] */
  public function getSipAddresses()
  {
    return $this->sipAddresses;
  }
  /** @param Skill[] */
  public function setSkills($skills)
  {
    $this->skills = $skills;
  }
  /** @return Skill[] */
  public function getSkills()
  {
    return $this->skills;
  }
  /** @param Tagline[] */
  public function setTaglines($taglines)
  {
    $this->taglines = $taglines;
  }
  /** @return Tagline[] */
  public function getTaglines()
  {
    return $this->taglines;
  }
  /** @param Url[] */
  public function setUrls($urls)
  {
    $this->urls = $urls;
  }
  /** @return Url[] */
  public function getUrls()
  {
    return $this->urls;
  }
  /** @param UserDefined[] */
  public function setUserDefined($userDefined)
  {
    $this->userDefined = $userDefined;
  }
  /** @return UserDefined[] */
  public function getUserDefined()
  {
    return $this->userDefined;
  }
}

class PersonMetadata extends \Google\Collection
{
  /** @var bool */
  public $deleted;
  /** @var string[] */
  public $linkedPeopleResourceNames;
  /** @var string */
  public $objectType;
  /** @var string[] */
  public $previousResourceNames;
  /** @var Source[] */
  public $sources;
  protected $collection_key = 'sources';
  protected $sourcesType = Source::class;
  protected $sourcesDataType = 'array';
  /** @param bool */
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  /** @return bool */
  public function getDeleted()
  {
    return $this->deleted;
  }
  /** @param string[] */
  public function setLinkedPeopleResourceNames($linkedPeopleResourceNames)
  {
    $this->linkedPeopleResourceNames = $linkedPeopleResourceNames;
  }
  /** @return string[] */
  public function getLinkedPeopleResourceNames()
  {
    return $this->linkedPeopleResourceNames;
  }
  /** @param string */
  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }
  /** @return string */
  public function getObjectType()
  {
    return $this->objectType;
  }
  /** @param string[] */
  public function setPreviousResourceNames($previousResourceNames)
  {
    $this->previousResourceNames = $previousResourceNames;
  }
  /** @return string[] */
  public function getPreviousResourceNames()
  {
    return $this->previousResourceNames;
  }
  /** @param Source[] */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /** @return Source[] */
  public function getSources()
  {
    return $this->sources;
  }
}

class PersonResponse extends \Google\Model
{
  /** @var int */
  public $httpStatusCode;
  /** @var Person */
  public $person;
  /** @var string */
  public $requestedResourceName;
  /** @var Status */
  public $status;
  protected $personType = Person::class;
  protected $personDataType = '';
  protected $statusType = Status::class;
  protected $statusDataType = '';
  /** @param int */
  public function setHttpStatusCode($httpStatusCode)
  {
    $this->httpStatusCode = $httpStatusCode;
  }
  /** @return int */
  public function getHttpStatusCode()
  {
    return $this->httpStatusCode;
  }
  /** @param Person */
  public function setPerson(Person $person)
  {
    $this->person = $person;
  }
  /** @return Person */
  public function getPerson()
  {
    return $this->person;
  }
  /** @param string */
  public function setRequestedResourceName($requestedResourceName)
  {
    $this->requestedResourceName = $requestedResourceName;
  }
  /** @return string */
  public function getRequestedResourceName()
  {
    return $this->requestedResourceName;
  }
  /** @param Status */
  public function setStatus(Status $status)
  {
    $this->status = $status;
  }
  /** @return Status */
  public function getStatus()
  {
    return $this->status;
  }
}

class PhoneNumber extends \Google\Model
{
  /** @var string */
  public $canonicalForm;
  /** @var string */
  public $formattedType;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $type;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setCanonicalForm($canonicalForm)
  {
    $this->canonicalForm = $canonicalForm;
  }
  /** @return string */
  public function getCanonicalForm()
  {
    return $this->canonicalForm;
  }
  /** @param string */
  public function setFormattedType($formattedType)
  {
    $this->formattedType = $formattedType;
  }
  /** @return string */
  public function getFormattedType()
  {
    return $this->formattedType;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class Photo extends \Google\Model
{
  /** @var bool */
  public $default;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $url;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param bool */
  public function setDefault($default)
  {
    $this->default = $default;
  }
  /** @return bool */
  public function getDefault()
  {
    return $this->default;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /** @return string */
  public function getUrl()
  {
    return $this->url;
  }
}

class ProfileMetadata extends \Google\Collection
{
  /** @var string */
  public $objectType;
  /** @var string[] */
  public $userTypes;
  protected $collection_key = 'userTypes';
  /** @param string */
  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }
  /** @return string */
  public function getObjectType()
  {
    return $this->objectType;
  }
  /** @param string[] */
  public function setUserTypes($userTypes)
  {
    $this->userTypes = $userTypes;
  }
  /** @return string[] */
  public function getUserTypes()
  {
    return $this->userTypes;
  }
}

class Relation extends \Google\Model
{
  /** @var string */
  public $formattedType;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $person;
  /** @var string */
  public $type;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setFormattedType($formattedType)
  {
    $this->formattedType = $formattedType;
  }
  /** @return string */
  public function getFormattedType()
  {
    return $this->formattedType;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setPerson($person)
  {
    $this->person = $person;
  }
  /** @return string */
  public function getPerson()
  {
    return $this->person;
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
}

class RelationshipInterest extends \Google\Model
{
  /** @var string */
  public $formattedValue;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setFormattedValue($formattedValue)
  {
    $this->formattedValue = $formattedValue;
  }
  /** @return string */
  public function getFormattedValue()
  {
    return $this->formattedValue;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class RelationshipStatus extends \Google\Model
{
  /** @var string */
  public $formattedValue;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setFormattedValue($formattedValue)
  {
    $this->formattedValue = $formattedValue;
  }
  /** @return string */
  public function getFormattedValue()
  {
    return $this->formattedValue;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class Residence extends \Google\Model
{
  /** @var bool */
  public $current;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param bool */
  public function setCurrent($current)
  {
    $this->current = $current;
  }
  /** @return bool */
  public function getCurrent()
  {
    return $this->current;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class SearchDirectoryPeopleResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Person[] */
  public $people;
  /** @var int */
  public $totalSize;
  protected $collection_key = 'people';
  protected $peopleType = Person::class;
  protected $peopleDataType = 'array';
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
  /** @param Person[] */
  public function setPeople($people)
  {
    $this->people = $people;
  }
  /** @return Person[] */
  public function getPeople()
  {
    return $this->people;
  }
  /** @param int */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /** @return int */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class SearchResponse extends \Google\Collection
{
  /** @var SearchResult[] */
  public $results;
  protected $collection_key = 'results';
  protected $resultsType = SearchResult::class;
  protected $resultsDataType = 'array';
  /** @param SearchResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return SearchResult[] */
  public function getResults()
  {
    return $this->results;
  }
}

class SearchResult extends \Google\Model
{
  /** @var Person */
  public $person;
  protected $personType = Person::class;
  protected $personDataType = '';
  /** @param Person */
  public function setPerson(Person $person)
  {
    $this->person = $person;
  }
  /** @return Person */
  public function getPerson()
  {
    return $this->person;
  }
}

class SipAddress extends \Google\Model
{
  /** @var string */
  public $formattedType;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $type;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setFormattedType($formattedType)
  {
    $this->formattedType = $formattedType;
  }
  /** @return string */
  public function getFormattedType()
  {
    return $this->formattedType;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class Skill extends \Google\Model
{
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class Source extends \Google\Model
{
  /** @var string */
  public $etag;
  /** @var string */
  public $id;
  /** @var ProfileMetadata */
  public $profileMetadata;
  /** @var string */
  public $type;
  /** @var string */
  public $updateTime;
  protected $profileMetadataType = ProfileMetadata::class;
  protected $profileMetadataDataType = '';
  /** @param string */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /** @return string */
  public function getEtag()
  {
    return $this->etag;
  }
  /** @param string */
  public function setId($id)
  {
    $this->id = $id;
  }
  /** @return string */
  public function getId()
  {
    return $this->id;
  }
  /** @param ProfileMetadata */
  public function setProfileMetadata(ProfileMetadata $profileMetadata)
  {
    $this->profileMetadata = $profileMetadata;
  }
  /** @return ProfileMetadata */
  public function getProfileMetadata()
  {
    return $this->profileMetadata;
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
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

class Status extends \Google\Collection
{
  /** @var int */
  public $code;
  /** @var array[] */
  public $details;
  /** @var string */
  public $message;
  protected $collection_key = 'details';
  /** @param int */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /** @return int */
  public function getCode()
  {
    return $this->code;
  }
  /** @param array[] */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /** @return array[] */
  public function getDetails()
  {
    return $this->details;
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

class Tagline extends \Google\Model
{
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class UpdateContactGroupRequest extends \Google\Model
{
  /** @var ContactGroup */
  public $contactGroup;
  /** @var string */
  public $readGroupFields;
  /** @var string */
  public $updateGroupFields;
  protected $contactGroupType = ContactGroup::class;
  protected $contactGroupDataType = '';
  /** @param ContactGroup */
  public function setContactGroup(ContactGroup $contactGroup)
  {
    $this->contactGroup = $contactGroup;
  }
  /** @return ContactGroup */
  public function getContactGroup()
  {
    return $this->contactGroup;
  }
  /** @param string */
  public function setReadGroupFields($readGroupFields)
  {
    $this->readGroupFields = $readGroupFields;
  }
  /** @return string */
  public function getReadGroupFields()
  {
    return $this->readGroupFields;
  }
  /** @param string */
  public function setUpdateGroupFields($updateGroupFields)
  {
    $this->updateGroupFields = $updateGroupFields;
  }
  /** @return string */
  public function getUpdateGroupFields()
  {
    return $this->updateGroupFields;
  }
}

class UpdateContactPhotoRequest extends \Google\Collection
{
  /** @var string */
  public $personFields;
  /** @var string */
  public $photoBytes;
  /** @var string[] */
  public $sources;
  protected $collection_key = 'sources';
  /** @param string */
  public function setPersonFields($personFields)
  {
    $this->personFields = $personFields;
  }
  /** @return string */
  public function getPersonFields()
  {
    return $this->personFields;
  }
  /** @param string */
  public function setPhotoBytes($photoBytes)
  {
    $this->photoBytes = $photoBytes;
  }
  /** @return string */
  public function getPhotoBytes()
  {
    return $this->photoBytes;
  }
  /** @param string[] */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /** @return string[] */
  public function getSources()
  {
    return $this->sources;
  }
}

class UpdateContactPhotoResponse extends \Google\Model
{
  /** @var Person */
  public $person;
  protected $personType = Person::class;
  protected $personDataType = '';
  /** @param Person */
  public function setPerson(Person $person)
  {
    $this->person = $person;
  }
  /** @return Person */
  public function getPerson()
  {
    return $this->person;
  }
}

class Url extends \Google\Model
{
  /** @var string */
  public $formattedType;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $type;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setFormattedType($formattedType)
  {
    $this->formattedType = $formattedType;
  }
  /** @return string */
  public function getFormattedType()
  {
    return $this->formattedType;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
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
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

class UserDefined extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var FieldMetadata */
  public $metadata;
  /** @var string */
  public $value;
  protected $metadataType = FieldMetadata::class;
  protected $metadataDataType = '';
  /** @param string */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /** @return string */
  public function getKey()
  {
    return $this->key;
  }
  /** @param FieldMetadata */
  public function setMetadata(FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return FieldMetadata */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return string */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Address::class, 'Google_Service_PeopleService_Address');
class_alias(AgeRangeType::class, 'Google_Service_PeopleService_AgeRangeType');
class_alias(BatchCreateContactsRequest::class, 'Google_Service_PeopleService_BatchCreateContactsRequest');
class_alias(BatchCreateContactsResponse::class, 'Google_Service_PeopleService_BatchCreateContactsResponse');
class_alias(BatchDeleteContactsRequest::class, 'Google_Service_PeopleService_BatchDeleteContactsRequest');
class_alias(BatchGetContactGroupsResponse::class, 'Google_Service_PeopleService_BatchGetContactGroupsResponse');
class_alias(BatchUpdateContactsRequest::class, 'Google_Service_PeopleService_BatchUpdateContactsRequest');
class_alias(BatchUpdateContactsResponse::class, 'Google_Service_PeopleService_BatchUpdateContactsResponse');
class_alias(Biography::class, 'Google_Service_PeopleService_Biography');
class_alias(Birthday::class, 'Google_Service_PeopleService_Birthday');
class_alias(BraggingRights::class, 'Google_Service_PeopleService_BraggingRights');
class_alias(CalendarUrl::class, 'Google_Service_PeopleService_CalendarUrl');
class_alias(ClientData::class, 'Google_Service_PeopleService_ClientData');
class_alias(ContactGroup::class, 'Google_Service_PeopleService_ContactGroup');
class_alias(ContactGroupMembership::class, 'Google_Service_PeopleService_ContactGroupMembership');
class_alias(ContactGroupMetadata::class, 'Google_Service_PeopleService_ContactGroupMetadata');
class_alias(ContactGroupResponse::class, 'Google_Service_PeopleService_ContactGroupResponse');
class_alias(ContactToCreate::class, 'Google_Service_PeopleService_ContactToCreate');
class_alias(CopyOtherContactToMyContactsGroupRequest::class, 'Google_Service_PeopleService_CopyOtherContactToMyContactsGroupRequest');
class_alias(CoverPhoto::class, 'Google_Service_PeopleService_CoverPhoto');
class_alias(CreateContactGroupRequest::class, 'Google_Service_PeopleService_CreateContactGroupRequest');
class_alias(Date::class, 'Google_Service_PeopleService_Date');
class_alias(DeleteContactPhotoResponse::class, 'Google_Service_PeopleService_DeleteContactPhotoResponse');
class_alias(DomainMembership::class, 'Google_Service_PeopleService_DomainMembership');
class_alias(EmailAddress::class, 'Google_Service_PeopleService_EmailAddress');
class_alias(Event::class, 'Google_Service_PeopleService_Event');
class_alias(ExternalId::class, 'Google_Service_PeopleService_ExternalId');
class_alias(FieldMetadata::class, 'Google_Service_PeopleService_FieldMetadata');
class_alias(FileAs::class, 'Google_Service_PeopleService_FileAs');
class_alias(Gender::class, 'Google_Service_PeopleService_Gender');
class_alias(GetPeopleResponse::class, 'Google_Service_PeopleService_GetPeopleResponse');
class_alias(GroupClientData::class, 'Google_Service_PeopleService_GroupClientData');
class_alias(ImClient::class, 'Google_Service_PeopleService_ImClient');
class_alias(Interest::class, 'Google_Service_PeopleService_Interest');
class_alias(ListConnectionsResponse::class, 'Google_Service_PeopleService_ListConnectionsResponse');
class_alias(ListContactGroupsResponse::class, 'Google_Service_PeopleService_ListContactGroupsResponse');
class_alias(ListDirectoryPeopleResponse::class, 'Google_Service_PeopleService_ListDirectoryPeopleResponse');
class_alias(ListOtherContactsResponse::class, 'Google_Service_PeopleService_ListOtherContactsResponse');
class_alias(Locale::class, 'Google_Service_PeopleService_Locale');
class_alias(Location::class, 'Google_Service_PeopleService_Location');
class_alias(Membership::class, 'Google_Service_PeopleService_Membership');
class_alias(MiscKeyword::class, 'Google_Service_PeopleService_MiscKeyword');
class_alias(ModifyContactGroupMembersRequest::class, 'Google_Service_PeopleService_ModifyContactGroupMembersRequest');
class_alias(ModifyContactGroupMembersResponse::class, 'Google_Service_PeopleService_ModifyContactGroupMembersResponse');
class_alias(Name::class, 'Google_Service_PeopleService_Name');
class_alias(Nickname::class, 'Google_Service_PeopleService_Nickname');
class_alias(Occupation::class, 'Google_Service_PeopleService_Occupation');
class_alias(Organization::class, 'Google_Service_PeopleService_Organization');
class_alias(PeopleEmpty::class, 'Google_Service_PeopleService_PeopleEmpty');
class_alias(Person::class, 'Google_Service_PeopleService_Person');
class_alias(PersonMetadata::class, 'Google_Service_PeopleService_PersonMetadata');
class_alias(PersonResponse::class, 'Google_Service_PeopleService_PersonResponse');
class_alias(PhoneNumber::class, 'Google_Service_PeopleService_PhoneNumber');
class_alias(Photo::class, 'Google_Service_PeopleService_Photo');
class_alias(ProfileMetadata::class, 'Google_Service_PeopleService_ProfileMetadata');
class_alias(Relation::class, 'Google_Service_PeopleService_Relation');
class_alias(RelationshipInterest::class, 'Google_Service_PeopleService_RelationshipInterest');
class_alias(RelationshipStatus::class, 'Google_Service_PeopleService_RelationshipStatus');
class_alias(Residence::class, 'Google_Service_PeopleService_Residence');
class_alias(SearchDirectoryPeopleResponse::class, 'Google_Service_PeopleService_SearchDirectoryPeopleResponse');
class_alias(SearchResponse::class, 'Google_Service_PeopleService_SearchResponse');
class_alias(SearchResult::class, 'Google_Service_PeopleService_SearchResult');
class_alias(SipAddress::class, 'Google_Service_PeopleService_SipAddress');
class_alias(Skill::class, 'Google_Service_PeopleService_Skill');
class_alias(Source::class, 'Google_Service_PeopleService_Source');
class_alias(Status::class, 'Google_Service_PeopleService_Status');
class_alias(Tagline::class, 'Google_Service_PeopleService_Tagline');
class_alias(UpdateContactGroupRequest::class, 'Google_Service_PeopleService_UpdateContactGroupRequest');
class_alias(UpdateContactPhotoRequest::class, 'Google_Service_PeopleService_UpdateContactPhotoRequest');
class_alias(UpdateContactPhotoResponse::class, 'Google_Service_PeopleService_UpdateContactPhotoResponse');
class_alias(Url::class, 'Google_Service_PeopleService_Url');
class_alias(UserDefined::class, 'Google_Service_PeopleService_UserDefined');
