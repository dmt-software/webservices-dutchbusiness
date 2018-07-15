<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetExtractDocumentDataResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetExtractDocumentDataResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ExtractDocumentData")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return ExtractDocumentData
     */
    public function getOut(): ?ExtractDocumentData
    {
        return $this->out;
    }

    /**
     * @param ExtractDocumentData $out
     */
    public function setOut(ExtractDocumentData $out): void
    {
        $this->out = $out;
    }
}
