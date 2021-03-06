<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GetLegalExtractDocumentDataV3Response
 *
 * @JMS\AccessType("public_method")
 */
class GetLegalExtractDocumentDataV3Response implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ExtractDocumentDataV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var ExtractDocumentDataV3
     */
    protected $out;
                                    
    /**
     * @return ExtractDocumentDataV3
     */
    public function getOut(): ?ExtractDocumentDataV3
    {
        return $this->out;
    }

    /**
     * @param ExtractDocumentDataV3 $out
     */
    public function setOut(ExtractDocumentDataV3 $out): void
    {
        $this->out = $out;
    }
}
