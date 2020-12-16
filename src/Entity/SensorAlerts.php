<?php

namespace App\Entity;

use App\Repository\SensorAlertsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SensorAlertsRepository::class)
 */
class SensorAlerts
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $co_alert_level;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startTime;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $endTime;

    /**
     * @ORM\ManyToOne(targetEntity=SensorDetail::class, inversedBy="sensorAlerts")
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

    public function getCoAlertLevel(): ?int
    {
        return $this->co_alert_level;
    }

    public function setCoAlertLevel(int $co_alert_level): self
    {
        $this->co_alert_level = $co_alert_level;

        return $this;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->startTime;
    }

    public function setStartTime(\DateTimeInterface $startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getEndTime(): ?\DateTimeInterface
    {
        return $this->endTime;
    }

    public function setEndTime(\DateTimeInterface $endTime): self
    {
        $this->endTime = $endTime;

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
