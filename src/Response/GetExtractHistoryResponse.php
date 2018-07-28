<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GetExtractHistoryResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetExtractHistoryResponse implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ExtractHistory")
     * @JMS\XmlElement(cdata=false)
     *
     * @var ExtractHistory
     */
    protected $out;
                                    
    /**
     * @return ExtractHistory
     */
    public function getOut(): ?ExtractHistory
    {
        return $this->out;
    }

    /**
     * @param ExtractHistory $out
     */
    public function setOut(ExtractHistory $out): void
    {
        $this->out = $out;
    }
}
