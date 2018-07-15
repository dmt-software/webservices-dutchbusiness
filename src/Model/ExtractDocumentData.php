<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ExtractDocumentData
 *
 * @JMS\AccessType("public_method")
 */
class ExtractDocumentData
{

    /**
     * @JMS\SerializedName("document")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $document;

    /**
     * @JMS\SerializedName("dossier_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $dossierNumber;

    /**
     * @JMS\SerializedName("establishment_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $establishmentNumber;

    /**
     * @JMS\SerializedName("status")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $status;

    /**
     * @JMS\SerializedName("document_date")
     * @JMS\Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $documentDate;

    /**
     * @JMS\SerializedName("legal_entity")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\LegalEntity")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $legalEntity;

    /**
     * @JMS\SerializedName("enterprise")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Enterprise")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $enterprise;

    /**
     * @JMS\SerializedName("partnership")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\Partnership>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var Partnership[]
     */
    protected $partnership;

    /**
     * @JMS\SerializedName("establishments")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\Establishment>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var Establishment[]
     */
    protected $establishments;

    /**
     * @JMS\SerializedName("positions")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\Position>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var Position[]
     */
    protected $positions;

    /**
     * @return string
     */
    public function getDocument(): ?string
    {
        return $this->document;
    }

    /**
     * @param string $document
     */
    public function setDocument(string $document): void
    {
        $this->document = $document;
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
     * @return string
     */
    public function getEstablishmentNumber(): ?string
    {
        return $this->establishmentNumber;
    }

    /**
     * @param string $establishmentNumber
     */
    public function setEstablishmentNumber(string $establishmentNumber): void
    {
        $this->establishmentNumber = $establishmentNumber;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return \DateTime
     */
    public function getDocumentDate(): ?\DateTime
    {
        return $this->documentDate;
    }

    /**
     * @param \DateTime $documentDate
     */
    public function setDocumentDate(\DateTime $documentDate): void
    {
        $this->documentDate = $documentDate;
    }

    /**
     * @return LegalEntity
     */
    public function getLegalEntity(): ?LegalEntity
    {
        return $this->legalEntity;
    }

    /**
     * @param LegalEntity $legalEntity
     */
    public function setLegalEntity(LegalEntity $legalEntity): void
    {
        $this->legalEntity = $legalEntity;
    }

    /**
     * @return Enterprise
     */
    public function getEnterprise(): ?Enterprise
    {
        return $this->enterprise;
    }

    /**
     * @param Enterprise $enterprise
     */
    public function setEnterprise(Enterprise $enterprise): void
    {
        $this->enterprise = $enterprise;
    }

    /**
     * @return Partnership[]
     */
    public function getPartnership(): ?array
    {
        return $this->partnership;
    }

    /**
     * @param Partnership[] $partnership
     */
    public function setPartnership(array $partnership): void
    {
        $this->partnership = $partnership;
    }

    /**
     * @return Establishment[]
     */
    public function getEstablishments(): ?array
    {
        return $this->establishments;
    }

    /**
     * @param Establishment[] $establishments
     */
    public function setEstablishments(array $establishments): void
    {
        $this->establishments = $establishments;
    }

    /**
     * @return Position[]
     */
    public function getPositions(): ?array
    {
        return $this->positions;
    }

    /**
     * @param Position[] $positions
     */
    public function setPositions(array $positions): void
    {
        $this->positions = $positions;
    }
}
