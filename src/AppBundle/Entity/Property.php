<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Property
 *
 * @ORM\Table(name="property")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PropertyRepository")
 */
class Property
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="property_id", type="integer", unique=true)
     */
    private $propertyId;

    /**
     * @var int
     *
     * @ORM\Column(name="lot_size", type="integer")
     */
    private $lotSize;

    /**
     * @var string
     *
     * @ORM\Column(name="property_status", type="string", length=50)
     */
    private $propertyStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="property_type", type="string", length=50)
     */
    private $propertyType;

    /**
     * @var int
     *
     * @ORM\Column(name="number_of_bedrooms", type="smallint")
     */
    private $numberOfBedrooms;

    /**
     * @var int
     *
     * @ORM\Column(name="number_of_bathrooms", type="smallint")
     */
    private $numberOfBathrooms;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=100)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="year_build", type="string", length=50)
     */
    private $yearBuild;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set propertyId
     *
     * @param integer $propertyId
     *
     * @return Property
     */
    public function setPropertyId($propertyId)
    {
        $this->propertyId = $propertyId;

        return $this;
    }

    /**
     * Get propertyId
     *
     * @return int
     */
    public function getPropertyId()
    {
        return $this->propertyId;
    }

    /**
     * Set lotSize
     *
     * @param integer $lotSize
     *
     * @return Property
     */
    public function setLotSize($lotSize)
    {
        $this->lotSize = $lotSize;

        return $this;
    }

    /**
     * Get lotSize
     *
     * @return int
     */
    public function getLotSize()
    {
        return $this->lotSize;
    }

    /**
     * Set propertyStatus
     *
     * @param string $propertyStatus
     *
     * @return Property
     */
    public function setPropertyStatus($propertyStatus)
    {
        $this->propertyStatus = $propertyStatus;

        return $this;
    }

    /**
     * Get propertyStatus
     *
     * @return string
     */
    public function getPropertyStatus()
    {
        return $this->propertyStatus;
    }

    /**
     * Set propertyType
     *
     * @param string $propertyType
     *
     * @return Property
     */
    public function setPropertyType($propertyType)
    {
        $this->propertyType = $propertyType;

        return $this;
    }

    /**
     * Get propertyType
     *
     * @return string
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    /**
     * Set numberOfBedrooms
     *
     * @param integer $numberOfBedrooms
     *
     * @return Property
     */
    public function setNumberOfBedrooms($numberOfBedrooms)
    {
        $this->numberOfBedrooms = $numberOfBedrooms;

        return $this;
    }

    /**
     * Get numberOfBedrooms
     *
     * @return int
     */
    public function getNumberOfBedrooms()
    {
        return $this->numberOfBedrooms;
    }

    /**
     * Set numberOfBathrooms
     *
     * @param integer $numberOfBathrooms
     *
     * @return Property
     */
    public function setNumberOfBathrooms($numberOfBathrooms)
    {
        $this->numberOfBathrooms = $numberOfBathrooms;

        return $this;
    }

    /**
     * Get numberOfBathrooms
     *
     * @return int
     */
    public function getNumberOfBathrooms()
    {
        return $this->numberOfBathrooms;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Property
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Property
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set yearBuild
     *
     * @param string $yearBuild
     *
     * @return Property
     */
    public function setYearBuild($yearBuild)
    {
        $this->yearBuild = $yearBuild;

        return $this;
    }

    /**
     * Get yearBuild
     *
     * @return string
     */
    public function getYearBuild()
    {
        return $this->yearBuild;
    }
}

