<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GetExtractHistoryDocumentDataResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetExtractHistoryDocumentDataResponse implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ExtractDocumentData")
     * @JMS\XmlElement(cdata=false)
     *
     * @var ExtractDocumentData
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
