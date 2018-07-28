<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GetExtractDocumentResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetExtractDocumentResponse implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ExtractDocument")
     * @JMS\XmlElement(cdata=false)
     *
     * @var ExtractDocument
     */
    protected $out;
                                    
    /**
     * @return ExtractDocument
     */
    public function getOut(): ?ExtractDocument
    {
        return $this->out;
    }

    /**
     * @param ExtractDocument $out
     */
    public function setOut(ExtractDocument $out): void
    {
        $this->out = $out;
    }
}
