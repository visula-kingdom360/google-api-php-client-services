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

namespace Google\Service\ManufacturerCenter;

class Attributes extends \Google\Collection
{
  /** @var Image[] */
  public $additionalImageLink;
  /** @var string */
  public $ageGroup;
  /** @var string */
  public $brand;
  /** @var Capacity */
  public $capacity;
  /** @var string */
  public $color;
  /** @var Count */
  public $count;
  /** @var string */
  public $description;
  /** @var string */
  public $disclosureDate;
  /** @var string[] */
  public $excludedDestination;
  /** @var FeatureDescription[] */
  public $featureDescription;
  /** @var string */
  public $flavor;
  /** @var string */
  public $format;
  /** @var string */
  public $gender;
  /** @var Grocery */
  public $grocery;
  /** @var string[] */
  public $gtin;
  /** @var Image */
  public $imageLink;
  /** @var string[] */
  public $includedDestination;
  /** @var string */
  public $itemGroupId;
  /** @var string */
  public $material;
  /** @var string */
  public $mpn;
  /** @var Nutrition */
  public $nutrition;
  /** @var string */
  public $pattern;
  /** @var ProductDetail[] */
  public $productDetail;
  /** @var string[] */
  public $productHighlight;
  /** @var string */
  public $productLine;
  /** @var string */
  public $productName;
  /** @var string */
  public $productPageUrl;
  /** @var string[] */
  public $productType;
  /** @var string */
  public $releaseDate;
  /** @var string[] */
  public $richProductContent;
  /** @var string */
  public $scent;
  /** @var string */
  public $size;
  /** @var string */
  public $sizeSystem;
  /** @var string[] */
  public $sizeType;
  /** @var Price */
  public $suggestedRetailPrice;
  /** @var string */
  public $targetClientId;
  /** @var string */
  public $theme;
  /** @var string */
  public $title;
  /** @var string[] */
  public $videoLink;
  protected $collection_key = 'videoLink';
  protected $additionalImageLinkType = Image::class;
  protected $additionalImageLinkDataType = 'array';
  protected $capacityType = Capacity::class;
  protected $capacityDataType = '';
  protected $countType = Count::class;
  protected $countDataType = '';
  protected $featureDescriptionType = FeatureDescription::class;
  protected $featureDescriptionDataType = 'array';
  protected $groceryType = Grocery::class;
  protected $groceryDataType = '';
  protected $imageLinkType = Image::class;
  protected $imageLinkDataType = '';
  protected $nutritionType = Nutrition::class;
  protected $nutritionDataType = '';
  protected $productDetailType = ProductDetail::class;
  protected $productDetailDataType = 'array';
  protected $suggestedRetailPriceType = Price::class;
  protected $suggestedRetailPriceDataType = '';
  /** @param Image[] */
  public function setAdditionalImageLink($additionalImageLink)
  {
    $this->additionalImageLink = $additionalImageLink;
  }
  /** @return Image[] */
  public function getAdditionalImageLink()
  {
    return $this->additionalImageLink;
  }
  /** @param string */
  public function setAgeGroup($ageGroup)
  {
    $this->ageGroup = $ageGroup;
  }
  /** @return string */
  public function getAgeGroup()
  {
    return $this->ageGroup;
  }
  /** @param string */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  /** @return string */
  public function getBrand()
  {
    return $this->brand;
  }
  /** @param Capacity */
  public function setCapacity(Capacity $capacity)
  {
    $this->capacity = $capacity;
  }
  /** @return Capacity */
  public function getCapacity()
  {
    return $this->capacity;
  }
  /** @param string */
  public function setColor($color)
  {
    $this->color = $color;
  }
  /** @return string */
  public function getColor()
  {
    return $this->color;
  }
  /** @param Count */
  public function setCount(Count $count)
  {
    $this->count = $count;
  }
  /** @return Count */
  public function getCount()
  {
    return $this->count;
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
  public function setDisclosureDate($disclosureDate)
  {
    $this->disclosureDate = $disclosureDate;
  }
  /** @return string */
  public function getDisclosureDate()
  {
    return $this->disclosureDate;
  }
  /** @param string[] */
  public function setExcludedDestination($excludedDestination)
  {
    $this->excludedDestination = $excludedDestination;
  }
  /** @return string[] */
  public function getExcludedDestination()
  {
    return $this->excludedDestination;
  }
  /** @param FeatureDescription[] */
  public function setFeatureDescription($featureDescription)
  {
    $this->featureDescription = $featureDescription;
  }
  /** @return FeatureDescription[] */
  public function getFeatureDescription()
  {
    return $this->featureDescription;
  }
  /** @param string */
  public function setFlavor($flavor)
  {
    $this->flavor = $flavor;
  }
  /** @return string */
  public function getFlavor()
  {
    return $this->flavor;
  }
  /** @param string */
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /** @return string */
  public function getFormat()
  {
    return $this->format;
  }
  /** @param string */
  public function setGender($gender)
  {
    $this->gender = $gender;
  }
  /** @return string */
  public function getGender()
  {
    return $this->gender;
  }
  /** @param Grocery */
  public function setGrocery(Grocery $grocery)
  {
    $this->grocery = $grocery;
  }
  /** @return Grocery */
  public function getGrocery()
  {
    return $this->grocery;
  }
  /** @param string[] */
  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }
  /** @return string[] */
  public function getGtin()
  {
    return $this->gtin;
  }
  /** @param Image */
  public function setImageLink(Image $imageLink)
  {
    $this->imageLink = $imageLink;
  }
  /** @return Image */
  public function getImageLink()
  {
    return $this->imageLink;
  }
  /** @param string[] */
  public function setIncludedDestination($includedDestination)
  {
    $this->includedDestination = $includedDestination;
  }
  /** @return string[] */
  public function getIncludedDestination()
  {
    return $this->includedDestination;
  }
  /** @param string */
  public function setItemGroupId($itemGroupId)
  {
    $this->itemGroupId = $itemGroupId;
  }
  /** @return string */
  public function getItemGroupId()
  {
    return $this->itemGroupId;
  }
  /** @param string */
  public function setMaterial($material)
  {
    $this->material = $material;
  }
  /** @return string */
  public function getMaterial()
  {
    return $this->material;
  }
  /** @param string */
  public function setMpn($mpn)
  {
    $this->mpn = $mpn;
  }
  /** @return string */
  public function getMpn()
  {
    return $this->mpn;
  }
  /** @param Nutrition */
  public function setNutrition(Nutrition $nutrition)
  {
    $this->nutrition = $nutrition;
  }
  /** @return Nutrition */
  public function getNutrition()
  {
    return $this->nutrition;
  }
  /** @param string */
  public function setPattern($pattern)
  {
    $this->pattern = $pattern;
  }
  /** @return string */
  public function getPattern()
  {
    return $this->pattern;
  }
  /** @param ProductDetail[] */
  public function setProductDetail($productDetail)
  {
    $this->productDetail = $productDetail;
  }
  /** @return ProductDetail[] */
  public function getProductDetail()
  {
    return $this->productDetail;
  }
  /** @param string[] */
  public function setProductHighlight($productHighlight)
  {
    $this->productHighlight = $productHighlight;
  }
  /** @return string[] */
  public function getProductHighlight()
  {
    return $this->productHighlight;
  }
  /** @param string */
  public function setProductLine($productLine)
  {
    $this->productLine = $productLine;
  }
  /** @return string */
  public function getProductLine()
  {
    return $this->productLine;
  }
  /** @param string */
  public function setProductName($productName)
  {
    $this->productName = $productName;
  }
  /** @return string */
  public function getProductName()
  {
    return $this->productName;
  }
  /** @param string */
  public function setProductPageUrl($productPageUrl)
  {
    $this->productPageUrl = $productPageUrl;
  }
  /** @return string */
  public function getProductPageUrl()
  {
    return $this->productPageUrl;
  }
  /** @param string[] */
  public function setProductType($productType)
  {
    $this->productType = $productType;
  }
  /** @return string[] */
  public function getProductType()
  {
    return $this->productType;
  }
  /** @param string */
  public function setReleaseDate($releaseDate)
  {
    $this->releaseDate = $releaseDate;
  }
  /** @return string */
  public function getReleaseDate()
  {
    return $this->releaseDate;
  }
  /** @param string[] */
  public function setRichProductContent($richProductContent)
  {
    $this->richProductContent = $richProductContent;
  }
  /** @return string[] */
  public function getRichProductContent()
  {
    return $this->richProductContent;
  }
  /** @param string */
  public function setScent($scent)
  {
    $this->scent = $scent;
  }
  /** @return string */
  public function getScent()
  {
    return $this->scent;
  }
  /** @param string */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /** @return string */
  public function getSize()
  {
    return $this->size;
  }
  /** @param string */
  public function setSizeSystem($sizeSystem)
  {
    $this->sizeSystem = $sizeSystem;
  }
  /** @return string */
  public function getSizeSystem()
  {
    return $this->sizeSystem;
  }
  /** @param string[] */
  public function setSizeType($sizeType)
  {
    $this->sizeType = $sizeType;
  }
  /** @return string[] */
  public function getSizeType()
  {
    return $this->sizeType;
  }
  /** @param Price */
  public function setSuggestedRetailPrice(Price $suggestedRetailPrice)
  {
    $this->suggestedRetailPrice = $suggestedRetailPrice;
  }
  /** @return Price */
  public function getSuggestedRetailPrice()
  {
    return $this->suggestedRetailPrice;
  }
  /** @param string */
  public function setTargetClientId($targetClientId)
  {
    $this->targetClientId = $targetClientId;
  }
  /** @return string */
  public function getTargetClientId()
  {
    return $this->targetClientId;
  }
  /** @param string */
  public function setTheme($theme)
  {
    $this->theme = $theme;
  }
  /** @return string */
  public function getTheme()
  {
    return $this->theme;
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
  /** @param string[] */
  public function setVideoLink($videoLink)
  {
    $this->videoLink = $videoLink;
  }
  /** @return string[] */
  public function getVideoLink()
  {
    return $this->videoLink;
  }
}

class Capacity extends \Google\Model
{
  /** @var string */
  public $unit;
  /** @var string */
  public $value;

  /** @param string */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /** @return string */
  public function getUnit()
  {
    return $this->unit;
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

class Count extends \Google\Model
{
  /** @var string */
  public $unit;
  /** @var string */
  public $value;

  /** @param string */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /** @return string */
  public function getUnit()
  {
    return $this->unit;
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

class DestinationStatus extends \Google\Model
{
  /** @var string */
  public $destination;
  /** @var string */
  public $status;

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
  /** @param string */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
  }
}

class FeatureDescription extends \Google\Model
{
  /** @var string */
  public $headline;
  /** @var Image */
  public $image;
  /** @var string */
  public $text;
  protected $imageType = Image::class;
  protected $imageDataType = '';
  /** @param string */
  public function setHeadline($headline)
  {
    $this->headline = $headline;
  }
  /** @return string */
  public function getHeadline()
  {
    return $this->headline;
  }
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

class FloatUnit extends \Google\Model
{
  public $amount;
  /** @var string */
  public $unit;

  public function setAmount($amount)
  {
    $this->amount = $amount;
  }
  public function getAmount()
  {
    return $this->amount;
  }
  /** @param string */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /** @return string */
  public function getUnit()
  {
    return $this->unit;
  }
}

class Grocery extends \Google\Collection
{
  /** @var string */
  public $activeIngredients;
  public $alcoholByVolume;
  /** @var string */
  public $allergens;
  /** @var string[] */
  public $derivedNutritionClaim;
  /** @var string */
  public $directions;
  /** @var string */
  public $indications;
  /** @var string */
  public $ingredients;
  /** @var string[] */
  public $nutritionClaim;
  /** @var string */
  public $storageInstructions;
  protected $collection_key = 'nutritionClaim';
  /** @param string */
  public function setActiveIngredients($activeIngredients)
  {
    $this->activeIngredients = $activeIngredients;
  }
  /** @return string */
  public function getActiveIngredients()
  {
    return $this->activeIngredients;
  }
  public function setAlcoholByVolume($alcoholByVolume)
  {
    $this->alcoholByVolume = $alcoholByVolume;
  }
  public function getAlcoholByVolume()
  {
    return $this->alcoholByVolume;
  }
  /** @param string */
  public function setAllergens($allergens)
  {
    $this->allergens = $allergens;
  }
  /** @return string */
  public function getAllergens()
  {
    return $this->allergens;
  }
  /** @param string[] */
  public function setDerivedNutritionClaim($derivedNutritionClaim)
  {
    $this->derivedNutritionClaim = $derivedNutritionClaim;
  }
  /** @return string[] */
  public function getDerivedNutritionClaim()
  {
    return $this->derivedNutritionClaim;
  }
  /** @param string */
  public function setDirections($directions)
  {
    $this->directions = $directions;
  }
  /** @return string */
  public function getDirections()
  {
    return $this->directions;
  }
  /** @param string */
  public function setIndications($indications)
  {
    $this->indications = $indications;
  }
  /** @return string */
  public function getIndications()
  {
    return $this->indications;
  }
  /** @param string */
  public function setIngredients($ingredients)
  {
    $this->ingredients = $ingredients;
  }
  /** @return string */
  public function getIngredients()
  {
    return $this->ingredients;
  }
  /** @param string[] */
  public function setNutritionClaim($nutritionClaim)
  {
    $this->nutritionClaim = $nutritionClaim;
  }
  /** @return string[] */
  public function getNutritionClaim()
  {
    return $this->nutritionClaim;
  }
  /** @param string */
  public function setStorageInstructions($storageInstructions)
  {
    $this->storageInstructions = $storageInstructions;
  }
  /** @return string */
  public function getStorageInstructions()
  {
    return $this->storageInstructions;
  }
}

class Image extends \Google\Model
{
  /** @var string */
  public $imageUrl;
  /** @var string */
  public $status;
  /** @var string */
  public $type;

  /** @param string */
  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }
  /** @return string */
  public function getImageUrl()
  {
    return $this->imageUrl;
  }
  /** @param string */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /** @return string */
  public function getStatus()
  {
    return $this->status;
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

class Issue extends \Google\Model
{
  /** @var string */
  public $attribute;
  /** @var string */
  public $description;
  /** @var string */
  public $destination;
  /** @var string */
  public $resolution;
  /** @var string */
  public $severity;
  /** @var string */
  public $timestamp;
  /** @var string */
  public $title;
  /** @var string */
  public $type;

  /** @param string */
  public function setAttribute($attribute)
  {
    $this->attribute = $attribute;
  }
  /** @return string */
  public function getAttribute()
  {
    return $this->attribute;
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
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /** @return string */
  public function getDestination()
  {
    return $this->destination;
  }
  /** @param string */
  public function setResolution($resolution)
  {
    $this->resolution = $resolution;
  }
  /** @return string */
  public function getResolution()
  {
    return $this->resolution;
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
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /** @return string */
  public function getTimestamp()
  {
    return $this->timestamp;
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

class ListProductsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var Product[] */
  public $products;
  protected $collection_key = 'products';
  protected $productsType = Product::class;
  protected $productsDataType = 'array';
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
  /** @param Product[] */
  public function setProducts($products)
  {
    $this->products = $products;
  }
  /** @return Product[] */
  public function getProducts()
  {
    return $this->products;
  }
}

class ManufacturersEmpty extends \Google\Model
{
}

class Nutrition extends \Google\Collection
{
  /** @var FloatUnit */
  public $addedSugars;
  public $addedSugarsDailyPercentage;
  /** @var FloatUnit */
  public $calcium;
  public $calciumDailyPercentage;
  /** @var FloatUnit */
  public $cholesterol;
  public $cholesterolDailyPercentage;
  /** @var FloatUnit */
  public $dietaryFiber;
  public $dietaryFiberDailyPercentage;
  /** @var FloatUnit */
  public $energy;
  /** @var FloatUnit */
  public $energyFromFat;
  public $folateDailyPercentage;
  /** @var FloatUnit */
  public $folateFolicAcid;
  public $folateMcgDfe;
  /** @var FloatUnit */
  public $iron;
  public $ironDailyPercentage;
  /** @var FloatUnit */
  public $monounsaturatedFat;
  /** @var string */
  public $nutritionFactMeasure;
  /** @var FloatUnit */
  public $polyols;
  /** @var FloatUnit */
  public $polyunsaturatedFat;
  /** @var FloatUnit */
  public $potassium;
  public $potassiumDailyPercentage;
  /** @var string */
  public $preparedSizeDescription;
  /** @var FloatUnit */
  public $protein;
  public $proteinDailyPercentage;
  /** @var FloatUnit */
  public $saturatedFat;
  public $saturatedFatDailyPercentage;
  /** @var string */
  public $servingSizeDescription;
  /** @var FloatUnit */
  public $servingSizeMeasure;
  /** @var string */
  public $servingsPerContainer;
  /** @var FloatUnit */
  public $sodium;
  public $sodiumDailyPercentage;
  /** @var FloatUnit */
  public $starch;
  /** @var FloatUnit */
  public $totalCarbohydrate;
  public $totalCarbohydrateDailyPercentage;
  /** @var FloatUnit */
  public $totalFat;
  public $totalFatDailyPercentage;
  /** @var FloatUnit */
  public $totalSugars;
  public $totalSugarsDailyPercentage;
  /** @var FloatUnit */
  public $transFat;
  public $transFatDailyPercentage;
  /** @var FloatUnit */
  public $vitaminD;
  public $vitaminDDailyPercentage;
  /** @var VoluntaryNutritionFact[] */
  public $voluntaryNutritionFact;
  protected $collection_key = 'voluntaryNutritionFact';
  protected $addedSugarsType = FloatUnit::class;
  protected $addedSugarsDataType = '';
  protected $calciumType = FloatUnit::class;
  protected $calciumDataType = '';
  protected $cholesterolType = FloatUnit::class;
  protected $cholesterolDataType = '';
  protected $dietaryFiberType = FloatUnit::class;
  protected $dietaryFiberDataType = '';
  protected $energyType = FloatUnit::class;
  protected $energyDataType = '';
  protected $energyFromFatType = FloatUnit::class;
  protected $energyFromFatDataType = '';
  protected $folateFolicAcidType = FloatUnit::class;
  protected $folateFolicAcidDataType = '';
  protected $ironType = FloatUnit::class;
  protected $ironDataType = '';
  protected $monounsaturatedFatType = FloatUnit::class;
  protected $monounsaturatedFatDataType = '';
  protected $polyolsType = FloatUnit::class;
  protected $polyolsDataType = '';
  protected $polyunsaturatedFatType = FloatUnit::class;
  protected $polyunsaturatedFatDataType = '';
  protected $potassiumType = FloatUnit::class;
  protected $potassiumDataType = '';
  protected $proteinType = FloatUnit::class;
  protected $proteinDataType = '';
  protected $saturatedFatType = FloatUnit::class;
  protected $saturatedFatDataType = '';
  protected $servingSizeMeasureType = FloatUnit::class;
  protected $servingSizeMeasureDataType = '';
  protected $sodiumType = FloatUnit::class;
  protected $sodiumDataType = '';
  protected $starchType = FloatUnit::class;
  protected $starchDataType = '';
  protected $totalCarbohydrateType = FloatUnit::class;
  protected $totalCarbohydrateDataType = '';
  protected $totalFatType = FloatUnit::class;
  protected $totalFatDataType = '';
  protected $totalSugarsType = FloatUnit::class;
  protected $totalSugarsDataType = '';
  protected $transFatType = FloatUnit::class;
  protected $transFatDataType = '';
  protected $vitaminDType = FloatUnit::class;
  protected $vitaminDDataType = '';
  protected $voluntaryNutritionFactType = VoluntaryNutritionFact::class;
  protected $voluntaryNutritionFactDataType = 'array';
  /** @param FloatUnit */
  public function setAddedSugars(FloatUnit $addedSugars)
  {
    $this->addedSugars = $addedSugars;
  }
  /** @return FloatUnit */
  public function getAddedSugars()
  {
    return $this->addedSugars;
  }
  public function setAddedSugarsDailyPercentage($addedSugarsDailyPercentage)
  {
    $this->addedSugarsDailyPercentage = $addedSugarsDailyPercentage;
  }
  public function getAddedSugarsDailyPercentage()
  {
    return $this->addedSugarsDailyPercentage;
  }
  /** @param FloatUnit */
  public function setCalcium(FloatUnit $calcium)
  {
    $this->calcium = $calcium;
  }
  /** @return FloatUnit */
  public function getCalcium()
  {
    return $this->calcium;
  }
  public function setCalciumDailyPercentage($calciumDailyPercentage)
  {
    $this->calciumDailyPercentage = $calciumDailyPercentage;
  }
  public function getCalciumDailyPercentage()
  {
    return $this->calciumDailyPercentage;
  }
  /** @param FloatUnit */
  public function setCholesterol(FloatUnit $cholesterol)
  {
    $this->cholesterol = $cholesterol;
  }
  /** @return FloatUnit */
  public function getCholesterol()
  {
    return $this->cholesterol;
  }
  public function setCholesterolDailyPercentage($cholesterolDailyPercentage)
  {
    $this->cholesterolDailyPercentage = $cholesterolDailyPercentage;
  }
  public function getCholesterolDailyPercentage()
  {
    return $this->cholesterolDailyPercentage;
  }
  /** @param FloatUnit */
  public function setDietaryFiber(FloatUnit $dietaryFiber)
  {
    $this->dietaryFiber = $dietaryFiber;
  }
  /** @return FloatUnit */
  public function getDietaryFiber()
  {
    return $this->dietaryFiber;
  }
  public function setDietaryFiberDailyPercentage($dietaryFiberDailyPercentage)
  {
    $this->dietaryFiberDailyPercentage = $dietaryFiberDailyPercentage;
  }
  public function getDietaryFiberDailyPercentage()
  {
    return $this->dietaryFiberDailyPercentage;
  }
  /** @param FloatUnit */
  public function setEnergy(FloatUnit $energy)
  {
    $this->energy = $energy;
  }
  /** @return FloatUnit */
  public function getEnergy()
  {
    return $this->energy;
  }
  /** @param FloatUnit */
  public function setEnergyFromFat(FloatUnit $energyFromFat)
  {
    $this->energyFromFat = $energyFromFat;
  }
  /** @return FloatUnit */
  public function getEnergyFromFat()
  {
    return $this->energyFromFat;
  }
  public function setFolateDailyPercentage($folateDailyPercentage)
  {
    $this->folateDailyPercentage = $folateDailyPercentage;
  }
  public function getFolateDailyPercentage()
  {
    return $this->folateDailyPercentage;
  }
  /** @param FloatUnit */
  public function setFolateFolicAcid(FloatUnit $folateFolicAcid)
  {
    $this->folateFolicAcid = $folateFolicAcid;
  }
  /** @return FloatUnit */
  public function getFolateFolicAcid()
  {
    return $this->folateFolicAcid;
  }
  public function setFolateMcgDfe($folateMcgDfe)
  {
    $this->folateMcgDfe = $folateMcgDfe;
  }
  public function getFolateMcgDfe()
  {
    return $this->folateMcgDfe;
  }
  /** @param FloatUnit */
  public function setIron(FloatUnit $iron)
  {
    $this->iron = $iron;
  }
  /** @return FloatUnit */
  public function getIron()
  {
    return $this->iron;
  }
  public function setIronDailyPercentage($ironDailyPercentage)
  {
    $this->ironDailyPercentage = $ironDailyPercentage;
  }
  public function getIronDailyPercentage()
  {
    return $this->ironDailyPercentage;
  }
  /** @param FloatUnit */
  public function setMonounsaturatedFat(FloatUnit $monounsaturatedFat)
  {
    $this->monounsaturatedFat = $monounsaturatedFat;
  }
  /** @return FloatUnit */
  public function getMonounsaturatedFat()
  {
    return $this->monounsaturatedFat;
  }
  /** @param string */
  public function setNutritionFactMeasure($nutritionFactMeasure)
  {
    $this->nutritionFactMeasure = $nutritionFactMeasure;
  }
  /** @return string */
  public function getNutritionFactMeasure()
  {
    return $this->nutritionFactMeasure;
  }
  /** @param FloatUnit */
  public function setPolyols(FloatUnit $polyols)
  {
    $this->polyols = $polyols;
  }
  /** @return FloatUnit */
  public function getPolyols()
  {
    return $this->polyols;
  }
  /** @param FloatUnit */
  public function setPolyunsaturatedFat(FloatUnit $polyunsaturatedFat)
  {
    $this->polyunsaturatedFat = $polyunsaturatedFat;
  }
  /** @return FloatUnit */
  public function getPolyunsaturatedFat()
  {
    return $this->polyunsaturatedFat;
  }
  /** @param FloatUnit */
  public function setPotassium(FloatUnit $potassium)
  {
    $this->potassium = $potassium;
  }
  /** @return FloatUnit */
  public function getPotassium()
  {
    return $this->potassium;
  }
  public function setPotassiumDailyPercentage($potassiumDailyPercentage)
  {
    $this->potassiumDailyPercentage = $potassiumDailyPercentage;
  }
  public function getPotassiumDailyPercentage()
  {
    return $this->potassiumDailyPercentage;
  }
  /** @param string */
  public function setPreparedSizeDescription($preparedSizeDescription)
  {
    $this->preparedSizeDescription = $preparedSizeDescription;
  }
  /** @return string */
  public function getPreparedSizeDescription()
  {
    return $this->preparedSizeDescription;
  }
  /** @param FloatUnit */
  public function setProtein(FloatUnit $protein)
  {
    $this->protein = $protein;
  }
  /** @return FloatUnit */
  public function getProtein()
  {
    return $this->protein;
  }
  public function setProteinDailyPercentage($proteinDailyPercentage)
  {
    $this->proteinDailyPercentage = $proteinDailyPercentage;
  }
  public function getProteinDailyPercentage()
  {
    return $this->proteinDailyPercentage;
  }
  /** @param FloatUnit */
  public function setSaturatedFat(FloatUnit $saturatedFat)
  {
    $this->saturatedFat = $saturatedFat;
  }
  /** @return FloatUnit */
  public function getSaturatedFat()
  {
    return $this->saturatedFat;
  }
  public function setSaturatedFatDailyPercentage($saturatedFatDailyPercentage)
  {
    $this->saturatedFatDailyPercentage = $saturatedFatDailyPercentage;
  }
  public function getSaturatedFatDailyPercentage()
  {
    return $this->saturatedFatDailyPercentage;
  }
  /** @param string */
  public function setServingSizeDescription($servingSizeDescription)
  {
    $this->servingSizeDescription = $servingSizeDescription;
  }
  /** @return string */
  public function getServingSizeDescription()
  {
    return $this->servingSizeDescription;
  }
  /** @param FloatUnit */
  public function setServingSizeMeasure(FloatUnit $servingSizeMeasure)
  {
    $this->servingSizeMeasure = $servingSizeMeasure;
  }
  /** @return FloatUnit */
  public function getServingSizeMeasure()
  {
    return $this->servingSizeMeasure;
  }
  /** @param string */
  public function setServingsPerContainer($servingsPerContainer)
  {
    $this->servingsPerContainer = $servingsPerContainer;
  }
  /** @return string */
  public function getServingsPerContainer()
  {
    return $this->servingsPerContainer;
  }
  /** @param FloatUnit */
  public function setSodium(FloatUnit $sodium)
  {
    $this->sodium = $sodium;
  }
  /** @return FloatUnit */
  public function getSodium()
  {
    return $this->sodium;
  }
  public function setSodiumDailyPercentage($sodiumDailyPercentage)
  {
    $this->sodiumDailyPercentage = $sodiumDailyPercentage;
  }
  public function getSodiumDailyPercentage()
  {
    return $this->sodiumDailyPercentage;
  }
  /** @param FloatUnit */
  public function setStarch(FloatUnit $starch)
  {
    $this->starch = $starch;
  }
  /** @return FloatUnit */
  public function getStarch()
  {
    return $this->starch;
  }
  /** @param FloatUnit */
  public function setTotalCarbohydrate(FloatUnit $totalCarbohydrate)
  {
    $this->totalCarbohydrate = $totalCarbohydrate;
  }
  /** @return FloatUnit */
  public function getTotalCarbohydrate()
  {
    return $this->totalCarbohydrate;
  }
  public function setTotalCarbohydrateDailyPercentage($totalCarbohydrateDailyPercentage)
  {
    $this->totalCarbohydrateDailyPercentage = $totalCarbohydrateDailyPercentage;
  }
  public function getTotalCarbohydrateDailyPercentage()
  {
    return $this->totalCarbohydrateDailyPercentage;
  }
  /** @param FloatUnit */
  public function setTotalFat(FloatUnit $totalFat)
  {
    $this->totalFat = $totalFat;
  }
  /** @return FloatUnit */
  public function getTotalFat()
  {
    return $this->totalFat;
  }
  public function setTotalFatDailyPercentage($totalFatDailyPercentage)
  {
    $this->totalFatDailyPercentage = $totalFatDailyPercentage;
  }
  public function getTotalFatDailyPercentage()
  {
    return $this->totalFatDailyPercentage;
  }
  /** @param FloatUnit */
  public function setTotalSugars(FloatUnit $totalSugars)
  {
    $this->totalSugars = $totalSugars;
  }
  /** @return FloatUnit */
  public function getTotalSugars()
  {
    return $this->totalSugars;
  }
  public function setTotalSugarsDailyPercentage($totalSugarsDailyPercentage)
  {
    $this->totalSugarsDailyPercentage = $totalSugarsDailyPercentage;
  }
  public function getTotalSugarsDailyPercentage()
  {
    return $this->totalSugarsDailyPercentage;
  }
  /** @param FloatUnit */
  public function setTransFat(FloatUnit $transFat)
  {
    $this->transFat = $transFat;
  }
  /** @return FloatUnit */
  public function getTransFat()
  {
    return $this->transFat;
  }
  public function setTransFatDailyPercentage($transFatDailyPercentage)
  {
    $this->transFatDailyPercentage = $transFatDailyPercentage;
  }
  public function getTransFatDailyPercentage()
  {
    return $this->transFatDailyPercentage;
  }
  /** @param FloatUnit */
  public function setVitaminD(FloatUnit $vitaminD)
  {
    $this->vitaminD = $vitaminD;
  }
  /** @return FloatUnit */
  public function getVitaminD()
  {
    return $this->vitaminD;
  }
  public function setVitaminDDailyPercentage($vitaminDDailyPercentage)
  {
    $this->vitaminDDailyPercentage = $vitaminDDailyPercentage;
  }
  public function getVitaminDDailyPercentage()
  {
    return $this->vitaminDDailyPercentage;
  }
  /** @param VoluntaryNutritionFact[] */
  public function setVoluntaryNutritionFact($voluntaryNutritionFact)
  {
    $this->voluntaryNutritionFact = $voluntaryNutritionFact;
  }
  /** @return VoluntaryNutritionFact[] */
  public function getVoluntaryNutritionFact()
  {
    return $this->voluntaryNutritionFact;
  }
}

class Price extends \Google\Model
{
  /** @var string */
  public $amount;
  /** @var string */
  public $currency;

  /** @param string */
  public function setAmount($amount)
  {
    $this->amount = $amount;
  }
  /** @return string */
  public function getAmount()
  {
    return $this->amount;
  }
  /** @param string */
  public function setCurrency($currency)
  {
    $this->currency = $currency;
  }
  /** @return string */
  public function getCurrency()
  {
    return $this->currency;
  }
}

class Product extends \Google\Collection
{
  /** @var Attributes */
  public $attributes;
  /** @var string */
  public $contentLanguage;
  /** @var DestinationStatus[] */
  public $destinationStatuses;
  /** @var Issue[] */
  public $issues;
  /** @var string */
  public $name;
  /** @var string */
  public $parent;
  /** @var string */
  public $productId;
  /** @var string */
  public $targetCountry;
  protected $collection_key = 'issues';
  protected $attributesType = Attributes::class;
  protected $attributesDataType = '';
  protected $destinationStatusesType = DestinationStatus::class;
  protected $destinationStatusesDataType = 'array';
  protected $issuesType = Issue::class;
  protected $issuesDataType = 'array';
  /** @param Attributes */
  public function setAttributes(Attributes $attributes)
  {
    $this->attributes = $attributes;
  }
  /** @return Attributes */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /** @param string */
  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }
  /** @return string */
  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }
  /** @param DestinationStatus[] */
  public function setDestinationStatuses($destinationStatuses)
  {
    $this->destinationStatuses = $destinationStatuses;
  }
  /** @return DestinationStatus[] */
  public function getDestinationStatuses()
  {
    return $this->destinationStatuses;
  }
  /** @param Issue[] */
  public function setIssues($issues)
  {
    $this->issues = $issues;
  }
  /** @return Issue[] */
  public function getIssues()
  {
    return $this->issues;
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
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /** @return string */
  public function getParent()
  {
    return $this->parent;
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
  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }
  /** @return string */
  public function getTargetCountry()
  {
    return $this->targetCountry;
  }
}

class ProductDetail extends \Google\Model
{
  /** @var string */
  public $attributeName;
  /** @var string */
  public $attributeValue;
  /** @var string */
  public $sectionName;

  /** @param string */
  public function setAttributeName($attributeName)
  {
    $this->attributeName = $attributeName;
  }
  /** @return string */
  public function getAttributeName()
  {
    return $this->attributeName;
  }
  /** @param string */
  public function setAttributeValue($attributeValue)
  {
    $this->attributeValue = $attributeValue;
  }
  /** @return string */
  public function getAttributeValue()
  {
    return $this->attributeValue;
  }
  /** @param string */
  public function setSectionName($sectionName)
  {
    $this->sectionName = $sectionName;
  }
  /** @return string */
  public function getSectionName()
  {
    return $this->sectionName;
  }
}

class VoluntaryNutritionFact extends \Google\Model
{
  public $dailyPercentage;
  /** @var string */
  public $name;
  /** @var FloatUnit */
  public $value;
  protected $valueType = FloatUnit::class;
  protected $valueDataType = '';
  public function setDailyPercentage($dailyPercentage)
  {
    $this->dailyPercentage = $dailyPercentage;
  }
  public function getDailyPercentage()
  {
    return $this->dailyPercentage;
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
  /** @param FloatUnit */
  public function setValue(FloatUnit $value)
  {
    $this->value = $value;
  }
  /** @return FloatUnit */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Attributes::class, 'Google_Service_ManufacturerCenter_Attributes');
class_alias(Capacity::class, 'Google_Service_ManufacturerCenter_Capacity');
class_alias(Count::class, 'Google_Service_ManufacturerCenter_Count');
class_alias(DestinationStatus::class, 'Google_Service_ManufacturerCenter_DestinationStatus');
class_alias(FeatureDescription::class, 'Google_Service_ManufacturerCenter_FeatureDescription');
class_alias(FloatUnit::class, 'Google_Service_ManufacturerCenter_FloatUnit');
class_alias(Grocery::class, 'Google_Service_ManufacturerCenter_Grocery');
class_alias(Image::class, 'Google_Service_ManufacturerCenter_Image');
class_alias(Issue::class, 'Google_Service_ManufacturerCenter_Issue');
class_alias(ListProductsResponse::class, 'Google_Service_ManufacturerCenter_ListProductsResponse');
class_alias(ManufacturersEmpty::class, 'Google_Service_ManufacturerCenter_ManufacturersEmpty');
class_alias(Nutrition::class, 'Google_Service_ManufacturerCenter_Nutrition');
class_alias(Price::class, 'Google_Service_ManufacturerCenter_Price');
class_alias(Product::class, 'Google_Service_ManufacturerCenter_Product');
class_alias(ProductDetail::class, 'Google_Service_ManufacturerCenter_ProductDetail');
class_alias(VoluntaryNutritionFact::class, 'Google_Service_ManufacturerCenter_VoluntaryNutritionFact');
