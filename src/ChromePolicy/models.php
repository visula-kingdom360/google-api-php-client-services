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

namespace Google\Service\ChromePolicy;

class ChromeCrosDpanelAutosettingsProtoPolicyApiLifecycle extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var GoogleTypeDate */
  public $endSupport;
  /** @var string */
  public $policyApiLifecycleStage;
  protected $endSupportType = GoogleTypeDate::class;
  protected $endSupportDataType = '';
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
  /** @param GoogleTypeDate */
  public function setEndSupport(GoogleTypeDate $endSupport)
  {
    $this->endSupport = $endSupport;
  }
  /** @return GoogleTypeDate */
  public function getEndSupport()
  {
    return $this->endSupport;
  }
  /** @param string */
  public function setPolicyApiLifecycleStage($policyApiLifecycleStage)
  {
    $this->policyApiLifecycleStage = $policyApiLifecycleStage;
  }
  /** @return string */
  public function getPolicyApiLifecycleStage()
  {
    return $this->policyApiLifecycleStage;
  }
}

class GoogleChromePolicyVersionsV1AdditionalTargetKeyName extends \Google\Model
{
  /** @var string */
  public $key;
  /** @var string */
  public $keyDescription;

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
  public function setKeyDescription($keyDescription)
  {
    $this->keyDescription = $keyDescription;
  }
  /** @return string */
  public function getKeyDescription()
  {
    return $this->keyDescription;
  }
}

class GoogleChromePolicyVersionsV1BatchDeleteGroupPoliciesRequest extends \Google\Collection
{
  /** @var GoogleChromePolicyVersionsV1DeleteGroupPolicyRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = GoogleChromePolicyVersionsV1DeleteGroupPolicyRequest::class;
  protected $requestsDataType = 'array';
  /** @param GoogleChromePolicyVersionsV1DeleteGroupPolicyRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return GoogleChromePolicyVersionsV1DeleteGroupPolicyRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class GoogleChromePolicyVersionsV1BatchInheritOrgUnitPoliciesRequest extends \Google\Collection
{
  /** @var GoogleChromePolicyVersionsV1InheritOrgUnitPolicyRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = GoogleChromePolicyVersionsV1InheritOrgUnitPolicyRequest::class;
  protected $requestsDataType = 'array';
  /** @param GoogleChromePolicyVersionsV1InheritOrgUnitPolicyRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return GoogleChromePolicyVersionsV1InheritOrgUnitPolicyRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class GoogleChromePolicyVersionsV1BatchModifyGroupPoliciesRequest extends \Google\Collection
{
  /** @var GoogleChromePolicyVersionsV1ModifyGroupPolicyRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = GoogleChromePolicyVersionsV1ModifyGroupPolicyRequest::class;
  protected $requestsDataType = 'array';
  /** @param GoogleChromePolicyVersionsV1ModifyGroupPolicyRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return GoogleChromePolicyVersionsV1ModifyGroupPolicyRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class GoogleChromePolicyVersionsV1BatchModifyOrgUnitPoliciesRequest extends \Google\Collection
{
  /** @var GoogleChromePolicyVersionsV1ModifyOrgUnitPolicyRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = GoogleChromePolicyVersionsV1ModifyOrgUnitPolicyRequest::class;
  protected $requestsDataType = 'array';
  /** @param GoogleChromePolicyVersionsV1ModifyOrgUnitPolicyRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return GoogleChromePolicyVersionsV1ModifyOrgUnitPolicyRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class GoogleChromePolicyVersionsV1CertificateReference extends \Google\Model
{
  /** @var string */
  public $network;
  /** @var string */
  public $orgUnitId;

  /** @param string */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /** @return string */
  public function getNetwork()
  {
    return $this->network;
  }
  /** @param string */
  public function setOrgUnitId($orgUnitId)
  {
    $this->orgUnitId = $orgUnitId;
  }
  /** @return string */
  public function getOrgUnitId()
  {
    return $this->orgUnitId;
  }
}

class GoogleChromePolicyVersionsV1DefineCertificateRequest extends \Google\Collection
{
  /** @var string */
  public $ceritificateName;
  /** @var string */
  public $certificate;
  /** @var GoogleChromePolicyVersionsV1NetworkSetting[] */
  public $settings;
  /** @var string */
  public $targetResource;
  protected $collection_key = 'settings';
  protected $settingsType = GoogleChromePolicyVersionsV1NetworkSetting::class;
  protected $settingsDataType = 'array';
  /** @param string */
  public function setCeritificateName($ceritificateName)
  {
    $this->ceritificateName = $ceritificateName;
  }
  /** @return string */
  public function getCeritificateName()
  {
    return $this->ceritificateName;
  }
  /** @param string */
  public function setCertificate($certificate)
  {
    $this->certificate = $certificate;
  }
  /** @return string */
  public function getCertificate()
  {
    return $this->certificate;
  }
  /** @param GoogleChromePolicyVersionsV1NetworkSetting[] */
  public function setSettings($settings)
  {
    $this->settings = $settings;
  }
  /** @return GoogleChromePolicyVersionsV1NetworkSetting[] */
  public function getSettings()
  {
    return $this->settings;
  }
  /** @param string */
  public function setTargetResource($targetResource)
  {
    $this->targetResource = $targetResource;
  }
  /** @return string */
  public function getTargetResource()
  {
    return $this->targetResource;
  }
}

class GoogleChromePolicyVersionsV1DefineCertificateResponse extends \Google\Collection
{
  /** @var string */
  public $networkId;
  /** @var GoogleChromePolicyVersionsV1NetworkSetting[] */
  public $settings;
  /** @var string */
  public $targetResource;
  protected $collection_key = 'settings';
  protected $settingsType = GoogleChromePolicyVersionsV1NetworkSetting::class;
  protected $settingsDataType = 'array';
  /** @param string */
  public function setNetworkId($networkId)
  {
    $this->networkId = $networkId;
  }
  /** @return string */
  public function getNetworkId()
  {
    return $this->networkId;
  }
  /** @param GoogleChromePolicyVersionsV1NetworkSetting[] */
  public function setSettings($settings)
  {
    $this->settings = $settings;
  }
  /** @return GoogleChromePolicyVersionsV1NetworkSetting[] */
  public function getSettings()
  {
    return $this->settings;
  }
  /** @param string */
  public function setTargetResource($targetResource)
  {
    $this->targetResource = $targetResource;
  }
  /** @return string */
  public function getTargetResource()
  {
    return $this->targetResource;
  }
}

class GoogleChromePolicyVersionsV1DefineNetworkRequest extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var GoogleChromePolicyVersionsV1NetworkSetting[] */
  public $settings;
  /** @var string */
  public $targetResource;
  protected $collection_key = 'settings';
  protected $settingsType = GoogleChromePolicyVersionsV1NetworkSetting::class;
  protected $settingsDataType = 'array';
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
  /** @param GoogleChromePolicyVersionsV1NetworkSetting[] */
  public function setSettings($settings)
  {
    $this->settings = $settings;
  }
  /** @return GoogleChromePolicyVersionsV1NetworkSetting[] */
  public function getSettings()
  {
    return $this->settings;
  }
  /** @param string */
  public function setTargetResource($targetResource)
  {
    $this->targetResource = $targetResource;
  }
  /** @return string */
  public function getTargetResource()
  {
    return $this->targetResource;
  }
}

class GoogleChromePolicyVersionsV1DefineNetworkResponse extends \Google\Collection
{
  /** @var string */
  public $networkId;
  /** @var GoogleChromePolicyVersionsV1NetworkSetting[] */
  public $settings;
  /** @var string */
  public $targetResource;
  protected $collection_key = 'settings';
  protected $settingsType = GoogleChromePolicyVersionsV1NetworkSetting::class;
  protected $settingsDataType = 'array';
  /** @param string */
  public function setNetworkId($networkId)
  {
    $this->networkId = $networkId;
  }
  /** @return string */
  public function getNetworkId()
  {
    return $this->networkId;
  }
  /** @param GoogleChromePolicyVersionsV1NetworkSetting[] */
  public function setSettings($settings)
  {
    $this->settings = $settings;
  }
  /** @return GoogleChromePolicyVersionsV1NetworkSetting[] */
  public function getSettings()
  {
    return $this->settings;
  }
  /** @param string */
  public function setTargetResource($targetResource)
  {
    $this->targetResource = $targetResource;
  }
  /** @return string */
  public function getTargetResource()
  {
    return $this->targetResource;
  }
}

class GoogleChromePolicyVersionsV1DeleteGroupPolicyRequest extends \Google\Model
{
  /** @var string */
  public $policySchema;
  /** @var GoogleChromePolicyVersionsV1PolicyTargetKey */
  public $policyTargetKey;
  protected $policyTargetKeyType = GoogleChromePolicyVersionsV1PolicyTargetKey::class;
  protected $policyTargetKeyDataType = '';
  /** @param string */
  public function setPolicySchema($policySchema)
  {
    $this->policySchema = $policySchema;
  }
  /** @return string */
  public function getPolicySchema()
  {
    return $this->policySchema;
  }
  /** @param GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function setPolicyTargetKey(GoogleChromePolicyVersionsV1PolicyTargetKey $policyTargetKey)
  {
    $this->policyTargetKey = $policyTargetKey;
  }
  /** @return GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function getPolicyTargetKey()
  {
    return $this->policyTargetKey;
  }
}

class GoogleChromePolicyVersionsV1InheritOrgUnitPolicyRequest extends \Google\Model
{
  /** @var string */
  public $policySchema;
  /** @var GoogleChromePolicyVersionsV1PolicyTargetKey */
  public $policyTargetKey;
  protected $policyTargetKeyType = GoogleChromePolicyVersionsV1PolicyTargetKey::class;
  protected $policyTargetKeyDataType = '';
  /** @param string */
  public function setPolicySchema($policySchema)
  {
    $this->policySchema = $policySchema;
  }
  /** @return string */
  public function getPolicySchema()
  {
    return $this->policySchema;
  }
  /** @param GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function setPolicyTargetKey(GoogleChromePolicyVersionsV1PolicyTargetKey $policyTargetKey)
  {
    $this->policyTargetKey = $policyTargetKey;
  }
  /** @return GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function getPolicyTargetKey()
  {
    return $this->policyTargetKey;
  }
}

class GoogleChromePolicyVersionsV1ListGroupPriorityOrderingRequest extends \Google\Model
{
  /** @var string */
  public $policyNamespace;
  /** @var GoogleChromePolicyVersionsV1PolicyTargetKey */
  public $policyTargetKey;
  protected $policyTargetKeyType = GoogleChromePolicyVersionsV1PolicyTargetKey::class;
  protected $policyTargetKeyDataType = '';
  /** @param string */
  public function setPolicyNamespace($policyNamespace)
  {
    $this->policyNamespace = $policyNamespace;
  }
  /** @return string */
  public function getPolicyNamespace()
  {
    return $this->policyNamespace;
  }
  /** @param GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function setPolicyTargetKey(GoogleChromePolicyVersionsV1PolicyTargetKey $policyTargetKey)
  {
    $this->policyTargetKey = $policyTargetKey;
  }
  /** @return GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function getPolicyTargetKey()
  {
    return $this->policyTargetKey;
  }
}

class GoogleChromePolicyVersionsV1ListGroupPriorityOrderingResponse extends \Google\Collection
{
  /** @var string[] */
  public $groupIds;
  /** @var string */
  public $policyNamespace;
  /** @var GoogleChromePolicyVersionsV1PolicyTargetKey */
  public $policyTargetKey;
  protected $collection_key = 'groupIds';
  protected $policyTargetKeyType = GoogleChromePolicyVersionsV1PolicyTargetKey::class;
  protected $policyTargetKeyDataType = '';
  /** @param string[] */
  public function setGroupIds($groupIds)
  {
    $this->groupIds = $groupIds;
  }
  /** @return string[] */
  public function getGroupIds()
  {
    return $this->groupIds;
  }
  /** @param string */
  public function setPolicyNamespace($policyNamespace)
  {
    $this->policyNamespace = $policyNamespace;
  }
  /** @return string */
  public function getPolicyNamespace()
  {
    return $this->policyNamespace;
  }
  /** @param GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function setPolicyTargetKey(GoogleChromePolicyVersionsV1PolicyTargetKey $policyTargetKey)
  {
    $this->policyTargetKey = $policyTargetKey;
  }
  /** @return GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function getPolicyTargetKey()
  {
    return $this->policyTargetKey;
  }
}

class GoogleChromePolicyVersionsV1ListPolicySchemasResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleChromePolicyVersionsV1PolicySchema[] */
  public $policySchemas;
  protected $collection_key = 'policySchemas';
  protected $policySchemasType = GoogleChromePolicyVersionsV1PolicySchema::class;
  protected $policySchemasDataType = 'array';
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
  /** @param GoogleChromePolicyVersionsV1PolicySchema[] */
  public function setPolicySchemas($policySchemas)
  {
    $this->policySchemas = $policySchemas;
  }
  /** @return GoogleChromePolicyVersionsV1PolicySchema[] */
  public function getPolicySchemas()
  {
    return $this->policySchemas;
  }
}

class GoogleChromePolicyVersionsV1ModifyGroupPolicyRequest extends \Google\Model
{
  /** @var GoogleChromePolicyVersionsV1PolicyTargetKey */
  public $policyTargetKey;
  /** @var GoogleChromePolicyVersionsV1PolicyValue */
  public $policyValue;
  /** @var string */
  public $updateMask;
  protected $policyTargetKeyType = GoogleChromePolicyVersionsV1PolicyTargetKey::class;
  protected $policyTargetKeyDataType = '';
  protected $policyValueType = GoogleChromePolicyVersionsV1PolicyValue::class;
  protected $policyValueDataType = '';
  /** @param GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function setPolicyTargetKey(GoogleChromePolicyVersionsV1PolicyTargetKey $policyTargetKey)
  {
    $this->policyTargetKey = $policyTargetKey;
  }
  /** @return GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function getPolicyTargetKey()
  {
    return $this->policyTargetKey;
  }
  /** @param GoogleChromePolicyVersionsV1PolicyValue */
  public function setPolicyValue(GoogleChromePolicyVersionsV1PolicyValue $policyValue)
  {
    $this->policyValue = $policyValue;
  }
  /** @return GoogleChromePolicyVersionsV1PolicyValue */
  public function getPolicyValue()
  {
    return $this->policyValue;
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

class GoogleChromePolicyVersionsV1ModifyOrgUnitPolicyRequest extends \Google\Model
{
  /** @var GoogleChromePolicyVersionsV1PolicyTargetKey */
  public $policyTargetKey;
  /** @var GoogleChromePolicyVersionsV1PolicyValue */
  public $policyValue;
  /** @var string */
  public $updateMask;
  protected $policyTargetKeyType = GoogleChromePolicyVersionsV1PolicyTargetKey::class;
  protected $policyTargetKeyDataType = '';
  protected $policyValueType = GoogleChromePolicyVersionsV1PolicyValue::class;
  protected $policyValueDataType = '';
  /** @param GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function setPolicyTargetKey(GoogleChromePolicyVersionsV1PolicyTargetKey $policyTargetKey)
  {
    $this->policyTargetKey = $policyTargetKey;
  }
  /** @return GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function getPolicyTargetKey()
  {
    return $this->policyTargetKey;
  }
  /** @param GoogleChromePolicyVersionsV1PolicyValue */
  public function setPolicyValue(GoogleChromePolicyVersionsV1PolicyValue $policyValue)
  {
    $this->policyValue = $policyValue;
  }
  /** @return GoogleChromePolicyVersionsV1PolicyValue */
  public function getPolicyValue()
  {
    return $this->policyValue;
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

class GoogleChromePolicyVersionsV1NetworkSetting extends \Google\Model
{
  /** @var string */
  public $policySchema;
  /** @var array[] */
  public $value;

  /** @param string */
  public function setPolicySchema($policySchema)
  {
    $this->policySchema = $policySchema;
  }
  /** @return string */
  public function getPolicySchema()
  {
    return $this->policySchema;
  }
  /** @param array[] */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return array[] */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleChromePolicyVersionsV1PolicyModificationFieldError extends \Google\Model
{
  /** @var string */
  public $error;
  /** @var string */
  public $field;

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
  /** @param string */
  public function setField($field)
  {
    $this->field = $field;
  }
  /** @return string */
  public function getField()
  {
    return $this->field;
  }
}

class GoogleChromePolicyVersionsV1PolicySchema extends \Google\Collection
{
  /** @var string[] */
  public $accessRestrictions;
  /** @var GoogleChromePolicyVersionsV1AdditionalTargetKeyName[] */
  public $additionalTargetKeyNames;
  /** @var string */
  public $categoryTitle;
  /** @var Proto2FileDescriptorProto */
  public $definition;
  /** @var GoogleChromePolicyVersionsV1PolicySchemaFieldDescription[] */
  public $fieldDescriptions;
  /** @var string */
  public $name;
  /** @var GoogleChromePolicyVersionsV1PolicySchemaNoticeDescription[] */
  public $notices;
  /** @var ChromeCrosDpanelAutosettingsProtoPolicyApiLifecycle */
  public $policyApiLifecycle;
  /** @var ChromeCrosDpanelAutosettingsProtoPolicyApiLifecycle */
  public $policyApiLifeycle;
  /** @var string */
  public $policyDescription;
  /** @var string */
  public $schemaName;
  /** @var string */
  public $supportUri;
  /** @var string[] */
  public $validTargetResources;
  protected $collection_key = 'validTargetResources';
  protected $additionalTargetKeyNamesType = GoogleChromePolicyVersionsV1AdditionalTargetKeyName::class;
  protected $additionalTargetKeyNamesDataType = 'array';
  protected $definitionType = Proto2FileDescriptorProto::class;
  protected $definitionDataType = '';
  protected $fieldDescriptionsType = GoogleChromePolicyVersionsV1PolicySchemaFieldDescription::class;
  protected $fieldDescriptionsDataType = 'array';
  protected $noticesType = GoogleChromePolicyVersionsV1PolicySchemaNoticeDescription::class;
  protected $noticesDataType = 'array';
  protected $policyApiLifecycleType = ChromeCrosDpanelAutosettingsProtoPolicyApiLifecycle::class;
  protected $policyApiLifecycleDataType = '';
  protected $policyApiLifeycleType = ChromeCrosDpanelAutosettingsProtoPolicyApiLifecycle::class;
  protected $policyApiLifeycleDataType = '';
  /** @param string[] */
  public function setAccessRestrictions($accessRestrictions)
  {
    $this->accessRestrictions = $accessRestrictions;
  }
  /** @return string[] */
  public function getAccessRestrictions()
  {
    return $this->accessRestrictions;
  }
  /** @param GoogleChromePolicyVersionsV1AdditionalTargetKeyName[] */
  public function setAdditionalTargetKeyNames($additionalTargetKeyNames)
  {
    $this->additionalTargetKeyNames = $additionalTargetKeyNames;
  }
  /** @return GoogleChromePolicyVersionsV1AdditionalTargetKeyName[] */
  public function getAdditionalTargetKeyNames()
  {
    return $this->additionalTargetKeyNames;
  }
  /** @param string */
  public function setCategoryTitle($categoryTitle)
  {
    $this->categoryTitle = $categoryTitle;
  }
  /** @return string */
  public function getCategoryTitle()
  {
    return $this->categoryTitle;
  }
  /** @param Proto2FileDescriptorProto */
  public function setDefinition(Proto2FileDescriptorProto $definition)
  {
    $this->definition = $definition;
  }
  /** @return Proto2FileDescriptorProto */
  public function getDefinition()
  {
    return $this->definition;
  }
  /** @param GoogleChromePolicyVersionsV1PolicySchemaFieldDescription[] */
  public function setFieldDescriptions($fieldDescriptions)
  {
    $this->fieldDescriptions = $fieldDescriptions;
  }
  /** @return GoogleChromePolicyVersionsV1PolicySchemaFieldDescription[] */
  public function getFieldDescriptions()
  {
    return $this->fieldDescriptions;
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
  /** @param GoogleChromePolicyVersionsV1PolicySchemaNoticeDescription[] */
  public function setNotices($notices)
  {
    $this->notices = $notices;
  }
  /** @return GoogleChromePolicyVersionsV1PolicySchemaNoticeDescription[] */
  public function getNotices()
  {
    return $this->notices;
  }
  /** @param ChromeCrosDpanelAutosettingsProtoPolicyApiLifecycle */
  public function setPolicyApiLifecycle(ChromeCrosDpanelAutosettingsProtoPolicyApiLifecycle $policyApiLifecycle)
  {
    $this->policyApiLifecycle = $policyApiLifecycle;
  }
  /** @return ChromeCrosDpanelAutosettingsProtoPolicyApiLifecycle */
  public function getPolicyApiLifecycle()
  {
    return $this->policyApiLifecycle;
  }
  /** @param ChromeCrosDpanelAutosettingsProtoPolicyApiLifecycle */
  public function setPolicyApiLifeycle(ChromeCrosDpanelAutosettingsProtoPolicyApiLifecycle $policyApiLifeycle)
  {
    $this->policyApiLifeycle = $policyApiLifeycle;
  }
  /** @return ChromeCrosDpanelAutosettingsProtoPolicyApiLifecycle */
  public function getPolicyApiLifeycle()
  {
    return $this->policyApiLifeycle;
  }
  /** @param string */
  public function setPolicyDescription($policyDescription)
  {
    $this->policyDescription = $policyDescription;
  }
  /** @return string */
  public function getPolicyDescription()
  {
    return $this->policyDescription;
  }
  /** @param string */
  public function setSchemaName($schemaName)
  {
    $this->schemaName = $schemaName;
  }
  /** @return string */
  public function getSchemaName()
  {
    return $this->schemaName;
  }
  /** @param string */
  public function setSupportUri($supportUri)
  {
    $this->supportUri = $supportUri;
  }
  /** @return string */
  public function getSupportUri()
  {
    return $this->supportUri;
  }
  /** @param string[] */
  public function setValidTargetResources($validTargetResources)
  {
    $this->validTargetResources = $validTargetResources;
  }
  /** @return string[] */
  public function getValidTargetResources()
  {
    return $this->validTargetResources;
  }
}

class GoogleChromePolicyVersionsV1PolicySchemaFieldDependencies extends \Google\Model
{
  /** @var string */
  public $sourceField;
  /** @var string */
  public $sourceFieldValue;

  /** @param string */
  public function setSourceField($sourceField)
  {
    $this->sourceField = $sourceField;
  }
  /** @return string */
  public function getSourceField()
  {
    return $this->sourceField;
  }
  /** @param string */
  public function setSourceFieldValue($sourceFieldValue)
  {
    $this->sourceFieldValue = $sourceFieldValue;
  }
  /** @return string */
  public function getSourceFieldValue()
  {
    return $this->sourceFieldValue;
  }
}

class GoogleChromePolicyVersionsV1PolicySchemaFieldDescription extends \Google\Collection
{
  /** @var array */
  public $defaultValue;
  /** @var string */
  public $description;
  /** @var string */
  public $field;
  /** @var GoogleChromePolicyVersionsV1PolicySchemaFieldDependencies[] */
  public $fieldDependencies;
  /** @var string */
  public $fieldDescription;
  /** @var string */
  public $inputConstraint;
  /** @var GoogleChromePolicyVersionsV1PolicySchemaFieldKnownValueDescription[] */
  public $knownValueDescriptions;
  /** @var string */
  public $name;
  /** @var GoogleChromePolicyVersionsV1PolicySchemaFieldDescription[] */
  public $nestedFieldDescriptions;
  /** @var GoogleChromePolicyVersionsV1PolicySchemaRequiredItems[] */
  public $requiredItems;
  protected $collection_key = 'requiredItems';
  protected $fieldDependenciesType = GoogleChromePolicyVersionsV1PolicySchemaFieldDependencies::class;
  protected $fieldDependenciesDataType = 'array';
  protected $knownValueDescriptionsType = GoogleChromePolicyVersionsV1PolicySchemaFieldKnownValueDescription::class;
  protected $knownValueDescriptionsDataType = 'array';
  protected $nestedFieldDescriptionsType = GoogleChromePolicyVersionsV1PolicySchemaFieldDescription::class;
  protected $nestedFieldDescriptionsDataType = 'array';
  protected $requiredItemsType = GoogleChromePolicyVersionsV1PolicySchemaRequiredItems::class;
  protected $requiredItemsDataType = 'array';
  /** @param array */
  public function setDefaultValue($defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /** @return array */
  public function getDefaultValue()
  {
    return $this->defaultValue;
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
  public function setField($field)
  {
    $this->field = $field;
  }
  /** @return string */
  public function getField()
  {
    return $this->field;
  }
  /** @param GoogleChromePolicyVersionsV1PolicySchemaFieldDependencies[] */
  public function setFieldDependencies($fieldDependencies)
  {
    $this->fieldDependencies = $fieldDependencies;
  }
  /** @return GoogleChromePolicyVersionsV1PolicySchemaFieldDependencies[] */
  public function getFieldDependencies()
  {
    return $this->fieldDependencies;
  }
  /** @param string */
  public function setFieldDescription($fieldDescription)
  {
    $this->fieldDescription = $fieldDescription;
  }
  /** @return string */
  public function getFieldDescription()
  {
    return $this->fieldDescription;
  }
  /** @param string */
  public function setInputConstraint($inputConstraint)
  {
    $this->inputConstraint = $inputConstraint;
  }
  /** @return string */
  public function getInputConstraint()
  {
    return $this->inputConstraint;
  }
  /** @param GoogleChromePolicyVersionsV1PolicySchemaFieldKnownValueDescription[] */
  public function setKnownValueDescriptions($knownValueDescriptions)
  {
    $this->knownValueDescriptions = $knownValueDescriptions;
  }
  /** @return GoogleChromePolicyVersionsV1PolicySchemaFieldKnownValueDescription[] */
  public function getKnownValueDescriptions()
  {
    return $this->knownValueDescriptions;
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
  /** @param GoogleChromePolicyVersionsV1PolicySchemaFieldDescription[] */
  public function setNestedFieldDescriptions($nestedFieldDescriptions)
  {
    $this->nestedFieldDescriptions = $nestedFieldDescriptions;
  }
  /** @return GoogleChromePolicyVersionsV1PolicySchemaFieldDescription[] */
  public function getNestedFieldDescriptions()
  {
    return $this->nestedFieldDescriptions;
  }
  /** @param GoogleChromePolicyVersionsV1PolicySchemaRequiredItems[] */
  public function setRequiredItems($requiredItems)
  {
    $this->requiredItems = $requiredItems;
  }
  /** @return GoogleChromePolicyVersionsV1PolicySchemaRequiredItems[] */
  public function getRequiredItems()
  {
    return $this->requiredItems;
  }
}

class GoogleChromePolicyVersionsV1PolicySchemaFieldKnownValueDescription extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $value;

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

class GoogleChromePolicyVersionsV1PolicySchemaNoticeDescription extends \Google\Model
{
  /** @var bool */
  public $acknowledgementRequired;
  /** @var string */
  public $field;
  /** @var string */
  public $noticeMessage;
  /** @var string */
  public $noticeValue;

  /** @param bool */
  public function setAcknowledgementRequired($acknowledgementRequired)
  {
    $this->acknowledgementRequired = $acknowledgementRequired;
  }
  /** @return bool */
  public function getAcknowledgementRequired()
  {
    return $this->acknowledgementRequired;
  }
  /** @param string */
  public function setField($field)
  {
    $this->field = $field;
  }
  /** @return string */
  public function getField()
  {
    return $this->field;
  }
  /** @param string */
  public function setNoticeMessage($noticeMessage)
  {
    $this->noticeMessage = $noticeMessage;
  }
  /** @return string */
  public function getNoticeMessage()
  {
    return $this->noticeMessage;
  }
  /** @param string */
  public function setNoticeValue($noticeValue)
  {
    $this->noticeValue = $noticeValue;
  }
  /** @return string */
  public function getNoticeValue()
  {
    return $this->noticeValue;
  }
}

class GoogleChromePolicyVersionsV1PolicySchemaRequiredItems extends \Google\Collection
{
  /** @var string[] */
  public $fieldConditions;
  /** @var string[] */
  public $requiredFields;
  protected $collection_key = 'requiredFields';
  /** @param string[] */
  public function setFieldConditions($fieldConditions)
  {
    $this->fieldConditions = $fieldConditions;
  }
  /** @return string[] */
  public function getFieldConditions()
  {
    return $this->fieldConditions;
  }
  /** @param string[] */
  public function setRequiredFields($requiredFields)
  {
    $this->requiredFields = $requiredFields;
  }
  /** @return string[] */
  public function getRequiredFields()
  {
    return $this->requiredFields;
  }
}

class GoogleChromePolicyVersionsV1PolicyTargetKey extends \Google\Model
{
  /** @var string[] */
  public $additionalTargetKeys;
  /** @var string */
  public $targetResource;

  /** @param string[] */
  public function setAdditionalTargetKeys($additionalTargetKeys)
  {
    $this->additionalTargetKeys = $additionalTargetKeys;
  }
  /** @return string[] */
  public function getAdditionalTargetKeys()
  {
    return $this->additionalTargetKeys;
  }
  /** @param string */
  public function setTargetResource($targetResource)
  {
    $this->targetResource = $targetResource;
  }
  /** @return string */
  public function getTargetResource()
  {
    return $this->targetResource;
  }
}

class GoogleChromePolicyVersionsV1PolicyValue extends \Google\Model
{
  /** @var string */
  public $policySchema;
  /** @var array[] */
  public $value;

  /** @param string */
  public function setPolicySchema($policySchema)
  {
    $this->policySchema = $policySchema;
  }
  /** @return string */
  public function getPolicySchema()
  {
    return $this->policySchema;
  }
  /** @param array[] */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return array[] */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleChromePolicyVersionsV1RemoveCertificateErrorDetails extends \Google\Collection
{
  /** @var GoogleChromePolicyVersionsV1CertificateReference[] */
  public $certificateReferences;
  protected $collection_key = 'certificateReferences';
  protected $certificateReferencesType = GoogleChromePolicyVersionsV1CertificateReference::class;
  protected $certificateReferencesDataType = 'array';
  /** @param GoogleChromePolicyVersionsV1CertificateReference[] */
  public function setCertificateReferences($certificateReferences)
  {
    $this->certificateReferences = $certificateReferences;
  }
  /** @return GoogleChromePolicyVersionsV1CertificateReference[] */
  public function getCertificateReferences()
  {
    return $this->certificateReferences;
  }
}

class GoogleChromePolicyVersionsV1RemoveCertificateRequest extends \Google\Model
{
  /** @var string */
  public $networkId;
  /** @var string */
  public $targetResource;

  /** @param string */
  public function setNetworkId($networkId)
  {
    $this->networkId = $networkId;
  }
  /** @return string */
  public function getNetworkId()
  {
    return $this->networkId;
  }
  /** @param string */
  public function setTargetResource($targetResource)
  {
    $this->targetResource = $targetResource;
  }
  /** @return string */
  public function getTargetResource()
  {
    return $this->targetResource;
  }
}

class GoogleChromePolicyVersionsV1RemoveCertificateResponse extends \Google\Model
{
}

class GoogleChromePolicyVersionsV1RemoveNetworkRequest extends \Google\Model
{
  /** @var string */
  public $networkId;
  /** @var string */
  public $targetResource;

  /** @param string */
  public function setNetworkId($networkId)
  {
    $this->networkId = $networkId;
  }
  /** @return string */
  public function getNetworkId()
  {
    return $this->networkId;
  }
  /** @param string */
  public function setTargetResource($targetResource)
  {
    $this->targetResource = $targetResource;
  }
  /** @return string */
  public function getTargetResource()
  {
    return $this->targetResource;
  }
}

class GoogleChromePolicyVersionsV1RemoveNetworkResponse extends \Google\Model
{
}

class GoogleChromePolicyVersionsV1ResolveRequest extends \Google\Model
{
  /** @var int */
  public $pageSize;
  /** @var string */
  public $pageToken;
  /** @var string */
  public $policySchemaFilter;
  /** @var GoogleChromePolicyVersionsV1PolicyTargetKey */
  public $policyTargetKey;
  protected $policyTargetKeyType = GoogleChromePolicyVersionsV1PolicyTargetKey::class;
  protected $policyTargetKeyDataType = '';
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
  /** @param string */
  public function setPolicySchemaFilter($policySchemaFilter)
  {
    $this->policySchemaFilter = $policySchemaFilter;
  }
  /** @return string */
  public function getPolicySchemaFilter()
  {
    return $this->policySchemaFilter;
  }
  /** @param GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function setPolicyTargetKey(GoogleChromePolicyVersionsV1PolicyTargetKey $policyTargetKey)
  {
    $this->policyTargetKey = $policyTargetKey;
  }
  /** @return GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function getPolicyTargetKey()
  {
    return $this->policyTargetKey;
  }
}

class GoogleChromePolicyVersionsV1ResolveResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var GoogleChromePolicyVersionsV1ResolvedPolicy[] */
  public $resolvedPolicies;
  protected $collection_key = 'resolvedPolicies';
  protected $resolvedPoliciesType = GoogleChromePolicyVersionsV1ResolvedPolicy::class;
  protected $resolvedPoliciesDataType = 'array';
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
  /** @param GoogleChromePolicyVersionsV1ResolvedPolicy[] */
  public function setResolvedPolicies($resolvedPolicies)
  {
    $this->resolvedPolicies = $resolvedPolicies;
  }
  /** @return GoogleChromePolicyVersionsV1ResolvedPolicy[] */
  public function getResolvedPolicies()
  {
    return $this->resolvedPolicies;
  }
}

class GoogleChromePolicyVersionsV1ResolvedPolicy extends \Google\Model
{
  /** @var GoogleChromePolicyVersionsV1PolicyTargetKey */
  public $addedSourceKey;
  /** @var GoogleChromePolicyVersionsV1PolicyTargetKey */
  public $sourceKey;
  /** @var GoogleChromePolicyVersionsV1PolicyTargetKey */
  public $targetKey;
  /** @var GoogleChromePolicyVersionsV1PolicyValue */
  public $value;
  protected $addedSourceKeyType = GoogleChromePolicyVersionsV1PolicyTargetKey::class;
  protected $addedSourceKeyDataType = '';
  protected $sourceKeyType = GoogleChromePolicyVersionsV1PolicyTargetKey::class;
  protected $sourceKeyDataType = '';
  protected $targetKeyType = GoogleChromePolicyVersionsV1PolicyTargetKey::class;
  protected $targetKeyDataType = '';
  protected $valueType = GoogleChromePolicyVersionsV1PolicyValue::class;
  protected $valueDataType = '';
  /** @param GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function setAddedSourceKey(GoogleChromePolicyVersionsV1PolicyTargetKey $addedSourceKey)
  {
    $this->addedSourceKey = $addedSourceKey;
  }
  /** @return GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function getAddedSourceKey()
  {
    return $this->addedSourceKey;
  }
  /** @param GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function setSourceKey(GoogleChromePolicyVersionsV1PolicyTargetKey $sourceKey)
  {
    $this->sourceKey = $sourceKey;
  }
  /** @return GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function getSourceKey()
  {
    return $this->sourceKey;
  }
  /** @param GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function setTargetKey(GoogleChromePolicyVersionsV1PolicyTargetKey $targetKey)
  {
    $this->targetKey = $targetKey;
  }
  /** @return GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function getTargetKey()
  {
    return $this->targetKey;
  }
  /** @param GoogleChromePolicyVersionsV1PolicyValue */
  public function setValue(GoogleChromePolicyVersionsV1PolicyValue $value)
  {
    $this->value = $value;
  }
  /** @return GoogleChromePolicyVersionsV1PolicyValue */
  public function getValue()
  {
    return $this->value;
  }
}

class GoogleChromePolicyVersionsV1UpdateGroupPriorityOrderingRequest extends \Google\Collection
{
  /** @var string[] */
  public $groupIds;
  /** @var string */
  public $policyNamespace;
  /** @var GoogleChromePolicyVersionsV1PolicyTargetKey */
  public $policyTargetKey;
  protected $collection_key = 'groupIds';
  protected $policyTargetKeyType = GoogleChromePolicyVersionsV1PolicyTargetKey::class;
  protected $policyTargetKeyDataType = '';
  /** @param string[] */
  public function setGroupIds($groupIds)
  {
    $this->groupIds = $groupIds;
  }
  /** @return string[] */
  public function getGroupIds()
  {
    return $this->groupIds;
  }
  /** @param string */
  public function setPolicyNamespace($policyNamespace)
  {
    $this->policyNamespace = $policyNamespace;
  }
  /** @return string */
  public function getPolicyNamespace()
  {
    return $this->policyNamespace;
  }
  /** @param GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function setPolicyTargetKey(GoogleChromePolicyVersionsV1PolicyTargetKey $policyTargetKey)
  {
    $this->policyTargetKey = $policyTargetKey;
  }
  /** @return GoogleChromePolicyVersionsV1PolicyTargetKey */
  public function getPolicyTargetKey()
  {
    return $this->policyTargetKey;
  }
}

class GoogleChromePolicyVersionsV1UploadPolicyFileRequest extends \Google\Model
{
  /** @var string */
  public $policyField;

  /** @param string */
  public function setPolicyField($policyField)
  {
    $this->policyField = $policyField;
  }
  /** @return string */
  public function getPolicyField()
  {
    return $this->policyField;
  }
}

class GoogleChromePolicyVersionsV1UploadPolicyFileResponse extends \Google\Model
{
  /** @var string */
  public $downloadUri;

  /** @param string */
  public function setDownloadUri($downloadUri)
  {
    $this->downloadUri = $downloadUri;
  }
  /** @return string */
  public function getDownloadUri()
  {
    return $this->downloadUri;
  }
}

class GoogleProtobufEmpty extends \Google\Model
{
}

class GoogleTypeDate extends \Google\Model
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

class Proto2DescriptorProto extends \Google\Collection
{
  /** @var Proto2EnumDescriptorProto[] */
  public $enumType;
  /** @var Proto2FieldDescriptorProto[] */
  public $field;
  /** @var string */
  public $name;
  /** @var Proto2DescriptorProto[] */
  public $nestedType;
  /** @var Proto2OneofDescriptorProto[] */
  public $oneofDecl;
  protected $collection_key = 'oneofDecl';
  protected $enumTypeType = Proto2EnumDescriptorProto::class;
  protected $enumTypeDataType = 'array';
  protected $fieldType = Proto2FieldDescriptorProto::class;
  protected $fieldDataType = 'array';
  protected $nestedTypeType = Proto2DescriptorProto::class;
  protected $nestedTypeDataType = 'array';
  protected $oneofDeclType = Proto2OneofDescriptorProto::class;
  protected $oneofDeclDataType = 'array';
  /** @param Proto2EnumDescriptorProto[] */
  public function setEnumType($enumType)
  {
    $this->enumType = $enumType;
  }
  /** @return Proto2EnumDescriptorProto[] */
  public function getEnumType()
  {
    return $this->enumType;
  }
  /** @param Proto2FieldDescriptorProto[] */
  public function setField($field)
  {
    $this->field = $field;
  }
  /** @return Proto2FieldDescriptorProto[] */
  public function getField()
  {
    return $this->field;
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
  /** @param Proto2DescriptorProto[] */
  public function setNestedType($nestedType)
  {
    $this->nestedType = $nestedType;
  }
  /** @return Proto2DescriptorProto[] */
  public function getNestedType()
  {
    return $this->nestedType;
  }
  /** @param Proto2OneofDescriptorProto[] */
  public function setOneofDecl($oneofDecl)
  {
    $this->oneofDecl = $oneofDecl;
  }
  /** @return Proto2OneofDescriptorProto[] */
  public function getOneofDecl()
  {
    return $this->oneofDecl;
  }
}

class Proto2EnumDescriptorProto extends \Google\Collection
{
  /** @var string */
  public $name;
  /** @var Proto2EnumValueDescriptorProto[] */
  public $value;
  protected $collection_key = 'value';
  protected $valueType = Proto2EnumValueDescriptorProto::class;
  protected $valueDataType = 'array';
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
  /** @param Proto2EnumValueDescriptorProto[] */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /** @return Proto2EnumValueDescriptorProto[] */
  public function getValue()
  {
    return $this->value;
  }
}

class Proto2EnumValueDescriptorProto extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var int */
  public $number;

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
  /** @param int */
  public function setNumber($number)
  {
    $this->number = $number;
  }
  /** @return int */
  public function getNumber()
  {
    return $this->number;
  }
}

class Proto2FieldDescriptorProto extends \Google\Model
{
  /** @var string */
  public $defaultValue;
  /** @var string */
  public $jsonName;
  /** @var string */
  public $label;
  /** @var string */
  public $name;
  /** @var int */
  public $number;
  /** @var int */
  public $oneofIndex;
  /** @var bool */
  public $proto3Optional;
  /** @var string */
  public $type;
  /** @var string */
  public $typeName;

  /** @param string */
  public function setDefaultValue($defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /** @return string */
  public function getDefaultValue()
  {
    return $this->defaultValue;
  }
  /** @param string */
  public function setJsonName($jsonName)
  {
    $this->jsonName = $jsonName;
  }
  /** @return string */
  public function getJsonName()
  {
    return $this->jsonName;
  }
  /** @param string */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /** @return string */
  public function getLabel()
  {
    return $this->label;
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
  /** @param int */
  public function setNumber($number)
  {
    $this->number = $number;
  }
  /** @return int */
  public function getNumber()
  {
    return $this->number;
  }
  /** @param int */
  public function setOneofIndex($oneofIndex)
  {
    $this->oneofIndex = $oneofIndex;
  }
  /** @return int */
  public function getOneofIndex()
  {
    return $this->oneofIndex;
  }
  /** @param bool */
  public function setProto3Optional($proto3Optional)
  {
    $this->proto3Optional = $proto3Optional;
  }
  /** @return bool */
  public function getProto3Optional()
  {
    return $this->proto3Optional;
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
  public function setTypeName($typeName)
  {
    $this->typeName = $typeName;
  }
  /** @return string */
  public function getTypeName()
  {
    return $this->typeName;
  }
}

class Proto2FileDescriptorProto extends \Google\Collection
{
  /** @var Proto2EnumDescriptorProto[] */
  public $enumType;
  /** @var Proto2DescriptorProto[] */
  public $messageType;
  /** @var string */
  public $name;
  /** @var string */
  public $package;
  /** @var string */
  public $syntax;
  protected $collection_key = 'messageType';
  protected $enumTypeType = Proto2EnumDescriptorProto::class;
  protected $enumTypeDataType = 'array';
  protected $messageTypeType = Proto2DescriptorProto::class;
  protected $messageTypeDataType = 'array';
  /** @param Proto2EnumDescriptorProto[] */
  public function setEnumType($enumType)
  {
    $this->enumType = $enumType;
  }
  /** @return Proto2EnumDescriptorProto[] */
  public function getEnumType()
  {
    return $this->enumType;
  }
  /** @param Proto2DescriptorProto[] */
  public function setMessageType($messageType)
  {
    $this->messageType = $messageType;
  }
  /** @return Proto2DescriptorProto[] */
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
  /** @param string */
  public function setPackage($package)
  {
    $this->package = $package;
  }
  /** @return string */
  public function getPackage()
  {
    return $this->package;
  }
  /** @param string */
  public function setSyntax($syntax)
  {
    $this->syntax = $syntax;
  }
  /** @return string */
  public function getSyntax()
  {
    return $this->syntax;
  }
}

class Proto2OneofDescriptorProto extends \Google\Model
{
  /** @var string */
  public $name;

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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChromeCrosDpanelAutosettingsProtoPolicyApiLifecycle::class, 'Google_Service_ChromePolicy_ChromeCrosDpanelAutosettingsProtoPolicyApiLifecycle');
class_alias(GoogleChromePolicyVersionsV1AdditionalTargetKeyName::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1AdditionalTargetKeyName');
class_alias(GoogleChromePolicyVersionsV1BatchDeleteGroupPoliciesRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1BatchDeleteGroupPoliciesRequest');
class_alias(GoogleChromePolicyVersionsV1BatchInheritOrgUnitPoliciesRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1BatchInheritOrgUnitPoliciesRequest');
class_alias(GoogleChromePolicyVersionsV1BatchModifyGroupPoliciesRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1BatchModifyGroupPoliciesRequest');
class_alias(GoogleChromePolicyVersionsV1BatchModifyOrgUnitPoliciesRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1BatchModifyOrgUnitPoliciesRequest');
class_alias(GoogleChromePolicyVersionsV1CertificateReference::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1CertificateReference');
class_alias(GoogleChromePolicyVersionsV1DefineCertificateRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1DefineCertificateRequest');
class_alias(GoogleChromePolicyVersionsV1DefineCertificateResponse::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1DefineCertificateResponse');
class_alias(GoogleChromePolicyVersionsV1DefineNetworkRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1DefineNetworkRequest');
class_alias(GoogleChromePolicyVersionsV1DefineNetworkResponse::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1DefineNetworkResponse');
class_alias(GoogleChromePolicyVersionsV1DeleteGroupPolicyRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1DeleteGroupPolicyRequest');
class_alias(GoogleChromePolicyVersionsV1InheritOrgUnitPolicyRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1InheritOrgUnitPolicyRequest');
class_alias(GoogleChromePolicyVersionsV1ListGroupPriorityOrderingRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1ListGroupPriorityOrderingRequest');
class_alias(GoogleChromePolicyVersionsV1ListGroupPriorityOrderingResponse::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1ListGroupPriorityOrderingResponse');
class_alias(GoogleChromePolicyVersionsV1ListPolicySchemasResponse::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1ListPolicySchemasResponse');
class_alias(GoogleChromePolicyVersionsV1ModifyGroupPolicyRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1ModifyGroupPolicyRequest');
class_alias(GoogleChromePolicyVersionsV1ModifyOrgUnitPolicyRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1ModifyOrgUnitPolicyRequest');
class_alias(GoogleChromePolicyVersionsV1NetworkSetting::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1NetworkSetting');
class_alias(GoogleChromePolicyVersionsV1PolicyModificationFieldError::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1PolicyModificationFieldError');
class_alias(GoogleChromePolicyVersionsV1PolicySchema::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1PolicySchema');
class_alias(GoogleChromePolicyVersionsV1PolicySchemaFieldDependencies::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1PolicySchemaFieldDependencies');
class_alias(GoogleChromePolicyVersionsV1PolicySchemaFieldDescription::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1PolicySchemaFieldDescription');
class_alias(GoogleChromePolicyVersionsV1PolicySchemaFieldKnownValueDescription::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1PolicySchemaFieldKnownValueDescription');
class_alias(GoogleChromePolicyVersionsV1PolicySchemaNoticeDescription::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1PolicySchemaNoticeDescription');
class_alias(GoogleChromePolicyVersionsV1PolicySchemaRequiredItems::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1PolicySchemaRequiredItems');
class_alias(GoogleChromePolicyVersionsV1PolicyTargetKey::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1PolicyTargetKey');
class_alias(GoogleChromePolicyVersionsV1PolicyValue::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1PolicyValue');
class_alias(GoogleChromePolicyVersionsV1RemoveCertificateErrorDetails::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1RemoveCertificateErrorDetails');
class_alias(GoogleChromePolicyVersionsV1RemoveCertificateRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1RemoveCertificateRequest');
class_alias(GoogleChromePolicyVersionsV1RemoveCertificateResponse::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1RemoveCertificateResponse');
class_alias(GoogleChromePolicyVersionsV1RemoveNetworkRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1RemoveNetworkRequest');
class_alias(GoogleChromePolicyVersionsV1RemoveNetworkResponse::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1RemoveNetworkResponse');
class_alias(GoogleChromePolicyVersionsV1ResolveRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1ResolveRequest');
class_alias(GoogleChromePolicyVersionsV1ResolveResponse::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1ResolveResponse');
class_alias(GoogleChromePolicyVersionsV1ResolvedPolicy::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1ResolvedPolicy');
class_alias(GoogleChromePolicyVersionsV1UpdateGroupPriorityOrderingRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1UpdateGroupPriorityOrderingRequest');
class_alias(GoogleChromePolicyVersionsV1UploadPolicyFileRequest::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1UploadPolicyFileRequest');
class_alias(GoogleChromePolicyVersionsV1UploadPolicyFileResponse::class, 'Google_Service_ChromePolicy_GoogleChromePolicyVersionsV1UploadPolicyFileResponse');
class_alias(GoogleProtobufEmpty::class, 'Google_Service_ChromePolicy_GoogleProtobufEmpty');
class_alias(GoogleTypeDate::class, 'Google_Service_ChromePolicy_GoogleTypeDate');
class_alias(Proto2DescriptorProto::class, 'Google_Service_ChromePolicy_Proto2DescriptorProto');
class_alias(Proto2EnumDescriptorProto::class, 'Google_Service_ChromePolicy_Proto2EnumDescriptorProto');
class_alias(Proto2EnumValueDescriptorProto::class, 'Google_Service_ChromePolicy_Proto2EnumValueDescriptorProto');
class_alias(Proto2FieldDescriptorProto::class, 'Google_Service_ChromePolicy_Proto2FieldDescriptorProto');
class_alias(Proto2FileDescriptorProto::class, 'Google_Service_ChromePolicy_Proto2FileDescriptorProto');
class_alias(Proto2OneofDescriptorProto::class, 'Google_Service_ChromePolicy_Proto2OneofDescriptorProto');
