<?php

namespace App\Entity;

use App\Repository\SensorMeasurementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SensorMeasurementRepository::class)
 */
class SensorMeasurement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $co_level;

    /**
     * @ORM\Column(type="datetime")
     */
    private $reading_datetime;

    /**
     * @ORM\ManyToOne(targetEntity=SensorDetail::class, inversedBy="sensorMeasurements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sensor_detail;

    /**
     * @ORM\Column(type="datetime")
     */
    private $row_insertion_datetime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoLevel(): ?int
    {
        return $this->co_level;
    }

    public function setCoLevel(int $co_level): self
    {
        $this->co_level = $co_level;

        return $this;
    }

    public function getReadingDatetime(): ?\DateTimeInterface
    {
        return $this->reading_datetime;
    }

    public function setReadingDatetime(\DateTimeInterface $reading_datetime): self
    {
        $this->reading_datetime = $reading_datetime;

        return $this;
    }

    public function getSensorId(): ?SensorDetail
    {
        return $this->sensor_detail;
    }

    public function setSensorId(?SensorDetail $sensor_detail): self
    {
        $this->sensor_detail = $sensor_detail;

        return $this;
    }

    public function getRowInsertionDatetime(): ?\DateTimeInterface
    {
        return $this->row_insertion_datetime;
    }

    public function setRowInsertionDatetime(\DateTimeInterface $row_insertion_datetime): self
    {
        $this->row_insertion_datetime = $row_insertion_datetime;

        return $this;
    }
}
