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

namespace Google\Service\MyBusinessLodging;

class Accessibility extends \Google\Model
{
  /** @var bool */
  public $mobilityAccessible;
  /** @var bool */
  public $mobilityAccessibleElevator;
  /** @var string */
  public $mobilityAccessibleElevatorException;
  /** @var string */
  public $mobilityAccessibleException;
  /** @var bool */
  public $mobilityAccessibleParking;
  /** @var string */
  public $mobilityAccessibleParkingException;
  /** @var bool */
  public $mobilityAccessiblePool;
  /** @var string */
  public $mobilityAccessiblePoolException;

  /** @param bool */
  public function setMobilityAccessible($mobilityAccessible)
  {
    $this->mobilityAccessible = $mobilityAccessible;
  }
  /** @return bool */
  public function getMobilityAccessible()
  {
    return $this->mobilityAccessible;
  }
  /** @param bool */
  public function setMobilityAccessibleElevator($mobilityAccessibleElevator)
  {
    $this->mobilityAccessibleElevator = $mobilityAccessibleElevator;
  }
  /** @return bool */
  public function getMobilityAccessibleElevator()
  {
    return $this->mobilityAccessibleElevator;
  }
  /** @param string */
  public function setMobilityAccessibleElevatorException($mobilityAccessibleElevatorException)
  {
    $this->mobilityAccessibleElevatorException = $mobilityAccessibleElevatorException;
  }
  /** @return string */
  public function getMobilityAccessibleElevatorException()
  {
    return $this->mobilityAccessibleElevatorException;
  }
  /** @param string */
  public function setMobilityAccessibleException($mobilityAccessibleException)
  {
    $this->mobilityAccessibleException = $mobilityAccessibleException;
  }
  /** @return string */
  public function getMobilityAccessibleException()
  {
    return $this->mobilityAccessibleException;
  }
  /** @param bool */
  public function setMobilityAccessibleParking($mobilityAccessibleParking)
  {
    $this->mobilityAccessibleParking = $mobilityAccessibleParking;
  }
  /** @return bool */
  public function getMobilityAccessibleParking()
  {
    return $this->mobilityAccessibleParking;
  }
  /** @param string */
  public function setMobilityAccessibleParkingException($mobilityAccessibleParkingException)
  {
    $this->mobilityAccessibleParkingException = $mobilityAccessibleParkingException;
  }
  /** @return string */
  public function getMobilityAccessibleParkingException()
  {
    return $this->mobilityAccessibleParkingException;
  }
  /** @param bool */
  public function setMobilityAccessiblePool($mobilityAccessiblePool)
  {
    $this->mobilityAccessiblePool = $mobilityAccessiblePool;
  }
  /** @return bool */
  public function getMobilityAccessiblePool()
  {
    return $this->mobilityAccessiblePool;
  }
  /** @param string */
  public function setMobilityAccessiblePoolException($mobilityAccessiblePoolException)
  {
    $this->mobilityAccessiblePoolException = $mobilityAccessiblePoolException;
  }
  /** @return string */
  public function getMobilityAccessiblePoolException()
  {
    return $this->mobilityAccessiblePoolException;
  }
}

class Activities extends \Google\Model
{
  /** @var bool */
  public $beachAccess;
  /** @var string */
  public $beachAccessException;
  /** @var bool */
  public $beachFront;
  /** @var string */
  public $beachFrontException;
  /** @var bool */
  public $bicycleRental;
  /** @var string */
  public $bicycleRentalException;
  /** @var bool */
  public $boutiqueStores;
  /** @var string */
  public $boutiqueStoresException;
  /** @var bool */
  public $casino;
  /** @var string */
  public $casinoException;
  /** @var bool */
  public $freeBicycleRental;
  /** @var string */
  public $freeBicycleRentalException;
  /** @var bool */
  public $freeWatercraftRental;
  /** @var string */
  public $freeWatercraftRentalException;
  /** @var bool */
  public $gameRoom;
  /** @var string */
  public $gameRoomException;
  /** @var bool */
  public $golf;
  /** @var string */
  public $golfException;
  /** @var bool */
  public $horsebackRiding;
  /** @var string */
  public $horsebackRidingException;
  /** @var bool */
  public $nightclub;
  /** @var string */
  public $nightclubException;
  /** @var bool */
  public $privateBeach;
  /** @var string */
  public $privateBeachException;
  /** @var bool */
  public $scuba;
  /** @var string */
  public $scubaException;
  /** @var bool */
  public $snorkeling;
  /** @var string */
  public $snorkelingException;
  /** @var bool */
  public $tennis;
  /** @var string */
  public $tennisException;
  /** @var bool */
  public $waterSkiing;
  /** @var string */
  public $waterSkiingException;
  /** @var bool */
  public $watercraftRental;
  /** @var string */
  public $watercraftRentalException;

  /** @param bool */
  public function setBeachAccess($beachAccess)
  {
    $this->beachAccess = $beachAccess;
  }
  /** @return bool */
  public function getBeachAccess()
  {
    return $this->beachAccess;
  }
  /** @param string */
  public function setBeachAccessException($beachAccessException)
  {
    $this->beachAccessException = $beachAccessException;
  }
  /** @return string */
  public function getBeachAccessException()
  {
    return $this->beachAccessException;
  }
  /** @param bool */
  public function setBeachFront($beachFront)
  {
    $this->beachFront = $beachFront;
  }
  /** @return bool */
  public function getBeachFront()
  {
    return $this->beachFront;
  }
  /** @param string */
  public function setBeachFrontException($beachFrontException)
  {
    $this->beachFrontException = $beachFrontException;
  }
  /** @return string */
  public function getBeachFrontException()
  {
    return $this->beachFrontException;
  }
  /** @param bool */
  public function setBicycleRental($bicycleRental)
  {
    $this->bicycleRental = $bicycleRental;
  }
  /** @return bool */
  public function getBicycleRental()
  {
    return $this->bicycleRental;
  }
  /** @param string */
  public function setBicycleRentalException($bicycleRentalException)
  {
    $this->bicycleRentalException = $bicycleRentalException;
  }
  /** @return string */
  public function getBicycleRentalException()
  {
    return $this->bicycleRentalException;
  }
  /** @param bool */
  public function setBoutiqueStores($boutiqueStores)
  {
    $this->boutiqueStores = $boutiqueStores;
  }
  /** @return bool */
  public function getBoutiqueStores()
  {
    return $this->boutiqueStores;
  }
  /** @param string */
  public function setBoutiqueStoresException($boutiqueStoresException)
  {
    $this->boutiqueStoresException = $boutiqueStoresException;
  }
  /** @return string */
  public function getBoutiqueStoresException()
  {
    return $this->boutiqueStoresException;
  }
  /** @param bool */
  public function setCasino($casino)
  {
    $this->casino = $casino;
  }
  /** @return bool */
  public function getCasino()
  {
    return $this->casino;
  }
  /** @param string */
  public function setCasinoException($casinoException)
  {
    $this->casinoException = $casinoException;
  }
  /** @return string */
  public function getCasinoException()
  {
    return $this->casinoException;
  }
  /** @param bool */
  public function setFreeBicycleRental($freeBicycleRental)
  {
    $this->freeBicycleRental = $freeBicycleRental;
  }
  /** @return bool */
  public function getFreeBicycleRental()
  {
    return $this->freeBicycleRental;
  }
  /** @param string */
  public function setFreeBicycleRentalException($freeBicycleRentalException)
  {
    $this->freeBicycleRentalException = $freeBicycleRentalException;
  }
  /** @return string */
  public function getFreeBicycleRentalException()
  {
    return $this->freeBicycleRentalException;
  }
  /** @param bool */
  public function setFreeWatercraftRental($freeWatercraftRental)
  {
    $this->freeWatercraftRental = $freeWatercraftRental;
  }
  /** @return bool */
  public function getFreeWatercraftRental()
  {
    return $this->freeWatercraftRental;
  }
  /** @param string */
  public function setFreeWatercraftRentalException($freeWatercraftRentalException)
  {
    $this->freeWatercraftRentalException = $freeWatercraftRentalException;
  }
  /** @return string */
  public function getFreeWatercraftRentalException()
  {
    return $this->freeWatercraftRentalException;
  }
  /** @param bool */
  public function setGameRoom($gameRoom)
  {
    $this->gameRoom = $gameRoom;
  }
  /** @return bool */
  public function getGameRoom()
  {
    return $this->gameRoom;
  }
  /** @param string */
  public function setGameRoomException($gameRoomException)
  {
    $this->gameRoomException = $gameRoomException;
  }
  /** @return string */
  public function getGameRoomException()
  {
    return $this->gameRoomException;
  }
  /** @param bool */
  public function setGolf($golf)
  {
    $this->golf = $golf;
  }
  /** @return bool */
  public function getGolf()
  {
    return $this->golf;
  }
  /** @param string */
  public function setGolfException($golfException)
  {
    $this->golfException = $golfException;
  }
  /** @return string */
  public function getGolfException()
  {
    return $this->golfException;
  }
  /** @param bool */
  public function setHorsebackRiding($horsebackRiding)
  {
    $this->horsebackRiding = $horsebackRiding;
  }
  /** @return bool */
  public function getHorsebackRiding()
  {
    return $this->horsebackRiding;
  }
  /** @param string */
  public function setHorsebackRidingException($horsebackRidingException)
  {
    $this->horsebackRidingException = $horsebackRidingException;
  }
  /** @return string */
  public function getHorsebackRidingException()
  {
    return $this->horsebackRidingException;
  }
  /** @param bool */
  public function setNightclub($nightclub)
  {
    $this->nightclub = $nightclub;
  }
  /** @return bool */
  public function getNightclub()
  {
    return $this->nightclub;
  }
  /** @param string */
  public function setNightclubException($nightclubException)
  {
    $this->nightclubException = $nightclubException;
  }
  /** @return string */
  public function getNightclubException()
  {
    return $this->nightclubException;
  }
  /** @param bool */
  public function setPrivateBeach($privateBeach)
  {
    $this->privateBeach = $privateBeach;
  }
  /** @return bool */
  public function getPrivateBeach()
  {
    return $this->privateBeach;
  }
  /** @param string */
  public function setPrivateBeachException($privateBeachException)
  {
    $this->privateBeachException = $privateBeachException;
  }
  /** @return string */
  public function getPrivateBeachException()
  {
    return $this->privateBeachException;
  }
  /** @param bool */
  public function setScuba($scuba)
  {
    $this->scuba = $scuba;
  }
  /** @return bool */
  public function getScuba()
  {
    return $this->scuba;
  }
  /** @param string */
  public function setScubaException($scubaException)
  {
    $this->scubaException = $scubaException;
  }
  /** @return string */
  public function getScubaException()
  {
    return $this->scubaException;
  }
  /** @param bool */
  public function setSnorkeling($snorkeling)
  {
    $this->snorkeling = $snorkeling;
  }
  /** @return bool */
  public function getSnorkeling()
  {
    return $this->snorkeling;
  }
  /** @param string */
  public function setSnorkelingException($snorkelingException)
  {
    $this->snorkelingException = $snorkelingException;
  }
  /** @return string */
  public function getSnorkelingException()
  {
    return $this->snorkelingException;
  }
  /** @param bool */
  public function setTennis($tennis)
  {
    $this->tennis = $tennis;
  }
  /** @return bool */
  public function getTennis()
  {
    return $this->tennis;
  }
  /** @param string */
  public function setTennisException($tennisException)
  {
    $this->tennisException = $tennisException;
  }
  /** @return string */
  public function getTennisException()
  {
    return $this->tennisException;
  }
  /** @param bool */
  public function setWaterSkiing($waterSkiing)
  {
    $this->waterSkiing = $waterSkiing;
  }
  /** @return bool */
  public function getWaterSkiing()
  {
    return $this->waterSkiing;
  }
  /** @param string */
  public function setWaterSkiingException($waterSkiingException)
  {
    $this->waterSkiingException = $waterSkiingException;
  }
  /** @return string */
  public function getWaterSkiingException()
  {
    return $this->waterSkiingException;
  }
  /** @param bool */
  public function setWatercraftRental($watercraftRental)
  {
    $this->watercraftRental = $watercraftRental;
  }
  /** @return bool */
  public function getWatercraftRental()
  {
    return $this->watercraftRental;
  }
  /** @param string */
  public function setWatercraftRentalException($watercraftRentalException)
  {
    $this->watercraftRentalException = $watercraftRentalException;
  }
  /** @return string */
  public function getWatercraftRentalException()
  {
    return $this->watercraftRentalException;
  }
}

class Business extends \Google\Model
{
  /** @var bool */
  public $businessCenter;
  /** @var string */
  public $businessCenterException;
  /** @var bool */
  public $meetingRooms;
  /** @var int */
  public $meetingRoomsCount;
  /** @var string */
  public $meetingRoomsCountException;
  /** @var string */
  public $meetingRoomsException;

  /** @param bool */
  public function setBusinessCenter($businessCenter)
  {
    $this->businessCenter = $businessCenter;
  }
  /** @return bool */
  public function getBusinessCenter()
  {
    return $this->businessCenter;
  }
  /** @param string */
  public function setBusinessCenterException($businessCenterException)
  {
    $this->businessCenterException = $businessCenterException;
  }
  /** @return string */
  public function getBusinessCenterException()
  {
    return $this->businessCenterException;
  }
  /** @param bool */
  public function setMeetingRooms($meetingRooms)
  {
    $this->meetingRooms = $meetingRooms;
  }
  /** @return bool */
  public function getMeetingRooms()
  {
    return $this->meetingRooms;
  }
  /** @param int */
  public function setMeetingRoomsCount($meetingRoomsCount)
  {
    $this->meetingRoomsCount = $meetingRoomsCount;
  }
  /** @return int */
  public function getMeetingRoomsCount()
  {
    return $this->meetingRoomsCount;
  }
  /** @param string */
  public function setMeetingRoomsCountException($meetingRoomsCountException)
  {
    $this->meetingRoomsCountException = $meetingRoomsCountException;
  }
  /** @return string */
  public function getMeetingRoomsCountException()
  {
    return $this->meetingRoomsCountException;
  }
  /** @param string */
  public function setMeetingRoomsException($meetingRoomsException)
  {
    $this->meetingRoomsException = $meetingRoomsException;
  }
  /** @return string */
  public function getMeetingRoomsException()
  {
    return $this->meetingRoomsException;
  }
}

class Connectivity extends \Google\Model
{
  /** @var bool */
  public $freeWifi;
  /** @var string */
  public $freeWifiException;
  /** @var bool */
  public $publicAreaWifiAvailable;
  /** @var string */
  public $publicAreaWifiAvailableException;
  /** @var bool */
  public $publicInternetTerminal;
  /** @var string */
  public $publicInternetTerminalException;
  /** @var bool */
  public $wifiAvailable;
  /** @var string */
  public $wifiAvailableException;

  /** @param bool */
  public function setFreeWifi($freeWifi)
  {
    $this->freeWifi = $freeWifi;
  }
  /** @return bool */
  public function getFreeWifi()
  {
    return $this->freeWifi;
  }
  /** @param string */
  public function setFreeWifiException($freeWifiException)
  {
    $this->freeWifiException = $freeWifiException;
  }
  /** @return string */
  public function getFreeWifiException()
  {
    return $this->freeWifiException;
  }
  /** @param bool */
  public function setPublicAreaWifiAvailable($publicAreaWifiAvailable)
  {
    $this->publicAreaWifiAvailable = $publicAreaWifiAvailable;
  }
  /** @return bool */
  public function getPublicAreaWifiAvailable()
  {
    return $this->publicAreaWifiAvailable;
  }
  /** @param string */
  public function setPublicAreaWifiAvailableException($publicAreaWifiAvailableException)
  {
    $this->publicAreaWifiAvailableException = $publicAreaWifiAvailableException;
  }
  /** @return string */
  public function getPublicAreaWifiAvailableException()
  {
    return $this->publicAreaWifiAvailableException;
  }
  /** @param bool */
  public function setPublicInternetTerminal($publicInternetTerminal)
  {
    $this->publicInternetTerminal = $publicInternetTerminal;
  }
  /** @return bool */
  public function getPublicInternetTerminal()
  {
    return $this->publicInternetTerminal;
  }
  /** @param string */
  public function setPublicInternetTerminalException($publicInternetTerminalException)
  {
    $this->publicInternetTerminalException = $publicInternetTerminalException;
  }
  /** @return string */
  public function getPublicInternetTerminalException()
  {
    return $this->publicInternetTerminalException;
  }
  /** @param bool */
  public function setWifiAvailable($wifiAvailable)
  {
    $this->wifiAvailable = $wifiAvailable;
  }
  /** @return bool */
  public function getWifiAvailable()
  {
    return $this->wifiAvailable;
  }
  /** @param string */
  public function setWifiAvailableException($wifiAvailableException)
  {
    $this->wifiAvailableException = $wifiAvailableException;
  }
  /** @return string */
  public function getWifiAvailableException()
  {
    return $this->wifiAvailableException;
  }
}

class EcoCertification extends \Google\Model
{
  /** @var bool */
  public $awarded;
  /** @var string */
  public $awardedException;
  /** @var string */
  public $ecoCertificate;

  /** @param bool */
  public function setAwarded($awarded)
  {
    $this->awarded = $awarded;
  }
  /** @return bool */
  public function getAwarded()
  {
    return $this->awarded;
  }
  /** @param string */
  public function setAwardedException($awardedException)
  {
    $this->awardedException = $awardedException;
  }
  /** @return string */
  public function getAwardedException()
  {
    return $this->awardedException;
  }
  /** @param string */
  public function setEcoCertificate($ecoCertificate)
  {
    $this->ecoCertificate = $ecoCertificate;
  }
  /** @return string */
  public function getEcoCertificate()
  {
    return $this->ecoCertificate;
  }
}

class EnergyEfficiency extends \Google\Model
{
  /** @var bool */
  public $carbonFreeEnergySources;
  /** @var string */
  public $carbonFreeEnergySourcesException;
  /** @var bool */
  public $energyConservationProgram;
  /** @var string */
  public $energyConservationProgramException;
  /** @var bool */
  public $energyEfficientHeatingAndCoolingSystems;
  /** @var string */
  public $energyEfficientHeatingAndCoolingSystemsException;
  /** @var bool */
  public $energyEfficientLighting;
  /** @var string */
  public $energyEfficientLightingException;
  /** @var bool */
  public $energySavingThermostats;
  /** @var string */
  public $energySavingThermostatsException;
  /** @var bool */
  public $greenBuildingDesign;
  /** @var string */
  public $greenBuildingDesignException;
  /** @var bool */
  public $independentOrganizationAuditsEnergyUse;
  /** @var string */
  public $independentOrganizationAuditsEnergyUseException;

  /** @param bool */
  public function setCarbonFreeEnergySources($carbonFreeEnergySources)
  {
    $this->carbonFreeEnergySources = $carbonFreeEnergySources;
  }
  /** @return bool */
  public function getCarbonFreeEnergySources()
  {
    return $this->carbonFreeEnergySources;
  }
  /** @param string */
  public function setCarbonFreeEnergySourcesException($carbonFreeEnergySourcesException)
  {
    $this->carbonFreeEnergySourcesException = $carbonFreeEnergySourcesException;
  }
  /** @return string */
  public function getCarbonFreeEnergySourcesException()
  {
    return $this->carbonFreeEnergySourcesException;
  }
  /** @param bool */
  public function setEnergyConservationProgram($energyConservationProgram)
  {
    $this->energyConservationProgram = $energyConservationProgram;
  }
  /** @return bool */
  public function getEnergyConservationProgram()
  {
    return $this->energyConservationProgram;
  }
  /** @param string */
  public function setEnergyConservationProgramException($energyConservationProgramException)
  {
    $this->energyConservationProgramException = $energyConservationProgramException;
  }
  /** @return string */
  public function getEnergyConservationProgramException()
  {
    return $this->energyConservationProgramException;
  }
  /** @param bool */
  public function setEnergyEfficientHeatingAndCoolingSystems($energyEfficientHeatingAndCoolingSystems)
  {
    $this->energyEfficientHeatingAndCoolingSystems = $energyEfficientHeatingAndCoolingSystems;
  }
  /** @return bool */
  public function getEnergyEfficientHeatingAndCoolingSystems()
  {
    return $this->energyEfficientHeatingAndCoolingSystems;
  }
  /** @param string */
  public function setEnergyEfficientHeatingAndCoolingSystemsException($energyEfficientHeatingAndCoolingSystemsException)
  {
    $this->energyEfficientHeatingAndCoolingSystemsException = $energyEfficientHeatingAndCoolingSystemsException;
  }
  /** @return string */
  public function getEnergyEfficientHeatingAndCoolingSystemsException()
  {
    return $this->energyEfficientHeatingAndCoolingSystemsException;
  }
  /** @param bool */
  public function setEnergyEfficientLighting($energyEfficientLighting)
  {
    $this->energyEfficientLighting = $energyEfficientLighting;
  }
  /** @return bool */
  public function getEnergyEfficientLighting()
  {
    return $this->energyEfficientLighting;
  }
  /** @param string */
  public function setEnergyEfficientLightingException($energyEfficientLightingException)
  {
    $this->energyEfficientLightingException = $energyEfficientLightingException;
  }
  /** @return string */
  public function getEnergyEfficientLightingException()
  {
    return $this->energyEfficientLightingException;
  }
  /** @param bool */
  public function setEnergySavingThermostats($energySavingThermostats)
  {
    $this->energySavingThermostats = $energySavingThermostats;
  }
  /** @return bool */
  public function getEnergySavingThermostats()
  {
    return $this->energySavingThermostats;
  }
  /** @param string */
  public function setEnergySavingThermostatsException($energySavingThermostatsException)
  {
    $this->energySavingThermostatsException = $energySavingThermostatsException;
  }
  /** @return string */
  public function getEnergySavingThermostatsException()
  {
    return $this->energySavingThermostatsException;
  }
  /** @param bool */
  public function setGreenBuildingDesign($greenBuildingDesign)
  {
    $this->greenBuildingDesign = $greenBuildingDesign;
  }
  /** @return bool */
  public function getGreenBuildingDesign()
  {
    return $this->greenBuildingDesign;
  }
  /** @param string */
  public function setGreenBuildingDesignException($greenBuildingDesignException)
  {
    $this->greenBuildingDesignException = $greenBuildingDesignException;
  }
  /** @return string */
  public function getGreenBuildingDesignException()
  {
    return $this->greenBuildingDesignException;
  }
  /** @param bool */
  public function setIndependentOrganizationAuditsEnergyUse($independentOrganizationAuditsEnergyUse)
  {
    $this->independentOrganizationAuditsEnergyUse = $independentOrganizationAuditsEnergyUse;
  }
  /** @return bool */
  public function getIndependentOrganizationAuditsEnergyUse()
  {
    return $this->independentOrganizationAuditsEnergyUse;
  }
  /** @param string */
  public function setIndependentOrganizationAuditsEnergyUseException($independentOrganizationAuditsEnergyUseException)
  {
    $this->independentOrganizationAuditsEnergyUseException = $independentOrganizationAuditsEnergyUseException;
  }
  /** @return string */
  public function getIndependentOrganizationAuditsEnergyUseException()
  {
    return $this->independentOrganizationAuditsEnergyUseException;
  }
}

class EnhancedCleaning extends \Google\Model
{
  /** @var bool */
  public $commercialGradeDisinfectantCleaning;
  /** @var string */
  public $commercialGradeDisinfectantCleaningException;
  /** @var bool */
  public $commonAreasEnhancedCleaning;
  /** @var string */
  public $commonAreasEnhancedCleaningException;
  /** @var bool */
  public $employeesTrainedCleaningProcedures;
  /** @var string */
  public $employeesTrainedCleaningProceduresException;
  /** @var bool */
  public $employeesTrainedThoroughHandWashing;
  /** @var string */
  public $employeesTrainedThoroughHandWashingException;
  /** @var bool */
  public $employeesWearProtectiveEquipment;
  /** @var string */
  public $employeesWearProtectiveEquipmentException;
  /** @var bool */
  public $guestRoomsEnhancedCleaning;
  /** @var string */
  public $guestRoomsEnhancedCleaningException;

  /** @param bool */
  public function setCommercialGradeDisinfectantCleaning($commercialGradeDisinfectantCleaning)
  {
    $this->commercialGradeDisinfectantCleaning = $commercialGradeDisinfectantCleaning;
  }
  /** @return bool */
  public function getCommercialGradeDisinfectantCleaning()
  {
    return $this->commercialGradeDisinfectantCleaning;
  }
  /** @param string */
  public function setCommercialGradeDisinfectantCleaningException($commercialGradeDisinfectantCleaningException)
  {
    $this->commercialGradeDisinfectantCleaningException = $commercialGradeDisinfectantCleaningException;
  }
  /** @return string */
  public function getCommercialGradeDisinfectantCleaningException()
  {
    return $this->commercialGradeDisinfectantCleaningException;
  }
  /** @param bool */
  public function setCommonAreasEnhancedCleaning($commonAreasEnhancedCleaning)
  {
    $this->commonAreasEnhancedCleaning = $commonAreasEnhancedCleaning;
  }
  /** @return bool */
  public function getCommonAreasEnhancedCleaning()
  {
    return $this->commonAreasEnhancedCleaning;
  }
  /** @param string */
  public function setCommonAreasEnhancedCleaningException($commonAreasEnhancedCleaningException)
  {
    $this->commonAreasEnhancedCleaningException = $commonAreasEnhancedCleaningException;
  }
  /** @return string */
  public function getCommonAreasEnhancedCleaningException()
  {
    return $this->commonAreasEnhancedCleaningException;
  }
  /** @param bool */
  public function setEmployeesTrainedCleaningProcedures($employeesTrainedCleaningProcedures)
  {
    $this->employeesTrainedCleaningProcedures = $employeesTrainedCleaningProcedures;
  }
  /** @return bool */
  public function getEmployeesTrainedCleaningProcedures()
  {
    return $this->employeesTrainedCleaningProcedures;
  }
  /** @param string */
  public function setEmployeesTrainedCleaningProceduresException($employeesTrainedCleaningProceduresException)
  {
    $this->employeesTrainedCleaningProceduresException = $employeesTrainedCleaningProceduresException;
  }
  /** @return string */
  public function getEmployeesTrainedCleaningProceduresException()
  {
    return $this->employeesTrainedCleaningProceduresException;
  }
  /** @param bool */
  public function setEmployeesTrainedThoroughHandWashing($employeesTrainedThoroughHandWashing)
  {
    $this->employeesTrainedThoroughHandWashing = $employeesTrainedThoroughHandWashing;
  }
  /** @return bool */
  public function getEmployeesTrainedThoroughHandWashing()
  {
    return $this->employeesTrainedThoroughHandWashing;
  }
  /** @param string */
  public function setEmployeesTrainedThoroughHandWashingException($employeesTrainedThoroughHandWashingException)
  {
    $this->employeesTrainedThoroughHandWashingException = $employeesTrainedThoroughHandWashingException;
  }
  /** @return string */
  public function getEmployeesTrainedThoroughHandWashingException()
  {
    return $this->employeesTrainedThoroughHandWashingException;
  }
  /** @param bool */
  public function setEmployeesWearProtectiveEquipment($employeesWearProtectiveEquipment)
  {
    $this->employeesWearProtectiveEquipment = $employeesWearProtectiveEquipment;
  }
  /** @return bool */
  public function getEmployeesWearProtectiveEquipment()
  {
    return $this->employeesWearProtectiveEquipment;
  }
  /** @param string */
  public function setEmployeesWearProtectiveEquipmentException($employeesWearProtectiveEquipmentException)
  {
    $this->employeesWearProtectiveEquipmentException = $employeesWearProtectiveEquipmentException;
  }
  /** @return string */
  public function getEmployeesWearProtectiveEquipmentException()
  {
    return $this->employeesWearProtectiveEquipmentException;
  }
  /** @param bool */
  public function setGuestRoomsEnhancedCleaning($guestRoomsEnhancedCleaning)
  {
    $this->guestRoomsEnhancedCleaning = $guestRoomsEnhancedCleaning;
  }
  /** @return bool */
  public function getGuestRoomsEnhancedCleaning()
  {
    return $this->guestRoomsEnhancedCleaning;
  }
  /** @param string */
  public function setGuestRoomsEnhancedCleaningException($guestRoomsEnhancedCleaningException)
  {
    $this->guestRoomsEnhancedCleaningException = $guestRoomsEnhancedCleaningException;
  }
  /** @return string */
  public function getGuestRoomsEnhancedCleaningException()
  {
    return $this->guestRoomsEnhancedCleaningException;
  }
}

class Families extends \Google\Model
{
  /** @var bool */
  public $babysitting;
  /** @var string */
  public $babysittingException;
  /** @var bool */
  public $kidsActivities;
  /** @var string */
  public $kidsActivitiesException;
  /** @var bool */
  public $kidsClub;
  /** @var string */
  public $kidsClubException;
  /** @var bool */
  public $kidsFriendly;
  /** @var string */
  public $kidsFriendlyException;

  /** @param bool */
  public function setBabysitting($babysitting)
  {
    $this->babysitting = $babysitting;
  }
  /** @return bool */
  public function getBabysitting()
  {
    return $this->babysitting;
  }
  /** @param string */
  public function setBabysittingException($babysittingException)
  {
    $this->babysittingException = $babysittingException;
  }
  /** @return string */
  public function getBabysittingException()
  {
    return $this->babysittingException;
  }
  /** @param bool */
  public function setKidsActivities($kidsActivities)
  {
    $this->kidsActivities = $kidsActivities;
  }
  /** @return bool */
  public function getKidsActivities()
  {
    return $this->kidsActivities;
  }
  /** @param string */
  public function setKidsActivitiesException($kidsActivitiesException)
  {
    $this->kidsActivitiesException = $kidsActivitiesException;
  }
  /** @return string */
  public function getKidsActivitiesException()
  {
    return $this->kidsActivitiesException;
  }
  /** @param bool */
  public function setKidsClub($kidsClub)
  {
    $this->kidsClub = $kidsClub;
  }
  /** @return bool */
  public function getKidsClub()
  {
    return $this->kidsClub;
  }
  /** @param string */
  public function setKidsClubException($kidsClubException)
  {
    $this->kidsClubException = $kidsClubException;
  }
  /** @return string */
  public function getKidsClubException()
  {
    return $this->kidsClubException;
  }
  /** @param bool */
  public function setKidsFriendly($kidsFriendly)
  {
    $this->kidsFriendly = $kidsFriendly;
  }
  /** @return bool */
  public function getKidsFriendly()
  {
    return $this->kidsFriendly;
  }
  /** @param string */
  public function setKidsFriendlyException($kidsFriendlyException)
  {
    $this->kidsFriendlyException = $kidsFriendlyException;
  }
  /** @return string */
  public function getKidsFriendlyException()
  {
    return $this->kidsFriendlyException;
  }
}

class FoodAndDrink extends \Google\Model
{
  /** @var bool */
  public $bar;
  /** @var string */
  public $barException;
  /** @var bool */
  public $breakfastAvailable;
  /** @var string */
  public $breakfastAvailableException;
  /** @var bool */
  public $breakfastBuffet;
  /** @var string */
  public $breakfastBuffetException;
  /** @var bool */
  public $buffet;
  /** @var string */
  public $buffetException;
  /** @var bool */
  public $dinnerBuffet;
  /** @var string */
  public $dinnerBuffetException;
  /** @var bool */
  public $freeBreakfast;
  /** @var string */
  public $freeBreakfastException;
  /** @var bool */
  public $restaurant;
  /** @var string */
  public $restaurantException;
  /** @var int */
  public $restaurantsCount;
  /** @var string */
  public $restaurantsCountException;
  /** @var bool */
  public $roomService;
  /** @var string */
  public $roomServiceException;
  /** @var bool */
  public $tableService;
  /** @var string */
  public $tableServiceException;
  /** @var bool */
  public $twentyFourHourRoomService;
  /** @var string */
  public $twentyFourHourRoomServiceException;
  /** @var bool */
  public $vendingMachine;
  /** @var string */
  public $vendingMachineException;

  /** @param bool */
  public function setBar($bar)
  {
    $this->bar = $bar;
  }
  /** @return bool */
  public function getBar()
  {
    return $this->bar;
  }
  /** @param string */
  public function setBarException($barException)
  {
    $this->barException = $barException;
  }
  /** @return string */
  public function getBarException()
  {
    return $this->barException;
  }
  /** @param bool */
  public function setBreakfastAvailable($breakfastAvailable)
  {
    $this->breakfastAvailable = $breakfastAvailable;
  }
  /** @return bool */
  public function getBreakfastAvailable()
  {
    return $this->breakfastAvailable;
  }
  /** @param string */
  public function setBreakfastAvailableException($breakfastAvailableException)
  {
    $this->breakfastAvailableException = $breakfastAvailableException;
  }
  /** @return string */
  public function getBreakfastAvailableException()
  {
    return $this->breakfastAvailableException;
  }
  /** @param bool */
  public function setBreakfastBuffet($breakfastBuffet)
  {
    $this->breakfastBuffet = $breakfastBuffet;
  }
  /** @return bool */
  public function getBreakfastBuffet()
  {
    return $this->breakfastBuffet;
  }
  /** @param string */
  public function setBreakfastBuffetException($breakfastBuffetException)
  {
    $this->breakfastBuffetException = $breakfastBuffetException;
  }
  /** @return string */
  public function getBreakfastBuffetException()
  {
    return $this->breakfastBuffetException;
  }
  /** @param bool */
  public function setBuffet($buffet)
  {
    $this->buffet = $buffet;
  }
  /** @return bool */
  public function getBuffet()
  {
    return $this->buffet;
  }
  /** @param string */
  public function setBuffetException($buffetException)
  {
    $this->buffetException = $buffetException;
  }
  /** @return string */
  public function getBuffetException()
  {
    return $this->buffetException;
  }
  /** @param bool */
  public function setDinnerBuffet($dinnerBuffet)
  {
    $this->dinnerBuffet = $dinnerBuffet;
  }
  /** @return bool */
  public function getDinnerBuffet()
  {
    return $this->dinnerBuffet;
  }
  /** @param string */
  public function setDinnerBuffetException($dinnerBuffetException)
  {
    $this->dinnerBuffetException = $dinnerBuffetException;
  }
  /** @return string */
  public function getDinnerBuffetException()
  {
    return $this->dinnerBuffetException;
  }
  /** @param bool */
  public function setFreeBreakfast($freeBreakfast)
  {
    $this->freeBreakfast = $freeBreakfast;
  }
  /** @return bool */
  public function getFreeBreakfast()
  {
    return $this->freeBreakfast;
  }
  /** @param string */
  public function setFreeBreakfastException($freeBreakfastException)
  {
    $this->freeBreakfastException = $freeBreakfastException;
  }
  /** @return string */
  public function getFreeBreakfastException()
  {
    return $this->freeBreakfastException;
  }
  /** @param bool */
  public function setRestaurant($restaurant)
  {
    $this->restaurant = $restaurant;
  }
  /** @return bool */
  public function getRestaurant()
  {
    return $this->restaurant;
  }
  /** @param string */
  public function setRestaurantException($restaurantException)
  {
    $this->restaurantException = $restaurantException;
  }
  /** @return string */
  public function getRestaurantException()
  {
    return $this->restaurantException;
  }
  /** @param int */
  public function setRestaurantsCount($restaurantsCount)
  {
    $this->restaurantsCount = $restaurantsCount;
  }
  /** @return int */
  public function getRestaurantsCount()
  {
    return $this->restaurantsCount;
  }
  /** @param string */
  public function setRestaurantsCountException($restaurantsCountException)
  {
    $this->restaurantsCountException = $restaurantsCountException;
  }
  /** @return string */
  public function getRestaurantsCountException()
  {
    return $this->restaurantsCountException;
  }
  /** @param bool */
  public function setRoomService($roomService)
  {
    $this->roomService = $roomService;
  }
  /** @return bool */
  public function getRoomService()
  {
    return $this->roomService;
  }
  /** @param string */
  public function setRoomServiceException($roomServiceException)
  {
    $this->roomServiceException = $roomServiceException;
  }
  /** @return string */
  public function getRoomServiceException()
  {
    return $this->roomServiceException;
  }
  /** @param bool */
  public function setTableService($tableService)
  {
    $this->tableService = $tableService;
  }
  /** @return bool */
  public function getTableService()
  {
    return $this->tableService;
  }
  /** @param string */
  public function setTableServiceException($tableServiceException)
  {
    $this->tableServiceException = $tableServiceException;
  }
  /** @return string */
  public function getTableServiceException()
  {
    return $this->tableServiceException;
  }
  /** @param bool */
  public function setTwentyFourHourRoomService($twentyFourHourRoomService)
  {
    $this->twentyFourHourRoomService = $twentyFourHourRoomService;
  }
  /** @return bool */
  public function getTwentyFourHourRoomService()
  {
    return $this->twentyFourHourRoomService;
  }
  /** @param string */
  public function setTwentyFourHourRoomServiceException($twentyFourHourRoomServiceException)
  {
    $this->twentyFourHourRoomServiceException = $twentyFourHourRoomServiceException;
  }
  /** @return string */
  public function getTwentyFourHourRoomServiceException()
  {
    return $this->twentyFourHourRoomServiceException;
  }
  /** @param bool */
  public function setVendingMachine($vendingMachine)
  {
    $this->vendingMachine = $vendingMachine;
  }
  /** @return bool */
  public function getVendingMachine()
  {
    return $this->vendingMachine;
  }
  /** @param string */
  public function setVendingMachineException($vendingMachineException)
  {
    $this->vendingMachineException = $vendingMachineException;
  }
  /** @return string */
  public function getVendingMachineException()
  {
    return $this->vendingMachineException;
  }
}

class GetGoogleUpdatedLodgingResponse extends \Google\Model
{
  /** @var string */
  public $diffMask;
  /** @var Lodging */
  public $lodging;
  protected $lodgingType = Lodging::class;
  protected $lodgingDataType = '';
  /** @param string */
  public function setDiffMask($diffMask)
  {
    $this->diffMask = $diffMask;
  }
  /** @return string */
  public function getDiffMask()
  {
    return $this->diffMask;
  }
  /** @param Lodging */
  public function setLodging(Lodging $lodging)
  {
    $this->lodging = $lodging;
  }
  /** @return Lodging */
  public function getLodging()
  {
    return $this->lodging;
  }
}

class GuestUnitFeatures extends \Google\Model
{
  /** @var bool */
  public $bungalowOrVilla;
  /** @var string */
  public $bungalowOrVillaException;
  /** @var bool */
  public $connectingUnitAvailable;
  /** @var string */
  public $connectingUnitAvailableException;
  /** @var bool */
  public $executiveFloor;
  /** @var string */
  public $executiveFloorException;
  /** @var int */
  public $maxAdultOccupantsCount;
  /** @var string */
  public $maxAdultOccupantsCountException;
  /** @var int */
  public $maxChildOccupantsCount;
  /** @var string */
  public $maxChildOccupantsCountException;
  /** @var int */
  public $maxOccupantsCount;
  /** @var string */
  public $maxOccupantsCountException;
  /** @var bool */
  public $privateHome;
  /** @var string */
  public $privateHomeException;
  /** @var bool */
  public $suite;
  /** @var string */
  public $suiteException;
  /** @var string */
  public $tier;
  /** @var string */
  public $tierException;
  /** @var LivingArea */
  public $totalLivingAreas;
  /** @var ViewsFromUnit */
  public $views;
  protected $totalLivingAreasType = LivingArea::class;
  protected $totalLivingAreasDataType = '';
  protected $viewsType = ViewsFromUnit::class;
  protected $viewsDataType = '';
  /** @param bool */
  public function setBungalowOrVilla($bungalowOrVilla)
  {
    $this->bungalowOrVilla = $bungalowOrVilla;
  }
  /** @return bool */
  public function getBungalowOrVilla()
  {
    return $this->bungalowOrVilla;
  }
  /** @param string */
  public function setBungalowOrVillaException($bungalowOrVillaException)
  {
    $this->bungalowOrVillaException = $bungalowOrVillaException;
  }
  /** @return string */
  public function getBungalowOrVillaException()
  {
    return $this->bungalowOrVillaException;
  }
  /** @param bool */
  public function setConnectingUnitAvailable($connectingUnitAvailable)
  {
    $this->connectingUnitAvailable = $connectingUnitAvailable;
  }
  /** @return bool */
  public function getConnectingUnitAvailable()
  {
    return $this->connectingUnitAvailable;
  }
  /** @param string */
  public function setConnectingUnitAvailableException($connectingUnitAvailableException)
  {
    $this->connectingUnitAvailableException = $connectingUnitAvailableException;
  }
  /** @return string */
  public function getConnectingUnitAvailableException()
  {
    return $this->connectingUnitAvailableException;
  }
  /** @param bool */
  public function setExecutiveFloor($executiveFloor)
  {
    $this->executiveFloor = $executiveFloor;
  }
  /** @return bool */
  public function getExecutiveFloor()
  {
    return $this->executiveFloor;
  }
  /** @param string */
  public function setExecutiveFloorException($executiveFloorException)
  {
    $this->executiveFloorException = $executiveFloorException;
  }
  /** @return string */
  public function getExecutiveFloorException()
  {
    return $this->executiveFloorException;
  }
  /** @param int */
  public function setMaxAdultOccupantsCount($maxAdultOccupantsCount)
  {
    $this->maxAdultOccupantsCount = $maxAdultOccupantsCount;
  }
  /** @return int */
  public function getMaxAdultOccupantsCount()
  {
    return $this->maxAdultOccupantsCount;
  }
  /** @param string */
  public function setMaxAdultOccupantsCountException($maxAdultOccupantsCountException)
  {
    $this->maxAdultOccupantsCountException = $maxAdultOccupantsCountException;
  }
  /** @return string */
  public function getMaxAdultOccupantsCountException()
  {
    return $this->maxAdultOccupantsCountException;
  }
  /** @param int */
  public function setMaxChildOccupantsCount($maxChildOccupantsCount)
  {
    $this->maxChildOccupantsCount = $maxChildOccupantsCount;
  }
  /** @return int */
  public function getMaxChildOccupantsCount()
  {
    return $this->maxChildOccupantsCount;
  }
  /** @param string */
  public function setMaxChildOccupantsCountException($maxChildOccupantsCountException)
  {
    $this->maxChildOccupantsCountException = $maxChildOccupantsCountException;
  }
  /** @return string */
  public function getMaxChildOccupantsCountException()
  {
    return $this->maxChildOccupantsCountException;
  }
  /** @param int */
  public function setMaxOccupantsCount($maxOccupantsCount)
  {
    $this->maxOccupantsCount = $maxOccupantsCount;
  }
  /** @return int */
  public function getMaxOccupantsCount()
  {
    return $this->maxOccupantsCount;
  }
  /** @param string */
  public function setMaxOccupantsCountException($maxOccupantsCountException)
  {
    $this->maxOccupantsCountException = $maxOccupantsCountException;
  }
  /** @return string */
  public function getMaxOccupantsCountException()
  {
    return $this->maxOccupantsCountException;
  }
  /** @param bool */
  public function setPrivateHome($privateHome)
  {
    $this->privateHome = $privateHome;
  }
  /** @return bool */
  public function getPrivateHome()
  {
    return $this->privateHome;
  }
  /** @param string */
  public function setPrivateHomeException($privateHomeException)
  {
    $this->privateHomeException = $privateHomeException;
  }
  /** @return string */
  public function getPrivateHomeException()
  {
    return $this->privateHomeException;
  }
  /** @param bool */
  public function setSuite($suite)
  {
    $this->suite = $suite;
  }
  /** @return bool */
  public function getSuite()
  {
    return $this->suite;
  }
  /** @param string */
  public function setSuiteException($suiteException)
  {
    $this->suiteException = $suiteException;
  }
  /** @return string */
  public function getSuiteException()
  {
    return $this->suiteException;
  }
  /** @param string */
  public function setTier($tier)
  {
    $this->tier = $tier;
  }
  /** @return string */
  public function getTier()
  {
    return $this->tier;
  }
  /** @param string */
  public function setTierException($tierException)
  {
    $this->tierException = $tierException;
  }
  /** @return string */
  public function getTierException()
  {
    return $this->tierException;
  }
  /** @param LivingArea */
  public function setTotalLivingAreas(LivingArea $totalLivingAreas)
  {
    $this->totalLivingAreas = $totalLivingAreas;
  }
  /** @return LivingArea */
  public function getTotalLivingAreas()
  {
    return $this->totalLivingAreas;
  }
  /** @param ViewsFromUnit */
  public function setViews(ViewsFromUnit $views)
  {
    $this->views = $views;
  }
  /** @return ViewsFromUnit */
  public function getViews()
  {
    return $this->views;
  }
}

class GuestUnitType extends \Google\Collection
{
  /** @var string[] */
  public $codes;
  /** @var GuestUnitFeatures */
  public $features;
  /** @var string */
  public $label;
  protected $collection_key = 'codes';
  protected $featuresType = GuestUnitFeatures::class;
  protected $featuresDataType = '';
  /** @param string[] */
  public function setCodes($codes)
  {
    $this->codes = $codes;
  }
  /** @return string[] */
  public function getCodes()
  {
    return $this->codes;
  }
  /** @param GuestUnitFeatures */
  public function setFeatures(GuestUnitFeatures $features)
  {
    $this->features = $features;
  }
  /** @return GuestUnitFeatures */
  public function getFeatures()
  {
    return $this->features;
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
}

class HealthAndSafety extends \Google\Model
{
  /** @var EnhancedCleaning */
  public $enhancedCleaning;
  /** @var IncreasedFoodSafety */
  public $increasedFoodSafety;
  /** @var MinimizedContact */
  public $minimizedContact;
  /** @var PersonalProtection */
  public $personalProtection;
  /** @var PhysicalDistancing */
  public $physicalDistancing;
  protected $enhancedCleaningType = EnhancedCleaning::class;
  protected $enhancedCleaningDataType = '';
  protected $increasedFoodSafetyType = IncreasedFoodSafety::class;
  protected $increasedFoodSafetyDataType = '';
  protected $minimizedContactType = MinimizedContact::class;
  protected $minimizedContactDataType = '';
  protected $personalProtectionType = PersonalProtection::class;
  protected $personalProtectionDataType = '';
  protected $physicalDistancingType = PhysicalDistancing::class;
  protected $physicalDistancingDataType = '';
  /** @param EnhancedCleaning */
  public function setEnhancedCleaning(EnhancedCleaning $enhancedCleaning)
  {
    $this->enhancedCleaning = $enhancedCleaning;
  }
  /** @return EnhancedCleaning */
  public function getEnhancedCleaning()
  {
    return $this->enhancedCleaning;
  }
  /** @param IncreasedFoodSafety */
  public function setIncreasedFoodSafety(IncreasedFoodSafety $increasedFoodSafety)
  {
    $this->increasedFoodSafety = $increasedFoodSafety;
  }
  /** @return IncreasedFoodSafety */
  public function getIncreasedFoodSafety()
  {
    return $this->increasedFoodSafety;
  }
  /** @param MinimizedContact */
  public function setMinimizedContact(MinimizedContact $minimizedContact)
  {
    $this->minimizedContact = $minimizedContact;
  }
  /** @return MinimizedContact */
  public function getMinimizedContact()
  {
    return $this->minimizedContact;
  }
  /** @param PersonalProtection */
  public function setPersonalProtection(PersonalProtection $personalProtection)
  {
    $this->personalProtection = $personalProtection;
  }
  /** @return PersonalProtection */
  public function getPersonalProtection()
  {
    return $this->personalProtection;
  }
  /** @param PhysicalDistancing */
  public function setPhysicalDistancing(PhysicalDistancing $physicalDistancing)
  {
    $this->physicalDistancing = $physicalDistancing;
  }
  /** @return PhysicalDistancing */
  public function getPhysicalDistancing()
  {
    return $this->physicalDistancing;
  }
}

class Housekeeping extends \Google\Model
{
  /** @var bool */
  public $dailyHousekeeping;
  /** @var string */
  public $dailyHousekeepingException;
  /** @var bool */
  public $housekeepingAvailable;
  /** @var string */
  public $housekeepingAvailableException;
  /** @var bool */
  public $turndownService;
  /** @var string */
  public $turndownServiceException;

  /** @param bool */
  public function setDailyHousekeeping($dailyHousekeeping)
  {
    $this->dailyHousekeeping = $dailyHousekeeping;
  }
  /** @return bool */
  public function getDailyHousekeeping()
  {
    return $this->dailyHousekeeping;
  }
  /** @param string */
  public function setDailyHousekeepingException($dailyHousekeepingException)
  {
    $this->dailyHousekeepingException = $dailyHousekeepingException;
  }
  /** @return string */
  public function getDailyHousekeepingException()
  {
    return $this->dailyHousekeepingException;
  }
  /** @param bool */
  public function setHousekeepingAvailable($housekeepingAvailable)
  {
    $this->housekeepingAvailable = $housekeepingAvailable;
  }
  /** @return bool */
  public function getHousekeepingAvailable()
  {
    return $this->housekeepingAvailable;
  }
  /** @param string */
  public function setHousekeepingAvailableException($housekeepingAvailableException)
  {
    $this->housekeepingAvailableException = $housekeepingAvailableException;
  }
  /** @return string */
  public function getHousekeepingAvailableException()
  {
    return $this->housekeepingAvailableException;
  }
  /** @param bool */
  public function setTurndownService($turndownService)
  {
    $this->turndownService = $turndownService;
  }
  /** @return bool */
  public function getTurndownService()
  {
    return $this->turndownService;
  }
  /** @param string */
  public function setTurndownServiceException($turndownServiceException)
  {
    $this->turndownServiceException = $turndownServiceException;
  }
  /** @return string */
  public function getTurndownServiceException()
  {
    return $this->turndownServiceException;
  }
}

class IncreasedFoodSafety extends \Google\Model
{
  /** @var bool */
  public $diningAreasAdditionalSanitation;
  /** @var string */
  public $diningAreasAdditionalSanitationException;
  /** @var bool */
  public $disposableFlatware;
  /** @var string */
  public $disposableFlatwareException;
  /** @var bool */
  public $foodPreparationAndServingAdditionalSafety;
  /** @var string */
  public $foodPreparationAndServingAdditionalSafetyException;
  /** @var bool */
  public $individualPackagedMeals;
  /** @var string */
  public $individualPackagedMealsException;
  /** @var bool */
  public $singleUseFoodMenus;
  /** @var string */
  public $singleUseFoodMenusException;

  /** @param bool */
  public function setDiningAreasAdditionalSanitation($diningAreasAdditionalSanitation)
  {
    $this->diningAreasAdditionalSanitation = $diningAreasAdditionalSanitation;
  }
  /** @return bool */
  public function getDiningAreasAdditionalSanitation()
  {
    return $this->diningAreasAdditionalSanitation;
  }
  /** @param string */
  public function setDiningAreasAdditionalSanitationException($diningAreasAdditionalSanitationException)
  {
    $this->diningAreasAdditionalSanitationException = $diningAreasAdditionalSanitationException;
  }
  /** @return string */
  public function getDiningAreasAdditionalSanitationException()
  {
    return $this->diningAreasAdditionalSanitationException;
  }
  /** @param bool */
  public function setDisposableFlatware($disposableFlatware)
  {
    $this->disposableFlatware = $disposableFlatware;
  }
  /** @return bool */
  public function getDisposableFlatware()
  {
    return $this->disposableFlatware;
  }
  /** @param string */
  public function setDisposableFlatwareException($disposableFlatwareException)
  {
    $this->disposableFlatwareException = $disposableFlatwareException;
  }
  /** @return string */
  public function getDisposableFlatwareException()
  {
    return $this->disposableFlatwareException;
  }
  /** @param bool */
  public function setFoodPreparationAndServingAdditionalSafety($foodPreparationAndServingAdditionalSafety)
  {
    $this->foodPreparationAndServingAdditionalSafety = $foodPreparationAndServingAdditionalSafety;
  }
  /** @return bool */
  public function getFoodPreparationAndServingAdditionalSafety()
  {
    return $this->foodPreparationAndServingAdditionalSafety;
  }
  /** @param string */
  public function setFoodPreparationAndServingAdditionalSafetyException($foodPreparationAndServingAdditionalSafetyException)
  {
    $this->foodPreparationAndServingAdditionalSafetyException = $foodPreparationAndServingAdditionalSafetyException;
  }
  /** @return string */
  public function getFoodPreparationAndServingAdditionalSafetyException()
  {
    return $this->foodPreparationAndServingAdditionalSafetyException;
  }
  /** @param bool */
  public function setIndividualPackagedMeals($individualPackagedMeals)
  {
    $this->individualPackagedMeals = $individualPackagedMeals;
  }
  /** @return bool */
  public function getIndividualPackagedMeals()
  {
    return $this->individualPackagedMeals;
  }
  /** @param string */
  public function setIndividualPackagedMealsException($individualPackagedMealsException)
  {
    $this->individualPackagedMealsException = $individualPackagedMealsException;
  }
  /** @return string */
  public function getIndividualPackagedMealsException()
  {
    return $this->individualPackagedMealsException;
  }
  /** @param bool */
  public function setSingleUseFoodMenus($singleUseFoodMenus)
  {
    $this->singleUseFoodMenus = $singleUseFoodMenus;
  }
  /** @return bool */
  public function getSingleUseFoodMenus()
  {
    return $this->singleUseFoodMenus;
  }
  /** @param string */
  public function setSingleUseFoodMenusException($singleUseFoodMenusException)
  {
    $this->singleUseFoodMenusException = $singleUseFoodMenusException;
  }
  /** @return string */
  public function getSingleUseFoodMenusException()
  {
    return $this->singleUseFoodMenusException;
  }
}

class LanguageSpoken extends \Google\Model
{
  /** @var string */
  public $languageCode;
  /** @var bool */
  public $spoken;
  /** @var string */
  public $spokenException;

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
  /** @param bool */
  public function setSpoken($spoken)
  {
    $this->spoken = $spoken;
  }
  /** @return bool */
  public function getSpoken()
  {
    return $this->spoken;
  }
  /** @param string */
  public function setSpokenException($spokenException)
  {
    $this->spokenException = $spokenException;
  }
  /** @return string */
  public function getSpokenException()
  {
    return $this->spokenException;
  }
}

class LivingArea extends \Google\Model
{
  /** @var LivingAreaAccessibility */
  public $accessibility;
  /** @var LivingAreaEating */
  public $eating;
  /** @var LivingAreaFeatures */
  public $features;
  /** @var LivingAreaLayout */
  public $layout;
  /** @var LivingAreaSleeping */
  public $sleeping;
  protected $accessibilityType = LivingAreaAccessibility::class;
  protected $accessibilityDataType = '';
  protected $eatingType = LivingAreaEating::class;
  protected $eatingDataType = '';
  protected $featuresType = LivingAreaFeatures::class;
  protected $featuresDataType = '';
  protected $layoutType = LivingAreaLayout::class;
  protected $layoutDataType = '';
  protected $sleepingType = LivingAreaSleeping::class;
  protected $sleepingDataType = '';
  /** @param LivingAreaAccessibility */
  public function setAccessibility(LivingAreaAccessibility $accessibility)
  {
    $this->accessibility = $accessibility;
  }
  /** @return LivingAreaAccessibility */
  public function getAccessibility()
  {
    return $this->accessibility;
  }
  /** @param LivingAreaEating */
  public function setEating(LivingAreaEating $eating)
  {
    $this->eating = $eating;
  }
  /** @return LivingAreaEating */
  public function getEating()
  {
    return $this->eating;
  }
  /** @param LivingAreaFeatures */
  public function setFeatures(LivingAreaFeatures $features)
  {
    $this->features = $features;
  }
  /** @return LivingAreaFeatures */
  public function getFeatures()
  {
    return $this->features;
  }
  /** @param LivingAreaLayout */
  public function setLayout(LivingAreaLayout $layout)
  {
    $this->layout = $layout;
  }
  /** @return LivingAreaLayout */
  public function getLayout()
  {
    return $this->layout;
  }
  /** @param LivingAreaSleeping */
  public function setSleeping(LivingAreaSleeping $sleeping)
  {
    $this->sleeping = $sleeping;
  }
  /** @return LivingAreaSleeping */
  public function getSleeping()
  {
    return $this->sleeping;
  }
}

class LivingAreaAccessibility extends \Google\Model
{
  /** @var bool */
  public $adaCompliantUnit;
  /** @var string */
  public $adaCompliantUnitException;
  /** @var bool */
  public $hearingAccessibleDoorbell;
  /** @var string */
  public $hearingAccessibleDoorbellException;
  /** @var bool */
  public $hearingAccessibleFireAlarm;
  /** @var string */
  public $hearingAccessibleFireAlarmException;
  /** @var bool */
  public $hearingAccessibleUnit;
  /** @var string */
  public $hearingAccessibleUnitException;
  /** @var bool */
  public $mobilityAccessibleBathtub;
  /** @var string */
  public $mobilityAccessibleBathtubException;
  /** @var bool */
  public $mobilityAccessibleShower;
  /** @var string */
  public $mobilityAccessibleShowerException;
  /** @var bool */
  public $mobilityAccessibleToilet;
  /** @var string */
  public $mobilityAccessibleToiletException;
  /** @var bool */
  public $mobilityAccessibleUnit;
  /** @var string */
  public $mobilityAccessibleUnitException;

  /** @param bool */
  public function setAdaCompliantUnit($adaCompliantUnit)
  {
    $this->adaCompliantUnit = $adaCompliantUnit;
  }
  /** @return bool */
  public function getAdaCompliantUnit()
  {
    return $this->adaCompliantUnit;
  }
  /** @param string */
  public function setAdaCompliantUnitException($adaCompliantUnitException)
  {
    $this->adaCompliantUnitException = $adaCompliantUnitException;
  }
  /** @return string */
  public function getAdaCompliantUnitException()
  {
    return $this->adaCompliantUnitException;
  }
  /** @param bool */
  public function setHearingAccessibleDoorbell($hearingAccessibleDoorbell)
  {
    $this->hearingAccessibleDoorbell = $hearingAccessibleDoorbell;
  }
  /** @return bool */
  public function getHearingAccessibleDoorbell()
  {
    return $this->hearingAccessibleDoorbell;
  }
  /** @param string */
  public function setHearingAccessibleDoorbellException($hearingAccessibleDoorbellException)
  {
    $this->hearingAccessibleDoorbellException = $hearingAccessibleDoorbellException;
  }
  /** @return string */
  public function getHearingAccessibleDoorbellException()
  {
    return $this->hearingAccessibleDoorbellException;
  }
  /** @param bool */
  public function setHearingAccessibleFireAlarm($hearingAccessibleFireAlarm)
  {
    $this->hearingAccessibleFireAlarm = $hearingAccessibleFireAlarm;
  }
  /** @return bool */
  public function getHearingAccessibleFireAlarm()
  {
    return $this->hearingAccessibleFireAlarm;
  }
  /** @param string */
  public function setHearingAccessibleFireAlarmException($hearingAccessibleFireAlarmException)
  {
    $this->hearingAccessibleFireAlarmException = $hearingAccessibleFireAlarmException;
  }
  /** @return string */
  public function getHearingAccessibleFireAlarmException()
  {
    return $this->hearingAccessibleFireAlarmException;
  }
  /** @param bool */
  public function setHearingAccessibleUnit($hearingAccessibleUnit)
  {
    $this->hearingAccessibleUnit = $hearingAccessibleUnit;
  }
  /** @return bool */
  public function getHearingAccessibleUnit()
  {
    return $this->hearingAccessibleUnit;
  }
  /** @param string */
  public function setHearingAccessibleUnitException($hearingAccessibleUnitException)
  {
    $this->hearingAccessibleUnitException = $hearingAccessibleUnitException;
  }
  /** @return string */
  public function getHearingAccessibleUnitException()
  {
    return $this->hearingAccessibleUnitException;
  }
  /** @param bool */
  public function setMobilityAccessibleBathtub($mobilityAccessibleBathtub)
  {
    $this->mobilityAccessibleBathtub = $mobilityAccessibleBathtub;
  }
  /** @return bool */
  public function getMobilityAccessibleBathtub()
  {
    return $this->mobilityAccessibleBathtub;
  }
  /** @param string */
  public function setMobilityAccessibleBathtubException($mobilityAccessibleBathtubException)
  {
    $this->mobilityAccessibleBathtubException = $mobilityAccessibleBathtubException;
  }
  /** @return string */
  public function getMobilityAccessibleBathtubException()
  {
    return $this->mobilityAccessibleBathtubException;
  }
  /** @param bool */
  public function setMobilityAccessibleShower($mobilityAccessibleShower)
  {
    $this->mobilityAccessibleShower = $mobilityAccessibleShower;
  }
  /** @return bool */
  public function getMobilityAccessibleShower()
  {
    return $this->mobilityAccessibleShower;
  }
  /** @param string */
  public function setMobilityAccessibleShowerException($mobilityAccessibleShowerException)
  {
    $this->mobilityAccessibleShowerException = $mobilityAccessibleShowerException;
  }
  /** @return string */
  public function getMobilityAccessibleShowerException()
  {
    return $this->mobilityAccessibleShowerException;
  }
  /** @param bool */
  public function setMobilityAccessibleToilet($mobilityAccessibleToilet)
  {
    $this->mobilityAccessibleToilet = $mobilityAccessibleToilet;
  }
  /** @return bool */
  public function getMobilityAccessibleToilet()
  {
    return $this->mobilityAccessibleToilet;
  }
  /** @param string */
  public function setMobilityAccessibleToiletException($mobilityAccessibleToiletException)
  {
    $this->mobilityAccessibleToiletException = $mobilityAccessibleToiletException;
  }
  /** @return string */
  public function getMobilityAccessibleToiletException()
  {
    return $this->mobilityAccessibleToiletException;
  }
  /** @param bool */
  public function setMobilityAccessibleUnit($mobilityAccessibleUnit)
  {
    $this->mobilityAccessibleUnit = $mobilityAccessibleUnit;
  }
  /** @return bool */
  public function getMobilityAccessibleUnit()
  {
    return $this->mobilityAccessibleUnit;
  }
  /** @param string */
  public function setMobilityAccessibleUnitException($mobilityAccessibleUnitException)
  {
    $this->mobilityAccessibleUnitException = $mobilityAccessibleUnitException;
  }
  /** @return string */
  public function getMobilityAccessibleUnitException()
  {
    return $this->mobilityAccessibleUnitException;
  }
}

class LivingAreaEating extends \Google\Model
{
  /** @var bool */
  public $coffeeMaker;
  /** @var string */
  public $coffeeMakerException;
  /** @var bool */
  public $cookware;
  /** @var string */
  public $cookwareException;
  /** @var bool */
  public $dishwasher;
  /** @var string */
  public $dishwasherException;
  /** @var bool */
  public $indoorGrill;
  /** @var string */
  public $indoorGrillException;
  /** @var bool */
  public $kettle;
  /** @var string */
  public $kettleException;
  /** @var bool */
  public $kitchenAvailable;
  /** @var string */
  public $kitchenAvailableException;
  /** @var bool */
  public $microwave;
  /** @var string */
  public $microwaveException;
  /** @var bool */
  public $minibar;
  /** @var string */
  public $minibarException;
  /** @var bool */
  public $outdoorGrill;
  /** @var string */
  public $outdoorGrillException;
  /** @var bool */
  public $oven;
  /** @var string */
  public $ovenException;
  /** @var bool */
  public $refrigerator;
  /** @var string */
  public $refrigeratorException;
  /** @var bool */
  public $sink;
  /** @var string */
  public $sinkException;
  /** @var bool */
  public $snackbar;
  /** @var string */
  public $snackbarException;
  /** @var bool */
  public $stove;
  /** @var string */
  public $stoveException;
  /** @var bool */
  public $teaStation;
  /** @var string */
  public $teaStationException;
  /** @var bool */
  public $toaster;
  /** @var string */
  public $toasterException;

  /** @param bool */
  public function setCoffeeMaker($coffeeMaker)
  {
    $this->coffeeMaker = $coffeeMaker;
  }
  /** @return bool */
  public function getCoffeeMaker()
  {
    return $this->coffeeMaker;
  }
  /** @param string */
  public function setCoffeeMakerException($coffeeMakerException)
  {
    $this->coffeeMakerException = $coffeeMakerException;
  }
  /** @return string */
  public function getCoffeeMakerException()
  {
    return $this->coffeeMakerException;
  }
  /** @param bool */
  public function setCookware($cookware)
  {
    $this->cookware = $cookware;
  }
  /** @return bool */
  public function getCookware()
  {
    return $this->cookware;
  }
  /** @param string */
  public function setCookwareException($cookwareException)
  {
    $this->cookwareException = $cookwareException;
  }
  /** @return string */
  public function getCookwareException()
  {
    return $this->cookwareException;
  }
  /** @param bool */
  public function setDishwasher($dishwasher)
  {
    $this->dishwasher = $dishwasher;
  }
  /** @return bool */
  public function getDishwasher()
  {
    return $this->dishwasher;
  }
  /** @param string */
  public function setDishwasherException($dishwasherException)
  {
    $this->dishwasherException = $dishwasherException;
  }
  /** @return string */
  public function getDishwasherException()
  {
    return $this->dishwasherException;
  }
  /** @param bool */
  public function setIndoorGrill($indoorGrill)
  {
    $this->indoorGrill = $indoorGrill;
  }
  /** @return bool */
  public function getIndoorGrill()
  {
    return $this->indoorGrill;
  }
  /** @param string */
  public function setIndoorGrillException($indoorGrillException)
  {
    $this->indoorGrillException = $indoorGrillException;
  }
  /** @return string */
  public function getIndoorGrillException()
  {
    return $this->indoorGrillException;
  }
  /** @param bool */
  public function setKettle($kettle)
  {
    $this->kettle = $kettle;
  }
  /** @return bool */
  public function getKettle()
  {
    return $this->kettle;
  }
  /** @param string */
  public function setKettleException($kettleException)
  {
    $this->kettleException = $kettleException;
  }
  /** @return string */
  public function getKettleException()
  {
    return $this->kettleException;
  }
  /** @param bool */
  public function setKitchenAvailable($kitchenAvailable)
  {
    $this->kitchenAvailable = $kitchenAvailable;
  }
  /** @return bool */
  public function getKitchenAvailable()
  {
    return $this->kitchenAvailable;
  }
  /** @param string */
  public function setKitchenAvailableException($kitchenAvailableException)
  {
    $this->kitchenAvailableException = $kitchenAvailableException;
  }
  /** @return string */
  public function getKitchenAvailableException()
  {
    return $this->kitchenAvailableException;
  }
  /** @param bool */
  public function setMicrowave($microwave)
  {
    $this->microwave = $microwave;
  }
  /** @return bool */
  public function getMicrowave()
  {
    return $this->microwave;
  }
  /** @param string */
  public function setMicrowaveException($microwaveException)
  {
    $this->microwaveException = $microwaveException;
  }
  /** @return string */
  public function getMicrowaveException()
  {
    return $this->microwaveException;
  }
  /** @param bool */
  public function setMinibar($minibar)
  {
    $this->minibar = $minibar;
  }
  /** @return bool */
  public function getMinibar()
  {
    return $this->minibar;
  }
  /** @param string */
  public function setMinibarException($minibarException)
  {
    $this->minibarException = $minibarException;
  }
  /** @return string */
  public function getMinibarException()
  {
    return $this->minibarException;
  }
  /** @param bool */
  public function setOutdoorGrill($outdoorGrill)
  {
    $this->outdoorGrill = $outdoorGrill;
  }
  /** @return bool */
  public function getOutdoorGrill()
  {
    return $this->outdoorGrill;
  }
  /** @param string */
  public function setOutdoorGrillException($outdoorGrillException)
  {
    $this->outdoorGrillException = $outdoorGrillException;
  }
  /** @return string */
  public function getOutdoorGrillException()
  {
    return $this->outdoorGrillException;
  }
  /** @param bool */
  public function setOven($oven)
  {
    $this->oven = $oven;
  }
  /** @return bool */
  public function getOven()
  {
    return $this->oven;
  }
  /** @param string */
  public function setOvenException($ovenException)
  {
    $this->ovenException = $ovenException;
  }
  /** @return string */
  public function getOvenException()
  {
    return $this->ovenException;
  }
  /** @param bool */
  public function setRefrigerator($refrigerator)
  {
    $this->refrigerator = $refrigerator;
  }
  /** @return bool */
  public function getRefrigerator()
  {
    return $this->refrigerator;
  }
  /** @param string */
  public function setRefrigeratorException($refrigeratorException)
  {
    $this->refrigeratorException = $refrigeratorException;
  }
  /** @return string */
  public function getRefrigeratorException()
  {
    return $this->refrigeratorException;
  }
  /** @param bool */
  public function setSink($sink)
  {
    $this->sink = $sink;
  }
  /** @return bool */
  public function getSink()
  {
    return $this->sink;
  }
  /** @param string */
  public function setSinkException($sinkException)
  {
    $this->sinkException = $sinkException;
  }
  /** @return string */
  public function getSinkException()
  {
    return $this->sinkException;
  }
  /** @param bool */
  public function setSnackbar($snackbar)
  {
    $this->snackbar = $snackbar;
  }
  /** @return bool */
  public function getSnackbar()
  {
    return $this->snackbar;
  }
  /** @param string */
  public function setSnackbarException($snackbarException)
  {
    $this->snackbarException = $snackbarException;
  }
  /** @return string */
  public function getSnackbarException()
  {
    return $this->snackbarException;
  }
  /** @param bool */
  public function setStove($stove)
  {
    $this->stove = $stove;
  }
  /** @return bool */
  public function getStove()
  {
    return $this->stove;
  }
  /** @param string */
  public function setStoveException($stoveException)
  {
    $this->stoveException = $stoveException;
  }
  /** @return string */
  public function getStoveException()
  {
    return $this->stoveException;
  }
  /** @param bool */
  public function setTeaStation($teaStation)
  {
    $this->teaStation = $teaStation;
  }
  /** @return bool */
  public function getTeaStation()
  {
    return $this->teaStation;
  }
  /** @param string */
  public function setTeaStationException($teaStationException)
  {
    $this->teaStationException = $teaStationException;
  }
  /** @return string */
  public function getTeaStationException()
  {
    return $this->teaStationException;
  }
  /** @param bool */
  public function setToaster($toaster)
  {
    $this->toaster = $toaster;
  }
  /** @return bool */
  public function getToaster()
  {
    return $this->toaster;
  }
  /** @param string */
  public function setToasterException($toasterException)
  {
    $this->toasterException = $toasterException;
  }
  /** @return string */
  public function getToasterException()
  {
    return $this->toasterException;
  }
}

class LivingAreaFeatures extends \Google\Model
{
  /** @var bool */
  public $airConditioning;
  /** @var string */
  public $airConditioningException;
  /** @var bool */
  public $bathtub;
  /** @var string */
  public $bathtubException;
  /** @var bool */
  public $bidet;
  /** @var string */
  public $bidetException;
  /** @var bool */
  public $dryer;
  /** @var string */
  public $dryerException;
  /** @var bool */
  public $electronicRoomKey;
  /** @var string */
  public $electronicRoomKeyException;
  /** @var bool */
  public $fireplace;
  /** @var string */
  public $fireplaceException;
  /** @var bool */
  public $hairdryer;
  /** @var string */
  public $hairdryerException;
  /** @var bool */
  public $heating;
  /** @var string */
  public $heatingException;
  /** @var bool */
  public $inunitSafe;
  /** @var string */
  public $inunitSafeException;
  /** @var bool */
  public $inunitWifiAvailable;
  /** @var string */
  public $inunitWifiAvailableException;
  /** @var bool */
  public $ironingEquipment;
  /** @var string */
  public $ironingEquipmentException;
  /** @var bool */
  public $payPerViewMovies;
  /** @var string */
  public $payPerViewMoviesException;
  /** @var bool */
  public $privateBathroom;
  /** @var string */
  public $privateBathroomException;
  /** @var bool */
  public $shower;
  /** @var string */
  public $showerException;
  /** @var bool */
  public $toilet;
  /** @var string */
  public $toiletException;
  /** @var bool */
  public $tv;
  /** @var bool */
  public $tvCasting;
  /** @var string */
  public $tvCastingException;
  /** @var string */
  public $tvException;
  /** @var bool */
  public $tvStreaming;
  /** @var string */
  public $tvStreamingException;
  /** @var bool */
  public $universalPowerAdapters;
  /** @var string */
  public $universalPowerAdaptersException;
  /** @var bool */
  public $washer;
  /** @var string */
  public $washerException;

  /** @param bool */
  public function setAirConditioning($airConditioning)
  {
    $this->airConditioning = $airConditioning;
  }
  /** @return bool */
  public function getAirConditioning()
  {
    return $this->airConditioning;
  }
  /** @param string */
  public function setAirConditioningException($airConditioningException)
  {
    $this->airConditioningException = $airConditioningException;
  }
  /** @return string */
  public function getAirConditioningException()
  {
    return $this->airConditioningException;
  }
  /** @param bool */
  public function setBathtub($bathtub)
  {
    $this->bathtub = $bathtub;
  }
  /** @return bool */
  public function getBathtub()
  {
    return $this->bathtub;
  }
  /** @param string */
  public function setBathtubException($bathtubException)
  {
    $this->bathtubException = $bathtubException;
  }
  /** @return string */
  public function getBathtubException()
  {
    return $this->bathtubException;
  }
  /** @param bool */
  public function setBidet($bidet)
  {
    $this->bidet = $bidet;
  }
  /** @return bool */
  public function getBidet()
  {
    return $this->bidet;
  }
  /** @param string */
  public function setBidetException($bidetException)
  {
    $this->bidetException = $bidetException;
  }
  /** @return string */
  public function getBidetException()
  {
    return $this->bidetException;
  }
  /** @param bool */
  public function setDryer($dryer)
  {
    $this->dryer = $dryer;
  }
  /** @return bool */
  public function getDryer()
  {
    return $this->dryer;
  }
  /** @param string */
  public function setDryerException($dryerException)
  {
    $this->dryerException = $dryerException;
  }
  /** @return string */
  public function getDryerException()
  {
    return $this->dryerException;
  }
  /** @param bool */
  public function setElectronicRoomKey($electronicRoomKey)
  {
    $this->electronicRoomKey = $electronicRoomKey;
  }
  /** @return bool */
  public function getElectronicRoomKey()
  {
    return $this->electronicRoomKey;
  }
  /** @param string */
  public function setElectronicRoomKeyException($electronicRoomKeyException)
  {
    $this->electronicRoomKeyException = $electronicRoomKeyException;
  }
  /** @return string */
  public function getElectronicRoomKeyException()
  {
    return $this->electronicRoomKeyException;
  }
  /** @param bool */
  public function setFireplace($fireplace)
  {
    $this->fireplace = $fireplace;
  }
  /** @return bool */
  public function getFireplace()
  {
    return $this->fireplace;
  }
  /** @param string */
  public function setFireplaceException($fireplaceException)
  {
    $this->fireplaceException = $fireplaceException;
  }
  /** @return string */
  public function getFireplaceException()
  {
    return $this->fireplaceException;
  }
  /** @param bool */
  public function setHairdryer($hairdryer)
  {
    $this->hairdryer = $hairdryer;
  }
  /** @return bool */
  public function getHairdryer()
  {
    return $this->hairdryer;
  }
  /** @param string */
  public function setHairdryerException($hairdryerException)
  {
    $this->hairdryerException = $hairdryerException;
  }
  /** @return string */
  public function getHairdryerException()
  {
    return $this->hairdryerException;
  }
  /** @param bool */
  public function setHeating($heating)
  {
    $this->heating = $heating;
  }
  /** @return bool */
  public function getHeating()
  {
    return $this->heating;
  }
  /** @param string */
  public function setHeatingException($heatingException)
  {
    $this->heatingException = $heatingException;
  }
  /** @return string */
  public function getHeatingException()
  {
    return $this->heatingException;
  }
  /** @param bool */
  public function setInunitSafe($inunitSafe)
  {
    $this->inunitSafe = $inunitSafe;
  }
  /** @return bool */
  public function getInunitSafe()
  {
    return $this->inunitSafe;
  }
  /** @param string */
  public function setInunitSafeException($inunitSafeException)
  {
    $this->inunitSafeException = $inunitSafeException;
  }
  /** @return string */
  public function getInunitSafeException()
  {
    return $this->inunitSafeException;
  }
  /** @param bool */
  public function setInunitWifiAvailable($inunitWifiAvailable)
  {
    $this->inunitWifiAvailable = $inunitWifiAvailable;
  }
  /** @return bool */
  public function getInunitWifiAvailable()
  {
    return $this->inunitWifiAvailable;
  }
  /** @param string */
  public function setInunitWifiAvailableException($inunitWifiAvailableException)
  {
    $this->inunitWifiAvailableException = $inunitWifiAvailableException;
  }
  /** @return string */
  public function getInunitWifiAvailableException()
  {
    return $this->inunitWifiAvailableException;
  }
  /** @param bool */
  public function setIroningEquipment($ironingEquipment)
  {
    $this->ironingEquipment = $ironingEquipment;
  }
  /** @return bool */
  public function getIroningEquipment()
  {
    return $this->ironingEquipment;
  }
  /** @param string */
  public function setIroningEquipmentException($ironingEquipmentException)
  {
    $this->ironingEquipmentException = $ironingEquipmentException;
  }
  /** @return string */
  public function getIroningEquipmentException()
  {
    return $this->ironingEquipmentException;
  }
  /** @param bool */
  public function setPayPerViewMovies($payPerViewMovies)
  {
    $this->payPerViewMovies = $payPerViewMovies;
  }
  /** @return bool */
  public function getPayPerViewMovies()
  {
    return $this->payPerViewMovies;
  }
  /** @param string */
  public function setPayPerViewMoviesException($payPerViewMoviesException)
  {
    $this->payPerViewMoviesException = $payPerViewMoviesException;
  }
  /** @return string */
  public function getPayPerViewMoviesException()
  {
    return $this->payPerViewMoviesException;
  }
  /** @param bool */
  public function setPrivateBathroom($privateBathroom)
  {
    $this->privateBathroom = $privateBathroom;
  }
  /** @return bool */
  public function getPrivateBathroom()
  {
    return $this->privateBathroom;
  }
  /** @param string */
  public function setPrivateBathroomException($privateBathroomException)
  {
    $this->privateBathroomException = $privateBathroomException;
  }
  /** @return string */
  public function getPrivateBathroomException()
  {
    return $this->privateBathroomException;
  }
  /** @param bool */
  public function setShower($shower)
  {
    $this->shower = $shower;
  }
  /** @return bool */
  public function getShower()
  {
    return $this->shower;
  }
  /** @param string */
  public function setShowerException($showerException)
  {
    $this->showerException = $showerException;
  }
  /** @return string */
  public function getShowerException()
  {
    return $this->showerException;
  }
  /** @param bool */
  public function setToilet($toilet)
  {
    $this->toilet = $toilet;
  }
  /** @return bool */
  public function getToilet()
  {
    return $this->toilet;
  }
  /** @param string */
  public function setToiletException($toiletException)
  {
    $this->toiletException = $toiletException;
  }
  /** @return string */
  public function getToiletException()
  {
    return $this->toiletException;
  }
  /** @param bool */
  public function setTv($tv)
  {
    $this->tv = $tv;
  }
  /** @return bool */
  public function getTv()
  {
    return $this->tv;
  }
  /** @param bool */
  public function setTvCasting($tvCasting)
  {
    $this->tvCasting = $tvCasting;
  }
  /** @return bool */
  public function getTvCasting()
  {
    return $this->tvCasting;
  }
  /** @param string */
  public function setTvCastingException($tvCastingException)
  {
    $this->tvCastingException = $tvCastingException;
  }
  /** @return string */
  public function getTvCastingException()
  {
    return $this->tvCastingException;
  }
  /** @param string */
  public function setTvException($tvException)
  {
    $this->tvException = $tvException;
  }
  /** @return string */
  public function getTvException()
  {
    return $this->tvException;
  }
  /** @param bool */
  public function setTvStreaming($tvStreaming)
  {
    $this->tvStreaming = $tvStreaming;
  }
  /** @return bool */
  public function getTvStreaming()
  {
    return $this->tvStreaming;
  }
  /** @param string */
  public function setTvStreamingException($tvStreamingException)
  {
    $this->tvStreamingException = $tvStreamingException;
  }
  /** @return string */
  public function getTvStreamingException()
  {
    return $this->tvStreamingException;
  }
  /** @param bool */
  public function setUniversalPowerAdapters($universalPowerAdapters)
  {
    $this->universalPowerAdapters = $universalPowerAdapters;
  }
  /** @return bool */
  public function getUniversalPowerAdapters()
  {
    return $this->universalPowerAdapters;
  }
  /** @param string */
  public function setUniversalPowerAdaptersException($universalPowerAdaptersException)
  {
    $this->universalPowerAdaptersException = $universalPowerAdaptersException;
  }
  /** @return string */
  public function getUniversalPowerAdaptersException()
  {
    return $this->universalPowerAdaptersException;
  }
  /** @param bool */
  public function setWasher($washer)
  {
    $this->washer = $washer;
  }
  /** @return bool */
  public function getWasher()
  {
    return $this->washer;
  }
  /** @param string */
  public function setWasherException($washerException)
  {
    $this->washerException = $washerException;
  }
  /** @return string */
  public function getWasherException()
  {
    return $this->washerException;
  }
}

class LivingAreaLayout extends \Google\Model
{
  /** @var bool */
  public $balcony;
  /** @var string */
  public $balconyException;
  /** @var float */
  public $livingAreaSqMeters;
  /** @var string */
  public $livingAreaSqMetersException;
  /** @var bool */
  public $loft;
  /** @var string */
  public $loftException;
  /** @var bool */
  public $nonSmoking;
  /** @var string */
  public $nonSmokingException;
  /** @var bool */
  public $patio;
  /** @var string */
  public $patioException;
  /** @var bool */
  public $stairs;
  /** @var string */
  public $stairsException;

  /** @param bool */
  public function setBalcony($balcony)
  {
    $this->balcony = $balcony;
  }
  /** @return bool */
  public function getBalcony()
  {
    return $this->balcony;
  }
  /** @param string */
  public function setBalconyException($balconyException)
  {
    $this->balconyException = $balconyException;
  }
  /** @return string */
  public function getBalconyException()
  {
    return $this->balconyException;
  }
  /** @param float */
  public function setLivingAreaSqMeters($livingAreaSqMeters)
  {
    $this->livingAreaSqMeters = $livingAreaSqMeters;
  }
  /** @return float */
  public function getLivingAreaSqMeters()
  {
    return $this->livingAreaSqMeters;
  }
  /** @param string */
  public function setLivingAreaSqMetersException($livingAreaSqMetersException)
  {
    $this->livingAreaSqMetersException = $livingAreaSqMetersException;
  }
  /** @return string */
  public function getLivingAreaSqMetersException()
  {
    return $this->livingAreaSqMetersException;
  }
  /** @param bool */
  public function setLoft($loft)
  {
    $this->loft = $loft;
  }
  /** @return bool */
  public function getLoft()
  {
    return $this->loft;
  }
  /** @param string */
  public function setLoftException($loftException)
  {
    $this->loftException = $loftException;
  }
  /** @return string */
  public function getLoftException()
  {
    return $this->loftException;
  }
  /** @param bool */
  public function setNonSmoking($nonSmoking)
  {
    $this->nonSmoking = $nonSmoking;
  }
  /** @return bool */
  public function getNonSmoking()
  {
    return $this->nonSmoking;
  }
  /** @param string */
  public function setNonSmokingException($nonSmokingException)
  {
    $this->nonSmokingException = $nonSmokingException;
  }
  /** @return string */
  public function getNonSmokingException()
  {
    return $this->nonSmokingException;
  }
  /** @param bool */
  public function setPatio($patio)
  {
    $this->patio = $patio;
  }
  /** @return bool */
  public function getPatio()
  {
    return $this->patio;
  }
  /** @param string */
  public function setPatioException($patioException)
  {
    $this->patioException = $patioException;
  }
  /** @return string */
  public function getPatioException()
  {
    return $this->patioException;
  }
  /** @param bool */
  public function setStairs($stairs)
  {
    $this->stairs = $stairs;
  }
  /** @return bool */
  public function getStairs()
  {
    return $this->stairs;
  }
  /** @param string */
  public function setStairsException($stairsException)
  {
    $this->stairsException = $stairsException;
  }
  /** @return string */
  public function getStairsException()
  {
    return $this->stairsException;
  }
}

class LivingAreaSleeping extends \Google\Model
{
  /** @var int */
  public $bedsCount;
  /** @var string */
  public $bedsCountException;
  /** @var int */
  public $bunkBedsCount;
  /** @var string */
  public $bunkBedsCountException;
  /** @var int */
  public $cribsCount;
  /** @var string */
  public $cribsCountException;
  /** @var int */
  public $doubleBedsCount;
  /** @var string */
  public $doubleBedsCountException;
  /** @var bool */
  public $featherPillows;
  /** @var string */
  public $featherPillowsException;
  /** @var bool */
  public $hypoallergenicBedding;
  /** @var string */
  public $hypoallergenicBeddingException;
  /** @var int */
  public $kingBedsCount;
  /** @var string */
  public $kingBedsCountException;
  /** @var bool */
  public $memoryFoamPillows;
  /** @var string */
  public $memoryFoamPillowsException;
  /** @var int */
  public $otherBedsCount;
  /** @var string */
  public $otherBedsCountException;
  /** @var int */
  public $queenBedsCount;
  /** @var string */
  public $queenBedsCountException;
  /** @var int */
  public $rollAwayBedsCount;
  /** @var string */
  public $rollAwayBedsCountException;
  /** @var int */
  public $singleOrTwinBedsCount;
  /** @var string */
  public $singleOrTwinBedsCountException;
  /** @var int */
  public $sofaBedsCount;
  /** @var string */
  public $sofaBedsCountException;
  /** @var bool */
  public $syntheticPillows;
  /** @var string */
  public $syntheticPillowsException;

  /** @param int */
  public function setBedsCount($bedsCount)
  {
    $this->bedsCount = $bedsCount;
  }
  /** @return int */
  public function getBedsCount()
  {
    return $this->bedsCount;
  }
  /** @param string */
  public function setBedsCountException($bedsCountException)
  {
    $this->bedsCountException = $bedsCountException;
  }
  /** @return string */
  public function getBedsCountException()
  {
    return $this->bedsCountException;
  }
  /** @param int */
  public function setBunkBedsCount($bunkBedsCount)
  {
    $this->bunkBedsCount = $bunkBedsCount;
  }
  /** @return int */
  public function getBunkBedsCount()
  {
    return $this->bunkBedsCount;
  }
  /** @param string */
  public function setBunkBedsCountException($bunkBedsCountException)
  {
    $this->bunkBedsCountException = $bunkBedsCountException;
  }
  /** @return string */
  public function getBunkBedsCountException()
  {
    return $this->bunkBedsCountException;
  }
  /** @param int */
  public function setCribsCount($cribsCount)
  {
    $this->cribsCount = $cribsCount;
  }
  /** @return int */
  public function getCribsCount()
  {
    return $this->cribsCount;
  }
  /** @param string */
  public function setCribsCountException($cribsCountException)
  {
    $this->cribsCountException = $cribsCountException;
  }
  /** @return string */
  public function getCribsCountException()
  {
    return $this->cribsCountException;
  }
  /** @param int */
  public function setDoubleBedsCount($doubleBedsCount)
  {
    $this->doubleBedsCount = $doubleBedsCount;
  }
  /** @return int */
  public function getDoubleBedsCount()
  {
    return $this->doubleBedsCount;
  }
  /** @param string */
  public function setDoubleBedsCountException($doubleBedsCountException)
  {
    $this->doubleBedsCountException = $doubleBedsCountException;
  }
  /** @return string */
  public function getDoubleBedsCountException()
  {
    return $this->doubleBedsCountException;
  }
  /** @param bool */
  public function setFeatherPillows($featherPillows)
  {
    $this->featherPillows = $featherPillows;
  }
  /** @return bool */
  public function getFeatherPillows()
  {
    return $this->featherPillows;
  }
  /** @param string */
  public function setFeatherPillowsException($featherPillowsException)
  {
    $this->featherPillowsException = $featherPillowsException;
  }
  /** @return string */
  public function getFeatherPillowsException()
  {
    return $this->featherPillowsException;
  }
  /** @param bool */
  public function setHypoallergenicBedding($hypoallergenicBedding)
  {
    $this->hypoallergenicBedding = $hypoallergenicBedding;
  }
  /** @return bool */
  public function getHypoallergenicBedding()
  {
    return $this->hypoallergenicBedding;
  }
  /** @param string */
  public function setHypoallergenicBeddingException($hypoallergenicBeddingException)
  {
    $this->hypoallergenicBeddingException = $hypoallergenicBeddingException;
  }
  /** @return string */
  public function getHypoallergenicBeddingException()
  {
    return $this->hypoallergenicBeddingException;
  }
  /** @param int */
  public function setKingBedsCount($kingBedsCount)
  {
    $this->kingBedsCount = $kingBedsCount;
  }
  /** @return int */
  public function getKingBedsCount()
  {
    return $this->kingBedsCount;
  }
  /** @param string */
  public function setKingBedsCountException($kingBedsCountException)
  {
    $this->kingBedsCountException = $kingBedsCountException;
  }
  /** @return string */
  public function getKingBedsCountException()
  {
    return $this->kingBedsCountException;
  }
  /** @param bool */
  public function setMemoryFoamPillows($memoryFoamPillows)
  {
    $this->memoryFoamPillows = $memoryFoamPillows;
  }
  /** @return bool */
  public function getMemoryFoamPillows()
  {
    return $this->memoryFoamPillows;
  }
  /** @param string */
  public function setMemoryFoamPillowsException($memoryFoamPillowsException)
  {
    $this->memoryFoamPillowsException = $memoryFoamPillowsException;
  }
  /** @return string */
  public function getMemoryFoamPillowsException()
  {
    return $this->memoryFoamPillowsException;
  }
  /** @param int */
  public function setOtherBedsCount($otherBedsCount)
  {
    $this->otherBedsCount = $otherBedsCount;
  }
  /** @return int */
  public function getOtherBedsCount()
  {
    return $this->otherBedsCount;
  }
  /** @param string */
  public function setOtherBedsCountException($otherBedsCountException)
  {
    $this->otherBedsCountException = $otherBedsCountException;
  }
  /** @return string */
  public function getOtherBedsCountException()
  {
    return $this->otherBedsCountException;
  }
  /** @param int */
  public function setQueenBedsCount($queenBedsCount)
  {
    $this->queenBedsCount = $queenBedsCount;
  }
  /** @return int */
  public function getQueenBedsCount()
  {
    return $this->queenBedsCount;
  }
  /** @param string */
  public function setQueenBedsCountException($queenBedsCountException)
  {
    $this->queenBedsCountException = $queenBedsCountException;
  }
  /** @return string */
  public function getQueenBedsCountException()
  {
    return $this->queenBedsCountException;
  }
  /** @param int */
  public function setRollAwayBedsCount($rollAwayBedsCount)
  {
    $this->rollAwayBedsCount = $rollAwayBedsCount;
  }
  /** @return int */
  public function getRollAwayBedsCount()
  {
    return $this->rollAwayBedsCount;
  }
  /** @param string */
  public function setRollAwayBedsCountException($rollAwayBedsCountException)
  {
    $this->rollAwayBedsCountException = $rollAwayBedsCountException;
  }
  /** @return string */
  public function getRollAwayBedsCountException()
  {
    return $this->rollAwayBedsCountException;
  }
  /** @param int */
  public function setSingleOrTwinBedsCount($singleOrTwinBedsCount)
  {
    $this->singleOrTwinBedsCount = $singleOrTwinBedsCount;
  }
  /** @return int */
  public function getSingleOrTwinBedsCount()
  {
    return $this->singleOrTwinBedsCount;
  }
  /** @param string */
  public function setSingleOrTwinBedsCountException($singleOrTwinBedsCountException)
  {
    $this->singleOrTwinBedsCountException = $singleOrTwinBedsCountException;
  }
  /** @return string */
  public function getSingleOrTwinBedsCountException()
  {
    return $this->singleOrTwinBedsCountException;
  }
  /** @param int */
  public function setSofaBedsCount($sofaBedsCount)
  {
    $this->sofaBedsCount = $sofaBedsCount;
  }
  /** @return int */
  public function getSofaBedsCount()
  {
    return $this->sofaBedsCount;
  }
  /** @param string */
  public function setSofaBedsCountException($sofaBedsCountException)
  {
    $this->sofaBedsCountException = $sofaBedsCountException;
  }
  /** @return string */
  public function getSofaBedsCountException()
  {
    return $this->sofaBedsCountException;
  }
  /** @param bool */
  public function setSyntheticPillows($syntheticPillows)
  {
    $this->syntheticPillows = $syntheticPillows;
  }
  /** @return bool */
  public function getSyntheticPillows()
  {
    return $this->syntheticPillows;
  }
  /** @param string */
  public function setSyntheticPillowsException($syntheticPillowsException)
  {
    $this->syntheticPillowsException = $syntheticPillowsException;
  }
  /** @return string */
  public function getSyntheticPillowsException()
  {
    return $this->syntheticPillowsException;
  }
}

class Lodging extends \Google\Collection
{
  /** @var Accessibility */
  public $accessibility;
  /** @var Activities */
  public $activities;
  /** @var GuestUnitFeatures */
  public $allUnits;
  /** @var Business */
  public $business;
  /** @var LivingArea */
  public $commonLivingArea;
  /** @var Connectivity */
  public $connectivity;
  /** @var Families */
  public $families;
  /** @var FoodAndDrink */
  public $foodAndDrink;
  /** @var GuestUnitType[] */
  public $guestUnits;
  /** @var HealthAndSafety */
  public $healthAndSafety;
  /** @var Housekeeping */
  public $housekeeping;
  /** @var LodgingMetadata */
  public $metadata;
  /** @var string */
  public $name;
  /** @var Parking */
  public $parking;
  /** @var Pets */
  public $pets;
  /** @var Policies */
  public $policies;
  /** @var Pools */
  public $pools;
  /** @var Property */
  public $property;
  /** @var Services */
  public $services;
  /** @var GuestUnitFeatures */
  public $someUnits;
  /** @var Sustainability */
  public $sustainability;
  /** @var Transportation */
  public $transportation;
  /** @var Wellness */
  public $wellness;
  protected $collection_key = 'guestUnits';
  protected $accessibilityType = Accessibility::class;
  protected $accessibilityDataType = '';
  protected $activitiesType = Activities::class;
  protected $activitiesDataType = '';
  protected $allUnitsType = GuestUnitFeatures::class;
  protected $allUnitsDataType = '';
  protected $businessType = Business::class;
  protected $businessDataType = '';
  protected $commonLivingAreaType = LivingArea::class;
  protected $commonLivingAreaDataType = '';
  protected $connectivityType = Connectivity::class;
  protected $connectivityDataType = '';
  protected $familiesType = Families::class;
  protected $familiesDataType = '';
  protected $foodAndDrinkType = FoodAndDrink::class;
  protected $foodAndDrinkDataType = '';
  protected $guestUnitsType = GuestUnitType::class;
  protected $guestUnitsDataType = 'array';
  protected $healthAndSafetyType = HealthAndSafety::class;
  protected $healthAndSafetyDataType = '';
  protected $housekeepingType = Housekeeping::class;
  protected $housekeepingDataType = '';
  protected $metadataType = LodgingMetadata::class;
  protected $metadataDataType = '';
  protected $parkingType = Parking::class;
  protected $parkingDataType = '';
  protected $petsType = Pets::class;
  protected $petsDataType = '';
  protected $policiesType = Policies::class;
  protected $policiesDataType = '';
  protected $poolsType = Pools::class;
  protected $poolsDataType = '';
  protected $propertyType = Property::class;
  protected $propertyDataType = '';
  protected $servicesType = Services::class;
  protected $servicesDataType = '';
  protected $someUnitsType = GuestUnitFeatures::class;
  protected $someUnitsDataType = '';
  protected $sustainabilityType = Sustainability::class;
  protected $sustainabilityDataType = '';
  protected $transportationType = Transportation::class;
  protected $transportationDataType = '';
  protected $wellnessType = Wellness::class;
  protected $wellnessDataType = '';
  /** @param Accessibility */
  public function setAccessibility(Accessibility $accessibility)
  {
    $this->accessibility = $accessibility;
  }
  /** @return Accessibility */
  public function getAccessibility()
  {
    return $this->accessibility;
  }
  /** @param Activities */
  public function setActivities(Activities $activities)
  {
    $this->activities = $activities;
  }
  /** @return Activities */
  public function getActivities()
  {
    return $this->activities;
  }
  /** @param GuestUnitFeatures */
  public function setAllUnits(GuestUnitFeatures $allUnits)
  {
    $this->allUnits = $allUnits;
  }
  /** @return GuestUnitFeatures */
  public function getAllUnits()
  {
    return $this->allUnits;
  }
  /** @param Business */
  public function setBusiness(Business $business)
  {
    $this->business = $business;
  }
  /** @return Business */
  public function getBusiness()
  {
    return $this->business;
  }
  /** @param LivingArea */
  public function setCommonLivingArea(LivingArea $commonLivingArea)
  {
    $this->commonLivingArea = $commonLivingArea;
  }
  /** @return LivingArea */
  public function getCommonLivingArea()
  {
    return $this->commonLivingArea;
  }
  /** @param Connectivity */
  public function setConnectivity(Connectivity $connectivity)
  {
    $this->connectivity = $connectivity;
  }
  /** @return Connectivity */
  public function getConnectivity()
  {
    return $this->connectivity;
  }
  /** @param Families */
  public function setFamilies(Families $families)
  {
    $this->families = $families;
  }
  /** @return Families */
  public function getFamilies()
  {
    return $this->families;
  }
  /** @param FoodAndDrink */
  public function setFoodAndDrink(FoodAndDrink $foodAndDrink)
  {
    $this->foodAndDrink = $foodAndDrink;
  }
  /** @return FoodAndDrink */
  public function getFoodAndDrink()
  {
    return $this->foodAndDrink;
  }
  /** @param GuestUnitType[] */
  public function setGuestUnits($guestUnits)
  {
    $this->guestUnits = $guestUnits;
  }
  /** @return GuestUnitType[] */
  public function getGuestUnits()
  {
    return $this->guestUnits;
  }
  /** @param HealthAndSafety */
  public function setHealthAndSafety(HealthAndSafety $healthAndSafety)
  {
    $this->healthAndSafety = $healthAndSafety;
  }
  /** @return HealthAndSafety */
  public function getHealthAndSafety()
  {
    return $this->healthAndSafety;
  }
  /** @param Housekeeping */
  public function setHousekeeping(Housekeeping $housekeeping)
  {
    $this->housekeeping = $housekeeping;
  }
  /** @return Housekeeping */
  public function getHousekeeping()
  {
    return $this->housekeeping;
  }
  /** @param LodgingMetadata */
  public function setMetadata(LodgingMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /** @return LodgingMetadata */
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
  /** @param Parking */
  public function setParking(Parking $parking)
  {
    $this->parking = $parking;
  }
  /** @return Parking */
  public function getParking()
  {
    return $this->parking;
  }
  /** @param Pets */
  public function setPets(Pets $pets)
  {
    $this->pets = $pets;
  }
  /** @return Pets */
  public function getPets()
  {
    return $this->pets;
  }
  /** @param Policies */
  public function setPolicies(Policies $policies)
  {
    $this->policies = $policies;
  }
  /** @return Policies */
  public function getPolicies()
  {
    return $this->policies;
  }
  /** @param Pools */
  public function setPools(Pools $pools)
  {
    $this->pools = $pools;
  }
  /** @return Pools */
  public function getPools()
  {
    return $this->pools;
  }
  /** @param Property */
  public function setProperty(Property $property)
  {
    $this->property = $property;
  }
  /** @return Property */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param Services */
  public function setServices(Services $services)
  {
    $this->services = $services;
  }
  /** @return Services */
  public function getServices()
  {
    return $this->services;
  }
  /** @param GuestUnitFeatures */
  public function setSomeUnits(GuestUnitFeatures $someUnits)
  {
    $this->someUnits = $someUnits;
  }
  /** @return GuestUnitFeatures */
  public function getSomeUnits()
  {
    return $this->someUnits;
  }
  /** @param Sustainability */
  public function setSustainability(Sustainability $sustainability)
  {
    $this->sustainability = $sustainability;
  }
  /** @return Sustainability */
  public function getSustainability()
  {
    return $this->sustainability;
  }
  /** @param Transportation */
  public function setTransportation(Transportation $transportation)
  {
    $this->transportation = $transportation;
  }
  /** @return Transportation */
  public function getTransportation()
  {
    return $this->transportation;
  }
  /** @param Wellness */
  public function setWellness(Wellness $wellness)
  {
    $this->wellness = $wellness;
  }
  /** @return Wellness */
  public function getWellness()
  {
    return $this->wellness;
  }
}

class LodgingMetadata extends \Google\Model
{
  /** @var string */
  public $updateTime;

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

class MinimizedContact extends \Google\Model
{
  /** @var bool */
  public $contactlessCheckinCheckout;
  /** @var string */
  public $contactlessCheckinCheckoutException;
  /** @var bool */
  public $digitalGuestRoomKeys;
  /** @var string */
  public $digitalGuestRoomKeysException;
  /** @var bool */
  public $housekeepingScheduledRequestOnly;
  /** @var string */
  public $housekeepingScheduledRequestOnlyException;
  /** @var bool */
  public $noHighTouchItemsCommonAreas;
  /** @var string */
  public $noHighTouchItemsCommonAreasException;
  /** @var bool */
  public $noHighTouchItemsGuestRooms;
  /** @var string */
  public $noHighTouchItemsGuestRoomsException;
  /** @var bool */
  public $plasticKeycardsDisinfected;
  /** @var string */
  public $plasticKeycardsDisinfectedException;
  /** @var bool */
  public $roomBookingsBuffer;
  /** @var string */
  public $roomBookingsBufferException;

  /** @param bool */
  public function setContactlessCheckinCheckout($contactlessCheckinCheckout)
  {
    $this->contactlessCheckinCheckout = $contactlessCheckinCheckout;
  }
  /** @return bool */
  public function getContactlessCheckinCheckout()
  {
    return $this->contactlessCheckinCheckout;
  }
  /** @param string */
  public function setContactlessCheckinCheckoutException($contactlessCheckinCheckoutException)
  {
    $this->contactlessCheckinCheckoutException = $contactlessCheckinCheckoutException;
  }
  /** @return string */
  public function getContactlessCheckinCheckoutException()
  {
    return $this->contactlessCheckinCheckoutException;
  }
  /** @param bool */
  public function setDigitalGuestRoomKeys($digitalGuestRoomKeys)
  {
    $this->digitalGuestRoomKeys = $digitalGuestRoomKeys;
  }
  /** @return bool */
  public function getDigitalGuestRoomKeys()
  {
    return $this->digitalGuestRoomKeys;
  }
  /** @param string */
  public function setDigitalGuestRoomKeysException($digitalGuestRoomKeysException)
  {
    $this->digitalGuestRoomKeysException = $digitalGuestRoomKeysException;
  }
  /** @return string */
  public function getDigitalGuestRoomKeysException()
  {
    return $this->digitalGuestRoomKeysException;
  }
  /** @param bool */
  public function setHousekeepingScheduledRequestOnly($housekeepingScheduledRequestOnly)
  {
    $this->housekeepingScheduledRequestOnly = $housekeepingScheduledRequestOnly;
  }
  /** @return bool */
  public function getHousekeepingScheduledRequestOnly()
  {
    return $this->housekeepingScheduledRequestOnly;
  }
  /** @param string */
  public function setHousekeepingScheduledRequestOnlyException($housekeepingScheduledRequestOnlyException)
  {
    $this->housekeepingScheduledRequestOnlyException = $housekeepingScheduledRequestOnlyException;
  }
  /** @return string */
  public function getHousekeepingScheduledRequestOnlyException()
  {
    return $this->housekeepingScheduledRequestOnlyException;
  }
  /** @param bool */
  public function setNoHighTouchItemsCommonAreas($noHighTouchItemsCommonAreas)
  {
    $this->noHighTouchItemsCommonAreas = $noHighTouchItemsCommonAreas;
  }
  /** @return bool */
  public function getNoHighTouchItemsCommonAreas()
  {
    return $this->noHighTouchItemsCommonAreas;
  }
  /** @param string */
  public function setNoHighTouchItemsCommonAreasException($noHighTouchItemsCommonAreasException)
  {
    $this->noHighTouchItemsCommonAreasException = $noHighTouchItemsCommonAreasException;
  }
  /** @return string */
  public function getNoHighTouchItemsCommonAreasException()
  {
    return $this->noHighTouchItemsCommonAreasException;
  }
  /** @param bool */
  public function setNoHighTouchItemsGuestRooms($noHighTouchItemsGuestRooms)
  {
    $this->noHighTouchItemsGuestRooms = $noHighTouchItemsGuestRooms;
  }
  /** @return bool */
  public function getNoHighTouchItemsGuestRooms()
  {
    return $this->noHighTouchItemsGuestRooms;
  }
  /** @param string */
  public function setNoHighTouchItemsGuestRoomsException($noHighTouchItemsGuestRoomsException)
  {
    $this->noHighTouchItemsGuestRoomsException = $noHighTouchItemsGuestRoomsException;
  }
  /** @return string */
  public function getNoHighTouchItemsGuestRoomsException()
  {
    return $this->noHighTouchItemsGuestRoomsException;
  }
  /** @param bool */
  public function setPlasticKeycardsDisinfected($plasticKeycardsDisinfected)
  {
    $this->plasticKeycardsDisinfected = $plasticKeycardsDisinfected;
  }
  /** @return bool */
  public function getPlasticKeycardsDisinfected()
  {
    return $this->plasticKeycardsDisinfected;
  }
  /** @param string */
  public function setPlasticKeycardsDisinfectedException($plasticKeycardsDisinfectedException)
  {
    $this->plasticKeycardsDisinfectedException = $plasticKeycardsDisinfectedException;
  }
  /** @return string */
  public function getPlasticKeycardsDisinfectedException()
  {
    return $this->plasticKeycardsDisinfectedException;
  }
  /** @param bool */
  public function setRoomBookingsBuffer($roomBookingsBuffer)
  {
    $this->roomBookingsBuffer = $roomBookingsBuffer;
  }
  /** @return bool */
  public function getRoomBookingsBuffer()
  {
    return $this->roomBookingsBuffer;
  }
  /** @param string */
  public function setRoomBookingsBufferException($roomBookingsBufferException)
  {
    $this->roomBookingsBufferException = $roomBookingsBufferException;
  }
  /** @return string */
  public function getRoomBookingsBufferException()
  {
    return $this->roomBookingsBufferException;
  }
}

class Parking extends \Google\Model
{
  /** @var bool */
  public $electricCarChargingStations;
  /** @var string */
  public $electricCarChargingStationsException;
  /** @var bool */
  public $freeParking;
  /** @var string */
  public $freeParkingException;
  /** @var bool */
  public $freeSelfParking;
  /** @var string */
  public $freeSelfParkingException;
  /** @var bool */
  public $freeValetParking;
  /** @var string */
  public $freeValetParkingException;
  /** @var bool */
  public $parkingAvailable;
  /** @var string */
  public $parkingAvailableException;
  /** @var bool */
  public $selfParkingAvailable;
  /** @var string */
  public $selfParkingAvailableException;
  /** @var bool */
  public $valetParkingAvailable;
  /** @var string */
  public $valetParkingAvailableException;

  /** @param bool */
  public function setElectricCarChargingStations($electricCarChargingStations)
  {
    $this->electricCarChargingStations = $electricCarChargingStations;
  }
  /** @return bool */
  public function getElectricCarChargingStations()
  {
    return $this->electricCarChargingStations;
  }
  /** @param string */
  public function setElectricCarChargingStationsException($electricCarChargingStationsException)
  {
    $this->electricCarChargingStationsException = $electricCarChargingStationsException;
  }
  /** @return string */
  public function getElectricCarChargingStationsException()
  {
    return $this->electricCarChargingStationsException;
  }
  /** @param bool */
  public function setFreeParking($freeParking)
  {
    $this->freeParking = $freeParking;
  }
  /** @return bool */
  public function getFreeParking()
  {
    return $this->freeParking;
  }
  /** @param string */
  public function setFreeParkingException($freeParkingException)
  {
    $this->freeParkingException = $freeParkingException;
  }
  /** @return string */
  public function getFreeParkingException()
  {
    return $this->freeParkingException;
  }
  /** @param bool */
  public function setFreeSelfParking($freeSelfParking)
  {
    $this->freeSelfParking = $freeSelfParking;
  }
  /** @return bool */
  public function getFreeSelfParking()
  {
    return $this->freeSelfParking;
  }
  /** @param string */
  public function setFreeSelfParkingException($freeSelfParkingException)
  {
    $this->freeSelfParkingException = $freeSelfParkingException;
  }
  /** @return string */
  public function getFreeSelfParkingException()
  {
    return $this->freeSelfParkingException;
  }
  /** @param bool */
  public function setFreeValetParking($freeValetParking)
  {
    $this->freeValetParking = $freeValetParking;
  }
  /** @return bool */
  public function getFreeValetParking()
  {
    return $this->freeValetParking;
  }
  /** @param string */
  public function setFreeValetParkingException($freeValetParkingException)
  {
    $this->freeValetParkingException = $freeValetParkingException;
  }
  /** @return string */
  public function getFreeValetParkingException()
  {
    return $this->freeValetParkingException;
  }
  /** @param bool */
  public function setParkingAvailable($parkingAvailable)
  {
    $this->parkingAvailable = $parkingAvailable;
  }
  /** @return bool */
  public function getParkingAvailable()
  {
    return $this->parkingAvailable;
  }
  /** @param string */
  public function setParkingAvailableException($parkingAvailableException)
  {
    $this->parkingAvailableException = $parkingAvailableException;
  }
  /** @return string */
  public function getParkingAvailableException()
  {
    return $this->parkingAvailableException;
  }
  /** @param bool */
  public function setSelfParkingAvailable($selfParkingAvailable)
  {
    $this->selfParkingAvailable = $selfParkingAvailable;
  }
  /** @return bool */
  public function getSelfParkingAvailable()
  {
    return $this->selfParkingAvailable;
  }
  /** @param string */
  public function setSelfParkingAvailableException($selfParkingAvailableException)
  {
    $this->selfParkingAvailableException = $selfParkingAvailableException;
  }
  /** @return string */
  public function getSelfParkingAvailableException()
  {
    return $this->selfParkingAvailableException;
  }
  /** @param bool */
  public function setValetParkingAvailable($valetParkingAvailable)
  {
    $this->valetParkingAvailable = $valetParkingAvailable;
  }
  /** @return bool */
  public function getValetParkingAvailable()
  {
    return $this->valetParkingAvailable;
  }
  /** @param string */
  public function setValetParkingAvailableException($valetParkingAvailableException)
  {
    $this->valetParkingAvailableException = $valetParkingAvailableException;
  }
  /** @return string */
  public function getValetParkingAvailableException()
  {
    return $this->valetParkingAvailableException;
  }
}

class PaymentOptions extends \Google\Model
{
  /** @var bool */
  public $cash;
  /** @var string */
  public $cashException;
  /** @var bool */
  public $cheque;
  /** @var string */
  public $chequeException;
  /** @var bool */
  public $creditCard;
  /** @var string */
  public $creditCardException;
  /** @var bool */
  public $debitCard;
  /** @var string */
  public $debitCardException;
  /** @var bool */
  public $mobileNfc;
  /** @var string */
  public $mobileNfcException;

  /** @param bool */
  public function setCash($cash)
  {
    $this->cash = $cash;
  }
  /** @return bool */
  public function getCash()
  {
    return $this->cash;
  }
  /** @param string */
  public function setCashException($cashException)
  {
    $this->cashException = $cashException;
  }
  /** @return string */
  public function getCashException()
  {
    return $this->cashException;
  }
  /** @param bool */
  public function setCheque($cheque)
  {
    $this->cheque = $cheque;
  }
  /** @return bool */
  public function getCheque()
  {
    return $this->cheque;
  }
  /** @param string */
  public function setChequeException($chequeException)
  {
    $this->chequeException = $chequeException;
  }
  /** @return string */
  public function getChequeException()
  {
    return $this->chequeException;
  }
  /** @param bool */
  public function setCreditCard($creditCard)
  {
    $this->creditCard = $creditCard;
  }
  /** @return bool */
  public function getCreditCard()
  {
    return $this->creditCard;
  }
  /** @param string */
  public function setCreditCardException($creditCardException)
  {
    $this->creditCardException = $creditCardException;
  }
  /** @return string */
  public function getCreditCardException()
  {
    return $this->creditCardException;
  }
  /** @param bool */
  public function setDebitCard($debitCard)
  {
    $this->debitCard = $debitCard;
  }
  /** @return bool */
  public function getDebitCard()
  {
    return $this->debitCard;
  }
  /** @param string */
  public function setDebitCardException($debitCardException)
  {
    $this->debitCardException = $debitCardException;
  }
  /** @return string */
  public function getDebitCardException()
  {
    return $this->debitCardException;
  }
  /** @param bool */
  public function setMobileNfc($mobileNfc)
  {
    $this->mobileNfc = $mobileNfc;
  }
  /** @return bool */
  public function getMobileNfc()
  {
    return $this->mobileNfc;
  }
  /** @param string */
  public function setMobileNfcException($mobileNfcException)
  {
    $this->mobileNfcException = $mobileNfcException;
  }
  /** @return string */
  public function getMobileNfcException()
  {
    return $this->mobileNfcException;
  }
}

class PersonalProtection extends \Google\Model
{
  /** @var bool */
  public $commonAreasOfferSanitizingItems;
  /** @var string */
  public $commonAreasOfferSanitizingItemsException;
  /** @var bool */
  public $faceMaskRequired;
  /** @var string */
  public $faceMaskRequiredException;
  /** @var bool */
  public $guestRoomHygieneKitsAvailable;
  /** @var string */
  public $guestRoomHygieneKitsAvailableException;
  /** @var bool */
  public $protectiveEquipmentAvailable;
  /** @var string */
  public $protectiveEquipmentAvailableException;

  /** @param bool */
  public function setCommonAreasOfferSanitizingItems($commonAreasOfferSanitizingItems)
  {
    $this->commonAreasOfferSanitizingItems = $commonAreasOfferSanitizingItems;
  }
  /** @return bool */
  public function getCommonAreasOfferSanitizingItems()
  {
    return $this->commonAreasOfferSanitizingItems;
  }
  /** @param string */
  public function setCommonAreasOfferSanitizingItemsException($commonAreasOfferSanitizingItemsException)
  {
    $this->commonAreasOfferSanitizingItemsException = $commonAreasOfferSanitizingItemsException;
  }
  /** @return string */
  public function getCommonAreasOfferSanitizingItemsException()
  {
    return $this->commonAreasOfferSanitizingItemsException;
  }
  /** @param bool */
  public function setFaceMaskRequired($faceMaskRequired)
  {
    $this->faceMaskRequired = $faceMaskRequired;
  }
  /** @return bool */
  public function getFaceMaskRequired()
  {
    return $this->faceMaskRequired;
  }
  /** @param string */
  public function setFaceMaskRequiredException($faceMaskRequiredException)
  {
    $this->faceMaskRequiredException = $faceMaskRequiredException;
  }
  /** @return string */
  public function getFaceMaskRequiredException()
  {
    return $this->faceMaskRequiredException;
  }
  /** @param bool */
  public function setGuestRoomHygieneKitsAvailable($guestRoomHygieneKitsAvailable)
  {
    $this->guestRoomHygieneKitsAvailable = $guestRoomHygieneKitsAvailable;
  }
  /** @return bool */
  public function getGuestRoomHygieneKitsAvailable()
  {
    return $this->guestRoomHygieneKitsAvailable;
  }
  /** @param string */
  public function setGuestRoomHygieneKitsAvailableException($guestRoomHygieneKitsAvailableException)
  {
    $this->guestRoomHygieneKitsAvailableException = $guestRoomHygieneKitsAvailableException;
  }
  /** @return string */
  public function getGuestRoomHygieneKitsAvailableException()
  {
    return $this->guestRoomHygieneKitsAvailableException;
  }
  /** @param bool */
  public function setProtectiveEquipmentAvailable($protectiveEquipmentAvailable)
  {
    $this->protectiveEquipmentAvailable = $protectiveEquipmentAvailable;
  }
  /** @return bool */
  public function getProtectiveEquipmentAvailable()
  {
    return $this->protectiveEquipmentAvailable;
  }
  /** @param string */
  public function setProtectiveEquipmentAvailableException($protectiveEquipmentAvailableException)
  {
    $this->protectiveEquipmentAvailableException = $protectiveEquipmentAvailableException;
  }
  /** @return string */
  public function getProtectiveEquipmentAvailableException()
  {
    return $this->protectiveEquipmentAvailableException;
  }
}

class Pets extends \Google\Model
{
  /** @var bool */
  public $catsAllowed;
  /** @var string */
  public $catsAllowedException;
  /** @var bool */
  public $dogsAllowed;
  /** @var string */
  public $dogsAllowedException;
  /** @var bool */
  public $petsAllowed;
  /** @var string */
  public $petsAllowedException;
  /** @var bool */
  public $petsAllowedFree;
  /** @var string */
  public $petsAllowedFreeException;

  /** @param bool */
  public function setCatsAllowed($catsAllowed)
  {
    $this->catsAllowed = $catsAllowed;
  }
  /** @return bool */
  public function getCatsAllowed()
  {
    return $this->catsAllowed;
  }
  /** @param string */
  public function setCatsAllowedException($catsAllowedException)
  {
    $this->catsAllowedException = $catsAllowedException;
  }
  /** @return string */
  public function getCatsAllowedException()
  {
    return $this->catsAllowedException;
  }
  /** @param bool */
  public function setDogsAllowed($dogsAllowed)
  {
    $this->dogsAllowed = $dogsAllowed;
  }
  /** @return bool */
  public function getDogsAllowed()
  {
    return $this->dogsAllowed;
  }
  /** @param string */
  public function setDogsAllowedException($dogsAllowedException)
  {
    $this->dogsAllowedException = $dogsAllowedException;
  }
  /** @return string */
  public function getDogsAllowedException()
  {
    return $this->dogsAllowedException;
  }
  /** @param bool */
  public function setPetsAllowed($petsAllowed)
  {
    $this->petsAllowed = $petsAllowed;
  }
  /** @return bool */
  public function getPetsAllowed()
  {
    return $this->petsAllowed;
  }
  /** @param string */
  public function setPetsAllowedException($petsAllowedException)
  {
    $this->petsAllowedException = $petsAllowedException;
  }
  /** @return string */
  public function getPetsAllowedException()
  {
    return $this->petsAllowedException;
  }
  /** @param bool */
  public function setPetsAllowedFree($petsAllowedFree)
  {
    $this->petsAllowedFree = $petsAllowedFree;
  }
  /** @return bool */
  public function getPetsAllowedFree()
  {
    return $this->petsAllowedFree;
  }
  /** @param string */
  public function setPetsAllowedFreeException($petsAllowedFreeException)
  {
    $this->petsAllowedFreeException = $petsAllowedFreeException;
  }
  /** @return string */
  public function getPetsAllowedFreeException()
  {
    return $this->petsAllowedFreeException;
  }
}

class PhysicalDistancing extends \Google\Model
{
  /** @var bool */
  public $commonAreasPhysicalDistancingArranged;
  /** @var string */
  public $commonAreasPhysicalDistancingArrangedException;
  /** @var bool */
  public $physicalDistancingRequired;
  /** @var string */
  public $physicalDistancingRequiredException;
  /** @var bool */
  public $safetyDividers;
  /** @var string */
  public $safetyDividersException;
  /** @var bool */
  public $sharedAreasLimitedOccupancy;
  /** @var string */
  public $sharedAreasLimitedOccupancyException;
  /** @var bool */
  public $wellnessAreasHavePrivateSpaces;
  /** @var string */
  public $wellnessAreasHavePrivateSpacesException;

  /** @param bool */
  public function setCommonAreasPhysicalDistancingArranged($commonAreasPhysicalDistancingArranged)
  {
    $this->commonAreasPhysicalDistancingArranged = $commonAreasPhysicalDistancingArranged;
  }
  /** @return bool */
  public function getCommonAreasPhysicalDistancingArranged()
  {
    return $this->commonAreasPhysicalDistancingArranged;
  }
  /** @param string */
  public function setCommonAreasPhysicalDistancingArrangedException($commonAreasPhysicalDistancingArrangedException)
  {
    $this->commonAreasPhysicalDistancingArrangedException = $commonAreasPhysicalDistancingArrangedException;
  }
  /** @return string */
  public function getCommonAreasPhysicalDistancingArrangedException()
  {
    return $this->commonAreasPhysicalDistancingArrangedException;
  }
  /** @param bool */
  public function setPhysicalDistancingRequired($physicalDistancingRequired)
  {
    $this->physicalDistancingRequired = $physicalDistancingRequired;
  }
  /** @return bool */
  public function getPhysicalDistancingRequired()
  {
    return $this->physicalDistancingRequired;
  }
  /** @param string */
  public function setPhysicalDistancingRequiredException($physicalDistancingRequiredException)
  {
    $this->physicalDistancingRequiredException = $physicalDistancingRequiredException;
  }
  /** @return string */
  public function getPhysicalDistancingRequiredException()
  {
    return $this->physicalDistancingRequiredException;
  }
  /** @param bool */
  public function setSafetyDividers($safetyDividers)
  {
    $this->safetyDividers = $safetyDividers;
  }
  /** @return bool */
  public function getSafetyDividers()
  {
    return $this->safetyDividers;
  }
  /** @param string */
  public function setSafetyDividersException($safetyDividersException)
  {
    $this->safetyDividersException = $safetyDividersException;
  }
  /** @return string */
  public function getSafetyDividersException()
  {
    return $this->safetyDividersException;
  }
  /** @param bool */
  public function setSharedAreasLimitedOccupancy($sharedAreasLimitedOccupancy)
  {
    $this->sharedAreasLimitedOccupancy = $sharedAreasLimitedOccupancy;
  }
  /** @return bool */
  public function getSharedAreasLimitedOccupancy()
  {
    return $this->sharedAreasLimitedOccupancy;
  }
  /** @param string */
  public function setSharedAreasLimitedOccupancyException($sharedAreasLimitedOccupancyException)
  {
    $this->sharedAreasLimitedOccupancyException = $sharedAreasLimitedOccupancyException;
  }
  /** @return string */
  public function getSharedAreasLimitedOccupancyException()
  {
    return $this->sharedAreasLimitedOccupancyException;
  }
  /** @param bool */
  public function setWellnessAreasHavePrivateSpaces($wellnessAreasHavePrivateSpaces)
  {
    $this->wellnessAreasHavePrivateSpaces = $wellnessAreasHavePrivateSpaces;
  }
  /** @return bool */
  public function getWellnessAreasHavePrivateSpaces()
  {
    return $this->wellnessAreasHavePrivateSpaces;
  }
  /** @param string */
  public function setWellnessAreasHavePrivateSpacesException($wellnessAreasHavePrivateSpacesException)
  {
    $this->wellnessAreasHavePrivateSpacesException = $wellnessAreasHavePrivateSpacesException;
  }
  /** @return string */
  public function getWellnessAreasHavePrivateSpacesException()
  {
    return $this->wellnessAreasHavePrivateSpacesException;
  }
}

class Policies extends \Google\Model
{
  /** @var bool */
  public $allInclusiveAvailable;
  /** @var string */
  public $allInclusiveAvailableException;
  /** @var bool */
  public $allInclusiveOnly;
  /** @var string */
  public $allInclusiveOnlyException;
  /** @var TimeOfDay */
  public $checkinTime;
  /** @var string */
  public $checkinTimeException;
  /** @var TimeOfDay */
  public $checkoutTime;
  /** @var string */
  public $checkoutTimeException;
  /** @var bool */
  public $kidsStayFree;
  /** @var string */
  public $kidsStayFreeException;
  /** @var int */
  public $maxChildAge;
  /** @var string */
  public $maxChildAgeException;
  /** @var int */
  public $maxKidsStayFreeCount;
  /** @var string */
  public $maxKidsStayFreeCountException;
  /** @var PaymentOptions */
  public $paymentOptions;
  /** @var bool */
  public $smokeFreeProperty;
  /** @var string */
  public $smokeFreePropertyException;
  protected $checkinTimeType = TimeOfDay::class;
  protected $checkinTimeDataType = '';
  protected $checkoutTimeType = TimeOfDay::class;
  protected $checkoutTimeDataType = '';
  protected $paymentOptionsType = PaymentOptions::class;
  protected $paymentOptionsDataType = '';
  /** @param bool */
  public function setAllInclusiveAvailable($allInclusiveAvailable)
  {
    $this->allInclusiveAvailable = $allInclusiveAvailable;
  }
  /** @return bool */
  public function getAllInclusiveAvailable()
  {
    return $this->allInclusiveAvailable;
  }
  /** @param string */
  public function setAllInclusiveAvailableException($allInclusiveAvailableException)
  {
    $this->allInclusiveAvailableException = $allInclusiveAvailableException;
  }
  /** @return string */
  public function getAllInclusiveAvailableException()
  {
    return $this->allInclusiveAvailableException;
  }
  /** @param bool */
  public function setAllInclusiveOnly($allInclusiveOnly)
  {
    $this->allInclusiveOnly = $allInclusiveOnly;
  }
  /** @return bool */
  public function getAllInclusiveOnly()
  {
    return $this->allInclusiveOnly;
  }
  /** @param string */
  public function setAllInclusiveOnlyException($allInclusiveOnlyException)
  {
    $this->allInclusiveOnlyException = $allInclusiveOnlyException;
  }
  /** @return string */
  public function getAllInclusiveOnlyException()
  {
    return $this->allInclusiveOnlyException;
  }
  /** @param TimeOfDay */
  public function setCheckinTime(TimeOfDay $checkinTime)
  {
    $this->checkinTime = $checkinTime;
  }
  /** @return TimeOfDay */
  public function getCheckinTime()
  {
    return $this->checkinTime;
  }
  /** @param string */
  public function setCheckinTimeException($checkinTimeException)
  {
    $this->checkinTimeException = $checkinTimeException;
  }
  /** @return string */
  public function getCheckinTimeException()
  {
    return $this->checkinTimeException;
  }
  /** @param TimeOfDay */
  public function setCheckoutTime(TimeOfDay $checkoutTime)
  {
    $this->checkoutTime = $checkoutTime;
  }
  /** @return TimeOfDay */
  public function getCheckoutTime()
  {
    return $this->checkoutTime;
  }
  /** @param string */
  public function setCheckoutTimeException($checkoutTimeException)
  {
    $this->checkoutTimeException = $checkoutTimeException;
  }
  /** @return string */
  public function getCheckoutTimeException()
  {
    return $this->checkoutTimeException;
  }
  /** @param bool */
  public function setKidsStayFree($kidsStayFree)
  {
    $this->kidsStayFree = $kidsStayFree;
  }
  /** @return bool */
  public function getKidsStayFree()
  {
    return $this->kidsStayFree;
  }
  /** @param string */
  public function setKidsStayFreeException($kidsStayFreeException)
  {
    $this->kidsStayFreeException = $kidsStayFreeException;
  }
  /** @return string */
  public function getKidsStayFreeException()
  {
    return $this->kidsStayFreeException;
  }
  /** @param int */
  public function setMaxChildAge($maxChildAge)
  {
    $this->maxChildAge = $maxChildAge;
  }
  /** @return int */
  public function getMaxChildAge()
  {
    return $this->maxChildAge;
  }
  /** @param string */
  public function setMaxChildAgeException($maxChildAgeException)
  {
    $this->maxChildAgeException = $maxChildAgeException;
  }
  /** @return string */
  public function getMaxChildAgeException()
  {
    return $this->maxChildAgeException;
  }
  /** @param int */
  public function setMaxKidsStayFreeCount($maxKidsStayFreeCount)
  {
    $this->maxKidsStayFreeCount = $maxKidsStayFreeCount;
  }
  /** @return int */
  public function getMaxKidsStayFreeCount()
  {
    return $this->maxKidsStayFreeCount;
  }
  /** @param string */
  public function setMaxKidsStayFreeCountException($maxKidsStayFreeCountException)
  {
    $this->maxKidsStayFreeCountException = $maxKidsStayFreeCountException;
  }
  /** @return string */
  public function getMaxKidsStayFreeCountException()
  {
    return $this->maxKidsStayFreeCountException;
  }
  /** @param PaymentOptions */
  public function setPaymentOptions(PaymentOptions $paymentOptions)
  {
    $this->paymentOptions = $paymentOptions;
  }
  /** @return PaymentOptions */
  public function getPaymentOptions()
  {
    return $this->paymentOptions;
  }
  /** @param bool */
  public function setSmokeFreeProperty($smokeFreeProperty)
  {
    $this->smokeFreeProperty = $smokeFreeProperty;
  }
  /** @return bool */
  public function getSmokeFreeProperty()
  {
    return $this->smokeFreeProperty;
  }
  /** @param string */
  public function setSmokeFreePropertyException($smokeFreePropertyException)
  {
    $this->smokeFreePropertyException = $smokeFreePropertyException;
  }
  /** @return string */
  public function getSmokeFreePropertyException()
  {
    return $this->smokeFreePropertyException;
  }
}

class Pools extends \Google\Model
{
  /** @var bool */
  public $adultPool;
  /** @var string */
  public $adultPoolException;
  /** @var bool */
  public $hotTub;
  /** @var string */
  public $hotTubException;
  /** @var bool */
  public $indoorPool;
  /** @var string */
  public $indoorPoolException;
  /** @var int */
  public $indoorPoolsCount;
  /** @var string */
  public $indoorPoolsCountException;
  /** @var bool */
  public $lazyRiver;
  /** @var string */
  public $lazyRiverException;
  /** @var bool */
  public $lifeguard;
  /** @var string */
  public $lifeguardException;
  /** @var bool */
  public $outdoorPool;
  /** @var string */
  public $outdoorPoolException;
  /** @var int */
  public $outdoorPoolsCount;
  /** @var string */
  public $outdoorPoolsCountException;
  /** @var bool */
  public $pool;
  /** @var string */
  public $poolException;
  /** @var int */
  public $poolsCount;
  /** @var string */
  public $poolsCountException;
  /** @var bool */
  public $wadingPool;
  /** @var string */
  public $wadingPoolException;
  /** @var bool */
  public $waterPark;
  /** @var string */
  public $waterParkException;
  /** @var bool */
  public $waterslide;
  /** @var string */
  public $waterslideException;
  /** @var bool */
  public $wavePool;
  /** @var string */
  public $wavePoolException;

  /** @param bool */
  public function setAdultPool($adultPool)
  {
    $this->adultPool = $adultPool;
  }
  /** @return bool */
  public function getAdultPool()
  {
    return $this->adultPool;
  }
  /** @param string */
  public function setAdultPoolException($adultPoolException)
  {
    $this->adultPoolException = $adultPoolException;
  }
  /** @return string */
  public function getAdultPoolException()
  {
    return $this->adultPoolException;
  }
  /** @param bool */
  public function setHotTub($hotTub)
  {
    $this->hotTub = $hotTub;
  }
  /** @return bool */
  public function getHotTub()
  {
    return $this->hotTub;
  }
  /** @param string */
  public function setHotTubException($hotTubException)
  {
    $this->hotTubException = $hotTubException;
  }
  /** @return string */
  public function getHotTubException()
  {
    return $this->hotTubException;
  }
  /** @param bool */
  public function setIndoorPool($indoorPool)
  {
    $this->indoorPool = $indoorPool;
  }
  /** @return bool */
  public function getIndoorPool()
  {
    return $this->indoorPool;
  }
  /** @param string */
  public function setIndoorPoolException($indoorPoolException)
  {
    $this->indoorPoolException = $indoorPoolException;
  }
  /** @return string */
  public function getIndoorPoolException()
  {
    return $this->indoorPoolException;
  }
  /** @param int */
  public function setIndoorPoolsCount($indoorPoolsCount)
  {
    $this->indoorPoolsCount = $indoorPoolsCount;
  }
  /** @return int */
  public function getIndoorPoolsCount()
  {
    return $this->indoorPoolsCount;
  }
  /** @param string */
  public function setIndoorPoolsCountException($indoorPoolsCountException)
  {
    $this->indoorPoolsCountException = $indoorPoolsCountException;
  }
  /** @return string */
  public function getIndoorPoolsCountException()
  {
    return $this->indoorPoolsCountException;
  }
  /** @param bool */
  public function setLazyRiver($lazyRiver)
  {
    $this->lazyRiver = $lazyRiver;
  }
  /** @return bool */
  public function getLazyRiver()
  {
    return $this->lazyRiver;
  }
  /** @param string */
  public function setLazyRiverException($lazyRiverException)
  {
    $this->lazyRiverException = $lazyRiverException;
  }
  /** @return string */
  public function getLazyRiverException()
  {
    return $this->lazyRiverException;
  }
  /** @param bool */
  public function setLifeguard($lifeguard)
  {
    $this->lifeguard = $lifeguard;
  }
  /** @return bool */
  public function getLifeguard()
  {
    return $this->lifeguard;
  }
  /** @param string */
  public function setLifeguardException($lifeguardException)
  {
    $this->lifeguardException = $lifeguardException;
  }
  /** @return string */
  public function getLifeguardException()
  {
    return $this->lifeguardException;
  }
  /** @param bool */
  public function setOutdoorPool($outdoorPool)
  {
    $this->outdoorPool = $outdoorPool;
  }
  /** @return bool */
  public function getOutdoorPool()
  {
    return $this->outdoorPool;
  }
  /** @param string */
  public function setOutdoorPoolException($outdoorPoolException)
  {
    $this->outdoorPoolException = $outdoorPoolException;
  }
  /** @return string */
  public function getOutdoorPoolException()
  {
    return $this->outdoorPoolException;
  }
  /** @param int */
  public function setOutdoorPoolsCount($outdoorPoolsCount)
  {
    $this->outdoorPoolsCount = $outdoorPoolsCount;
  }
  /** @return int */
  public function getOutdoorPoolsCount()
  {
    return $this->outdoorPoolsCount;
  }
  /** @param string */
  public function setOutdoorPoolsCountException($outdoorPoolsCountException)
  {
    $this->outdoorPoolsCountException = $outdoorPoolsCountException;
  }
  /** @return string */
  public function getOutdoorPoolsCountException()
  {
    return $this->outdoorPoolsCountException;
  }
  /** @param bool */
  public function setPool($pool)
  {
    $this->pool = $pool;
  }
  /** @return bool */
  public function getPool()
  {
    return $this->pool;
  }
  /** @param string */
  public function setPoolException($poolException)
  {
    $this->poolException = $poolException;
  }
  /** @return string */
  public function getPoolException()
  {
    return $this->poolException;
  }
  /** @param int */
  public function setPoolsCount($poolsCount)
  {
    $this->poolsCount = $poolsCount;
  }
  /** @return int */
  public function getPoolsCount()
  {
    return $this->poolsCount;
  }
  /** @param string */
  public function setPoolsCountException($poolsCountException)
  {
    $this->poolsCountException = $poolsCountException;
  }
  /** @return string */
  public function getPoolsCountException()
  {
    return $this->poolsCountException;
  }
  /** @param bool */
  public function setWadingPool($wadingPool)
  {
    $this->wadingPool = $wadingPool;
  }
  /** @return bool */
  public function getWadingPool()
  {
    return $this->wadingPool;
  }
  /** @param string */
  public function setWadingPoolException($wadingPoolException)
  {
    $this->wadingPoolException = $wadingPoolException;
  }
  /** @return string */
  public function getWadingPoolException()
  {
    return $this->wadingPoolException;
  }
  /** @param bool */
  public function setWaterPark($waterPark)
  {
    $this->waterPark = $waterPark;
  }
  /** @return bool */
  public function getWaterPark()
  {
    return $this->waterPark;
  }
  /** @param string */
  public function setWaterParkException($waterParkException)
  {
    $this->waterParkException = $waterParkException;
  }
  /** @return string */
  public function getWaterParkException()
  {
    return $this->waterParkException;
  }
  /** @param bool */
  public function setWaterslide($waterslide)
  {
    $this->waterslide = $waterslide;
  }
  /** @return bool */
  public function getWaterslide()
  {
    return $this->waterslide;
  }
  /** @param string */
  public function setWaterslideException($waterslideException)
  {
    $this->waterslideException = $waterslideException;
  }
  /** @return string */
  public function getWaterslideException()
  {
    return $this->waterslideException;
  }
  /** @param bool */
  public function setWavePool($wavePool)
  {
    $this->wavePool = $wavePool;
  }
  /** @return bool */
  public function getWavePool()
  {
    return $this->wavePool;
  }
  /** @param string */
  public function setWavePoolException($wavePoolException)
  {
    $this->wavePoolException = $wavePoolException;
  }
  /** @return string */
  public function getWavePoolException()
  {
    return $this->wavePoolException;
  }
}

class Property extends \Google\Model
{
  /** @var int */
  public $builtYear;
  /** @var string */
  public $builtYearException;
  /** @var int */
  public $floorsCount;
  /** @var string */
  public $floorsCountException;
  /** @var int */
  public $lastRenovatedYear;
  /** @var string */
  public $lastRenovatedYearException;
  /** @var int */
  public $roomsCount;
  /** @var string */
  public $roomsCountException;

  /** @param int */
  public function setBuiltYear($builtYear)
  {
    $this->builtYear = $builtYear;
  }
  /** @return int */
  public function getBuiltYear()
  {
    return $this->builtYear;
  }
  /** @param string */
  public function setBuiltYearException($builtYearException)
  {
    $this->builtYearException = $builtYearException;
  }
  /** @return string */
  public function getBuiltYearException()
  {
    return $this->builtYearException;
  }
  /** @param int */
  public function setFloorsCount($floorsCount)
  {
    $this->floorsCount = $floorsCount;
  }
  /** @return int */
  public function getFloorsCount()
  {
    return $this->floorsCount;
  }
  /** @param string */
  public function setFloorsCountException($floorsCountException)
  {
    $this->floorsCountException = $floorsCountException;
  }
  /** @return string */
  public function getFloorsCountException()
  {
    return $this->floorsCountException;
  }
  /** @param int */
  public function setLastRenovatedYear($lastRenovatedYear)
  {
    $this->lastRenovatedYear = $lastRenovatedYear;
  }
  /** @return int */
  public function getLastRenovatedYear()
  {
    return $this->lastRenovatedYear;
  }
  /** @param string */
  public function setLastRenovatedYearException($lastRenovatedYearException)
  {
    $this->lastRenovatedYearException = $lastRenovatedYearException;
  }
  /** @return string */
  public function getLastRenovatedYearException()
  {
    return $this->lastRenovatedYearException;
  }
  /** @param int */
  public function setRoomsCount($roomsCount)
  {
    $this->roomsCount = $roomsCount;
  }
  /** @return int */
  public function getRoomsCount()
  {
    return $this->roomsCount;
  }
  /** @param string */
  public function setRoomsCountException($roomsCountException)
  {
    $this->roomsCountException = $roomsCountException;
  }
  /** @return string */
  public function getRoomsCountException()
  {
    return $this->roomsCountException;
  }
}

class Services extends \Google\Collection
{
  /** @var bool */
  public $baggageStorage;
  /** @var string */
  public $baggageStorageException;
  /** @var bool */
  public $concierge;
  /** @var string */
  public $conciergeException;
  /** @var bool */
  public $convenienceStore;
  /** @var string */
  public $convenienceStoreException;
  /** @var bool */
  public $currencyExchange;
  /** @var string */
  public $currencyExchangeException;
  /** @var bool */
  public $elevator;
  /** @var string */
  public $elevatorException;
  /** @var bool */
  public $frontDesk;
  /** @var string */
  public $frontDeskException;
  /** @var bool */
  public $fullServiceLaundry;
  /** @var string */
  public $fullServiceLaundryException;
  /** @var bool */
  public $giftShop;
  /** @var string */
  public $giftShopException;
  /** @var LanguageSpoken[] */
  public $languagesSpoken;
  /** @var bool */
  public $selfServiceLaundry;
  /** @var string */
  public $selfServiceLaundryException;
  /** @var bool */
  public $socialHour;
  /** @var string */
  public $socialHourException;
  /** @var bool */
  public $twentyFourHourFrontDesk;
  /** @var string */
  public $twentyFourHourFrontDeskException;
  /** @var bool */
  public $wakeUpCalls;
  /** @var string */
  public $wakeUpCallsException;
  protected $collection_key = 'languagesSpoken';
  protected $languagesSpokenType = LanguageSpoken::class;
  protected $languagesSpokenDataType = 'array';
  /** @param bool */
  public function setBaggageStorage($baggageStorage)
  {
    $this->baggageStorage = $baggageStorage;
  }
  /** @return bool */
  public function getBaggageStorage()
  {
    return $this->baggageStorage;
  }
  /** @param string */
  public function setBaggageStorageException($baggageStorageException)
  {
    $this->baggageStorageException = $baggageStorageException;
  }
  /** @return string */
  public function getBaggageStorageException()
  {
    return $this->baggageStorageException;
  }
  /** @param bool */
  public function setConcierge($concierge)
  {
    $this->concierge = $concierge;
  }
  /** @return bool */
  public function getConcierge()
  {
    return $this->concierge;
  }
  /** @param string */
  public function setConciergeException($conciergeException)
  {
    $this->conciergeException = $conciergeException;
  }
  /** @return string */
  public function getConciergeException()
  {
    return $this->conciergeException;
  }
  /** @param bool */
  public function setConvenienceStore($convenienceStore)
  {
    $this->convenienceStore = $convenienceStore;
  }
  /** @return bool */
  public function getConvenienceStore()
  {
    return $this->convenienceStore;
  }
  /** @param string */
  public function setConvenienceStoreException($convenienceStoreException)
  {
    $this->convenienceStoreException = $convenienceStoreException;
  }
  /** @return string */
  public function getConvenienceStoreException()
  {
    return $this->convenienceStoreException;
  }
  /** @param bool */
  public function setCurrencyExchange($currencyExchange)
  {
    $this->currencyExchange = $currencyExchange;
  }
  /** @return bool */
  public function getCurrencyExchange()
  {
    return $this->currencyExchange;
  }
  /** @param string */
  public function setCurrencyExchangeException($currencyExchangeException)
  {
    $this->currencyExchangeException = $currencyExchangeException;
  }
  /** @return string */
  public function getCurrencyExchangeException()
  {
    return $this->currencyExchangeException;
  }
  /** @param bool */
  public function setElevator($elevator)
  {
    $this->elevator = $elevator;
  }
  /** @return bool */
  public function getElevator()
  {
    return $this->elevator;
  }
  /** @param string */
  public function setElevatorException($elevatorException)
  {
    $this->elevatorException = $elevatorException;
  }
  /** @return string */
  public function getElevatorException()
  {
    return $this->elevatorException;
  }
  /** @param bool */
  public function setFrontDesk($frontDesk)
  {
    $this->frontDesk = $frontDesk;
  }
  /** @return bool */
  public function getFrontDesk()
  {
    return $this->frontDesk;
  }
  /** @param string */
  public function setFrontDeskException($frontDeskException)
  {
    $this->frontDeskException = $frontDeskException;
  }
  /** @return string */
  public function getFrontDeskException()
  {
    return $this->frontDeskException;
  }
  /** @param bool */
  public function setFullServiceLaundry($fullServiceLaundry)
  {
    $this->fullServiceLaundry = $fullServiceLaundry;
  }
  /** @return bool */
  public function getFullServiceLaundry()
  {
    return $this->fullServiceLaundry;
  }
  /** @param string */
  public function setFullServiceLaundryException($fullServiceLaundryException)
  {
    $this->fullServiceLaundryException = $fullServiceLaundryException;
  }
  /** @return string */
  public function getFullServiceLaundryException()
  {
    return $this->fullServiceLaundryException;
  }
  /** @param bool */
  public function setGiftShop($giftShop)
  {
    $this->giftShop = $giftShop;
  }
  /** @return bool */
  public function getGiftShop()
  {
    return $this->giftShop;
  }
  /** @param string */
  public function setGiftShopException($giftShopException)
  {
    $this->giftShopException = $giftShopException;
  }
  /** @return string */
  public function getGiftShopException()
  {
    return $this->giftShopException;
  }
  /** @param LanguageSpoken[] */
  public function setLanguagesSpoken($languagesSpoken)
  {
    $this->languagesSpoken = $languagesSpoken;
  }
  /** @return LanguageSpoken[] */
  public function getLanguagesSpoken()
  {
    return $this->languagesSpoken;
  }
  /** @param bool */
  public function setSelfServiceLaundry($selfServiceLaundry)
  {
    $this->selfServiceLaundry = $selfServiceLaundry;
  }
  /** @return bool */
  public function getSelfServiceLaundry()
  {
    return $this->selfServiceLaundry;
  }
  /** @param string */
  public function setSelfServiceLaundryException($selfServiceLaundryException)
  {
    $this->selfServiceLaundryException = $selfServiceLaundryException;
  }
  /** @return string */
  public function getSelfServiceLaundryException()
  {
    return $this->selfServiceLaundryException;
  }
  /** @param bool */
  public function setSocialHour($socialHour)
  {
    $this->socialHour = $socialHour;
  }
  /** @return bool */
  public function getSocialHour()
  {
    return $this->socialHour;
  }
  /** @param string */
  public function setSocialHourException($socialHourException)
  {
    $this->socialHourException = $socialHourException;
  }
  /** @return string */
  public function getSocialHourException()
  {
    return $this->socialHourException;
  }
  /** @param bool */
  public function setTwentyFourHourFrontDesk($twentyFourHourFrontDesk)
  {
    $this->twentyFourHourFrontDesk = $twentyFourHourFrontDesk;
  }
  /** @return bool */
  public function getTwentyFourHourFrontDesk()
  {
    return $this->twentyFourHourFrontDesk;
  }
  /** @param string */
  public function setTwentyFourHourFrontDeskException($twentyFourHourFrontDeskException)
  {
    $this->twentyFourHourFrontDeskException = $twentyFourHourFrontDeskException;
  }
  /** @return string */
  public function getTwentyFourHourFrontDeskException()
  {
    return $this->twentyFourHourFrontDeskException;
  }
  /** @param bool */
  public function setWakeUpCalls($wakeUpCalls)
  {
    $this->wakeUpCalls = $wakeUpCalls;
  }
  /** @return bool */
  public function getWakeUpCalls()
  {
    return $this->wakeUpCalls;
  }
  /** @param string */
  public function setWakeUpCallsException($wakeUpCallsException)
  {
    $this->wakeUpCallsException = $wakeUpCallsException;
  }
  /** @return string */
  public function getWakeUpCallsException()
  {
    return $this->wakeUpCallsException;
  }
}

class Sustainability extends \Google\Model
{
  /** @var EnergyEfficiency */
  public $energyEfficiency;
  /** @var SustainabilityCertifications */
  public $sustainabilityCertifications;
  /** @var SustainableSourcing */
  public $sustainableSourcing;
  /** @var WasteReduction */
  public $wasteReduction;
  /** @var WaterConservation */
  public $waterConservation;
  protected $energyEfficiencyType = EnergyEfficiency::class;
  protected $energyEfficiencyDataType = '';
  protected $sustainabilityCertificationsType = SustainabilityCertifications::class;
  protected $sustainabilityCertificationsDataType = '';
  protected $sustainableSourcingType = SustainableSourcing::class;
  protected $sustainableSourcingDataType = '';
  protected $wasteReductionType = WasteReduction::class;
  protected $wasteReductionDataType = '';
  protected $waterConservationType = WaterConservation::class;
  protected $waterConservationDataType = '';
  /** @param EnergyEfficiency */
  public function setEnergyEfficiency(EnergyEfficiency $energyEfficiency)
  {
    $this->energyEfficiency = $energyEfficiency;
  }
  /** @return EnergyEfficiency */
  public function getEnergyEfficiency()
  {
    return $this->energyEfficiency;
  }
  /** @param SustainabilityCertifications */
  public function setSustainabilityCertifications(SustainabilityCertifications $sustainabilityCertifications)
  {
    $this->sustainabilityCertifications = $sustainabilityCertifications;
  }
  /** @return SustainabilityCertifications */
  public function getSustainabilityCertifications()
  {
    return $this->sustainabilityCertifications;
  }
  /** @param SustainableSourcing */
  public function setSustainableSourcing(SustainableSourcing $sustainableSourcing)
  {
    $this->sustainableSourcing = $sustainableSourcing;
  }
  /** @return SustainableSourcing */
  public function getSustainableSourcing()
  {
    return $this->sustainableSourcing;
  }
  /** @param WasteReduction */
  public function setWasteReduction(WasteReduction $wasteReduction)
  {
    $this->wasteReduction = $wasteReduction;
  }
  /** @return WasteReduction */
  public function getWasteReduction()
  {
    return $this->wasteReduction;
  }
  /** @param WaterConservation */
  public function setWaterConservation(WaterConservation $waterConservation)
  {
    $this->waterConservation = $waterConservation;
  }
  /** @return WaterConservation */
  public function getWaterConservation()
  {
    return $this->waterConservation;
  }
}

class SustainabilityCertifications extends \Google\Collection
{
  /** @var string */
  public $breeamCertification;
  /** @var string */
  public $breeamCertificationException;
  /** @var EcoCertification[] */
  public $ecoCertifications;
  /** @var string */
  public $leedCertification;
  /** @var string */
  public $leedCertificationException;
  protected $collection_key = 'ecoCertifications';
  protected $ecoCertificationsType = EcoCertification::class;
  protected $ecoCertificationsDataType = 'array';
  /** @param string */
  public function setBreeamCertification($breeamCertification)
  {
    $this->breeamCertification = $breeamCertification;
  }
  /** @return string */
  public function getBreeamCertification()
  {
    return $this->breeamCertification;
  }
  /** @param string */
  public function setBreeamCertificationException($breeamCertificationException)
  {
    $this->breeamCertificationException = $breeamCertificationException;
  }
  /** @return string */
  public function getBreeamCertificationException()
  {
    return $this->breeamCertificationException;
  }
  /** @param EcoCertification[] */
  public function setEcoCertifications($ecoCertifications)
  {
    $this->ecoCertifications = $ecoCertifications;
  }
  /** @return EcoCertification[] */
  public function getEcoCertifications()
  {
    return $this->ecoCertifications;
  }
  /** @param string */
  public function setLeedCertification($leedCertification)
  {
    $this->leedCertification = $leedCertification;
  }
  /** @return string */
  public function getLeedCertification()
  {
    return $this->leedCertification;
  }
  /** @param string */
  public function setLeedCertificationException($leedCertificationException)
  {
    $this->leedCertificationException = $leedCertificationException;
  }
  /** @return string */
  public function getLeedCertificationException()
  {
    return $this->leedCertificationException;
  }
}

class SustainableSourcing extends \Google\Model
{
  /** @var bool */
  public $ecoFriendlyToiletries;
  /** @var string */
  public $ecoFriendlyToiletriesException;
  /** @var bool */
  public $locallySourcedFoodAndBeverages;
  /** @var string */
  public $locallySourcedFoodAndBeveragesException;
  /** @var bool */
  public $organicCageFreeEggs;
  /** @var string */
  public $organicCageFreeEggsException;
  /** @var bool */
  public $organicFoodAndBeverages;
  /** @var string */
  public $organicFoodAndBeveragesException;
  /** @var bool */
  public $responsiblePurchasingPolicy;
  /** @var string */
  public $responsiblePurchasingPolicyException;
  /** @var bool */
  public $responsiblySourcesSeafood;
  /** @var string */
  public $responsiblySourcesSeafoodException;
  /** @var bool */
  public $veganMeals;
  /** @var string */
  public $veganMealsException;
  /** @var bool */
  public $vegetarianMeals;
  /** @var string */
  public $vegetarianMealsException;

  /** @param bool */
  public function setEcoFriendlyToiletries($ecoFriendlyToiletries)
  {
    $this->ecoFriendlyToiletries = $ecoFriendlyToiletries;
  }
  /** @return bool */
  public function getEcoFriendlyToiletries()
  {
    return $this->ecoFriendlyToiletries;
  }
  /** @param string */
  public function setEcoFriendlyToiletriesException($ecoFriendlyToiletriesException)
  {
    $this->ecoFriendlyToiletriesException = $ecoFriendlyToiletriesException;
  }
  /** @return string */
  public function getEcoFriendlyToiletriesException()
  {
    return $this->ecoFriendlyToiletriesException;
  }
  /** @param bool */
  public function setLocallySourcedFoodAndBeverages($locallySourcedFoodAndBeverages)
  {
    $this->locallySourcedFoodAndBeverages = $locallySourcedFoodAndBeverages;
  }
  /** @return bool */
  public function getLocallySourcedFoodAndBeverages()
  {
    return $this->locallySourcedFoodAndBeverages;
  }
  /** @param string */
  public function setLocallySourcedFoodAndBeveragesException($locallySourcedFoodAndBeveragesException)
  {
    $this->locallySourcedFoodAndBeveragesException = $locallySourcedFoodAndBeveragesException;
  }
  /** @return string */
  public function getLocallySourcedFoodAndBeveragesException()
  {
    return $this->locallySourcedFoodAndBeveragesException;
  }
  /** @param bool */
  public function setOrganicCageFreeEggs($organicCageFreeEggs)
  {
    $this->organicCageFreeEggs = $organicCageFreeEggs;
  }
  /** @return bool */
  public function getOrganicCageFreeEggs()
  {
    return $this->organicCageFreeEggs;
  }
  /** @param string */
  public function setOrganicCageFreeEggsException($organicCageFreeEggsException)
  {
    $this->organicCageFreeEggsException = $organicCageFreeEggsException;
  }
  /** @return string */
  public function getOrganicCageFreeEggsException()
  {
    return $this->organicCageFreeEggsException;
  }
  /** @param bool */
  public function setOrganicFoodAndBeverages($organicFoodAndBeverages)
  {
    $this->organicFoodAndBeverages = $organicFoodAndBeverages;
  }
  /** @return bool */
  public function getOrganicFoodAndBeverages()
  {
    return $this->organicFoodAndBeverages;
  }
  /** @param string */
  public function setOrganicFoodAndBeveragesException($organicFoodAndBeveragesException)
  {
    $this->organicFoodAndBeveragesException = $organicFoodAndBeveragesException;
  }
  /** @return string */
  public function getOrganicFoodAndBeveragesException()
  {
    return $this->organicFoodAndBeveragesException;
  }
  /** @param bool */
  public function setResponsiblePurchasingPolicy($responsiblePurchasingPolicy)
  {
    $this->responsiblePurchasingPolicy = $responsiblePurchasingPolicy;
  }
  /** @return bool */
  public function getResponsiblePurchasingPolicy()
  {
    return $this->responsiblePurchasingPolicy;
  }
  /** @param string */
  public function setResponsiblePurchasingPolicyException($responsiblePurchasingPolicyException)
  {
    $this->responsiblePurchasingPolicyException = $responsiblePurchasingPolicyException;
  }
  /** @return string */
  public function getResponsiblePurchasingPolicyException()
  {
    return $this->responsiblePurchasingPolicyException;
  }
  /** @param bool */
  public function setResponsiblySourcesSeafood($responsiblySourcesSeafood)
  {
    $this->responsiblySourcesSeafood = $responsiblySourcesSeafood;
  }
  /** @return bool */
  public function getResponsiblySourcesSeafood()
  {
    return $this->responsiblySourcesSeafood;
  }
  /** @param string */
  public function setResponsiblySourcesSeafoodException($responsiblySourcesSeafoodException)
  {
    $this->responsiblySourcesSeafoodException = $responsiblySourcesSeafoodException;
  }
  /** @return string */
  public function getResponsiblySourcesSeafoodException()
  {
    return $this->responsiblySourcesSeafoodException;
  }
  /** @param bool */
  public function setVeganMeals($veganMeals)
  {
    $this->veganMeals = $veganMeals;
  }
  /** @return bool */
  public function getVeganMeals()
  {
    return $this->veganMeals;
  }
  /** @param string */
  public function setVeganMealsException($veganMealsException)
  {
    $this->veganMealsException = $veganMealsException;
  }
  /** @return string */
  public function getVeganMealsException()
  {
    return $this->veganMealsException;
  }
  /** @param bool */
  public function setVegetarianMeals($vegetarianMeals)
  {
    $this->vegetarianMeals = $vegetarianMeals;
  }
  /** @return bool */
  public function getVegetarianMeals()
  {
    return $this->vegetarianMeals;
  }
  /** @param string */
  public function setVegetarianMealsException($vegetarianMealsException)
  {
    $this->vegetarianMealsException = $vegetarianMealsException;
  }
  /** @return string */
  public function getVegetarianMealsException()
  {
    return $this->vegetarianMealsException;
  }
}

class TimeOfDay extends \Google\Model
{
  /** @var int */
  public $hours;
  /** @var int */
  public $minutes;
  /** @var int */
  public $nanos;
  /** @var int */
  public $seconds;

  /** @param int */
  public function setHours($hours)
  {
    $this->hours = $hours;
  }
  /** @return int */
  public function getHours()
  {
    return $this->hours;
  }
  /** @param int */
  public function setMinutes($minutes)
  {
    $this->minutes = $minutes;
  }
  /** @return int */
  public function getMinutes()
  {
    return $this->minutes;
  }
  /** @param int */
  public function setNanos($nanos)
  {
    $this->nanos = $nanos;
  }
  /** @return int */
  public function getNanos()
  {
    return $this->nanos;
  }
  /** @param int */
  public function setSeconds($seconds)
  {
    $this->seconds = $seconds;
  }
  /** @return int */
  public function getSeconds()
  {
    return $this->seconds;
  }
}

class Transportation extends \Google\Model
{
  /** @var bool */
  public $airportShuttle;
  /** @var string */
  public $airportShuttleException;
  /** @var bool */
  public $carRentalOnProperty;
  /** @var string */
  public $carRentalOnPropertyException;
  /** @var bool */
  public $freeAirportShuttle;
  /** @var string */
  public $freeAirportShuttleException;
  /** @var bool */
  public $freePrivateCarService;
  /** @var string */
  public $freePrivateCarServiceException;
  /** @var bool */
  public $localShuttle;
  /** @var string */
  public $localShuttleException;
  /** @var bool */
  public $privateCarService;
  /** @var string */
  public $privateCarServiceException;
  /** @var bool */
  public $transfer;
  /** @var string */
  public $transferException;

  /** @param bool */
  public function setAirportShuttle($airportShuttle)
  {
    $this->airportShuttle = $airportShuttle;
  }
  /** @return bool */
  public function getAirportShuttle()
  {
    return $this->airportShuttle;
  }
  /** @param string */
  public function setAirportShuttleException($airportShuttleException)
  {
    $this->airportShuttleException = $airportShuttleException;
  }
  /** @return string */
  public function getAirportShuttleException()
  {
    return $this->airportShuttleException;
  }
  /** @param bool */
  public function setCarRentalOnProperty($carRentalOnProperty)
  {
    $this->carRentalOnProperty = $carRentalOnProperty;
  }
  /** @return bool */
  public function getCarRentalOnProperty()
  {
    return $this->carRentalOnProperty;
  }
  /** @param string */
  public function setCarRentalOnPropertyException($carRentalOnPropertyException)
  {
    $this->carRentalOnPropertyException = $carRentalOnPropertyException;
  }
  /** @return string */
  public function getCarRentalOnPropertyException()
  {
    return $this->carRentalOnPropertyException;
  }
  /** @param bool */
  public function setFreeAirportShuttle($freeAirportShuttle)
  {
    $this->freeAirportShuttle = $freeAirportShuttle;
  }
  /** @return bool */
  public function getFreeAirportShuttle()
  {
    return $this->freeAirportShuttle;
  }
  /** @param string */
  public function setFreeAirportShuttleException($freeAirportShuttleException)
  {
    $this->freeAirportShuttleException = $freeAirportShuttleException;
  }
  /** @return string */
  public function getFreeAirportShuttleException()
  {
    return $this->freeAirportShuttleException;
  }
  /** @param bool */
  public function setFreePrivateCarService($freePrivateCarService)
  {
    $this->freePrivateCarService = $freePrivateCarService;
  }
  /** @return bool */
  public function getFreePrivateCarService()
  {
    return $this->freePrivateCarService;
  }
  /** @param string */
  public function setFreePrivateCarServiceException($freePrivateCarServiceException)
  {
    $this->freePrivateCarServiceException = $freePrivateCarServiceException;
  }
  /** @return string */
  public function getFreePrivateCarServiceException()
  {
    return $this->freePrivateCarServiceException;
  }
  /** @param bool */
  public function setLocalShuttle($localShuttle)
  {
    $this->localShuttle = $localShuttle;
  }
  /** @return bool */
  public function getLocalShuttle()
  {
    return $this->localShuttle;
  }
  /** @param string */
  public function setLocalShuttleException($localShuttleException)
  {
    $this->localShuttleException = $localShuttleException;
  }
  /** @return string */
  public function getLocalShuttleException()
  {
    return $this->localShuttleException;
  }
  /** @param bool */
  public function setPrivateCarService($privateCarService)
  {
    $this->privateCarService = $privateCarService;
  }
  /** @return bool */
  public function getPrivateCarService()
  {
    return $this->privateCarService;
  }
  /** @param string */
  public function setPrivateCarServiceException($privateCarServiceException)
  {
    $this->privateCarServiceException = $privateCarServiceException;
  }
  /** @return string */
  public function getPrivateCarServiceException()
  {
    return $this->privateCarServiceException;
  }
  /** @param bool */
  public function setTransfer($transfer)
  {
    $this->transfer = $transfer;
  }
  /** @return bool */
  public function getTransfer()
  {
    return $this->transfer;
  }
  /** @param string */
  public function setTransferException($transferException)
  {
    $this->transferException = $transferException;
  }
  /** @return string */
  public function getTransferException()
  {
    return $this->transferException;
  }
}

class ViewsFromUnit extends \Google\Model
{
  /** @var bool */
  public $beachView;
  /** @var string */
  public $beachViewException;
  /** @var bool */
  public $cityView;
  /** @var string */
  public $cityViewException;
  /** @var bool */
  public $gardenView;
  /** @var string */
  public $gardenViewException;
  /** @var bool */
  public $lakeView;
  /** @var string */
  public $lakeViewException;
  /** @var bool */
  public $landmarkView;
  /** @var string */
  public $landmarkViewException;
  /** @var bool */
  public $oceanView;
  /** @var string */
  public $oceanViewException;
  /** @var bool */
  public $poolView;
  /** @var string */
  public $poolViewException;
  /** @var bool */
  public $valleyView;
  /** @var string */
  public $valleyViewException;

  /** @param bool */
  public function setBeachView($beachView)
  {
    $this->beachView = $beachView;
  }
  /** @return bool */
  public function getBeachView()
  {
    return $this->beachView;
  }
  /** @param string */
  public function setBeachViewException($beachViewException)
  {
    $this->beachViewException = $beachViewException;
  }
  /** @return string */
  public function getBeachViewException()
  {
    return $this->beachViewException;
  }
  /** @param bool */
  public function setCityView($cityView)
  {
    $this->cityView = $cityView;
  }
  /** @return bool */
  public function getCityView()
  {
    return $this->cityView;
  }
  /** @param string */
  public function setCityViewException($cityViewException)
  {
    $this->cityViewException = $cityViewException;
  }
  /** @return string */
  public function getCityViewException()
  {
    return $this->cityViewException;
  }
  /** @param bool */
  public function setGardenView($gardenView)
  {
    $this->gardenView = $gardenView;
  }
  /** @return bool */
  public function getGardenView()
  {
    return $this->gardenView;
  }
  /** @param string */
  public function setGardenViewException($gardenViewException)
  {
    $this->gardenViewException = $gardenViewException;
  }
  /** @return string */
  public function getGardenViewException()
  {
    return $this->gardenViewException;
  }
  /** @param bool */
  public function setLakeView($lakeView)
  {
    $this->lakeView = $lakeView;
  }
  /** @return bool */
  public function getLakeView()
  {
    return $this->lakeView;
  }
  /** @param string */
  public function setLakeViewException($lakeViewException)
  {
    $this->lakeViewException = $lakeViewException;
  }
  /** @return string */
  public function getLakeViewException()
  {
    return $this->lakeViewException;
  }
  /** @param bool */
  public function setLandmarkView($landmarkView)
  {
    $this->landmarkView = $landmarkView;
  }
  /** @return bool */
  public function getLandmarkView()
  {
    return $this->landmarkView;
  }
  /** @param string */
  public function setLandmarkViewException($landmarkViewException)
  {
    $this->landmarkViewException = $landmarkViewException;
  }
  /** @return string */
  public function getLandmarkViewException()
  {
    return $this->landmarkViewException;
  }
  /** @param bool */
  public function setOceanView($oceanView)
  {
    $this->oceanView = $oceanView;
  }
  /** @return bool */
  public function getOceanView()
  {
    return $this->oceanView;
  }
  /** @param string */
  public function setOceanViewException($oceanViewException)
  {
    $this->oceanViewException = $oceanViewException;
  }
  /** @return string */
  public function getOceanViewException()
  {
    return $this->oceanViewException;
  }
  /** @param bool */
  public function setPoolView($poolView)
  {
    $this->poolView = $poolView;
  }
  /** @return bool */
  public function getPoolView()
  {
    return $this->poolView;
  }
  /** @param string */
  public function setPoolViewException($poolViewException)
  {
    $this->poolViewException = $poolViewException;
  }
  /** @return string */
  public function getPoolViewException()
  {
    return $this->poolViewException;
  }
  /** @param bool */
  public function setValleyView($valleyView)
  {
    $this->valleyView = $valleyView;
  }
  /** @return bool */
  public function getValleyView()
  {
    return $this->valleyView;
  }
  /** @param string */
  public function setValleyViewException($valleyViewException)
  {
    $this->valleyViewException = $valleyViewException;
  }
  /** @return string */
  public function getValleyViewException()
  {
    return $this->valleyViewException;
  }
}

class WasteReduction extends \Google\Model
{
  /** @var bool */
  public $compostableFoodContainersAndCutlery;
  /** @var string */
  public $compostableFoodContainersAndCutleryException;
  /** @var bool */
  public $compostsExcessFood;
  /** @var string */
  public $compostsExcessFoodException;
  /** @var bool */
  public $donatesExcessFood;
  /** @var string */
  public $donatesExcessFoodException;
  /** @var bool */
  public $foodWasteReductionProgram;
  /** @var string */
  public $foodWasteReductionProgramException;
  /** @var bool */
  public $noSingleUsePlasticStraws;
  /** @var string */
  public $noSingleUsePlasticStrawsException;
  /** @var bool */
  public $noSingleUsePlasticWaterBottles;
  /** @var string */
  public $noSingleUsePlasticWaterBottlesException;
  /** @var bool */
  public $noStyrofoamFoodContainers;
  /** @var string */
  public $noStyrofoamFoodContainersException;
  /** @var bool */
  public $recyclingProgram;
  /** @var string */
  public $recyclingProgramException;
  /** @var bool */
  public $refillableToiletryContainers;
  /** @var string */
  public $refillableToiletryContainersException;
  /** @var bool */
  public $safelyDisposesBatteries;
  /** @var string */
  public $safelyDisposesBatteriesException;
  /** @var bool */
  public $safelyDisposesElectronics;
  /** @var string */
  public $safelyDisposesElectronicsException;
  /** @var bool */
  public $safelyDisposesLightbulbs;
  /** @var string */
  public $safelyDisposesLightbulbsException;
  /** @var bool */
  public $safelyHandlesHazardousSubstances;
  /** @var string */
  public $safelyHandlesHazardousSubstancesException;
  /** @var bool */
  public $soapDonationProgram;
  /** @var string */
  public $soapDonationProgramException;
  /** @var bool */
  public $toiletryDonationProgram;
  /** @var string */
  public $toiletryDonationProgramException;
  /** @var bool */
  public $waterBottleFillingStations;
  /** @var string */
  public $waterBottleFillingStationsException;

  /** @param bool */
  public function setCompostableFoodContainersAndCutlery($compostableFoodContainersAndCutlery)
  {
    $this->compostableFoodContainersAndCutlery = $compostableFoodContainersAndCutlery;
  }
  /** @return bool */
  public function getCompostableFoodContainersAndCutlery()
  {
    return $this->compostableFoodContainersAndCutlery;
  }
  /** @param string */
  public function setCompostableFoodContainersAndCutleryException($compostableFoodContainersAndCutleryException)
  {
    $this->compostableFoodContainersAndCutleryException = $compostableFoodContainersAndCutleryException;
  }
  /** @return string */
  public function getCompostableFoodContainersAndCutleryException()
  {
    return $this->compostableFoodContainersAndCutleryException;
  }
  /** @param bool */
  public function setCompostsExcessFood($compostsExcessFood)
  {
    $this->compostsExcessFood = $compostsExcessFood;
  }
  /** @return bool */
  public function getCompostsExcessFood()
  {
    return $this->compostsExcessFood;
  }
  /** @param string */
  public function setCompostsExcessFoodException($compostsExcessFoodException)
  {
    $this->compostsExcessFoodException = $compostsExcessFoodException;
  }
  /** @return string */
  public function getCompostsExcessFoodException()
  {
    return $this->compostsExcessFoodException;
  }
  /** @param bool */
  public function setDonatesExcessFood($donatesExcessFood)
  {
    $this->donatesExcessFood = $donatesExcessFood;
  }
  /** @return bool */
  public function getDonatesExcessFood()
  {
    return $this->donatesExcessFood;
  }
  /** @param string */
  public function setDonatesExcessFoodException($donatesExcessFoodException)
  {
    $this->donatesExcessFoodException = $donatesExcessFoodException;
  }
  /** @return string */
  public function getDonatesExcessFoodException()
  {
    return $this->donatesExcessFoodException;
  }
  /** @param bool */
  public function setFoodWasteReductionProgram($foodWasteReductionProgram)
  {
    $this->foodWasteReductionProgram = $foodWasteReductionProgram;
  }
  /** @return bool */
  public function getFoodWasteReductionProgram()
  {
    return $this->foodWasteReductionProgram;
  }
  /** @param string */
  public function setFoodWasteReductionProgramException($foodWasteReductionProgramException)
  {
    $this->foodWasteReductionProgramException = $foodWasteReductionProgramException;
  }
  /** @return string */
  public function getFoodWasteReductionProgramException()
  {
    return $this->foodWasteReductionProgramException;
  }
  /** @param bool */
  public function setNoSingleUsePlasticStraws($noSingleUsePlasticStraws)
  {
    $this->noSingleUsePlasticStraws = $noSingleUsePlasticStraws;
  }
  /** @return bool */
  public function getNoSingleUsePlasticStraws()
  {
    return $this->noSingleUsePlasticStraws;
  }
  /** @param string */
  public function setNoSingleUsePlasticStrawsException($noSingleUsePlasticStrawsException)
  {
    $this->noSingleUsePlasticStrawsException = $noSingleUsePlasticStrawsException;
  }
  /** @return string */
  public function getNoSingleUsePlasticStrawsException()
  {
    return $this->noSingleUsePlasticStrawsException;
  }
  /** @param bool */
  public function setNoSingleUsePlasticWaterBottles($noSingleUsePlasticWaterBottles)
  {
    $this->noSingleUsePlasticWaterBottles = $noSingleUsePlasticWaterBottles;
  }
  /** @return bool */
  public function getNoSingleUsePlasticWaterBottles()
  {
    return $this->noSingleUsePlasticWaterBottles;
  }
  /** @param string */
  public function setNoSingleUsePlasticWaterBottlesException($noSingleUsePlasticWaterBottlesException)
  {
    $this->noSingleUsePlasticWaterBottlesException = $noSingleUsePlasticWaterBottlesException;
  }
  /** @return string */
  public function getNoSingleUsePlasticWaterBottlesException()
  {
    return $this->noSingleUsePlasticWaterBottlesException;
  }
  /** @param bool */
  public function setNoStyrofoamFoodContainers($noStyrofoamFoodContainers)
  {
    $this->noStyrofoamFoodContainers = $noStyrofoamFoodContainers;
  }
  /** @return bool */
  public function getNoStyrofoamFoodContainers()
  {
    return $this->noStyrofoamFoodContainers;
  }
  /** @param string */
  public function setNoStyrofoamFoodContainersException($noStyrofoamFoodContainersException)
  {
    $this->noStyrofoamFoodContainersException = $noStyrofoamFoodContainersException;
  }
  /** @return string */
  public function getNoStyrofoamFoodContainersException()
  {
    return $this->noStyrofoamFoodContainersException;
  }
  /** @param bool */
  public function setRecyclingProgram($recyclingProgram)
  {
    $this->recyclingProgram = $recyclingProgram;
  }
  /** @return bool */
  public function getRecyclingProgram()
  {
    return $this->recyclingProgram;
  }
  /** @param string */
  public function setRecyclingProgramException($recyclingProgramException)
  {
    $this->recyclingProgramException = $recyclingProgramException;
  }
  /** @return string */
  public function getRecyclingProgramException()
  {
    return $this->recyclingProgramException;
  }
  /** @param bool */
  public function setRefillableToiletryContainers($refillableToiletryContainers)
  {
    $this->refillableToiletryContainers = $refillableToiletryContainers;
  }
  /** @return bool */
  public function getRefillableToiletryContainers()
  {
    return $this->refillableToiletryContainers;
  }
  /** @param string */
  public function setRefillableToiletryContainersException($refillableToiletryContainersException)
  {
    $this->refillableToiletryContainersException = $refillableToiletryContainersException;
  }
  /** @return string */
  public function getRefillableToiletryContainersException()
  {
    return $this->refillableToiletryContainersException;
  }
  /** @param bool */
  public function setSafelyDisposesBatteries($safelyDisposesBatteries)
  {
    $this->safelyDisposesBatteries = $safelyDisposesBatteries;
  }
  /** @return bool */
  public function getSafelyDisposesBatteries()
  {
    return $this->safelyDisposesBatteries;
  }
  /** @param string */
  public function setSafelyDisposesBatteriesException($safelyDisposesBatteriesException)
  {
    $this->safelyDisposesBatteriesException = $safelyDisposesBatteriesException;
  }
  /** @return string */
  public function getSafelyDisposesBatteriesException()
  {
    return $this->safelyDisposesBatteriesException;
  }
  /** @param bool */
  public function setSafelyDisposesElectronics($safelyDisposesElectronics)
  {
    $this->safelyDisposesElectronics = $safelyDisposesElectronics;
  }
  /** @return bool */
  public function getSafelyDisposesElectronics()
  {
    return $this->safelyDisposesElectronics;
  }
  /** @param string */
  public function setSafelyDisposesElectronicsException($safelyDisposesElectronicsException)
  {
    $this->safelyDisposesElectronicsException = $safelyDisposesElectronicsException;
  }
  /** @return string */
  public function getSafelyDisposesElectronicsException()
  {
    return $this->safelyDisposesElectronicsException;
  }
  /** @param bool */
  public function setSafelyDisposesLightbulbs($safelyDisposesLightbulbs)
  {
    $this->safelyDisposesLightbulbs = $safelyDisposesLightbulbs;
  }
  /** @return bool */
  public function getSafelyDisposesLightbulbs()
  {
    return $this->safelyDisposesLightbulbs;
  }
  /** @param string */
  public function setSafelyDisposesLightbulbsException($safelyDisposesLightbulbsException)
  {
    $this->safelyDisposesLightbulbsException = $safelyDisposesLightbulbsException;
  }
  /** @return string */
  public function getSafelyDisposesLightbulbsException()
  {
    return $this->safelyDisposesLightbulbsException;
  }
  /** @param bool */
  public function setSafelyHandlesHazardousSubstances($safelyHandlesHazardousSubstances)
  {
    $this->safelyHandlesHazardousSubstances = $safelyHandlesHazardousSubstances;
  }
  /** @return bool */
  public function getSafelyHandlesHazardousSubstances()
  {
    return $this->safelyHandlesHazardousSubstances;
  }
  /** @param string */
  public function setSafelyHandlesHazardousSubstancesException($safelyHandlesHazardousSubstancesException)
  {
    $this->safelyHandlesHazardousSubstancesException = $safelyHandlesHazardousSubstancesException;
  }
  /** @return string */
  public function getSafelyHandlesHazardousSubstancesException()
  {
    return $this->safelyHandlesHazardousSubstancesException;
  }
  /** @param bool */
  public function setSoapDonationProgram($soapDonationProgram)
  {
    $this->soapDonationProgram = $soapDonationProgram;
  }
  /** @return bool */
  public function getSoapDonationProgram()
  {
    return $this->soapDonationProgram;
  }
  /** @param string */
  public function setSoapDonationProgramException($soapDonationProgramException)
  {
    $this->soapDonationProgramException = $soapDonationProgramException;
  }
  /** @return string */
  public function getSoapDonationProgramException()
  {
    return $this->soapDonationProgramException;
  }
  /** @param bool */
  public function setToiletryDonationProgram($toiletryDonationProgram)
  {
    $this->toiletryDonationProgram = $toiletryDonationProgram;
  }
  /** @return bool */
  public function getToiletryDonationProgram()
  {
    return $this->toiletryDonationProgram;
  }
  /** @param string */
  public function setToiletryDonationProgramException($toiletryDonationProgramException)
  {
    $this->toiletryDonationProgramException = $toiletryDonationProgramException;
  }
  /** @return string */
  public function getToiletryDonationProgramException()
  {
    return $this->toiletryDonationProgramException;
  }
  /** @param bool */
  public function setWaterBottleFillingStations($waterBottleFillingStations)
  {
    $this->waterBottleFillingStations = $waterBottleFillingStations;
  }
  /** @return bool */
  public function getWaterBottleFillingStations()
  {
    return $this->waterBottleFillingStations;
  }
  /** @param string */
  public function setWaterBottleFillingStationsException($waterBottleFillingStationsException)
  {
    $this->waterBottleFillingStationsException = $waterBottleFillingStationsException;
  }
  /** @return string */
  public function getWaterBottleFillingStationsException()
  {
    return $this->waterBottleFillingStationsException;
  }
}

class WaterConservation extends \Google\Model
{
  /** @var bool */
  public $independentOrganizationAuditsWaterUse;
  /** @var string */
  public $independentOrganizationAuditsWaterUseException;
  /** @var bool */
  public $linenReuseProgram;
  /** @var string */
  public $linenReuseProgramException;
  /** @var bool */
  public $towelReuseProgram;
  /** @var string */
  public $towelReuseProgramException;
  /** @var bool */
  public $waterSavingShowers;
  /** @var string */
  public $waterSavingShowersException;
  /** @var bool */
  public $waterSavingSinks;
  /** @var string */
  public $waterSavingSinksException;
  /** @var bool */
  public $waterSavingToilets;
  /** @var string */
  public $waterSavingToiletsException;

  /** @param bool */
  public function setIndependentOrganizationAuditsWaterUse($independentOrganizationAuditsWaterUse)
  {
    $this->independentOrganizationAuditsWaterUse = $independentOrganizationAuditsWaterUse;
  }
  /** @return bool */
  public function getIndependentOrganizationAuditsWaterUse()
  {
    return $this->independentOrganizationAuditsWaterUse;
  }
  /** @param string */
  public function setIndependentOrganizationAuditsWaterUseException($independentOrganizationAuditsWaterUseException)
  {
    $this->independentOrganizationAuditsWaterUseException = $independentOrganizationAuditsWaterUseException;
  }
  /** @return string */
  public function getIndependentOrganizationAuditsWaterUseException()
  {
    return $this->independentOrganizationAuditsWaterUseException;
  }
  /** @param bool */
  public function setLinenReuseProgram($linenReuseProgram)
  {
    $this->linenReuseProgram = $linenReuseProgram;
  }
  /** @return bool */
  public function getLinenReuseProgram()
  {
    return $this->linenReuseProgram;
  }
  /** @param string */
  public function setLinenReuseProgramException($linenReuseProgramException)
  {
    $this->linenReuseProgramException = $linenReuseProgramException;
  }
  /** @return string */
  public function getLinenReuseProgramException()
  {
    return $this->linenReuseProgramException;
  }
  /** @param bool */
  public function setTowelReuseProgram($towelReuseProgram)
  {
    $this->towelReuseProgram = $towelReuseProgram;
  }
  /** @return bool */
  public function getTowelReuseProgram()
  {
    return $this->towelReuseProgram;
  }
  /** @param string */
  public function setTowelReuseProgramException($towelReuseProgramException)
  {
    $this->towelReuseProgramException = $towelReuseProgramException;
  }
  /** @return string */
  public function getTowelReuseProgramException()
  {
    return $this->towelReuseProgramException;
  }
  /** @param bool */
  public function setWaterSavingShowers($waterSavingShowers)
  {
    $this->waterSavingShowers = $waterSavingShowers;
  }
  /** @return bool */
  public function getWaterSavingShowers()
  {
    return $this->waterSavingShowers;
  }
  /** @param string */
  public function setWaterSavingShowersException($waterSavingShowersException)
  {
    $this->waterSavingShowersException = $waterSavingShowersException;
  }
  /** @return string */
  public function getWaterSavingShowersException()
  {
    return $this->waterSavingShowersException;
  }
  /** @param bool */
  public function setWaterSavingSinks($waterSavingSinks)
  {
    $this->waterSavingSinks = $waterSavingSinks;
  }
  /** @return bool */
  public function getWaterSavingSinks()
  {
    return $this->waterSavingSinks;
  }
  /** @param string */
  public function setWaterSavingSinksException($waterSavingSinksException)
  {
    $this->waterSavingSinksException = $waterSavingSinksException;
  }
  /** @return string */
  public function getWaterSavingSinksException()
  {
    return $this->waterSavingSinksException;
  }
  /** @param bool */
  public function setWaterSavingToilets($waterSavingToilets)
  {
    $this->waterSavingToilets = $waterSavingToilets;
  }
  /** @return bool */
  public function getWaterSavingToilets()
  {
    return $this->waterSavingToilets;
  }
  /** @param string */
  public function setWaterSavingToiletsException($waterSavingToiletsException)
  {
    $this->waterSavingToiletsException = $waterSavingToiletsException;
  }
  /** @return string */
  public function getWaterSavingToiletsException()
  {
    return $this->waterSavingToiletsException;
  }
}

class Wellness extends \Google\Model
{
  /** @var bool */
  public $doctorOnCall;
  /** @var string */
  public $doctorOnCallException;
  /** @var bool */
  public $ellipticalMachine;
  /** @var string */
  public $ellipticalMachineException;
  /** @var bool */
  public $fitnessCenter;
  /** @var string */
  public $fitnessCenterException;
  /** @var bool */
  public $freeFitnessCenter;
  /** @var string */
  public $freeFitnessCenterException;
  /** @var bool */
  public $freeWeights;
  /** @var string */
  public $freeWeightsException;
  /** @var bool */
  public $massage;
  /** @var string */
  public $massageException;
  /** @var bool */
  public $salon;
  /** @var string */
  public $salonException;
  /** @var bool */
  public $sauna;
  /** @var string */
  public $saunaException;
  /** @var bool */
  public $spa;
  /** @var string */
  public $spaException;
  /** @var bool */
  public $treadmill;
  /** @var string */
  public $treadmillException;
  /** @var bool */
  public $weightMachine;
  /** @var string */
  public $weightMachineException;

  /** @param bool */
  public function setDoctorOnCall($doctorOnCall)
  {
    $this->doctorOnCall = $doctorOnCall;
  }
  /** @return bool */
  public function getDoctorOnCall()
  {
    return $this->doctorOnCall;
  }
  /** @param string */
  public function setDoctorOnCallException($doctorOnCallException)
  {
    $this->doctorOnCallException = $doctorOnCallException;
  }
  /** @return string */
  public function getDoctorOnCallException()
  {
    return $this->doctorOnCallException;
  }
  /** @param bool */
  public function setEllipticalMachine($ellipticalMachine)
  {
    $this->ellipticalMachine = $ellipticalMachine;
  }
  /** @return bool */
  public function getEllipticalMachine()
  {
    return $this->ellipticalMachine;
  }
  /** @param string */
  public function setEllipticalMachineException($ellipticalMachineException)
  {
    $this->ellipticalMachineException = $ellipticalMachineException;
  }
  /** @return string */
  public function getEllipticalMachineException()
  {
    return $this->ellipticalMachineException;
  }
  /** @param bool */
  public function setFitnessCenter($fitnessCenter)
  {
    $this->fitnessCenter = $fitnessCenter;
  }
  /** @return bool */
  public function getFitnessCenter()
  {
    return $this->fitnessCenter;
  }
  /** @param string */
  public function setFitnessCenterException($fitnessCenterException)
  {
    $this->fitnessCenterException = $fitnessCenterException;
  }
  /** @return string */
  public function getFitnessCenterException()
  {
    return $this->fitnessCenterException;
  }
  /** @param bool */
  public function setFreeFitnessCenter($freeFitnessCenter)
  {
    $this->freeFitnessCenter = $freeFitnessCenter;
  }
  /** @return bool */
  public function getFreeFitnessCenter()
  {
    return $this->freeFitnessCenter;
  }
  /** @param string */
  public function setFreeFitnessCenterException($freeFitnessCenterException)
  {
    $this->freeFitnessCenterException = $freeFitnessCenterException;
  }
  /** @return string */
  public function getFreeFitnessCenterException()
  {
    return $this->freeFitnessCenterException;
  }
  /** @param bool */
  public function setFreeWeights($freeWeights)
  {
    $this->freeWeights = $freeWeights;
  }
  /** @return bool */
  public function getFreeWeights()
  {
    return $this->freeWeights;
  }
  /** @param string */
  public function setFreeWeightsException($freeWeightsException)
  {
    $this->freeWeightsException = $freeWeightsException;
  }
  /** @return string */
  public function getFreeWeightsException()
  {
    return $this->freeWeightsException;
  }
  /** @param bool */
  public function setMassage($massage)
  {
    $this->massage = $massage;
  }
  /** @return bool */
  public function getMassage()
  {
    return $this->massage;
  }
  /** @param string */
  public function setMassageException($massageException)
  {
    $this->massageException = $massageException;
  }
  /** @return string */
  public function getMassageException()
  {
    return $this->massageException;
  }
  /** @param bool */
  public function setSalon($salon)
  {
    $this->salon = $salon;
  }
  /** @return bool */
  public function getSalon()
  {
    return $this->salon;
  }
  /** @param string */
  public function setSalonException($salonException)
  {
    $this->salonException = $salonException;
  }
  /** @return string */
  public function getSalonException()
  {
    return $this->salonException;
  }
  /** @param bool */
  public function setSauna($sauna)
  {
    $this->sauna = $sauna;
  }
  /** @return bool */
  public function getSauna()
  {
    return $this->sauna;
  }
  /** @param string */
  public function setSaunaException($saunaException)
  {
    $this->saunaException = $saunaException;
  }
  /** @return string */
  public function getSaunaException()
  {
    return $this->saunaException;
  }
  /** @param bool */
  public function setSpa($spa)
  {
    $this->spa = $spa;
  }
  /** @return bool */
  public function getSpa()
  {
    return $this->spa;
  }
  /** @param string */
  public function setSpaException($spaException)
  {
    $this->spaException = $spaException;
  }
  /** @return string */
  public function getSpaException()
  {
    return $this->spaException;
  }
  /** @param bool */
  public function setTreadmill($treadmill)
  {
    $this->treadmill = $treadmill;
  }
  /** @return bool */
  public function getTreadmill()
  {
    return $this->treadmill;
  }
  /** @param string */
  public function setTreadmillException($treadmillException)
  {
    $this->treadmillException = $treadmillException;
  }
  /** @return string */
  public function getTreadmillException()
  {
    return $this->treadmillException;
  }
  /** @param bool */
  public function setWeightMachine($weightMachine)
  {
    $this->weightMachine = $weightMachine;
  }
  /** @return bool */
  public function getWeightMachine()
  {
    return $this->weightMachine;
  }
  /** @param string */
  public function setWeightMachineException($weightMachineException)
  {
    $this->weightMachineException = $weightMachineException;
  }
  /** @return string */
  public function getWeightMachineException()
  {
    return $this->weightMachineException;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Accessibility::class, 'Google_Service_MyBusinessLodging_Accessibility');
class_alias(Activities::class, 'Google_Service_MyBusinessLodging_Activities');
class_alias(Business::class, 'Google_Service_MyBusinessLodging_Business');
class_alias(Connectivity::class, 'Google_Service_MyBusinessLodging_Connectivity');
class_alias(EcoCertification::class, 'Google_Service_MyBusinessLodging_EcoCertification');
class_alias(EnergyEfficiency::class, 'Google_Service_MyBusinessLodging_EnergyEfficiency');
class_alias(EnhancedCleaning::class, 'Google_Service_MyBusinessLodging_EnhancedCleaning');
class_alias(Families::class, 'Google_Service_MyBusinessLodging_Families');
class_alias(FoodAndDrink::class, 'Google_Service_MyBusinessLodging_FoodAndDrink');
class_alias(GetGoogleUpdatedLodgingResponse::class, 'Google_Service_MyBusinessLodging_GetGoogleUpdatedLodgingResponse');
class_alias(GuestUnitFeatures::class, 'Google_Service_MyBusinessLodging_GuestUnitFeatures');
class_alias(GuestUnitType::class, 'Google_Service_MyBusinessLodging_GuestUnitType');
class_alias(HealthAndSafety::class, 'Google_Service_MyBusinessLodging_HealthAndSafety');
class_alias(Housekeeping::class, 'Google_Service_MyBusinessLodging_Housekeeping');
class_alias(IncreasedFoodSafety::class, 'Google_Service_MyBusinessLodging_IncreasedFoodSafety');
class_alias(LanguageSpoken::class, 'Google_Service_MyBusinessLodging_LanguageSpoken');
class_alias(LivingArea::class, 'Google_Service_MyBusinessLodging_LivingArea');
class_alias(LivingAreaAccessibility::class, 'Google_Service_MyBusinessLodging_LivingAreaAccessibility');
class_alias(LivingAreaEating::class, 'Google_Service_MyBusinessLodging_LivingAreaEating');
class_alias(LivingAreaFeatures::class, 'Google_Service_MyBusinessLodging_LivingAreaFeatures');
class_alias(LivingAreaLayout::class, 'Google_Service_MyBusinessLodging_LivingAreaLayout');
class_alias(LivingAreaSleeping::class, 'Google_Service_MyBusinessLodging_LivingAreaSleeping');
class_alias(Lodging::class, 'Google_Service_MyBusinessLodging_Lodging');
class_alias(LodgingMetadata::class, 'Google_Service_MyBusinessLodging_LodgingMetadata');
class_alias(MinimizedContact::class, 'Google_Service_MyBusinessLodging_MinimizedContact');
class_alias(Parking::class, 'Google_Service_MyBusinessLodging_Parking');
class_alias(PaymentOptions::class, 'Google_Service_MyBusinessLodging_PaymentOptions');
class_alias(PersonalProtection::class, 'Google_Service_MyBusinessLodging_PersonalProtection');
class_alias(Pets::class, 'Google_Service_MyBusinessLodging_Pets');
class_alias(PhysicalDistancing::class, 'Google_Service_MyBusinessLodging_PhysicalDistancing');
class_alias(Policies::class, 'Google_Service_MyBusinessLodging_Policies');
class_alias(Pools::class, 'Google_Service_MyBusinessLodging_Pools');
class_alias(Property::class, 'Google_Service_MyBusinessLodging_Property');
class_alias(Services::class, 'Google_Service_MyBusinessLodging_Services');
class_alias(Sustainability::class, 'Google_Service_MyBusinessLodging_Sustainability');
class_alias(SustainabilityCertifications::class, 'Google_Service_MyBusinessLodging_SustainabilityCertifications');
class_alias(SustainableSourcing::class, 'Google_Service_MyBusinessLodging_SustainableSourcing');
class_alias(TimeOfDay::class, 'Google_Service_MyBusinessLodging_TimeOfDay');
class_alias(Transportation::class, 'Google_Service_MyBusinessLodging_Transportation');
class_alias(ViewsFromUnit::class, 'Google_Service_MyBusinessLodging_ViewsFromUnit');
class_alias(WasteReduction::class, 'Google_Service_MyBusinessLodging_WasteReduction');
class_alias(WaterConservation::class, 'Google_Service_MyBusinessLodging_WaterConservation');
class_alias(Wellness::class, 'Google_Service_MyBusinessLodging_Wellness');
