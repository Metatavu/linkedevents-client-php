<?php
/**
 * Event
 *
 * PHP version 5
 *
 * @category Class
 * @package  LinkedEvents
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Linked Events information API
 *
 * Linked Events provides categorized data on events and places using JSON-LD format.  Events can be searched by date and location. Location can be exact address or larger area such as neighbourhood or borough  JSON-LD format is streamlined using include mechanism. API users can request that certain fields are included directly into the result, instead of being hyperlinks to objects.  Several fields are multilingual. These are implemented as object with each language variant as property. In this specification each multilingual field has (fi,sv,en) property triplet as example.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace LinkedEvents\LinkedEvents\Model;

use \ArrayAccess;

/**
 * Event Class Doc Comment
 *
 * @category    Class
 * @description Describes the actual events. Linked events API supports organizing events into hierarchies. This is implemented with collection events called \&quot;super events\&quot;. Super events are normal event objects, that reference contained events in \&quot;sub_events\&quot; property. Currently there are two major use cases: events such as \&quot;Helsinki Festival\&quot;, which consist of unique events over a span of time and recurring events such as theatrical productions with multiple showings. It is implementation dependent how the grouping of events is done. It should be noted that grouping might be automatic based on eg. event name and thus group unrelated events together and miss related events. Users of data are advised to prepare for this.
 * @package     LinkedEvents
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Event implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'event';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'location' => '\LinkedEvents\LinkedEvents\Model\Place',
        'keywords' => 'string[]',
        'inLanguage' => '\LinkedEvents\LinkedEvents\Model\Language[]',
        'superEvent' => 'string',
        'superEventType' => 'string',
        'eventStatus' => 'string',
        'publicationStatus' => 'string',
        'externalLinks' => '\LinkedEvents\LinkedEvents\Model\Eventlink[]',
        'offers' => '\LinkedEvents\LinkedEvents\Model\Offer[]',
        'subEvents' => 'string[]',
        'customData' => 'string',
        'name' => '\LinkedEvents\LinkedEvents\Model\EventName',
        'images' => '\LinkedEvents\LinkedEvents\Model\Image[]',
        'createdTime' => '\DateTime',
        'lastModifiedTime' => '\DateTime',
        'infoUrl' => '\LinkedEvents\LinkedEvents\Model\EventInfoUrl',
        'description' => 'object',
        'shortDescription' => 'object',
        'datePublished' => '\DateTime',
        'provider' => 'object',
        'locationExtraInfo' => 'object',
        'startTime' => '\DateTime',
        'endTime' => '\DateTime',
        'audience' => '\LinkedEvents\LinkedEvents\Model\Keyword[]',
        'dataSource' => 'string',
        'createdBy' => 'string',
        'lastModifiedBy' => 'string',
        'publisher' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'location' => 'location',
        'keywords' => 'keywords',
        'inLanguage' => 'in_language',
        'superEvent' => 'super_event',
        'superEventType' => 'super_event_type',
        'eventStatus' => 'event_status',
        'publicationStatus' => 'publication_status',
        'externalLinks' => 'external_links',
        'offers' => 'offers',
        'subEvents' => 'sub_events',
        'customData' => 'custom_data',
        'name' => 'name',
        'images' => 'images',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'infoUrl' => 'info_url',
        'description' => 'description',
        'shortDescription' => 'short_description',
        'datePublished' => 'date_published',
        'provider' => 'provider',
        'locationExtraInfo' => 'location_extra_info',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'audience' => 'audience',
        'dataSource' => 'data_source',
        'createdBy' => 'created_by',
        'lastModifiedBy' => 'last_modified_by',
        'publisher' => 'publisher'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'location' => 'setLocation',
        'keywords' => 'setKeywords',
        'inLanguage' => 'setInLanguage',
        'superEvent' => 'setSuperEvent',
        'superEventType' => 'setSuperEventType',
        'eventStatus' => 'setEventStatus',
        'publicationStatus' => 'setPublicationStatus',
        'externalLinks' => 'setExternalLinks',
        'offers' => 'setOffers',
        'subEvents' => 'setSubEvents',
        'customData' => 'setCustomData',
        'name' => 'setName',
        'images' => 'setImages',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'infoUrl' => 'setInfoUrl',
        'description' => 'setDescription',
        'shortDescription' => 'setShortDescription',
        'datePublished' => 'setDatePublished',
        'provider' => 'setProvider',
        'locationExtraInfo' => 'setLocationExtraInfo',
        'startTime' => 'setStartTime',
        'endTime' => 'setEndTime',
        'audience' => 'setAudience',
        'dataSource' => 'setDataSource',
        'createdBy' => 'setCreatedBy',
        'lastModifiedBy' => 'setLastModifiedBy',
        'publisher' => 'setPublisher'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'location' => 'getLocation',
        'keywords' => 'getKeywords',
        'inLanguage' => 'getInLanguage',
        'superEvent' => 'getSuperEvent',
        'superEventType' => 'getSuperEventType',
        'eventStatus' => 'getEventStatus',
        'publicationStatus' => 'getPublicationStatus',
        'externalLinks' => 'getExternalLinks',
        'offers' => 'getOffers',
        'subEvents' => 'getSubEvents',
        'customData' => 'getCustomData',
        'name' => 'getName',
        'images' => 'getImages',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'infoUrl' => 'getInfoUrl',
        'description' => 'getDescription',
        'shortDescription' => 'getShortDescription',
        'datePublished' => 'getDatePublished',
        'provider' => 'getProvider',
        'locationExtraInfo' => 'getLocationExtraInfo',
        'startTime' => 'getStartTime',
        'endTime' => 'getEndTime',
        'audience' => 'getAudience',
        'dataSource' => 'getDataSource',
        'createdBy' => 'getCreatedBy',
        'lastModifiedBy' => 'getLastModifiedBy',
        'publisher' => 'getPublisher'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['inLanguage'] = isset($data['inLanguage']) ? $data['inLanguage'] : null;
        $this->container['superEvent'] = isset($data['superEvent']) ? $data['superEvent'] : null;
        $this->container['superEventType'] = isset($data['superEventType']) ? $data['superEventType'] : null;
        $this->container['eventStatus'] = isset($data['eventStatus']) ? $data['eventStatus'] : null;
        $this->container['publicationStatus'] = isset($data['publicationStatus']) ? $data['publicationStatus'] : null;
        $this->container['externalLinks'] = isset($data['externalLinks']) ? $data['externalLinks'] : null;
        $this->container['offers'] = isset($data['offers']) ? $data['offers'] : null;
        $this->container['subEvents'] = isset($data['subEvents']) ? $data['subEvents'] : null;
        $this->container['customData'] = isset($data['customData']) ? $data['customData'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['infoUrl'] = isset($data['infoUrl']) ? $data['infoUrl'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['shortDescription'] = isset($data['shortDescription']) ? $data['shortDescription'] : null;
        $this->container['datePublished'] = isset($data['datePublished']) ? $data['datePublished'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['locationExtraInfo'] = isset($data['locationExtraInfo']) ? $data['locationExtraInfo'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['audience'] = isset($data['audience']) ? $data['audience'] : null;
        $this->container['dataSource'] = isset($data['dataSource']) ? $data['dataSource'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['lastModifiedBy'] = isset($data['lastModifiedBy']) ? $data['lastModifiedBy'] : null;
        $this->container['publisher'] = isset($data['publisher']) ? $data['publisher'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['location'] === null) {
            $invalid_properties[] = "'location' can't be null";
        }
        if ($this->container['keywords'] === null) {
            $invalid_properties[] = "'keywords' can't be null";
        }
        if ($this->container['publicationStatus'] === null) {
            $invalid_properties[] = "'publicationStatus' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalid_properties[] = "'startTime' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['location'] === null) {
            return false;
        }
        if ($this->container['keywords'] === null) {
            return false;
        }
        if ($this->container['publicationStatus'] === null) {
            return false;
        }
        if ($this->container['startTime'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id consists of source prefix and source specific identifier. These should be URIs uniquely identifying the event, and preferably also well formed http-URLs pointing to more information about the event.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets location
     * @return \LinkedEvents\LinkedEvents\Model\Place
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param \LinkedEvents\LinkedEvents\Model\Place $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets keywords
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     * @param string[] $keywords array of keyword uri references
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets inLanguage
     * @return \LinkedEvents\LinkedEvents\Model\Language[]
     */
    public function getInLanguage()
    {
        return $this->container['inLanguage'];
    }

    /**
     * Sets inLanguage
     * @param \LinkedEvents\LinkedEvents\Model\Language[] $inLanguage the languages spoken or supported at the event
     * @return $this
     */
    public function setInLanguage($inLanguage)
    {
        $this->container['inLanguage'] = $inLanguage;

        return $this;
    }

    /**
     * Gets superEvent
     * @return string
     */
    public function getSuperEvent()
    {
        return $this->container['superEvent'];
    }

    /**
     * Sets superEvent
     * @param string $superEvent references the aggregate event containing this event
     * @return $this
     */
    public function setSuperEvent($superEvent)
    {
        $this->container['superEvent'] = $superEvent;

        return $this;
    }

    /**
     * Gets superEventType
     * @return string
     */
    public function getSuperEventType()
    {
        return $this->container['superEventType'];
    }

    /**
     * Sets superEventType
     * @param string $superEventType If the event has sub_events, describes the type of the event. Current options are 'null' and 'recurring', which means a repeating event.
     * @return $this
     */
    public function setSuperEventType($superEventType)
    {
        $this->container['superEventType'] = $superEventType;

        return $this;
    }

    /**
     * Gets eventStatus
     * @return string
     */
    public function getEventStatus()
    {
        return $this->container['eventStatus'];
    }

    /**
     * Sets eventStatus
     * @param string $eventStatus As defined in schema.org/Event. Postponed events do not have a date set, rescheduled events have been moved to different date.
     * @return $this
     */
    public function setEventStatus($eventStatus)
    {
        $this->container['eventStatus'] = $eventStatus;

        return $this;
    }

    /**
     * Gets publicationStatus
     * @return string
     */
    public function getPublicationStatus()
    {
        return $this->container['publicationStatus'];
    }

    /**
     * Sets publicationStatus
     * @param string $publicationStatus Only available in POST/PUT. Specifies whether the event should be published in the API ('public') or not ('draft').
     * @return $this
     */
    public function setPublicationStatus($publicationStatus)
    {
        $this->container['publicationStatus'] = $publicationStatus;

        return $this;
    }

    /**
     * Gets externalLinks
     * @return \LinkedEvents\LinkedEvents\Model\Eventlink[]
     */
    public function getExternalLinks()
    {
        return $this->container['externalLinks'];
    }

    /**
     * Sets externalLinks
     * @param \LinkedEvents\LinkedEvents\Model\Eventlink[] $externalLinks See external link definition
     * @return $this
     */
    public function setExternalLinks($externalLinks)
    {
        $this->container['externalLinks'] = $externalLinks;

        return $this;
    }

    /**
     * Gets offers
     * @return \LinkedEvents\LinkedEvents\Model\Offer[]
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     * @param \LinkedEvents\LinkedEvents\Model\Offer[] $offers See offer definition
     * @return $this
     */
    public function setOffers($offers)
    {
        $this->container['offers'] = $offers;

        return $this;
    }

    /**
     * Gets subEvents
     * @return string[]
     */
    public function getSubEvents()
    {
        return $this->container['subEvents'];
    }

    /**
     * Sets subEvents
     * @param string[] $subEvents for aggregate events this contains references to all sub events. Usually this means that the sub events are part of series. The field 'super_event_type' tells the type of the aggregate event.
     * @return $this
     */
    public function setSubEvents($subEvents)
    {
        $this->container['subEvents'] = $subEvents;

        return $this;
    }

    /**
     * Gets customData
     * @return string
     */
    public function getCustomData()
    {
        return $this->container['customData'];
    }

    /**
     * Sets customData
     * @param string $customData Key value field for custom data. FIXME: is there 6Aika-wide use case for this?
     * @return $this
     */
    public function setCustomData($customData)
    {
        $this->container['customData'] = $customData;

        return $this;
    }

    /**
     * Gets name
     * @return \LinkedEvents\LinkedEvents\Model\EventName
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \LinkedEvents\LinkedEvents\Model\EventName $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets images
     * @return \LinkedEvents\LinkedEvents\Model\Image[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     * @param \LinkedEvents\LinkedEvents\Model\Image[] $images
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets createdTime
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     * @param \DateTime $createdTime Creation time for the event entry.
     * @return $this
     */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    /**
     * Gets lastModifiedTime
     * @return \DateTime
     */
    public function getLastModifiedTime()
    {
        return $this->container['lastModifiedTime'];
    }

    /**
     * Sets lastModifiedTime
     * @param \DateTime $lastModifiedTime Time this event was modified in the datastore behind the API (not necessarily in the originating system)
     * @return $this
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->container['lastModifiedTime'] = $lastModifiedTime;

        return $this;
    }

    /**
     * Gets infoUrl
     * @return \LinkedEvents\LinkedEvents\Model\EventInfoUrl
     */
    public function getInfoUrl()
    {
        return $this->container['infoUrl'];
    }

    /**
     * Sets infoUrl
     * @param \LinkedEvents\LinkedEvents\Model\EventInfoUrl $infoUrl
     * @return $this
     */
    public function setInfoUrl($infoUrl)
    {
        $this->container['infoUrl'] = $infoUrl;

        return $this;
    }

    /**
     * Gets description
     * @return object
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param object $description Description for the event, several chapters(FIXME, verify)
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets shortDescription
     * @return object
     */
    public function getShortDescription()
    {
        return $this->container['shortDescription'];
    }

    /**
     * Sets shortDescription
     * @param object $shortDescription Short description for the event, recommended limit 140 characters
     * @return $this
     */
    public function setShortDescription($shortDescription)
    {
        $this->container['shortDescription'] = $shortDescription;

        return $this;
    }

    /**
     * Gets datePublished
     * @return \DateTime
     */
    public function getDatePublished()
    {
        return $this->container['datePublished'];
    }

    /**
     * Sets datePublished
     * @param \DateTime $datePublished Date this event is free to be published
     * @return $this
     */
    public function setDatePublished($datePublished)
    {
        $this->container['datePublished'] = $datePublished;

        return $this;
    }

    /**
     * Gets provider
     * @return object
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     * @param object $provider organization responsible for the practical implementation of the event
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets locationExtraInfo
     * @return object
     */
    public function getLocationExtraInfo()
    {
        return $this->container['locationExtraInfo'];
    }

    /**
     * Sets locationExtraInfo
     * @param object $locationExtraInfo Unstructured extra info about location (like \"eastern door of railway station\")
     * @return $this
     */
    public function setLocationExtraInfo($locationExtraInfo)
    {
        $this->container['locationExtraInfo'] = $locationExtraInfo;

        return $this;
    }

    /**
     * Gets startTime
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     * @param \DateTime $startTime Time the event will start
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets endTime
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     * @param \DateTime $endTime Time the event will end
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets audience
     * @return \LinkedEvents\LinkedEvents\Model\Keyword[]
     */
    public function getAudience()
    {
        return $this->container['audience'];
    }

    /**
     * Sets audience
     * @param \LinkedEvents\LinkedEvents\Model\Keyword[] $audience
     * @return $this
     */
    public function setAudience($audience)
    {
        $this->container['audience'] = $audience;

        return $this;
    }

    /**
     * Gets dataSource
     * @return string
     */
    public function getDataSource()
    {
        return $this->container['dataSource'];
    }

    /**
     * Sets dataSource
     * @param string $dataSource Unique identifier (URI)for the system from which this event came from, preferably URL with more information about the system and its policies
     * @return $this
     */
    public function setDataSource($dataSource)
    {
        $this->container['dataSource'] = $dataSource;

        return $this;
    }

    /**
     * Gets createdBy
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     * @param string $createdBy FIXME(verify) Which API user created this keyword
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets lastModifiedBy
     * @return string
     */
    public function getLastModifiedBy()
    {
        return $this->container['lastModifiedBy'];
    }

    /**
     * Sets lastModifiedBy
     * @param string $lastModifiedBy FIXME(verify) Which API user most recently edited this keyword
     * @return $this
     */
    public function setLastModifiedBy($lastModifiedBy)
    {
        $this->container['lastModifiedBy'] = $lastModifiedBy;

        return $this;
    }

    /**
     * Gets publisher
     * @return string
     */
    public function getPublisher()
    {
        return $this->container['publisher'];
    }

    /**
     * Sets publisher
     * @param string $publisher Organization responsible for this event record.
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->container['publisher'] = $publisher;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\LinkedEvents\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\LinkedEvents\ObjectSerializer::sanitizeForSerialization($this));
    }
}


