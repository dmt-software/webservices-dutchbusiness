<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetConcernRelationsOverviewReference
 *
 * @JMS\AccessType("public_method")
 */
class GetConcernRelationsOverviewReference
{

    /**
     * @JMS\SerializedName("name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $name;

    /**
     * @JMS\SerializedName("dossier_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $dossierNumber;

    /**
     * @JMS\SerializedName("levels")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $levels;

    /**
     * @JMS\SerializedName("level_of_matched_registration")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $levelOfMatchedRegistration;

    /**
     * @JMS\SerializedName("registrations")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $registrations;

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDossierNumber(): ?string
    {
        return $this->dossierNumber;
    }

    /**
     * @param string $dossierNumber
     */
    public function setDossierNumber(string $dossierNumber): void
    {
        $this->dossierNumber = $dossierNumber;
    }

    /**
     * @return int
     */
    public function getLevels(): ?int
    {
        return $this->levels;
    }

    /**
     * @param int $levels
     */
    public function setLevels(int $levels): void
    {
        $this->levels = $levels;
    }

    /**
     * @return int
     */
    public function getLevelOfMatchedRegistration(): ?int
    {
        return $this->levelOfMatchedRegistration;
    }

    /**
     * @param int $levelOfMatchedRegistration
     */
    public function setLevelOfMatchedRegistration(int $levelOfMatchedRegistration): void
    {
        $this->levelOfMatchedRegistration = $levelOfMatchedRegistration;
    }

    /**
     * @return int
     */
    public function getRegistrations(): ?int
    {
        return $this->registrations;
    }

    /**
     * @param int $registrations
     */
    public function setRegistrations(int $registrations): void
    {
        $this->registrations = $registrations;
    }
}
