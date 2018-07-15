<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ExtractDocumentDataV2
 *
 * @JMS\AccessType("public_method")
 */
class ExtractDocumentDataV2
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
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ExtractDataV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $data;

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
     * @return ExtractDataV2
     */
    public function getData(): ?ExtractDataV2
    {
        return $this->data;
    }

    /**
     * @param ExtractDataV2 $data
     */
    public function setData(ExtractDataV2 $data): void
    {
        $this->data = $data;
    }
}
