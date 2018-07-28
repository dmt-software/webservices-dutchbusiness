<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ExtractDocument
 *
 * @JMS\AccessType("public_method")
 */
class ExtractDocument
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
     * @JMS\SerializedName("document_date")
     * @JMS\Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $documentDate;
                                    
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
}
