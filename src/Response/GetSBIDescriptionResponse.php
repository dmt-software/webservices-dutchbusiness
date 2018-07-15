<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetSBIDescriptionResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetSBIDescriptionResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\SBICodeInfo")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return SBICodeInfo
     */
    public function getOut(): ?SBICodeInfo
    {
        return $this->out;
    }

    /**
     * @param SBICodeInfo $out
     */
    public function setOut(SBICodeInfo $out): void
    {
        $this->out = $out;
    }
}
