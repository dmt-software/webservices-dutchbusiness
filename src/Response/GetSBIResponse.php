<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetSBIResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetSBIResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\SBICollection")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return SBICollection
     */
    public function getOut(): ?SBICollection
    {
        return $this->out;
    }

    /**
     * @param SBICollection $out
     */
    public function setOut(SBICollection $out): void
    {
        $this->out = $out;
    }
}
