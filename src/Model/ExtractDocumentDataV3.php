<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ExtractDocumentDataV3
 *
 * @JMS\AccessType("public_method")
 */
class ExtractDocumentDataV3
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
     * @JMS\SerializedName("data")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ExtractDataV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $data;

    /**
     * @JMS\SerializedName("source")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $source;

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
     * @return ExtractDataV3
     */
    public function getData(): ?ExtractDataV3
    {
        return $this->data;
    }

    /**
     * @param ExtractDataV3 $data
     */
    public function setData(ExtractDataV3 $data): void
    {
        $this->data = $data;
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
}
