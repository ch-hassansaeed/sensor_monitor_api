<?php

namespace App\Entity;

use App\Repository\SensorDetailRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SensorDetailRepository::class)
 */
class SensorDetail
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $uuid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mac_address;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_active;

    /**
     * @ORM\Column(type="datetime")
     */
    private $row_insertion_datetime;

    /**
     * @ORM\OneToMany(targetEntity=SensorAlerts::class, mappedBy="sensor_id")
     */
    private $sensorAlerts;

    /**
     * @ORM\OneToMany(targetEntity=SensorMeasurement::class, mappedBy="sensor_id")
     */
    private $sensorMeasurements;

    public function __construct()
    {
        $this->sensorAlerts = new ArrayCollection();
        $this->sensorMeasurements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getMacAddress(): ?string
    {
        return $this->mac_address;
    }

    public function setMacAddress(string $mac_address): self
    {
        $this->mac_address = $mac_address;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->is_active;
    }

    public function setIsActive(bool $is_active): self
    {
        $this->is_active = $is_active;

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


    /**
     * @return Collection|SensorAlerts[]
     */
    public function getSensorAlerts(): Collection
    {
        return $this->sensorAlerts;
    }

    public function addSensorAlert(SensorAlerts $sensorAlert): self
    {
        if (!$this->sensorAlerts->contains($sensorAlert)) {
            $this->sensorAlerts[] = $sensorAlert;
            $sensorAlert->setSensorId($this);
        }

        return $this;
    }

    public function removeSensorAlert(SensorAlerts $sensorAlert): self
    {
        if ($this->sensorAlerts->removeElement($sensorAlert)) {
            // set the owning side to null (unless already changed)
            if ($sensorAlert->getSensorId() === $this) {
                $sensorAlert->setSensorId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SensorMeasurement[]
     */
    public function getSensorMeasurements(): Collection
    {
        return $this->sensorMeasurements;
    }

    public function addSensorMeasurement(SensorMeasurement $sensorMeasurement): self
    {
        if (!$this->sensorMeasurements->contains($sensorMeasurement)) {
            $this->sensorMeasurements[] = $sensorMeasurement;
            $sensorMeasurement->setSensorId($this);
        }

        return $this;
    }

    public function removeSensorMeasurement(SensorMeasurement $sensorMeasurement): self
    {
        if ($this->sensorMeasurements->removeElement($sensorMeasurement)) {
            // set the owning side to null (unless already changed)
            if ($sensorMeasurement->getSensorId() === $this) {
                $sensorMeasurement->setSensorId(null);
            }
        }

        return $this;
    }
}
