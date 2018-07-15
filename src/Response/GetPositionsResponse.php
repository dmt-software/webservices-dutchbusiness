<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetPositionsResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetPositionsResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Positions")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return Positions
     */
    public function getOut(): ?Positions
    {
        return $this->out;
    }

    /**
     * @param Positions $out
     */
    public function setOut(Positions $out): void
    {
        $this->out = $out;
    }
}
