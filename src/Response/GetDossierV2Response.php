<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetDossierV2Response
 *
 * @JMS\AccessType("public_method")
 */
class GetDossierV2Response
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DossierV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return DossierV2
     */
    public function getOut(): ?DossierV2
    {
        return $this->out;
    }

    /**
     * @param DossierV2 $out
     */
    public function setOut(DossierV2 $out): void
    {
        $this->out = $out;
    }
}
