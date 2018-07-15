<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetExtractHistoryDocumentDataResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetExtractHistoryDocumentDataResponse
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
