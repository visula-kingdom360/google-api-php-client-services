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

namespace Google\Service\FirebaseCloudMessaging;

class AndroidConfig extends \Google\Model
{
  /** @var string */
  public $collapseKey;
  /** @var string[] */
  public $data;
  /** @var bool */
  public $directBootOk;
  /** @var AndroidFcmOptions */
  public $fcmOptions;
  /** @var AndroidNotification */
  public $notification;
  /** @var string */
  public $priority;
  /** @var string */
  public $restrictedPackageName;
  /** @var string */
  public $ttl;
  protected $fcmOptionsType = AndroidFcmOptions::class;
  protected $fcmOptionsDataType = '';
  protected $notificationType = AndroidNotification::class;
  protected $notificationDataType = '';
  /** @param string */
  public function setCollapseKey($collapseKey)
  {
    $this->collapseKey = $collapseKey;
  }
  /** @return string */
  public function getCollapseKey()
  {
    return $this->collapseKey;
  }
  /** @param string[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string[] */
  public function getData()
  {
    return $this->data;
  }
  /** @param bool */
  public function setDirectBootOk($directBootOk)
  {
    $this->directBootOk = $directBootOk;
  }
  /** @return bool */
  public function getDirectBootOk()
  {
    return $this->directBootOk;
  }
  /** @param AndroidFcmOptions */
  public function setFcmOptions(AndroidFcmOptions $fcmOptions)
  {
    $this->fcmOptions = $fcmOptions;
  }
  /** @return AndroidFcmOptions */
  public function getFcmOptions()
  {
    return $this->fcmOptions;
  }
  /** @param AndroidNotification */
  public function setNotification(AndroidNotification $notification)
  {
    $this->notification = $notification;
  }
  /** @return AndroidNotification */
  public function getNotification()
  {
    return $this->notification;
  }
  /** @param string */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /** @return string */
  public function getPriority()
  {
    return $this->priority;
  }
  /** @param string */
  public function setRestrictedPackageName($restrictedPackageName)
  {
    $this->restrictedPackageName = $restrictedPackageName;
  }
  /** @return string */
  public function getRestrictedPackageName()
  {
    return $this->restrictedPackageName;
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

class AndroidFcmOptions extends \Google\Model
{
  /** @var string */
  public $analyticsLabel;

  /** @param string */
  public function setAnalyticsLabel($analyticsLabel)
  {
    $this->analyticsLabel = $analyticsLabel;
  }
  /** @return string */
  public function getAnalyticsLabel()
  {
    return $this->analyticsLabel;
  }
}

class AndroidNotification extends \Google\Collection
{
  /** @var string */
  public $body;
  /** @var string[] */
  public $bodyLocArgs;
  /** @var string */
  public $bodyLocKey;
  /** @var bool */
  public $bypassProxyNotification;
  /** @var string */
  public $channelId;
  /** @var string */
  public $clickAction;
  /** @var string */
  public $color;
  /** @var bool */
  public $defaultLightSettings;
  /** @var bool */
  public $defaultSound;
  /** @var bool */
  public $defaultVibrateTimings;
  /** @var string */
  public $eventTime;
  /** @var string */
  public $icon;
  /** @var string */
  public $image;
  /** @var LightSettings */
  public $lightSettings;
  /** @var bool */
  public $localOnly;
  /** @var int */
  public $notificationCount;
  /** @var string */
  public $notificationPriority;
  /** @var string */
  public $sound;
  /** @var bool */
  public $sticky;
  /** @var string */
  public $tag;
  /** @var string */
  public $ticker;
  /** @var string */
  public $title;
  /** @var string[] */
  public $titleLocArgs;
  /** @var string */
  public $titleLocKey;
  /** @var string[] */
  public $vibrateTimings;
  /** @var string */
  public $visibility;
  protected $collection_key = 'vibrateTimings';
  protected $lightSettingsType = LightSettings::class;
  protected $lightSettingsDataType = '';
  /** @param string */
  public function setBody($body)
  {
    $this->body = $body;
  }
  /** @return string */
  public function getBody()
  {
    return $this->body;
  }
  /** @param string[] */
  public function setBodyLocArgs($bodyLocArgs)
  {
    $this->bodyLocArgs = $bodyLocArgs;
  }
  /** @return string[] */
  public function getBodyLocArgs()
  {
    return $this->bodyLocArgs;
  }
  /** @param string */
  public function setBodyLocKey($bodyLocKey)
  {
    $this->bodyLocKey = $bodyLocKey;
  }
  /** @return string */
  public function getBodyLocKey()
  {
    return $this->bodyLocKey;
  }
  /** @param bool */
  public function setBypassProxyNotification($bypassProxyNotification)
  {
    $this->bypassProxyNotification = $bypassProxyNotification;
  }
  /** @return bool */
  public function getBypassProxyNotification()
  {
    return $this->bypassProxyNotification;
  }
  /** @param string */
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  /** @return string */
  public function getChannelId()
  {
    return $this->channelId;
  }
  /** @param string */
  public function setClickAction($clickAction)
  {
    $this->clickAction = $clickAction;
  }
  /** @return string */
  public function getClickAction()
  {
    return $this->clickAction;
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
  /** @param bool */
  public function setDefaultLightSettings($defaultLightSettings)
  {
    $this->defaultLightSettings = $defaultLightSettings;
  }
  /** @return bool */
  public function getDefaultLightSettings()
  {
    return $this->defaultLightSettings;
  }
  /** @param bool */
  public function setDefaultSound($defaultSound)
  {
    $this->defaultSound = $defaultSound;
  }
  /** @return bool */
  public function getDefaultSound()
  {
    return $this->defaultSound;
  }
  /** @param bool */
  public function setDefaultVibrateTimings($defaultVibrateTimings)
  {
    $this->defaultVibrateTimings = $defaultVibrateTimings;
  }
  /** @return bool */
  public function getDefaultVibrateTimings()
  {
    return $this->defaultVibrateTimings;
  }
  /** @param string */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /** @return string */
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /** @param string */
  public function setIcon($icon)
  {
    $this->icon = $icon;
  }
  /** @return string */
  public function getIcon()
  {
    return $this->icon;
  }
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
  /** @param LightSettings */
  public function setLightSettings(LightSettings $lightSettings)
  {
    $this->lightSettings = $lightSettings;
  }
  /** @return LightSettings */
  public function getLightSettings()
  {
    return $this->lightSettings;
  }
  /** @param bool */
  public function setLocalOnly($localOnly)
  {
    $this->localOnly = $localOnly;
  }
  /** @return bool */
  public function getLocalOnly()
  {
    return $this->localOnly;
  }
  /** @param int */
  public function setNotificationCount($notificationCount)
  {
    $this->notificationCount = $notificationCount;
  }
  /** @return int */
  public function getNotificationCount()
  {
    return $this->notificationCount;
  }
  /** @param string */
  public function setNotificationPriority($notificationPriority)
  {
    $this->notificationPriority = $notificationPriority;
  }
  /** @return string */
  public function getNotificationPriority()
  {
    return $this->notificationPriority;
  }
  /** @param string */
  public function setSound($sound)
  {
    $this->sound = $sound;
  }
  /** @return string */
  public function getSound()
  {
    return $this->sound;
  }
  /** @param bool */
  public function setSticky($sticky)
  {
    $this->sticky = $sticky;
  }
  /** @return bool */
  public function getSticky()
  {
    return $this->sticky;
  }
  /** @param string */
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  /** @return string */
  public function getTag()
  {
    return $this->tag;
  }
  /** @param string */
  public function setTicker($ticker)
  {
    $this->ticker = $ticker;
  }
  /** @return string */
  public function getTicker()
  {
    return $this->ticker;
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
  public function setTitleLocArgs($titleLocArgs)
  {
    $this->titleLocArgs = $titleLocArgs;
  }
  /** @return string[] */
  public function getTitleLocArgs()
  {
    return $this->titleLocArgs;
  }
  /** @param string */
  public function setTitleLocKey($titleLocKey)
  {
    $this->titleLocKey = $titleLocKey;
  }
  /** @return string */
  public function getTitleLocKey()
  {
    return $this->titleLocKey;
  }
  /** @param string[] */
  public function setVibrateTimings($vibrateTimings)
  {
    $this->vibrateTimings = $vibrateTimings;
  }
  /** @return string[] */
  public function getVibrateTimings()
  {
    return $this->vibrateTimings;
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

class ApnsConfig extends \Google\Model
{
  /** @var ApnsFcmOptions */
  public $fcmOptions;
  /** @var string[] */
  public $headers;
  /** @var array[] */
  public $payload;
  protected $fcmOptionsType = ApnsFcmOptions::class;
  protected $fcmOptionsDataType = '';
  /** @param ApnsFcmOptions */
  public function setFcmOptions(ApnsFcmOptions $fcmOptions)
  {
    $this->fcmOptions = $fcmOptions;
  }
  /** @return ApnsFcmOptions */
  public function getFcmOptions()
  {
    return $this->fcmOptions;
  }
  /** @param string[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return string[] */
  public function getHeaders()
  {
    return $this->headers;
  }
  /** @param array[] */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /** @return array[] */
  public function getPayload()
  {
    return $this->payload;
  }
}

class ApnsFcmOptions extends \Google\Model
{
  /** @var string */
  public $analyticsLabel;
  /** @var string */
  public $image;

  /** @param string */
  public function setAnalyticsLabel($analyticsLabel)
  {
    $this->analyticsLabel = $analyticsLabel;
  }
  /** @return string */
  public function getAnalyticsLabel()
  {
    return $this->analyticsLabel;
  }
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

class FcmOptions extends \Google\Model
{
  /** @var string */
  public $analyticsLabel;

  /** @param string */
  public function setAnalyticsLabel($analyticsLabel)
  {
    $this->analyticsLabel = $analyticsLabel;
  }
  /** @return string */
  public function getAnalyticsLabel()
  {
    return $this->analyticsLabel;
  }
}

class LightSettings extends \Google\Model
{
  /** @var Color */
  public $color;
  /** @var string */
  public $lightOffDuration;
  /** @var string */
  public $lightOnDuration;
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
  /** @param string */
  public function setLightOffDuration($lightOffDuration)
  {
    $this->lightOffDuration = $lightOffDuration;
  }
  /** @return string */
  public function getLightOffDuration()
  {
    return $this->lightOffDuration;
  }
  /** @param string */
  public function setLightOnDuration($lightOnDuration)
  {
    $this->lightOnDuration = $lightOnDuration;
  }
  /** @return string */
  public function getLightOnDuration()
  {
    return $this->lightOnDuration;
  }
}

class Message extends \Google\Model
{
  /** @var AndroidConfig */
  public $android;
  /** @var ApnsConfig */
  public $apns;
  /** @var string */
  public $condition;
  /** @var string[] */
  public $data;
  /** @var FcmOptions */
  public $fcmOptions;
  /** @var string */
  public $name;
  /** @var Notification */
  public $notification;
  /** @var string */
  public $token;
  /** @var string */
  public $topic;
  /** @var WebpushConfig */
  public $webpush;
  protected $androidType = AndroidConfig::class;
  protected $androidDataType = '';
  protected $apnsType = ApnsConfig::class;
  protected $apnsDataType = '';
  protected $fcmOptionsType = FcmOptions::class;
  protected $fcmOptionsDataType = '';
  protected $notificationType = Notification::class;
  protected $notificationDataType = '';
  protected $webpushType = WebpushConfig::class;
  protected $webpushDataType = '';
  /** @param AndroidConfig */
  public function setAndroid(AndroidConfig $android)
  {
    $this->android = $android;
  }
  /** @return AndroidConfig */
  public function getAndroid()
  {
    return $this->android;
  }
  /** @param ApnsConfig */
  public function setApns(ApnsConfig $apns)
  {
    $this->apns = $apns;
  }
  /** @return ApnsConfig */
  public function getApns()
  {
    return $this->apns;
  }
  /** @param string */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /** @return string */
  public function getCondition()
  {
    return $this->condition;
  }
  /** @param string[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string[] */
  public function getData()
  {
    return $this->data;
  }
  /** @param FcmOptions */
  public function setFcmOptions(FcmOptions $fcmOptions)
  {
    $this->fcmOptions = $fcmOptions;
  }
  /** @return FcmOptions */
  public function getFcmOptions()
  {
    return $this->fcmOptions;
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
  /** @param Notification */
  public function setNotification(Notification $notification)
  {
    $this->notification = $notification;
  }
  /** @return Notification */
  public function getNotification()
  {
    return $this->notification;
  }
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
  /** @param string */
  public function setTopic($topic)
  {
    $this->topic = $topic;
  }
  /** @return string */
  public function getTopic()
  {
    return $this->topic;
  }
  /** @param WebpushConfig */
  public function setWebpush(WebpushConfig $webpush)
  {
    $this->webpush = $webpush;
  }
  /** @return WebpushConfig */
  public function getWebpush()
  {
    return $this->webpush;
  }
}

class Notification extends \Google\Model
{
  /** @var string */
  public $body;
  /** @var string */
  public $image;
  /** @var string */
  public $title;

  /** @param string */
  public function setBody($body)
  {
    $this->body = $body;
  }
  /** @return string */
  public function getBody()
  {
    return $this->body;
  }
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

class SendMessageRequest extends \Google\Model
{
  /** @var Message */
  public $message;
  /** @var bool */
  public $validateOnly;
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
  /** @param bool */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /** @return bool */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

class WebpushConfig extends \Google\Model
{
  /** @var string[] */
  public $data;
  /** @var WebpushFcmOptions */
  public $fcmOptions;
  /** @var string[] */
  public $headers;
  /** @var array[] */
  public $notification;
  protected $fcmOptionsType = WebpushFcmOptions::class;
  protected $fcmOptionsDataType = '';
  /** @param string[] */
  public function setData($data)
  {
    $this->data = $data;
  }
  /** @return string[] */
  public function getData()
  {
    return $this->data;
  }
  /** @param WebpushFcmOptions */
  public function setFcmOptions(WebpushFcmOptions $fcmOptions)
  {
    $this->fcmOptions = $fcmOptions;
  }
  /** @return WebpushFcmOptions */
  public function getFcmOptions()
  {
    return $this->fcmOptions;
  }
  /** @param string[] */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /** @return string[] */
  public function getHeaders()
  {
    return $this->headers;
  }
  /** @param array[] */
  public function setNotification($notification)
  {
    $this->notification = $notification;
  }
  /** @return array[] */
  public function getNotification()
  {
    return $this->notification;
  }
}

class WebpushFcmOptions extends \Google\Model
{
  /** @var string */
  public $analyticsLabel;
  /** @var string */
  public $link;

  /** @param string */
  public function setAnalyticsLabel($analyticsLabel)
  {
    $this->analyticsLabel = $analyticsLabel;
  }
  /** @return string */
  public function getAnalyticsLabel()
  {
    return $this->analyticsLabel;
  }
  /** @param string */
  public function setLink($link)
  {
    $this->link = $link;
  }
  /** @return string */
  public function getLink()
  {
    return $this->link;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AndroidConfig::class, 'Google_Service_FirebaseCloudMessaging_AndroidConfig');
class_alias(AndroidFcmOptions::class, 'Google_Service_FirebaseCloudMessaging_AndroidFcmOptions');
class_alias(AndroidNotification::class, 'Google_Service_FirebaseCloudMessaging_AndroidNotification');
class_alias(ApnsConfig::class, 'Google_Service_FirebaseCloudMessaging_ApnsConfig');
class_alias(ApnsFcmOptions::class, 'Google_Service_FirebaseCloudMessaging_ApnsFcmOptions');
class_alias(Color::class, 'Google_Service_FirebaseCloudMessaging_Color');
class_alias(FcmOptions::class, 'Google_Service_FirebaseCloudMessaging_FcmOptions');
class_alias(LightSettings::class, 'Google_Service_FirebaseCloudMessaging_LightSettings');
class_alias(Message::class, 'Google_Service_FirebaseCloudMessaging_Message');
class_alias(Notification::class, 'Google_Service_FirebaseCloudMessaging_Notification');
class_alias(SendMessageRequest::class, 'Google_Service_FirebaseCloudMessaging_SendMessageRequest');
class_alias(WebpushConfig::class, 'Google_Service_FirebaseCloudMessaging_WebpushConfig');
class_alias(WebpushFcmOptions::class, 'Google_Service_FirebaseCloudMessaging_WebpushFcmOptions');
