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

namespace Google\Service\TravelImpactModel;

class ComputeFlightEmissionsRequest extends \Google\Collection
{
  /** @var Flight[] */
  public $flights;
  protected $collection_key = 'flights';
  protected $flightsType = Flight::class;
  protected $flightsDataType = 'array';
  /** @param Flight[] */
  public function setFlights($flights)
  {
    $this->flights = $flights;
  }
  /** @return Flight[] */
  public function getFlights()
  {
    return $this->flights;
  }
}

class ComputeFlightEmissionsResponse extends \Google\Collection
{
  /** @var FlightWithEmissions[] */
  public $flightEmissions;
  /** @var ModelVersion */
  public $modelVersion;
  protected $collection_key = 'flightEmissions';
  protected $flightEmissionsType = FlightWithEmissions::class;
  protected $flightEmissionsDataType = 'array';
  protected $modelVersionType = ModelVersion::class;
  protected $modelVersionDataType = '';
  /** @param FlightWithEmissions[] */
  public function setFlightEmissions($flightEmissions)
  {
    $this->flightEmissions = $flightEmissions;
  }
  /** @return FlightWithEmissions[] */
  public function getFlightEmissions()
  {
    return $this->flightEmissions;
  }
  /** @param ModelVersion */
  public function setModelVersion(ModelVersion $modelVersion)
  {
    $this->modelVersion = $modelVersion;
  }
  /** @return ModelVersion */
  public function getModelVersion()
  {
    return $this->modelVersion;
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

class EmissionsGramsPerPax extends \Google\Model
{
  /** @var int */
  public $business;
  /** @var int */
  public $economy;
  /** @var int */
  public $first;
  /** @var int */
  public $premiumEconomy;

  /** @param int */
  public function setBusiness($business)
  {
    $this->business = $business;
  }
  /** @return int */
  public function getBusiness()
  {
    return $this->business;
  }
  /** @param int */
  public function setEconomy($economy)
  {
    $this->economy = $economy;
  }
  /** @return int */
  public function getEconomy()
  {
    return $this->economy;
  }
  /** @param int */
  public function setFirst($first)
  {
    $this->first = $first;
  }
  /** @return int */
  public function getFirst()
  {
    return $this->first;
  }
  /** @param int */
  public function setPremiumEconomy($premiumEconomy)
  {
    $this->premiumEconomy = $premiumEconomy;
  }
  /** @return int */
  public function getPremiumEconomy()
  {
    return $this->premiumEconomy;
  }
}

class Flight extends \Google\Model
{
  /** @var Date */
  public $departureDate;
  /** @var string */
  public $destination;
  /** @var int */
  public $flightNumber;
  /** @var string */
  public $operatingCarrierCode;
  /** @var string */
  public $origin;
  protected $departureDateType = Date::class;
  protected $departureDateDataType = '';
  /** @param Date */
  public function setDepartureDate(Date $departureDate)
  {
    $this->departureDate = $departureDate;
  }
  /** @return Date */
  public function getDepartureDate()
  {
    return $this->departureDate;
  }
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
  /** @param int */
  public function setFlightNumber($flightNumber)
  {
    $this->flightNumber = $flightNumber;
  }
  /** @return int */
  public function getFlightNumber()
  {
    return $this->flightNumber;
  }
  /** @param string */
  public function setOperatingCarrierCode($operatingCarrierCode)
  {
    $this->operatingCarrierCode = $operatingCarrierCode;
  }
  /** @return string */
  public function getOperatingCarrierCode()
  {
    return $this->operatingCarrierCode;
  }
  /** @param string */
  public function setOrigin($origin)
  {
    $this->origin = $origin;
  }
  /** @return string */
  public function getOrigin()
  {
    return $this->origin;
  }
}

class FlightWithEmissions extends \Google\Model
{
  /** @var EmissionsGramsPerPax */
  public $emissionsGramsPerPax;
  /** @var Flight */
  public $flight;
  protected $emissionsGramsPerPaxType = EmissionsGramsPerPax::class;
  protected $emissionsGramsPerPaxDataType = '';
  protected $flightType = Flight::class;
  protected $flightDataType = '';
  /** @param EmissionsGramsPerPax */
  public function setEmissionsGramsPerPax(EmissionsGramsPerPax $emissionsGramsPerPax)
  {
    $this->emissionsGramsPerPax = $emissionsGramsPerPax;
  }
  /** @return EmissionsGramsPerPax */
  public function getEmissionsGramsPerPax()
  {
    return $this->emissionsGramsPerPax;
  }
  /** @param Flight */
  public function setFlight(Flight $flight)
  {
    $this->flight = $flight;
  }
  /** @return Flight */
  public function getFlight()
  {
    return $this->flight;
  }
}

class ModelVersion extends \Google\Model
{
  /** @var string */
  public $dated;
  /** @var int */
  public $major;
  /** @var int */
  public $minor;
  /** @var int */
  public $patch;

  /** @param string */
  public function setDated($dated)
  {
    $this->dated = $dated;
  }
  /** @return string */
  public function getDated()
  {
    return $this->dated;
  }
  /** @param int */
  public function setMajor($major)
  {
    $this->major = $major;
  }
  /** @return int */
  public function getMajor()
  {
    return $this->major;
  }
  /** @param int */
  public function setMinor($minor)
  {
    $this->minor = $minor;
  }
  /** @return int */
  public function getMinor()
  {
    return $this->minor;
  }
  /** @param int */
  public function setPatch($patch)
  {
    $this->patch = $patch;
  }
  /** @return int */
  public function getPatch()
  {
    return $this->patch;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ComputeFlightEmissionsRequest::class, 'Google_Service_TravelImpactModel_ComputeFlightEmissionsRequest');
class_alias(ComputeFlightEmissionsResponse::class, 'Google_Service_TravelImpactModel_ComputeFlightEmissionsResponse');
class_alias(Date::class, 'Google_Service_TravelImpactModel_Date');
class_alias(EmissionsGramsPerPax::class, 'Google_Service_TravelImpactModel_EmissionsGramsPerPax');
class_alias(Flight::class, 'Google_Service_TravelImpactModel_Flight');
class_alias(FlightWithEmissions::class, 'Google_Service_TravelImpactModel_FlightWithEmissions');
class_alias(ModelVersion::class, 'Google_Service_TravelImpactModel_ModelVersion');
