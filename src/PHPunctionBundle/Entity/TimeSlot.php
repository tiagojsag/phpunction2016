<?php

namespace PHPunctionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeSlot
 *
 * @ORM\Table(name="time_slot")
 * @ORM\Entity(repositoryClass="PHPunctionBundle\Repository\TimeSlotRepository")
 */
class TimeSlot
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
     * @ORM\ManyToOne(targetEntity="ParkingPlace", inversedBy="timeSlots")
     * @ORM\JoinColumn(name="parking_place_id", referencedColumnName="id")
     */
    private $parkingPlace;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime")
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_time", type="datetime")
     */
    private $endTime;

    /**
     * @var float
     *
     * @ORM\Column(name="price_day", type="float", nullable=true)
     */
    private $priceDay;

    /**
     * @var float
     *
     * @ORM\Column(name="price_hour", type="float", nullable=true)
     */
    private $priceHour;


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
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return TimeSlot
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     *
     * @return TimeSlot
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set priceDay
     *
     * @param float $priceDay
     *
     * @return TimeSlot
     */
    public function setPriceDay($priceDay)
    {
        $this->priceDay = $priceDay;

        return $this;
    }

    /**
     * Get priceDay
     *
     * @return float
     */
    public function getPriceDay()
    {
        return $this->priceDay;
    }

    /**
     * Set priceHour
     *
     * @param float $priceHour
     *
     * @return TimeSlot
     */
    public function setPriceHour($priceHour)
    {
        $this->priceHour = $priceHour;

        return $this;
    }

    /**
     * Get priceHour
     *
     * @return float
     */
    public function getPriceHour()
    {
        return $this->priceHour;
    }

    /**
     * @return mixed
     */
    public function getParkingPlace()
    {
        return $this->parkingPlace;
    }

    /**
     * @param mixed $parkingPlace
     */
    public function setParkingPlace($parkingPlace)
    {
        $this->parkingPlace = $parkingPlace;
    }
}

