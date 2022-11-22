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

namespace Google\Service\Vision;

class AddProductToProductSetRequest extends \Google\Model
{
  /** @var string */
  public $product;

  /** @param string */
  public function setProduct($product)
  {
    $this->product = $product;
  }
  /** @return string */
  public function getProduct()
  {
    return $this->product;
  }
}

class AnnotateFileRequest extends \Google\Collection
{
  /** @var Feature[] */
  public $features;
  /** @var ImageContext */
  public $imageContext;
  /** @var InputConfig */
  public $inputConfig;
  /** @var int[] */
  public $pages;
  protected $collection_key = 'pages';
  protected $featuresType = Feature::class;
  protected $featuresDataType = 'array';
  protected $imageContextType = ImageContext::class;
  protected $imageContextDataType = '';
  protected $inputConfigType = InputConfig::class;
  protected $inputConfigDataType = '';
  /** @param Feature[] */
  public function setFeatures($features)
  {
    $this->features = $features;
  }
  /** @return Feature[] */
  public function getFeatures()
  {
    return $this->features;
  }
  /** @param ImageContext */
  public function setImageContext(ImageContext $imageContext)
  {
    $this->imageContext = $imageContext;
  }
  /** @return ImageContext */
  public function getImageContext()
  {
    return $this->imageContext;
  }
  /** @param InputConfig */
  public function setInputConfig(InputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return InputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
  /** @param int[] */
  public function setPages($pages)
  {
    $this->pages = $pages;
  }
  /** @return int[] */
  public function getPages()
  {
    return $this->pages;
  }
}

class AnnotateFileResponse extends \Google\Collection
{
  /** @var Status */
  public $error;
  /** @var InputConfig */
  public $inputConfig;
  /** @var AnnotateImageResponse[] */
  public $responses;
  /** @var int */
  public $totalPages;
  protected $collection_key = 'responses';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $inputConfigType = InputConfig::class;
  protected $inputConfigDataType = '';
  protected $responsesType = AnnotateImageResponse::class;
  protected $responsesDataType = 'array';
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
  /** @param InputConfig */
  public function setInputConfig(InputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return InputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
  /** @param AnnotateImageResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return AnnotateImageResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
  /** @param int */
  public function setTotalPages($totalPages)
  {
    $this->totalPages = $totalPages;
  }
  /** @return int */
  public function getTotalPages()
  {
    return $this->totalPages;
  }
}

class AnnotateImageRequest extends \Google\Collection
{
  /** @var Feature[] */
  public $features;
  /** @var Image */
  public $image;
  /** @var ImageContext */
  public $imageContext;
  protected $collection_key = 'features';
  protected $featuresType = Feature::class;
  protected $featuresDataType = 'array';
  protected $imageType = Image::class;
  protected $imageDataType = '';
  protected $imageContextType = ImageContext::class;
  protected $imageContextDataType = '';
  /** @param Feature[] */
  public function setFeatures($features)
  {
    $this->features = $features;
  }
  /** @return Feature[] */
  public function getFeatures()
  {
    return $this->features;
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
  /** @param ImageContext */
  public function setImageContext(ImageContext $imageContext)
  {
    $this->imageContext = $imageContext;
  }
  /** @return ImageContext */
  public function getImageContext()
  {
    return $this->imageContext;
  }
}

class AnnotateImageResponse extends \Google\Collection
{
  /** @var ImageAnnotationContext */
  public $context;
  /** @var CropHintsAnnotation */
  public $cropHintsAnnotation;
  /** @var Status */
  public $error;
  /** @var FaceAnnotation[] */
  public $faceAnnotations;
  /** @var TextAnnotation */
  public $fullTextAnnotation;
  /** @var ImageProperties */
  public $imagePropertiesAnnotation;
  /** @var EntityAnnotation[] */
  public $labelAnnotations;
  /** @var EntityAnnotation[] */
  public $landmarkAnnotations;
  /** @var LocalizedObjectAnnotation[] */
  public $localizedObjectAnnotations;
  /** @var EntityAnnotation[] */
  public $logoAnnotations;
  /** @var ProductSearchResults */
  public $productSearchResults;
  /** @var SafeSearchAnnotation */
  public $safeSearchAnnotation;
  /** @var EntityAnnotation[] */
  public $textAnnotations;
  /** @var WebDetection */
  public $webDetection;
  protected $collection_key = 'textAnnotations';
  protected $contextType = ImageAnnotationContext::class;
  protected $contextDataType = '';
  protected $cropHintsAnnotationType = CropHintsAnnotation::class;
  protected $cropHintsAnnotationDataType = '';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $faceAnnotationsType = FaceAnnotation::class;
  protected $faceAnnotationsDataType = 'array';
  protected $fullTextAnnotationType = TextAnnotation::class;
  protected $fullTextAnnotationDataType = '';
  protected $imagePropertiesAnnotationType = ImageProperties::class;
  protected $imagePropertiesAnnotationDataType = '';
  protected $labelAnnotationsType = EntityAnnotation::class;
  protected $labelAnnotationsDataType = 'array';
  protected $landmarkAnnotationsType = EntityAnnotation::class;
  protected $landmarkAnnotationsDataType = 'array';
  protected $localizedObjectAnnotationsType = LocalizedObjectAnnotation::class;
  protected $localizedObjectAnnotationsDataType = 'array';
  protected $logoAnnotationsType = EntityAnnotation::class;
  protected $logoAnnotationsDataType = 'array';
  protected $productSearchResultsType = ProductSearchResults::class;
  protected $productSearchResultsDataType = '';
  protected $safeSearchAnnotationType = SafeSearchAnnotation::class;
  protected $safeSearchAnnotationDataType = '';
  protected $textAnnotationsType = EntityAnnotation::class;
  protected $textAnnotationsDataType = 'array';
  protected $webDetectionType = WebDetection::class;
  protected $webDetectionDataType = '';
  /** @param ImageAnnotationContext */
  public function setContext(ImageAnnotationContext $context)
  {
    $this->context = $context;
  }
  /** @return ImageAnnotationContext */
  public function getContext()
  {
    return $this->context;
  }
  /** @param CropHintsAnnotation */
  public function setCropHintsAnnotation(CropHintsAnnotation $cropHintsAnnotation)
  {
    $this->cropHintsAnnotation = $cropHintsAnnotation;
  }
  /** @return CropHintsAnnotation */
  public function getCropHintsAnnotation()
  {
    return $this->cropHintsAnnotation;
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
  /** @param FaceAnnotation[] */
  public function setFaceAnnotations($faceAnnotations)
  {
    $this->faceAnnotations = $faceAnnotations;
  }
  /** @return FaceAnnotation[] */
  public function getFaceAnnotations()
  {
    return $this->faceAnnotations;
  }
  /** @param TextAnnotation */
  public function setFullTextAnnotation(TextAnnotation $fullTextAnnotation)
  {
    $this->fullTextAnnotation = $fullTextAnnotation;
  }
  /** @return TextAnnotation */
  public function getFullTextAnnotation()
  {
    return $this->fullTextAnnotation;
  }
  /** @param ImageProperties */
  public function setImagePropertiesAnnotation(ImageProperties $imagePropertiesAnnotation)
  {
    $this->imagePropertiesAnnotation = $imagePropertiesAnnotation;
  }
  /** @return ImageProperties */
  public function getImagePropertiesAnnotation()
  {
    return $this->imagePropertiesAnnotation;
  }
  /** @param EntityAnnotation[] */
  public function setLabelAnnotations($labelAnnotations)
  {
    $this->labelAnnotations = $labelAnnotations;
  }
  /** @return EntityAnnotation[] */
  public function getLabelAnnotations()
  {
    return $this->labelAnnotations;
  }
  /** @param EntityAnnotation[] */
  public function setLandmarkAnnotations($landmarkAnnotations)
  {
    $this->landmarkAnnotations = $landmarkAnnotations;
  }
  /** @return EntityAnnotation[] */
  public function getLandmarkAnnotations()
  {
    return $this->landmarkAnnotations;
  }
  /** @param LocalizedObjectAnnotation[] */
  public function setLocalizedObjectAnnotations($localizedObjectAnnotations)
  {
    $this->localizedObjectAnnotations = $localizedObjectAnnotations;
  }
  /** @return LocalizedObjectAnnotation[] */
  public function getLocalizedObjectAnnotations()
  {
    return $this->localizedObjectAnnotations;
  }
  /** @param EntityAnnotation[] */
  public function setLogoAnnotations($logoAnnotations)
  {
    $this->logoAnnotations = $logoAnnotations;
  }
  /** @return EntityAnnotation[] */
  public function getLogoAnnotations()
  {
    return $this->logoAnnotations;
  }
  /** @param ProductSearchResults */
  public function setProductSearchResults(ProductSearchResults $productSearchResults)
  {
    $this->productSearchResults = $productSearchResults;
  }
  /** @return ProductSearchResults */
  public function getProductSearchResults()
  {
    return $this->productSearchResults;
  }
  /** @param SafeSearchAnnotation */
  public function setSafeSearchAnnotation(SafeSearchAnnotation $safeSearchAnnotation)
  {
    $this->safeSearchAnnotation = $safeSearchAnnotation;
  }
  /** @return SafeSearchAnnotation */
  public function getSafeSearchAnnotation()
  {
    return $this->safeSearchAnnotation;
  }
  /** @param EntityAnnotation[] */
  public function setTextAnnotations($textAnnotations)
  {
    $this->textAnnotations = $textAnnotations;
  }
  /** @return EntityAnnotation[] */
  public function getTextAnnotations()
  {
    return $this->textAnnotations;
  }
  /** @param WebDetection */
  public function setWebDetection(WebDetection $webDetection)
  {
    $this->webDetection = $webDetection;
  }
  /** @return WebDetection */
  public function getWebDetection()
  {
    return $this->webDetection;
  }
}

class AsyncAnnotateFileRequest extends \Google\Collection
{
  /** @var Feature[] */
  public $features;
  /** @var ImageContext */
  public $imageContext;
  /** @var InputConfig */
  public $inputConfig;
  /** @var OutputConfig */
  public $outputConfig;
  protected $collection_key = 'features';
  protected $featuresType = Feature::class;
  protected $featuresDataType = 'array';
  protected $imageContextType = ImageContext::class;
  protected $imageContextDataType = '';
  protected $inputConfigType = InputConfig::class;
  protected $inputConfigDataType = '';
  protected $outputConfigType = OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param Feature[] */
  public function setFeatures($features)
  {
    $this->features = $features;
  }
  /** @return Feature[] */
  public function getFeatures()
  {
    return $this->features;
  }
  /** @param ImageContext */
  public function setImageContext(ImageContext $imageContext)
  {
    $this->imageContext = $imageContext;
  }
  /** @return ImageContext */
  public function getImageContext()
  {
    return $this->imageContext;
  }
  /** @param InputConfig */
  public function setInputConfig(InputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return InputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
  /** @param OutputConfig */
  public function setOutputConfig(OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
}

class AsyncAnnotateFileResponse extends \Google\Model
{
  /** @var OutputConfig */
  public $outputConfig;
  protected $outputConfigType = OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param OutputConfig */
  public function setOutputConfig(OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
}

class AsyncBatchAnnotateFilesRequest extends \Google\Collection
{
  /** @var string */
  public $parent;
  /** @var AsyncAnnotateFileRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = AsyncAnnotateFileRequest::class;
  protected $requestsDataType = 'array';
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
  /** @param AsyncAnnotateFileRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return AsyncAnnotateFileRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class AsyncBatchAnnotateFilesResponse extends \Google\Collection
{
  /** @var AsyncAnnotateFileResponse[] */
  public $responses;
  protected $collection_key = 'responses';
  protected $responsesType = AsyncAnnotateFileResponse::class;
  protected $responsesDataType = 'array';
  /** @param AsyncAnnotateFileResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return AsyncAnnotateFileResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
}

class AsyncBatchAnnotateImagesRequest extends \Google\Collection
{
  /** @var OutputConfig */
  public $outputConfig;
  /** @var string */
  public $parent;
  /** @var AnnotateImageRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $outputConfigType = OutputConfig::class;
  protected $outputConfigDataType = '';
  protected $requestsType = AnnotateImageRequest::class;
  protected $requestsDataType = 'array';
  /** @param OutputConfig */
  public function setOutputConfig(OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
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
  /** @param AnnotateImageRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return AnnotateImageRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class AsyncBatchAnnotateImagesResponse extends \Google\Model
{
  /** @var OutputConfig */
  public $outputConfig;
  protected $outputConfigType = OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param OutputConfig */
  public function setOutputConfig(OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
}

class BatchAnnotateFilesRequest extends \Google\Collection
{
  /** @var string */
  public $parent;
  /** @var AnnotateFileRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = AnnotateFileRequest::class;
  protected $requestsDataType = 'array';
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
  /** @param AnnotateFileRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return AnnotateFileRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class BatchAnnotateFilesResponse extends \Google\Collection
{
  /** @var AnnotateFileResponse[] */
  public $responses;
  protected $collection_key = 'responses';
  protected $responsesType = AnnotateFileResponse::class;
  protected $responsesDataType = 'array';
  /** @param AnnotateFileResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return AnnotateFileResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
}

class BatchAnnotateImagesRequest extends \Google\Collection
{
  /** @var string */
  public $parent;
  /** @var AnnotateImageRequest[] */
  public $requests;
  protected $collection_key = 'requests';
  protected $requestsType = AnnotateImageRequest::class;
  protected $requestsDataType = 'array';
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
  /** @param AnnotateImageRequest[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return AnnotateImageRequest[] */
  public function getRequests()
  {
    return $this->requests;
  }
}

class BatchAnnotateImagesResponse extends \Google\Collection
{
  /** @var AnnotateImageResponse[] */
  public $responses;
  protected $collection_key = 'responses';
  protected $responsesType = AnnotateImageResponse::class;
  protected $responsesDataType = 'array';
  /** @param AnnotateImageResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return AnnotateImageResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
}

class BatchOperationMetadata extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $state;
  /** @var string */
  public $submitTime;

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
  public function setSubmitTime($submitTime)
  {
    $this->submitTime = $submitTime;
  }
  /** @return string */
  public function getSubmitTime()
  {
    return $this->submitTime;
  }
}

class Block extends \Google\Collection
{
  /** @var string */
  public $blockType;
  /** @var BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var Paragraph[] */
  public $paragraphs;
  /** @var TextProperty */
  public $property;
  protected $collection_key = 'paragraphs';
  protected $boundingBoxType = BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $paragraphsType = Paragraph::class;
  protected $paragraphsDataType = 'array';
  protected $propertyType = TextProperty::class;
  protected $propertyDataType = '';
  /** @param string */
  public function setBlockType($blockType)
  {
    $this->blockType = $blockType;
  }
  /** @return string */
  public function getBlockType()
  {
    return $this->blockType;
  }
  /** @param BoundingPoly */
  public function setBoundingBox(BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param Paragraph[] */
  public function setParagraphs($paragraphs)
  {
    $this->paragraphs = $paragraphs;
  }
  /** @return Paragraph[] */
  public function getParagraphs()
  {
    return $this->paragraphs;
  }
  /** @param TextProperty */
  public function setProperty(TextProperty $property)
  {
    $this->property = $property;
  }
  /** @return TextProperty */
  public function getProperty()
  {
    return $this->property;
  }
}

class BoundingPoly extends \Google\Collection
{
  /** @var NormalizedVertex[] */
  public $normalizedVertices;
  /** @var Vertex[] */
  public $vertices;
  protected $collection_key = 'vertices';
  protected $normalizedVerticesType = NormalizedVertex::class;
  protected $normalizedVerticesDataType = 'array';
  protected $verticesType = Vertex::class;
  protected $verticesDataType = 'array';
  /** @param NormalizedVertex[] */
  public function setNormalizedVertices($normalizedVertices)
  {
    $this->normalizedVertices = $normalizedVertices;
  }
  /** @return NormalizedVertex[] */
  public function getNormalizedVertices()
  {
    return $this->normalizedVertices;
  }
  /** @param Vertex[] */
  public function setVertices($vertices)
  {
    $this->vertices = $vertices;
  }
  /** @return Vertex[] */
  public function getVertices()
  {
    return $this->vertices;
  }
}

class CancelOperationRequest extends \Google\Model
{
}

class Color extends \Google\Model
{
  /** @var float */
  public $alpha;
  /** @var float */
  public $blue;
  /** @var float */
  public $green;
  /** @var float */
  public $red;

  /** @param float */
  public function setAlpha($alpha)
  {
    $this->alpha = $alpha;
  }
  /** @return float */
  public function getAlpha()
  {
    return $this->alpha;
  }
  /** @param float */
  public function setBlue($blue)
  {
    $this->blue = $blue;
  }
  /** @return float */
  public function getBlue()
  {
    return $this->blue;
  }
  /** @param float */
  public function setGreen($green)
  {
    $this->green = $green;
  }
  /** @return float */
  public function getGreen()
  {
    return $this->green;
  }
  /** @param float */
  public function setRed($red)
  {
    $this->red = $red;
  }
  /** @return float */
  public function getRed()
  {
    return $this->red;
  }
}

class ColorInfo extends \Google\Model
{
  /** @var Color */
  public $color;
  /** @var float */
  public $pixelFraction;
  /** @var float */
  public $score;
  protected $colorType = Color::class;
  protected $colorDataType = '';
  /** @param Color */
  public function setColor(Color $color)
  {
    $this->color = $color;
  }
  /** @return Color */
  public function getColor()
  {
    return $this->color;
  }
  /** @param float */
  public function setPixelFraction($pixelFraction)
  {
    $this->pixelFraction = $pixelFraction;
  }
  /** @return float */
  public function getPixelFraction()
  {
    return $this->pixelFraction;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class CropHint extends \Google\Model
{
  /** @var BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $confidence;
  /** @var float */
  public $importanceFraction;
  protected $boundingPolyType = BoundingPoly::class;
  protected $boundingPolyDataType = '';
  /** @param BoundingPoly */
  public function setBoundingPoly(BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param float */
  public function setImportanceFraction($importanceFraction)
  {
    $this->importanceFraction = $importanceFraction;
  }
  /** @return float */
  public function getImportanceFraction()
  {
    return $this->importanceFraction;
  }
}

class CropHintsAnnotation extends \Google\Collection
{
  /** @var CropHint[] */
  public $cropHints;
  protected $collection_key = 'cropHints';
  protected $cropHintsType = CropHint::class;
  protected $cropHintsDataType = 'array';
  /** @param CropHint[] */
  public function setCropHints($cropHints)
  {
    $this->cropHints = $cropHints;
  }
  /** @return CropHint[] */
  public function getCropHints()
  {
    return $this->cropHints;
  }
}

class CropHintsParams extends \Google\Collection
{
  /** @var float[] */
  public $aspectRatios;
  protected $collection_key = 'aspectRatios';
  /** @param float[] */
  public function setAspectRatios($aspectRatios)
  {
    $this->aspectRatios = $aspectRatios;
  }
  /** @return float[] */
  public function getAspectRatios()
  {
    return $this->aspectRatios;
  }
}

class DetectedBreak extends \Google\Model
{
  /** @var bool */
  public $isPrefix;
  /** @var string */
  public $type;

  /** @param bool */
  public function setIsPrefix($isPrefix)
  {
    $this->isPrefix = $isPrefix;
  }
  /** @return bool */
  public function getIsPrefix()
  {
    return $this->isPrefix;
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

class DetectedLanguage extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $languageCode;

  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
}

class DominantColorsAnnotation extends \Google\Collection
{
  /** @var ColorInfo[] */
  public $colors;
  protected $collection_key = 'colors';
  protected $colorsType = ColorInfo::class;
  protected $colorsDataType = 'array';
  /** @param ColorInfo[] */
  public function setColors($colors)
  {
    $this->colors = $colors;
  }
  /** @return ColorInfo[] */
  public function getColors()
  {
    return $this->colors;
  }
}

class EntityAnnotation extends \Google\Collection
{
  /** @var BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $confidence;
  /** @var string */
  public $description;
  /** @var string */
  public $locale;
  /** @var LocationInfo[] */
  public $locations;
  /** @var string */
  public $mid;
  /** @var Property[] */
  public $properties;
  /** @var float */
  public $score;
  /** @var float */
  public $topicality;
  protected $collection_key = 'properties';
  protected $boundingPolyType = BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $locationsType = LocationInfo::class;
  protected $locationsDataType = 'array';
  protected $propertiesType = Property::class;
  protected $propertiesDataType = 'array';
  /** @param BoundingPoly */
  public function setBoundingPoly(BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /** @return string */
  public function getLocale()
  {
    return $this->locale;
  }
  /** @param LocationInfo[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return LocationInfo[] */
  public function getLocations()
  {
    return $this->locations;
  }
  /** @param string */
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /** @return string */
  public function getMid()
  {
    return $this->mid;
  }
  /** @param Property[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return Property[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
  /** @param float */
  public function setTopicality($topicality)
  {
    $this->topicality = $topicality;
  }
  /** @return float */
  public function getTopicality()
  {
    return $this->topicality;
  }
}

class FaceAnnotation extends \Google\Collection
{
  /** @var string */
  public $angerLikelihood;
  /** @var string */
  public $blurredLikelihood;
  /** @var BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $detectionConfidence;
  /** @var BoundingPoly */
  public $fdBoundingPoly;
  /** @var string */
  public $headwearLikelihood;
  /** @var string */
  public $joyLikelihood;
  /** @var float */
  public $landmarkingConfidence;
  /** @var Landmark[] */
  public $landmarks;
  /** @var float */
  public $panAngle;
  /** @var float */
  public $rollAngle;
  /** @var string */
  public $sorrowLikelihood;
  /** @var string */
  public $surpriseLikelihood;
  /** @var float */
  public $tiltAngle;
  /** @var string */
  public $underExposedLikelihood;
  protected $collection_key = 'landmarks';
  protected $boundingPolyType = BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $fdBoundingPolyType = BoundingPoly::class;
  protected $fdBoundingPolyDataType = '';
  protected $landmarksType = Landmark::class;
  protected $landmarksDataType = 'array';
  /** @param string */
  public function setAngerLikelihood($angerLikelihood)
  {
    $this->angerLikelihood = $angerLikelihood;
  }
  /** @return string */
  public function getAngerLikelihood()
  {
    return $this->angerLikelihood;
  }
  /** @param string */
  public function setBlurredLikelihood($blurredLikelihood)
  {
    $this->blurredLikelihood = $blurredLikelihood;
  }
  /** @return string */
  public function getBlurredLikelihood()
  {
    return $this->blurredLikelihood;
  }
  /** @param BoundingPoly */
  public function setBoundingPoly(BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setDetectionConfidence($detectionConfidence)
  {
    $this->detectionConfidence = $detectionConfidence;
  }
  /** @return float */
  public function getDetectionConfidence()
  {
    return $this->detectionConfidence;
  }
  /** @param BoundingPoly */
  public function setFdBoundingPoly(BoundingPoly $fdBoundingPoly)
  {
    $this->fdBoundingPoly = $fdBoundingPoly;
  }
  /** @return BoundingPoly */
  public function getFdBoundingPoly()
  {
    return $this->fdBoundingPoly;
  }
  /** @param string */
  public function setHeadwearLikelihood($headwearLikelihood)
  {
    $this->headwearLikelihood = $headwearLikelihood;
  }
  /** @return string */
  public function getHeadwearLikelihood()
  {
    return $this->headwearLikelihood;
  }
  /** @param string */
  public function setJoyLikelihood($joyLikelihood)
  {
    $this->joyLikelihood = $joyLikelihood;
  }
  /** @return string */
  public function getJoyLikelihood()
  {
    return $this->joyLikelihood;
  }
  /** @param float */
  public function setLandmarkingConfidence($landmarkingConfidence)
  {
    $this->landmarkingConfidence = $landmarkingConfidence;
  }
  /** @return float */
  public function getLandmarkingConfidence()
  {
    return $this->landmarkingConfidence;
  }
  /** @param Landmark[] */
  public function setLandmarks($landmarks)
  {
    $this->landmarks = $landmarks;
  }
  /** @return Landmark[] */
  public function getLandmarks()
  {
    return $this->landmarks;
  }
  /** @param float */
  public function setPanAngle($panAngle)
  {
    $this->panAngle = $panAngle;
  }
  /** @return float */
  public function getPanAngle()
  {
    return $this->panAngle;
  }
  /** @param float */
  public function setRollAngle($rollAngle)
  {
    $this->rollAngle = $rollAngle;
  }
  /** @return float */
  public function getRollAngle()
  {
    return $this->rollAngle;
  }
  /** @param string */
  public function setSorrowLikelihood($sorrowLikelihood)
  {
    $this->sorrowLikelihood = $sorrowLikelihood;
  }
  /** @return string */
  public function getSorrowLikelihood()
  {
    return $this->sorrowLikelihood;
  }
  /** @param string */
  public function setSurpriseLikelihood($surpriseLikelihood)
  {
    $this->surpriseLikelihood = $surpriseLikelihood;
  }
  /** @return string */
  public function getSurpriseLikelihood()
  {
    return $this->surpriseLikelihood;
  }
  /** @param float */
  public function setTiltAngle($tiltAngle)
  {
    $this->tiltAngle = $tiltAngle;
  }
  /** @return float */
  public function getTiltAngle()
  {
    return $this->tiltAngle;
  }
  /** @param string */
  public function setUnderExposedLikelihood($underExposedLikelihood)
  {
    $this->underExposedLikelihood = $underExposedLikelihood;
  }
  /** @return string */
  public function getUnderExposedLikelihood()
  {
    return $this->underExposedLikelihood;
  }
}

class Feature extends \Google\Model
{
  /** @var int */
  public $maxResults;
  /** @var string */
  public $model;
  /** @var string */
  public $type;

  /** @param int */
  public function setMaxResults($maxResults)
  {
    $this->maxResults = $maxResults;
  }
  /** @return int */
  public function getMaxResults()
  {
    return $this->maxResults;
  }
  /** @param string */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /** @return string */
  public function getModel()
  {
    return $this->model;
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

class GcsDestination extends \Google\Model
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

class GoogleCloudVisionV1p1beta1AnnotateFileResponse extends \Google\Collection
{
  /** @var Status */
  public $error;
  /** @var GoogleCloudVisionV1p1beta1InputConfig */
  public $inputConfig;
  /** @var GoogleCloudVisionV1p1beta1AnnotateImageResponse[] */
  public $responses;
  /** @var int */
  public $totalPages;
  protected $collection_key = 'responses';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $inputConfigType = GoogleCloudVisionV1p1beta1InputConfig::class;
  protected $inputConfigDataType = '';
  protected $responsesType = GoogleCloudVisionV1p1beta1AnnotateImageResponse::class;
  protected $responsesDataType = 'array';
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
  /** @param GoogleCloudVisionV1p1beta1InputConfig */
  public function setInputConfig(GoogleCloudVisionV1p1beta1InputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return GoogleCloudVisionV1p1beta1InputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
  /** @param GoogleCloudVisionV1p1beta1AnnotateImageResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return GoogleCloudVisionV1p1beta1AnnotateImageResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
  /** @param int */
  public function setTotalPages($totalPages)
  {
    $this->totalPages = $totalPages;
  }
  /** @return int */
  public function getTotalPages()
  {
    return $this->totalPages;
  }
}

class GoogleCloudVisionV1p1beta1AnnotateImageResponse extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p1beta1ImageAnnotationContext */
  public $context;
  /** @var GoogleCloudVisionV1p1beta1CropHintsAnnotation */
  public $cropHintsAnnotation;
  /** @var Status */
  public $error;
  /** @var GoogleCloudVisionV1p1beta1FaceAnnotation[] */
  public $faceAnnotations;
  /** @var GoogleCloudVisionV1p1beta1TextAnnotation */
  public $fullTextAnnotation;
  /** @var GoogleCloudVisionV1p1beta1ImageProperties */
  public $imagePropertiesAnnotation;
  /** @var GoogleCloudVisionV1p1beta1EntityAnnotation[] */
  public $labelAnnotations;
  /** @var GoogleCloudVisionV1p1beta1EntityAnnotation[] */
  public $landmarkAnnotations;
  /** @var GoogleCloudVisionV1p1beta1LocalizedObjectAnnotation[] */
  public $localizedObjectAnnotations;
  /** @var GoogleCloudVisionV1p1beta1EntityAnnotation[] */
  public $logoAnnotations;
  /** @var GoogleCloudVisionV1p1beta1ProductSearchResults */
  public $productSearchResults;
  /** @var GoogleCloudVisionV1p1beta1SafeSearchAnnotation */
  public $safeSearchAnnotation;
  /** @var GoogleCloudVisionV1p1beta1EntityAnnotation[] */
  public $textAnnotations;
  /** @var GoogleCloudVisionV1p1beta1WebDetection */
  public $webDetection;
  protected $collection_key = 'textAnnotations';
  protected $contextType = GoogleCloudVisionV1p1beta1ImageAnnotationContext::class;
  protected $contextDataType = '';
  protected $cropHintsAnnotationType = GoogleCloudVisionV1p1beta1CropHintsAnnotation::class;
  protected $cropHintsAnnotationDataType = '';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $faceAnnotationsType = GoogleCloudVisionV1p1beta1FaceAnnotation::class;
  protected $faceAnnotationsDataType = 'array';
  protected $fullTextAnnotationType = GoogleCloudVisionV1p1beta1TextAnnotation::class;
  protected $fullTextAnnotationDataType = '';
  protected $imagePropertiesAnnotationType = GoogleCloudVisionV1p1beta1ImageProperties::class;
  protected $imagePropertiesAnnotationDataType = '';
  protected $labelAnnotationsType = GoogleCloudVisionV1p1beta1EntityAnnotation::class;
  protected $labelAnnotationsDataType = 'array';
  protected $landmarkAnnotationsType = GoogleCloudVisionV1p1beta1EntityAnnotation::class;
  protected $landmarkAnnotationsDataType = 'array';
  protected $localizedObjectAnnotationsType = GoogleCloudVisionV1p1beta1LocalizedObjectAnnotation::class;
  protected $localizedObjectAnnotationsDataType = 'array';
  protected $logoAnnotationsType = GoogleCloudVisionV1p1beta1EntityAnnotation::class;
  protected $logoAnnotationsDataType = 'array';
  protected $productSearchResultsType = GoogleCloudVisionV1p1beta1ProductSearchResults::class;
  protected $productSearchResultsDataType = '';
  protected $safeSearchAnnotationType = GoogleCloudVisionV1p1beta1SafeSearchAnnotation::class;
  protected $safeSearchAnnotationDataType = '';
  protected $textAnnotationsType = GoogleCloudVisionV1p1beta1EntityAnnotation::class;
  protected $textAnnotationsDataType = 'array';
  protected $webDetectionType = GoogleCloudVisionV1p1beta1WebDetection::class;
  protected $webDetectionDataType = '';
  /** @param GoogleCloudVisionV1p1beta1ImageAnnotationContext */
  public function setContext(GoogleCloudVisionV1p1beta1ImageAnnotationContext $context)
  {
    $this->context = $context;
  }
  /** @return GoogleCloudVisionV1p1beta1ImageAnnotationContext */
  public function getContext()
  {
    return $this->context;
  }
  /** @param GoogleCloudVisionV1p1beta1CropHintsAnnotation */
  public function setCropHintsAnnotation(GoogleCloudVisionV1p1beta1CropHintsAnnotation $cropHintsAnnotation)
  {
    $this->cropHintsAnnotation = $cropHintsAnnotation;
  }
  /** @return GoogleCloudVisionV1p1beta1CropHintsAnnotation */
  public function getCropHintsAnnotation()
  {
    return $this->cropHintsAnnotation;
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
  /** @param GoogleCloudVisionV1p1beta1FaceAnnotation[] */
  public function setFaceAnnotations($faceAnnotations)
  {
    $this->faceAnnotations = $faceAnnotations;
  }
  /** @return GoogleCloudVisionV1p1beta1FaceAnnotation[] */
  public function getFaceAnnotations()
  {
    return $this->faceAnnotations;
  }
  /** @param GoogleCloudVisionV1p1beta1TextAnnotation */
  public function setFullTextAnnotation(GoogleCloudVisionV1p1beta1TextAnnotation $fullTextAnnotation)
  {
    $this->fullTextAnnotation = $fullTextAnnotation;
  }
  /** @return GoogleCloudVisionV1p1beta1TextAnnotation */
  public function getFullTextAnnotation()
  {
    return $this->fullTextAnnotation;
  }
  /** @param GoogleCloudVisionV1p1beta1ImageProperties */
  public function setImagePropertiesAnnotation(GoogleCloudVisionV1p1beta1ImageProperties $imagePropertiesAnnotation)
  {
    $this->imagePropertiesAnnotation = $imagePropertiesAnnotation;
  }
  /** @return GoogleCloudVisionV1p1beta1ImageProperties */
  public function getImagePropertiesAnnotation()
  {
    return $this->imagePropertiesAnnotation;
  }
  /** @param GoogleCloudVisionV1p1beta1EntityAnnotation[] */
  public function setLabelAnnotations($labelAnnotations)
  {
    $this->labelAnnotations = $labelAnnotations;
  }
  /** @return GoogleCloudVisionV1p1beta1EntityAnnotation[] */
  public function getLabelAnnotations()
  {
    return $this->labelAnnotations;
  }
  /** @param GoogleCloudVisionV1p1beta1EntityAnnotation[] */
  public function setLandmarkAnnotations($landmarkAnnotations)
  {
    $this->landmarkAnnotations = $landmarkAnnotations;
  }
  /** @return GoogleCloudVisionV1p1beta1EntityAnnotation[] */
  public function getLandmarkAnnotations()
  {
    return $this->landmarkAnnotations;
  }
  /** @param GoogleCloudVisionV1p1beta1LocalizedObjectAnnotation[] */
  public function setLocalizedObjectAnnotations($localizedObjectAnnotations)
  {
    $this->localizedObjectAnnotations = $localizedObjectAnnotations;
  }
  /** @return GoogleCloudVisionV1p1beta1LocalizedObjectAnnotation[] */
  public function getLocalizedObjectAnnotations()
  {
    return $this->localizedObjectAnnotations;
  }
  /** @param GoogleCloudVisionV1p1beta1EntityAnnotation[] */
  public function setLogoAnnotations($logoAnnotations)
  {
    $this->logoAnnotations = $logoAnnotations;
  }
  /** @return GoogleCloudVisionV1p1beta1EntityAnnotation[] */
  public function getLogoAnnotations()
  {
    return $this->logoAnnotations;
  }
  /** @param GoogleCloudVisionV1p1beta1ProductSearchResults */
  public function setProductSearchResults(GoogleCloudVisionV1p1beta1ProductSearchResults $productSearchResults)
  {
    $this->productSearchResults = $productSearchResults;
  }
  /** @return GoogleCloudVisionV1p1beta1ProductSearchResults */
  public function getProductSearchResults()
  {
    return $this->productSearchResults;
  }
  /** @param GoogleCloudVisionV1p1beta1SafeSearchAnnotation */
  public function setSafeSearchAnnotation(GoogleCloudVisionV1p1beta1SafeSearchAnnotation $safeSearchAnnotation)
  {
    $this->safeSearchAnnotation = $safeSearchAnnotation;
  }
  /** @return GoogleCloudVisionV1p1beta1SafeSearchAnnotation */
  public function getSafeSearchAnnotation()
  {
    return $this->safeSearchAnnotation;
  }
  /** @param GoogleCloudVisionV1p1beta1EntityAnnotation[] */
  public function setTextAnnotations($textAnnotations)
  {
    $this->textAnnotations = $textAnnotations;
  }
  /** @return GoogleCloudVisionV1p1beta1EntityAnnotation[] */
  public function getTextAnnotations()
  {
    return $this->textAnnotations;
  }
  /** @param GoogleCloudVisionV1p1beta1WebDetection */
  public function setWebDetection(GoogleCloudVisionV1p1beta1WebDetection $webDetection)
  {
    $this->webDetection = $webDetection;
  }
  /** @return GoogleCloudVisionV1p1beta1WebDetection */
  public function getWebDetection()
  {
    return $this->webDetection;
  }
}

class GoogleCloudVisionV1p1beta1AsyncAnnotateFileResponse extends \Google\Model
{
  /** @var GoogleCloudVisionV1p1beta1OutputConfig */
  public $outputConfig;
  protected $outputConfigType = GoogleCloudVisionV1p1beta1OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param GoogleCloudVisionV1p1beta1OutputConfig */
  public function setOutputConfig(GoogleCloudVisionV1p1beta1OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return GoogleCloudVisionV1p1beta1OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
}

class GoogleCloudVisionV1p1beta1AsyncBatchAnnotateFilesResponse extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p1beta1AsyncAnnotateFileResponse[] */
  public $responses;
  protected $collection_key = 'responses';
  protected $responsesType = GoogleCloudVisionV1p1beta1AsyncAnnotateFileResponse::class;
  protected $responsesDataType = 'array';
  /** @param GoogleCloudVisionV1p1beta1AsyncAnnotateFileResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return GoogleCloudVisionV1p1beta1AsyncAnnotateFileResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
}

class GoogleCloudVisionV1p1beta1Block extends \Google\Collection
{
  /** @var string */
  public $blockType;
  /** @var GoogleCloudVisionV1p1beta1BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVisionV1p1beta1Paragraph[] */
  public $paragraphs;
  /** @var GoogleCloudVisionV1p1beta1TextAnnotationTextProperty */
  public $property;
  protected $collection_key = 'paragraphs';
  protected $boundingBoxType = GoogleCloudVisionV1p1beta1BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $paragraphsType = GoogleCloudVisionV1p1beta1Paragraph::class;
  protected $paragraphsDataType = 'array';
  protected $propertyType = GoogleCloudVisionV1p1beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  /** @param string */
  public function setBlockType($blockType)
  {
    $this->blockType = $blockType;
  }
  /** @return string */
  public function getBlockType()
  {
    return $this->blockType;
  }
  /** @param GoogleCloudVisionV1p1beta1BoundingPoly */
  public function setBoundingBox(GoogleCloudVisionV1p1beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return GoogleCloudVisionV1p1beta1BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param GoogleCloudVisionV1p1beta1Paragraph[] */
  public function setParagraphs($paragraphs)
  {
    $this->paragraphs = $paragraphs;
  }
  /** @return GoogleCloudVisionV1p1beta1Paragraph[] */
  public function getParagraphs()
  {
    return $this->paragraphs;
  }
  /** @param GoogleCloudVisionV1p1beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p1beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p1beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
  }
}

class GoogleCloudVisionV1p1beta1BoundingPoly extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p1beta1NormalizedVertex[] */
  public $normalizedVertices;
  /** @var GoogleCloudVisionV1p1beta1Vertex[] */
  public $vertices;
  protected $collection_key = 'vertices';
  protected $normalizedVerticesType = GoogleCloudVisionV1p1beta1NormalizedVertex::class;
  protected $normalizedVerticesDataType = 'array';
  protected $verticesType = GoogleCloudVisionV1p1beta1Vertex::class;
  protected $verticesDataType = 'array';
  /** @param GoogleCloudVisionV1p1beta1NormalizedVertex[] */
  public function setNormalizedVertices($normalizedVertices)
  {
    $this->normalizedVertices = $normalizedVertices;
  }
  /** @return GoogleCloudVisionV1p1beta1NormalizedVertex[] */
  public function getNormalizedVertices()
  {
    return $this->normalizedVertices;
  }
  /** @param GoogleCloudVisionV1p1beta1Vertex[] */
  public function setVertices($vertices)
  {
    $this->vertices = $vertices;
  }
  /** @return GoogleCloudVisionV1p1beta1Vertex[] */
  public function getVertices()
  {
    return $this->vertices;
  }
}

class GoogleCloudVisionV1p1beta1ColorInfo extends \Google\Model
{
  /** @var Color */
  public $color;
  /** @var float */
  public $pixelFraction;
  /** @var float */
  public $score;
  protected $colorType = Color::class;
  protected $colorDataType = '';
  /** @param Color */
  public function setColor(Color $color)
  {
    $this->color = $color;
  }
  /** @return Color */
  public function getColor()
  {
    return $this->color;
  }
  /** @param float */
  public function setPixelFraction($pixelFraction)
  {
    $this->pixelFraction = $pixelFraction;
  }
  /** @return float */
  public function getPixelFraction()
  {
    return $this->pixelFraction;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p1beta1CropHint extends \Google\Model
{
  /** @var GoogleCloudVisionV1p1beta1BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $confidence;
  /** @var float */
  public $importanceFraction;
  protected $boundingPolyType = GoogleCloudVisionV1p1beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  /** @param GoogleCloudVisionV1p1beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p1beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p1beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param float */
  public function setImportanceFraction($importanceFraction)
  {
    $this->importanceFraction = $importanceFraction;
  }
  /** @return float */
  public function getImportanceFraction()
  {
    return $this->importanceFraction;
  }
}

class GoogleCloudVisionV1p1beta1CropHintsAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p1beta1CropHint[] */
  public $cropHints;
  protected $collection_key = 'cropHints';
  protected $cropHintsType = GoogleCloudVisionV1p1beta1CropHint::class;
  protected $cropHintsDataType = 'array';
  /** @param GoogleCloudVisionV1p1beta1CropHint[] */
  public function setCropHints($cropHints)
  {
    $this->cropHints = $cropHints;
  }
  /** @return GoogleCloudVisionV1p1beta1CropHint[] */
  public function getCropHints()
  {
    return $this->cropHints;
  }
}

class GoogleCloudVisionV1p1beta1DominantColorsAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p1beta1ColorInfo[] */
  public $colors;
  protected $collection_key = 'colors';
  protected $colorsType = GoogleCloudVisionV1p1beta1ColorInfo::class;
  protected $colorsDataType = 'array';
  /** @param GoogleCloudVisionV1p1beta1ColorInfo[] */
  public function setColors($colors)
  {
    $this->colors = $colors;
  }
  /** @return GoogleCloudVisionV1p1beta1ColorInfo[] */
  public function getColors()
  {
    return $this->colors;
  }
}

class GoogleCloudVisionV1p1beta1EntityAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p1beta1BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $confidence;
  /** @var string */
  public $description;
  /** @var string */
  public $locale;
  /** @var GoogleCloudVisionV1p1beta1LocationInfo[] */
  public $locations;
  /** @var string */
  public $mid;
  /** @var GoogleCloudVisionV1p1beta1Property[] */
  public $properties;
  /** @var float */
  public $score;
  /** @var float */
  public $topicality;
  protected $collection_key = 'properties';
  protected $boundingPolyType = GoogleCloudVisionV1p1beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $locationsType = GoogleCloudVisionV1p1beta1LocationInfo::class;
  protected $locationsDataType = 'array';
  protected $propertiesType = GoogleCloudVisionV1p1beta1Property::class;
  protected $propertiesDataType = 'array';
  /** @param GoogleCloudVisionV1p1beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p1beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p1beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /** @return string */
  public function getLocale()
  {
    return $this->locale;
  }
  /** @param GoogleCloudVisionV1p1beta1LocationInfo[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return GoogleCloudVisionV1p1beta1LocationInfo[] */
  public function getLocations()
  {
    return $this->locations;
  }
  /** @param string */
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /** @return string */
  public function getMid()
  {
    return $this->mid;
  }
  /** @param GoogleCloudVisionV1p1beta1Property[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleCloudVisionV1p1beta1Property[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
  /** @param float */
  public function setTopicality($topicality)
  {
    $this->topicality = $topicality;
  }
  /** @return float */
  public function getTopicality()
  {
    return $this->topicality;
  }
}

class GoogleCloudVisionV1p1beta1FaceAnnotation extends \Google\Collection
{
  /** @var string */
  public $angerLikelihood;
  /** @var string */
  public $blurredLikelihood;
  /** @var GoogleCloudVisionV1p1beta1BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $detectionConfidence;
  /** @var GoogleCloudVisionV1p1beta1BoundingPoly */
  public $fdBoundingPoly;
  /** @var string */
  public $headwearLikelihood;
  /** @var string */
  public $joyLikelihood;
  /** @var float */
  public $landmarkingConfidence;
  /** @var GoogleCloudVisionV1p1beta1FaceAnnotationLandmark[] */
  public $landmarks;
  /** @var float */
  public $panAngle;
  /** @var float */
  public $rollAngle;
  /** @var string */
  public $sorrowLikelihood;
  /** @var string */
  public $surpriseLikelihood;
  /** @var float */
  public $tiltAngle;
  /** @var string */
  public $underExposedLikelihood;
  protected $collection_key = 'landmarks';
  protected $boundingPolyType = GoogleCloudVisionV1p1beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $fdBoundingPolyType = GoogleCloudVisionV1p1beta1BoundingPoly::class;
  protected $fdBoundingPolyDataType = '';
  protected $landmarksType = GoogleCloudVisionV1p1beta1FaceAnnotationLandmark::class;
  protected $landmarksDataType = 'array';
  /** @param string */
  public function setAngerLikelihood($angerLikelihood)
  {
    $this->angerLikelihood = $angerLikelihood;
  }
  /** @return string */
  public function getAngerLikelihood()
  {
    return $this->angerLikelihood;
  }
  /** @param string */
  public function setBlurredLikelihood($blurredLikelihood)
  {
    $this->blurredLikelihood = $blurredLikelihood;
  }
  /** @return string */
  public function getBlurredLikelihood()
  {
    return $this->blurredLikelihood;
  }
  /** @param GoogleCloudVisionV1p1beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p1beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p1beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setDetectionConfidence($detectionConfidence)
  {
    $this->detectionConfidence = $detectionConfidence;
  }
  /** @return float */
  public function getDetectionConfidence()
  {
    return $this->detectionConfidence;
  }
  /** @param GoogleCloudVisionV1p1beta1BoundingPoly */
  public function setFdBoundingPoly(GoogleCloudVisionV1p1beta1BoundingPoly $fdBoundingPoly)
  {
    $this->fdBoundingPoly = $fdBoundingPoly;
  }
  /** @return GoogleCloudVisionV1p1beta1BoundingPoly */
  public function getFdBoundingPoly()
  {
    return $this->fdBoundingPoly;
  }
  /** @param string */
  public function setHeadwearLikelihood($headwearLikelihood)
  {
    $this->headwearLikelihood = $headwearLikelihood;
  }
  /** @return string */
  public function getHeadwearLikelihood()
  {
    return $this->headwearLikelihood;
  }
  /** @param string */
  public function setJoyLikelihood($joyLikelihood)
  {
    $this->joyLikelihood = $joyLikelihood;
  }
  /** @return string */
  public function getJoyLikelihood()
  {
    return $this->joyLikelihood;
  }
  /** @param float */
  public function setLandmarkingConfidence($landmarkingConfidence)
  {
    $this->landmarkingConfidence = $landmarkingConfidence;
  }
  /** @return float */
  public function getLandmarkingConfidence()
  {
    return $this->landmarkingConfidence;
  }
  /** @param GoogleCloudVisionV1p1beta1FaceAnnotationLandmark[] */
  public function setLandmarks($landmarks)
  {
    $this->landmarks = $landmarks;
  }
  /** @return GoogleCloudVisionV1p1beta1FaceAnnotationLandmark[] */
  public function getLandmarks()
  {
    return $this->landmarks;
  }
  /** @param float */
  public function setPanAngle($panAngle)
  {
    $this->panAngle = $panAngle;
  }
  /** @return float */
  public function getPanAngle()
  {
    return $this->panAngle;
  }
  /** @param float */
  public function setRollAngle($rollAngle)
  {
    $this->rollAngle = $rollAngle;
  }
  /** @return float */
  public function getRollAngle()
  {
    return $this->rollAngle;
  }
  /** @param string */
  public function setSorrowLikelihood($sorrowLikelihood)
  {
    $this->sorrowLikelihood = $sorrowLikelihood;
  }
  /** @return string */
  public function getSorrowLikelihood()
  {
    return $this->sorrowLikelihood;
  }
  /** @param string */
  public function setSurpriseLikelihood($surpriseLikelihood)
  {
    $this->surpriseLikelihood = $surpriseLikelihood;
  }
  /** @return string */
  public function getSurpriseLikelihood()
  {
    return $this->surpriseLikelihood;
  }
  /** @param float */
  public function setTiltAngle($tiltAngle)
  {
    $this->tiltAngle = $tiltAngle;
  }
  /** @return float */
  public function getTiltAngle()
  {
    return $this->tiltAngle;
  }
  /** @param string */
  public function setUnderExposedLikelihood($underExposedLikelihood)
  {
    $this->underExposedLikelihood = $underExposedLikelihood;
  }
  /** @return string */
  public function getUnderExposedLikelihood()
  {
    return $this->underExposedLikelihood;
  }
}

class GoogleCloudVisionV1p1beta1FaceAnnotationLandmark extends \Google\Model
{
  /** @var GoogleCloudVisionV1p1beta1Position */
  public $position;
  /** @var string */
  public $type;
  protected $positionType = GoogleCloudVisionV1p1beta1Position::class;
  protected $positionDataType = '';
  /** @param GoogleCloudVisionV1p1beta1Position */
  public function setPosition(GoogleCloudVisionV1p1beta1Position $position)
  {
    $this->position = $position;
  }
  /** @return GoogleCloudVisionV1p1beta1Position */
  public function getPosition()
  {
    return $this->position;
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

class GoogleCloudVisionV1p1beta1GcsDestination extends \Google\Model
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

class GoogleCloudVisionV1p1beta1GcsSource extends \Google\Model
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

class GoogleCloudVisionV1p1beta1ImageAnnotationContext extends \Google\Model
{
  /** @var int */
  public $pageNumber;
  /** @var string */
  public $uri;

  /** @param int */
  public function setPageNumber($pageNumber)
  {
    $this->pageNumber = $pageNumber;
  }
  /** @return int */
  public function getPageNumber()
  {
    return $this->pageNumber;
  }
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

class GoogleCloudVisionV1p1beta1ImageProperties extends \Google\Model
{
  /** @var GoogleCloudVisionV1p1beta1DominantColorsAnnotation */
  public $dominantColors;
  protected $dominantColorsType = GoogleCloudVisionV1p1beta1DominantColorsAnnotation::class;
  protected $dominantColorsDataType = '';
  /** @param GoogleCloudVisionV1p1beta1DominantColorsAnnotation */
  public function setDominantColors(GoogleCloudVisionV1p1beta1DominantColorsAnnotation $dominantColors)
  {
    $this->dominantColors = $dominantColors;
  }
  /** @return GoogleCloudVisionV1p1beta1DominantColorsAnnotation */
  public function getDominantColors()
  {
    return $this->dominantColors;
  }
}

class GoogleCloudVisionV1p1beta1InputConfig extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var GoogleCloudVisionV1p1beta1GcsSource */
  public $gcsSource;
  /** @var string */
  public $mimeType;
  protected $gcsSourceType = GoogleCloudVisionV1p1beta1GcsSource::class;
  protected $gcsSourceDataType = '';
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
  /** @param GoogleCloudVisionV1p1beta1GcsSource */
  public function setGcsSource(GoogleCloudVisionV1p1beta1GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudVisionV1p1beta1GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
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
}

class GoogleCloudVisionV1p1beta1LocalizedObjectAnnotation extends \Google\Model
{
  /** @var GoogleCloudVisionV1p1beta1BoundingPoly */
  public $boundingPoly;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $mid;
  /** @var string */
  public $name;
  /** @var float */
  public $score;
  protected $boundingPolyType = GoogleCloudVisionV1p1beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  /** @param GoogleCloudVisionV1p1beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p1beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p1beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
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
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /** @return string */
  public function getMid()
  {
    return $this->mid;
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
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p1beta1LocationInfo extends \Google\Model
{
  /** @var LatLng */
  public $latLng;
  protected $latLngType = LatLng::class;
  protected $latLngDataType = '';
  /** @param LatLng */
  public function setLatLng(LatLng $latLng)
  {
    $this->latLng = $latLng;
  }
  /** @return LatLng */
  public function getLatLng()
  {
    return $this->latLng;
  }
}

class GoogleCloudVisionV1p1beta1NormalizedVertex extends \Google\Model
{
  /** @var float */
  public $x;
  /** @var float */
  public $y;

  /** @param float */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return float */
  public function getX()
  {
    return $this->x;
  }
  /** @param float */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return float */
  public function getY()
  {
    return $this->y;
  }
}

class GoogleCloudVisionV1p1beta1OperationMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;

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
}

class GoogleCloudVisionV1p1beta1OutputConfig extends \Google\Model
{
  /** @var int */
  public $batchSize;
  /** @var GoogleCloudVisionV1p1beta1GcsDestination */
  public $gcsDestination;
  protected $gcsDestinationType = GoogleCloudVisionV1p1beta1GcsDestination::class;
  protected $gcsDestinationDataType = '';
  /** @param int */
  public function setBatchSize($batchSize)
  {
    $this->batchSize = $batchSize;
  }
  /** @return int */
  public function getBatchSize()
  {
    return $this->batchSize;
  }
  /** @param GoogleCloudVisionV1p1beta1GcsDestination */
  public function setGcsDestination(GoogleCloudVisionV1p1beta1GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GoogleCloudVisionV1p1beta1GcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
}

class GoogleCloudVisionV1p1beta1Page extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p1beta1Block[] */
  public $blocks;
  /** @var float */
  public $confidence;
  /** @var int */
  public $height;
  /** @var GoogleCloudVisionV1p1beta1TextAnnotationTextProperty */
  public $property;
  /** @var int */
  public $width;
  protected $collection_key = 'blocks';
  protected $blocksType = GoogleCloudVisionV1p1beta1Block::class;
  protected $blocksDataType = 'array';
  protected $propertyType = GoogleCloudVisionV1p1beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  /** @param GoogleCloudVisionV1p1beta1Block[] */
  public function setBlocks($blocks)
  {
    $this->blocks = $blocks;
  }
  /** @return GoogleCloudVisionV1p1beta1Block[] */
  public function getBlocks()
  {
    return $this->blocks;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param int */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return int */
  public function getHeight()
  {
    return $this->height;
  }
  /** @param GoogleCloudVisionV1p1beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p1beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p1beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param int */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return int */
  public function getWidth()
  {
    return $this->width;
  }
}

class GoogleCloudVisionV1p1beta1Paragraph extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p1beta1BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVisionV1p1beta1TextAnnotationTextProperty */
  public $property;
  /** @var GoogleCloudVisionV1p1beta1Word[] */
  public $words;
  protected $collection_key = 'words';
  protected $boundingBoxType = GoogleCloudVisionV1p1beta1BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $propertyType = GoogleCloudVisionV1p1beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  protected $wordsType = GoogleCloudVisionV1p1beta1Word::class;
  protected $wordsDataType = 'array';
  /** @param GoogleCloudVisionV1p1beta1BoundingPoly */
  public function setBoundingBox(GoogleCloudVisionV1p1beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return GoogleCloudVisionV1p1beta1BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param GoogleCloudVisionV1p1beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p1beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p1beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param GoogleCloudVisionV1p1beta1Word[] */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /** @return GoogleCloudVisionV1p1beta1Word[] */
  public function getWords()
  {
    return $this->words;
  }
}

class GoogleCloudVisionV1p1beta1Position extends \Google\Model
{
  /** @var float */
  public $x;
  /** @var float */
  public $y;
  /** @var float */
  public $z;

  /** @param float */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return float */
  public function getX()
  {
    return $this->x;
  }
  /** @param float */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return float */
  public function getY()
  {
    return $this->y;
  }
  /** @param float */
  public function setZ($z)
  {
    $this->z = $z;
  }
  /** @return float */
  public function getZ()
  {
    return $this->z;
  }
}

class GoogleCloudVisionV1p1beta1Product extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $productCategory;
  /** @var GoogleCloudVisionV1p1beta1ProductKeyValue[] */
  public $productLabels;
  protected $collection_key = 'productLabels';
  protected $productLabelsType = GoogleCloudVisionV1p1beta1ProductKeyValue::class;
  protected $productLabelsDataType = 'array';
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
  /** @param string */
  public function setProductCategory($productCategory)
  {
    $this->productCategory = $productCategory;
  }
  /** @return string */
  public function getProductCategory()
  {
    return $this->productCategory;
  }
  /** @param GoogleCloudVisionV1p1beta1ProductKeyValue[] */
  public function setProductLabels($productLabels)
  {
    $this->productLabels = $productLabels;
  }
  /** @return GoogleCloudVisionV1p1beta1ProductKeyValue[] */
  public function getProductLabels()
  {
    return $this->productLabels;
  }
}

class GoogleCloudVisionV1p1beta1ProductKeyValue extends \Google\Model
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

class GoogleCloudVisionV1p1beta1ProductSearchResults extends \Google\Collection
{
  /** @var string */
  public $indexTime;
  /** @var GoogleCloudVisionV1p1beta1ProductSearchResultsGroupedResult[] */
  public $productGroupedResults;
  /** @var GoogleCloudVisionV1p1beta1ProductSearchResultsResult[] */
  public $results;
  protected $collection_key = 'results';
  protected $productGroupedResultsType = GoogleCloudVisionV1p1beta1ProductSearchResultsGroupedResult::class;
  protected $productGroupedResultsDataType = 'array';
  protected $resultsType = GoogleCloudVisionV1p1beta1ProductSearchResultsResult::class;
  protected $resultsDataType = 'array';
  /** @param string */
  public function setIndexTime($indexTime)
  {
    $this->indexTime = $indexTime;
  }
  /** @return string */
  public function getIndexTime()
  {
    return $this->indexTime;
  }
  /** @param GoogleCloudVisionV1p1beta1ProductSearchResultsGroupedResult[] */
  public function setProductGroupedResults($productGroupedResults)
  {
    $this->productGroupedResults = $productGroupedResults;
  }
  /** @return GoogleCloudVisionV1p1beta1ProductSearchResultsGroupedResult[] */
  public function getProductGroupedResults()
  {
    return $this->productGroupedResults;
  }
  /** @param GoogleCloudVisionV1p1beta1ProductSearchResultsResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GoogleCloudVisionV1p1beta1ProductSearchResultsResult[] */
  public function getResults()
  {
    return $this->results;
  }
}

class GoogleCloudVisionV1p1beta1ProductSearchResultsGroupedResult extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p1beta1BoundingPoly */
  public $boundingPoly;
  /** @var GoogleCloudVisionV1p1beta1ProductSearchResultsObjectAnnotation[] */
  public $objectAnnotations;
  /** @var GoogleCloudVisionV1p1beta1ProductSearchResultsResult[] */
  public $results;
  protected $collection_key = 'results';
  protected $boundingPolyType = GoogleCloudVisionV1p1beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $objectAnnotationsType = GoogleCloudVisionV1p1beta1ProductSearchResultsObjectAnnotation::class;
  protected $objectAnnotationsDataType = 'array';
  protected $resultsType = GoogleCloudVisionV1p1beta1ProductSearchResultsResult::class;
  protected $resultsDataType = 'array';
  /** @param GoogleCloudVisionV1p1beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p1beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p1beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param GoogleCloudVisionV1p1beta1ProductSearchResultsObjectAnnotation[] */
  public function setObjectAnnotations($objectAnnotations)
  {
    $this->objectAnnotations = $objectAnnotations;
  }
  /** @return GoogleCloudVisionV1p1beta1ProductSearchResultsObjectAnnotation[] */
  public function getObjectAnnotations()
  {
    return $this->objectAnnotations;
  }
  /** @param GoogleCloudVisionV1p1beta1ProductSearchResultsResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GoogleCloudVisionV1p1beta1ProductSearchResultsResult[] */
  public function getResults()
  {
    return $this->results;
  }
}

class GoogleCloudVisionV1p1beta1ProductSearchResultsObjectAnnotation extends \Google\Model
{
  /** @var string */
  public $languageCode;
  /** @var string */
  public $mid;
  /** @var string */
  public $name;
  /** @var float */
  public $score;

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
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /** @return string */
  public function getMid()
  {
    return $this->mid;
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
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p1beta1ProductSearchResultsResult extends \Google\Model
{
  /** @var string */
  public $image;
  /** @var GoogleCloudVisionV1p1beta1Product */
  public $product;
  /** @var float */
  public $score;
  protected $productType = GoogleCloudVisionV1p1beta1Product::class;
  protected $productDataType = '';
  /** @param string */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /** @return string */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudVisionV1p1beta1Product */
  public function setProduct(GoogleCloudVisionV1p1beta1Product $product)
  {
    $this->product = $product;
  }
  /** @return GoogleCloudVisionV1p1beta1Product */
  public function getProduct()
  {
    return $this->product;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p1beta1Property extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $uint64Value;
  /** @var string */
  public $value;

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
  public function setUint64Value($uint64Value)
  {
    $this->uint64Value = $uint64Value;
  }
  /** @return string */
  public function getUint64Value()
  {
    return $this->uint64Value;
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

class GoogleCloudVisionV1p1beta1SafeSearchAnnotation extends \Google\Model
{
  /** @var string */
  public $adult;
  /** @var string */
  public $medical;
  /** @var string */
  public $racy;
  /** @var string */
  public $spoof;
  /** @var string */
  public $violence;

  /** @param string */
  public function setAdult($adult)
  {
    $this->adult = $adult;
  }
  /** @return string */
  public function getAdult()
  {
    return $this->adult;
  }
  /** @param string */
  public function setMedical($medical)
  {
    $this->medical = $medical;
  }
  /** @return string */
  public function getMedical()
  {
    return $this->medical;
  }
  /** @param string */
  public function setRacy($racy)
  {
    $this->racy = $racy;
  }
  /** @return string */
  public function getRacy()
  {
    return $this->racy;
  }
  /** @param string */
  public function setSpoof($spoof)
  {
    $this->spoof = $spoof;
  }
  /** @return string */
  public function getSpoof()
  {
    return $this->spoof;
  }
  /** @param string */
  public function setViolence($violence)
  {
    $this->violence = $violence;
  }
  /** @return string */
  public function getViolence()
  {
    return $this->violence;
  }
}

class GoogleCloudVisionV1p1beta1Symbol extends \Google\Model
{
  /** @var GoogleCloudVisionV1p1beta1BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVisionV1p1beta1TextAnnotationTextProperty */
  public $property;
  /** @var string */
  public $text;
  protected $boundingBoxType = GoogleCloudVisionV1p1beta1BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $propertyType = GoogleCloudVisionV1p1beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  /** @param GoogleCloudVisionV1p1beta1BoundingPoly */
  public function setBoundingBox(GoogleCloudVisionV1p1beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return GoogleCloudVisionV1p1beta1BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param GoogleCloudVisionV1p1beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p1beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p1beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
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

class GoogleCloudVisionV1p1beta1TextAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p1beta1Page[] */
  public $pages;
  /** @var string */
  public $text;
  protected $collection_key = 'pages';
  protected $pagesType = GoogleCloudVisionV1p1beta1Page::class;
  protected $pagesDataType = 'array';
  /** @param GoogleCloudVisionV1p1beta1Page[] */
  public function setPages($pages)
  {
    $this->pages = $pages;
  }
  /** @return GoogleCloudVisionV1p1beta1Page[] */
  public function getPages()
  {
    return $this->pages;
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

class GoogleCloudVisionV1p1beta1TextAnnotationDetectedBreak extends \Google\Model
{
  /** @var bool */
  public $isPrefix;
  /** @var string */
  public $type;

  /** @param bool */
  public function setIsPrefix($isPrefix)
  {
    $this->isPrefix = $isPrefix;
  }
  /** @return bool */
  public function getIsPrefix()
  {
    return $this->isPrefix;
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

class GoogleCloudVisionV1p1beta1TextAnnotationDetectedLanguage extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $languageCode;

  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
}

class GoogleCloudVisionV1p1beta1TextAnnotationTextProperty extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p1beta1TextAnnotationDetectedBreak */
  public $detectedBreak;
  /** @var GoogleCloudVisionV1p1beta1TextAnnotationDetectedLanguage[] */
  public $detectedLanguages;
  protected $collection_key = 'detectedLanguages';
  protected $detectedBreakType = GoogleCloudVisionV1p1beta1TextAnnotationDetectedBreak::class;
  protected $detectedBreakDataType = '';
  protected $detectedLanguagesType = GoogleCloudVisionV1p1beta1TextAnnotationDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  /** @param GoogleCloudVisionV1p1beta1TextAnnotationDetectedBreak */
  public function setDetectedBreak(GoogleCloudVisionV1p1beta1TextAnnotationDetectedBreak $detectedBreak)
  {
    $this->detectedBreak = $detectedBreak;
  }
  /** @return GoogleCloudVisionV1p1beta1TextAnnotationDetectedBreak */
  public function getDetectedBreak()
  {
    return $this->detectedBreak;
  }
  /** @param GoogleCloudVisionV1p1beta1TextAnnotationDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudVisionV1p1beta1TextAnnotationDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
}

class GoogleCloudVisionV1p1beta1Vertex extends \Google\Model
{
  /** @var int */
  public $x;
  /** @var int */
  public $y;

  /** @param int */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return int */
  public function getX()
  {
    return $this->x;
  }
  /** @param int */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return int */
  public function getY()
  {
    return $this->y;
  }
}

class GoogleCloudVisionV1p1beta1WebDetection extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p1beta1WebDetectionWebLabel[] */
  public $bestGuessLabels;
  /** @var GoogleCloudVisionV1p1beta1WebDetectionWebImage[] */
  public $fullMatchingImages;
  /** @var GoogleCloudVisionV1p1beta1WebDetectionWebPage[] */
  public $pagesWithMatchingImages;
  /** @var GoogleCloudVisionV1p1beta1WebDetectionWebImage[] */
  public $partialMatchingImages;
  /** @var GoogleCloudVisionV1p1beta1WebDetectionWebImage[] */
  public $visuallySimilarImages;
  /** @var GoogleCloudVisionV1p1beta1WebDetectionWebEntity[] */
  public $webEntities;
  protected $collection_key = 'webEntities';
  protected $bestGuessLabelsType = GoogleCloudVisionV1p1beta1WebDetectionWebLabel::class;
  protected $bestGuessLabelsDataType = 'array';
  protected $fullMatchingImagesType = GoogleCloudVisionV1p1beta1WebDetectionWebImage::class;
  protected $fullMatchingImagesDataType = 'array';
  protected $pagesWithMatchingImagesType = GoogleCloudVisionV1p1beta1WebDetectionWebPage::class;
  protected $pagesWithMatchingImagesDataType = 'array';
  protected $partialMatchingImagesType = GoogleCloudVisionV1p1beta1WebDetectionWebImage::class;
  protected $partialMatchingImagesDataType = 'array';
  protected $visuallySimilarImagesType = GoogleCloudVisionV1p1beta1WebDetectionWebImage::class;
  protected $visuallySimilarImagesDataType = 'array';
  protected $webEntitiesType = GoogleCloudVisionV1p1beta1WebDetectionWebEntity::class;
  protected $webEntitiesDataType = 'array';
  /** @param GoogleCloudVisionV1p1beta1WebDetectionWebLabel[] */
  public function setBestGuessLabels($bestGuessLabels)
  {
    $this->bestGuessLabels = $bestGuessLabels;
  }
  /** @return GoogleCloudVisionV1p1beta1WebDetectionWebLabel[] */
  public function getBestGuessLabels()
  {
    return $this->bestGuessLabels;
  }
  /** @param GoogleCloudVisionV1p1beta1WebDetectionWebImage[] */
  public function setFullMatchingImages($fullMatchingImages)
  {
    $this->fullMatchingImages = $fullMatchingImages;
  }
  /** @return GoogleCloudVisionV1p1beta1WebDetectionWebImage[] */
  public function getFullMatchingImages()
  {
    return $this->fullMatchingImages;
  }
  /** @param GoogleCloudVisionV1p1beta1WebDetectionWebPage[] */
  public function setPagesWithMatchingImages($pagesWithMatchingImages)
  {
    $this->pagesWithMatchingImages = $pagesWithMatchingImages;
  }
  /** @return GoogleCloudVisionV1p1beta1WebDetectionWebPage[] */
  public function getPagesWithMatchingImages()
  {
    return $this->pagesWithMatchingImages;
  }
  /** @param GoogleCloudVisionV1p1beta1WebDetectionWebImage[] */
  public function setPartialMatchingImages($partialMatchingImages)
  {
    $this->partialMatchingImages = $partialMatchingImages;
  }
  /** @return GoogleCloudVisionV1p1beta1WebDetectionWebImage[] */
  public function getPartialMatchingImages()
  {
    return $this->partialMatchingImages;
  }
  /** @param GoogleCloudVisionV1p1beta1WebDetectionWebImage[] */
  public function setVisuallySimilarImages($visuallySimilarImages)
  {
    $this->visuallySimilarImages = $visuallySimilarImages;
  }
  /** @return GoogleCloudVisionV1p1beta1WebDetectionWebImage[] */
  public function getVisuallySimilarImages()
  {
    return $this->visuallySimilarImages;
  }
  /** @param GoogleCloudVisionV1p1beta1WebDetectionWebEntity[] */
  public function setWebEntities($webEntities)
  {
    $this->webEntities = $webEntities;
  }
  /** @return GoogleCloudVisionV1p1beta1WebDetectionWebEntity[] */
  public function getWebEntities()
  {
    return $this->webEntities;
  }
}

class GoogleCloudVisionV1p1beta1WebDetectionWebEntity extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $entityId;
  /** @var float */
  public $score;

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
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p1beta1WebDetectionWebImage extends \Google\Model
{
  /** @var float */
  public $score;
  /** @var string */
  public $url;

  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
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

class GoogleCloudVisionV1p1beta1WebDetectionWebLabel extends \Google\Model
{
  /** @var string */
  public $label;
  /** @var string */
  public $languageCode;

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
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class GoogleCloudVisionV1p1beta1WebDetectionWebPage extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p1beta1WebDetectionWebImage[] */
  public $fullMatchingImages;
  /** @var string */
  public $pageTitle;
  /** @var GoogleCloudVisionV1p1beta1WebDetectionWebImage[] */
  public $partialMatchingImages;
  /** @var float */
  public $score;
  /** @var string */
  public $url;
  protected $collection_key = 'partialMatchingImages';
  protected $fullMatchingImagesType = GoogleCloudVisionV1p1beta1WebDetectionWebImage::class;
  protected $fullMatchingImagesDataType = 'array';
  protected $partialMatchingImagesType = GoogleCloudVisionV1p1beta1WebDetectionWebImage::class;
  protected $partialMatchingImagesDataType = 'array';
  /** @param GoogleCloudVisionV1p1beta1WebDetectionWebImage[] */
  public function setFullMatchingImages($fullMatchingImages)
  {
    $this->fullMatchingImages = $fullMatchingImages;
  }
  /** @return GoogleCloudVisionV1p1beta1WebDetectionWebImage[] */
  public function getFullMatchingImages()
  {
    return $this->fullMatchingImages;
  }
  /** @param string */
  public function setPageTitle($pageTitle)
  {
    $this->pageTitle = $pageTitle;
  }
  /** @return string */
  public function getPageTitle()
  {
    return $this->pageTitle;
  }
  /** @param GoogleCloudVisionV1p1beta1WebDetectionWebImage[] */
  public function setPartialMatchingImages($partialMatchingImages)
  {
    $this->partialMatchingImages = $partialMatchingImages;
  }
  /** @return GoogleCloudVisionV1p1beta1WebDetectionWebImage[] */
  public function getPartialMatchingImages()
  {
    return $this->partialMatchingImages;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
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

class GoogleCloudVisionV1p1beta1Word extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p1beta1BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVisionV1p1beta1TextAnnotationTextProperty */
  public $property;
  /** @var GoogleCloudVisionV1p1beta1Symbol[] */
  public $symbols;
  protected $collection_key = 'symbols';
  protected $boundingBoxType = GoogleCloudVisionV1p1beta1BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $propertyType = GoogleCloudVisionV1p1beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  protected $symbolsType = GoogleCloudVisionV1p1beta1Symbol::class;
  protected $symbolsDataType = 'array';
  /** @param GoogleCloudVisionV1p1beta1BoundingPoly */
  public function setBoundingBox(GoogleCloudVisionV1p1beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return GoogleCloudVisionV1p1beta1BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param GoogleCloudVisionV1p1beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p1beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p1beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param GoogleCloudVisionV1p1beta1Symbol[] */
  public function setSymbols($symbols)
  {
    $this->symbols = $symbols;
  }
  /** @return GoogleCloudVisionV1p1beta1Symbol[] */
  public function getSymbols()
  {
    return $this->symbols;
  }
}

class GoogleCloudVisionV1p2beta1AnnotateFileResponse extends \Google\Collection
{
  /** @var Status */
  public $error;
  /** @var GoogleCloudVisionV1p2beta1InputConfig */
  public $inputConfig;
  /** @var GoogleCloudVisionV1p2beta1AnnotateImageResponse[] */
  public $responses;
  /** @var int */
  public $totalPages;
  protected $collection_key = 'responses';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $inputConfigType = GoogleCloudVisionV1p2beta1InputConfig::class;
  protected $inputConfigDataType = '';
  protected $responsesType = GoogleCloudVisionV1p2beta1AnnotateImageResponse::class;
  protected $responsesDataType = 'array';
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
  /** @param GoogleCloudVisionV1p2beta1InputConfig */
  public function setInputConfig(GoogleCloudVisionV1p2beta1InputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return GoogleCloudVisionV1p2beta1InputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
  /** @param GoogleCloudVisionV1p2beta1AnnotateImageResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return GoogleCloudVisionV1p2beta1AnnotateImageResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
  /** @param int */
  public function setTotalPages($totalPages)
  {
    $this->totalPages = $totalPages;
  }
  /** @return int */
  public function getTotalPages()
  {
    return $this->totalPages;
  }
}

class GoogleCloudVisionV1p2beta1AnnotateImageResponse extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p2beta1ImageAnnotationContext */
  public $context;
  /** @var GoogleCloudVisionV1p2beta1CropHintsAnnotation */
  public $cropHintsAnnotation;
  /** @var Status */
  public $error;
  /** @var GoogleCloudVisionV1p2beta1FaceAnnotation[] */
  public $faceAnnotations;
  /** @var GoogleCloudVisionV1p2beta1TextAnnotation */
  public $fullTextAnnotation;
  /** @var GoogleCloudVisionV1p2beta1ImageProperties */
  public $imagePropertiesAnnotation;
  /** @var GoogleCloudVisionV1p2beta1EntityAnnotation[] */
  public $labelAnnotations;
  /** @var GoogleCloudVisionV1p2beta1EntityAnnotation[] */
  public $landmarkAnnotations;
  /** @var GoogleCloudVisionV1p2beta1LocalizedObjectAnnotation[] */
  public $localizedObjectAnnotations;
  /** @var GoogleCloudVisionV1p2beta1EntityAnnotation[] */
  public $logoAnnotations;
  /** @var GoogleCloudVisionV1p2beta1ProductSearchResults */
  public $productSearchResults;
  /** @var GoogleCloudVisionV1p2beta1SafeSearchAnnotation */
  public $safeSearchAnnotation;
  /** @var GoogleCloudVisionV1p2beta1EntityAnnotation[] */
  public $textAnnotations;
  /** @var GoogleCloudVisionV1p2beta1WebDetection */
  public $webDetection;
  protected $collection_key = 'textAnnotations';
  protected $contextType = GoogleCloudVisionV1p2beta1ImageAnnotationContext::class;
  protected $contextDataType = '';
  protected $cropHintsAnnotationType = GoogleCloudVisionV1p2beta1CropHintsAnnotation::class;
  protected $cropHintsAnnotationDataType = '';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $faceAnnotationsType = GoogleCloudVisionV1p2beta1FaceAnnotation::class;
  protected $faceAnnotationsDataType = 'array';
  protected $fullTextAnnotationType = GoogleCloudVisionV1p2beta1TextAnnotation::class;
  protected $fullTextAnnotationDataType = '';
  protected $imagePropertiesAnnotationType = GoogleCloudVisionV1p2beta1ImageProperties::class;
  protected $imagePropertiesAnnotationDataType = '';
  protected $labelAnnotationsType = GoogleCloudVisionV1p2beta1EntityAnnotation::class;
  protected $labelAnnotationsDataType = 'array';
  protected $landmarkAnnotationsType = GoogleCloudVisionV1p2beta1EntityAnnotation::class;
  protected $landmarkAnnotationsDataType = 'array';
  protected $localizedObjectAnnotationsType = GoogleCloudVisionV1p2beta1LocalizedObjectAnnotation::class;
  protected $localizedObjectAnnotationsDataType = 'array';
  protected $logoAnnotationsType = GoogleCloudVisionV1p2beta1EntityAnnotation::class;
  protected $logoAnnotationsDataType = 'array';
  protected $productSearchResultsType = GoogleCloudVisionV1p2beta1ProductSearchResults::class;
  protected $productSearchResultsDataType = '';
  protected $safeSearchAnnotationType = GoogleCloudVisionV1p2beta1SafeSearchAnnotation::class;
  protected $safeSearchAnnotationDataType = '';
  protected $textAnnotationsType = GoogleCloudVisionV1p2beta1EntityAnnotation::class;
  protected $textAnnotationsDataType = 'array';
  protected $webDetectionType = GoogleCloudVisionV1p2beta1WebDetection::class;
  protected $webDetectionDataType = '';
  /** @param GoogleCloudVisionV1p2beta1ImageAnnotationContext */
  public function setContext(GoogleCloudVisionV1p2beta1ImageAnnotationContext $context)
  {
    $this->context = $context;
  }
  /** @return GoogleCloudVisionV1p2beta1ImageAnnotationContext */
  public function getContext()
  {
    return $this->context;
  }
  /** @param GoogleCloudVisionV1p2beta1CropHintsAnnotation */
  public function setCropHintsAnnotation(GoogleCloudVisionV1p2beta1CropHintsAnnotation $cropHintsAnnotation)
  {
    $this->cropHintsAnnotation = $cropHintsAnnotation;
  }
  /** @return GoogleCloudVisionV1p2beta1CropHintsAnnotation */
  public function getCropHintsAnnotation()
  {
    return $this->cropHintsAnnotation;
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
  /** @param GoogleCloudVisionV1p2beta1FaceAnnotation[] */
  public function setFaceAnnotations($faceAnnotations)
  {
    $this->faceAnnotations = $faceAnnotations;
  }
  /** @return GoogleCloudVisionV1p2beta1FaceAnnotation[] */
  public function getFaceAnnotations()
  {
    return $this->faceAnnotations;
  }
  /** @param GoogleCloudVisionV1p2beta1TextAnnotation */
  public function setFullTextAnnotation(GoogleCloudVisionV1p2beta1TextAnnotation $fullTextAnnotation)
  {
    $this->fullTextAnnotation = $fullTextAnnotation;
  }
  /** @return GoogleCloudVisionV1p2beta1TextAnnotation */
  public function getFullTextAnnotation()
  {
    return $this->fullTextAnnotation;
  }
  /** @param GoogleCloudVisionV1p2beta1ImageProperties */
  public function setImagePropertiesAnnotation(GoogleCloudVisionV1p2beta1ImageProperties $imagePropertiesAnnotation)
  {
    $this->imagePropertiesAnnotation = $imagePropertiesAnnotation;
  }
  /** @return GoogleCloudVisionV1p2beta1ImageProperties */
  public function getImagePropertiesAnnotation()
  {
    return $this->imagePropertiesAnnotation;
  }
  /** @param GoogleCloudVisionV1p2beta1EntityAnnotation[] */
  public function setLabelAnnotations($labelAnnotations)
  {
    $this->labelAnnotations = $labelAnnotations;
  }
  /** @return GoogleCloudVisionV1p2beta1EntityAnnotation[] */
  public function getLabelAnnotations()
  {
    return $this->labelAnnotations;
  }
  /** @param GoogleCloudVisionV1p2beta1EntityAnnotation[] */
  public function setLandmarkAnnotations($landmarkAnnotations)
  {
    $this->landmarkAnnotations = $landmarkAnnotations;
  }
  /** @return GoogleCloudVisionV1p2beta1EntityAnnotation[] */
  public function getLandmarkAnnotations()
  {
    return $this->landmarkAnnotations;
  }
  /** @param GoogleCloudVisionV1p2beta1LocalizedObjectAnnotation[] */
  public function setLocalizedObjectAnnotations($localizedObjectAnnotations)
  {
    $this->localizedObjectAnnotations = $localizedObjectAnnotations;
  }
  /** @return GoogleCloudVisionV1p2beta1LocalizedObjectAnnotation[] */
  public function getLocalizedObjectAnnotations()
  {
    return $this->localizedObjectAnnotations;
  }
  /** @param GoogleCloudVisionV1p2beta1EntityAnnotation[] */
  public function setLogoAnnotations($logoAnnotations)
  {
    $this->logoAnnotations = $logoAnnotations;
  }
  /** @return GoogleCloudVisionV1p2beta1EntityAnnotation[] */
  public function getLogoAnnotations()
  {
    return $this->logoAnnotations;
  }
  /** @param GoogleCloudVisionV1p2beta1ProductSearchResults */
  public function setProductSearchResults(GoogleCloudVisionV1p2beta1ProductSearchResults $productSearchResults)
  {
    $this->productSearchResults = $productSearchResults;
  }
  /** @return GoogleCloudVisionV1p2beta1ProductSearchResults */
  public function getProductSearchResults()
  {
    return $this->productSearchResults;
  }
  /** @param GoogleCloudVisionV1p2beta1SafeSearchAnnotation */
  public function setSafeSearchAnnotation(GoogleCloudVisionV1p2beta1SafeSearchAnnotation $safeSearchAnnotation)
  {
    $this->safeSearchAnnotation = $safeSearchAnnotation;
  }
  /** @return GoogleCloudVisionV1p2beta1SafeSearchAnnotation */
  public function getSafeSearchAnnotation()
  {
    return $this->safeSearchAnnotation;
  }
  /** @param GoogleCloudVisionV1p2beta1EntityAnnotation[] */
  public function setTextAnnotations($textAnnotations)
  {
    $this->textAnnotations = $textAnnotations;
  }
  /** @return GoogleCloudVisionV1p2beta1EntityAnnotation[] */
  public function getTextAnnotations()
  {
    return $this->textAnnotations;
  }
  /** @param GoogleCloudVisionV1p2beta1WebDetection */
  public function setWebDetection(GoogleCloudVisionV1p2beta1WebDetection $webDetection)
  {
    $this->webDetection = $webDetection;
  }
  /** @return GoogleCloudVisionV1p2beta1WebDetection */
  public function getWebDetection()
  {
    return $this->webDetection;
  }
}

class GoogleCloudVisionV1p2beta1AsyncAnnotateFileResponse extends \Google\Model
{
  /** @var GoogleCloudVisionV1p2beta1OutputConfig */
  public $outputConfig;
  protected $outputConfigType = GoogleCloudVisionV1p2beta1OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param GoogleCloudVisionV1p2beta1OutputConfig */
  public function setOutputConfig(GoogleCloudVisionV1p2beta1OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return GoogleCloudVisionV1p2beta1OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
}

class GoogleCloudVisionV1p2beta1AsyncBatchAnnotateFilesResponse extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p2beta1AsyncAnnotateFileResponse[] */
  public $responses;
  protected $collection_key = 'responses';
  protected $responsesType = GoogleCloudVisionV1p2beta1AsyncAnnotateFileResponse::class;
  protected $responsesDataType = 'array';
  /** @param GoogleCloudVisionV1p2beta1AsyncAnnotateFileResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return GoogleCloudVisionV1p2beta1AsyncAnnotateFileResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
}

class GoogleCloudVisionV1p2beta1Block extends \Google\Collection
{
  /** @var string */
  public $blockType;
  /** @var GoogleCloudVisionV1p2beta1BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVisionV1p2beta1Paragraph[] */
  public $paragraphs;
  /** @var GoogleCloudVisionV1p2beta1TextAnnotationTextProperty */
  public $property;
  protected $collection_key = 'paragraphs';
  protected $boundingBoxType = GoogleCloudVisionV1p2beta1BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $paragraphsType = GoogleCloudVisionV1p2beta1Paragraph::class;
  protected $paragraphsDataType = 'array';
  protected $propertyType = GoogleCloudVisionV1p2beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  /** @param string */
  public function setBlockType($blockType)
  {
    $this->blockType = $blockType;
  }
  /** @return string */
  public function getBlockType()
  {
    return $this->blockType;
  }
  /** @param GoogleCloudVisionV1p2beta1BoundingPoly */
  public function setBoundingBox(GoogleCloudVisionV1p2beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return GoogleCloudVisionV1p2beta1BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param GoogleCloudVisionV1p2beta1Paragraph[] */
  public function setParagraphs($paragraphs)
  {
    $this->paragraphs = $paragraphs;
  }
  /** @return GoogleCloudVisionV1p2beta1Paragraph[] */
  public function getParagraphs()
  {
    return $this->paragraphs;
  }
  /** @param GoogleCloudVisionV1p2beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p2beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p2beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
  }
}

class GoogleCloudVisionV1p2beta1BoundingPoly extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p2beta1NormalizedVertex[] */
  public $normalizedVertices;
  /** @var GoogleCloudVisionV1p2beta1Vertex[] */
  public $vertices;
  protected $collection_key = 'vertices';
  protected $normalizedVerticesType = GoogleCloudVisionV1p2beta1NormalizedVertex::class;
  protected $normalizedVerticesDataType = 'array';
  protected $verticesType = GoogleCloudVisionV1p2beta1Vertex::class;
  protected $verticesDataType = 'array';
  /** @param GoogleCloudVisionV1p2beta1NormalizedVertex[] */
  public function setNormalizedVertices($normalizedVertices)
  {
    $this->normalizedVertices = $normalizedVertices;
  }
  /** @return GoogleCloudVisionV1p2beta1NormalizedVertex[] */
  public function getNormalizedVertices()
  {
    return $this->normalizedVertices;
  }
  /** @param GoogleCloudVisionV1p2beta1Vertex[] */
  public function setVertices($vertices)
  {
    $this->vertices = $vertices;
  }
  /** @return GoogleCloudVisionV1p2beta1Vertex[] */
  public function getVertices()
  {
    return $this->vertices;
  }
}

class GoogleCloudVisionV1p2beta1ColorInfo extends \Google\Model
{
  /** @var Color */
  public $color;
  /** @var float */
  public $pixelFraction;
  /** @var float */
  public $score;
  protected $colorType = Color::class;
  protected $colorDataType = '';
  /** @param Color */
  public function setColor(Color $color)
  {
    $this->color = $color;
  }
  /** @return Color */
  public function getColor()
  {
    return $this->color;
  }
  /** @param float */
  public function setPixelFraction($pixelFraction)
  {
    $this->pixelFraction = $pixelFraction;
  }
  /** @return float */
  public function getPixelFraction()
  {
    return $this->pixelFraction;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p2beta1CropHint extends \Google\Model
{
  /** @var GoogleCloudVisionV1p2beta1BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $confidence;
  /** @var float */
  public $importanceFraction;
  protected $boundingPolyType = GoogleCloudVisionV1p2beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  /** @param GoogleCloudVisionV1p2beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p2beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p2beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param float */
  public function setImportanceFraction($importanceFraction)
  {
    $this->importanceFraction = $importanceFraction;
  }
  /** @return float */
  public function getImportanceFraction()
  {
    return $this->importanceFraction;
  }
}

class GoogleCloudVisionV1p2beta1CropHintsAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p2beta1CropHint[] */
  public $cropHints;
  protected $collection_key = 'cropHints';
  protected $cropHintsType = GoogleCloudVisionV1p2beta1CropHint::class;
  protected $cropHintsDataType = 'array';
  /** @param GoogleCloudVisionV1p2beta1CropHint[] */
  public function setCropHints($cropHints)
  {
    $this->cropHints = $cropHints;
  }
  /** @return GoogleCloudVisionV1p2beta1CropHint[] */
  public function getCropHints()
  {
    return $this->cropHints;
  }
}

class GoogleCloudVisionV1p2beta1DominantColorsAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p2beta1ColorInfo[] */
  public $colors;
  protected $collection_key = 'colors';
  protected $colorsType = GoogleCloudVisionV1p2beta1ColorInfo::class;
  protected $colorsDataType = 'array';
  /** @param GoogleCloudVisionV1p2beta1ColorInfo[] */
  public function setColors($colors)
  {
    $this->colors = $colors;
  }
  /** @return GoogleCloudVisionV1p2beta1ColorInfo[] */
  public function getColors()
  {
    return $this->colors;
  }
}

class GoogleCloudVisionV1p2beta1EntityAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p2beta1BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $confidence;
  /** @var string */
  public $description;
  /** @var string */
  public $locale;
  /** @var GoogleCloudVisionV1p2beta1LocationInfo[] */
  public $locations;
  /** @var string */
  public $mid;
  /** @var GoogleCloudVisionV1p2beta1Property[] */
  public $properties;
  /** @var float */
  public $score;
  /** @var float */
  public $topicality;
  protected $collection_key = 'properties';
  protected $boundingPolyType = GoogleCloudVisionV1p2beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $locationsType = GoogleCloudVisionV1p2beta1LocationInfo::class;
  protected $locationsDataType = 'array';
  protected $propertiesType = GoogleCloudVisionV1p2beta1Property::class;
  protected $propertiesDataType = 'array';
  /** @param GoogleCloudVisionV1p2beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p2beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p2beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /** @return string */
  public function getLocale()
  {
    return $this->locale;
  }
  /** @param GoogleCloudVisionV1p2beta1LocationInfo[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return GoogleCloudVisionV1p2beta1LocationInfo[] */
  public function getLocations()
  {
    return $this->locations;
  }
  /** @param string */
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /** @return string */
  public function getMid()
  {
    return $this->mid;
  }
  /** @param GoogleCloudVisionV1p2beta1Property[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleCloudVisionV1p2beta1Property[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
  /** @param float */
  public function setTopicality($topicality)
  {
    $this->topicality = $topicality;
  }
  /** @return float */
  public function getTopicality()
  {
    return $this->topicality;
  }
}

class GoogleCloudVisionV1p2beta1FaceAnnotation extends \Google\Collection
{
  /** @var string */
  public $angerLikelihood;
  /** @var string */
  public $blurredLikelihood;
  /** @var GoogleCloudVisionV1p2beta1BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $detectionConfidence;
  /** @var GoogleCloudVisionV1p2beta1BoundingPoly */
  public $fdBoundingPoly;
  /** @var string */
  public $headwearLikelihood;
  /** @var string */
  public $joyLikelihood;
  /** @var float */
  public $landmarkingConfidence;
  /** @var GoogleCloudVisionV1p2beta1FaceAnnotationLandmark[] */
  public $landmarks;
  /** @var float */
  public $panAngle;
  /** @var float */
  public $rollAngle;
  /** @var string */
  public $sorrowLikelihood;
  /** @var string */
  public $surpriseLikelihood;
  /** @var float */
  public $tiltAngle;
  /** @var string */
  public $underExposedLikelihood;
  protected $collection_key = 'landmarks';
  protected $boundingPolyType = GoogleCloudVisionV1p2beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $fdBoundingPolyType = GoogleCloudVisionV1p2beta1BoundingPoly::class;
  protected $fdBoundingPolyDataType = '';
  protected $landmarksType = GoogleCloudVisionV1p2beta1FaceAnnotationLandmark::class;
  protected $landmarksDataType = 'array';
  /** @param string */
  public function setAngerLikelihood($angerLikelihood)
  {
    $this->angerLikelihood = $angerLikelihood;
  }
  /** @return string */
  public function getAngerLikelihood()
  {
    return $this->angerLikelihood;
  }
  /** @param string */
  public function setBlurredLikelihood($blurredLikelihood)
  {
    $this->blurredLikelihood = $blurredLikelihood;
  }
  /** @return string */
  public function getBlurredLikelihood()
  {
    return $this->blurredLikelihood;
  }
  /** @param GoogleCloudVisionV1p2beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p2beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p2beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setDetectionConfidence($detectionConfidence)
  {
    $this->detectionConfidence = $detectionConfidence;
  }
  /** @return float */
  public function getDetectionConfidence()
  {
    return $this->detectionConfidence;
  }
  /** @param GoogleCloudVisionV1p2beta1BoundingPoly */
  public function setFdBoundingPoly(GoogleCloudVisionV1p2beta1BoundingPoly $fdBoundingPoly)
  {
    $this->fdBoundingPoly = $fdBoundingPoly;
  }
  /** @return GoogleCloudVisionV1p2beta1BoundingPoly */
  public function getFdBoundingPoly()
  {
    return $this->fdBoundingPoly;
  }
  /** @param string */
  public function setHeadwearLikelihood($headwearLikelihood)
  {
    $this->headwearLikelihood = $headwearLikelihood;
  }
  /** @return string */
  public function getHeadwearLikelihood()
  {
    return $this->headwearLikelihood;
  }
  /** @param string */
  public function setJoyLikelihood($joyLikelihood)
  {
    $this->joyLikelihood = $joyLikelihood;
  }
  /** @return string */
  public function getJoyLikelihood()
  {
    return $this->joyLikelihood;
  }
  /** @param float */
  public function setLandmarkingConfidence($landmarkingConfidence)
  {
    $this->landmarkingConfidence = $landmarkingConfidence;
  }
  /** @return float */
  public function getLandmarkingConfidence()
  {
    return $this->landmarkingConfidence;
  }
  /** @param GoogleCloudVisionV1p2beta1FaceAnnotationLandmark[] */
  public function setLandmarks($landmarks)
  {
    $this->landmarks = $landmarks;
  }
  /** @return GoogleCloudVisionV1p2beta1FaceAnnotationLandmark[] */
  public function getLandmarks()
  {
    return $this->landmarks;
  }
  /** @param float */
  public function setPanAngle($panAngle)
  {
    $this->panAngle = $panAngle;
  }
  /** @return float */
  public function getPanAngle()
  {
    return $this->panAngle;
  }
  /** @param float */
  public function setRollAngle($rollAngle)
  {
    $this->rollAngle = $rollAngle;
  }
  /** @return float */
  public function getRollAngle()
  {
    return $this->rollAngle;
  }
  /** @param string */
  public function setSorrowLikelihood($sorrowLikelihood)
  {
    $this->sorrowLikelihood = $sorrowLikelihood;
  }
  /** @return string */
  public function getSorrowLikelihood()
  {
    return $this->sorrowLikelihood;
  }
  /** @param string */
  public function setSurpriseLikelihood($surpriseLikelihood)
  {
    $this->surpriseLikelihood = $surpriseLikelihood;
  }
  /** @return string */
  public function getSurpriseLikelihood()
  {
    return $this->surpriseLikelihood;
  }
  /** @param float */
  public function setTiltAngle($tiltAngle)
  {
    $this->tiltAngle = $tiltAngle;
  }
  /** @return float */
  public function getTiltAngle()
  {
    return $this->tiltAngle;
  }
  /** @param string */
  public function setUnderExposedLikelihood($underExposedLikelihood)
  {
    $this->underExposedLikelihood = $underExposedLikelihood;
  }
  /** @return string */
  public function getUnderExposedLikelihood()
  {
    return $this->underExposedLikelihood;
  }
}

class GoogleCloudVisionV1p2beta1FaceAnnotationLandmark extends \Google\Model
{
  /** @var GoogleCloudVisionV1p2beta1Position */
  public $position;
  /** @var string */
  public $type;
  protected $positionType = GoogleCloudVisionV1p2beta1Position::class;
  protected $positionDataType = '';
  /** @param GoogleCloudVisionV1p2beta1Position */
  public function setPosition(GoogleCloudVisionV1p2beta1Position $position)
  {
    $this->position = $position;
  }
  /** @return GoogleCloudVisionV1p2beta1Position */
  public function getPosition()
  {
    return $this->position;
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

class GoogleCloudVisionV1p2beta1GcsDestination extends \Google\Model
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

class GoogleCloudVisionV1p2beta1GcsSource extends \Google\Model
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

class GoogleCloudVisionV1p2beta1ImageAnnotationContext extends \Google\Model
{
  /** @var int */
  public $pageNumber;
  /** @var string */
  public $uri;

  /** @param int */
  public function setPageNumber($pageNumber)
  {
    $this->pageNumber = $pageNumber;
  }
  /** @return int */
  public function getPageNumber()
  {
    return $this->pageNumber;
  }
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

class GoogleCloudVisionV1p2beta1ImageProperties extends \Google\Model
{
  /** @var GoogleCloudVisionV1p2beta1DominantColorsAnnotation */
  public $dominantColors;
  protected $dominantColorsType = GoogleCloudVisionV1p2beta1DominantColorsAnnotation::class;
  protected $dominantColorsDataType = '';
  /** @param GoogleCloudVisionV1p2beta1DominantColorsAnnotation */
  public function setDominantColors(GoogleCloudVisionV1p2beta1DominantColorsAnnotation $dominantColors)
  {
    $this->dominantColors = $dominantColors;
  }
  /** @return GoogleCloudVisionV1p2beta1DominantColorsAnnotation */
  public function getDominantColors()
  {
    return $this->dominantColors;
  }
}

class GoogleCloudVisionV1p2beta1InputConfig extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var GoogleCloudVisionV1p2beta1GcsSource */
  public $gcsSource;
  /** @var string */
  public $mimeType;
  protected $gcsSourceType = GoogleCloudVisionV1p2beta1GcsSource::class;
  protected $gcsSourceDataType = '';
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
  /** @param GoogleCloudVisionV1p2beta1GcsSource */
  public function setGcsSource(GoogleCloudVisionV1p2beta1GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudVisionV1p2beta1GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
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
}

class GoogleCloudVisionV1p2beta1LocalizedObjectAnnotation extends \Google\Model
{
  /** @var GoogleCloudVisionV1p2beta1BoundingPoly */
  public $boundingPoly;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $mid;
  /** @var string */
  public $name;
  /** @var float */
  public $score;
  protected $boundingPolyType = GoogleCloudVisionV1p2beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  /** @param GoogleCloudVisionV1p2beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p2beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p2beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
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
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /** @return string */
  public function getMid()
  {
    return $this->mid;
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
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p2beta1LocationInfo extends \Google\Model
{
  /** @var LatLng */
  public $latLng;
  protected $latLngType = LatLng::class;
  protected $latLngDataType = '';
  /** @param LatLng */
  public function setLatLng(LatLng $latLng)
  {
    $this->latLng = $latLng;
  }
  /** @return LatLng */
  public function getLatLng()
  {
    return $this->latLng;
  }
}

class GoogleCloudVisionV1p2beta1NormalizedVertex extends \Google\Model
{
  /** @var float */
  public $x;
  /** @var float */
  public $y;

  /** @param float */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return float */
  public function getX()
  {
    return $this->x;
  }
  /** @param float */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return float */
  public function getY()
  {
    return $this->y;
  }
}

class GoogleCloudVisionV1p2beta1OperationMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;

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
}

class GoogleCloudVisionV1p2beta1OutputConfig extends \Google\Model
{
  /** @var int */
  public $batchSize;
  /** @var GoogleCloudVisionV1p2beta1GcsDestination */
  public $gcsDestination;
  protected $gcsDestinationType = GoogleCloudVisionV1p2beta1GcsDestination::class;
  protected $gcsDestinationDataType = '';
  /** @param int */
  public function setBatchSize($batchSize)
  {
    $this->batchSize = $batchSize;
  }
  /** @return int */
  public function getBatchSize()
  {
    return $this->batchSize;
  }
  /** @param GoogleCloudVisionV1p2beta1GcsDestination */
  public function setGcsDestination(GoogleCloudVisionV1p2beta1GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GoogleCloudVisionV1p2beta1GcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
}

class GoogleCloudVisionV1p2beta1Page extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p2beta1Block[] */
  public $blocks;
  /** @var float */
  public $confidence;
  /** @var int */
  public $height;
  /** @var GoogleCloudVisionV1p2beta1TextAnnotationTextProperty */
  public $property;
  /** @var int */
  public $width;
  protected $collection_key = 'blocks';
  protected $blocksType = GoogleCloudVisionV1p2beta1Block::class;
  protected $blocksDataType = 'array';
  protected $propertyType = GoogleCloudVisionV1p2beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  /** @param GoogleCloudVisionV1p2beta1Block[] */
  public function setBlocks($blocks)
  {
    $this->blocks = $blocks;
  }
  /** @return GoogleCloudVisionV1p2beta1Block[] */
  public function getBlocks()
  {
    return $this->blocks;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param int */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return int */
  public function getHeight()
  {
    return $this->height;
  }
  /** @param GoogleCloudVisionV1p2beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p2beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p2beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param int */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return int */
  public function getWidth()
  {
    return $this->width;
  }
}

class GoogleCloudVisionV1p2beta1Paragraph extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p2beta1BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVisionV1p2beta1TextAnnotationTextProperty */
  public $property;
  /** @var GoogleCloudVisionV1p2beta1Word[] */
  public $words;
  protected $collection_key = 'words';
  protected $boundingBoxType = GoogleCloudVisionV1p2beta1BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $propertyType = GoogleCloudVisionV1p2beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  protected $wordsType = GoogleCloudVisionV1p2beta1Word::class;
  protected $wordsDataType = 'array';
  /** @param GoogleCloudVisionV1p2beta1BoundingPoly */
  public function setBoundingBox(GoogleCloudVisionV1p2beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return GoogleCloudVisionV1p2beta1BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param GoogleCloudVisionV1p2beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p2beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p2beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param GoogleCloudVisionV1p2beta1Word[] */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /** @return GoogleCloudVisionV1p2beta1Word[] */
  public function getWords()
  {
    return $this->words;
  }
}

class GoogleCloudVisionV1p2beta1Position extends \Google\Model
{
  /** @var float */
  public $x;
  /** @var float */
  public $y;
  /** @var float */
  public $z;

  /** @param float */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return float */
  public function getX()
  {
    return $this->x;
  }
  /** @param float */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return float */
  public function getY()
  {
    return $this->y;
  }
  /** @param float */
  public function setZ($z)
  {
    $this->z = $z;
  }
  /** @return float */
  public function getZ()
  {
    return $this->z;
  }
}

class GoogleCloudVisionV1p2beta1Product extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $productCategory;
  /** @var GoogleCloudVisionV1p2beta1ProductKeyValue[] */
  public $productLabels;
  protected $collection_key = 'productLabels';
  protected $productLabelsType = GoogleCloudVisionV1p2beta1ProductKeyValue::class;
  protected $productLabelsDataType = 'array';
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
  /** @param string */
  public function setProductCategory($productCategory)
  {
    $this->productCategory = $productCategory;
  }
  /** @return string */
  public function getProductCategory()
  {
    return $this->productCategory;
  }
  /** @param GoogleCloudVisionV1p2beta1ProductKeyValue[] */
  public function setProductLabels($productLabels)
  {
    $this->productLabels = $productLabels;
  }
  /** @return GoogleCloudVisionV1p2beta1ProductKeyValue[] */
  public function getProductLabels()
  {
    return $this->productLabels;
  }
}

class GoogleCloudVisionV1p2beta1ProductKeyValue extends \Google\Model
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

class GoogleCloudVisionV1p2beta1ProductSearchResults extends \Google\Collection
{
  /** @var string */
  public $indexTime;
  /** @var GoogleCloudVisionV1p2beta1ProductSearchResultsGroupedResult[] */
  public $productGroupedResults;
  /** @var GoogleCloudVisionV1p2beta1ProductSearchResultsResult[] */
  public $results;
  protected $collection_key = 'results';
  protected $productGroupedResultsType = GoogleCloudVisionV1p2beta1ProductSearchResultsGroupedResult::class;
  protected $productGroupedResultsDataType = 'array';
  protected $resultsType = GoogleCloudVisionV1p2beta1ProductSearchResultsResult::class;
  protected $resultsDataType = 'array';
  /** @param string */
  public function setIndexTime($indexTime)
  {
    $this->indexTime = $indexTime;
  }
  /** @return string */
  public function getIndexTime()
  {
    return $this->indexTime;
  }
  /** @param GoogleCloudVisionV1p2beta1ProductSearchResultsGroupedResult[] */
  public function setProductGroupedResults($productGroupedResults)
  {
    $this->productGroupedResults = $productGroupedResults;
  }
  /** @return GoogleCloudVisionV1p2beta1ProductSearchResultsGroupedResult[] */
  public function getProductGroupedResults()
  {
    return $this->productGroupedResults;
  }
  /** @param GoogleCloudVisionV1p2beta1ProductSearchResultsResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GoogleCloudVisionV1p2beta1ProductSearchResultsResult[] */
  public function getResults()
  {
    return $this->results;
  }
}

class GoogleCloudVisionV1p2beta1ProductSearchResultsGroupedResult extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p2beta1BoundingPoly */
  public $boundingPoly;
  /** @var GoogleCloudVisionV1p2beta1ProductSearchResultsObjectAnnotation[] */
  public $objectAnnotations;
  /** @var GoogleCloudVisionV1p2beta1ProductSearchResultsResult[] */
  public $results;
  protected $collection_key = 'results';
  protected $boundingPolyType = GoogleCloudVisionV1p2beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $objectAnnotationsType = GoogleCloudVisionV1p2beta1ProductSearchResultsObjectAnnotation::class;
  protected $objectAnnotationsDataType = 'array';
  protected $resultsType = GoogleCloudVisionV1p2beta1ProductSearchResultsResult::class;
  protected $resultsDataType = 'array';
  /** @param GoogleCloudVisionV1p2beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p2beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p2beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param GoogleCloudVisionV1p2beta1ProductSearchResultsObjectAnnotation[] */
  public function setObjectAnnotations($objectAnnotations)
  {
    $this->objectAnnotations = $objectAnnotations;
  }
  /** @return GoogleCloudVisionV1p2beta1ProductSearchResultsObjectAnnotation[] */
  public function getObjectAnnotations()
  {
    return $this->objectAnnotations;
  }
  /** @param GoogleCloudVisionV1p2beta1ProductSearchResultsResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GoogleCloudVisionV1p2beta1ProductSearchResultsResult[] */
  public function getResults()
  {
    return $this->results;
  }
}

class GoogleCloudVisionV1p2beta1ProductSearchResultsObjectAnnotation extends \Google\Model
{
  /** @var string */
  public $languageCode;
  /** @var string */
  public $mid;
  /** @var string */
  public $name;
  /** @var float */
  public $score;

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
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /** @return string */
  public function getMid()
  {
    return $this->mid;
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
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p2beta1ProductSearchResultsResult extends \Google\Model
{
  /** @var string */
  public $image;
  /** @var GoogleCloudVisionV1p2beta1Product */
  public $product;
  /** @var float */
  public $score;
  protected $productType = GoogleCloudVisionV1p2beta1Product::class;
  protected $productDataType = '';
  /** @param string */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /** @return string */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudVisionV1p2beta1Product */
  public function setProduct(GoogleCloudVisionV1p2beta1Product $product)
  {
    $this->product = $product;
  }
  /** @return GoogleCloudVisionV1p2beta1Product */
  public function getProduct()
  {
    return $this->product;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p2beta1Property extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $uint64Value;
  /** @var string */
  public $value;

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
  public function setUint64Value($uint64Value)
  {
    $this->uint64Value = $uint64Value;
  }
  /** @return string */
  public function getUint64Value()
  {
    return $this->uint64Value;
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

class GoogleCloudVisionV1p2beta1SafeSearchAnnotation extends \Google\Model
{
  /** @var string */
  public $adult;
  /** @var string */
  public $medical;
  /** @var string */
  public $racy;
  /** @var string */
  public $spoof;
  /** @var string */
  public $violence;

  /** @param string */
  public function setAdult($adult)
  {
    $this->adult = $adult;
  }
  /** @return string */
  public function getAdult()
  {
    return $this->adult;
  }
  /** @param string */
  public function setMedical($medical)
  {
    $this->medical = $medical;
  }
  /** @return string */
  public function getMedical()
  {
    return $this->medical;
  }
  /** @param string */
  public function setRacy($racy)
  {
    $this->racy = $racy;
  }
  /** @return string */
  public function getRacy()
  {
    return $this->racy;
  }
  /** @param string */
  public function setSpoof($spoof)
  {
    $this->spoof = $spoof;
  }
  /** @return string */
  public function getSpoof()
  {
    return $this->spoof;
  }
  /** @param string */
  public function setViolence($violence)
  {
    $this->violence = $violence;
  }
  /** @return string */
  public function getViolence()
  {
    return $this->violence;
  }
}

class GoogleCloudVisionV1p2beta1Symbol extends \Google\Model
{
  /** @var GoogleCloudVisionV1p2beta1BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVisionV1p2beta1TextAnnotationTextProperty */
  public $property;
  /** @var string */
  public $text;
  protected $boundingBoxType = GoogleCloudVisionV1p2beta1BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $propertyType = GoogleCloudVisionV1p2beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  /** @param GoogleCloudVisionV1p2beta1BoundingPoly */
  public function setBoundingBox(GoogleCloudVisionV1p2beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return GoogleCloudVisionV1p2beta1BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param GoogleCloudVisionV1p2beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p2beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p2beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
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

class GoogleCloudVisionV1p2beta1TextAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p2beta1Page[] */
  public $pages;
  /** @var string */
  public $text;
  protected $collection_key = 'pages';
  protected $pagesType = GoogleCloudVisionV1p2beta1Page::class;
  protected $pagesDataType = 'array';
  /** @param GoogleCloudVisionV1p2beta1Page[] */
  public function setPages($pages)
  {
    $this->pages = $pages;
  }
  /** @return GoogleCloudVisionV1p2beta1Page[] */
  public function getPages()
  {
    return $this->pages;
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

class GoogleCloudVisionV1p2beta1TextAnnotationDetectedBreak extends \Google\Model
{
  /** @var bool */
  public $isPrefix;
  /** @var string */
  public $type;

  /** @param bool */
  public function setIsPrefix($isPrefix)
  {
    $this->isPrefix = $isPrefix;
  }
  /** @return bool */
  public function getIsPrefix()
  {
    return $this->isPrefix;
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

class GoogleCloudVisionV1p2beta1TextAnnotationDetectedLanguage extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $languageCode;

  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
}

class GoogleCloudVisionV1p2beta1TextAnnotationTextProperty extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p2beta1TextAnnotationDetectedBreak */
  public $detectedBreak;
  /** @var GoogleCloudVisionV1p2beta1TextAnnotationDetectedLanguage[] */
  public $detectedLanguages;
  protected $collection_key = 'detectedLanguages';
  protected $detectedBreakType = GoogleCloudVisionV1p2beta1TextAnnotationDetectedBreak::class;
  protected $detectedBreakDataType = '';
  protected $detectedLanguagesType = GoogleCloudVisionV1p2beta1TextAnnotationDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  /** @param GoogleCloudVisionV1p2beta1TextAnnotationDetectedBreak */
  public function setDetectedBreak(GoogleCloudVisionV1p2beta1TextAnnotationDetectedBreak $detectedBreak)
  {
    $this->detectedBreak = $detectedBreak;
  }
  /** @return GoogleCloudVisionV1p2beta1TextAnnotationDetectedBreak */
  public function getDetectedBreak()
  {
    return $this->detectedBreak;
  }
  /** @param GoogleCloudVisionV1p2beta1TextAnnotationDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudVisionV1p2beta1TextAnnotationDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
}

class GoogleCloudVisionV1p2beta1Vertex extends \Google\Model
{
  /** @var int */
  public $x;
  /** @var int */
  public $y;

  /** @param int */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return int */
  public function getX()
  {
    return $this->x;
  }
  /** @param int */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return int */
  public function getY()
  {
    return $this->y;
  }
}

class GoogleCloudVisionV1p2beta1WebDetection extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p2beta1WebDetectionWebLabel[] */
  public $bestGuessLabels;
  /** @var GoogleCloudVisionV1p2beta1WebDetectionWebImage[] */
  public $fullMatchingImages;
  /** @var GoogleCloudVisionV1p2beta1WebDetectionWebPage[] */
  public $pagesWithMatchingImages;
  /** @var GoogleCloudVisionV1p2beta1WebDetectionWebImage[] */
  public $partialMatchingImages;
  /** @var GoogleCloudVisionV1p2beta1WebDetectionWebImage[] */
  public $visuallySimilarImages;
  /** @var GoogleCloudVisionV1p2beta1WebDetectionWebEntity[] */
  public $webEntities;
  protected $collection_key = 'webEntities';
  protected $bestGuessLabelsType = GoogleCloudVisionV1p2beta1WebDetectionWebLabel::class;
  protected $bestGuessLabelsDataType = 'array';
  protected $fullMatchingImagesType = GoogleCloudVisionV1p2beta1WebDetectionWebImage::class;
  protected $fullMatchingImagesDataType = 'array';
  protected $pagesWithMatchingImagesType = GoogleCloudVisionV1p2beta1WebDetectionWebPage::class;
  protected $pagesWithMatchingImagesDataType = 'array';
  protected $partialMatchingImagesType = GoogleCloudVisionV1p2beta1WebDetectionWebImage::class;
  protected $partialMatchingImagesDataType = 'array';
  protected $visuallySimilarImagesType = GoogleCloudVisionV1p2beta1WebDetectionWebImage::class;
  protected $visuallySimilarImagesDataType = 'array';
  protected $webEntitiesType = GoogleCloudVisionV1p2beta1WebDetectionWebEntity::class;
  protected $webEntitiesDataType = 'array';
  /** @param GoogleCloudVisionV1p2beta1WebDetectionWebLabel[] */
  public function setBestGuessLabels($bestGuessLabels)
  {
    $this->bestGuessLabels = $bestGuessLabels;
  }
  /** @return GoogleCloudVisionV1p2beta1WebDetectionWebLabel[] */
  public function getBestGuessLabels()
  {
    return $this->bestGuessLabels;
  }
  /** @param GoogleCloudVisionV1p2beta1WebDetectionWebImage[] */
  public function setFullMatchingImages($fullMatchingImages)
  {
    $this->fullMatchingImages = $fullMatchingImages;
  }
  /** @return GoogleCloudVisionV1p2beta1WebDetectionWebImage[] */
  public function getFullMatchingImages()
  {
    return $this->fullMatchingImages;
  }
  /** @param GoogleCloudVisionV1p2beta1WebDetectionWebPage[] */
  public function setPagesWithMatchingImages($pagesWithMatchingImages)
  {
    $this->pagesWithMatchingImages = $pagesWithMatchingImages;
  }
  /** @return GoogleCloudVisionV1p2beta1WebDetectionWebPage[] */
  public function getPagesWithMatchingImages()
  {
    return $this->pagesWithMatchingImages;
  }
  /** @param GoogleCloudVisionV1p2beta1WebDetectionWebImage[] */
  public function setPartialMatchingImages($partialMatchingImages)
  {
    $this->partialMatchingImages = $partialMatchingImages;
  }
  /** @return GoogleCloudVisionV1p2beta1WebDetectionWebImage[] */
  public function getPartialMatchingImages()
  {
    return $this->partialMatchingImages;
  }
  /** @param GoogleCloudVisionV1p2beta1WebDetectionWebImage[] */
  public function setVisuallySimilarImages($visuallySimilarImages)
  {
    $this->visuallySimilarImages = $visuallySimilarImages;
  }
  /** @return GoogleCloudVisionV1p2beta1WebDetectionWebImage[] */
  public function getVisuallySimilarImages()
  {
    return $this->visuallySimilarImages;
  }
  /** @param GoogleCloudVisionV1p2beta1WebDetectionWebEntity[] */
  public function setWebEntities($webEntities)
  {
    $this->webEntities = $webEntities;
  }
  /** @return GoogleCloudVisionV1p2beta1WebDetectionWebEntity[] */
  public function getWebEntities()
  {
    return $this->webEntities;
  }
}

class GoogleCloudVisionV1p2beta1WebDetectionWebEntity extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $entityId;
  /** @var float */
  public $score;

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
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p2beta1WebDetectionWebImage extends \Google\Model
{
  /** @var float */
  public $score;
  /** @var string */
  public $url;

  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
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

class GoogleCloudVisionV1p2beta1WebDetectionWebLabel extends \Google\Model
{
  /** @var string */
  public $label;
  /** @var string */
  public $languageCode;

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
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class GoogleCloudVisionV1p2beta1WebDetectionWebPage extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p2beta1WebDetectionWebImage[] */
  public $fullMatchingImages;
  /** @var string */
  public $pageTitle;
  /** @var GoogleCloudVisionV1p2beta1WebDetectionWebImage[] */
  public $partialMatchingImages;
  /** @var float */
  public $score;
  /** @var string */
  public $url;
  protected $collection_key = 'partialMatchingImages';
  protected $fullMatchingImagesType = GoogleCloudVisionV1p2beta1WebDetectionWebImage::class;
  protected $fullMatchingImagesDataType = 'array';
  protected $partialMatchingImagesType = GoogleCloudVisionV1p2beta1WebDetectionWebImage::class;
  protected $partialMatchingImagesDataType = 'array';
  /** @param GoogleCloudVisionV1p2beta1WebDetectionWebImage[] */
  public function setFullMatchingImages($fullMatchingImages)
  {
    $this->fullMatchingImages = $fullMatchingImages;
  }
  /** @return GoogleCloudVisionV1p2beta1WebDetectionWebImage[] */
  public function getFullMatchingImages()
  {
    return $this->fullMatchingImages;
  }
  /** @param string */
  public function setPageTitle($pageTitle)
  {
    $this->pageTitle = $pageTitle;
  }
  /** @return string */
  public function getPageTitle()
  {
    return $this->pageTitle;
  }
  /** @param GoogleCloudVisionV1p2beta1WebDetectionWebImage[] */
  public function setPartialMatchingImages($partialMatchingImages)
  {
    $this->partialMatchingImages = $partialMatchingImages;
  }
  /** @return GoogleCloudVisionV1p2beta1WebDetectionWebImage[] */
  public function getPartialMatchingImages()
  {
    return $this->partialMatchingImages;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
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

class GoogleCloudVisionV1p2beta1Word extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p2beta1BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVisionV1p2beta1TextAnnotationTextProperty */
  public $property;
  /** @var GoogleCloudVisionV1p2beta1Symbol[] */
  public $symbols;
  protected $collection_key = 'symbols';
  protected $boundingBoxType = GoogleCloudVisionV1p2beta1BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $propertyType = GoogleCloudVisionV1p2beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  protected $symbolsType = GoogleCloudVisionV1p2beta1Symbol::class;
  protected $symbolsDataType = 'array';
  /** @param GoogleCloudVisionV1p2beta1BoundingPoly */
  public function setBoundingBox(GoogleCloudVisionV1p2beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return GoogleCloudVisionV1p2beta1BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param GoogleCloudVisionV1p2beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p2beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p2beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param GoogleCloudVisionV1p2beta1Symbol[] */
  public function setSymbols($symbols)
  {
    $this->symbols = $symbols;
  }
  /** @return GoogleCloudVisionV1p2beta1Symbol[] */
  public function getSymbols()
  {
    return $this->symbols;
  }
}

class GoogleCloudVisionV1p3beta1AnnotateFileResponse extends \Google\Collection
{
  /** @var Status */
  public $error;
  /** @var GoogleCloudVisionV1p3beta1InputConfig */
  public $inputConfig;
  /** @var GoogleCloudVisionV1p3beta1AnnotateImageResponse[] */
  public $responses;
  /** @var int */
  public $totalPages;
  protected $collection_key = 'responses';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $inputConfigType = GoogleCloudVisionV1p3beta1InputConfig::class;
  protected $inputConfigDataType = '';
  protected $responsesType = GoogleCloudVisionV1p3beta1AnnotateImageResponse::class;
  protected $responsesDataType = 'array';
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
  /** @param GoogleCloudVisionV1p3beta1InputConfig */
  public function setInputConfig(GoogleCloudVisionV1p3beta1InputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return GoogleCloudVisionV1p3beta1InputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
  /** @param GoogleCloudVisionV1p3beta1AnnotateImageResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return GoogleCloudVisionV1p3beta1AnnotateImageResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
  /** @param int */
  public function setTotalPages($totalPages)
  {
    $this->totalPages = $totalPages;
  }
  /** @return int */
  public function getTotalPages()
  {
    return $this->totalPages;
  }
}

class GoogleCloudVisionV1p3beta1AnnotateImageResponse extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p3beta1ImageAnnotationContext */
  public $context;
  /** @var GoogleCloudVisionV1p3beta1CropHintsAnnotation */
  public $cropHintsAnnotation;
  /** @var Status */
  public $error;
  /** @var GoogleCloudVisionV1p3beta1FaceAnnotation[] */
  public $faceAnnotations;
  /** @var GoogleCloudVisionV1p3beta1TextAnnotation */
  public $fullTextAnnotation;
  /** @var GoogleCloudVisionV1p3beta1ImageProperties */
  public $imagePropertiesAnnotation;
  /** @var GoogleCloudVisionV1p3beta1EntityAnnotation[] */
  public $labelAnnotations;
  /** @var GoogleCloudVisionV1p3beta1EntityAnnotation[] */
  public $landmarkAnnotations;
  /** @var GoogleCloudVisionV1p3beta1LocalizedObjectAnnotation[] */
  public $localizedObjectAnnotations;
  /** @var GoogleCloudVisionV1p3beta1EntityAnnotation[] */
  public $logoAnnotations;
  /** @var GoogleCloudVisionV1p3beta1ProductSearchResults */
  public $productSearchResults;
  /** @var GoogleCloudVisionV1p3beta1SafeSearchAnnotation */
  public $safeSearchAnnotation;
  /** @var GoogleCloudVisionV1p3beta1EntityAnnotation[] */
  public $textAnnotations;
  /** @var GoogleCloudVisionV1p3beta1WebDetection */
  public $webDetection;
  protected $collection_key = 'textAnnotations';
  protected $contextType = GoogleCloudVisionV1p3beta1ImageAnnotationContext::class;
  protected $contextDataType = '';
  protected $cropHintsAnnotationType = GoogleCloudVisionV1p3beta1CropHintsAnnotation::class;
  protected $cropHintsAnnotationDataType = '';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $faceAnnotationsType = GoogleCloudVisionV1p3beta1FaceAnnotation::class;
  protected $faceAnnotationsDataType = 'array';
  protected $fullTextAnnotationType = GoogleCloudVisionV1p3beta1TextAnnotation::class;
  protected $fullTextAnnotationDataType = '';
  protected $imagePropertiesAnnotationType = GoogleCloudVisionV1p3beta1ImageProperties::class;
  protected $imagePropertiesAnnotationDataType = '';
  protected $labelAnnotationsType = GoogleCloudVisionV1p3beta1EntityAnnotation::class;
  protected $labelAnnotationsDataType = 'array';
  protected $landmarkAnnotationsType = GoogleCloudVisionV1p3beta1EntityAnnotation::class;
  protected $landmarkAnnotationsDataType = 'array';
  protected $localizedObjectAnnotationsType = GoogleCloudVisionV1p3beta1LocalizedObjectAnnotation::class;
  protected $localizedObjectAnnotationsDataType = 'array';
  protected $logoAnnotationsType = GoogleCloudVisionV1p3beta1EntityAnnotation::class;
  protected $logoAnnotationsDataType = 'array';
  protected $productSearchResultsType = GoogleCloudVisionV1p3beta1ProductSearchResults::class;
  protected $productSearchResultsDataType = '';
  protected $safeSearchAnnotationType = GoogleCloudVisionV1p3beta1SafeSearchAnnotation::class;
  protected $safeSearchAnnotationDataType = '';
  protected $textAnnotationsType = GoogleCloudVisionV1p3beta1EntityAnnotation::class;
  protected $textAnnotationsDataType = 'array';
  protected $webDetectionType = GoogleCloudVisionV1p3beta1WebDetection::class;
  protected $webDetectionDataType = '';
  /** @param GoogleCloudVisionV1p3beta1ImageAnnotationContext */
  public function setContext(GoogleCloudVisionV1p3beta1ImageAnnotationContext $context)
  {
    $this->context = $context;
  }
  /** @return GoogleCloudVisionV1p3beta1ImageAnnotationContext */
  public function getContext()
  {
    return $this->context;
  }
  /** @param GoogleCloudVisionV1p3beta1CropHintsAnnotation */
  public function setCropHintsAnnotation(GoogleCloudVisionV1p3beta1CropHintsAnnotation $cropHintsAnnotation)
  {
    $this->cropHintsAnnotation = $cropHintsAnnotation;
  }
  /** @return GoogleCloudVisionV1p3beta1CropHintsAnnotation */
  public function getCropHintsAnnotation()
  {
    return $this->cropHintsAnnotation;
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
  /** @param GoogleCloudVisionV1p3beta1FaceAnnotation[] */
  public function setFaceAnnotations($faceAnnotations)
  {
    $this->faceAnnotations = $faceAnnotations;
  }
  /** @return GoogleCloudVisionV1p3beta1FaceAnnotation[] */
  public function getFaceAnnotations()
  {
    return $this->faceAnnotations;
  }
  /** @param GoogleCloudVisionV1p3beta1TextAnnotation */
  public function setFullTextAnnotation(GoogleCloudVisionV1p3beta1TextAnnotation $fullTextAnnotation)
  {
    $this->fullTextAnnotation = $fullTextAnnotation;
  }
  /** @return GoogleCloudVisionV1p3beta1TextAnnotation */
  public function getFullTextAnnotation()
  {
    return $this->fullTextAnnotation;
  }
  /** @param GoogleCloudVisionV1p3beta1ImageProperties */
  public function setImagePropertiesAnnotation(GoogleCloudVisionV1p3beta1ImageProperties $imagePropertiesAnnotation)
  {
    $this->imagePropertiesAnnotation = $imagePropertiesAnnotation;
  }
  /** @return GoogleCloudVisionV1p3beta1ImageProperties */
  public function getImagePropertiesAnnotation()
  {
    return $this->imagePropertiesAnnotation;
  }
  /** @param GoogleCloudVisionV1p3beta1EntityAnnotation[] */
  public function setLabelAnnotations($labelAnnotations)
  {
    $this->labelAnnotations = $labelAnnotations;
  }
  /** @return GoogleCloudVisionV1p3beta1EntityAnnotation[] */
  public function getLabelAnnotations()
  {
    return $this->labelAnnotations;
  }
  /** @param GoogleCloudVisionV1p3beta1EntityAnnotation[] */
  public function setLandmarkAnnotations($landmarkAnnotations)
  {
    $this->landmarkAnnotations = $landmarkAnnotations;
  }
  /** @return GoogleCloudVisionV1p3beta1EntityAnnotation[] */
  public function getLandmarkAnnotations()
  {
    return $this->landmarkAnnotations;
  }
  /** @param GoogleCloudVisionV1p3beta1LocalizedObjectAnnotation[] */
  public function setLocalizedObjectAnnotations($localizedObjectAnnotations)
  {
    $this->localizedObjectAnnotations = $localizedObjectAnnotations;
  }
  /** @return GoogleCloudVisionV1p3beta1LocalizedObjectAnnotation[] */
  public function getLocalizedObjectAnnotations()
  {
    return $this->localizedObjectAnnotations;
  }
  /** @param GoogleCloudVisionV1p3beta1EntityAnnotation[] */
  public function setLogoAnnotations($logoAnnotations)
  {
    $this->logoAnnotations = $logoAnnotations;
  }
  /** @return GoogleCloudVisionV1p3beta1EntityAnnotation[] */
  public function getLogoAnnotations()
  {
    return $this->logoAnnotations;
  }
  /** @param GoogleCloudVisionV1p3beta1ProductSearchResults */
  public function setProductSearchResults(GoogleCloudVisionV1p3beta1ProductSearchResults $productSearchResults)
  {
    $this->productSearchResults = $productSearchResults;
  }
  /** @return GoogleCloudVisionV1p3beta1ProductSearchResults */
  public function getProductSearchResults()
  {
    return $this->productSearchResults;
  }
  /** @param GoogleCloudVisionV1p3beta1SafeSearchAnnotation */
  public function setSafeSearchAnnotation(GoogleCloudVisionV1p3beta1SafeSearchAnnotation $safeSearchAnnotation)
  {
    $this->safeSearchAnnotation = $safeSearchAnnotation;
  }
  /** @return GoogleCloudVisionV1p3beta1SafeSearchAnnotation */
  public function getSafeSearchAnnotation()
  {
    return $this->safeSearchAnnotation;
  }
  /** @param GoogleCloudVisionV1p3beta1EntityAnnotation[] */
  public function setTextAnnotations($textAnnotations)
  {
    $this->textAnnotations = $textAnnotations;
  }
  /** @return GoogleCloudVisionV1p3beta1EntityAnnotation[] */
  public function getTextAnnotations()
  {
    return $this->textAnnotations;
  }
  /** @param GoogleCloudVisionV1p3beta1WebDetection */
  public function setWebDetection(GoogleCloudVisionV1p3beta1WebDetection $webDetection)
  {
    $this->webDetection = $webDetection;
  }
  /** @return GoogleCloudVisionV1p3beta1WebDetection */
  public function getWebDetection()
  {
    return $this->webDetection;
  }
}

class GoogleCloudVisionV1p3beta1AsyncAnnotateFileResponse extends \Google\Model
{
  /** @var GoogleCloudVisionV1p3beta1OutputConfig */
  public $outputConfig;
  protected $outputConfigType = GoogleCloudVisionV1p3beta1OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param GoogleCloudVisionV1p3beta1OutputConfig */
  public function setOutputConfig(GoogleCloudVisionV1p3beta1OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return GoogleCloudVisionV1p3beta1OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
}

class GoogleCloudVisionV1p3beta1AsyncBatchAnnotateFilesResponse extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p3beta1AsyncAnnotateFileResponse[] */
  public $responses;
  protected $collection_key = 'responses';
  protected $responsesType = GoogleCloudVisionV1p3beta1AsyncAnnotateFileResponse::class;
  protected $responsesDataType = 'array';
  /** @param GoogleCloudVisionV1p3beta1AsyncAnnotateFileResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return GoogleCloudVisionV1p3beta1AsyncAnnotateFileResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
}

class GoogleCloudVisionV1p3beta1BatchOperationMetadata extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $state;
  /** @var string */
  public $submitTime;

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
  public function setSubmitTime($submitTime)
  {
    $this->submitTime = $submitTime;
  }
  /** @return string */
  public function getSubmitTime()
  {
    return $this->submitTime;
  }
}

class GoogleCloudVisionV1p3beta1Block extends \Google\Collection
{
  /** @var string */
  public $blockType;
  /** @var GoogleCloudVisionV1p3beta1BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVisionV1p3beta1Paragraph[] */
  public $paragraphs;
  /** @var GoogleCloudVisionV1p3beta1TextAnnotationTextProperty */
  public $property;
  protected $collection_key = 'paragraphs';
  protected $boundingBoxType = GoogleCloudVisionV1p3beta1BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $paragraphsType = GoogleCloudVisionV1p3beta1Paragraph::class;
  protected $paragraphsDataType = 'array';
  protected $propertyType = GoogleCloudVisionV1p3beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  /** @param string */
  public function setBlockType($blockType)
  {
    $this->blockType = $blockType;
  }
  /** @return string */
  public function getBlockType()
  {
    return $this->blockType;
  }
  /** @param GoogleCloudVisionV1p3beta1BoundingPoly */
  public function setBoundingBox(GoogleCloudVisionV1p3beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return GoogleCloudVisionV1p3beta1BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param GoogleCloudVisionV1p3beta1Paragraph[] */
  public function setParagraphs($paragraphs)
  {
    $this->paragraphs = $paragraphs;
  }
  /** @return GoogleCloudVisionV1p3beta1Paragraph[] */
  public function getParagraphs()
  {
    return $this->paragraphs;
  }
  /** @param GoogleCloudVisionV1p3beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p3beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p3beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
  }
}

class GoogleCloudVisionV1p3beta1BoundingPoly extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p3beta1NormalizedVertex[] */
  public $normalizedVertices;
  /** @var GoogleCloudVisionV1p3beta1Vertex[] */
  public $vertices;
  protected $collection_key = 'vertices';
  protected $normalizedVerticesType = GoogleCloudVisionV1p3beta1NormalizedVertex::class;
  protected $normalizedVerticesDataType = 'array';
  protected $verticesType = GoogleCloudVisionV1p3beta1Vertex::class;
  protected $verticesDataType = 'array';
  /** @param GoogleCloudVisionV1p3beta1NormalizedVertex[] */
  public function setNormalizedVertices($normalizedVertices)
  {
    $this->normalizedVertices = $normalizedVertices;
  }
  /** @return GoogleCloudVisionV1p3beta1NormalizedVertex[] */
  public function getNormalizedVertices()
  {
    return $this->normalizedVertices;
  }
  /** @param GoogleCloudVisionV1p3beta1Vertex[] */
  public function setVertices($vertices)
  {
    $this->vertices = $vertices;
  }
  /** @return GoogleCloudVisionV1p3beta1Vertex[] */
  public function getVertices()
  {
    return $this->vertices;
  }
}

class GoogleCloudVisionV1p3beta1ColorInfo extends \Google\Model
{
  /** @var Color */
  public $color;
  /** @var float */
  public $pixelFraction;
  /** @var float */
  public $score;
  protected $colorType = Color::class;
  protected $colorDataType = '';
  /** @param Color */
  public function setColor(Color $color)
  {
    $this->color = $color;
  }
  /** @return Color */
  public function getColor()
  {
    return $this->color;
  }
  /** @param float */
  public function setPixelFraction($pixelFraction)
  {
    $this->pixelFraction = $pixelFraction;
  }
  /** @return float */
  public function getPixelFraction()
  {
    return $this->pixelFraction;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p3beta1CropHint extends \Google\Model
{
  /** @var GoogleCloudVisionV1p3beta1BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $confidence;
  /** @var float */
  public $importanceFraction;
  protected $boundingPolyType = GoogleCloudVisionV1p3beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  /** @param GoogleCloudVisionV1p3beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p3beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p3beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param float */
  public function setImportanceFraction($importanceFraction)
  {
    $this->importanceFraction = $importanceFraction;
  }
  /** @return float */
  public function getImportanceFraction()
  {
    return $this->importanceFraction;
  }
}

class GoogleCloudVisionV1p3beta1CropHintsAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p3beta1CropHint[] */
  public $cropHints;
  protected $collection_key = 'cropHints';
  protected $cropHintsType = GoogleCloudVisionV1p3beta1CropHint::class;
  protected $cropHintsDataType = 'array';
  /** @param GoogleCloudVisionV1p3beta1CropHint[] */
  public function setCropHints($cropHints)
  {
    $this->cropHints = $cropHints;
  }
  /** @return GoogleCloudVisionV1p3beta1CropHint[] */
  public function getCropHints()
  {
    return $this->cropHints;
  }
}

class GoogleCloudVisionV1p3beta1DominantColorsAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p3beta1ColorInfo[] */
  public $colors;
  protected $collection_key = 'colors';
  protected $colorsType = GoogleCloudVisionV1p3beta1ColorInfo::class;
  protected $colorsDataType = 'array';
  /** @param GoogleCloudVisionV1p3beta1ColorInfo[] */
  public function setColors($colors)
  {
    $this->colors = $colors;
  }
  /** @return GoogleCloudVisionV1p3beta1ColorInfo[] */
  public function getColors()
  {
    return $this->colors;
  }
}

class GoogleCloudVisionV1p3beta1EntityAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p3beta1BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $confidence;
  /** @var string */
  public $description;
  /** @var string */
  public $locale;
  /** @var GoogleCloudVisionV1p3beta1LocationInfo[] */
  public $locations;
  /** @var string */
  public $mid;
  /** @var GoogleCloudVisionV1p3beta1Property[] */
  public $properties;
  /** @var float */
  public $score;
  /** @var float */
  public $topicality;
  protected $collection_key = 'properties';
  protected $boundingPolyType = GoogleCloudVisionV1p3beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $locationsType = GoogleCloudVisionV1p3beta1LocationInfo::class;
  protected $locationsDataType = 'array';
  protected $propertiesType = GoogleCloudVisionV1p3beta1Property::class;
  protected $propertiesDataType = 'array';
  /** @param GoogleCloudVisionV1p3beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p3beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p3beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /** @return string */
  public function getLocale()
  {
    return $this->locale;
  }
  /** @param GoogleCloudVisionV1p3beta1LocationInfo[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return GoogleCloudVisionV1p3beta1LocationInfo[] */
  public function getLocations()
  {
    return $this->locations;
  }
  /** @param string */
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /** @return string */
  public function getMid()
  {
    return $this->mid;
  }
  /** @param GoogleCloudVisionV1p3beta1Property[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleCloudVisionV1p3beta1Property[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
  /** @param float */
  public function setTopicality($topicality)
  {
    $this->topicality = $topicality;
  }
  /** @return float */
  public function getTopicality()
  {
    return $this->topicality;
  }
}

class GoogleCloudVisionV1p3beta1FaceAnnotation extends \Google\Collection
{
  /** @var string */
  public $angerLikelihood;
  /** @var string */
  public $blurredLikelihood;
  /** @var GoogleCloudVisionV1p3beta1BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $detectionConfidence;
  /** @var GoogleCloudVisionV1p3beta1BoundingPoly */
  public $fdBoundingPoly;
  /** @var string */
  public $headwearLikelihood;
  /** @var string */
  public $joyLikelihood;
  /** @var float */
  public $landmarkingConfidence;
  /** @var GoogleCloudVisionV1p3beta1FaceAnnotationLandmark[] */
  public $landmarks;
  /** @var float */
  public $panAngle;
  /** @var float */
  public $rollAngle;
  /** @var string */
  public $sorrowLikelihood;
  /** @var string */
  public $surpriseLikelihood;
  /** @var float */
  public $tiltAngle;
  /** @var string */
  public $underExposedLikelihood;
  protected $collection_key = 'landmarks';
  protected $boundingPolyType = GoogleCloudVisionV1p3beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $fdBoundingPolyType = GoogleCloudVisionV1p3beta1BoundingPoly::class;
  protected $fdBoundingPolyDataType = '';
  protected $landmarksType = GoogleCloudVisionV1p3beta1FaceAnnotationLandmark::class;
  protected $landmarksDataType = 'array';
  /** @param string */
  public function setAngerLikelihood($angerLikelihood)
  {
    $this->angerLikelihood = $angerLikelihood;
  }
  /** @return string */
  public function getAngerLikelihood()
  {
    return $this->angerLikelihood;
  }
  /** @param string */
  public function setBlurredLikelihood($blurredLikelihood)
  {
    $this->blurredLikelihood = $blurredLikelihood;
  }
  /** @return string */
  public function getBlurredLikelihood()
  {
    return $this->blurredLikelihood;
  }
  /** @param GoogleCloudVisionV1p3beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p3beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p3beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setDetectionConfidence($detectionConfidence)
  {
    $this->detectionConfidence = $detectionConfidence;
  }
  /** @return float */
  public function getDetectionConfidence()
  {
    return $this->detectionConfidence;
  }
  /** @param GoogleCloudVisionV1p3beta1BoundingPoly */
  public function setFdBoundingPoly(GoogleCloudVisionV1p3beta1BoundingPoly $fdBoundingPoly)
  {
    $this->fdBoundingPoly = $fdBoundingPoly;
  }
  /** @return GoogleCloudVisionV1p3beta1BoundingPoly */
  public function getFdBoundingPoly()
  {
    return $this->fdBoundingPoly;
  }
  /** @param string */
  public function setHeadwearLikelihood($headwearLikelihood)
  {
    $this->headwearLikelihood = $headwearLikelihood;
  }
  /** @return string */
  public function getHeadwearLikelihood()
  {
    return $this->headwearLikelihood;
  }
  /** @param string */
  public function setJoyLikelihood($joyLikelihood)
  {
    $this->joyLikelihood = $joyLikelihood;
  }
  /** @return string */
  public function getJoyLikelihood()
  {
    return $this->joyLikelihood;
  }
  /** @param float */
  public function setLandmarkingConfidence($landmarkingConfidence)
  {
    $this->landmarkingConfidence = $landmarkingConfidence;
  }
  /** @return float */
  public function getLandmarkingConfidence()
  {
    return $this->landmarkingConfidence;
  }
  /** @param GoogleCloudVisionV1p3beta1FaceAnnotationLandmark[] */
  public function setLandmarks($landmarks)
  {
    $this->landmarks = $landmarks;
  }
  /** @return GoogleCloudVisionV1p3beta1FaceAnnotationLandmark[] */
  public function getLandmarks()
  {
    return $this->landmarks;
  }
  /** @param float */
  public function setPanAngle($panAngle)
  {
    $this->panAngle = $panAngle;
  }
  /** @return float */
  public function getPanAngle()
  {
    return $this->panAngle;
  }
  /** @param float */
  public function setRollAngle($rollAngle)
  {
    $this->rollAngle = $rollAngle;
  }
  /** @return float */
  public function getRollAngle()
  {
    return $this->rollAngle;
  }
  /** @param string */
  public function setSorrowLikelihood($sorrowLikelihood)
  {
    $this->sorrowLikelihood = $sorrowLikelihood;
  }
  /** @return string */
  public function getSorrowLikelihood()
  {
    return $this->sorrowLikelihood;
  }
  /** @param string */
  public function setSurpriseLikelihood($surpriseLikelihood)
  {
    $this->surpriseLikelihood = $surpriseLikelihood;
  }
  /** @return string */
  public function getSurpriseLikelihood()
  {
    return $this->surpriseLikelihood;
  }
  /** @param float */
  public function setTiltAngle($tiltAngle)
  {
    $this->tiltAngle = $tiltAngle;
  }
  /** @return float */
  public function getTiltAngle()
  {
    return $this->tiltAngle;
  }
  /** @param string */
  public function setUnderExposedLikelihood($underExposedLikelihood)
  {
    $this->underExposedLikelihood = $underExposedLikelihood;
  }
  /** @return string */
  public function getUnderExposedLikelihood()
  {
    return $this->underExposedLikelihood;
  }
}

class GoogleCloudVisionV1p3beta1FaceAnnotationLandmark extends \Google\Model
{
  /** @var GoogleCloudVisionV1p3beta1Position */
  public $position;
  /** @var string */
  public $type;
  protected $positionType = GoogleCloudVisionV1p3beta1Position::class;
  protected $positionDataType = '';
  /** @param GoogleCloudVisionV1p3beta1Position */
  public function setPosition(GoogleCloudVisionV1p3beta1Position $position)
  {
    $this->position = $position;
  }
  /** @return GoogleCloudVisionV1p3beta1Position */
  public function getPosition()
  {
    return $this->position;
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

class GoogleCloudVisionV1p3beta1GcsDestination extends \Google\Model
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

class GoogleCloudVisionV1p3beta1GcsSource extends \Google\Model
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

class GoogleCloudVisionV1p3beta1ImageAnnotationContext extends \Google\Model
{
  /** @var int */
  public $pageNumber;
  /** @var string */
  public $uri;

  /** @param int */
  public function setPageNumber($pageNumber)
  {
    $this->pageNumber = $pageNumber;
  }
  /** @return int */
  public function getPageNumber()
  {
    return $this->pageNumber;
  }
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

class GoogleCloudVisionV1p3beta1ImageProperties extends \Google\Model
{
  /** @var GoogleCloudVisionV1p3beta1DominantColorsAnnotation */
  public $dominantColors;
  protected $dominantColorsType = GoogleCloudVisionV1p3beta1DominantColorsAnnotation::class;
  protected $dominantColorsDataType = '';
  /** @param GoogleCloudVisionV1p3beta1DominantColorsAnnotation */
  public function setDominantColors(GoogleCloudVisionV1p3beta1DominantColorsAnnotation $dominantColors)
  {
    $this->dominantColors = $dominantColors;
  }
  /** @return GoogleCloudVisionV1p3beta1DominantColorsAnnotation */
  public function getDominantColors()
  {
    return $this->dominantColors;
  }
}

class GoogleCloudVisionV1p3beta1ImportProductSetsResponse extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p3beta1ReferenceImage[] */
  public $referenceImages;
  /** @var Status[] */
  public $statuses;
  protected $collection_key = 'statuses';
  protected $referenceImagesType = GoogleCloudVisionV1p3beta1ReferenceImage::class;
  protected $referenceImagesDataType = 'array';
  protected $statusesType = Status::class;
  protected $statusesDataType = 'array';
  /** @param GoogleCloudVisionV1p3beta1ReferenceImage[] */
  public function setReferenceImages($referenceImages)
  {
    $this->referenceImages = $referenceImages;
  }
  /** @return GoogleCloudVisionV1p3beta1ReferenceImage[] */
  public function getReferenceImages()
  {
    return $this->referenceImages;
  }
  /** @param Status[] */
  public function setStatuses($statuses)
  {
    $this->statuses = $statuses;
  }
  /** @return Status[] */
  public function getStatuses()
  {
    return $this->statuses;
  }
}

class GoogleCloudVisionV1p3beta1InputConfig extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var GoogleCloudVisionV1p3beta1GcsSource */
  public $gcsSource;
  /** @var string */
  public $mimeType;
  protected $gcsSourceType = GoogleCloudVisionV1p3beta1GcsSource::class;
  protected $gcsSourceDataType = '';
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
  /** @param GoogleCloudVisionV1p3beta1GcsSource */
  public function setGcsSource(GoogleCloudVisionV1p3beta1GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudVisionV1p3beta1GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
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
}

class GoogleCloudVisionV1p3beta1LocalizedObjectAnnotation extends \Google\Model
{
  /** @var GoogleCloudVisionV1p3beta1BoundingPoly */
  public $boundingPoly;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $mid;
  /** @var string */
  public $name;
  /** @var float */
  public $score;
  protected $boundingPolyType = GoogleCloudVisionV1p3beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  /** @param GoogleCloudVisionV1p3beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p3beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p3beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
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
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /** @return string */
  public function getMid()
  {
    return $this->mid;
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
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p3beta1LocationInfo extends \Google\Model
{
  /** @var LatLng */
  public $latLng;
  protected $latLngType = LatLng::class;
  protected $latLngDataType = '';
  /** @param LatLng */
  public function setLatLng(LatLng $latLng)
  {
    $this->latLng = $latLng;
  }
  /** @return LatLng */
  public function getLatLng()
  {
    return $this->latLng;
  }
}

class GoogleCloudVisionV1p3beta1NormalizedVertex extends \Google\Model
{
  /** @var float */
  public $x;
  /** @var float */
  public $y;

  /** @param float */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return float */
  public function getX()
  {
    return $this->x;
  }
  /** @param float */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return float */
  public function getY()
  {
    return $this->y;
  }
}

class GoogleCloudVisionV1p3beta1OperationMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;

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
}

class GoogleCloudVisionV1p3beta1OutputConfig extends \Google\Model
{
  /** @var int */
  public $batchSize;
  /** @var GoogleCloudVisionV1p3beta1GcsDestination */
  public $gcsDestination;
  protected $gcsDestinationType = GoogleCloudVisionV1p3beta1GcsDestination::class;
  protected $gcsDestinationDataType = '';
  /** @param int */
  public function setBatchSize($batchSize)
  {
    $this->batchSize = $batchSize;
  }
  /** @return int */
  public function getBatchSize()
  {
    return $this->batchSize;
  }
  /** @param GoogleCloudVisionV1p3beta1GcsDestination */
  public function setGcsDestination(GoogleCloudVisionV1p3beta1GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GoogleCloudVisionV1p3beta1GcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
}

class GoogleCloudVisionV1p3beta1Page extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p3beta1Block[] */
  public $blocks;
  /** @var float */
  public $confidence;
  /** @var int */
  public $height;
  /** @var GoogleCloudVisionV1p3beta1TextAnnotationTextProperty */
  public $property;
  /** @var int */
  public $width;
  protected $collection_key = 'blocks';
  protected $blocksType = GoogleCloudVisionV1p3beta1Block::class;
  protected $blocksDataType = 'array';
  protected $propertyType = GoogleCloudVisionV1p3beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  /** @param GoogleCloudVisionV1p3beta1Block[] */
  public function setBlocks($blocks)
  {
    $this->blocks = $blocks;
  }
  /** @return GoogleCloudVisionV1p3beta1Block[] */
  public function getBlocks()
  {
    return $this->blocks;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param int */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return int */
  public function getHeight()
  {
    return $this->height;
  }
  /** @param GoogleCloudVisionV1p3beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p3beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p3beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param int */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return int */
  public function getWidth()
  {
    return $this->width;
  }
}

class GoogleCloudVisionV1p3beta1Paragraph extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p3beta1BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVisionV1p3beta1TextAnnotationTextProperty */
  public $property;
  /** @var GoogleCloudVisionV1p3beta1Word[] */
  public $words;
  protected $collection_key = 'words';
  protected $boundingBoxType = GoogleCloudVisionV1p3beta1BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $propertyType = GoogleCloudVisionV1p3beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  protected $wordsType = GoogleCloudVisionV1p3beta1Word::class;
  protected $wordsDataType = 'array';
  /** @param GoogleCloudVisionV1p3beta1BoundingPoly */
  public function setBoundingBox(GoogleCloudVisionV1p3beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return GoogleCloudVisionV1p3beta1BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param GoogleCloudVisionV1p3beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p3beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p3beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param GoogleCloudVisionV1p3beta1Word[] */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /** @return GoogleCloudVisionV1p3beta1Word[] */
  public function getWords()
  {
    return $this->words;
  }
}

class GoogleCloudVisionV1p3beta1Position extends \Google\Model
{
  /** @var float */
  public $x;
  /** @var float */
  public $y;
  /** @var float */
  public $z;

  /** @param float */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return float */
  public function getX()
  {
    return $this->x;
  }
  /** @param float */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return float */
  public function getY()
  {
    return $this->y;
  }
  /** @param float */
  public function setZ($z)
  {
    $this->z = $z;
  }
  /** @return float */
  public function getZ()
  {
    return $this->z;
  }
}

class GoogleCloudVisionV1p3beta1Product extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $productCategory;
  /** @var GoogleCloudVisionV1p3beta1ProductKeyValue[] */
  public $productLabels;
  protected $collection_key = 'productLabels';
  protected $productLabelsType = GoogleCloudVisionV1p3beta1ProductKeyValue::class;
  protected $productLabelsDataType = 'array';
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
  /** @param string */
  public function setProductCategory($productCategory)
  {
    $this->productCategory = $productCategory;
  }
  /** @return string */
  public function getProductCategory()
  {
    return $this->productCategory;
  }
  /** @param GoogleCloudVisionV1p3beta1ProductKeyValue[] */
  public function setProductLabels($productLabels)
  {
    $this->productLabels = $productLabels;
  }
  /** @return GoogleCloudVisionV1p3beta1ProductKeyValue[] */
  public function getProductLabels()
  {
    return $this->productLabels;
  }
}

class GoogleCloudVisionV1p3beta1ProductKeyValue extends \Google\Model
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

class GoogleCloudVisionV1p3beta1ProductSearchResults extends \Google\Collection
{
  /** @var string */
  public $indexTime;
  /** @var GoogleCloudVisionV1p3beta1ProductSearchResultsGroupedResult[] */
  public $productGroupedResults;
  /** @var GoogleCloudVisionV1p3beta1ProductSearchResultsResult[] */
  public $results;
  protected $collection_key = 'results';
  protected $productGroupedResultsType = GoogleCloudVisionV1p3beta1ProductSearchResultsGroupedResult::class;
  protected $productGroupedResultsDataType = 'array';
  protected $resultsType = GoogleCloudVisionV1p3beta1ProductSearchResultsResult::class;
  protected $resultsDataType = 'array';
  /** @param string */
  public function setIndexTime($indexTime)
  {
    $this->indexTime = $indexTime;
  }
  /** @return string */
  public function getIndexTime()
  {
    return $this->indexTime;
  }
  /** @param GoogleCloudVisionV1p3beta1ProductSearchResultsGroupedResult[] */
  public function setProductGroupedResults($productGroupedResults)
  {
    $this->productGroupedResults = $productGroupedResults;
  }
  /** @return GoogleCloudVisionV1p3beta1ProductSearchResultsGroupedResult[] */
  public function getProductGroupedResults()
  {
    return $this->productGroupedResults;
  }
  /** @param GoogleCloudVisionV1p3beta1ProductSearchResultsResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GoogleCloudVisionV1p3beta1ProductSearchResultsResult[] */
  public function getResults()
  {
    return $this->results;
  }
}

class GoogleCloudVisionV1p3beta1ProductSearchResultsGroupedResult extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p3beta1BoundingPoly */
  public $boundingPoly;
  /** @var GoogleCloudVisionV1p3beta1ProductSearchResultsObjectAnnotation[] */
  public $objectAnnotations;
  /** @var GoogleCloudVisionV1p3beta1ProductSearchResultsResult[] */
  public $results;
  protected $collection_key = 'results';
  protected $boundingPolyType = GoogleCloudVisionV1p3beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $objectAnnotationsType = GoogleCloudVisionV1p3beta1ProductSearchResultsObjectAnnotation::class;
  protected $objectAnnotationsDataType = 'array';
  protected $resultsType = GoogleCloudVisionV1p3beta1ProductSearchResultsResult::class;
  protected $resultsDataType = 'array';
  /** @param GoogleCloudVisionV1p3beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p3beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p3beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param GoogleCloudVisionV1p3beta1ProductSearchResultsObjectAnnotation[] */
  public function setObjectAnnotations($objectAnnotations)
  {
    $this->objectAnnotations = $objectAnnotations;
  }
  /** @return GoogleCloudVisionV1p3beta1ProductSearchResultsObjectAnnotation[] */
  public function getObjectAnnotations()
  {
    return $this->objectAnnotations;
  }
  /** @param GoogleCloudVisionV1p3beta1ProductSearchResultsResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GoogleCloudVisionV1p3beta1ProductSearchResultsResult[] */
  public function getResults()
  {
    return $this->results;
  }
}

class GoogleCloudVisionV1p3beta1ProductSearchResultsObjectAnnotation extends \Google\Model
{
  /** @var string */
  public $languageCode;
  /** @var string */
  public $mid;
  /** @var string */
  public $name;
  /** @var float */
  public $score;

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
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /** @return string */
  public function getMid()
  {
    return $this->mid;
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
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p3beta1ProductSearchResultsResult extends \Google\Model
{
  /** @var string */
  public $image;
  /** @var GoogleCloudVisionV1p3beta1Product */
  public $product;
  /** @var float */
  public $score;
  protected $productType = GoogleCloudVisionV1p3beta1Product::class;
  protected $productDataType = '';
  /** @param string */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /** @return string */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudVisionV1p3beta1Product */
  public function setProduct(GoogleCloudVisionV1p3beta1Product $product)
  {
    $this->product = $product;
  }
  /** @return GoogleCloudVisionV1p3beta1Product */
  public function getProduct()
  {
    return $this->product;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p3beta1Property extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $uint64Value;
  /** @var string */
  public $value;

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
  public function setUint64Value($uint64Value)
  {
    $this->uint64Value = $uint64Value;
  }
  /** @return string */
  public function getUint64Value()
  {
    return $this->uint64Value;
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

class GoogleCloudVisionV1p3beta1ReferenceImage extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p3beta1BoundingPoly[] */
  public $boundingPolys;
  /** @var string */
  public $name;
  /** @var string */
  public $uri;
  protected $collection_key = 'boundingPolys';
  protected $boundingPolysType = GoogleCloudVisionV1p3beta1BoundingPoly::class;
  protected $boundingPolysDataType = 'array';
  /** @param GoogleCloudVisionV1p3beta1BoundingPoly[] */
  public function setBoundingPolys($boundingPolys)
  {
    $this->boundingPolys = $boundingPolys;
  }
  /** @return GoogleCloudVisionV1p3beta1BoundingPoly[] */
  public function getBoundingPolys()
  {
    return $this->boundingPolys;
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

class GoogleCloudVisionV1p3beta1SafeSearchAnnotation extends \Google\Model
{
  /** @var string */
  public $adult;
  /** @var string */
  public $medical;
  /** @var string */
  public $racy;
  /** @var string */
  public $spoof;
  /** @var string */
  public $violence;

  /** @param string */
  public function setAdult($adult)
  {
    $this->adult = $adult;
  }
  /** @return string */
  public function getAdult()
  {
    return $this->adult;
  }
  /** @param string */
  public function setMedical($medical)
  {
    $this->medical = $medical;
  }
  /** @return string */
  public function getMedical()
  {
    return $this->medical;
  }
  /** @param string */
  public function setRacy($racy)
  {
    $this->racy = $racy;
  }
  /** @return string */
  public function getRacy()
  {
    return $this->racy;
  }
  /** @param string */
  public function setSpoof($spoof)
  {
    $this->spoof = $spoof;
  }
  /** @return string */
  public function getSpoof()
  {
    return $this->spoof;
  }
  /** @param string */
  public function setViolence($violence)
  {
    $this->violence = $violence;
  }
  /** @return string */
  public function getViolence()
  {
    return $this->violence;
  }
}

class GoogleCloudVisionV1p3beta1Symbol extends \Google\Model
{
  /** @var GoogleCloudVisionV1p3beta1BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVisionV1p3beta1TextAnnotationTextProperty */
  public $property;
  /** @var string */
  public $text;
  protected $boundingBoxType = GoogleCloudVisionV1p3beta1BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $propertyType = GoogleCloudVisionV1p3beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  /** @param GoogleCloudVisionV1p3beta1BoundingPoly */
  public function setBoundingBox(GoogleCloudVisionV1p3beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return GoogleCloudVisionV1p3beta1BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param GoogleCloudVisionV1p3beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p3beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p3beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
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

class GoogleCloudVisionV1p3beta1TextAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p3beta1Page[] */
  public $pages;
  /** @var string */
  public $text;
  protected $collection_key = 'pages';
  protected $pagesType = GoogleCloudVisionV1p3beta1Page::class;
  protected $pagesDataType = 'array';
  /** @param GoogleCloudVisionV1p3beta1Page[] */
  public function setPages($pages)
  {
    $this->pages = $pages;
  }
  /** @return GoogleCloudVisionV1p3beta1Page[] */
  public function getPages()
  {
    return $this->pages;
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

class GoogleCloudVisionV1p3beta1TextAnnotationDetectedBreak extends \Google\Model
{
  /** @var bool */
  public $isPrefix;
  /** @var string */
  public $type;

  /** @param bool */
  public function setIsPrefix($isPrefix)
  {
    $this->isPrefix = $isPrefix;
  }
  /** @return bool */
  public function getIsPrefix()
  {
    return $this->isPrefix;
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

class GoogleCloudVisionV1p3beta1TextAnnotationDetectedLanguage extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $languageCode;

  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
}

class GoogleCloudVisionV1p3beta1TextAnnotationTextProperty extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p3beta1TextAnnotationDetectedBreak */
  public $detectedBreak;
  /** @var GoogleCloudVisionV1p3beta1TextAnnotationDetectedLanguage[] */
  public $detectedLanguages;
  protected $collection_key = 'detectedLanguages';
  protected $detectedBreakType = GoogleCloudVisionV1p3beta1TextAnnotationDetectedBreak::class;
  protected $detectedBreakDataType = '';
  protected $detectedLanguagesType = GoogleCloudVisionV1p3beta1TextAnnotationDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  /** @param GoogleCloudVisionV1p3beta1TextAnnotationDetectedBreak */
  public function setDetectedBreak(GoogleCloudVisionV1p3beta1TextAnnotationDetectedBreak $detectedBreak)
  {
    $this->detectedBreak = $detectedBreak;
  }
  /** @return GoogleCloudVisionV1p3beta1TextAnnotationDetectedBreak */
  public function getDetectedBreak()
  {
    return $this->detectedBreak;
  }
  /** @param GoogleCloudVisionV1p3beta1TextAnnotationDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudVisionV1p3beta1TextAnnotationDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
}

class GoogleCloudVisionV1p3beta1Vertex extends \Google\Model
{
  /** @var int */
  public $x;
  /** @var int */
  public $y;

  /** @param int */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return int */
  public function getX()
  {
    return $this->x;
  }
  /** @param int */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return int */
  public function getY()
  {
    return $this->y;
  }
}

class GoogleCloudVisionV1p3beta1WebDetection extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p3beta1WebDetectionWebLabel[] */
  public $bestGuessLabels;
  /** @var GoogleCloudVisionV1p3beta1WebDetectionWebImage[] */
  public $fullMatchingImages;
  /** @var GoogleCloudVisionV1p3beta1WebDetectionWebPage[] */
  public $pagesWithMatchingImages;
  /** @var GoogleCloudVisionV1p3beta1WebDetectionWebImage[] */
  public $partialMatchingImages;
  /** @var GoogleCloudVisionV1p3beta1WebDetectionWebImage[] */
  public $visuallySimilarImages;
  /** @var GoogleCloudVisionV1p3beta1WebDetectionWebEntity[] */
  public $webEntities;
  protected $collection_key = 'webEntities';
  protected $bestGuessLabelsType = GoogleCloudVisionV1p3beta1WebDetectionWebLabel::class;
  protected $bestGuessLabelsDataType = 'array';
  protected $fullMatchingImagesType = GoogleCloudVisionV1p3beta1WebDetectionWebImage::class;
  protected $fullMatchingImagesDataType = 'array';
  protected $pagesWithMatchingImagesType = GoogleCloudVisionV1p3beta1WebDetectionWebPage::class;
  protected $pagesWithMatchingImagesDataType = 'array';
  protected $partialMatchingImagesType = GoogleCloudVisionV1p3beta1WebDetectionWebImage::class;
  protected $partialMatchingImagesDataType = 'array';
  protected $visuallySimilarImagesType = GoogleCloudVisionV1p3beta1WebDetectionWebImage::class;
  protected $visuallySimilarImagesDataType = 'array';
  protected $webEntitiesType = GoogleCloudVisionV1p3beta1WebDetectionWebEntity::class;
  protected $webEntitiesDataType = 'array';
  /** @param GoogleCloudVisionV1p3beta1WebDetectionWebLabel[] */
  public function setBestGuessLabels($bestGuessLabels)
  {
    $this->bestGuessLabels = $bestGuessLabels;
  }
  /** @return GoogleCloudVisionV1p3beta1WebDetectionWebLabel[] */
  public function getBestGuessLabels()
  {
    return $this->bestGuessLabels;
  }
  /** @param GoogleCloudVisionV1p3beta1WebDetectionWebImage[] */
  public function setFullMatchingImages($fullMatchingImages)
  {
    $this->fullMatchingImages = $fullMatchingImages;
  }
  /** @return GoogleCloudVisionV1p3beta1WebDetectionWebImage[] */
  public function getFullMatchingImages()
  {
    return $this->fullMatchingImages;
  }
  /** @param GoogleCloudVisionV1p3beta1WebDetectionWebPage[] */
  public function setPagesWithMatchingImages($pagesWithMatchingImages)
  {
    $this->pagesWithMatchingImages = $pagesWithMatchingImages;
  }
  /** @return GoogleCloudVisionV1p3beta1WebDetectionWebPage[] */
  public function getPagesWithMatchingImages()
  {
    return $this->pagesWithMatchingImages;
  }
  /** @param GoogleCloudVisionV1p3beta1WebDetectionWebImage[] */
  public function setPartialMatchingImages($partialMatchingImages)
  {
    $this->partialMatchingImages = $partialMatchingImages;
  }
  /** @return GoogleCloudVisionV1p3beta1WebDetectionWebImage[] */
  public function getPartialMatchingImages()
  {
    return $this->partialMatchingImages;
  }
  /** @param GoogleCloudVisionV1p3beta1WebDetectionWebImage[] */
  public function setVisuallySimilarImages($visuallySimilarImages)
  {
    $this->visuallySimilarImages = $visuallySimilarImages;
  }
  /** @return GoogleCloudVisionV1p3beta1WebDetectionWebImage[] */
  public function getVisuallySimilarImages()
  {
    return $this->visuallySimilarImages;
  }
  /** @param GoogleCloudVisionV1p3beta1WebDetectionWebEntity[] */
  public function setWebEntities($webEntities)
  {
    $this->webEntities = $webEntities;
  }
  /** @return GoogleCloudVisionV1p3beta1WebDetectionWebEntity[] */
  public function getWebEntities()
  {
    return $this->webEntities;
  }
}

class GoogleCloudVisionV1p3beta1WebDetectionWebEntity extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $entityId;
  /** @var float */
  public $score;

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
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p3beta1WebDetectionWebImage extends \Google\Model
{
  /** @var float */
  public $score;
  /** @var string */
  public $url;

  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
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

class GoogleCloudVisionV1p3beta1WebDetectionWebLabel extends \Google\Model
{
  /** @var string */
  public $label;
  /** @var string */
  public $languageCode;

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
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class GoogleCloudVisionV1p3beta1WebDetectionWebPage extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p3beta1WebDetectionWebImage[] */
  public $fullMatchingImages;
  /** @var string */
  public $pageTitle;
  /** @var GoogleCloudVisionV1p3beta1WebDetectionWebImage[] */
  public $partialMatchingImages;
  /** @var float */
  public $score;
  /** @var string */
  public $url;
  protected $collection_key = 'partialMatchingImages';
  protected $fullMatchingImagesType = GoogleCloudVisionV1p3beta1WebDetectionWebImage::class;
  protected $fullMatchingImagesDataType = 'array';
  protected $partialMatchingImagesType = GoogleCloudVisionV1p3beta1WebDetectionWebImage::class;
  protected $partialMatchingImagesDataType = 'array';
  /** @param GoogleCloudVisionV1p3beta1WebDetectionWebImage[] */
  public function setFullMatchingImages($fullMatchingImages)
  {
    $this->fullMatchingImages = $fullMatchingImages;
  }
  /** @return GoogleCloudVisionV1p3beta1WebDetectionWebImage[] */
  public function getFullMatchingImages()
  {
    return $this->fullMatchingImages;
  }
  /** @param string */
  public function setPageTitle($pageTitle)
  {
    $this->pageTitle = $pageTitle;
  }
  /** @return string */
  public function getPageTitle()
  {
    return $this->pageTitle;
  }
  /** @param GoogleCloudVisionV1p3beta1WebDetectionWebImage[] */
  public function setPartialMatchingImages($partialMatchingImages)
  {
    $this->partialMatchingImages = $partialMatchingImages;
  }
  /** @return GoogleCloudVisionV1p3beta1WebDetectionWebImage[] */
  public function getPartialMatchingImages()
  {
    return $this->partialMatchingImages;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
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

class GoogleCloudVisionV1p3beta1Word extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p3beta1BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVisionV1p3beta1TextAnnotationTextProperty */
  public $property;
  /** @var GoogleCloudVisionV1p3beta1Symbol[] */
  public $symbols;
  protected $collection_key = 'symbols';
  protected $boundingBoxType = GoogleCloudVisionV1p3beta1BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $propertyType = GoogleCloudVisionV1p3beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  protected $symbolsType = GoogleCloudVisionV1p3beta1Symbol::class;
  protected $symbolsDataType = 'array';
  /** @param GoogleCloudVisionV1p3beta1BoundingPoly */
  public function setBoundingBox(GoogleCloudVisionV1p3beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return GoogleCloudVisionV1p3beta1BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param GoogleCloudVisionV1p3beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p3beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p3beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param GoogleCloudVisionV1p3beta1Symbol[] */
  public function setSymbols($symbols)
  {
    $this->symbols = $symbols;
  }
  /** @return GoogleCloudVisionV1p3beta1Symbol[] */
  public function getSymbols()
  {
    return $this->symbols;
  }
}

class GoogleCloudVisionV1p4beta1AnnotateFileResponse extends \Google\Collection
{
  /** @var Status */
  public $error;
  /** @var GoogleCloudVisionV1p4beta1InputConfig */
  public $inputConfig;
  /** @var GoogleCloudVisionV1p4beta1AnnotateImageResponse[] */
  public $responses;
  /** @var int */
  public $totalPages;
  protected $collection_key = 'responses';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $inputConfigType = GoogleCloudVisionV1p4beta1InputConfig::class;
  protected $inputConfigDataType = '';
  protected $responsesType = GoogleCloudVisionV1p4beta1AnnotateImageResponse::class;
  protected $responsesDataType = 'array';
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
  /** @param GoogleCloudVisionV1p4beta1InputConfig */
  public function setInputConfig(GoogleCloudVisionV1p4beta1InputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return GoogleCloudVisionV1p4beta1InputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
  /** @param GoogleCloudVisionV1p4beta1AnnotateImageResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return GoogleCloudVisionV1p4beta1AnnotateImageResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
  /** @param int */
  public function setTotalPages($totalPages)
  {
    $this->totalPages = $totalPages;
  }
  /** @return int */
  public function getTotalPages()
  {
    return $this->totalPages;
  }
}

class GoogleCloudVisionV1p4beta1AnnotateImageResponse extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1ImageAnnotationContext */
  public $context;
  /** @var GoogleCloudVisionV1p4beta1CropHintsAnnotation */
  public $cropHintsAnnotation;
  /** @var Status */
  public $error;
  /** @var GoogleCloudVisionV1p4beta1FaceAnnotation[] */
  public $faceAnnotations;
  /** @var GoogleCloudVisionV1p4beta1TextAnnotation */
  public $fullTextAnnotation;
  /** @var GoogleCloudVisionV1p4beta1ImageProperties */
  public $imagePropertiesAnnotation;
  /** @var GoogleCloudVisionV1p4beta1EntityAnnotation[] */
  public $labelAnnotations;
  /** @var GoogleCloudVisionV1p4beta1EntityAnnotation[] */
  public $landmarkAnnotations;
  /** @var GoogleCloudVisionV1p4beta1LocalizedObjectAnnotation[] */
  public $localizedObjectAnnotations;
  /** @var GoogleCloudVisionV1p4beta1EntityAnnotation[] */
  public $logoAnnotations;
  /** @var GoogleCloudVisionV1p4beta1ProductSearchResults */
  public $productSearchResults;
  /** @var GoogleCloudVisionV1p4beta1SafeSearchAnnotation */
  public $safeSearchAnnotation;
  /** @var GoogleCloudVisionV1p4beta1EntityAnnotation[] */
  public $textAnnotations;
  /** @var GoogleCloudVisionV1p4beta1WebDetection */
  public $webDetection;
  protected $collection_key = 'textAnnotations';
  protected $contextType = GoogleCloudVisionV1p4beta1ImageAnnotationContext::class;
  protected $contextDataType = '';
  protected $cropHintsAnnotationType = GoogleCloudVisionV1p4beta1CropHintsAnnotation::class;
  protected $cropHintsAnnotationDataType = '';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $faceAnnotationsType = GoogleCloudVisionV1p4beta1FaceAnnotation::class;
  protected $faceAnnotationsDataType = 'array';
  protected $fullTextAnnotationType = GoogleCloudVisionV1p4beta1TextAnnotation::class;
  protected $fullTextAnnotationDataType = '';
  protected $imagePropertiesAnnotationType = GoogleCloudVisionV1p4beta1ImageProperties::class;
  protected $imagePropertiesAnnotationDataType = '';
  protected $labelAnnotationsType = GoogleCloudVisionV1p4beta1EntityAnnotation::class;
  protected $labelAnnotationsDataType = 'array';
  protected $landmarkAnnotationsType = GoogleCloudVisionV1p4beta1EntityAnnotation::class;
  protected $landmarkAnnotationsDataType = 'array';
  protected $localizedObjectAnnotationsType = GoogleCloudVisionV1p4beta1LocalizedObjectAnnotation::class;
  protected $localizedObjectAnnotationsDataType = 'array';
  protected $logoAnnotationsType = GoogleCloudVisionV1p4beta1EntityAnnotation::class;
  protected $logoAnnotationsDataType = 'array';
  protected $productSearchResultsType = GoogleCloudVisionV1p4beta1ProductSearchResults::class;
  protected $productSearchResultsDataType = '';
  protected $safeSearchAnnotationType = GoogleCloudVisionV1p4beta1SafeSearchAnnotation::class;
  protected $safeSearchAnnotationDataType = '';
  protected $textAnnotationsType = GoogleCloudVisionV1p4beta1EntityAnnotation::class;
  protected $textAnnotationsDataType = 'array';
  protected $webDetectionType = GoogleCloudVisionV1p4beta1WebDetection::class;
  protected $webDetectionDataType = '';
  /** @param GoogleCloudVisionV1p4beta1ImageAnnotationContext */
  public function setContext(GoogleCloudVisionV1p4beta1ImageAnnotationContext $context)
  {
    $this->context = $context;
  }
  /** @return GoogleCloudVisionV1p4beta1ImageAnnotationContext */
  public function getContext()
  {
    return $this->context;
  }
  /** @param GoogleCloudVisionV1p4beta1CropHintsAnnotation */
  public function setCropHintsAnnotation(GoogleCloudVisionV1p4beta1CropHintsAnnotation $cropHintsAnnotation)
  {
    $this->cropHintsAnnotation = $cropHintsAnnotation;
  }
  /** @return GoogleCloudVisionV1p4beta1CropHintsAnnotation */
  public function getCropHintsAnnotation()
  {
    return $this->cropHintsAnnotation;
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
  /** @param GoogleCloudVisionV1p4beta1FaceAnnotation[] */
  public function setFaceAnnotations($faceAnnotations)
  {
    $this->faceAnnotations = $faceAnnotations;
  }
  /** @return GoogleCloudVisionV1p4beta1FaceAnnotation[] */
  public function getFaceAnnotations()
  {
    return $this->faceAnnotations;
  }
  /** @param GoogleCloudVisionV1p4beta1TextAnnotation */
  public function setFullTextAnnotation(GoogleCloudVisionV1p4beta1TextAnnotation $fullTextAnnotation)
  {
    $this->fullTextAnnotation = $fullTextAnnotation;
  }
  /** @return GoogleCloudVisionV1p4beta1TextAnnotation */
  public function getFullTextAnnotation()
  {
    return $this->fullTextAnnotation;
  }
  /** @param GoogleCloudVisionV1p4beta1ImageProperties */
  public function setImagePropertiesAnnotation(GoogleCloudVisionV1p4beta1ImageProperties $imagePropertiesAnnotation)
  {
    $this->imagePropertiesAnnotation = $imagePropertiesAnnotation;
  }
  /** @return GoogleCloudVisionV1p4beta1ImageProperties */
  public function getImagePropertiesAnnotation()
  {
    return $this->imagePropertiesAnnotation;
  }
  /** @param GoogleCloudVisionV1p4beta1EntityAnnotation[] */
  public function setLabelAnnotations($labelAnnotations)
  {
    $this->labelAnnotations = $labelAnnotations;
  }
  /** @return GoogleCloudVisionV1p4beta1EntityAnnotation[] */
  public function getLabelAnnotations()
  {
    return $this->labelAnnotations;
  }
  /** @param GoogleCloudVisionV1p4beta1EntityAnnotation[] */
  public function setLandmarkAnnotations($landmarkAnnotations)
  {
    $this->landmarkAnnotations = $landmarkAnnotations;
  }
  /** @return GoogleCloudVisionV1p4beta1EntityAnnotation[] */
  public function getLandmarkAnnotations()
  {
    return $this->landmarkAnnotations;
  }
  /** @param GoogleCloudVisionV1p4beta1LocalizedObjectAnnotation[] */
  public function setLocalizedObjectAnnotations($localizedObjectAnnotations)
  {
    $this->localizedObjectAnnotations = $localizedObjectAnnotations;
  }
  /** @return GoogleCloudVisionV1p4beta1LocalizedObjectAnnotation[] */
  public function getLocalizedObjectAnnotations()
  {
    return $this->localizedObjectAnnotations;
  }
  /** @param GoogleCloudVisionV1p4beta1EntityAnnotation[] */
  public function setLogoAnnotations($logoAnnotations)
  {
    $this->logoAnnotations = $logoAnnotations;
  }
  /** @return GoogleCloudVisionV1p4beta1EntityAnnotation[] */
  public function getLogoAnnotations()
  {
    return $this->logoAnnotations;
  }
  /** @param GoogleCloudVisionV1p4beta1ProductSearchResults */
  public function setProductSearchResults(GoogleCloudVisionV1p4beta1ProductSearchResults $productSearchResults)
  {
    $this->productSearchResults = $productSearchResults;
  }
  /** @return GoogleCloudVisionV1p4beta1ProductSearchResults */
  public function getProductSearchResults()
  {
    return $this->productSearchResults;
  }
  /** @param GoogleCloudVisionV1p4beta1SafeSearchAnnotation */
  public function setSafeSearchAnnotation(GoogleCloudVisionV1p4beta1SafeSearchAnnotation $safeSearchAnnotation)
  {
    $this->safeSearchAnnotation = $safeSearchAnnotation;
  }
  /** @return GoogleCloudVisionV1p4beta1SafeSearchAnnotation */
  public function getSafeSearchAnnotation()
  {
    return $this->safeSearchAnnotation;
  }
  /** @param GoogleCloudVisionV1p4beta1EntityAnnotation[] */
  public function setTextAnnotations($textAnnotations)
  {
    $this->textAnnotations = $textAnnotations;
  }
  /** @return GoogleCloudVisionV1p4beta1EntityAnnotation[] */
  public function getTextAnnotations()
  {
    return $this->textAnnotations;
  }
  /** @param GoogleCloudVisionV1p4beta1WebDetection */
  public function setWebDetection(GoogleCloudVisionV1p4beta1WebDetection $webDetection)
  {
    $this->webDetection = $webDetection;
  }
  /** @return GoogleCloudVisionV1p4beta1WebDetection */
  public function getWebDetection()
  {
    return $this->webDetection;
  }
}

class GoogleCloudVisionV1p4beta1AsyncAnnotateFileResponse extends \Google\Model
{
  /** @var GoogleCloudVisionV1p4beta1OutputConfig */
  public $outputConfig;
  protected $outputConfigType = GoogleCloudVisionV1p4beta1OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param GoogleCloudVisionV1p4beta1OutputConfig */
  public function setOutputConfig(GoogleCloudVisionV1p4beta1OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return GoogleCloudVisionV1p4beta1OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
}

class GoogleCloudVisionV1p4beta1AsyncBatchAnnotateFilesResponse extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1AsyncAnnotateFileResponse[] */
  public $responses;
  protected $collection_key = 'responses';
  protected $responsesType = GoogleCloudVisionV1p4beta1AsyncAnnotateFileResponse::class;
  protected $responsesDataType = 'array';
  /** @param GoogleCloudVisionV1p4beta1AsyncAnnotateFileResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return GoogleCloudVisionV1p4beta1AsyncAnnotateFileResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
}

class GoogleCloudVisionV1p4beta1AsyncBatchAnnotateImagesResponse extends \Google\Model
{
  /** @var GoogleCloudVisionV1p4beta1OutputConfig */
  public $outputConfig;
  protected $outputConfigType = GoogleCloudVisionV1p4beta1OutputConfig::class;
  protected $outputConfigDataType = '';
  /** @param GoogleCloudVisionV1p4beta1OutputConfig */
  public function setOutputConfig(GoogleCloudVisionV1p4beta1OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /** @return GoogleCloudVisionV1p4beta1OutputConfig */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
}

class GoogleCloudVisionV1p4beta1BatchAnnotateFilesResponse extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1AnnotateFileResponse[] */
  public $responses;
  protected $collection_key = 'responses';
  protected $responsesType = GoogleCloudVisionV1p4beta1AnnotateFileResponse::class;
  protected $responsesDataType = 'array';
  /** @param GoogleCloudVisionV1p4beta1AnnotateFileResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return GoogleCloudVisionV1p4beta1AnnotateFileResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
}

class GoogleCloudVisionV1p4beta1BatchOperationMetadata extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $state;
  /** @var string */
  public $submitTime;

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
  public function setSubmitTime($submitTime)
  {
    $this->submitTime = $submitTime;
  }
  /** @return string */
  public function getSubmitTime()
  {
    return $this->submitTime;
  }
}

class GoogleCloudVisionV1p4beta1Block extends \Google\Collection
{
  /** @var string */
  public $blockType;
  /** @var GoogleCloudVisionV1p4beta1BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVisionV1p4beta1Paragraph[] */
  public $paragraphs;
  /** @var GoogleCloudVisionV1p4beta1TextAnnotationTextProperty */
  public $property;
  protected $collection_key = 'paragraphs';
  protected $boundingBoxType = GoogleCloudVisionV1p4beta1BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $paragraphsType = GoogleCloudVisionV1p4beta1Paragraph::class;
  protected $paragraphsDataType = 'array';
  protected $propertyType = GoogleCloudVisionV1p4beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  /** @param string */
  public function setBlockType($blockType)
  {
    $this->blockType = $blockType;
  }
  /** @return string */
  public function getBlockType()
  {
    return $this->blockType;
  }
  /** @param GoogleCloudVisionV1p4beta1BoundingPoly */
  public function setBoundingBox(GoogleCloudVisionV1p4beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return GoogleCloudVisionV1p4beta1BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param GoogleCloudVisionV1p4beta1Paragraph[] */
  public function setParagraphs($paragraphs)
  {
    $this->paragraphs = $paragraphs;
  }
  /** @return GoogleCloudVisionV1p4beta1Paragraph[] */
  public function getParagraphs()
  {
    return $this->paragraphs;
  }
  /** @param GoogleCloudVisionV1p4beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p4beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p4beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
  }
}

class GoogleCloudVisionV1p4beta1BoundingPoly extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1NormalizedVertex[] */
  public $normalizedVertices;
  /** @var GoogleCloudVisionV1p4beta1Vertex[] */
  public $vertices;
  protected $collection_key = 'vertices';
  protected $normalizedVerticesType = GoogleCloudVisionV1p4beta1NormalizedVertex::class;
  protected $normalizedVerticesDataType = 'array';
  protected $verticesType = GoogleCloudVisionV1p4beta1Vertex::class;
  protected $verticesDataType = 'array';
  /** @param GoogleCloudVisionV1p4beta1NormalizedVertex[] */
  public function setNormalizedVertices($normalizedVertices)
  {
    $this->normalizedVertices = $normalizedVertices;
  }
  /** @return GoogleCloudVisionV1p4beta1NormalizedVertex[] */
  public function getNormalizedVertices()
  {
    return $this->normalizedVertices;
  }
  /** @param GoogleCloudVisionV1p4beta1Vertex[] */
  public function setVertices($vertices)
  {
    $this->vertices = $vertices;
  }
  /** @return GoogleCloudVisionV1p4beta1Vertex[] */
  public function getVertices()
  {
    return $this->vertices;
  }
}

class GoogleCloudVisionV1p4beta1Celebrity extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;

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
}

class GoogleCloudVisionV1p4beta1ColorInfo extends \Google\Model
{
  /** @var Color */
  public $color;
  /** @var float */
  public $pixelFraction;
  /** @var float */
  public $score;
  protected $colorType = Color::class;
  protected $colorDataType = '';
  /** @param Color */
  public function setColor(Color $color)
  {
    $this->color = $color;
  }
  /** @return Color */
  public function getColor()
  {
    return $this->color;
  }
  /** @param float */
  public function setPixelFraction($pixelFraction)
  {
    $this->pixelFraction = $pixelFraction;
  }
  /** @return float */
  public function getPixelFraction()
  {
    return $this->pixelFraction;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p4beta1CropHint extends \Google\Model
{
  /** @var GoogleCloudVisionV1p4beta1BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $confidence;
  /** @var float */
  public $importanceFraction;
  protected $boundingPolyType = GoogleCloudVisionV1p4beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  /** @param GoogleCloudVisionV1p4beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p4beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p4beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param float */
  public function setImportanceFraction($importanceFraction)
  {
    $this->importanceFraction = $importanceFraction;
  }
  /** @return float */
  public function getImportanceFraction()
  {
    return $this->importanceFraction;
  }
}

class GoogleCloudVisionV1p4beta1CropHintsAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1CropHint[] */
  public $cropHints;
  protected $collection_key = 'cropHints';
  protected $cropHintsType = GoogleCloudVisionV1p4beta1CropHint::class;
  protected $cropHintsDataType = 'array';
  /** @param GoogleCloudVisionV1p4beta1CropHint[] */
  public function setCropHints($cropHints)
  {
    $this->cropHints = $cropHints;
  }
  /** @return GoogleCloudVisionV1p4beta1CropHint[] */
  public function getCropHints()
  {
    return $this->cropHints;
  }
}

class GoogleCloudVisionV1p4beta1DominantColorsAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1ColorInfo[] */
  public $colors;
  protected $collection_key = 'colors';
  protected $colorsType = GoogleCloudVisionV1p4beta1ColorInfo::class;
  protected $colorsDataType = 'array';
  /** @param GoogleCloudVisionV1p4beta1ColorInfo[] */
  public function setColors($colors)
  {
    $this->colors = $colors;
  }
  /** @return GoogleCloudVisionV1p4beta1ColorInfo[] */
  public function getColors()
  {
    return $this->colors;
  }
}

class GoogleCloudVisionV1p4beta1EntityAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $confidence;
  /** @var string */
  public $description;
  /** @var string */
  public $locale;
  /** @var GoogleCloudVisionV1p4beta1LocationInfo[] */
  public $locations;
  /** @var string */
  public $mid;
  /** @var GoogleCloudVisionV1p4beta1Property[] */
  public $properties;
  /** @var float */
  public $score;
  /** @var float */
  public $topicality;
  protected $collection_key = 'properties';
  protected $boundingPolyType = GoogleCloudVisionV1p4beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $locationsType = GoogleCloudVisionV1p4beta1LocationInfo::class;
  protected $locationsDataType = 'array';
  protected $propertiesType = GoogleCloudVisionV1p4beta1Property::class;
  protected $propertiesDataType = 'array';
  /** @param GoogleCloudVisionV1p4beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p4beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p4beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /** @return string */
  public function getLocale()
  {
    return $this->locale;
  }
  /** @param GoogleCloudVisionV1p4beta1LocationInfo[] */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /** @return GoogleCloudVisionV1p4beta1LocationInfo[] */
  public function getLocations()
  {
    return $this->locations;
  }
  /** @param string */
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /** @return string */
  public function getMid()
  {
    return $this->mid;
  }
  /** @param GoogleCloudVisionV1p4beta1Property[] */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /** @return GoogleCloudVisionV1p4beta1Property[] */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
  /** @param float */
  public function setTopicality($topicality)
  {
    $this->topicality = $topicality;
  }
  /** @return float */
  public function getTopicality()
  {
    return $this->topicality;
  }
}

class GoogleCloudVisionV1p4beta1FaceAnnotation extends \Google\Collection
{
  /** @var string */
  public $angerLikelihood;
  /** @var string */
  public $blurredLikelihood;
  /** @var GoogleCloudVisionV1p4beta1BoundingPoly */
  public $boundingPoly;
  /** @var float */
  public $detectionConfidence;
  /** @var GoogleCloudVisionV1p4beta1BoundingPoly */
  public $fdBoundingPoly;
  /** @var string */
  public $headwearLikelihood;
  /** @var string */
  public $joyLikelihood;
  /** @var float */
  public $landmarkingConfidence;
  /** @var GoogleCloudVisionV1p4beta1FaceAnnotationLandmark[] */
  public $landmarks;
  /** @var float */
  public $panAngle;
  /** @var GoogleCloudVisionV1p4beta1FaceRecognitionResult[] */
  public $recognitionResult;
  /** @var float */
  public $rollAngle;
  /** @var string */
  public $sorrowLikelihood;
  /** @var string */
  public $surpriseLikelihood;
  /** @var float */
  public $tiltAngle;
  /** @var string */
  public $underExposedLikelihood;
  protected $collection_key = 'recognitionResult';
  protected $boundingPolyType = GoogleCloudVisionV1p4beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $fdBoundingPolyType = GoogleCloudVisionV1p4beta1BoundingPoly::class;
  protected $fdBoundingPolyDataType = '';
  protected $landmarksType = GoogleCloudVisionV1p4beta1FaceAnnotationLandmark::class;
  protected $landmarksDataType = 'array';
  protected $recognitionResultType = GoogleCloudVisionV1p4beta1FaceRecognitionResult::class;
  protected $recognitionResultDataType = 'array';
  /** @param string */
  public function setAngerLikelihood($angerLikelihood)
  {
    $this->angerLikelihood = $angerLikelihood;
  }
  /** @return string */
  public function getAngerLikelihood()
  {
    return $this->angerLikelihood;
  }
  /** @param string */
  public function setBlurredLikelihood($blurredLikelihood)
  {
    $this->blurredLikelihood = $blurredLikelihood;
  }
  /** @return string */
  public function getBlurredLikelihood()
  {
    return $this->blurredLikelihood;
  }
  /** @param GoogleCloudVisionV1p4beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p4beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p4beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param float */
  public function setDetectionConfidence($detectionConfidence)
  {
    $this->detectionConfidence = $detectionConfidence;
  }
  /** @return float */
  public function getDetectionConfidence()
  {
    return $this->detectionConfidence;
  }
  /** @param GoogleCloudVisionV1p4beta1BoundingPoly */
  public function setFdBoundingPoly(GoogleCloudVisionV1p4beta1BoundingPoly $fdBoundingPoly)
  {
    $this->fdBoundingPoly = $fdBoundingPoly;
  }
  /** @return GoogleCloudVisionV1p4beta1BoundingPoly */
  public function getFdBoundingPoly()
  {
    return $this->fdBoundingPoly;
  }
  /** @param string */
  public function setHeadwearLikelihood($headwearLikelihood)
  {
    $this->headwearLikelihood = $headwearLikelihood;
  }
  /** @return string */
  public function getHeadwearLikelihood()
  {
    return $this->headwearLikelihood;
  }
  /** @param string */
  public function setJoyLikelihood($joyLikelihood)
  {
    $this->joyLikelihood = $joyLikelihood;
  }
  /** @return string */
  public function getJoyLikelihood()
  {
    return $this->joyLikelihood;
  }
  /** @param float */
  public function setLandmarkingConfidence($landmarkingConfidence)
  {
    $this->landmarkingConfidence = $landmarkingConfidence;
  }
  /** @return float */
  public function getLandmarkingConfidence()
  {
    return $this->landmarkingConfidence;
  }
  /** @param GoogleCloudVisionV1p4beta1FaceAnnotationLandmark[] */
  public function setLandmarks($landmarks)
  {
    $this->landmarks = $landmarks;
  }
  /** @return GoogleCloudVisionV1p4beta1FaceAnnotationLandmark[] */
  public function getLandmarks()
  {
    return $this->landmarks;
  }
  /** @param float */
  public function setPanAngle($panAngle)
  {
    $this->panAngle = $panAngle;
  }
  /** @return float */
  public function getPanAngle()
  {
    return $this->panAngle;
  }
  /** @param GoogleCloudVisionV1p4beta1FaceRecognitionResult[] */
  public function setRecognitionResult($recognitionResult)
  {
    $this->recognitionResult = $recognitionResult;
  }
  /** @return GoogleCloudVisionV1p4beta1FaceRecognitionResult[] */
  public function getRecognitionResult()
  {
    return $this->recognitionResult;
  }
  /** @param float */
  public function setRollAngle($rollAngle)
  {
    $this->rollAngle = $rollAngle;
  }
  /** @return float */
  public function getRollAngle()
  {
    return $this->rollAngle;
  }
  /** @param string */
  public function setSorrowLikelihood($sorrowLikelihood)
  {
    $this->sorrowLikelihood = $sorrowLikelihood;
  }
  /** @return string */
  public function getSorrowLikelihood()
  {
    return $this->sorrowLikelihood;
  }
  /** @param string */
  public function setSurpriseLikelihood($surpriseLikelihood)
  {
    $this->surpriseLikelihood = $surpriseLikelihood;
  }
  /** @return string */
  public function getSurpriseLikelihood()
  {
    return $this->surpriseLikelihood;
  }
  /** @param float */
  public function setTiltAngle($tiltAngle)
  {
    $this->tiltAngle = $tiltAngle;
  }
  /** @return float */
  public function getTiltAngle()
  {
    return $this->tiltAngle;
  }
  /** @param string */
  public function setUnderExposedLikelihood($underExposedLikelihood)
  {
    $this->underExposedLikelihood = $underExposedLikelihood;
  }
  /** @return string */
  public function getUnderExposedLikelihood()
  {
    return $this->underExposedLikelihood;
  }
}

class GoogleCloudVisionV1p4beta1FaceAnnotationLandmark extends \Google\Model
{
  /** @var GoogleCloudVisionV1p4beta1Position */
  public $position;
  /** @var string */
  public $type;
  protected $positionType = GoogleCloudVisionV1p4beta1Position::class;
  protected $positionDataType = '';
  /** @param GoogleCloudVisionV1p4beta1Position */
  public function setPosition(GoogleCloudVisionV1p4beta1Position $position)
  {
    $this->position = $position;
  }
  /** @return GoogleCloudVisionV1p4beta1Position */
  public function getPosition()
  {
    return $this->position;
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

class GoogleCloudVisionV1p4beta1FaceRecognitionResult extends \Google\Model
{
  /** @var GoogleCloudVisionV1p4beta1Celebrity */
  public $celebrity;
  /** @var float */
  public $confidence;
  protected $celebrityType = GoogleCloudVisionV1p4beta1Celebrity::class;
  protected $celebrityDataType = '';
  /** @param GoogleCloudVisionV1p4beta1Celebrity */
  public function setCelebrity(GoogleCloudVisionV1p4beta1Celebrity $celebrity)
  {
    $this->celebrity = $celebrity;
  }
  /** @return GoogleCloudVisionV1p4beta1Celebrity */
  public function getCelebrity()
  {
    return $this->celebrity;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
}

class GoogleCloudVisionV1p4beta1GcsDestination extends \Google\Model
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

class GoogleCloudVisionV1p4beta1GcsSource extends \Google\Model
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

class GoogleCloudVisionV1p4beta1ImageAnnotationContext extends \Google\Model
{
  /** @var int */
  public $pageNumber;
  /** @var string */
  public $uri;

  /** @param int */
  public function setPageNumber($pageNumber)
  {
    $this->pageNumber = $pageNumber;
  }
  /** @return int */
  public function getPageNumber()
  {
    return $this->pageNumber;
  }
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

class GoogleCloudVisionV1p4beta1ImageProperties extends \Google\Model
{
  /** @var GoogleCloudVisionV1p4beta1DominantColorsAnnotation */
  public $dominantColors;
  protected $dominantColorsType = GoogleCloudVisionV1p4beta1DominantColorsAnnotation::class;
  protected $dominantColorsDataType = '';
  /** @param GoogleCloudVisionV1p4beta1DominantColorsAnnotation */
  public function setDominantColors(GoogleCloudVisionV1p4beta1DominantColorsAnnotation $dominantColors)
  {
    $this->dominantColors = $dominantColors;
  }
  /** @return GoogleCloudVisionV1p4beta1DominantColorsAnnotation */
  public function getDominantColors()
  {
    return $this->dominantColors;
  }
}

class GoogleCloudVisionV1p4beta1ImportProductSetsResponse extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1ReferenceImage[] */
  public $referenceImages;
  /** @var Status[] */
  public $statuses;
  protected $collection_key = 'statuses';
  protected $referenceImagesType = GoogleCloudVisionV1p4beta1ReferenceImage::class;
  protected $referenceImagesDataType = 'array';
  protected $statusesType = Status::class;
  protected $statusesDataType = 'array';
  /** @param GoogleCloudVisionV1p4beta1ReferenceImage[] */
  public function setReferenceImages($referenceImages)
  {
    $this->referenceImages = $referenceImages;
  }
  /** @return GoogleCloudVisionV1p4beta1ReferenceImage[] */
  public function getReferenceImages()
  {
    return $this->referenceImages;
  }
  /** @param Status[] */
  public function setStatuses($statuses)
  {
    $this->statuses = $statuses;
  }
  /** @return Status[] */
  public function getStatuses()
  {
    return $this->statuses;
  }
}

class GoogleCloudVisionV1p4beta1InputConfig extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var GoogleCloudVisionV1p4beta1GcsSource */
  public $gcsSource;
  /** @var string */
  public $mimeType;
  protected $gcsSourceType = GoogleCloudVisionV1p4beta1GcsSource::class;
  protected $gcsSourceDataType = '';
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
  /** @param GoogleCloudVisionV1p4beta1GcsSource */
  public function setGcsSource(GoogleCloudVisionV1p4beta1GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return GoogleCloudVisionV1p4beta1GcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
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
}

class GoogleCloudVisionV1p4beta1LocalizedObjectAnnotation extends \Google\Model
{
  /** @var GoogleCloudVisionV1p4beta1BoundingPoly */
  public $boundingPoly;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $mid;
  /** @var string */
  public $name;
  /** @var float */
  public $score;
  protected $boundingPolyType = GoogleCloudVisionV1p4beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  /** @param GoogleCloudVisionV1p4beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p4beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p4beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
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
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /** @return string */
  public function getMid()
  {
    return $this->mid;
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
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p4beta1LocationInfo extends \Google\Model
{
  /** @var LatLng */
  public $latLng;
  protected $latLngType = LatLng::class;
  protected $latLngDataType = '';
  /** @param LatLng */
  public function setLatLng(LatLng $latLng)
  {
    $this->latLng = $latLng;
  }
  /** @return LatLng */
  public function getLatLng()
  {
    return $this->latLng;
  }
}

class GoogleCloudVisionV1p4beta1NormalizedVertex extends \Google\Model
{
  /** @var float */
  public $x;
  /** @var float */
  public $y;

  /** @param float */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return float */
  public function getX()
  {
    return $this->x;
  }
  /** @param float */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return float */
  public function getY()
  {
    return $this->y;
  }
}

class GoogleCloudVisionV1p4beta1OperationMetadata extends \Google\Model
{
  /** @var string */
  public $createTime;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;

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
}

class GoogleCloudVisionV1p4beta1OutputConfig extends \Google\Model
{
  /** @var int */
  public $batchSize;
  /** @var GoogleCloudVisionV1p4beta1GcsDestination */
  public $gcsDestination;
  protected $gcsDestinationType = GoogleCloudVisionV1p4beta1GcsDestination::class;
  protected $gcsDestinationDataType = '';
  /** @param int */
  public function setBatchSize($batchSize)
  {
    $this->batchSize = $batchSize;
  }
  /** @return int */
  public function getBatchSize()
  {
    return $this->batchSize;
  }
  /** @param GoogleCloudVisionV1p4beta1GcsDestination */
  public function setGcsDestination(GoogleCloudVisionV1p4beta1GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /** @return GoogleCloudVisionV1p4beta1GcsDestination */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
}

class GoogleCloudVisionV1p4beta1Page extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1Block[] */
  public $blocks;
  /** @var float */
  public $confidence;
  /** @var int */
  public $height;
  /** @var GoogleCloudVisionV1p4beta1TextAnnotationTextProperty */
  public $property;
  /** @var int */
  public $width;
  protected $collection_key = 'blocks';
  protected $blocksType = GoogleCloudVisionV1p4beta1Block::class;
  protected $blocksDataType = 'array';
  protected $propertyType = GoogleCloudVisionV1p4beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  /** @param GoogleCloudVisionV1p4beta1Block[] */
  public function setBlocks($blocks)
  {
    $this->blocks = $blocks;
  }
  /** @return GoogleCloudVisionV1p4beta1Block[] */
  public function getBlocks()
  {
    return $this->blocks;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param int */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return int */
  public function getHeight()
  {
    return $this->height;
  }
  /** @param GoogleCloudVisionV1p4beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p4beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p4beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param int */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return int */
  public function getWidth()
  {
    return $this->width;
  }
}

class GoogleCloudVisionV1p4beta1Paragraph extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVisionV1p4beta1TextAnnotationTextProperty */
  public $property;
  /** @var GoogleCloudVisionV1p4beta1Word[] */
  public $words;
  protected $collection_key = 'words';
  protected $boundingBoxType = GoogleCloudVisionV1p4beta1BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $propertyType = GoogleCloudVisionV1p4beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  protected $wordsType = GoogleCloudVisionV1p4beta1Word::class;
  protected $wordsDataType = 'array';
  /** @param GoogleCloudVisionV1p4beta1BoundingPoly */
  public function setBoundingBox(GoogleCloudVisionV1p4beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return GoogleCloudVisionV1p4beta1BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param GoogleCloudVisionV1p4beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p4beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p4beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param GoogleCloudVisionV1p4beta1Word[] */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /** @return GoogleCloudVisionV1p4beta1Word[] */
  public function getWords()
  {
    return $this->words;
  }
}

class GoogleCloudVisionV1p4beta1Position extends \Google\Model
{
  /** @var float */
  public $x;
  /** @var float */
  public $y;
  /** @var float */
  public $z;

  /** @param float */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return float */
  public function getX()
  {
    return $this->x;
  }
  /** @param float */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return float */
  public function getY()
  {
    return $this->y;
  }
  /** @param float */
  public function setZ($z)
  {
    $this->z = $z;
  }
  /** @return float */
  public function getZ()
  {
    return $this->z;
  }
}

class GoogleCloudVisionV1p4beta1Product extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $productCategory;
  /** @var GoogleCloudVisionV1p4beta1ProductKeyValue[] */
  public $productLabels;
  protected $collection_key = 'productLabels';
  protected $productLabelsType = GoogleCloudVisionV1p4beta1ProductKeyValue::class;
  protected $productLabelsDataType = 'array';
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
  /** @param string */
  public function setProductCategory($productCategory)
  {
    $this->productCategory = $productCategory;
  }
  /** @return string */
  public function getProductCategory()
  {
    return $this->productCategory;
  }
  /** @param GoogleCloudVisionV1p4beta1ProductKeyValue[] */
  public function setProductLabels($productLabels)
  {
    $this->productLabels = $productLabels;
  }
  /** @return GoogleCloudVisionV1p4beta1ProductKeyValue[] */
  public function getProductLabels()
  {
    return $this->productLabels;
  }
}

class GoogleCloudVisionV1p4beta1ProductKeyValue extends \Google\Model
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

class GoogleCloudVisionV1p4beta1ProductSearchResults extends \Google\Collection
{
  /** @var string */
  public $indexTime;
  /** @var GoogleCloudVisionV1p4beta1ProductSearchResultsGroupedResult[] */
  public $productGroupedResults;
  /** @var GoogleCloudVisionV1p4beta1ProductSearchResultsResult[] */
  public $results;
  protected $collection_key = 'results';
  protected $productGroupedResultsType = GoogleCloudVisionV1p4beta1ProductSearchResultsGroupedResult::class;
  protected $productGroupedResultsDataType = 'array';
  protected $resultsType = GoogleCloudVisionV1p4beta1ProductSearchResultsResult::class;
  protected $resultsDataType = 'array';
  /** @param string */
  public function setIndexTime($indexTime)
  {
    $this->indexTime = $indexTime;
  }
  /** @return string */
  public function getIndexTime()
  {
    return $this->indexTime;
  }
  /** @param GoogleCloudVisionV1p4beta1ProductSearchResultsGroupedResult[] */
  public function setProductGroupedResults($productGroupedResults)
  {
    $this->productGroupedResults = $productGroupedResults;
  }
  /** @return GoogleCloudVisionV1p4beta1ProductSearchResultsGroupedResult[] */
  public function getProductGroupedResults()
  {
    return $this->productGroupedResults;
  }
  /** @param GoogleCloudVisionV1p4beta1ProductSearchResultsResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GoogleCloudVisionV1p4beta1ProductSearchResultsResult[] */
  public function getResults()
  {
    return $this->results;
  }
}

class GoogleCloudVisionV1p4beta1ProductSearchResultsGroupedResult extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1BoundingPoly */
  public $boundingPoly;
  /** @var GoogleCloudVisionV1p4beta1ProductSearchResultsObjectAnnotation[] */
  public $objectAnnotations;
  /** @var GoogleCloudVisionV1p4beta1ProductSearchResultsResult[] */
  public $results;
  protected $collection_key = 'results';
  protected $boundingPolyType = GoogleCloudVisionV1p4beta1BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $objectAnnotationsType = GoogleCloudVisionV1p4beta1ProductSearchResultsObjectAnnotation::class;
  protected $objectAnnotationsDataType = 'array';
  protected $resultsType = GoogleCloudVisionV1p4beta1ProductSearchResultsResult::class;
  protected $resultsDataType = 'array';
  /** @param GoogleCloudVisionV1p4beta1BoundingPoly */
  public function setBoundingPoly(GoogleCloudVisionV1p4beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return GoogleCloudVisionV1p4beta1BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param GoogleCloudVisionV1p4beta1ProductSearchResultsObjectAnnotation[] */
  public function setObjectAnnotations($objectAnnotations)
  {
    $this->objectAnnotations = $objectAnnotations;
  }
  /** @return GoogleCloudVisionV1p4beta1ProductSearchResultsObjectAnnotation[] */
  public function getObjectAnnotations()
  {
    return $this->objectAnnotations;
  }
  /** @param GoogleCloudVisionV1p4beta1ProductSearchResultsResult[] */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /** @return GoogleCloudVisionV1p4beta1ProductSearchResultsResult[] */
  public function getResults()
  {
    return $this->results;
  }
}

class GoogleCloudVisionV1p4beta1ProductSearchResultsObjectAnnotation extends \Google\Model
{
  /** @var string */
  public $languageCode;
  /** @var string */
  public $mid;
  /** @var string */
  public $name;
  /** @var float */
  public $score;

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
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /** @return string */
  public function getMid()
  {
    return $this->mid;
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
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p4beta1ProductSearchResultsResult extends \Google\Model
{
  /** @var string */
  public $image;
  /** @var GoogleCloudVisionV1p4beta1Product */
  public $product;
  /** @var float */
  public $score;
  protected $productType = GoogleCloudVisionV1p4beta1Product::class;
  protected $productDataType = '';
  /** @param string */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /** @return string */
  public function getImage()
  {
    return $this->image;
  }
  /** @param GoogleCloudVisionV1p4beta1Product */
  public function setProduct(GoogleCloudVisionV1p4beta1Product $product)
  {
    $this->product = $product;
  }
  /** @return GoogleCloudVisionV1p4beta1Product */
  public function getProduct()
  {
    return $this->product;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p4beta1Property extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $uint64Value;
  /** @var string */
  public $value;

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
  public function setUint64Value($uint64Value)
  {
    $this->uint64Value = $uint64Value;
  }
  /** @return string */
  public function getUint64Value()
  {
    return $this->uint64Value;
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

class GoogleCloudVisionV1p4beta1ReferenceImage extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1BoundingPoly[] */
  public $boundingPolys;
  /** @var string */
  public $name;
  /** @var string */
  public $uri;
  protected $collection_key = 'boundingPolys';
  protected $boundingPolysType = GoogleCloudVisionV1p4beta1BoundingPoly::class;
  protected $boundingPolysDataType = 'array';
  /** @param GoogleCloudVisionV1p4beta1BoundingPoly[] */
  public function setBoundingPolys($boundingPolys)
  {
    $this->boundingPolys = $boundingPolys;
  }
  /** @return GoogleCloudVisionV1p4beta1BoundingPoly[] */
  public function getBoundingPolys()
  {
    return $this->boundingPolys;
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

class GoogleCloudVisionV1p4beta1SafeSearchAnnotation extends \Google\Model
{
  /** @var string */
  public $adult;
  /** @var string */
  public $medical;
  /** @var string */
  public $racy;
  /** @var string */
  public $spoof;
  /** @var string */
  public $violence;

  /** @param string */
  public function setAdult($adult)
  {
    $this->adult = $adult;
  }
  /** @return string */
  public function getAdult()
  {
    return $this->adult;
  }
  /** @param string */
  public function setMedical($medical)
  {
    $this->medical = $medical;
  }
  /** @return string */
  public function getMedical()
  {
    return $this->medical;
  }
  /** @param string */
  public function setRacy($racy)
  {
    $this->racy = $racy;
  }
  /** @return string */
  public function getRacy()
  {
    return $this->racy;
  }
  /** @param string */
  public function setSpoof($spoof)
  {
    $this->spoof = $spoof;
  }
  /** @return string */
  public function getSpoof()
  {
    return $this->spoof;
  }
  /** @param string */
  public function setViolence($violence)
  {
    $this->violence = $violence;
  }
  /** @return string */
  public function getViolence()
  {
    return $this->violence;
  }
}

class GoogleCloudVisionV1p4beta1Symbol extends \Google\Model
{
  /** @var GoogleCloudVisionV1p4beta1BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVisionV1p4beta1TextAnnotationTextProperty */
  public $property;
  /** @var string */
  public $text;
  protected $boundingBoxType = GoogleCloudVisionV1p4beta1BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $propertyType = GoogleCloudVisionV1p4beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  /** @param GoogleCloudVisionV1p4beta1BoundingPoly */
  public function setBoundingBox(GoogleCloudVisionV1p4beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return GoogleCloudVisionV1p4beta1BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param GoogleCloudVisionV1p4beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p4beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p4beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
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

class GoogleCloudVisionV1p4beta1TextAnnotation extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1Page[] */
  public $pages;
  /** @var string */
  public $text;
  protected $collection_key = 'pages';
  protected $pagesType = GoogleCloudVisionV1p4beta1Page::class;
  protected $pagesDataType = 'array';
  /** @param GoogleCloudVisionV1p4beta1Page[] */
  public function setPages($pages)
  {
    $this->pages = $pages;
  }
  /** @return GoogleCloudVisionV1p4beta1Page[] */
  public function getPages()
  {
    return $this->pages;
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

class GoogleCloudVisionV1p4beta1TextAnnotationDetectedBreak extends \Google\Model
{
  /** @var bool */
  public $isPrefix;
  /** @var string */
  public $type;

  /** @param bool */
  public function setIsPrefix($isPrefix)
  {
    $this->isPrefix = $isPrefix;
  }
  /** @return bool */
  public function getIsPrefix()
  {
    return $this->isPrefix;
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

class GoogleCloudVisionV1p4beta1TextAnnotationDetectedLanguage extends \Google\Model
{
  /** @var float */
  public $confidence;
  /** @var string */
  public $languageCode;

  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
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
}

class GoogleCloudVisionV1p4beta1TextAnnotationTextProperty extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1TextAnnotationDetectedBreak */
  public $detectedBreak;
  /** @var GoogleCloudVisionV1p4beta1TextAnnotationDetectedLanguage[] */
  public $detectedLanguages;
  protected $collection_key = 'detectedLanguages';
  protected $detectedBreakType = GoogleCloudVisionV1p4beta1TextAnnotationDetectedBreak::class;
  protected $detectedBreakDataType = '';
  protected $detectedLanguagesType = GoogleCloudVisionV1p4beta1TextAnnotationDetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  /** @param GoogleCloudVisionV1p4beta1TextAnnotationDetectedBreak */
  public function setDetectedBreak(GoogleCloudVisionV1p4beta1TextAnnotationDetectedBreak $detectedBreak)
  {
    $this->detectedBreak = $detectedBreak;
  }
  /** @return GoogleCloudVisionV1p4beta1TextAnnotationDetectedBreak */
  public function getDetectedBreak()
  {
    return $this->detectedBreak;
  }
  /** @param GoogleCloudVisionV1p4beta1TextAnnotationDetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return GoogleCloudVisionV1p4beta1TextAnnotationDetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
}

class GoogleCloudVisionV1p4beta1Vertex extends \Google\Model
{
  /** @var int */
  public $x;
  /** @var int */
  public $y;

  /** @param int */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return int */
  public function getX()
  {
    return $this->x;
  }
  /** @param int */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return int */
  public function getY()
  {
    return $this->y;
  }
}

class GoogleCloudVisionV1p4beta1WebDetection extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1WebDetectionWebLabel[] */
  public $bestGuessLabels;
  /** @var GoogleCloudVisionV1p4beta1WebDetectionWebImage[] */
  public $fullMatchingImages;
  /** @var GoogleCloudVisionV1p4beta1WebDetectionWebPage[] */
  public $pagesWithMatchingImages;
  /** @var GoogleCloudVisionV1p4beta1WebDetectionWebImage[] */
  public $partialMatchingImages;
  /** @var GoogleCloudVisionV1p4beta1WebDetectionWebImage[] */
  public $visuallySimilarImages;
  /** @var GoogleCloudVisionV1p4beta1WebDetectionWebEntity[] */
  public $webEntities;
  protected $collection_key = 'webEntities';
  protected $bestGuessLabelsType = GoogleCloudVisionV1p4beta1WebDetectionWebLabel::class;
  protected $bestGuessLabelsDataType = 'array';
  protected $fullMatchingImagesType = GoogleCloudVisionV1p4beta1WebDetectionWebImage::class;
  protected $fullMatchingImagesDataType = 'array';
  protected $pagesWithMatchingImagesType = GoogleCloudVisionV1p4beta1WebDetectionWebPage::class;
  protected $pagesWithMatchingImagesDataType = 'array';
  protected $partialMatchingImagesType = GoogleCloudVisionV1p4beta1WebDetectionWebImage::class;
  protected $partialMatchingImagesDataType = 'array';
  protected $visuallySimilarImagesType = GoogleCloudVisionV1p4beta1WebDetectionWebImage::class;
  protected $visuallySimilarImagesDataType = 'array';
  protected $webEntitiesType = GoogleCloudVisionV1p4beta1WebDetectionWebEntity::class;
  protected $webEntitiesDataType = 'array';
  /** @param GoogleCloudVisionV1p4beta1WebDetectionWebLabel[] */
  public function setBestGuessLabels($bestGuessLabels)
  {
    $this->bestGuessLabels = $bestGuessLabels;
  }
  /** @return GoogleCloudVisionV1p4beta1WebDetectionWebLabel[] */
  public function getBestGuessLabels()
  {
    return $this->bestGuessLabels;
  }
  /** @param GoogleCloudVisionV1p4beta1WebDetectionWebImage[] */
  public function setFullMatchingImages($fullMatchingImages)
  {
    $this->fullMatchingImages = $fullMatchingImages;
  }
  /** @return GoogleCloudVisionV1p4beta1WebDetectionWebImage[] */
  public function getFullMatchingImages()
  {
    return $this->fullMatchingImages;
  }
  /** @param GoogleCloudVisionV1p4beta1WebDetectionWebPage[] */
  public function setPagesWithMatchingImages($pagesWithMatchingImages)
  {
    $this->pagesWithMatchingImages = $pagesWithMatchingImages;
  }
  /** @return GoogleCloudVisionV1p4beta1WebDetectionWebPage[] */
  public function getPagesWithMatchingImages()
  {
    return $this->pagesWithMatchingImages;
  }
  /** @param GoogleCloudVisionV1p4beta1WebDetectionWebImage[] */
  public function setPartialMatchingImages($partialMatchingImages)
  {
    $this->partialMatchingImages = $partialMatchingImages;
  }
  /** @return GoogleCloudVisionV1p4beta1WebDetectionWebImage[] */
  public function getPartialMatchingImages()
  {
    return $this->partialMatchingImages;
  }
  /** @param GoogleCloudVisionV1p4beta1WebDetectionWebImage[] */
  public function setVisuallySimilarImages($visuallySimilarImages)
  {
    $this->visuallySimilarImages = $visuallySimilarImages;
  }
  /** @return GoogleCloudVisionV1p4beta1WebDetectionWebImage[] */
  public function getVisuallySimilarImages()
  {
    return $this->visuallySimilarImages;
  }
  /** @param GoogleCloudVisionV1p4beta1WebDetectionWebEntity[] */
  public function setWebEntities($webEntities)
  {
    $this->webEntities = $webEntities;
  }
  /** @return GoogleCloudVisionV1p4beta1WebDetectionWebEntity[] */
  public function getWebEntities()
  {
    return $this->webEntities;
  }
}

class GoogleCloudVisionV1p4beta1WebDetectionWebEntity extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $entityId;
  /** @var float */
  public $score;

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
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class GoogleCloudVisionV1p4beta1WebDetectionWebImage extends \Google\Model
{
  /** @var float */
  public $score;
  /** @var string */
  public $url;

  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
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

class GoogleCloudVisionV1p4beta1WebDetectionWebLabel extends \Google\Model
{
  /** @var string */
  public $label;
  /** @var string */
  public $languageCode;

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
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class GoogleCloudVisionV1p4beta1WebDetectionWebPage extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1WebDetectionWebImage[] */
  public $fullMatchingImages;
  /** @var string */
  public $pageTitle;
  /** @var GoogleCloudVisionV1p4beta1WebDetectionWebImage[] */
  public $partialMatchingImages;
  /** @var float */
  public $score;
  /** @var string */
  public $url;
  protected $collection_key = 'partialMatchingImages';
  protected $fullMatchingImagesType = GoogleCloudVisionV1p4beta1WebDetectionWebImage::class;
  protected $fullMatchingImagesDataType = 'array';
  protected $partialMatchingImagesType = GoogleCloudVisionV1p4beta1WebDetectionWebImage::class;
  protected $partialMatchingImagesDataType = 'array';
  /** @param GoogleCloudVisionV1p4beta1WebDetectionWebImage[] */
  public function setFullMatchingImages($fullMatchingImages)
  {
    $this->fullMatchingImages = $fullMatchingImages;
  }
  /** @return GoogleCloudVisionV1p4beta1WebDetectionWebImage[] */
  public function getFullMatchingImages()
  {
    return $this->fullMatchingImages;
  }
  /** @param string */
  public function setPageTitle($pageTitle)
  {
    $this->pageTitle = $pageTitle;
  }
  /** @return string */
  public function getPageTitle()
  {
    return $this->pageTitle;
  }
  /** @param GoogleCloudVisionV1p4beta1WebDetectionWebImage[] */
  public function setPartialMatchingImages($partialMatchingImages)
  {
    $this->partialMatchingImages = $partialMatchingImages;
  }
  /** @return GoogleCloudVisionV1p4beta1WebDetectionWebImage[] */
  public function getPartialMatchingImages()
  {
    return $this->partialMatchingImages;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
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

class GoogleCloudVisionV1p4beta1Word extends \Google\Collection
{
  /** @var GoogleCloudVisionV1p4beta1BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var GoogleCloudVisionV1p4beta1TextAnnotationTextProperty */
  public $property;
  /** @var GoogleCloudVisionV1p4beta1Symbol[] */
  public $symbols;
  protected $collection_key = 'symbols';
  protected $boundingBoxType = GoogleCloudVisionV1p4beta1BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $propertyType = GoogleCloudVisionV1p4beta1TextAnnotationTextProperty::class;
  protected $propertyDataType = '';
  protected $symbolsType = GoogleCloudVisionV1p4beta1Symbol::class;
  protected $symbolsDataType = 'array';
  /** @param GoogleCloudVisionV1p4beta1BoundingPoly */
  public function setBoundingBox(GoogleCloudVisionV1p4beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return GoogleCloudVisionV1p4beta1BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param GoogleCloudVisionV1p4beta1TextAnnotationTextProperty */
  public function setProperty(GoogleCloudVisionV1p4beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /** @return GoogleCloudVisionV1p4beta1TextAnnotationTextProperty */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param GoogleCloudVisionV1p4beta1Symbol[] */
  public function setSymbols($symbols)
  {
    $this->symbols = $symbols;
  }
  /** @return GoogleCloudVisionV1p4beta1Symbol[] */
  public function getSymbols()
  {
    return $this->symbols;
  }
}

class GroupedResult extends \Google\Collection
{
  /** @var BoundingPoly */
  public $boundingPoly;
  /** @var ObjectAnnotation[] */
  public $objectAnnotations;
  /** @var Result[] */
  public $results;
  protected $collection_key = 'results';
  protected $boundingPolyType = BoundingPoly::class;
  protected $boundingPolyDataType = '';
  protected $objectAnnotationsType = ObjectAnnotation::class;
  protected $objectAnnotationsDataType = 'array';
  protected $resultsType = Result::class;
  protected $resultsDataType = 'array';
  /** @param BoundingPoly */
  public function setBoundingPoly(BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
  /** @param ObjectAnnotation[] */
  public function setObjectAnnotations($objectAnnotations)
  {
    $this->objectAnnotations = $objectAnnotations;
  }
  /** @return ObjectAnnotation[] */
  public function getObjectAnnotations()
  {
    return $this->objectAnnotations;
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

class Image extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var ImageSource */
  public $source;
  protected $sourceType = ImageSource::class;
  protected $sourceDataType = '';
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
  /** @param ImageSource */
  public function setSource(ImageSource $source)
  {
    $this->source = $source;
  }
  /** @return ImageSource */
  public function getSource()
  {
    return $this->source;
  }
}

class ImageAnnotationContext extends \Google\Model
{
  /** @var int */
  public $pageNumber;
  /** @var string */
  public $uri;

  /** @param int */
  public function setPageNumber($pageNumber)
  {
    $this->pageNumber = $pageNumber;
  }
  /** @return int */
  public function getPageNumber()
  {
    return $this->pageNumber;
  }
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

class ImageContext extends \Google\Collection
{
  /** @var CropHintsParams */
  public $cropHintsParams;
  /** @var string[] */
  public $languageHints;
  /** @var LatLongRect */
  public $latLongRect;
  /** @var ProductSearchParams */
  public $productSearchParams;
  /** @var TextDetectionParams */
  public $textDetectionParams;
  /** @var WebDetectionParams */
  public $webDetectionParams;
  protected $collection_key = 'languageHints';
  protected $cropHintsParamsType = CropHintsParams::class;
  protected $cropHintsParamsDataType = '';
  protected $latLongRectType = LatLongRect::class;
  protected $latLongRectDataType = '';
  protected $productSearchParamsType = ProductSearchParams::class;
  protected $productSearchParamsDataType = '';
  protected $textDetectionParamsType = TextDetectionParams::class;
  protected $textDetectionParamsDataType = '';
  protected $webDetectionParamsType = WebDetectionParams::class;
  protected $webDetectionParamsDataType = '';
  /** @param CropHintsParams */
  public function setCropHintsParams(CropHintsParams $cropHintsParams)
  {
    $this->cropHintsParams = $cropHintsParams;
  }
  /** @return CropHintsParams */
  public function getCropHintsParams()
  {
    return $this->cropHintsParams;
  }
  /** @param string[] */
  public function setLanguageHints($languageHints)
  {
    $this->languageHints = $languageHints;
  }
  /** @return string[] */
  public function getLanguageHints()
  {
    return $this->languageHints;
  }
  /** @param LatLongRect */
  public function setLatLongRect(LatLongRect $latLongRect)
  {
    $this->latLongRect = $latLongRect;
  }
  /** @return LatLongRect */
  public function getLatLongRect()
  {
    return $this->latLongRect;
  }
  /** @param ProductSearchParams */
  public function setProductSearchParams(ProductSearchParams $productSearchParams)
  {
    $this->productSearchParams = $productSearchParams;
  }
  /** @return ProductSearchParams */
  public function getProductSearchParams()
  {
    return $this->productSearchParams;
  }
  /** @param TextDetectionParams */
  public function setTextDetectionParams(TextDetectionParams $textDetectionParams)
  {
    $this->textDetectionParams = $textDetectionParams;
  }
  /** @return TextDetectionParams */
  public function getTextDetectionParams()
  {
    return $this->textDetectionParams;
  }
  /** @param WebDetectionParams */
  public function setWebDetectionParams(WebDetectionParams $webDetectionParams)
  {
    $this->webDetectionParams = $webDetectionParams;
  }
  /** @return WebDetectionParams */
  public function getWebDetectionParams()
  {
    return $this->webDetectionParams;
  }
}

class ImageProperties extends \Google\Model
{
  /** @var DominantColorsAnnotation */
  public $dominantColors;
  protected $dominantColorsType = DominantColorsAnnotation::class;
  protected $dominantColorsDataType = '';
  /** @param DominantColorsAnnotation */
  public function setDominantColors(DominantColorsAnnotation $dominantColors)
  {
    $this->dominantColors = $dominantColors;
  }
  /** @return DominantColorsAnnotation */
  public function getDominantColors()
  {
    return $this->dominantColors;
  }
}

class ImageSource extends \Google\Model
{
  /** @var string */
  public $gcsImageUri;
  /** @var string */
  public $imageUri;

  /** @param string */
  public function setGcsImageUri($gcsImageUri)
  {
    $this->gcsImageUri = $gcsImageUri;
  }
  /** @return string */
  public function getGcsImageUri()
  {
    return $this->gcsImageUri;
  }
  /** @param string */
  public function setImageUri($imageUri)
  {
    $this->imageUri = $imageUri;
  }
  /** @return string */
  public function getImageUri()
  {
    return $this->imageUri;
  }
}

class ImportProductSetsGcsSource extends \Google\Model
{
  /** @var string */
  public $csvFileUri;

  /** @param string */
  public function setCsvFileUri($csvFileUri)
  {
    $this->csvFileUri = $csvFileUri;
  }
  /** @return string */
  public function getCsvFileUri()
  {
    return $this->csvFileUri;
  }
}

class ImportProductSetsInputConfig extends \Google\Model
{
  /** @var ImportProductSetsGcsSource */
  public $gcsSource;
  protected $gcsSourceType = ImportProductSetsGcsSource::class;
  protected $gcsSourceDataType = '';
  /** @param ImportProductSetsGcsSource */
  public function setGcsSource(ImportProductSetsGcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /** @return ImportProductSetsGcsSource */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
}

class ImportProductSetsRequest extends \Google\Model
{
  /** @var ImportProductSetsInputConfig */
  public $inputConfig;
  protected $inputConfigType = ImportProductSetsInputConfig::class;
  protected $inputConfigDataType = '';
  /** @param ImportProductSetsInputConfig */
  public function setInputConfig(ImportProductSetsInputConfig $inputConfig)
  {
    $this->inputConfig = $inputConfig;
  }
  /** @return ImportProductSetsInputConfig */
  public function getInputConfig()
  {
    return $this->inputConfig;
  }
}

class ImportProductSetsResponse extends \Google\Collection
{
  /** @var ReferenceImage[] */
  public $referenceImages;
  /** @var Status[] */
  public $statuses;
  protected $collection_key = 'statuses';
  protected $referenceImagesType = ReferenceImage::class;
  protected $referenceImagesDataType = 'array';
  protected $statusesType = Status::class;
  protected $statusesDataType = 'array';
  /** @param ReferenceImage[] */
  public function setReferenceImages($referenceImages)
  {
    $this->referenceImages = $referenceImages;
  }
  /** @return ReferenceImage[] */
  public function getReferenceImages()
  {
    return $this->referenceImages;
  }
  /** @param Status[] */
  public function setStatuses($statuses)
  {
    $this->statuses = $statuses;
  }
  /** @return Status[] */
  public function getStatuses()
  {
    return $this->statuses;
  }
}

class InputConfig extends \Google\Model
{
  /** @var string */
  public $content;
  /** @var GcsSource */
  public $gcsSource;
  /** @var string */
  public $mimeType;
  protected $gcsSourceType = GcsSource::class;
  protected $gcsSourceDataType = '';
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
}

class KeyValue extends \Google\Model
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

class Landmark extends \Google\Model
{
  /** @var Position */
  public $position;
  /** @var string */
  public $type;
  protected $positionType = Position::class;
  protected $positionDataType = '';
  /** @param Position */
  public function setPosition(Position $position)
  {
    $this->position = $position;
  }
  /** @return Position */
  public function getPosition()
  {
    return $this->position;
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

class LatLng extends \Google\Model
{
  public $latitude;
  public $longitude;

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
}

class LatLongRect extends \Google\Model
{
  /** @var LatLng */
  public $maxLatLng;
  /** @var LatLng */
  public $minLatLng;
  protected $maxLatLngType = LatLng::class;
  protected $maxLatLngDataType = '';
  protected $minLatLngType = LatLng::class;
  protected $minLatLngDataType = '';
  /** @param LatLng */
  public function setMaxLatLng(LatLng $maxLatLng)
  {
    $this->maxLatLng = $maxLatLng;
  }
  /** @return LatLng */
  public function getMaxLatLng()
  {
    return $this->maxLatLng;
  }
  /** @param LatLng */
  public function setMinLatLng(LatLng $minLatLng)
  {
    $this->minLatLng = $minLatLng;
  }
  /** @return LatLng */
  public function getMinLatLng()
  {
    return $this->minLatLng;
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

class ListProductSetsResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var ProductSet[] */
  public $productSets;
  protected $collection_key = 'productSets';
  protected $productSetsType = ProductSet::class;
  protected $productSetsDataType = 'array';
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
  /** @param ProductSet[] */
  public function setProductSets($productSets)
  {
    $this->productSets = $productSets;
  }
  /** @return ProductSet[] */
  public function getProductSets()
  {
    return $this->productSets;
  }
}

class ListProductsInProductSetResponse extends \Google\Collection
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

class ListReferenceImagesResponse extends \Google\Collection
{
  /** @var string */
  public $nextPageToken;
  /** @var int */
  public $pageSize;
  /** @var ReferenceImage[] */
  public $referenceImages;
  protected $collection_key = 'referenceImages';
  protected $referenceImagesType = ReferenceImage::class;
  protected $referenceImagesDataType = 'array';
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
  /** @param ReferenceImage[] */
  public function setReferenceImages($referenceImages)
  {
    $this->referenceImages = $referenceImages;
  }
  /** @return ReferenceImage[] */
  public function getReferenceImages()
  {
    return $this->referenceImages;
  }
}

class LocalizedObjectAnnotation extends \Google\Model
{
  /** @var BoundingPoly */
  public $boundingPoly;
  /** @var string */
  public $languageCode;
  /** @var string */
  public $mid;
  /** @var string */
  public $name;
  /** @var float */
  public $score;
  protected $boundingPolyType = BoundingPoly::class;
  protected $boundingPolyDataType = '';
  /** @param BoundingPoly */
  public function setBoundingPoly(BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
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
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /** @return string */
  public function getMid()
  {
    return $this->mid;
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
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class LocationInfo extends \Google\Model
{
  /** @var LatLng */
  public $latLng;
  protected $latLngType = LatLng::class;
  protected $latLngDataType = '';
  /** @param LatLng */
  public function setLatLng(LatLng $latLng)
  {
    $this->latLng = $latLng;
  }
  /** @return LatLng */
  public function getLatLng()
  {
    return $this->latLng;
  }
}

class NormalizedVertex extends \Google\Model
{
  /** @var float */
  public $x;
  /** @var float */
  public $y;

  /** @param float */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return float */
  public function getX()
  {
    return $this->x;
  }
  /** @param float */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return float */
  public function getY()
  {
    return $this->y;
  }
}

class ObjectAnnotation extends \Google\Model
{
  /** @var string */
  public $languageCode;
  /** @var string */
  public $mid;
  /** @var string */
  public $name;
  /** @var float */
  public $score;

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
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /** @return string */
  public function getMid()
  {
    return $this->mid;
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
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
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
  public $createTime;
  /** @var string */
  public $state;
  /** @var string */
  public $updateTime;

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
}

class OutputConfig extends \Google\Model
{
  /** @var int */
  public $batchSize;
  /** @var GcsDestination */
  public $gcsDestination;
  protected $gcsDestinationType = GcsDestination::class;
  protected $gcsDestinationDataType = '';
  /** @param int */
  public function setBatchSize($batchSize)
  {
    $this->batchSize = $batchSize;
  }
  /** @return int */
  public function getBatchSize()
  {
    return $this->batchSize;
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
}

class Page extends \Google\Collection
{
  /** @var Block[] */
  public $blocks;
  /** @var float */
  public $confidence;
  /** @var int */
  public $height;
  /** @var TextProperty */
  public $property;
  /** @var int */
  public $width;
  protected $collection_key = 'blocks';
  protected $blocksType = Block::class;
  protected $blocksDataType = 'array';
  protected $propertyType = TextProperty::class;
  protected $propertyDataType = '';
  /** @param Block[] */
  public function setBlocks($blocks)
  {
    $this->blocks = $blocks;
  }
  /** @return Block[] */
  public function getBlocks()
  {
    return $this->blocks;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param int */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /** @return int */
  public function getHeight()
  {
    return $this->height;
  }
  /** @param TextProperty */
  public function setProperty(TextProperty $property)
  {
    $this->property = $property;
  }
  /** @return TextProperty */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param int */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /** @return int */
  public function getWidth()
  {
    return $this->width;
  }
}

class Paragraph extends \Google\Collection
{
  /** @var BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var TextProperty */
  public $property;
  /** @var Word[] */
  public $words;
  protected $collection_key = 'words';
  protected $boundingBoxType = BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $propertyType = TextProperty::class;
  protected $propertyDataType = '';
  protected $wordsType = Word::class;
  protected $wordsDataType = 'array';
  /** @param BoundingPoly */
  public function setBoundingBox(BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param TextProperty */
  public function setProperty(TextProperty $property)
  {
    $this->property = $property;
  }
  /** @return TextProperty */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param Word[] */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /** @return Word[] */
  public function getWords()
  {
    return $this->words;
  }
}

class Position extends \Google\Model
{
  /** @var float */
  public $x;
  /** @var float */
  public $y;
  /** @var float */
  public $z;

  /** @param float */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return float */
  public function getX()
  {
    return $this->x;
  }
  /** @param float */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return float */
  public function getY()
  {
    return $this->y;
  }
  /** @param float */
  public function setZ($z)
  {
    $this->z = $z;
  }
  /** @return float */
  public function getZ()
  {
    return $this->z;
  }
}

class Product extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var string */
  public $displayName;
  /** @var string */
  public $name;
  /** @var string */
  public $productCategory;
  /** @var KeyValue[] */
  public $productLabels;
  protected $collection_key = 'productLabels';
  protected $productLabelsType = KeyValue::class;
  protected $productLabelsDataType = 'array';
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
  /** @param string */
  public function setProductCategory($productCategory)
  {
    $this->productCategory = $productCategory;
  }
  /** @return string */
  public function getProductCategory()
  {
    return $this->productCategory;
  }
  /** @param KeyValue[] */
  public function setProductLabels($productLabels)
  {
    $this->productLabels = $productLabels;
  }
  /** @return KeyValue[] */
  public function getProductLabels()
  {
    return $this->productLabels;
  }
}

class ProductSearchParams extends \Google\Collection
{
  /** @var BoundingPoly */
  public $boundingPoly;
  /** @var string */
  public $filter;
  /** @var string[] */
  public $productCategories;
  /** @var string */
  public $productSet;
  protected $collection_key = 'productCategories';
  protected $boundingPolyType = BoundingPoly::class;
  protected $boundingPolyDataType = '';
  /** @param BoundingPoly */
  public function setBoundingPoly(BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /** @return BoundingPoly */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }
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
  /** @param string[] */
  public function setProductCategories($productCategories)
  {
    $this->productCategories = $productCategories;
  }
  /** @return string[] */
  public function getProductCategories()
  {
    return $this->productCategories;
  }
  /** @param string */
  public function setProductSet($productSet)
  {
    $this->productSet = $productSet;
  }
  /** @return string */
  public function getProductSet()
  {
    return $this->productSet;
  }
}

class ProductSearchResults extends \Google\Collection
{
  /** @var string */
  public $indexTime;
  /** @var GroupedResult[] */
  public $productGroupedResults;
  /** @var Result[] */
  public $results;
  protected $collection_key = 'results';
  protected $productGroupedResultsType = GroupedResult::class;
  protected $productGroupedResultsDataType = 'array';
  protected $resultsType = Result::class;
  protected $resultsDataType = 'array';
  /** @param string */
  public function setIndexTime($indexTime)
  {
    $this->indexTime = $indexTime;
  }
  /** @return string */
  public function getIndexTime()
  {
    return $this->indexTime;
  }
  /** @param GroupedResult[] */
  public function setProductGroupedResults($productGroupedResults)
  {
    $this->productGroupedResults = $productGroupedResults;
  }
  /** @return GroupedResult[] */
  public function getProductGroupedResults()
  {
    return $this->productGroupedResults;
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

class ProductSet extends \Google\Model
{
  /** @var string */
  public $displayName;
  /** @var Status */
  public $indexError;
  /** @var string */
  public $indexTime;
  /** @var string */
  public $name;
  protected $indexErrorType = Status::class;
  protected $indexErrorDataType = '';
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
  /** @param Status */
  public function setIndexError(Status $indexError)
  {
    $this->indexError = $indexError;
  }
  /** @return Status */
  public function getIndexError()
  {
    return $this->indexError;
  }
  /** @param string */
  public function setIndexTime($indexTime)
  {
    $this->indexTime = $indexTime;
  }
  /** @return string */
  public function getIndexTime()
  {
    return $this->indexTime;
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

class ProductSetPurgeConfig extends \Google\Model
{
  /** @var string */
  public $productSetId;

  /** @param string */
  public function setProductSetId($productSetId)
  {
    $this->productSetId = $productSetId;
  }
  /** @return string */
  public function getProductSetId()
  {
    return $this->productSetId;
  }
}

class Property extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $uint64Value;
  /** @var string */
  public $value;

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
  public function setUint64Value($uint64Value)
  {
    $this->uint64Value = $uint64Value;
  }
  /** @return string */
  public function getUint64Value()
  {
    return $this->uint64Value;
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

class PurgeProductsRequest extends \Google\Model
{
  /** @var bool */
  public $deleteOrphanProducts;
  /** @var bool */
  public $force;
  /** @var ProductSetPurgeConfig */
  public $productSetPurgeConfig;
  protected $productSetPurgeConfigType = ProductSetPurgeConfig::class;
  protected $productSetPurgeConfigDataType = '';
  /** @param bool */
  public function setDeleteOrphanProducts($deleteOrphanProducts)
  {
    $this->deleteOrphanProducts = $deleteOrphanProducts;
  }
  /** @return bool */
  public function getDeleteOrphanProducts()
  {
    return $this->deleteOrphanProducts;
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
  /** @param ProductSetPurgeConfig */
  public function setProductSetPurgeConfig(ProductSetPurgeConfig $productSetPurgeConfig)
  {
    $this->productSetPurgeConfig = $productSetPurgeConfig;
  }
  /** @return ProductSetPurgeConfig */
  public function getProductSetPurgeConfig()
  {
    return $this->productSetPurgeConfig;
  }
}

class ReferenceImage extends \Google\Collection
{
  /** @var BoundingPoly[] */
  public $boundingPolys;
  /** @var string */
  public $name;
  /** @var string */
  public $uri;
  protected $collection_key = 'boundingPolys';
  protected $boundingPolysType = BoundingPoly::class;
  protected $boundingPolysDataType = 'array';
  /** @param BoundingPoly[] */
  public function setBoundingPolys($boundingPolys)
  {
    $this->boundingPolys = $boundingPolys;
  }
  /** @return BoundingPoly[] */
  public function getBoundingPolys()
  {
    return $this->boundingPolys;
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

class RemoveProductFromProductSetRequest extends \Google\Model
{
  /** @var string */
  public $product;

  /** @param string */
  public function setProduct($product)
  {
    $this->product = $product;
  }
  /** @return string */
  public function getProduct()
  {
    return $this->product;
  }
}

class Result extends \Google\Model
{
  /** @var string */
  public $image;
  /** @var Product */
  public $product;
  /** @var float */
  public $score;
  protected $productType = Product::class;
  protected $productDataType = '';
  /** @param string */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /** @return string */
  public function getImage()
  {
    return $this->image;
  }
  /** @param Product */
  public function setProduct(Product $product)
  {
    $this->product = $product;
  }
  /** @return Product */
  public function getProduct()
  {
    return $this->product;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class SafeSearchAnnotation extends \Google\Model
{
  /** @var string */
  public $adult;
  /** @var string */
  public $medical;
  /** @var string */
  public $racy;
  /** @var string */
  public $spoof;
  /** @var string */
  public $violence;

  /** @param string */
  public function setAdult($adult)
  {
    $this->adult = $adult;
  }
  /** @return string */
  public function getAdult()
  {
    return $this->adult;
  }
  /** @param string */
  public function setMedical($medical)
  {
    $this->medical = $medical;
  }
  /** @return string */
  public function getMedical()
  {
    return $this->medical;
  }
  /** @param string */
  public function setRacy($racy)
  {
    $this->racy = $racy;
  }
  /** @return string */
  public function getRacy()
  {
    return $this->racy;
  }
  /** @param string */
  public function setSpoof($spoof)
  {
    $this->spoof = $spoof;
  }
  /** @return string */
  public function getSpoof()
  {
    return $this->spoof;
  }
  /** @param string */
  public function setViolence($violence)
  {
    $this->violence = $violence;
  }
  /** @return string */
  public function getViolence()
  {
    return $this->violence;
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

class Symbol extends \Google\Model
{
  /** @var BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var TextProperty */
  public $property;
  /** @var string */
  public $text;
  protected $boundingBoxType = BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $propertyType = TextProperty::class;
  protected $propertyDataType = '';
  /** @param BoundingPoly */
  public function setBoundingBox(BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param TextProperty */
  public function setProperty(TextProperty $property)
  {
    $this->property = $property;
  }
  /** @return TextProperty */
  public function getProperty()
  {
    return $this->property;
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

class TextAnnotation extends \Google\Collection
{
  /** @var Page[] */
  public $pages;
  /** @var string */
  public $text;
  protected $collection_key = 'pages';
  protected $pagesType = Page::class;
  protected $pagesDataType = 'array';
  /** @param Page[] */
  public function setPages($pages)
  {
    $this->pages = $pages;
  }
  /** @return Page[] */
  public function getPages()
  {
    return $this->pages;
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

class TextDetectionParams extends \Google\Collection
{
  /** @var string[] */
  public $advancedOcrOptions;
  /** @var bool */
  public $enableTextDetectionConfidenceScore;
  protected $collection_key = 'advancedOcrOptions';
  /** @param string[] */
  public function setAdvancedOcrOptions($advancedOcrOptions)
  {
    $this->advancedOcrOptions = $advancedOcrOptions;
  }
  /** @return string[] */
  public function getAdvancedOcrOptions()
  {
    return $this->advancedOcrOptions;
  }
  /** @param bool */
  public function setEnableTextDetectionConfidenceScore($enableTextDetectionConfidenceScore)
  {
    $this->enableTextDetectionConfidenceScore = $enableTextDetectionConfidenceScore;
  }
  /** @return bool */
  public function getEnableTextDetectionConfidenceScore()
  {
    return $this->enableTextDetectionConfidenceScore;
  }
}

class TextProperty extends \Google\Collection
{
  /** @var DetectedBreak */
  public $detectedBreak;
  /** @var DetectedLanguage[] */
  public $detectedLanguages;
  protected $collection_key = 'detectedLanguages';
  protected $detectedBreakType = DetectedBreak::class;
  protected $detectedBreakDataType = '';
  protected $detectedLanguagesType = DetectedLanguage::class;
  protected $detectedLanguagesDataType = 'array';
  /** @param DetectedBreak */
  public function setDetectedBreak(DetectedBreak $detectedBreak)
  {
    $this->detectedBreak = $detectedBreak;
  }
  /** @return DetectedBreak */
  public function getDetectedBreak()
  {
    return $this->detectedBreak;
  }
  /** @param DetectedLanguage[] */
  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }
  /** @return DetectedLanguage[] */
  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }
}

class Vertex extends \Google\Model
{
  /** @var int */
  public $x;
  /** @var int */
  public $y;

  /** @param int */
  public function setX($x)
  {
    $this->x = $x;
  }
  /** @return int */
  public function getX()
  {
    return $this->x;
  }
  /** @param int */
  public function setY($y)
  {
    $this->y = $y;
  }
  /** @return int */
  public function getY()
  {
    return $this->y;
  }
}

class VisionEmpty extends \Google\Model
{
}

class WebDetection extends \Google\Collection
{
  /** @var WebLabel[] */
  public $bestGuessLabels;
  /** @var WebImage[] */
  public $fullMatchingImages;
  /** @var WebPage[] */
  public $pagesWithMatchingImages;
  /** @var WebImage[] */
  public $partialMatchingImages;
  /** @var WebImage[] */
  public $visuallySimilarImages;
  /** @var WebEntity[] */
  public $webEntities;
  protected $collection_key = 'webEntities';
  protected $bestGuessLabelsType = WebLabel::class;
  protected $bestGuessLabelsDataType = 'array';
  protected $fullMatchingImagesType = WebImage::class;
  protected $fullMatchingImagesDataType = 'array';
  protected $pagesWithMatchingImagesType = WebPage::class;
  protected $pagesWithMatchingImagesDataType = 'array';
  protected $partialMatchingImagesType = WebImage::class;
  protected $partialMatchingImagesDataType = 'array';
  protected $visuallySimilarImagesType = WebImage::class;
  protected $visuallySimilarImagesDataType = 'array';
  protected $webEntitiesType = WebEntity::class;
  protected $webEntitiesDataType = 'array';
  /** @param WebLabel[] */
  public function setBestGuessLabels($bestGuessLabels)
  {
    $this->bestGuessLabels = $bestGuessLabels;
  }
  /** @return WebLabel[] */
  public function getBestGuessLabels()
  {
    return $this->bestGuessLabels;
  }
  /** @param WebImage[] */
  public function setFullMatchingImages($fullMatchingImages)
  {
    $this->fullMatchingImages = $fullMatchingImages;
  }
  /** @return WebImage[] */
  public function getFullMatchingImages()
  {
    return $this->fullMatchingImages;
  }
  /** @param WebPage[] */
  public function setPagesWithMatchingImages($pagesWithMatchingImages)
  {
    $this->pagesWithMatchingImages = $pagesWithMatchingImages;
  }
  /** @return WebPage[] */
  public function getPagesWithMatchingImages()
  {
    return $this->pagesWithMatchingImages;
  }
  /** @param WebImage[] */
  public function setPartialMatchingImages($partialMatchingImages)
  {
    $this->partialMatchingImages = $partialMatchingImages;
  }
  /** @return WebImage[] */
  public function getPartialMatchingImages()
  {
    return $this->partialMatchingImages;
  }
  /** @param WebImage[] */
  public function setVisuallySimilarImages($visuallySimilarImages)
  {
    $this->visuallySimilarImages = $visuallySimilarImages;
  }
  /** @return WebImage[] */
  public function getVisuallySimilarImages()
  {
    return $this->visuallySimilarImages;
  }
  /** @param WebEntity[] */
  public function setWebEntities($webEntities)
  {
    $this->webEntities = $webEntities;
  }
  /** @return WebEntity[] */
  public function getWebEntities()
  {
    return $this->webEntities;
  }
}

class WebDetectionParams extends \Google\Model
{
  /** @var bool */
  public $includeGeoResults;

  /** @param bool */
  public function setIncludeGeoResults($includeGeoResults)
  {
    $this->includeGeoResults = $includeGeoResults;
  }
  /** @return bool */
  public function getIncludeGeoResults()
  {
    return $this->includeGeoResults;
  }
}

class WebEntity extends \Google\Model
{
  /** @var string */
  public $description;
  /** @var string */
  public $entityId;
  /** @var float */
  public $score;

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
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /** @return string */
  public function getEntityId()
  {
    return $this->entityId;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
  }
}

class WebImage extends \Google\Model
{
  /** @var float */
  public $score;
  /** @var string */
  public $url;

  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
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

class WebLabel extends \Google\Model
{
  /** @var string */
  public $label;
  /** @var string */
  public $languageCode;

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
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /** @return string */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class WebPage extends \Google\Collection
{
  /** @var WebImage[] */
  public $fullMatchingImages;
  /** @var string */
  public $pageTitle;
  /** @var WebImage[] */
  public $partialMatchingImages;
  /** @var float */
  public $score;
  /** @var string */
  public $url;
  protected $collection_key = 'partialMatchingImages';
  protected $fullMatchingImagesType = WebImage::class;
  protected $fullMatchingImagesDataType = 'array';
  protected $partialMatchingImagesType = WebImage::class;
  protected $partialMatchingImagesDataType = 'array';
  /** @param WebImage[] */
  public function setFullMatchingImages($fullMatchingImages)
  {
    $this->fullMatchingImages = $fullMatchingImages;
  }
  /** @return WebImage[] */
  public function getFullMatchingImages()
  {
    return $this->fullMatchingImages;
  }
  /** @param string */
  public function setPageTitle($pageTitle)
  {
    $this->pageTitle = $pageTitle;
  }
  /** @return string */
  public function getPageTitle()
  {
    return $this->pageTitle;
  }
  /** @param WebImage[] */
  public function setPartialMatchingImages($partialMatchingImages)
  {
    $this->partialMatchingImages = $partialMatchingImages;
  }
  /** @return WebImage[] */
  public function getPartialMatchingImages()
  {
    return $this->partialMatchingImages;
  }
  /** @param float */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /** @return float */
  public function getScore()
  {
    return $this->score;
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

class Word extends \Google\Collection
{
  /** @var BoundingPoly */
  public $boundingBox;
  /** @var float */
  public $confidence;
  /** @var TextProperty */
  public $property;
  /** @var Symbol[] */
  public $symbols;
  protected $collection_key = 'symbols';
  protected $boundingBoxType = BoundingPoly::class;
  protected $boundingBoxDataType = '';
  protected $propertyType = TextProperty::class;
  protected $propertyDataType = '';
  protected $symbolsType = Symbol::class;
  protected $symbolsDataType = 'array';
  /** @param BoundingPoly */
  public function setBoundingBox(BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /** @return BoundingPoly */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }
  /** @param float */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /** @return float */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /** @param TextProperty */
  public function setProperty(TextProperty $property)
  {
    $this->property = $property;
  }
  /** @return TextProperty */
  public function getProperty()
  {
    return $this->property;
  }
  /** @param Symbol[] */
  public function setSymbols($symbols)
  {
    $this->symbols = $symbols;
  }
  /** @return Symbol[] */
  public function getSymbols()
  {
    return $this->symbols;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AddProductToProductSetRequest::class, 'Google_Service_Vision_AddProductToProductSetRequest');
class_alias(AnnotateFileRequest::class, 'Google_Service_Vision_AnnotateFileRequest');
class_alias(AnnotateFileResponse::class, 'Google_Service_Vision_AnnotateFileResponse');
class_alias(AnnotateImageRequest::class, 'Google_Service_Vision_AnnotateImageRequest');
class_alias(AnnotateImageResponse::class, 'Google_Service_Vision_AnnotateImageResponse');
class_alias(AsyncAnnotateFileRequest::class, 'Google_Service_Vision_AsyncAnnotateFileRequest');
class_alias(AsyncAnnotateFileResponse::class, 'Google_Service_Vision_AsyncAnnotateFileResponse');
class_alias(AsyncBatchAnnotateFilesRequest::class, 'Google_Service_Vision_AsyncBatchAnnotateFilesRequest');
class_alias(AsyncBatchAnnotateFilesResponse::class, 'Google_Service_Vision_AsyncBatchAnnotateFilesResponse');
class_alias(AsyncBatchAnnotateImagesRequest::class, 'Google_Service_Vision_AsyncBatchAnnotateImagesRequest');
class_alias(AsyncBatchAnnotateImagesResponse::class, 'Google_Service_Vision_AsyncBatchAnnotateImagesResponse');
class_alias(BatchAnnotateFilesRequest::class, 'Google_Service_Vision_BatchAnnotateFilesRequest');
class_alias(BatchAnnotateFilesResponse::class, 'Google_Service_Vision_BatchAnnotateFilesResponse');
class_alias(BatchAnnotateImagesRequest::class, 'Google_Service_Vision_BatchAnnotateImagesRequest');
class_alias(BatchAnnotateImagesResponse::class, 'Google_Service_Vision_BatchAnnotateImagesResponse');
class_alias(BatchOperationMetadata::class, 'Google_Service_Vision_BatchOperationMetadata');
class_alias(Block::class, 'Google_Service_Vision_Block');
class_alias(BoundingPoly::class, 'Google_Service_Vision_BoundingPoly');
class_alias(CancelOperationRequest::class, 'Google_Service_Vision_CancelOperationRequest');
class_alias(Color::class, 'Google_Service_Vision_Color');
class_alias(ColorInfo::class, 'Google_Service_Vision_ColorInfo');
class_alias(CropHint::class, 'Google_Service_Vision_CropHint');
class_alias(CropHintsAnnotation::class, 'Google_Service_Vision_CropHintsAnnotation');
class_alias(CropHintsParams::class, 'Google_Service_Vision_CropHintsParams');
class_alias(DetectedBreak::class, 'Google_Service_Vision_DetectedBreak');
class_alias(DetectedLanguage::class, 'Google_Service_Vision_DetectedLanguage');
class_alias(DominantColorsAnnotation::class, 'Google_Service_Vision_DominantColorsAnnotation');
class_alias(EntityAnnotation::class, 'Google_Service_Vision_EntityAnnotation');
class_alias(FaceAnnotation::class, 'Google_Service_Vision_FaceAnnotation');
class_alias(Feature::class, 'Google_Service_Vision_Feature');
class_alias(GcsDestination::class, 'Google_Service_Vision_GcsDestination');
class_alias(GcsSource::class, 'Google_Service_Vision_GcsSource');
class_alias(GoogleCloudVisionV1p1beta1AnnotateFileResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1AnnotateFileResponse');
class_alias(GoogleCloudVisionV1p1beta1AnnotateImageResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1AnnotateImageResponse');
class_alias(GoogleCloudVisionV1p1beta1AsyncAnnotateFileResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1AsyncAnnotateFileResponse');
class_alias(GoogleCloudVisionV1p1beta1AsyncBatchAnnotateFilesResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1AsyncBatchAnnotateFilesResponse');
class_alias(GoogleCloudVisionV1p1beta1Block::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1Block');
class_alias(GoogleCloudVisionV1p1beta1BoundingPoly::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1BoundingPoly');
class_alias(GoogleCloudVisionV1p1beta1ColorInfo::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1ColorInfo');
class_alias(GoogleCloudVisionV1p1beta1CropHint::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1CropHint');
class_alias(GoogleCloudVisionV1p1beta1CropHintsAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1CropHintsAnnotation');
class_alias(GoogleCloudVisionV1p1beta1DominantColorsAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1DominantColorsAnnotation');
class_alias(GoogleCloudVisionV1p1beta1EntityAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1EntityAnnotation');
class_alias(GoogleCloudVisionV1p1beta1FaceAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1FaceAnnotation');
class_alias(GoogleCloudVisionV1p1beta1FaceAnnotationLandmark::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1FaceAnnotationLandmark');
class_alias(GoogleCloudVisionV1p1beta1GcsDestination::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1GcsDestination');
class_alias(GoogleCloudVisionV1p1beta1GcsSource::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1GcsSource');
class_alias(GoogleCloudVisionV1p1beta1ImageAnnotationContext::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1ImageAnnotationContext');
class_alias(GoogleCloudVisionV1p1beta1ImageProperties::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1ImageProperties');
class_alias(GoogleCloudVisionV1p1beta1InputConfig::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1InputConfig');
class_alias(GoogleCloudVisionV1p1beta1LocalizedObjectAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1LocalizedObjectAnnotation');
class_alias(GoogleCloudVisionV1p1beta1LocationInfo::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1LocationInfo');
class_alias(GoogleCloudVisionV1p1beta1NormalizedVertex::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1NormalizedVertex');
class_alias(GoogleCloudVisionV1p1beta1OperationMetadata::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1OperationMetadata');
class_alias(GoogleCloudVisionV1p1beta1OutputConfig::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1OutputConfig');
class_alias(GoogleCloudVisionV1p1beta1Page::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1Page');
class_alias(GoogleCloudVisionV1p1beta1Paragraph::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1Paragraph');
class_alias(GoogleCloudVisionV1p1beta1Position::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1Position');
class_alias(GoogleCloudVisionV1p1beta1Product::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1Product');
class_alias(GoogleCloudVisionV1p1beta1ProductKeyValue::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1ProductKeyValue');
class_alias(GoogleCloudVisionV1p1beta1ProductSearchResults::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1ProductSearchResults');
class_alias(GoogleCloudVisionV1p1beta1ProductSearchResultsGroupedResult::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1ProductSearchResultsGroupedResult');
class_alias(GoogleCloudVisionV1p1beta1ProductSearchResultsObjectAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1ProductSearchResultsObjectAnnotation');
class_alias(GoogleCloudVisionV1p1beta1ProductSearchResultsResult::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1ProductSearchResultsResult');
class_alias(GoogleCloudVisionV1p1beta1Property::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1Property');
class_alias(GoogleCloudVisionV1p1beta1SafeSearchAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1SafeSearchAnnotation');
class_alias(GoogleCloudVisionV1p1beta1Symbol::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1Symbol');
class_alias(GoogleCloudVisionV1p1beta1TextAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1TextAnnotation');
class_alias(GoogleCloudVisionV1p1beta1TextAnnotationDetectedBreak::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1TextAnnotationDetectedBreak');
class_alias(GoogleCloudVisionV1p1beta1TextAnnotationDetectedLanguage::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1TextAnnotationDetectedLanguage');
class_alias(GoogleCloudVisionV1p1beta1TextAnnotationTextProperty::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1TextAnnotationTextProperty');
class_alias(GoogleCloudVisionV1p1beta1Vertex::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1Vertex');
class_alias(GoogleCloudVisionV1p1beta1WebDetection::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1WebDetection');
class_alias(GoogleCloudVisionV1p1beta1WebDetectionWebEntity::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1WebDetectionWebEntity');
class_alias(GoogleCloudVisionV1p1beta1WebDetectionWebImage::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1WebDetectionWebImage');
class_alias(GoogleCloudVisionV1p1beta1WebDetectionWebLabel::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1WebDetectionWebLabel');
class_alias(GoogleCloudVisionV1p1beta1WebDetectionWebPage::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1WebDetectionWebPage');
class_alias(GoogleCloudVisionV1p1beta1Word::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1Word');
class_alias(GoogleCloudVisionV1p2beta1AnnotateFileResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1AnnotateFileResponse');
class_alias(GoogleCloudVisionV1p2beta1AnnotateImageResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1AnnotateImageResponse');
class_alias(GoogleCloudVisionV1p2beta1AsyncAnnotateFileResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1AsyncAnnotateFileResponse');
class_alias(GoogleCloudVisionV1p2beta1AsyncBatchAnnotateFilesResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1AsyncBatchAnnotateFilesResponse');
class_alias(GoogleCloudVisionV1p2beta1Block::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1Block');
class_alias(GoogleCloudVisionV1p2beta1BoundingPoly::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1BoundingPoly');
class_alias(GoogleCloudVisionV1p2beta1ColorInfo::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1ColorInfo');
class_alias(GoogleCloudVisionV1p2beta1CropHint::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1CropHint');
class_alias(GoogleCloudVisionV1p2beta1CropHintsAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1CropHintsAnnotation');
class_alias(GoogleCloudVisionV1p2beta1DominantColorsAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1DominantColorsAnnotation');
class_alias(GoogleCloudVisionV1p2beta1EntityAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1EntityAnnotation');
class_alias(GoogleCloudVisionV1p2beta1FaceAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1FaceAnnotation');
class_alias(GoogleCloudVisionV1p2beta1FaceAnnotationLandmark::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1FaceAnnotationLandmark');
class_alias(GoogleCloudVisionV1p2beta1GcsDestination::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1GcsDestination');
class_alias(GoogleCloudVisionV1p2beta1GcsSource::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1GcsSource');
class_alias(GoogleCloudVisionV1p2beta1ImageAnnotationContext::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1ImageAnnotationContext');
class_alias(GoogleCloudVisionV1p2beta1ImageProperties::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1ImageProperties');
class_alias(GoogleCloudVisionV1p2beta1InputConfig::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1InputConfig');
class_alias(GoogleCloudVisionV1p2beta1LocalizedObjectAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1LocalizedObjectAnnotation');
class_alias(GoogleCloudVisionV1p2beta1LocationInfo::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1LocationInfo');
class_alias(GoogleCloudVisionV1p2beta1NormalizedVertex::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1NormalizedVertex');
class_alias(GoogleCloudVisionV1p2beta1OperationMetadata::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1OperationMetadata');
class_alias(GoogleCloudVisionV1p2beta1OutputConfig::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1OutputConfig');
class_alias(GoogleCloudVisionV1p2beta1Page::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1Page');
class_alias(GoogleCloudVisionV1p2beta1Paragraph::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1Paragraph');
class_alias(GoogleCloudVisionV1p2beta1Position::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1Position');
class_alias(GoogleCloudVisionV1p2beta1Product::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1Product');
class_alias(GoogleCloudVisionV1p2beta1ProductKeyValue::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1ProductKeyValue');
class_alias(GoogleCloudVisionV1p2beta1ProductSearchResults::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1ProductSearchResults');
class_alias(GoogleCloudVisionV1p2beta1ProductSearchResultsGroupedResult::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1ProductSearchResultsGroupedResult');
class_alias(GoogleCloudVisionV1p2beta1ProductSearchResultsObjectAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1ProductSearchResultsObjectAnnotation');
class_alias(GoogleCloudVisionV1p2beta1ProductSearchResultsResult::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1ProductSearchResultsResult');
class_alias(GoogleCloudVisionV1p2beta1Property::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1Property');
class_alias(GoogleCloudVisionV1p2beta1SafeSearchAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1SafeSearchAnnotation');
class_alias(GoogleCloudVisionV1p2beta1Symbol::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1Symbol');
class_alias(GoogleCloudVisionV1p2beta1TextAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1TextAnnotation');
class_alias(GoogleCloudVisionV1p2beta1TextAnnotationDetectedBreak::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1TextAnnotationDetectedBreak');
class_alias(GoogleCloudVisionV1p2beta1TextAnnotationDetectedLanguage::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1TextAnnotationDetectedLanguage');
class_alias(GoogleCloudVisionV1p2beta1TextAnnotationTextProperty::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1TextAnnotationTextProperty');
class_alias(GoogleCloudVisionV1p2beta1Vertex::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1Vertex');
class_alias(GoogleCloudVisionV1p2beta1WebDetection::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1WebDetection');
class_alias(GoogleCloudVisionV1p2beta1WebDetectionWebEntity::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1WebDetectionWebEntity');
class_alias(GoogleCloudVisionV1p2beta1WebDetectionWebImage::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1WebDetectionWebImage');
class_alias(GoogleCloudVisionV1p2beta1WebDetectionWebLabel::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1WebDetectionWebLabel');
class_alias(GoogleCloudVisionV1p2beta1WebDetectionWebPage::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1WebDetectionWebPage');
class_alias(GoogleCloudVisionV1p2beta1Word::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1Word');
class_alias(GoogleCloudVisionV1p3beta1AnnotateFileResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1AnnotateFileResponse');
class_alias(GoogleCloudVisionV1p3beta1AnnotateImageResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1AnnotateImageResponse');
class_alias(GoogleCloudVisionV1p3beta1AsyncAnnotateFileResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1AsyncAnnotateFileResponse');
class_alias(GoogleCloudVisionV1p3beta1AsyncBatchAnnotateFilesResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1AsyncBatchAnnotateFilesResponse');
class_alias(GoogleCloudVisionV1p3beta1BatchOperationMetadata::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1BatchOperationMetadata');
class_alias(GoogleCloudVisionV1p3beta1Block::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1Block');
class_alias(GoogleCloudVisionV1p3beta1BoundingPoly::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1BoundingPoly');
class_alias(GoogleCloudVisionV1p3beta1ColorInfo::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1ColorInfo');
class_alias(GoogleCloudVisionV1p3beta1CropHint::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1CropHint');
class_alias(GoogleCloudVisionV1p3beta1CropHintsAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1CropHintsAnnotation');
class_alias(GoogleCloudVisionV1p3beta1DominantColorsAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1DominantColorsAnnotation');
class_alias(GoogleCloudVisionV1p3beta1EntityAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1EntityAnnotation');
class_alias(GoogleCloudVisionV1p3beta1FaceAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1FaceAnnotation');
class_alias(GoogleCloudVisionV1p3beta1FaceAnnotationLandmark::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1FaceAnnotationLandmark');
class_alias(GoogleCloudVisionV1p3beta1GcsDestination::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1GcsDestination');
class_alias(GoogleCloudVisionV1p3beta1GcsSource::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1GcsSource');
class_alias(GoogleCloudVisionV1p3beta1ImageAnnotationContext::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1ImageAnnotationContext');
class_alias(GoogleCloudVisionV1p3beta1ImageProperties::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1ImageProperties');
class_alias(GoogleCloudVisionV1p3beta1ImportProductSetsResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1ImportProductSetsResponse');
class_alias(GoogleCloudVisionV1p3beta1InputConfig::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1InputConfig');
class_alias(GoogleCloudVisionV1p3beta1LocalizedObjectAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1LocalizedObjectAnnotation');
class_alias(GoogleCloudVisionV1p3beta1LocationInfo::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1LocationInfo');
class_alias(GoogleCloudVisionV1p3beta1NormalizedVertex::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1NormalizedVertex');
class_alias(GoogleCloudVisionV1p3beta1OperationMetadata::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1OperationMetadata');
class_alias(GoogleCloudVisionV1p3beta1OutputConfig::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1OutputConfig');
class_alias(GoogleCloudVisionV1p3beta1Page::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1Page');
class_alias(GoogleCloudVisionV1p3beta1Paragraph::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1Paragraph');
class_alias(GoogleCloudVisionV1p3beta1Position::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1Position');
class_alias(GoogleCloudVisionV1p3beta1Product::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1Product');
class_alias(GoogleCloudVisionV1p3beta1ProductKeyValue::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1ProductKeyValue');
class_alias(GoogleCloudVisionV1p3beta1ProductSearchResults::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1ProductSearchResults');
class_alias(GoogleCloudVisionV1p3beta1ProductSearchResultsGroupedResult::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1ProductSearchResultsGroupedResult');
class_alias(GoogleCloudVisionV1p3beta1ProductSearchResultsObjectAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1ProductSearchResultsObjectAnnotation');
class_alias(GoogleCloudVisionV1p3beta1ProductSearchResultsResult::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1ProductSearchResultsResult');
class_alias(GoogleCloudVisionV1p3beta1Property::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1Property');
class_alias(GoogleCloudVisionV1p3beta1ReferenceImage::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1ReferenceImage');
class_alias(GoogleCloudVisionV1p3beta1SafeSearchAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1SafeSearchAnnotation');
class_alias(GoogleCloudVisionV1p3beta1Symbol::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1Symbol');
class_alias(GoogleCloudVisionV1p3beta1TextAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1TextAnnotation');
class_alias(GoogleCloudVisionV1p3beta1TextAnnotationDetectedBreak::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1TextAnnotationDetectedBreak');
class_alias(GoogleCloudVisionV1p3beta1TextAnnotationDetectedLanguage::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1TextAnnotationDetectedLanguage');
class_alias(GoogleCloudVisionV1p3beta1TextAnnotationTextProperty::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1TextAnnotationTextProperty');
class_alias(GoogleCloudVisionV1p3beta1Vertex::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1Vertex');
class_alias(GoogleCloudVisionV1p3beta1WebDetection::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1WebDetection');
class_alias(GoogleCloudVisionV1p3beta1WebDetectionWebEntity::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1WebDetectionWebEntity');
class_alias(GoogleCloudVisionV1p3beta1WebDetectionWebImage::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1WebDetectionWebImage');
class_alias(GoogleCloudVisionV1p3beta1WebDetectionWebLabel::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1WebDetectionWebLabel');
class_alias(GoogleCloudVisionV1p3beta1WebDetectionWebPage::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1WebDetectionWebPage');
class_alias(GoogleCloudVisionV1p3beta1Word::class, 'Google_Service_Vision_GoogleCloudVisionV1p3beta1Word');
class_alias(GoogleCloudVisionV1p4beta1AnnotateFileResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1AnnotateFileResponse');
class_alias(GoogleCloudVisionV1p4beta1AnnotateImageResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1AnnotateImageResponse');
class_alias(GoogleCloudVisionV1p4beta1AsyncAnnotateFileResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1AsyncAnnotateFileResponse');
class_alias(GoogleCloudVisionV1p4beta1AsyncBatchAnnotateFilesResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1AsyncBatchAnnotateFilesResponse');
class_alias(GoogleCloudVisionV1p4beta1AsyncBatchAnnotateImagesResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1AsyncBatchAnnotateImagesResponse');
class_alias(GoogleCloudVisionV1p4beta1BatchAnnotateFilesResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1BatchAnnotateFilesResponse');
class_alias(GoogleCloudVisionV1p4beta1BatchOperationMetadata::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1BatchOperationMetadata');
class_alias(GoogleCloudVisionV1p4beta1Block::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1Block');
class_alias(GoogleCloudVisionV1p4beta1BoundingPoly::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1BoundingPoly');
class_alias(GoogleCloudVisionV1p4beta1Celebrity::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1Celebrity');
class_alias(GoogleCloudVisionV1p4beta1ColorInfo::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1ColorInfo');
class_alias(GoogleCloudVisionV1p4beta1CropHint::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1CropHint');
class_alias(GoogleCloudVisionV1p4beta1CropHintsAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1CropHintsAnnotation');
class_alias(GoogleCloudVisionV1p4beta1DominantColorsAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1DominantColorsAnnotation');
class_alias(GoogleCloudVisionV1p4beta1EntityAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1EntityAnnotation');
class_alias(GoogleCloudVisionV1p4beta1FaceAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1FaceAnnotation');
class_alias(GoogleCloudVisionV1p4beta1FaceAnnotationLandmark::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1FaceAnnotationLandmark');
class_alias(GoogleCloudVisionV1p4beta1FaceRecognitionResult::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1FaceRecognitionResult');
class_alias(GoogleCloudVisionV1p4beta1GcsDestination::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1GcsDestination');
class_alias(GoogleCloudVisionV1p4beta1GcsSource::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1GcsSource');
class_alias(GoogleCloudVisionV1p4beta1ImageAnnotationContext::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1ImageAnnotationContext');
class_alias(GoogleCloudVisionV1p4beta1ImageProperties::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1ImageProperties');
class_alias(GoogleCloudVisionV1p4beta1ImportProductSetsResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1ImportProductSetsResponse');
class_alias(GoogleCloudVisionV1p4beta1InputConfig::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1InputConfig');
class_alias(GoogleCloudVisionV1p4beta1LocalizedObjectAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1LocalizedObjectAnnotation');
class_alias(GoogleCloudVisionV1p4beta1LocationInfo::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1LocationInfo');
class_alias(GoogleCloudVisionV1p4beta1NormalizedVertex::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1NormalizedVertex');
class_alias(GoogleCloudVisionV1p4beta1OperationMetadata::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1OperationMetadata');
class_alias(GoogleCloudVisionV1p4beta1OutputConfig::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1OutputConfig');
class_alias(GoogleCloudVisionV1p4beta1Page::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1Page');
class_alias(GoogleCloudVisionV1p4beta1Paragraph::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1Paragraph');
class_alias(GoogleCloudVisionV1p4beta1Position::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1Position');
class_alias(GoogleCloudVisionV1p4beta1Product::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1Product');
class_alias(GoogleCloudVisionV1p4beta1ProductKeyValue::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1ProductKeyValue');
class_alias(GoogleCloudVisionV1p4beta1ProductSearchResults::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1ProductSearchResults');
class_alias(GoogleCloudVisionV1p4beta1ProductSearchResultsGroupedResult::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1ProductSearchResultsGroupedResult');
class_alias(GoogleCloudVisionV1p4beta1ProductSearchResultsObjectAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1ProductSearchResultsObjectAnnotation');
class_alias(GoogleCloudVisionV1p4beta1ProductSearchResultsResult::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1ProductSearchResultsResult');
class_alias(GoogleCloudVisionV1p4beta1Property::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1Property');
class_alias(GoogleCloudVisionV1p4beta1ReferenceImage::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1ReferenceImage');
class_alias(GoogleCloudVisionV1p4beta1SafeSearchAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1SafeSearchAnnotation');
class_alias(GoogleCloudVisionV1p4beta1Symbol::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1Symbol');
class_alias(GoogleCloudVisionV1p4beta1TextAnnotation::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1TextAnnotation');
class_alias(GoogleCloudVisionV1p4beta1TextAnnotationDetectedBreak::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1TextAnnotationDetectedBreak');
class_alias(GoogleCloudVisionV1p4beta1TextAnnotationDetectedLanguage::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1TextAnnotationDetectedLanguage');
class_alias(GoogleCloudVisionV1p4beta1TextAnnotationTextProperty::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1TextAnnotationTextProperty');
class_alias(GoogleCloudVisionV1p4beta1Vertex::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1Vertex');
class_alias(GoogleCloudVisionV1p4beta1WebDetection::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1WebDetection');
class_alias(GoogleCloudVisionV1p4beta1WebDetectionWebEntity::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1WebDetectionWebEntity');
class_alias(GoogleCloudVisionV1p4beta1WebDetectionWebImage::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1WebDetectionWebImage');
class_alias(GoogleCloudVisionV1p4beta1WebDetectionWebLabel::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1WebDetectionWebLabel');
class_alias(GoogleCloudVisionV1p4beta1WebDetectionWebPage::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1WebDetectionWebPage');
class_alias(GoogleCloudVisionV1p4beta1Word::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1Word');
class_alias(GroupedResult::class, 'Google_Service_Vision_GroupedResult');
class_alias(Image::class, 'Google_Service_Vision_Image');
class_alias(ImageAnnotationContext::class, 'Google_Service_Vision_ImageAnnotationContext');
class_alias(ImageContext::class, 'Google_Service_Vision_ImageContext');
class_alias(ImageProperties::class, 'Google_Service_Vision_ImageProperties');
class_alias(ImageSource::class, 'Google_Service_Vision_ImageSource');
class_alias(ImportProductSetsGcsSource::class, 'Google_Service_Vision_ImportProductSetsGcsSource');
class_alias(ImportProductSetsInputConfig::class, 'Google_Service_Vision_ImportProductSetsInputConfig');
class_alias(ImportProductSetsRequest::class, 'Google_Service_Vision_ImportProductSetsRequest');
class_alias(ImportProductSetsResponse::class, 'Google_Service_Vision_ImportProductSetsResponse');
class_alias(InputConfig::class, 'Google_Service_Vision_InputConfig');
class_alias(KeyValue::class, 'Google_Service_Vision_KeyValue');
class_alias(Landmark::class, 'Google_Service_Vision_Landmark');
class_alias(LatLng::class, 'Google_Service_Vision_LatLng');
class_alias(LatLongRect::class, 'Google_Service_Vision_LatLongRect');
class_alias(ListOperationsResponse::class, 'Google_Service_Vision_ListOperationsResponse');
class_alias(ListProductSetsResponse::class, 'Google_Service_Vision_ListProductSetsResponse');
class_alias(ListProductsInProductSetResponse::class, 'Google_Service_Vision_ListProductsInProductSetResponse');
class_alias(ListProductsResponse::class, 'Google_Service_Vision_ListProductsResponse');
class_alias(ListReferenceImagesResponse::class, 'Google_Service_Vision_ListReferenceImagesResponse');
class_alias(LocalizedObjectAnnotation::class, 'Google_Service_Vision_LocalizedObjectAnnotation');
class_alias(LocationInfo::class, 'Google_Service_Vision_LocationInfo');
class_alias(NormalizedVertex::class, 'Google_Service_Vision_NormalizedVertex');
class_alias(ObjectAnnotation::class, 'Google_Service_Vision_ObjectAnnotation');
class_alias(Operation::class, 'Google_Service_Vision_Operation');
class_alias(OperationMetadata::class, 'Google_Service_Vision_OperationMetadata');
class_alias(OutputConfig::class, 'Google_Service_Vision_OutputConfig');
class_alias(Page::class, 'Google_Service_Vision_Page');
class_alias(Paragraph::class, 'Google_Service_Vision_Paragraph');
class_alias(Position::class, 'Google_Service_Vision_Position');
class_alias(Product::class, 'Google_Service_Vision_Product');
class_alias(ProductSearchParams::class, 'Google_Service_Vision_ProductSearchParams');
class_alias(ProductSearchResults::class, 'Google_Service_Vision_ProductSearchResults');
class_alias(ProductSet::class, 'Google_Service_Vision_ProductSet');
class_alias(ProductSetPurgeConfig::class, 'Google_Service_Vision_ProductSetPurgeConfig');
class_alias(Property::class, 'Google_Service_Vision_Property');
class_alias(PurgeProductsRequest::class, 'Google_Service_Vision_PurgeProductsRequest');
class_alias(ReferenceImage::class, 'Google_Service_Vision_ReferenceImage');
class_alias(RemoveProductFromProductSetRequest::class, 'Google_Service_Vision_RemoveProductFromProductSetRequest');
class_alias(Result::class, 'Google_Service_Vision_Result');
class_alias(SafeSearchAnnotation::class, 'Google_Service_Vision_SafeSearchAnnotation');
class_alias(Status::class, 'Google_Service_Vision_Status');
class_alias(Symbol::class, 'Google_Service_Vision_Symbol');
class_alias(TextAnnotation::class, 'Google_Service_Vision_TextAnnotation');
class_alias(TextDetectionParams::class, 'Google_Service_Vision_TextDetectionParams');
class_alias(TextProperty::class, 'Google_Service_Vision_TextProperty');
class_alias(Vertex::class, 'Google_Service_Vision_Vertex');
class_alias(VisionEmpty::class, 'Google_Service_Vision_VisionEmpty');
class_alias(WebDetection::class, 'Google_Service_Vision_WebDetection');
class_alias(WebDetectionParams::class, 'Google_Service_Vision_WebDetectionParams');
class_alias(WebEntity::class, 'Google_Service_Vision_WebEntity');
class_alias(WebImage::class, 'Google_Service_Vision_WebImage');
class_alias(WebLabel::class, 'Google_Service_Vision_WebLabel');
class_alias(WebPage::class, 'Google_Service_Vision_WebPage');
class_alias(Word::class, 'Google_Service_Vision_Word');
