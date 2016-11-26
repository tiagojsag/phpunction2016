<?php

namespace PHPunctionBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ParkingPlace
 *
 * @ORM\Table(name="parking_place")
 * @ORM\Entity(repositoryClass="PHPunctionBundle\Repository\ParkingPlaceRepository")
 */
class ParkingPlace
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
     * @ORM\OneToMany(targetEntity="TimeSlot", mappedBy="parkingPlace")
     */
    private $timeSlots;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="address_one", type="string", length=255, nullable=true)
     */
    private $addressOne;

    /**
     * @var string
     *
     * @ORM\Column(name="address_two", type="string", length=255, nullable=true)
     */
    private $addressTwo;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="string", length=255, nullable=true)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    public function __construct()
    {
        $this->timeSlots = new ArrayCollection();
    }

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
     * Set title
     *
     * @param string $title
     *
     * @return ParkingPlace
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return ParkingPlace
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return ParkingPlace
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return ParkingPlace
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set addressOne
     *
     * @param string $addressOne
     *
     * @return ParkingPlace
     */
    public function setAddressOne($addressOne)
    {
        $this->addressOne = $addressOne;

        return $this;
    }

    /**
     * Get addressOne
     *
     * @return string
     */
    public function getAddressOne()
    {
        return $this->addressOne;
    }

    /**
     * Set addressTwo
     *
     * @param string $addressTwo
     *
     * @return ParkingPlace
     */
    public function setAddressTwo($addressTwo)
    {
        $this->addressTwo = $addressTwo;

        return $this;
    }

    /**
     * Get addressTwo
     *
     * @return string
     */
    public function getAddressTwo()
    {
        return $this->addressTwo;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     *
     * @return ParkingPlace
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return ParkingPlace
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return ParkingPlace
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getTimeSlots()
    {
        return $this->timeSlots;
    }

    /**
     * @param mixed $timeSlots
     */
    public function setTimeSlots($timeSlots)
    {
        $this->timeSlots = $timeSlots;
    }
}

