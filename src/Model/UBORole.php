<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UBORole
 *
 * @JMS\AccessType("public_method")
 */
class UBORole
{

    /**
     * @JMS\SerializedName("dossier_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $dossierNumber;

    /**
     * @JMS\SerializedName("title")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $title;

    /**
     * @JMS\SerializedName("role_type")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $roleType;

    /**
     * @JMS\SerializedName("competency")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $competency;

    /**
     * @JMS\SerializedName("start_role_date")
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $startRoleDate;

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
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getRoleType(): ?string
    {
        return $this->roleType;
    }

    /**
     * @param string $roleType
     */
    public function setRoleType(string $roleType): void
    {
        $this->roleType = $roleType;
    }

    /**
     * @return string
     */
    public function getCompetency(): ?string
    {
        return $this->competency;
    }

    /**
     * @param string $competency
     */
    public function setCompetency(string $competency): void
    {
        $this->competency = $competency;
    }

    /**
     * @return \DateTime
     */
    public function getStartRoleDate(): ?\DateTime
    {
        return $this->startRoleDate;
    }

    /**
     * @param \DateTime $startRoleDate
     */
    public function setStartRoleDate(\DateTime $startRoleDate): void
    {
        $this->startRoleDate = $startRoleDate;
    }
}
