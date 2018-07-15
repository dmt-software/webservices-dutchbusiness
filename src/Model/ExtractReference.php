<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ExtractReference
 *
 * @JMS\AccessType("public_method")
 */
class ExtractReference
{

    /**
     * @JMS\SerializedName("extract_id")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $extractId;

    /**
     * @JMS\SerializedName("document_date")
     * @JMS\Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $documentDate;

    /**
     * @JMS\SerializedName("change_set")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ExtractChangeSet")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $changeSet;

    /**
     * @return string
     */
    public function getExtractId(): ?string
    {
        return $this->extractId;
    }

    /**
     * @param string $extractId
     */
    public function setExtractId(string $extractId): void
    {
        $this->extractId = $extractId;
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
     * @return ExtractChangeSet
     */
    public function getChangeSet(): ?ExtractChangeSet
    {
        return $this->changeSet;
    }

    /**
     * @param ExtractChangeSet $changeSet
     */
    public function setChangeSet(ExtractChangeSet $changeSet): void
    {
        $this->changeSet = $changeSet;
    }
}
