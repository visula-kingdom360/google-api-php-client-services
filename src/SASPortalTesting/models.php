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

namespace Google\Service\SASPortalTesting;

class SasPortalAssignment extends \Google\Collection
{
  /** @var string[] */
  public $members;
  /** @var string */
  public $role;
  protected $collection_key = 'members';
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

class SasPortalChannelWithScore extends \Google\Model
{
  /** @var SasPortalFrequencyRange */
  public $frequencyRange;
  public $score;
  protected $frequencyRangeType = SasPortalFrequencyRange::class;
  protected $frequencyRangeDataType = '';
  /** @param SasPortalFrequencyRange */
  public function setFrequencyRange(SasPortalFrequencyRange $frequencyRange)
  {
    $this->frequencyRange = $frequencyRange;
  }
  /** @return SasPortalFrequencyRange */
  public function getFrequencyRange()
  {
    return $this->frequencyRange;
  }
  public function setScore($score)
  {
    $this->score = $score;
  }
  public function getScore()
  {
    return $this->score;
  }
}

class SasPortalCreateSignedDeviceRequest extends \Google\Model
{
  /** @var string */
  public $encodedDevice;
  /** @var string */
  public $installerId;

  /** @param string */
  public function setEncodedDevice($encodedDevice)
  {
    $this->encodedDevice = $encodedDevice;
  }
  /** @return string */
  public function getEncodedDevice()
  {
    return $this->encodedDevice;
  }
  /** @param string */
  public function setInstallerId($installerId)
  {
    $this->installerId = $installerId;
  }
  /** @return string */
  public function getInstallerId()
  {
    return $this->installerId;
  }
}

class SasPortalCustomer extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string[] */
  public $sasUserIds;
  protected $collection_key = 'sasUserIds';
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
  /** @param string[] */
  public function setSasUserIds($sasUserIds)
  {
    $this->sasUserIds = $sasUserIds;
  }
  /** @return string[] */
  public function getSasUserIds()
  {
    return $this->sasUserIds;
  }
}

class SasPortalDeployment extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var string[] */
  public $frns;
  /** @var string */
  public $name;
  /** @var string[] */
  public $sasUserIds;
  protected $collection_key = 'sasUserIds';
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
  public function setFrns($frns)
  {
    $this->frns = $frns;
  }
  /** @return string[] */
  public function getFrns()
  {
    return $this->frns;
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
  public function setSasUserIds($sasUserIds)
  {
    $this->sasUserIds = $sasUserIds;
  }
  /** @return string[] */
  public function getSasUserIds()
  {
    return $this->sasUserIds;
  }
}

class SasPortalDevice extends \Google\Collection
{
  /** @var SasPortalDeviceConfig */
  public $activeConfig;
  /** @var SasPortalChannelWithScore[] */
  public $currentChannels;
  /** @var SasPortalDeviceMetadata */
  public $deviceMetadata;
  /** @var string */
  public $displayName;
  /** @var string */
  public $fccId;
  /** @var SasPortalFrequencyRange[] */
  public $grantRangeAllowlists;
  /** @var SasPortalDeviceGrant[] */
  public $grants;
  /** @var string */
  public $name;
  /** @var SasPortalDeviceConfig */
  public $preloadedConfig;
  /** @var string */
  public $serialNumber;
  /** @var string */
  public $state;
  protected $collection_key = 'grants';
  protected $activeConfigType = SasPortalDeviceConfig::class;
  protected $activeConfigDataType = '';
  protected $currentChannelsType = SasPortalChannelWithScore::class;
  protected $currentChannelsDataType = 'array';
  protected $deviceMetadataType = SasPortalDeviceMetadata::class;
  protected $deviceMetadataDataType = '';
  protected $grantRangeAllowlistsType = SasPortalFrequencyRange::class;
  protected $grantRangeAllowlistsDataType = 'array';
  protected $grantsType = SasPortalDeviceGrant::class;
  protected $grantsDataType = 'array';
  protected $preloadedConfigType = SasPortalDeviceConfig::class;
  protected $preloadedConfigDataType = '';
  /** @param SasPortalDeviceConfig */
  public function setActiveConfig(SasPortalDeviceConfig $activeConfig)
  {
    $this->activeConfig = $activeConfig;
  }
  /** @return SasPortalDeviceConfig */
  public function getActiveConfig()
  {
    return $this->activeConfig;
  }
  /** @param SasPortalChannelWithScore[] */
  public function setCurrentChannels($currentChannels)
  {
    $this->currentChannels = $currentChannels;
  }
  /** @return SasPortalChannelWithScore[] */
  public function getCurrentChannels()
  {
    return $this->currentChannels;
  }
  /** @param SasPortalDeviceMetadata */
  public function setDeviceMetadata(SasPortalDeviceMetadata $deviceMetadata)
  {
    $this->deviceMetadata = $deviceMetadata;
  }
  /** @return SasPortalDeviceMetadata */
  public function getDeviceMetadata()
  {
    return $this->deviceMetadata;
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
  public function setFccId($fccId)
  {
    $this->fccId = $fccId;
  }
  /** @return string */
  public function getFccId()
  {
    return $this->fccId;
  }
  /** @param SasPortalFrequencyRange[] */
  public function setGrantRangeAllowlists($grantRangeAllowlists)
  {
    $this->grantRangeAllowlists = $grantRangeAllowlists;
  }
  /** @return SasPortalFrequencyRange[] */
  public function getGrantRangeAllowlists()
  {
    return $this->grantRangeAllowlists;
  }
  /** @param SasPortalDeviceGrant[] */
  public function setGrants($grants)
  {
    $this->grants = $grants;
  }
  /** @return SasPortalDeviceGrant[] */
  public function getGrants()
  {
    return $this->grants;
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
  /** @param SasPortalDeviceConfig */
  public function setPreloadedConfig(SasPortalDeviceConfig $preloadedConfig)
  {
    $this->preloadedConfig = $preloadedConfig;
  }
  /** @return SasPortalDeviceConfig */
  public function getPreloadedConfig()
  {
    return $this->preloadedConfig;
  }
  /** @param string */
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /** @return string */
  public function getSerialNumber()
  {
    return $this->serialNumber;
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

class SasPortalDeviceAirInterface extends \Google\Model
{
  /** @var string */
  public $radioTechnology;
  /** @var string */
  public $supportedSpec;

  /** @param string */
  public function setRadioTechnology($radioTechnology)
  {
    $this->radioTechnology = $radioTechnology;
  }
  /** @return string */
  public function getRadioTechnology()
  {
    return $this->radioTechnology;
  }
  /** @param string */
  public function setSupportedSpec($supportedSpec)
  {
    $this->supportedSpec = $supportedSpec;
  }
  /** @return string */
  public function getSupportedSpec()
  {
    return $this->supportedSpec;
  }
}

class SasPortalDeviceConfig extends \Google\Collection
{
  /** @var SasPortalDeviceAirInterface */
  public $airInterface;
  /** @var string */
  public $callSign;
  /** @var string */
  public $category;
  /** @var SasPortalInstallationParams */
  public $installationParams;
  /** @var bool */
  public $isSigned;
  /** @var string[] */
  public $measurementCapabilities;
  /** @var SasPortalDeviceModel */
  public $model;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;
  /** @var string */
  public $userId;
  protected $collection_key = 'measurementCapabilities';
  protected $airInterfaceType = SasPortalDeviceAirInterface::class;
  protected $airInterfaceDataType = '';
  protected $installationParamsType = SasPortalInstallationParams::class;
  protected $installationParamsDataType = '';
  protected $modelType = SasPortalDeviceModel::class;
  protected $modelDataType = '';
  /** @param SasPortalDeviceAirInterface */
  public function setAirInterface(SasPortalDeviceAirInterface $airInterface)
  {
    $this->airInterface = $airInterface;
  }
  /** @return SasPortalDeviceAirInterface */
  public function getAirInterface()
  {
    return $this->airInterface;
  }
  /** @param string */
  public function setCallSign($callSign)
  {
    $this->callSign = $callSign;
  }
  /** @return string */
  public function getCallSign()
  {
    return $this->callSign;
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
  /** @param SasPortalInstallationParams */
  public function setInstallationParams(SasPortalInstallationParams $installationParams)
  {
    $this->installationParams = $installationParams;
  }
  /** @return SasPortalInstallationParams */
  public function getInstallationParams()
  {
    return $this->installationParams;
  }
  /** @param bool */
  public function setIsSigned($isSigned)
  {
    $this->isSigned = $isSigned;
  }
  /** @return bool */
  public function getIsSigned()
  {
    return $this->isSigned;
  }
  /** @param string[] */
  public function setMeasurementCapabilities($measurementCapabilities)
  {
    $this->measurementCapabilities = $measurementCapabilities;
  }
  /** @return string[] */
  public function getMeasurementCapabilities()
  {
    return $this->measurementCapabilities;
  }
  /** @param SasPortalDeviceModel */
  public function setModel(SasPortalDeviceModel $model)
  {
    $this->model = $model;
  }
  /** @return SasPortalDeviceModel */
  public function getModel()
  {
    return $this->model;
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
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /** @return string */
  public function getUpdateTime()
  {
    return $this->updateTime;
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

class SasPortalDeviceGrant extends \Google\Collection
{
  /** @var string */
  public $channelType;
  /** @var string */
  public $expireTime;
  /** @var SasPortalFrequencyRange */
  public $frequencyRange;
  /** @var string */
  public $grantId;
  /** @var string */
  public $lastHeartbeatTransmitExpireTime;
  public $maxEirp;
  /** @var SasPortalDpaMoveList[] */
  public $moveList;
  /** @var string */
  public $state;
  /** @var string[] */
  public $suspensionReason;
  protected $collection_key = 'suspensionReason';
  protected $frequencyRangeType = SasPortalFrequencyRange::class;
  protected $frequencyRangeDataType = '';
  protected $moveListType = SasPortalDpaMoveList::class;
  protected $moveListDataType = 'array';
  /** @param string */
  public function setChannelType($channelType)
  {
    $this->channelType = $channelType;
  }
  /** @return string */
  public function getChannelType()
  {
    return $this->channelType;
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
  /** @param SasPortalFrequencyRange */
  public function setFrequencyRange(SasPortalFrequencyRange $frequencyRange)
  {
    $this->frequencyRange = $frequencyRange;
  }
  /** @return SasPortalFrequencyRange */
  public function getFrequencyRange()
  {
    return $this->frequencyRange;
  }
  /** @param string */
  public function setGrantId($grantId)
  {
    $this->grantId = $grantId;
  }
  /** @return string */
  public function getGrantId()
  {
    return $this->grantId;
  }
  /** @param string */
  public function setLastHeartbeatTransmitExpireTime($lastHeartbeatTransmitExpireTime)
  {
    $this->lastHeartbeatTransmitExpireTime = $lastHeartbeatTransmitExpireTime;
  }
  /** @return string */
  public function getLastHeartbeatTransmitExpireTime()
  {
    return $this->lastHeartbeatTransmitExpireTime;
  }
  public function setMaxEirp($maxEirp)
  {
    $this->maxEirp = $maxEirp;
  }
  public function getMaxEirp()
  {
    return $this->maxEirp;
  }
  /** @param SasPortalDpaMoveList[] */
  public function setMoveList($moveList)
  {
    $this->moveList = $moveList;
  }
  /** @return SasPortalDpaMoveList[] */
  public function getMoveList()
  {
    return $this->moveList;
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
  /** @param string[] */
  public function setSuspensionReason($suspensionReason)
  {
    $this->suspensionReason = $suspensionReason;
  }
  /** @return string[] */
  public function getSuspensionReason()
  {
    return $this->suspensionReason;
  }
}

class SasPortalDeviceMetadata extends \Google\Model
{
  /** @var string */
  public $antennaModel;
  /** @var string */
  public $commonChannelGroup;
  /** @var string */
  public $interferenceCoordinationGroup;
  /** @var bool */
  public $nrqzValidated;
  /** @var SasPortalNrqzValidation */
  public $nrqzValidation;
  protected $nrqzValidationType = SasPortalNrqzValidation::class;
  protected $nrqzValidationDataType = '';
  /** @param string */
  public function setAntennaModel($antennaModel)
  {
    $this->antennaModel = $antennaModel;
  }
  /** @return string */
  public function getAntennaModel()
  {
    return $this->antennaModel;
  }
  /** @param string */
  public function setCommonChannelGroup($commonChannelGroup)
  {
    $this->commonChannelGroup = $commonChannelGroup;
  }
  /** @return string */
  public function getCommonChannelGroup()
  {
    return $this->commonChannelGroup;
  }
  /** @param string */
  public function setInterferenceCoordinationGroup($interferenceCoordinationGroup)
  {
    $this->interferenceCoordinationGroup = $interferenceCoordinationGroup;
  }
  /** @return string */
  public function getInterferenceCoordinationGroup()
  {
    return $this->interferenceCoordinationGroup;
  }
  /** @param bool */
  public function setNrqzValidated($nrqzValidated)
  {
    $this->nrqzValidated = $nrqzValidated;
  }
  /** @return bool */
  public function getNrqzValidated()
  {
    return $this->nrqzValidated;
  }
  /** @param SasPortalNrqzValidation */
  public function setNrqzValidation(SasPortalNrqzValidation $nrqzValidation)
  {
    $this->nrqzValidation = $nrqzValidation;
  }
  /** @return SasPortalNrqzValidation */
  public function getNrqzValidation()
  {
    return $this->nrqzValidation;
  }
}

class SasPortalDeviceModel extends \Google\Model
{
  /** @var string */
  public $firmwareVersion;
  /** @var string */
  public $hardwareVersion;
  /** @var string */
  public $name;
  /** @var string */
  public $softwareVersion;
  /** @var string */
  public $vendor;

  /** @param string */
  public function setFirmwareVersion($firmwareVersion)
  {
    $this->firmwareVersion = $firmwareVersion;
  }
  /** @return string */
  public function getFirmwareVersion()
  {
    return $this->firmwareVersion;
  }
  /** @param string */
  public function setHardwareVersion($hardwareVersion)
  {
    $this->hardwareVersion = $hardwareVersion;
  }
  /** @return string */
  public function getHardwareVersion()
  {
    return $this->hardwareVersion;
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
  public function setSoftwareVersion($softwareVersion)
  {
    $this->softwareVersion = $softwareVersion;
  }
  /** @return string */
  public function getSoftwareVersion()
  {
    return $this->softwareVersion;
  }
  /** @param string */
  public function setVendor($vendor)
  {
    $this->vendor = $vendor;
  }
  /** @return string */
  public function getVendor()
  {
    return $this->vendor;
  }
}

class SasPortalDpaMoveList extends \Google\Model
{
  /** @var string */
  public $dpaId;
  /** @var SasPortalFrequencyRange */
  public $frequencyRange;
  protected $frequencyRangeType = SasPortalFrequencyRange::class;
  protected $frequencyRangeDataType = '';
  /** @param string */
  public function setDpaId($dpaId)
  {
    $this->dpaId = $dpaId;
  }
  /** @return string */
  public function getDpaId()
  {
    return $this->dpaId;
  }
  /** @param SasPortalFrequencyRange */
  public function setFrequencyRange(SasPortalFrequencyRange $frequencyRange)
  {
    $this->frequencyRange = $frequencyRange;
  }
  /** @return SasPortalFrequencyRange */
  public function getFrequencyRange()
  {
    return $this->frequencyRange;
  }
}

class SasPortalEmpty extends \Google\Model
{
}

class SasPortalFrequencyRange extends \Google\Model
{
  public $highFrequencyMhz;
  public $lowFrequencyMhz;

  public function setHighFrequencyMhz($highFrequencyMhz)
  {
    $this->highFrequencyMhz = $highFrequencyMhz;
  }
  public function getHighFrequencyMhz()
  {
    return $this->highFrequencyMhz;
  }
  public function setLowFrequencyMhz($lowFrequencyMhz)
  {
    $this->lowFrequencyMhz = $lowFrequencyMhz;
  }
  public function getLowFrequencyMhz()
  {
    return $this->lowFrequencyMhz;
  }
}

class SasPortalGenerateSecretRequest extends \Google\Model
{
}

class SasPortalGenerateSecretResponse extends \Google\Model
{
  /** @var string */
  public $secret;

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
}

class SasPortalGetPolicyRequest extends \Google\Model
{
  /** @var string */
  public $resource;

  /** @param string */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
  }
}

class SasPortalInstallationParams extends \Google\Model
{
  /** @var int */
  public $antennaAzimuth;
  /** @var int */
  public $antennaBeamwidth;
  /** @var int */
  public $antennaDowntilt;
  /** @var int */
  public $antennaGain;
  /** @var string */
  public $antennaModel;
  /** @var bool */
  public $cpeCbsdIndication;
  /** @var int */
  public $eirpCapability;
  public $height;
  /** @var string */
  public $heightType;
  public $horizontalAccuracy;
  /** @var bool */
  public $indoorDeployment;
  public $latitude;
  public $longitude;
  public $verticalAccuracy;

  /** @param int */
  public function setAntennaAzimuth($antennaAzimuth)
  {
    $this->antennaAzimuth = $antennaAzimuth;
  }
  /** @return int */
  public function getAntennaAzimuth()
  {
    return $this->antennaAzimuth;
  }
  /** @param int */
  public function setAntennaBeamwidth($antennaBeamwidth)
  {
    $this->antennaBeamwidth = $antennaBeamwidth;
  }
  /** @return int */
  public function getAntennaBeamwidth()
  {
    return $this->antennaBeamwidth;
  }
  /** @param int */
  public function setAntennaDowntilt($antennaDowntilt)
  {
    $this->antennaDowntilt = $antennaDowntilt;
  }
  /** @return int */
  public function getAntennaDowntilt()
  {
    return $this->antennaDowntilt;
  }
  /** @param int */
  public function setAntennaGain($antennaGain)
  {
    $this->antennaGain = $antennaGain;
  }
  /** @return int */
  public function getAntennaGain()
  {
    return $this->antennaGain;
  }
  /** @param string */
  public function setAntennaModel($antennaModel)
  {
    $this->antennaModel = $antennaModel;
  }
  /** @return string */
  public function getAntennaModel()
  {
    return $this->antennaModel;
  }
  /** @param bool */
  public function setCpeCbsdIndication($cpeCbsdIndication)
  {
    $this->cpeCbsdIndication = $cpeCbsdIndication;
  }
  /** @return bool */
  public function getCpeCbsdIndication()
  {
    return $this->cpeCbsdIndication;
  }
  /** @param int */
  public function setEirpCapability($eirpCapability)
  {
    $this->eirpCapability = $eirpCapability;
  }
  /** @return int */
  public function getEirpCapability()
  {
    return $this->eirpCapability;
  }
  public function setHeight($height)
  {
    $this->height = $height;
  }
  public function getHeight()
  {
    return $this->height;
  }
  /** @param string */
  public function setHeightType($heightType)
  {
    $this->heightType = $heightType;
  }
  /** @return string */
  public function getHeightType()
  {
    return $this->heightType;
  }
  public function setHorizontalAccuracy($horizontalAccuracy)
  {
    $this->horizontalAccuracy = $horizontalAccuracy;
  }
  public function getHorizontalAccuracy()
  {
    return $this->horizontalAccuracy;
  }
  /** @param bool */
  public function setIndoorDeployment($indoorDeployment)
  {
    $this->indoorDeployment = $indoorDeployment;
  }
  /** @return bool */
  public function getIndoorDeployment()
  {
    return $this->indoorDeployment;
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
  public function setVerticalAccuracy($verticalAccuracy)
  {
    $this->verticalAccuracy = $verticalAccuracy;
  }
  public function getVerticalAccuracy()
  {
    return $this->verticalAccuracy;
  }
}

class SasPortalListCustomersResponse extends \Google\Collection
{
  /** @var SasPortalCustomer[] */
  public $customers;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'customers';
  protected $customersType = SasPortalCustomer::class;
  protected $customersDataType = 'array';
  /** @param SasPortalCustomer[] */
  public function setCustomers($customers)
  {
    $this->customers = $customers;
  }
  /** @return SasPortalCustomer[] */
  public function getCustomers()
  {
    return $this->customers;
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

class SasPortalListDeploymentsResponse extends \Google\Collection
{
  /** @var SasPortalDeployment[] */
  public $deployments;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'deployments';
  protected $deploymentsType = SasPortalDeployment::class;
  protected $deploymentsDataType = 'array';
  /** @param SasPortalDeployment[] */
  public function setDeployments($deployments)
  {
    $this->deployments = $deployments;
  }
  /** @return SasPortalDeployment[] */
  public function getDeployments()
  {
    return $this->deployments;
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

class SasPortalListDevicesResponse extends \Google\Collection
{
  /** @var SasPortalDevice[] */
  public $devices;
  /** @var string */
  public $nextPageToken;
  protected $collection_key = 'devices';
  protected $devicesType = SasPortalDevice::class;
  protected $devicesDataType = 'array';
  /** @param SasPortalDevice[] */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /** @return SasPortalDevice[] */
  public function getDevices()
  {
    return $this->devices;
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

class SasPortalListNodesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var SasPortalNode[] */
  public $nodes;
  protected $collection_key = 'nodes';
  protected $nodesType = SasPortalNode::class;
  protected $nodesDataType = 'array';
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
  /** @param SasPortalNode[] */
  public function setNodes($nodes)
  {
    $this->nodes = $nodes;
  }
  /** @return SasPortalNode[] */
  public function getNodes()
  {
    return $this->nodes;
  }
}

class SasPortalMoveDeploymentRequest extends \Google\Model
{
  /** @var string */
  public $destination;

  /** @param string */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return string */
  public function getDestination()
  {
    return $this->destination;
  }
}

class SasPortalMoveDeviceRequest extends \Google\Model
{
  /** @var string */
  public $destination;

  /** @param string */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return string */
  public function getDestination()
  {
    return $this->destination;
  }
}

class SasPortalMoveNodeRequest extends \Google\Model
{
  /** @var string */
  public $destination;

  /** @param string */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return string */
  public function getDestination()
  {
    return $this->destination;
  }
}

class SasPortalNode extends \Google\Collection
{
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string[] */
  public $sasUserIds;
  protected $collection_key = 'sasUserIds';
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
  /** @param string[] */
  public function setSasUserIds($sasUserIds)
  {
    $this->sasUserIds = $sasUserIds;
  }
  /** @return string[] */
  public function getSasUserIds()
  {
    return $this->sasUserIds;
  }
}

class SasPortalNrqzValidation extends \Google\Model
{
  /** @var string */
  public $caseId;
  /** @var string */
  public $cpiId;
  public $latitude;
  public $longitude;
  /** @var string */
  public $state;

  /** @param string */
  public function setCaseId($caseId)
  {
    $this->caseId = $caseId;
  }
  /** @return string */
  public function getCaseId()
  {
    return $this->caseId;
  }
  /** @param string */
  public function setCpiId($cpiId)
  {
    $this->cpiId = $cpiId;
  }
  /** @return string */
  public function getCpiId()
  {
    return $this->cpiId;
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

class SasPortalOperation extends \Google\Model
{
  /** @var bool */
  public $done;
  /** @var SasPortalStatus */
  public $error;
  /** @var array[] */
  public $metadata;
  /** @var string */
  public $name;
  /** @var array[] */
  public $response;
  protected $errorType = SasPortalStatus::class;
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
  /** @param SasPortalStatus */
  public function setError(SasPortalStatus $error)
  {
    $this->error = $error;
  }
  /** @return SasPortalStatus */
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

class SasPortalPolicy extends \Google\Collection
{
  /** @var SasPortalAssignment[] */
  public $assignments;
  /** @var string */
  public $etag;
  protected $collection_key = 'assignments';
  protected $assignmentsType = SasPortalAssignment::class;
  protected $assignmentsDataType = 'array';
  /** @param SasPortalAssignment[] */
  public function setAssignments($assignments)
  {
    $this->assignments = $assignments;
  }
  /** @return SasPortalAssignment[] */
  public function getAssignments()
  {
    return $this->assignments;
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
}

class SasPortalSetPolicyRequest extends \Google\Model
{
  /** @var bool */
  public $disableNotification;
  /** @var SasPortalPolicy */
  public $policy;
  /** @var string */
  public $resource;
  protected $policyType = SasPortalPolicy::class;
  protected $policyDataType = '';
  /** @param bool */
  public function setDisableNotification($disableNotification)
  {
    $this->disableNotification = $disableNotification;
  }
  /** @return bool */
  public function getDisableNotification()
  {
    return $this->disableNotification;
  }
  /** @param SasPortalPolicy */
  public function setPolicy(SasPortalPolicy $policy)
  {
    $this->policy = $policy;
  }
  /** @return SasPortalPolicy */
  public function getPolicy()
  {
    return $this->policy;
  }
  /** @param string */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
  }
}

class SasPortalSignDeviceRequest extends \Google\Model
{
  /** @var SasPortalDevice */
  public $device;
  protected $deviceType = SasPortalDevice::class;
  protected $deviceDataType = '';
  /** @param SasPortalDevice */
  public function setDevice(SasPortalDevice $device)
  {
    $this->device = $device;
  }
  /** @return SasPortalDevice */
  public function getDevice()
  {
    return $this->device;
  }
}

class SasPortalStatus extends \Google\Collection
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

class SasPortalTestPermissionsRequest extends \Google\Collection
{
  /** @var string[] */
  public $permissions;
  /** @var string */
  public $resource;
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
  /** @param string */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /** @return string */
  public function getResource()
  {
    return $this->resource;
  }
}

class SasPortalTestPermissionsResponse extends \Google\Collection
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

class SasPortalUpdateSignedDeviceRequest extends \Google\Model
{
  /** @var string */
  public $encodedDevice;
  /** @var string */
  public $installerId;

  /** @param string */
  public function setEncodedDevice($encodedDevice)
  {
    $this->encodedDevice = $encodedDevice;
  }
  /** @return string */
  public function getEncodedDevice()
  {
    return $this->encodedDevice;
  }
  /** @param string */
  public function setInstallerId($installerId)
  {
    $this->installerId = $installerId;
  }
  /** @return string */
  public function getInstallerId()
  {
    return $this->installerId;
  }
}

class SasPortalValidateInstallerRequest extends \Google\Model
{
  /** @var string */
  public $encodedSecret;
  /** @var string */
  public $installerId;
  /** @var string */
  public $secret;

  /** @param string */
  public function setEncodedSecret($encodedSecret)
  {
    $this->encodedSecret = $encodedSecret;
  }
  /** @return string */
  public function getEncodedSecret()
  {
    return $this->encodedSecret;
  }
  /** @param string */
  public function setInstallerId($installerId)
  {
    $this->installerId = $installerId;
  }
  /** @return string */
  public function getInstallerId()
  {
    return $this->installerId;
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
}

class SasPortalValidateInstallerResponse extends \Google\Model
{
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SasPortalAssignment::class, 'Google_Service_SASPortalTesting_SasPortalAssignment');
class_alias(SasPortalChannelWithScore::class, 'Google_Service_SASPortalTesting_SasPortalChannelWithScore');
class_alias(SasPortalCreateSignedDeviceRequest::class, 'Google_Service_SASPortalTesting_SasPortalCreateSignedDeviceRequest');
class_alias(SasPortalCustomer::class, 'Google_Service_SASPortalTesting_SasPortalCustomer');
class_alias(SasPortalDeployment::class, 'Google_Service_SASPortalTesting_SasPortalDeployment');
class_alias(SasPortalDevice::class, 'Google_Service_SASPortalTesting_SasPortalDevice');
class_alias(SasPortalDeviceAirInterface::class, 'Google_Service_SASPortalTesting_SasPortalDeviceAirInterface');
class_alias(SasPortalDeviceConfig::class, 'Google_Service_SASPortalTesting_SasPortalDeviceConfig');
class_alias(SasPortalDeviceGrant::class, 'Google_Service_SASPortalTesting_SasPortalDeviceGrant');
class_alias(SasPortalDeviceMetadata::class, 'Google_Service_SASPortalTesting_SasPortalDeviceMetadata');
class_alias(SasPortalDeviceModel::class, 'Google_Service_SASPortalTesting_SasPortalDeviceModel');
class_alias(SasPortalDpaMoveList::class, 'Google_Service_SASPortalTesting_SasPortalDpaMoveList');
class_alias(SasPortalEmpty::class, 'Google_Service_SASPortalTesting_SasPortalEmpty');
class_alias(SasPortalFrequencyRange::class, 'Google_Service_SASPortalTesting_SasPortalFrequencyRange');
class_alias(SasPortalGenerateSecretRequest::class, 'Google_Service_SASPortalTesting_SasPortalGenerateSecretRequest');
class_alias(SasPortalGenerateSecretResponse::class, 'Google_Service_SASPortalTesting_SasPortalGenerateSecretResponse');
class_alias(SasPortalGetPolicyRequest::class, 'Google_Service_SASPortalTesting_SasPortalGetPolicyRequest');
class_alias(SasPortalInstallationParams::class, 'Google_Service_SASPortalTesting_SasPortalInstallationParams');
class_alias(SasPortalListCustomersResponse::class, 'Google_Service_SASPortalTesting_SasPortalListCustomersResponse');
class_alias(SasPortalListDeploymentsResponse::class, 'Google_Service_SASPortalTesting_SasPortalListDeploymentsResponse');
class_alias(SasPortalListDevicesResponse::class, 'Google_Service_SASPortalTesting_SasPortalListDevicesResponse');
class_alias(SasPortalListNodesResponse::class, 'Google_Service_SASPortalTesting_SasPortalListNodesResponse');
class_alias(SasPortalMoveDeploymentRequest::class, 'Google_Service_SASPortalTesting_SasPortalMoveDeploymentRequest');
class_alias(SasPortalMoveDeviceRequest::class, 'Google_Service_SASPortalTesting_SasPortalMoveDeviceRequest');
class_alias(SasPortalMoveNodeRequest::class, 'Google_Service_SASPortalTesting_SasPortalMoveNodeRequest');
class_alias(SasPortalNode::class, 'Google_Service_SASPortalTesting_SasPortalNode');
class_alias(SasPortalNrqzValidation::class, 'Google_Service_SASPortalTesting_SasPortalNrqzValidation');
class_alias(SasPortalOperation::class, 'Google_Service_SASPortalTesting_SasPortalOperation');
class_alias(SasPortalPolicy::class, 'Google_Service_SASPortalTesting_SasPortalPolicy');
class_alias(SasPortalSetPolicyRequest::class, 'Google_Service_SASPortalTesting_SasPortalSetPolicyRequest');
class_alias(SasPortalSignDeviceRequest::class, 'Google_Service_SASPortalTesting_SasPortalSignDeviceRequest');
class_alias(SasPortalStatus::class, 'Google_Service_SASPortalTesting_SasPortalStatus');
class_alias(SasPortalTestPermissionsRequest::class, 'Google_Service_SASPortalTesting_SasPortalTestPermissionsRequest');
class_alias(SasPortalTestPermissionsResponse::class, 'Google_Service_SASPortalTesting_SasPortalTestPermissionsResponse');
class_alias(SasPortalUpdateSignedDeviceRequest::class, 'Google_Service_SASPortalTesting_SasPortalUpdateSignedDeviceRequest');
class_alias(SasPortalValidateInstallerRequest::class, 'Google_Service_SASPortalTesting_SasPortalValidateInstallerRequest');
class_alias(SasPortalValidateInstallerResponse::class, 'Google_Service_SASPortalTesting_SasPortalValidateInstallerResponse');
