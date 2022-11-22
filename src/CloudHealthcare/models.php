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

namespace Google\Service\CloudHealthcare;

class ActivateConsentRequest extends \Google\Model
{
  /** @var string */
  public $consentArtifact;
  /** @var string */
  public $expireTime;
  /** @var string */
  public $ttl;

  /** @param string */
  public function setConsentArtifact($consentArtifact)
  {
    $this->consentArtifact = $consentArtifact;
  }
  /** @return string */
  public function getConsentArtifact()
  {
    return $this->consentArtifact;
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

class AnalyzeEntitiesRequest extends \Google\Collection
{
  /** @var string */
  public $documentContent;
  /** @var string[] */
  public $licensedVocabularies;
  protected $collection_key = 'licensedVocabularies';
  /** @param string */
  public function setDocumentContent($documentContent)
  {
    $this->documentContent = $documentContent;
  }
  /** @return string */
  public function getDocumentContent()
  {
    return $this->documentContent;
  }
  /** @param string[] */
  public function setLicensedVocabularies($licensedVocabularies)
  {
    $this->licensedVocabularies = $licensedVocabularies;
  }
  /** @return string[] */
  public function getLicensedVocabularies()
  {
    return $this->licensedVocabularies;
  }
}

class AnalyzeEntitiesResponse extends \Google\Collection
{
  /** @var Entity[] */
  public $entities;
  /** @var EntityMention[] */
  public $entityMentions;
  /** @var EntityMentionRelationship[] */
  public $relationships;
  protected $collection_key = 'relationships';
  protected $entitiesType = Entity::class;
  protected $entitiesDataType = 'array';
  protected $entityMentionsType = EntityMention::class;
  protected $entityMentionsDataType = 'array';
  protected $relationshipsType = EntityMentionRelationship::class;
  protected $relationshipsDataType = 'array';
  /** @param Entity[] */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /** @return Entity[] */
  public function getEntities()
  {
    return $this->entities;
  }
  /** @param EntityMention[] */
  public function setEntityMentions($entityMentions)
  {
    $this->entityMentions = $entityMentions;
  }
  /** @return EntityMention[] */
  public function getEntityMentions()
  {
    return $this->entityMentions;
  }
  /** @param EntityMentionRelationship[] */
  public function setRelationships($relationships)
  {
    $this->relationships = $relationships;
  }
  /** @return EntityMentionRelationship[] */
  public function getRelationships()
  {
    return $this->relationships;
  }
}

class ArchiveUserDataMappingRequest extends \Google\Model
{
}

class ArchiveUserDataMappingResponse extends \Google\Model
{
}

class Attribute extends \Google\Collection
{
  /** @var string */
  public $attributeDefinitionId;
  /** @var string[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string */
  public function setAttributeDefinitionId($attributeDefinitionId)
  {
    $this->attributeDefinitionId = $attributeDefinitionId;
  }
  /** @return string */
  public function getAttributeDefinitionId()
  {
    return $this->attributeDefinitionId;
  }
  /** @param string[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return string[] */
  public function getValues()
  {
    return $this->values;
  }
}

class AttributeDefinition extends \Google\Collection
{
  /** @var string[] */
  public $allowedValues;
  /** @var string */
  public $category;
  /** @var string[] */
  public $consentDefaultValues;
  /** @var string */
  public $dataMappingDefaultValue;
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  protected $collection_key = 'consentDefaultValues';
  /** @param string[] */
  public function setAllowedValues($allowedValues)
  {
    $this->allowedValues = $allowedValues;
  }
  /** @return string[] */
  public function getAllowedValues()
  {
    return $this->allowedValues;
  }
  /** @param string */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /** @return string */
  public function getCategory()
  {
    return $this->category;
  }
  /** @param string[] */
  public function setConsentDefaultValues($consentDefaultValues)
  {
    $this->consentDefaultValues = $consentDefaultValues;
  }
  /** @return string[] */
  public function getConsentDefaultValues()
  {
    return $this->consentDefaultValues;
  }
  /** @param string */
  public function setDataMappingDefaultValue($dataMappingDefaultValue)
  {
    $this->dataMappingDefaultValue = $dataMappingDefaultValue;
  }
  /** @return string */
  public function getDataMappingDefaultValue()
  {
    return $this->dataMappingDefaultValue;
  }
  /** @param string */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
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

class AuditConfig extends \Google\Collection
{
  /** @var AuditLogConfig[] */
  public $auditLogConfigs;
  /** @var string */
  public $service;
  protected $collection_key = 'auditLogConfigs';
  protected $auditLogConfigsType = AuditLogConfig::class;
  protected $auditLogConfigsDataType = 'array';
  /** @param AuditLogConfig[] */
  public function setAuditLogConfigs($auditLogConfigs)
  {
    $this->auditLogConfigs = $auditLogConfigs;
  }
  /** @return AuditLogConfig[] */
  public function getAuditLogConfigs()
  {
    return $this->auditLogConfigs;
  }
  /** @param string */
  public function setService($service)
  {
    $this->service = $service;
  }
  /** @return string */
  public function getService()
  {
    return $this->service;
  }
}

class AuditLogConfig extends \Google\Collection
{
  /** @var string[] */
  public $exemptedMembers;
  /** @var string */
  public $logType;
  protected $collection_key = 'exemptedMembers';
  /** @param string[] */
  public function setExemptedMembers($exemptedMembers)
  {
    $this->exemptedMembers = $exemptedMembers;
  }
  /** @return string[] */
  public function getExemptedMembers()
  {
    return $this->exemptedMembers;
  }
  /** @param string */
  public function setLogType($logType)
  {
    $this->logType = $logType;
  }
  /** @return string */
  public function getLogType()
  {
    return $this->logType;
  }
}

class Binding extends \Google\Collection
{
  /** @var Expr */
  public $condition;
  /** @var string[] */
  public $members;
  /** @var string */
  public $role;
  protected $collection_key = 'members';
  protected $conditionType = Expr::class;
  protected $conditionDataType = '';
  /** @param Expr */
  public function setCondition(Expr $condition)
  {
    $this->condition = $condition;
  }
  /** @return Expr */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param string[] */
  public function setMembers($members)
  {
    $this->members = $members;
  }
  /** @return string[] */
  public function getMembers()
  {
    return $this->members;
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

class CancelOperationRequest extends \Google\Model
{
}

class CharacterMaskConfig extends \Google\Model
{
  /** @var string */
  public $maskingCharacter;

  /** @param string */
  public function setMaskingCharacter($maskingCharacter)
  {
    $this->maskingCharacter = $maskingCharacter;
  }
  /** @return string */
  public function getMaskingCharacter()
  {
    return $this->maskingCharacter;
  }
}

class CheckDataAccessRequest extends \Google\Model
{
  /** @var ConsentList */
  public $consentList;
  /** @var string */
  public $dataId;
  /** @var string[] */
  public $requestAttributes;
  /** @var string */
  public $responseView;
  protected $consentListType = ConsentList::class;
  protected $consentListDataType = '';
  /** @param ConsentList */
  public function setConsentList(ConsentList $consentList)
  {
    $this->consentList = $consentList;
  }
  /** @return ConsentList */
  public function getConsentList()
  {
    return $this->consentList;
  }
  /** @param string */
  public function setDataId($dataId)
  {
    $this->dataId = $dataId;
  }
  /** @return string */
  public function getDataId()
  {
    return $this->dataId;
  }
  /** @param string[] */
  public function setRequestAttributes($requestAttributes)
  {
    $this->requestAttributes = $requestAttributes;
  }
  /** @return string[] */
  public function getRequestAttributes()
  {
    return $this->requestAttributes;
  }
  /** @param string */
  public function setResponseView($responseView)
  {
    $this->responseView = $responseView;
  }
  /** @return string */
  public function getResponseView()
  {
    return $this->responseView;
  }
}

class CheckDataAccessResponse extends \Google\Model
{
  /** @var ConsentEvaluation[] */
  public $consentDetails;
  /** @var bool */
  public $consented;
  protected $consentDetailsType = ConsentEvaluation::class;
  protected $consentDetailsDataType = 'map';
  /** @param ConsentEvaluation[] */
  public function setConsentDetails($consentDetails)
  {
    $this->consentDetails = $consentDetails;
  }
  /** @return ConsentEvaluation[] */
  public function getConsentDetails()
  {
    return $this->consentDetails;
  }
  /** @param bool */
  public function setConsented($consented)
  {
    $this->consented = $consented;
  }
  /** @return bool */
  public function getConsented()
  {
    return $this->consented;
  }
}

class Consent extends \Google\Collection
{
  /** @var string */
  public $consentArtifact;
  /** @var string */
  public $expireTime;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var GoogleCloudHealthcareV1ConsentPolicy[] */
  public $policies;
  /** @var string */
  public $revisionCreateTime;
  /** @var string */
  public $revisionId;
  /** @var string */
  public $state;
  /** @var string */
  public $ttl;
  /** @var string */
  public $userId;
  protected $collection_key = 'policies';
  protected $policiesType = GoogleCloudHealthcareV1ConsentPolicy::class;
  protected $policiesDataType = 'array';
  /** @param string */
  public function setConsentArtifact($consentArtifact)
  {
    $this->consentArtifact = $consentArtifact;
  }
  /** @return string */
  public function getConsentArtifact()
  {
    return $this->consentArtifact;
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
  /** @param string[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return string[] */
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
  /** @param GoogleCloudHealthcareV1ConsentPolicy[] */
  public function setPolicies($policies)
  {
    $this->policies = $policies;
  }
  /** @return GoogleCloudHealthcareV1ConsentPolicy[] */
  public function getPolicies()
  {
    return $this->policies;
  }
  /** @param string */
  public function setRevisionCreateTime($revisionCreateTime)
  {
    $this->revisionCreateTime = $revisionCreateTime;
  }
  /** @return string */
  public function getRevisionCreateTime()
  {
    return $this->revisionCreateTime;
  }
  /** @param string */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /** @return string */
  public function getRevisionId()
  {
    return $this->revisionId;
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
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /** @return string */
  public function getTtl()
  {
    return $this->ttl;
  }
  /** @param string */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return string */
  public function getUserId()
  {
    return $this->userId;
  }
}

class ConsentArtifact extends \Google\Collection
{
  /** @var Image[] */
  public $consentContentScreenshots;
  /** @var string */
  public $consentContentVersion;
  /** @var Signature */
  public $guardianSignature;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var string */
  public $userId;
  /** @var Signature */
  public $userSignature;
  /** @var Signature */
  public $witnessSignature;
  protected $collection_key = 'consentContentScreenshots';
  protected $consentContentScreenshotsType = Image::class;
  protected $consentContentScreenshotsDataType = 'array';
  protected $guardianSignatureType = Signature::class;
  protected $guardianSignatureDataType = '';
  protected $userSignatureType = Signature::class;
  protected $userSignatureDataType = '';
  protected $witnessSignatureType = Signature::class;
  protected $witnessSignatureDataType = '';
  /** @param Image[] */
  public function setConsentContentScreenshots($consentContentScreenshots)
  {
    $this->consentContentScreenshots = $consentContentScreenshots;
  }
  /** @return Image[] */
  public function getConsentContentScreenshots()
  {
    return $this->consentContentScreenshots;
  }
  /** @param string */
  public function setConsentContentVersion($consentContentVersion)
  {
    $this->consentContentVersion = $consentContentVersion;
  }
  /** @return string */
  public function getConsentContentVersion()
  {
    return $this->consentContentVersion;
  }
  /** @param Signature */
  public function setGuardianSignature(Signature $guardianSignature)
  {
    $this->guardianSignature = $guardianSignature;
  }
  /** @return Signature */
  public function getGuardianSignature()
  {
    return $this->guardianSignature;
  }
  /** @param string[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return string[] */
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
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return string */
  public function getUserId()
  {
    return $this->userId;
  }
  /** @param Signature */
  public function setUserSignature(Signature $userSignature)
  {
    $this->userSignature = $userSignature;
  }
  /** @return Signature */
  public function getUserSignature()
  {
    return $this->userSignature;
  }
  /** @param Signature */
  public function setWitnessSignature(Signature $witnessSignature)
  {
    $this->witnessSignature = $witnessSignature;
  }
  /** @return Signature */
  public function getWitnessSignature()
  {
    return $this->witnessSignature;
  }
}

class ConsentEvaluation extends \Google\Model
{
  /** @var string */
  public $evaluationResult;

  /** @param string */
  public function setEvaluationResult($evaluationResult)
  {
    $this->evaluationResult = $evaluationResult;
  }
  /** @return string */
  public function getEvaluationResult()
  {
    return $this->evaluationResult;
  }
}

class ConsentList extends \Google\Collection
{
  /** @var string[] */
  public $consents;
  protected $collection_key = 'consents';
  /** @param string[] */
  public function setConsents($consents)
  {
    $this->consents = $consents;
  }
  /** @return string[] */
  public function getConsents()
  {
    return $this->consents;
  }
}

class ConsentStore extends \Google\Model
{
  /** @var string */
  public $defaultConsentTtl;
  /** @var bool */
  public $enableConsentCreateOnUpdate;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;

  /** @param string */
  public function setDefaultConsentTtl($defaultConsentTtl)
  {
    $this->defaultConsentTtl = $defaultConsentTtl;
  }
  /** @return string */
  public function getDefaultConsentTtl()
  {
    return $this->defaultConsentTtl;
  }
  /** @param bool */
  public function setEnableConsentCreateOnUpdate($enableConsentCreateOnUpdate)
  {
    $this->enableConsentCreateOnUpdate = $enableConsentCreateOnUpdate;
  }
  /** @return bool */
  public function getEnableConsentCreateOnUpdate()
  {
    return $this->enableConsentCreateOnUpdate;
  }
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
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

class CreateMessageRequest extends \Google\Model
{
  /** @var Message */
  public $message;
  protected $messageType = Message::class;
  protected $messageDataType = '';
  /** @param Message */
  public function setMessage(Message $message)
  {
    $this->message = $message;
  }
  /** @return Message */
  public function getMessage()
  {
    return $this->message;
  }
}

class CryptoHashConfig extends \Google\Model
{
  /** @var string */
  public $cryptoKey;
  /** @var KmsWrappedCryptoKey */
  public $kmsWrapped;
  protected $kmsWrappedType = KmsWrappedCryptoKey::class;
  protected $kmsWrappedDataType = '';
  /** @param string */
  public function setCryptoKey($cryptoKey)
  {
    $this->cryptoKey = $cryptoKey;
  }
  /** @return string */
  public function getCryptoKey()
  {
    return $this->cryptoKey;
  }
  /** @param KmsWrappedCryptoKey */
  public function setKmsWrapped(KmsWrappedCryptoKey $kmsWrapped)
  {
    $this->kmsWrapped = $kmsWrapped;
  }
  /** @return KmsWrappedCryptoKey */
  public function getKmsWrapped()
  {
    return $this->kmsWrapped;
  }
}

class Dataset extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $timeZone;

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
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /** @return string */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
}

class DateShiftConfig extends \Google\Model
{
  /** @var string */
  public $cryptoKey;
  /** @var KmsWrappedCryptoKey */
  public $kmsWrapped;
  protected $kmsWrappedType = KmsWrappedCryptoKey::class;
  protected $kmsWrappedDataType = '';
  /** @param string */
  public function setCryptoKey($cryptoKey)
  {
    $this->cryptoKey = $cryptoKey;
  }
  /** @return string */
  public function getCryptoKey()
  {
    return $this->cryptoKey;
  }
  /** @param KmsWrappedCryptoKey */
  public function setKmsWrapped(KmsWrappedCryptoKey $kmsWrapped)
  {
    $this->kmsWrapped = $kmsWrapped;
  }
  /** @return KmsWrappedCryptoKey */
  public function getKmsWrapped()
  {
    return $this->kmsWrapped;
  }
}

class DeidentifiedStoreDestination extends \Google\Model
{
  /** @var DeidentifyConfig */
  public $config;
  /** @var string */
  public $store;
  protected $configType = DeidentifyConfig::class;
  protected $configDataType = '';
  /** @param DeidentifyConfig */
  public function setConfig(DeidentifyConfig $config)
  {
    $this->config = $config;
  }
  /** @return DeidentifyConfig */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param string */
  public function setStore($store)
  {
    $this->store = $store;
  }
  /** @return string */
  public function getStore()
  {
    return $this->store;
  }
}

class DeidentifyConfig extends \Google\Model
{
  /** @var DicomConfig */
  public $dicom;
  /** @var FhirConfig */
  public $fhir;
  /** @var ImageConfig */
  public $image;
  /** @var TextConfig */
  public $text;
  protected $dicomType = DicomConfig::class;
  protected $dicomDataType = '';
  protected $fhirType = FhirConfig::class;
  protected $fhirDataType = '';
  protected $imageType = ImageConfig::class;
  protected $imageDataType = '';
  protected $textType = TextConfig::class;
  protected $textDataType = '';
  /** @param DicomConfig */
  public function setDicom(DicomConfig $dicom)
  {
    $this->dicom = $dicom;
  }
  /** @return DicomConfig */
  public function getDicom()
  {
    return $this->dicom;
  }
  /** @param FhirConfig */
  public function setFhir(FhirConfig $fhir)
  {
    $this->fhir = $fhir;
  }
  /** @return FhirConfig */
  public function getFhir()
  {
    return $this->fhir;
  }
  /** @param ImageConfig */
  public function setImage(ImageConfig $image)
  {
    $this->image = $image;
  }
  /** @return ImageConfig */
  public function getImage()
  {
    return $this->image;
  }
  /** @param TextConfig */
  public function setText(TextConfig $text)
  {
    $this->text = $text;
  }
  /** @return TextConfig */
  public function getText()
  {
    return $this->text;
  }
}

class DeidentifyDatasetRequest extends \Google\Model
{
  /** @var DeidentifyConfig */
  public $config;
  /** @var string */
  public $destinationDataset;
  /** @var string */
  public $gcsConfigUri;
  protected $configType = DeidentifyConfig::class;
  protected $configDataType = '';
  /** @param DeidentifyConfig */
  public function setConfig(DeidentifyConfig $config)
  {
    $this->config = $config;
  }
  /** @return DeidentifyConfig */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param string */
  public function setDestinationDataset($destinationDataset)
  {
    $this->destinationDataset = $destinationDataset;
  }
  /** @return string */
  public function getDestinationDataset()
  {
    return $this->destinationDataset;
  }
  /** @param string */
  public function setGcsConfigUri($gcsConfigUri)
  {
    $this->gcsConfigUri = $gcsConfigUri;
  }
  /** @return string */
  public function getGcsConfigUri()
  {
    return $this->gcsConfigUri;
  }
}

class DeidentifyDicomStoreRequest extends \Google\Model
{
  /** @var DeidentifyConfig */
  public $config;
  /** @var string */
  public $destinationStore;
  /** @var DicomFilterConfig */
  public $filterConfig;
  /** @var string */
  public $gcsConfigUri;
  protected $configType = DeidentifyConfig::class;
  protected $configDataType = '';
  protected $filterConfigType = DicomFilterConfig::class;
  protected $filterConfigDataType = '';
  /** @param DeidentifyConfig */
  public function setConfig(DeidentifyConfig $config)
  {
    $this->config = $config;
  }
  /** @return DeidentifyConfig */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param string */
  public function setDestinationStore($destinationStore)
  {
    $this->destinationStore = $destinationStore;
  }
  /** @return string */
  public function getDestinationStore()
  {
    return $this->destinationStore;
  }
  /** @param DicomFilterConfig */
  public function setFilterConfig(DicomFilterConfig $filterConfig)
  {
    $this->filterConfig = $filterConfig;
  }
  /** @return DicomFilterConfig */
  public function getFilterConfig()
  {
    return $this->filterConfig;
  }
  /** @param string */
  public function setGcsConfigUri($gcsConfigUri)
  {
    $this->gcsConfigUri = $gcsConfigUri;
  }
  /** @return string */
  public function getGcsConfigUri()
  {
    return $this->gcsConfigUri;
  }
}

class DeidentifyFhirStoreRequest extends \Google\Model
{
  /** @var DeidentifyConfig */
  public $config;
  /** @var string */
  public $destinationStore;
  /** @var string */
  public $gcsConfigUri;
  /** @var FhirFilter */
  public $resourceFilter;
  /** @var bool */
  public $skipModifiedResources;
  protected $configType = DeidentifyConfig::class;
  protected $configDataType = '';
  protected $resourceFilterType = FhirFilter::class;
  protected $resourceFilterDataType = '';
  /** @param DeidentifyConfig */
  public function setConfig(DeidentifyConfig $config)
  {
    $this->config = $config;
  }
  /** @return DeidentifyConfig */
  public function getConfig()
  {
    return $this->config;
  }
  /** @param string */
  public function setDestinationStore($destinationStore)
  {
    $this->destinationStore = $destinationStore;
  }
  /** @return string */
  public function getDestinationStore()
  {
    return $this->destinationStore;
  }
  /** @param string */
  public function setGcsConfigUri($gcsConfigUri)
  {
    $this->gcsConfigUri = $gcsConfigUri;
  }
  /** @return string */
  public function getGcsConfigUri()
  {
    return $this->gcsConfigUri;
  }
  /** @param FhirFilter */
  public function setResourceFilter(FhirFilter $resourceFilter)
  {
    $this->resourceFilter = $resourceFilter;
  }
  /** @return FhirFilter */
  public function getResourceFilter()
  {
    return $this->resourceFilter;
  }
  /** @param bool */
  public function setSkipModifiedResources($skipModifiedResources)
  {
    $this->skipModifiedResources = $skipModifiedResources;
  }
  /** @return bool */
  public function getSkipModifiedResources()
  {
    return $this->skipModifiedResources;
  }
}

class DeidentifySummary extends \Google\Model
{
}

class DicomConfig extends \Google\Model
{
  /** @var string */
  public $filterProfile;
  /** @var TagFilterList */
  public $keepList;
  /** @var TagFilterList */
  public $removeList;
  /** @var bool */
  public $skipIdRedaction;
  protected $keepListType = TagFilterList::class;
  protected $keepListDataType = '';
  protected $removeListType = TagFilterList::class;
  protected $removeListDataType = '';
  /** @param string */
  public function setFilterProfile($filterProfile)
  {
    $this->filterProfile = $filterProfile;
  }
  /** @return string */
  public function getFilterProfile()
  {
    return $this->filterProfile;
  }
  /** @param TagFilterList */
  public function setKeepList(TagFilterList $keepList)
  {
    $this->keepList = $keepList;
  }
  /** @return TagFilterList */
  public function getKeepList()
  {
    return $this->keepList;
  }
  /** @param TagFilterList */
  public function setRemoveList(TagFilterList $removeList)
  {
    $this->removeList = $removeList;
  }
  /** @return TagFilterList */
  public function getRemoveList()
  {
    return $this->removeList;
  }
  /** @param bool */
  public function setSkipIdRedaction($skipIdRedaction)
  {
    $this->skipIdRedaction = $skipIdRedaction;
  }
  /** @return bool */
  public function getSkipIdRedaction()
  {
    return $this->skipIdRedaction;
  }
}

class DicomFilterConfig extends \Google\Model
{
  /** @var string */
  public $resourcePathsGcsUri;

  /** @param string */
  public function setResourcePathsGcsUri($resourcePathsGcsUri)
  {
    $this->resourcePathsGcsUri = $resourcePathsGcsUri;
  }
  /** @return string */
  public function getResourcePathsGcsUri()
  {
    return $this->resourcePathsGcsUri;
  }
}

class DicomStore extends \Google\Model
{
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var NotificationConfig */
  public $notificationConfig;
  protected $notificationConfigType = NotificationConfig::class;
  protected $notificationConfigDataType = '';
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
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
  /** @param NotificationConfig */
  public function setNotificationConfig(NotificationConfig $notificationConfig)
  {
    $this->notificationConfig = $notificationConfig;
  }
  /** @return NotificationConfig */
  public function getNotificationConfig()
  {
    return $this->notificationConfig;
  }
}

class Entity extends \Google\Collection
{
  /** @var string */
  public $entityId;
  /** @var string */
  public $preferredTerm;
  /** @var string[] */
  public $vocabularyCodes;
  protected $collection_key = 'vocabularyCodes';
  /** @param string */
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
  }
  /** @param string */
  public function setPreferredTerm($preferredTerm)
  {
    $this->preferredTerm = $preferredTerm;
  }
  /** @return string */
  public function getPreferredTerm()
  {
    return $this->preferredTerm;
  }
  /** @param string[] */
  public function setVocabularyCodes($vocabularyCodes)
  {
    $this->vocabularyCodes = $vocabularyCodes;
  }
  /** @return string[] */
  public function getVocabularyCodes()
  {
    return $this->vocabularyCodes;
  }
}

class EntityMention extends \Google\Collection
{
  /** @var Feature */
  public $certaintyAssessment;
  public $confidence;
  /** @var LinkedEntity[] */
  public $linkedEntities;
  /** @var string */
  public $mentionId;
  /** @var Feature */
  public $subject;
  /** @var Feature */
  public $temporalAssessment;
  /** @var TextSpan */
  public $text;
  /** @var string */
  public $type;
  protected $collection_key = 'linkedEntities';
  protected $certaintyAssessmentType = Feature::class;
  protected $certaintyAssessmentDataType = '';
  protected $linkedEntitiesType = LinkedEntity::class;
  protected $linkedEntitiesDataType = 'array';
  protected $subjectType = Feature::class;
  protected $subjectDataType = '';
  protected $temporalAssessmentType = Feature::class;
  protected $temporalAssessmentDataType = '';
  protected $textType = TextSpan::class;
  protected $textDataType = '';
  /** @param Feature */
  public function setCertaintyAssessment(Feature $certaintyAssessment)
  {
    $this->certaintyAssessment = $certaintyAssessment;
  }
  /** @return Feature */
  public function getCertaintyAssessment()
  {
    return $this->certaintyAssessment;
  }
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param LinkedEntity[] */
  public function setLinkedEntities($linkedEntities)
  {
    $this->linkedEntities = $linkedEntities;
  }
  /** @return LinkedEntity[] */
  public function getLinkedEntities()
  {
    return $this->linkedEntities;
  }
  /** @param string */
  public function setMentionId($mentionId)
  {
    $this->mentionId = $mentionId;
  }
  /** @return string */
  public function getMentionId()
  {
    return $this->mentionId;
  }
  /** @param Feature */
  public function setSubject(Feature $subject)
  {
    $this->subject = $subject;
  }
  /** @return Feature */
  public function getSubject()
  {
    return $this->subject;
  }
  /** @param Feature */
  public function setTemporalAssessment(Feature $temporalAssessment)
  {
    $this->temporalAssessment = $temporalAssessment;
  }
  /** @return Feature */
  public function getTemporalAssessment()
  {
    return $this->temporalAssessment;
  }
  /** @param TextSpan */
  public function setText(TextSpan $text)
  {
    $this->text = $text;
  }
  /** @return TextSpan */
  public function getText()
  {
    return $this->text;
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

class EntityMentionRelationship extends \Google\Model
{
  public $confidence;
  /** @var string */
  public $objectId;
  /** @var string */
  public $subjectId;

  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param string */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return string */
  public function getObjectId()
  {
    return $this->objectId;
  }
  /** @param string */
  public function setSubjectId($subjectId)
  {
    $this->subjectId = $subjectId;
  }
  /** @return string */
  public function getSubjectId()
  {
    return $this->subjectId;
  }
}

class EvaluateUserConsentsRequest extends \Google\Model
{
  /** @var ConsentList */
  public $consentList;
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var string[] */
  public $requestAttributes;
  /** @var string[] */
  public $resourceAttributes;
  /** @var string */
  public $responseView;
  /** @var string */
  public $userId;
  protected $consentListType = ConsentList::class;
  protected $consentListDataType = '';
  /** @param ConsentList */
  public function setConsentList(ConsentList $consentList)
  {
    $this->consentList = $consentList;
  }
  /** @return ConsentList */
  public function getConsentList()
  {
    return $this->consentList;
  }
  /** @param int */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /** @return int */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /** @param string */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /** @return string */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /** @param string[] */
  public function setRequestAttributes($requestAttributes)
  {
    $this->requestAttributes = $requestAttributes;
  }
  /** @return string[] */
  public function getRequestAttributes()
  {
    return $this->requestAttributes;
  }
  /** @param string[] */
  public function setResourceAttributes($resourceAttributes)
  {
    $this->resourceAttributes = $resourceAttributes;
  }
  /** @return string[] */
  public function getResourceAttributes()
  {
    return $this->resourceAttributes;
  }
  /** @param string */
  public function setResponseView($responseView)
  {
    $this->responseView = $responseView;
  }
  /** @return string */
  public function getResponseView()
  {
    return $this->responseView;
  }
  /** @param string */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return string */
  public function getUserId()
  {
    return $this->userId;
  }
}

class EvaluateUserConsentsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Result[] */
  public $results;
  protected $collection_key = 'results';
  protected $resultsType = Result::class;
  protected $resultsDataType = 'array';
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
  /** @param Result[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return Result[] */
  public function getResults()
  {
    return $this->results;
  }
}

class ExportDicomDataRequest extends \Google\Model
{
  /** @var GoogleCloudHealthcareV1DicomBigQueryDestination */
  public $bigqueryDestination;
  /** @var GoogleCloudHealthcareV1DicomGcsDestination */
  public $gcsDestination;
  protected $bigqueryDestinationType = GoogleCloudHealthcareV1DicomBigQueryDestination::class;
  protected $bigqueryDestinationDataType = '';
  protected $gcsDestinationType = GoogleCloudHealthcareV1DicomGcsDestination::class;
  protected $gcsDestinationDataType = '';
  /** @param GoogleCloudHealthcareV1DicomBigQueryDestination */
  public function setBigqueryDestination(GoogleCloudHealthcareV1DicomBigQueryDestination $bigqueryDestination)
  {
    $this->bigqueryDestination = $bigqueryDestination;
  }
  /** @return GoogleCloudHealthcareV1DicomBigQueryDestination */
  public function getBigqueryDestination()
  {
    return $this->bigqueryDestination;
  }
  /** @param GoogleCloudHealthcareV1DicomGcsDestination */
  public function setGcsDestination(GoogleCloudHealthcareV1DicomGcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GoogleCloudHealthcareV1DicomGcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
}

class ExportDicomDataResponse extends \Google\Model
{
}

class ExportMessagesRequest extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var GcsDestination */
  public $gcsDestination;
  /** @var string */
  public $startTime;
  protected $gcsDestinationType = GcsDestination::class;
  protected $gcsDestinationDataType = '';
  /** @param string */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param GcsDestination */
  public function setGcsDestination(GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
  /** @param string */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return string */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class ExportMessagesResponse extends \Google\Model
{
}

class ExportResourcesRequest extends \Google\Model
{
  /** @var string */
  public $since;
  /** @var string */
  public $type;
  /** @var GoogleCloudHealthcareV1FhirBigQueryDestination */
  public $bigqueryDestination;
  /** @var GoogleCloudHealthcareV1FhirGcsDestination */
  public $gcsDestination;
  protected $internal_gapi_mappings = [
        "since" => "_since",
        "type" => "_type",
  ];
  protected $bigqueryDestinationType = GoogleCloudHealthcareV1FhirBigQueryDestination::class;
  protected $bigqueryDestinationDataType = '';
  protected $gcsDestinationType = GoogleCloudHealthcareV1FhirGcsDestination::class;
  protected $gcsDestinationDataType = '';
  /** @param string */
  public function setSince($since)
  {
    $this->since = $since;
  }
  /** @return string */
  public function getSince()
  {
    return $this->since;
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
  /** @param GoogleCloudHealthcareV1FhirBigQueryDestination */
  public function setBigqueryDestination(GoogleCloudHealthcareV1FhirBigQueryDestination $bigqueryDestination)
  {
    $this->bigqueryDestination = $bigqueryDestination;
  }
  /** @return GoogleCloudHealthcareV1FhirBigQueryDestination */
  public function getBigqueryDestination()
  {
    return $this->bigqueryDestination;
  }
  /** @param GoogleCloudHealthcareV1FhirGcsDestination */
  public function setGcsDestination(GoogleCloudHealthcareV1FhirGcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GoogleCloudHealthcareV1FhirGcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
}

class ExportResourcesResponse extends \Google\Model
{
}

class Expr extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $expression;
  /** @var string */
  public $location;
  /** @var string */
  public $title;

  /** @param string */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /** @return string */
  public function getDescription()
  {
    return $this->description;
  }
  /** @param string */
  public function setExpression($expression)
  {
    $this->expression = $expression;
  }
  /** @return string */
  public function getExpression()
  {
    return $this->expression;
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

class Feature extends \Google\Model
{
  public $confidence;
  /** @var string */
  public $value;

  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  public function getConfidence()
  {
    return $this->confidence;
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

class FhirConfig extends \Google\Collection
{
  /** @var bool */
  public $defaultKeepExtensions;
  /** @var FieldMetadata[] */
  public $fieldMetadataList;
  protected $collection_key = 'fieldMetadataList';
  protected $fieldMetadataListType = FieldMetadata::class;
  protected $fieldMetadataListDataType = 'array';
  /** @param bool */
  public function setDefaultKeepExtensions($defaultKeepExtensions)
  {
    $this->defaultKeepExtensions = $defaultKeepExtensions;
  }
  /** @return bool */
  public function getDefaultKeepExtensions()
  {
    return $this->defaultKeepExtensions;
  }
  /** @param FieldMetadata[] */
  public function setFieldMetadataList($fieldMetadataList)
  {
    $this->fieldMetadataList = $fieldMetadataList;
  }
  /** @return FieldMetadata[] */
  public function getFieldMetadataList()
  {
    return $this->fieldMetadataList;
  }
}

class FhirFilter extends \Google\Model
{
  /** @var Resources */
  public $resources;
  protected $resourcesType = Resources::class;
  protected $resourcesDataType = '';
  /** @param Resources */
  public function setResources(Resources $resources)
  {
    $this->resources = $resources;
  }
  /** @return Resources */
  public function getResources()
  {
    return $this->resources;
  }
}

class FhirStore extends \Google\Collection
{
  /** @var string */
  public $complexDataTypeReferenceParsing;
  /** @var bool */
  public $defaultSearchHandlingStrict;
  /** @var bool */
  public $disableReferentialIntegrity;
  /** @var bool */
  public $disableResourceVersioning;
  /** @var bool */
  public $enableUpdateCreate;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var NotificationConfig */
  public $notificationConfig;
  /** @var StreamConfig[] */
  public $streamConfigs;
  /** @var ValidationConfig */
  public $validationConfig;
  /** @var string */
  public $version;
  protected $collection_key = 'streamConfigs';
  protected $notificationConfigType = NotificationConfig::class;
  protected $notificationConfigDataType = '';
  protected $streamConfigsType = StreamConfig::class;
  protected $streamConfigsDataType = 'array';
  protected $validationConfigType = ValidationConfig::class;
  protected $validationConfigDataType = '';
  /** @param string */
  public function setComplexDataTypeReferenceParsing($complexDataTypeReferenceParsing)
  {
    $this->complexDataTypeReferenceParsing = $complexDataTypeReferenceParsing;
  }
  /** @return string */
  public function getComplexDataTypeReferenceParsing()
  {
    return $this->complexDataTypeReferenceParsing;
  }
  /** @param bool */
  public function setDefaultSearchHandlingStrict($defaultSearchHandlingStrict)
  {
    $this->defaultSearchHandlingStrict = $defaultSearchHandlingStrict;
  }
  /** @return bool */
  public function getDefaultSearchHandlingStrict()
  {
    return $this->defaultSearchHandlingStrict;
  }
  /** @param bool */
  public function setDisableReferentialIntegrity($disableReferentialIntegrity)
  {
    $this->disableReferentialIntegrity = $disableReferentialIntegrity;
  }
  /** @return bool */
  public function getDisableReferentialIntegrity()
  {
    return $this->disableReferentialIntegrity;
  }
  /** @param bool */
  public function setDisableResourceVersioning($disableResourceVersioning)
  {
    $this->disableResourceVersioning = $disableResourceVersioning;
  }
  /** @return bool */
  public function getDisableResourceVersioning()
  {
    return $this->disableResourceVersioning;
  }
  /** @param bool */
  public function setEnableUpdateCreate($enableUpdateCreate)
  {
    $this->enableUpdateCreate = $enableUpdateCreate;
  }
  /** @return bool */
  public function getEnableUpdateCreate()
  {
    return $this->enableUpdateCreate;
  }
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
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
  /** @param NotificationConfig */
  public function setNotificationConfig(NotificationConfig $notificationConfig)
  {
    $this->notificationConfig = $notificationConfig;
  }
  /** @return NotificationConfig */
  public function getNotificationConfig()
  {
    return $this->notificationConfig;
  }
  /** @param StreamConfig[] */
  public function setStreamConfigs($streamConfigs)
  {
    $this->streamConfigs = $streamConfigs;
  }
  /** @return StreamConfig[] */
  public function getStreamConfigs()
  {
    return $this->streamConfigs;
  }
  /** @param ValidationConfig */
  public function setValidationConfig(ValidationConfig $validationConfig)
  {
    $this->validationConfig = $validationConfig;
  }
  /** @return ValidationConfig */
  public function getValidationConfig()
  {
    return $this->validationConfig;
  }
  /** @param string */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return string */
  public function getVersion()
  {
    return $this->version;
  }
}

class Field extends \Google\Model
{
  /** @var int */
  public $maxOccurs;
  /** @var int */
  public $minOccurs;
  /** @var string */
  public $name;
  /** @var string */
  public $table;
  /** @var string */
  public $type;

  /** @param int */
  public function setMaxOccurs($maxOccurs)
  {
    $this->maxOccurs = $maxOccurs;
  }
  /** @return int */
  public function getMaxOccurs()
  {
    return $this->maxOccurs;
  }
  /** @param int */
  public function setMinOccurs($minOccurs)
  {
    $this->minOccurs = $minOccurs;
  }
  /** @return int */
  public function getMinOccurs()
  {
    return $this->minOccurs;
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
  public function setTable($table)
  {
    $this->table = $table;
  }
  /** @return string */
  public function getTable()
  {
    return $this->table;
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

class FieldMetadata extends \Google\Collection
{
  /** @var string */
  public $action;
  /** @var string[] */
  public $paths;
  protected $collection_key = 'paths';
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
  /** @param string[] */
  public function setPaths($paths)
  {
    $this->paths = $paths;
  }
  /** @return string[] */
  public function getPaths()
  {
    return $this->paths;
  }
}

class GcsDestination extends \Google\Model
{
  /** @var string */
  public $contentStructure;
  /** @var string */
  public $messageView;
  /** @var string */
  public $uriPrefix;

  /** @param string */
  public function setContentStructure($contentStructure)
  {
    $this->contentStructure = $contentStructure;
  }
  /** @return string */
  public function getContentStructure()
  {
    return $this->contentStructure;
  }
  /** @param string */
  public function setMessageView($messageView)
  {
    $this->messageView = $messageView;
  }
  /** @return string */
  public function getMessageView()
  {
    return $this->messageView;
  }
  /** @param string */
  public function setUriPrefix($uriPrefix)
  {
    $this->uriPrefix = $uriPrefix;
  }
  /** @return string */
  public function getUriPrefix()
  {
    return $this->uriPrefix;
  }
}

class GcsSource extends \Google\Model
{
  /** @var string */
  public $uri;

  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class GoogleCloudHealthcareV1ConsentGcsDestination extends \Google\Model
{
  /** @var string */
  public $uriPrefix;

  /** @param string */
  public function setUriPrefix($uriPrefix)
  {
    $this->uriPrefix = $uriPrefix;
  }
  /** @return string */
  public function getUriPrefix()
  {
    return $this->uriPrefix;
  }
}

class GoogleCloudHealthcareV1ConsentPolicy extends \Google\Collection
{
  /** @var Expr */
  public $authorizationRule;
  /** @var Attribute[] */
  public $resourceAttributes;
  protected $collection_key = 'resourceAttributes';
  protected $authorizationRuleType = Expr::class;
  protected $authorizationRuleDataType = '';
  protected $resourceAttributesType = Attribute::class;
  protected $resourceAttributesDataType = 'array';
  /** @param Expr */
  public function setAuthorizationRule(Expr $authorizationRule)
  {
    $this->authorizationRule = $authorizationRule;
  }
  /** @return Expr */
  public function getAuthorizationRule()
  {
    return $this->authorizationRule;
  }
  /** @param Attribute[] */
  public function setResourceAttributes($resourceAttributes)
  {
    $this->resourceAttributes = $resourceAttributes;
  }
  /** @return Attribute[] */
  public function getResourceAttributes()
  {
    return $this->resourceAttributes;
  }
}

class GoogleCloudHealthcareV1DeidentifyDeidentifyDicomStoreSummary extends \Google\Model
{
}

class GoogleCloudHealthcareV1DeidentifyDeidentifyFhirStoreSummary extends \Google\Model
{
}

class GoogleCloudHealthcareV1DicomBigQueryDestination extends \Google\Model
{
  /** @var bool */
  public $force;
  /** @var string */
  public $tableUri;
  /** @var string */
  public $writeDisposition;

  /** @param bool */
  public function setForce($force)
  {
    $this->force = $force;
  }
  /** @return bool */
  public function getForce()
  {
    return $this->force;
  }
  /** @param string */
  public function setTableUri($tableUri)
  {
    $this->tableUri = $tableUri;
  }
  /** @return string */
  public function getTableUri()
  {
    return $this->tableUri;
  }
  /** @param string */
  public function setWriteDisposition($writeDisposition)
  {
    $this->writeDisposition = $writeDisposition;
  }
  /** @return string */
  public function getWriteDisposition()
  {
    return $this->writeDisposition;
  }
}

class GoogleCloudHealthcareV1DicomGcsDestination extends \Google\Model
{
  /** @var string */
  public $mimeType;
  /** @var string */
  public $uriPrefix;

  /** @param string */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /** @return string */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /** @param string */
  public function setUriPrefix($uriPrefix)
  {
    $this->uriPrefix = $uriPrefix;
  }
  /** @return string */
  public function getUriPrefix()
  {
    return $this->uriPrefix;
  }
}

class GoogleCloudHealthcareV1DicomGcsSource extends \Google\Model
{
  /** @var string */
  public $uri;

  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class GoogleCloudHealthcareV1FhirBigQueryDestination extends \Google\Model
{
  /** @var string */
  public $datasetUri;
  /** @var bool */
  public $force;
  /** @var SchemaConfig */
  public $schemaConfig;
  /** @var string */
  public $writeDisposition;
  protected $schemaConfigType = SchemaConfig::class;
  protected $schemaConfigDataType = '';
  /** @param string */
  public function setDatasetUri($datasetUri)
  {
    $this->datasetUri = $datasetUri;
  }
  /** @return string */
  public function getDatasetUri()
  {
    return $this->datasetUri;
  }
  /** @param bool */
  public function setForce($force)
  {
    $this->force = $force;
  }
  /** @return bool */
  public function getForce()
  {
    return $this->force;
  }
  /** @param SchemaConfig */
  public function setSchemaConfig(SchemaConfig $schemaConfig)
  {
    $this->schemaConfig = $schemaConfig;
  }
  /** @return SchemaConfig */
  public function getSchemaConfig()
  {
    return $this->schemaConfig;
  }
  /** @param string */
  public function setWriteDisposition($writeDisposition)
  {
    $this->writeDisposition = $writeDisposition;
  }
  /** @return string */
  public function getWriteDisposition()
  {
    return $this->writeDisposition;
  }
}

class GoogleCloudHealthcareV1FhirGcsDestination extends \Google\Model
{
  /** @var string */
  public $uriPrefix;

  /** @param string */
  public function setUriPrefix($uriPrefix)
  {
    $this->uriPrefix = $uriPrefix;
  }
  /** @return string */
  public function getUriPrefix()
  {
    return $this->uriPrefix;
  }
}

class GoogleCloudHealthcareV1FhirGcsSource extends \Google\Model
{
  /** @var string */
  public $uri;

  /** @param string */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /** @return string */
  public function getUri()
  {
    return $this->uri;
  }
}

class GroupOrSegment extends \Google\Model
{
  /** @var SchemaGroup */
  public $group;
  /** @var SchemaSegment */
  public $segment;
  protected $groupType = SchemaGroup::class;
  protected $groupDataType = '';
  protected $segmentType = SchemaSegment::class;
  protected $segmentDataType = '';
  /** @param SchemaGroup */
  public function setGroup(SchemaGroup $group)
  {
    $this->group = $group;
  }
  /** @return SchemaGroup */
  public function getGroup()
  {
    return $this->group;
  }
  /** @param SchemaSegment */
  public function setSegment(SchemaSegment $segment)
  {
    $this->segment = $segment;
  }
  /** @return SchemaSegment */
  public function getSegment()
  {
    return $this->segment;
  }
}

class HealthcareEmpty extends \Google\Model
{
}

class Hl7SchemaConfig extends \Google\Collection
{
  /** @var SchemaGroup[] */
  public $messageSchemaConfigs;
  /** @var VersionSource[] */
  public $version;
  protected $collection_key = 'version';
  protected $messageSchemaConfigsType = SchemaGroup::class;
  protected $messageSchemaConfigsDataType = 'map';
  protected $versionType = VersionSource::class;
  protected $versionDataType = 'array';
  /** @param SchemaGroup[] */
  public function setMessageSchemaConfigs($messageSchemaConfigs)
  {
    $this->messageSchemaConfigs = $messageSchemaConfigs;
  }
  /** @return SchemaGroup[] */
  public function getMessageSchemaConfigs()
  {
    return $this->messageSchemaConfigs;
  }
  /** @param VersionSource[] */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return VersionSource[] */
  public function getVersion()
  {
    return $this->version;
  }
}

class Hl7TypesConfig extends \Google\Collection
{
  /** @var Type[] */
  public $type;
  /** @var VersionSource[] */
  public $version;
  protected $collection_key = 'version';
  protected $typeType = Type::class;
  protected $typeDataType = 'array';
  protected $versionType = VersionSource::class;
  protected $versionDataType = 'array';
  /** @param Type[] */
  public function setType($type)
  {
    $this->type = $type;
  }
  /** @return Type[] */
  public function getType()
  {
    return $this->type;
  }
  /** @param VersionSource[] */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return VersionSource[] */
  public function getVersion()
  {
    return $this->version;
  }
}

class Hl7V2NotificationConfig extends \Google\Model
{
  /** @var string */
  public $filter;
  /** @var string */
  public $pubsubTopic;

  /** @param string */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /** @return string */
  public function getFilter()
  {
    return $this->filter;
  }
  /** @param string */
  public function setPubsubTopic($pubsubTopic)
  {
    $this->pubsubTopic = $pubsubTopic;
  }
  /** @return string */
  public function getPubsubTopic()
  {
    return $this->pubsubTopic;
  }
}

class Hl7V2Store extends \Google\Collection
{
  /** @var string[] */
  public $labels;
  /** @var string */
  public $name;
  /** @var Hl7V2NotificationConfig[] */
  public $notificationConfigs;
  /** @var ParserConfig */
  public $parserConfig;
  /** @var bool */
  public $rejectDuplicateMessage;
  protected $collection_key = 'notificationConfigs';
  protected $notificationConfigsType = Hl7V2NotificationConfig::class;
  protected $notificationConfigsDataType = 'array';
  protected $parserConfigType = ParserConfig::class;
  protected $parserConfigDataType = '';
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
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
  /** @param Hl7V2NotificationConfig[] */
  public function setNotificationConfigs($notificationConfigs)
  {
    $this->notificationConfigs = $notificationConfigs;
  }
  /** @return Hl7V2NotificationConfig[] */
  public function getNotificationConfigs()
  {
    return $this->notificationConfigs;
  }
  /** @param ParserConfig */
  public function setParserConfig(ParserConfig $parserConfig)
  {
    $this->parserConfig = $parserConfig;
  }
  /** @return ParserConfig */
  public function getParserConfig()
  {
    return $this->parserConfig;
  }
  /** @param bool */
  public function setRejectDuplicateMessage($rejectDuplicateMessage)
  {
    $this->rejectDuplicateMessage = $rejectDuplicateMessage;
  }
  /** @return bool */
  public function getRejectDuplicateMessage()
  {
    return $this->rejectDuplicateMessage;
  }
}

class HttpBody extends \Google\Collection
{
  /** @var string */
  public $contentType;
  /** @var string */
  public $data;
  /** @var array[] */
  public $extensions;
  protected $collection_key = 'extensions';
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
  /** @param string */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
  }
  /** @param array[] */
  public function setExtensions($extensions)
  {
    $this->extensions = $extensions;
  }
  /** @return array[] */
  public function getExtensions()
  {
    return $this->extensions;
  }
}

class Image extends \Google\Model
{
  /** @var string */
  public $gcsUri;
  /** @var string */
  public $rawBytes;

  /** @param string */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /** @return string */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
  /** @param string */
  public function setRawBytes($rawBytes)
  {
    $this->rawBytes = $rawBytes;
  }
  /** @return string */
  public function getRawBytes()
  {
    return $this->rawBytes;
  }
}

class ImageConfig extends \Google\Model
{
  /** @var string */
  public $textRedactionMode;

  /** @param string */
  public function setTextRedactionMode($textRedactionMode)
  {
    $this->textRedactionMode = $textRedactionMode;
  }
  /** @return string */
  public function getTextRedactionMode()
  {
    return $this->textRedactionMode;
  }
}

class ImportDicomDataRequest extends \Google\Model
{
  /** @var GoogleCloudHealthcareV1DicomGcsSource */
  public $gcsSource;
  protected $gcsSourceType = GoogleCloudHealthcareV1DicomGcsSource::class;
  protected $gcsSourceDataType = '';
  /** @param GoogleCloudHealthcareV1DicomGcsSource */
  public function setGcsSource(GoogleCloudHealthcareV1DicomGcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudHealthcareV1DicomGcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
}

class ImportDicomDataResponse extends \Google\Model
{
}

class ImportMessagesRequest extends \Google\Model
{
  /** @var GcsSource */
  public $gcsSource;
  protected $gcsSourceType = GcsSource::class;
  protected $gcsSourceDataType = '';
  /** @param GcsSource */
  public function setGcsSource(GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
}

class ImportMessagesResponse extends \Google\Model
{
}

class ImportResourcesRequest extends \Google\Model
{
  /** @var string */
  public $contentStructure;
  /** @var GoogleCloudHealthcareV1FhirGcsSource */
  public $gcsSource;
  protected $gcsSourceType = GoogleCloudHealthcareV1FhirGcsSource::class;
  protected $gcsSourceDataType = '';
  /** @param string */
  public function setContentStructure($contentStructure)
  {
    $this->contentStructure = $contentStructure;
  }
  /** @return string */
  public function getContentStructure()
  {
    return $this->contentStructure;
  }
  /** @param GoogleCloudHealthcareV1FhirGcsSource */
  public function setGcsSource(GoogleCloudHealthcareV1FhirGcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudHealthcareV1FhirGcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
}

class ImportResourcesResponse extends \Google\Model
{
}

class InfoTypeTransformation extends \Google\Collection
{
  /** @var CharacterMaskConfig */
  public $characterMaskConfig;
  /** @var CryptoHashConfig */
  public $cryptoHashConfig;
  /** @var DateShiftConfig */
  public $dateShiftConfig;
  /** @var string[] */
  public $infoTypes;
  /** @var RedactConfig */
  public $redactConfig;
  /** @var ReplaceWithInfoTypeConfig */
  public $replaceWithInfoTypeConfig;
  protected $collection_key = 'infoTypes';
  protected $characterMaskConfigType = CharacterMaskConfig::class;
  protected $characterMaskConfigDataType = '';
  protected $cryptoHashConfigType = CryptoHashConfig::class;
  protected $cryptoHashConfigDataType = '';
  protected $dateShiftConfigType = DateShiftConfig::class;
  protected $dateShiftConfigDataType = '';
  protected $redactConfigType = RedactConfig::class;
  protected $redactConfigDataType = '';
  protected $replaceWithInfoTypeConfigType = ReplaceWithInfoTypeConfig::class;
  protected $replaceWithInfoTypeConfigDataType = '';
  /** @param CharacterMaskConfig */
  public function setCharacterMaskConfig(CharacterMaskConfig $characterMaskConfig)
  {
    $this->characterMaskConfig = $characterMaskConfig;
  }
  /** @return CharacterMaskConfig */
  public function getCharacterMaskConfig()
  {
    return $this->characterMaskConfig;
  }
  /** @param CryptoHashConfig */
  public function setCryptoHashConfig(CryptoHashConfig $cryptoHashConfig)
  {
    $this->cryptoHashConfig = $cryptoHashConfig;
  }
  /** @return CryptoHashConfig */
  public function getCryptoHashConfig()
  {
    return $this->cryptoHashConfig;
  }
  /** @param DateShiftConfig */
  public function setDateShiftConfig(DateShiftConfig $dateShiftConfig)
  {
    $this->dateShiftConfig = $dateShiftConfig;
  }
  /** @return DateShiftConfig */
  public function getDateShiftConfig()
  {
    return $this->dateShiftConfig;
  }
  /** @param string[] */
  public function setInfoTypes($infoTypes)
  {
    $this->infoTypes = $infoTypes;
  }
  /** @return string[] */
  public function getInfoTypes()
  {
    return $this->infoTypes;
  }
  /** @param RedactConfig */
  public function setRedactConfig(RedactConfig $redactConfig)
  {
    $this->redactConfig = $redactConfig;
  }
  /** @return RedactConfig */
  public function getRedactConfig()
  {
    return $this->redactConfig;
  }
  /** @param ReplaceWithInfoTypeConfig */
  public function setReplaceWithInfoTypeConfig(ReplaceWithInfoTypeConfig $replaceWithInfoTypeConfig)
  {
    $this->replaceWithInfoTypeConfig = $replaceWithInfoTypeConfig;
  }
  /** @return ReplaceWithInfoTypeConfig */
  public function getReplaceWithInfoTypeConfig()
  {
    return $this->replaceWithInfoTypeConfig;
  }
}

class IngestMessageRequest extends \Google\Model
{
  /** @var Message */
  public $message;
  protected $messageType = Message::class;
  protected $messageDataType = '';
  /** @param Message */
  public function setMessage(Message $message)
  {
    $this->message = $message;
  }
  /** @return Message */
  public function getMessage()
  {
    return $this->message;
  }
}

class IngestMessageResponse extends \Google\Model
{
  /** @var string */
  public $hl7Ack;
  /** @var Message */
  public $message;
  protected $messageType = Message::class;
  protected $messageDataType = '';
  /** @param string */
  public function setHl7Ack($hl7Ack)
  {
    $this->hl7Ack = $hl7Ack;
  }
  /** @return string */
  public function getHl7Ack()
  {
    return $this->hl7Ack;
  }
  /** @param Message */
  public function setMessage(Message $message)
  {
    $this->message = $message;
  }
  /** @return Message */
  public function getMessage()
  {
    return $this->message;
  }
}

class KmsWrappedCryptoKey extends \Google\Model
{
  /** @var string */
  public $cryptoKey;
  /** @var string */
  public $wrappedKey;

  /** @param string */
  public function setCryptoKey($cryptoKey)
  {
    $this->cryptoKey = $cryptoKey;
  }
  /** @return string */
  public function getCryptoKey()
  {
    return $this->cryptoKey;
  }
  /** @param string */
  public function setWrappedKey($wrappedKey)
  {
    $this->wrappedKey = $wrappedKey;
  }
  /** @return string */
  public function getWrappedKey()
  {
    return $this->wrappedKey;
  }
}

class LinkedEntity extends \Google\Model
{
  /** @var string */
  public $entityId;

  /** @param string */
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
  }
}

class ListAttributeDefinitionsResponse extends \Google\Collection
{
  /** @var AttributeDefinition[] */
  public $attributeDefinitions;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'attributeDefinitions';
  protected $attributeDefinitionsType = AttributeDefinition::class;
  protected $attributeDefinitionsDataType = 'array';
  /** @param AttributeDefinition[] */
  public function setAttributeDefinitions($attributeDefinitions)
  {
    $this->attributeDefinitions = $attributeDefinitions;
  }
  /** @return AttributeDefinition[] */
  public function getAttributeDefinitions()
  {
    return $this->attributeDefinitions;
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

class ListConsentArtifactsResponse extends \Google\Collection
{
  /** @var ConsentArtifact[] */
  public $consentArtifacts;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'consentArtifacts';
  protected $consentArtifactsType = ConsentArtifact::class;
  protected $consentArtifactsDataType = 'array';
  /** @param ConsentArtifact[] */
  public function setConsentArtifacts($consentArtifacts)
  {
    $this->consentArtifacts = $consentArtifacts;
  }
  /** @return ConsentArtifact[] */
  public function getConsentArtifacts()
  {
    return $this->consentArtifacts;
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

class ListConsentRevisionsResponse extends \Google\Collection
{
  /** @var Consent[] */
  public $consents;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'consents';
  protected $consentsType = Consent::class;
  protected $consentsDataType = 'array';
  /** @param Consent[] */
  public function setConsents($consents)
  {
    $this->consents = $consents;
  }
  /** @return Consent[] */
  public function getConsents()
  {
    return $this->consents;
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

class ListConsentStoresResponse extends \Google\Collection
{
  /** @var ConsentStore[] */
  public $consentStores;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'consentStores';
  protected $consentStoresType = ConsentStore::class;
  protected $consentStoresDataType = 'array';
  /** @param ConsentStore[] */
  public function setConsentStores($consentStores)
  {
    $this->consentStores = $consentStores;
  }
  /** @return ConsentStore[] */
  public function getConsentStores()
  {
    return $this->consentStores;
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

class ListConsentsResponse extends \Google\Collection
{
  /** @var Consent[] */
  public $consents;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'consents';
  protected $consentsType = Consent::class;
  protected $consentsDataType = 'array';
  /** @param Consent[] */
  public function setConsents($consents)
  {
    $this->consents = $consents;
  }
  /** @return Consent[] */
  public function getConsents()
  {
    return $this->consents;
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

class ListDatasetsResponse extends \Google\Collection
{
  /** @var Dataset[] */
  public $datasets;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'datasets';
  protected $datasetsType = Dataset::class;
  protected $datasetsDataType = 'array';
  /** @param Dataset[] */
  public function setDatasets($datasets)
  {
    $this->datasets = $datasets;
  }
  /** @return Dataset[] */
  public function getDatasets()
  {
    return $this->datasets;
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

class ListDicomStoresResponse extends \Google\Collection
{
  /** @var DicomStore[] */
  public $dicomStores;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'dicomStores';
  protected $dicomStoresType = DicomStore::class;
  protected $dicomStoresDataType = 'array';
  /** @param DicomStore[] */
  public function setDicomStores($dicomStores)
  {
    $this->dicomStores = $dicomStores;
  }
  /** @return DicomStore[] */
  public function getDicomStores()
  {
    return $this->dicomStores;
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

class ListFhirStoresResponse extends \Google\Collection
{
  /** @var FhirStore[] */
  public $fhirStores;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'fhirStores';
  protected $fhirStoresType = FhirStore::class;
  protected $fhirStoresDataType = 'array';
  /** @param FhirStore[] */
  public function setFhirStores($fhirStores)
  {
    $this->fhirStores = $fhirStores;
  }
  /** @return FhirStore[] */
  public function getFhirStores()
  {
    return $this->fhirStores;
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

class ListHl7V2StoresResponse extends \Google\Collection
{
  /** @var Hl7V2Store[] */
  public $hl7V2Stores;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'hl7V2Stores';
  protected $hl7V2StoresType = Hl7V2Store::class;
  protected $hl7V2StoresDataType = 'array';
  /** @param Hl7V2Store[] */
  public function setHl7V2Stores($hl7V2Stores)
  {
    $this->hl7V2Stores = $hl7V2Stores;
  }
  /** @return Hl7V2Store[] */
  public function getHl7V2Stores()
  {
    return $this->hl7V2Stores;
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

class ListLocationsResponse extends \Google\Collection
{
  /** @var Location[] */
  public $locations;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'locations';
  protected $locationsType = Location::class;
  protected $locationsDataType = 'array';
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

class ListMessagesResponse extends \Google\Collection
{
  /** @var Message[] */
  public $hl7V2Messages;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'hl7V2Messages';
  protected $hl7V2MessagesType = Message::class;
  protected $hl7V2MessagesDataType = 'array';
  /** @param Message[] */
  public function setHl7V2Messages($hl7V2Messages)
  {
    $this->hl7V2Messages = $hl7V2Messages;
  }
  /** @return Message[] */
  public function getHl7V2Messages()
  {
    return $this->hl7V2Messages;
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

class ListOperationsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Operation[] */
  public $operations;
  protected $collection_key = 'operations';
  protected $operationsType = Operation::class;
  protected $operationsDataType = 'array';
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
  /** @param Operation[] */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /** @return Operation[] */
  public function getOperations()
  {
    return $this->operations;
  }
}

class ListUserDataMappingsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var UserDataMapping[] */
  public $userDataMappings;
  protected $collection_key = 'userDataMappings';
  protected $userDataMappingsType = UserDataMapping::class;
  protected $userDataMappingsDataType = 'array';
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
  /** @param UserDataMapping[] */
  public function setUserDataMappings($userDataMappings)
  {
    $this->userDataMappings = $userDataMappings;
  }
  /** @return UserDataMapping[] */
  public function getUserDataMappings()
  {
    return $this->userDataMappings;
  }
}

class Location extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $locationId;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;

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
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /** @return string */
  public function getLocationId()
  {
    return $this->locationId;
  }
  /** @param array[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return array[] */
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
}

class Message extends \Google\Collection
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $data;
  /** @var string[] */
  public $labels;
  /** @var string */
  public $messageType;
  /** @var string */
  public $name;
  /** @var ParsedData */
  public $parsedData;
  /** @var PatientId[] */
  public $patientIds;
  /** @var SchematizedData */
  public $schematizedData;
  /** @var string */
  public $sendFacility;
  /** @var string */
  public $sendTime;
  protected $collection_key = 'patientIds';
  protected $parsedDataType = ParsedData::class;
  protected $parsedDataDataType = '';
  protected $patientIdsType = PatientId::class;
  protected $patientIdsDataType = 'array';
  protected $schematizedDataType = SchematizedData::class;
  protected $schematizedDataDataType = '';
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
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
  }
  /** @param string[] */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /** @return string[] */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param string */
  public function setMessageType($messageType)
  {
    $this->messageType = $messageType;
  }
  /** @return string */
  public function getMessageType()
  {
    return $this->messageType;
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
  /** @param ParsedData */
  public function setParsedData(ParsedData $parsedData)
  {
    $this->parsedData = $parsedData;
  }
  /** @return ParsedData */
  public function getParsedData()
  {
    return $this->parsedData;
  }
  /** @param PatientId[] */
  public function setPatientIds($patientIds)
  {
    $this->patientIds = $patientIds;
  }
  /** @return PatientId[] */
  public function getPatientIds()
  {
    return $this->patientIds;
  }
  /** @param SchematizedData */
  public function setSchematizedData(SchematizedData $schematizedData)
  {
    $this->schematizedData = $schematizedData;
  }
  /** @return SchematizedData */
  public function getSchematizedData()
  {
    return $this->schematizedData;
  }
  /** @param string */
  public function setSendFacility($sendFacility)
  {
    $this->sendFacility = $sendFacility;
  }
  /** @return string */
  public function getSendFacility()
  {
    return $this->sendFacility;
  }
  /** @param string */
  public function setSendTime($sendTime)
  {
    $this->sendTime = $sendTime;
  }
  /** @return string */
  public function getSendTime()
  {
    return $this->sendTime;
  }
}

class NotificationConfig extends \Google\Model
{
  /** @var string */
  public $pubsubTopic;

  /** @param string */
  public function setPubsubTopic($pubsubTopic)
  {
    $this->pubsubTopic = $pubsubTopic;
  }
  /** @return string */
  public function getPubsubTopic()
  {
    return $this->pubsubTopic;
  }
}

class Operation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var Status */
  public $error;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var array[] */
  public $response;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /** @param bool */
  public function setDone($done)
  {
    $this->done = $done;
  }
  /** @return bool */
  public function getDone()
  {
    return $this->done;
  }
  /** @param Status */
  public function setError(Status $error)
  {
    $this->error = $error;
  }
  /** @return Status */
  public function getError()
  {
    return $this->error;
  }
  /** @param array[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return array[] */
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
  /** @param array[] */
  public function setResponse($response)
  {
    $this->response = $response;
  }
  /** @return array[] */
  public function getResponse()
  {
    return $this->response;
  }
}

class OperationMetadata extends \Google\Model
{
  /** @var string */
  public $apiMethodName;
  /** @var bool */
  public $cancelRequested;
  /** @var ProgressCounter */
  public $counter;
  /** @var string */
  public $createTime;
  /** @var string */
  public $endTime;
  /** @var string */
  public $logsUrl;
  protected $counterType = ProgressCounter::class;
  protected $counterDataType = '';
  /** @param string */
  public function setApiMethodName($apiMethodName)
  {
    $this->apiMethodName = $apiMethodName;
  }
  /** @return string */
  public function getApiMethodName()
  {
    return $this->apiMethodName;
  }
  /** @param bool */
  public function setCancelRequested($cancelRequested)
  {
    $this->cancelRequested = $cancelRequested;
  }
  /** @return bool */
  public function getCancelRequested()
  {
    return $this->cancelRequested;
  }
  /** @param ProgressCounter */
  public function setCounter(ProgressCounter $counter)
  {
    $this->counter = $counter;
  }
  /** @return ProgressCounter */
  public function getCounter()
  {
    return $this->counter;
  }
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
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /** @return string */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /** @param string */
  public function setLogsUrl($logsUrl)
  {
    $this->logsUrl = $logsUrl;
  }
  /** @return string */
  public function getLogsUrl()
  {
    return $this->logsUrl;
  }
}

class ParsedData extends \Google\Collection
{
  /** @var Segment[] */
  public $segments;
  protected $collection_key = 'segments';
  protected $segmentsType = Segment::class;
  protected $segmentsDataType = 'array';
  /** @param Segment[] */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /** @return Segment[] */
  public function getSegments()
  {
    return $this->segments;
  }
}

class ParserConfig extends \Google\Model
{
  /** @var bool */
  public $allowNullHeader;
  /** @var SchemaPackage */
  public $schema;
  /** @var string */
  public $segmentTerminator;
  /** @var string */
  public $version;
  protected $schemaType = SchemaPackage::class;
  protected $schemaDataType = '';
  /** @param bool */
  public function setAllowNullHeader($allowNullHeader)
  {
    $this->allowNullHeader = $allowNullHeader;
  }
  /** @return bool */
  public function getAllowNullHeader()
  {
    return $this->allowNullHeader;
  }
  /** @param SchemaPackage */
  public function setSchema(SchemaPackage $schema)
  {
    $this->schema = $schema;
  }
  /** @return SchemaPackage */
  public function getSchema()
  {
    return $this->schema;
  }
  /** @param string */
  public function setSegmentTerminator($segmentTerminator)
  {
    $this->segmentTerminator = $segmentTerminator;
  }
  /** @return string */
  public function getSegmentTerminator()
  {
    return $this->segmentTerminator;
  }
  /** @param string */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /** @return string */
  public function getVersion()
  {
    return $this->version;
  }
}

class PatientId extends \Google\Model
{
  /** @var string */
  public $type;
  /** @var string */
  public $value;

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

class Policy extends \Google\Collection
{
  /** @var AuditConfig[] */
  public $auditConfigs;
  /** @var Binding[] */
  public $bindings;
  /** @var string */
  public $etag;
  /** @var int */
  public $version;
  protected $collection_key = 'bindings';
  protected $auditConfigsType = AuditConfig::class;
  protected $auditConfigsDataType = 'array';
  protected $bindingsType = Binding::class;
  protected $bindingsDataType = 'array';
  /** @param AuditConfig[] */
  public function setAuditConfigs($auditConfigs)
  {
    $this->auditConfigs = $auditConfigs;
  }
  /** @return AuditConfig[] */
  public function getAuditConfigs()
  {
    return $this->auditConfigs;
  }
  /** @param Binding[] */
  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  /** @return Binding[] */
  public function getBindings()
  {
    return $this->bindings;
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

class ProgressCounter extends \Google\Model
{
  /** @var string */
  public $failure;
  /** @var string */
  public $pending;
  /** @var string */
  public $success;

  /** @param string */
  public function setFailure($failure)
  {
    $this->failure = $failure;
  }
  /** @return string */
  public function getFailure()
  {
    return $this->failure;
  }
  /** @param string */
  public function setPending($pending)
  {
    $this->pending = $pending;
  }
  /** @return string */
  public function getPending()
  {
    return $this->pending;
  }
  /** @param string */
  public function setSuccess($success)
  {
    $this->success = $success;
  }
  /** @return string */
  public function getSuccess()
  {
    return $this->success;
  }
}

class QueryAccessibleDataRequest extends \Google\Model
{
  /** @var GoogleCloudHealthcareV1ConsentGcsDestination */
  public $gcsDestination;
  /** @var string[] */
  public $requestAttributes;
  /** @var string[] */
  public $resourceAttributes;
  protected $gcsDestinationType = GoogleCloudHealthcareV1ConsentGcsDestination::class;
  protected $gcsDestinationDataType = '';
  /** @param GoogleCloudHealthcareV1ConsentGcsDestination */
  public function setGcsDestination(GoogleCloudHealthcareV1ConsentGcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GoogleCloudHealthcareV1ConsentGcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
  /** @param string[] */
  public function setRequestAttributes($requestAttributes)
  {
    $this->requestAttributes = $requestAttributes;
  }
  /** @return string[] */
  public function getRequestAttributes()
  {
    return $this->requestAttributes;
  }
  /** @param string[] */
  public function setResourceAttributes($resourceAttributes)
  {
    $this->resourceAttributes = $resourceAttributes;
  }
  /** @return string[] */
  public function getResourceAttributes()
  {
    return $this->resourceAttributes;
  }
}

class QueryAccessibleDataResponse extends \Google\Collection
{
  /** @var string[] */
  public $gcsUris;
  protected $collection_key = 'gcsUris';
  /** @param string[] */
  public function setGcsUris($gcsUris)
  {
    $this->gcsUris = $gcsUris;
  }
  /** @return string[] */
  public function getGcsUris()
  {
    return $this->gcsUris;
  }
}

class RedactConfig extends \Google\Model
{
}

class RejectConsentRequest extends \Google\Model
{
  /** @var string */
  public $consentArtifact;

  /** @param string */
  public function setConsentArtifact($consentArtifact)
  {
    $this->consentArtifact = $consentArtifact;
  }
  /** @return string */
  public function getConsentArtifact()
  {
    return $this->consentArtifact;
  }
}

class ReplaceWithInfoTypeConfig extends \Google\Model
{
}

class Resources extends \Google\Collection
{
  /** @var string[] */
  public $resources;
  protected $collection_key = 'resources';
  /** @param string[] */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /** @return string[] */
  public function getResources()
  {
    return $this->resources;
  }
}

class Result extends \Google\Model
{
  /** @var ConsentEvaluation[] */
  public $consentDetails;
  /** @var bool */
  public $consented;
  /** @var string */
  public $dataId;
  protected $consentDetailsType = ConsentEvaluation::class;
  protected $consentDetailsDataType = 'map';
  /** @param ConsentEvaluation[] */
  public function setConsentDetails($consentDetails)
  {
    $this->consentDetails = $consentDetails;
  }
  /** @return ConsentEvaluation[] */
  public function getConsentDetails()
  {
    return $this->consentDetails;
  }
  /** @param bool */
  public function setConsented($consented)
  {
    $this->consented = $consented;
  }
  /** @return bool */
  public function getConsented()
  {
    return $this->consented;
  }
  /** @param string */
  public function setDataId($dataId)
  {
    $this->dataId = $dataId;
  }
  /** @return string */
  public function getDataId()
  {
    return $this->dataId;
  }
}

class RevokeConsentRequest extends \Google\Model
{
  /** @var string */
  public $consentArtifact;

  /** @param string */
  public function setConsentArtifact($consentArtifact)
  {
    $this->consentArtifact = $consentArtifact;
  }
  /** @return string */
  public function getConsentArtifact()
  {
    return $this->consentArtifact;
  }
}

class SchemaConfig extends \Google\Model
{
  /** @var string */
  public $recursiveStructureDepth;
  /** @var string */
  public $schemaType;

  /** @param string */
  public function setRecursiveStructureDepth($recursiveStructureDepth)
  {
    $this->recursiveStructureDepth = $recursiveStructureDepth;
  }
  /** @return string */
  public function getRecursiveStructureDepth()
  {
    return $this->recursiveStructureDepth;
  }
  /** @param string */
  public function setSchemaType($schemaType)
  {
    $this->schemaType = $schemaType;
  }
  /** @return string */
  public function getSchemaType()
  {
    return $this->schemaType;
  }
}

class SchemaGroup extends \Google\Collection
{
  /** @var bool */
  public $choice;
  /** @var int */
  public $maxOccurs;
  /** @var GroupOrSegment[] */
  public $members;
  /** @var int */
  public $minOccurs;
  /** @var string */
  public $name;
  protected $collection_key = 'members';
  protected $membersType = GroupOrSegment::class;
  protected $membersDataType = 'array';
  /** @param bool */
  public function setChoice($choice)
  {
    $this->choice = $choice;
  }
  /** @return bool */
  public function getChoice()
  {
    return $this->choice;
  }
  /** @param int */
  public function setMaxOccurs($maxOccurs)
  {
    $this->maxOccurs = $maxOccurs;
  }
  /** @return int */
  public function getMaxOccurs()
  {
    return $this->maxOccurs;
  }
  /** @param GroupOrSegment[] */
  public function setMembers($members)
  {
    $this->members = $members;
  }
  /** @return GroupOrSegment[] */
  public function getMembers()
  {
    return $this->members;
  }
  /** @param int */
  public function setMinOccurs($minOccurs)
  {
    $this->minOccurs = $minOccurs;
  }
  /** @return int */
  public function getMinOccurs()
  {
    return $this->minOccurs;
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

class SchemaPackage extends \Google\Collection
{
  /** @var bool */
  public $ignoreMinOccurs;
  /** @var Hl7SchemaConfig[] */
  public $schemas;
  /** @var string */
  public $schematizedParsingType;
  /** @var Hl7TypesConfig[] */
  public $types;
  /** @var string */
  public $unexpectedSegmentHandling;
  protected $collection_key = 'types';
  protected $schemasType = Hl7SchemaConfig::class;
  protected $schemasDataType = 'array';
  protected $typesType = Hl7TypesConfig::class;
  protected $typesDataType = 'array';
  /** @param bool */
  public function setIgnoreMinOccurs($ignoreMinOccurs)
  {
    $this->ignoreMinOccurs = $ignoreMinOccurs;
  }
  /** @return bool */
  public function getIgnoreMinOccurs()
  {
    return $this->ignoreMinOccurs;
  }
  /** @param Hl7SchemaConfig[] */
  public function setSchemas($schemas)
  {
    $this->schemas = $schemas;
  }
  /** @return Hl7SchemaConfig[] */
  public function getSchemas()
  {
    return $this->schemas;
  }
  /** @param string */
  public function setSchematizedParsingType($schematizedParsingType)
  {
    $this->schematizedParsingType = $schematizedParsingType;
  }
  /** @return string */
  public function getSchematizedParsingType()
  {
    return $this->schematizedParsingType;
  }
  /** @param Hl7TypesConfig[] */
  public function setTypes($types)
  {
    $this->types = $types;
  }
  /** @return Hl7TypesConfig[] */
  public function getTypes()
  {
    return $this->types;
  }
  /** @param string */
  public function setUnexpectedSegmentHandling($unexpectedSegmentHandling)
  {
    $this->unexpectedSegmentHandling = $unexpectedSegmentHandling;
  }
  /** @return string */
  public function getUnexpectedSegmentHandling()
  {
    return $this->unexpectedSegmentHandling;
  }
}

class SchemaSegment extends \Google\Model
{
  /** @var int */
  public $maxOccurs;
  /** @var int */
  public $minOccurs;
  /** @var string */
  public $type;

  /** @param int */
  public function setMaxOccurs($maxOccurs)
  {
    $this->maxOccurs = $maxOccurs;
  }
  /** @return int */
  public function getMaxOccurs()
  {
    return $this->maxOccurs;
  }
  /** @param int */
  public function setMinOccurs($minOccurs)
  {
    $this->minOccurs = $minOccurs;
  }
  /** @return int */
  public function getMinOccurs()
  {
    return $this->minOccurs;
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

class SchematizedData extends \Google\Model
{
  /** @var string */
  public $data;
  /** @var string */
  public $error;

  /** @param string */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string */
  public function getData()
  {
    return $this->data;
  }
  /** @param string */
  public function setError($error)
  {
    $this->error = $error;
  }
  /** @return string */
  public function getError()
  {
    return $this->error;
  }
}

class SearchResourcesRequest extends \Google\Model
{
  /** @var string */
  public $resourceType;

  /** @param string */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /** @return string */
  public function getResourceType()
  {
    return $this->resourceType;
  }
}

class Segment extends \Google\Model
{
  /** @var string[] */
  public $fields;
  /** @var string */
  public $segmentId;
  /** @var string */
  public $setId;

  /** @param string[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string[] */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param string */
  public function setSegmentId($segmentId)
  {
    $this->segmentId = $segmentId;
  }
  /** @return string */
  public function getSegmentId()
  {
    return $this->segmentId;
  }
  /** @param string */
  public function setSetId($setId)
  {
    $this->setId = $setId;
  }
  /** @return string */
  public function getSetId()
  {
    return $this->setId;
  }
}

class SetIamPolicyRequest extends \Google\Model
{
  /** @var Policy */
  public $policy;
  /** @var string */
  public $updateMask;
  protected $policyType = Policy::class;
  protected $policyDataType = '';
  /** @param Policy */
  public function setPolicy(Policy $policy)
  {
    $this->policy = $policy;
  }
  /** @return Policy */
  public function getPolicy()
  {
    return $this->policy;
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

class Signature extends \Google\Model
{
  /** @var Image */
  public $image;
  /** @var string[] */
  public $metadata;
  /** @var string */
  public $signatureTime;
  /** @var string */
  public $userId;
  protected $imageType = Image::class;
  protected $imageDataType = '';
  /** @param Image */
  public function setImage(Image $image)
  {
    $this->image = $image;
  }
  /** @return Image */
  public function getImage()
  {
    return $this->image;
  }
  /** @param string[] */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return string[] */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /** @param string */
  public function setSignatureTime($signatureTime)
  {
    $this->signatureTime = $signatureTime;
  }
  /** @return string */
  public function getSignatureTime()
  {
    return $this->signatureTime;
  }
  /** @param string */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return string */
  public function getUserId()
  {
    return $this->userId;
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

class StreamConfig extends \Google\Collection
{
  /** @var GoogleCloudHealthcareV1FhirBigQueryDestination */
  public $bigqueryDestination;
  /** @var DeidentifiedStoreDestination */
  public $deidentifiedStoreDestination;
  /** @var string[] */
  public $resourceTypes;
  protected $collection_key = 'resourceTypes';
  protected $bigqueryDestinationType = GoogleCloudHealthcareV1FhirBigQueryDestination::class;
  protected $bigqueryDestinationDataType = '';
  protected $deidentifiedStoreDestinationType = DeidentifiedStoreDestination::class;
  protected $deidentifiedStoreDestinationDataType = '';
  /** @param GoogleCloudHealthcareV1FhirBigQueryDestination */
  public function setBigqueryDestination(GoogleCloudHealthcareV1FhirBigQueryDestination $bigqueryDestination)
  {
    $this->bigqueryDestination = $bigqueryDestination;
  }
  /** @return GoogleCloudHealthcareV1FhirBigQueryDestination */
  public function getBigqueryDestination()
  {
    return $this->bigqueryDestination;
  }
  /** @param DeidentifiedStoreDestination */
  public function setDeidentifiedStoreDestination(DeidentifiedStoreDestination $deidentifiedStoreDestination)
  {
    $this->deidentifiedStoreDestination = $deidentifiedStoreDestination;
  }
  /** @return DeidentifiedStoreDestination */
  public function getDeidentifiedStoreDestination()
  {
    return $this->deidentifiedStoreDestination;
  }
  /** @param string[] */
  public function setResourceTypes($resourceTypes)
  {
    $this->resourceTypes = $resourceTypes;
  }
  /** @return string[] */
  public function getResourceTypes()
  {
    return $this->resourceTypes;
  }
}

class TagFilterList extends \Google\Collection
{
  /** @var string[] */
  public $tags;
  protected $collection_key = 'tags';
  /** @param string[] */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /** @return string[] */
  public function getTags()
  {
    return $this->tags;
  }
}

class TestIamPermissionsRequest extends \Google\Collection
{
  /** @var string[] */
  public $permissions;
  protected $collection_key = 'permissions';
  /** @param string[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return string[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class TestIamPermissionsResponse extends \Google\Collection
{
  /** @var string[] */
  public $permissions;
  protected $collection_key = 'permissions';
  /** @param string[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return string[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class TextConfig extends \Google\Collection
{
  /** @var InfoTypeTransformation[] */
  public $transformations;
  protected $collection_key = 'transformations';
  protected $transformationsType = InfoTypeTransformation::class;
  protected $transformationsDataType = 'array';
  /** @param InfoTypeTransformation[] */
  public function setTransformations($transformations)
  {
    $this->transformations = $transformations;
  }
  /** @return InfoTypeTransformation[] */
  public function getTransformations()
  {
    return $this->transformations;
  }
}

class TextSpan extends \Google\Model
{
  /** @var int */
  public $beginOffset;
  /** @var string */
  public $content;

  /** @param int */
  public function setBeginOffset($beginOffset)
  {
    $this->beginOffset = $beginOffset;
  }
  /** @return int */
  public function getBeginOffset()
  {
    return $this->beginOffset;
  }
  /** @param string */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /** @return string */
  public function getContent()
  {
    return $this->content;
  }
}

class Type extends \Google\Collection
{
  /** @var Field[] */
  public $fields;
  /** @var string */
  public $name;
  /** @var string */
  public $primitive;
  protected $collection_key = 'fields';
  protected $fieldsType = Field::class;
  protected $fieldsDataType = 'array';
  /** @param Field[] */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return Field[] */
  public function getFields()
  {
    return $this->fields;
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
  public function setPrimitive($primitive)
  {
    $this->primitive = $primitive;
  }
  /** @return string */
  public function getPrimitive()
  {
    return $this->primitive;
  }
}

class UserDataMapping extends \Google\Collection
{
  /** @var string */
  public $archiveTime;
  /** @var bool */
  public $archived;
  /** @var string */
  public $dataId;
  /** @var string */
  public $name;
  /** @var Attribute[] */
  public $resourceAttributes;
  /** @var string */
  public $userId;
  protected $collection_key = 'resourceAttributes';
  protected $resourceAttributesType = Attribute::class;
  protected $resourceAttributesDataType = 'array';
  /** @param string */
  public function setArchiveTime($archiveTime)
  {
    $this->archiveTime = $archiveTime;
  }
  /** @return string */
  public function getArchiveTime()
  {
    return $this->archiveTime;
  }
  /** @param bool */
  public function setArchived($archived)
  {
    $this->archived = $archived;
  }
  /** @return bool */
  public function getArchived()
  {
    return $this->archived;
  }
  /** @param string */
  public function setDataId($dataId)
  {
    $this->dataId = $dataId;
  }
  /** @return string */
  public function getDataId()
  {
    return $this->dataId;
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
  /** @param Attribute[] */
  public function setResourceAttributes($resourceAttributes)
  {
    $this->resourceAttributes = $resourceAttributes;
  }
  /** @return Attribute[] */
  public function getResourceAttributes()
  {
    return $this->resourceAttributes;
  }
  /** @param string */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /** @return string */
  public function getUserId()
  {
    return $this->userId;
  }
}

class ValidationConfig extends \Google\Collection
{
  /** @var bool */
  public $disableFhirpathValidation;
  /** @var bool */
  public $disableProfileValidation;
  /** @var bool */
  public $disableReferenceTypeValidation;
  /** @var bool */
  public $disableRequiredFieldValidation;
  /** @var string[] */
  public $enabledImplementationGuides;
  protected $collection_key = 'enabledImplementationGuides';
  /** @param bool */
  public function setDisableFhirpathValidation($disableFhirpathValidation)
  {
    $this->disableFhirpathValidation = $disableFhirpathValidation;
  }
  /** @return bool */
  public function getDisableFhirpathValidation()
  {
    return $this->disableFhirpathValidation;
  }
  /** @param bool */
  public function setDisableProfileValidation($disableProfileValidation)
  {
    $this->disableProfileValidation = $disableProfileValidation;
  }
  /** @return bool */
  public function getDisableProfileValidation()
  {
    return $this->disableProfileValidation;
  }
  /** @param bool */
  public function setDisableReferenceTypeValidation($disableReferenceTypeValidation)
  {
    $this->disableReferenceTypeValidation = $disableReferenceTypeValidation;
  }
  /** @return bool */
  public function getDisableReferenceTypeValidation()
  {
    return $this->disableReferenceTypeValidation;
  }
  /** @param bool */
  public function setDisableRequiredFieldValidation($disableRequiredFieldValidation)
  {
    $this->disableRequiredFieldValidation = $disableRequiredFieldValidation;
  }
  /** @return bool */
  public function getDisableRequiredFieldValidation()
  {
    return $this->disableRequiredFieldValidation;
  }
  /** @param string[] */
  public function setEnabledImplementationGuides($enabledImplementationGuides)
  {
    $this->enabledImplementationGuides = $enabledImplementationGuides;
  }
  /** @return string[] */
  public function getEnabledImplementationGuides()
  {
    return $this->enabledImplementationGuides;
  }
}

class VersionSource extends \Google\Model
{
  /** @var string */
  public $mshField;
  /** @var string */
  public $value;

  /** @param string */
  public function setMshField($mshField)
  {
    $this->mshField = $mshField;
  }
  /** @return string */
  public function getMshField()
  {
    return $this->mshField;
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
class_alias(ActivateConsentRequest::class, 'Google_Service_CloudHealthcare_ActivateConsentRequest');
class_alias(AnalyzeEntitiesRequest::class, 'Google_Service_CloudHealthcare_AnalyzeEntitiesRequest');
class_alias(AnalyzeEntitiesResponse::class, 'Google_Service_CloudHealthcare_AnalyzeEntitiesResponse');
class_alias(ArchiveUserDataMappingRequest::class, 'Google_Service_CloudHealthcare_ArchiveUserDataMappingRequest');
class_alias(ArchiveUserDataMappingResponse::class, 'Google_Service_CloudHealthcare_ArchiveUserDataMappingResponse');
class_alias(Attribute::class, 'Google_Service_CloudHealthcare_Attribute');
class_alias(AttributeDefinition::class, 'Google_Service_CloudHealthcare_AttributeDefinition');
class_alias(AuditConfig::class, 'Google_Service_CloudHealthcare_AuditConfig');
class_alias(AuditLogConfig::class, 'Google_Service_CloudHealthcare_AuditLogConfig');
class_alias(Binding::class, 'Google_Service_CloudHealthcare_Binding');
class_alias(CancelOperationRequest::class, 'Google_Service_CloudHealthcare_CancelOperationRequest');
class_alias(CharacterMaskConfig::class, 'Google_Service_CloudHealthcare_CharacterMaskConfig');
class_alias(CheckDataAccessRequest::class, 'Google_Service_CloudHealthcare_CheckDataAccessRequest');
class_alias(CheckDataAccessResponse::class, 'Google_Service_CloudHealthcare_CheckDataAccessResponse');
class_alias(Consent::class, 'Google_Service_CloudHealthcare_Consent');
class_alias(ConsentArtifact::class, 'Google_Service_CloudHealthcare_ConsentArtifact');
class_alias(ConsentEvaluation::class, 'Google_Service_CloudHealthcare_ConsentEvaluation');
class_alias(ConsentList::class, 'Google_Service_CloudHealthcare_ConsentList');
class_alias(ConsentStore::class, 'Google_Service_CloudHealthcare_ConsentStore');
class_alias(CreateMessageRequest::class, 'Google_Service_CloudHealthcare_CreateMessageRequest');
class_alias(CryptoHashConfig::class, 'Google_Service_CloudHealthcare_CryptoHashConfig');
class_alias(Dataset::class, 'Google_Service_CloudHealthcare_Dataset');
class_alias(DateShiftConfig::class, 'Google_Service_CloudHealthcare_DateShiftConfig');
class_alias(DeidentifiedStoreDestination::class, 'Google_Service_CloudHealthcare_DeidentifiedStoreDestination');
class_alias(DeidentifyConfig::class, 'Google_Service_CloudHealthcare_DeidentifyConfig');
class_alias(DeidentifyDatasetRequest::class, 'Google_Service_CloudHealthcare_DeidentifyDatasetRequest');
class_alias(DeidentifyDicomStoreRequest::class, 'Google_Service_CloudHealthcare_DeidentifyDicomStoreRequest');
class_alias(DeidentifyFhirStoreRequest::class, 'Google_Service_CloudHealthcare_DeidentifyFhirStoreRequest');
class_alias(DeidentifySummary::class, 'Google_Service_CloudHealthcare_DeidentifySummary');
class_alias(DicomConfig::class, 'Google_Service_CloudHealthcare_DicomConfig');
class_alias(DicomFilterConfig::class, 'Google_Service_CloudHealthcare_DicomFilterConfig');
class_alias(DicomStore::class, 'Google_Service_CloudHealthcare_DicomStore');
class_alias(Entity::class, 'Google_Service_CloudHealthcare_Entity');
class_alias(EntityMention::class, 'Google_Service_CloudHealthcare_EntityMention');
class_alias(EntityMentionRelationship::class, 'Google_Service_CloudHealthcare_EntityMentionRelationship');
class_alias(EvaluateUserConsentsRequest::class, 'Google_Service_CloudHealthcare_EvaluateUserConsentsRequest');
class_alias(EvaluateUserConsentsResponse::class, 'Google_Service_CloudHealthcare_EvaluateUserConsentsResponse');
class_alias(ExportDicomDataRequest::class, 'Google_Service_CloudHealthcare_ExportDicomDataRequest');
class_alias(ExportDicomDataResponse::class, 'Google_Service_CloudHealthcare_ExportDicomDataResponse');
class_alias(ExportMessagesRequest::class, 'Google_Service_CloudHealthcare_ExportMessagesRequest');
class_alias(ExportMessagesResponse::class, 'Google_Service_CloudHealthcare_ExportMessagesResponse');
class_alias(ExportResourcesRequest::class, 'Google_Service_CloudHealthcare_ExportResourcesRequest');
class_alias(ExportResourcesResponse::class, 'Google_Service_CloudHealthcare_ExportResourcesResponse');
class_alias(Expr::class, 'Google_Service_CloudHealthcare_Expr');
class_alias(Feature::class, 'Google_Service_CloudHealthcare_Feature');
class_alias(FhirConfig::class, 'Google_Service_CloudHealthcare_FhirConfig');
class_alias(FhirFilter::class, 'Google_Service_CloudHealthcare_FhirFilter');
class_alias(FhirStore::class, 'Google_Service_CloudHealthcare_FhirStore');
class_alias(Field::class, 'Google_Service_CloudHealthcare_Field');
class_alias(FieldMetadata::class, 'Google_Service_CloudHealthcare_FieldMetadata');
class_alias(GcsDestination::class, 'Google_Service_CloudHealthcare_GcsDestination');
class_alias(GcsSource::class, 'Google_Service_CloudHealthcare_GcsSource');
class_alias(GoogleCloudHealthcareV1ConsentGcsDestination::class, 'Google_Service_CloudHealthcare_GoogleCloudHealthcareV1ConsentGcsDestination');
class_alias(GoogleCloudHealthcareV1ConsentPolicy::class, 'Google_Service_CloudHealthcare_GoogleCloudHealthcareV1ConsentPolicy');
class_alias(GoogleCloudHealthcareV1DeidentifyDeidentifyDicomStoreSummary::class, 'Google_Service_CloudHealthcare_GoogleCloudHealthcareV1DeidentifyDeidentifyDicomStoreSummary');
class_alias(GoogleCloudHealthcareV1DeidentifyDeidentifyFhirStoreSummary::class, 'Google_Service_CloudHealthcare_GoogleCloudHealthcareV1DeidentifyDeidentifyFhirStoreSummary');
class_alias(GoogleCloudHealthcareV1DicomBigQueryDestination::class, 'Google_Service_CloudHealthcare_GoogleCloudHealthcareV1DicomBigQueryDestination');
class_alias(GoogleCloudHealthcareV1DicomGcsDestination::class, 'Google_Service_CloudHealthcare_GoogleCloudHealthcareV1DicomGcsDestination');
class_alias(GoogleCloudHealthcareV1DicomGcsSource::class, 'Google_Service_CloudHealthcare_GoogleCloudHealthcareV1DicomGcsSource');
class_alias(GoogleCloudHealthcareV1FhirBigQueryDestination::class, 'Google_Service_CloudHealthcare_GoogleCloudHealthcareV1FhirBigQueryDestination');
class_alias(GoogleCloudHealthcareV1FhirGcsDestination::class, 'Google_Service_CloudHealthcare_GoogleCloudHealthcareV1FhirGcsDestination');
class_alias(GoogleCloudHealthcareV1FhirGcsSource::class, 'Google_Service_CloudHealthcare_GoogleCloudHealthcareV1FhirGcsSource');
class_alias(GroupOrSegment::class, 'Google_Service_CloudHealthcare_GroupOrSegment');
class_alias(HealthcareEmpty::class, 'Google_Service_CloudHealthcare_HealthcareEmpty');
class_alias(Hl7SchemaConfig::class, 'Google_Service_CloudHealthcare_Hl7SchemaConfig');
class_alias(Hl7TypesConfig::class, 'Google_Service_CloudHealthcare_Hl7TypesConfig');
class_alias(Hl7V2NotificationConfig::class, 'Google_Service_CloudHealthcare_Hl7V2NotificationConfig');
class_alias(Hl7V2Store::class, 'Google_Service_CloudHealthcare_Hl7V2Store');
class_alias(HttpBody::class, 'Google_Service_CloudHealthcare_HttpBody');
class_alias(Image::class, 'Google_Service_CloudHealthcare_Image');
class_alias(ImageConfig::class, 'Google_Service_CloudHealthcare_ImageConfig');
class_alias(ImportDicomDataRequest::class, 'Google_Service_CloudHealthcare_ImportDicomDataRequest');
class_alias(ImportDicomDataResponse::class, 'Google_Service_CloudHealthcare_ImportDicomDataResponse');
class_alias(ImportMessagesRequest::class, 'Google_Service_CloudHealthcare_ImportMessagesRequest');
class_alias(ImportMessagesResponse::class, 'Google_Service_CloudHealthcare_ImportMessagesResponse');
class_alias(ImportResourcesRequest::class, 'Google_Service_CloudHealthcare_ImportResourcesRequest');
class_alias(ImportResourcesResponse::class, 'Google_Service_CloudHealthcare_ImportResourcesResponse');
class_alias(InfoTypeTransformation::class, 'Google_Service_CloudHealthcare_InfoTypeTransformation');
class_alias(IngestMessageRequest::class, 'Google_Service_CloudHealthcare_IngestMessageRequest');
class_alias(IngestMessageResponse::class, 'Google_Service_CloudHealthcare_IngestMessageResponse');
class_alias(KmsWrappedCryptoKey::class, 'Google_Service_CloudHealthcare_KmsWrappedCryptoKey');
class_alias(LinkedEntity::class, 'Google_Service_CloudHealthcare_LinkedEntity');
class_alias(ListAttributeDefinitionsResponse::class, 'Google_Service_CloudHealthcare_ListAttributeDefinitionsResponse');
class_alias(ListConsentArtifactsResponse::class, 'Google_Service_CloudHealthcare_ListConsentArtifactsResponse');
class_alias(ListConsentRevisionsResponse::class, 'Google_Service_CloudHealthcare_ListConsentRevisionsResponse');
class_alias(ListConsentStoresResponse::class, 'Google_Service_CloudHealthcare_ListConsentStoresResponse');
class_alias(ListConsentsResponse::class, 'Google_Service_CloudHealthcare_ListConsentsResponse');
class_alias(ListDatasetsResponse::class, 'Google_Service_CloudHealthcare_ListDatasetsResponse');
class_alias(ListDicomStoresResponse::class, 'Google_Service_CloudHealthcare_ListDicomStoresResponse');
class_alias(ListFhirStoresResponse::class, 'Google_Service_CloudHealthcare_ListFhirStoresResponse');
class_alias(ListHl7V2StoresResponse::class, 'Google_Service_CloudHealthcare_ListHl7V2StoresResponse');
class_alias(ListLocationsResponse::class, 'Google_Service_CloudHealthcare_ListLocationsResponse');
class_alias(ListMessagesResponse::class, 'Google_Service_CloudHealthcare_ListMessagesResponse');
class_alias(ListOperationsResponse::class, 'Google_Service_CloudHealthcare_ListOperationsResponse');
class_alias(ListUserDataMappingsResponse::class, 'Google_Service_CloudHealthcare_ListUserDataMappingsResponse');
class_alias(Location::class, 'Google_Service_CloudHealthcare_Location');
class_alias(Message::class, 'Google_Service_CloudHealthcare_Message');
class_alias(NotificationConfig::class, 'Google_Service_CloudHealthcare_NotificationConfig');
class_alias(Operation::class, 'Google_Service_CloudHealthcare_Operation');
class_alias(OperationMetadata::class, 'Google_Service_CloudHealthcare_OperationMetadata');
class_alias(ParsedData::class, 'Google_Service_CloudHealthcare_ParsedData');
class_alias(ParserConfig::class, 'Google_Service_CloudHealthcare_ParserConfig');
class_alias(PatientId::class, 'Google_Service_CloudHealthcare_PatientId');
class_alias(Policy::class, 'Google_Service_CloudHealthcare_Policy');
class_alias(ProgressCounter::class, 'Google_Service_CloudHealthcare_ProgressCounter');
class_alias(QueryAccessibleDataRequest::class, 'Google_Service_CloudHealthcare_QueryAccessibleDataRequest');
class_alias(QueryAccessibleDataResponse::class, 'Google_Service_CloudHealthcare_QueryAccessibleDataResponse');
class_alias(RedactConfig::class, 'Google_Service_CloudHealthcare_RedactConfig');
class_alias(RejectConsentRequest::class, 'Google_Service_CloudHealthcare_RejectConsentRequest');
class_alias(ReplaceWithInfoTypeConfig::class, 'Google_Service_CloudHealthcare_ReplaceWithInfoTypeConfig');
class_alias(Resources::class, 'Google_Service_CloudHealthcare_Resources');
class_alias(Result::class, 'Google_Service_CloudHealthcare_Result');
class_alias(RevokeConsentRequest::class, 'Google_Service_CloudHealthcare_RevokeConsentRequest');
class_alias(SchemaConfig::class, 'Google_Service_CloudHealthcare_SchemaConfig');
class_alias(SchemaGroup::class, 'Google_Service_CloudHealthcare_SchemaGroup');
class_alias(SchemaPackage::class, 'Google_Service_CloudHealthcare_SchemaPackage');
class_alias(SchemaSegment::class, 'Google_Service_CloudHealthcare_SchemaSegment');
class_alias(SchematizedData::class, 'Google_Service_CloudHealthcare_SchematizedData');
class_alias(SearchResourcesRequest::class, 'Google_Service_CloudHealthcare_SearchResourcesRequest');
class_alias(Segment::class, 'Google_Service_CloudHealthcare_Segment');
class_alias(SetIamPolicyRequest::class, 'Google_Service_CloudHealthcare_SetIamPolicyRequest');
class_alias(Signature::class, 'Google_Service_CloudHealthcare_Signature');
class_alias(Status::class, 'Google_Service_CloudHealthcare_Status');
class_alias(StreamConfig::class, 'Google_Service_CloudHealthcare_StreamConfig');
class_alias(TagFilterList::class, 'Google_Service_CloudHealthcare_TagFilterList');
class_alias(TestIamPermissionsRequest::class, 'Google_Service_CloudHealthcare_TestIamPermissionsRequest');
class_alias(TestIamPermissionsResponse::class, 'Google_Service_CloudHealthcare_TestIamPermissionsResponse');
class_alias(TextConfig::class, 'Google_Service_CloudHealthcare_TextConfig');
class_alias(TextSpan::class, 'Google_Service_CloudHealthcare_TextSpan');
class_alias(Type::class, 'Google_Service_CloudHealthcare_Type');
class_alias(UserDataMapping::class, 'Google_Service_CloudHealthcare_UserDataMapping');
class_alias(ValidationConfig::class, 'Google_Service_CloudHealthcare_ValidationConfig');
class_alias(VersionSource::class, 'Google_Service_CloudHealthcare_VersionSource');
