<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetLegalExtractDocumentDataV2Response
 *
 * @JMS\AccessType("public_method")
 */
class GetLegalExtractDocumentDataV2Response
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ExtractDocumentDataV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return ExtractDocumentDataV2
     */
    public function getOut(): ?ExtractDocumentDataV2
    {
        return $this->out;
    }

    /**
     * @param ExtractDocumentDataV2 $out
     */
    public function setOut(ExtractDocumentDataV2 $out): void
    {
        $this->out = $out;
    }
}
