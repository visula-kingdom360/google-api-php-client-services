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

namespace Google\Service\CivicInfo;

class AdministrationRegion extends \Google\Collection
{
  /** @var AdministrativeBody */
  public $electionAdministrationBody;
  /** @var AdministrationRegion */
  public $localJurisdiction;
  /** @var string */
  public $name;
  /** @var Source[] */
  public $sources;
  protected $collection_key = 'sources';
  protected $internal_gapi_mappings = [
        "localJurisdiction" => "local_jurisdiction",
  ];
  protected $electionAdministrationBodyType = AdministrativeBody::class;
  protected $electionAdministrationBodyDataType = '';
  protected $localJurisdictionType = AdministrationRegion::class;
  protected $localJurisdictionDataType = '';
  protected $sourcesType = Source::class;
  protected $sourcesDataType = 'array';
  /** @param AdministrativeBody */
  public function setElectionAdministrationBody(AdministrativeBody $electionAdministrationBody)
  {
    $this->electionAdministrationBody = $electionAdministrationBody;
  }
  /** @return AdministrativeBody */
  public function getElectionAdministrationBody()
  {
    return $this->electionAdministrationBody;
  }
  /** @param AdministrationRegion */
  public function setLocalJurisdiction(AdministrationRegion $localJurisdiction)
  {
    $this->localJurisdiction = $localJurisdiction;
  }
  /** @return AdministrationRegion */
  public function getLocalJurisdiction()
  {
    return $this->localJurisdiction;
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

class AdministrativeBody extends \Google\Collection
{
  /** @var string */
  public $absenteeVotingInfoUrl;
  /** @var string */
  public $ballotInfoUrl;
  /** @var SimpleAddressType */
  public $correspondenceAddress;
  /** @var string */
  public $electionInfoUrl;
  /** @var string */
  public $electionNoticeText;
  /** @var string */
  public $electionNoticeUrl;
  /** @var ElectionOfficial[] */
  public $electionOfficials;
  /** @var string */
  public $electionRegistrationConfirmationUrl;
  /** @var string */
  public $electionRegistrationUrl;
  /** @var string */
  public $electionRulesUrl;
  /** @var string */
  public $hoursOfOperation;
  /** @var string */
  public $name;
  /** @var SimpleAddressType */
  public $physicalAddress;
  /** @var string[] */
  public $voterServices;
  /** @var string */
  public $votingLocationFinderUrl;
  protected $collection_key = 'voter_services';
  protected $internal_gapi_mappings = [
        "voterServices" => "voter_services",
  ];
  protected $correspondenceAddressType = SimpleAddressType::class;
  protected $correspondenceAddressDataType = '';
  protected $electionOfficialsType = ElectionOfficial::class;
  protected $electionOfficialsDataType = 'array';
  protected $physicalAddressType = SimpleAddressType::class;
  protected $physicalAddressDataType = '';
  /** @param string */
  public function setAbsenteeVotingInfoUrl($absenteeVotingInfoUrl)
  {
    $this->absenteeVotingInfoUrl = $absenteeVotingInfoUrl;
  }
  /** @return string */
  public function getAbsenteeVotingInfoUrl()
  {
    return $this->absenteeVotingInfoUrl;
  }
  /** @param string */
  public function setBallotInfoUrl($ballotInfoUrl)
  {
    $this->ballotInfoUrl = $ballotInfoUrl;
  }
  /** @return string */
  public function getBallotInfoUrl()
  {
    return $this->ballotInfoUrl;
  }
  /** @param SimpleAddressType */
  public function setCorrespondenceAddress(SimpleAddressType $correspondenceAddress)
  {
    $this->correspondenceAddress = $correspondenceAddress;
  }
  /** @return SimpleAddressType */
  public function getCorrespondenceAddress()
  {
    return $this->correspondenceAddress;
  }
  /** @param string */
  public function setElectionInfoUrl($electionInfoUrl)
  {
    $this->electionInfoUrl = $electionInfoUrl;
  }
  /** @return string */
  public function getElectionInfoUrl()
  {
    return $this->electionInfoUrl;
  }
  /** @param string */
  public function setElectionNoticeText($electionNoticeText)
  {
    $this->electionNoticeText = $electionNoticeText;
  }
  /** @return string */
  public function getElectionNoticeText()
  {
    return $this->electionNoticeText;
  }
  /** @param string */
  public function setElectionNoticeUrl($electionNoticeUrl)
  {
    $this->electionNoticeUrl = $electionNoticeUrl;
  }
  /** @return string */
  public function getElectionNoticeUrl()
  {
    return $this->electionNoticeUrl;
  }
  /** @param ElectionOfficial[] */
  public function setElectionOfficials($electionOfficials)
  {
    $this->electionOfficials = $electionOfficials;
  }
  /** @return ElectionOfficial[] */
  public function getElectionOfficials()
  {
    return $this->electionOfficials;
  }
  /** @param string */
  public function setElectionRegistrationConfirmationUrl($electionRegistrationConfirmationUrl)
  {
    $this->electionRegistrationConfirmationUrl = $electionRegistrationConfirmationUrl;
  }
  /** @return string */
  public function getElectionRegistrationConfirmationUrl()
  {
    return $this->electionRegistrationConfirmationUrl;
  }
  /** @param string */
  public function setElectionRegistrationUrl($electionRegistrationUrl)
  {
    $this->electionRegistrationUrl = $electionRegistrationUrl;
  }
  /** @return string */
  public function getElectionRegistrationUrl()
  {
    return $this->electionRegistrationUrl;
  }
  /** @param string */
  public function setElectionRulesUrl($electionRulesUrl)
  {
    $this->electionRulesUrl = $electionRulesUrl;
  }
  /** @return string */
  public function getElectionRulesUrl()
  {
    return $this->electionRulesUrl;
  }
  /** @param string */
  public function setHoursOfOperation($hoursOfOperation)
  {
    $this->hoursOfOperation = $hoursOfOperation;
  }
  /** @return string */
  public function getHoursOfOperation()
  {
    return $this->hoursOfOperation;
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
  /** @param SimpleAddressType */
  public function setPhysicalAddress(SimpleAddressType $physicalAddress)
  {
    $this->physicalAddress = $physicalAddress;
  }
  /** @return SimpleAddressType */
  public function getPhysicalAddress()
  {
    return $this->physicalAddress;
  }
  /** @param string[] */
  public function setVoterServices($voterServices)
  {
    $this->voterServices = $voterServices;
  }
  /** @return string[] */
  public function getVoterServices()
  {
    return $this->voterServices;
  }
  /** @param string */
  public function setVotingLocationFinderUrl($votingLocationFinderUrl)
  {
    $this->votingLocationFinderUrl = $votingLocationFinderUrl;
  }
  /** @return string */
  public function getVotingLocationFinderUrl()
  {
    return $this->votingLocationFinderUrl;
  }
}

class Candidate extends \Google\Collection
{
  /** @var string */
  public $candidateUrl;
  /** @var Channel[] */
  public $channels;
  /** @var string */
  public $email;
  /** @var string */
  public $name;
  /** @var string */
  public $orderOnBallot;
  /** @var string */
  public $party;
  /** @var string */
  public $phone;
  /** @var string */
  public $photoUrl;
  protected $collection_key = 'channels';
  protected $channelsType = Channel::class;
  protected $channelsDataType = 'array';
  /** @param string */
  public function setCandidateUrl($candidateUrl)
  {
    $this->candidateUrl = $candidateUrl;
  }
  /** @return string */
  public function getCandidateUrl()
  {
    return $this->candidateUrl;
  }
  /** @param Channel[] */
  public function setChannels($channels)
  {
    $this->channels = $channels;
  }
  /** @return Channel[] */
  public function getChannels()
  {
    return $this->channels;
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
  public function setOrderOnBallot($orderOnBallot)
  {
    $this->orderOnBallot = $orderOnBallot;
  }
  /** @return string */
  public function getOrderOnBallot()
  {
    return $this->orderOnBallot;
  }
  /** @param string */
  public function setParty($party)
  {
    $this->party = $party;
  }
  /** @return string */
  public function getParty()
  {
    return $this->party;
  }
  /** @param string */
  public function setPhone($phone)
  {
    $this->phone = $phone;
  }
  /** @return string */
  public function getPhone()
  {
    return $this->phone;
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
}

class Channel extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $type;

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

class Contest extends \Google\Collection
{
  /** @var string */
  public $ballotPlacement;
  /** @var string */
  public $ballotTitle;
  /** @var Candidate[] */
  public $candidates;
  /** @var ElectoralDistrict */
  public $district;
  /** @var string */
  public $electorateSpecifications;
  /** @var string[] */
  public $level;
  /** @var string */
  public $numberElected;
  /** @var string */
  public $numberVotingFor;
  /** @var string */
  public $office;
  /** @var string[] */
  public $primaryParties;
  /** @var string */
  public $primaryParty;
  /** @var string[] */
  public $referendumBallotResponses;
  /** @var string */
  public $referendumBrief;
  /** @var string */
  public $referendumConStatement;
  /** @var string */
  public $referendumEffectOfAbstain;
  /** @var string */
  public $referendumPassageThreshold;
  /** @var string */
  public $referendumProStatement;
  /** @var string */
  public $referendumSubtitle;
  /** @var string */
  public $referendumText;
  /** @var string */
  public $referendumTitle;
  /** @var string */
  public $referendumUrl;
  /** @var string[] */
  public $roles;
  /** @var Source[] */
  public $sources;
  /** @var string */
  public $special;
  /** @var string */
  public $type;
  protected $collection_key = 'sources';
  protected $candidatesType = Candidate::class;
  protected $candidatesDataType = 'array';
  protected $districtType = ElectoralDistrict::class;
  protected $districtDataType = '';
  protected $sourcesType = Source::class;
  protected $sourcesDataType = 'array';
  /** @param string */
  public function setBallotPlacement($ballotPlacement)
  {
    $this->ballotPlacement = $ballotPlacement;
  }
  /** @return string */
  public function getBallotPlacement()
  {
    return $this->ballotPlacement;
  }
  /** @param string */
  public function setBallotTitle($ballotTitle)
  {
    $this->ballotTitle = $ballotTitle;
  }
  /** @return string */
  public function getBallotTitle()
  {
    return $this->ballotTitle;
  }
  /** @param Candidate[] */
  public function setCandidates($candidates)
  {
    $this->candidates = $candidates;
  }
  /** @return Candidate[] */
  public function getCandidates()
  {
    return $this->candidates;
  }
  /** @param ElectoralDistrict */
  public function setDistrict(ElectoralDistrict $district)
  {
    $this->district = $district;
  }
  /** @return ElectoralDistrict */
  public function getDistrict()
  {
    return $this->district;
  }
  /** @param string */
  public function setElectorateSpecifications($electorateSpecifications)
  {
    $this->electorateSpecifications = $electorateSpecifications;
  }
  /** @return string */
  public function getElectorateSpecifications()
  {
    return $this->electorateSpecifications;
  }
  /** @param string[] */
  public function setLevel($level)
  {
    $this->level = $level;
  }
  /** @return string[] */
  public function getLevel()
  {
    return $this->level;
  }
  /** @param string */
  public function setNumberElected($numberElected)
  {
    $this->numberElected = $numberElected;
  }
  /** @return string */
  public function getNumberElected()
  {
    return $this->numberElected;
  }
  /** @param string */
  public function setNumberVotingFor($numberVotingFor)
  {
    $this->numberVotingFor = $numberVotingFor;
  }
  /** @return string */
  public function getNumberVotingFor()
  {
    return $this->numberVotingFor;
  }
  /** @param string */
  public function setOffice($office)
  {
    $this->office = $office;
  }
  /** @return string */
  public function getOffice()
  {
    return $this->office;
  }
  /** @param string[] */
  public function setPrimaryParties($primaryParties)
  {
    $this->primaryParties = $primaryParties;
  }
  /** @return string[] */
  public function getPrimaryParties()
  {
    return $this->primaryParties;
  }
  /** @param string */
  public function setPrimaryParty($primaryParty)
  {
    $this->primaryParty = $primaryParty;
  }
  /** @return string */
  public function getPrimaryParty()
  {
    return $this->primaryParty;
  }
  /** @param string[] */
  public function setReferendumBallotResponses($referendumBallotResponses)
  {
    $this->referendumBallotResponses = $referendumBallotResponses;
  }
  /** @return string[] */
  public function getReferendumBallotResponses()
  {
    return $this->referendumBallotResponses;
  }
  /** @param string */
  public function setReferendumBrief($referendumBrief)
  {
    $this->referendumBrief = $referendumBrief;
  }
  /** @return string */
  public function getReferendumBrief()
  {
    return $this->referendumBrief;
  }
  /** @param string */
  public function setReferendumConStatement($referendumConStatement)
  {
    $this->referendumConStatement = $referendumConStatement;
  }
  /** @return string */
  public function getReferendumConStatement()
  {
    return $this->referendumConStatement;
  }
  /** @param string */
  public function setReferendumEffectOfAbstain($referendumEffectOfAbstain)
  {
    $this->referendumEffectOfAbstain = $referendumEffectOfAbstain;
  }
  /** @return string */
  public function getReferendumEffectOfAbstain()
  {
    return $this->referendumEffectOfAbstain;
  }
  /** @param string */
  public function setReferendumPassageThreshold($referendumPassageThreshold)
  {
    $this->referendumPassageThreshold = $referendumPassageThreshold;
  }
  /** @return string */
  public function getReferendumPassageThreshold()
  {
    return $this->referendumPassageThreshold;
  }
  /** @param string */
  public function setReferendumProStatement($referendumProStatement)
  {
    $this->referendumProStatement = $referendumProStatement;
  }
  /** @return string */
  public function getReferendumProStatement()
  {
    return $this->referendumProStatement;
  }
  /** @param string */
  public function setReferendumSubtitle($referendumSubtitle)
  {
    $this->referendumSubtitle = $referendumSubtitle;
  }
  /** @return string */
  public function getReferendumSubtitle()
  {
    return $this->referendumSubtitle;
  }
  /** @param string */
  public function setReferendumText($referendumText)
  {
    $this->referendumText = $referendumText;
  }
  /** @return string */
  public function getReferendumText()
  {
    return $this->referendumText;
  }
  /** @param string */
  public function setReferendumTitle($referendumTitle)
  {
    $this->referendumTitle = $referendumTitle;
  }
  /** @return string */
  public function getReferendumTitle()
  {
    return $this->referendumTitle;
  }
  /** @param string */
  public function setReferendumUrl($referendumUrl)
  {
    $this->referendumUrl = $referendumUrl;
  }
  /** @return string */
  public function getReferendumUrl()
  {
    return $this->referendumUrl;
  }
  /** @param string[] */
  public function setRoles($roles)
  {
    $this->roles = $roles;
  }
  /** @return string[] */
  public function getRoles()
  {
    return $this->roles;
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
  /** @param string */
  public function setSpecial($special)
  {
    $this->special = $special;
  }
  /** @return string */
  public function getSpecial()
  {
    return $this->special;
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

class DivisionSearchResponse extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var DivisionSearchResult[] */
  public $results;
  protected $collection_key = 'results';
  protected $resultsType = DivisionSearchResult::class;
  protected $resultsDataType = 'array';
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
  /** @param DivisionSearchResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return DivisionSearchResult[] */
  public function getResults()
  {
    return $this->results;
  }
}

class DivisionSearchResult extends \Google\Collection
{
  /** @var string[] */
  public $aliases;
  /** @var string */
  public $name;
  /** @var string */
  public $ocdId;
  protected $collection_key = 'aliases';
  /** @param string[] */
  public function setAliases($aliases)
  {
    $this->aliases = $aliases;
  }
  /** @return string[] */
  public function getAliases()
  {
    return $this->aliases;
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
  public function setOcdId($ocdId)
  {
    $this->ocdId = $ocdId;
  }
  /** @return string */
  public function getOcdId()
  {
    return $this->ocdId;
  }
}

class Election extends \Google\Model
{
  /** @var string */
  public $electionDay;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string */
  public $ocdDivisionId;
  /** @var string */
  public $shapeLookupBehavior;

  /** @param string */
  public function setElectionDay($electionDay)
  {
    $this->electionDay = $electionDay;
  }
  /** @return string */
  public function getElectionDay()
  {
    return $this->electionDay;
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
  public function setOcdDivisionId($ocdDivisionId)
  {
    $this->ocdDivisionId = $ocdDivisionId;
  }
  /** @return string */
  public function getOcdDivisionId()
  {
    return $this->ocdDivisionId;
  }
  /** @param string */
  public function setShapeLookupBehavior($shapeLookupBehavior)
  {
    $this->shapeLookupBehavior = $shapeLookupBehavior;
  }
  /** @return string */
  public function getShapeLookupBehavior()
  {
    return $this->shapeLookupBehavior;
  }
}

class ElectionOfficial extends \Google\Model
{
  /** @var string */
  public $emailAddress;
  /** @var string */
  public $faxNumber;
  /** @var string */
  public $name;
  /** @var string */
  public $officePhoneNumber;
  /** @var string */
  public $title;

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
  public function setFaxNumber($faxNumber)
  {
    $this->faxNumber = $faxNumber;
  }
  /** @return string */
  public function getFaxNumber()
  {
    return $this->faxNumber;
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
  public function setOfficePhoneNumber($officePhoneNumber)
  {
    $this->officePhoneNumber = $officePhoneNumber;
  }
  /** @return string */
  public function getOfficePhoneNumber()
  {
    return $this->officePhoneNumber;
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
}

class ElectionsQueryResponse extends \Google\Collection
{
  /** @var Election[] */
  public $elections;
  /** @var string */
  public $kind;
  protected $collection_key = 'elections';
  protected $electionsType = Election::class;
  protected $electionsDataType = 'array';
  /** @param Election[] */
  public function setElections($elections)
  {
    $this->elections = $elections;
  }
  /** @return Election[] */
  public function getElections()
  {
    return $this->elections;
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

class ElectoralDistrict extends \Google\Model
{
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string */
  public $scope;

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
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /** @return string */
  public function getScope()
  {
    return $this->scope;
  }
}

class FeatureIdProto extends \Google\Model
{
  /** @var string */
  public $cellId;
  /** @var string */
  public $fprint;
  /** @var MessageSet */
  public $temporaryData;
  protected $temporaryDataType = MessageSet::class;
  protected $temporaryDataDataType = '';
  /** @param string */
  public function setCellId($cellId)
  {
    $this->cellId = $cellId;
  }
  /** @return string */
  public function getCellId()
  {
    return $this->cellId;
  }
  /** @param string */
  public function setFprint($fprint)
  {
    $this->fprint = $fprint;
  }
  /** @return string */
  public function getFprint()
  {
    return $this->fprint;
  }
  /** @param MessageSet */
  public function setTemporaryData(MessageSet $temporaryData)
  {
    $this->temporaryData = $temporaryData;
  }
  /** @return MessageSet */
  public function getTemporaryData()
  {
    return $this->temporaryData;
  }
}

class GeocodingSummary extends \Google\Model
{
  /** @var bool */
  public $addressUnderstood;
  /** @var FeatureIdProto */
  public $featureId;
  /** @var string */
  public $featureType;
  public $positionPrecisionMeters;
  /** @var string */
  public $queryString;
  protected $featureIdType = FeatureIdProto::class;
  protected $featureIdDataType = '';
  /** @param bool */
  public function setAddressUnderstood($addressUnderstood)
  {
    $this->addressUnderstood = $addressUnderstood;
  }
  /** @return bool */
  public function getAddressUnderstood()
  {
    return $this->addressUnderstood;
  }
  /** @param FeatureIdProto */
  public function setFeatureId(FeatureIdProto $featureId)
  {
    $this->featureId = $featureId;
  }
  /** @return FeatureIdProto */
  public function getFeatureId()
  {
    return $this->featureId;
  }
  /** @param string */
  public function setFeatureType($featureType)
  {
    $this->featureType = $featureType;
  }
  /** @return string */
  public function getFeatureType()
  {
    return $this->featureType;
  }
  public function setPositionPrecisionMeters($positionPrecisionMeters)
  {
    $this->positionPrecisionMeters = $positionPrecisionMeters;
  }
  public function getPositionPrecisionMeters()
  {
    return $this->positionPrecisionMeters;
  }
  /** @param string */
  public function setQueryString($queryString)
  {
    $this->queryString = $queryString;
  }
  /** @return string */
  public function getQueryString()
  {
    return $this->queryString;
  }
}

class GeographicDivision extends \Google\Collection
{
  /** @var string[] */
  public $alsoKnownAs;
  /** @var string */
  public $name;
  /** @var string[] */
  public $officeIndices;
  protected $collection_key = 'officeIndices';
  /** @param string[] */
  public function setAlsoKnownAs($alsoKnownAs)
  {
    $this->alsoKnownAs = $alsoKnownAs;
  }
  /** @return string[] */
  public function getAlsoKnownAs()
  {
    return $this->alsoKnownAs;
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
  /** @param string[] */
  public function setOfficeIndices($officeIndices)
  {
    $this->officeIndices = $officeIndices;
  }
  /** @return string[] */
  public function getOfficeIndices()
  {
    return $this->officeIndices;
  }
}

class MessageSet extends \Google\Model
{
}

class Office extends \Google\Collection
{
  /** @var string */
  public $divisionId;
  /** @var string[] */
  public $levels;
  /** @var string */
  public $name;
  /** @var string[] */
  public $officialIndices;
  /** @var string[] */
  public $roles;
  /** @var Source[] */
  public $sources;
  protected $collection_key = 'sources';
  protected $sourcesType = Source::class;
  protected $sourcesDataType = 'array';
  /** @param string */
  public function setDivisionId($divisionId)
  {
    $this->divisionId = $divisionId;
  }
  /** @return string */
  public function getDivisionId()
  {
    return $this->divisionId;
  }
  /** @param string[] */
  public function setLevels($levels)
  {
    $this->levels = $levels;
  }
  /** @return string[] */
  public function getLevels()
  {
    return $this->levels;
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
  /** @param string[] */
  public function setOfficialIndices($officialIndices)
  {
    $this->officialIndices = $officialIndices;
  }
  /** @return string[] */
  public function getOfficialIndices()
  {
    return $this->officialIndices;
  }
  /** @param string[] */
  public function setRoles($roles)
  {
    $this->roles = $roles;
  }
  /** @return string[] */
  public function getRoles()
  {
    return $this->roles;
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

class Official extends \Google\Collection
{
  /** @var SimpleAddressType[] */
  public $address;
  /** @var Channel[] */
  public $channels;
  /** @var string[] */
  public $emails;
  /** @var GeocodingSummary[] */
  public $geocodingSummaries;
  /** @var string */
  public $name;
  /** @var string */
  public $party;
  /** @var string[] */
  public $phones;
  /** @var string */
  public $photoUrl;
  /** @var string[] */
  public $urls;
  protected $collection_key = 'urls';
  protected $addressType = SimpleAddressType::class;
  protected $addressDataType = 'array';
  protected $channelsType = Channel::class;
  protected $channelsDataType = 'array';
  protected $geocodingSummariesType = GeocodingSummary::class;
  protected $geocodingSummariesDataType = 'array';
  /** @param SimpleAddressType[] */
  public function setAddress($address)
  {
    $this->address = $address;
  }
  /** @return SimpleAddressType[] */
  public function getAddress()
  {
    return $this->address;
  }
  /** @param Channel[] */
  public function setChannels($channels)
  {
    $this->channels = $channels;
  }
  /** @return Channel[] */
  public function getChannels()
  {
    return $this->channels;
  }
  /** @param string[] */
  public function setEmails($emails)
  {
    $this->emails = $emails;
  }
  /** @return string[] */
  public function getEmails()
  {
    return $this->emails;
  }
  /** @param GeocodingSummary[] */
  public function setGeocodingSummaries($geocodingSummaries)
  {
    $this->geocodingSummaries = $geocodingSummaries;
  }
  /** @return GeocodingSummary[] */
  public function getGeocodingSummaries()
  {
    return $this->geocodingSummaries;
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
  public function setParty($party)
  {
    $this->party = $party;
  }
  /** @return string */
  public function getParty()
  {
    return $this->party;
  }
  /** @param string[] */
  public function setPhones($phones)
  {
    $this->phones = $phones;
  }
  /** @return string[] */
  public function getPhones()
  {
    return $this->phones;
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
  public function setUrls($urls)
  {
    $this->urls = $urls;
  }
  /** @return string[] */
  public function getUrls()
  {
    return $this->urls;
  }
}

class PollingLocation extends \Google\Collection
{
  /** @var SimpleAddressType */
  public $address;
  /** @var string */
  public $endDate;
  public $latitude;
  public $longitude;
  /** @var string */
  public $name;
  /** @var string */
  public $notes;
  /** @var string */
  public $pollingHours;
  /** @var Source[] */
  public $sources;
  /** @var string */
  public $startDate;
  /** @var string */
  public $voterServices;
  protected $collection_key = 'sources';
  protected $addressType = SimpleAddressType::class;
  protected $addressDataType = '';
  protected $sourcesType = Source::class;
  protected $sourcesDataType = 'array';
  /** @param SimpleAddressType */
  public function setAddress(SimpleAddressType $address)
  {
    $this->address = $address;
  }
  /** @return SimpleAddressType */
  public function getAddress()
  {
    return $this->address;
  }
  /** @param string */
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  /** @return string */
  public function getEndDate()
  {
    return $this->endDate;
  }
  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }
  public function getLatitude()
  {
    return $this->latitude;
  }
  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }
  public function getLongitude()
  {
    return $this->longitude;
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
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /** @return string */
  public function getNotes()
  {
    return $this->notes;
  }
  /** @param string */
  public function setPollingHours($pollingHours)
  {
    $this->pollingHours = $pollingHours;
  }
  /** @return string */
  public function getPollingHours()
  {
    return $this->pollingHours;
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
  /** @param string */
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  /** @return string */
  public function getStartDate()
  {
    return $this->startDate;
  }
  /** @param string */
  public function setVoterServices($voterServices)
  {
    $this->voterServices = $voterServices;
  }
  /** @return string */
  public function getVoterServices()
  {
    return $this->voterServices;
  }
}

class Precinct extends \Google\Collection
{
  /** @var string */
  public $administrationRegionId;
  /** @var string[] */
  public $contestId;
  /** @var string */
  public $datasetId;
  /** @var string[] */
  public $earlyVoteSiteId;
  /** @var string[] */
  public $electoralDistrictId;
  /** @var string */
  public $id;
  /** @var bool */
  public $mailOnly;
  /** @var string */
  public $name;
  /** @var string */
  public $number;
  /** @var string[] */
  public $ocdId;
  /** @var string[] */
  public $pollingLocationId;
  /** @var string[] */
  public $spatialBoundaryId;
  /** @var string */
  public $splitName;
  /** @var string */
  public $ward;
  protected $collection_key = 'spatialBoundaryId';
  /** @param string */
  public function setAdministrationRegionId($administrationRegionId)
  {
    $this->administrationRegionId = $administrationRegionId;
  }
  /** @return string */
  public function getAdministrationRegionId()
  {
    return $this->administrationRegionId;
  }
  /** @param string[] */
  public function setContestId($contestId)
  {
    $this->contestId = $contestId;
  }
  /** @return string[] */
  public function getContestId()
  {
    return $this->contestId;
  }
  /** @param string */
  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }
  /** @return string */
  public function getDatasetId()
  {
    return $this->datasetId;
  }
  /** @param string[] */
  public function setEarlyVoteSiteId($earlyVoteSiteId)
  {
    $this->earlyVoteSiteId = $earlyVoteSiteId;
  }
  /** @return string[] */
  public function getEarlyVoteSiteId()
  {
    return $this->earlyVoteSiteId;
  }
  /** @param string[] */
  public function setElectoralDistrictId($electoralDistrictId)
  {
    $this->electoralDistrictId = $electoralDistrictId;
  }
  /** @return string[] */
  public function getElectoralDistrictId()
  {
    return $this->electoralDistrictId;
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
  /** @param bool */
  public function setMailOnly($mailOnly)
  {
    $this->mailOnly = $mailOnly;
  }
  /** @return bool */
  public function getMailOnly()
  {
    return $this->mailOnly;
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
  public function setNumber($number)
  {
    $this->number = $number;
  }
  /** @return string */
  public function getNumber()
  {
    return $this->number;
  }
  /** @param string[] */
  public function setOcdId($ocdId)
  {
    $this->ocdId = $ocdId;
  }
  /** @return string[] */
  public function getOcdId()
  {
    return $this->ocdId;
  }
  /** @param string[] */
  public function setPollingLocationId($pollingLocationId)
  {
    $this->pollingLocationId = $pollingLocationId;
  }
  /** @return string[] */
  public function getPollingLocationId()
  {
    return $this->pollingLocationId;
  }
  /** @param string[] */
  public function setSpatialBoundaryId($spatialBoundaryId)
  {
    $this->spatialBoundaryId = $spatialBoundaryId;
  }
  /** @return string[] */
  public function getSpatialBoundaryId()
  {
    return $this->spatialBoundaryId;
  }
  /** @param string */
  public function setSplitName($splitName)
  {
    $this->splitName = $splitName;
  }
  /** @return string */
  public function getSplitName()
  {
    return $this->splitName;
  }
  /** @param string */
  public function setWard($ward)
  {
    $this->ward = $ward;
  }
  /** @return string */
  public function getWard()
  {
    return $this->ward;
  }
}

class RepresentativeInfoData extends \Google\Collection
{
  /** @var GeographicDivision[] */
  public $divisions;
  /** @var Office[] */
  public $offices;
  /** @var Official[] */
  public $officials;
  protected $collection_key = 'officials';
  protected $divisionsType = GeographicDivision::class;
  protected $divisionsDataType = 'map';
  protected $officesType = Office::class;
  protected $officesDataType = 'array';
  protected $officialsType = Official::class;
  protected $officialsDataType = 'array';
  /** @param GeographicDivision[] */
  public function setDivisions($divisions)
  {
    $this->divisions = $divisions;
  }
  /** @return GeographicDivision[] */
  public function getDivisions()
  {
    return $this->divisions;
  }
  /** @param Office[] */
  public function setOffices($offices)
  {
    $this->offices = $offices;
  }
  /** @return Office[] */
  public function getOffices()
  {
    return $this->offices;
  }
  /** @param Official[] */
  public function setOfficials($officials)
  {
    $this->officials = $officials;
  }
  /** @return Official[] */
  public function getOfficials()
  {
    return $this->officials;
  }
}

class RepresentativeInfoResponse extends \Google\Collection
{
  /** @var GeographicDivision[] */
  public $divisions;
  /** @var string */
  public $kind;
  /** @var SimpleAddressType */
  public $normalizedInput;
  /** @var Office[] */
  public $offices;
  /** @var Official[] */
  public $officials;
  protected $collection_key = 'officials';
  protected $divisionsType = GeographicDivision::class;
  protected $divisionsDataType = 'map';
  protected $normalizedInputType = SimpleAddressType::class;
  protected $normalizedInputDataType = '';
  protected $officesType = Office::class;
  protected $officesDataType = 'array';
  protected $officialsType = Official::class;
  protected $officialsDataType = 'array';
  /** @param GeographicDivision[] */
  public function setDivisions($divisions)
  {
    $this->divisions = $divisions;
  }
  /** @return GeographicDivision[] */
  public function getDivisions()
  {
    return $this->divisions;
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
  /** @param SimpleAddressType */
  public function setNormalizedInput(SimpleAddressType $normalizedInput)
  {
    $this->normalizedInput = $normalizedInput;
  }
  /** @return SimpleAddressType */
  public function getNormalizedInput()
  {
    return $this->normalizedInput;
  }
  /** @param Office[] */
  public function setOffices($offices)
  {
    $this->offices = $offices;
  }
  /** @return Office[] */
  public function getOffices()
  {
    return $this->offices;
  }
  /** @param Official[] */
  public function setOfficials($officials)
  {
    $this->officials = $officials;
  }
  /** @return Official[] */
  public function getOfficials()
  {
    return $this->officials;
  }
}

class SimpleAddressType extends \Google\Model
{
  /** @var string */
  public $city;
  /** @var string */
  public $line1;
  /** @var string */
  public $line2;
  /** @var string */
  public $line3;
  /** @var string */
  public $locationName;
  /** @var string */
  public $state;
  /** @var string */
  public $zip;

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
  public function setLine1($line1)
  {
    $this->line1 = $line1;
  }
  /** @return string */
  public function getLine1()
  {
    return $this->line1;
  }
  /** @param string */
  public function setLine2($line2)
  {
    $this->line2 = $line2;
  }
  /** @return string */
  public function getLine2()
  {
    return $this->line2;
  }
  /** @param string */
  public function setLine3($line3)
  {
    $this->line3 = $line3;
  }
  /** @return string */
  public function getLine3()
  {
    return $this->line3;
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
  /** @param string */
  public function setZip($zip)
  {
    $this->zip = $zip;
  }
  /** @return string */
  public function getZip()
  {
    return $this->zip;
  }
}

class Source extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var bool */
  public $official;

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
  public function setOfficial($official)
  {
    $this->official = $official;
  }
  /** @return bool */
  public function getOfficial()
  {
    return $this->official;
  }
}

class VoterInfoResponse extends \Google\Collection
{
  /** @var Contest[] */
  public $contests;
  /** @var PollingLocation[] */
  public $dropOffLocations;
  /** @var PollingLocation[] */
  public $earlyVoteSites;
  /** @var Election */
  public $election;
  /** @var string */
  public $kind;
  /** @var bool */
  public $mailOnly;
  /** @var SimpleAddressType */
  public $normalizedInput;
  /** @var Election[] */
  public $otherElections;
  /** @var PollingLocation[] */
  public $pollingLocations;
  /** @var string */
  public $precinctId;
  /** @var Precinct[] */
  public $precincts;
  /** @var AdministrationRegion[] */
  public $state;
  protected $collection_key = 'state';
  protected $contestsType = Contest::class;
  protected $contestsDataType = 'array';
  protected $dropOffLocationsType = PollingLocation::class;
  protected $dropOffLocationsDataType = 'array';
  protected $earlyVoteSitesType = PollingLocation::class;
  protected $earlyVoteSitesDataType = 'array';
  protected $electionType = Election::class;
  protected $electionDataType = '';
  protected $normalizedInputType = SimpleAddressType::class;
  protected $normalizedInputDataType = '';
  protected $otherElectionsType = Election::class;
  protected $otherElectionsDataType = 'array';
  protected $pollingLocationsType = PollingLocation::class;
  protected $pollingLocationsDataType = 'array';
  protected $precinctsType = Precinct::class;
  protected $precinctsDataType = 'array';
  protected $stateType = AdministrationRegion::class;
  protected $stateDataType = 'array';
  /** @param Contest[] */
  public function setContests($contests)
  {
    $this->contests = $contests;
  }
  /** @return Contest[] */
  public function getContests()
  {
    return $this->contests;
  }
  /** @param PollingLocation[] */
  public function setDropOffLocations($dropOffLocations)
  {
    $this->dropOffLocations = $dropOffLocations;
  }
  /** @return PollingLocation[] */
  public function getDropOffLocations()
  {
    return $this->dropOffLocations;
  }
  /** @param PollingLocation[] */
  public function setEarlyVoteSites($earlyVoteSites)
  {
    $this->earlyVoteSites = $earlyVoteSites;
  }
  /** @return PollingLocation[] */
  public function getEarlyVoteSites()
  {
    return $this->earlyVoteSites;
  }
  /** @param Election */
  public function setElection(Election $election)
  {
    $this->election = $election;
  }
  /** @return Election */
  public function getElection()
  {
    return $this->election;
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
  /** @param bool */
  public function setMailOnly($mailOnly)
  {
    $this->mailOnly = $mailOnly;
  }
  /** @return bool */
  public function getMailOnly()
  {
    return $this->mailOnly;
  }
  /** @param SimpleAddressType */
  public function setNormalizedInput(SimpleAddressType $normalizedInput)
  {
    $this->normalizedInput = $normalizedInput;
  }
  /** @return SimpleAddressType */
  public function getNormalizedInput()
  {
    return $this->normalizedInput;
  }
  /** @param Election[] */
  public function setOtherElections($otherElections)
  {
    $this->otherElections = $otherElections;
  }
  /** @return Election[] */
  public function getOtherElections()
  {
    return $this->otherElections;
  }
  /** @param PollingLocation[] */
  public function setPollingLocations($pollingLocations)
  {
    $this->pollingLocations = $pollingLocations;
  }
  /** @return PollingLocation[] */
  public function getPollingLocations()
  {
    return $this->pollingLocations;
  }
  /** @param string */
  public function setPrecinctId($precinctId)
  {
    $this->precinctId = $precinctId;
  }
  /** @return string */
  public function getPrecinctId()
  {
    return $this->precinctId;
  }
  /** @param Precinct[] */
  public function setPrecincts($precincts)
  {
    $this->precincts = $precincts;
  }
  /** @return Precinct[] */
  public function getPrecincts()
  {
    return $this->precincts;
  }
  /** @param AdministrationRegion[] */
  public function setState($state)
  {
    $this->state = $state;
  }
  /** @return AdministrationRegion[] */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdministrationRegion::class, 'Google_Service_CivicInfo_AdministrationRegion');
class_alias(AdministrativeBody::class, 'Google_Service_CivicInfo_AdministrativeBody');
class_alias(Candidate::class, 'Google_Service_CivicInfo_Candidate');
class_alias(Channel::class, 'Google_Service_CivicInfo_Channel');
class_alias(Contest::class, 'Google_Service_CivicInfo_Contest');
class_alias(DivisionSearchResponse::class, 'Google_Service_CivicInfo_DivisionSearchResponse');
class_alias(DivisionSearchResult::class, 'Google_Service_CivicInfo_DivisionSearchResult');
class_alias(Election::class, 'Google_Service_CivicInfo_Election');
class_alias(ElectionOfficial::class, 'Google_Service_CivicInfo_ElectionOfficial');
class_alias(ElectionsQueryResponse::class, 'Google_Service_CivicInfo_ElectionsQueryResponse');
class_alias(ElectoralDistrict::class, 'Google_Service_CivicInfo_ElectoralDistrict');
class_alias(FeatureIdProto::class, 'Google_Service_CivicInfo_FeatureIdProto');
class_alias(GeocodingSummary::class, 'Google_Service_CivicInfo_GeocodingSummary');
class_alias(GeographicDivision::class, 'Google_Service_CivicInfo_GeographicDivision');
class_alias(MessageSet::class, 'Google_Service_CivicInfo_MessageSet');
class_alias(Office::class, 'Google_Service_CivicInfo_Office');
class_alias(Official::class, 'Google_Service_CivicInfo_Official');
class_alias(PollingLocation::class, 'Google_Service_CivicInfo_PollingLocation');
class_alias(Precinct::class, 'Google_Service_CivicInfo_Precinct');
class_alias(RepresentativeInfoData::class, 'Google_Service_CivicInfo_RepresentativeInfoData');
class_alias(RepresentativeInfoResponse::class, 'Google_Service_CivicInfo_RepresentativeInfoResponse');
class_alias(SimpleAddressType::class, 'Google_Service_CivicInfo_SimpleAddressType');
class_alias(Source::class, 'Google_Service_CivicInfo_Source');
class_alias(VoterInfoResponse::class, 'Google_Service_CivicInfo_VoterInfoResponse');
