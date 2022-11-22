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

namespace Google\Service\AndroidEnterprise;

class Administrator extends \Google\Model
{
  /** @var string */
  public $email;

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
}

class AdministratorWebToken extends \Google\Model
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

class AdministratorWebTokenSpec extends \Google\Collection
{
  /** @var AdministratorWebTokenSpecManagedConfigurations */
  public $managedConfigurations;
  /** @var string */
  public $parent;
  /** @var string[] */
  public $permission;
  /** @var AdministratorWebTokenSpecPlaySearch */
  public $playSearch;
  /** @var AdministratorWebTokenSpecPrivateApps */
  public $privateApps;
  /** @var AdministratorWebTokenSpecStoreBuilder */
  public $storeBuilder;
  /** @var AdministratorWebTokenSpecWebApps */
  public $webApps;
  /** @var AdministratorWebTokenSpecZeroTouch */
  public $zeroTouch;
  protected $collection_key = 'permission';
  protected $managedConfigurationsType = AdministratorWebTokenSpecManagedConfigurations::class;
  protected $managedConfigurationsDataType = '';
  protected $playSearchType = AdministratorWebTokenSpecPlaySearch::class;
  protected $playSearchDataType = '';
  protected $privateAppsType = AdministratorWebTokenSpecPrivateApps::class;
  protected $privateAppsDataType = '';
  protected $storeBuilderType = AdministratorWebTokenSpecStoreBuilder::class;
  protected $storeBuilderDataType = '';
  protected $webAppsType = AdministratorWebTokenSpecWebApps::class;
  protected $webAppsDataType = '';
  protected $zeroTouchType = AdministratorWebTokenSpecZeroTouch::class;
  protected $zeroTouchDataType = '';
  /** @param AdministratorWebTokenSpecManagedConfigurations */
  public function setManagedConfigurations(AdministratorWebTokenSpecManagedConfigurations $managedConfigurations)
  {
    $this->managedConfigurations = $managedConfigurations;
  }
  /** @return AdministratorWebTokenSpecManagedConfigurations */
  public function getManagedConfigurations()
  {
    return $this->managedConfigurations;
  }
  /** @param string */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
  }
  /** @param string[] */
  public function setPermission($permission)
  {
    $this->permission = $permission;
  }
  /** @return string[] */
  public function getPermission()
  {
    return $this->permission;
  }
  /** @param AdministratorWebTokenSpecPlaySearch */
  public function setPlaySearch(AdministratorWebTokenSpecPlaySearch $playSearch)
  {
    $this->playSearch = $playSearch;
  }
  /** @return AdministratorWebTokenSpecPlaySearch */
  public function getPlaySearch()
  {
    return $this->playSearch;
  }
  /** @param AdministratorWebTokenSpecPrivateApps */
  public function setPrivateApps(AdministratorWebTokenSpecPrivateApps $privateApps)
  {
    $this->privateApps = $privateApps;
  }
  /** @return AdministratorWebTokenSpecPrivateApps */
  public function getPrivateApps()
  {
    return $this->privateApps;
  }
  /** @param AdministratorWebTokenSpecStoreBuilder */
  public function setStoreBuilder(AdministratorWebTokenSpecStoreBuilder $storeBuilder)
  {
    $this->storeBuilder = $storeBuilder;
  }
  /** @return AdministratorWebTokenSpecStoreBuilder */
  public function getStoreBuilder()
  {
    return $this->storeBuilder;
  }
  /** @param AdministratorWebTokenSpecWebApps */
  public function setWebApps(AdministratorWebTokenSpecWebApps $webApps)
  {
    $this->webApps = $webApps;
  }
  /** @return AdministratorWebTokenSpecWebApps */
  public function getWebApps()
  {
    return $this->webApps;
  }
  /** @param AdministratorWebTokenSpecZeroTouch */
  public function setZeroTouch(AdministratorWebTokenSpecZeroTouch $zeroTouch)
  {
    $this->zeroTouch = $zeroTouch;
  }
  /** @return AdministratorWebTokenSpecZeroTouch */
  public function getZeroTouch()
  {
    return $this->zeroTouch;
  }
}

class AdministratorWebTokenSpecManagedConfigurations extends \Google\Model
{
  /** @var bool */
  public $enabled;

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
}

class AdministratorWebTokenSpecPlaySearch extends \Google\Model
{
  /** @var bool */
  public $approveApps;
  /** @var bool */
  public $enabled;

  /** @param bool */
  public function setApproveApps($approveApps)
  {
    $this->approveApps = $approveApps;
  }
  /** @return bool */
  public function getApproveApps()
  {
    return $this->approveApps;
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
}

class AdministratorWebTokenSpecPrivateApps extends \Google\Model
{
  /** @var bool */
  public $enabled;

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
}

class AdministratorWebTokenSpecStoreBuilder extends \Google\Model
{
  /** @var bool */
  public $enabled;

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
}

class AdministratorWebTokenSpecWebApps extends \Google\Model
{
  /** @var bool */
  public $enabled;

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
}

class AdministratorWebTokenSpecZeroTouch extends \Google\Model
{
  /** @var bool */
  public $enabled;

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
}

class AppRestrictionsSchema extends \Google\Collection
{
  /** @var string */
  public $kind;
  /** @var AppRestrictionsSchemaRestriction[] */
  public $restrictions;
  protected $collection_key = 'restrictions';
  protected $restrictionsType = AppRestrictionsSchemaRestriction::class;
  protected $restrictionsDataType = 'array';
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
  /** @param AppRestrictionsSchemaRestriction[] */
  public function setRestrictions($restrictions)
  {
    $this->restrictions = $restrictions;
  }
  /** @return AppRestrictionsSchemaRestriction[] */
  public function getRestrictions()
  {
    return $this->restrictions;
  }
}

class AppRestrictionsSchemaChangeEvent extends \Google\Model
{
  /** @var string */
  public $productId;

  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
}

class AppRestrictionsSchemaRestriction extends \Google\Collection
{
  /** @var AppRestrictionsSchemaRestrictionRestrictionValue */
  public $defaultValue;
  /** @var string */
  public $description;
  /** @var string[] */
  public $entry;
  /** @var string[] */
  public $entryValue;
  /** @var string */
  public $key;
  /** @var AppRestrictionsSchemaRestriction[] */
  public $nestedRestriction;
  /** @var string */
  public $restrictionType;
  /** @var string */
  public $title;
  protected $collection_key = 'nestedRestriction';
  protected $defaultValueType = AppRestrictionsSchemaRestrictionRestrictionValue::class;
  protected $defaultValueDataType = '';
  protected $nestedRestrictionType = AppRestrictionsSchemaRestriction::class;
  protected $nestedRestrictionDataType = 'array';
  /** @param AppRestrictionsSchemaRestrictionRestrictionValue */
  public function setDefaultValue(AppRestrictionsSchemaRestrictionRestrictionValue $defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /** @return AppRestrictionsSchemaRestrictionRestrictionValue */
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
  /** @param string[] */
  public function setEntry($entry)
  {
    $this->entry = $entry;
  }
  /** @return string[] */
  public function getEntry()
  {
    return $this->entry;
  }
  /** @param string[] */
  public function setEntryValue($entryValue)
  {
    $this->entryValue = $entryValue;
  }
  /** @return string[] */
  public function getEntryValue()
  {
    return $this->entryValue;
  }
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
  /** @param AppRestrictionsSchemaRestriction[] */
  public function setNestedRestriction($nestedRestriction)
  {
    $this->nestedRestriction = $nestedRestriction;
  }
  /** @return AppRestrictionsSchemaRestriction[] */
  public function getNestedRestriction()
  {
    return $this->nestedRestriction;
  }
  /** @param string */
  public function setRestrictionType($restrictionType)
  {
    $this->restrictionType = $restrictionType;
  }
  /** @return string */
  public function getRestrictionType()
  {
    return $this->restrictionType;
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

class AppRestrictionsSchemaRestrictionRestrictionValue extends \Google\Collection
{
  /** @var string */
  public $type;
  /** @var bool */
  public $valueBool;
  /** @var int */
  public $valueInteger;
  /** @var string[] */
  public $valueMultiselect;
  /** @var string */
  public $valueString;
  protected $collection_key = 'valueMultiselect';
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
  /** @param bool */
  public function setValueBool($valueBool)
  {
    $this->valueBool = $valueBool;
  }
  /** @return bool */
  public function getValueBool()
  {
    return $this->valueBool;
  }
  /** @param int */
  public function setValueInteger($valueInteger)
  {
    $this->valueInteger = $valueInteger;
  }
  /** @return int */
  public function getValueInteger()
  {
    return $this->valueInteger;
  }
  /** @param string[] */
  public function setValueMultiselect($valueMultiselect)
  {
    $this->valueMultiselect = $valueMultiselect;
  }
  /** @return string[] */
  public function getValueMultiselect()
  {
    return $this->valueMultiselect;
  }
  /** @param string */
  public function setValueString($valueString)
  {
    $this->valueString = $valueString;
  }
  /** @return string */
  public function getValueString()
  {
    return $this->valueString;
  }
}

class AppState extends \Google\Collection
{
  /** @var KeyedAppState[] */
  public $keyedAppState;
  /** @var string */
  public $packageName;
  protected $collection_key = 'keyedAppState';
  protected $keyedAppStateType = KeyedAppState::class;
  protected $keyedAppStateDataType = 'array';
  /** @param KeyedAppState[] */
  public function setKeyedAppState($keyedAppState)
  {
    $this->keyedAppState = $keyedAppState;
  }
  /** @return KeyedAppState[] */
  public function getKeyedAppState()
  {
    return $this->keyedAppState;
  }
  /** @param string */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /** @return string */
  public function getPackageName()
  {
    return $this->packageName;
  }
}

class AppUpdateEvent extends \Google\Model
{
  /** @var string */
  public $productId;

  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
}

class AppVersion extends \Google\Collection
{
  /** @var bool */
  public $isProduction;
  /** @var string */
  public $track;
  /** @var string[] */
  public $trackId;
  /** @var int */
  public $versionCode;
  /** @var string */
  public $versionString;
  protected $collection_key = 'trackId';
  /** @param bool */
  public function setIsProduction($isProduction)
  {
    $this->isProduction = $isProduction;
  }
  /** @return bool */
  public function getIsProduction()
  {
    return $this->isProduction;
  }
  /** @param string */
  public function setTrack($track)
  {
    $this->track = $track;
  }
  /** @return string */
  public function getTrack()
  {
    return $this->track;
  }
  /** @param string[] */
  public function setTrackId($trackId)
  {
    $this->trackId = $trackId;
  }
  /** @return string[] */
  public function getTrackId()
  {
    return $this->trackId;
  }
  /** @param int */
  public function setVersionCode($versionCode)
  {
    $this->versionCode = $versionCode;
  }
  /** @return int */
  public function getVersionCode()
  {
    return $this->versionCode;
  }
  /** @param string */
  public function setVersionString($versionString)
  {
    $this->versionString = $versionString;
  }
  /** @return string */
  public function getVersionString()
  {
    return $this->versionString;
  }
}

class ApprovalUrlInfo extends \Google\Model
{
  /** @var string */
  public $approvalUrl;

  /** @param string */
  public function setApprovalUrl($approvalUrl)
  {
    $this->approvalUrl = $approvalUrl;
  }
  /** @return string */
  public function getApprovalUrl()
  {
    return $this->approvalUrl;
  }
}

class AuthenticationToken extends \Google\Model
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

class AutoInstallConstraint extends \Google\Model
{
  /** @var string */
  public $chargingStateConstraint;
  /** @var string */
  public $deviceIdleStateConstraint;
  /** @var string */
  public $networkTypeConstraint;

  /** @param string */
  public function setChargingStateConstraint($chargingStateConstraint)
  {
    $this->chargingStateConstraint = $chargingStateConstraint;
  }
  /** @return string */
  public function getChargingStateConstraint()
  {
    return $this->chargingStateConstraint;
  }
  /** @param string */
  public function setDeviceIdleStateConstraint($deviceIdleStateConstraint)
  {
    $this->deviceIdleStateConstraint = $deviceIdleStateConstraint;
  }
  /** @return string */
  public function getDeviceIdleStateConstraint()
  {
    return $this->deviceIdleStateConstraint;
  }
  /** @param string */
  public function setNetworkTypeConstraint($networkTypeConstraint)
  {
    $this->networkTypeConstraint = $networkTypeConstraint;
  }
  /** @return string */
  public function getNetworkTypeConstraint()
  {
    return $this->networkTypeConstraint;
  }
}

class AutoInstallPolicy extends \Google\Collection
{
  /** @var AutoInstallConstraint[] */
  public $autoInstallConstraint;
  /** @var string */
  public $autoInstallMode;
  /** @var int */
  public $autoInstallPriority;
  /** @var int */
  public $minimumVersionCode;
  protected $collection_key = 'autoInstallConstraint';
  protected $autoInstallConstraintType = AutoInstallConstraint::class;
  protected $autoInstallConstraintDataType = 'array';
  /** @param AutoInstallConstraint[] */
  public function setAutoInstallConstraint($autoInstallConstraint)
  {
    $this->autoInstallConstraint = $autoInstallConstraint;
  }
  /** @return AutoInstallConstraint[] */
  public function getAutoInstallConstraint()
  {
    return $this->autoInstallConstraint;
  }
  /** @param string */
  public function setAutoInstallMode($autoInstallMode)
  {
    $this->autoInstallMode = $autoInstallMode;
  }
  /** @return string */
  public function getAutoInstallMode()
  {
    return $this->autoInstallMode;
  }
  /** @param int */
  public function setAutoInstallPriority($autoInstallPriority)
  {
    $this->autoInstallPriority = $autoInstallPriority;
  }
  /** @return int */
  public function getAutoInstallPriority()
  {
    return $this->autoInstallPriority;
  }
  /** @param int */
  public function setMinimumVersionCode($minimumVersionCode)
  {
    $this->minimumVersionCode = $minimumVersionCode;
  }
  /** @return int */
  public function getMinimumVersionCode()
  {
    return $this->minimumVersionCode;
  }
}

class ConfigurationVariables extends \Google\Collection
{
  /** @var string */
  public $mcmId;
  /** @var VariableSet[] */
  public $variableSet;
  protected $collection_key = 'variableSet';
  protected $variableSetType = VariableSet::class;
  protected $variableSetDataType = 'array';
  /** @param string */
  public function setMcmId($mcmId)
  {
    $this->mcmId = $mcmId;
  }
  /** @return string */
  public function getMcmId()
  {
    return $this->mcmId;
  }
  /** @param VariableSet[] */
  public function setVariableSet($variableSet)
  {
    $this->variableSet = $variableSet;
  }
  /** @return VariableSet[] */
  public function getVariableSet()
  {
    return $this->variableSet;
  }
}

class Device extends \Google\Model
{
  /** @var string */
  public $androidId;
  /** @var string */
  public $managementType;
  /** @var Policy */
  public $policy;
  /** @var DeviceReport */
  public $report;
  protected $policyType = Policy::class;
  protected $policyDataType = '';
  protected $reportType = DeviceReport::class;
  protected $reportDataType = '';
  /** @param string */
  public function setAndroidId($androidId)
  {
    $this->androidId = $androidId;
  }
  /** @return string */
  public function getAndroidId()
  {
    return $this->androidId;
  }
  /** @param string */
  public function setManagementType($managementType)
  {
    $this->managementType = $managementType;
  }
  /** @return string */
  public function getManagementType()
  {
    return $this->managementType;
  }
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
  /** @param DeviceReport */
  public function setReport(DeviceReport $report)
  {
    $this->report = $report;
  }
  /** @return DeviceReport */
  public function getReport()
  {
    return $this->report;
  }
}

class DeviceReport extends \Google\Collection
{
  /** @var AppState[] */
  public $appState;
  /** @var string */
  public $lastUpdatedTimestampMillis;
  protected $collection_key = 'appState';
  protected $appStateType = AppState::class;
  protected $appStateDataType = 'array';
  /** @param AppState[] */
  public function setAppState($appState)
  {
    $this->appState = $appState;
  }
  /** @return AppState[] */
  public function getAppState()
  {
    return $this->appState;
  }
  /** @param string */
  public function setLastUpdatedTimestampMillis($lastUpdatedTimestampMillis)
  {
    $this->lastUpdatedTimestampMillis = $lastUpdatedTimestampMillis;
  }
  /** @return string */
  public function getLastUpdatedTimestampMillis()
  {
    return $this->lastUpdatedTimestampMillis;
  }
}

class DeviceReportUpdateEvent extends \Google\Model
{
  /** @var string */
  public $deviceId;
  /** @var DeviceReport */
  public $report;
  /** @var string */
  public $userId;
  protected $reportType = DeviceReport::class;
  protected $reportDataType = '';
  /** @param string */
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /** @return string */
  public function getDeviceId()
  {
    return $this->deviceId;
  }
  /** @param DeviceReport */
  public function setReport(DeviceReport $report)
  {
    $this->report = $report;
  }
  /** @return DeviceReport */
  public function getReport()
  {
    return $this->report;
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

class DeviceState extends \Google\Model
{
  /** @var string */
  public $accountState;

  /** @param string */
  public function setAccountState($accountState)
  {
    $this->accountState = $accountState;
  }
  /** @return string */
  public function getAccountState()
  {
    return $this->accountState;
  }
}

class DevicesListResponse extends \Google\Collection
{
  /** @var Device[] */
  public $device;
  protected $collection_key = 'device';
  protected $deviceType = Device::class;
  protected $deviceDataType = 'array';
  /** @param Device[] */
  public function setDevice($device)
  {
    $this->device = $device;
  }
  /** @return Device[] */
  public function getDevice()
  {
    return $this->device;
  }
}

class Enterprise extends \Google\Collection
{
  /** @var Administrator[] */
  public $administrator;
  /** @var string */
  public $id;
  /** @var string */
  public $name;
  /** @var string */
  public $primaryDomain;
  protected $collection_key = 'administrator';
  protected $administratorType = Administrator::class;
  protected $administratorDataType = 'array';
  /** @param Administrator[] */
  public function setAdministrator($administrator)
  {
    $this->administrator = $administrator;
  }
  /** @return Administrator[] */
  public function getAdministrator()
  {
    return $this->administrator;
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
  public function setPrimaryDomain($primaryDomain)
  {
    $this->primaryDomain = $primaryDomain;
  }
  /** @return string */
  public function getPrimaryDomain()
  {
    return $this->primaryDomain;
  }
}

class EnterpriseAccount extends \Google\Model
{
  /** @var string */
  public $accountEmail;

  /** @param string */
  public function setAccountEmail($accountEmail)
  {
    $this->accountEmail = $accountEmail;
  }
  /** @return string */
  public function getAccountEmail()
  {
    return $this->accountEmail;
  }
}

class EnterpriseAuthenticationAppLinkConfig extends \Google\Model
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

class EnterprisesListResponse extends \Google\Collection
{
  /** @var Enterprise[] */
  public $enterprise;
  protected $collection_key = 'enterprise';
  protected $enterpriseType = Enterprise::class;
  protected $enterpriseDataType = 'array';
  /** @param Enterprise[] */
  public function setEnterprise($enterprise)
  {
    $this->enterprise = $enterprise;
  }
  /** @return Enterprise[] */
  public function getEnterprise()
  {
    return $this->enterprise;
  }
}

class EnterprisesSendTestPushNotificationResponse extends \Google\Model
{
  /** @var string */
  public $messageId;
  /** @var string */
  public $topicName;

  /** @param string */
  public function setMessageId($messageId)
  {
    $this->messageId = $messageId;
  }
  /** @return string */
  public function getMessageId()
  {
    return $this->messageId;
  }
  /** @param string */
  public function setTopicName($topicName)
  {
    $this->topicName = $topicName;
  }
  /** @return string */
  public function getTopicName()
  {
    return $this->topicName;
  }
}

class Entitlement extends \Google\Model
{
  /** @var string */
  public $productId;
  /** @var string */
  public $reason;

  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
  /** @param string */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /** @return string */
  public function getReason()
  {
    return $this->reason;
  }
}

class EntitlementsListResponse extends \Google\Collection
{
  /** @var Entitlement[] */
  public $entitlement;
  protected $collection_key = 'entitlement';
  protected $entitlementType = Entitlement::class;
  protected $entitlementDataType = 'array';
  /** @param Entitlement[] */
  public function setEntitlement($entitlement)
  {
    $this->entitlement = $entitlement;
  }
  /** @return Entitlement[] */
  public function getEntitlement()
  {
    return $this->entitlement;
  }
}

class GroupLicense extends \Google\Model
{
  /** @var string */
  public $acquisitionKind;
  /** @var string */
  public $approval;
  /** @var int */
  public $numProvisioned;
  /** @var int */
  public $numPurchased;
  /** @var string */
  public $permissions;
  /** @var string */
  public $productId;

  /** @param string */
  public function setAcquisitionKind($acquisitionKind)
  {
    $this->acquisitionKind = $acquisitionKind;
  }
  /** @return string */
  public function getAcquisitionKind()
  {
    return $this->acquisitionKind;
  }
  /** @param string */
  public function setApproval($approval)
  {
    $this->approval = $approval;
  }
  /** @return string */
  public function getApproval()
  {
    return $this->approval;
  }
  /** @param int */
  public function setNumProvisioned($numProvisioned)
  {
    $this->numProvisioned = $numProvisioned;
  }
  /** @return int */
  public function getNumProvisioned()
  {
    return $this->numProvisioned;
  }
  /** @param int */
  public function setNumPurchased($numPurchased)
  {
    $this->numPurchased = $numPurchased;
  }
  /** @return int */
  public function getNumPurchased()
  {
    return $this->numPurchased;
  }
  /** @param string */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return string */
  public function getPermissions()
  {
    return $this->permissions;
  }
  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
}

class GroupLicenseUsersListResponse extends \Google\Collection
{
  /** @var User[] */
  public $user;
  protected $collection_key = 'user';
  protected $userType = User::class;
  protected $userDataType = 'array';
  /** @param User[] */
  public function setUser($user)
  {
    $this->user = $user;
  }
  /** @return User[] */
  public function getUser()
  {
    return $this->user;
  }
}

class GroupLicensesListResponse extends \Google\Collection
{
  /** @var GroupLicense[] */
  public $groupLicense;
  protected $collection_key = 'groupLicense';
  protected $groupLicenseType = GroupLicense::class;
  protected $groupLicenseDataType = 'array';
  /** @param GroupLicense[] */
  public function setGroupLicense($groupLicense)
  {
    $this->groupLicense = $groupLicense;
  }
  /** @return GroupLicense[] */
  public function getGroupLicense()
  {
    return $this->groupLicense;
  }
}

class Install extends \Google\Model
{
  /** @var string */
  public $installState;
  /** @var string */
  public $productId;
  /** @var int */
  public $versionCode;

  /** @param string */
  public function setInstallState($installState)
  {
    $this->installState = $installState;
  }
  /** @return string */
  public function getInstallState()
  {
    return $this->installState;
  }
  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
  /** @param int */
  public function setVersionCode($versionCode)
  {
    $this->versionCode = $versionCode;
  }
  /** @return int */
  public function getVersionCode()
  {
    return $this->versionCode;
  }
}

class InstallFailureEvent extends \Google\Model
{
  /** @var string */
  public $deviceId;
  /** @var string */
  public $failureDetails;
  /** @var string */
  public $failureReason;
  /** @var string */
  public $productId;
  /** @var string */
  public $userId;

  /** @param string */
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /** @return string */
  public function getDeviceId()
  {
    return $this->deviceId;
  }
  /** @param string */
  public function setFailureDetails($failureDetails)
  {
    $this->failureDetails = $failureDetails;
  }
  /** @return string */
  public function getFailureDetails()
  {
    return $this->failureDetails;
  }
  /** @param string */
  public function setFailureReason($failureReason)
  {
    $this->failureReason = $failureReason;
  }
  /** @return string */
  public function getFailureReason()
  {
    return $this->failureReason;
  }
  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
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

class InstallsListResponse extends \Google\Collection
{
  /** @var Install[] */
  public $install;
  protected $collection_key = 'install';
  protected $installType = Install::class;
  protected $installDataType = 'array';
  /** @param Install[] */
  public function setInstall($install)
  {
    $this->install = $install;
  }
  /** @return Install[] */
  public function getInstall()
  {
    return $this->install;
  }
}

class KeyedAppState extends \Google\Model
{
  /** @var string */
  public $data;
  /** @var string */
  public $key;
  /** @var string */
  public $message;
  /** @var string */
  public $severity;
  /** @var string */
  public $stateTimestampMillis;

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
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /** @return string */
  public function getMessage()
  {
    return $this->message;
  }
  /** @param string */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /** @return string */
  public function getSeverity()
  {
    return $this->severity;
  }
  /** @param string */
  public function setStateTimestampMillis($stateTimestampMillis)
  {
    $this->stateTimestampMillis = $stateTimestampMillis;
  }
  /** @return string */
  public function getStateTimestampMillis()
  {
    return $this->stateTimestampMillis;
  }
}

class LocalizedText extends \Google\Model
{
  /** @var string */
  public $locale;
  /** @var string */
  public $text;

  /** @param string */
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /** @return string */
  public function getLocale()
  {
    return $this->locale;
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

class MaintenanceWindow extends \Google\Model
{
  /** @var string */
  public $durationMs;
  /** @var string */
  public $startTimeAfterMidnightMs;

  /** @param string */
  public function setDurationMs($durationMs)
  {
    $this->durationMs = $durationMs;
  }
  /** @return string */
  public function getDurationMs()
  {
    return $this->durationMs;
  }
  /** @param string */
  public function setStartTimeAfterMidnightMs($startTimeAfterMidnightMs)
  {
    $this->startTimeAfterMidnightMs = $startTimeAfterMidnightMs;
  }
  /** @return string */
  public function getStartTimeAfterMidnightMs()
  {
    return $this->startTimeAfterMidnightMs;
  }
}

class ManagedConfiguration extends \Google\Collection
{
  /** @var ConfigurationVariables */
  public $configurationVariables;
  /** @var string */
  public $kind;
  /** @var ManagedProperty[] */
  public $managedProperty;
  /** @var string */
  public $productId;
  protected $collection_key = 'managedProperty';
  protected $configurationVariablesType = ConfigurationVariables::class;
  protected $configurationVariablesDataType = '';
  protected $managedPropertyType = ManagedProperty::class;
  protected $managedPropertyDataType = 'array';
  /** @param ConfigurationVariables */
  public function setConfigurationVariables(ConfigurationVariables $configurationVariables)
  {
    $this->configurationVariables = $configurationVariables;
  }
  /** @return ConfigurationVariables */
  public function getConfigurationVariables()
  {
    return $this->configurationVariables;
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
  /** @param ManagedProperty[] */
  public function setManagedProperty($managedProperty)
  {
    $this->managedProperty = $managedProperty;
  }
  /** @return ManagedProperty[] */
  public function getManagedProperty()
  {
    return $this->managedProperty;
  }
  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
}

class ManagedConfigurationsForDeviceListResponse extends \Google\Collection
{
  /** @var ManagedConfiguration[] */
  public $managedConfigurationForDevice;
  protected $collection_key = 'managedConfigurationForDevice';
  protected $managedConfigurationForDeviceType = ManagedConfiguration::class;
  protected $managedConfigurationForDeviceDataType = 'array';
  /** @param ManagedConfiguration[] */
  public function setManagedConfigurationForDevice($managedConfigurationForDevice)
  {
    $this->managedConfigurationForDevice = $managedConfigurationForDevice;
  }
  /** @return ManagedConfiguration[] */
  public function getManagedConfigurationForDevice()
  {
    return $this->managedConfigurationForDevice;
  }
}

class ManagedConfigurationsForUserListResponse extends \Google\Collection
{
  /** @var ManagedConfiguration[] */
  public $managedConfigurationForUser;
  protected $collection_key = 'managedConfigurationForUser';
  protected $managedConfigurationForUserType = ManagedConfiguration::class;
  protected $managedConfigurationForUserDataType = 'array';
  /** @param ManagedConfiguration[] */
  public function setManagedConfigurationForUser($managedConfigurationForUser)
  {
    $this->managedConfigurationForUser = $managedConfigurationForUser;
  }
  /** @return ManagedConfiguration[] */
  public function getManagedConfigurationForUser()
  {
    return $this->managedConfigurationForUser;
  }
}

class ManagedConfigurationsSettings extends \Google\Model
{
  /** @var string */
  public $lastUpdatedTimestampMillis;
  /** @var string */
  public $mcmId;
  /** @var string */
  public $name;

  /** @param string */
  public function setLastUpdatedTimestampMillis($lastUpdatedTimestampMillis)
  {
    $this->lastUpdatedTimestampMillis = $lastUpdatedTimestampMillis;
  }
  /** @return string */
  public function getLastUpdatedTimestampMillis()
  {
    return $this->lastUpdatedTimestampMillis;
  }
  /** @param string */
  public function setMcmId($mcmId)
  {
    $this->mcmId = $mcmId;
  }
  /** @return string */
  public function getMcmId()
  {
    return $this->mcmId;
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

class ManagedConfigurationsSettingsListResponse extends \Google\Collection
{
  /** @var ManagedConfigurationsSettings[] */
  public $managedConfigurationsSettings;
  protected $collection_key = 'managedConfigurationsSettings';
  protected $managedConfigurationsSettingsType = ManagedConfigurationsSettings::class;
  protected $managedConfigurationsSettingsDataType = 'array';
  /** @param ManagedConfigurationsSettings[] */
  public function setManagedConfigurationsSettings($managedConfigurationsSettings)
  {
    $this->managedConfigurationsSettings = $managedConfigurationsSettings;
  }
  /** @return ManagedConfigurationsSettings[] */
  public function getManagedConfigurationsSettings()
  {
    return $this->managedConfigurationsSettings;
  }
}

class ManagedProperty extends \Google\Collection
{
  /** @var string */
  public $key;
  /** @var bool */
  public $valueBool;
  /** @var ManagedPropertyBundle */
  public $valueBundle;
  /** @var ManagedPropertyBundle[] */
  public $valueBundleArray;
  /** @var int */
  public $valueInteger;
  /** @var string */
  public $valueString;
  /** @var string[] */
  public $valueStringArray;
  protected $collection_key = 'valueStringArray';
  protected $valueBundleType = ManagedPropertyBundle::class;
  protected $valueBundleDataType = '';
  protected $valueBundleArrayType = ManagedPropertyBundle::class;
  protected $valueBundleArrayDataType = 'array';
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
  /** @param bool */
  public function setValueBool($valueBool)
  {
    $this->valueBool = $valueBool;
  }
  /** @return bool */
  public function getValueBool()
  {
    return $this->valueBool;
  }
  /** @param ManagedPropertyBundle */
  public function setValueBundle(ManagedPropertyBundle $valueBundle)
  {
    $this->valueBundle = $valueBundle;
  }
  /** @return ManagedPropertyBundle */
  public function getValueBundle()
  {
    return $this->valueBundle;
  }
  /** @param ManagedPropertyBundle[] */
  public function setValueBundleArray($valueBundleArray)
  {
    $this->valueBundleArray = $valueBundleArray;
  }
  /** @return ManagedPropertyBundle[] */
  public function getValueBundleArray()
  {
    return $this->valueBundleArray;
  }
  /** @param int */
  public function setValueInteger($valueInteger)
  {
    $this->valueInteger = $valueInteger;
  }
  /** @return int */
  public function getValueInteger()
  {
    return $this->valueInteger;
  }
  /** @param string */
  public function setValueString($valueString)
  {
    $this->valueString = $valueString;
  }
  /** @return string */
  public function getValueString()
  {
    return $this->valueString;
  }
  /** @param string[] */
  public function setValueStringArray($valueStringArray)
  {
    $this->valueStringArray = $valueStringArray;
  }
  /** @return string[] */
  public function getValueStringArray()
  {
    return $this->valueStringArray;
  }
}

class ManagedPropertyBundle extends \Google\Collection
{
  /** @var ManagedProperty[] */
  public $managedProperty;
  protected $collection_key = 'managedProperty';
  protected $managedPropertyType = ManagedProperty::class;
  protected $managedPropertyDataType = 'array';
  /** @param ManagedProperty[] */
  public function setManagedProperty($managedProperty)
  {
    $this->managedProperty = $managedProperty;
  }
  /** @return ManagedProperty[] */
  public function getManagedProperty()
  {
    return $this->managedProperty;
  }
}

class NewDeviceEvent extends \Google\Model
{
  /** @var string */
  public $deviceId;
  /** @var string */
  public $dpcPackageName;
  /** @var string */
  public $managementType;
  /** @var string */
  public $userId;

  /** @param string */
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /** @return string */
  public function getDeviceId()
  {
    return $this->deviceId;
  }
  /** @param string */
  public function setDpcPackageName($dpcPackageName)
  {
    $this->dpcPackageName = $dpcPackageName;
  }
  /** @return string */
  public function getDpcPackageName()
  {
    return $this->dpcPackageName;
  }
  /** @param string */
  public function setManagementType($managementType)
  {
    $this->managementType = $managementType;
  }
  /** @return string */
  public function getManagementType()
  {
    return $this->managementType;
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

class NewPermissionsEvent extends \Google\Collection
{
  /** @var string[] */
  public $approvedPermissions;
  /** @var string */
  public $productId;
  /** @var string[] */
  public $requestedPermissions;
  protected $collection_key = 'requestedPermissions';
  /** @param string[] */
  public function setApprovedPermissions($approvedPermissions)
  {
    $this->approvedPermissions = $approvedPermissions;
  }
  /** @return string[] */
  public function getApprovedPermissions()
  {
    return $this->approvedPermissions;
  }
  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
  /** @param string[] */
  public function setRequestedPermissions($requestedPermissions)
  {
    $this->requestedPermissions = $requestedPermissions;
  }
  /** @return string[] */
  public function getRequestedPermissions()
  {
    return $this->requestedPermissions;
  }
}

class Notification extends \Google\Model
{
  /** @var AppRestrictionsSchemaChangeEvent */
  public $appRestrictionsSchemaChangeEvent;
  /** @var AppUpdateEvent */
  public $appUpdateEvent;
  /** @var DeviceReportUpdateEvent */
  public $deviceReportUpdateEvent;
  /** @var string */
  public $enterpriseId;
  /** @var InstallFailureEvent */
  public $installFailureEvent;
  /** @var NewDeviceEvent */
  public $newDeviceEvent;
  /** @var NewPermissionsEvent */
  public $newPermissionsEvent;
  /** @var string */
  public $notificationType;
  /** @var ProductApprovalEvent */
  public $productApprovalEvent;
  /** @var ProductAvailabilityChangeEvent */
  public $productAvailabilityChangeEvent;
  /** @var string */
  public $timestampMillis;
  protected $appRestrictionsSchemaChangeEventType = AppRestrictionsSchemaChangeEvent::class;
  protected $appRestrictionsSchemaChangeEventDataType = '';
  protected $appUpdateEventType = AppUpdateEvent::class;
  protected $appUpdateEventDataType = '';
  protected $deviceReportUpdateEventType = DeviceReportUpdateEvent::class;
  protected $deviceReportUpdateEventDataType = '';
  protected $installFailureEventType = InstallFailureEvent::class;
  protected $installFailureEventDataType = '';
  protected $newDeviceEventType = NewDeviceEvent::class;
  protected $newDeviceEventDataType = '';
  protected $newPermissionsEventType = NewPermissionsEvent::class;
  protected $newPermissionsEventDataType = '';
  protected $productApprovalEventType = ProductApprovalEvent::class;
  protected $productApprovalEventDataType = '';
  protected $productAvailabilityChangeEventType = ProductAvailabilityChangeEvent::class;
  protected $productAvailabilityChangeEventDataType = '';
  /** @param AppRestrictionsSchemaChangeEvent */
  public function setAppRestrictionsSchemaChangeEvent(AppRestrictionsSchemaChangeEvent $appRestrictionsSchemaChangeEvent)
  {
    $this->appRestrictionsSchemaChangeEvent = $appRestrictionsSchemaChangeEvent;
  }
  /** @return AppRestrictionsSchemaChangeEvent */
  public function getAppRestrictionsSchemaChangeEvent()
  {
    return $this->appRestrictionsSchemaChangeEvent;
  }
  /** @param AppUpdateEvent */
  public function setAppUpdateEvent(AppUpdateEvent $appUpdateEvent)
  {
    $this->appUpdateEvent = $appUpdateEvent;
  }
  /** @return AppUpdateEvent */
  public function getAppUpdateEvent()
  {
    return $this->appUpdateEvent;
  }
  /** @param DeviceReportUpdateEvent */
  public function setDeviceReportUpdateEvent(DeviceReportUpdateEvent $deviceReportUpdateEvent)
  {
    $this->deviceReportUpdateEvent = $deviceReportUpdateEvent;
  }
  /** @return DeviceReportUpdateEvent */
  public function getDeviceReportUpdateEvent()
  {
    return $this->deviceReportUpdateEvent;
  }
  /** @param string */
  public function setEnterpriseId($enterpriseId)
  {
    $this->enterpriseId = $enterpriseId;
  }
  /** @return string */
  public function getEnterpriseId()
  {
    return $this->enterpriseId;
  }
  /** @param InstallFailureEvent */
  public function setInstallFailureEvent(InstallFailureEvent $installFailureEvent)
  {
    $this->installFailureEvent = $installFailureEvent;
  }
  /** @return InstallFailureEvent */
  public function getInstallFailureEvent()
  {
    return $this->installFailureEvent;
  }
  /** @param NewDeviceEvent */
  public function setNewDeviceEvent(NewDeviceEvent $newDeviceEvent)
  {
    $this->newDeviceEvent = $newDeviceEvent;
  }
  /** @return NewDeviceEvent */
  public function getNewDeviceEvent()
  {
    return $this->newDeviceEvent;
  }
  /** @param NewPermissionsEvent */
  public function setNewPermissionsEvent(NewPermissionsEvent $newPermissionsEvent)
  {
    $this->newPermissionsEvent = $newPermissionsEvent;
  }
  /** @return NewPermissionsEvent */
  public function getNewPermissionsEvent()
  {
    return $this->newPermissionsEvent;
  }
  /** @param string */
  public function setNotificationType($notificationType)
  {
    $this->notificationType = $notificationType;
  }
  /** @return string */
  public function getNotificationType()
  {
    return $this->notificationType;
  }
  /** @param ProductApprovalEvent */
  public function setProductApprovalEvent(ProductApprovalEvent $productApprovalEvent)
  {
    $this->productApprovalEvent = $productApprovalEvent;
  }
  /** @return ProductApprovalEvent */
  public function getProductApprovalEvent()
  {
    return $this->productApprovalEvent;
  }
  /** @param ProductAvailabilityChangeEvent */
  public function setProductAvailabilityChangeEvent(ProductAvailabilityChangeEvent $productAvailabilityChangeEvent)
  {
    $this->productAvailabilityChangeEvent = $productAvailabilityChangeEvent;
  }
  /** @return ProductAvailabilityChangeEvent */
  public function getProductAvailabilityChangeEvent()
  {
    return $this->productAvailabilityChangeEvent;
  }
  /** @param string */
  public function setTimestampMillis($timestampMillis)
  {
    $this->timestampMillis = $timestampMillis;
  }
  /** @return string */
  public function getTimestampMillis()
  {
    return $this->timestampMillis;
  }
}

class NotificationSet extends \Google\Collection
{
  /** @var Notification[] */
  public $notification;
  /** @var string */
  public $notificationSetId;
  protected $collection_key = 'notification';
  protected $notificationType = Notification::class;
  protected $notificationDataType = 'array';
  /** @param Notification[] */
  public function setNotification($notification)
  {
    $this->notification = $notification;
  }
  /** @return Notification[] */
  public function getNotification()
  {
    return $this->notification;
  }
  /** @param string */
  public function setNotificationSetId($notificationSetId)
  {
    $this->notificationSetId = $notificationSetId;
  }
  /** @return string */
  public function getNotificationSetId()
  {
    return $this->notificationSetId;
  }
}

class PageInfo extends \Google\Model
{
  /** @var int */
  public $resultPerPage;
  /** @var int */
  public $startIndex;
  /** @var int */
  public $totalResults;

  /** @param int */
  public function setResultPerPage($resultPerPage)
  {
    $this->resultPerPage = $resultPerPage;
  }
  /** @return int */
  public function getResultPerPage()
  {
    return $this->resultPerPage;
  }
  /** @param int */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /** @return int */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /** @param int */
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  /** @return int */
  public function getTotalResults()
  {
    return $this->totalResults;
  }
}

class Permission extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $name;
  /** @var string */
  public $permissionId;

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
  /** @param string */
  public function setPermissionId($permissionId)
  {
    $this->permissionId = $permissionId;
  }
  /** @return string */
  public function getPermissionId()
  {
    return $this->permissionId;
  }
}

class Policy extends \Google\Collection
{
  /** @var string */
  public $autoUpdatePolicy;
  /** @var string */
  public $deviceReportPolicy;
  /** @var MaintenanceWindow */
  public $maintenanceWindow;
  /** @var string */
  public $productAvailabilityPolicy;
  /** @var ProductPolicy[] */
  public $productPolicy;
  protected $collection_key = 'productPolicy';
  protected $maintenanceWindowType = MaintenanceWindow::class;
  protected $maintenanceWindowDataType = '';
  protected $productPolicyType = ProductPolicy::class;
  protected $productPolicyDataType = 'array';
  /** @param string */
  public function setAutoUpdatePolicy($autoUpdatePolicy)
  {
    $this->autoUpdatePolicy = $autoUpdatePolicy;
  }
  /** @return string */
  public function getAutoUpdatePolicy()
  {
    return $this->autoUpdatePolicy;
  }
  /** @param string */
  public function setDeviceReportPolicy($deviceReportPolicy)
  {
    $this->deviceReportPolicy = $deviceReportPolicy;
  }
  /** @return string */
  public function getDeviceReportPolicy()
  {
    return $this->deviceReportPolicy;
  }
  /** @param MaintenanceWindow */
  public function setMaintenanceWindow(MaintenanceWindow $maintenanceWindow)
  {
    $this->maintenanceWindow = $maintenanceWindow;
  }
  /** @return MaintenanceWindow */
  public function getMaintenanceWindow()
  {
    return $this->maintenanceWindow;
  }
  /** @param string */
  public function setProductAvailabilityPolicy($productAvailabilityPolicy)
  {
    $this->productAvailabilityPolicy = $productAvailabilityPolicy;
  }
  /** @return string */
  public function getProductAvailabilityPolicy()
  {
    return $this->productAvailabilityPolicy;
  }
  /** @param ProductPolicy[] */
  public function setProductPolicy($productPolicy)
  {
    $this->productPolicy = $productPolicy;
  }
  /** @return ProductPolicy[] */
  public function getProductPolicy()
  {
    return $this->productPolicy;
  }
}

class Product extends \Google\Collection
{
  /** @var AppRestrictionsSchema */
  public $appRestrictionsSchema;
  /** @var TrackInfo[] */
  public $appTracks;
  /** @var AppVersion[] */
  public $appVersion;
  /** @var string */
  public $authorName;
  /** @var string[] */
  public $availableCountries;
  /** @var string[] */
  public $availableTracks;
  /** @var string */
  public $category;
  /** @var string */
  public $contentRating;
  /** @var string */
  public $description;
  /** @var string */
  public $detailsUrl;
  /** @var string */
  public $distributionChannel;
  /** @var string[] */
  public $features;
  /** @var string */
  public $iconUrl;
  /** @var string */
  public $lastUpdatedTimestampMillis;
  /** @var int */
  public $minAndroidSdkVersion;
  /** @var ProductPermission[] */
  public $permissions;
  /** @var string */
  public $productId;
  /** @var string */
  public $productPricing;
  /** @var string */
  public $recentChanges;
  /** @var bool */
  public $requiresContainerApp;
  /** @var string[] */
  public $screenshotUrls;
  /** @var ProductSigningCertificate */
  public $signingCertificate;
  /** @var string */
  public $smallIconUrl;
  /** @var string */
  public $title;
  /** @var string */
  public $workDetailsUrl;
  protected $collection_key = 'screenshotUrls';
  protected $appRestrictionsSchemaType = AppRestrictionsSchema::class;
  protected $appRestrictionsSchemaDataType = '';
  protected $appTracksType = TrackInfo::class;
  protected $appTracksDataType = 'array';
  protected $appVersionType = AppVersion::class;
  protected $appVersionDataType = 'array';
  protected $permissionsType = ProductPermission::class;
  protected $permissionsDataType = 'array';
  protected $signingCertificateType = ProductSigningCertificate::class;
  protected $signingCertificateDataType = '';
  /** @param AppRestrictionsSchema */
  public function setAppRestrictionsSchema(AppRestrictionsSchema $appRestrictionsSchema)
  {
    $this->appRestrictionsSchema = $appRestrictionsSchema;
  }
  /** @return AppRestrictionsSchema */
  public function getAppRestrictionsSchema()
  {
    return $this->appRestrictionsSchema;
  }
  /** @param TrackInfo[] */
  public function setAppTracks($appTracks)
  {
    $this->appTracks = $appTracks;
  }
  /** @return TrackInfo[] */
  public function getAppTracks()
  {
    return $this->appTracks;
  }
  /** @param AppVersion[] */
  public function setAppVersion($appVersion)
  {
    $this->appVersion = $appVersion;
  }
  /** @return AppVersion[] */
  public function getAppVersion()
  {
    return $this->appVersion;
  }
  /** @param string */
  public function setAuthorName($authorName)
  {
    $this->authorName = $authorName;
  }
  /** @return string */
  public function getAuthorName()
  {
    return $this->authorName;
  }
  /** @param string[] */
  public function setAvailableCountries($availableCountries)
  {
    $this->availableCountries = $availableCountries;
  }
  /** @return string[] */
  public function getAvailableCountries()
  {
    return $this->availableCountries;
  }
  /** @param string[] */
  public function setAvailableTracks($availableTracks)
  {
    $this->availableTracks = $availableTracks;
  }
  /** @return string[] */
  public function getAvailableTracks()
  {
    return $this->availableTracks;
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
  /** @param string */
  public function setContentRating($contentRating)
  {
    $this->contentRating = $contentRating;
  }
  /** @return string */
  public function getContentRating()
  {
    return $this->contentRating;
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
  public function setDetailsUrl($detailsUrl)
  {
    $this->detailsUrl = $detailsUrl;
  }
  /** @return string */
  public function getDetailsUrl()
  {
    return $this->detailsUrl;
  }
  /** @param string */
  public function setDistributionChannel($distributionChannel)
  {
    $this->distributionChannel = $distributionChannel;
  }
  /** @return string */
  public function getDistributionChannel()
  {
    return $this->distributionChannel;
  }
  /** @param string[] */
  public function setFeatures($features)
  {
    $this->features = $features;
  }
  /** @return string[] */
  public function getFeatures()
  {
    return $this->features;
  }
  /** @param string */
  public function setIconUrl($iconUrl)
  {
    $this->iconUrl = $iconUrl;
  }
  /** @return string */
  public function getIconUrl()
  {
    return $this->iconUrl;
  }
  /** @param string */
  public function setLastUpdatedTimestampMillis($lastUpdatedTimestampMillis)
  {
    $this->lastUpdatedTimestampMillis = $lastUpdatedTimestampMillis;
  }
  /** @return string */
  public function getLastUpdatedTimestampMillis()
  {
    return $this->lastUpdatedTimestampMillis;
  }
  /** @param int */
  public function setMinAndroidSdkVersion($minAndroidSdkVersion)
  {
    $this->minAndroidSdkVersion = $minAndroidSdkVersion;
  }
  /** @return int */
  public function getMinAndroidSdkVersion()
  {
    return $this->minAndroidSdkVersion;
  }
  /** @param ProductPermission[] */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /** @return ProductPermission[] */
  public function getPermissions()
  {
    return $this->permissions;
  }
  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
  /** @param string */
  public function setProductPricing($productPricing)
  {
    $this->productPricing = $productPricing;
  }
  /** @return string */
  public function getProductPricing()
  {
    return $this->productPricing;
  }
  /** @param string */
  public function setRecentChanges($recentChanges)
  {
    $this->recentChanges = $recentChanges;
  }
  /** @return string */
  public function getRecentChanges()
  {
    return $this->recentChanges;
  }
  /** @param bool */
  public function setRequiresContainerApp($requiresContainerApp)
  {
    $this->requiresContainerApp = $requiresContainerApp;
  }
  /** @return bool */
  public function getRequiresContainerApp()
  {
    return $this->requiresContainerApp;
  }
  /** @param string[] */
  public function setScreenshotUrls($screenshotUrls)
  {
    $this->screenshotUrls = $screenshotUrls;
  }
  /** @return string[] */
  public function getScreenshotUrls()
  {
    return $this->screenshotUrls;
  }
  /** @param ProductSigningCertificate */
  public function setSigningCertificate(ProductSigningCertificate $signingCertificate)
  {
    $this->signingCertificate = $signingCertificate;
  }
  /** @return ProductSigningCertificate */
  public function getSigningCertificate()
  {
    return $this->signingCertificate;
  }
  /** @param string */
  public function setSmallIconUrl($smallIconUrl)
  {
    $this->smallIconUrl = $smallIconUrl;
  }
  /** @return string */
  public function getSmallIconUrl()
  {
    return $this->smallIconUrl;
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
  public function setWorkDetailsUrl($workDetailsUrl)
  {
    $this->workDetailsUrl = $workDetailsUrl;
  }
  /** @return string */
  public function getWorkDetailsUrl()
  {
    return $this->workDetailsUrl;
  }
}

class ProductApprovalEvent extends \Google\Model
{
  /** @var string */
  public $approved;
  /** @var string */
  public $productId;

  /** @param string */
  public function setApproved($approved)
  {
    $this->approved = $approved;
  }
  /** @return string */
  public function getApproved()
  {
    return $this->approved;
  }
  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
}

class ProductAvailabilityChangeEvent extends \Google\Model
{
  /** @var string */
  public $availabilityStatus;
  /** @var string */
  public $productId;

  /** @param string */
  public function setAvailabilityStatus($availabilityStatus)
  {
    $this->availabilityStatus = $availabilityStatus;
  }
  /** @return string */
  public function getAvailabilityStatus()
  {
    return $this->availabilityStatus;
  }
  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
}

class ProductPermission extends \Google\Model
{
  /** @var string */
  public $permissionId;
  /** @var string */
  public $state;

  /** @param string */
  public function setPermissionId($permissionId)
  {
    $this->permissionId = $permissionId;
  }
  /** @return string */
  public function getPermissionId()
  {
    return $this->permissionId;
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

class ProductPermissions extends \Google\Collection
{
  /** @var ProductPermission[] */
  public $permission;
  /** @var string */
  public $productId;
  protected $collection_key = 'permission';
  protected $permissionType = ProductPermission::class;
  protected $permissionDataType = 'array';
  /** @param ProductPermission[] */
  public function setPermission($permission)
  {
    $this->permission = $permission;
  }
  /** @return ProductPermission[] */
  public function getPermission()
  {
    return $this->permission;
  }
  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
}

class ProductPolicy extends \Google\Collection
{
  /** @var AutoInstallPolicy */
  public $autoInstallPolicy;
  /** @var string */
  public $autoUpdateMode;
  /** @var EnterpriseAuthenticationAppLinkConfig[] */
  public $enterpriseAuthenticationAppLinkConfigs;
  /** @var ManagedConfiguration */
  public $managedConfiguration;
  /** @var string */
  public $productId;
  /** @var string[] */
  public $trackIds;
  /** @var string[] */
  public $tracks;
  protected $collection_key = 'tracks';
  protected $autoInstallPolicyType = AutoInstallPolicy::class;
  protected $autoInstallPolicyDataType = '';
  protected $enterpriseAuthenticationAppLinkConfigsType = EnterpriseAuthenticationAppLinkConfig::class;
  protected $enterpriseAuthenticationAppLinkConfigsDataType = 'array';
  protected $managedConfigurationType = ManagedConfiguration::class;
  protected $managedConfigurationDataType = '';
  /** @param AutoInstallPolicy */
  public function setAutoInstallPolicy(AutoInstallPolicy $autoInstallPolicy)
  {
    $this->autoInstallPolicy = $autoInstallPolicy;
  }
  /** @return AutoInstallPolicy */
  public function getAutoInstallPolicy()
  {
    return $this->autoInstallPolicy;
  }
  /** @param string */
  public function setAutoUpdateMode($autoUpdateMode)
  {
    $this->autoUpdateMode = $autoUpdateMode;
  }
  /** @return string */
  public function getAutoUpdateMode()
  {
    return $this->autoUpdateMode;
  }
  /** @param EnterpriseAuthenticationAppLinkConfig[] */
  public function setEnterpriseAuthenticationAppLinkConfigs($enterpriseAuthenticationAppLinkConfigs)
  {
    $this->enterpriseAuthenticationAppLinkConfigs = $enterpriseAuthenticationAppLinkConfigs;
  }
  /** @return EnterpriseAuthenticationAppLinkConfig[] */
  public function getEnterpriseAuthenticationAppLinkConfigs()
  {
    return $this->enterpriseAuthenticationAppLinkConfigs;
  }
  /** @param ManagedConfiguration */
  public function setManagedConfiguration(ManagedConfiguration $managedConfiguration)
  {
    $this->managedConfiguration = $managedConfiguration;
  }
  /** @return ManagedConfiguration */
  public function getManagedConfiguration()
  {
    return $this->managedConfiguration;
  }
  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
  /** @param string[] */
  public function setTrackIds($trackIds)
  {
    $this->trackIds = $trackIds;
  }
  /** @return string[] */
  public function getTrackIds()
  {
    return $this->trackIds;
  }
  /** @param string[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return string[] */
  public function getTracks()
  {
    return $this->tracks;
  }
}

class ProductSet extends \Google\Collection
{
  /** @var string[] */
  public $productId;
  /** @var string */
  public $productSetBehavior;
  /** @var ProductVisibility[] */
  public $productVisibility;
  protected $collection_key = 'productVisibility';
  protected $productVisibilityType = ProductVisibility::class;
  protected $productVisibilityDataType = 'array';
  /** @param string[] */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string[] */
  public function getProductId()
  {
    return $this->productId;
  }
  /** @param string */
  public function setProductSetBehavior($productSetBehavior)
  {
    $this->productSetBehavior = $productSetBehavior;
  }
  /** @return string */
  public function getProductSetBehavior()
  {
    return $this->productSetBehavior;
  }
  /** @param ProductVisibility[] */
  public function setProductVisibility($productVisibility)
  {
    $this->productVisibility = $productVisibility;
  }
  /** @return ProductVisibility[] */
  public function getProductVisibility()
  {
    return $this->productVisibility;
  }
}

class ProductSigningCertificate extends \Google\Model
{
  /** @var string */
  public $certificateHashSha1;
  /** @var string */
  public $certificateHashSha256;

  /** @param string */
  public function setCertificateHashSha1($certificateHashSha1)
  {
    $this->certificateHashSha1 = $certificateHashSha1;
  }
  /** @return string */
  public function getCertificateHashSha1()
  {
    return $this->certificateHashSha1;
  }
  /** @param string */
  public function setCertificateHashSha256($certificateHashSha256)
  {
    $this->certificateHashSha256 = $certificateHashSha256;
  }
  /** @return string */
  public function getCertificateHashSha256()
  {
    return $this->certificateHashSha256;
  }
}

class ProductVisibility extends \Google\Collection
{
  /** @var string */
  public $productId;
  /** @var string[] */
  public $trackIds;
  /** @var string[] */
  public $tracks;
  protected $collection_key = 'tracks';
  /** @param string */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string */
  public function getProductId()
  {
    return $this->productId;
  }
  /** @param string[] */
  public function setTrackIds($trackIds)
  {
    $this->trackIds = $trackIds;
  }
  /** @return string[] */
  public function getTrackIds()
  {
    return $this->trackIds;
  }
  /** @param string[] */
  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
  /** @return string[] */
  public function getTracks()
  {
    return $this->tracks;
  }
}

class ProductsApproveRequest extends \Google\Model
{
  /** @var ApprovalUrlInfo */
  public $approvalUrlInfo;
  /** @var string */
  public $approvedPermissions;
  protected $approvalUrlInfoType = ApprovalUrlInfo::class;
  protected $approvalUrlInfoDataType = '';
  /** @param ApprovalUrlInfo */
  public function setApprovalUrlInfo(ApprovalUrlInfo $approvalUrlInfo)
  {
    $this->approvalUrlInfo = $approvalUrlInfo;
  }
  /** @return ApprovalUrlInfo */
  public function getApprovalUrlInfo()
  {
    return $this->approvalUrlInfo;
  }
  /** @param string */
  public function setApprovedPermissions($approvedPermissions)
  {
    $this->approvedPermissions = $approvedPermissions;
  }
  /** @return string */
  public function getApprovedPermissions()
  {
    return $this->approvedPermissions;
  }
}

class ProductsGenerateApprovalUrlResponse extends \Google\Model
{
  /** @var string */
  public $url;

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

class ProductsListResponse extends \Google\Collection
{
  /** @var PageInfo */
  public $pageInfo;
  /** @var Product[] */
  public $product;
  /** @var TokenPagination */
  public $tokenPagination;
  protected $collection_key = 'product';
  protected $pageInfoType = PageInfo::class;
  protected $pageInfoDataType = '';
  protected $productType = Product::class;
  protected $productDataType = 'array';
  protected $tokenPaginationType = TokenPagination::class;
  protected $tokenPaginationDataType = '';
  /** @param PageInfo */
  public function setPageInfo(PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  /** @return PageInfo */
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  /** @param Product[] */
  public function setProduct($product)
  {
    $this->product = $product;
  }
  /** @return Product[] */
  public function getProduct()
  {
    return $this->product;
  }
  /** @param TokenPagination */
  public function setTokenPagination(TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  /** @return TokenPagination */
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
}

class ServiceAccount extends \Google\Model
{
  /** @var ServiceAccountKey */
  public $key;
  /** @var string */
  public $name;
  protected $keyType = ServiceAccountKey::class;
  protected $keyDataType = '';
  /** @param ServiceAccountKey */
  public function setKey(ServiceAccountKey $key)
  {
    $this->key = $key;
  }
  /** @return ServiceAccountKey */
  public function getKey()
  {
    return $this->key;
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

class ServiceAccountKey extends \Google\Model
{
  /** @var string */
  public $data;
  /** @var string */
  public $id;
  /** @var string */
  public $publicData;
  /** @var string */
  public $type;

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
  public function setPublicData($publicData)
  {
    $this->publicData = $publicData;
  }
  /** @return string */
  public function getPublicData()
  {
    return $this->publicData;
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

class ServiceAccountKeysListResponse extends \Google\Collection
{
  /** @var ServiceAccountKey[] */
  public $serviceAccountKey;
  protected $collection_key = 'serviceAccountKey';
  protected $serviceAccountKeyType = ServiceAccountKey::class;
  protected $serviceAccountKeyDataType = 'array';
  /** @param ServiceAccountKey[] */
  public function setServiceAccountKey($serviceAccountKey)
  {
    $this->serviceAccountKey = $serviceAccountKey;
  }
  /** @return ServiceAccountKey[] */
  public function getServiceAccountKey()
  {
    return $this->serviceAccountKey;
  }
}

class SignupInfo extends \Google\Model
{
  /** @var string */
  public $completionToken;
  /** @var string */
  public $kind;
  /** @var string */
  public $url;

  /** @param string */
  public function setCompletionToken($completionToken)
  {
    $this->completionToken = $completionToken;
  }
  /** @return string */
  public function getCompletionToken()
  {
    return $this->completionToken;
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

class StoreCluster extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var LocalizedText[] */
  public $name;
  /** @var string */
  public $orderInPage;
  /** @var string[] */
  public $productId;
  protected $collection_key = 'productId';
  protected $nameType = LocalizedText::class;
  protected $nameDataType = 'array';
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
  /** @param LocalizedText[] */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return LocalizedText[] */
  public function getName()
  {
    return $this->name;
  }
  /** @param string */
  public function setOrderInPage($orderInPage)
  {
    $this->orderInPage = $orderInPage;
  }
  /** @return string */
  public function getOrderInPage()
  {
    return $this->orderInPage;
  }
  /** @param string[] */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /** @return string[] */
  public function getProductId()
  {
    return $this->productId;
  }
}

class StoreLayout extends \Google\Model
{
  /** @var string */
  public $homepageId;
  /** @var string */
  public $storeLayoutType;

  /** @param string */
  public function setHomepageId($homepageId)
  {
    $this->homepageId = $homepageId;
  }
  /** @return string */
  public function getHomepageId()
  {
    return $this->homepageId;
  }
  /** @param string */
  public function setStoreLayoutType($storeLayoutType)
  {
    $this->storeLayoutType = $storeLayoutType;
  }
  /** @return string */
  public function getStoreLayoutType()
  {
    return $this->storeLayoutType;
  }
}

class StoreLayoutClustersListResponse extends \Google\Collection
{
  /** @var StoreCluster[] */
  public $cluster;
  protected $collection_key = 'cluster';
  protected $clusterType = StoreCluster::class;
  protected $clusterDataType = 'array';
  /** @param StoreCluster[] */
  public function setCluster($cluster)
  {
    $this->cluster = $cluster;
  }
  /** @return StoreCluster[] */
  public function getCluster()
  {
    return $this->cluster;
  }
}

class StoreLayoutPagesListResponse extends \Google\Collection
{
  /** @var StorePage[] */
  public $page;
  protected $collection_key = 'page';
  protected $pageType = StorePage::class;
  protected $pageDataType = 'array';
  /** @param StorePage[] */
  public function setPage($page)
  {
    $this->page = $page;
  }
  /** @return StorePage[] */
  public function getPage()
  {
    return $this->page;
  }
}

class StorePage extends \Google\Collection
{
  /** @var string */
  public $id;
  /** @var string[] */
  public $link;
  /** @var LocalizedText[] */
  public $name;
  protected $collection_key = 'name';
  protected $nameType = LocalizedText::class;
  protected $nameDataType = 'array';
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
  /** @param string[] */
  public function setLink($link)
  {
    $this->link = $link;
  }
  /** @return string[] */
  public function getLink()
  {
    return $this->link;
  }
  /** @param LocalizedText[] */
  public function setName($name)
  {
    $this->name = $name;
  }
  /** @return LocalizedText[] */
  public function getName()
  {
    return $this->name;
  }
}

class TokenPagination extends \Google\Model
{
  /** @var string */
  public $nextPageToken;
  /** @var string */
  public $previousPageToken;

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
  public function setPreviousPageToken($previousPageToken)
  {
    $this->previousPageToken = $previousPageToken;
  }
  /** @return string */
  public function getPreviousPageToken()
  {
    return $this->previousPageToken;
  }
}

class TrackInfo extends \Google\Model
{
  /** @var string */
  public $trackAlias;
  /** @var string */
  public $trackId;

  /** @param string */
  public function setTrackAlias($trackAlias)
  {
    $this->trackAlias = $trackAlias;
  }
  /** @return string */
  public function getTrackAlias()
  {
    return $this->trackAlias;
  }
  /** @param string */
  public function setTrackId($trackId)
  {
    $this->trackId = $trackId;
  }
  /** @return string */
  public function getTrackId()
  {
    return $this->trackId;
  }
}

class User extends \Google\Model
{
  /** @var string */
  public $accountIdentifier;
  /** @var string */
  public $accountType;
  /** @var string */
  public $displayName;
  /** @var string */
  public $id;
  /** @var string */
  public $managementType;
  /** @var string */
  public $primaryEmail;

  /** @param string */
  public function setAccountIdentifier($accountIdentifier)
  {
    $this->accountIdentifier = $accountIdentifier;
  }
  /** @return string */
  public function getAccountIdentifier()
  {
    return $this->accountIdentifier;
  }
  /** @param string */
  public function setAccountType($accountType)
  {
    $this->accountType = $accountType;
  }
  /** @return string */
  public function getAccountType()
  {
    return $this->accountType;
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
  public function setManagementType($managementType)
  {
    $this->managementType = $managementType;
  }
  /** @return string */
  public function getManagementType()
  {
    return $this->managementType;
  }
  /** @param string */
  public function setPrimaryEmail($primaryEmail)
  {
    $this->primaryEmail = $primaryEmail;
  }
  /** @return string */
  public function getPrimaryEmail()
  {
    return $this->primaryEmail;
  }
}

class UsersListResponse extends \Google\Collection
{
  /** @var User[] */
  public $user;
  protected $collection_key = 'user';
  protected $userType = User::class;
  protected $userDataType = 'array';
  /** @param User[] */
  public function setUser($user)
  {
    $this->user = $user;
  }
  /** @return User[] */
  public function getUser()
  {
    return $this->user;
  }
}

class VariableSet extends \Google\Model
{
  /** @var string */
  public $placeholder;
  /** @var string */
  public $userValue;

  /** @param string */
  public function setPlaceholder($placeholder)
  {
    $this->placeholder = $placeholder;
  }
  /** @return string */
  public function getPlaceholder()
  {
    return $this->placeholder;
  }
  /** @param string */
  public function setUserValue($userValue)
  {
    $this->userValue = $userValue;
  }
  /** @return string */
  public function getUserValue()
  {
    return $this->userValue;
  }
}

class WebApp extends \Google\Collection
{
  /** @var string */
  public $displayMode;
  /** @var WebAppIcon[] */
  public $icons;
  /** @var bool */
  public $isPublished;
  /** @var string */
  public $startUrl;
  /** @var string */
  public $title;
  /** @var string */
  public $versionCode;
  /** @var string */
  public $webAppId;
  protected $collection_key = 'icons';
  protected $iconsType = WebAppIcon::class;
  protected $iconsDataType = 'array';
  /** @param string */
  public function setDisplayMode($displayMode)
  {
    $this->displayMode = $displayMode;
  }
  /** @return string */
  public function getDisplayMode()
  {
    return $this->displayMode;
  }
  /** @param WebAppIcon[] */
  public function setIcons($icons)
  {
    $this->icons = $icons;
  }
  /** @return WebAppIcon[] */
  public function getIcons()
  {
    return $this->icons;
  }
  /** @param bool */
  public function setIsPublished($isPublished)
  {
    $this->isPublished = $isPublished;
  }
  /** @return bool */
  public function getIsPublished()
  {
    return $this->isPublished;
  }
  /** @param string */
  public function setStartUrl($startUrl)
  {
    $this->startUrl = $startUrl;
  }
  /** @return string */
  public function getStartUrl()
  {
    return $this->startUrl;
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
  public function setVersionCode($versionCode)
  {
    $this->versionCode = $versionCode;
  }
  /** @return string */
  public function getVersionCode()
  {
    return $this->versionCode;
  }
  /** @param string */
  public function setWebAppId($webAppId)
  {
    $this->webAppId = $webAppId;
  }
  /** @return string */
  public function getWebAppId()
  {
    return $this->webAppId;
  }
}

class WebAppIcon extends \Google\Model
{
  /** @var string */
  public $imageData;

  /** @param string */
  public function setImageData($imageData)
  {
    $this->imageData = $imageData;
  }
  /** @return string */
  public function getImageData()
  {
    return $this->imageData;
  }
}

class WebAppsListResponse extends \Google\Collection
{
  /** @var WebApp[] */
  public $webApp;
  protected $collection_key = 'webApp';
  protected $webAppType = WebApp::class;
  protected $webAppDataType = 'array';
  /** @param WebApp[] */
  public function setWebApp($webApp)
  {
    $this->webApp = $webApp;
  }
  /** @return WebApp[] */
  public function getWebApp()
  {
    return $this->webApp;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Administrator::class, 'Google_Service_AndroidEnterprise_Administrator');
class_alias(AdministratorWebToken::class, 'Google_Service_AndroidEnterprise_AdministratorWebToken');
class_alias(AdministratorWebTokenSpec::class, 'Google_Service_AndroidEnterprise_AdministratorWebTokenSpec');
class_alias(AdministratorWebTokenSpecManagedConfigurations::class, 'Google_Service_AndroidEnterprise_AdministratorWebTokenSpecManagedConfigurations');
class_alias(AdministratorWebTokenSpecPlaySearch::class, 'Google_Service_AndroidEnterprise_AdministratorWebTokenSpecPlaySearch');
class_alias(AdministratorWebTokenSpecPrivateApps::class, 'Google_Service_AndroidEnterprise_AdministratorWebTokenSpecPrivateApps');
class_alias(AdministratorWebTokenSpecStoreBuilder::class, 'Google_Service_AndroidEnterprise_AdministratorWebTokenSpecStoreBuilder');
class_alias(AdministratorWebTokenSpecWebApps::class, 'Google_Service_AndroidEnterprise_AdministratorWebTokenSpecWebApps');
class_alias(AdministratorWebTokenSpecZeroTouch::class, 'Google_Service_AndroidEnterprise_AdministratorWebTokenSpecZeroTouch');
class_alias(AppRestrictionsSchema::class, 'Google_Service_AndroidEnterprise_AppRestrictionsSchema');
class_alias(AppRestrictionsSchemaChangeEvent::class, 'Google_Service_AndroidEnterprise_AppRestrictionsSchemaChangeEvent');
class_alias(AppRestrictionsSchemaRestriction::class, 'Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestriction');
class_alias(AppRestrictionsSchemaRestrictionRestrictionValue::class, 'Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestrictionRestrictionValue');
class_alias(AppState::class, 'Google_Service_AndroidEnterprise_AppState');
class_alias(AppUpdateEvent::class, 'Google_Service_AndroidEnterprise_AppUpdateEvent');
class_alias(AppVersion::class, 'Google_Service_AndroidEnterprise_AppVersion');
class_alias(ApprovalUrlInfo::class, 'Google_Service_AndroidEnterprise_ApprovalUrlInfo');
class_alias(AuthenticationToken::class, 'Google_Service_AndroidEnterprise_AuthenticationToken');
class_alias(AutoInstallConstraint::class, 'Google_Service_AndroidEnterprise_AutoInstallConstraint');
class_alias(AutoInstallPolicy::class, 'Google_Service_AndroidEnterprise_AutoInstallPolicy');
class_alias(ConfigurationVariables::class, 'Google_Service_AndroidEnterprise_ConfigurationVariables');
class_alias(Device::class, 'Google_Service_AndroidEnterprise_Device');
class_alias(DeviceReport::class, 'Google_Service_AndroidEnterprise_DeviceReport');
class_alias(DeviceReportUpdateEvent::class, 'Google_Service_AndroidEnterprise_DeviceReportUpdateEvent');
class_alias(DeviceState::class, 'Google_Service_AndroidEnterprise_DeviceState');
class_alias(DevicesListResponse::class, 'Google_Service_AndroidEnterprise_DevicesListResponse');
class_alias(Enterprise::class, 'Google_Service_AndroidEnterprise_Enterprise');
class_alias(EnterpriseAccount::class, 'Google_Service_AndroidEnterprise_EnterpriseAccount');
class_alias(EnterpriseAuthenticationAppLinkConfig::class, 'Google_Service_AndroidEnterprise_EnterpriseAuthenticationAppLinkConfig');
class_alias(EnterprisesListResponse::class, 'Google_Service_AndroidEnterprise_EnterprisesListResponse');
class_alias(EnterprisesSendTestPushNotificationResponse::class, 'Google_Service_AndroidEnterprise_EnterprisesSendTestPushNotificationResponse');
class_alias(Entitlement::class, 'Google_Service_AndroidEnterprise_Entitlement');
class_alias(EntitlementsListResponse::class, 'Google_Service_AndroidEnterprise_EntitlementsListResponse');
class_alias(GroupLicense::class, 'Google_Service_AndroidEnterprise_GroupLicense');
class_alias(GroupLicenseUsersListResponse::class, 'Google_Service_AndroidEnterprise_GroupLicenseUsersListResponse');
class_alias(GroupLicensesListResponse::class, 'Google_Service_AndroidEnterprise_GroupLicensesListResponse');
class_alias(Install::class, 'Google_Service_AndroidEnterprise_Install');
class_alias(InstallFailureEvent::class, 'Google_Service_AndroidEnterprise_InstallFailureEvent');
class_alias(InstallsListResponse::class, 'Google_Service_AndroidEnterprise_InstallsListResponse');
class_alias(KeyedAppState::class, 'Google_Service_AndroidEnterprise_KeyedAppState');
class_alias(LocalizedText::class, 'Google_Service_AndroidEnterprise_LocalizedText');
class_alias(MaintenanceWindow::class, 'Google_Service_AndroidEnterprise_MaintenanceWindow');
class_alias(ManagedConfiguration::class, 'Google_Service_AndroidEnterprise_ManagedConfiguration');
class_alias(ManagedConfigurationsForDeviceListResponse::class, 'Google_Service_AndroidEnterprise_ManagedConfigurationsForDeviceListResponse');
class_alias(ManagedConfigurationsForUserListResponse::class, 'Google_Service_AndroidEnterprise_ManagedConfigurationsForUserListResponse');
class_alias(ManagedConfigurationsSettings::class, 'Google_Service_AndroidEnterprise_ManagedConfigurationsSettings');
class_alias(ManagedConfigurationsSettingsListResponse::class, 'Google_Service_AndroidEnterprise_ManagedConfigurationsSettingsListResponse');
class_alias(ManagedProperty::class, 'Google_Service_AndroidEnterprise_ManagedProperty');
class_alias(ManagedPropertyBundle::class, 'Google_Service_AndroidEnterprise_ManagedPropertyBundle');
class_alias(NewDeviceEvent::class, 'Google_Service_AndroidEnterprise_NewDeviceEvent');
class_alias(NewPermissionsEvent::class, 'Google_Service_AndroidEnterprise_NewPermissionsEvent');
class_alias(Notification::class, 'Google_Service_AndroidEnterprise_Notification');
class_alias(NotificationSet::class, 'Google_Service_AndroidEnterprise_NotificationSet');
class_alias(PageInfo::class, 'Google_Service_AndroidEnterprise_PageInfo');
class_alias(Permission::class, 'Google_Service_AndroidEnterprise_Permission');
class_alias(Policy::class, 'Google_Service_AndroidEnterprise_Policy');
class_alias(Product::class, 'Google_Service_AndroidEnterprise_Product');
class_alias(ProductApprovalEvent::class, 'Google_Service_AndroidEnterprise_ProductApprovalEvent');
class_alias(ProductAvailabilityChangeEvent::class, 'Google_Service_AndroidEnterprise_ProductAvailabilityChangeEvent');
class_alias(ProductPermission::class, 'Google_Service_AndroidEnterprise_ProductPermission');
class_alias(ProductPermissions::class, 'Google_Service_AndroidEnterprise_ProductPermissions');
class_alias(ProductPolicy::class, 'Google_Service_AndroidEnterprise_ProductPolicy');
class_alias(ProductSet::class, 'Google_Service_AndroidEnterprise_ProductSet');
class_alias(ProductSigningCertificate::class, 'Google_Service_AndroidEnterprise_ProductSigningCertificate');
class_alias(ProductVisibility::class, 'Google_Service_AndroidEnterprise_ProductVisibility');
class_alias(ProductsApproveRequest::class, 'Google_Service_AndroidEnterprise_ProductsApproveRequest');
class_alias(ProductsGenerateApprovalUrlResponse::class, 'Google_Service_AndroidEnterprise_ProductsGenerateApprovalUrlResponse');
class_alias(ProductsListResponse::class, 'Google_Service_AndroidEnterprise_ProductsListResponse');
class_alias(ServiceAccount::class, 'Google_Service_AndroidEnterprise_ServiceAccount');
class_alias(ServiceAccountKey::class, 'Google_Service_AndroidEnterprise_ServiceAccountKey');
class_alias(ServiceAccountKeysListResponse::class, 'Google_Service_AndroidEnterprise_ServiceAccountKeysListResponse');
class_alias(SignupInfo::class, 'Google_Service_AndroidEnterprise_SignupInfo');
class_alias(StoreCluster::class, 'Google_Service_AndroidEnterprise_StoreCluster');
class_alias(StoreLayout::class, 'Google_Service_AndroidEnterprise_StoreLayout');
class_alias(StoreLayoutClustersListResponse::class, 'Google_Service_AndroidEnterprise_StoreLayoutClustersListResponse');
class_alias(StoreLayoutPagesListResponse::class, 'Google_Service_AndroidEnterprise_StoreLayoutPagesListResponse');
class_alias(StorePage::class, 'Google_Service_AndroidEnterprise_StorePage');
class_alias(TokenPagination::class, 'Google_Service_AndroidEnterprise_TokenPagination');
class_alias(TrackInfo::class, 'Google_Service_AndroidEnterprise_TrackInfo');
class_alias(User::class, 'Google_Service_AndroidEnterprise_User');
class_alias(UsersListResponse::class, 'Google_Service_AndroidEnterprise_UsersListResponse');
class_alias(VariableSet::class, 'Google_Service_AndroidEnterprise_VariableSet');
class_alias(WebApp::class, 'Google_Service_AndroidEnterprise_WebApp');
class_alias(WebAppIcon::class, 'Google_Service_AndroidEnterprise_WebAppIcon');
class_alias(WebAppsListResponse::class, 'Google_Service_AndroidEnterprise_WebAppsListResponse');
