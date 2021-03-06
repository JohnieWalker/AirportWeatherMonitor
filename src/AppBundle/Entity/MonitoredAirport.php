<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use MetarDecoder\Entity\DecodedMetar;
use TafDecoder\Entity\DecodedTaf;

/**
 * Monitored Airports.
 *
 * @ORM\Table(name="monitored_airports")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MonitoredAirportRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class MonitoredAirport
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
     * @var \AppBundle\Entity\AirportsMasterData
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\AirportsMasterData", fetch="EAGER")
     */
    private $airportData;

    /**
     * @var bool
     *
     * @ORM\Column(name="active_winter", type="boolean", nullable=true)
     */
    private $activeWinter;

    /**
     * @var bool
     *
     * @ORM\Column(name="alternate_winter", type="boolean", nullable=true)
     */
    private $alternateWinter;

    /**
     * @var bool
     *
     * @ORM\Column(name="active_summer", type="boolean", nullable=true)
     */
    private $activeSummer;

    /**
     * @var bool
     *
     * @ORM\Column(name="alternate_summer", type="boolean", nullable=true)
     */
    private $alternateSummer;

    /**
     * @var int
     *
     * @ORM\Column(name="mid_warning_vis", type="smallint", nullable=true)
     */
    private $midWarningVis;

    /**
     * @var int
     *
     * @ORM\Column(name="mid_warning_ceiling", type="smallint", nullable=true)
     */
    private $midWarningCeiling;

    /**
     * @var int
     *
     * @ORM\Column(name="mid_warning_wind", type="smallint", nullable=true)
     */
    private $midWarningWind;

    /**
     * @var int
     *
     * @ORM\Column(name="high_warning_vis", type="smallint", nullable=true)
     */
    private $highWarningVis;

    /**
     * @var int
     *
     * @ORM\Column(name="high_warning_ceiling", type="smallint", nullable=true)
     */
    private $highWarningCeiling;

    /**
     * @var int
     *
     * @ORM\Column(name="high_warning_wind", type="smallint", nullable=true)
     */
    private $highWarningWind;

    /**
     * @var int
     *
     * @ORM\Column(name="mid_warning_vis_alt", type="smallint", nullable=true)
     */
    private $midWarningVisAlt;
    /**
     * @var int
     *
     * @ORM\Column(name="mid_warning_ceiling_alt", type="smallint", nullable=true)
     */
    private $midWarningCeilingAlt;
    /**
     * @var int
     *
     * @ORM\Column(name="mid_warning_wind_alt", type="smallint", nullable=true)
     */
    private $midWarningWindAlt;
    /**
     * @var int
     *
     * @ORM\Column(name="high_warning_vis_alt", type="smallint", nullable=true)
     */
    private $highWarningVisAlt;
    /**
     * @var int
     *
     * @ORM\Column(name="high_warning_ceiling_alt", type="smallint", nullable=true)
     */
    private $highWarningCeilingAlt;
    /**
     * @var int
     *
     * @ORM\Column(name="high_warning_wind_alt", type="smallint", nullable=true)
     */
    private $highWarningWindAlt;
    /**
     * @var string
     *
     * @ORM\Column(name="raw_metar", type="string", nullable=true)
     */
    private $rawMetar;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="raw_metar_date_time", type="datetime", nullable=true)
     */
    private $rawMetarDateTime;
    /**
     * @var DecodedMetar
     */
    private $decodedMetar;
    /**
     * @var ValidatedWeather
     */
    private $validatedMetar;
    /**
     * @var string
     */
    private $colorizedMetar;
    /**
     * @var string
     *
     * @ORM\Column(name="raw_taf", type="string", nullable=true)
     */
    private $rawTaf;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="raw_taf_date_time", type="datetime", nullable=true)
     */
    private $rawTafDateTime;
    /**
     * @var DecodedTaf
     */
    private $decodedTaf;
    /**
     * @var ValidatedWeather
     */
    private $validatedTaf;
    /**
     * @var string
     */
    private $colorizedTaf;

    /**
     * @return int
     */
    public function getHighWarningCeilingAlt()
    {
        return $this->highWarningCeilingAlt;
    }

    /**
     * @param int $highWarningCeilingAlt
     *
     * @return MonitoredAirport
     */
    public function setHighWarningCeilingAlt($highWarningCeilingAlt)
    {
        $this->highWarningCeilingAlt = $highWarningCeilingAlt;

        return $this;
    }

    /**
     * @return int
     */
    public function getHighWarningVisAlt()
    {
        return $this->highWarningVisAlt;
    }

    /**
     * @param int $highWarningVisAlt
     *
     * @return MonitoredAirport
     */
    public function setHighWarningVisAlt($highWarningVisAlt)
    {
        $this->highWarningVisAlt = $highWarningVisAlt;

        return $this;
    }

    /**
     * @return int
     */
    public function getHighWarningWindAlt()
    {
        return $this->highWarningWindAlt;
    }

    /**
     * @param int $highWarningWindAlt
     *
     * @return MonitoredAirport
     */
    public function setHighWarningWindAlt($highWarningWindAlt)
    {
        $this->highWarningWindAlt = $highWarningWindAlt;

        return $this;
    }

    /**
     * @return int
     */
    public function getMidWarningCeilingAlt()
    {
        return $this->midWarningCeilingAlt;
    }

    /**
     * @param int $midWarningCeilingAlt
     *
     * @return MonitoredAirport
     */
    public function setMidWarningCeilingAlt($midWarningCeilingAlt)
    {
        $this->midWarningCeilingAlt = $midWarningCeilingAlt;

        return $this;
    }

    /**
     * @return int
     */
    public function getMidWarningVisAlt()
    {
        return $this->midWarningVisAlt;
    }

    /**
     * @param int $midWarningVisAlt
     *
     * @return MonitoredAirport
     */
    public function setMidWarningVisAlt($midWarningVisAlt)
    {
        $this->midWarningVisAlt = $midWarningVisAlt;

        return $this;
    }

    /**
     * @return int
     */
    public function getMidWarningWindAlt()
    {
        return $this->midWarningWindAlt;
    }

    /**
     * @param int $midWarningWindAlt
     *
     * @return MonitoredAirport
     */
    public function setMidWarningWindAlt($midWarningWindAlt)
    {
        $this->midWarningWindAlt = $midWarningWindAlt;

        return $this;
    }

    /**
     * @ORM\PostLoad()
     */
    public function init()
    {
        $this->setColorizedMetar($this->rawMetar);
        $this->setColorizedTaf($this->rawTaf);
    }

    /**
     * @return mixed
     */
    public function getColorizedTaf()
    {
        return $this->colorizedTaf;
    }

    /**
     * @param mixed $colorizedTaf
     */
    public function setColorizedTaf($colorizedTaf)
    {
        $this->colorizedTaf = $colorizedTaf;
    }

    /**
     * @return DecodedTaf
     */
    public function getDecodedTaf()
    {
        return $this->decodedTaf;
    }

    /**
     * @param DecodedTaf $decodedTaf
     */
    public function setDecodedTaf($decodedTaf)
    {
        $this->decodedTaf = $decodedTaf;
    }

    /**
     * @return mixed
     */
    public function getValidatedTaf()
    {
        return $this->validatedTaf;
    }

    /**
     * @param mixed $validatedTaf
     */
    public function setValidatedTaf($validatedTaf)
    {
        $this->validatedTaf = $validatedTaf;
    }

    /**
     * @return string
     */
    public function getColorizedMetar()
    {
        return $this->colorizedMetar;
    }

    /**
     * @param string $colorizedMetar
     */
    public function setColorizedMetar($colorizedMetar)
    {
        $this->colorizedMetar = $colorizedMetar;
    }

    /**
     * @return mixed
     */
    public function getValidatedMetar()
    {
        return $this->validatedMetar;
    }

    /**
     * @param mixed $validatedMetar
     */
    public function setValidatedMetar($validatedMetar)
    {
        $this->validatedMetar = $validatedMetar;
    }

    /**
     * @return DecodedMetar
     */
    public function getDecodedMetar()
    {
        return $this->decodedMetar;
    }

    /**
     * @param DecodedMetar $decodedMetar
     */
    public function setDecodedMetar($decodedMetar)
    {
        $this->decodedMetar = $decodedMetar;
    }

    /**
     * @return \DateTime
     */
    public function getRawTafDateTime()
    {
        return $this->rawTafDateTime;
    }

    /**
     * @param \DateTime $rawTafDateTime
     */
    public function setRawTafDateTime($rawTafDateTime)
    {
        $this->rawTafDateTime = $rawTafDateTime;
    }

    /**
     * @return string
     */
    public function getRawMetar()
    {
        return $this->rawMetar;
    }

    /**
     * @param string $rawMetar
     */
    public function setRawMetar($rawMetar)
    {
        $this->rawMetar = $rawMetar;
        // If new Raw METAR is set, then colorized METAR should be reset to new Raw METAR state
        $this->colorizedMetar = $rawMetar;
    }

    /**
     * @return \DateTime
     */
    public function getRawMetarDateTime()
    {
        return $this->rawMetarDateTime;
    }

    /**
     * @param \DateTime $rawMetarDateTime
     */
    public function setRawMetarDateTime($rawMetarDateTime)
    {
        $this->rawMetarDateTime = $rawMetarDateTime;
    }

    /**
     * @return mixed
     */
    public function getRawTaf()
    {
        return $this->rawTaf;
    }

    /**
     * @param mixed $rawTaf
     */
    public function setRawTaf($rawTaf)
    {
        $this->rawTaf = $rawTaf;
        // If new Raw TAF is set, then colorized TAF should be reset to new Raw TAF state
        $this->colorizedTaf = $rawTaf;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get activeWinter.
     *
     * @return bool
     */
    public function getActiveWinter()
    {
        return $this->activeWinter;
    }

    /**
     * Set activeWinter.
     *
     * @param bool $activeWinter
     *
     * @return MonitoredAirport
     */
    public function setActiveWinter($activeWinter)
    {
        $this->activeWinter = $activeWinter;

        return $this;
    }

    /**
     * Get alternateWinter.
     *
     * @return bool
     */
    public function getAlternateWinter()
    {
        return $this->alternateWinter;
    }

    /**
     * Set alternateWinter.
     *
     * @param bool $alternateWinter
     *
     * @return MonitoredAirport
     */
    public function setAlternateWinter($alternateWinter)
    {
        $this->alternateWinter = $alternateWinter;

        return $this;
    }

    /**
     * Get activeSummer.
     *
     * @return bool
     */
    public function getActiveSummer()
    {
        return $this->activeSummer;
    }

    /**
     * Set activeSummer.
     *
     * @param bool $activeSummer
     *
     * @return MonitoredAirport
     */
    public function setActiveSummer($activeSummer)
    {
        $this->activeSummer = $activeSummer;

        return $this;
    }

    /**
     * Get alternateSummer.
     *
     * @return bool
     */
    public function getAlternateSummer()
    {
        return $this->alternateSummer;
    }

    /**
     * Set alternateSummer.
     *
     * @param bool $alternateSummer
     *
     * @return MonitoredAirport
     */
    public function setAlternateSummer($alternateSummer)
    {
        $this->alternateSummer = $alternateSummer;

        return $this;
    }

    /**
     * Get midWarningVis.
     *
     * @return int
     */
    public function getMidWarningVis()
    {
        return $this->midWarningVis;
    }

    /**
     * Set midWarningVis.
     *
     * @param int $midWarningVis
     *
     * @return MonitoredAirport
     */
    public function setMidWarningVis($midWarningVis)
    {
        $this->midWarningVis = $midWarningVis;

        return $this;
    }

    /**
     * Get midWarningCeiling.
     *
     * @return int
     */
    public function getMidWarningCeiling()
    {
        return $this->midWarningCeiling;
    }

    /**
     * Set midWarningCeiling.
     *
     * @param int $midWarningCeiling
     *
     * @return MonitoredAirport
     */
    public function setMidWarningCeiling($midWarningCeiling)
    {
        $this->midWarningCeiling = $midWarningCeiling;

        return $this;
    }

    /**
     * Get midWarningWind.
     *
     * @return int
     */
    public function getMidWarningWind()
    {
        return $this->midWarningWind;
    }

    /**
     * Set midWarningWind.
     *
     * @param int $midWarningWind
     *
     * @return MonitoredAirport
     */
    public function setMidWarningWind($midWarningWind)
    {
        $this->midWarningWind = $midWarningWind;

        return $this;
    }

    /**
     * Get highWarningVis.
     *
     * @return int
     */
    public function getHighWarningVis()
    {
        return $this->highWarningVis;
    }

    /**
     * Set highWarningVis.
     *
     * @param int $highWarningVis
     *
     * @return MonitoredAirport
     */
    public function setHighWarningVis($highWarningVis)
    {
        $this->highWarningVis = $highWarningVis;

        return $this;
    }

    /**
     * Get highWarningCeiling.
     *
     * @return int
     */
    public function getHighWarningCeiling()
    {
        return $this->highWarningCeiling;
    }

    /**
     * Set highWarningCeiling.
     *
     * @param int $highWarningCeiling
     *
     * @return MonitoredAirport
     */
    public function setHighWarningCeiling($highWarningCeiling)
    {
        $this->highWarningCeiling = $highWarningCeiling;

        return $this;
    }

    /**
     * Get highWarningWind.
     *
     * @return int
     */
    public function getHighWarningWind()
    {
        return $this->highWarningWind;
    }

    /**
     * Set highWarningWind.
     *
     * @param int $highWarningWind
     *
     * @return MonitoredAirport
     */
    public function setHighWarningWind($highWarningWind)
    {
        $this->highWarningWind = $highWarningWind;

        return $this;
    }

    /**
     * Get airportData.
     *
     * @return \AppBundle\Entity\AirportsMasterData
     */
    public function getAirportData()
    {
        return $this->airportData;
    }

    /**
     * Set airportData.
     *
     * @param \AppBundle\Entity\AirportsMasterData $airportData
     *
     * @return MonitoredAirport
     */
    public function setAirportData(\AppBundle\Entity\AirportsMasterData $airportData = null)
    {
        $this->airportData = $airportData;

        return $this;
    }

    public function __call($name, $arguments)
    {
        return $this->id;
    }
}
