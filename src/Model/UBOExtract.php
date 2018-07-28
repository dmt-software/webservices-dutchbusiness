<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOExtract
 *
 * @JMS\AccessType("public_method")
 */
class UBOExtract
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
     * @JMS\SerializedName("source")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $source;
                                    
    /**
     * @JMS\SerializedName("data")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ExtractDocumentData")
     * @JMS\XmlElement(cdata=false)
     *
     * @var ExtractDocumentData
     */
    protected $data;
                                    
    /**
     * @JMS\SerializedName("extract_date")
     * @JMS\Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $extractDate;
                                    
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
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource(string $source): void
    {
        $this->source = $source;
    }
                                    
    /**
     * @return ExtractDocumentData
     */
    public function getData(): ?ExtractDocumentData
    {
        return $this->data;
    }

    /**
     * @param ExtractDocumentData $data
     */
    public function setData(ExtractDocumentData $data): void
    {
        $this->data = $data;
    }
                                    
    /**
     * @return \DateTime
     */
    public function getExtractDate(): ?\DateTime
    {
        return $this->extractDate;
    }

    /**
     * @param \DateTime $extractDate
     */
    public function setExtractDate(\DateTime $extractDate): void
    {
        $this->extractDate = $extractDate;
    }
}
