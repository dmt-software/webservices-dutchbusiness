<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GetExtractDocumentDataV2Response
 *
 * @JMS\AccessType("public_method")
 */
class GetExtractDocumentDataV2Response implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ExtractDocumentDataV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var ExtractDocumentDataV2
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
