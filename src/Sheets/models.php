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

namespace Google\Service\Sheets;

class AddBandingRequest extends \Google\Model
{
  /** @var BandedRange */
  public $bandedRange;
  protected $bandedRangeType = BandedRange::class;
  protected $bandedRangeDataType = '';
  /** @param BandedRange */
  public function setBandedRange(BandedRange $bandedRange)
  {
    $this->bandedRange = $bandedRange;
  }
  /** @return BandedRange */
  public function getBandedRange()
  {
    return $this->bandedRange;
  }
}

class AddBandingResponse extends \Google\Model
{
  /** @var BandedRange */
  public $bandedRange;
  protected $bandedRangeType = BandedRange::class;
  protected $bandedRangeDataType = '';
  /** @param BandedRange */
  public function setBandedRange(BandedRange $bandedRange)
  {
    $this->bandedRange = $bandedRange;
  }
  /** @return BandedRange */
  public function getBandedRange()
  {
    return $this->bandedRange;
  }
}

class AddChartRequest extends \Google\Model
{
  /** @var EmbeddedChart */
  public $chart;
  protected $chartType = EmbeddedChart::class;
  protected $chartDataType = '';
  /** @param EmbeddedChart */
  public function setChart(EmbeddedChart $chart)
  {
    $this->chart = $chart;
  }
  /** @return EmbeddedChart */
  public function getChart()
  {
    return $this->chart;
  }
}

class AddChartResponse extends \Google\Model
{
  /** @var EmbeddedChart */
  public $chart;
  protected $chartType = EmbeddedChart::class;
  protected $chartDataType = '';
  /** @param EmbeddedChart */
  public function setChart(EmbeddedChart $chart)
  {
    $this->chart = $chart;
  }
  /** @return EmbeddedChart */
  public function getChart()
  {
    return $this->chart;
  }
}

class AddConditionalFormatRuleRequest extends \Google\Model
{
  /** @var int */
  public $index;
  /** @var ConditionalFormatRule */
  public $rule;
  protected $ruleType = ConditionalFormatRule::class;
  protected $ruleDataType = '';
  /** @param int */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return int */
  public function getIndex()
  {
    return $this->index;
  }
  /** @param ConditionalFormatRule */
  public function setRule(ConditionalFormatRule $rule)
  {
    $this->rule = $rule;
  }
  /** @return ConditionalFormatRule */
  public function getRule()
  {
    return $this->rule;
  }
}

class AddDataSourceRequest extends \Google\Model
{
  /** @var DataSource */
  public $dataSource;
  protected $dataSourceType = DataSource::class;
  protected $dataSourceDataType = '';
  /** @param DataSource */
  public function setDataSource(DataSource $dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /** @return DataSource */
  public function getDataSource()
  {
    return $this->dataSource;
  }
}

class AddDataSourceResponse extends \Google\Model
{
  /** @var DataExecutionStatus */
  public $dataExecutionStatus;
  /** @var DataSource */
  public $dataSource;
  protected $dataExecutionStatusType = DataExecutionStatus::class;
  protected $dataExecutionStatusDataType = '';
  protected $dataSourceType = DataSource::class;
  protected $dataSourceDataType = '';
  /** @param DataExecutionStatus */
  public function setDataExecutionStatus(DataExecutionStatus $dataExecutionStatus)
  {
    $this->dataExecutionStatus = $dataExecutionStatus;
  }
  /** @return DataExecutionStatus */
  public function getDataExecutionStatus()
  {
    return $this->dataExecutionStatus;
  }
  /** @param DataSource */
  public function setDataSource(DataSource $dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /** @return DataSource */
  public function getDataSource()
  {
    return $this->dataSource;
  }
}

class AddDimensionGroupRequest extends \Google\Model
{
  /** @var DimensionRange */
  public $range;
  protected $rangeType = DimensionRange::class;
  protected $rangeDataType = '';
  /** @param DimensionRange */
  public function setRange(DimensionRange $range)
  {
    $this->range = $range;
  }
  /** @return DimensionRange */
  public function getRange()
  {
    return $this->range;
  }
}

class AddDimensionGroupResponse extends \Google\Collection
{
  /** @var DimensionGroup[] */
  public $dimensionGroups;
  protected $collection_key = 'dimensionGroups';
  protected $dimensionGroupsType = DimensionGroup::class;
  protected $dimensionGroupsDataType = 'array';
  /** @param DimensionGroup[] */
  public function setDimensionGroups($dimensionGroups)
  {
    $this->dimensionGroups = $dimensionGroups;
  }
  /** @return DimensionGroup[] */
  public function getDimensionGroups()
  {
    return $this->dimensionGroups;
  }
}

class AddFilterViewRequest extends \Google\Model
{
  /** @var FilterView */
  public $filter;
  protected $filterType = FilterView::class;
  protected $filterDataType = '';
  /** @param FilterView */
  public function setFilter(FilterView $filter)
  {
    $this->filter = $filter;
  }
  /** @return FilterView */
  public function getFilter()
  {
    return $this->filter;
  }
}

class AddFilterViewResponse extends \Google\Model
{
  /** @var FilterView */
  public $filter;
  protected $filterType = FilterView::class;
  protected $filterDataType = '';
  /** @param FilterView */
  public function setFilter(FilterView $filter)
  {
    $this->filter = $filter;
  }
  /** @return FilterView */
  public function getFilter()
  {
    return $this->filter;
  }
}

class AddNamedRangeRequest extends \Google\Model
{
  /** @var NamedRange */
  public $namedRange;
  protected $namedRangeType = NamedRange::class;
  protected $namedRangeDataType = '';
  /** @param NamedRange */
  public function setNamedRange(NamedRange $namedRange)
  {
    $this->namedRange = $namedRange;
  }
  /** @return NamedRange */
  public function getNamedRange()
  {
    return $this->namedRange;
  }
}

class AddNamedRangeResponse extends \Google\Model
{
  /** @var NamedRange */
  public $namedRange;
  protected $namedRangeType = NamedRange::class;
  protected $namedRangeDataType = '';
  /** @param NamedRange */
  public function setNamedRange(NamedRange $namedRange)
  {
    $this->namedRange = $namedRange;
  }
  /** @return NamedRange */
  public function getNamedRange()
  {
    return $this->namedRange;
  }
}

class AddProtectedRangeRequest extends \Google\Model
{
  /** @var ProtectedRange */
  public $protectedRange;
  protected $protectedRangeType = ProtectedRange::class;
  protected $protectedRangeDataType = '';
  /** @param ProtectedRange */
  public function setProtectedRange(ProtectedRange $protectedRange)
  {
    $this->protectedRange = $protectedRange;
  }
  /** @return ProtectedRange */
  public function getProtectedRange()
  {
    return $this->protectedRange;
  }
}

class AddProtectedRangeResponse extends \Google\Model
{
  /** @var ProtectedRange */
  public $protectedRange;
  protected $protectedRangeType = ProtectedRange::class;
  protected $protectedRangeDataType = '';
  /** @param ProtectedRange */
  public function setProtectedRange(ProtectedRange $protectedRange)
  {
    $this->protectedRange = $protectedRange;
  }
  /** @return ProtectedRange */
  public function getProtectedRange()
  {
    return $this->protectedRange;
  }
}

class AddSheetRequest extends \Google\Model
{
  /** @var SheetProperties */
  public $properties;
  protected $propertiesType = SheetProperties::class;
  protected $propertiesDataType = '';
  /** @param SheetProperties */
  public function setProperties(SheetProperties $properties)
  {
    $this->properties = $properties;
  }
  /** @return SheetProperties */
  public function getProperties()
  {
    return $this->properties;
  }
}

class AddSheetResponse extends \Google\Model
{
  /** @var SheetProperties */
  public $properties;
  protected $propertiesType = SheetProperties::class;
  protected $propertiesDataType = '';
  /** @param SheetProperties */
  public function setProperties(SheetProperties $properties)
  {
    $this->properties = $properties;
  }
  /** @return SheetProperties */
  public function getProperties()
  {
    return $this->properties;
  }
}

class AddSlicerRequest extends \Google\Model
{
  /** @var Slicer */
  public $slicer;
  protected $slicerType = Slicer::class;
  protected $slicerDataType = '';
  /** @param Slicer */
  public function setSlicer(Slicer $slicer)
  {
    $this->slicer = $slicer;
  }
  /** @return Slicer */
  public function getSlicer()
  {
    return $this->slicer;
  }
}

class AddSlicerResponse extends \Google\Model
{
  /** @var Slicer */
  public $slicer;
  protected $slicerType = Slicer::class;
  protected $slicerDataType = '';
  /** @param Slicer */
  public function setSlicer(Slicer $slicer)
  {
    $this->slicer = $slicer;
  }
  /** @return Slicer */
  public function getSlicer()
  {
    return $this->slicer;
  }
}

class AppendCellsRequest extends \Google\Collection
{
  /** @var string */
  public $fields;
  /** @var RowData[] */
  public $rows;
  /** @var int */
  public $sheetId;
  protected $collection_key = 'rows';
  protected $rowsType = RowData::class;
  protected $rowsDataType = 'array';
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param RowData[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return RowData[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param int */
  public function setSheetId($sheetId)
  {
    $this->sheetId = $sheetId;
  }
  /** @return int */
  public function getSheetId()
  {
    return $this->sheetId;
  }
}

class AppendDimensionRequest extends \Google\Model
{
  /** @var string */
  public $dimension;
  /** @var int */
  public $length;
  /** @var int */
  public $sheetId;

  /** @param string */
  public function setDimension($dimension)
  {
    $this->dimension = $dimension;
  }
  /** @return string */
  public function getDimension()
  {
    return $this->dimension;
  }
  /** @param int */
  public function setLength($length)
  {
    $this->length = $length;
  }
  /** @return int */
  public function getLength()
  {
    return $this->length;
  }
  /** @param int */
  public function setSheetId($sheetId)
  {
    $this->sheetId = $sheetId;
  }
  /** @return int */
  public function getSheetId()
  {
    return $this->sheetId;
  }
}

class AppendValuesResponse extends \Google\Model
{
  /** @var string */
  public $spreadsheetId;
  /** @var string */
  public $tableRange;
  /** @var UpdateValuesResponse */
  public $updates;
  protected $updatesType = UpdateValuesResponse::class;
  protected $updatesDataType = '';
  /** @param string */
  public function setSpreadsheetId($spreadsheetId)
  {
    $this->spreadsheetId = $spreadsheetId;
  }
  /** @return string */
  public function getSpreadsheetId()
  {
    return $this->spreadsheetId;
  }
  /** @param string */
  public function setTableRange($tableRange)
  {
    $this->tableRange = $tableRange;
  }
  /** @return string */
  public function getTableRange()
  {
    return $this->tableRange;
  }
  /** @param UpdateValuesResponse */
  public function setUpdates(UpdateValuesResponse $updates)
  {
    $this->updates = $updates;
  }
  /** @return UpdateValuesResponse */
  public function getUpdates()
  {
    return $this->updates;
  }
}

class AutoFillRequest extends \Google\Model
{
  /** @var GridRange */
  public $range;
  /** @var SourceAndDestination */
  public $sourceAndDestination;
  /** @var bool */
  public $useAlternateSeries;
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  protected $sourceAndDestinationType = SourceAndDestination::class;
  protected $sourceAndDestinationDataType = '';
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
  /** @param SourceAndDestination */
  public function setSourceAndDestination(SourceAndDestination $sourceAndDestination)
  {
    $this->sourceAndDestination = $sourceAndDestination;
  }
  /** @return SourceAndDestination */
  public function getSourceAndDestination()
  {
    return $this->sourceAndDestination;
  }
  /** @param bool */
  public function setUseAlternateSeries($useAlternateSeries)
  {
    $this->useAlternateSeries = $useAlternateSeries;
  }
  /** @return bool */
  public function getUseAlternateSeries()
  {
    return $this->useAlternateSeries;
  }
}

class AutoResizeDimensionsRequest extends \Google\Model
{
  /** @var DataSourceSheetDimensionRange */
  public $dataSourceSheetDimensions;
  /** @var DimensionRange */
  public $dimensions;
  protected $dataSourceSheetDimensionsType = DataSourceSheetDimensionRange::class;
  protected $dataSourceSheetDimensionsDataType = '';
  protected $dimensionsType = DimensionRange::class;
  protected $dimensionsDataType = '';
  /** @param DataSourceSheetDimensionRange */
  public function setDataSourceSheetDimensions(DataSourceSheetDimensionRange $dataSourceSheetDimensions)
  {
    $this->dataSourceSheetDimensions = $dataSourceSheetDimensions;
  }
  /** @return DataSourceSheetDimensionRange */
  public function getDataSourceSheetDimensions()
  {
    return $this->dataSourceSheetDimensions;
  }
  /** @param DimensionRange */
  public function setDimensions(DimensionRange $dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /** @return DimensionRange */
  public function getDimensions()
  {
    return $this->dimensions;
  }
}

class BandedRange extends \Google\Model
{
  /** @var int */
  public $bandedRangeId;
  /** @var BandingProperties */
  public $columnProperties;
  /** @var GridRange */
  public $range;
  /** @var BandingProperties */
  public $rowProperties;
  protected $columnPropertiesType = BandingProperties::class;
  protected $columnPropertiesDataType = '';
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  protected $rowPropertiesType = BandingProperties::class;
  protected $rowPropertiesDataType = '';
  /** @param int */
  public function setBandedRangeId($bandedRangeId)
  {
    $this->bandedRangeId = $bandedRangeId;
  }
  /** @return int */
  public function getBandedRangeId()
  {
    return $this->bandedRangeId;
  }
  /** @param BandingProperties */
  public function setColumnProperties(BandingProperties $columnProperties)
  {
    $this->columnProperties = $columnProperties;
  }
  /** @return BandingProperties */
  public function getColumnProperties()
  {
    return $this->columnProperties;
  }
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
  /** @param BandingProperties */
  public function setRowProperties(BandingProperties $rowProperties)
  {
    $this->rowProperties = $rowProperties;
  }
  /** @return BandingProperties */
  public function getRowProperties()
  {
    return $this->rowProperties;
  }
}

class BandingProperties extends \Google\Model
{
  /** @var Color */
  public $firstBandColor;
  /** @var ColorStyle */
  public $firstBandColorStyle;
  /** @var Color */
  public $footerColor;
  /** @var ColorStyle */
  public $footerColorStyle;
  /** @var Color */
  public $headerColor;
  /** @var ColorStyle */
  public $headerColorStyle;
  /** @var Color */
  public $secondBandColor;
  /** @var ColorStyle */
  public $secondBandColorStyle;
  protected $firstBandColorType = Color::class;
  protected $firstBandColorDataType = '';
  protected $firstBandColorStyleType = ColorStyle::class;
  protected $firstBandColorStyleDataType = '';
  protected $footerColorType = Color::class;
  protected $footerColorDataType = '';
  protected $footerColorStyleType = ColorStyle::class;
  protected $footerColorStyleDataType = '';
  protected $headerColorType = Color::class;
  protected $headerColorDataType = '';
  protected $headerColorStyleType = ColorStyle::class;
  protected $headerColorStyleDataType = '';
  protected $secondBandColorType = Color::class;
  protected $secondBandColorDataType = '';
  protected $secondBandColorStyleType = ColorStyle::class;
  protected $secondBandColorStyleDataType = '';
  /** @param Color */
  public function setFirstBandColor(Color $firstBandColor)
  {
    $this->firstBandColor = $firstBandColor;
  }
  /** @return Color */
  public function getFirstBandColor()
  {
    return $this->firstBandColor;
  }
  /** @param ColorStyle */
  public function setFirstBandColorStyle(ColorStyle $firstBandColorStyle)
  {
    $this->firstBandColorStyle = $firstBandColorStyle;
  }
  /** @return ColorStyle */
  public function getFirstBandColorStyle()
  {
    return $this->firstBandColorStyle;
  }
  /** @param Color */
  public function setFooterColor(Color $footerColor)
  {
    $this->footerColor = $footerColor;
  }
  /** @return Color */
  public function getFooterColor()
  {
    return $this->footerColor;
  }
  /** @param ColorStyle */
  public function setFooterColorStyle(ColorStyle $footerColorStyle)
  {
    $this->footerColorStyle = $footerColorStyle;
  }
  /** @return ColorStyle */
  public function getFooterColorStyle()
  {
    return $this->footerColorStyle;
  }
  /** @param Color */
  public function setHeaderColor(Color $headerColor)
  {
    $this->headerColor = $headerColor;
  }
  /** @return Color */
  public function getHeaderColor()
  {
    return $this->headerColor;
  }
  /** @param ColorStyle */
  public function setHeaderColorStyle(ColorStyle $headerColorStyle)
  {
    $this->headerColorStyle = $headerColorStyle;
  }
  /** @return ColorStyle */
  public function getHeaderColorStyle()
  {
    return $this->headerColorStyle;
  }
  /** @param Color */
  public function setSecondBandColor(Color $secondBandColor)
  {
    $this->secondBandColor = $secondBandColor;
  }
  /** @return Color */
  public function getSecondBandColor()
  {
    return $this->secondBandColor;
  }
  /** @param ColorStyle */
  public function setSecondBandColorStyle(ColorStyle $secondBandColorStyle)
  {
    $this->secondBandColorStyle = $secondBandColorStyle;
  }
  /** @return ColorStyle */
  public function getSecondBandColorStyle()
  {
    return $this->secondBandColorStyle;
  }
}

class BaselineValueFormat extends \Google\Model
{
  /** @var string */
  public $comparisonType;
  /** @var string */
  public $description;
  /** @var Color */
  public $negativeColor;
  /** @var ColorStyle */
  public $negativeColorStyle;
  /** @var TextPosition */
  public $position;
  /** @var Color */
  public $positiveColor;
  /** @var ColorStyle */
  public $positiveColorStyle;
  /** @var TextFormat */
  public $textFormat;
  protected $negativeColorType = Color::class;
  protected $negativeColorDataType = '';
  protected $negativeColorStyleType = ColorStyle::class;
  protected $negativeColorStyleDataType = '';
  protected $positionType = TextPosition::class;
  protected $positionDataType = '';
  protected $positiveColorType = Color::class;
  protected $positiveColorDataType = '';
  protected $positiveColorStyleType = ColorStyle::class;
  protected $positiveColorStyleDataType = '';
  protected $textFormatType = TextFormat::class;
  protected $textFormatDataType = '';
  /** @param string */
  public function setComparisonType($comparisonType)
  {
    $this->comparisonType = $comparisonType;
  }
  /** @return string */
  public function getComparisonType()
  {
    return $this->comparisonType;
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
  /** @param Color */
  public function setNegativeColor(Color $negativeColor)
  {
    $this->negativeColor = $negativeColor;
  }
  /** @return Color */
  public function getNegativeColor()
  {
    return $this->negativeColor;
  }
  /** @param ColorStyle */
  public function setNegativeColorStyle(ColorStyle $negativeColorStyle)
  {
    $this->negativeColorStyle = $negativeColorStyle;
  }
  /** @return ColorStyle */
  public function getNegativeColorStyle()
  {
    return $this->negativeColorStyle;
  }
  /** @param TextPosition */
  public function setPosition(TextPosition $position)
  {
    $this->position = $position;
  }
  /** @return TextPosition */
  public function getPosition()
  {
    return $this->position;
  }
  /** @param Color */
  public function setPositiveColor(Color $positiveColor)
  {
    $this->positiveColor = $positiveColor;
  }
  /** @return Color */
  public function getPositiveColor()
  {
    return $this->positiveColor;
  }
  /** @param ColorStyle */
  public function setPositiveColorStyle(ColorStyle $positiveColorStyle)
  {
    $this->positiveColorStyle = $positiveColorStyle;
  }
  /** @return ColorStyle */
  public function getPositiveColorStyle()
  {
    return $this->positiveColorStyle;
  }
  /** @param TextFormat */
  public function setTextFormat(TextFormat $textFormat)
  {
    $this->textFormat = $textFormat;
  }
  /** @return TextFormat */
  public function getTextFormat()
  {
    return $this->textFormat;
  }
}

class BasicChartAxis extends \Google\Model
{
  /** @var TextFormat */
  public $format;
  /** @var string */
  public $position;
  /** @var string */
  public $title;
  /** @var TextPosition */
  public $titleTextPosition;
  /** @var ChartAxisViewWindowOptions */
  public $viewWindowOptions;
  protected $formatType = TextFormat::class;
  protected $formatDataType = '';
  protected $titleTextPositionType = TextPosition::class;
  protected $titleTextPositionDataType = '';
  protected $viewWindowOptionsType = ChartAxisViewWindowOptions::class;
  protected $viewWindowOptionsDataType = '';
  /** @param TextFormat */
  public function setFormat(TextFormat $format)
  {
    $this->format = $format;
  }
  /** @return TextFormat */
  public function getFormat()
  {
    return $this->format;
  }
  /** @param string */
  public function setPosition($position)
  {
    $this->position = $position;
  }
  /** @return string */
  public function getPosition()
  {
    return $this->position;
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
  /** @param TextPosition */
  public function setTitleTextPosition(TextPosition $titleTextPosition)
  {
    $this->titleTextPosition = $titleTextPosition;
  }
  /** @return TextPosition */
  public function getTitleTextPosition()
  {
    return $this->titleTextPosition;
  }
  /** @param ChartAxisViewWindowOptions */
  public function setViewWindowOptions(ChartAxisViewWindowOptions $viewWindowOptions)
  {
    $this->viewWindowOptions = $viewWindowOptions;
  }
  /** @return ChartAxisViewWindowOptions */
  public function getViewWindowOptions()
  {
    return $this->viewWindowOptions;
  }
}

class BasicChartDomain extends \Google\Model
{
  /** @var ChartData */
  public $domain;
  /** @var bool */
  public $reversed;
  protected $domainType = ChartData::class;
  protected $domainDataType = '';
  /** @param ChartData */
  public function setDomain(ChartData $domain)
  {
    $this->domain = $domain;
  }
  /** @return ChartData */
  public function getDomain()
  {
    return $this->domain;
  }
  /** @param bool */
  public function setReversed($reversed)
  {
    $this->reversed = $reversed;
  }
  /** @return bool */
  public function getReversed()
  {
    return $this->reversed;
  }
}

class BasicChartSeries extends \Google\Collection
{
  /** @var Color */
  public $color;
  /** @var ColorStyle */
  public $colorStyle;
  /** @var DataLabel */
  public $dataLabel;
  /** @var LineStyle */
  public $lineStyle;
  /** @var PointStyle */
  public $pointStyle;
  /** @var ChartData */
  public $series;
  /** @var BasicSeriesDataPointStyleOverride[] */
  public $styleOverrides;
  /** @var string */
  public $targetAxis;
  /** @var string */
  public $type;
  protected $collection_key = 'styleOverrides';
  protected $colorType = Color::class;
  protected $colorDataType = '';
  protected $colorStyleType = ColorStyle::class;
  protected $colorStyleDataType = '';
  protected $dataLabelType = DataLabel::class;
  protected $dataLabelDataType = '';
  protected $lineStyleType = LineStyle::class;
  protected $lineStyleDataType = '';
  protected $pointStyleType = PointStyle::class;
  protected $pointStyleDataType = '';
  protected $seriesType = ChartData::class;
  protected $seriesDataType = '';
  protected $styleOverridesType = BasicSeriesDataPointStyleOverride::class;
  protected $styleOverridesDataType = 'array';
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
  /** @param ColorStyle */
  public function setColorStyle(ColorStyle $colorStyle)
  {
    $this->colorStyle = $colorStyle;
  }
  /** @return ColorStyle */
  public function getColorStyle()
  {
    return $this->colorStyle;
  }
  /** @param DataLabel */
  public function setDataLabel(DataLabel $dataLabel)
  {
    $this->dataLabel = $dataLabel;
  }
  /** @return DataLabel */
  public function getDataLabel()
  {
    return $this->dataLabel;
  }
  /** @param LineStyle */
  public function setLineStyle(LineStyle $lineStyle)
  {
    $this->lineStyle = $lineStyle;
  }
  /** @return LineStyle */
  public function getLineStyle()
  {
    return $this->lineStyle;
  }
  /** @param PointStyle */
  public function setPointStyle(PointStyle $pointStyle)
  {
    $this->pointStyle = $pointStyle;
  }
  /** @return PointStyle */
  public function getPointStyle()
  {
    return $this->pointStyle;
  }
  /** @param ChartData */
  public function setSeries(ChartData $series)
  {
    $this->series = $series;
  }
  /** @return ChartData */
  public function getSeries()
  {
    return $this->series;
  }
  /** @param BasicSeriesDataPointStyleOverride[] */
  public function setStyleOverrides($styleOverrides)
  {
    $this->styleOverrides = $styleOverrides;
  }
  /** @return BasicSeriesDataPointStyleOverride[] */
  public function getStyleOverrides()
  {
    return $this->styleOverrides;
  }
  /** @param string */
  public function setTargetAxis($targetAxis)
  {
    $this->targetAxis = $targetAxis;
  }
  /** @return string */
  public function getTargetAxis()
  {
    return $this->targetAxis;
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

class BasicChartSpec extends \Google\Collection
{
  /** @var BasicChartAxis[] */
  public $axis;
  /** @var string */
  public $chartType;
  /** @var string */
  public $compareMode;
  /** @var BasicChartDomain[] */
  public $domains;
  /** @var int */
  public $headerCount;
  /** @var bool */
  public $interpolateNulls;
  /** @var string */
  public $legendPosition;
  /** @var bool */
  public $lineSmoothing;
  /** @var BasicChartSeries[] */
  public $series;
  /** @var string */
  public $stackedType;
  /** @var bool */
  public $threeDimensional;
  /** @var DataLabel */
  public $totalDataLabel;
  protected $collection_key = 'series';
  protected $axisType = BasicChartAxis::class;
  protected $axisDataType = 'array';
  protected $domainsType = BasicChartDomain::class;
  protected $domainsDataType = 'array';
  protected $seriesType = BasicChartSeries::class;
  protected $seriesDataType = 'array';
  protected $totalDataLabelType = DataLabel::class;
  protected $totalDataLabelDataType = '';
  /** @param BasicChartAxis[] */
  public function setAxis($axis)
  {
    $this->axis = $axis;
  }
  /** @return BasicChartAxis[] */
  public function getAxis()
  {
    return $this->axis;
  }
  /** @param string */
  public function setChartType($chartType)
  {
    $this->chartType = $chartType;
  }
  /** @return string */
  public function getChartType()
  {
    return $this->chartType;
  }
  /** @param string */
  public function setCompareMode($compareMode)
  {
    $this->compareMode = $compareMode;
  }
  /** @return string */
  public function getCompareMode()
  {
    return $this->compareMode;
  }
  /** @param BasicChartDomain[] */
  public function setDomains($domains)
  {
    $this->domains = $domains;
  }
  /** @return BasicChartDomain[] */
  public function getDomains()
  {
    return $this->domains;
  }
  /** @param int */
  public function setHeaderCount($headerCount)
  {
    $this->headerCount = $headerCount;
  }
  /** @return int */
  public function getHeaderCount()
  {
    return $this->headerCount;
  }
  /** @param bool */
  public function setInterpolateNulls($interpolateNulls)
  {
    $this->interpolateNulls = $interpolateNulls;
  }
  /** @return bool */
  public function getInterpolateNulls()
  {
    return $this->interpolateNulls;
  }
  /** @param string */
  public function setLegendPosition($legendPosition)
  {
    $this->legendPosition = $legendPosition;
  }
  /** @return string */
  public function getLegendPosition()
  {
    return $this->legendPosition;
  }
  /** @param bool */
  public function setLineSmoothing($lineSmoothing)
  {
    $this->lineSmoothing = $lineSmoothing;
  }
  /** @return bool */
  public function getLineSmoothing()
  {
    return $this->lineSmoothing;
  }
  /** @param BasicChartSeries[] */
  public function setSeries($series)
  {
    $this->series = $series;
  }
  /** @return BasicChartSeries[] */
  public function getSeries()
  {
    return $this->series;
  }
  /** @param string */
  public function setStackedType($stackedType)
  {
    $this->stackedType = $stackedType;
  }
  /** @return string */
  public function getStackedType()
  {
    return $this->stackedType;
  }
  /** @param bool */
  public function setThreeDimensional($threeDimensional)
  {
    $this->threeDimensional = $threeDimensional;
  }
  /** @return bool */
  public function getThreeDimensional()
  {
    return $this->threeDimensional;
  }
  /** @param DataLabel */
  public function setTotalDataLabel(DataLabel $totalDataLabel)
  {
    $this->totalDataLabel = $totalDataLabel;
  }
  /** @return DataLabel */
  public function getTotalDataLabel()
  {
    return $this->totalDataLabel;
  }
}

class BasicFilter extends \Google\Collection
{
  /** @var FilterCriteria[] */
  public $criteria;
  /** @var FilterSpec[] */
  public $filterSpecs;
  /** @var GridRange */
  public $range;
  /** @var SortSpec[] */
  public $sortSpecs;
  protected $collection_key = 'sortSpecs';
  protected $criteriaType = FilterCriteria::class;
  protected $criteriaDataType = 'map';
  protected $filterSpecsType = FilterSpec::class;
  protected $filterSpecsDataType = 'array';
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  protected $sortSpecsType = SortSpec::class;
  protected $sortSpecsDataType = 'array';
  /** @param FilterCriteria[] */
  public function setCriteria($criteria)
  {
    $this->criteria = $criteria;
  }
  /** @return FilterCriteria[] */
  public function getCriteria()
  {
    return $this->criteria;
  }
  /** @param FilterSpec[] */
  public function setFilterSpecs($filterSpecs)
  {
    $this->filterSpecs = $filterSpecs;
  }
  /** @return FilterSpec[] */
  public function getFilterSpecs()
  {
    return $this->filterSpecs;
  }
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
  /** @param SortSpec[] */
  public function setSortSpecs($sortSpecs)
  {
    $this->sortSpecs = $sortSpecs;
  }
  /** @return SortSpec[] */
  public function getSortSpecs()
  {
    return $this->sortSpecs;
  }
}

class BasicSeriesDataPointStyleOverride extends \Google\Model
{
  /** @var Color */
  public $color;
  /** @var ColorStyle */
  public $colorStyle;
  /** @var int */
  public $index;
  /** @var PointStyle */
  public $pointStyle;
  protected $colorType = Color::class;
  protected $colorDataType = '';
  protected $colorStyleType = ColorStyle::class;
  protected $colorStyleDataType = '';
  protected $pointStyleType = PointStyle::class;
  protected $pointStyleDataType = '';
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
  /** @param ColorStyle */
  public function setColorStyle(ColorStyle $colorStyle)
  {
    $this->colorStyle = $colorStyle;
  }
  /** @return ColorStyle */
  public function getColorStyle()
  {
    return $this->colorStyle;
  }
  /** @param int */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return int */
  public function getIndex()
  {
    return $this->index;
  }
  /** @param PointStyle */
  public function setPointStyle(PointStyle $pointStyle)
  {
    $this->pointStyle = $pointStyle;
  }
  /** @return PointStyle */
  public function getPointStyle()
  {
    return $this->pointStyle;
  }
}

class BatchClearValuesByDataFilterRequest extends \Google\Collection
{
  /** @var DataFilter[] */
  public $dataFilters;
  protected $collection_key = 'dataFilters';
  protected $dataFiltersType = DataFilter::class;
  protected $dataFiltersDataType = 'array';
  /** @param DataFilter[] */
  public function setDataFilters($dataFilters)
  {
    $this->dataFilters = $dataFilters;
  }
  /** @return DataFilter[] */
  public function getDataFilters()
  {
    return $this->dataFilters;
  }
}

class BatchClearValuesByDataFilterResponse extends \Google\Collection
{
  /** @var string[] */
  public $clearedRanges;
  /** @var string */
  public $spreadsheetId;
  protected $collection_key = 'clearedRanges';
  /** @param string[] */
  public function setClearedRanges($clearedRanges)
  {
    $this->clearedRanges = $clearedRanges;
  }
  /** @return string[] */
  public function getClearedRanges()
  {
    return $this->clearedRanges;
  }
  /** @param string */
  public function setSpreadsheetId($spreadsheetId)
  {
    $this->spreadsheetId = $spreadsheetId;
  }
  /** @return string */
  public function getSpreadsheetId()
  {
    return $this->spreadsheetId;
  }
}

class BatchClearValuesRequest extends \Google\Collection
{
  /** @var string[] */
  public $ranges;
  protected $collection_key = 'ranges';
  /** @param string[] */
  public function setRanges($ranges)
  {
    $this->ranges = $ranges;
  }
  /** @return string[] */
  public function getRanges()
  {
    return $this->ranges;
  }
}

class BatchClearValuesResponse extends \Google\Collection
{
  /** @var string[] */
  public $clearedRanges;
  /** @var string */
  public $spreadsheetId;
  protected $collection_key = 'clearedRanges';
  /** @param string[] */
  public function setClearedRanges($clearedRanges)
  {
    $this->clearedRanges = $clearedRanges;
  }
  /** @return string[] */
  public function getClearedRanges()
  {
    return $this->clearedRanges;
  }
  /** @param string */
  public function setSpreadsheetId($spreadsheetId)
  {
    $this->spreadsheetId = $spreadsheetId;
  }
  /** @return string */
  public function getSpreadsheetId()
  {
    return $this->spreadsheetId;
  }
}

class BatchGetValuesByDataFilterRequest extends \Google\Collection
{
  /** @var DataFilter[] */
  public $dataFilters;
  /** @var string */
  public $dateTimeRenderOption;
  /** @var string */
  public $majorDimension;
  /** @var string */
  public $valueRenderOption;
  protected $collection_key = 'dataFilters';
  protected $dataFiltersType = DataFilter::class;
  protected $dataFiltersDataType = 'array';
  /** @param DataFilter[] */
  public function setDataFilters($dataFilters)
  {
    $this->dataFilters = $dataFilters;
  }
  /** @return DataFilter[] */
  public function getDataFilters()
  {
    return $this->dataFilters;
  }
  /** @param string */
  public function setDateTimeRenderOption($dateTimeRenderOption)
  {
    $this->dateTimeRenderOption = $dateTimeRenderOption;
  }
  /** @return string */
  public function getDateTimeRenderOption()
  {
    return $this->dateTimeRenderOption;
  }
  /** @param string */
  public function setMajorDimension($majorDimension)
  {
    $this->majorDimension = $majorDimension;
  }
  /** @return string */
  public function getMajorDimension()
  {
    return $this->majorDimension;
  }
  /** @param string */
  public function setValueRenderOption($valueRenderOption)
  {
    $this->valueRenderOption = $valueRenderOption;
  }
  /** @return string */
  public function getValueRenderOption()
  {
    return $this->valueRenderOption;
  }
}

class BatchGetValuesByDataFilterResponse extends \Google\Collection
{
  /** @var string */
  public $spreadsheetId;
  /** @var MatchedValueRange[] */
  public $valueRanges;
  protected $collection_key = 'valueRanges';
  protected $valueRangesType = MatchedValueRange::class;
  protected $valueRangesDataType = 'array';
  /** @param string */
  public function setSpreadsheetId($spreadsheetId)
  {
    $this->spreadsheetId = $spreadsheetId;
  }
  /** @return string */
  public function getSpreadsheetId()
  {
    return $this->spreadsheetId;
  }
  /** @param MatchedValueRange[] */
  public function setValueRanges($valueRanges)
  {
    $this->valueRanges = $valueRanges;
  }
  /** @return MatchedValueRange[] */
  public function getValueRanges()
  {
    return $this->valueRanges;
  }
}

class BatchGetValuesResponse extends \Google\Collection
{
  /** @var string */
  public $spreadsheetId;
  /** @var ValueRange[] */
  public $valueRanges;
  protected $collection_key = 'valueRanges';
  protected $valueRangesType = ValueRange::class;
  protected $valueRangesDataType = 'array';
  /** @param string */
  public function setSpreadsheetId($spreadsheetId)
  {
    $this->spreadsheetId = $spreadsheetId;
  }
  /** @return string */
  public function getSpreadsheetId()
  {
    return $this->spreadsheetId;
  }
  /** @param ValueRange[] */
  public function setValueRanges($valueRanges)
  {
    $this->valueRanges = $valueRanges;
  }
  /** @return ValueRange[] */
  public function getValueRanges()
  {
    return $this->valueRanges;
  }
}

class BatchUpdateSpreadsheetRequest extends \Google\Collection
{
  /** @var bool */
  public $includeSpreadsheetInResponse;
  /** @var Request[] */
  public $requests;
  /** @var bool */
  public $responseIncludeGridData;
  /** @var string[] */
  public $responseRanges;
  protected $collection_key = 'responseRanges';
  protected $requestsType = Request::class;
  protected $requestsDataType = 'array';
  /** @param bool */
  public function setIncludeSpreadsheetInResponse($includeSpreadsheetInResponse)
  {
    $this->includeSpreadsheetInResponse = $includeSpreadsheetInResponse;
  }
  /** @return bool */
  public function getIncludeSpreadsheetInResponse()
  {
    return $this->includeSpreadsheetInResponse;
  }
  /** @param Request[] */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /** @return Request[] */
  public function getRequests()
  {
    return $this->requests;
  }
  /** @param bool */
  public function setResponseIncludeGridData($responseIncludeGridData)
  {
    $this->responseIncludeGridData = $responseIncludeGridData;
  }
  /** @return bool */
  public function getResponseIncludeGridData()
  {
    return $this->responseIncludeGridData;
  }
  /** @param string[] */
  public function setResponseRanges($responseRanges)
  {
    $this->responseRanges = $responseRanges;
  }
  /** @return string[] */
  public function getResponseRanges()
  {
    return $this->responseRanges;
  }
}

class BatchUpdateSpreadsheetResponse extends \Google\Collection
{
  /** @var Response[] */
  public $replies;
  /** @var string */
  public $spreadsheetId;
  /** @var Spreadsheet */
  public $updatedSpreadsheet;
  protected $collection_key = 'replies';
  protected $repliesType = Response::class;
  protected $repliesDataType = 'array';
  protected $updatedSpreadsheetType = Spreadsheet::class;
  protected $updatedSpreadsheetDataType = '';
  /** @param Response[] */
  public function setReplies($replies)
  {
    $this->replies = $replies;
  }
  /** @return Response[] */
  public function getReplies()
  {
    return $this->replies;
  }
  /** @param string */
  public function setSpreadsheetId($spreadsheetId)
  {
    $this->spreadsheetId = $spreadsheetId;
  }
  /** @return string */
  public function getSpreadsheetId()
  {
    return $this->spreadsheetId;
  }
  /** @param Spreadsheet */
  public function setUpdatedSpreadsheet(Spreadsheet $updatedSpreadsheet)
  {
    $this->updatedSpreadsheet = $updatedSpreadsheet;
  }
  /** @return Spreadsheet */
  public function getUpdatedSpreadsheet()
  {
    return $this->updatedSpreadsheet;
  }
}

class BatchUpdateValuesByDataFilterRequest extends \Google\Collection
{
  /** @var DataFilterValueRange[] */
  public $data;
  /** @var bool */
  public $includeValuesInResponse;
  /** @var string */
  public $responseDateTimeRenderOption;
  /** @var string */
  public $responseValueRenderOption;
  /** @var string */
  public $valueInputOption;
  protected $collection_key = 'data';
  protected $dataType = DataFilterValueRange::class;
  protected $dataDataType = 'array';
  /** @param DataFilterValueRange[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return DataFilterValueRange[] */
  public function getData()
  {
    return $this->data;
  }
  /** @param bool */
  public function setIncludeValuesInResponse($includeValuesInResponse)
  {
    $this->includeValuesInResponse = $includeValuesInResponse;
  }
  /** @return bool */
  public function getIncludeValuesInResponse()
  {
    return $this->includeValuesInResponse;
  }
  /** @param string */
  public function setResponseDateTimeRenderOption($responseDateTimeRenderOption)
  {
    $this->responseDateTimeRenderOption = $responseDateTimeRenderOption;
  }
  /** @return string */
  public function getResponseDateTimeRenderOption()
  {
    return $this->responseDateTimeRenderOption;
  }
  /** @param string */
  public function setResponseValueRenderOption($responseValueRenderOption)
  {
    $this->responseValueRenderOption = $responseValueRenderOption;
  }
  /** @return string */
  public function getResponseValueRenderOption()
  {
    return $this->responseValueRenderOption;
  }
  /** @param string */
  public function setValueInputOption($valueInputOption)
  {
    $this->valueInputOption = $valueInputOption;
  }
  /** @return string */
  public function getValueInputOption()
  {
    return $this->valueInputOption;
  }
}

class BatchUpdateValuesByDataFilterResponse extends \Google\Collection
{
  /** @var UpdateValuesByDataFilterResponse[] */
  public $responses;
  /** @var string */
  public $spreadsheetId;
  /** @var int */
  public $totalUpdatedCells;
  /** @var int */
  public $totalUpdatedColumns;
  /** @var int */
  public $totalUpdatedRows;
  /** @var int */
  public $totalUpdatedSheets;
  protected $collection_key = 'responses';
  protected $responsesType = UpdateValuesByDataFilterResponse::class;
  protected $responsesDataType = 'array';
  /** @param UpdateValuesByDataFilterResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return UpdateValuesByDataFilterResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
  /** @param string */
  public function setSpreadsheetId($spreadsheetId)
  {
    $this->spreadsheetId = $spreadsheetId;
  }
  /** @return string */
  public function getSpreadsheetId()
  {
    return $this->spreadsheetId;
  }
  /** @param int */
  public function setTotalUpdatedCells($totalUpdatedCells)
  {
    $this->totalUpdatedCells = $totalUpdatedCells;
  }
  /** @return int */
  public function getTotalUpdatedCells()
  {
    return $this->totalUpdatedCells;
  }
  /** @param int */
  public function setTotalUpdatedColumns($totalUpdatedColumns)
  {
    $this->totalUpdatedColumns = $totalUpdatedColumns;
  }
  /** @return int */
  public function getTotalUpdatedColumns()
  {
    return $this->totalUpdatedColumns;
  }
  /** @param int */
  public function setTotalUpdatedRows($totalUpdatedRows)
  {
    $this->totalUpdatedRows = $totalUpdatedRows;
  }
  /** @return int */
  public function getTotalUpdatedRows()
  {
    return $this->totalUpdatedRows;
  }
  /** @param int */
  public function setTotalUpdatedSheets($totalUpdatedSheets)
  {
    $this->totalUpdatedSheets = $totalUpdatedSheets;
  }
  /** @return int */
  public function getTotalUpdatedSheets()
  {
    return $this->totalUpdatedSheets;
  }
}

class BatchUpdateValuesRequest extends \Google\Collection
{
  /** @var ValueRange[] */
  public $data;
  /** @var bool */
  public $includeValuesInResponse;
  /** @var string */
  public $responseDateTimeRenderOption;
  /** @var string */
  public $responseValueRenderOption;
  /** @var string */
  public $valueInputOption;
  protected $collection_key = 'data';
  protected $dataType = ValueRange::class;
  protected $dataDataType = 'array';
  /** @param ValueRange[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return ValueRange[] */
  public function getData()
  {
    return $this->data;
  }
  /** @param bool */
  public function setIncludeValuesInResponse($includeValuesInResponse)
  {
    $this->includeValuesInResponse = $includeValuesInResponse;
  }
  /** @return bool */
  public function getIncludeValuesInResponse()
  {
    return $this->includeValuesInResponse;
  }
  /** @param string */
  public function setResponseDateTimeRenderOption($responseDateTimeRenderOption)
  {
    $this->responseDateTimeRenderOption = $responseDateTimeRenderOption;
  }
  /** @return string */
  public function getResponseDateTimeRenderOption()
  {
    return $this->responseDateTimeRenderOption;
  }
  /** @param string */
  public function setResponseValueRenderOption($responseValueRenderOption)
  {
    $this->responseValueRenderOption = $responseValueRenderOption;
  }
  /** @return string */
  public function getResponseValueRenderOption()
  {
    return $this->responseValueRenderOption;
  }
  /** @param string */
  public function setValueInputOption($valueInputOption)
  {
    $this->valueInputOption = $valueInputOption;
  }
  /** @return string */
  public function getValueInputOption()
  {
    return $this->valueInputOption;
  }
}

class BatchUpdateValuesResponse extends \Google\Collection
{
  /** @var UpdateValuesResponse[] */
  public $responses;
  /** @var string */
  public $spreadsheetId;
  /** @var int */
  public $totalUpdatedCells;
  /** @var int */
  public $totalUpdatedColumns;
  /** @var int */
  public $totalUpdatedRows;
  /** @var int */
  public $totalUpdatedSheets;
  protected $collection_key = 'responses';
  protected $responsesType = UpdateValuesResponse::class;
  protected $responsesDataType = 'array';
  /** @param UpdateValuesResponse[] */
  public function setResponses($responses)
  {
    $this->responses = $responses;
  }
  /** @return UpdateValuesResponse[] */
  public function getResponses()
  {
    return $this->responses;
  }
  /** @param string */
  public function setSpreadsheetId($spreadsheetId)
  {
    $this->spreadsheetId = $spreadsheetId;
  }
  /** @return string */
  public function getSpreadsheetId()
  {
    return $this->spreadsheetId;
  }
  /** @param int */
  public function setTotalUpdatedCells($totalUpdatedCells)
  {
    $this->totalUpdatedCells = $totalUpdatedCells;
  }
  /** @return int */
  public function getTotalUpdatedCells()
  {
    return $this->totalUpdatedCells;
  }
  /** @param int */
  public function setTotalUpdatedColumns($totalUpdatedColumns)
  {
    $this->totalUpdatedColumns = $totalUpdatedColumns;
  }
  /** @return int */
  public function getTotalUpdatedColumns()
  {
    return $this->totalUpdatedColumns;
  }
  /** @param int */
  public function setTotalUpdatedRows($totalUpdatedRows)
  {
    $this->totalUpdatedRows = $totalUpdatedRows;
  }
  /** @return int */
  public function getTotalUpdatedRows()
  {
    return $this->totalUpdatedRows;
  }
  /** @param int */
  public function setTotalUpdatedSheets($totalUpdatedSheets)
  {
    $this->totalUpdatedSheets = $totalUpdatedSheets;
  }
  /** @return int */
  public function getTotalUpdatedSheets()
  {
    return $this->totalUpdatedSheets;
  }
}

class BigQueryDataSourceSpec extends \Google\Model
{
  /** @var string */
  public $projectId;
  /** @var BigQueryQuerySpec */
  public $querySpec;
  /** @var BigQueryTableSpec */
  public $tableSpec;
  protected $querySpecType = BigQueryQuerySpec::class;
  protected $querySpecDataType = '';
  protected $tableSpecType = BigQueryTableSpec::class;
  protected $tableSpecDataType = '';
  /** @param string */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /** @return string */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /** @param BigQueryQuerySpec */
  public function setQuerySpec(BigQueryQuerySpec $querySpec)
  {
    $this->querySpec = $querySpec;
  }
  /** @return BigQueryQuerySpec */
  public function getQuerySpec()
  {
    return $this->querySpec;
  }
  /** @param BigQueryTableSpec */
  public function setTableSpec(BigQueryTableSpec $tableSpec)
  {
    $this->tableSpec = $tableSpec;
  }
  /** @return BigQueryTableSpec */
  public function getTableSpec()
  {
    return $this->tableSpec;
  }
}

class BigQueryQuerySpec extends \Google\Model
{
  /** @var string */
  public $rawQuery;

  /** @param string */
  public function setRawQuery($rawQuery)
  {
    $this->rawQuery = $rawQuery;
  }
  /** @return string */
  public function getRawQuery()
  {
    return $this->rawQuery;
  }
}

class BigQueryTableSpec extends \Google\Model
{
  /** @var string */
  public $datasetId;
  /** @var string */
  public $tableId;
  /** @var string */
  public $tableProjectId;

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
  /** @param string */
  public function setTableId($tableId)
  {
    $this->tableId = $tableId;
  }
  /** @return string */
  public function getTableId()
  {
    return $this->tableId;
  }
  /** @param string */
  public function setTableProjectId($tableProjectId)
  {
    $this->tableProjectId = $tableProjectId;
  }
  /** @return string */
  public function getTableProjectId()
  {
    return $this->tableProjectId;
  }
}

class BooleanCondition extends \Google\Collection
{
  /** @var string */
  public $type;
  /** @var ConditionValue[] */
  public $values;
  protected $collection_key = 'values';
  protected $valuesType = ConditionValue::class;
  protected $valuesDataType = 'array';
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
  /** @param ConditionValue[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return ConditionValue[] */
  public function getValues()
  {
    return $this->values;
  }
}

class BooleanRule extends \Google\Model
{
  /** @var BooleanCondition */
  public $condition;
  /** @var CellFormat */
  public $format;
  protected $conditionType = BooleanCondition::class;
  protected $conditionDataType = '';
  protected $formatType = CellFormat::class;
  protected $formatDataType = '';
  /** @param BooleanCondition */
  public function setCondition(BooleanCondition $condition)
  {
    $this->condition = $condition;
  }
  /** @return BooleanCondition */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param CellFormat */
  public function setFormat(CellFormat $format)
  {
    $this->format = $format;
  }
  /** @return CellFormat */
  public function getFormat()
  {
    return $this->format;
  }
}

class Border extends \Google\Model
{
  /** @var Color */
  public $color;
  /** @var ColorStyle */
  public $colorStyle;
  /** @var string */
  public $style;
  /** @var int */
  public $width;
  protected $colorType = Color::class;
  protected $colorDataType = '';
  protected $colorStyleType = ColorStyle::class;
  protected $colorStyleDataType = '';
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
  /** @param ColorStyle */
  public function setColorStyle(ColorStyle $colorStyle)
  {
    $this->colorStyle = $colorStyle;
  }
  /** @return ColorStyle */
  public function getColorStyle()
  {
    return $this->colorStyle;
  }
  /** @param string */
  public function setStyle($style)
  {
    $this->style = $style;
  }
  /** @return string */
  public function getStyle()
  {
    return $this->style;
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

class Borders extends \Google\Model
{
  /** @var Border */
  public $bottom;
  /** @var Border */
  public $left;
  /** @var Border */
  public $right;
  /** @var Border */
  public $top;
  protected $bottomType = Border::class;
  protected $bottomDataType = '';
  protected $leftType = Border::class;
  protected $leftDataType = '';
  protected $rightType = Border::class;
  protected $rightDataType = '';
  protected $topType = Border::class;
  protected $topDataType = '';
  /** @param Border */
  public function setBottom(Border $bottom)
  {
    $this->bottom = $bottom;
  }
  /** @return Border */
  public function getBottom()
  {
    return $this->bottom;
  }
  /** @param Border */
  public function setLeft(Border $left)
  {
    $this->left = $left;
  }
  /** @return Border */
  public function getLeft()
  {
    return $this->left;
  }
  /** @param Border */
  public function setRight(Border $right)
  {
    $this->right = $right;
  }
  /** @return Border */
  public function getRight()
  {
    return $this->right;
  }
  /** @param Border */
  public function setTop(Border $top)
  {
    $this->top = $top;
  }
  /** @return Border */
  public function getTop()
  {
    return $this->top;
  }
}

class BubbleChartSpec extends \Google\Model
{
  /** @var Color */
  public $bubbleBorderColor;
  /** @var ColorStyle */
  public $bubbleBorderColorStyle;
  /** @var ChartData */
  public $bubbleLabels;
  /** @var int */
  public $bubbleMaxRadiusSize;
  /** @var int */
  public $bubbleMinRadiusSize;
  /** @var float */
  public $bubbleOpacity;
  /** @var ChartData */
  public $bubbleSizes;
  /** @var TextFormat */
  public $bubbleTextStyle;
  /** @var ChartData */
  public $domain;
  /** @var ChartData */
  public $groupIds;
  /** @var string */
  public $legendPosition;
  /** @var ChartData */
  public $series;
  protected $bubbleBorderColorType = Color::class;
  protected $bubbleBorderColorDataType = '';
  protected $bubbleBorderColorStyleType = ColorStyle::class;
  protected $bubbleBorderColorStyleDataType = '';
  protected $bubbleLabelsType = ChartData::class;
  protected $bubbleLabelsDataType = '';
  protected $bubbleSizesType = ChartData::class;
  protected $bubbleSizesDataType = '';
  protected $bubbleTextStyleType = TextFormat::class;
  protected $bubbleTextStyleDataType = '';
  protected $domainType = ChartData::class;
  protected $domainDataType = '';
  protected $groupIdsType = ChartData::class;
  protected $groupIdsDataType = '';
  protected $seriesType = ChartData::class;
  protected $seriesDataType = '';
  /** @param Color */
  public function setBubbleBorderColor(Color $bubbleBorderColor)
  {
    $this->bubbleBorderColor = $bubbleBorderColor;
  }
  /** @return Color */
  public function getBubbleBorderColor()
  {
    return $this->bubbleBorderColor;
  }
  /** @param ColorStyle */
  public function setBubbleBorderColorStyle(ColorStyle $bubbleBorderColorStyle)
  {
    $this->bubbleBorderColorStyle = $bubbleBorderColorStyle;
  }
  /** @return ColorStyle */
  public function getBubbleBorderColorStyle()
  {
    return $this->bubbleBorderColorStyle;
  }
  /** @param ChartData */
  public function setBubbleLabels(ChartData $bubbleLabels)
  {
    $this->bubbleLabels = $bubbleLabels;
  }
  /** @return ChartData */
  public function getBubbleLabels()
  {
    return $this->bubbleLabels;
  }
  /** @param int */
  public function setBubbleMaxRadiusSize($bubbleMaxRadiusSize)
  {
    $this->bubbleMaxRadiusSize = $bubbleMaxRadiusSize;
  }
  /** @return int */
  public function getBubbleMaxRadiusSize()
  {
    return $this->bubbleMaxRadiusSize;
  }
  /** @param int */
  public function setBubbleMinRadiusSize($bubbleMinRadiusSize)
  {
    $this->bubbleMinRadiusSize = $bubbleMinRadiusSize;
  }
  /** @return int */
  public function getBubbleMinRadiusSize()
  {
    return $this->bubbleMinRadiusSize;
  }
  /** @param float */
  public function setBubbleOpacity($bubbleOpacity)
  {
    $this->bubbleOpacity = $bubbleOpacity;
  }
  /** @return float */
  public function getBubbleOpacity()
  {
    return $this->bubbleOpacity;
  }
  /** @param ChartData */
  public function setBubbleSizes(ChartData $bubbleSizes)
  {
    $this->bubbleSizes = $bubbleSizes;
  }
  /** @return ChartData */
  public function getBubbleSizes()
  {
    return $this->bubbleSizes;
  }
  /** @param TextFormat */
  public function setBubbleTextStyle(TextFormat $bubbleTextStyle)
  {
    $this->bubbleTextStyle = $bubbleTextStyle;
  }
  /** @return TextFormat */
  public function getBubbleTextStyle()
  {
    return $this->bubbleTextStyle;
  }
  /** @param ChartData */
  public function setDomain(ChartData $domain)
  {
    $this->domain = $domain;
  }
  /** @return ChartData */
  public function getDomain()
  {
    return $this->domain;
  }
  /** @param ChartData */
  public function setGroupIds(ChartData $groupIds)
  {
    $this->groupIds = $groupIds;
  }
  /** @return ChartData */
  public function getGroupIds()
  {
    return $this->groupIds;
  }
  /** @param string */
  public function setLegendPosition($legendPosition)
  {
    $this->legendPosition = $legendPosition;
  }
  /** @return string */
  public function getLegendPosition()
  {
    return $this->legendPosition;
  }
  /** @param ChartData */
  public function setSeries(ChartData $series)
  {
    $this->series = $series;
  }
  /** @return ChartData */
  public function getSeries()
  {
    return $this->series;
  }
}

class CandlestickChartSpec extends \Google\Collection
{
  /** @var CandlestickData[] */
  public $data;
  /** @var CandlestickDomain */
  public $domain;
  protected $collection_key = 'data';
  protected $dataType = CandlestickData::class;
  protected $dataDataType = 'array';
  protected $domainType = CandlestickDomain::class;
  protected $domainDataType = '';
  /** @param CandlestickData[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return CandlestickData[] */
  public function getData()
  {
    return $this->data;
  }
  /** @param CandlestickDomain */
  public function setDomain(CandlestickDomain $domain)
  {
    $this->domain = $domain;
  }
  /** @return CandlestickDomain */
  public function getDomain()
  {
    return $this->domain;
  }
}

class CandlestickData extends \Google\Model
{
  /** @var CandlestickSeries */
  public $closeSeries;
  /** @var CandlestickSeries */
  public $highSeries;
  /** @var CandlestickSeries */
  public $lowSeries;
  /** @var CandlestickSeries */
  public $openSeries;
  protected $closeSeriesType = CandlestickSeries::class;
  protected $closeSeriesDataType = '';
  protected $highSeriesType = CandlestickSeries::class;
  protected $highSeriesDataType = '';
  protected $lowSeriesType = CandlestickSeries::class;
  protected $lowSeriesDataType = '';
  protected $openSeriesType = CandlestickSeries::class;
  protected $openSeriesDataType = '';
  /** @param CandlestickSeries */
  public function setCloseSeries(CandlestickSeries $closeSeries)
  {
    $this->closeSeries = $closeSeries;
  }
  /** @return CandlestickSeries */
  public function getCloseSeries()
  {
    return $this->closeSeries;
  }
  /** @param CandlestickSeries */
  public function setHighSeries(CandlestickSeries $highSeries)
  {
    $this->highSeries = $highSeries;
  }
  /** @return CandlestickSeries */
  public function getHighSeries()
  {
    return $this->highSeries;
  }
  /** @param CandlestickSeries */
  public function setLowSeries(CandlestickSeries $lowSeries)
  {
    $this->lowSeries = $lowSeries;
  }
  /** @return CandlestickSeries */
  public function getLowSeries()
  {
    return $this->lowSeries;
  }
  /** @param CandlestickSeries */
  public function setOpenSeries(CandlestickSeries $openSeries)
  {
    $this->openSeries = $openSeries;
  }
  /** @return CandlestickSeries */
  public function getOpenSeries()
  {
    return $this->openSeries;
  }
}

class CandlestickDomain extends \Google\Model
{
  /** @var ChartData */
  public $data;
  /** @var bool */
  public $reversed;
  protected $dataType = ChartData::class;
  protected $dataDataType = '';
  /** @param ChartData */
  public function setData(ChartData $data)
  {
    $this->data = $data;
  }
  /** @return ChartData */
  public function getData()
  {
    return $this->data;
  }
  /** @param bool */
  public function setReversed($reversed)
  {
    $this->reversed = $reversed;
  }
  /** @return bool */
  public function getReversed()
  {
    return $this->reversed;
  }
}

class CandlestickSeries extends \Google\Model
{
  /** @var ChartData */
  public $data;
  protected $dataType = ChartData::class;
  protected $dataDataType = '';
  /** @param ChartData */
  public function setData(ChartData $data)
  {
    $this->data = $data;
  }
  /** @return ChartData */
  public function getData()
  {
    return $this->data;
  }
}

class CellData extends \Google\Collection
{
  /** @var DataSourceFormula */
  public $dataSourceFormula;
  /** @var DataSourceTable */
  public $dataSourceTable;
  /** @var DataValidationRule */
  public $dataValidation;
  /** @var CellFormat */
  public $effectiveFormat;
  /** @var ExtendedValue */
  public $effectiveValue;
  /** @var string */
  public $formattedValue;
  /** @var string */
  public $hyperlink;
  /** @var string */
  public $note;
  /** @var PivotTable */
  public $pivotTable;
  /** @var TextFormatRun[] */
  public $textFormatRuns;
  /** @var CellFormat */
  public $userEnteredFormat;
  /** @var ExtendedValue */
  public $userEnteredValue;
  protected $collection_key = 'textFormatRuns';
  protected $dataSourceFormulaType = DataSourceFormula::class;
  protected $dataSourceFormulaDataType = '';
  protected $dataSourceTableType = DataSourceTable::class;
  protected $dataSourceTableDataType = '';
  protected $dataValidationType = DataValidationRule::class;
  protected $dataValidationDataType = '';
  protected $effectiveFormatType = CellFormat::class;
  protected $effectiveFormatDataType = '';
  protected $effectiveValueType = ExtendedValue::class;
  protected $effectiveValueDataType = '';
  protected $pivotTableType = PivotTable::class;
  protected $pivotTableDataType = '';
  protected $textFormatRunsType = TextFormatRun::class;
  protected $textFormatRunsDataType = 'array';
  protected $userEnteredFormatType = CellFormat::class;
  protected $userEnteredFormatDataType = '';
  protected $userEnteredValueType = ExtendedValue::class;
  protected $userEnteredValueDataType = '';
  /** @param DataSourceFormula */
  public function setDataSourceFormula(DataSourceFormula $dataSourceFormula)
  {
    $this->dataSourceFormula = $dataSourceFormula;
  }
  /** @return DataSourceFormula */
  public function getDataSourceFormula()
  {
    return $this->dataSourceFormula;
  }
  /** @param DataSourceTable */
  public function setDataSourceTable(DataSourceTable $dataSourceTable)
  {
    $this->dataSourceTable = $dataSourceTable;
  }
  /** @return DataSourceTable */
  public function getDataSourceTable()
  {
    return $this->dataSourceTable;
  }
  /** @param DataValidationRule */
  public function setDataValidation(DataValidationRule $dataValidation)
  {
    $this->dataValidation = $dataValidation;
  }
  /** @return DataValidationRule */
  public function getDataValidation()
  {
    return $this->dataValidation;
  }
  /** @param CellFormat */
  public function setEffectiveFormat(CellFormat $effectiveFormat)
  {
    $this->effectiveFormat = $effectiveFormat;
  }
  /** @return CellFormat */
  public function getEffectiveFormat()
  {
    return $this->effectiveFormat;
  }
  /** @param ExtendedValue */
  public function setEffectiveValue(ExtendedValue $effectiveValue)
  {
    $this->effectiveValue = $effectiveValue;
  }
  /** @return ExtendedValue */
  public function getEffectiveValue()
  {
    return $this->effectiveValue;
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
  /** @param string */
  public function setHyperlink($hyperlink)
  {
    $this->hyperlink = $hyperlink;
  }
  /** @return string */
  public function getHyperlink()
  {
    return $this->hyperlink;
  }
  /** @param string */
  public function setNote($note)
  {
    $this->note = $note;
  }
  /** @return string */
  public function getNote()
  {
    return $this->note;
  }
  /** @param PivotTable */
  public function setPivotTable(PivotTable $pivotTable)
  {
    $this->pivotTable = $pivotTable;
  }
  /** @return PivotTable */
  public function getPivotTable()
  {
    return $this->pivotTable;
  }
  /** @param TextFormatRun[] */
  public function setTextFormatRuns($textFormatRuns)
  {
    $this->textFormatRuns = $textFormatRuns;
  }
  /** @return TextFormatRun[] */
  public function getTextFormatRuns()
  {
    return $this->textFormatRuns;
  }
  /** @param CellFormat */
  public function setUserEnteredFormat(CellFormat $userEnteredFormat)
  {
    $this->userEnteredFormat = $userEnteredFormat;
  }
  /** @return CellFormat */
  public function getUserEnteredFormat()
  {
    return $this->userEnteredFormat;
  }
  /** @param ExtendedValue */
  public function setUserEnteredValue(ExtendedValue $userEnteredValue)
  {
    $this->userEnteredValue = $userEnteredValue;
  }
  /** @return ExtendedValue */
  public function getUserEnteredValue()
  {
    return $this->userEnteredValue;
  }
}

class CellFormat extends \Google\Model
{
  /** @var Color */
  public $backgroundColor;
  /** @var ColorStyle */
  public $backgroundColorStyle;
  /** @var Borders */
  public $borders;
  /** @var string */
  public $horizontalAlignment;
  /** @var string */
  public $hyperlinkDisplayType;
  /** @var NumberFormat */
  public $numberFormat;
  /** @var Padding */
  public $padding;
  /** @var string */
  public $textDirection;
  /** @var TextFormat */
  public $textFormat;
  /** @var TextRotation */
  public $textRotation;
  /** @var string */
  public $verticalAlignment;
  /** @var string */
  public $wrapStrategy;
  protected $backgroundColorType = Color::class;
  protected $backgroundColorDataType = '';
  protected $backgroundColorStyleType = ColorStyle::class;
  protected $backgroundColorStyleDataType = '';
  protected $bordersType = Borders::class;
  protected $bordersDataType = '';
  protected $numberFormatType = NumberFormat::class;
  protected $numberFormatDataType = '';
  protected $paddingType = Padding::class;
  protected $paddingDataType = '';
  protected $textFormatType = TextFormat::class;
  protected $textFormatDataType = '';
  protected $textRotationType = TextRotation::class;
  protected $textRotationDataType = '';
  /** @param Color */
  public function setBackgroundColor(Color $backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /** @return Color */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
  /** @param ColorStyle */
  public function setBackgroundColorStyle(ColorStyle $backgroundColorStyle)
  {
    $this->backgroundColorStyle = $backgroundColorStyle;
  }
  /** @return ColorStyle */
  public function getBackgroundColorStyle()
  {
    return $this->backgroundColorStyle;
  }
  /** @param Borders */
  public function setBorders(Borders $borders)
  {
    $this->borders = $borders;
  }
  /** @return Borders */
  public function getBorders()
  {
    return $this->borders;
  }
  /** @param string */
  public function setHorizontalAlignment($horizontalAlignment)
  {
    $this->horizontalAlignment = $horizontalAlignment;
  }
  /** @return string */
  public function getHorizontalAlignment()
  {
    return $this->horizontalAlignment;
  }
  /** @param string */
  public function setHyperlinkDisplayType($hyperlinkDisplayType)
  {
    $this->hyperlinkDisplayType = $hyperlinkDisplayType;
  }
  /** @return string */
  public function getHyperlinkDisplayType()
  {
    return $this->hyperlinkDisplayType;
  }
  /** @param NumberFormat */
  public function setNumberFormat(NumberFormat $numberFormat)
  {
    $this->numberFormat = $numberFormat;
  }
  /** @return NumberFormat */
  public function getNumberFormat()
  {
    return $this->numberFormat;
  }
  /** @param Padding */
  public function setPadding(Padding $padding)
  {
    $this->padding = $padding;
  }
  /** @return Padding */
  public function getPadding()
  {
    return $this->padding;
  }
  /** @param string */
  public function setTextDirection($textDirection)
  {
    $this->textDirection = $textDirection;
  }
  /** @return string */
  public function getTextDirection()
  {
    return $this->textDirection;
  }
  /** @param TextFormat */
  public function setTextFormat(TextFormat $textFormat)
  {
    $this->textFormat = $textFormat;
  }
  /** @return TextFormat */
  public function getTextFormat()
  {
    return $this->textFormat;
  }
  /** @param TextRotation */
  public function setTextRotation(TextRotation $textRotation)
  {
    $this->textRotation = $textRotation;
  }
  /** @return TextRotation */
  public function getTextRotation()
  {
    return $this->textRotation;
  }
  /** @param string */
  public function setVerticalAlignment($verticalAlignment)
  {
    $this->verticalAlignment = $verticalAlignment;
  }
  /** @return string */
  public function getVerticalAlignment()
  {
    return $this->verticalAlignment;
  }
  /** @param string */
  public function setWrapStrategy($wrapStrategy)
  {
    $this->wrapStrategy = $wrapStrategy;
  }
  /** @return string */
  public function getWrapStrategy()
  {
    return $this->wrapStrategy;
  }
}

class ChartAxisViewWindowOptions extends \Google\Model
{
  public $viewWindowMax;
  public $viewWindowMin;
  /** @var string */
  public $viewWindowMode;

  public function setViewWindowMax($viewWindowMax)
  {
    $this->viewWindowMax = $viewWindowMax;
  }
  public function getViewWindowMax()
  {
    return $this->viewWindowMax;
  }
  public function setViewWindowMin($viewWindowMin)
  {
    $this->viewWindowMin = $viewWindowMin;
  }
  public function getViewWindowMin()
  {
    return $this->viewWindowMin;
  }
  /** @param string */
  public function setViewWindowMode($viewWindowMode)
  {
    $this->viewWindowMode = $viewWindowMode;
  }
  /** @return string */
  public function getViewWindowMode()
  {
    return $this->viewWindowMode;
  }
}

class ChartCustomNumberFormatOptions extends \Google\Model
{
  /** @var string */
  public $prefix;
  /** @var string */
  public $suffix;

  /** @param string */
  public function setPrefix($prefix)
  {
    $this->prefix = $prefix;
  }
  /** @return string */
  public function getPrefix()
  {
    return $this->prefix;
  }
  /** @param string */
  public function setSuffix($suffix)
  {
    $this->suffix = $suffix;
  }
  /** @return string */
  public function getSuffix()
  {
    return $this->suffix;
  }
}

class ChartData extends \Google\Model
{
  /** @var string */
  public $aggregateType;
  /** @var DataSourceColumnReference */
  public $columnReference;
  /** @var ChartGroupRule */
  public $groupRule;
  /** @var ChartSourceRange */
  public $sourceRange;
  protected $columnReferenceType = DataSourceColumnReference::class;
  protected $columnReferenceDataType = '';
  protected $groupRuleType = ChartGroupRule::class;
  protected $groupRuleDataType = '';
  protected $sourceRangeType = ChartSourceRange::class;
  protected $sourceRangeDataType = '';
  /** @param string */
  public function setAggregateType($aggregateType)
  {
    $this->aggregateType = $aggregateType;
  }
  /** @return string */
  public function getAggregateType()
  {
    return $this->aggregateType;
  }
  /** @param DataSourceColumnReference */
  public function setColumnReference(DataSourceColumnReference $columnReference)
  {
    $this->columnReference = $columnReference;
  }
  /** @return DataSourceColumnReference */
  public function getColumnReference()
  {
    return $this->columnReference;
  }
  /** @param ChartGroupRule */
  public function setGroupRule(ChartGroupRule $groupRule)
  {
    $this->groupRule = $groupRule;
  }
  /** @return ChartGroupRule */
  public function getGroupRule()
  {
    return $this->groupRule;
  }
  /** @param ChartSourceRange */
  public function setSourceRange(ChartSourceRange $sourceRange)
  {
    $this->sourceRange = $sourceRange;
  }
  /** @return ChartSourceRange */
  public function getSourceRange()
  {
    return $this->sourceRange;
  }
}

class ChartDateTimeRule extends \Google\Model
{
  /** @var string */
  public $type;

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

class ChartGroupRule extends \Google\Model
{
  /** @var ChartDateTimeRule */
  public $dateTimeRule;
  /** @var ChartHistogramRule */
  public $histogramRule;
  protected $dateTimeRuleType = ChartDateTimeRule::class;
  protected $dateTimeRuleDataType = '';
  protected $histogramRuleType = ChartHistogramRule::class;
  protected $histogramRuleDataType = '';
  /** @param ChartDateTimeRule */
  public function setDateTimeRule(ChartDateTimeRule $dateTimeRule)
  {
    $this->dateTimeRule = $dateTimeRule;
  }
  /** @return ChartDateTimeRule */
  public function getDateTimeRule()
  {
    return $this->dateTimeRule;
  }
  /** @param ChartHistogramRule */
  public function setHistogramRule(ChartHistogramRule $histogramRule)
  {
    $this->histogramRule = $histogramRule;
  }
  /** @return ChartHistogramRule */
  public function getHistogramRule()
  {
    return $this->histogramRule;
  }
}

class ChartHistogramRule extends \Google\Model
{
  public $intervalSize;
  public $maxValue;
  public $minValue;

  public function setIntervalSize($intervalSize)
  {
    $this->intervalSize = $intervalSize;
  }
  public function getIntervalSize()
  {
    return $this->intervalSize;
  }
  public function setMaxValue($maxValue)
  {
    $this->maxValue = $maxValue;
  }
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  public function setMinValue($minValue)
  {
    $this->minValue = $minValue;
  }
  public function getMinValue()
  {
    return $this->minValue;
  }
}

class ChartSourceRange extends \Google\Collection
{
  /** @var GridRange[] */
  public $sources;
  protected $collection_key = 'sources';
  protected $sourcesType = GridRange::class;
  protected $sourcesDataType = 'array';
  /** @param GridRange[] */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /** @return GridRange[] */
  public function getSources()
  {
    return $this->sources;
  }
}

class ChartSpec extends \Google\Collection
{
  /** @var string */
  public $altText;
  /** @var Color */
  public $backgroundColor;
  /** @var ColorStyle */
  public $backgroundColorStyle;
  /** @var BasicChartSpec */
  public $basicChart;
  /** @var BubbleChartSpec */
  public $bubbleChart;
  /** @var CandlestickChartSpec */
  public $candlestickChart;
  /** @var DataSourceChartProperties */
  public $dataSourceChartProperties;
  /** @var FilterSpec[] */
  public $filterSpecs;
  /** @var string */
  public $fontName;
  /** @var string */
  public $hiddenDimensionStrategy;
  /** @var HistogramChartSpec */
  public $histogramChart;
  /** @var bool */
  public $maximized;
  /** @var OrgChartSpec */
  public $orgChart;
  /** @var PieChartSpec */
  public $pieChart;
  /** @var ScorecardChartSpec */
  public $scorecardChart;
  /** @var SortSpec[] */
  public $sortSpecs;
  /** @var string */
  public $subtitle;
  /** @var TextFormat */
  public $subtitleTextFormat;
  /** @var TextPosition */
  public $subtitleTextPosition;
  /** @var string */
  public $title;
  /** @var TextFormat */
  public $titleTextFormat;
  /** @var TextPosition */
  public $titleTextPosition;
  /** @var TreemapChartSpec */
  public $treemapChart;
  /** @var WaterfallChartSpec */
  public $waterfallChart;
  protected $collection_key = 'sortSpecs';
  protected $backgroundColorType = Color::class;
  protected $backgroundColorDataType = '';
  protected $backgroundColorStyleType = ColorStyle::class;
  protected $backgroundColorStyleDataType = '';
  protected $basicChartType = BasicChartSpec::class;
  protected $basicChartDataType = '';
  protected $bubbleChartType = BubbleChartSpec::class;
  protected $bubbleChartDataType = '';
  protected $candlestickChartType = CandlestickChartSpec::class;
  protected $candlestickChartDataType = '';
  protected $dataSourceChartPropertiesType = DataSourceChartProperties::class;
  protected $dataSourceChartPropertiesDataType = '';
  protected $filterSpecsType = FilterSpec::class;
  protected $filterSpecsDataType = 'array';
  protected $histogramChartType = HistogramChartSpec::class;
  protected $histogramChartDataType = '';
  protected $orgChartType = OrgChartSpec::class;
  protected $orgChartDataType = '';
  protected $pieChartType = PieChartSpec::class;
  protected $pieChartDataType = '';
  protected $scorecardChartType = ScorecardChartSpec::class;
  protected $scorecardChartDataType = '';
  protected $sortSpecsType = SortSpec::class;
  protected $sortSpecsDataType = 'array';
  protected $subtitleTextFormatType = TextFormat::class;
  protected $subtitleTextFormatDataType = '';
  protected $subtitleTextPositionType = TextPosition::class;
  protected $subtitleTextPositionDataType = '';
  protected $titleTextFormatType = TextFormat::class;
  protected $titleTextFormatDataType = '';
  protected $titleTextPositionType = TextPosition::class;
  protected $titleTextPositionDataType = '';
  protected $treemapChartType = TreemapChartSpec::class;
  protected $treemapChartDataType = '';
  protected $waterfallChartType = WaterfallChartSpec::class;
  protected $waterfallChartDataType = '';
  /** @param string */
  public function setAltText($altText)
  {
    $this->altText = $altText;
  }
  /** @return string */
  public function getAltText()
  {
    return $this->altText;
  }
  /** @param Color */
  public function setBackgroundColor(Color $backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /** @return Color */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
  /** @param ColorStyle */
  public function setBackgroundColorStyle(ColorStyle $backgroundColorStyle)
  {
    $this->backgroundColorStyle = $backgroundColorStyle;
  }
  /** @return ColorStyle */
  public function getBackgroundColorStyle()
  {
    return $this->backgroundColorStyle;
  }
  /** @param BasicChartSpec */
  public function setBasicChart(BasicChartSpec $basicChart)
  {
    $this->basicChart = $basicChart;
  }
  /** @return BasicChartSpec */
  public function getBasicChart()
  {
    return $this->basicChart;
  }
  /** @param BubbleChartSpec */
  public function setBubbleChart(BubbleChartSpec $bubbleChart)
  {
    $this->bubbleChart = $bubbleChart;
  }
  /** @return BubbleChartSpec */
  public function getBubbleChart()
  {
    return $this->bubbleChart;
  }
  /** @param CandlestickChartSpec */
  public function setCandlestickChart(CandlestickChartSpec $candlestickChart)
  {
    $this->candlestickChart = $candlestickChart;
  }
  /** @return CandlestickChartSpec */
  public function getCandlestickChart()
  {
    return $this->candlestickChart;
  }
  /** @param DataSourceChartProperties */
  public function setDataSourceChartProperties(DataSourceChartProperties $dataSourceChartProperties)
  {
    $this->dataSourceChartProperties = $dataSourceChartProperties;
  }
  /** @return DataSourceChartProperties */
  public function getDataSourceChartProperties()
  {
    return $this->dataSourceChartProperties;
  }
  /** @param FilterSpec[] */
  public function setFilterSpecs($filterSpecs)
  {
    $this->filterSpecs = $filterSpecs;
  }
  /** @return FilterSpec[] */
  public function getFilterSpecs()
  {
    return $this->filterSpecs;
  }
  /** @param string */
  public function setFontName($fontName)
  {
    $this->fontName = $fontName;
  }
  /** @return string */
  public function getFontName()
  {
    return $this->fontName;
  }
  /** @param string */
  public function setHiddenDimensionStrategy($hiddenDimensionStrategy)
  {
    $this->hiddenDimensionStrategy = $hiddenDimensionStrategy;
  }
  /** @return string */
  public function getHiddenDimensionStrategy()
  {
    return $this->hiddenDimensionStrategy;
  }
  /** @param HistogramChartSpec */
  public function setHistogramChart(HistogramChartSpec $histogramChart)
  {
    $this->histogramChart = $histogramChart;
  }
  /** @return HistogramChartSpec */
  public function getHistogramChart()
  {
    return $this->histogramChart;
  }
  /** @param bool */
  public function setMaximized($maximized)
  {
    $this->maximized = $maximized;
  }
  /** @return bool */
  public function getMaximized()
  {
    return $this->maximized;
  }
  /** @param OrgChartSpec */
  public function setOrgChart(OrgChartSpec $orgChart)
  {
    $this->orgChart = $orgChart;
  }
  /** @return OrgChartSpec */
  public function getOrgChart()
  {
    return $this->orgChart;
  }
  /** @param PieChartSpec */
  public function setPieChart(PieChartSpec $pieChart)
  {
    $this->pieChart = $pieChart;
  }
  /** @return PieChartSpec */
  public function getPieChart()
  {
    return $this->pieChart;
  }
  /** @param ScorecardChartSpec */
  public function setScorecardChart(ScorecardChartSpec $scorecardChart)
  {
    $this->scorecardChart = $scorecardChart;
  }
  /** @return ScorecardChartSpec */
  public function getScorecardChart()
  {
    return $this->scorecardChart;
  }
  /** @param SortSpec[] */
  public function setSortSpecs($sortSpecs)
  {
    $this->sortSpecs = $sortSpecs;
  }
  /** @return SortSpec[] */
  public function getSortSpecs()
  {
    return $this->sortSpecs;
  }
  /** @param string */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  /** @return string */
  public function getSubtitle()
  {
    return $this->subtitle;
  }
  /** @param TextFormat */
  public function setSubtitleTextFormat(TextFormat $subtitleTextFormat)
  {
    $this->subtitleTextFormat = $subtitleTextFormat;
  }
  /** @return TextFormat */
  public function getSubtitleTextFormat()
  {
    return $this->subtitleTextFormat;
  }
  /** @param TextPosition */
  public function setSubtitleTextPosition(TextPosition $subtitleTextPosition)
  {
    $this->subtitleTextPosition = $subtitleTextPosition;
  }
  /** @return TextPosition */
  public function getSubtitleTextPosition()
  {
    return $this->subtitleTextPosition;
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
  /** @param TextFormat */
  public function setTitleTextFormat(TextFormat $titleTextFormat)
  {
    $this->titleTextFormat = $titleTextFormat;
  }
  /** @return TextFormat */
  public function getTitleTextFormat()
  {
    return $this->titleTextFormat;
  }
  /** @param TextPosition */
  public function setTitleTextPosition(TextPosition $titleTextPosition)
  {
    $this->titleTextPosition = $titleTextPosition;
  }
  /** @return TextPosition */
  public function getTitleTextPosition()
  {
    return $this->titleTextPosition;
  }
  /** @param TreemapChartSpec */
  public function setTreemapChart(TreemapChartSpec $treemapChart)
  {
    $this->treemapChart = $treemapChart;
  }
  /** @return TreemapChartSpec */
  public function getTreemapChart()
  {
    return $this->treemapChart;
  }
  /** @param WaterfallChartSpec */
  public function setWaterfallChart(WaterfallChartSpec $waterfallChart)
  {
    $this->waterfallChart = $waterfallChart;
  }
  /** @return WaterfallChartSpec */
  public function getWaterfallChart()
  {
    return $this->waterfallChart;
  }
}

class ClearBasicFilterRequest extends \Google\Model
{
  /** @var int */
  public $sheetId;

  /** @param int */
  public function setSheetId($sheetId)
  {
    $this->sheetId = $sheetId;
  }
  /** @return int */
  public function getSheetId()
  {
    return $this->sheetId;
  }
}

class ClearValuesRequest extends \Google\Model
{
}

class ClearValuesResponse extends \Google\Model
{
  /** @var string */
  public $clearedRange;
  /** @var string */
  public $spreadsheetId;

  /** @param string */
  public function setClearedRange($clearedRange)
  {
    $this->clearedRange = $clearedRange;
  }
  /** @return string */
  public function getClearedRange()
  {
    return $this->clearedRange;
  }
  /** @param string */
  public function setSpreadsheetId($spreadsheetId)
  {
    $this->spreadsheetId = $spreadsheetId;
  }
  /** @return string */
  public function getSpreadsheetId()
  {
    return $this->spreadsheetId;
  }
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

class ColorStyle extends \Google\Model
{
  /** @var Color */
  public $rgbColor;
  /** @var string */
  public $themeColor;
  protected $rgbColorType = Color::class;
  protected $rgbColorDataType = '';
  /** @param Color */
  public function setRgbColor(Color $rgbColor)
  {
    $this->rgbColor = $rgbColor;
  }
  /** @return Color */
  public function getRgbColor()
  {
    return $this->rgbColor;
  }
  /** @param string */
  public function setThemeColor($themeColor)
  {
    $this->themeColor = $themeColor;
  }
  /** @return string */
  public function getThemeColor()
  {
    return $this->themeColor;
  }
}

class ConditionValue extends \Google\Model
{
  /** @var string */
  public $relativeDate;
  /** @var string */
  public $userEnteredValue;

  /** @param string */
  public function setRelativeDate($relativeDate)
  {
    $this->relativeDate = $relativeDate;
  }
  /** @return string */
  public function getRelativeDate()
  {
    return $this->relativeDate;
  }
  /** @param string */
  public function setUserEnteredValue($userEnteredValue)
  {
    $this->userEnteredValue = $userEnteredValue;
  }
  /** @return string */
  public function getUserEnteredValue()
  {
    return $this->userEnteredValue;
  }
}

class ConditionalFormatRule extends \Google\Collection
{
  /** @var BooleanRule */
  public $booleanRule;
  /** @var GradientRule */
  public $gradientRule;
  /** @var GridRange[] */
  public $ranges;
  protected $collection_key = 'ranges';
  protected $booleanRuleType = BooleanRule::class;
  protected $booleanRuleDataType = '';
  protected $gradientRuleType = GradientRule::class;
  protected $gradientRuleDataType = '';
  protected $rangesType = GridRange::class;
  protected $rangesDataType = 'array';
  /** @param BooleanRule */
  public function setBooleanRule(BooleanRule $booleanRule)
  {
    $this->booleanRule = $booleanRule;
  }
  /** @return BooleanRule */
  public function getBooleanRule()
  {
    return $this->booleanRule;
  }
  /** @param GradientRule */
  public function setGradientRule(GradientRule $gradientRule)
  {
    $this->gradientRule = $gradientRule;
  }
  /** @return GradientRule */
  public function getGradientRule()
  {
    return $this->gradientRule;
  }
  /** @param GridRange[] */
  public function setRanges($ranges)
  {
    $this->ranges = $ranges;
  }
  /** @return GridRange[] */
  public function getRanges()
  {
    return $this->ranges;
  }
}

class CopyPasteRequest extends \Google\Model
{
  /** @var GridRange */
  public $destination;
  /** @var string */
  public $pasteOrientation;
  /** @var string */
  public $pasteType;
  /** @var GridRange */
  public $source;
  protected $destinationType = GridRange::class;
  protected $destinationDataType = '';
  protected $sourceType = GridRange::class;
  protected $sourceDataType = '';
  /** @param GridRange */
  public function setDestination(GridRange $destination)
  {
    $this->destination = $destination;
  }
  /** @return GridRange */
  public function getDestination()
  {
    return $this->destination;
  }
  /** @param string */
  public function setPasteOrientation($pasteOrientation)
  {
    $this->pasteOrientation = $pasteOrientation;
  }
  /** @return string */
  public function getPasteOrientation()
  {
    return $this->pasteOrientation;
  }
  /** @param string */
  public function setPasteType($pasteType)
  {
    $this->pasteType = $pasteType;
  }
  /** @return string */
  public function getPasteType()
  {
    return $this->pasteType;
  }
  /** @param GridRange */
  public function setSource(GridRange $source)
  {
    $this->source = $source;
  }
  /** @return GridRange */
  public function getSource()
  {
    return $this->source;
  }
}

class CopySheetToAnotherSpreadsheetRequest extends \Google\Model
{
  /** @var string */
  public $destinationSpreadsheetId;

  /** @param string */
  public function setDestinationSpreadsheetId($destinationSpreadsheetId)
  {
    $this->destinationSpreadsheetId = $destinationSpreadsheetId;
  }
  /** @return string */
  public function getDestinationSpreadsheetId()
  {
    return $this->destinationSpreadsheetId;
  }
}

class CreateDeveloperMetadataRequest extends \Google\Model
{
  /** @var DeveloperMetadata */
  public $developerMetadata;
  protected $developerMetadataType = DeveloperMetadata::class;
  protected $developerMetadataDataType = '';
  /** @param DeveloperMetadata */
  public function setDeveloperMetadata(DeveloperMetadata $developerMetadata)
  {
    $this->developerMetadata = $developerMetadata;
  }
  /** @return DeveloperMetadata */
  public function getDeveloperMetadata()
  {
    return $this->developerMetadata;
  }
}

class CreateDeveloperMetadataResponse extends \Google\Model
{
  /** @var DeveloperMetadata */
  public $developerMetadata;
  protected $developerMetadataType = DeveloperMetadata::class;
  protected $developerMetadataDataType = '';
  /** @param DeveloperMetadata */
  public function setDeveloperMetadata(DeveloperMetadata $developerMetadata)
  {
    $this->developerMetadata = $developerMetadata;
  }
  /** @return DeveloperMetadata */
  public function getDeveloperMetadata()
  {
    return $this->developerMetadata;
  }
}

class CutPasteRequest extends \Google\Model
{
  /** @var GridCoordinate */
  public $destination;
  /** @var string */
  public $pasteType;
  /** @var GridRange */
  public $source;
  protected $destinationType = GridCoordinate::class;
  protected $destinationDataType = '';
  protected $sourceType = GridRange::class;
  protected $sourceDataType = '';
  /** @param GridCoordinate */
  public function setDestination(GridCoordinate $destination)
  {
    $this->destination = $destination;
  }
  /** @return GridCoordinate */
  public function getDestination()
  {
    return $this->destination;
  }
  /** @param string */
  public function setPasteType($pasteType)
  {
    $this->pasteType = $pasteType;
  }
  /** @return string */
  public function getPasteType()
  {
    return $this->pasteType;
  }
  /** @param GridRange */
  public function setSource(GridRange $source)
  {
    $this->source = $source;
  }
  /** @return GridRange */
  public function getSource()
  {
    return $this->source;
  }
}

class DataExecutionStatus extends \Google\Model
{
  /** @var string */
  public $errorCode;
  /** @var string */
  public $errorMessage;
  /** @var string */
  public $lastRefreshTime;
  /** @var string */
  public $state;

  /** @param string */
  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /** @return string */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /** @param string */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /** @return string */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /** @param string */
  public function setLastRefreshTime($lastRefreshTime)
  {
    $this->lastRefreshTime = $lastRefreshTime;
  }
  /** @return string */
  public function getLastRefreshTime()
  {
    return $this->lastRefreshTime;
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

class DataFilter extends \Google\Model
{
  /** @var string */
  public $a1Range;
  /** @var DeveloperMetadataLookup */
  public $developerMetadataLookup;
  /** @var GridRange */
  public $gridRange;
  protected $developerMetadataLookupType = DeveloperMetadataLookup::class;
  protected $developerMetadataLookupDataType = '';
  protected $gridRangeType = GridRange::class;
  protected $gridRangeDataType = '';
  /** @param string */
  public function setA1Range($a1Range)
  {
    $this->a1Range = $a1Range;
  }
  /** @return string */
  public function getA1Range()
  {
    return $this->a1Range;
  }
  /** @param DeveloperMetadataLookup */
  public function setDeveloperMetadataLookup(DeveloperMetadataLookup $developerMetadataLookup)
  {
    $this->developerMetadataLookup = $developerMetadataLookup;
  }
  /** @return DeveloperMetadataLookup */
  public function getDeveloperMetadataLookup()
  {
    return $this->developerMetadataLookup;
  }
  /** @param GridRange */
  public function setGridRange(GridRange $gridRange)
  {
    $this->gridRange = $gridRange;
  }
  /** @return GridRange */
  public function getGridRange()
  {
    return $this->gridRange;
  }
}

class DataFilterValueRange extends \Google\Collection
{
  /** @var DataFilter */
  public $dataFilter;
  /** @var string */
  public $majorDimension;
  /** @var array[] */
  public $values;
  protected $collection_key = 'values';
  protected $dataFilterType = DataFilter::class;
  protected $dataFilterDataType = '';
  /** @param DataFilter */
  public function setDataFilter(DataFilter $dataFilter)
  {
    $this->dataFilter = $dataFilter;
  }
  /** @return DataFilter */
  public function getDataFilter()
  {
    return $this->dataFilter;
  }
  /** @param string */
  public function setMajorDimension($majorDimension)
  {
    $this->majorDimension = $majorDimension;
  }
  /** @return string */
  public function getMajorDimension()
  {
    return $this->majorDimension;
  }
  /** @param array[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return array[] */
  public function getValues()
  {
    return $this->values;
  }
}

class DataLabel extends \Google\Model
{
  /** @var ChartData */
  public $customLabelData;
  /** @var string */
  public $placement;
  /** @var TextFormat */
  public $textFormat;
  /** @var string */
  public $type;
  protected $customLabelDataType = ChartData::class;
  protected $customLabelDataDataType = '';
  protected $textFormatType = TextFormat::class;
  protected $textFormatDataType = '';
  /** @param ChartData */
  public function setCustomLabelData(ChartData $customLabelData)
  {
    $this->customLabelData = $customLabelData;
  }
  /** @return ChartData */
  public function getCustomLabelData()
  {
    return $this->customLabelData;
  }
  /** @param string */
  public function setPlacement($placement)
  {
    $this->placement = $placement;
  }
  /** @return string */
  public function getPlacement()
  {
    return $this->placement;
  }
  /** @param TextFormat */
  public function setTextFormat(TextFormat $textFormat)
  {
    $this->textFormat = $textFormat;
  }
  /** @return TextFormat */
  public function getTextFormat()
  {
    return $this->textFormat;
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

class DataSource extends \Google\Collection
{
  /** @var DataSourceColumn[] */
  public $calculatedColumns;
  /** @var string */
  public $dataSourceId;
  /** @var int */
  public $sheetId;
  /** @var DataSourceSpec */
  public $spec;
  protected $collection_key = 'calculatedColumns';
  protected $calculatedColumnsType = DataSourceColumn::class;
  protected $calculatedColumnsDataType = 'array';
  protected $specType = DataSourceSpec::class;
  protected $specDataType = '';
  /** @param DataSourceColumn[] */
  public function setCalculatedColumns($calculatedColumns)
  {
    $this->calculatedColumns = $calculatedColumns;
  }
  /** @return DataSourceColumn[] */
  public function getCalculatedColumns()
  {
    return $this->calculatedColumns;
  }
  /** @param string */
  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }
  /** @return string */
  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }
  /** @param int */
  public function setSheetId($sheetId)
  {
    $this->sheetId = $sheetId;
  }
  /** @return int */
  public function getSheetId()
  {
    return $this->sheetId;
  }
  /** @param DataSourceSpec */
  public function setSpec(DataSourceSpec $spec)
  {
    $this->spec = $spec;
  }
  /** @return DataSourceSpec */
  public function getSpec()
  {
    return $this->spec;
  }
}

class DataSourceChartProperties extends \Google\Model
{
  /** @var DataExecutionStatus */
  public $dataExecutionStatus;
  /** @var string */
  public $dataSourceId;
  protected $dataExecutionStatusType = DataExecutionStatus::class;
  protected $dataExecutionStatusDataType = '';
  /** @param DataExecutionStatus */
  public function setDataExecutionStatus(DataExecutionStatus $dataExecutionStatus)
  {
    $this->dataExecutionStatus = $dataExecutionStatus;
  }
  /** @return DataExecutionStatus */
  public function getDataExecutionStatus()
  {
    return $this->dataExecutionStatus;
  }
  /** @param string */
  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }
  /** @return string */
  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }
}

class DataSourceColumn extends \Google\Model
{
  /** @var string */
  public $formula;
  /** @var DataSourceColumnReference */
  public $reference;
  protected $referenceType = DataSourceColumnReference::class;
  protected $referenceDataType = '';
  /** @param string */
  public function setFormula($formula)
  {
    $this->formula = $formula;
  }
  /** @return string */
  public function getFormula()
  {
    return $this->formula;
  }
  /** @param DataSourceColumnReference */
  public function setReference(DataSourceColumnReference $reference)
  {
    $this->reference = $reference;
  }
  /** @return DataSourceColumnReference */
  public function getReference()
  {
    return $this->reference;
  }
}

class DataSourceColumnReference extends \Google\Model
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

class DataSourceFormula extends \Google\Model
{
  /** @var DataExecutionStatus */
  public $dataExecutionStatus;
  /** @var string */
  public $dataSourceId;
  protected $dataExecutionStatusType = DataExecutionStatus::class;
  protected $dataExecutionStatusDataType = '';
  /** @param DataExecutionStatus */
  public function setDataExecutionStatus(DataExecutionStatus $dataExecutionStatus)
  {
    $this->dataExecutionStatus = $dataExecutionStatus;
  }
  /** @return DataExecutionStatus */
  public function getDataExecutionStatus()
  {
    return $this->dataExecutionStatus;
  }
  /** @param string */
  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }
  /** @return string */
  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }
}

class DataSourceObjectReference extends \Google\Model
{
  /** @var int */
  public $chartId;
  /** @var GridCoordinate */
  public $dataSourceFormulaCell;
  /** @var GridCoordinate */
  public $dataSourcePivotTableAnchorCell;
  /** @var GridCoordinate */
  public $dataSourceTableAnchorCell;
  /** @var string */
  public $sheetId;
  protected $dataSourceFormulaCellType = GridCoordinate::class;
  protected $dataSourceFormulaCellDataType = '';
  protected $dataSourcePivotTableAnchorCellType = GridCoordinate::class;
  protected $dataSourcePivotTableAnchorCellDataType = '';
  protected $dataSourceTableAnchorCellType = GridCoordinate::class;
  protected $dataSourceTableAnchorCellDataType = '';
  /** @param int */
  public function setChartId($chartId)
  {
    $this->chartId = $chartId;
  }
  /** @return int */
  public function getChartId()
  {
    return $this->chartId;
  }
  /** @param GridCoordinate */
  public function setDataSourceFormulaCell(GridCoordinate $dataSourceFormulaCell)
  {
    $this->dataSourceFormulaCell = $dataSourceFormulaCell;
  }
  /** @return GridCoordinate */
  public function getDataSourceFormulaCell()
  {
    return $this->dataSourceFormulaCell;
  }
  /** @param GridCoordinate */
  public function setDataSourcePivotTableAnchorCell(GridCoordinate $dataSourcePivotTableAnchorCell)
  {
    $this->dataSourcePivotTableAnchorCell = $dataSourcePivotTableAnchorCell;
  }
  /** @return GridCoordinate */
  public function getDataSourcePivotTableAnchorCell()
  {
    return $this->dataSourcePivotTableAnchorCell;
  }
  /** @param GridCoordinate */
  public function setDataSourceTableAnchorCell(GridCoordinate $dataSourceTableAnchorCell)
  {
    $this->dataSourceTableAnchorCell = $dataSourceTableAnchorCell;
  }
  /** @return GridCoordinate */
  public function getDataSourceTableAnchorCell()
  {
    return $this->dataSourceTableAnchorCell;
  }
  /** @param string */
  public function setSheetId($sheetId)
  {
    $this->sheetId = $sheetId;
  }
  /** @return string */
  public function getSheetId()
  {
    return $this->sheetId;
  }
}

class DataSourceObjectReferences extends \Google\Collection
{
  /** @var DataSourceObjectReference[] */
  public $references;
  protected $collection_key = 'references';
  protected $referencesType = DataSourceObjectReference::class;
  protected $referencesDataType = 'array';
  /** @param DataSourceObjectReference[] */
  public function setReferences($references)
  {
    $this->references = $references;
  }
  /** @return DataSourceObjectReference[] */
  public function getReferences()
  {
    return $this->references;
  }
}

class DataSourceParameter extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $namedRangeId;
  /** @var GridRange */
  public $range;
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
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
  public function setNamedRangeId($namedRangeId)
  {
    $this->namedRangeId = $namedRangeId;
  }
  /** @return string */
  public function getNamedRangeId()
  {
    return $this->namedRangeId;
  }
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
}

class DataSourceRefreshDailySchedule extends \Google\Model
{
  /** @var TimeOfDay */
  public $startTime;
  protected $startTimeType = TimeOfDay::class;
  protected $startTimeDataType = '';
  /** @param TimeOfDay */
  public function setStartTime(TimeOfDay $startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return TimeOfDay */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class DataSourceRefreshMonthlySchedule extends \Google\Collection
{
  /** @var int[] */
  public $daysOfMonth;
  /** @var TimeOfDay */
  public $startTime;
  protected $collection_key = 'daysOfMonth';
  protected $startTimeType = TimeOfDay::class;
  protected $startTimeDataType = '';
  /** @param int[] */
  public function setDaysOfMonth($daysOfMonth)
  {
    $this->daysOfMonth = $daysOfMonth;
  }
  /** @return int[] */
  public function getDaysOfMonth()
  {
    return $this->daysOfMonth;
  }
  /** @param TimeOfDay */
  public function setStartTime(TimeOfDay $startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return TimeOfDay */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class DataSourceRefreshSchedule extends \Google\Model
{
  /** @var DataSourceRefreshDailySchedule */
  public $dailySchedule;
  /** @var bool */
  public $enabled;
  /** @var DataSourceRefreshMonthlySchedule */
  public $monthlySchedule;
  /** @var Interval */
  public $nextRun;
  /** @var string */
  public $refreshScope;
  /** @var DataSourceRefreshWeeklySchedule */
  public $weeklySchedule;
  protected $dailyScheduleType = DataSourceRefreshDailySchedule::class;
  protected $dailyScheduleDataType = '';
  protected $monthlyScheduleType = DataSourceRefreshMonthlySchedule::class;
  protected $monthlyScheduleDataType = '';
  protected $nextRunType = Interval::class;
  protected $nextRunDataType = '';
  protected $weeklyScheduleType = DataSourceRefreshWeeklySchedule::class;
  protected $weeklyScheduleDataType = '';
  /** @param DataSourceRefreshDailySchedule */
  public function setDailySchedule(DataSourceRefreshDailySchedule $dailySchedule)
  {
    $this->dailySchedule = $dailySchedule;
  }
  /** @return DataSourceRefreshDailySchedule */
  public function getDailySchedule()
  {
    return $this->dailySchedule;
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
  /** @param DataSourceRefreshMonthlySchedule */
  public function setMonthlySchedule(DataSourceRefreshMonthlySchedule $monthlySchedule)
  {
    $this->monthlySchedule = $monthlySchedule;
  }
  /** @return DataSourceRefreshMonthlySchedule */
  public function getMonthlySchedule()
  {
    return $this->monthlySchedule;
  }
  /** @param Interval */
  public function setNextRun(Interval $nextRun)
  {
    $this->nextRun = $nextRun;
  }
  /** @return Interval */
  public function getNextRun()
  {
    return $this->nextRun;
  }
  /** @param string */
  public function setRefreshScope($refreshScope)
  {
    $this->refreshScope = $refreshScope;
  }
  /** @return string */
  public function getRefreshScope()
  {
    return $this->refreshScope;
  }
  /** @param DataSourceRefreshWeeklySchedule */
  public function setWeeklySchedule(DataSourceRefreshWeeklySchedule $weeklySchedule)
  {
    $this->weeklySchedule = $weeklySchedule;
  }
  /** @return DataSourceRefreshWeeklySchedule */
  public function getWeeklySchedule()
  {
    return $this->weeklySchedule;
  }
}

class DataSourceRefreshWeeklySchedule extends \Google\Collection
{
  /** @var string[] */
  public $daysOfWeek;
  /** @var TimeOfDay */
  public $startTime;
  protected $collection_key = 'daysOfWeek';
  protected $startTimeType = TimeOfDay::class;
  protected $startTimeDataType = '';
  /** @param string[] */
  public function setDaysOfWeek($daysOfWeek)
  {
    $this->daysOfWeek = $daysOfWeek;
  }
  /** @return string[] */
  public function getDaysOfWeek()
  {
    return $this->daysOfWeek;
  }
  /** @param TimeOfDay */
  public function setStartTime(TimeOfDay $startTime)
  {
    $this->startTime = $startTime;
  }
  /** @return TimeOfDay */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class DataSourceSheetDimensionRange extends \Google\Collection
{
  /** @var DataSourceColumnReference[] */
  public $columnReferences;
  /** @var int */
  public $sheetId;
  protected $collection_key = 'columnReferences';
  protected $columnReferencesType = DataSourceColumnReference::class;
  protected $columnReferencesDataType = 'array';
  /** @param DataSourceColumnReference[] */
  public function setColumnReferences($columnReferences)
  {
    $this->columnReferences = $columnReferences;
  }
  /** @return DataSourceColumnReference[] */
  public function getColumnReferences()
  {
    return $this->columnReferences;
  }
  /** @param int */
  public function setSheetId($sheetId)
  {
    $this->sheetId = $sheetId;
  }
  /** @return int */
  public function getSheetId()
  {
    return $this->sheetId;
  }
}

class DataSourceSheetProperties extends \Google\Collection
{
  /** @var DataSourceColumn[] */
  public $columns;
  /** @var DataExecutionStatus */
  public $dataExecutionStatus;
  /** @var string */
  public $dataSourceId;
  protected $collection_key = 'columns';
  protected $columnsType = DataSourceColumn::class;
  protected $columnsDataType = 'array';
  protected $dataExecutionStatusType = DataExecutionStatus::class;
  protected $dataExecutionStatusDataType = '';
  /** @param DataSourceColumn[] */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /** @return DataSourceColumn[] */
  public function getColumns()
  {
    return $this->columns;
  }
  /** @param DataExecutionStatus */
  public function setDataExecutionStatus(DataExecutionStatus $dataExecutionStatus)
  {
    $this->dataExecutionStatus = $dataExecutionStatus;
  }
  /** @return DataExecutionStatus */
  public function getDataExecutionStatus()
  {
    return $this->dataExecutionStatus;
  }
  /** @param string */
  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }
  /** @return string */
  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }
}

class DataSourceSpec extends \Google\Collection
{
  /** @var BigQueryDataSourceSpec */
  public $bigQuery;
  /** @var DataSourceParameter[] */
  public $parameters;
  protected $collection_key = 'parameters';
  protected $bigQueryType = BigQueryDataSourceSpec::class;
  protected $bigQueryDataType = '';
  protected $parametersType = DataSourceParameter::class;
  protected $parametersDataType = 'array';
  /** @param BigQueryDataSourceSpec */
  public function setBigQuery(BigQueryDataSourceSpec $bigQuery)
  {
    $this->bigQuery = $bigQuery;
  }
  /** @return BigQueryDataSourceSpec */
  public function getBigQuery()
  {
    return $this->bigQuery;
  }
  /** @param DataSourceParameter[] */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /** @return DataSourceParameter[] */
  public function getParameters()
  {
    return $this->parameters;
  }
}

class DataSourceTable extends \Google\Collection
{
  /** @var string */
  public $columnSelectionType;
  /** @var DataSourceColumnReference[] */
  public $columns;
  /** @var DataExecutionStatus */
  public $dataExecutionStatus;
  /** @var string */
  public $dataSourceId;
  /** @var FilterSpec[] */
  public $filterSpecs;
  /** @var int */
  public $rowLimit;
  /** @var SortSpec[] */
  public $sortSpecs;
  protected $collection_key = 'sortSpecs';
  protected $columnsType = DataSourceColumnReference::class;
  protected $columnsDataType = 'array';
  protected $dataExecutionStatusType = DataExecutionStatus::class;
  protected $dataExecutionStatusDataType = '';
  protected $filterSpecsType = FilterSpec::class;
  protected $filterSpecsDataType = 'array';
  protected $sortSpecsType = SortSpec::class;
  protected $sortSpecsDataType = 'array';
  /** @param string */
  public function setColumnSelectionType($columnSelectionType)
  {
    $this->columnSelectionType = $columnSelectionType;
  }
  /** @return string */
  public function getColumnSelectionType()
  {
    return $this->columnSelectionType;
  }
  /** @param DataSourceColumnReference[] */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /** @return DataSourceColumnReference[] */
  public function getColumns()
  {
    return $this->columns;
  }
  /** @param DataExecutionStatus */
  public function setDataExecutionStatus(DataExecutionStatus $dataExecutionStatus)
  {
    $this->dataExecutionStatus = $dataExecutionStatus;
  }
  /** @return DataExecutionStatus */
  public function getDataExecutionStatus()
  {
    return $this->dataExecutionStatus;
  }
  /** @param string */
  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }
  /** @return string */
  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }
  /** @param FilterSpec[] */
  public function setFilterSpecs($filterSpecs)
  {
    $this->filterSpecs = $filterSpecs;
  }
  /** @return FilterSpec[] */
  public function getFilterSpecs()
  {
    return $this->filterSpecs;
  }
  /** @param int */
  public function setRowLimit($rowLimit)
  {
    $this->rowLimit = $rowLimit;
  }
  /** @return int */
  public function getRowLimit()
  {
    return $this->rowLimit;
  }
  /** @param SortSpec[] */
  public function setSortSpecs($sortSpecs)
  {
    $this->sortSpecs = $sortSpecs;
  }
  /** @return SortSpec[] */
  public function getSortSpecs()
  {
    return $this->sortSpecs;
  }
}

class DataValidationRule extends \Google\Model
{
  /** @var BooleanCondition */
  public $condition;
  /** @var string */
  public $inputMessage;
  /** @var bool */
  public $showCustomUi;
  /** @var bool */
  public $strict;
  protected $conditionType = BooleanCondition::class;
  protected $conditionDataType = '';
  /** @param BooleanCondition */
  public function setCondition(BooleanCondition $condition)
  {
    $this->condition = $condition;
  }
  /** @return BooleanCondition */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param string */
  public function setInputMessage($inputMessage)
  {
    $this->inputMessage = $inputMessage;
  }
  /** @return string */
  public function getInputMessage()
  {
    return $this->inputMessage;
  }
  /** @param bool */
  public function setShowCustomUi($showCustomUi)
  {
    $this->showCustomUi = $showCustomUi;
  }
  /** @return bool */
  public function getShowCustomUi()
  {
    return $this->showCustomUi;
  }
  /** @param bool */
  public function setStrict($strict)
  {
    $this->strict = $strict;
  }
  /** @return bool */
  public function getStrict()
  {
    return $this->strict;
  }
}

class DateTimeRule extends \Google\Model
{
  /** @var string */
  public $type;

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

class DeleteBandingRequest extends \Google\Model
{
  /** @var int */
  public $bandedRangeId;

  /** @param int */
  public function setBandedRangeId($bandedRangeId)
  {
    $this->bandedRangeId = $bandedRangeId;
  }
  /** @return int */
  public function getBandedRangeId()
  {
    return $this->bandedRangeId;
  }
}

class DeleteConditionalFormatRuleRequest extends \Google\Model
{
  /** @var int */
  public $index;
  /** @var int */
  public $sheetId;

  /** @param int */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return int */
  public function getIndex()
  {
    return $this->index;
  }
  /** @param int */
  public function setSheetId($sheetId)
  {
    $this->sheetId = $sheetId;
  }
  /** @return int */
  public function getSheetId()
  {
    return $this->sheetId;
  }
}

class DeleteConditionalFormatRuleResponse extends \Google\Model
{
  /** @var ConditionalFormatRule */
  public $rule;
  protected $ruleType = ConditionalFormatRule::class;
  protected $ruleDataType = '';
  /** @param ConditionalFormatRule */
  public function setRule(ConditionalFormatRule $rule)
  {
    $this->rule = $rule;
  }
  /** @return ConditionalFormatRule */
  public function getRule()
  {
    return $this->rule;
  }
}

class DeleteDataSourceRequest extends \Google\Model
{
  /** @var string */
  public $dataSourceId;

  /** @param string */
  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }
  /** @return string */
  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }
}

class DeleteDeveloperMetadataRequest extends \Google\Model
{
  /** @var DataFilter */
  public $dataFilter;
  protected $dataFilterType = DataFilter::class;
  protected $dataFilterDataType = '';
  /** @param DataFilter */
  public function setDataFilter(DataFilter $dataFilter)
  {
    $this->dataFilter = $dataFilter;
  }
  /** @return DataFilter */
  public function getDataFilter()
  {
    return $this->dataFilter;
  }
}

class DeleteDeveloperMetadataResponse extends \Google\Collection
{
  /** @var DeveloperMetadata[] */
  public $deletedDeveloperMetadata;
  protected $collection_key = 'deletedDeveloperMetadata';
  protected $deletedDeveloperMetadataType = DeveloperMetadata::class;
  protected $deletedDeveloperMetadataDataType = 'array';
  /** @param DeveloperMetadata[] */
  public function setDeletedDeveloperMetadata($deletedDeveloperMetadata)
  {
    $this->deletedDeveloperMetadata = $deletedDeveloperMetadata;
  }
  /** @return DeveloperMetadata[] */
  public function getDeletedDeveloperMetadata()
  {
    return $this->deletedDeveloperMetadata;
  }
}

class DeleteDimensionGroupRequest extends \Google\Model
{
  /** @var DimensionRange */
  public $range;
  protected $rangeType = DimensionRange::class;
  protected $rangeDataType = '';
  /** @param DimensionRange */
  public function setRange(DimensionRange $range)
  {
    $this->range = $range;
  }
  /** @return DimensionRange */
  public function getRange()
  {
    return $this->range;
  }
}

class DeleteDimensionGroupResponse extends \Google\Collection
{
  /** @var DimensionGroup[] */
  public $dimensionGroups;
  protected $collection_key = 'dimensionGroups';
  protected $dimensionGroupsType = DimensionGroup::class;
  protected $dimensionGroupsDataType = 'array';
  /** @param DimensionGroup[] */
  public function setDimensionGroups($dimensionGroups)
  {
    $this->dimensionGroups = $dimensionGroups;
  }
  /** @return DimensionGroup[] */
  public function getDimensionGroups()
  {
    return $this->dimensionGroups;
  }
}

class DeleteDimensionRequest extends \Google\Model
{
  /** @var DimensionRange */
  public $range;
  protected $rangeType = DimensionRange::class;
  protected $rangeDataType = '';
  /** @param DimensionRange */
  public function setRange(DimensionRange $range)
  {
    $this->range = $range;
  }
  /** @return DimensionRange */
  public function getRange()
  {
    return $this->range;
  }
}

class DeleteDuplicatesRequest extends \Google\Collection
{
  /** @var DimensionRange[] */
  public $comparisonColumns;
  /** @var GridRange */
  public $range;
  protected $collection_key = 'comparisonColumns';
  protected $comparisonColumnsType = DimensionRange::class;
  protected $comparisonColumnsDataType = 'array';
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  /** @param DimensionRange[] */
  public function setComparisonColumns($comparisonColumns)
  {
    $this->comparisonColumns = $comparisonColumns;
  }
  /** @return DimensionRange[] */
  public function getComparisonColumns()
  {
    return $this->comparisonColumns;
  }
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
}

class DeleteDuplicatesResponse extends \Google\Model
{
  /** @var int */
  public $duplicatesRemovedCount;

  /** @param int */
  public function setDuplicatesRemovedCount($duplicatesRemovedCount)
  {
    $this->duplicatesRemovedCount = $duplicatesRemovedCount;
  }
  /** @return int */
  public function getDuplicatesRemovedCount()
  {
    return $this->duplicatesRemovedCount;
  }
}

class DeleteEmbeddedObjectRequest extends \Google\Model
{
  /** @var int */
  public $objectId;

  /** @param int */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return int */
  public function getObjectId()
  {
    return $this->objectId;
  }
}

class DeleteFilterViewRequest extends \Google\Model
{
  /** @var int */
  public $filterId;

  /** @param int */
  public function setFilterId($filterId)
  {
    $this->filterId = $filterId;
  }
  /** @return int */
  public function getFilterId()
  {
    return $this->filterId;
  }
}

class DeleteNamedRangeRequest extends \Google\Model
{
  /** @var string */
  public $namedRangeId;

  /** @param string */
  public function setNamedRangeId($namedRangeId)
  {
    $this->namedRangeId = $namedRangeId;
  }
  /** @return string */
  public function getNamedRangeId()
  {
    return $this->namedRangeId;
  }
}

class DeleteProtectedRangeRequest extends \Google\Model
{
  /** @var int */
  public $protectedRangeId;

  /** @param int */
  public function setProtectedRangeId($protectedRangeId)
  {
    $this->protectedRangeId = $protectedRangeId;
  }
  /** @return int */
  public function getProtectedRangeId()
  {
    return $this->protectedRangeId;
  }
}

class DeleteRangeRequest extends \Google\Model
{
  /** @var GridRange */
  public $range;
  /** @var string */
  public $shiftDimension;
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
  /** @param string */
  public function setShiftDimension($shiftDimension)
  {
    $this->shiftDimension = $shiftDimension;
  }
  /** @return string */
  public function getShiftDimension()
  {
    return $this->shiftDimension;
  }
}

class DeleteSheetRequest extends \Google\Model
{
  /** @var int */
  public $sheetId;

  /** @param int */
  public function setSheetId($sheetId)
  {
    $this->sheetId = $sheetId;
  }
  /** @return int */
  public function getSheetId()
  {
    return $this->sheetId;
  }
}

class DeveloperMetadata extends \Google\Model
{
  /** @var DeveloperMetadataLocation */
  public $location;
  /** @var int */
  public $metadataId;
  /** @var string */
  public $metadataKey;
  /** @var string */
  public $metadataValue;
  /** @var string */
  public $visibility;
  protected $locationType = DeveloperMetadataLocation::class;
  protected $locationDataType = '';
  /** @param DeveloperMetadataLocation */
  public function setLocation(DeveloperMetadataLocation $location)
  {
    $this->location = $location;
  }
  /** @return DeveloperMetadataLocation */
  public function getLocation()
  {
    return $this->location;
  }
  /** @param int */
  public function setMetadataId($metadataId)
  {
    $this->metadataId = $metadataId;
  }
  /** @return int */
  public function getMetadataId()
  {
    return $this->metadataId;
  }
  /** @param string */
  public function setMetadataKey($metadataKey)
  {
    $this->metadataKey = $metadataKey;
  }
  /** @return string */
  public function getMetadataKey()
  {
    return $this->metadataKey;
  }
  /** @param string */
  public function setMetadataValue($metadataValue)
  {
    $this->metadataValue = $metadataValue;
  }
  /** @return string */
  public function getMetadataValue()
  {
    return $this->metadataValue;
  }
  /** @param string */
  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
  /** @return string */
  public function getVisibility()
  {
    return $this->visibility;
  }
}

class DeveloperMetadataLocation extends \Google\Model
{
  /** @var DimensionRange */
  public $dimensionRange;
  /** @var string */
  public $locationType;
  /** @var int */
  public $sheetId;
  /** @var bool */
  public $spreadsheet;
  protected $dimensionRangeType = DimensionRange::class;
  protected $dimensionRangeDataType = '';
  /** @param DimensionRange */
  public function setDimensionRange(DimensionRange $dimensionRange)
  {
    $this->dimensionRange = $dimensionRange;
  }
  /** @return DimensionRange */
  public function getDimensionRange()
  {
    return $this->dimensionRange;
  }
  /** @param string */
  public function setLocationType($locationType)
  {
    $this->locationType = $locationType;
  }
  /** @return string */
  public function getLocationType()
  {
    return $this->locationType;
  }
  /** @param int */
  public function setSheetId($sheetId)
  {
    $this->sheetId = $sheetId;
  }
  /** @return int */
  public function getSheetId()
  {
    return $this->sheetId;
  }
  /** @param bool */
  public function setSpreadsheet($spreadsheet)
  {
    $this->spreadsheet = $spreadsheet;
  }
  /** @return bool */
  public function getSpreadsheet()
  {
    return $this->spreadsheet;
  }
}

class DeveloperMetadataLookup extends \Google\Model
{
  /** @var string */
  public $locationMatchingStrategy;
  /** @var string */
  public $locationType;
  /** @var int */
  public $metadataId;
  /** @var string */
  public $metadataKey;
  /** @var DeveloperMetadataLocation */
  public $metadataLocation;
  /** @var string */
  public $metadataValue;
  /** @var string */
  public $visibility;
  protected $metadataLocationType = DeveloperMetadataLocation::class;
  protected $metadataLocationDataType = '';
  /** @param string */
  public function setLocationMatchingStrategy($locationMatchingStrategy)
  {
    $this->locationMatchingStrategy = $locationMatchingStrategy;
  }
  /** @return string */
  public function getLocationMatchingStrategy()
  {
    return $this->locationMatchingStrategy;
  }
  /** @param string */
  public function setLocationType($locationType)
  {
    $this->locationType = $locationType;
  }
  /** @return string */
  public function getLocationType()
  {
    return $this->locationType;
  }
  /** @param int */
  public function setMetadataId($metadataId)
  {
    $this->metadataId = $metadataId;
  }
  /** @return int */
  public function getMetadataId()
  {
    return $this->metadataId;
  }
  /** @param string */
  public function setMetadataKey($metadataKey)
  {
    $this->metadataKey = $metadataKey;
  }
  /** @return string */
  public function getMetadataKey()
  {
    return $this->metadataKey;
  }
  /** @param DeveloperMetadataLocation */
  public function setMetadataLocation(DeveloperMetadataLocation $metadataLocation)
  {
    $this->metadataLocation = $metadataLocation;
  }
  /** @return DeveloperMetadataLocation */
  public function getMetadataLocation()
  {
    return $this->metadataLocation;
  }
  /** @param string */
  public function setMetadataValue($metadataValue)
  {
    $this->metadataValue = $metadataValue;
  }
  /** @return string */
  public function getMetadataValue()
  {
    return $this->metadataValue;
  }
  /** @param string */
  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
  /** @return string */
  public function getVisibility()
  {
    return $this->visibility;
  }
}

class DimensionGroup extends \Google\Model
{
  /** @var bool */
  public $collapsed;
  /** @var int */
  public $depth;
  /** @var DimensionRange */
  public $range;
  protected $rangeType = DimensionRange::class;
  protected $rangeDataType = '';
  /** @param bool */
  public function setCollapsed($collapsed)
  {
    $this->collapsed = $collapsed;
  }
  /** @return bool */
  public function getCollapsed()
  {
    return $this->collapsed;
  }
  /** @param int */
  public function setDepth($depth)
  {
    $this->depth = $depth;
  }
  /** @return int */
  public function getDepth()
  {
    return $this->depth;
  }
  /** @param DimensionRange */
  public function setRange(DimensionRange $range)
  {
    $this->range = $range;
  }
  /** @return DimensionRange */
  public function getRange()
  {
    return $this->range;
  }
}

class DimensionProperties extends \Google\Collection
{
  /** @var DataSourceColumnReference */
  public $dataSourceColumnReference;
  /** @var DeveloperMetadata[] */
  public $developerMetadata;
  /** @var bool */
  public $hiddenByFilter;
  /** @var bool */
  public $hiddenByUser;
  /** @var int */
  public $pixelSize;
  protected $collection_key = 'developerMetadata';
  protected $dataSourceColumnReferenceType = DataSourceColumnReference::class;
  protected $dataSourceColumnReferenceDataType = '';
  protected $developerMetadataType = DeveloperMetadata::class;
  protected $developerMetadataDataType = 'array';
  /** @param DataSourceColumnReference */
  public function setDataSourceColumnReference(DataSourceColumnReference $dataSourceColumnReference)
  {
    $this->dataSourceColumnReference = $dataSourceColumnReference;
  }
  /** @return DataSourceColumnReference */
  public function getDataSourceColumnReference()
  {
    return $this->dataSourceColumnReference;
  }
  /** @param DeveloperMetadata[] */
  public function setDeveloperMetadata($developerMetadata)
  {
    $this->developerMetadata = $developerMetadata;
  }
  /** @return DeveloperMetadata[] */
  public function getDeveloperMetadata()
  {
    return $this->developerMetadata;
  }
  /** @param bool */
  public function setHiddenByFilter($hiddenByFilter)
  {
    $this->hiddenByFilter = $hiddenByFilter;
  }
  /** @return bool */
  public function getHiddenByFilter()
  {
    return $this->hiddenByFilter;
  }
  /** @param bool */
  public function setHiddenByUser($hiddenByUser)
  {
    $this->hiddenByUser = $hiddenByUser;
  }
  /** @return bool */
  public function getHiddenByUser()
  {
    return $this->hiddenByUser;
  }
  /** @param int */
  public function setPixelSize($pixelSize)
  {
    $this->pixelSize = $pixelSize;
  }
  /** @return int */
  public function getPixelSize()
  {
    return $this->pixelSize;
  }
}

class DimensionRange extends \Google\Model
{
  /** @var string */
  public $dimension;
  /** @var int */
  public $endIndex;
  /** @var int */
  public $sheetId;
  /** @var int */
  public $startIndex;

  /** @param string */
  public function setDimension($dimension)
  {
    $this->dimension = $dimension;
  }
  /** @return string */
  public function getDimension()
  {
    return $this->dimension;
  }
  /** @param int */
  public function setEndIndex($endIndex)
  {
    $this->endIndex = $endIndex;
  }
  /** @return int */
  public function getEndIndex()
  {
    return $this->endIndex;
  }
  /** @param int */
  public function setSheetId($sheetId)
  {
    $this->sheetId = $sheetId;
  }
  /** @return int */
  public function getSheetId()
  {
    return $this->sheetId;
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
}

class DuplicateFilterViewRequest extends \Google\Model
{
  /** @var int */
  public $filterId;

  /** @param int */
  public function setFilterId($filterId)
  {
    $this->filterId = $filterId;
  }
  /** @return int */
  public function getFilterId()
  {
    return $this->filterId;
  }
}

class DuplicateFilterViewResponse extends \Google\Model
{
  /** @var FilterView */
  public $filter;
  protected $filterType = FilterView::class;
  protected $filterDataType = '';
  /** @param FilterView */
  public function setFilter(FilterView $filter)
  {
    $this->filter = $filter;
  }
  /** @return FilterView */
  public function getFilter()
  {
    return $this->filter;
  }
}

class DuplicateSheetRequest extends \Google\Model
{
  /** @var int */
  public $insertSheetIndex;
  /** @var int */
  public $newSheetId;
  /** @var string */
  public $newSheetName;
  /** @var int */
  public $sourceSheetId;

  /** @param int */
  public function setInsertSheetIndex($insertSheetIndex)
  {
    $this->insertSheetIndex = $insertSheetIndex;
  }
  /** @return int */
  public function getInsertSheetIndex()
  {
    return $this->insertSheetIndex;
  }
  /** @param int */
  public function setNewSheetId($newSheetId)
  {
    $this->newSheetId = $newSheetId;
  }
  /** @return int */
  public function getNewSheetId()
  {
    return $this->newSheetId;
  }
  /** @param string */
  public function setNewSheetName($newSheetName)
  {
    $this->newSheetName = $newSheetName;
  }
  /** @return string */
  public function getNewSheetName()
  {
    return $this->newSheetName;
  }
  /** @param int */
  public function setSourceSheetId($sourceSheetId)
  {
    $this->sourceSheetId = $sourceSheetId;
  }
  /** @return int */
  public function getSourceSheetId()
  {
    return $this->sourceSheetId;
  }
}

class DuplicateSheetResponse extends \Google\Model
{
  /** @var SheetProperties */
  public $properties;
  protected $propertiesType = SheetProperties::class;
  protected $propertiesDataType = '';
  /** @param SheetProperties */
  public function setProperties(SheetProperties $properties)
  {
    $this->properties = $properties;
  }
  /** @return SheetProperties */
  public function getProperties()
  {
    return $this->properties;
  }
}

class Editors extends \Google\Collection
{
  /** @var bool */
  public $domainUsersCanEdit;
  /** @var string[] */
  public $groups;
  /** @var string[] */
  public $users;
  protected $collection_key = 'users';
  /** @param bool */
  public function setDomainUsersCanEdit($domainUsersCanEdit)
  {
    $this->domainUsersCanEdit = $domainUsersCanEdit;
  }
  /** @return bool */
  public function getDomainUsersCanEdit()
  {
    return $this->domainUsersCanEdit;
  }
  /** @param string[] */
  public function setGroups($groups)
  {
    $this->groups = $groups;
  }
  /** @return string[] */
  public function getGroups()
  {
    return $this->groups;
  }
  /** @param string[] */
  public function setUsers($users)
  {
    $this->users = $users;
  }
  /** @return string[] */
  public function getUsers()
  {
    return $this->users;
  }
}

class EmbeddedChart extends \Google\Model
{
  /** @var EmbeddedObjectBorder */
  public $border;
  /** @var int */
  public $chartId;
  /** @var EmbeddedObjectPosition */
  public $position;
  /** @var ChartSpec */
  public $spec;
  protected $borderType = EmbeddedObjectBorder::class;
  protected $borderDataType = '';
  protected $positionType = EmbeddedObjectPosition::class;
  protected $positionDataType = '';
  protected $specType = ChartSpec::class;
  protected $specDataType = '';
  /** @param EmbeddedObjectBorder */
  public function setBorder(EmbeddedObjectBorder $border)
  {
    $this->border = $border;
  }
  /** @return EmbeddedObjectBorder */
  public function getBorder()
  {
    return $this->border;
  }
  /** @param int */
  public function setChartId($chartId)
  {
    $this->chartId = $chartId;
  }
  /** @return int */
  public function getChartId()
  {
    return $this->chartId;
  }
  /** @param EmbeddedObjectPosition */
  public function setPosition(EmbeddedObjectPosition $position)
  {
    $this->position = $position;
  }
  /** @return EmbeddedObjectPosition */
  public function getPosition()
  {
    return $this->position;
  }
  /** @param ChartSpec */
  public function setSpec(ChartSpec $spec)
  {
    $this->spec = $spec;
  }
  /** @return ChartSpec */
  public function getSpec()
  {
    return $this->spec;
  }
}

class EmbeddedObjectBorder extends \Google\Model
{
  /** @var Color */
  public $color;
  /** @var ColorStyle */
  public $colorStyle;
  protected $colorType = Color::class;
  protected $colorDataType = '';
  protected $colorStyleType = ColorStyle::class;
  protected $colorStyleDataType = '';
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
  /** @param ColorStyle */
  public function setColorStyle(ColorStyle $colorStyle)
  {
    $this->colorStyle = $colorStyle;
  }
  /** @return ColorStyle */
  public function getColorStyle()
  {
    return $this->colorStyle;
  }
}

class EmbeddedObjectPosition extends \Google\Model
{
  /** @var bool */
  public $newSheet;
  /** @var OverlayPosition */
  public $overlayPosition;
  /** @var int */
  public $sheetId;
  protected $overlayPositionType = OverlayPosition::class;
  protected $overlayPositionDataType = '';
  /** @param bool */
  public function setNewSheet($newSheet)
  {
    $this->newSheet = $newSheet;
  }
  /** @return bool */
  public function getNewSheet()
  {
    return $this->newSheet;
  }
  /** @param OverlayPosition */
  public function setOverlayPosition(OverlayPosition $overlayPosition)
  {
    $this->overlayPosition = $overlayPosition;
  }
  /** @return OverlayPosition */
  public function getOverlayPosition()
  {
    return $this->overlayPosition;
  }
  /** @param int */
  public function setSheetId($sheetId)
  {
    $this->sheetId = $sheetId;
  }
  /** @return int */
  public function getSheetId()
  {
    return $this->sheetId;
  }
}

class ErrorValue extends \Google\Model
{
  /** @var string */
  public $message;
  /** @var string */
  public $type;

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

class ExtendedValue extends \Google\Model
{
  /** @var bool */
  public $boolValue;
  /** @var ErrorValue */
  public $errorValue;
  /** @var string */
  public $formulaValue;
  public $numberValue;
  /** @var string */
  public $stringValue;
  protected $errorValueType = ErrorValue::class;
  protected $errorValueDataType = '';
  /** @param bool */
  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  /** @return bool */
  public function getBoolValue()
  {
    return $this->boolValue;
  }
  /** @param ErrorValue */
  public function setErrorValue(ErrorValue $errorValue)
  {
    $this->errorValue = $errorValue;
  }
  /** @return ErrorValue */
  public function getErrorValue()
  {
    return $this->errorValue;
  }
  /** @param string */
  public function setFormulaValue($formulaValue)
  {
    $this->formulaValue = $formulaValue;
  }
  /** @return string */
  public function getFormulaValue()
  {
    return $this->formulaValue;
  }
  public function setNumberValue($numberValue)
  {
    $this->numberValue = $numberValue;
  }
  public function getNumberValue()
  {
    return $this->numberValue;
  }
  /** @param string */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /** @return string */
  public function getStringValue()
  {
    return $this->stringValue;
  }
}

class FilterCriteria extends \Google\Collection
{
  /** @var BooleanCondition */
  public $condition;
  /** @var string[] */
  public $hiddenValues;
  /** @var Color */
  public $visibleBackgroundColor;
  /** @var ColorStyle */
  public $visibleBackgroundColorStyle;
  /** @var Color */
  public $visibleForegroundColor;
  /** @var ColorStyle */
  public $visibleForegroundColorStyle;
  protected $collection_key = 'hiddenValues';
  protected $conditionType = BooleanCondition::class;
  protected $conditionDataType = '';
  protected $visibleBackgroundColorType = Color::class;
  protected $visibleBackgroundColorDataType = '';
  protected $visibleBackgroundColorStyleType = ColorStyle::class;
  protected $visibleBackgroundColorStyleDataType = '';
  protected $visibleForegroundColorType = Color::class;
  protected $visibleForegroundColorDataType = '';
  protected $visibleForegroundColorStyleType = ColorStyle::class;
  protected $visibleForegroundColorStyleDataType = '';
  /** @param BooleanCondition */
  public function setCondition(BooleanCondition $condition)
  {
    $this->condition = $condition;
  }
  /** @return BooleanCondition */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param string[] */
  public function setHiddenValues($hiddenValues)
  {
    $this->hiddenValues = $hiddenValues;
  }
  /** @return string[] */
  public function getHiddenValues()
  {
    return $this->hiddenValues;
  }
  /** @param Color */
  public function setVisibleBackgroundColor(Color $visibleBackgroundColor)
  {
    $this->visibleBackgroundColor = $visibleBackgroundColor;
  }
  /** @return Color */
  public function getVisibleBackgroundColor()
  {
    return $this->visibleBackgroundColor;
  }
  /** @param ColorStyle */
  public function setVisibleBackgroundColorStyle(ColorStyle $visibleBackgroundColorStyle)
  {
    $this->visibleBackgroundColorStyle = $visibleBackgroundColorStyle;
  }
  /** @return ColorStyle */
  public function getVisibleBackgroundColorStyle()
  {
    return $this->visibleBackgroundColorStyle;
  }
  /** @param Color */
  public function setVisibleForegroundColor(Color $visibleForegroundColor)
  {
    $this->visibleForegroundColor = $visibleForegroundColor;
  }
  /** @return Color */
  public function getVisibleForegroundColor()
  {
    return $this->visibleForegroundColor;
  }
  /** @param ColorStyle */
  public function setVisibleForegroundColorStyle(ColorStyle $visibleForegroundColorStyle)
  {
    $this->visibleForegroundColorStyle = $visibleForegroundColorStyle;
  }
  /** @return ColorStyle */
  public function getVisibleForegroundColorStyle()
  {
    return $this->visibleForegroundColorStyle;
  }
}

class FilterSpec extends \Google\Model
{
  /** @var int */
  public $columnIndex;
  /** @var DataSourceColumnReference */
  public $dataSourceColumnReference;
  /** @var FilterCriteria */
  public $filterCriteria;
  protected $dataSourceColumnReferenceType = DataSourceColumnReference::class;
  protected $dataSourceColumnReferenceDataType = '';
  protected $filterCriteriaType = FilterCriteria::class;
  protected $filterCriteriaDataType = '';
  /** @param int */
  public function setColumnIndex($columnIndex)
  {
    $this->columnIndex = $columnIndex;
  }
  /** @return int */
  public function getColumnIndex()
  {
    return $this->columnIndex;
  }
  /** @param DataSourceColumnReference */
  public function setDataSourceColumnReference(DataSourceColumnReference $dataSourceColumnReference)
  {
    $this->dataSourceColumnReference = $dataSourceColumnReference;
  }
  /** @return DataSourceColumnReference */
  public function getDataSourceColumnReference()
  {
    return $this->dataSourceColumnReference;
  }
  /** @param FilterCriteria */
  public function setFilterCriteria(FilterCriteria $filterCriteria)
  {
    $this->filterCriteria = $filterCriteria;
  }
  /** @return FilterCriteria */
  public function getFilterCriteria()
  {
    return $this->filterCriteria;
  }
}

class FilterView extends \Google\Collection
{
  /** @var FilterCriteria[] */
  public $criteria;
  /** @var FilterSpec[] */
  public $filterSpecs;
  /** @var int */
  public $filterViewId;
  /** @var string */
  public $namedRangeId;
  /** @var GridRange */
  public $range;
  /** @var SortSpec[] */
  public $sortSpecs;
  /** @var string */
  public $title;
  protected $collection_key = 'sortSpecs';
  protected $criteriaType = FilterCriteria::class;
  protected $criteriaDataType = 'map';
  protected $filterSpecsType = FilterSpec::class;
  protected $filterSpecsDataType = 'array';
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  protected $sortSpecsType = SortSpec::class;
  protected $sortSpecsDataType = 'array';
  /** @param FilterCriteria[] */
  public function setCriteria($criteria)
  {
    $this->criteria = $criteria;
  }
  /** @return FilterCriteria[] */
  public function getCriteria()
  {
    return $this->criteria;
  }
  /** @param FilterSpec[] */
  public function setFilterSpecs($filterSpecs)
  {
    $this->filterSpecs = $filterSpecs;
  }
  /** @return FilterSpec[] */
  public function getFilterSpecs()
  {
    return $this->filterSpecs;
  }
  /** @param int */
  public function setFilterViewId($filterViewId)
  {
    $this->filterViewId = $filterViewId;
  }
  /** @return int */
  public function getFilterViewId()
  {
    return $this->filterViewId;
  }
  /** @param string */
  public function setNamedRangeId($namedRangeId)
  {
    $this->namedRangeId = $namedRangeId;
  }
  /** @return string */
  public function getNamedRangeId()
  {
    return $this->namedRangeId;
  }
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
  /** @param SortSpec[] */
  public function setSortSpecs($sortSpecs)
  {
    $this->sortSpecs = $sortSpecs;
  }
  /** @return SortSpec[] */
  public function getSortSpecs()
  {
    return $this->sortSpecs;
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

class FindReplaceRequest extends \Google\Model
{
  /** @var bool */
  public $allSheets;
  /** @var string */
  public $find;
  /** @var bool */
  public $includeFormulas;
  /** @var bool */
  public $matchCase;
  /** @var bool */
  public $matchEntireCell;
  /** @var GridRange */
  public $range;
  /** @var string */
  public $replacement;
  /** @var bool */
  public $searchByRegex;
  /** @var int */
  public $sheetId;
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  /** @param bool */
  public function setAllSheets($allSheets)
  {
    $this->allSheets = $allSheets;
  }
  /** @return bool */
  public function getAllSheets()
  {
    return $this->allSheets;
  }
  /** @param string */
  public function setFind($find)
  {
    $this->find = $find;
  }
  /** @return string */
  public function getFind()
  {
    return $this->find;
  }
  /** @param bool */
  public function setIncludeFormulas($includeFormulas)
  {
    $this->includeFormulas = $includeFormulas;
  }
  /** @return bool */
  public function getIncludeFormulas()
  {
    return $this->includeFormulas;
  }
  /** @param bool */
  public function setMatchCase($matchCase)
  {
    $this->matchCase = $matchCase;
  }
  /** @return bool */
  public function getMatchCase()
  {
    return $this->matchCase;
  }
  /** @param bool */
  public function setMatchEntireCell($matchEntireCell)
  {
    $this->matchEntireCell = $matchEntireCell;
  }
  /** @return bool */
  public function getMatchEntireCell()
  {
    return $this->matchEntireCell;
  }
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
  /** @param string */
  public function setReplacement($replacement)
  {
    $this->replacement = $replacement;
  }
  /** @return string */
  public function getReplacement()
  {
    return $this->replacement;
  }
  /** @param bool */
  public function setSearchByRegex($searchByRegex)
  {
    $this->searchByRegex = $searchByRegex;
  }
  /** @return bool */
  public function getSearchByRegex()
  {
    return $this->searchByRegex;
  }
  /** @param int */
  public function setSheetId($sheetId)
  {
    $this->sheetId = $sheetId;
  }
  /** @return int */
  public function getSheetId()
  {
    return $this->sheetId;
  }
}

class FindReplaceResponse extends \Google\Model
{
  /** @var int */
  public $formulasChanged;
  /** @var int */
  public $occurrencesChanged;
  /** @var int */
  public $rowsChanged;
  /** @var int */
  public $sheetsChanged;
  /** @var int */
  public $valuesChanged;

  /** @param int */
  public function setFormulasChanged($formulasChanged)
  {
    $this->formulasChanged = $formulasChanged;
  }
  /** @return int */
  public function getFormulasChanged()
  {
    return $this->formulasChanged;
  }
  /** @param int */
  public function setOccurrencesChanged($occurrencesChanged)
  {
    $this->occurrencesChanged = $occurrencesChanged;
  }
  /** @return int */
  public function getOccurrencesChanged()
  {
    return $this->occurrencesChanged;
  }
  /** @param int */
  public function setRowsChanged($rowsChanged)
  {
    $this->rowsChanged = $rowsChanged;
  }
  /** @return int */
  public function getRowsChanged()
  {
    return $this->rowsChanged;
  }
  /** @param int */
  public function setSheetsChanged($sheetsChanged)
  {
    $this->sheetsChanged = $sheetsChanged;
  }
  /** @return int */
  public function getSheetsChanged()
  {
    return $this->sheetsChanged;
  }
  /** @param int */
  public function setValuesChanged($valuesChanged)
  {
    $this->valuesChanged = $valuesChanged;
  }
  /** @return int */
  public function getValuesChanged()
  {
    return $this->valuesChanged;
  }
}

class GetSpreadsheetByDataFilterRequest extends \Google\Collection
{
  /** @var DataFilter[] */
  public $dataFilters;
  /** @var bool */
  public $includeGridData;
  protected $collection_key = 'dataFilters';
  protected $dataFiltersType = DataFilter::class;
  protected $dataFiltersDataType = 'array';
  /** @param DataFilter[] */
  public function setDataFilters($dataFilters)
  {
    $this->dataFilters = $dataFilters;
  }
  /** @return DataFilter[] */
  public function getDataFilters()
  {
    return $this->dataFilters;
  }
  /** @param bool */
  public function setIncludeGridData($includeGridData)
  {
    $this->includeGridData = $includeGridData;
  }
  /** @return bool */
  public function getIncludeGridData()
  {
    return $this->includeGridData;
  }
}

class GradientRule extends \Google\Model
{
  /** @var InterpolationPoint */
  public $maxpoint;
  /** @var InterpolationPoint */
  public $midpoint;
  /** @var InterpolationPoint */
  public $minpoint;
  protected $maxpointType = InterpolationPoint::class;
  protected $maxpointDataType = '';
  protected $midpointType = InterpolationPoint::class;
  protected $midpointDataType = '';
  protected $minpointType = InterpolationPoint::class;
  protected $minpointDataType = '';
  /** @param InterpolationPoint */
  public function setMaxpoint(InterpolationPoint $maxpoint)
  {
    $this->maxpoint = $maxpoint;
  }
  /** @return InterpolationPoint */
  public function getMaxpoint()
  {
    return $this->maxpoint;
  }
  /** @param InterpolationPoint */
  public function setMidpoint(InterpolationPoint $midpoint)
  {
    $this->midpoint = $midpoint;
  }
  /** @return InterpolationPoint */
  public function getMidpoint()
  {
    return $this->midpoint;
  }
  /** @param InterpolationPoint */
  public function setMinpoint(InterpolationPoint $minpoint)
  {
    $this->minpoint = $minpoint;
  }
  /** @return InterpolationPoint */
  public function getMinpoint()
  {
    return $this->minpoint;
  }
}

class GridCoordinate extends \Google\Model
{
  /** @var int */
  public $columnIndex;
  /** @var int */
  public $rowIndex;
  /** @var int */
  public $sheetId;

  /** @param int */
  public function setColumnIndex($columnIndex)
  {
    $this->columnIndex = $columnIndex;
  }
  /** @return int */
  public function getColumnIndex()
  {
    return $this->columnIndex;
  }
  /** @param int */
  public function setRowIndex($rowIndex)
  {
    $this->rowIndex = $rowIndex;
  }
  /** @return int */
  public function getRowIndex()
  {
    return $this->rowIndex;
  }
  /** @param int */
  public function setSheetId($sheetId)
  {
    $this->sheetId = $sheetId;
  }
  /** @return int */
  public function getSheetId()
  {
    return $this->sheetId;
  }
}

class GridData extends \Google\Collection
{
  /** @var DimensionProperties[] */
  public $columnMetadata;
  /** @var RowData[] */
  public $rowData;
  /** @var DimensionProperties[] */
  public $rowMetadata;
  /** @var int */
  public $startColumn;
  /** @var int */
  public $startRow;
  protected $collection_key = 'rowMetadata';
  protected $columnMetadataType = DimensionProperties::class;
  protected $columnMetadataDataType = 'array';
  protected $rowDataType = RowData::class;
  protected $rowDataDataType = 'array';
  protected $rowMetadataType = DimensionProperties::class;
  protected $rowMetadataDataType = 'array';
  /** @param DimensionProperties[] */
  public function setColumnMetadata($columnMetadata)
  {
    $this->columnMetadata = $columnMetadata;
  }
  /** @return DimensionProperties[] */
  public function getColumnMetadata()
  {
    return $this->columnMetadata;
  }
  /** @param RowData[] */
  public function setRowData($rowData)
  {
    $this->rowData = $rowData;
  }
  /** @return RowData[] */
  public function getRowData()
  {
    return $this->rowData;
  }
  /** @param DimensionProperties[] */
  public function setRowMetadata($rowMetadata)
  {
    $this->rowMetadata = $rowMetadata;
  }
  /** @return DimensionProperties[] */
  public function getRowMetadata()
  {
    return $this->rowMetadata;
  }
  /** @param int */
  public function setStartColumn($startColumn)
  {
    $this->startColumn = $startColumn;
  }
  /** @return int */
  public function getStartColumn()
  {
    return $this->startColumn;
  }
  /** @param int */
  public function setStartRow($startRow)
  {
    $this->startRow = $startRow;
  }
  /** @return int */
  public function getStartRow()
  {
    return $this->startRow;
  }
}

class GridProperties extends \Google\Model
{
  /** @var int */
  public $columnCount;
  /** @var bool */
  public $columnGroupControlAfter;
  /** @var int */
  public $frozenColumnCount;
  /** @var int */
  public $frozenRowCount;
  /** @var bool */
  public $hideGridlines;
  /** @var int */
  public $rowCount;
  /** @var bool */
  public $rowGroupControlAfter;

  /** @param int */
  public function setColumnCount($columnCount)
  {
    $this->columnCount = $columnCount;
  }
  /** @return int */
  public function getColumnCount()
  {
    return $this->columnCount;
  }
  /** @param bool */
  public function setColumnGroupControlAfter($columnGroupControlAfter)
  {
    $this->columnGroupControlAfter = $columnGroupControlAfter;
  }
  /** @return bool */
  public function getColumnGroupControlAfter()
  {
    return $this->columnGroupControlAfter;
  }
  /** @param int */
  public function setFrozenColumnCount($frozenColumnCount)
  {
    $this->frozenColumnCount = $frozenColumnCount;
  }
  /** @return int */
  public function getFrozenColumnCount()
  {
    return $this->frozenColumnCount;
  }
  /** @param int */
  public function setFrozenRowCount($frozenRowCount)
  {
    $this->frozenRowCount = $frozenRowCount;
  }
  /** @return int */
  public function getFrozenRowCount()
  {
    return $this->frozenRowCount;
  }
  /** @param bool */
  public function setHideGridlines($hideGridlines)
  {
    $this->hideGridlines = $hideGridlines;
  }
  /** @return bool */
  public function getHideGridlines()
  {
    return $this->hideGridlines;
  }
  /** @param int */
  public function setRowCount($rowCount)
  {
    $this->rowCount = $rowCount;
  }
  /** @return int */
  public function getRowCount()
  {
    return $this->rowCount;
  }
  /** @param bool */
  public function setRowGroupControlAfter($rowGroupControlAfter)
  {
    $this->rowGroupControlAfter = $rowGroupControlAfter;
  }
  /** @return bool */
  public function getRowGroupControlAfter()
  {
    return $this->rowGroupControlAfter;
  }
}

class GridRange extends \Google\Model
{
  /** @var int */
  public $endColumnIndex;
  /** @var int */
  public $endRowIndex;
  /** @var int */
  public $sheetId;
  /** @var int */
  public $startColumnIndex;
  /** @var int */
  public $startRowIndex;

  /** @param int */
  public function setEndColumnIndex($endColumnIndex)
  {
    $this->endColumnIndex = $endColumnIndex;
  }
  /** @return int */
  public function getEndColumnIndex()
  {
    return $this->endColumnIndex;
  }
  /** @param int */
  public function setEndRowIndex($endRowIndex)
  {
    $this->endRowIndex = $endRowIndex;
  }
  /** @return int */
  public function getEndRowIndex()
  {
    return $this->endRowIndex;
  }
  /** @param int */
  public function setSheetId($sheetId)
  {
    $this->sheetId = $sheetId;
  }
  /** @return int */
  public function getSheetId()
  {
    return $this->sheetId;
  }
  /** @param int */
  public function setStartColumnIndex($startColumnIndex)
  {
    $this->startColumnIndex = $startColumnIndex;
  }
  /** @return int */
  public function getStartColumnIndex()
  {
    return $this->startColumnIndex;
  }
  /** @param int */
  public function setStartRowIndex($startRowIndex)
  {
    $this->startRowIndex = $startRowIndex;
  }
  /** @return int */
  public function getStartRowIndex()
  {
    return $this->startRowIndex;
  }
}

class HistogramChartSpec extends \Google\Collection
{
  public $bucketSize;
  /** @var string */
  public $legendPosition;
  public $outlierPercentile;
  /** @var HistogramSeries[] */
  public $series;
  /** @var bool */
  public $showItemDividers;
  protected $collection_key = 'series';
  protected $seriesType = HistogramSeries::class;
  protected $seriesDataType = 'array';
  public function setBucketSize($bucketSize)
  {
    $this->bucketSize = $bucketSize;
  }
  public function getBucketSize()
  {
    return $this->bucketSize;
  }
  /** @param string */
  public function setLegendPosition($legendPosition)
  {
    $this->legendPosition = $legendPosition;
  }
  /** @return string */
  public function getLegendPosition()
  {
    return $this->legendPosition;
  }
  public function setOutlierPercentile($outlierPercentile)
  {
    $this->outlierPercentile = $outlierPercentile;
  }
  public function getOutlierPercentile()
  {
    return $this->outlierPercentile;
  }
  /** @param HistogramSeries[] */
  public function setSeries($series)
  {
    $this->series = $series;
  }
  /** @return HistogramSeries[] */
  public function getSeries()
  {
    return $this->series;
  }
  /** @param bool */
  public function setShowItemDividers($showItemDividers)
  {
    $this->showItemDividers = $showItemDividers;
  }
  /** @return bool */
  public function getShowItemDividers()
  {
    return $this->showItemDividers;
  }
}

class HistogramRule extends \Google\Model
{
  public $end;
  public $interval;
  public $start;

  public function setEnd($end)
  {
    $this->end = $end;
  }
  public function getEnd()
  {
    return $this->end;
  }
  public function setInterval($interval)
  {
    $this->interval = $interval;
  }
  public function getInterval()
  {
    return $this->interval;
  }
  public function setStart($start)
  {
    $this->start = $start;
  }
  public function getStart()
  {
    return $this->start;
  }
}

class HistogramSeries extends \Google\Model
{
  /** @var Color */
  public $barColor;
  /** @var ColorStyle */
  public $barColorStyle;
  /** @var ChartData */
  public $data;
  protected $barColorType = Color::class;
  protected $barColorDataType = '';
  protected $barColorStyleType = ColorStyle::class;
  protected $barColorStyleDataType = '';
  protected $dataType = ChartData::class;
  protected $dataDataType = '';
  /** @param Color */
  public function setBarColor(Color $barColor)
  {
    $this->barColor = $barColor;
  }
  /** @return Color */
  public function getBarColor()
  {
    return $this->barColor;
  }
  /** @param ColorStyle */
  public function setBarColorStyle(ColorStyle $barColorStyle)
  {
    $this->barColorStyle = $barColorStyle;
  }
  /** @return ColorStyle */
  public function getBarColorStyle()
  {
    return $this->barColorStyle;
  }
  /** @param ChartData */
  public function setData(ChartData $data)
  {
    $this->data = $data;
  }
  /** @return ChartData */
  public function getData()
  {
    return $this->data;
  }
}

class InsertDimensionRequest extends \Google\Model
{
  /** @var bool */
  public $inheritFromBefore;
  /** @var DimensionRange */
  public $range;
  protected $rangeType = DimensionRange::class;
  protected $rangeDataType = '';
  /** @param bool */
  public function setInheritFromBefore($inheritFromBefore)
  {
    $this->inheritFromBefore = $inheritFromBefore;
  }
  /** @return bool */
  public function getInheritFromBefore()
  {
    return $this->inheritFromBefore;
  }
  /** @param DimensionRange */
  public function setRange(DimensionRange $range)
  {
    $this->range = $range;
  }
  /** @return DimensionRange */
  public function getRange()
  {
    return $this->range;
  }
}

class InsertRangeRequest extends \Google\Model
{
  /** @var GridRange */
  public $range;
  /** @var string */
  public $shiftDimension;
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
  /** @param string */
  public function setShiftDimension($shiftDimension)
  {
    $this->shiftDimension = $shiftDimension;
  }
  /** @return string */
  public function getShiftDimension()
  {
    return $this->shiftDimension;
  }
}

class InterpolationPoint extends \Google\Model
{
  /** @var Color */
  public $color;
  /** @var ColorStyle */
  public $colorStyle;
  /** @var string */
  public $type;
  /** @var string */
  public $value;
  protected $colorType = Color::class;
  protected $colorDataType = '';
  protected $colorStyleType = ColorStyle::class;
  protected $colorStyleDataType = '';
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
  /** @param ColorStyle */
  public function setColorStyle(ColorStyle $colorStyle)
  {
    $this->colorStyle = $colorStyle;
  }
  /** @return ColorStyle */
  public function getColorStyle()
  {
    return $this->colorStyle;
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

class Interval extends \Google\Model
{
  /** @var string */
  public $endTime;
  /** @var string */
  public $startTime;

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

class IterativeCalculationSettings extends \Google\Model
{
  public $convergenceThreshold;
  /** @var int */
  public $maxIterations;

  public function setConvergenceThreshold($convergenceThreshold)
  {
    $this->convergenceThreshold = $convergenceThreshold;
  }
  public function getConvergenceThreshold()
  {
    return $this->convergenceThreshold;
  }
  /** @param int */
  public function setMaxIterations($maxIterations)
  {
    $this->maxIterations = $maxIterations;
  }
  /** @return int */
  public function getMaxIterations()
  {
    return $this->maxIterations;
  }
}

class KeyValueFormat extends \Google\Model
{
  /** @var TextPosition */
  public $position;
  /** @var TextFormat */
  public $textFormat;
  protected $positionType = TextPosition::class;
  protected $positionDataType = '';
  protected $textFormatType = TextFormat::class;
  protected $textFormatDataType = '';
  /** @param TextPosition */
  public function setPosition(TextPosition $position)
  {
    $this->position = $position;
  }
  /** @return TextPosition */
  public function getPosition()
  {
    return $this->position;
  }
  /** @param TextFormat */
  public function setTextFormat(TextFormat $textFormat)
  {
    $this->textFormat = $textFormat;
  }
  /** @return TextFormat */
  public function getTextFormat()
  {
    return $this->textFormat;
  }
}

class LineStyle extends \Google\Model
{
  /** @var string */
  public $type;
  /** @var int */
  public $width;

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

class Link extends \Google\Model
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

class ManualRule extends \Google\Collection
{
  /** @var ManualRuleGroup[] */
  public $groups;
  protected $collection_key = 'groups';
  protected $groupsType = ManualRuleGroup::class;
  protected $groupsDataType = 'array';
  /** @param ManualRuleGroup[] */
  public function setGroups($groups)
  {
    $this->groups = $groups;
  }
  /** @return ManualRuleGroup[] */
  public function getGroups()
  {
    return $this->groups;
  }
}

class ManualRuleGroup extends \Google\Collection
{
  /** @var ExtendedValue */
  public $groupName;
  /** @var ExtendedValue[] */
  public $items;
  protected $collection_key = 'items';
  protected $groupNameType = ExtendedValue::class;
  protected $groupNameDataType = '';
  protected $itemsType = ExtendedValue::class;
  protected $itemsDataType = 'array';
  /** @param ExtendedValue */
  public function setGroupName(ExtendedValue $groupName)
  {
    $this->groupName = $groupName;
  }
  /** @return ExtendedValue */
  public function getGroupName()
  {
    return $this->groupName;
  }
  /** @param ExtendedValue[] */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /** @return ExtendedValue[] */
  public function getItems()
  {
    return $this->items;
  }
}

class MatchedDeveloperMetadata extends \Google\Collection
{
  /** @var DataFilter[] */
  public $dataFilters;
  /** @var DeveloperMetadata */
  public $developerMetadata;
  protected $collection_key = 'dataFilters';
  protected $dataFiltersType = DataFilter::class;
  protected $dataFiltersDataType = 'array';
  protected $developerMetadataType = DeveloperMetadata::class;
  protected $developerMetadataDataType = '';
  /** @param DataFilter[] */
  public function setDataFilters($dataFilters)
  {
    $this->dataFilters = $dataFilters;
  }
  /** @return DataFilter[] */
  public function getDataFilters()
  {
    return $this->dataFilters;
  }
  /** @param DeveloperMetadata */
  public function setDeveloperMetadata(DeveloperMetadata $developerMetadata)
  {
    $this->developerMetadata = $developerMetadata;
  }
  /** @return DeveloperMetadata */
  public function getDeveloperMetadata()
  {
    return $this->developerMetadata;
  }
}

class MatchedValueRange extends \Google\Collection
{
  /** @var DataFilter[] */
  public $dataFilters;
  /** @var ValueRange */
  public $valueRange;
  protected $collection_key = 'dataFilters';
  protected $dataFiltersType = DataFilter::class;
  protected $dataFiltersDataType = 'array';
  protected $valueRangeType = ValueRange::class;
  protected $valueRangeDataType = '';
  /** @param DataFilter[] */
  public function setDataFilters($dataFilters)
  {
    $this->dataFilters = $dataFilters;
  }
  /** @return DataFilter[] */
  public function getDataFilters()
  {
    return $this->dataFilters;
  }
  /** @param ValueRange */
  public function setValueRange(ValueRange $valueRange)
  {
    $this->valueRange = $valueRange;
  }
  /** @return ValueRange */
  public function getValueRange()
  {
    return $this->valueRange;
  }
}

class MergeCellsRequest extends \Google\Model
{
  /** @var string */
  public $mergeType;
  /** @var GridRange */
  public $range;
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  /** @param string */
  public function setMergeType($mergeType)
  {
    $this->mergeType = $mergeType;
  }
  /** @return string */
  public function getMergeType()
  {
    return $this->mergeType;
  }
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
}

class MoveDimensionRequest extends \Google\Model
{
  /** @var int */
  public $destinationIndex;
  /** @var DimensionRange */
  public $source;
  protected $sourceType = DimensionRange::class;
  protected $sourceDataType = '';
  /** @param int */
  public function setDestinationIndex($destinationIndex)
  {
    $this->destinationIndex = $destinationIndex;
  }
  /** @return int */
  public function getDestinationIndex()
  {
    return $this->destinationIndex;
  }
  /** @param DimensionRange */
  public function setSource(DimensionRange $source)
  {
    $this->source = $source;
  }
  /** @return DimensionRange */
  public function getSource()
  {
    return $this->source;
  }
}

class NamedRange extends \Google\Model
{
  /** @var string */
  public $name;
  /** @var string */
  public $namedRangeId;
  /** @var GridRange */
  public $range;
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
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
  public function setNamedRangeId($namedRangeId)
  {
    $this->namedRangeId = $namedRangeId;
  }
  /** @return string */
  public function getNamedRangeId()
  {
    return $this->namedRangeId;
  }
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
}

class NumberFormat extends \Google\Model
{
  /** @var string */
  public $pattern;
  /** @var string */
  public $type;

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

class OrgChartSpec extends \Google\Model
{
  /** @var ChartData */
  public $labels;
  /** @var Color */
  public $nodeColor;
  /** @var ColorStyle */
  public $nodeColorStyle;
  /** @var string */
  public $nodeSize;
  /** @var ChartData */
  public $parentLabels;
  /** @var Color */
  public $selectedNodeColor;
  /** @var ColorStyle */
  public $selectedNodeColorStyle;
  /** @var ChartData */
  public $tooltips;
  protected $labelsType = ChartData::class;
  protected $labelsDataType = '';
  protected $nodeColorType = Color::class;
  protected $nodeColorDataType = '';
  protected $nodeColorStyleType = ColorStyle::class;
  protected $nodeColorStyleDataType = '';
  protected $parentLabelsType = ChartData::class;
  protected $parentLabelsDataType = '';
  protected $selectedNodeColorType = Color::class;
  protected $selectedNodeColorDataType = '';
  protected $selectedNodeColorStyleType = ColorStyle::class;
  protected $selectedNodeColorStyleDataType = '';
  protected $tooltipsType = ChartData::class;
  protected $tooltipsDataType = '';
  /** @param ChartData */
  public function setLabels(ChartData $labels)
  {
    $this->labels = $labels;
  }
  /** @return ChartData */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param Color */
  public function setNodeColor(Color $nodeColor)
  {
    $this->nodeColor = $nodeColor;
  }
  /** @return Color */
  public function getNodeColor()
  {
    return $this->nodeColor;
  }
  /** @param ColorStyle */
  public function setNodeColorStyle(ColorStyle $nodeColorStyle)
  {
    $this->nodeColorStyle = $nodeColorStyle;
  }
  /** @return ColorStyle */
  public function getNodeColorStyle()
  {
    return $this->nodeColorStyle;
  }
  /** @param string */
  public function setNodeSize($nodeSize)
  {
    $this->nodeSize = $nodeSize;
  }
  /** @return string */
  public function getNodeSize()
  {
    return $this->nodeSize;
  }
  /** @param ChartData */
  public function setParentLabels(ChartData $parentLabels)
  {
    $this->parentLabels = $parentLabels;
  }
  /** @return ChartData */
  public function getParentLabels()
  {
    return $this->parentLabels;
  }
  /** @param Color */
  public function setSelectedNodeColor(Color $selectedNodeColor)
  {
    $this->selectedNodeColor = $selectedNodeColor;
  }
  /** @return Color */
  public function getSelectedNodeColor()
  {
    return $this->selectedNodeColor;
  }
  /** @param ColorStyle */
  public function setSelectedNodeColorStyle(ColorStyle $selectedNodeColorStyle)
  {
    $this->selectedNodeColorStyle = $selectedNodeColorStyle;
  }
  /** @return ColorStyle */
  public function getSelectedNodeColorStyle()
  {
    return $this->selectedNodeColorStyle;
  }
  /** @param ChartData */
  public function setTooltips(ChartData $tooltips)
  {
    $this->tooltips = $tooltips;
  }
  /** @return ChartData */
  public function getTooltips()
  {
    return $this->tooltips;
  }
}

class OverlayPosition extends \Google\Model
{
  /** @var GridCoordinate */
  public $anchorCell;
  /** @var int */
  public $heightPixels;
  /** @var int */
  public $offsetXPixels;
  /** @var int */
  public $offsetYPixels;
  /** @var int */
  public $widthPixels;
  protected $anchorCellType = GridCoordinate::class;
  protected $anchorCellDataType = '';
  /** @param GridCoordinate */
  public function setAnchorCell(GridCoordinate $anchorCell)
  {
    $this->anchorCell = $anchorCell;
  }
  /** @return GridCoordinate */
  public function getAnchorCell()
  {
    return $this->anchorCell;
  }
  /** @param int */
  public function setHeightPixels($heightPixels)
  {
    $this->heightPixels = $heightPixels;
  }
  /** @return int */
  public function getHeightPixels()
  {
    return $this->heightPixels;
  }
  /** @param int */
  public function setOffsetXPixels($offsetXPixels)
  {
    $this->offsetXPixels = $offsetXPixels;
  }
  /** @return int */
  public function getOffsetXPixels()
  {
    return $this->offsetXPixels;
  }
  /** @param int */
  public function setOffsetYPixels($offsetYPixels)
  {
    $this->offsetYPixels = $offsetYPixels;
  }
  /** @return int */
  public function getOffsetYPixels()
  {
    return $this->offsetYPixels;
  }
  /** @param int */
  public function setWidthPixels($widthPixels)
  {
    $this->widthPixels = $widthPixels;
  }
  /** @return int */
  public function getWidthPixels()
  {
    return $this->widthPixels;
  }
}

class Padding extends \Google\Model
{
  /** @var int */
  public $bottom;
  /** @var int */
  public $left;
  /** @var int */
  public $right;
  /** @var int */
  public $top;

  /** @param int */
  public function setBottom($bottom)
  {
    $this->bottom = $bottom;
  }
  /** @return int */
  public function getBottom()
  {
    return $this->bottom;
  }
  /** @param int */
  public function setLeft($left)
  {
    $this->left = $left;
  }
  /** @return int */
  public function getLeft()
  {
    return $this->left;
  }
  /** @param int */
  public function setRight($right)
  {
    $this->right = $right;
  }
  /** @return int */
  public function getRight()
  {
    return $this->right;
  }
  /** @param int */
  public function setTop($top)
  {
    $this->top = $top;
  }
  /** @return int */
  public function getTop()
  {
    return $this->top;
  }
}

class PasteDataRequest extends \Google\Model
{
  /** @var GridCoordinate */
  public $coordinate;
  /** @var string */
  public $data;
  /** @var string */
  public $delimiter;
  /** @var bool */
  public $html;
  /** @var string */
  public $type;
  protected $coordinateType = GridCoordinate::class;
  protected $coordinateDataType = '';
  /** @param GridCoordinate */
  public function setCoordinate(GridCoordinate $coordinate)
  {
    $this->coordinate = $coordinate;
  }
  /** @return GridCoordinate */
  public function getCoordinate()
  {
    return $this->coordinate;
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
  /** @param string */
  public function setDelimiter($delimiter)
  {
    $this->delimiter = $delimiter;
  }
  /** @return string */
  public function getDelimiter()
  {
    return $this->delimiter;
  }
  /** @param bool */
  public function setHtml($html)
  {
    $this->html = $html;
  }
  /** @return bool */
  public function getHtml()
  {
    return $this->html;
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

class PieChartSpec extends \Google\Model
{
  /** @var ChartData */
  public $domain;
  /** @var string */
  public $legendPosition;
  public $pieHole;
  /** @var ChartData */
  public $series;
  /** @var bool */
  public $threeDimensional;
  protected $domainType = ChartData::class;
  protected $domainDataType = '';
  protected $seriesType = ChartData::class;
  protected $seriesDataType = '';
  /** @param ChartData */
  public function setDomain(ChartData $domain)
  {
    $this->domain = $domain;
  }
  /** @return ChartData */
  public function getDomain()
  {
    return $this->domain;
  }
  /** @param string */
  public function setLegendPosition($legendPosition)
  {
    $this->legendPosition = $legendPosition;
  }
  /** @return string */
  public function getLegendPosition()
  {
    return $this->legendPosition;
  }
  public function setPieHole($pieHole)
  {
    $this->pieHole = $pieHole;
  }
  public function getPieHole()
  {
    return $this->pieHole;
  }
  /** @param ChartData */
  public function setSeries(ChartData $series)
  {
    $this->series = $series;
  }
  /** @return ChartData */
  public function getSeries()
  {
    return $this->series;
  }
  /** @param bool */
  public function setThreeDimensional($threeDimensional)
  {
    $this->threeDimensional = $threeDimensional;
  }
  /** @return bool */
  public function getThreeDimensional()
  {
    return $this->threeDimensional;
  }
}

class PivotFilterCriteria extends \Google\Collection
{
  /** @var BooleanCondition */
  public $condition;
  /** @var bool */
  public $visibleByDefault;
  /** @var string[] */
  public $visibleValues;
  protected $collection_key = 'visibleValues';
  protected $conditionType = BooleanCondition::class;
  protected $conditionDataType = '';
  /** @param BooleanCondition */
  public function setCondition(BooleanCondition $condition)
  {
    $this->condition = $condition;
  }
  /** @return BooleanCondition */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param bool */
  public function setVisibleByDefault($visibleByDefault)
  {
    $this->visibleByDefault = $visibleByDefault;
  }
  /** @return bool */
  public function getVisibleByDefault()
  {
    return $this->visibleByDefault;
  }
  /** @param string[] */
  public function setVisibleValues($visibleValues)
  {
    $this->visibleValues = $visibleValues;
  }
  /** @return string[] */
  public function getVisibleValues()
  {
    return $this->visibleValues;
  }
}

class PivotFilterSpec extends \Google\Model
{
  /** @var int */
  public $columnOffsetIndex;
  /** @var DataSourceColumnReference */
  public $dataSourceColumnReference;
  /** @var PivotFilterCriteria */
  public $filterCriteria;
  protected $dataSourceColumnReferenceType = DataSourceColumnReference::class;
  protected $dataSourceColumnReferenceDataType = '';
  protected $filterCriteriaType = PivotFilterCriteria::class;
  protected $filterCriteriaDataType = '';
  /** @param int */
  public function setColumnOffsetIndex($columnOffsetIndex)
  {
    $this->columnOffsetIndex = $columnOffsetIndex;
  }
  /** @return int */
  public function getColumnOffsetIndex()
  {
    return $this->columnOffsetIndex;
  }
  /** @param DataSourceColumnReference */
  public function setDataSourceColumnReference(DataSourceColumnReference $dataSourceColumnReference)
  {
    $this->dataSourceColumnReference = $dataSourceColumnReference;
  }
  /** @return DataSourceColumnReference */
  public function getDataSourceColumnReference()
  {
    return $this->dataSourceColumnReference;
  }
  /** @param PivotFilterCriteria */
  public function setFilterCriteria(PivotFilterCriteria $filterCriteria)
  {
    $this->filterCriteria = $filterCriteria;
  }
  /** @return PivotFilterCriteria */
  public function getFilterCriteria()
  {
    return $this->filterCriteria;
  }
}

class PivotGroup extends \Google\Collection
{
  /** @var DataSourceColumnReference */
  public $dataSourceColumnReference;
  /** @var PivotGroupLimit */
  public $groupLimit;
  /** @var PivotGroupRule */
  public $groupRule;
  /** @var string */
  public $label;
  /** @var bool */
  public $repeatHeadings;
  /** @var bool */
  public $showTotals;
  /** @var string */
  public $sortOrder;
  /** @var int */
  public $sourceColumnOffset;
  /** @var PivotGroupSortValueBucket */
  public $valueBucket;
  /** @var PivotGroupValueMetadata[] */
  public $valueMetadata;
  protected $collection_key = 'valueMetadata';
  protected $dataSourceColumnReferenceType = DataSourceColumnReference::class;
  protected $dataSourceColumnReferenceDataType = '';
  protected $groupLimitType = PivotGroupLimit::class;
  protected $groupLimitDataType = '';
  protected $groupRuleType = PivotGroupRule::class;
  protected $groupRuleDataType = '';
  protected $valueBucketType = PivotGroupSortValueBucket::class;
  protected $valueBucketDataType = '';
  protected $valueMetadataType = PivotGroupValueMetadata::class;
  protected $valueMetadataDataType = 'array';
  /** @param DataSourceColumnReference */
  public function setDataSourceColumnReference(DataSourceColumnReference $dataSourceColumnReference)
  {
    $this->dataSourceColumnReference = $dataSourceColumnReference;
  }
  /** @return DataSourceColumnReference */
  public function getDataSourceColumnReference()
  {
    return $this->dataSourceColumnReference;
  }
  /** @param PivotGroupLimit */
  public function setGroupLimit(PivotGroupLimit $groupLimit)
  {
    $this->groupLimit = $groupLimit;
  }
  /** @return PivotGroupLimit */
  public function getGroupLimit()
  {
    return $this->groupLimit;
  }
  /** @param PivotGroupRule */
  public function setGroupRule(PivotGroupRule $groupRule)
  {
    $this->groupRule = $groupRule;
  }
  /** @return PivotGroupRule */
  public function getGroupRule()
  {
    return $this->groupRule;
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
  /** @param bool */
  public function setRepeatHeadings($repeatHeadings)
  {
    $this->repeatHeadings = $repeatHeadings;
  }
  /** @return bool */
  public function getRepeatHeadings()
  {
    return $this->repeatHeadings;
  }
  /** @param bool */
  public function setShowTotals($showTotals)
  {
    $this->showTotals = $showTotals;
  }
  /** @return bool */
  public function getShowTotals()
  {
    return $this->showTotals;
  }
  /** @param string */
  public function setSortOrder($sortOrder)
  {
    $this->sortOrder = $sortOrder;
  }
  /** @return string */
  public function getSortOrder()
  {
    return $this->sortOrder;
  }
  /** @param int */
  public function setSourceColumnOffset($sourceColumnOffset)
  {
    $this->sourceColumnOffset = $sourceColumnOffset;
  }
  /** @return int */
  public function getSourceColumnOffset()
  {
    return $this->sourceColumnOffset;
  }
  /** @param PivotGroupSortValueBucket */
  public function setValueBucket(PivotGroupSortValueBucket $valueBucket)
  {
    $this->valueBucket = $valueBucket;
  }
  /** @return PivotGroupSortValueBucket */
  public function getValueBucket()
  {
    return $this->valueBucket;
  }
  /** @param PivotGroupValueMetadata[] */
  public function setValueMetadata($valueMetadata)
  {
    $this->valueMetadata = $valueMetadata;
  }
  /** @return PivotGroupValueMetadata[] */
  public function getValueMetadata()
  {
    return $this->valueMetadata;
  }
}

class PivotGroupLimit extends \Google\Model
{
  /** @var int */
  public $applyOrder;
  /** @var int */
  public $countLimit;

  /** @param int */
  public function setApplyOrder($applyOrder)
  {
    $this->applyOrder = $applyOrder;
  }
  /** @return int */
  public function getApplyOrder()
  {
    return $this->applyOrder;
  }
  /** @param int */
  public function setCountLimit($countLimit)
  {
    $this->countLimit = $countLimit;
  }
  /** @return int */
  public function getCountLimit()
  {
    return $this->countLimit;
  }
}

class PivotGroupRule extends \Google\Model
{
  /** @var DateTimeRule */
  public $dateTimeRule;
  /** @var HistogramRule */
  public $histogramRule;
  /** @var ManualRule */
  public $manualRule;
  protected $dateTimeRuleType = DateTimeRule::class;
  protected $dateTimeRuleDataType = '';
  protected $histogramRuleType = HistogramRule::class;
  protected $histogramRuleDataType = '';
  protected $manualRuleType = ManualRule::class;
  protected $manualRuleDataType = '';
  /** @param DateTimeRule */
  public function setDateTimeRule(DateTimeRule $dateTimeRule)
  {
    $this->dateTimeRule = $dateTimeRule;
  }
  /** @return DateTimeRule */
  public function getDateTimeRule()
  {
    return $this->dateTimeRule;
  }
  /** @param HistogramRule */
  public function setHistogramRule(HistogramRule $histogramRule)
  {
    $this->histogramRule = $histogramRule;
  }
  /** @return HistogramRule */
  public function getHistogramRule()
  {
    return $this->histogramRule;
  }
  /** @param ManualRule */
  public function setManualRule(ManualRule $manualRule)
  {
    $this->manualRule = $manualRule;
  }
  /** @return ManualRule */
  public function getManualRule()
  {
    return $this->manualRule;
  }
}

class PivotGroupSortValueBucket extends \Google\Collection
{
  /** @var ExtendedValue[] */
  public $buckets;
  /** @var int */
  public $valuesIndex;
  protected $collection_key = 'buckets';
  protected $bucketsType = ExtendedValue::class;
  protected $bucketsDataType = 'array';
  /** @param ExtendedValue[] */
  public function setBuckets($buckets)
  {
    $this->buckets = $buckets;
  }
  /** @return ExtendedValue[] */
  public function getBuckets()
  {
    return $this->buckets;
  }
  /** @param int */
  public function setValuesIndex($valuesIndex)
  {
    $this->valuesIndex = $valuesIndex;
  }
  /** @return int */
  public function getValuesIndex()
  {
    return $this->valuesIndex;
  }
}

class PivotGroupValueMetadata extends \Google\Model
{
  /** @var bool */
  public $collapsed;
  /** @var ExtendedValue */
  public $value;
  protected $valueType = ExtendedValue::class;
  protected $valueDataType = '';
  /** @param bool */
  public function setCollapsed($collapsed)
  {
    $this->collapsed = $collapsed;
  }
  /** @return bool */
  public function getCollapsed()
  {
    return $this->collapsed;
  }
  /** @param ExtendedValue */
  public function setValue(ExtendedValue $value)
  {
    $this->value = $value;
  }
  /** @return ExtendedValue */
  public function getValue()
  {
    return $this->value;
  }
}

class PivotTable extends \Google\Collection
{
  /** @var PivotGroup[] */
  public $columns;
  /** @var PivotFilterCriteria[] */
  public $criteria;
  /** @var DataExecutionStatus */
  public $dataExecutionStatus;
  /** @var string */
  public $dataSourceId;
  /** @var PivotFilterSpec[] */
  public $filterSpecs;
  /** @var PivotGroup[] */
  public $rows;
  /** @var GridRange */
  public $source;
  /** @var string */
  public $valueLayout;
  /** @var PivotValue[] */
  public $values;
  protected $collection_key = 'values';
  protected $columnsType = PivotGroup::class;
  protected $columnsDataType = 'array';
  protected $criteriaType = PivotFilterCriteria::class;
  protected $criteriaDataType = 'map';
  protected $dataExecutionStatusType = DataExecutionStatus::class;
  protected $dataExecutionStatusDataType = '';
  protected $filterSpecsType = PivotFilterSpec::class;
  protected $filterSpecsDataType = 'array';
  protected $rowsType = PivotGroup::class;
  protected $rowsDataType = 'array';
  protected $sourceType = GridRange::class;
  protected $sourceDataType = '';
  protected $valuesType = PivotValue::class;
  protected $valuesDataType = 'array';
  /** @param PivotGroup[] */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /** @return PivotGroup[] */
  public function getColumns()
  {
    return $this->columns;
  }
  /** @param PivotFilterCriteria[] */
  public function setCriteria($criteria)
  {
    $this->criteria = $criteria;
  }
  /** @return PivotFilterCriteria[] */
  public function getCriteria()
  {
    return $this->criteria;
  }
  /** @param DataExecutionStatus */
  public function setDataExecutionStatus(DataExecutionStatus $dataExecutionStatus)
  {
    $this->dataExecutionStatus = $dataExecutionStatus;
  }
  /** @return DataExecutionStatus */
  public function getDataExecutionStatus()
  {
    return $this->dataExecutionStatus;
  }
  /** @param string */
  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }
  /** @return string */
  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }
  /** @param PivotFilterSpec[] */
  public function setFilterSpecs($filterSpecs)
  {
    $this->filterSpecs = $filterSpecs;
  }
  /** @return PivotFilterSpec[] */
  public function getFilterSpecs()
  {
    return $this->filterSpecs;
  }
  /** @param PivotGroup[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return PivotGroup[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param GridRange */
  public function setSource(GridRange $source)
  {
    $this->source = $source;
  }
  /** @return GridRange */
  public function getSource()
  {
    return $this->source;
  }
  /** @param string */
  public function setValueLayout($valueLayout)
  {
    $this->valueLayout = $valueLayout;
  }
  /** @return string */
  public function getValueLayout()
  {
    return $this->valueLayout;
  }
  /** @param PivotValue[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return PivotValue[] */
  public function getValues()
  {
    return $this->values;
  }
}

class PivotValue extends \Google\Model
{
  /** @var string */
  public $calculatedDisplayType;
  /** @var DataSourceColumnReference */
  public $dataSourceColumnReference;
  /** @var string */
  public $formula;
  /** @var string */
  public $name;
  /** @var int */
  public $sourceColumnOffset;
  /** @var string */
  public $summarizeFunction;
  protected $dataSourceColumnReferenceType = DataSourceColumnReference::class;
  protected $dataSourceColumnReferenceDataType = '';
  /** @param string */
  public function setCalculatedDisplayType($calculatedDisplayType)
  {
    $this->calculatedDisplayType = $calculatedDisplayType;
  }
  /** @return string */
  public function getCalculatedDisplayType()
  {
    return $this->calculatedDisplayType;
  }
  /** @param DataSourceColumnReference */
  public function setDataSourceColumnReference(DataSourceColumnReference $dataSourceColumnReference)
  {
    $this->dataSourceColumnReference = $dataSourceColumnReference;
  }
  /** @return DataSourceColumnReference */
  public function getDataSourceColumnReference()
  {
    return $this->dataSourceColumnReference;
  }
  /** @param string */
  public function setFormula($formula)
  {
    $this->formula = $formula;
  }
  /** @return string */
  public function getFormula()
  {
    return $this->formula;
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
  public function setSourceColumnOffset($sourceColumnOffset)
  {
    $this->sourceColumnOffset = $sourceColumnOffset;
  }
  /** @return int */
  public function getSourceColumnOffset()
  {
    return $this->sourceColumnOffset;
  }
  /** @param string */
  public function setSummarizeFunction($summarizeFunction)
  {
    $this->summarizeFunction = $summarizeFunction;
  }
  /** @return string */
  public function getSummarizeFunction()
  {
    return $this->summarizeFunction;
  }
}

class PointStyle extends \Google\Model
{
  /** @var string */
  public $shape;
  public $size;

  /** @param string */
  public function setShape($shape)
  {
    $this->shape = $shape;
  }
  /** @return string */
  public function getShape()
  {
    return $this->shape;
  }
  public function setSize($size)
  {
    $this->size = $size;
  }
  public function getSize()
  {
    return $this->size;
  }
}

class ProtectedRange extends \Google\Collection
{
  /** @var string */
  public $description;
  /** @var Editors */
  public $editors;
  /** @var string */
  public $namedRangeId;
  /** @var int */
  public $protectedRangeId;
  /** @var GridRange */
  public $range;
  /** @var bool */
  public $requestingUserCanEdit;
  /** @var GridRange[] */
  public $unprotectedRanges;
  /** @var bool */
  public $warningOnly;
  protected $collection_key = 'unprotectedRanges';
  protected $editorsType = Editors::class;
  protected $editorsDataType = '';
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  protected $unprotectedRangesType = GridRange::class;
  protected $unprotectedRangesDataType = 'array';
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
  /** @param Editors */
  public function setEditors(Editors $editors)
  {
    $this->editors = $editors;
  }
  /** @return Editors */
  public function getEditors()
  {
    return $this->editors;
  }
  /** @param string */
  public function setNamedRangeId($namedRangeId)
  {
    $this->namedRangeId = $namedRangeId;
  }
  /** @return string */
  public function getNamedRangeId()
  {
    return $this->namedRangeId;
  }
  /** @param int */
  public function setProtectedRangeId($protectedRangeId)
  {
    $this->protectedRangeId = $protectedRangeId;
  }
  /** @return int */
  public function getProtectedRangeId()
  {
    return $this->protectedRangeId;
  }
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
  /** @param bool */
  public function setRequestingUserCanEdit($requestingUserCanEdit)
  {
    $this->requestingUserCanEdit = $requestingUserCanEdit;
  }
  /** @return bool */
  public function getRequestingUserCanEdit()
  {
    return $this->requestingUserCanEdit;
  }
  /** @param GridRange[] */
  public function setUnprotectedRanges($unprotectedRanges)
  {
    $this->unprotectedRanges = $unprotectedRanges;
  }
  /** @return GridRange[] */
  public function getUnprotectedRanges()
  {
    return $this->unprotectedRanges;
  }
  /** @param bool */
  public function setWarningOnly($warningOnly)
  {
    $this->warningOnly = $warningOnly;
  }
  /** @return bool */
  public function getWarningOnly()
  {
    return $this->warningOnly;
  }
}

class RandomizeRangeRequest extends \Google\Model
{
  /** @var GridRange */
  public $range;
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
}

class RefreshDataSourceObjectExecutionStatus extends \Google\Model
{
  /** @var DataExecutionStatus */
  public $dataExecutionStatus;
  /** @var DataSourceObjectReference */
  public $reference;
  protected $dataExecutionStatusType = DataExecutionStatus::class;
  protected $dataExecutionStatusDataType = '';
  protected $referenceType = DataSourceObjectReference::class;
  protected $referenceDataType = '';
  /** @param DataExecutionStatus */
  public function setDataExecutionStatus(DataExecutionStatus $dataExecutionStatus)
  {
    $this->dataExecutionStatus = $dataExecutionStatus;
  }
  /** @return DataExecutionStatus */
  public function getDataExecutionStatus()
  {
    return $this->dataExecutionStatus;
  }
  /** @param DataSourceObjectReference */
  public function setReference(DataSourceObjectReference $reference)
  {
    $this->reference = $reference;
  }
  /** @return DataSourceObjectReference */
  public function getReference()
  {
    return $this->reference;
  }
}

class RefreshDataSourceRequest extends \Google\Model
{
  /** @var string */
  public $dataSourceId;
  /** @var bool */
  public $force;
  /** @var bool */
  public $isAll;
  /** @var DataSourceObjectReferences */
  public $references;
  protected $referencesType = DataSourceObjectReferences::class;
  protected $referencesDataType = '';
  /** @param string */
  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }
  /** @return string */
  public function getDataSourceId()
  {
    return $this->dataSourceId;
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
  /** @param bool */
  public function setIsAll($isAll)
  {
    $this->isAll = $isAll;
  }
  /** @return bool */
  public function getIsAll()
  {
    return $this->isAll;
  }
  /** @param DataSourceObjectReferences */
  public function setReferences(DataSourceObjectReferences $references)
  {
    $this->references = $references;
  }
  /** @return DataSourceObjectReferences */
  public function getReferences()
  {
    return $this->references;
  }
}

class RefreshDataSourceResponse extends \Google\Collection
{
  /** @var RefreshDataSourceObjectExecutionStatus[] */
  public $statuses;
  protected $collection_key = 'statuses';
  protected $statusesType = RefreshDataSourceObjectExecutionStatus::class;
  protected $statusesDataType = 'array';
  /** @param RefreshDataSourceObjectExecutionStatus[] */
  public function setStatuses($statuses)
  {
    $this->statuses = $statuses;
  }
  /** @return RefreshDataSourceObjectExecutionStatus[] */
  public function getStatuses()
  {
    return $this->statuses;
  }
}

class RepeatCellRequest extends \Google\Model
{
  /** @var CellData */
  public $cell;
  /** @var string */
  public $fields;
  /** @var GridRange */
  public $range;
  protected $cellType = CellData::class;
  protected $cellDataType = '';
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  /** @param CellData */
  public function setCell(CellData $cell)
  {
    $this->cell = $cell;
  }
  /** @return CellData */
  public function getCell()
  {
    return $this->cell;
  }
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
}

class Request extends \Google\Model
{
  /** @var AddBandingRequest */
  public $addBanding;
  /** @var AddChartRequest */
  public $addChart;
  /** @var AddConditionalFormatRuleRequest */
  public $addConditionalFormatRule;
  /** @var AddDataSourceRequest */
  public $addDataSource;
  /** @var AddDimensionGroupRequest */
  public $addDimensionGroup;
  /** @var AddFilterViewRequest */
  public $addFilterView;
  /** @var AddNamedRangeRequest */
  public $addNamedRange;
  /** @var AddProtectedRangeRequest */
  public $addProtectedRange;
  /** @var AddSheetRequest */
  public $addSheet;
  /** @var AddSlicerRequest */
  public $addSlicer;
  /** @var AppendCellsRequest */
  public $appendCells;
  /** @var AppendDimensionRequest */
  public $appendDimension;
  /** @var AutoFillRequest */
  public $autoFill;
  /** @var AutoResizeDimensionsRequest */
  public $autoResizeDimensions;
  /** @var ClearBasicFilterRequest */
  public $clearBasicFilter;
  /** @var CopyPasteRequest */
  public $copyPaste;
  /** @var CreateDeveloperMetadataRequest */
  public $createDeveloperMetadata;
  /** @var CutPasteRequest */
  public $cutPaste;
  /** @var DeleteBandingRequest */
  public $deleteBanding;
  /** @var DeleteConditionalFormatRuleRequest */
  public $deleteConditionalFormatRule;
  /** @var DeleteDataSourceRequest */
  public $deleteDataSource;
  /** @var DeleteDeveloperMetadataRequest */
  public $deleteDeveloperMetadata;
  /** @var DeleteDimensionRequest */
  public $deleteDimension;
  /** @var DeleteDimensionGroupRequest */
  public $deleteDimensionGroup;
  /** @var DeleteDuplicatesRequest */
  public $deleteDuplicates;
  /** @var DeleteEmbeddedObjectRequest */
  public $deleteEmbeddedObject;
  /** @var DeleteFilterViewRequest */
  public $deleteFilterView;
  /** @var DeleteNamedRangeRequest */
  public $deleteNamedRange;
  /** @var DeleteProtectedRangeRequest */
  public $deleteProtectedRange;
  /** @var DeleteRangeRequest */
  public $deleteRange;
  /** @var DeleteSheetRequest */
  public $deleteSheet;
  /** @var DuplicateFilterViewRequest */
  public $duplicateFilterView;
  /** @var DuplicateSheetRequest */
  public $duplicateSheet;
  /** @var FindReplaceRequest */
  public $findReplace;
  /** @var InsertDimensionRequest */
  public $insertDimension;
  /** @var InsertRangeRequest */
  public $insertRange;
  /** @var MergeCellsRequest */
  public $mergeCells;
  /** @var MoveDimensionRequest */
  public $moveDimension;
  /** @var PasteDataRequest */
  public $pasteData;
  /** @var RandomizeRangeRequest */
  public $randomizeRange;
  /** @var RefreshDataSourceRequest */
  public $refreshDataSource;
  /** @var RepeatCellRequest */
  public $repeatCell;
  /** @var SetBasicFilterRequest */
  public $setBasicFilter;
  /** @var SetDataValidationRequest */
  public $setDataValidation;
  /** @var SortRangeRequest */
  public $sortRange;
  /** @var TextToColumnsRequest */
  public $textToColumns;
  /** @var TrimWhitespaceRequest */
  public $trimWhitespace;
  /** @var UnmergeCellsRequest */
  public $unmergeCells;
  /** @var UpdateBandingRequest */
  public $updateBanding;
  /** @var UpdateBordersRequest */
  public $updateBorders;
  /** @var UpdateCellsRequest */
  public $updateCells;
  /** @var UpdateChartSpecRequest */
  public $updateChartSpec;
  /** @var UpdateConditionalFormatRuleRequest */
  public $updateConditionalFormatRule;
  /** @var UpdateDataSourceRequest */
  public $updateDataSource;
  /** @var UpdateDeveloperMetadataRequest */
  public $updateDeveloperMetadata;
  /** @var UpdateDimensionGroupRequest */
  public $updateDimensionGroup;
  /** @var UpdateDimensionPropertiesRequest */
  public $updateDimensionProperties;
  /** @var UpdateEmbeddedObjectBorderRequest */
  public $updateEmbeddedObjectBorder;
  /** @var UpdateEmbeddedObjectPositionRequest */
  public $updateEmbeddedObjectPosition;
  /** @var UpdateFilterViewRequest */
  public $updateFilterView;
  /** @var UpdateNamedRangeRequest */
  public $updateNamedRange;
  /** @var UpdateProtectedRangeRequest */
  public $updateProtectedRange;
  /** @var UpdateSheetPropertiesRequest */
  public $updateSheetProperties;
  /** @var UpdateSlicerSpecRequest */
  public $updateSlicerSpec;
  /** @var UpdateSpreadsheetPropertiesRequest */
  public $updateSpreadsheetProperties;
  protected $addBandingType = AddBandingRequest::class;
  protected $addBandingDataType = '';
  protected $addChartType = AddChartRequest::class;
  protected $addChartDataType = '';
  protected $addConditionalFormatRuleType = AddConditionalFormatRuleRequest::class;
  protected $addConditionalFormatRuleDataType = '';
  protected $addDataSourceType = AddDataSourceRequest::class;
  protected $addDataSourceDataType = '';
  protected $addDimensionGroupType = AddDimensionGroupRequest::class;
  protected $addDimensionGroupDataType = '';
  protected $addFilterViewType = AddFilterViewRequest::class;
  protected $addFilterViewDataType = '';
  protected $addNamedRangeType = AddNamedRangeRequest::class;
  protected $addNamedRangeDataType = '';
  protected $addProtectedRangeType = AddProtectedRangeRequest::class;
  protected $addProtectedRangeDataType = '';
  protected $addSheetType = AddSheetRequest::class;
  protected $addSheetDataType = '';
  protected $addSlicerType = AddSlicerRequest::class;
  protected $addSlicerDataType = '';
  protected $appendCellsType = AppendCellsRequest::class;
  protected $appendCellsDataType = '';
  protected $appendDimensionType = AppendDimensionRequest::class;
  protected $appendDimensionDataType = '';
  protected $autoFillType = AutoFillRequest::class;
  protected $autoFillDataType = '';
  protected $autoResizeDimensionsType = AutoResizeDimensionsRequest::class;
  protected $autoResizeDimensionsDataType = '';
  protected $clearBasicFilterType = ClearBasicFilterRequest::class;
  protected $clearBasicFilterDataType = '';
  protected $copyPasteType = CopyPasteRequest::class;
  protected $copyPasteDataType = '';
  protected $createDeveloperMetadataType = CreateDeveloperMetadataRequest::class;
  protected $createDeveloperMetadataDataType = '';
  protected $cutPasteType = CutPasteRequest::class;
  protected $cutPasteDataType = '';
  protected $deleteBandingType = DeleteBandingRequest::class;
  protected $deleteBandingDataType = '';
  protected $deleteConditionalFormatRuleType = DeleteConditionalFormatRuleRequest::class;
  protected $deleteConditionalFormatRuleDataType = '';
  protected $deleteDataSourceType = DeleteDataSourceRequest::class;
  protected $deleteDataSourceDataType = '';
  protected $deleteDeveloperMetadataType = DeleteDeveloperMetadataRequest::class;
  protected $deleteDeveloperMetadataDataType = '';
  protected $deleteDimensionType = DeleteDimensionRequest::class;
  protected $deleteDimensionDataType = '';
  protected $deleteDimensionGroupType = DeleteDimensionGroupRequest::class;
  protected $deleteDimensionGroupDataType = '';
  protected $deleteDuplicatesType = DeleteDuplicatesRequest::class;
  protected $deleteDuplicatesDataType = '';
  protected $deleteEmbeddedObjectType = DeleteEmbeddedObjectRequest::class;
  protected $deleteEmbeddedObjectDataType = '';
  protected $deleteFilterViewType = DeleteFilterViewRequest::class;
  protected $deleteFilterViewDataType = '';
  protected $deleteNamedRangeType = DeleteNamedRangeRequest::class;
  protected $deleteNamedRangeDataType = '';
  protected $deleteProtectedRangeType = DeleteProtectedRangeRequest::class;
  protected $deleteProtectedRangeDataType = '';
  protected $deleteRangeType = DeleteRangeRequest::class;
  protected $deleteRangeDataType = '';
  protected $deleteSheetType = DeleteSheetRequest::class;
  protected $deleteSheetDataType = '';
  protected $duplicateFilterViewType = DuplicateFilterViewRequest::class;
  protected $duplicateFilterViewDataType = '';
  protected $duplicateSheetType = DuplicateSheetRequest::class;
  protected $duplicateSheetDataType = '';
  protected $findReplaceType = FindReplaceRequest::class;
  protected $findReplaceDataType = '';
  protected $insertDimensionType = InsertDimensionRequest::class;
  protected $insertDimensionDataType = '';
  protected $insertRangeType = InsertRangeRequest::class;
  protected $insertRangeDataType = '';
  protected $mergeCellsType = MergeCellsRequest::class;
  protected $mergeCellsDataType = '';
  protected $moveDimensionType = MoveDimensionRequest::class;
  protected $moveDimensionDataType = '';
  protected $pasteDataType = PasteDataRequest::class;
  protected $pasteDataDataType = '';
  protected $randomizeRangeType = RandomizeRangeRequest::class;
  protected $randomizeRangeDataType = '';
  protected $refreshDataSourceType = RefreshDataSourceRequest::class;
  protected $refreshDataSourceDataType = '';
  protected $repeatCellType = RepeatCellRequest::class;
  protected $repeatCellDataType = '';
  protected $setBasicFilterType = SetBasicFilterRequest::class;
  protected $setBasicFilterDataType = '';
  protected $setDataValidationType = SetDataValidationRequest::class;
  protected $setDataValidationDataType = '';
  protected $sortRangeType = SortRangeRequest::class;
  protected $sortRangeDataType = '';
  protected $textToColumnsType = TextToColumnsRequest::class;
  protected $textToColumnsDataType = '';
  protected $trimWhitespaceType = TrimWhitespaceRequest::class;
  protected $trimWhitespaceDataType = '';
  protected $unmergeCellsType = UnmergeCellsRequest::class;
  protected $unmergeCellsDataType = '';
  protected $updateBandingType = UpdateBandingRequest::class;
  protected $updateBandingDataType = '';
  protected $updateBordersType = UpdateBordersRequest::class;
  protected $updateBordersDataType = '';
  protected $updateCellsType = UpdateCellsRequest::class;
  protected $updateCellsDataType = '';
  protected $updateChartSpecType = UpdateChartSpecRequest::class;
  protected $updateChartSpecDataType = '';
  protected $updateConditionalFormatRuleType = UpdateConditionalFormatRuleRequest::class;
  protected $updateConditionalFormatRuleDataType = '';
  protected $updateDataSourceType = UpdateDataSourceRequest::class;
  protected $updateDataSourceDataType = '';
  protected $updateDeveloperMetadataType = UpdateDeveloperMetadataRequest::class;
  protected $updateDeveloperMetadataDataType = '';
  protected $updateDimensionGroupType = UpdateDimensionGroupRequest::class;
  protected $updateDimensionGroupDataType = '';
  protected $updateDimensionPropertiesType = UpdateDimensionPropertiesRequest::class;
  protected $updateDimensionPropertiesDataType = '';
  protected $updateEmbeddedObjectBorderType = UpdateEmbeddedObjectBorderRequest::class;
  protected $updateEmbeddedObjectBorderDataType = '';
  protected $updateEmbeddedObjectPositionType = UpdateEmbeddedObjectPositionRequest::class;
  protected $updateEmbeddedObjectPositionDataType = '';
  protected $updateFilterViewType = UpdateFilterViewRequest::class;
  protected $updateFilterViewDataType = '';
  protected $updateNamedRangeType = UpdateNamedRangeRequest::class;
  protected $updateNamedRangeDataType = '';
  protected $updateProtectedRangeType = UpdateProtectedRangeRequest::class;
  protected $updateProtectedRangeDataType = '';
  protected $updateSheetPropertiesType = UpdateSheetPropertiesRequest::class;
  protected $updateSheetPropertiesDataType = '';
  protected $updateSlicerSpecType = UpdateSlicerSpecRequest::class;
  protected $updateSlicerSpecDataType = '';
  protected $updateSpreadsheetPropertiesType = UpdateSpreadsheetPropertiesRequest::class;
  protected $updateSpreadsheetPropertiesDataType = '';
  /** @param AddBandingRequest */
  public function setAddBanding(AddBandingRequest $addBanding)
  {
    $this->addBanding = $addBanding;
  }
  /** @return AddBandingRequest */
  public function getAddBanding()
  {
    return $this->addBanding;
  }
  /** @param AddChartRequest */
  public function setAddChart(AddChartRequest $addChart)
  {
    $this->addChart = $addChart;
  }
  /** @return AddChartRequest */
  public function getAddChart()
  {
    return $this->addChart;
  }
  /** @param AddConditionalFormatRuleRequest */
  public function setAddConditionalFormatRule(AddConditionalFormatRuleRequest $addConditionalFormatRule)
  {
    $this->addConditionalFormatRule = $addConditionalFormatRule;
  }
  /** @return AddConditionalFormatRuleRequest */
  public function getAddConditionalFormatRule()
  {
    return $this->addConditionalFormatRule;
  }
  /** @param AddDataSourceRequest */
  public function setAddDataSource(AddDataSourceRequest $addDataSource)
  {
    $this->addDataSource = $addDataSource;
  }
  /** @return AddDataSourceRequest */
  public function getAddDataSource()
  {
    return $this->addDataSource;
  }
  /** @param AddDimensionGroupRequest */
  public function setAddDimensionGroup(AddDimensionGroupRequest $addDimensionGroup)
  {
    $this->addDimensionGroup = $addDimensionGroup;
  }
  /** @return AddDimensionGroupRequest */
  public function getAddDimensionGroup()
  {
    return $this->addDimensionGroup;
  }
  /** @param AddFilterViewRequest */
  public function setAddFilterView(AddFilterViewRequest $addFilterView)
  {
    $this->addFilterView = $addFilterView;
  }
  /** @return AddFilterViewRequest */
  public function getAddFilterView()
  {
    return $this->addFilterView;
  }
  /** @param AddNamedRangeRequest */
  public function setAddNamedRange(AddNamedRangeRequest $addNamedRange)
  {
    $this->addNamedRange = $addNamedRange;
  }
  /** @return AddNamedRangeRequest */
  public function getAddNamedRange()
  {
    return $this->addNamedRange;
  }
  /** @param AddProtectedRangeRequest */
  public function setAddProtectedRange(AddProtectedRangeRequest $addProtectedRange)
  {
    $this->addProtectedRange = $addProtectedRange;
  }
  /** @return AddProtectedRangeRequest */
  public function getAddProtectedRange()
  {
    return $this->addProtectedRange;
  }
  /** @param AddSheetRequest */
  public function setAddSheet(AddSheetRequest $addSheet)
  {
    $this->addSheet = $addSheet;
  }
  /** @return AddSheetRequest */
  public function getAddSheet()
  {
    return $this->addSheet;
  }
  /** @param AddSlicerRequest */
  public function setAddSlicer(AddSlicerRequest $addSlicer)
  {
    $this->addSlicer = $addSlicer;
  }
  /** @return AddSlicerRequest */
  public function getAddSlicer()
  {
    return $this->addSlicer;
  }
  /** @param AppendCellsRequest */
  public function setAppendCells(AppendCellsRequest $appendCells)
  {
    $this->appendCells = $appendCells;
  }
  /** @return AppendCellsRequest */
  public function getAppendCells()
  {
    return $this->appendCells;
  }
  /** @param AppendDimensionRequest */
  public function setAppendDimension(AppendDimensionRequest $appendDimension)
  {
    $this->appendDimension = $appendDimension;
  }
  /** @return AppendDimensionRequest */
  public function getAppendDimension()
  {
    return $this->appendDimension;
  }
  /** @param AutoFillRequest */
  public function setAutoFill(AutoFillRequest $autoFill)
  {
    $this->autoFill = $autoFill;
  }
  /** @return AutoFillRequest */
  public function getAutoFill()
  {
    return $this->autoFill;
  }
  /** @param AutoResizeDimensionsRequest */
  public function setAutoResizeDimensions(AutoResizeDimensionsRequest $autoResizeDimensions)
  {
    $this->autoResizeDimensions = $autoResizeDimensions;
  }
  /** @return AutoResizeDimensionsRequest */
  public function getAutoResizeDimensions()
  {
    return $this->autoResizeDimensions;
  }
  /** @param ClearBasicFilterRequest */
  public function setClearBasicFilter(ClearBasicFilterRequest $clearBasicFilter)
  {
    $this->clearBasicFilter = $clearBasicFilter;
  }
  /** @return ClearBasicFilterRequest */
  public function getClearBasicFilter()
  {
    return $this->clearBasicFilter;
  }
  /** @param CopyPasteRequest */
  public function setCopyPaste(CopyPasteRequest $copyPaste)
  {
    $this->copyPaste = $copyPaste;
  }
  /** @return CopyPasteRequest */
  public function getCopyPaste()
  {
    return $this->copyPaste;
  }
  /** @param CreateDeveloperMetadataRequest */
  public function setCreateDeveloperMetadata(CreateDeveloperMetadataRequest $createDeveloperMetadata)
  {
    $this->createDeveloperMetadata = $createDeveloperMetadata;
  }
  /** @return CreateDeveloperMetadataRequest */
  public function getCreateDeveloperMetadata()
  {
    return $this->createDeveloperMetadata;
  }
  /** @param CutPasteRequest */
  public function setCutPaste(CutPasteRequest $cutPaste)
  {
    $this->cutPaste = $cutPaste;
  }
  /** @return CutPasteRequest */
  public function getCutPaste()
  {
    return $this->cutPaste;
  }
  /** @param DeleteBandingRequest */
  public function setDeleteBanding(DeleteBandingRequest $deleteBanding)
  {
    $this->deleteBanding = $deleteBanding;
  }
  /** @return DeleteBandingRequest */
  public function getDeleteBanding()
  {
    return $this->deleteBanding;
  }
  /** @param DeleteConditionalFormatRuleRequest */
  public function setDeleteConditionalFormatRule(DeleteConditionalFormatRuleRequest $deleteConditionalFormatRule)
  {
    $this->deleteConditionalFormatRule = $deleteConditionalFormatRule;
  }
  /** @return DeleteConditionalFormatRuleRequest */
  public function getDeleteConditionalFormatRule()
  {
    return $this->deleteConditionalFormatRule;
  }
  /** @param DeleteDataSourceRequest */
  public function setDeleteDataSource(DeleteDataSourceRequest $deleteDataSource)
  {
    $this->deleteDataSource = $deleteDataSource;
  }
  /** @return DeleteDataSourceRequest */
  public function getDeleteDataSource()
  {
    return $this->deleteDataSource;
  }
  /** @param DeleteDeveloperMetadataRequest */
  public function setDeleteDeveloperMetadata(DeleteDeveloperMetadataRequest $deleteDeveloperMetadata)
  {
    $this->deleteDeveloperMetadata = $deleteDeveloperMetadata;
  }
  /** @return DeleteDeveloperMetadataRequest */
  public function getDeleteDeveloperMetadata()
  {
    return $this->deleteDeveloperMetadata;
  }
  /** @param DeleteDimensionRequest */
  public function setDeleteDimension(DeleteDimensionRequest $deleteDimension)
  {
    $this->deleteDimension = $deleteDimension;
  }
  /** @return DeleteDimensionRequest */
  public function getDeleteDimension()
  {
    return $this->deleteDimension;
  }
  /** @param DeleteDimensionGroupRequest */
  public function setDeleteDimensionGroup(DeleteDimensionGroupRequest $deleteDimensionGroup)
  {
    $this->deleteDimensionGroup = $deleteDimensionGroup;
  }
  /** @return DeleteDimensionGroupRequest */
  public function getDeleteDimensionGroup()
  {
    return $this->deleteDimensionGroup;
  }
  /** @param DeleteDuplicatesRequest */
  public function setDeleteDuplicates(DeleteDuplicatesRequest $deleteDuplicates)
  {
    $this->deleteDuplicates = $deleteDuplicates;
  }
  /** @return DeleteDuplicatesRequest */
  public function getDeleteDuplicates()
  {
    return $this->deleteDuplicates;
  }
  /** @param DeleteEmbeddedObjectRequest */
  public function setDeleteEmbeddedObject(DeleteEmbeddedObjectRequest $deleteEmbeddedObject)
  {
    $this->deleteEmbeddedObject = $deleteEmbeddedObject;
  }
  /** @return DeleteEmbeddedObjectRequest */
  public function getDeleteEmbeddedObject()
  {
    return $this->deleteEmbeddedObject;
  }
  /** @param DeleteFilterViewRequest */
  public function setDeleteFilterView(DeleteFilterViewRequest $deleteFilterView)
  {
    $this->deleteFilterView = $deleteFilterView;
  }
  /** @return DeleteFilterViewRequest */
  public function getDeleteFilterView()
  {
    return $this->deleteFilterView;
  }
  /** @param DeleteNamedRangeRequest */
  public function setDeleteNamedRange(DeleteNamedRangeRequest $deleteNamedRange)
  {
    $this->deleteNamedRange = $deleteNamedRange;
  }
  /** @return DeleteNamedRangeRequest */
  public function getDeleteNamedRange()
  {
    return $this->deleteNamedRange;
  }
  /** @param DeleteProtectedRangeRequest */
  public function setDeleteProtectedRange(DeleteProtectedRangeRequest $deleteProtectedRange)
  {
    $this->deleteProtectedRange = $deleteProtectedRange;
  }
  /** @return DeleteProtectedRangeRequest */
  public function getDeleteProtectedRange()
  {
    return $this->deleteProtectedRange;
  }
  /** @param DeleteRangeRequest */
  public function setDeleteRange(DeleteRangeRequest $deleteRange)
  {
    $this->deleteRange = $deleteRange;
  }
  /** @return DeleteRangeRequest */
  public function getDeleteRange()
  {
    return $this->deleteRange;
  }
  /** @param DeleteSheetRequest */
  public function setDeleteSheet(DeleteSheetRequest $deleteSheet)
  {
    $this->deleteSheet = $deleteSheet;
  }
  /** @return DeleteSheetRequest */
  public function getDeleteSheet()
  {
    return $this->deleteSheet;
  }
  /** @param DuplicateFilterViewRequest */
  public function setDuplicateFilterView(DuplicateFilterViewRequest $duplicateFilterView)
  {
    $this->duplicateFilterView = $duplicateFilterView;
  }
  /** @return DuplicateFilterViewRequest */
  public function getDuplicateFilterView()
  {
    return $this->duplicateFilterView;
  }
  /** @param DuplicateSheetRequest */
  public function setDuplicateSheet(DuplicateSheetRequest $duplicateSheet)
  {
    $this->duplicateSheet = $duplicateSheet;
  }
  /** @return DuplicateSheetRequest */
  public function getDuplicateSheet()
  {
    return $this->duplicateSheet;
  }
  /** @param FindReplaceRequest */
  public function setFindReplace(FindReplaceRequest $findReplace)
  {
    $this->findReplace = $findReplace;
  }
  /** @return FindReplaceRequest */
  public function getFindReplace()
  {
    return $this->findReplace;
  }
  /** @param InsertDimensionRequest */
  public function setInsertDimension(InsertDimensionRequest $insertDimension)
  {
    $this->insertDimension = $insertDimension;
  }
  /** @return InsertDimensionRequest */
  public function getInsertDimension()
  {
    return $this->insertDimension;
  }
  /** @param InsertRangeRequest */
  public function setInsertRange(InsertRangeRequest $insertRange)
  {
    $this->insertRange = $insertRange;
  }
  /** @return InsertRangeRequest */
  public function getInsertRange()
  {
    return $this->insertRange;
  }
  /** @param MergeCellsRequest */
  public function setMergeCells(MergeCellsRequest $mergeCells)
  {
    $this->mergeCells = $mergeCells;
  }
  /** @return MergeCellsRequest */
  public function getMergeCells()
  {
    return $this->mergeCells;
  }
  /** @param MoveDimensionRequest */
  public function setMoveDimension(MoveDimensionRequest $moveDimension)
  {
    $this->moveDimension = $moveDimension;
  }
  /** @return MoveDimensionRequest */
  public function getMoveDimension()
  {
    return $this->moveDimension;
  }
  /** @param PasteDataRequest */
  public function setPasteData(PasteDataRequest $pasteData)
  {
    $this->pasteData = $pasteData;
  }
  /** @return PasteDataRequest */
  public function getPasteData()
  {
    return $this->pasteData;
  }
  /** @param RandomizeRangeRequest */
  public function setRandomizeRange(RandomizeRangeRequest $randomizeRange)
  {
    $this->randomizeRange = $randomizeRange;
  }
  /** @return RandomizeRangeRequest */
  public function getRandomizeRange()
  {
    return $this->randomizeRange;
  }
  /** @param RefreshDataSourceRequest */
  public function setRefreshDataSource(RefreshDataSourceRequest $refreshDataSource)
  {
    $this->refreshDataSource = $refreshDataSource;
  }
  /** @return RefreshDataSourceRequest */
  public function getRefreshDataSource()
  {
    return $this->refreshDataSource;
  }
  /** @param RepeatCellRequest */
  public function setRepeatCell(RepeatCellRequest $repeatCell)
  {
    $this->repeatCell = $repeatCell;
  }
  /** @return RepeatCellRequest */
  public function getRepeatCell()
  {
    return $this->repeatCell;
  }
  /** @param SetBasicFilterRequest */
  public function setSetBasicFilter(SetBasicFilterRequest $setBasicFilter)
  {
    $this->setBasicFilter = $setBasicFilter;
  }
  /** @return SetBasicFilterRequest */
  public function getSetBasicFilter()
  {
    return $this->setBasicFilter;
  }
  /** @param SetDataValidationRequest */
  public function setSetDataValidation(SetDataValidationRequest $setDataValidation)
  {
    $this->setDataValidation = $setDataValidation;
  }
  /** @return SetDataValidationRequest */
  public function getSetDataValidation()
  {
    return $this->setDataValidation;
  }
  /** @param SortRangeRequest */
  public function setSortRange(SortRangeRequest $sortRange)
  {
    $this->sortRange = $sortRange;
  }
  /** @return SortRangeRequest */
  public function getSortRange()
  {
    return $this->sortRange;
  }
  /** @param TextToColumnsRequest */
  public function setTextToColumns(TextToColumnsRequest $textToColumns)
  {
    $this->textToColumns = $textToColumns;
  }
  /** @return TextToColumnsRequest */
  public function getTextToColumns()
  {
    return $this->textToColumns;
  }
  /** @param TrimWhitespaceRequest */
  public function setTrimWhitespace(TrimWhitespaceRequest $trimWhitespace)
  {
    $this->trimWhitespace = $trimWhitespace;
  }
  /** @return TrimWhitespaceRequest */
  public function getTrimWhitespace()
  {
    return $this->trimWhitespace;
  }
  /** @param UnmergeCellsRequest */
  public function setUnmergeCells(UnmergeCellsRequest $unmergeCells)
  {
    $this->unmergeCells = $unmergeCells;
  }
  /** @return UnmergeCellsRequest */
  public function getUnmergeCells()
  {
    return $this->unmergeCells;
  }
  /** @param UpdateBandingRequest */
  public function setUpdateBanding(UpdateBandingRequest $updateBanding)
  {
    $this->updateBanding = $updateBanding;
  }
  /** @return UpdateBandingRequest */
  public function getUpdateBanding()
  {
    return $this->updateBanding;
  }
  /** @param UpdateBordersRequest */
  public function setUpdateBorders(UpdateBordersRequest $updateBorders)
  {
    $this->updateBorders = $updateBorders;
  }
  /** @return UpdateBordersRequest */
  public function getUpdateBorders()
  {
    return $this->updateBorders;
  }
  /** @param UpdateCellsRequest */
  public function setUpdateCells(UpdateCellsRequest $updateCells)
  {
    $this->updateCells = $updateCells;
  }
  /** @return UpdateCellsRequest */
  public function getUpdateCells()
  {
    return $this->updateCells;
  }
  /** @param UpdateChartSpecRequest */
  public function setUpdateChartSpec(UpdateChartSpecRequest $updateChartSpec)
  {
    $this->updateChartSpec = $updateChartSpec;
  }
  /** @return UpdateChartSpecRequest */
  public function getUpdateChartSpec()
  {
    return $this->updateChartSpec;
  }
  /** @param UpdateConditionalFormatRuleRequest */
  public function setUpdateConditionalFormatRule(UpdateConditionalFormatRuleRequest $updateConditionalFormatRule)
  {
    $this->updateConditionalFormatRule = $updateConditionalFormatRule;
  }
  /** @return UpdateConditionalFormatRuleRequest */
  public function getUpdateConditionalFormatRule()
  {
    return $this->updateConditionalFormatRule;
  }
  /** @param UpdateDataSourceRequest */
  public function setUpdateDataSource(UpdateDataSourceRequest $updateDataSource)
  {
    $this->updateDataSource = $updateDataSource;
  }
  /** @return UpdateDataSourceRequest */
  public function getUpdateDataSource()
  {
    return $this->updateDataSource;
  }
  /** @param UpdateDeveloperMetadataRequest */
  public function setUpdateDeveloperMetadata(UpdateDeveloperMetadataRequest $updateDeveloperMetadata)
  {
    $this->updateDeveloperMetadata = $updateDeveloperMetadata;
  }
  /** @return UpdateDeveloperMetadataRequest */
  public function getUpdateDeveloperMetadata()
  {
    return $this->updateDeveloperMetadata;
  }
  /** @param UpdateDimensionGroupRequest */
  public function setUpdateDimensionGroup(UpdateDimensionGroupRequest $updateDimensionGroup)
  {
    $this->updateDimensionGroup = $updateDimensionGroup;
  }
  /** @return UpdateDimensionGroupRequest */
  public function getUpdateDimensionGroup()
  {
    return $this->updateDimensionGroup;
  }
  /** @param UpdateDimensionPropertiesRequest */
  public function setUpdateDimensionProperties(UpdateDimensionPropertiesRequest $updateDimensionProperties)
  {
    $this->updateDimensionProperties = $updateDimensionProperties;
  }
  /** @return UpdateDimensionPropertiesRequest */
  public function getUpdateDimensionProperties()
  {
    return $this->updateDimensionProperties;
  }
  /** @param UpdateEmbeddedObjectBorderRequest */
  public function setUpdateEmbeddedObjectBorder(UpdateEmbeddedObjectBorderRequest $updateEmbeddedObjectBorder)
  {
    $this->updateEmbeddedObjectBorder = $updateEmbeddedObjectBorder;
  }
  /** @return UpdateEmbeddedObjectBorderRequest */
  public function getUpdateEmbeddedObjectBorder()
  {
    return $this->updateEmbeddedObjectBorder;
  }
  /** @param UpdateEmbeddedObjectPositionRequest */
  public function setUpdateEmbeddedObjectPosition(UpdateEmbeddedObjectPositionRequest $updateEmbeddedObjectPosition)
  {
    $this->updateEmbeddedObjectPosition = $updateEmbeddedObjectPosition;
  }
  /** @return UpdateEmbeddedObjectPositionRequest */
  public function getUpdateEmbeddedObjectPosition()
  {
    return $this->updateEmbeddedObjectPosition;
  }
  /** @param UpdateFilterViewRequest */
  public function setUpdateFilterView(UpdateFilterViewRequest $updateFilterView)
  {
    $this->updateFilterView = $updateFilterView;
  }
  /** @return UpdateFilterViewRequest */
  public function getUpdateFilterView()
  {
    return $this->updateFilterView;
  }
  /** @param UpdateNamedRangeRequest */
  public function setUpdateNamedRange(UpdateNamedRangeRequest $updateNamedRange)
  {
    $this->updateNamedRange = $updateNamedRange;
  }
  /** @return UpdateNamedRangeRequest */
  public function getUpdateNamedRange()
  {
    return $this->updateNamedRange;
  }
  /** @param UpdateProtectedRangeRequest */
  public function setUpdateProtectedRange(UpdateProtectedRangeRequest $updateProtectedRange)
  {
    $this->updateProtectedRange = $updateProtectedRange;
  }
  /** @return UpdateProtectedRangeRequest */
  public function getUpdateProtectedRange()
  {
    return $this->updateProtectedRange;
  }
  /** @param UpdateSheetPropertiesRequest */
  public function setUpdateSheetProperties(UpdateSheetPropertiesRequest $updateSheetProperties)
  {
    $this->updateSheetProperties = $updateSheetProperties;
  }
  /** @return UpdateSheetPropertiesRequest */
  public function getUpdateSheetProperties()
  {
    return $this->updateSheetProperties;
  }
  /** @param UpdateSlicerSpecRequest */
  public function setUpdateSlicerSpec(UpdateSlicerSpecRequest $updateSlicerSpec)
  {
    $this->updateSlicerSpec = $updateSlicerSpec;
  }
  /** @return UpdateSlicerSpecRequest */
  public function getUpdateSlicerSpec()
  {
    return $this->updateSlicerSpec;
  }
  /** @param UpdateSpreadsheetPropertiesRequest */
  public function setUpdateSpreadsheetProperties(UpdateSpreadsheetPropertiesRequest $updateSpreadsheetProperties)
  {
    $this->updateSpreadsheetProperties = $updateSpreadsheetProperties;
  }
  /** @return UpdateSpreadsheetPropertiesRequest */
  public function getUpdateSpreadsheetProperties()
  {
    return $this->updateSpreadsheetProperties;
  }
}

class Response extends \Google\Model
{
  /** @var AddBandingResponse */
  public $addBanding;
  /** @var AddChartResponse */
  public $addChart;
  /** @var AddDataSourceResponse */
  public $addDataSource;
  /** @var AddDimensionGroupResponse */
  public $addDimensionGroup;
  /** @var AddFilterViewResponse */
  public $addFilterView;
  /** @var AddNamedRangeResponse */
  public $addNamedRange;
  /** @var AddProtectedRangeResponse */
  public $addProtectedRange;
  /** @var AddSheetResponse */
  public $addSheet;
  /** @var AddSlicerResponse */
  public $addSlicer;
  /** @var CreateDeveloperMetadataResponse */
  public $createDeveloperMetadata;
  /** @var DeleteConditionalFormatRuleResponse */
  public $deleteConditionalFormatRule;
  /** @var DeleteDeveloperMetadataResponse */
  public $deleteDeveloperMetadata;
  /** @var DeleteDimensionGroupResponse */
  public $deleteDimensionGroup;
  /** @var DeleteDuplicatesResponse */
  public $deleteDuplicates;
  /** @var DuplicateFilterViewResponse */
  public $duplicateFilterView;
  /** @var DuplicateSheetResponse */
  public $duplicateSheet;
  /** @var FindReplaceResponse */
  public $findReplace;
  /** @var RefreshDataSourceResponse */
  public $refreshDataSource;
  /** @var TrimWhitespaceResponse */
  public $trimWhitespace;
  /** @var UpdateConditionalFormatRuleResponse */
  public $updateConditionalFormatRule;
  /** @var UpdateDataSourceResponse */
  public $updateDataSource;
  /** @var UpdateDeveloperMetadataResponse */
  public $updateDeveloperMetadata;
  /** @var UpdateEmbeddedObjectPositionResponse */
  public $updateEmbeddedObjectPosition;
  protected $addBandingType = AddBandingResponse::class;
  protected $addBandingDataType = '';
  protected $addChartType = AddChartResponse::class;
  protected $addChartDataType = '';
  protected $addDataSourceType = AddDataSourceResponse::class;
  protected $addDataSourceDataType = '';
  protected $addDimensionGroupType = AddDimensionGroupResponse::class;
  protected $addDimensionGroupDataType = '';
  protected $addFilterViewType = AddFilterViewResponse::class;
  protected $addFilterViewDataType = '';
  protected $addNamedRangeType = AddNamedRangeResponse::class;
  protected $addNamedRangeDataType = '';
  protected $addProtectedRangeType = AddProtectedRangeResponse::class;
  protected $addProtectedRangeDataType = '';
  protected $addSheetType = AddSheetResponse::class;
  protected $addSheetDataType = '';
  protected $addSlicerType = AddSlicerResponse::class;
  protected $addSlicerDataType = '';
  protected $createDeveloperMetadataType = CreateDeveloperMetadataResponse::class;
  protected $createDeveloperMetadataDataType = '';
  protected $deleteConditionalFormatRuleType = DeleteConditionalFormatRuleResponse::class;
  protected $deleteConditionalFormatRuleDataType = '';
  protected $deleteDeveloperMetadataType = DeleteDeveloperMetadataResponse::class;
  protected $deleteDeveloperMetadataDataType = '';
  protected $deleteDimensionGroupType = DeleteDimensionGroupResponse::class;
  protected $deleteDimensionGroupDataType = '';
  protected $deleteDuplicatesType = DeleteDuplicatesResponse::class;
  protected $deleteDuplicatesDataType = '';
  protected $duplicateFilterViewType = DuplicateFilterViewResponse::class;
  protected $duplicateFilterViewDataType = '';
  protected $duplicateSheetType = DuplicateSheetResponse::class;
  protected $duplicateSheetDataType = '';
  protected $findReplaceType = FindReplaceResponse::class;
  protected $findReplaceDataType = '';
  protected $refreshDataSourceType = RefreshDataSourceResponse::class;
  protected $refreshDataSourceDataType = '';
  protected $trimWhitespaceType = TrimWhitespaceResponse::class;
  protected $trimWhitespaceDataType = '';
  protected $updateConditionalFormatRuleType = UpdateConditionalFormatRuleResponse::class;
  protected $updateConditionalFormatRuleDataType = '';
  protected $updateDataSourceType = UpdateDataSourceResponse::class;
  protected $updateDataSourceDataType = '';
  protected $updateDeveloperMetadataType = UpdateDeveloperMetadataResponse::class;
  protected $updateDeveloperMetadataDataType = '';
  protected $updateEmbeddedObjectPositionType = UpdateEmbeddedObjectPositionResponse::class;
  protected $updateEmbeddedObjectPositionDataType = '';
  /** @param AddBandingResponse */
  public function setAddBanding(AddBandingResponse $addBanding)
  {
    $this->addBanding = $addBanding;
  }
  /** @return AddBandingResponse */
  public function getAddBanding()
  {
    return $this->addBanding;
  }
  /** @param AddChartResponse */
  public function setAddChart(AddChartResponse $addChart)
  {
    $this->addChart = $addChart;
  }
  /** @return AddChartResponse */
  public function getAddChart()
  {
    return $this->addChart;
  }
  /** @param AddDataSourceResponse */
  public function setAddDataSource(AddDataSourceResponse $addDataSource)
  {
    $this->addDataSource = $addDataSource;
  }
  /** @return AddDataSourceResponse */
  public function getAddDataSource()
  {
    return $this->addDataSource;
  }
  /** @param AddDimensionGroupResponse */
  public function setAddDimensionGroup(AddDimensionGroupResponse $addDimensionGroup)
  {
    $this->addDimensionGroup = $addDimensionGroup;
  }
  /** @return AddDimensionGroupResponse */
  public function getAddDimensionGroup()
  {
    return $this->addDimensionGroup;
  }
  /** @param AddFilterViewResponse */
  public function setAddFilterView(AddFilterViewResponse $addFilterView)
  {
    $this->addFilterView = $addFilterView;
  }
  /** @return AddFilterViewResponse */
  public function getAddFilterView()
  {
    return $this->addFilterView;
  }
  /** @param AddNamedRangeResponse */
  public function setAddNamedRange(AddNamedRangeResponse $addNamedRange)
  {
    $this->addNamedRange = $addNamedRange;
  }
  /** @return AddNamedRangeResponse */
  public function getAddNamedRange()
  {
    return $this->addNamedRange;
  }
  /** @param AddProtectedRangeResponse */
  public function setAddProtectedRange(AddProtectedRangeResponse $addProtectedRange)
  {
    $this->addProtectedRange = $addProtectedRange;
  }
  /** @return AddProtectedRangeResponse */
  public function getAddProtectedRange()
  {
    return $this->addProtectedRange;
  }
  /** @param AddSheetResponse */
  public function setAddSheet(AddSheetResponse $addSheet)
  {
    $this->addSheet = $addSheet;
  }
  /** @return AddSheetResponse */
  public function getAddSheet()
  {
    return $this->addSheet;
  }
  /** @param AddSlicerResponse */
  public function setAddSlicer(AddSlicerResponse $addSlicer)
  {
    $this->addSlicer = $addSlicer;
  }
  /** @return AddSlicerResponse */
  public function getAddSlicer()
  {
    return $this->addSlicer;
  }
  /** @param CreateDeveloperMetadataResponse */
  public function setCreateDeveloperMetadata(CreateDeveloperMetadataResponse $createDeveloperMetadata)
  {
    $this->createDeveloperMetadata = $createDeveloperMetadata;
  }
  /** @return CreateDeveloperMetadataResponse */
  public function getCreateDeveloperMetadata()
  {
    return $this->createDeveloperMetadata;
  }
  /** @param DeleteConditionalFormatRuleResponse */
  public function setDeleteConditionalFormatRule(DeleteConditionalFormatRuleResponse $deleteConditionalFormatRule)
  {
    $this->deleteConditionalFormatRule = $deleteConditionalFormatRule;
  }
  /** @return DeleteConditionalFormatRuleResponse */
  public function getDeleteConditionalFormatRule()
  {
    return $this->deleteConditionalFormatRule;
  }
  /** @param DeleteDeveloperMetadataResponse */
  public function setDeleteDeveloperMetadata(DeleteDeveloperMetadataResponse $deleteDeveloperMetadata)
  {
    $this->deleteDeveloperMetadata = $deleteDeveloperMetadata;
  }
  /** @return DeleteDeveloperMetadataResponse */
  public function getDeleteDeveloperMetadata()
  {
    return $this->deleteDeveloperMetadata;
  }
  /** @param DeleteDimensionGroupResponse */
  public function setDeleteDimensionGroup(DeleteDimensionGroupResponse $deleteDimensionGroup)
  {
    $this->deleteDimensionGroup = $deleteDimensionGroup;
  }
  /** @return DeleteDimensionGroupResponse */
  public function getDeleteDimensionGroup()
  {
    return $this->deleteDimensionGroup;
  }
  /** @param DeleteDuplicatesResponse */
  public function setDeleteDuplicates(DeleteDuplicatesResponse $deleteDuplicates)
  {
    $this->deleteDuplicates = $deleteDuplicates;
  }
  /** @return DeleteDuplicatesResponse */
  public function getDeleteDuplicates()
  {
    return $this->deleteDuplicates;
  }
  /** @param DuplicateFilterViewResponse */
  public function setDuplicateFilterView(DuplicateFilterViewResponse $duplicateFilterView)
  {
    $this->duplicateFilterView = $duplicateFilterView;
  }
  /** @return DuplicateFilterViewResponse */
  public function getDuplicateFilterView()
  {
    return $this->duplicateFilterView;
  }
  /** @param DuplicateSheetResponse */
  public function setDuplicateSheet(DuplicateSheetResponse $duplicateSheet)
  {
    $this->duplicateSheet = $duplicateSheet;
  }
  /** @return DuplicateSheetResponse */
  public function getDuplicateSheet()
  {
    return $this->duplicateSheet;
  }
  /** @param FindReplaceResponse */
  public function setFindReplace(FindReplaceResponse $findReplace)
  {
    $this->findReplace = $findReplace;
  }
  /** @return FindReplaceResponse */
  public function getFindReplace()
  {
    return $this->findReplace;
  }
  /** @param RefreshDataSourceResponse */
  public function setRefreshDataSource(RefreshDataSourceResponse $refreshDataSource)
  {
    $this->refreshDataSource = $refreshDataSource;
  }
  /** @return RefreshDataSourceResponse */
  public function getRefreshDataSource()
  {
    return $this->refreshDataSource;
  }
  /** @param TrimWhitespaceResponse */
  public function setTrimWhitespace(TrimWhitespaceResponse $trimWhitespace)
  {
    $this->trimWhitespace = $trimWhitespace;
  }
  /** @return TrimWhitespaceResponse */
  public function getTrimWhitespace()
  {
    return $this->trimWhitespace;
  }
  /** @param UpdateConditionalFormatRuleResponse */
  public function setUpdateConditionalFormatRule(UpdateConditionalFormatRuleResponse $updateConditionalFormatRule)
  {
    $this->updateConditionalFormatRule = $updateConditionalFormatRule;
  }
  /** @return UpdateConditionalFormatRuleResponse */
  public function getUpdateConditionalFormatRule()
  {
    return $this->updateConditionalFormatRule;
  }
  /** @param UpdateDataSourceResponse */
  public function setUpdateDataSource(UpdateDataSourceResponse $updateDataSource)
  {
    $this->updateDataSource = $updateDataSource;
  }
  /** @return UpdateDataSourceResponse */
  public function getUpdateDataSource()
  {
    return $this->updateDataSource;
  }
  /** @param UpdateDeveloperMetadataResponse */
  public function setUpdateDeveloperMetadata(UpdateDeveloperMetadataResponse $updateDeveloperMetadata)
  {
    $this->updateDeveloperMetadata = $updateDeveloperMetadata;
  }
  /** @return UpdateDeveloperMetadataResponse */
  public function getUpdateDeveloperMetadata()
  {
    return $this->updateDeveloperMetadata;
  }
  /** @param UpdateEmbeddedObjectPositionResponse */
  public function setUpdateEmbeddedObjectPosition(UpdateEmbeddedObjectPositionResponse $updateEmbeddedObjectPosition)
  {
    $this->updateEmbeddedObjectPosition = $updateEmbeddedObjectPosition;
  }
  /** @return UpdateEmbeddedObjectPositionResponse */
  public function getUpdateEmbeddedObjectPosition()
  {
    return $this->updateEmbeddedObjectPosition;
  }
}

class RowData extends \Google\Collection
{
  /** @var CellData[] */
  public $values;
  protected $collection_key = 'values';
  protected $valuesType = CellData::class;
  protected $valuesDataType = 'array';
  /** @param CellData[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return CellData[] */
  public function getValues()
  {
    return $this->values;
  }
}

class ScorecardChartSpec extends \Google\Model
{
  /** @var string */
  public $aggregateType;
  /** @var ChartData */
  public $baselineValueData;
  /** @var BaselineValueFormat */
  public $baselineValueFormat;
  /** @var ChartCustomNumberFormatOptions */
  public $customFormatOptions;
  /** @var ChartData */
  public $keyValueData;
  /** @var KeyValueFormat */
  public $keyValueFormat;
  /** @var string */
  public $numberFormatSource;
  public $scaleFactor;
  protected $baselineValueDataType = ChartData::class;
  protected $baselineValueDataDataType = '';
  protected $baselineValueFormatType = BaselineValueFormat::class;
  protected $baselineValueFormatDataType = '';
  protected $customFormatOptionsType = ChartCustomNumberFormatOptions::class;
  protected $customFormatOptionsDataType = '';
  protected $keyValueDataType = ChartData::class;
  protected $keyValueDataDataType = '';
  protected $keyValueFormatType = KeyValueFormat::class;
  protected $keyValueFormatDataType = '';
  /** @param string */
  public function setAggregateType($aggregateType)
  {
    $this->aggregateType = $aggregateType;
  }
  /** @return string */
  public function getAggregateType()
  {
    return $this->aggregateType;
  }
  /** @param ChartData */
  public function setBaselineValueData(ChartData $baselineValueData)
  {
    $this->baselineValueData = $baselineValueData;
  }
  /** @return ChartData */
  public function getBaselineValueData()
  {
    return $this->baselineValueData;
  }
  /** @param BaselineValueFormat */
  public function setBaselineValueFormat(BaselineValueFormat $baselineValueFormat)
  {
    $this->baselineValueFormat = $baselineValueFormat;
  }
  /** @return BaselineValueFormat */
  public function getBaselineValueFormat()
  {
    return $this->baselineValueFormat;
  }
  /** @param ChartCustomNumberFormatOptions */
  public function setCustomFormatOptions(ChartCustomNumberFormatOptions $customFormatOptions)
  {
    $this->customFormatOptions = $customFormatOptions;
  }
  /** @return ChartCustomNumberFormatOptions */
  public function getCustomFormatOptions()
  {
    return $this->customFormatOptions;
  }
  /** @param ChartData */
  public function setKeyValueData(ChartData $keyValueData)
  {
    $this->keyValueData = $keyValueData;
  }
  /** @return ChartData */
  public function getKeyValueData()
  {
    return $this->keyValueData;
  }
  /** @param KeyValueFormat */
  public function setKeyValueFormat(KeyValueFormat $keyValueFormat)
  {
    $this->keyValueFormat = $keyValueFormat;
  }
  /** @return KeyValueFormat */
  public function getKeyValueFormat()
  {
    return $this->keyValueFormat;
  }
  /** @param string */
  public function setNumberFormatSource($numberFormatSource)
  {
    $this->numberFormatSource = $numberFormatSource;
  }
  /** @return string */
  public function getNumberFormatSource()
  {
    return $this->numberFormatSource;
  }
  public function setScaleFactor($scaleFactor)
  {
    $this->scaleFactor = $scaleFactor;
  }
  public function getScaleFactor()
  {
    return $this->scaleFactor;
  }
}

class SearchDeveloperMetadataRequest extends \Google\Collection
{
  /** @var DataFilter[] */
  public $dataFilters;
  protected $collection_key = 'dataFilters';
  protected $dataFiltersType = DataFilter::class;
  protected $dataFiltersDataType = 'array';
  /** @param DataFilter[] */
  public function setDataFilters($dataFilters)
  {
    $this->dataFilters = $dataFilters;
  }
  /** @return DataFilter[] */
  public function getDataFilters()
  {
    return $this->dataFilters;
  }
}

class SearchDeveloperMetadataResponse extends \Google\Collection
{
  /** @var MatchedDeveloperMetadata[] */
  public $matchedDeveloperMetadata;
  protected $collection_key = 'matchedDeveloperMetadata';
  protected $matchedDeveloperMetadataType = MatchedDeveloperMetadata::class;
  protected $matchedDeveloperMetadataDataType = 'array';
  /** @param MatchedDeveloperMetadata[] */
  public function setMatchedDeveloperMetadata($matchedDeveloperMetadata)
  {
    $this->matchedDeveloperMetadata = $matchedDeveloperMetadata;
  }
  /** @return MatchedDeveloperMetadata[] */
  public function getMatchedDeveloperMetadata()
  {
    return $this->matchedDeveloperMetadata;
  }
}

class SetBasicFilterRequest extends \Google\Model
{
  /** @var BasicFilter */
  public $filter;
  protected $filterType = BasicFilter::class;
  protected $filterDataType = '';
  /** @param BasicFilter */
  public function setFilter(BasicFilter $filter)
  {
    $this->filter = $filter;
  }
  /** @return BasicFilter */
  public function getFilter()
  {
    return $this->filter;
  }
}

class SetDataValidationRequest extends \Google\Model
{
  /** @var GridRange */
  public $range;
  /** @var DataValidationRule */
  public $rule;
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  protected $ruleType = DataValidationRule::class;
  protected $ruleDataType = '';
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
  /** @param DataValidationRule */
  public function setRule(DataValidationRule $rule)
  {
    $this->rule = $rule;
  }
  /** @return DataValidationRule */
  public function getRule()
  {
    return $this->rule;
  }
}

class Sheet extends \Google\Collection
{
  /** @var BandedRange[] */
  public $bandedRanges;
  /** @var BasicFilter */
  public $basicFilter;
  /** @var EmbeddedChart[] */
  public $charts;
  /** @var DimensionGroup[] */
  public $columnGroups;
  /** @var ConditionalFormatRule[] */
  public $conditionalFormats;
  /** @var GridData[] */
  public $data;
  /** @var DeveloperMetadata[] */
  public $developerMetadata;
  /** @var FilterView[] */
  public $filterViews;
  /** @var GridRange[] */
  public $merges;
  /** @var SheetProperties */
  public $properties;
  /** @var ProtectedRange[] */
  public $protectedRanges;
  /** @var DimensionGroup[] */
  public $rowGroups;
  /** @var Slicer[] */
  public $slicers;
  protected $collection_key = 'slicers';
  protected $bandedRangesType = BandedRange::class;
  protected $bandedRangesDataType = 'array';
  protected $basicFilterType = BasicFilter::class;
  protected $basicFilterDataType = '';
  protected $chartsType = EmbeddedChart::class;
  protected $chartsDataType = 'array';
  protected $columnGroupsType = DimensionGroup::class;
  protected $columnGroupsDataType = 'array';
  protected $conditionalFormatsType = ConditionalFormatRule::class;
  protected $conditionalFormatsDataType = 'array';
  protected $dataType = GridData::class;
  protected $dataDataType = 'array';
  protected $developerMetadataType = DeveloperMetadata::class;
  protected $developerMetadataDataType = 'array';
  protected $filterViewsType = FilterView::class;
  protected $filterViewsDataType = 'array';
  protected $mergesType = GridRange::class;
  protected $mergesDataType = 'array';
  protected $propertiesType = SheetProperties::class;
  protected $propertiesDataType = '';
  protected $protectedRangesType = ProtectedRange::class;
  protected $protectedRangesDataType = 'array';
  protected $rowGroupsType = DimensionGroup::class;
  protected $rowGroupsDataType = 'array';
  protected $slicersType = Slicer::class;
  protected $slicersDataType = 'array';
  /** @param BandedRange[] */
  public function setBandedRanges($bandedRanges)
  {
    $this->bandedRanges = $bandedRanges;
  }
  /** @return BandedRange[] */
  public function getBandedRanges()
  {
    return $this->bandedRanges;
  }
  /** @param BasicFilter */
  public function setBasicFilter(BasicFilter $basicFilter)
  {
    $this->basicFilter = $basicFilter;
  }
  /** @return BasicFilter */
  public function getBasicFilter()
  {
    return $this->basicFilter;
  }
  /** @param EmbeddedChart[] */
  public function setCharts($charts)
  {
    $this->charts = $charts;
  }
  /** @return EmbeddedChart[] */
  public function getCharts()
  {
    return $this->charts;
  }
  /** @param DimensionGroup[] */
  public function setColumnGroups($columnGroups)
  {
    $this->columnGroups = $columnGroups;
  }
  /** @return DimensionGroup[] */
  public function getColumnGroups()
  {
    return $this->columnGroups;
  }
  /** @param ConditionalFormatRule[] */
  public function setConditionalFormats($conditionalFormats)
  {
    $this->conditionalFormats = $conditionalFormats;
  }
  /** @return ConditionalFormatRule[] */
  public function getConditionalFormats()
  {
    return $this->conditionalFormats;
  }
  /** @param GridData[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return GridData[] */
  public function getData()
  {
    return $this->data;
  }
  /** @param DeveloperMetadata[] */
  public function setDeveloperMetadata($developerMetadata)
  {
    $this->developerMetadata = $developerMetadata;
  }
  /** @return DeveloperMetadata[] */
  public function getDeveloperMetadata()
  {
    return $this->developerMetadata;
  }
  /** @param FilterView[] */
  public function setFilterViews($filterViews)
  {
    $this->filterViews = $filterViews;
  }
  /** @return FilterView[] */
  public function getFilterViews()
  {
    return $this->filterViews;
  }
  /** @param GridRange[] */
  public function setMerges($merges)
  {
    $this->merges = $merges;
  }
  /** @return GridRange[] */
  public function getMerges()
  {
    return $this->merges;
  }
  /** @param SheetProperties */
  public function setProperties(SheetProperties $properties)
  {
    $this->properties = $properties;
  }
  /** @return SheetProperties */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param ProtectedRange[] */
  public function setProtectedRanges($protectedRanges)
  {
    $this->protectedRanges = $protectedRanges;
  }
  /** @return ProtectedRange[] */
  public function getProtectedRanges()
  {
    return $this->protectedRanges;
  }
  /** @param DimensionGroup[] */
  public function setRowGroups($rowGroups)
  {
    $this->rowGroups = $rowGroups;
  }
  /** @return DimensionGroup[] */
  public function getRowGroups()
  {
    return $this->rowGroups;
  }
  /** @param Slicer[] */
  public function setSlicers($slicers)
  {
    $this->slicers = $slicers;
  }
  /** @return Slicer[] */
  public function getSlicers()
  {
    return $this->slicers;
  }
}

class SheetProperties extends \Google\Model
{
  /** @var DataSourceSheetProperties */
  public $dataSourceSheetProperties;
  /** @var GridProperties */
  public $gridProperties;
  /** @var bool */
  public $hidden;
  /** @var int */
  public $index;
  /** @var bool */
  public $rightToLeft;
  /** @var int */
  public $sheetId;
  /** @var string */
  public $sheetType;
  /** @var Color */
  public $tabColor;
  /** @var ColorStyle */
  public $tabColorStyle;
  /** @var string */
  public $title;
  protected $dataSourceSheetPropertiesType = DataSourceSheetProperties::class;
  protected $dataSourceSheetPropertiesDataType = '';
  protected $gridPropertiesType = GridProperties::class;
  protected $gridPropertiesDataType = '';
  protected $tabColorType = Color::class;
  protected $tabColorDataType = '';
  protected $tabColorStyleType = ColorStyle::class;
  protected $tabColorStyleDataType = '';
  /** @param DataSourceSheetProperties */
  public function setDataSourceSheetProperties(DataSourceSheetProperties $dataSourceSheetProperties)
  {
    $this->dataSourceSheetProperties = $dataSourceSheetProperties;
  }
  /** @return DataSourceSheetProperties */
  public function getDataSourceSheetProperties()
  {
    return $this->dataSourceSheetProperties;
  }
  /** @param GridProperties */
  public function setGridProperties(GridProperties $gridProperties)
  {
    $this->gridProperties = $gridProperties;
  }
  /** @return GridProperties */
  public function getGridProperties()
  {
    return $this->gridProperties;
  }
  /** @param bool */
  public function setHidden($hidden)
  {
    $this->hidden = $hidden;
  }
  /** @return bool */
  public function getHidden()
  {
    return $this->hidden;
  }
  /** @param int */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return int */
  public function getIndex()
  {
    return $this->index;
  }
  /** @param bool */
  public function setRightToLeft($rightToLeft)
  {
    $this->rightToLeft = $rightToLeft;
  }
  /** @return bool */
  public function getRightToLeft()
  {
    return $this->rightToLeft;
  }
  /** @param int */
  public function setSheetId($sheetId)
  {
    $this->sheetId = $sheetId;
  }
  /** @return int */
  public function getSheetId()
  {
    return $this->sheetId;
  }
  /** @param string */
  public function setSheetType($sheetType)
  {
    $this->sheetType = $sheetType;
  }
  /** @return string */
  public function getSheetType()
  {
    return $this->sheetType;
  }
  /** @param Color */
  public function setTabColor(Color $tabColor)
  {
    $this->tabColor = $tabColor;
  }
  /** @return Color */
  public function getTabColor()
  {
    return $this->tabColor;
  }
  /** @param ColorStyle */
  public function setTabColorStyle(ColorStyle $tabColorStyle)
  {
    $this->tabColorStyle = $tabColorStyle;
  }
  /** @return ColorStyle */
  public function getTabColorStyle()
  {
    return $this->tabColorStyle;
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

class Slicer extends \Google\Model
{
  /** @var EmbeddedObjectPosition */
  public $position;
  /** @var int */
  public $slicerId;
  /** @var SlicerSpec */
  public $spec;
  protected $positionType = EmbeddedObjectPosition::class;
  protected $positionDataType = '';
  protected $specType = SlicerSpec::class;
  protected $specDataType = '';
  /** @param EmbeddedObjectPosition */
  public function setPosition(EmbeddedObjectPosition $position)
  {
    $this->position = $position;
  }
  /** @return EmbeddedObjectPosition */
  public function getPosition()
  {
    return $this->position;
  }
  /** @param int */
  public function setSlicerId($slicerId)
  {
    $this->slicerId = $slicerId;
  }
  /** @return int */
  public function getSlicerId()
  {
    return $this->slicerId;
  }
  /** @param SlicerSpec */
  public function setSpec(SlicerSpec $spec)
  {
    $this->spec = $spec;
  }
  /** @return SlicerSpec */
  public function getSpec()
  {
    return $this->spec;
  }
}

class SlicerSpec extends \Google\Model
{
  /** @var bool */
  public $applyToPivotTables;
  /** @var Color */
  public $backgroundColor;
  /** @var ColorStyle */
  public $backgroundColorStyle;
  /** @var int */
  public $columnIndex;
  /** @var GridRange */
  public $dataRange;
  /** @var FilterCriteria */
  public $filterCriteria;
  /** @var string */
  public $horizontalAlignment;
  /** @var TextFormat */
  public $textFormat;
  /** @var string */
  public $title;
  protected $backgroundColorType = Color::class;
  protected $backgroundColorDataType = '';
  protected $backgroundColorStyleType = ColorStyle::class;
  protected $backgroundColorStyleDataType = '';
  protected $dataRangeType = GridRange::class;
  protected $dataRangeDataType = '';
  protected $filterCriteriaType = FilterCriteria::class;
  protected $filterCriteriaDataType = '';
  protected $textFormatType = TextFormat::class;
  protected $textFormatDataType = '';
  /** @param bool */
  public function setApplyToPivotTables($applyToPivotTables)
  {
    $this->applyToPivotTables = $applyToPivotTables;
  }
  /** @return bool */
  public function getApplyToPivotTables()
  {
    return $this->applyToPivotTables;
  }
  /** @param Color */
  public function setBackgroundColor(Color $backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /** @return Color */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
  /** @param ColorStyle */
  public function setBackgroundColorStyle(ColorStyle $backgroundColorStyle)
  {
    $this->backgroundColorStyle = $backgroundColorStyle;
  }
  /** @return ColorStyle */
  public function getBackgroundColorStyle()
  {
    return $this->backgroundColorStyle;
  }
  /** @param int */
  public function setColumnIndex($columnIndex)
  {
    $this->columnIndex = $columnIndex;
  }
  /** @return int */
  public function getColumnIndex()
  {
    return $this->columnIndex;
  }
  /** @param GridRange */
  public function setDataRange(GridRange $dataRange)
  {
    $this->dataRange = $dataRange;
  }
  /** @return GridRange */
  public function getDataRange()
  {
    return $this->dataRange;
  }
  /** @param FilterCriteria */
  public function setFilterCriteria(FilterCriteria $filterCriteria)
  {
    $this->filterCriteria = $filterCriteria;
  }
  /** @return FilterCriteria */
  public function getFilterCriteria()
  {
    return $this->filterCriteria;
  }
  /** @param string */
  public function setHorizontalAlignment($horizontalAlignment)
  {
    $this->horizontalAlignment = $horizontalAlignment;
  }
  /** @return string */
  public function getHorizontalAlignment()
  {
    return $this->horizontalAlignment;
  }
  /** @param TextFormat */
  public function setTextFormat(TextFormat $textFormat)
  {
    $this->textFormat = $textFormat;
  }
  /** @return TextFormat */
  public function getTextFormat()
  {
    return $this->textFormat;
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

class SortRangeRequest extends \Google\Collection
{
  /** @var GridRange */
  public $range;
  /** @var SortSpec[] */
  public $sortSpecs;
  protected $collection_key = 'sortSpecs';
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  protected $sortSpecsType = SortSpec::class;
  protected $sortSpecsDataType = 'array';
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
  /** @param SortSpec[] */
  public function setSortSpecs($sortSpecs)
  {
    $this->sortSpecs = $sortSpecs;
  }
  /** @return SortSpec[] */
  public function getSortSpecs()
  {
    return $this->sortSpecs;
  }
}

class SortSpec extends \Google\Model
{
  /** @var Color */
  public $backgroundColor;
  /** @var ColorStyle */
  public $backgroundColorStyle;
  /** @var DataSourceColumnReference */
  public $dataSourceColumnReference;
  /** @var int */
  public $dimensionIndex;
  /** @var Color */
  public $foregroundColor;
  /** @var ColorStyle */
  public $foregroundColorStyle;
  /** @var string */
  public $sortOrder;
  protected $backgroundColorType = Color::class;
  protected $backgroundColorDataType = '';
  protected $backgroundColorStyleType = ColorStyle::class;
  protected $backgroundColorStyleDataType = '';
  protected $dataSourceColumnReferenceType = DataSourceColumnReference::class;
  protected $dataSourceColumnReferenceDataType = '';
  protected $foregroundColorType = Color::class;
  protected $foregroundColorDataType = '';
  protected $foregroundColorStyleType = ColorStyle::class;
  protected $foregroundColorStyleDataType = '';
  /** @param Color */
  public function setBackgroundColor(Color $backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /** @return Color */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
  /** @param ColorStyle */
  public function setBackgroundColorStyle(ColorStyle $backgroundColorStyle)
  {
    $this->backgroundColorStyle = $backgroundColorStyle;
  }
  /** @return ColorStyle */
  public function getBackgroundColorStyle()
  {
    return $this->backgroundColorStyle;
  }
  /** @param DataSourceColumnReference */
  public function setDataSourceColumnReference(DataSourceColumnReference $dataSourceColumnReference)
  {
    $this->dataSourceColumnReference = $dataSourceColumnReference;
  }
  /** @return DataSourceColumnReference */
  public function getDataSourceColumnReference()
  {
    return $this->dataSourceColumnReference;
  }
  /** @param int */
  public function setDimensionIndex($dimensionIndex)
  {
    $this->dimensionIndex = $dimensionIndex;
  }
  /** @return int */
  public function getDimensionIndex()
  {
    return $this->dimensionIndex;
  }
  /** @param Color */
  public function setForegroundColor(Color $foregroundColor)
  {
    $this->foregroundColor = $foregroundColor;
  }
  /** @return Color */
  public function getForegroundColor()
  {
    return $this->foregroundColor;
  }
  /** @param ColorStyle */
  public function setForegroundColorStyle(ColorStyle $foregroundColorStyle)
  {
    $this->foregroundColorStyle = $foregroundColorStyle;
  }
  /** @return ColorStyle */
  public function getForegroundColorStyle()
  {
    return $this->foregroundColorStyle;
  }
  /** @param string */
  public function setSortOrder($sortOrder)
  {
    $this->sortOrder = $sortOrder;
  }
  /** @return string */
  public function getSortOrder()
  {
    return $this->sortOrder;
  }
}

class SourceAndDestination extends \Google\Model
{
  /** @var string */
  public $dimension;
  /** @var int */
  public $fillLength;
  /** @var GridRange */
  public $source;
  protected $sourceType = GridRange::class;
  protected $sourceDataType = '';
  /** @param string */
  public function setDimension($dimension)
  {
    $this->dimension = $dimension;
  }
  /** @return string */
  public function getDimension()
  {
    return $this->dimension;
  }
  /** @param int */
  public function setFillLength($fillLength)
  {
    $this->fillLength = $fillLength;
  }
  /** @return int */
  public function getFillLength()
  {
    return $this->fillLength;
  }
  /** @param GridRange */
  public function setSource(GridRange $source)
  {
    $this->source = $source;
  }
  /** @return GridRange */
  public function getSource()
  {
    return $this->source;
  }
}

class Spreadsheet extends \Google\Collection
{
  /** @var DataSourceRefreshSchedule[] */
  public $dataSourceSchedules;
  /** @var DataSource[] */
  public $dataSources;
  /** @var DeveloperMetadata[] */
  public $developerMetadata;
  /** @var NamedRange[] */
  public $namedRanges;
  /** @var SpreadsheetProperties */
  public $properties;
  /** @var Sheet[] */
  public $sheets;
  /** @var string */
  public $spreadsheetId;
  /** @var string */
  public $spreadsheetUrl;
  protected $collection_key = 'sheets';
  protected $dataSourceSchedulesType = DataSourceRefreshSchedule::class;
  protected $dataSourceSchedulesDataType = 'array';
  protected $dataSourcesType = DataSource::class;
  protected $dataSourcesDataType = 'array';
  protected $developerMetadataType = DeveloperMetadata::class;
  protected $developerMetadataDataType = 'array';
  protected $namedRangesType = NamedRange::class;
  protected $namedRangesDataType = 'array';
  protected $propertiesType = SpreadsheetProperties::class;
  protected $propertiesDataType = '';
  protected $sheetsType = Sheet::class;
  protected $sheetsDataType = 'array';
  /** @param DataSourceRefreshSchedule[] */
  public function setDataSourceSchedules($dataSourceSchedules)
  {
    $this->dataSourceSchedules = $dataSourceSchedules;
  }
  /** @return DataSourceRefreshSchedule[] */
  public function getDataSourceSchedules()
  {
    return $this->dataSourceSchedules;
  }
  /** @param DataSource[] */
  public function setDataSources($dataSources)
  {
    $this->dataSources = $dataSources;
  }
  /** @return DataSource[] */
  public function getDataSources()
  {
    return $this->dataSources;
  }
  /** @param DeveloperMetadata[] */
  public function setDeveloperMetadata($developerMetadata)
  {
    $this->developerMetadata = $developerMetadata;
  }
  /** @return DeveloperMetadata[] */
  public function getDeveloperMetadata()
  {
    return $this->developerMetadata;
  }
  /** @param NamedRange[] */
  public function setNamedRanges($namedRanges)
  {
    $this->namedRanges = $namedRanges;
  }
  /** @return NamedRange[] */
  public function getNamedRanges()
  {
    return $this->namedRanges;
  }
  /** @param SpreadsheetProperties */
  public function setProperties(SpreadsheetProperties $properties)
  {
    $this->properties = $properties;
  }
  /** @return SpreadsheetProperties */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param Sheet[] */
  public function setSheets($sheets)
  {
    $this->sheets = $sheets;
  }
  /** @return Sheet[] */
  public function getSheets()
  {
    return $this->sheets;
  }
  /** @param string */
  public function setSpreadsheetId($spreadsheetId)
  {
    $this->spreadsheetId = $spreadsheetId;
  }
  /** @return string */
  public function getSpreadsheetId()
  {
    return $this->spreadsheetId;
  }
  /** @param string */
  public function setSpreadsheetUrl($spreadsheetUrl)
  {
    $this->spreadsheetUrl = $spreadsheetUrl;
  }
  /** @return string */
  public function getSpreadsheetUrl()
  {
    return $this->spreadsheetUrl;
  }
}

class SpreadsheetProperties extends \Google\Model
{
  /** @var string */
  public $autoRecalc;
  /** @var CellFormat */
  public $defaultFormat;
  /** @var IterativeCalculationSettings */
  public $iterativeCalculationSettings;
  /** @var string */
  public $locale;
  /** @var SpreadsheetTheme */
  public $spreadsheetTheme;
  /** @var string */
  public $timeZone;
  /** @var string */
  public $title;
  protected $defaultFormatType = CellFormat::class;
  protected $defaultFormatDataType = '';
  protected $iterativeCalculationSettingsType = IterativeCalculationSettings::class;
  protected $iterativeCalculationSettingsDataType = '';
  protected $spreadsheetThemeType = SpreadsheetTheme::class;
  protected $spreadsheetThemeDataType = '';
  /** @param string */
  public function setAutoRecalc($autoRecalc)
  {
    $this->autoRecalc = $autoRecalc;
  }
  /** @return string */
  public function getAutoRecalc()
  {
    return $this->autoRecalc;
  }
  /** @param CellFormat */
  public function setDefaultFormat(CellFormat $defaultFormat)
  {
    $this->defaultFormat = $defaultFormat;
  }
  /** @return CellFormat */
  public function getDefaultFormat()
  {
    return $this->defaultFormat;
  }
  /** @param IterativeCalculationSettings */
  public function setIterativeCalculationSettings(IterativeCalculationSettings $iterativeCalculationSettings)
  {
    $this->iterativeCalculationSettings = $iterativeCalculationSettings;
  }
  /** @return IterativeCalculationSettings */
  public function getIterativeCalculationSettings()
  {
    return $this->iterativeCalculationSettings;
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
  /** @param SpreadsheetTheme */
  public function setSpreadsheetTheme(SpreadsheetTheme $spreadsheetTheme)
  {
    $this->spreadsheetTheme = $spreadsheetTheme;
  }
  /** @return SpreadsheetTheme */
  public function getSpreadsheetTheme()
  {
    return $this->spreadsheetTheme;
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

class SpreadsheetTheme extends \Google\Collection
{
  /** @var string */
  public $primaryFontFamily;
  /** @var ThemeColorPair[] */
  public $themeColors;
  protected $collection_key = 'themeColors';
  protected $themeColorsType = ThemeColorPair::class;
  protected $themeColorsDataType = 'array';
  /** @param string */
  public function setPrimaryFontFamily($primaryFontFamily)
  {
    $this->primaryFontFamily = $primaryFontFamily;
  }
  /** @return string */
  public function getPrimaryFontFamily()
  {
    return $this->primaryFontFamily;
  }
  /** @param ThemeColorPair[] */
  public function setThemeColors($themeColors)
  {
    $this->themeColors = $themeColors;
  }
  /** @return ThemeColorPair[] */
  public function getThemeColors()
  {
    return $this->themeColors;
  }
}

class TextFormat extends \Google\Model
{
  /** @var bool */
  public $bold;
  /** @var string */
  public $fontFamily;
  /** @var int */
  public $fontSize;
  /** @var Color */
  public $foregroundColor;
  /** @var ColorStyle */
  public $foregroundColorStyle;
  /** @var bool */
  public $italic;
  /** @var Link */
  public $link;
  /** @var bool */
  public $strikethrough;
  /** @var bool */
  public $underline;
  protected $foregroundColorType = Color::class;
  protected $foregroundColorDataType = '';
  protected $foregroundColorStyleType = ColorStyle::class;
  protected $foregroundColorStyleDataType = '';
  protected $linkType = Link::class;
  protected $linkDataType = '';
  /** @param bool */
  public function setBold($bold)
  {
    $this->bold = $bold;
  }
  /** @return bool */
  public function getBold()
  {
    return $this->bold;
  }
  /** @param string */
  public function setFontFamily($fontFamily)
  {
    $this->fontFamily = $fontFamily;
  }
  /** @return string */
  public function getFontFamily()
  {
    return $this->fontFamily;
  }
  /** @param int */
  public function setFontSize($fontSize)
  {
    $this->fontSize = $fontSize;
  }
  /** @return int */
  public function getFontSize()
  {
    return $this->fontSize;
  }
  /** @param Color */
  public function setForegroundColor(Color $foregroundColor)
  {
    $this->foregroundColor = $foregroundColor;
  }
  /** @return Color */
  public function getForegroundColor()
  {
    return $this->foregroundColor;
  }
  /** @param ColorStyle */
  public function setForegroundColorStyle(ColorStyle $foregroundColorStyle)
  {
    $this->foregroundColorStyle = $foregroundColorStyle;
  }
  /** @return ColorStyle */
  public function getForegroundColorStyle()
  {
    return $this->foregroundColorStyle;
  }
  /** @param bool */
  public function setItalic($italic)
  {
    $this->italic = $italic;
  }
  /** @return bool */
  public function getItalic()
  {
    return $this->italic;
  }
  /** @param Link */
  public function setLink(Link $link)
  {
    $this->link = $link;
  }
  /** @return Link */
  public function getLink()
  {
    return $this->link;
  }
  /** @param bool */
  public function setStrikethrough($strikethrough)
  {
    $this->strikethrough = $strikethrough;
  }
  /** @return bool */
  public function getStrikethrough()
  {
    return $this->strikethrough;
  }
  /** @param bool */
  public function setUnderline($underline)
  {
    $this->underline = $underline;
  }
  /** @return bool */
  public function getUnderline()
  {
    return $this->underline;
  }
}

class TextFormatRun extends \Google\Model
{
  /** @var TextFormat */
  public $format;
  /** @var int */
  public $startIndex;
  protected $formatType = TextFormat::class;
  protected $formatDataType = '';
  /** @param TextFormat */
  public function setFormat(TextFormat $format)
  {
    $this->format = $format;
  }
  /** @return TextFormat */
  public function getFormat()
  {
    return $this->format;
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
}

class TextPosition extends \Google\Model
{
  /** @var string */
  public $horizontalAlignment;

  /** @param string */
  public function setHorizontalAlignment($horizontalAlignment)
  {
    $this->horizontalAlignment = $horizontalAlignment;
  }
  /** @return string */
  public function getHorizontalAlignment()
  {
    return $this->horizontalAlignment;
  }
}

class TextRotation extends \Google\Model
{
  /** @var int */
  public $angle;
  /** @var bool */
  public $vertical;

  /** @param int */
  public function setAngle($angle)
  {
    $this->angle = $angle;
  }
  /** @return int */
  public function getAngle()
  {
    return $this->angle;
  }
  /** @param bool */
  public function setVertical($vertical)
  {
    $this->vertical = $vertical;
  }
  /** @return bool */
  public function getVertical()
  {
    return $this->vertical;
  }
}

class TextToColumnsRequest extends \Google\Model
{
  /** @var string */
  public $delimiter;
  /** @var string */
  public $delimiterType;
  /** @var GridRange */
  public $source;
  protected $sourceType = GridRange::class;
  protected $sourceDataType = '';
  /** @param string */
  public function setDelimiter($delimiter)
  {
    $this->delimiter = $delimiter;
  }
  /** @return string */
  public function getDelimiter()
  {
    return $this->delimiter;
  }
  /** @param string */
  public function setDelimiterType($delimiterType)
  {
    $this->delimiterType = $delimiterType;
  }
  /** @return string */
  public function getDelimiterType()
  {
    return $this->delimiterType;
  }
  /** @param GridRange */
  public function setSource(GridRange $source)
  {
    $this->source = $source;
  }
  /** @return GridRange */
  public function getSource()
  {
    return $this->source;
  }
}

class ThemeColorPair extends \Google\Model
{
  /** @var ColorStyle */
  public $color;
  /** @var string */
  public $colorType;
  protected $colorDataType = '';
  /** @param ColorStyle */
  public function setColor(ColorStyle $color)
  {
    $this->color = $color;
  }
  /** @return ColorStyle */
  public function getColor()
  {
    return $this->color;
  }
  /** @param string */
  public function setColorType($colorType)
  {
    $this->colorType = $colorType;
  }
  /** @return string */
  public function getColorType()
  {
    return $this->colorType;
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

class TreemapChartColorScale extends \Google\Model
{
  /** @var Color */
  public $maxValueColor;
  /** @var ColorStyle */
  public $maxValueColorStyle;
  /** @var Color */
  public $midValueColor;
  /** @var ColorStyle */
  public $midValueColorStyle;
  /** @var Color */
  public $minValueColor;
  /** @var ColorStyle */
  public $minValueColorStyle;
  /** @var Color */
  public $noDataColor;
  /** @var ColorStyle */
  public $noDataColorStyle;
  protected $maxValueColorType = Color::class;
  protected $maxValueColorDataType = '';
  protected $maxValueColorStyleType = ColorStyle::class;
  protected $maxValueColorStyleDataType = '';
  protected $midValueColorType = Color::class;
  protected $midValueColorDataType = '';
  protected $midValueColorStyleType = ColorStyle::class;
  protected $midValueColorStyleDataType = '';
  protected $minValueColorType = Color::class;
  protected $minValueColorDataType = '';
  protected $minValueColorStyleType = ColorStyle::class;
  protected $minValueColorStyleDataType = '';
  protected $noDataColorType = Color::class;
  protected $noDataColorDataType = '';
  protected $noDataColorStyleType = ColorStyle::class;
  protected $noDataColorStyleDataType = '';
  /** @param Color */
  public function setMaxValueColor(Color $maxValueColor)
  {
    $this->maxValueColor = $maxValueColor;
  }
  /** @return Color */
  public function getMaxValueColor()
  {
    return $this->maxValueColor;
  }
  /** @param ColorStyle */
  public function setMaxValueColorStyle(ColorStyle $maxValueColorStyle)
  {
    $this->maxValueColorStyle = $maxValueColorStyle;
  }
  /** @return ColorStyle */
  public function getMaxValueColorStyle()
  {
    return $this->maxValueColorStyle;
  }
  /** @param Color */
  public function setMidValueColor(Color $midValueColor)
  {
    $this->midValueColor = $midValueColor;
  }
  /** @return Color */
  public function getMidValueColor()
  {
    return $this->midValueColor;
  }
  /** @param ColorStyle */
  public function setMidValueColorStyle(ColorStyle $midValueColorStyle)
  {
    $this->midValueColorStyle = $midValueColorStyle;
  }
  /** @return ColorStyle */
  public function getMidValueColorStyle()
  {
    return $this->midValueColorStyle;
  }
  /** @param Color */
  public function setMinValueColor(Color $minValueColor)
  {
    $this->minValueColor = $minValueColor;
  }
  /** @return Color */
  public function getMinValueColor()
  {
    return $this->minValueColor;
  }
  /** @param ColorStyle */
  public function setMinValueColorStyle(ColorStyle $minValueColorStyle)
  {
    $this->minValueColorStyle = $minValueColorStyle;
  }
  /** @return ColorStyle */
  public function getMinValueColorStyle()
  {
    return $this->minValueColorStyle;
  }
  /** @param Color */
  public function setNoDataColor(Color $noDataColor)
  {
    $this->noDataColor = $noDataColor;
  }
  /** @return Color */
  public function getNoDataColor()
  {
    return $this->noDataColor;
  }
  /** @param ColorStyle */
  public function setNoDataColorStyle(ColorStyle $noDataColorStyle)
  {
    $this->noDataColorStyle = $noDataColorStyle;
  }
  /** @return ColorStyle */
  public function getNoDataColorStyle()
  {
    return $this->noDataColorStyle;
  }
}

class TreemapChartSpec extends \Google\Model
{
  /** @var ChartData */
  public $colorData;
  /** @var TreemapChartColorScale */
  public $colorScale;
  /** @var Color */
  public $headerColor;
  /** @var ColorStyle */
  public $headerColorStyle;
  /** @var bool */
  public $hideTooltips;
  /** @var int */
  public $hintedLevels;
  /** @var ChartData */
  public $labels;
  /** @var int */
  public $levels;
  public $maxValue;
  public $minValue;
  /** @var ChartData */
  public $parentLabels;
  /** @var ChartData */
  public $sizeData;
  /** @var TextFormat */
  public $textFormat;
  protected $colorDataType = ChartData::class;
  protected $colorDataDataType = '';
  protected $colorScaleType = TreemapChartColorScale::class;
  protected $colorScaleDataType = '';
  protected $headerColorType = Color::class;
  protected $headerColorDataType = '';
  protected $headerColorStyleType = ColorStyle::class;
  protected $headerColorStyleDataType = '';
  protected $labelsType = ChartData::class;
  protected $labelsDataType = '';
  protected $parentLabelsType = ChartData::class;
  protected $parentLabelsDataType = '';
  protected $sizeDataType = ChartData::class;
  protected $sizeDataDataType = '';
  protected $textFormatType = TextFormat::class;
  protected $textFormatDataType = '';
  /** @param ChartData */
  public function setColorData(ChartData $colorData)
  {
    $this->colorData = $colorData;
  }
  /** @return ChartData */
  public function getColorData()
  {
    return $this->colorData;
  }
  /** @param TreemapChartColorScale */
  public function setColorScale(TreemapChartColorScale $colorScale)
  {
    $this->colorScale = $colorScale;
  }
  /** @return TreemapChartColorScale */
  public function getColorScale()
  {
    return $this->colorScale;
  }
  /** @param Color */
  public function setHeaderColor(Color $headerColor)
  {
    $this->headerColor = $headerColor;
  }
  /** @return Color */
  public function getHeaderColor()
  {
    return $this->headerColor;
  }
  /** @param ColorStyle */
  public function setHeaderColorStyle(ColorStyle $headerColorStyle)
  {
    $this->headerColorStyle = $headerColorStyle;
  }
  /** @return ColorStyle */
  public function getHeaderColorStyle()
  {
    return $this->headerColorStyle;
  }
  /** @param bool */
  public function setHideTooltips($hideTooltips)
  {
    $this->hideTooltips = $hideTooltips;
  }
  /** @return bool */
  public function getHideTooltips()
  {
    return $this->hideTooltips;
  }
  /** @param int */
  public function setHintedLevels($hintedLevels)
  {
    $this->hintedLevels = $hintedLevels;
  }
  /** @return int */
  public function getHintedLevels()
  {
    return $this->hintedLevels;
  }
  /** @param ChartData */
  public function setLabels(ChartData $labels)
  {
    $this->labels = $labels;
  }
  /** @return ChartData */
  public function getLabels()
  {
    return $this->labels;
  }
  /** @param int */
  public function setLevels($levels)
  {
    $this->levels = $levels;
  }
  /** @return int */
  public function getLevels()
  {
    return $this->levels;
  }
  public function setMaxValue($maxValue)
  {
    $this->maxValue = $maxValue;
  }
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  public function setMinValue($minValue)
  {
    $this->minValue = $minValue;
  }
  public function getMinValue()
  {
    return $this->minValue;
  }
  /** @param ChartData */
  public function setParentLabels(ChartData $parentLabels)
  {
    $this->parentLabels = $parentLabels;
  }
  /** @return ChartData */
  public function getParentLabels()
  {
    return $this->parentLabels;
  }
  /** @param ChartData */
  public function setSizeData(ChartData $sizeData)
  {
    $this->sizeData = $sizeData;
  }
  /** @return ChartData */
  public function getSizeData()
  {
    return $this->sizeData;
  }
  /** @param TextFormat */
  public function setTextFormat(TextFormat $textFormat)
  {
    $this->textFormat = $textFormat;
  }
  /** @return TextFormat */
  public function getTextFormat()
  {
    return $this->textFormat;
  }
}

class TrimWhitespaceRequest extends \Google\Model
{
  /** @var GridRange */
  public $range;
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
}

class TrimWhitespaceResponse extends \Google\Model
{
  /** @var int */
  public $cellsChangedCount;

  /** @param int */
  public function setCellsChangedCount($cellsChangedCount)
  {
    $this->cellsChangedCount = $cellsChangedCount;
  }
  /** @return int */
  public function getCellsChangedCount()
  {
    return $this->cellsChangedCount;
  }
}

class UnmergeCellsRequest extends \Google\Model
{
  /** @var GridRange */
  public $range;
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
}

class UpdateBandingRequest extends \Google\Model
{
  /** @var BandedRange */
  public $bandedRange;
  /** @var string */
  public $fields;
  protected $bandedRangeType = BandedRange::class;
  protected $bandedRangeDataType = '';
  /** @param BandedRange */
  public function setBandedRange(BandedRange $bandedRange)
  {
    $this->bandedRange = $bandedRange;
  }
  /** @return BandedRange */
  public function getBandedRange()
  {
    return $this->bandedRange;
  }
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
}

class UpdateBordersRequest extends \Google\Model
{
  /** @var Border */
  public $bottom;
  /** @var Border */
  public $innerHorizontal;
  /** @var Border */
  public $innerVertical;
  /** @var Border */
  public $left;
  /** @var GridRange */
  public $range;
  /** @var Border */
  public $right;
  /** @var Border */
  public $top;
  protected $bottomType = Border::class;
  protected $bottomDataType = '';
  protected $innerHorizontalType = Border::class;
  protected $innerHorizontalDataType = '';
  protected $innerVerticalType = Border::class;
  protected $innerVerticalDataType = '';
  protected $leftType = Border::class;
  protected $leftDataType = '';
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  protected $rightType = Border::class;
  protected $rightDataType = '';
  protected $topType = Border::class;
  protected $topDataType = '';
  /** @param Border */
  public function setBottom(Border $bottom)
  {
    $this->bottom = $bottom;
  }
  /** @return Border */
  public function getBottom()
  {
    return $this->bottom;
  }
  /** @param Border */
  public function setInnerHorizontal(Border $innerHorizontal)
  {
    $this->innerHorizontal = $innerHorizontal;
  }
  /** @return Border */
  public function getInnerHorizontal()
  {
    return $this->innerHorizontal;
  }
  /** @param Border */
  public function setInnerVertical(Border $innerVertical)
  {
    $this->innerVertical = $innerVertical;
  }
  /** @return Border */
  public function getInnerVertical()
  {
    return $this->innerVertical;
  }
  /** @param Border */
  public function setLeft(Border $left)
  {
    $this->left = $left;
  }
  /** @return Border */
  public function getLeft()
  {
    return $this->left;
  }
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
  /** @param Border */
  public function setRight(Border $right)
  {
    $this->right = $right;
  }
  /** @return Border */
  public function getRight()
  {
    return $this->right;
  }
  /** @param Border */
  public function setTop(Border $top)
  {
    $this->top = $top;
  }
  /** @return Border */
  public function getTop()
  {
    return $this->top;
  }
}

class UpdateCellsRequest extends \Google\Collection
{
  /** @var string */
  public $fields;
  /** @var GridRange */
  public $range;
  /** @var RowData[] */
  public $rows;
  /** @var GridCoordinate */
  public $start;
  protected $collection_key = 'rows';
  protected $rangeType = GridRange::class;
  protected $rangeDataType = '';
  protected $rowsType = RowData::class;
  protected $rowsDataType = 'array';
  protected $startType = GridCoordinate::class;
  protected $startDataType = '';
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param GridRange */
  public function setRange(GridRange $range)
  {
    $this->range = $range;
  }
  /** @return GridRange */
  public function getRange()
  {
    return $this->range;
  }
  /** @param RowData[] */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /** @return RowData[] */
  public function getRows()
  {
    return $this->rows;
  }
  /** @param GridCoordinate */
  public function setStart(GridCoordinate $start)
  {
    $this->start = $start;
  }
  /** @return GridCoordinate */
  public function getStart()
  {
    return $this->start;
  }
}

class UpdateChartSpecRequest extends \Google\Model
{
  /** @var int */
  public $chartId;
  /** @var ChartSpec */
  public $spec;
  protected $specType = ChartSpec::class;
  protected $specDataType = '';
  /** @param int */
  public function setChartId($chartId)
  {
    $this->chartId = $chartId;
  }
  /** @return int */
  public function getChartId()
  {
    return $this->chartId;
  }
  /** @param ChartSpec */
  public function setSpec(ChartSpec $spec)
  {
    $this->spec = $spec;
  }
  /** @return ChartSpec */
  public function getSpec()
  {
    return $this->spec;
  }
}

class UpdateConditionalFormatRuleRequest extends \Google\Model
{
  /** @var int */
  public $index;
  /** @var int */
  public $newIndex;
  /** @var ConditionalFormatRule */
  public $rule;
  /** @var int */
  public $sheetId;
  protected $ruleType = ConditionalFormatRule::class;
  protected $ruleDataType = '';
  /** @param int */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /** @return int */
  public function getIndex()
  {
    return $this->index;
  }
  /** @param int */
  public function setNewIndex($newIndex)
  {
    $this->newIndex = $newIndex;
  }
  /** @return int */
  public function getNewIndex()
  {
    return $this->newIndex;
  }
  /** @param ConditionalFormatRule */
  public function setRule(ConditionalFormatRule $rule)
  {
    $this->rule = $rule;
  }
  /** @return ConditionalFormatRule */
  public function getRule()
  {
    return $this->rule;
  }
  /** @param int */
  public function setSheetId($sheetId)
  {
    $this->sheetId = $sheetId;
  }
  /** @return int */
  public function getSheetId()
  {
    return $this->sheetId;
  }
}

class UpdateConditionalFormatRuleResponse extends \Google\Model
{
  /** @var int */
  public $newIndex;
  /** @var ConditionalFormatRule */
  public $newRule;
  /** @var int */
  public $oldIndex;
  /** @var ConditionalFormatRule */
  public $oldRule;
  protected $newRuleType = ConditionalFormatRule::class;
  protected $newRuleDataType = '';
  protected $oldRuleType = ConditionalFormatRule::class;
  protected $oldRuleDataType = '';
  /** @param int */
  public function setNewIndex($newIndex)
  {
    $this->newIndex = $newIndex;
  }
  /** @return int */
  public function getNewIndex()
  {
    return $this->newIndex;
  }
  /** @param ConditionalFormatRule */
  public function setNewRule(ConditionalFormatRule $newRule)
  {
    $this->newRule = $newRule;
  }
  /** @return ConditionalFormatRule */
  public function getNewRule()
  {
    return $this->newRule;
  }
  /** @param int */
  public function setOldIndex($oldIndex)
  {
    $this->oldIndex = $oldIndex;
  }
  /** @return int */
  public function getOldIndex()
  {
    return $this->oldIndex;
  }
  /** @param ConditionalFormatRule */
  public function setOldRule(ConditionalFormatRule $oldRule)
  {
    $this->oldRule = $oldRule;
  }
  /** @return ConditionalFormatRule */
  public function getOldRule()
  {
    return $this->oldRule;
  }
}

class UpdateDataSourceRequest extends \Google\Model
{
  /** @var DataSource */
  public $dataSource;
  /** @var string */
  public $fields;
  protected $dataSourceType = DataSource::class;
  protected $dataSourceDataType = '';
  /** @param DataSource */
  public function setDataSource(DataSource $dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /** @return DataSource */
  public function getDataSource()
  {
    return $this->dataSource;
  }
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
}

class UpdateDataSourceResponse extends \Google\Model
{
  /** @var DataExecutionStatus */
  public $dataExecutionStatus;
  /** @var DataSource */
  public $dataSource;
  protected $dataExecutionStatusType = DataExecutionStatus::class;
  protected $dataExecutionStatusDataType = '';
  protected $dataSourceType = DataSource::class;
  protected $dataSourceDataType = '';
  /** @param DataExecutionStatus */
  public function setDataExecutionStatus(DataExecutionStatus $dataExecutionStatus)
  {
    $this->dataExecutionStatus = $dataExecutionStatus;
  }
  /** @return DataExecutionStatus */
  public function getDataExecutionStatus()
  {
    return $this->dataExecutionStatus;
  }
  /** @param DataSource */
  public function setDataSource(DataSource $dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /** @return DataSource */
  public function getDataSource()
  {
    return $this->dataSource;
  }
}

class UpdateDeveloperMetadataRequest extends \Google\Collection
{
  /** @var DataFilter[] */
  public $dataFilters;
  /** @var DeveloperMetadata */
  public $developerMetadata;
  /** @var string */
  public $fields;
  protected $collection_key = 'dataFilters';
  protected $dataFiltersType = DataFilter::class;
  protected $dataFiltersDataType = 'array';
  protected $developerMetadataType = DeveloperMetadata::class;
  protected $developerMetadataDataType = '';
  /** @param DataFilter[] */
  public function setDataFilters($dataFilters)
  {
    $this->dataFilters = $dataFilters;
  }
  /** @return DataFilter[] */
  public function getDataFilters()
  {
    return $this->dataFilters;
  }
  /** @param DeveloperMetadata */
  public function setDeveloperMetadata(DeveloperMetadata $developerMetadata)
  {
    $this->developerMetadata = $developerMetadata;
  }
  /** @return DeveloperMetadata */
  public function getDeveloperMetadata()
  {
    return $this->developerMetadata;
  }
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
}

class UpdateDeveloperMetadataResponse extends \Google\Collection
{
  /** @var DeveloperMetadata[] */
  public $developerMetadata;
  protected $collection_key = 'developerMetadata';
  protected $developerMetadataType = DeveloperMetadata::class;
  protected $developerMetadataDataType = 'array';
  /** @param DeveloperMetadata[] */
  public function setDeveloperMetadata($developerMetadata)
  {
    $this->developerMetadata = $developerMetadata;
  }
  /** @return DeveloperMetadata[] */
  public function getDeveloperMetadata()
  {
    return $this->developerMetadata;
  }
}

class UpdateDimensionGroupRequest extends \Google\Model
{
  /** @var DimensionGroup */
  public $dimensionGroup;
  /** @var string */
  public $fields;
  protected $dimensionGroupType = DimensionGroup::class;
  protected $dimensionGroupDataType = '';
  /** @param DimensionGroup */
  public function setDimensionGroup(DimensionGroup $dimensionGroup)
  {
    $this->dimensionGroup = $dimensionGroup;
  }
  /** @return DimensionGroup */
  public function getDimensionGroup()
  {
    return $this->dimensionGroup;
  }
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
}

class UpdateDimensionPropertiesRequest extends \Google\Model
{
  /** @var DataSourceSheetDimensionRange */
  public $dataSourceSheetRange;
  /** @var string */
  public $fields;
  /** @var DimensionProperties */
  public $properties;
  /** @var DimensionRange */
  public $range;
  protected $dataSourceSheetRangeType = DataSourceSheetDimensionRange::class;
  protected $dataSourceSheetRangeDataType = '';
  protected $propertiesType = DimensionProperties::class;
  protected $propertiesDataType = '';
  protected $rangeType = DimensionRange::class;
  protected $rangeDataType = '';
  /** @param DataSourceSheetDimensionRange */
  public function setDataSourceSheetRange(DataSourceSheetDimensionRange $dataSourceSheetRange)
  {
    $this->dataSourceSheetRange = $dataSourceSheetRange;
  }
  /** @return DataSourceSheetDimensionRange */
  public function getDataSourceSheetRange()
  {
    return $this->dataSourceSheetRange;
  }
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param DimensionProperties */
  public function setProperties(DimensionProperties $properties)
  {
    $this->properties = $properties;
  }
  /** @return DimensionProperties */
  public function getProperties()
  {
    return $this->properties;
  }
  /** @param DimensionRange */
  public function setRange(DimensionRange $range)
  {
    $this->range = $range;
  }
  /** @return DimensionRange */
  public function getRange()
  {
    return $this->range;
  }
}

class UpdateEmbeddedObjectBorderRequest extends \Google\Model
{
  /** @var EmbeddedObjectBorder */
  public $border;
  /** @var string */
  public $fields;
  /** @var int */
  public $objectId;
  protected $borderType = EmbeddedObjectBorder::class;
  protected $borderDataType = '';
  /** @param EmbeddedObjectBorder */
  public function setBorder(EmbeddedObjectBorder $border)
  {
    $this->border = $border;
  }
  /** @return EmbeddedObjectBorder */
  public function getBorder()
  {
    return $this->border;
  }
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param int */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return int */
  public function getObjectId()
  {
    return $this->objectId;
  }
}

class UpdateEmbeddedObjectPositionRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var EmbeddedObjectPosition */
  public $newPosition;
  /** @var int */
  public $objectId;
  protected $newPositionType = EmbeddedObjectPosition::class;
  protected $newPositionDataType = '';
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param EmbeddedObjectPosition */
  public function setNewPosition(EmbeddedObjectPosition $newPosition)
  {
    $this->newPosition = $newPosition;
  }
  /** @return EmbeddedObjectPosition */
  public function getNewPosition()
  {
    return $this->newPosition;
  }
  /** @param int */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /** @return int */
  public function getObjectId()
  {
    return $this->objectId;
  }
}

class UpdateEmbeddedObjectPositionResponse extends \Google\Model
{
  /** @var EmbeddedObjectPosition */
  public $position;
  protected $positionType = EmbeddedObjectPosition::class;
  protected $positionDataType = '';
  /** @param EmbeddedObjectPosition */
  public function setPosition(EmbeddedObjectPosition $position)
  {
    $this->position = $position;
  }
  /** @return EmbeddedObjectPosition */
  public function getPosition()
  {
    return $this->position;
  }
}

class UpdateFilterViewRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var FilterView */
  public $filter;
  protected $filterType = FilterView::class;
  protected $filterDataType = '';
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param FilterView */
  public function setFilter(FilterView $filter)
  {
    $this->filter = $filter;
  }
  /** @return FilterView */
  public function getFilter()
  {
    return $this->filter;
  }
}

class UpdateNamedRangeRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var NamedRange */
  public $namedRange;
  protected $namedRangeType = NamedRange::class;
  protected $namedRangeDataType = '';
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param NamedRange */
  public function setNamedRange(NamedRange $namedRange)
  {
    $this->namedRange = $namedRange;
  }
  /** @return NamedRange */
  public function getNamedRange()
  {
    return $this->namedRange;
  }
}

class UpdateProtectedRangeRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var ProtectedRange */
  public $protectedRange;
  protected $protectedRangeType = ProtectedRange::class;
  protected $protectedRangeDataType = '';
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param ProtectedRange */
  public function setProtectedRange(ProtectedRange $protectedRange)
  {
    $this->protectedRange = $protectedRange;
  }
  /** @return ProtectedRange */
  public function getProtectedRange()
  {
    return $this->protectedRange;
  }
}

class UpdateSheetPropertiesRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var SheetProperties */
  public $properties;
  protected $propertiesType = SheetProperties::class;
  protected $propertiesDataType = '';
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param SheetProperties */
  public function setProperties(SheetProperties $properties)
  {
    $this->properties = $properties;
  }
  /** @return SheetProperties */
  public function getProperties()
  {
    return $this->properties;
  }
}

class UpdateSlicerSpecRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var int */
  public $slicerId;
  /** @var SlicerSpec */
  public $spec;
  protected $specType = SlicerSpec::class;
  protected $specDataType = '';
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param int */
  public function setSlicerId($slicerId)
  {
    $this->slicerId = $slicerId;
  }
  /** @return int */
  public function getSlicerId()
  {
    return $this->slicerId;
  }
  /** @param SlicerSpec */
  public function setSpec(SlicerSpec $spec)
  {
    $this->spec = $spec;
  }
  /** @return SlicerSpec */
  public function getSpec()
  {
    return $this->spec;
  }
}

class UpdateSpreadsheetPropertiesRequest extends \Google\Model
{
  /** @var string */
  public $fields;
  /** @var SpreadsheetProperties */
  public $properties;
  protected $propertiesType = SpreadsheetProperties::class;
  protected $propertiesDataType = '';
  /** @param string */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /** @return string */
  public function getFields()
  {
    return $this->fields;
  }
  /** @param SpreadsheetProperties */
  public function setProperties(SpreadsheetProperties $properties)
  {
    $this->properties = $properties;
  }
  /** @return SpreadsheetProperties */
  public function getProperties()
  {
    return $this->properties;
  }
}

class UpdateValuesByDataFilterResponse extends \Google\Model
{
  /** @var DataFilter */
  public $dataFilter;
  /** @var int */
  public $updatedCells;
  /** @var int */
  public $updatedColumns;
  /** @var ValueRange */
  public $updatedData;
  /** @var string */
  public $updatedRange;
  /** @var int */
  public $updatedRows;
  protected $dataFilterType = DataFilter::class;
  protected $dataFilterDataType = '';
  protected $updatedDataType = ValueRange::class;
  protected $updatedDataDataType = '';
  /** @param DataFilter */
  public function setDataFilter(DataFilter $dataFilter)
  {
    $this->dataFilter = $dataFilter;
  }
  /** @return DataFilter */
  public function getDataFilter()
  {
    return $this->dataFilter;
  }
  /** @param int */
  public function setUpdatedCells($updatedCells)
  {
    $this->updatedCells = $updatedCells;
  }
  /** @return int */
  public function getUpdatedCells()
  {
    return $this->updatedCells;
  }
  /** @param int */
  public function setUpdatedColumns($updatedColumns)
  {
    $this->updatedColumns = $updatedColumns;
  }
  /** @return int */
  public function getUpdatedColumns()
  {
    return $this->updatedColumns;
  }
  /** @param ValueRange */
  public function setUpdatedData(ValueRange $updatedData)
  {
    $this->updatedData = $updatedData;
  }
  /** @return ValueRange */
  public function getUpdatedData()
  {
    return $this->updatedData;
  }
  /** @param string */
  public function setUpdatedRange($updatedRange)
  {
    $this->updatedRange = $updatedRange;
  }
  /** @return string */
  public function getUpdatedRange()
  {
    return $this->updatedRange;
  }
  /** @param int */
  public function setUpdatedRows($updatedRows)
  {
    $this->updatedRows = $updatedRows;
  }
  /** @return int */
  public function getUpdatedRows()
  {
    return $this->updatedRows;
  }
}

class UpdateValuesResponse extends \Google\Model
{
  /** @var string */
  public $spreadsheetId;
  /** @var int */
  public $updatedCells;
  /** @var int */
  public $updatedColumns;
  /** @var ValueRange */
  public $updatedData;
  /** @var string */
  public $updatedRange;
  /** @var int */
  public $updatedRows;
  protected $updatedDataType = ValueRange::class;
  protected $updatedDataDataType = '';
  /** @param string */
  public function setSpreadsheetId($spreadsheetId)
  {
    $this->spreadsheetId = $spreadsheetId;
  }
  /** @return string */
  public function getSpreadsheetId()
  {
    return $this->spreadsheetId;
  }
  /** @param int */
  public function setUpdatedCells($updatedCells)
  {
    $this->updatedCells = $updatedCells;
  }
  /** @return int */
  public function getUpdatedCells()
  {
    return $this->updatedCells;
  }
  /** @param int */
  public function setUpdatedColumns($updatedColumns)
  {
    $this->updatedColumns = $updatedColumns;
  }
  /** @return int */
  public function getUpdatedColumns()
  {
    return $this->updatedColumns;
  }
  /** @param ValueRange */
  public function setUpdatedData(ValueRange $updatedData)
  {
    $this->updatedData = $updatedData;
  }
  /** @return ValueRange */
  public function getUpdatedData()
  {
    return $this->updatedData;
  }
  /** @param string */
  public function setUpdatedRange($updatedRange)
  {
    $this->updatedRange = $updatedRange;
  }
  /** @return string */
  public function getUpdatedRange()
  {
    return $this->updatedRange;
  }
  /** @param int */
  public function setUpdatedRows($updatedRows)
  {
    $this->updatedRows = $updatedRows;
  }
  /** @return int */
  public function getUpdatedRows()
  {
    return $this->updatedRows;
  }
}

class ValueRange extends \Google\Collection
{
  /** @var string */
  public $majorDimension;
  /** @var string */
  public $range;
  /** @var array[] */
  public $values;
  protected $collection_key = 'values';
  /** @param string */
  public function setMajorDimension($majorDimension)
  {
    $this->majorDimension = $majorDimension;
  }
  /** @return string */
  public function getMajorDimension()
  {
    return $this->majorDimension;
  }
  /** @param string */
  public function setRange($range)
  {
    $this->range = $range;
  }
  /** @return string */
  public function getRange()
  {
    return $this->range;
  }
  /** @param array[] */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /** @return array[] */
  public function getValues()
  {
    return $this->values;
  }
}

class WaterfallChartColumnStyle extends \Google\Model
{
  /** @var Color */
  public $color;
  /** @var ColorStyle */
  public $colorStyle;
  /** @var string */
  public $label;
  protected $colorType = Color::class;
  protected $colorDataType = '';
  protected $colorStyleType = ColorStyle::class;
  protected $colorStyleDataType = '';
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
  /** @param ColorStyle */
  public function setColorStyle(ColorStyle $colorStyle)
  {
    $this->colorStyle = $colorStyle;
  }
  /** @return ColorStyle */
  public function getColorStyle()
  {
    return $this->colorStyle;
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

class WaterfallChartCustomSubtotal extends \Google\Model
{
  /** @var bool */
  public $dataIsSubtotal;
  /** @var string */
  public $label;
  /** @var int */
  public $subtotalIndex;

  /** @param bool */
  public function setDataIsSubtotal($dataIsSubtotal)
  {
    $this->dataIsSubtotal = $dataIsSubtotal;
  }
  /** @return bool */
  public function getDataIsSubtotal()
  {
    return $this->dataIsSubtotal;
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
  /** @param int */
  public function setSubtotalIndex($subtotalIndex)
  {
    $this->subtotalIndex = $subtotalIndex;
  }
  /** @return int */
  public function getSubtotalIndex()
  {
    return $this->subtotalIndex;
  }
}

class WaterfallChartDomain extends \Google\Model
{
  /** @var ChartData */
  public $data;
  /** @var bool */
  public $reversed;
  protected $dataType = ChartData::class;
  protected $dataDataType = '';
  /** @param ChartData */
  public function setData(ChartData $data)
  {
    $this->data = $data;
  }
  /** @return ChartData */
  public function getData()
  {
    return $this->data;
  }
  /** @param bool */
  public function setReversed($reversed)
  {
    $this->reversed = $reversed;
  }
  /** @return bool */
  public function getReversed()
  {
    return $this->reversed;
  }
}

class WaterfallChartSeries extends \Google\Collection
{
  /** @var WaterfallChartCustomSubtotal[] */
  public $customSubtotals;
  /** @var ChartData */
  public $data;
  /** @var DataLabel */
  public $dataLabel;
  /** @var bool */
  public $hideTrailingSubtotal;
  /** @var WaterfallChartColumnStyle */
  public $negativeColumnsStyle;
  /** @var WaterfallChartColumnStyle */
  public $positiveColumnsStyle;
  /** @var WaterfallChartColumnStyle */
  public $subtotalColumnsStyle;
  protected $collection_key = 'customSubtotals';
  protected $customSubtotalsType = WaterfallChartCustomSubtotal::class;
  protected $customSubtotalsDataType = 'array';
  protected $dataType = ChartData::class;
  protected $dataDataType = '';
  protected $dataLabelType = DataLabel::class;
  protected $dataLabelDataType = '';
  protected $negativeColumnsStyleType = WaterfallChartColumnStyle::class;
  protected $negativeColumnsStyleDataType = '';
  protected $positiveColumnsStyleType = WaterfallChartColumnStyle::class;
  protected $positiveColumnsStyleDataType = '';
  protected $subtotalColumnsStyleType = WaterfallChartColumnStyle::class;
  protected $subtotalColumnsStyleDataType = '';
  /** @param WaterfallChartCustomSubtotal[] */
  public function setCustomSubtotals($customSubtotals)
  {
    $this->customSubtotals = $customSubtotals;
  }
  /** @return WaterfallChartCustomSubtotal[] */
  public function getCustomSubtotals()
  {
    return $this->customSubtotals;
  }
  /** @param ChartData */
  public function setData(ChartData $data)
  {
    $this->data = $data;
  }
  /** @return ChartData */
  public function getData()
  {
    return $this->data;
  }
  /** @param DataLabel */
  public function setDataLabel(DataLabel $dataLabel)
  {
    $this->dataLabel = $dataLabel;
  }
  /** @return DataLabel */
  public function getDataLabel()
  {
    return $this->dataLabel;
  }
  /** @param bool */
  public function setHideTrailingSubtotal($hideTrailingSubtotal)
  {
    $this->hideTrailingSubtotal = $hideTrailingSubtotal;
  }
  /** @return bool */
  public function getHideTrailingSubtotal()
  {
    return $this->hideTrailingSubtotal;
  }
  /** @param WaterfallChartColumnStyle */
  public function setNegativeColumnsStyle(WaterfallChartColumnStyle $negativeColumnsStyle)
  {
    $this->negativeColumnsStyle = $negativeColumnsStyle;
  }
  /** @return WaterfallChartColumnStyle */
  public function getNegativeColumnsStyle()
  {
    return $this->negativeColumnsStyle;
  }
  /** @param WaterfallChartColumnStyle */
  public function setPositiveColumnsStyle(WaterfallChartColumnStyle $positiveColumnsStyle)
  {
    $this->positiveColumnsStyle = $positiveColumnsStyle;
  }
  /** @return WaterfallChartColumnStyle */
  public function getPositiveColumnsStyle()
  {
    return $this->positiveColumnsStyle;
  }
  /** @param WaterfallChartColumnStyle */
  public function setSubtotalColumnsStyle(WaterfallChartColumnStyle $subtotalColumnsStyle)
  {
    $this->subtotalColumnsStyle = $subtotalColumnsStyle;
  }
  /** @return WaterfallChartColumnStyle */
  public function getSubtotalColumnsStyle()
  {
    return $this->subtotalColumnsStyle;
  }
}

class WaterfallChartSpec extends \Google\Collection
{
  /** @var LineStyle */
  public $connectorLineStyle;
  /** @var WaterfallChartDomain */
  public $domain;
  /** @var bool */
  public $firstValueIsTotal;
  /** @var bool */
  public $hideConnectorLines;
  /** @var WaterfallChartSeries[] */
  public $series;
  /** @var string */
  public $stackedType;
  /** @var DataLabel */
  public $totalDataLabel;
  protected $collection_key = 'series';
  protected $connectorLineStyleType = LineStyle::class;
  protected $connectorLineStyleDataType = '';
  protected $domainType = WaterfallChartDomain::class;
  protected $domainDataType = '';
  protected $seriesType = WaterfallChartSeries::class;
  protected $seriesDataType = 'array';
  protected $totalDataLabelType = DataLabel::class;
  protected $totalDataLabelDataType = '';
  /** @param LineStyle */
  public function setConnectorLineStyle(LineStyle $connectorLineStyle)
  {
    $this->connectorLineStyle = $connectorLineStyle;
  }
  /** @return LineStyle */
  public function getConnectorLineStyle()
  {
    return $this->connectorLineStyle;
  }
  /** @param WaterfallChartDomain */
  public function setDomain(WaterfallChartDomain $domain)
  {
    $this->domain = $domain;
  }
  /** @return WaterfallChartDomain */
  public function getDomain()
  {
    return $this->domain;
  }
  /** @param bool */
  public function setFirstValueIsTotal($firstValueIsTotal)
  {
    $this->firstValueIsTotal = $firstValueIsTotal;
  }
  /** @return bool */
  public function getFirstValueIsTotal()
  {
    return $this->firstValueIsTotal;
  }
  /** @param bool */
  public function setHideConnectorLines($hideConnectorLines)
  {
    $this->hideConnectorLines = $hideConnectorLines;
  }
  /** @return bool */
  public function getHideConnectorLines()
  {
    return $this->hideConnectorLines;
  }
  /** @param WaterfallChartSeries[] */
  public function setSeries($series)
  {
    $this->series = $series;
  }
  /** @return WaterfallChartSeries[] */
  public function getSeries()
  {
    return $this->series;
  }
  /** @param string */
  public function setStackedType($stackedType)
  {
    $this->stackedType = $stackedType;
  }
  /** @return string */
  public function getStackedType()
  {
    return $this->stackedType;
  }
  /** @param DataLabel */
  public function setTotalDataLabel(DataLabel $totalDataLabel)
  {
    $this->totalDataLabel = $totalDataLabel;
  }
  /** @return DataLabel */
  public function getTotalDataLabel()
  {
    return $this->totalDataLabel;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AddBandingRequest::class, 'Google_Service_Sheets_AddBandingRequest');
class_alias(AddBandingResponse::class, 'Google_Service_Sheets_AddBandingResponse');
class_alias(AddChartRequest::class, 'Google_Service_Sheets_AddChartRequest');
class_alias(AddChartResponse::class, 'Google_Service_Sheets_AddChartResponse');
class_alias(AddConditionalFormatRuleRequest::class, 'Google_Service_Sheets_AddConditionalFormatRuleRequest');
class_alias(AddDataSourceRequest::class, 'Google_Service_Sheets_AddDataSourceRequest');
class_alias(AddDataSourceResponse::class, 'Google_Service_Sheets_AddDataSourceResponse');
class_alias(AddDimensionGroupRequest::class, 'Google_Service_Sheets_AddDimensionGroupRequest');
class_alias(AddDimensionGroupResponse::class, 'Google_Service_Sheets_AddDimensionGroupResponse');
class_alias(AddFilterViewRequest::class, 'Google_Service_Sheets_AddFilterViewRequest');
class_alias(AddFilterViewResponse::class, 'Google_Service_Sheets_AddFilterViewResponse');
class_alias(AddNamedRangeRequest::class, 'Google_Service_Sheets_AddNamedRangeRequest');
class_alias(AddNamedRangeResponse::class, 'Google_Service_Sheets_AddNamedRangeResponse');
class_alias(AddProtectedRangeRequest::class, 'Google_Service_Sheets_AddProtectedRangeRequest');
class_alias(AddProtectedRangeResponse::class, 'Google_Service_Sheets_AddProtectedRangeResponse');
class_alias(AddSheetRequest::class, 'Google_Service_Sheets_AddSheetRequest');
class_alias(AddSheetResponse::class, 'Google_Service_Sheets_AddSheetResponse');
class_alias(AddSlicerRequest::class, 'Google_Service_Sheets_AddSlicerRequest');
class_alias(AddSlicerResponse::class, 'Google_Service_Sheets_AddSlicerResponse');
class_alias(AppendCellsRequest::class, 'Google_Service_Sheets_AppendCellsRequest');
class_alias(AppendDimensionRequest::class, 'Google_Service_Sheets_AppendDimensionRequest');
class_alias(AppendValuesResponse::class, 'Google_Service_Sheets_AppendValuesResponse');
class_alias(AutoFillRequest::class, 'Google_Service_Sheets_AutoFillRequest');
class_alias(AutoResizeDimensionsRequest::class, 'Google_Service_Sheets_AutoResizeDimensionsRequest');
class_alias(BandedRange::class, 'Google_Service_Sheets_BandedRange');
class_alias(BandingProperties::class, 'Google_Service_Sheets_BandingProperties');
class_alias(BaselineValueFormat::class, 'Google_Service_Sheets_BaselineValueFormat');
class_alias(BasicChartAxis::class, 'Google_Service_Sheets_BasicChartAxis');
class_alias(BasicChartDomain::class, 'Google_Service_Sheets_BasicChartDomain');
class_alias(BasicChartSeries::class, 'Google_Service_Sheets_BasicChartSeries');
class_alias(BasicChartSpec::class, 'Google_Service_Sheets_BasicChartSpec');
class_alias(BasicFilter::class, 'Google_Service_Sheets_BasicFilter');
class_alias(BasicSeriesDataPointStyleOverride::class, 'Google_Service_Sheets_BasicSeriesDataPointStyleOverride');
class_alias(BatchClearValuesByDataFilterRequest::class, 'Google_Service_Sheets_BatchClearValuesByDataFilterRequest');
class_alias(BatchClearValuesByDataFilterResponse::class, 'Google_Service_Sheets_BatchClearValuesByDataFilterResponse');
class_alias(BatchClearValuesRequest::class, 'Google_Service_Sheets_BatchClearValuesRequest');
class_alias(BatchClearValuesResponse::class, 'Google_Service_Sheets_BatchClearValuesResponse');
class_alias(BatchGetValuesByDataFilterRequest::class, 'Google_Service_Sheets_BatchGetValuesByDataFilterRequest');
class_alias(BatchGetValuesByDataFilterResponse::class, 'Google_Service_Sheets_BatchGetValuesByDataFilterResponse');
class_alias(BatchGetValuesResponse::class, 'Google_Service_Sheets_BatchGetValuesResponse');
class_alias(BatchUpdateSpreadsheetRequest::class, 'Google_Service_Sheets_BatchUpdateSpreadsheetRequest');
class_alias(BatchUpdateSpreadsheetResponse::class, 'Google_Service_Sheets_BatchUpdateSpreadsheetResponse');
class_alias(BatchUpdateValuesByDataFilterRequest::class, 'Google_Service_Sheets_BatchUpdateValuesByDataFilterRequest');
class_alias(BatchUpdateValuesByDataFilterResponse::class, 'Google_Service_Sheets_BatchUpdateValuesByDataFilterResponse');
class_alias(BatchUpdateValuesRequest::class, 'Google_Service_Sheets_BatchUpdateValuesRequest');
class_alias(BatchUpdateValuesResponse::class, 'Google_Service_Sheets_BatchUpdateValuesResponse');
class_alias(BigQueryDataSourceSpec::class, 'Google_Service_Sheets_BigQueryDataSourceSpec');
class_alias(BigQueryQuerySpec::class, 'Google_Service_Sheets_BigQueryQuerySpec');
class_alias(BigQueryTableSpec::class, 'Google_Service_Sheets_BigQueryTableSpec');
class_alias(BooleanCondition::class, 'Google_Service_Sheets_BooleanCondition');
class_alias(BooleanRule::class, 'Google_Service_Sheets_BooleanRule');
class_alias(Border::class, 'Google_Service_Sheets_Border');
class_alias(Borders::class, 'Google_Service_Sheets_Borders');
class_alias(BubbleChartSpec::class, 'Google_Service_Sheets_BubbleChartSpec');
class_alias(CandlestickChartSpec::class, 'Google_Service_Sheets_CandlestickChartSpec');
class_alias(CandlestickData::class, 'Google_Service_Sheets_CandlestickData');
class_alias(CandlestickDomain::class, 'Google_Service_Sheets_CandlestickDomain');
class_alias(CandlestickSeries::class, 'Google_Service_Sheets_CandlestickSeries');
class_alias(CellData::class, 'Google_Service_Sheets_CellData');
class_alias(CellFormat::class, 'Google_Service_Sheets_CellFormat');
class_alias(ChartAxisViewWindowOptions::class, 'Google_Service_Sheets_ChartAxisViewWindowOptions');
class_alias(ChartCustomNumberFormatOptions::class, 'Google_Service_Sheets_ChartCustomNumberFormatOptions');
class_alias(ChartData::class, 'Google_Service_Sheets_ChartData');
class_alias(ChartDateTimeRule::class, 'Google_Service_Sheets_ChartDateTimeRule');
class_alias(ChartGroupRule::class, 'Google_Service_Sheets_ChartGroupRule');
class_alias(ChartHistogramRule::class, 'Google_Service_Sheets_ChartHistogramRule');
class_alias(ChartSourceRange::class, 'Google_Service_Sheets_ChartSourceRange');
class_alias(ChartSpec::class, 'Google_Service_Sheets_ChartSpec');
class_alias(ClearBasicFilterRequest::class, 'Google_Service_Sheets_ClearBasicFilterRequest');
class_alias(ClearValuesRequest::class, 'Google_Service_Sheets_ClearValuesRequest');
class_alias(ClearValuesResponse::class, 'Google_Service_Sheets_ClearValuesResponse');
class_alias(Color::class, 'Google_Service_Sheets_Color');
class_alias(ColorStyle::class, 'Google_Service_Sheets_ColorStyle');
class_alias(ConditionValue::class, 'Google_Service_Sheets_ConditionValue');
class_alias(ConditionalFormatRule::class, 'Google_Service_Sheets_ConditionalFormatRule');
class_alias(CopyPasteRequest::class, 'Google_Service_Sheets_CopyPasteRequest');
class_alias(CopySheetToAnotherSpreadsheetRequest::class, 'Google_Service_Sheets_CopySheetToAnotherSpreadsheetRequest');
class_alias(CreateDeveloperMetadataRequest::class, 'Google_Service_Sheets_CreateDeveloperMetadataRequest');
class_alias(CreateDeveloperMetadataResponse::class, 'Google_Service_Sheets_CreateDeveloperMetadataResponse');
class_alias(CutPasteRequest::class, 'Google_Service_Sheets_CutPasteRequest');
class_alias(DataExecutionStatus::class, 'Google_Service_Sheets_DataExecutionStatus');
class_alias(DataFilter::class, 'Google_Service_Sheets_DataFilter');
class_alias(DataFilterValueRange::class, 'Google_Service_Sheets_DataFilterValueRange');
class_alias(DataLabel::class, 'Google_Service_Sheets_DataLabel');
class_alias(DataSource::class, 'Google_Service_Sheets_DataSource');
class_alias(DataSourceChartProperties::class, 'Google_Service_Sheets_DataSourceChartProperties');
class_alias(DataSourceColumn::class, 'Google_Service_Sheets_DataSourceColumn');
class_alias(DataSourceColumnReference::class, 'Google_Service_Sheets_DataSourceColumnReference');
class_alias(DataSourceFormula::class, 'Google_Service_Sheets_DataSourceFormula');
class_alias(DataSourceObjectReference::class, 'Google_Service_Sheets_DataSourceObjectReference');
class_alias(DataSourceObjectReferences::class, 'Google_Service_Sheets_DataSourceObjectReferences');
class_alias(DataSourceParameter::class, 'Google_Service_Sheets_DataSourceParameter');
class_alias(DataSourceRefreshDailySchedule::class, 'Google_Service_Sheets_DataSourceRefreshDailySchedule');
class_alias(DataSourceRefreshMonthlySchedule::class, 'Google_Service_Sheets_DataSourceRefreshMonthlySchedule');
class_alias(DataSourceRefreshSchedule::class, 'Google_Service_Sheets_DataSourceRefreshSchedule');
class_alias(DataSourceRefreshWeeklySchedule::class, 'Google_Service_Sheets_DataSourceRefreshWeeklySchedule');
class_alias(DataSourceSheetDimensionRange::class, 'Google_Service_Sheets_DataSourceSheetDimensionRange');
class_alias(DataSourceSheetProperties::class, 'Google_Service_Sheets_DataSourceSheetProperties');
class_alias(DataSourceSpec::class, 'Google_Service_Sheets_DataSourceSpec');
class_alias(DataSourceTable::class, 'Google_Service_Sheets_DataSourceTable');
class_alias(DataValidationRule::class, 'Google_Service_Sheets_DataValidationRule');
class_alias(DateTimeRule::class, 'Google_Service_Sheets_DateTimeRule');
class_alias(DeleteBandingRequest::class, 'Google_Service_Sheets_DeleteBandingRequest');
class_alias(DeleteConditionalFormatRuleRequest::class, 'Google_Service_Sheets_DeleteConditionalFormatRuleRequest');
class_alias(DeleteConditionalFormatRuleResponse::class, 'Google_Service_Sheets_DeleteConditionalFormatRuleResponse');
class_alias(DeleteDataSourceRequest::class, 'Google_Service_Sheets_DeleteDataSourceRequest');
class_alias(DeleteDeveloperMetadataRequest::class, 'Google_Service_Sheets_DeleteDeveloperMetadataRequest');
class_alias(DeleteDeveloperMetadataResponse::class, 'Google_Service_Sheets_DeleteDeveloperMetadataResponse');
class_alias(DeleteDimensionGroupRequest::class, 'Google_Service_Sheets_DeleteDimensionGroupRequest');
class_alias(DeleteDimensionGroupResponse::class, 'Google_Service_Sheets_DeleteDimensionGroupResponse');
class_alias(DeleteDimensionRequest::class, 'Google_Service_Sheets_DeleteDimensionRequest');
class_alias(DeleteDuplicatesRequest::class, 'Google_Service_Sheets_DeleteDuplicatesRequest');
class_alias(DeleteDuplicatesResponse::class, 'Google_Service_Sheets_DeleteDuplicatesResponse');
class_alias(DeleteEmbeddedObjectRequest::class, 'Google_Service_Sheets_DeleteEmbeddedObjectRequest');
class_alias(DeleteFilterViewRequest::class, 'Google_Service_Sheets_DeleteFilterViewRequest');
class_alias(DeleteNamedRangeRequest::class, 'Google_Service_Sheets_DeleteNamedRangeRequest');
class_alias(DeleteProtectedRangeRequest::class, 'Google_Service_Sheets_DeleteProtectedRangeRequest');
class_alias(DeleteRangeRequest::class, 'Google_Service_Sheets_DeleteRangeRequest');
class_alias(DeleteSheetRequest::class, 'Google_Service_Sheets_DeleteSheetRequest');
class_alias(DeveloperMetadata::class, 'Google_Service_Sheets_DeveloperMetadata');
class_alias(DeveloperMetadataLocation::class, 'Google_Service_Sheets_DeveloperMetadataLocation');
class_alias(DeveloperMetadataLookup::class, 'Google_Service_Sheets_DeveloperMetadataLookup');
class_alias(DimensionGroup::class, 'Google_Service_Sheets_DimensionGroup');
class_alias(DimensionProperties::class, 'Google_Service_Sheets_DimensionProperties');
class_alias(DimensionRange::class, 'Google_Service_Sheets_DimensionRange');
class_alias(DuplicateFilterViewRequest::class, 'Google_Service_Sheets_DuplicateFilterViewRequest');
class_alias(DuplicateFilterViewResponse::class, 'Google_Service_Sheets_DuplicateFilterViewResponse');
class_alias(DuplicateSheetRequest::class, 'Google_Service_Sheets_DuplicateSheetRequest');
class_alias(DuplicateSheetResponse::class, 'Google_Service_Sheets_DuplicateSheetResponse');
class_alias(Editors::class, 'Google_Service_Sheets_Editors');
class_alias(EmbeddedChart::class, 'Google_Service_Sheets_EmbeddedChart');
class_alias(EmbeddedObjectBorder::class, 'Google_Service_Sheets_EmbeddedObjectBorder');
class_alias(EmbeddedObjectPosition::class, 'Google_Service_Sheets_EmbeddedObjectPosition');
class_alias(ErrorValue::class, 'Google_Service_Sheets_ErrorValue');
class_alias(ExtendedValue::class, 'Google_Service_Sheets_ExtendedValue');
class_alias(FilterCriteria::class, 'Google_Service_Sheets_FilterCriteria');
class_alias(FilterSpec::class, 'Google_Service_Sheets_FilterSpec');
class_alias(FilterView::class, 'Google_Service_Sheets_FilterView');
class_alias(FindReplaceRequest::class, 'Google_Service_Sheets_FindReplaceRequest');
class_alias(FindReplaceResponse::class, 'Google_Service_Sheets_FindReplaceResponse');
class_alias(GetSpreadsheetByDataFilterRequest::class, 'Google_Service_Sheets_GetSpreadsheetByDataFilterRequest');
class_alias(GradientRule::class, 'Google_Service_Sheets_GradientRule');
class_alias(GridCoordinate::class, 'Google_Service_Sheets_GridCoordinate');
class_alias(GridData::class, 'Google_Service_Sheets_GridData');
class_alias(GridProperties::class, 'Google_Service_Sheets_GridProperties');
class_alias(GridRange::class, 'Google_Service_Sheets_GridRange');
class_alias(HistogramChartSpec::class, 'Google_Service_Sheets_HistogramChartSpec');
class_alias(HistogramRule::class, 'Google_Service_Sheets_HistogramRule');
class_alias(HistogramSeries::class, 'Google_Service_Sheets_HistogramSeries');
class_alias(InsertDimensionRequest::class, 'Google_Service_Sheets_InsertDimensionRequest');
class_alias(InsertRangeRequest::class, 'Google_Service_Sheets_InsertRangeRequest');
class_alias(InterpolationPoint::class, 'Google_Service_Sheets_InterpolationPoint');
class_alias(Interval::class, 'Google_Service_Sheets_Interval');
class_alias(IterativeCalculationSettings::class, 'Google_Service_Sheets_IterativeCalculationSettings');
class_alias(KeyValueFormat::class, 'Google_Service_Sheets_KeyValueFormat');
class_alias(LineStyle::class, 'Google_Service_Sheets_LineStyle');
class_alias(Link::class, 'Google_Service_Sheets_Link');
class_alias(ManualRule::class, 'Google_Service_Sheets_ManualRule');
class_alias(ManualRuleGroup::class, 'Google_Service_Sheets_ManualRuleGroup');
class_alias(MatchedDeveloperMetadata::class, 'Google_Service_Sheets_MatchedDeveloperMetadata');
class_alias(MatchedValueRange::class, 'Google_Service_Sheets_MatchedValueRange');
class_alias(MergeCellsRequest::class, 'Google_Service_Sheets_MergeCellsRequest');
class_alias(MoveDimensionRequest::class, 'Google_Service_Sheets_MoveDimensionRequest');
class_alias(NamedRange::class, 'Google_Service_Sheets_NamedRange');
class_alias(NumberFormat::class, 'Google_Service_Sheets_NumberFormat');
class_alias(OrgChartSpec::class, 'Google_Service_Sheets_OrgChartSpec');
class_alias(OverlayPosition::class, 'Google_Service_Sheets_OverlayPosition');
class_alias(Padding::class, 'Google_Service_Sheets_Padding');
class_alias(PasteDataRequest::class, 'Google_Service_Sheets_PasteDataRequest');
class_alias(PieChartSpec::class, 'Google_Service_Sheets_PieChartSpec');
class_alias(PivotFilterCriteria::class, 'Google_Service_Sheets_PivotFilterCriteria');
class_alias(PivotFilterSpec::class, 'Google_Service_Sheets_PivotFilterSpec');
class_alias(PivotGroup::class, 'Google_Service_Sheets_PivotGroup');
class_alias(PivotGroupLimit::class, 'Google_Service_Sheets_PivotGroupLimit');
class_alias(PivotGroupRule::class, 'Google_Service_Sheets_PivotGroupRule');
class_alias(PivotGroupSortValueBucket::class, 'Google_Service_Sheets_PivotGroupSortValueBucket');
class_alias(PivotGroupValueMetadata::class, 'Google_Service_Sheets_PivotGroupValueMetadata');
class_alias(PivotTable::class, 'Google_Service_Sheets_PivotTable');
class_alias(PivotValue::class, 'Google_Service_Sheets_PivotValue');
class_alias(PointStyle::class, 'Google_Service_Sheets_PointStyle');
class_alias(ProtectedRange::class, 'Google_Service_Sheets_ProtectedRange');
class_alias(RandomizeRangeRequest::class, 'Google_Service_Sheets_RandomizeRangeRequest');
class_alias(RefreshDataSourceObjectExecutionStatus::class, 'Google_Service_Sheets_RefreshDataSourceObjectExecutionStatus');
class_alias(RefreshDataSourceRequest::class, 'Google_Service_Sheets_RefreshDataSourceRequest');
class_alias(RefreshDataSourceResponse::class, 'Google_Service_Sheets_RefreshDataSourceResponse');
class_alias(RepeatCellRequest::class, 'Google_Service_Sheets_RepeatCellRequest');
class_alias(Request::class, 'Google_Service_Sheets_Request');
class_alias(Response::class, 'Google_Service_Sheets_Response');
class_alias(RowData::class, 'Google_Service_Sheets_RowData');
class_alias(ScorecardChartSpec::class, 'Google_Service_Sheets_ScorecardChartSpec');
class_alias(SearchDeveloperMetadataRequest::class, 'Google_Service_Sheets_SearchDeveloperMetadataRequest');
class_alias(SearchDeveloperMetadataResponse::class, 'Google_Service_Sheets_SearchDeveloperMetadataResponse');
class_alias(SetBasicFilterRequest::class, 'Google_Service_Sheets_SetBasicFilterRequest');
class_alias(SetDataValidationRequest::class, 'Google_Service_Sheets_SetDataValidationRequest');
class_alias(Sheet::class, 'Google_Service_Sheets_Sheet');
class_alias(SheetProperties::class, 'Google_Service_Sheets_SheetProperties');
class_alias(Slicer::class, 'Google_Service_Sheets_Slicer');
class_alias(SlicerSpec::class, 'Google_Service_Sheets_SlicerSpec');
class_alias(SortRangeRequest::class, 'Google_Service_Sheets_SortRangeRequest');
class_alias(SortSpec::class, 'Google_Service_Sheets_SortSpec');
class_alias(SourceAndDestination::class, 'Google_Service_Sheets_SourceAndDestination');
class_alias(Spreadsheet::class, 'Google_Service_Sheets_Spreadsheet');
class_alias(SpreadsheetProperties::class, 'Google_Service_Sheets_SpreadsheetProperties');
class_alias(SpreadsheetTheme::class, 'Google_Service_Sheets_SpreadsheetTheme');
class_alias(TextFormat::class, 'Google_Service_Sheets_TextFormat');
class_alias(TextFormatRun::class, 'Google_Service_Sheets_TextFormatRun');
class_alias(TextPosition::class, 'Google_Service_Sheets_TextPosition');
class_alias(TextRotation::class, 'Google_Service_Sheets_TextRotation');
class_alias(TextToColumnsRequest::class, 'Google_Service_Sheets_TextToColumnsRequest');
class_alias(ThemeColorPair::class, 'Google_Service_Sheets_ThemeColorPair');
class_alias(TimeOfDay::class, 'Google_Service_Sheets_TimeOfDay');
class_alias(TreemapChartColorScale::class, 'Google_Service_Sheets_TreemapChartColorScale');
class_alias(TreemapChartSpec::class, 'Google_Service_Sheets_TreemapChartSpec');
class_alias(TrimWhitespaceRequest::class, 'Google_Service_Sheets_TrimWhitespaceRequest');
class_alias(TrimWhitespaceResponse::class, 'Google_Service_Sheets_TrimWhitespaceResponse');
class_alias(UnmergeCellsRequest::class, 'Google_Service_Sheets_UnmergeCellsRequest');
class_alias(UpdateBandingRequest::class, 'Google_Service_Sheets_UpdateBandingRequest');
class_alias(UpdateBordersRequest::class, 'Google_Service_Sheets_UpdateBordersRequest');
class_alias(UpdateCellsRequest::class, 'Google_Service_Sheets_UpdateCellsRequest');
class_alias(UpdateChartSpecRequest::class, 'Google_Service_Sheets_UpdateChartSpecRequest');
class_alias(UpdateConditionalFormatRuleRequest::class, 'Google_Service_Sheets_UpdateConditionalFormatRuleRequest');
class_alias(UpdateConditionalFormatRuleResponse::class, 'Google_Service_Sheets_UpdateConditionalFormatRuleResponse');
class_alias(UpdateDataSourceRequest::class, 'Google_Service_Sheets_UpdateDataSourceRequest');
class_alias(UpdateDataSourceResponse::class, 'Google_Service_Sheets_UpdateDataSourceResponse');
class_alias(UpdateDeveloperMetadataRequest::class, 'Google_Service_Sheets_UpdateDeveloperMetadataRequest');
class_alias(UpdateDeveloperMetadataResponse::class, 'Google_Service_Sheets_UpdateDeveloperMetadataResponse');
class_alias(UpdateDimensionGroupRequest::class, 'Google_Service_Sheets_UpdateDimensionGroupRequest');
class_alias(UpdateDimensionPropertiesRequest::class, 'Google_Service_Sheets_UpdateDimensionPropertiesRequest');
class_alias(UpdateEmbeddedObjectBorderRequest::class, 'Google_Service_Sheets_UpdateEmbeddedObjectBorderRequest');
class_alias(UpdateEmbeddedObjectPositionRequest::class, 'Google_Service_Sheets_UpdateEmbeddedObjectPositionRequest');
class_alias(UpdateEmbeddedObjectPositionResponse::class, 'Google_Service_Sheets_UpdateEmbeddedObjectPositionResponse');
class_alias(UpdateFilterViewRequest::class, 'Google_Service_Sheets_UpdateFilterViewRequest');
class_alias(UpdateNamedRangeRequest::class, 'Google_Service_Sheets_UpdateNamedRangeRequest');
class_alias(UpdateProtectedRangeRequest::class, 'Google_Service_Sheets_UpdateProtectedRangeRequest');
class_alias(UpdateSheetPropertiesRequest::class, 'Google_Service_Sheets_UpdateSheetPropertiesRequest');
class_alias(UpdateSlicerSpecRequest::class, 'Google_Service_Sheets_UpdateSlicerSpecRequest');
class_alias(UpdateSpreadsheetPropertiesRequest::class, 'Google_Service_Sheets_UpdateSpreadsheetPropertiesRequest');
class_alias(UpdateValuesByDataFilterResponse::class, 'Google_Service_Sheets_UpdateValuesByDataFilterResponse');
class_alias(UpdateValuesResponse::class, 'Google_Service_Sheets_UpdateValuesResponse');
class_alias(ValueRange::class, 'Google_Service_Sheets_ValueRange');
class_alias(WaterfallChartColumnStyle::class, 'Google_Service_Sheets_WaterfallChartColumnStyle');
class_alias(WaterfallChartCustomSubtotal::class, 'Google_Service_Sheets_WaterfallChartCustomSubtotal');
class_alias(WaterfallChartDomain::class, 'Google_Service_Sheets_WaterfallChartDomain');
class_alias(WaterfallChartSeries::class, 'Google_Service_Sheets_WaterfallChartSeries');
class_alias(WaterfallChartSpec::class, 'Google_Service_Sheets_WaterfallChartSpec');
