<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetExtractHistoryResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetExtractHistoryResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ExtractHistory")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
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