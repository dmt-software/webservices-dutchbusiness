<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetDossierV3Response
 *
 * @JMS\AccessType("public_method")
 */
class GetDossierV3Response
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DossierV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return DossierV3
     */
    public function getOut(): ?DossierV3
    {
        return $this->out;
    }

    /**
     * @param DossierV3 $out
     */
    public function setOut(DossierV3 $out): void
    {
        $this->out = $out;
    }
}
